<?
//zOOm Gallery//
/** 
-----------------------------------------------------------------------
|  zOOm Image Gallery! by Mike de Boer - a multi-gallery component    |
-----------------------------------------------------------------------

-----------------------------------------------------------------------
|                                                                     |
| Date: January, 2004                                            |
| Author: Mike de Boer, <http://www.mikedeboer.nl>                    |
| Copyright: copyright (C) 2004 by Mike de Boer                       |
| Description: zOOm Image Gallery, a multi-gallery component for      |
|              Mambo based on RSGallery by Ronald Smit. It's the most |
|              feature-rich gallery component for Mambo!              |
| Filename: delete.php                                                |
| Version: 2.0                                                        |
|                                                                     |
-----------------------------------------------------------------------
**/
// MOS Intruder Alerts
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
$i = 0;
?>
<script type="text/javascript">
function checkUncheckAll(oCheckbox)
	{
	var el, i = 0, bWhich = oCheckbox.checked, oForm = oCheckbox.form;
	while (el = oForm[i++]) 
		if (el.type == 'checkbox') el.checked = bWhich;
	}
</script>
<?
if ($submit)
	{
	if ($catid != "")
		{
		foreach($catid as $cid)
			{
			//Fetch directoryname
			$sql = "SELECT * FROM ".$mosConfig_dbprefix."zoom WHERE id=$cid";
			$result = $database->openConnectionWithReturn($sql);
			$row = mysql_fetch_object($result);
			$dir = $row->catdir;
			$gallery = $row->catname;
			$dir = $zoom->_CONFIG['imagepath'].$dir;
			
			//Empty and delete directory
			$zoom->deldir($dir);
			//Delete comments from database
			$sql1 = "SELECT * FROM ".$mosConfig_dbprefix."zoomfiles WHERE gallery_id=$cid";
			$result1 = $database->openConnectionWithReturn($sql1);
			while ($row1 = mysql_fetch_object($result1)){
				$sql2 = "DELETE FROM ".$mosConfig_dbprefix."zoom_comments WHERE image_id=".$row1->id;
				$result2 = $database->openConnectionNoReturn($sql2);
			}
			//Delete files from database
			$sql3 = "DELETE FROM ".$mosConfig_dbprefix."zoomfiles WHERE gallery_id=$cid";
			$result3 = $database->openConnectionNoReturn($sql3);
			//Finally, delete category from database
			$sql4 = "DELETE FROM ".$mosConfig_dbprefix."zoom WHERE id=$cid";
			$result4 = $database->openConnectionNoReturn($sql4);
			}
			?>
		<SCRIPT>
			alert("<?echo _ZOOM_ALERT_DEL;?>");
			location = "index.php?option=com_zoom&page=admin";
		</SCRIPT>
		<?
		}
	else
		{
		//No checkbox selected, back to delete screen
		?>
		<SCRIPT>
			alert("<?echo _ZOOM_ALERT_NOCHECKBOX;?>");
			location = "index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=delete";
		</SCRIPT>
		<?
		}
	}
else
	{
	// show list of categories...
	$sql = "SELECT id FROM ".$mosConfig_dbprefix."zoom";
	$result = $database->openConnectionWithReturn($sql);
	?>
	<table border="0" cellspacing="0" cellpadding="0" width="100%">
		<tr>
			<td align="center" width="100%"><a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid ?>&page=admin">
			<img src="components/com_zoom/images/home.gif" alt="<?echo _ZOOM_BACK;?>" border="0">&nbsp;&nbsp;<?echo _ZOOM_BACK;?></a>&nbsp; | &nbsp;
			<h3><?echo _ZOOM_DEL;?></h3></td>
		</tr>
	</table>
	<br>
	<CENTER>
	<FORM  name="delete_cat" ACTION="index.php?option=com_zoom&page=delete" METHOD="POST">
	<TABLE width="300" border="0" cellspacing='1' cellpadding='4'>
		<TR>
			<TD  height='20' width="50" class="sectiontableheader"><?echo _ZOOM_HD_CHECK;?></TD>
			<TD width="250" class="sectiontableheader"><?echo _ZOOM_HD_NAME;?></TD>
		</TR>
	<?
	while ($row = mysql_fetch_array($result))
				{
				$i++;
				$id = $row['id'];
				$catname = $zoom->getCatVirtPath($id);
				$bgcolor = ($i & 1) ? '#EBEBEB' : '#ffffff';
				?>
				<TR bgcolor="<?echo $bgcolor;?>">
					<TD><input type="checkbox" name="catid[]" value="<?echo $id;?>"></TD>
					<TD><?echo $catname;?></TD>
				</TR>
				<?
				}
				?>
				<TR>
					<TD  height="20" class="sectiontableheader"><input type="checkbox" name="checkall" onclick="checkUncheckAll(this);"></TD>
					<TD  height="20" class="sectiontableheader"><strong><?php echo _ZOOM_HD_CHECKALL;?></strong></TD>
				</TR>
				<TR>
					<TD colspan="2" align="center"><input class="button" type="submit" value="<?echo _ZOOM_DELETE;?>" name="submit"></TD>
				</TR>
				</TABLE></FORM>
				<?
	}
?>
