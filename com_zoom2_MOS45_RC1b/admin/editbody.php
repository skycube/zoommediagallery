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
| Filename: editbody.php                                              |
| Version: 2.0                                                        |
|                                                                     |
-----------------------------------------------------------------------
**/
// MOS Intruder Alerts
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
$sql2 = "SELECT catname, catdescr FROM ".$mosConfig_dbprefix."zoom WHERE id=$theId";
$result2 = $database->openConnectionWithReturn($sql2);
$row2 = mysql_fetch_array($result2);
?>
<br>
<CENTER>
<FORM  name="edit_cat" ACTION="index.php?option=com_zoom&page=edit" METHOD="POST">
<input type="hidden" name="realId" value="<?php echo $theId; ?>">
<TABLE border="0" cellspacing="1" cellpadding="4">
	<TR>
		<TD width="100" align="left"><?echo _ZOOM_HD_NAME;?>: </TD>
		<TD align="left"><input type="text" name="newname" size="35" value="<? echo $row2['catname'];?>" class="inputbox"></TD>
	</TR>
<TR>
	<TD align="left"><?echo _ZOOM_DESCRIPTION;?>: </TD>
	<TD align="left"><textarea class="inputbox" name="newdescr" rows="5" cols="30"><? echo $row2['catdescr'];?></textarea></TD>
</TR>
<TR>
	<TD colspan="2" align="center"><input class="button" type="submit" value="<?echo _ZOOM_BUTTON_EDIT;?>" name="submita"></TD>
</TR>
</TABLE></FORM>