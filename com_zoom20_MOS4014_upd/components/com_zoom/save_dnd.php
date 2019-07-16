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
| Filename: save_dnd.php                                              |
| Version: 2.0                                                        |
|                                                                     |
-----------------------------------------------------------------------
**/
echo "Processing images from list...<br><br>";
	if (!$catid){
		echo "No category specified, please select one from the list.";
		exit();
	}
	/*
	* Iterate over all received files.
	* PHP > 4.2 / 4.3 ? will save the file information into the
	* array $_FILES[]. Before these versions, the data was saved into
	* $HTTP_POST_FILES[]
	*/
	include('../../configuration.php');
	include('../../language/'.$lang.'/lang_com_zoom.php');

	// redefine the mambo database object...
	require ("database.php");
	$database = new database();

	// Create zOOm Image Gallery object
	require_once('zoom.class.php');
	$zoom = new zoom(0);
	
	// counter:
 	$i = 0;
 	$caption = $zoom->_CONFIG['tempDescr'];
	foreach($_FILES as $tagname=>$objekt){
 		// get the temporary name (e.g. /tmp/php34634.tmp)
 		$tempName = $objekt['tmp_name'];
	 	// get the real filename
 		$realName = urldecode($objekt['name']);
 		// replace every space-character with a single "_"
 		$realName = ereg_replace(" ", "_", $realName);
 		// Get rid of extra underscores
 		$realName = ereg_replace("_+", "_", $realName);
 		$realName = ereg_replace("(^_|_$)", "", $realName);	 
 		$tag = ereg_replace(".*\.([^\.]*)$", "\\1", $realName);
 		$tag = strtolower($tag);
 		//determine zoom_dir with $catid
 		$catdir = $zoom->GetDir($catid);
	 	// variables that will count errors:
 		$err_num = 0;
 		$err_names = Array();
 		$err_types = Array();
 		$imagepath = "../../".$zoom->_CONFIG['imagepath'];
 		if ($realName != ""){
 			echo _ZOOM_INFO_PROCESSING." ".$realName."...";
	 		//Check for right format
			if (($tag == "jpeg") || ($tag == "jpg") || ($tag == "gif") || ($tag == "png")){
				if (move_uploaded_file("$tempName","$imagepath$catdir/$realName")){
					//Save name into database
					$zoom->saveImage($realName, $caption, $catid);
				}
				else{
					// some error occured while moving the file to the server...
					$err_num++;
					$err_names[$err_num] = $realName;
					$err_types[$err_num] = _ZOOM_ALERT_MOVEFAILURE;
				}
			}
			else{
				//Not the right format, register this...
				$err_num++;
				$err_names[$err_num] = $realName;
				$err_types[$err_num] = _ZOOM_ALERT_WRONGFORMAT_MULT;
			}
 		}
 		else{
	 		// no image seems to be uploaded, register this...
	 		$err_num++;
			$err_names[$err_num] = $realName;
			$err_types[$err_num] = _ZOOM_ALERT_NOPICSELECTED_MULT;
 		}
 		//resizing to thumbnail
 		if ($err_num > 0){
			// go on with the for-loop, skip resizing to thumbnail
 		}else{
			switch ($zoom->_CONFIG['conversiontype']){
				//Imagemagick
				case 1:
					$file_in = $imagepath.$catdir."/".$realName;
					$file_out = $imagepath.$catdir."/thumbs/".$realName;
					$IM_path = $zoom->_CONFIG['IM_path'];
					$size = $zoom->_CONFIG['size'];
					$cmd = $IM_path."convert -resize $size $file_in $file_out";
					exec($cmd);
					$i++;
					echo "<b>"._ZOOM_INFO_DONE."</b><br>";
					break;
				//NETPBM
				case 2:
					$file 		= $imagepath.$catdir."/".$realName;
					$desfile 	= $imagepath.$catdir."/thumbs/".$realName;
					$maxsize 	= $size;
					$origname 	= $name;
					$quality 	= $JPEGquality;
					$zoom->createThumbNETPBM($file,$desfile,$maxsize,$origname,$quality);
					$i++;
					echo "<b>"._ZOOM_INFO_DONE."</b><br>";
					break;
				//GD2
				case 3:
					$file 		= $imagepath.$catdir."/".$realName;
					$desfile 	= $imagepath.$catdir."/thumbs/".$realName;
					$maxsize 	= $size;
					$quality 	= $JPEGquality;
					$zoom->createThumbGD2($file, $desfile, $quality, $maxsize);
					$i++;
					echo "<b>"._ZOOM_INFO_DONE."</b><br>";
					break;
			} // end of switch conversiontype?
 		} // end of if-statement errors?
	} // end of for-loop FILES
	$zoom->displayErrors($err_num, $err_names, $err_types);
	echo "<b>".$i." "._ZOOM_ALERT_UPLOADSOK."</b><br>";
?>