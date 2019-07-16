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
| Filename: special.php                                               |
| Version: 2.0                                                        |
|                                                                     |
-----------------------------------------------------------------------
**/
// There are three special image-display formats:
// 0: Top ten viewed images (most hits)
// 1: Ten last submitted images (last id's)
// 2: Ten last commented images
// A top ten best rated images might be implemented later, however that'll
// need a rating-system to be coded...:(
switch($sorting){
	case 0:
		$sql = "SELECT * FROM ".$dbprefix."zoomfiles ORDER BY hits DESC LIMIT 10";
		break;
	case 1:
		$sql = "SELECT * FROM ".$dbprefix."zoomfiles ORDER BY id DESC LIMIT 10";
		break;
	case 2:
		$sql = "SELECT img.*, img.id AS imgid, com.id FROM ".$dbprefix."zoomfiles AS img, ".$dbprefix."zoom_comments AS com WHERE img.id=com.image_id ORDER BY com.id DESC LIMIT 10";
		break;
	default:
		echo "You must visit this page in the legitimate way, remember?";
}
// Displaying query-results:
$result = $database->openConnectionWithReturn($sql);
?>
<table border="0" cellspacing="0" cellpadding="0" width="100%">
	<tr>
       <td width="30" class="<?php echo $zoom->_tabclass[1]; ?>"></td>
       <TD class="<?php echo $zoom->_tabclass[1]; ?>">
		<a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid ?>">
		<img src="components/com_zoom/images/home.gif" alt="<?echo _ZOOM_BACK;?>" border="0">&nbsp;&nbsp;<?echo _ZOOM_BACK;?>
		</a> > 
		<?php
		if($sorting==0) echo _ZOOM_TOPTEN;
		else if($sorting==1) echo _ZOOM_LASTSUBM;
		else if($sorting==2) echo _ZOOM_LASTCOMM; ?>
		</TD>
	</tr>
</table>
<table border="0" cellspacing="0" cellpadding="0" width="100%">
<?php
$i = 1;
$tabcnt = 0;
while($row = mysql_fetch_array($result)){
	$cat = $zoom->getCatbyId($row['gallery_id']);
	echo '<tr class='.$zoom->_tabclass[$tabcnt].'><td width="20">&nbsp;  '.$i.'. &nbsp;</td>';
	$size = getimagesize($zoom->_CONFIG['imagepath'].$cat->catdir."/".$row['name']);
	if (!$zoom->_CONFIG['popUpImages']){
		?>
		<td align="left" width="<?php echo $zoom->_CONFIG['size'];?>">
		<A HREF="index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=view&imgid=<?php if ($sorting==2) echo $row[0]; else echo $row['id'];?>&hit=1">
		<?php
	}
	else{
		if ($sorting==2)
			$theId = $row['imgid'];
		else
			$theId = $row['id'];
		?>
		<td align="left" width="<?php echo $zoom->_CONFIG['size'];?>">
		<A HREF="#" onClick="window.open('components/com_zoom/view.php?imgid=<?php echo $theId;?>&isAdmin=<?php echo $zoom->_isAdmin;?>&hit=1', 'win1', 'width=<?php if($size[0]<450){ echo "450";}else{ echo $size[0] + 40;} ?>, height=<?php if($size[1]<350){ echo "350";}else{ echo $size[1] + 100;} ?>,scrollbars=1').focus()">
		<?php
	}
	echo '<img src="'.$zoom->_CONFIG['imagepath'].$cat->catdir.'/thumbs/'.$row['name'].'" border="0"></td><td width="10"></td>';
	echo '<td align="left"><b>'.$row['name'].'</b><br>'.$row['descr'].'<br>hits = '.$row['hits'].'</td></tr>';
	if($tabcnt >= 1){
		$tabcnt = 0;
	}else{ $tabcnt++; }
	$i++;
}
?>
</table>