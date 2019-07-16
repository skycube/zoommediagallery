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
// inclusion of filesystem-functions, platform dependent.
if($zoom->isWin())
	include($absolute_path.'/components/com_zoom/classes/fs_win32.php');
else
	include($absolute_path.'/components/com_zoom/classes/fs_unix.php');
?>
<!-- Begin header -->
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
	</td>
</tr>
<tr>
	<td align="left"><img src="components/com_zoom/images/admin/upload.gif" border="0" alt="<?php echo _ZOOM_HD_UPLOAD;?>">&nbsp;<b><font size="4"><?php echo _ZOOM_HD_UPLOAD;?></font></b></td>
</tr>
<tr>
	<td height="10"></td>
</tr>
<tr>
	<td align="center" width="100%">
		<?php
		if ($formtype != 'single')
			echo '<a href="index.php?option=com_zoom&Itemid='.$Itemid.'&page=upload&formtype=single">'._ZOOM_UPLOAD_SINGLE.'</a>&nbsp; | &nbsp;';
		else
			echo '<b>'._ZOOM_UPLOAD_SINGLE.'</b>&nbsp; | &nbsp;';
		if ($formtype != 'multiple')
			echo '<a href="index.php?option=com_zoom&Itemid='.$Itemid.'&page=upload&formtype=multiple">'._ZOOM_UPLOAD_MULTIPLE.'</a>&nbsp; | &nbsp;';
		else
			echo '<b>'._ZOOM_UPLOAD_MULTIPLE.'</b>&nbsp; | &nbsp;';
		if ($formtype != 'dragndrop')
			echo '<a href="index.php?option=com_zoom&Itemid='.$Itemid.'&page=upload&formtype=dragndrop">Drag n Drop</a>&nbsp; | &nbsp;';
		else
			echo '<b>Drag n Drop</b>&nbsp; | &nbsp;';
		if ($formtype != 'scan')
			echo '<a href="index.php?option=com_zoom&Itemid='.$Itemid.'&page=upload&formtype=scan">'._ZOOM_UPLOAD_SCANDIR.'</a></td>';
		else
			echo '<b>'._ZOOM_UPLOAD_SCANDIR.'</b></td>';
		?>
</tr>
<tr>
	<td height="10">&nbsp;</td>
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
	case 'scan':
		include('components/com_zoom/admin/upl_scan.php');
		break;
	default:
		break;
}
?>