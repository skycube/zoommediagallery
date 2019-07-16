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
if (!$catid){
	?>
	<SCRIPT>
		alert("<?echo _ZOOM_NOCAT;?>");
		location = 'index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=upload&formtype=multiple';
	</SCRIPT>
	<?
	break;
}
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
	$theName = array_shift($imgname);
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
						$name = $theName;
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
} // end of while-loop
$zoom->displayErrors($err_num, $err_names, $err_types);
echo "<b>".$i." "._ZOOM_ALERT_UPLOADSOK."</b><br>";
echo '<a href="index.php?option=com_zoom&Itemid='.$Itemid.'&page=admin">'._ZOOM_BACK.'</a>';
?>