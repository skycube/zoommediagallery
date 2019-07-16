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
| Filename: upload.php                                                |
| Version: 2.0                                                        |
|                                                                     |
-----------------------------------------------------------------------
**/
// MOS Intruder Alerts
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
// inclusion of filesystem-functions, platform dependent.
if($zoom->isWin())
	include($mosConfig_absolute_path.'/components/com_zoom/classes/fs_win32.php');
else
	include($mosConfig_absolute_path.'/components/com_zoom/classes/fs_unix.php');
?>
<!-- Begin header -->
<table border="0" cellspacing="0" cellpadding="0" width="100%">
<tr>
	<td align="center"><h3><?echo _ZOOM_HD_UPLOAD;?></h3></td>
</tr>
</table>
<table border="0" cellspacing="0" cellpadding="0" width="100%">
<tr>
	<td align="center" width="100%">
	<?php
	if ($zoom->_isAdmin){
		echo '<a href="index.php?option=com_zoom&Itemid='.$Itemid.'&page=admin"><img src="components/com_zoom/images/home.gif" alt="'._ZOOM_BACK.'" border="0">&nbsp;&nbsp;'._ZOOM_BACK.'</a>';
	}
	else if($zoom->_isUser){
		echo '<a href="index.php?option=com_zoom&Itemid='.$Itemid.'&page=user"><img src="components/com_zoom/images/home.gif" alt="'._ZOOM_BACK.'" border="0">&nbsp;&nbsp;'._ZOOM_BACK.'</a>';
	}
	?>
		&nbsp; | &nbsp;
		<a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=upload&formtype=single"><?php echo _ZOOM_UPLOAD_SINGLE;?></a>&nbsp; | &nbsp;
		<a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=upload&formtype=multiple"><?php echo _ZOOM_UPLOAD_MULTIPLE;?></a>&nbsp; | &nbsp;
		<a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=upload&formtype=dragndrop">Drag n Drop</a></td>
</tr>
</table>
<!-- End header -->

<?php
// now, the file-submission form has to be displayed.
// switch between single file and multiple files form.
switch ($formtype){
	case 'single':
		include('components/com_zoom/admin/upl_single.php');
		break;
	case 'multiple':
		include('components/com_zoom/admin/upl_multiple.php');
		break;
	case 'dragndrop':
		include('components/com_zoom/admin/upl_dragndrop.php');
		break;
	case 'save':
		include('components/com_zoom/admin/save_photos.php');
		break;
	default:
		break;
}
?>