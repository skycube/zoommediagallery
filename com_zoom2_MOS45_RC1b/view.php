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
| Filename: view.php                                                  |
| Version: 2.0                                                        |
|                                                                     |
-----------------------------------------------------------------------
**/
define( "_VALID_MOS", 1 ); 

include('../../configuration.php');
if (file_exists("language/".$mosConfig_lang.".php") ) { 
	include_once("language/".$mosConfig_lang.".php");
} else { 
	include_once("language/english.php");
}

// redefine the mambo database object to use the comment function...
require ("../../classes/database.php");
$database = new database( $mosConfig_host, $mosConfig_user, $mosConfig_password, $mosConfig_db, $mosConfig_dbprefix );

// Create zOOm Image Gallery object
require_once('classes/zoom.class.php');
$zoom = new zoom();

if (isset($submit)) {
	$theName = $zoom->cleanString($uname);
	$theComment = $zoom->cleanString($comment);
    $zoom->addComment($imgid,$theName,$theComment);
}
if (isset($delComment)) {
	$zoom->delComment($delComment);
}
if (isset($vote)){
	$zoom->rateImg($imgid, $vote);
}
// update hitcounter for this image...
if (isset($hit)){
	$zoom->hitPlus($imgid);
}
// get the file-data for display
$row = $zoom->getImgInfo($imgid, 1);
$cat = $zoom->getCatbyId($row['gallery_id']);
// now, get the size of the image, for the zoom-function (php function)...
$size = getimagesize("../../".$zoom->_CONFIG['imagepath'].$cat->catdir."/".$row['filename']);
?>
<!doctype html public "-//W3C//DTD HTML 4.0 //EN">
<HEAD>
<TITLE>zOOm Gallery - <?echo $row['filename'];?></TITLE>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="zoom.css" rel="stylesheet" media="screen">
<?php
$zoom->createDetailsJavascript();
// Now, get the image-id's for the next&previous buttons
// plus filenames for a possible slideshow...
$id_cache = array();
$query1="SELECT id, filename FROM ".$mosConfig_dbprefix."zoomfiles WHERE gallery_id=$cat->id ORDER BY id ASC";
$result1 = $database->openConnectionWithReturn($query1);
while ($row1=mysql_fetch_object($result1)) {
  $id_cache[] = $row1->id;
  $fn_cache[] = "../../".$zoom->_CONFIG['imagepath'].$cat->catdir."/".$row1->filename;
}
$act_key = array_search($imgid, $id_cache);
$nid = (isset($id_cache[$act_key + 1])) ? $id_cache[$act_key + 1] : $imgid;
$pid = (isset($id_cache[$act_key - 1])) ? $id_cache[$act_key - 1] : $imgid;
unset($id_cache);
if ($zoom->_CONFIG['slideshow']){
	$zoom->createSlideshow($fn_cache, $id_cache, $imgid);
}
$zoom->createZoomJavascript($size);
?>
<script language="Javascript">
<!--
function newLoc(id){
	window.document.location= 'view.php?imgid=<?php echo $imgid;?>&isAdmin=<?php echo $isAdmin;?>&delComment=' +id;
}
//-->
</script>
</HEAD>
<BODY onload="imReset()">
<CENTER><a href="javascript:window.close()"><?php echo _ZOOM_CLOSE;?></a><br><br>
<?php
if ($zoom->_CONFIG['slideshow']){
?>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
	<td align="center" valign="middle">
		<?php echo _ZOOM_SLIDESHOW;?>
	</td>
</tr>
<tr>
	<td align="center" valign="middle">
		<a href="<?php if($pid==$imgid) echo "#"; else echo "view.php?imgid=".$pid."&hit=".$hit;?>"><img src="images/back.gif" border="0" width="25" height="25" alt="<?php echo _ZOOM_PREVPIC;?>"></a>
		<a href="javascript:stopstatus=0;runSlideShow();CSAction(new Array(/*CMP*/'9661D2'));return false;" csclick="9661D2"><img src="images/play.gif" border="0" width="25" height="25" alt="<?php echo _ZOOM_PLAY;?>"></a> <a href="javascript:endSlideShow();CSAction(new Array(/*CMP*/'9A3103'));return false;" csclick="9A3103"><img src="images/stop.gif" border="0" width="25" height="25" alt="<?php echo _ZOOM_STOP;?>"></a>
		<a href="<?php if($nid==$imgid) echo "#"; else echo "view.php?imgid=".$nid."&hit=".$hit;?>"><img src="images/next.gif" border="0" alt="<?php echo _ZOOM_NEXTPIC;?>"></a>
	</td>
</tr>
</table>
<?php
}
?>
<img src="../../<?php echo $zoom->_CONFIG['imagepath'].$cat->catdir."/".$row['filename']; ?>" alt="" border="1" name="zImage">
<!-- what would zOOm Image Gallery be withouts its zoom-function! -->
<br><a href="javascript:zoomIn()"><img src="images/zoom_plus.gif" alt="+" border="0"></a><a href="javascript:imReset()"><?php echo _ZOOM_RESET;?></a><a href="javascript:zoomOut()"><img src="images/zoom_minus.gif" alt="-" border="0"></a>
<div id="details">
<table width="100%" height="95%" border="0" cellspacing="0" cellpadding="3">
  <tr>
    <td align="center" valign="middle">
        <br>
	<table width="95%" border="0">
		<tr class="sectiontableheader">
			<td width="125" align="left"><strong><font color="#FFFFFF"><?php echo _ZOOM_PROPERTIES;?></font></strong></td><td>&nbsp;</td>
		</tr>
		<tr>
			<td width="125" align="left"><?php echo _ZOOM_PICNAME;?>:</td><td align="left"><?php echo $row['filename'];?></td>
		</tr>
		<tr>
			<td width="125" align="left"><?php echo _ZOOM_DESCRIPTION;?>:</td><td align="left"><?php echo $row['descr']; ?></td>
		</tr>
		<tr>
			<td width="125" align="left"><?php echo _ZOOM_HITS;?>:</td><td align="left"><?php echo $row['hits']; ?></td>
		</tr>
		<?php if($zoom->_CONFIG['ratingOn']){ ?>
		<tr>
			<td align="left"><?php echo _ZOOM_RATING;?></td><td align="left">
			<?php
				if($row['votenum']!=0){
					if($row['votesum']!=0){
						$rating = round($row['votesum'] / $row['votenum']);
					}else{
						$rating = 0;
					}
					echo '<img src="images/rating/rating'.$rating.'.gif" border="0"> ('.$row['votenum'].' '._ZOOM_VOTES.')';
				}else{
					echo _ZOOM_NOTRATED;
				}
			?>
			</td>
		</tr>
		<?php } ?>
	</table>
<?php
// Display a link which enables the user to view EXIF-readings of the image if readEXIF is set
// to TRUE.
if (($zoom->_CONFIG['readEXIF']) && function_exists('exif_read_data')){
	$exif = $zoom->exif_parse_file($img_abspath);
	?>
	<a href="javascript:CSAction(new Array(/*CMP*/'box2toggle'))" csclick="box2toggle">Show EXIF-data</a>
	<div id="exif">
		<table width="95%" border="0">
			<tr class="sectiontableheader">
				<td width="125" align="left"><strong><font color="#FFFFFF"><?php echo _ZOOM_EXIF;?></font></strong></td><td>&nbsp;</td>
			</tr>
			<?php
			if (isset($exif) && is_array($exif)){
				if (isset($exif['Camera'])) echo "<tr><td>Camera</td><td>".$exif['Camera']."</td></tr>";
				if (isset($exif['DateTaken'])) echo "<tr><td>Date taken</td><td>".$exif['DateTaken']."</td></tr>";
				if (isset($exif['Aperture'])) echo "<tr><td>Aperture</td><td>".$exif['Aperture']."</td></tr>";
				if (isset($exif['ExposureTime'])) echo "<tr><td>Exposure time</td><td>".$exif['ExposureTime']."</td></tr>";
				if (isset($exif['FocalLength'])) echo "<tr><td>Focal length</td><td>".$exif['FocalLength']."</td></tr>";
				if (isset($exif['Comment'])) echo "<tr><td>Comment</td><td>".$exif['Comment']."</td></tr>";
			}
			?>
		</table>
	</div>
	<?php
}
elseif ($zoom->_CONFIG['readEXIF']){
	echo "<h3>The package needed for reading EXIF-data from JPEG files is not included within the PHP running on your server.<BR>Admin, please turn the readEXIF option off at: <b>Admin System - Settings</b></h3>";
}
// Display comments-form for input of comments, if comments are allowed ofcourse...
// minor security note: a user can submit comments only once through this form...however if the same
// user closes the window and re-opens it, then he/ she can add comments again - so, not failproof
if ($zoom->_CONFIG['commentsOn']) {
?>
	<script language="javascript" src="javascripts.js"></script>
	<table width="95%" border="0">
		<tr class="sectiontableheader">
			<td width="125" align="left"><strong><font color="#FFFFFF"><?php echo _ZOOM_COMMENTS;?></font></strong></td><td>&nbsp;</td>
			<?php
			// create an extra row to display admin-functions...
			if ($isAdmin){
				print "<td width=\"100\" align=\"left\"><strong><font color=\"#FFFFFF\">Admin</font></strong></td>";
			}
			?>
		</tr>
		<?php
		// Display comments found in the database, regardless whether comments are enabled or not.
		// retrieve comments from database
		$sql = "SELECT id,comment,date_format(date, '%d-%m-%y') AS date,name FROM ".$mosConfig_dbprefix."zoom_comments WHERE image_id=$imgid ORDER BY date ASC";
		$result = $database->openConnectionWithReturn($sql);
		$count=0;
		while ($row2 = mysql_fetch_array($result)){
			if ($count>1) {
	            $colour=$zoom->_tabclass[0];
	            $count=0;
	        }
	        else {
	            $colour=$zoom->_tabclass[1];
	        }
	        $smilies = $zoom->getSmiliesTable();
	        $theComment = $zoom->processSmilies($row2['comment'],"",$smilies);	        
	        if ($isAdmin){
	        	// the adminstrator is able to delete comments directly through the hyperlink...
	        	print "<tr><td width=\"125\" align=\"left\">".$row2['name'].":&nbsp;</td><td align=\"left\"><font color=\"#ff0000\">".$theComment."</font>&nbsp;(".$row2['date'].")</td><td width=\"50\"><a href=\"view.php?imgid=".$imgid."&isAdmin=".$isAdmin."&delComment=".$row['id']."\">"._ZOOM_DELETE."</a></td></tr>";
	        }
	        else{
	        	print "<tr><td width=\"125\" align=\"left\">".$row2['name'].":&nbsp;</td><td align=\"left\"><font color=\"#ff0000\">".$theComment."</font>&nbsp;(".$row2['date'].")</td></tr>";
	        }
	        $count++;
		}
		?>
		</td></tr>
	</table>
    <form method="post" name="post" action="<?php echo $PHP_SELF;?>" onSubmit="MM_validateForm('uname','','R','comment','','R');return document.MM_returnValue">
    	<table width="95%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td align="left" valign="top" width="80"><?php echo _ZOOM_YOUR_NAME;?>:&nbsp;</td>
					<td align="left" valign="top"><input class="inputbox" type="text" name="uname" size="25"><br>
						 </td>
				</tr>
				<tr>
					<td align="left" valign="top" width="80"><?php echo _ZOOM_COMMENTS;?>: </td>
					<td align="left" valign="top"><textarea name="comment" class="inputbox" rows="2" cols="35" wrap="virtual" onselect="storeCaret(this);" onclick="storeCaret(this);" onkeyup="storeCaret(this);"></textarea>
					<input type="hidden" name="imgid" value="<?php echo $imgid;?>">
					<input type="hidden" name="isAdmin" value="<?php echo $isAdmin;?>">
                	<input type="submit" name="submit" value="<?php echo _ZOOM_ADD;?>" class="button">
					</td>
				</tr>
			</table>
			<table border="0" cellspacing="5" cellpadding="0">
				<tr height="15">
					<td width="15" height="15"><a href="javascript:emoticon(':D')"><img title="Very Happy" src="images/smilies/icon_biggrin.gif" alt="Very Happy" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':)')"><img title="Smile" src="images/smilies/icon_smile.gif" alt="Smile" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':(')"><img title="Sad" src="images/smilies/icon_sad.gif" alt="Sad" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':o')"><img title="Surprised" src="images/smilies/icon_surprised.gif" alt="Surprised" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':shock:')"><img title="Shocked" src="images/smilies/icon_eek.gif" alt="Shocked" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':?')"><img title="Confused" src="images/smilies/icon_confused.gif" alt="Confused" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon('8)')"><img title="Cool" src="images/smilies/icon_cool.gif" alt="Cool" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':lol:')"><img title="Laughing" src="images/smilies/icon_lol.gif" alt="Laughing" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':x')"><img title="Mad" src="images/smilies/icon_mad.gif" alt="Mad" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':P')"><img title="Razz" src="images/smilies/icon_razz.gif" alt="Razz" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':oops:')"><img title="Embarassed" src="images/smilies/icon_redface.gif" alt="Embarassed" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':cry:')"><img title="Crying or Very sad" src="images/smilies/icon_cry.gif" alt="Crying or Very sad" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':evil:')"><img title="Evil or Very Mad" src="images/smilies/icon_evil.gif" alt="Evil or Very Mad" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':twisted:')"><img title="Twisted Evil" src="images/smilies/icon_twisted.gif" alt="Twisted Evil" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':roll:')"><img title="Rolling Eyes" src="images/smilies/icon_rolleyes.gif" alt="Rolling Eyes" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':wink:')"><img title="Wink" src="images/smilies/icon_wink.gif" alt="Wink" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':!:')"><img title="Exclamation" src="images/smilies/icon_exclaim.gif" alt="Exclamation" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':?:')"><img title="Question" src="images/smilies/icon_question.gif" alt="Question" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':idea:')"><img title="Idea" src="images/smilies/icon_idea.gif" alt="Idea" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':arrow:')"><img title="Arrow" src="images/smilies/icon_arrow.gif" alt="Arrow" border="0" /></a></td>
				</tr>
			</table>
		</form>
<?php
}
// Now, display a table which will display the images to rate the image...
// Images are from 1-star to 5-stars. The user WILL be able to vote again, until
// I can implement the use of cookies or the use of a sessions-table.
if ($zoom->_CONFIG['ratingOn']){
	?>
	<table border="0" width="95%" cellspacing="0" cellpadding"0">
	<tr class="sectiontableheader">
		<td colspan="6" align="left"><strong><font color="#ffffff"><?php echo _ZOOM_RATING;?></font></strong></td>
	</tr>
	<tr>
		<td width="16%"><a href="view.php?option=com_zoom&imgid=<?php echo $imgid;?>&vote=0"><img src="images/rating/rating0.gif" border="0" alt="<?php echo _ZOOM_RATE0;?>"></a></td>
		<td width="16%"><a href="view.php?option=com_zoom&imgid=<?php echo $imgid;?>&vote=1"><img src="images/rating/rating1.gif" border="0" alt="<?php echo _ZOOM_RATE1;?>"></a></td>
		<td width="16%"><a href="view.php?option=com_zoom&imgid=<?php echo $imgid;?>&vote=2"><img src="images/rating/rating2.gif" border="0" alt="<?php echo _ZOOM_RATE2;?>"></a></td>
		<td width="16%"><a href="view.php?option=com_zoom&imgid=<?php echo $imgid;?>&vote=3"><img src="images/rating/rating3.gif" border="0" alt="<?php echo _ZOOM_RATE3;?>"></a></td>
		<td width="16%"><a href="view.php?option=com_zoom&imgid=<?php echo $imgid;?>&vote=4"><img src="images/rating/rating4.gif" border="0" alt="<?php echo _ZOOM_RATE4;?>"></a></td>
		<td><a href="view.php?option=com_zoom&imgid=<?php echo $imgid;?>&vote=5"><img src="images/rating/rating5.gif" border="0" alt="<?php echo _ZOOM_RATE5;?>"></a></td>
	</tr>
	</table>
	<?php
}
?>
</td></tr>
</table></td></tr>
</table>
</div>
</CENTER>
</body>
</html>
