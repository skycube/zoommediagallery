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
// MOS Intruder Alerts
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
if ($submit)
	{
	if (!$catid)
		{
		?>
		<SCRIPT>
			alert("<?echo _ZOOM_NOCAT;?>");
			location = 'index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=upload&formtype=single';
		</SCRIPT>
		<?
		break;
		}
	if ($image_name != ""){
		//Check for right format
		if (($image_type == "image/pjpeg") || ($image_type == "image/jpeg") || ($image_type == "image/gif") || ($image_type == "image/png")){
			$catdir = $zoom->getDir($catid);
			$filename = urldecode($image_name);
			// replace every space-character with a single "_"
			$filename = ereg_replace(" ", "_", $filename);
			// Get rid of extra underscores
			$filename = ereg_replace("_+", "_", $filename);
			$filename = ereg_replace("(^_|_$)", "", $filename);
			$imagepath = $zoom->_CONFIG['imagepath'];
			if (move_uploaded_file("$image", "$imagepath$catdir/$filename")){
				//gallery_id bepalen mbv $catdir
				$row2 = $zoom->getCatbyDir($catdir);
				$xx = $row2['id'];
				//Save image into database
				$zoom->saveImage($filename,$descr,$xx);
			}
			else{
				//Back to uploadscreen
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
	//resizen to thumbnail
	$size = $zoom->_CONFIG['size'];
	$file = $imagepath.$catdir."/".$filename;
	$desfile = $imagepath.$catdir."/thumbs/".$filename;
	switch ($zoom->_CONFIG['conversiontype']){
		//Imagemagick
		case 1:
			$zoom->createThumbIM($file, $desfile)
			?>
			<SCRIPT>
				alert("<?echo _ZOOM_ALERT_UPLOADOK;?>");
				location = 'index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=upload&formtype=single';	
			</SCRIPT>
			<?
			break;
		//NETPBM
		case 2:
			$zoom->createThumbNETPBM($file,$desfile,$size,$filename);
			?>
			<SCRIPT>
				alert("<?echo _ZOOM_ALERT_UPLOADOK;?>");
				location = 'index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=upload&formtype=single';	
			</SCRIPT>
			<?
			break;
		//GD2
		case 3:
			$zoom->createThumbGD2($file, $desfile, $size);
			?>
			<SCRIPT>
				alert("<?echo _ZOOM_ALERT_UPLOADOK;?>");
				location = 'index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=upload&formtype=single';	
			</SCRIPT>
			<?
			break;
	}
}
else{
	//Show upload screen
	$sql = "SELECT * FROM ".$mosConfig_dbprefix."zoom";
	$result = $database->openConnectionWithReturn($sql);
	//$result = mysql_query($sql);
	?>
	<form enctype="multipart/form-data" name="selection" method="POST" action="index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=upload&formtype=single">
	<CENTER><br><br>
	<TABLE border="0">
	<TR>
		<TD><?echo _ZOOM_FORM_IMAGEFILE;?>:</TD><TD><input class="inputbox" type="file" name="image" size="30"><br><br></TD>
	</TR>
	<TR>
		<TD><?echo _ZOOM_FORM_INGALLERY;?>:</TD>
		<TD>
			<?php
			echo $zoom->createCatDropdown('catid','<OPTION value="">---&nbsp;'._ZOOM_PICK.'&nbsp;---</OPTION>');
			?>
		</TD>
	</TR>
	<TR>
		<TD><?echo _ZOOM_DESCRIPTION;?></TD><TD><textarea class="inputbox" cols="25" rows="5" name="descr"></textarea></TD>
	</TR>
	<TR>
		<TD colspan="2" align="center"><br><br><input class="button" type="submit" name="submit" value="<?echo _ZOOM_BUTTON_UPLOAD;?>"></TD>
	</TR>
	</TABLE></form></CENTER>
	<?
	}
?>