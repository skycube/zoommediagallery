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
| Filename: edit.php                                                  |
| Version: 2.0                                                        |
|                                                                     |
-----------------------------------------------------------------------
**/
// MOS Intruder Alerts
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
$zoom->createSubmitScript("select_cat");
if (isset($catid)){
	$theId = $catid;
}
if (isset($submita)){
	//Save changes
	$query = "UPDATE ".$mosConfig_dbprefix."zoom SET catname='$newname', catdescr='$newdescr' WHERE id=$realId";
	$database->openConnectionNoReturn($query);
	?>
	<SCRIPT>
		alert('<?echo _ZOOM_ALERT_EDITOK;?>');
		location = "index.php?option=com_zoom&page=admin";
	</SCRIPT>
	<?php
}
?>
<table border="0" cellspacing="0" cellpadding="0" width="100%">
	<tr>
		<td align="center" width="100%"><a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid ?>&page=admin">
		<img src="components/com_zoom/images/home.gif" alt="<?echo _ZOOM_BACK;?>" border="0">&nbsp;&nbsp;<?echo _ZOOM_BACK;?></a>&nbsp; | &nbsp;
		<h3><?echo _ZOOM_EDIT;?></h3></td>
	</tr>
</table>
<form name="select_cat" action="index.php?option=com_zoom&page=edit" method="post">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
	<td align="center">
	<?php echo $zoom->createCatDropDown('catid', '<option value="">---&nbsp;'._ZOOM_PICK.'&nbsp;---</option>', 1, $catid);?>
	</td>
</tr>
</table>
</form>
<?
if ($theId && ($realId!="" | $theId!="")){
	include('components/com_zoom/admin/editbody.php');
}
?>