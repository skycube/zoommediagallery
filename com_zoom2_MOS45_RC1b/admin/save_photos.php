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
| Filename: save_photos.php                                           |
| Version: 2.0                                                        |
|                                                                     |
-----------------------------------------------------------------------
**/
// MOS Intruder Alerts
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
if (!$catid){
	?>
	<SCRIPT>
		alert("<?echo _ZOOM_NOCAT;?>");
		location = 'index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=upload&formtype=multiple';
	</SCRIPT>
	<?
	break;
}
if ($urls) {
?>
<span class=title>Fetching Urls...</span>
<br>
<?php
	/* Process all urls first */
	$temp_files = array();
	foreach ($urls as $url) {
		/* Get rid of any extra white space */
		$url = trim($url);
		/*
	 	* Check to see if the URL is a local directory (inspired by
	 	* code from Jared (hogalot)
	 	*/
		if (fs_is_dir($url)) {
			echo "Processing <i>$url</i> as a local directory";
			$handle = fs_opendir($url);
			while (($file = readdir($handle)) != false) {
				if ($file != "." && $file != "..") {
					$tag = ereg_replace(".*\.([^\.]*)$", "\\1", $file);
					$tag = strtolower($tag);
					if (($tag == "jpeg") || ($tag == "jpg") || ($tag == "gif") || ($tag == "png")) {
						/* Tack it onto userfile */
						if (substr($url,-1) == "/") {
							$image_tags[] = fs_export_filename($url . $file);
						} else {
							$image_tags[] = fs_export_filename($url . "/" . $file);
						}
					}
				}
			}
			closedir($handle);
			continue;
		}
		/* Get rid of any preceding whitespace (fix for odd browsers like konqueror) */
		$url = eregi_replace("^[[:space:]]+", "", $url);
		/* If the URI doesn't start with a scheme, prepend 'http://' */
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
		/* Dont output warning messages if we cant open url */
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
		/* copy file locally */
		$file = $mosConfig_absolute_path . "/uploadfiles/photo.$name";
		$od = fs_fopen($file, "wb");
		if ($id && $od) {
			while (!feof($id)) {
			fwrite($od, fread($id, 65536));
			}
			fclose($id);
			fclose($od);
		}
		/* Make sure we delete this file when we're through... */
		$temp_files[$file]++;
		/* If this is an image or movie - add it to the processor array */
		if (($tag == "jpeg") || ($tag == "jpg") || ($tag == "gif") || ($tag == "png") || !strcmp($tag, "zip")) {
			/* Tack it onto userfile */
			$userfile_name[] = $name;
			$userfile[] = $file;
		} else {
			/* Slurp the file */
			echo "Parsing".  $url . "for images...<br>";
			$fd = fs_fopen ($file, "r");
			$contents = fread ($fd, fs_filesize ($file));
			fclose ($fd);
			/* We'll need to add some stuff to relative links */
			$base_url = $url_stuff["scheme"] . '://' . $url_stuff["host"];
			$base_dir = '';
			if ($url_stuff["port"]) {
		  	$base_url .= ':' . $url_stuff["port"];
			}
			/* Hack to account for broken dirname */
			if (ereg("/$", $url_stuff["path"])) {
				$base_dir = $url_stuff["path"];
			} else {
				$base_dir = dirname($url_stuff["path"]);
			}
			/* Make sure base_dir ends in a / ( accounts for empty base_dir ) */
			if (!ereg("/$", $base_dir)) {
				$base_dir .= '/';
			}
			$things = array();
			while ($cnt = eregi('(src|href)="?([^" >]+\.(jpeg|jpg|gif|png))[" >]',
					    $contents, 
					    $results)) {
				$things[$results[2]]++;
				$contents = str_replace($results[2], "", $contents);
			}
			/* Add each unique link to an array we scan later */
			foreach (array_keys($things) as $thing) {
				/* 
			 	* Some sites (slashdot) have images that start with // and this
			 	* confuses Gallery.  Prepend 'http:'
			 	*/
				if (!strcmp(substr($thing, 0, 2), "//")) {
					$thing = "http:$thing";
				}
				/* Absolute Link ( http://www.foo.com/bar ) */
				if (substr($thing, 0, 4) == 'http') {
					$image_tags[] = $thing;
				/* Relative link to the host ( /foo.bar )*/
				} elseif (substr($thing, 0, 1) == '/') {
					$image_tags[] = $base_url . $thing;
				/* Relative link to the dir ( foo.bar ) */
				} else {
					$image_tags[] = $base_url . $base_dir . $thing;
				}
			}
			/* Tell user how many links we found, but delay processing */
			echo "Found " . count($image_tags) . " Images.<br>";
		}
	}
	$caption = $zoom->_CONFIG['tempDescr'];
} /* if ($urls) */
//determine gallery_id with $catdir
$catdir = $zoom->getDir($catid);
// teller:
$i = 0;
// variables that will count errors:
$err_num = 0;
$err_names = Array();
$err_types = Array();
while (sizeof($userfile)){
	$image = array_shift($userfile);
	$name = urldecode(array_shift($userfile_name));
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
			if (move_uploaded_file("$image", "$imagepath$catdir/$filename")){
				//Save image into database
				$zoom->saveImage($filename, $caption, $catid);
			}
			else{
				// some error occured during writing data into database, register this...
				$err_num++;
				$err_names[$err_num] = $filename;
				$err_types[$err_num] = _ZOOM_ALERT_DBFAILURE;
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
	//resizing to thumbnail
	if ($err_num > 0){
		// go on with the while-loop, skip resizing to thumbnail
	}else{
		$size = $zoom->_CONFIG['size'];
		$file = $imagepath.$catdir."/".$filename;
		$desfile = $imagepath.$catdir."/thumbs/".$filename;
		switch ($zoom->_CONFIG['conversiontype']){
			//Imagemagick
			case 1:
				$zoom->createThumbIM($file, $desfile);
				$i++;
				break;
			//NETPBM
			case 2:
				$zoom->createThumbNETPBM($file,$desfile,$size,$filename);
				$i++;
				break;
			//GD2
			case 3:
				if($zoom->createThumbGD2($file, $desfile, $size)){
					$i++;
				}else{
					$err_num++;
					$err_names[$err_num] = $filename;
					$err_types[$err_num] = "Error resizing image/ creating thumbnail";
				}
				break;
		} // end of switch
	} // end of if-statement
} // end of while-loop
$zoom->displayErrors($err_num, $err_names, $err_types);
echo "<b>".$i." "._ZOOM_ALERT_UPLOADSOK."</b><br>";
echo '<a href="index.php?option=com_zoom&Itemid='.$Itemid.'&page=admin">Terug naar Admin scherm</a>';
?>