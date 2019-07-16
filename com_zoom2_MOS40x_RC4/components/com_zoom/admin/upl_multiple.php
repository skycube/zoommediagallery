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
if (!$boxes) {
	$boxes = 5;
}

$sql = "SELECT * FROM ".$dbprefix."zoom";
$result = $database->openConnectionWithReturn($sql);
//$result = mysql_query($sql);
$zoom->createSubmitScript("count_form");
$zoom->createFormControlScript("upload_form");
?>
<?php echo _ZOOM_UPLOAD_INTRO;?>
<br><br>
<form enctype="multipart/form-data" name="count_form" method="POST" action="index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=upload&formtype=multiple">
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
<tr>
	<td>&nbsp;</td><td><input type="checkbox" name="setFilename" value="1"<?php if($zoom->_CONFIG['autonumber']) echo " checked";?>> <?php echo _ZOOM_FORM_SETFILENAME;?></td>
</tr>
<?php
$tabcnt=1;
for ($i = 0; $i < $boxes;  $i++) { ?>
	<tr><td height="5"></td></tr>
	<tr class="<?php echo $zoom->_tabclass[$tabcnt]; ?>">
		<td valign="top"><?echo _ZOOM_FORM_IMAGEFILE;?>: </td><td valign="top"><input class="inputbox" type="file" name="userfile[]" size="30"><br><br></td>
	</tr>
	<tr class="<?php echo $zoom->_tabclass[$tabcnt];?>">
		<td valign="top"><?php echo _ZOOM_NAME;?>: </td><td valign="top"><input type="text" name="imgname[]" size="30" value="<?php echo $zoom->_CONFIG['tempName'];?>" class="inputbox"><br><br></td>
	</tr>
	<tr class="<?php echo $zoom->_tabclass[$tabcnt]; ?>">
		<td valign="top"><?echo _ZOOM_DESCRIPTION;?>: </td><td valign="top"><textarea class="inputbox" cols="25" rows="5" name="usercaption[]"><?php echo $zoom->_CONFIG['tempDescr'];?></textarea></td>
	</tr>
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