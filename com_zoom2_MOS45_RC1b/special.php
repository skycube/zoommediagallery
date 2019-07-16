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
// MOS Intruder Alerts
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
// There are three special image-display formats:
// 0: Top ten viewed images (most hits)
// 1: Ten last submitted images (last id's)
// 2: Ten last commented images
// 3: zOOm Search
// 4: Top rated
switch($sorting){
	case 0:
		$this->_sql = "SELECT DISTINCT img.id, img.* FROM ".$mosConfig_dbprefix."zoomfiles AS img WHERE hits > 0 ORDER BY hits DESC LIMIT 10";
		break;
	case 1:
		$this->_sql = "SELECT * FROM ".$mosConfig_dbprefix."zoomfiles ORDER BY id DESC LIMIT 10";
		break;
	case 2:
		$this->_sql = "SELECT DISTINCT com.image_id, img.id AS id, img.filename, img.hits, img.votenum, img.votesum, img.gallery_id FROM mos_zoomfiles AS img, mos_zoom_comments AS com WHERE com.image_id = img.id ORDER BY com.image_id DESC LIMIT 10";
		break;
	case 3:
		// thanks to Arthur Konze for the code of this function...
		$suchstring = trim(strtolower($sstring));
		$this->_sql = "SELECT * FROM ".$mosConfig_dbprefix."zoomfiles WHERE LOWER(descr) LIKE '%$suchstring%' OR LOWER(filename) LIKE '%$suchstring%' ORDER BY id DESC";
		break;
	case 4:
		$this->_sql = "SELECT * FROM ".$mosConfig_dbprefix."zoomfiles WHERE votesum > 0 ORDER BY votesum/votenum DESC LIMIT 10";
		break;
	default:
		die("You must visit this page the legit way, remember?");
}
// Displaying query-results:
$this->_result = $database->openConnectionWithReturn($this->_sql);
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
		else if($sorting==2) echo _ZOOM_LASTCOMM;
		else if($sorting==3) echo _ZOOM_SEARCHRESULTS;
		else if($sorting==4) echo _ZOOM_TOPRATED; ?>
		</TD>
	</tr>
</table>
<table border="0" cellspacing="0" cellpadding="0" width="100%">
<?php
$i = 1;
$tabcnt = 0;
while($row = mysql_fetch_array($this->_result)){
	$cat = $zoom->getCatbyId($row['gallery_id']);
	echo '<tr class='.$zoom->_tabclass[$tabcnt].'><td width="20">&nbsp;  '.$i.'. &nbsp;</td>';
	$size = getimagesize($zoom->_CONFIG['imagepath'].$cat->catdir."/".$row['filename']);
	if (!$zoom->_CONFIG['popUpImages']){
		?>
		<td align="left" width="<?php echo $zoom->_CONFIG['size'];?>">
		<A HREF="index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=view&imgid=<?php echo $row['id'];?>&hit=1">
		<?php
	}
	else{
		$theId = $row['id'];
		?>
		<td align="left" width="<?php echo $zoom->_CONFIG['size'];?>">
		<A HREF="#" onClick="window.open('components/com_zoom/view.php?imgid=<?php echo $theId;?>&isAdmin=<?php echo $zoom->_isAdmin;?>&hit=1', 'win1', 'width=<?php if($size[0]<450){ echo "450";}else{ echo $size[0] + 40;} ?>, height=<?php if($size[1]<350){ echo "350";}else{ echo $size[1] + 100;} ?>,scrollbars=1').focus()">
		<?php
	}
	echo '<img src="'.$zoom->_CONFIG['imagepath'].$cat->catdir.'/thumbs/'.$row['filename'].'" border="0"></td><td width="10"></td>';
	echo '<td align="left"><b>'.$row['filename'].'</b><br>hits = '.$row['hits'].'<br>';
	if($zoom->_CONFIG['ratingOn']){
		if($row['votenum']!=0){
			if($row['votesum']!=0){
				$rating = round($row['votesum'] / $row['votenum']);
			}else{
				$rating = 0;
			}
			echo '<img src="components/com_zoom/images/rating/rating'.$rating.'.gif" border="0"> ('.$row['votenum'].' ';
			if($row['votenum']==1)
				echo _ZOOM_VOTE.')<br>';
			else
				echo _ZOOM_VOTES.')<br>';
		}else{
			echo _ZOOM_NOTRATED.'<br>';
		}
	}
	$cat = $zoom->getCatById($row['gallery_id']);
	echo '<a href="index.php?option=com_zoom&Itemid='.$Itemid.'&catid='.$cat->id.'&catname='.$cat->catname.'&pos='.$cat->pos.'">'.$zoom->getCatVirtPath($row['gallery_id']).'</a></td></tr>';
	if($tabcnt >= 1){
		$tabcnt = 0;
	}else{ $tabcnt++; }
	$i++;
}
?>
</table>