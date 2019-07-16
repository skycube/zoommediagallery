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
if ($submit1){
	if (!$catdir){
		?>
		<SCRIPT>
			alert("<?echo _ZOOM_NOCAT;?>");
			location = 'index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=upload&formtype=multiple';
		</SCRIPT>
		<?
		break;
	}
	//determine gallery_id with $catdir
	$row2 = $zoom->getCatbyDir($catdir);
	$xx = $row2['id'];
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
		$name = ereg_replace(" ", "_", $name);
		// Get rid of extra underscores
		$name = ereg_replace("_+", "_", $name);
		$name = ereg_replace("(^_|_$)", "", $name);
		
		if (!empty($usercaption) && is_array($usercaption)){
	    	$caption = $zoom->removeTags(array_shift($usercaption));
		}
		$tag = ereg_replace(".*\.([^\.]*)$", "\\1", $name);
		$tag = strtolower($tag);
		if ($name != ""){
			//Check for right format
			if (($tag == "jpeg") || ($tag == "jpg") || ($tag == "gif") || ($tag == "png")){
				$imagepath = $zoom->_CONFIG['imagepath'];
				if (move_uploaded_file("$image", "$imagepath$catdir/$name")){
					//Save name into database
					$zoom->saveImage($name, $caption, $xx);
				}
				else{
					// some error occured during writing data into database, register this...
					$err_num++;
					$err_names[$err_num] = $name;
					$err_types[$err_num] = _ZOOM_ALERT_DBFAILURE;
				}
			}
			else{
				//Not the right format, register this...
				$err_num++;
				$err_names[$err_num] = $name;
				$err_types[$err_num] = _ZOOM_ALERT_WRONGFORMAT_MULT;
			}
		}
		else{
			// no picture seems to be uploaded, register this...
			$err_num++;
			$err_names[$err_num] = $name;
			$err_types[$err_num] = _ZOOM_ALERT_NOPICSELECTED_MULT;
		}
		//resizing to thumbnail
		if ($err_num > 0){
			// go on with the while-loop, skip resizing to thumbnail
		}else{
			switch ($zoom->_CONFIG['conversiontype']){
				//Imagemagick
				case 1:
					$file_in = $imagepath.$catdir."/".$name;
					$file_out = $imagepath.$catdir."/thumbs/".$name;
					$size = $zoom->_CONFIG['size'];
					$IM_path = $zoom->_CONFIG['IM_path'];
					$cmd = $IM_path."convert -resize $size $file_in $file_out";
					exec($cmd);
					$i++;
					break;
				//NETPBM
				case 2:
					$file 		= $imagepath.$catdir."/".$name;
					$desfile 	= $imagepath.$catdir."/thumbs/".$name;
					$maxsize 	= $size;
					$origname 	= $name;
					$quality 	= $zoom->_CONFIG['JPEGquality'];
					$zoom->createThumbNETPBM($file,$desfile,$maxsize,$origname,$quality);
					$i++;
					break;
				//GD2
				case 3:
					$file 		= $imagepath.$catdir."/".$name;
					$desfile 	= $imagepath.$catdir."/thumbs/".$name;
					$maxsize 	= $size;
					$quality 	= $zoom->_CONFIG['JPEGquality'];
					$zoom->createThumbGD2($file, $desfile, $quality, $maxsize);
					$i++;
					break;
			} // end of switch
		} // end of if-statement
	} // end of while-loop
	$zoom->displayErrors($err_num, $err_names, $err_types);
	echo "<b>".$i." "._ZOOM_ALERT_UPLOADSOK."</b><br>";
	echo '<a href="index.php?option=com_zoom&Itemid=".$Itemid."&page=admin">Terug naar Admin scherm</a>';	
} // end of if-statement (submit?)

?>