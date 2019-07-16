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
| Filename: lightbox.php                                              |
| Version: 2.0                                                        |
|                                                                     |
-----------------------------------------------------------------------
-----------------------------------------------------------------------
|                                                                     |
| Ok, what is a lightbox? First of all, it's a little cardboard box,  |
| containing two dozen or so matches.                                 |
| The digital lightbox is somewhat the same: it's a box (ZIP-file),   |
| containing a dozen or so images, which the user selected.           |
| The idea is, that users can download a gallery filled with images   |
| at once, intead of downloading each image individually...that would |
| be a bore...:-p  Plus in a nice package too!                        |
|                                                                     |
-----------------------------------------------------------------------
**/
// get files into array...
if(isset($catid)){
	$catdir = $zoom->getDir($catid);
	?>
	<h3>Are you sure you want to lightbox the following gallery and all of its images?</h3>
	<br><br><br>
	<?php
	if (!isset($confirm)){
	?>
	<center>
	<a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=lightbox&catid=<?php echo $catid;?>&confirm=1">Yes!</a> <a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&catid=<?php echo $catid;?>">No</a>
	</center>
	<?php
	}
	if (isset($confirm)){
		echo 'Parsing images from gallery...';
			$filelist = array();
			$this->_sql = "SELECT filename FROM ".$dbprefix."zoomfiles WHERE gallery_id=$catid";
			$this->_result = $database->openConnectionWithReturn($this->_sql);
			while($file = mysql_fetch_array($this->_result)){
				$filelist[] = $absolute_path.'/'.$zoom->_CONFIG['imagepath'].$catdir.'/'.$file;
			}
			echo '<b>done!</b><br>';
		echo 'creating ZIP-file...';
			$archivename = uniqid('lightbox_').'.zip';
			if($zoom->createArchive($filelist, $archivename)){
				echo '<b>done!</b><br>';
				echo 'User may now download the lightbox!';
			}
			else{
				echo '<b><font color="red">error!</font></b><br>';
			}
	}
}
?>
<table border="0" cellpadding="0" cellspacing="0" width="95%">
<tr>
	<td></td>
</tr>
</table>