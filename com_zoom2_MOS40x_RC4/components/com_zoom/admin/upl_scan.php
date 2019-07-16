<?php
//zOOm Gallery//
/** 
-----------------------------------------------------------------------
|  zOOm Image Gallery! by Mike de Boer - a multi-gallery component    |
-----------------------------------------------------------------------

-----------------------------------------------------------------------
|                                                                     |
| Date: January, 2004                                                 |
| Author: Mike de Boer, <http://www.mikedeboer.nl>                    |
| Copyright: copyright (C) 2004 by Mike de Boer                       |
| Description: zOOm Image Gallery, a multi-gallery component for      |
|              Mambo based on RSGallery by Ronald Smit. It's the most |
|              feature-rich gallery component for Mambo!              |
| Filename: upl_scan.php                                              |
| Version: 2.0                                                        |
|                                                                     |
-----------------------------------------------------------------------
**/
$zoom->createCheckAllScript();
if ($urls){
	if (!$catid){
		?>
		<SCRIPT>
			alert("<?php echo _ZOOM_NOCAT;?>");
			location = 'index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=upload&formtype=scan';
		</SCRIPT>
		<?
		break;
	}
	/* Process all urls first */
	$temp_files = array();
	$userfile = array();
	$userfile_name = array();
	foreach ($urls as $url) {
		// Get rid of any extra white space
		$url = trim($url);
		/*
 		* Check to see if the URL is a local directory (inspired by
 		* code from Jared (hogalot)
 		*/
		if (fs_is_dir($url)) {
			echo _ZOOM_SCAN_STEP2_DESCR1." <i>$url</i> "._ZOOM_SCAN_STEP2_DESCR2."<br>";
			$handle = fs_opendir($url);
			while (($file = readdir($handle)) != false) {
				if ($file != "." && $file != "..") {
					$tag = ereg_replace(".*\.([^\.]*)$", "\\1", $file);
					$tag = strtolower($tag);
					if (($tag == "jpeg") || ($tag == "jpg") || ($tag == "gif") || ($tag == "png")) {
						/* Tack it onto userfile */
						$userfile_name[] = $file;
						if (substr($url,-1) == "/") {
							$userfile[] = fs_export_filename($url . $file);
						} else {
							$userfile[] = fs_export_filename($url . "/" . $file);
						}
					}
				}
			}
			closedir($handle);
		}else{
			// Get rid of any preceding whitespace (fix for odd browsers like konqueror)
			$url = eregi_replace("^[[:space:]]+", "", $url);
			// If the URI doesn't start with a scheme, prepend 'http://'
			if (!fs_is_file($url)) {
				if (!ereg("^(http|ftp)", $url)) {
					$url = "http://$url";
				}
			}
			/* Parse URL for name and file type */
			$url_stuff = parse_url($url);
			$name = basename($url_stuff["path"]);
			$tag = ereg_replace(".*\.([^\.]*)$", "\\1", $url);
			$tag = strtolower($tag);
			//Dont output warning messages if we cant open url
			/*
 			* Try to open the url in lots of creative ways.
 			* Do NOT use fs_fopen here because that will pre-process
 			* the URL in win32 style (ie, convert / to \, etc).
	 		*/
			$id = @fopen($url, "rb");
			if (!ereg("http", $url)) {
				if (!$id) $id = @fopen("http://$url", "rb");
				if (!$id) $id = @fopen("http://$url/", "rb");
			}
			if (!$id) $id = @fopen("$url/", "rb");
			if ($id) {
				echo "processing file...".urldecode($url),"<br>";
			} else {
				echo "Could not open url: '$url'";
				continue;
			}
			// copy file locally
			$file = $absolute_path . "/uploadfiles/photo.$name";
			$od = fs_fopen($file, "wb");
			if ($id && $od) {
				while (!feof($id)) {
					fwrite($od, fread($id, 65536));
				}
				fclose($id);
				fclose($od);
			}
			// Make sure we delete this file when we're through...
			$temp_files[$file]++;
			// If this is an image - add it to the processor array
			if (($tag == "jpeg") || ($tag == "jpg") || ($tag == "gif") || ($tag == "png")) {
				// Tack it onto userfile
				$userfile_name[] = $name;
				$userfile[] = $file;
			} else {
				// Slurp the file
				echo "Parsing ".  $url . " for images...<br>";
				$fd = fs_fopen ($file, "r");
				$contents = fread ($fd, fs_filesize ($file));
				fclose ($fd);
				// We'll need to add some stuff to relative links
				$base_url = $url_stuff["scheme"] . '://' . $url_stuff["host"];
				$base_dir = '';
				if ($url_stuff["port"]) {
	  			$base_url .= ':' . $url_stuff["port"];
				}
				// Hack to account for broken dirname
				if (ereg("/$", $url_stuff["path"])) {
					$base_dir = $url_stuff["path"];
				} else {
					$base_dir = dirname($url_stuff["path"]);
				}
				// Make sure base_dir ends in a / ( accounts for empty base_dir )
				if (!ereg("/$", $base_dir)) {
					$base_dir .= '/';
				}
				$things = array();
				while ($cnt = eregi('(src|href)="?([^" >]+\.(jpeg|jpg|gif|png))[" >]',
						    $contents, 
						    $results)) {
					$things[$results[2]]++;
					$contents = str_replace($results[2], "", $contents);
					$userfile_name[] = $results[2];
				}
				// Add each unique link to an array we scan later
				foreach (array_keys($things) as $thing) {
					/* 
				 	* Some sites (slashdot) have images that start with // and this
		 			* confuses Gallery.  Prepend 'http:'
			 		*/
					if (!strcmp(substr($thing, 0, 2), "//")) {
						$thing = "http:$thing";
					}
					// Absolute Link ( http://www.foo.com/bar )
					if (substr($thing, 0, 4) == 'http') {
						$userfile[] = $thing;
					// Relative link to the host ( /foo.bar )
					} elseif (substr($thing, 0, 1) == '/') {
						$userfile[] = $base_url . $thing;
					// Relative link to the dir ( foo.bar )
					} else {
						$userfile[] = $base_url . $base_dir . $thing;
					}
				}
			}// END if is-image?
		}// END if is_dir?
		if(sizeof($userfile) > 0){
			$zoom->createCheckAllScript();
			?>
			<h2><?php echo _ZOOM_SCAN_STEP2;?></h2>
			<form name="select_img" method="post"action="index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=upload&formtype=scan">
			<table cellpadding="0" cellspacing="0" border="0" width="95%">
			<tr class="sectiontableheader">
				<td width="50" class="sectiontableheader">Check</td><td class="sectiontableheader"><?php echo _ZOOM_FILENAME;?></td><td class="sectiontableheader">Preview</td>
			</tr>
			<?php
			$tabcnt = 0;
			$zoom->_counter = 0;
			foreach($userfile as $image){
				if($tabcnt > 1)
					$tabcnt = 0;
				$imginfo = getimagesize($image);
				$ratio = max($imginfo[0], $imginfo[1]) / $zoom->_CONFIG['size'];
				$ratio = max($ratio, 1.0);
				$imgWidth = (int)($imginfo[0] / $ratio);
				$imgHeight = (int)($imginfo[1] / $ratio);
				echo '<tr class="'.$zoom->_tabclass[$tabcnt].'"><td align="center"><input type="checkbox" name="scannedimg[]" value="'.$zoom->_counter.'" checked></td><td>'.$image.'</td><td><img src="'.$image.'" border="0" width="'.$imgWidth.'" height="'.$imgHeight.'"></td></tr>';
				$tabcnt++ ;
				$zoom->_counter++;
			}
			?>
			<tr>
				<td  height="20" class="sectiontableheader" align="center"><input type="checkbox" name="checkall" onclick="checkUncheckAll(this);" checked></td>
				<td  height="20" class="sectiontableheader" colspan="2">
					<strong><?php echo _ZOOM_HD_CHECKALL;?></strong>
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center"><br><input class="button" type="submit" value="<?echo _ZOOM_UPLOAD;?>" name="submit"></td>
			</tr>
			</table>
			<input type="hidden" name="catid" value="<?php echo $catid;?>">
			<?php
			$zoom->_counter = 0;
			foreach($userfile as $file){
				$name = $userfile_name[$zoom->_counter];
				?>
				<input type="hidden" name="userfile[]" value="<?php echo $file;?>">
				<input type="hidden" name="userfile_name[]" value="<?php echo $name;?>">
				<?php
				$zoom->_counter++;
			}
			if(isset($setFilename))
				echo '<input type="hidden" name="setFilename" value="'.$imgname.'">';
			else
				echo '<input type="hidden" name="imgname" value="'.$imgname.'">';
			?>
			</form>
			<?php
		}else{
			echo "<center><span class=\"small\">"._ZOOM_NOIMG."</span></center>";
		}// END if userfiles found?
	}// END foreach urls...
	echo "<b>".count($userfile)." "._ZOOM_ALERT_IMGFOUND."</b>";
}elseif($scannedimg){
	// Now, finally, it's time to start uploading...
	echo '<h2>'._ZOOM_SCAN_STEP3.'</h2>';
	$catdir = $zoom->getDir($catid);
	$i = 0;
	foreach($scannedimg as $image){
		$name = urldecode($userfile_name[$image]);
		// Get the actual image (with path and everything)...
		$theImage = $userfile[$image];
		// replace every space-character with a single "_"
		$filename = ereg_replace(" ", "_", $name);
		// Get rid of extra underscores
		$filename = ereg_replace("_+", "_", $name);
		$filename = ereg_replace("(^_|_$)", "", $name);
	
		if (!empty($usercaption) && is_array($usercaption)){
    		$caption = $zoom->removeTags(array_shift($usercaption));
		}
		$tag = ereg_replace(".*\.([^\.]*)$", "\\1", $filename);
		$tag = strtolower($tag);
		if ($filename != ""){
			//Check for right format
			if (($tag == "jpeg") || ($tag == "jpg") || ($tag == "gif") || ($tag == "png")){
				$imagepath = $zoom->_CONFIG['imagepath'];
				if (fs_copy("$userfile[$image]", "$imagepath$catdir/$filename")){
					//resizing to thumbnail
					$size = $zoom->_CONFIG['size'];
					$file = $imagepath.$catdir."/".$filename;
					$desfile = $imagepath.$catdir."/thumbs/".$filename;
					if($zoom->createThumb($file, $desfile, $size, $filename)){
						//Save image into database
						if(!$caption)
							$caption = $zoom->_CONFIG['tempDescr'];
						if (isset($setFilename))
							$name = $filename;
						else
							$name = $imgname;
						$zoom->saveImage($filename, $name, $caption, $catid);
						$i++;
					}else{
						$err_num++;
						$err_names[$err_num] = $filename;
						$err_types[$err_num] = "Error resizing image/ creating thumbnail";
					} // end of if-statement
				}
				else{
					// some error occured while moving file, register this...
					$err_num++;
					$err_names[$err_num] = $filename;
					$err_types[$err_num] = _ZOOM_ALERT_MOVEFAILURE;
				}
			}
			else{
				//Not the right format, register this...
				$err_num++;
				$err_names[$err_num] = $filename;
				$err_types[$err_num] = _ZOOM_ALERT_WRONGFORMAT_MULT;
			}
		}
		else{
			// no picture seems to be uploaded, register this...
			$err_num++;
			$err_names[$err_num] = $filename;
			$err_types[$err_num] = _ZOOM_ALERT_NOPICSELECTED_MULT;
		}
	} // end of foreach-loop
	$zoom->displayErrors($err_num, $err_names, $err_types);
	echo "<b>".$i." "._ZOOM_ALERT_UPLOADSOK."</b><br>";
	echo '<a href="index.php?option=com_zoom&Itemid='.$Itemid.'&page=admin">'._ZOOM_BACK.'</a>';
}else{
	// Display form...
	$zoom->createFormControlScript("scan_form");
	?>
	<h2><?php echo _ZOOM_SCAN_STEP1;?></h2>
	<form name="scan_form" method="POST" action="index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=upload&formtype=scan">
	<?php echo _ZOOM_SCAN_STEP1_DESCR;?>
	<br>
	<center>
	<table border="0">
	<tr>
		<td><?php echo _ZOOM_FORM_INGALLERY.": ";?></td>
		<td>
			<?php echo $zoom->createCatDropdown('catid', '<OPTION value="">---&nbsp;'._ZOOM_PICK.'&nbsp;---</OPTION>');?>
		</td>
	</tr>
	<tr>
		<td><?php echo _ZOOM_FORM_LOCATION;?>: </td>
		<td>
			<input type="text" name="urls[]" size=40 class="inputbox">
		</td>
	</tr>
	<tr>
		<td valign="center"><?php echo _ZOOM_NAME;?>: </td><td valign="center"><input type="text" name="imgname" size="30" value="<?php echo $zoom->_CONFIG['tempName'];?>" class="inputbox"></td>
	</tr>
	<tr>
		<?php if($zoom->_CONFIG['autonumber']) echo "<script>toggleDisabled('name');</script>";?>
		<td>&nbsp;</td><td><input type="checkbox" name="setFilename" value="1" onclick="toggleDisabled('name')"<?php if($zoom->_CONFIG['autonumber']) echo " checked";?>> <?php echo _ZOOM_FORM_SETFILENAME;?></td>
	</tr>
	<tr>
		<td><?echo _ZOOM_DESCRIPTION;?>: </td><td><textarea class="inputbox" cols="25" rows="5" name="descr"><?php echo $zoom->_CONFIG['tempDescr'];?></textarea></td>
	</tr>
	</table>
	<input type="submit" value="Submit URL or directory" name="submit" class="button">
	</center>
	<?php
} //END IF urls?
if ($temp_files) {
	// Clean up the temporary url file
	foreach ($temp_files as $tf => $junk) {
		fs_unlink($tf);
	}
} 
?>