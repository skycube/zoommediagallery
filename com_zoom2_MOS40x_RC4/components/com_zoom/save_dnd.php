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
	$catid = $_REQUEST['catid'];
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

	// redefine the mambo database object...
	require ("database.php");
	$database = new database();

	// Create zOOm Image Gallery object
	require_once('classes/zoom.class.php');
	$zoom = new zoom();
	$zoom->_isAdmin = true; //set this manually, so language file can be read completely...
	
	// inclusion of filesystem-functions, platform dependent.
	if($zoom->isWin())
		include($absolute_path.'/components/com_zoom/classes/fs_win32.php');
	else
		include($absolute_path.'/components/com_zoom/classes/fs_unix.php');
	
	if (file_exists("language/".$lang.".php") ) { 
		include_once("language/".$lang.".php");
	} else { 
		include_once("language/english.php");
	}
	// counter:
 	$i = 0;
 	$caption = $zoom->_CONFIG['tempDescr'];
	foreach($_FILES as $tagname=>$objekt){
		if ($zoom->_CONFIG['autonumber'])
			$name = $zoom->_CONFIG['tempName']." ".($i+1);
		else
			$name = $zoom->_CONFIG['tempName'];
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
					//Save image into database
					$zoom->saveImage($realName, $name, $caption, $catid);
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
 		if ($err_num <= 0){
 			$size = $zoom->_CONFIG['size'];
			$file = $imagepath.$catdir."/".$realName;
			$desfile = $imagepath.$catdir."/thumbs/".$realName;
			if($zoom->createThumb($file, $desfile, $size, $realName)){
				$i++;
				echo "<b>"._ZOOM_INFO_DONE."</b><br>";
			}else{
				$err_num++;
				$err_names[$err_num] = $realName;
				$err_types[$err_num] = "Error resizing image/ creating thumbnail";
			}
 		} // end of if-statement errors?
	} // end of for-loop FILES
	$zoom->displayErrors($err_num, $err_names, $err_types);
	echo "<b>".$i." "._ZOOM_ALERT_UPLOADSOK."</b><br>";
?>