<?
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
| Filename: upl_single.php                                            |
| Version: 2.0                                                        |
|                                                                     |
-----------------------------------------------------------------------
**/
if ($submit)
	{
	if (!$catid){
		?>
		<SCRIPT>
			alert("<?echo _ZOOM_NOCAT;?>");
			location = 'index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=upload&formtype=single';
		</SCRIPT>
		<?
		break;
	}
	if ($image_name != ""){
		$tag = ereg_replace(".*\.([^\.]*)$", "\\1", $image_name);
		$tag = strtolower($tag);
		//Check for right format
		if (($tag == "jpeg") || ($tag == "jpg") || ($tag == "gif") || ($tag == "png") || ($tag == "zip")){
			$imagepath = $zoom->_CONFIG['imagepath'];
			$catdir = $zoom->getDir($catid);
			$filename = urldecode($image_name);
			// if your platform is Windows, then the filename will be corrected (if necessary)...
			fs_import_filename($filename);
			// replace every space-character with a single "_"
			$filename = ereg_replace(" ", "_", $filename);
			// Get rid of extra underscores
			$filename = ereg_replace("_+", "_", $filename);
			$filename = ereg_replace("(^_|_$)", "", $filename);
			//set gallery_id with $catdir
			$row2 = $zoom->getCatbyDir($catdir);
			$xx = $row2['id'];
			if (!isset($descr))
				$descr = $zoom->_CONFIG['tempDescr'];
			if ($tag == "zip"){
				// Extract functions
				$base_Dir = fs_export_filename($absolute_path."/uploadfiles/");
				if (move_uploaded_file("$image", "$base_Dir$filename")){
					$tmpdir = uniqid("zoom_");
					$extractdir = fs_export_filename($base_Dir.$tmpdir);
					$archivename = fs_export_filename($base_Dir.$filename);
					if ($zoom->extractArchive($extractdir, $archivename)){
						// Extraction success, now scan the directory...
						$images = $zoom->parseDir($extractdir, 0);
						foreach ($images as $image){
							$image_new = urldecode($image);
							if (isset($setFilename))
								$name = $image_new;
							else
								$name = $zoom->_CONFIG['tempName'];
							// replace every space-character with a single "_"
							$image_new = ereg_replace(" ", "_", $image_new);
							// Get rid of extra underscores
							$image_new = ereg_replace("_+", "_", $image_new);
							$image_new = ereg_replace("(^_|_$)", "", $image_new);
							fs_copy("$extractdir/$image", "$imagepath$catdir/$image_new");
							
							//resizing to thumbnail
							$size = $zoom->_CONFIG['size'];
							$file = $imagepath.$catdir."/".$image_new;
							$desfile = $imagepath.$catdir."/thumbs/".$image_new;
							if($zoom->createThumb($file, $desfile, $size, $image_new)){
								//Save image into database
								$zoom->saveImage($image_new, $name,$descr,$xx);
								?>
								<SCRIPT>
									alert("<?echo _ZOOM_ALERT_UPLOADOK;?>");
									location = 'index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=upload&formtype=single';	
								</SCRIPT>
								<?
							}else{
								?>
								<SCRIPT>
									alert("Error resizing image/ creating thumbnail");
									location = 'index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=upload&formtype=single';
								</SCRIPT>
								<?
							}
						}
						$zoom->deldir($extractdir);
						fs_unlink($archivename);
					}else{
						?>
						<SCRIPT>
							alert("Error occured while extracting archive!");
							location = 'index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=upload&formtype=single';
						</SCRIPT>
						<?
					}
				}
			}else{
				// File is an image...
				if (move_uploaded_file("$image", "$imagepath$catdir/$filename")){
					//resizen to thumbnail
					$size = $zoom->_CONFIG['size'];
					$file = $imagepath.$catdir."/".$filename;
					$desfile = $imagepath.$catdir."/thumbs/".$filename;
					if($zoom->createThumb($file, $desfile, $size, $filename)){
						//Save image into database
						$zoom->saveImage($filename, $name,$descr,$xx);
						?>
						<SCRIPT>
							alert("<?echo _ZOOM_ALERT_UPLOADOK;?>");
							location = 'index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=upload&formtype=single';	
						</SCRIPT>
						<?
					}else{
						?>
						<SCRIPT>
							alert("Error resizing image/ creating thumbnail");
							location = 'index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=upload&formtype=single';
						</SCRIPT>
						<?
					}
				}
				else{
					//Back to uploadscreen
				}
			}
		}
		else{
			//Not the right format, back to uploadscreen
			?>
			<SCRIPT>
				alert("<?echo _ZOOM_ALERT_WRONGFORMAT;?>");
				location = 'index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=upload&formtype=single';
			</SCRIPT>
			<?
		}
	}
	else{
		?>
		<SCRIPT>
			alert("<?echo _ZOOM_ALERT_NOPICSELECTED;?>");
			location = 'index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=upload&formtype=single';
		</SCRIPT>
		<?
	}
}
else{
	//Show upload screen
	$sql = "SELECT * FROM ".$dbprefix."zoom";
	$result = $database->openConnectionWithReturn($sql);
	$zoom->createFormControlScript("selection");
	?>
	<form enctype="multipart/form-data" name="selection" method="POST" action="index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=upload&formtype=single">
	<center>
	<table border="0">
	<tr>
		<td valign="center"><?echo _ZOOM_FORM_IMAGEFILE;?>:</td><td valign="center"><input class="inputbox" type="file" name="image" size="30"><br><br></td>
	</tr>
	<tr>
		<td><?php echo _ZOOM_FORM_INGALLERY;?>:</td>
		<td>
			<?php
			echo $zoom->createCatDropdown('catid','<OPTION value="">---&nbsp;'._ZOOM_PICK.'&nbsp;---</OPTION>');
			?>
		</td>
	</tr>
	<tr>
		<td valign="center"><?php echo _ZOOM_NAME;?>: </td><td valign="center"><input type="text" name="name" size="30" value="<?php echo $zoom->_CONFIG['tempName'];?>" class="inputbox"></td>
	</tr>
	<tr>
		<?php if($zoom->_CONFIG['autonumber']) echo "<script>toggleDisabled('name');</script>";?>
		<td>&nbsp;</td><td><input type="checkbox" name="setFilename" value="1" onclick="toggleDisabled('name')"<?php if($zoom->_CONFIG['autonumber']) echo " checked";?>> <?php echo _ZOOM_FORM_SETFILENAME;?></td>
	</tr>
	<tr>
		<td><?echo _ZOOM_DESCRIPTION;?>: </td><td><textarea class="inputbox" cols="25" rows="5" name="descr"><?php echo $zoom->_CONFIG['tempDescr'];?></textarea></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><br><br><input class="button" type="submit" name="submit" value="<?echo _ZOOM_BUTTON_UPLOAD;?>"></td>
	</tr>
	</table></form></center>
	<?
	}
?>