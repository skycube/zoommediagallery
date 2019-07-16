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
	$theComment = $zoom->cleanString($comment);
	$zoom->addComment($imgid,$theName,$theComment);
}
if (isset($delComment)) {
	$zoom->delComment($delComment);
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
$img_relpath = $zoom->_CONFIG['imagepath'].$cat->catdir."/".$row['name'];
$img_abspath = $absolute_path.$zoom->_CONFIG['imagepath'].$cat->catdir."/".$row['name'];
$size = getimagesize($img_relpath);
$id_cache = array();
$query1="SELECT id, name FROM ".$dbprefix."zoomfiles WHERE gallery_id=$cat->id ORDER BY id ASC";
$result1 = $database->openConnectionWithReturn($query1);
while ($row1=mysql_fetch_object($result1)) {
  $id_cache[] = $row1->id;
  $fn_cache[] = $zoom->_CONFIG['imagepath'].$cat->catdir."/".$row1->name;
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
	window.document.location= 'index.php?option=com_zoom&page=view&Itemid=<?php echo $Itemid;?>&imgid=<?php echo $imgid;?>&delComment=' +id;
}
// -->
</script>
<table border="0" cellspacing="0" cellpadding="0" width="100%">
	<tr>
       <td width="30" class="<?php echo $zoom->_tabclass[1]; ?>"></td>
       <TD class="<?php echo $zoom->_tabclass[1]; ?>">
		<a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid ?>">
		<img src="components/com_zoom/images/home.gif" alt="<?echo _ZOOM_BACK;?>" border="0">&nbsp;&nbsp;<?echo _ZOOM_BACK;?>
		</a> > <a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid ?>&catid=<?php echo $row['gallery_id'];?>"><?echo $cat->catname;?>
		</a> > <strong><?php echo $row['name'];?></strong></TD>
	</tr>
</table>
<center>
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
		<a href="index.php?option=com_zoom&page=view&imgid=<?php echo $pid;?>&hit=<?php echo $hit;?>"><img src="components/com_zoom/images/back.gif" border="0" width="25" height="25" alt="<?php echo _ZOOM_PREVPIC;?>"></a>
		<a href="javascript:stopstatus=0;runSlideShow();CSAction(new Array(/*CMP*/'box1hide'))" csclick="box1hide"><img src="components/com_zoom/images/play.gif" border="0" width="25" height="25" alt="<?php echo _ZOOM_PLAY;?>"></a> <a href="javascript:endSlideShow();CSAction(new Array(/*CMP*/'box1show'))" csclick="box1show"><img src="components/com_zoom/images/stop.gif" border="0" width="25" height="25" alt="<?php echo _ZOOM_STOP;?>"></a>
		<a href="index.php?option=com_zoom&page=view&imgid=<?php echo $nid;?>&hit=<?php echo $hit;?>"><img src="components/com_zoom/images/next.gif" border="0" alt="<?php echo _ZOOM_NEXTPIC;?>"></a>
	</td>
</tr>
</table>
<?php
} //END IF
?>
<img src="<?php echo $img_relpath; ?>" alt="" border="1" name="zImage">
<!-- what would zOOm Image Gallery be withouts its zoom-function! -->
<br><a href="javascript:zoomIn()"><img src="components/com_zoom/images/zoom_plus.gif" alt="+" border="0"></a><a href="javascript:imReset()"><?php echo _ZOOM_RESET;?></a><a href="javascript:zoomOut()"><img src="components/com_zoom/images/zoom_minus.gif" alt="-" border="0"></a>
<!-- beginning of floating-box to hide details when the Slideshow has started... -->
<div id="details">
<table width="100%" border="0" cellspacing="0" cellpadding="3">
  <tr>
    <td align="center" valign="middle">
        <br>
	<table width="95%" border="0">
		<tr class="sectiontableheader">
			<td width="125" align="left"><strong><font color="#FFFFFF"><?php echo _ZOOM_PROPERTIES;?></font></strong></td><td>&nbsp;</td>
		</tr>
		<tr>
			<td align="left"><?php echo _ZOOM_PICNAME;?>:</td><td align="left"><?php echo $row['name'];?></td>
		</tr>
		<tr>
			<td align="left"><?php echo _ZOOM_DESCRIPTION;?>:</td><td align="left"><?php echo $row['descr']; ?></td>
		</tr>
		<tr>
			<td align="left"><?php echo _ZOOM_HITS;?>:</td><td align="left"><?php echo $row['hits']; ?></td>
		</tr>
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
				<tr class="sectiontableheader">
					<td width="125" align="left"><strong><font color="#FFFFFF"><?php echo _ZOOM_EXIF;?></font></strong></td><td>&nbsp;</td>
				</tr>
			</table>
		</div>
		<?php
	}
	elseif ($zoom->_CONFIG['readEXIF']){
		die("The package needed for reading EXIF-data from JPEG files is not included within the PHP running on your server.<BR>Admin, please turn the readEXIF option off at: <b>Admin System - Settings</b>");
	}
	// Display comments-form for input of comments, if comments are allowed ofcourse...
	// minor security note: a user can submit comments only once through this form...however if the same
	// user closes the window and re-opens it, then he/ she can add comments again - so, not failproof! 
	if ($zoom->_CONFIG['commentsOn']) {
	?>
	<table width="95%" border="0">
		<tr class="sectiontableheader">
			<td width="125" align="left"><strong><font color="#FFFFFF"><?php echo _ZOOM_COMMENTS;?></font></strong></td><td>&nbsp;</td>
			<?php
			// create an extra column to display admin-functions...
			if ($zoom->_isAdmin==true){
				print "<td width=\"100\" align=\"left\"><strong><font color=\"#FFFFFF\">Admin</font></strong></td>";
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
	        $theComment = $zoom->processSmilies($row2['comment'],"components/com_zoom/",$smilies);
	        if ($zoom->_isAdmin==true){
	        	// the adminstrator is able to delete comments directly through the hyperlink...
	        	print "<tr><td width=\"125\" align=\"left\">".$row2['name'].":&nbsp;</td><td align=\"left\"><font color=\"#ff0000\">".$theComment."</font>&nbsp;(".$row2['date'].")</td><td width=\"50\"><a href=\"#\" onClick=\"newLoc(".$row2['id']."); return true\">"._ZOOM_DELETE."</a></td></tr>";
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
	  <form method="post" name="post" action="index.php?option=com_zoom&page=view" onSubmit="MM_validateForm('uname','','R','comment','','R');return document.MM_returnValue">
      	<table width="95%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td align="left" valign="top" width="80">Name:&nbsp;</td>
					<td align="left" valign="top"><input class="inputbox" type="text" name="uname" size="25"><br>
						 </td>
				</tr>
				<tr>
					<td align="left" valign="top" width="80">Comments: </td>
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
	<? } //END if commentsOn?
	?>
</td></tr>
</table>
</div>
</CENTER>
