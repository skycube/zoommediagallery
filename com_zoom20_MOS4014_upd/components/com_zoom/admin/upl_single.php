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
	if (!$catdir)
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
		if (($image_type == "image/pjpeg") || ($image_type == "image/gif") || ($image_type == "image/png")){
			$name = urldecode($image_name);
			// replace every space-character with a single "_"
			$name = ereg_replace(" ", "_", $name);
			// Get rid of extra underscores
			$name = ereg_replace("_+", "_", $name);
			$name = ereg_replace("(^_|_$)", "", $name);
			$imagepath = $zoom->_CONFIG['imagepath'];
			if (move_uploaded_file("$image", "$imagepath$catdir/$name")){
				//gallery_id bepalen mbv $catdir
				$row2 = $zoom->getCatbyDir($catdir);
				$xx = $row2['id'];
				//Save name into database
				$zoom->saveImage($name,$descr,$xx);
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
	switch ($zoom->_CONFIG['conversiontype']){
		//Imagemagick
		case 1:
			$file_in = $imagepath.$catdir."/".$name;
			$file_out = $imagepath.$catdir."/thumbs/".$name;
			$size = $zoom->_CONFIG['size'];
			$IM_path= $zoom->_CONFIG['IM_path'];
			$cmd = $IM_path."convert -resize $size $file_in $file_out";
			exec($cmd);
			?>
			<SCRIPT>
				alert("<?echo _ZOOM_ALERT_UPLOADOK;?>");
				location = 'index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=upload&formtype=single';	
			</SCRIPT>
			<?
			break;
		//NETPBM
		case 2:
			$file 		= $imagepath.$catdir."/".$name;
			$desfile 	= $imagepath.$catdir."/thumbs/".$name;
			$maxsize 	= $zoom->_CONFIG['size'];
			$origname 	= $name;
			$quality 	= $zoom->_CONFIG['JPEGquality'];
			$zoom->createThumbNETPBM($file,$desfile,$maxsize,$origname,$quality);
			?>
			<SCRIPT>
				alert("<?echo _ZOOM_ALERT_UPLOADOK;?>");
				location = 'index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=upload&formtype=single';	
			</SCRIPT>
			<?
			break;
		//GD2
		case 3:
			$file 		= $imagepath.$catdir."/".$name;
			$desfile 	= $imagepath.$catdir."/thumbs/".$name;
			$maxsize 	= $zoom->_CONFIG['size'];
			$quality 	= $zoom->_CONFIG['JPEGquality'];
			$zoom->createThumbGD2($file, $desfile, $quality, $maxsize);
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
	$sql = "SELECT * FROM ".$dbprefix."zoom";
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
			<select name="catdir" class="inputbox">
			<OPTION value="">---&nbsp;<?echo _ZOOM_PICK;?>&nbsp;---</OPTION>
			<?
			while ($row = mysql_fetch_array($result)){
				$catid = $row['id'];
				$catdir = $row['catdir'];
				$catname = $row['catname'];
				?>
				<option value="<?echo $catdir;?>" <? if ($id == $catid) {echo " SELECTED";}?>><?echo $catname;?></option>
				<?
			}
			?>
			</SELECT>
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