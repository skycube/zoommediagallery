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
| Filename: settings.php                                              |
| Version: 2.0                                                        |
|                                                                     |
-----------------------------------------------------------------------
**/
// MOS Intruder Alerts
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
// inclusion of filesystem-functions, platform dependent.
if($zoom->isWin())
	include($mosConfig_absolute_path.'/components/com_zoom/classes/fs_win32.php');
else
	include($mosConfig_absolute_path.'/components/com_zoom/classes/fs_unix.php');
if($submit){
	// write new settings to database...
	$zoom->saveConfig($s01,$s02,$s03,$s04,$s05,$s06,$s07,$s08,$s09,$s10,$s11,$s12,$s13,$s14,$s15,$s16,$s17);
	// rewrite the css-file...
	$css = mosGetParam($_POST, 's18', '');
	$css_file = 'components/com_zoom/zoom.css';
	@chmod ($css_file, 0766);
	$permission = is_writable($css_file);
	if (!$permission) {
		echo "Error: Stylesheet file ".$css_file." is not writable!";
		break;
	}
	if ($fp = fs_fopen("$css_file", "w+")) {
		fputs($fp, $css, strlen($css));
		fclose ($fp);
	}
	?>
	<SCRIPT>
		alert("<?php echo _ZOOM_SETTINGS_SUCCESS;?>");
		location = "index.php?option=com_zoom&page=admin";
	</SCRIPT>
	<?php
}
?>
<!-- Begin header -->
<table border="0" cellspacing="0" cellpadding="0" width="100%">
<tr>
	<td align="center"><h3>Change settings</h3></td>
</tr>
</table>
<table border="0" cellspacing="0" cellpadding="0" width="100%">
<tr>
	<td align="center" width="100%">
	<?php
	if ($zoom->_isAdmin){
		echo '<a href="index.php?option=com_zoom&Itemid='.$Itemid.'&page=admin"><img src="components/com_zoom/images/home.gif" alt="'._ZOOM_BACK.'" border="0">&nbsp;&nbsp;'._ZOOM_BACK.'</a>';
	}
	?>
		&nbsp; | &nbsp;
</tr>
</table>
<!-- End header -->
<style type="text/css" media="screen"><!--
.settingsupper   { border-right: 1px dashed black }
hr { border: solid 2px black }
.settingslower  { border-top: 1px dashed black; border-right: 1px dashed black }
.tablebg    { background: url(components/com_zoom/images/zoom_logo_faded.gif) no-repeat fixed center 35%}
--></style>
<br>
<table border="0" cellspacing="0" cellpadding="0" width="100%" class="tablebg">
<tr><td width="20"></td>
<td>
<form name="settings" method="post" action="index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=settings">
<?php echo _ZOOM_SETTINGS_CONVTYPE;?> <select name="s01" size="1" class="inputbox">
				<option value="1" <?php if($zoom->_CONFIG['conversiontype']==1) echo "selected";?>>1</option>
				<option value="2" <?php if($zoom->_CONFIG['conversiontype']==2) echo "selected";?>>2</option>
				<option value="3" <?php if($zoom->_CONFIG['conversiontype']==3) echo "selected";?>>3</option>
			</select>  <?php echo _ZOOM_SETTINGS_IMGPATH;?> <input type="text" name="s02" value="<?php echo $zoom->_CONFIG['imagepath'];?>" size="24" class="inputbox"><br>
			1 = <a href="http://www.imagemagick.org" target=_blank>ImageMagick</a><br>
			2 = <a href="http://sourceforge.net/projects/netpbm" target=_blank>NetPBM</a><br>
			3 = GD2 library
			<hr align="left" noshade width="100%">
			<?php echo _ZOOM_SETTINGS_CONVSETTINGS;?><br>
			<?php echo _ZOOM_SETTINGS_IMPATH;?><input type="text" name="s03" value="<?php echo $zoom->_CONFIG['IM_path'];?>" size="24" class="inputbox"><?php echo _ZOOM_SETTINGS_NETPBMPATH;?><input type="text" name="s04" value="<?php echo $zoom->_CONFIG['NETPBM_path'];?>" size="24" class="inputbox">
			<hr align="left" noshade width="70%"><?php echo _ZOOM_SETTINGS_THUMBSETTINGS;?><br>
			<?php echo _ZOOM_SETTINGS_QUALITY;?><input type="text" name="s05" value="<?php echo $zoom->_CONFIG['JPEGquality'];?>" size="5" maxlength="3" class="inputbox">%<br>
			<?php echo _ZOOM_SETTINGS_SIZE;?><input type="text" name="s06" value="<?php echo $zoom->_CONFIG['size'];?>" size="5" maxlength="3" class="inputbox">px<br>
			<?php echo _ZOOM_SETTINGS_TEMPDESCR;?><input type="text" name="s16" value="<?php echo $zoom->_CONFIG['tempDescr'];?>" size="24" maxlength="240" class="inputbox">
			<hr align="left" noshade width="70%">
			<?php echo _ZOOM_SETTINGS_LAYSETTINGS;?><br>
			<table border="0" cellspacing="3" cellpadding="3">
				<tr>
					<td class="settingsupper"><?php echo _ZOOM_SETTINGS_COLUMNS;?></td>
					<td class="settingsupper"><?php echo _ZOOM_SETTINGS_THUMBSPG;?></td>
					<td class="settingsupper"><?php echo _ZOOM_SETTINGS_COMMENTS;?></td>
					<td class="settingsupper"><?php echo _ZOOM_SETTINGS_POPUP;?></td>
					<td class="settingsupper"><?php echo _ZOOM_SETTINGS_CATIMG;?></td>
					<td class="settingsupper"><?php echo _ZOOM_SETTINGS_SLIDESHOW;?></td>
					<td class="settingsupper"><?php echo _ZOOM_SETTINGS_ZOOMLOGO;?></td>
				</tr>
				<tr>
					<td class="settingslower"><input type="text" name="s07" size="5" maxlength="2" value="<?php echo $zoom->_CONFIG['columnsno'];?>" class="inputbox"></td>
					<td class="settingslower"><input type="text" name="s08" size="5" maxlength="2" value="<?php echo $zoom->_CONFIG['PageSize'];?>" class="inputbox"></td>
					<td class="settingslower"><select name="s09" size="1" class="inputbox">
							<option value="1" <?php if($zoom->_CONFIG['commentsOn']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
							<option value="0" <?php if(!$zoom->_CONFIG['commentsOn']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
						</select></td>
					<td class="settingslower"><select name="s10" size="1" class="inputbox">
							<option value="1" <?php if($zoom->_CONFIG['popUpImages']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
							<option value="0" <?php if(!$zoom->_CONFIG['popUpImages']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
						</select></td>
					<td class="settingslower"><select name="s11" size="1" class="inputbox">
							<option value="1" <?php if($zoom->_CONFIG['catImg']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
							<option value="0" <?php if(!$zoom->_CONFIG['catImg']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
						</select></td>
					<td class="settingslower"><select name="s12" size="1" class="inputbox">
							<option value="1" <?php if($zoom->_CONFIG['slideshow']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
							<option value="0" <?php if(!$zoom->_CONFIG['slideshow']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
						</select></td>
					<td class="settingslower"><select name="s13" size="1" class="inputbox">
							<option value="1" <?php if($zoom->_CONFIG['displaylogo']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
							<option value="0" <?php if(!$zoom->_CONFIG['displaylogo']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
						</select></td>
				</tr>
				<tr>
					<td class="settingsupper"><?php echo _ZOOM_SETTINGS_READEXIF;?></td>
					<td class="settingsupper">&nbsp;</td>
					<td class="settingsupper"><?php echo _ZOOM_SETTINGS_RATING;?></td>
				</tr>
				<tr>
					<td class="settingslower"><select name="s14" size="1" class="inputbox">
							<option value="1" <?php if($zoom->_CONFIG['readEXIF']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
							<option value="0" <?php if(!$zoom->_CONFIG['readEXIF']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
						</select></td>
					<td class="settingslower">&nbsp;</td>
					<td class="settingslower"><select name="s17" size="1" class="inputbox">
							<option value="1" <?php if($zoom->_CONFIG['ratingOn']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
							<option value="0" <?php if(!$zoom->_CONFIG['ratingOn']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
						</select></td>
				</tr>
				<tr>
					<?php
					$css = fread(fs_fopen("components/com_zoom/zoom.css", "r"), fs_filesize("components/com_zoom/zoom.css"));
					?>
					<td class="settingsupper"><?php echo _ZOOM_SETTINGS_CSS;?></td>
					<td class="settingsupper" colspan="5">
						<textarea name="s18" rows="10" cols="50" class="inputbox"><?php echo stripslashes($css);?></textarea>
					</td>
				</tr>
			</table>
			<hr align="left" noshade width="70%">
			<?php echo _ZOOM_SETTINGS_ACCESS;?><br>
			<?php echo _ZOOM_SETTINGS_USERUPL;?>&nbsp;<select name="s15" size="1" class="inputbox">
				<option value="1" <?php if($zoom->_CONFIG['allowUserUpload']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
				<option value="0" <?php if(!$zoom->_CONFIG['allowUserUpload']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
			</select>
			<p align="center"><input type="submit" name="submit" value="<?php echo _ZOOM_SAVE;?> " class="button">  <input type="reset" class="button"></p>
		</form>
</td></tr>
</table>