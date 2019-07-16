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
| Filename: admin.php                                                 |
| Version: 2.0                                                        |
|                                                                     |
-----------------------------------------------------------------------
**/
if (isset($action)){
	$zoom->optimizeTables();
	?>
	<script>
		alert("zOOm Image Gallery tables optimized!");
		location = 'index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=admin';
	</script>
	<?
}
?>
<table width="100%" height="90% "border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="top"> 
      <table width="600" border="0" cellspacing="1" cellpadding="0">
        <tr>
			<td>
			<table width="100%" border="0" cellspacing="0" cellpadding="5">
				<tr>
                  <td align="left" valign="middle"><strong><?php echo _ZOOM_ADMIN_TITLE; ?></strong></td>
				  <td align="right">ver 2.1</td>
				</tr>
			</table>
			</td>
		</tr>
		<tr>
			<td>
			<img src="components/com_zoom/images/zoom_logo_faded.gif" align="right" hspace="6">
			<table width="100%" border="0" cellspacing="0" cellpadding="5">
              <tr> 
                <td width="60"><a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid ?>&page=new"><img src="components/com_zoom/images/admin/new.gif" border="0" alt="<?php echo _ZOOM_NEW;?>"></a></td>
                <td valign="center" align="left">&raquo;&nbsp;<?php echo _ZOOM_NEW_DESCR;?>
                </td>
              </tr>
              <tr>
                <td width="60"><a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid ?>&page=delete"><img src="components/com_zoom/images/admin/delcat.gif" border="0" alt="<?php echo _ZOOM_DEL;?>"></a></td>
                <td valign="center" align="left">&raquo;&nbsp;<?php echo _ZOOM_DEL_DESCR;?>
                </td>
              </tr>
              <tr>
                <td width="60"><a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid ?>&page=upload"><img src="components/com_zoom/images/admin/upload.gif" border="0" alt="<?php echo _ZOOM_UPLOAD;?>"></td>
                <td valign="center" align="left"></a>&raquo;&nbsp;<?php echo _ZOOM_UPLOAD_DESCR;?><br>
                </td>
              </tr>
              <tr>
                <td width="60"><a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid ?>&page=edit"><img src="components/com_zoom/images/admin/editcat.gif" border="0" alt="<?php echo _ZOOM_EDIT;?>"></a></td>
                <td valign="center" align="left">&raquo;&nbsp;<?php echo _ZOOM_EDIT_DESCR;?><br>
                </td>
              </tr>
              <tr>
                <td width="60"><a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid ?>&page=settings"><img src="components/com_zoom/images/admin/settings.gif" border="0" alt="<?php echo _ZOOM_SETTINGS;?>"></a></td>
                <td valign="center" align="left">&raquo;&nbsp;<?php echo _ZOOM_SETTINGS_DESCR;?><br>
				</td>
              <tr>
                <td width="60"><a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid ?>&page=admin&action=optimize"><img src="components/com_zoom/images/admin/tables.gif" border="0" alt="<?php echo _ZOOM_OPTIMIZE;?>"></a></td>
                <td valign="center" align="left">&raquo;&nbsp;<?php echo _ZOOM_OPTIMIZE_DESCR;?>
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid ?>">
				  <img src="components/com_zoom/images/home.gif" alt="<?echo _ZOOM_BACKTOGALLERY;?>" border="0">&nbsp;&nbsp;<?echo _ZOOM_BACKTOGALLERY;?>
				  </a>
				</td>
              </tr>
            </table>
			</td>
		</tr>
		</table>
	</td>
  </tr>
</table>
