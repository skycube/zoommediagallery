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
| Filename: upl_multiple.php                                          |
| Version: 2.0                                                        |
|                                                                     |
-----------------------------------------------------------------------
**/
// MOS Intruder Alerts
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
if (!$boxes) {
	$boxes = 5;
}

$sql = "SELECT * FROM ".$mosConfig_dbprefix."zoom";
$result = $database->openConnectionWithReturn($sql);
//$result = mysql_query($sql);
$zoom->createSubmitScript("count_form");
?>
<br>
<span class="popup"><?php echo _ZOOM_UPLOAD_INTRO;?>
<br><br>
<form enctype="multipart/form-data" name="count_form" method="POST" action="index.php?option=com_zoom&page=upload&formtype=multiple">
<?php echo _ZOOM_UPLOAD_STEP1;?>
<select name="boxes" onChange='reloadPage()' class="inputbox">
<?php for ($i = 1; $i <= 10;  $i++) {
	echo "<option ";
        if ($i == $boxes) {
		echo "selected ";
	}
	echo "value=\"$i\">$i\n";

} ?>
</select>
<br>
</form>

<form enctype="multipart/form-data" name="upload_form" method="POST" action="index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=upload&formtype=save">
<?php echo _ZOOM_UPLOAD_STEP2;?>
<br>
<?php
echo _ZOOM_FORM_INGALLERY.": ";
echo $zoom->createCatDropdown('catid', '<OPTION value="">---&nbsp;'._ZOOM_PICK.'&nbsp;---</OPTION>');
?>
<br><br><br>
<?php echo _ZOOM_UPLOAD_STEP3;?>
<table cellpadding="0" cellspacing="0">
<?php $tabcnt=1; ?>
<?php for ($i = 0; $i < $boxes;  $i++) { ?>
	<TR><TD height="5"></TD></TR>
	<TR class="<?php echo $zoom->_tabclass[$tabcnt]; ?>">
		<TD valign="top"><?echo _ZOOM_FORM_IMAGEFILE;?>:</TD><TD valign="top"><input class="inputbox" type="file" name="userfile[]" size="30"><br><br></TD>
	</TR>
	<TR class="<?php echo $zoom->_tabclass[$tabcnt]; ?>">
		<TD valign="top"><?echo _ZOOM_DESCRIPTION;?></TD><TD valign="top"><textarea class="inputbox" cols="25" rows="5" name="usercaption[]"></textarea></TD>
	</TR>
	<?php
	if ($tabcnt == 1){
    	$tabcnt = 0;
    } else {
		$tabcnt++;
    }
    ?>
<?php } ?>
</table>
<br>
<center>
<input type="submit" value="<?echo _ZOOM_BUTTON_UPLOAD;?>" name="submit1" class="button">
</center>
</form>
<form enctype="multipart/form-data" name="uploadurl_form" method="POST" action="index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=upload&formtype=save">
Or, upload any images found at this location.<br>
The location can either be a URL or a directory on the server.
<br>
<span class="admin">
  Tip: FTP images to a directory on your server then provide that path here!
</span>
<br>

<input type="text" name="urls[]" size=40 class="inputbox">
<br>
<input type=checkbox name=setCaption checked value="1"> Set photo captions with original filenames.
<br><br>
<center>
<input name="submit" type="button" value="Submit URL or directory" onClick='opener.showProgress(); document.uploadurl_form.submit()' class="button">
</center>
</form> 