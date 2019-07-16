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
| Filename: delpic.php                                                |
| Version: 2.0                                                        |
|                                                                     |
-----------------------------------------------------------------------
**/
if ($id)
	{
	//echo $id; 
	$row = $zoom->getImgInfo($id, 0);
	$file1 = $zoom->_CONFIG['imagepath'].$imdir."/thumbs/".$row->filename;
	$file2 = $zoom->_CONFIG['imagepath'].$imdir."/".$row->filename;
	if (unlink($file2)){
		//If image is deleted, delete thumb
		unlink($file1);
	}else{
		?>
		<SCRIPT>
			alert("<?echo _ZOOM_ALERT_NODELPIC;?>");
			location = "index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&catid=<?php echo $catid;?>";
		</SCRIPT>
		<?
		break;
	}
	//Delete record from mos_zoomfiles and comments from mos_zoom_comments
	$zoom->deleteImg($id);
	?>
	<SCRIPT>
		alert("<?echo _ZOOM_ALERT_DELPIC;?>");
		location = "index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&catid=<?php echo $catid;?>";
	</SCRIPT>
	<?
	}
else
	{
	?>
	<SCRIPT>
		location = "index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&catid=<?php echo $catid;?>";
	</SCRIPT>
	<?
	}
