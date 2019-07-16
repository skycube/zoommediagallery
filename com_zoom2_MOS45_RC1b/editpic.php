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
| Filename: editpic.php                                               |
| Version: 2.0                                                        |
|                                                                     |
-----------------------------------------------------------------------
**/
// MOS Intruder Alerts
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
if ($submit){
	//Save in database
	$zoom->setImgInfo($theId, $newdescr, $catimg, $catid);
	?>
	<SCRIPT>
		alert("<?php echo _ZOOM_ALERT_EDITIMG;?>");
		location = "index.php?option=com_zoom";
	</SCRIPT>
	<?php
}else{
	if ($id){
		//Laat scherm zien met beschrijving van afbeelding
		$row = $zoom->getImgInfo($id, 0);
		$filename = $row->filename;
		$descr = $row->descr;
		$cat = $zoom->getCatById($row->gallery_id);
		?>
		<CENTER>
		<TABLE border="0" width="300">
			<TR>
				<TD><br>
				<a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&catid=<?php echo $catid;?>">
				<img src="components/com_zoom/images/home.gif" alt="<?echo _ZOOM_BACK;?>" border="0">&nbsp;&nbsp;<?echo _ZOOM_BACK;?>
				</a><br><br>
				</TD>
				<TD>&nbsp;</TD>
			</TR>
			<TR>
				<TD colspan="2" align="center"><h3><?php echo _ZOOM_EDITPIC;?></h3></TD>
			</TR>
			<TR>
				<TD colspan="2" align="center">
					<img src="<? echo $zoom->_CONFIG['imagepath'].$cat->catdir."/thumbs/".$row->filename;?>" alt="" border="1" width="75">
				</TD>
			</TR>
			<TR>
				<TD><?php echo _ZOOM_PICNAME;?>: </TD>
				<TD><strong><?echo $filename;?></strong></TD>
			</TR>
			<FORM enctype="multipart/form-data" name="descr_change" METHOD="POST" ACTION="index.php?option=com_zoom&page=editpic&theId=<?php echo $id;?>">
			<TR>
				<TD valign="top"><?php echo _ZOOM_DESCRIPTION;?>: </TD>
				<TD valign="top"><textarea cols="25" rows="5" name="newdescr"><?echo $descr;?></textarea></TD>
			</TR>
			<tr>
				<td><?php echo _ZOOM_SETCATIMG;?>: </td>
				<td><input type="checkbox" name="catimg" value="1"<?php if($cat->catimg==$id) echo " checked";?>>
				<input type="hidden" name="catid" value="<?php echo $cat->id;?>"></td>
			</tr>
			<TR>
				<TD colspan="2" align="center"><input class="button" type="submit" value="Opslaan" name="submit"></TD>
			</TR>
			</FORM>
		</TABLE></CENTER>
		<?
		}else{
			?>
			<SCRIPT>
				alert("error!");
			</SCRIPT>
		<?php
	}
}
?>