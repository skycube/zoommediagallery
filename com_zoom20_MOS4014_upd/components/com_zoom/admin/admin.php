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
				  <td align="right">ver 1.0BETA</td>
				</tr>
			</table>
			</td>
		</tr>
		<tr>
			<td>
			<table width="100%" border="0" cellspacing="0" cellpadding="5">
              <tr> 
                <td><img src="components/com_zoom/images/zoom_logo.gif" align="right" hspace="6">&raquo;&nbsp;<a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid ?>&page=new"><?php echo _ZOOM_NEW;?></a>&nbsp;
                  <?php echo _ZOOM_NEW_DESCR;?><br>
                  <br>
                  &raquo;&nbsp;<a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid ?>&page=delete"><?php echo _ZOOM_DEL;?></a>&nbsp;
                  <?php echo _ZOOM_DEL_DESCR;?><br>
                  <br>
                  &raquo;&nbsp;<a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid ?>&page=upload"><?php echo _ZOOM_UPLOAD;?>
                  </a>&nbsp;<?php echo _ZOOM_UPLOAD_DESCR;?><br>
                  <br>
                  &raquo;&nbsp;<a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid ?>&page=edit"><?php echo _ZOOM_EDIT;?></a>&nbsp;
                  <?php echo _ZOOM_EDIT_DESCR;?><br>
                  <br>
                  &raquo;&nbsp;<a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid ?>&page=settings"><?php echo _ZOOM_SETTINGS;?></a>&nbsp;
                  <?php echo _ZOOM_SETTINGS_DESCR;?><br>
                  <br><a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid ?>">
				  <img src="components/com_zoom/images/home.gif" alt="<?echo _ZOOM_BACKTOGALLERY;?>" border="0">&nbsp;&nbsp;<?echo _ZOOM_BACKTOGALLERY;?>
				  </a></td>
              </tr>
            </table>
			</td>
		</tr>
		</table>
	</td>
  </tr>
</table>
