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
if ($submit){
	//Save in database
	$zoom->setImgInfo($theId, $newname, $newdescr, $catimg, $catid);
	?>
	<script>
		alert("<?php echo _ZOOM_ALERT_EDITIMG;?>");
		location = "index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>";
	</script>
	<?php
}else{
	if ($id){
		//Laat scherm zien met beschrijving van afbeelding
		$row = $zoom->getImgInfo($id, 0);
		$filename = $row->filename;
		$descr = $row->descr;
		$name = $row->name;
		$cat = $zoom->getCatById($row->gallery_id);
		?>
		<center>
		<table border="0" width="300">
			<tr>
				<td><br>
				<a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&catid=<?php echo $catid;?>">
				<img src="components/com_zoom/images/home.gif" alt="<?echo _ZOOM_BACK;?>" border="0">&nbsp;&nbsp;<?echo _ZOOM_BACK;?>
				</a><br><br>
				</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><h3><?php echo _ZOOM_EDITPIC;?></h3></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<img src="<? echo $zoom->_CONFIG['imagepath'].$cat->catdir."/thumbs/".$row->filename;?>" alt="" border="1" width="75">
				</td>
			</tr>
			<tr>
				<td><?php echo _ZOOM_FILENAME;?>: </td>
				<td><strong><?echo $filename;?></strong></td>
			</tr>
			<form enctype="multipart/form-data" name="descr_change" method="post" action="index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=editpic&theId=<?php echo $id;?>">
			<tr>
				<td><?php echo _ZOOM_IMGNAME;?>: </td>
				<td><input type="textbox" name="newname" value="<?php echo $name;?>" length="30" maxlength="30"></td>
			</tr>
			<tr>
				<td valign="top"><?php echo _ZOOM_DESCRIPTION;?>: </td>
				<td valign="top"><textarea cols="25" rows="5" name="newdescr"><?echo $descr;?></textarea></td>
			</tr>
			<tr>
				<td><?php echo _ZOOM_SETCATIMG;?>: </td>
				<td><input type="checkbox" name="catimg" value="1"<?php if($cat->catimg==$id) echo " checked";?>>
				<input type="hidden" name="catid" value="<?php echo $cat->id;?>"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input class="button" type="submit" value="Opslaan" name="submit"></td>
			</tr>
			</form>
		</table></center>
		<?
		}else{
			?>
			<script>
				alert("error!");
			</script>
		<?php
	}
}
?>