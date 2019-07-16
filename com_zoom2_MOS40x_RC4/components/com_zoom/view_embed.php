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
| Filename: view_embed.php                                            |
| Version: 2.0                                                        |
|                                                                     |
-----------------------------------------------------------------------
**/
if (isset($submit)) {
	$theName = $zoom->cleanString($uname);
	$theComment = addslashes($comment);
	$theComment = $zoom->cleanString($theComment);
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
$zoom->createDetailsJavascript();
// get the file-data for display
$row = $zoom->getImgInfo($imgid, 1);
$cat = $zoom->getCatbyId($row['gallery_id']);
// now, get the size of the image, for the zoom-function...
$img_relpath = $zoom->_CONFIG['imagepath'].$cat->catdir."/".$row['filename'];
$img_abspath = $absolute_path.$zoom->_CONFIG['imagepath'].$cat->catdir."/".$row['filename'];
$size = getimagesize($img_relpath);
$id_cache = array();
$query1="SELECT id, filename FROM ".$dbprefix."zoomfiles WHERE gallery_id=$cat->id ORDER BY id ASC";
$result1 = $database->openConnectionWithReturn($query1);
while ($row1=mysql_fetch_object($result1)) {
  $id_cache[] = $row1->id;
  $fn_cache[] = $zoom->_CONFIG['imagepath'].$cat->catdir."/".$row1->filename;
}
$act_key = array_search($imgid, $id_cache);
$cache_length = sizeof($id_cache)-1;
$nid = (isset($id_cache[$act_key + 1])) ? $id_cache[$act_key + 1] : $imgid;
$pid = (isset($id_cache[$act_key - 1])) ? $id_cache[$act_key - 1] : $imgid;
$first_img = $id_cache[0];
$last_img = $id_cache[$cache_length];
unset($id_cache);
if ($zoom->_CONFIG['slideshow'])
	$zoom->createSlideshow($fn_cache, $id_cache, $imgid);

if ($zoom->_CONFIG['zoomOn'])
	$zoom->createZoomJavascript($size);
?>
<table border="0" cellspacing="0" cellpadding="0" width="100%">
	<tr>
       <td width="30" class="<?php echo $zoom->_tabclass[1]; ?>"></td>
       <TD class="<?php echo $zoom->_tabclass[1]; ?>">
		<a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>">
		<img src="components/com_zoom/images/home.gif" alt="<?echo _ZOOM_BACK;?>" border="0">&nbsp;&nbsp;<?echo _ZOOM_BACK;?>
		</a> > <a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&catid=<?php echo $row['gallery_id'];?>&pos=<?php echo $cat->pos;?>"><?echo $cat->catname;?>
		</a> > <strong><?php echo $row['filename'];?></strong></TD>
	</tr>
</table>
<center>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<?php
if ($zoom->_CONFIG['slideshow']){
?>
<tr>
	<td align="center" valign="middle">
		<?php echo _ZOOM_SLIDESHOW;?>
	</td>
</tr>
<?php
}
?>
<tr>
	<td align="center" valign="middle">
		<a href="<?php if($first_img==$imgid) echo "#"; else echo "index.php?option=com_zoom&Itemid=".$Itemid."&page=view&imgid=".$first_img."&hit=".$hit;?>"><img src="components/com_zoom/images/first_img.gif" border="0" width="25" height="25" alt="<?php echo _ZOOM_FIRST_IMG;?>"></a>
		<a href="<?php if($pid==$imgid) echo "#"; else echo "index.php?option=com_zoom&Itemid=".$Itemid."&page=view&imgid=".$pid."&hit=".$hit;?>"><img src="components/com_zoom/images/prev.gif" border="0" width="25" height="25" alt="<?php echo _ZOOM_PREV_IMG;?>"></a>
		<?php
			if ($zoom->_CONFIG['slideshow']){ //Display play & stop buttons?
		?>
		<a href="javascript:stopstatus=0;runSlideShow();CSAction(new Array(/*CMP*/'box1hide'))" csclick="box1hide"><img src="components/com_zoom/images/play.gif" border="0" width="25" height="25" alt="<?php echo _ZOOM_PLAY;?>"></a> <a href="javascript:endSlideShow();CSAction(new Array(/*CMP*/'box1show'))" csclick="box1show"><img src="components/com_zoom/images/stop.gif" border="0" width="25" height="25" alt="<?php echo _ZOOM_STOP;?>"></a>
		<?php
			}
		?>
		<a href="<?php if($nid==$imgid) echo "#"; else echo "index.php?option=com_zoom&Itemid=".$Itemid."&page=view&imgid=".$nid."&hit=".$hit;?>"><img src="components/com_zoom/images/next.gif" border="0" alt="<?php echo _ZOOM_NEXT_IMG;?>"></a>
		<a href="<?php if($last_img==$imgid) echo "#"; else echo "index.php?option=com_zoom&Itemid=".$Itemid."&page=view&imgid=".$last_img."&hit=".$hit;?>"><img src="components/com_zoom/images/last_img.gif" border="0" width="25" height="25" alt="<?php echo _ZOOM_LAST_IMG;?>"></a>
	</td>
</tr>
</table>
<?php
echo '<img src="'.$img_relpath.'" alt="" border="1" name="zImage">';
if ($zoom->_CONFIG['zoomOn']){
?>
<!-- what would zOOm Image Gallery be withouts its zoom-function!? -->
<br><a href="javascript:zoomIn()"><img src="components/com_zoom/images/zoom_plus.gif" alt="+" border="0"></a><a href="javascript:imReset()"><?php echo _ZOOM_RESET;?></a><a href="javascript:zoomOut()"><img src="components/com_zoom/images/zoom_minus.gif" alt="-" border="0"></a>
<?php
} //END IF zoom?
?>
<!-- beginning of floating-box to hide details when the Slideshow has started... -->
<div id="details">
<table width="100%" border="0" cellspacing="0" cellpadding="3">
  <tr>
    <td align="center" valign="middle">
        <br>
	<table width="95%" border="0">
		<tr>
			<td width="125" align="left" class="sectiontableheader"><?php echo _ZOOM_PROPERTIES;?></td><td class="sectiontableheader">&nbsp;</td>
		</tr>
		<tr>
			<td align="left"><?php echo _ZOOM_IMGNAME;?>: </td><td align="left"><?php echo $row['name'];?></td>
		</tr>
		<tr>
			<td align="left"><?php echo _ZOOM_FILENAME;?>: </td><td align="left"><?php echo $row['filename'];?></td>
		</tr>
		<tr>
			<td align="left"><?php echo _ZOOM_DATE;?>: </td><td align="left"><?php echo $row['date'];?></td>
		</tr>
		<tr>
			<td align="left"><?php echo _ZOOM_DESCRIPTION;?>: </td><td align="left"><?php echo $row['descr']; ?></td>
		</tr>
		<?php
		if ($zoom->_CONFIG['showHits']){
		?>
		<tr>
			<td align="left"><?php echo _ZOOM_HITS;?>: </td><td align="left"><?php echo $row['hits']; ?></td>
		</tr>
		<?php
		}
		if($zoom->_CONFIG['ratingOn']){
		?>
		<tr>
			<td align="left"><?php echo _ZOOM_RATING;?></td><td align="left">
			<?php
				if($row['votenum']!=0){
					if($row['votesum']!=0){
						$rating = round($row['votesum'] / $row['votenum']);
					}else{
						$rating = 0;
					}
					echo '<img src="components/com_zoom/images/rating/rating'.$rating.'.gif" border="0"> ('.$row['votenum'].' ';
					if($row['votenum']==1)
						echo _ZOOM_VOTE.')';
					else
						echo _ZOOM_VOTES.')';
				}else{
					echo _ZOOM_NOTRATED;
				}
			?>
			</td>
		</tr>
		<?php } ?>
	</table>
	<?php
	// Display a link which enables the user to view EXIF-readings of the image, if readEXIF is set
	// to TRUE.
	if (($zoom->_CONFIG['readEXIF']) && function_exists('exif_read_data')){
		$exif = $zoom->exif_parse_file($img_abspath);
		?>
		<a href="javascript:CSAction(new Array(/*CMP*/'box2toggle'))" csclick="box2toggle">Show EXIF-data</a>
		<div id="exif">
			<table width="95%" border="0">
				<tr>
					<td width="125" align="left" class="sectiontableheader"><?php echo _ZOOM_EXIF;?></td><td class="sectiontableheader">&nbsp;</td>
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
		die("The package needed for reading EXIF-data from JPEG files is not included within the PHP running on your server.<BR>Admin, please turn the readEXIF option off at: <b>Admin System - Settings</b>");
	}
	// Display comments-form for input of comments, if comments are allowed ofcourse...
	// The Edit-Monitor registers the user input and does not allow him/ her to add a comment again
	// that session.
	if ($zoom->_CONFIG['commentsOn']) {
	?>
	<table width="95%" border="0">
		<tr>
			<td width="125" align="left" class="sectiontableheader"><?php echo _ZOOM_COMMENTS;?></td><td class="sectiontableheader">&nbsp;</td>
			<?php
			// create an extra column to display admin-functions...
			if ($zoom->_isAdmin==true){
				print "<td width=\"100\" align=\"left\" class=\"sectiontableheader\">Admin</td>";
			}
			?>
		</tr>
		<?php
		// Display comments found in the database.
		// retrieve comments from database
		$sql = "SELECT id,comment,date_format(date, '%d-%m-%y') AS date,name FROM ".$dbprefix."zoom_comments WHERE image_id=$imgid ORDER BY date ASC";
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
	        $theComment = stripslashes($row2['comment']);
	        $theComment = $zoom->processSmilies($theComment,"components/com_zoom/",$smilies);
	        if ($zoom->_isAdmin==true){
	        	// the adminstrator is able to delete comments directly through the hyperlink...
	        	print "<tr><td width=\"125\" align=\"left\">".$row2['name'].":&nbsp;</td><td align=\"left\"><font color=\"#ff0000\">".$theComment."</font>&nbsp;(".$row2['date'].")</td><td width=\"50\"><a href=\"index.php?option=com_zoom&page=view&Itemid=".$Itemid."&imgid=".$imgid."&delComment=".$row2['id']."\">"._ZOOM_DELETE."</a></td></tr>";
	        }
	        else{
	        	print "<tr><td width=\"125\" align=\"left\">".$row2['name'].":&nbsp;</td><td align=\"left\"><font color=\"#ff0000\">".$theComment."</font>&nbsp;(".$row2['date'].")</td></tr>";
	        }
	        $count++;
		}
		?>
		</td></tr>
	</table>
	  <script language="javascript" src="components/com_zoom/javascripts.js"></script>
	  <form method="post" name="post" action="index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=view" onSubmit="MM_validateForm('uname','','R','comment','','R');return document.MM_returnValue">
      	<table width="95%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td align="left" valign="top" width="80"><?php echo _ZOOM_YOUR_NAME;?>:&nbsp;</td>
					<td align="left" valign="top"><input class="inputbox" type="text" name="uname" size="25" value="<?php echo $my->username;?>"><br>
						 </td>
				</tr>
				<tr>
					<td align="left" valign="top" width="80"><?php echo _ZOOM_COMMENTS;?>: </td>
					<td align="left" valign="top"><textarea name="comment" class="inputbox" rows="2" cols="35" wrap="virtual" onselect="storeCaret(this);" onclick="storeCaret(this);" onkeyup="storeCaret(this);"></textarea>
					<input type="hidden" name="imgid" value="<?php echo $imgid;?>">
                	<input type="submit" name="submit" value="<?php echo _ZOOM_ADD;?>" class="button">
					</td>
				</tr>
			</table>
			<table border="0" cellspacing="5" cellpadding="0">
				<tr height="15">
					<td width="15" height="15"><a href="javascript:emoticon(':D')"><img title="Very Happy" src="components/com_zoom/images/smilies/icon_biggrin.gif" alt="Very Happy" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':)')"><img title="Smile" src="components/com_zoom/images/smilies/icon_smile.gif" alt="Smile" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':(')"><img title="Sad" src="components/com_zoom/images/smilies/icon_sad.gif" alt="Sad" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':o')"><img title="Surprised" src="components/com_zoom/images/smilies/icon_surprised.gif" alt="Surprised" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':shock:')"><img title="Shocked" src="components/com_zoom/images/smilies/icon_eek.gif" alt="Shocked" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':?')"><img title="Confused" src="components/com_zoom/images/smilies/icon_confused.gif" alt="Confused" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon('8)')"><img title="Cool" src="components/com_zoom/images/smilies/icon_cool.gif" alt="Cool" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':lol:')"><img title="Laughing" src="components/com_zoom/images/smilies/icon_lol.gif" alt="Laughing" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':x')"><img title="Mad" src="components/com_zoom/images/smilies/icon_mad.gif" alt="Mad" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':P')"><img title="Razz" src="components/com_zoom/images/smilies/icon_razz.gif" alt="Razz" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':oops:')"><img title="Embarassed" src="components/com_zoom/images/smilies/icon_redface.gif" alt="Embarassed" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':cry:')"><img title="Crying or Very sad" src="components/com_zoom/images/smilies/icon_cry.gif" alt="Crying or Very sad" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':evil:')"><img title="Evil or Very Mad" src="components/com_zoom/images/smilies/icon_evil.gif" alt="Evil or Very Mad" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':twisted:')"><img title="Twisted Evil" src="components/com_zoom/images/smilies/icon_twisted.gif" alt="Twisted Evil" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':roll:')"><img title="Rolling Eyes" src="components/com_zoom/images/smilies/icon_rolleyes.gif" alt="Rolling Eyes" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':wink:')"><img title="Wink" src="components/com_zoom/images/smilies/icon_wink.gif" alt="Wink" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':!:')"><img title="Exclamation" src="components/com_zoom/images/smilies/icon_exclaim.gif" alt="Exclamation" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':?:')"><img title="Question" src="components/com_zoom/images/smilies/icon_question.gif" alt="Question" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':idea:')"><img title="Idea" src="components/com_zoom/images/smilies/icon_idea.gif" alt="Idea" border="0" /></a></td>
					<td width="15" height="15"><a href="javascript:emoticon(':arrow:')"><img title="Arrow" src="components/com_zoom/images/smilies/icon_arrow.gif" alt="Arrow" border="0" /></a></td>
				</tr>
			</table>
		</form>
	<?php
	} //END if commentsOn?
	// Now, display a table which will display the images to rate the image...
	// Images are from 1-star to 5-stars.
	if ($zoom->_CONFIG['ratingOn']){
		?>
		<table border="0" width="95%" cellspacing="0" cellpadding"0">
		<tr>
			<td colspan="6" class="sectiontableheader"><strong><?php echo _ZOOM_RATING;?></td>
		</tr>
		<tr>
			<td width="16%"><a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=view&imgid=<?php echo $imgid;?>&vote=0"><img src="components/com_zoom/images/rating/rating0.gif" border="0" alt="<?php echo _ZOOM_RATE0;?>"></a></td>
			<td width="16%"><a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=view&imgid=<?php echo $imgid;?>&vote=1"><img src="components/com_zoom/images/rating/rating1.gif" border="0" alt="<?php echo _ZOOM_RATE1;?>"></a></td>
			<td width="16%"><a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=view&imgid=<?php echo $imgid;?>&vote=2"><img src="components/com_zoom/images/rating/rating2.gif" border="0" alt="<?php echo _ZOOM_RATE2;?>"></a></td>
			<td width="16%"><a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=view&imgid=<?php echo $imgid;?>&vote=3"><img src="components/com_zoom/images/rating/rating3.gif" border="0" alt="<?php echo _ZOOM_RATE3;?>"></a></td>
			<td width="16%"><a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=view&imgid=<?php echo $imgid;?>&vote=4"><img src="components/com_zoom/images/rating/rating4.gif" border="0" alt="<?php echo _ZOOM_RATE4;?>"></a></td>
			<td><a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=view&imgid=<?php echo $imgid;?>&vote=5"><img src="components/com_zoom/images/rating/rating5.gif" border="0" alt="<?php echo _ZOOM_RATE5;?>"></a></td>
		</tr>
		</table>
		<?php
	}
	?>
</td></tr>
</table>
</div>
</CENTER>
