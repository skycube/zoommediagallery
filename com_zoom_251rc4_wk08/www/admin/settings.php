<?php
//zOOm Media Gallery//
/**
-----------------------------------------------------------------------
|  zOOm Media Gallery! by Mike de Boer - a multi-gallery component    |
-----------------------------------------------------------------------

-----------------------------------------------------------------------
|                                                                     |
| Author: Mike de Boer, <http://www.mikedeboer.nl>                    |
| Copyright: copyright (C) 2007 by Mike de Boer                       |
| Description: zOOm Media Gallery, a multi-gallery component for      |
|              Joomla!. It's the most feature-rich gallery component  |
|              for Joomla!! For documentation and a detailed list     |
|              of features, check the zOOm homepage:                  |
|              http://www.zoomfactory.org                             |
| License: GPL                                                        |
| Filename: settings.php                                              |
|                                                                     |
-----------------------------------------------------------------------
* @version $Id: settings.php 106 2007-02-10 22:30:30Z kevinuru $
* @package zOOmGallery
* @author Mike de Boer <mailme@mikedeboer.nl> 
**/
// MOS Intruder Alerts
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
$Itemid = mosGetParam($_REQUEST,'Itemid');
$action = trim(mosGetParam($_REQUEST,'action'));
if ($action == 'wipe'){
	global $mosConfig_absolute_path;
    $zoom->wipeZoom();
    $imgdir = $mosConfig_absolute_path.'/'.$zoom->_CONFIG['imagepath'];
    $zoom->delete_directory($imgdir);
    @mkdir ($mosConfig_absolute_path.'/'.$zoom->_CONFIG['imagepath'], 0777);
    @mkdir ($mosConfig_absolute_path.'/'.$zoom->_CONFIG['imagepath']."watermarks", 0777);
	@$zoom->platform->chmod($mosConfig_absolute_path.'/'.$zoom->_CONFIG['imagepath'], '0777');
    @$zoom->platform->chmod($mosConfig_absolute_path.'/'.$zoom->_CONFIG['imagepath']."watermarks", '0777');
	@$zoom->platform->copy($mosConfig_absolute_path."/components/com_zoom/www/images/zoom_logo_faded.png", $mosConfig_absolute_path.'/'.$zoom->_CONFIG['imagepath']."watermarks/zoom_logo_faded.png");
}
$theButton = trim(mosGetParam($_REQUEST, 'theButton'));
if ($theButton == 'save') {
	// write new settings to database...
	if ($zoom->saveConfig()) {
		// rewrite the css-file...
		$css_popup = $zoom->stripslashesSafe(trim(mosGetParam($_REQUEST,'s18')));
		$css_zoom = $zoom->stripslashesSafe(trim(mosGetParam($_REQUEST,'s60')));
		$css_popup_file = $mosConfig_absolute_path.'/components/com_zoom/etc/popup.css';
		$css_zoom_file = $mosConfig_absolute_path.'/components/com_zoom/etc/zoom.css';
		@$zoom->platform->chmod($css_popup_file, '0766');
		@$zoom->platform->chmod($css_zoom_file, '0766');
		$permission1 = is_writable($css_popup_file);
		$permission2 = is_writable($css_zoom_file);
		if (!$permission1) {
			echo sprintf( _ZOOM_A_ERROR_CSS_NOT_WRITEABLE, $css_popup_file );
			exit();
		} else {
		    $zoom->writefile($css_popup_file, $css_popup);
		}
		if (!$permission2) {
			echo sprintf( _ZOOM_A_ERROR_CSS_NOT_WRITEABLE, $css_zoom_file );
			exit();
		} else {
		    $zoom->writefile($css_zoom_file, $css_zoom);
		}
	    if(strlen($zoom->_CONFIG['safemodeversion']) > 0){
	    	// rewrite the ftp-configuration file...
	    	$ftp_server = $zoom->stripslashesSafe(trim(mosGetParam($_REQUEST,'s47')));
	    	$ftp_username = $zoom->stripslashesSafe(trim(mosGetParam($_REQUEST,'s48')));
	    	$ftp_pass = $zoom->stripslashesSafe(trim(mosGetParam($_REQUEST,'s49')));
	    	$ftp_hostdir = $zoom->stripslashesSafe(trim(mosGetParam($_REQUEST,'s52')));
	    	$ftp_cfg = ("<?php\n"
	    	 . "defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );\n"
	    	 . "\$ftp_server = \"{$ftp_server}\";\n"
	    	 . "\$ftp_username = \"{$ftp_username}\";\n"
	    	 . "\$ftp_pass = \"{$ftp_pass}\";\n"
	    	 . "\$ftp_hostdir = \"{$ftp_hostdir}\";\n"
	    	 . "?>");
	    	$ftp_file = $mosConfig_absolute_path.'/components/com_zoom/etc/safemode.php';
			@$zoom->platform->chmod($ftp_file, '0766');
			$permission = is_writable($ftp_file);
			if (!$permission) {
				echo sprintf( _ZOOM_A_ERROR_FTP_NOT_WRITEABLE, $ftp_file );
				exit();
			}
		    $zoom->writefile($ftp_file, $ftp_cfg);
	    }
		mosRedirect("index".$backend.".php?option=com_zoom&page=settings&Itemid=".$Itemid, _ZOOM_SETTINGS_SUCCESS);
	} else {
		mosRedirect("index".$backend.".php?option=com_zoom&page=settings&Itemid=".$Itemid, _ZOOM_A_ERROR_CONFTODB);
	}
} elseif ( $theButton == 'cancel' ) {
	mosRedirect("index".$backend.".php?option=com_zoom&page=admin&Itemid=".$Itemid);
} elseif ( $theButton == "watermark" ) {
	if (!empty($_FILES['new_wm_file']['name'])) {
		$tag = ereg_replace(".*\.([^\.]*)$", "\\1", $_FILES['new_wm_file']['name']);
		$tag = strtolower($tag);
		if ($zoom->isImage($tag)) {
			if (move_uploaded_file($_FILES['new_wm_file']['tmp_name'], $mosConfig_absolute_path."/".$zoom->_CONFIG['imagepath']."/watermarks/".$_FILES['new_wm_file']['name'])) {
				@$zoom->platform->chmod($mosConfig_absolute_path."/".$zoom->_CONFIG['imagepath']."/watermarks/".$_FILES['new_wm_file']['name'], '0777');
				mosRedirect("index".$backend.".php?option=com_zoom&page=settings&Itemid=".$Itemid, _ZOOM_SETTINGS_WM_UPLOAD_SUCCESS);
			} else {
			    mosRedirect("index".$backend.".php?option=com_zoom&page=settings&Itemid=".$Itemid, _ZOOM_SETTINGS_WM_UPLOAD_FAIL);
			}
		}
	}
} elseif (!empty($theButton) && @$zoom->platform->file_exists($mosConfig_absolute_path."/".$zoom->_CONFIG['imagepath']."/watermarks/".$theButton)) {
    if (@$zoom->platform->unlink($mosConfig_absolute_path."/".$zoom->_CONFIG['imagepath']."/watermarks/".$theButton)) {
        mosRedirect("index".$backend.".php?option=com_zoom&page=settings&Itemid=".$Itemid, _ZOOM_SETTINGS_WM_DEL_SUCCESS);
    } else {
        mosRedirect("index".$backend.".php?option=com_zoom&page=settings&Itemid=".$Itemid, _ZOOM_SETTINGS_WM_DEL_FAIL);
    }
}
// HTML starts here.
// First, do autoDetect on Image Libraries...
$imageLibs = $zoom->toolbox->getImageLibs();
?>
<script language="javascript" type="text/javascript">
<!--
function submitform(pressbutton){
	document.adminForm.theButton.value=pressbutton;
	try {
		document.adminForm.onsubmit();
		}
	catch(e){}
	document.adminForm.submit();
}
function submitbutton(pressbutton) {
	var form = document.adminForm;
	if (pressbutton == 'cancel') {
		submitform( pressbutton );
		return;
	} else if (pressbutton == 'save') {
		// do field validation
		if (form.s01.value == "") {
			alert ( "<?php echo _E_WARNTITLE; ?>" );
		} else {
			submitform(pressbutton);
		}
	} else if (pressbutton == 'watermark') {
		if (form.new_wm_file.value == "") {
			alert ( "<?php echo _ZOOM_ALERT_NOPICSELECTED; ?>" );
		} else {
			submitform(pressbutton);
		}
	} else {
	    submitform(pressbutton);
	}
}

var swapped = new Array();

function enable_priv(elmnt) {
    MM_swapImage('img_' + elmnt, '', '<?php echo $mosConfig_live_site;?>/components/com_zoom/www/images/priv_yes.png', 1);
    document.adminForm.elements[elmnt].value = 1;
    swapped[elmnt] = 1;
}
function disable_priv(elmnt) {
    MM_swapImage('img_' + elmnt, '', '<?php echo $mosConfig_live_site;?>/components/com_zoom/www/images/delete.png', 1);
    document.adminForm.elements[elmnt].value = 0;
    swapped[elmnt] = 0;
}
function swap_priv(elmnt) {
    form = document.adminForm;
    if (swapped[elmnt] != null) {
        if (swapped[elmnt] == 1) {
            disable_priv(elmnt);
        } else {
            enable_priv(elmnt);
        }
    } else {
        if (document.adminForm.elements[elmnt].value == 1) {
            disable_priv(elmnt);
        } else {
            enable_priv(elmnt);
        }
    }
}
// -->
</script>
<style type="text/css" media="screen">
	<!--
	.settingsupper   { border-right: 1px dashed #CCCCCC; border-top: 1px dashed #CCCCCC; }
	hr { border: solid 2px black }
	-->
</style>
<!-- Begin header -->
<?php
if (!$zoom->_isBackend) {
?>
<table border="0" cellspacing="0" cellpadding="0" width="100%">
  <tr>
    <td align="center" width="100%"><a href="<?php echo ($zoom->_isBackend) ? "index2.php?option=com_zoom&amp;Itemid=".$Itemid."&amp;page=admin" : sefReltoAbs("index.php?option=com_zoom&amp;Itemid=".$Itemid."&amp;page=admin");?>"> <img src="<?php echo $mosConfig_live_site;?>/components/com_zoom/www/images/home.gif" alt="<?echo _ZOOM_MAINSCREEN;?>" border="0" />&nbsp;&nbsp;<?php echo _ZOOM_MAINSCREEN;?></a> </td>
  </tr>
</table>
<?php
}
?>
<center>
  <table border="0" cellspacing="0" cellpadding="5">
    <tr>
      <td align="left" valign="bottom"><img src="<?php echo $mosConfig_live_site;?>/components/com_zoom/www/images/admin/settings_f2.png" border="0" alt="<?php echo _ZOOM_SETTINGS;?>" /> &nbsp;<b><font size="4"><?php echo _ZOOM_SETTINGS;?> : </font></b> </td>
      <td align="left" valign="bottom"><b>configuration file is : <br />
        stylesheet files are : <br />
        FTP configuration file is : </b> </td>
      <td align="left" valign="bottom"><b><?php echo ((is_writable($mosConfig_absolute_path."/components/com_zoom/etc/zoom_config.php")) ? "<font color=\"green\">Writable</font>" : "<font color=\"red\">Not Writable</font>");?><br />
        <?php echo ((is_writable($mosConfig_absolute_path."/components/com_zoom/etc/zoom.css") && is_writable($mosConfig_absolute_path."/components/com_zoom/etc/popup.css")) ? "<font color=\"green\">Writable</font>" : "<font color=\"red\">Not Writable</font>");?><br />
        <?php echo ((is_writable($mosConfig_absolute_path."/components/com_zoom/etc/safemode.php")) ? "<font color=\"green\">Writable</font>" : "<font color=\"red\">Not Writable</font>");?></b> </td>
    </tr>
  </table>
</center>
<!-- End header -->
<?php
if (!$zoom->_isBackend) {
?>
<table cellspacing="0" cellpadding="4" border="0" width="100%">
  <tr>
    <td width="85%" class="tabpadding" align="center"><button onclick="submitbutton('save');" onmouseout="MM_swapImgRestore();return nd();"  onmouseover="MM_swapImage('save','','images/save_f2.png',1);return overlib('<?php echo _ZOOM_SAVE;?>');" class="button"><img src="images/save.png" alt="<?php echo _ZOOM_SAVE;?>" border="0" name="save" /></button>
      <button onclick="submitbutton('cancel');" onmouseout="MM_swapImgRestore();return nd();"  onmouseover="MM_swapImage('cancel','','images/cancel_f2.png',1);return overlib('<?php echo _CMN_CANCEL;?>');" class="button"><img src="images/cancel.png" alt="<?php echo _CMN_CANCEL;?>" border="0" name="cancel" /></button></td>
  </tr>
</table>
<?php
}
?>
<form enctype="multipart/form-data" name="adminForm" method="post" action="<?php echo ($zoom->_isBackend) ? "index2.php" : sefReltoAbs("index.php?option=com_zoom&page=settings");?>">
  <?php 
  $tabs = new mosTabs(1);
  $tabs->startPane("modules-cpanel"); 
        $tabs->startTab(_ZOOM_SETTINGS_TAB1 ,"module19");
  ?>
      <table border="0" cellspacing="0" cellpadding="5" width="100%" class="adminform">
        <tr>
          <td width="20">&nbsp;</td>
          <td><strong><?php echo _ZOOM_SYSTEM_TITLE;?></strong></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td width="20">&nbsp;</td>
          <td><?php echo _ZOOM_SETTINGS_TITLE;?> </td>
          <td colspan="2"><input type="text" name="s28" size="30" maxlength="50" value="<?php echo $zoom->_CONFIG['zoom_title'];?>" class="inputbox" />
          </td>
        </tr>
        <tr>
          <td width="20">&nbsp;</td>
          <td><?php echo _ZOOM_SETTINGS_CMTLENGTH;?> </td>
          <td colspan="2"><input type="text" name="s44" size="7" maxlength="4" value="<?php echo $zoom->_CONFIG['cmtLength'];?>" class="inputbox" />
            <em><?php echo _ZOOM_SETTINGS_CHARS;?></em> </td>
        </tr>
        <tr>
          <td width="20">&nbsp;</td>
          <td><?php echo _ZOOM_SETTINGS_GALLERYPREFIX;?> </td>
          <td colspan="2"><input type="text" name="s50" size="10" maxlength="7" value="<?php echo $zoom->_CONFIG['galleryPrefix'];?>" class="inputbox" />
          </td>
        </tr>
        <tr>
          <td width="20">&nbsp;</td>
          <td><?php echo _ZOOM_SETTINGS_SHOWOCCSPACE;?> </td>
          <td colspan="2">
            <select name="s79" size="1" class="inputbox">
            <option value="1" <?php if($zoom->_CONFIG['showoccspace']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
            <option value="0" <?php if(!$zoom->_CONFIG['showoccspace']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
            </select>
          </td>
        </tr>
        <tr>
          <td width="20">&nbsp;</td>
          <td><?php echo _ZOOM_SETTINGS_DDONOF;?> </td>
          <td colspan="2">
            <select name="s81" size="1" class="inputbox">
            <option value="1" <?php if($zoom->_CONFIG['dragdrop']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
            <option value="0" <?php if(!$zoom->_CONFIG['dragdrop']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
            </select>
          </td>
        </tr>
        <tr>
          <td width="20">&nbsp;</td>
          <td><?php echo _ZOOM_SETTINGS_SETMENUOPTION;?> </td>
          <td colspan="2">
			  <select name="s33" size="1" class="inputbox">
		      <option value="1" <?php if($zoom->issetUserMenu()) echo "selected";?>><?php echo _ZOOM_YES;?></option>
		      <option value="0" <?php if(!$zoom->issetUserMenu()) echo "selected";?>><?php echo _ZOOM_NO;?></option>
      	  </select>
		</td>
        </tr>
      </table>
    <?php $tabs->endTab(); 
    $tabs->startTab(_ZOOM_SETTINGS_TAB2 ,"module20");
    ?>
      <table border="0" cellspacing="0" cellpadding="5" width="100%" class="adminform">
        <tr>
          <td width="30">&nbsp;</td>
          <td colspan="3"><strong><?php echo _ZOOM_SETTINGS_CONVSETTINGS;?></strong> </td>
        </tr>
        <tr>
          <td width="30">
            <a href="#" onmouseover="return overlib('<?php echo _ZOOM_SETTINGS_TTIMGPATH; echo (is_writable($mosConfig_absolute_path."/".$zoom->_CONFIG['imagepath'])) ? "<b>Writable</b>" : "<b>Unwritable</b>";?>', CAPTION, '<?php echo _ZOOM_TOOLTIP;?>');" onmouseout="return nd();"> &nbsp;<img src="<?php echo $mosConfig_live_site;?>/components/com_zoom/www/images/tooltip.png" alt="" border="0" /> </a>
          </td>
          <td><?php echo _ZOOM_SETTINGS_IMGPATH;?> </td>
          <td colspan="2"><input type="text" name="s02" value="<?php echo $zoom->_CONFIG['imagepath'];?>" size="40" class="inputbox" /></td>
        </tr>
        <tr>
          <td width="30">&nbsp;</td>
          <td><?php echo _ZOOM_SETTINGS_IMPATH;?> </td>
          <td colspan="2"><input type="text" name="s03" value="<?php echo (array_key_exists('imagemagick',$imageLibs)) ? 'auto' : $zoom->_CONFIG['IM_path'];?>" size="40" class="inputbox" />
          </td>
        </tr>
        <tr>
          <td width="30">&nbsp;</td>
          <td><?php echo _ZOOM_SETTINGS_NETPBMPATH;?> </td>
          <td colspan="2"><input type="text" name="s04" value="<?php echo (array_key_exists('netpbm',$imageLibs)) ? 'auto' : $zoom->_CONFIG['NETPBM_path'];?>" size="40" class="inputbox" />
          </td>
        </tr>
        <tr>
          <td width="30">
            <a href="#" onmouseover="return overlib('<?php echo _ZOOM_SETTINGS_FFMPEGTOOLTIP.implode(", ", $zoom->thumbnailableMovieList());?>', CAPTION, '<?php echo _ZOOM_TOOLTIP;?>');" onmouseout="return nd();"> &nbsp;<img src="<?php echo $mosConfig_live_site;?>/components/com_zoom/www/images/tooltip.png" alt="" border="0" /> </a>
          </td>
          <td><?php echo _ZOOM_SETTINGS_FFMPEGPATH;?>: </td>
          <td colspan="2"><input type="text" name="s36" value="<?php echo (array_key_exists('ffmpeg',$imageLibs)) ? 'auto' : $zoom->_CONFIG['FFMPEG_path'];?>" size="40" class="inputbox" />
            <?php
				if( array_key_exists( 'ffmpeg', $imageLibs ) ){
					echo '<strong><font color="green">'._ZOOM_SETTINGS_AUTODET.$imageLibs['ffmpeg'].'</font></strong>';
				}else{
					echo '<font color="red">' . _ZOOM_A_ERROR_NOFFMPEG . '</font>';
				} ?>
          </td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
          <td colspan="2">
            <input type="checkbox" name="s82" value="1"<?php if ($zoom->_CONFIG['override_FFMPEG']) echo " checked"; ?> />
            &nbsp;<?php echo _ZOOM_SETTINGS_OVERRIDE_FFMPEG; ?>
          </td>
        </tr>
        <tr>
          <td width="30">
            <a href="#" onmouseover="return overlib('<?php echo _ZOOM_SETTINGS_XPDFTOOLTIP;?>', CAPTION, '<?php echo _ZOOM_TOOLTIP;?>');" onmouseout="return nd();"> &nbsp;<img src="<?php echo $mosConfig_live_site;?>/components/com_zoom/www/images/tooltip.png" alt="" border="0" /> </a>
          </td>
          <td><?php echo _ZOOM_SETTINGS_PDFTOTEXTPATH;?>: </td>
          <td colspan="2"><input type="text" name="s45" value="<?php echo (array_key_exists('pdftotext',$imageLibs)) ? 'auto' : $zoom->_CONFIG['PDF_path'];?>" size="40" class="inputbox" />
            <?php
				if(array_key_exists('pdftotext',$imageLibs)){
					echo '<strong><font color="green">'._ZOOM_SETTINGS_AUTODET.$imageLibs['pdftotext'].'</font></strong>';
				}else{
					echo '<font color="red">' . _ZOOM_A_ERROR_NOPDFTOTEXT . '</font>';
				} ?>
          </td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
          <td colspan="2">
            <input type="checkbox" name="s83" value="1"<?php if ($zoom->_CONFIG['override_PDF']) echo " checked"; ?> />
            &nbsp;<?php echo _ZOOM_SETTINGS_OVERRIDE_PDF; ?>
          </td>
        </tr>
        <tr>
          <td width="30">&nbsp;</td>
          <td colspan="3" style="border-bottom: 1px dashed #CCCCCC;">&nbsp;</td>
        </tr>
        <tr>
          <td width="30">&nbsp;</td>
          <td valign="top"><strong><?php echo _ZOOM_SETTINGS_CONVTYPE;?></strong> </td>
          <td valign="top"><select name="s01" size="1" class="inputbox">
              <option value="1" <?php if($zoom->_CONFIG['conversiontype']==1) echo "selected";?>>1</option>
              <option value="2" <?php if($zoom->_CONFIG['conversiontype']==2) echo "selected";?>>2</option>
              <option value="3" <?php if($zoom->_CONFIG['conversiontype']==3) echo "selected";?>>3</option>
              <option value="4" <?php if($zoom->_CONFIG['conversiontype']==4) echo "selected";?>>4</option>
            </select>
          </td>
          <td valign="top"> 1 = <a href="http://www.imagemagick.org" target=_blank>ImageMagick</a>&nbsp;&nbsp;
            <?php if(array_key_exists('imagemagick',$imageLibs)) echo '<strong><font color="green">'._ZOOM_SETTINGS_AUTODET.$imageLibs['imagemagick'].'</font></strong>'; else echo '<strong><font color="red">' . _ZOOM_A_ERROR_NOTINSTALLED . '</font></strong>'; ?>
            <br />
            2 = <a href="http://sourceforge.net/projects/netpbm" target=_blank>NetPBM</a>&nbsp;&nbsp;
            <?php if(array_key_exists('netpbm',$imageLibs)) echo '<strong><font color="green">'._ZOOM_SETTINGS_AUTODET.$imageLibs['netpbm'].'</font></strong>'; else echo '<strong><font color="red">' . _ZOOM_A_ERROR_NOTINSTALLED . '</font></strong>'; ?>
            <br />
            3 = GD1 library
            <?php if(array_key_exists('gd1',$imageLibs['gd'])) echo '&nbsp;&nbsp;<strong><font color="green">'._ZOOM_SETTINGS_AUTODET.$imageLibs['gd']['gd1'].'</font></strong>'; else echo '<strong><font color="red">' . _ZOOM_A_ERROR_NOTINSTALLED . '</font></strong>'; ?>
            <br />
            4 = GD2 library
            <?php if(array_key_exists('gd2',$imageLibs['gd'])) echo '&nbsp;&nbsp;<strong><font color="green">'._ZOOM_SETTINGS_AUTODET.$imageLibs['gd']['gd2'].'</font></strong>'; else echo '<strong><font color="red">' . _ZOOM_A_ERROR_NOTINSTALLED . '</font></strong>'; ?>
          </td>
        </tr>
        <tr>
          <td width="30">&nbsp;</td>
          <td colspan="3" style="border-bottom: 1px dashed #CCCCCC;">&nbsp;</td>
        </tr>
        <tr>
          <td width="30">&nbsp;</td>
          <td><strong><?php echo _ZOOM_SETTINGS_MAXSIZE;?></strong> </td>
          <td colspan="2"><input type="text" name="s26" value="<?php echo $zoom->_CONFIG['maxsize'];?>" size="5" maxlength="4" class="inputbox" />
           px </td>
        </tr>
        <tr>
          <td width="30">&nbsp;</td>
          <td colspan="3" style="border-bottom: 1px dashed #CCCCCC;">&nbsp;</td>
        </tr>
        <tr>
          <td width="30">
            <a href="#" onmouseover="return overlib('<?php echo sprintf(_ZOOM_SETTINGS_MAXSIZEKB_WARNING, round($zoom->getMaxUploadSize() / 1024)." kB");?>', CAPTION, '<?php echo _ZOOM_WARNING;?>');" onmouseout="return nd();"> <img src="<?php echo $mosConfig_live_site;?>/components/com_zoom/www/images/warning.png" alt="" border="0" /> </a>
          </td>
          <td><strong><?php echo _ZOOM_SETTINGS_MAXSIZEKB;?></strong> </td>
          <td colspan="2"><input type="text" name="s84" value="<?php echo $zoom->_CONFIG['maxsizekb'];?>" size="5" maxlength="20" class="inputbox" />
           kB </td>
        </tr>
        <tr>
          <td width="30">&nbsp;</td>
          <td colspan="3" style="border-bottom: 1px dashed #CCCCCC;">&nbsp;</td>
        </tr>
        <tr>
          <td width="30">&nbsp;</td>
          <td colspan="3"><strong><?php echo _ZOOM_SETTINGS_THUMBSETTINGS;?></strong> </td>
        </tr>
        <tr>
          <td width="30">&nbsp;</td>
          <td><?php echo _ZOOM_SETTINGS_QUALITY;?> </td>
          <td colspan="2"><input type="text" name="s05" value="<?php echo $zoom->_CONFIG['JPEGquality'];?>" size="5" maxlength="3" class="inputbox" />
            % </td>
        </tr>
        <tr>
          <td width="30">&nbsp;</td>
          <td><?php echo _ZOOM_SETTINGS_SIZE;?> </td>
          <td colspan="2"><input type="text" name="s06" value="<?php echo $zoom->_CONFIG['size'];?>" size="5" maxlength="3" class="inputbox" />
            px </td>
        </tr>
        <tr>
          <td width="30">&nbsp;</td>
          <td><?php echo _ZOOM_SETTINGS_TEMPNAME;?> </td>
          <td colspan="2"><input type="text" name="s20" value="<?php echo $zoom->_CONFIG['tempName'];?>" size="40" class="inputbox" />
            <input type="checkbox" name="s21" value="1" id="autonumber"<?php echo ($zoom->_CONFIG['autonumber']) ? ' checked' : '';?> />
            <label for="autonumber"> <?php echo _ZOOM_SETTINGS_AUTONUMBER;?></label>
          </td>
        </tr>
        <tr>
          <td width="30">&nbsp;</td>
          <td><?php echo _ZOOM_SETTINGS_TEMPDESCR;?> </td>
          <td colspan="2"><input type="text" name="s16" value="<?php echo $zoom->_CONFIG['tempDescr'];?>" size="40" class="inputbox" />
          </td>
        </tr>
      </table>
    
    <?php $tabs->endTab(); 
    $tabs->startTab(_ZOOM_SETTINGS_TAB3 ,"module21");
    ?>
      <table border="0" cellspacing="0" cellpadding="0" width="100%" class="adminform">
        <tr>
          <td width="20">&nbsp;</td>
          <td><p><strong><?php echo _ZOOM_SETTINGS_GALLERY_FEATURES; ?></strong></p></td>
        </tr>
        <tr>
          <td width="20"></td>
          <td><table border="0" cellspacing="3" cellpadding="3" width="100%">
                <!-- REMOVED TEMPORARILY -->

              <tr>
                <td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_POPUP;?><br />
                  <select name="s10" size="1" class="inputbox">
				 	<option value="0" <?php if($zoom->_CONFIG['popUpImages']==0) echo "selected";?>><?php echo _ZOOM_SETTINGS_NO_POP;?></option>
                    <option value="1" <?php if($zoom->_CONFIG['popUpImages']==1) echo "selected";?>><?php echo _ZOOM_SETTINGS_STANDARD_POP;?></option>
                    <option value="2" <?php if($zoom->_CONFIG['popUpImages']==2) echo "selected";?>><?php echo _ZOOM_SETTINGS_LIGHTBOX_POP;?></option>
                  </select>
                </td>
          <td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_ORDERBY;?><br />
          <select name="s24" size="1" class="inputbox">
              <option value="1"<?php if($zoom->_CONFIG['orderMethod']==1) echo " selected";?>><?php echo _ZOOM_SETTINGS_DATE_ASC;?></option>
              <option value="2"<?php if($zoom->_CONFIG['orderMethod']==2) echo " selected";?>><?php echo _ZOOM_SETTINGS_DATE_DESC;?></option>
              <option value="3"<?php if($zoom->_CONFIG['orderMethod']==3) echo " selected";?>><?php echo _ZOOM_SETTINGS_FLNM_ASC;?></option>
              <option value="4"<?php if($zoom->_CONFIG['orderMethod']==4) echo " selected";?>><?php echo _ZOOM_SETTINGS_FLNM_DESC;?></option>
              <option value="5"<?php if($zoom->_CONFIG['orderMethod']==5) echo " selected";?>><?php echo _ZOOM_SETTINGS_NAME_ASC;?></option>
              <option value="6"<?php if($zoom->_CONFIG['orderMethod']==6) echo " selected";?>><?php echo _ZOOM_SETTINGS_NAME_DESC;?></option>
            </select>
          </td>
          <td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_CATORDERBY;?> <br />
          <select name="s51" size="1" class="inputbox">
              <option value="1"<?php if($zoom->_CONFIG['catOrderMethod']==1) echo " selected";?>><?php echo _ZOOM_SETTINGS_DATE_ASC;?></option>
              <option value="2"<?php if($zoom->_CONFIG['catOrderMethod']==2) echo " selected";?>><?php echo _ZOOM_SETTINGS_DATE_DESC;?></option>
              <option value="3"<?php if($zoom->_CONFIG['catOrderMethod']==3) echo " selected";?>><?php echo _ZOOM_SETTINGS_NAME_ASC;?></option>
              <option value="4"<?php if($zoom->_CONFIG['catOrderMethod']==4) echo " selected";?>><?php echo _ZOOM_SETTINGS_NAME_DESC;?></option>
            </select>
          </td>
                          <td class="settingsupper" valign="bottom">
				 </td>
			  
			  </tr>
              <tr>
          <td><p><strong><?php echo _ZOOM_SETTINGS_VIEW_FEATURES; ?></strong></p></td>
          </tr>
            <tr>
			    <!-- REMOVED TEMPORARILY -->
                 <td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_READEXIF;?><br />
                  <select name="s14" size="1" class="inputbox">
                    <option value="1" <?php if($zoom->_CONFIG['readEXIF']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
                    <option value="0" <?php if(!$zoom->_CONFIG['readEXIF']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
                  </select>
                  <a href="#" onmouseover="return overlib('<?php echo _ZOOM_SETTINGS_EXIFTOOLTIP;?>', CAPTION, '<?php echo _ZOOM_TOOLTIP;?>');" onmouseout="return nd();"> <img src="<?php echo $mosConfig_live_site;?>/components/com_zoom/www/images/tooltip.png" alt="" border="0" /> </a> </td>
                <td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_READID3;?><br />
                  <select name="s58" size="1" class="inputbox">
                    <option value="1" <?php if($zoom->_CONFIG['readID3']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
                    <option value="0" <?php if(!$zoom->_CONFIG['readID3']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
                  </select>
                  <a href="#" onmouseover="return overlib('<?php echo _ZOOM_SETTINGS_ID3TOOLTIP;?>', CAPTION, '<?php echo _ZOOM_TOOLTIP;?>');" onmouseout="return nd();"> <img src="<?php echo $mosConfig_live_site;?>/components/com_zoom/www/images/tooltip.png" alt="" border="0" /> </a> </td>
                <td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_SLIDESHOW;?><br />
				<?php if ($zoom->_CONFIG['popUpImages'] == 2 ) { echo _ZOOM_SETTINGS_LIGHTBOX_SLIDESHOW . "<br />"; } ?>
                  <select name="s12" size="1" class="inputbox">
                    <option value="1" <?php if($zoom->_CONFIG['slideshow']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
                    <option value="0" <?php if(!$zoom->_CONFIG['slideshow']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
                  </select>
                </td>
                <td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_ZOOMING;?><br />
                  <select name="s19" size="1" class="inputbox">
                    <option value="1" <?php if($zoom->_CONFIG['zoomOn']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
                    <option value="0" <?php if(!$zoom->_CONFIG['zoomOn']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
                  </select>
                </td>
                </tr>
                               <tr>
			                   <td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_RATING;?><br />
                  <select name="s17" size="1" class="inputbox">
                    <option value="1" <?php if($zoom->_CONFIG['ratingOn']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
                    <option value="0" <?php if(!$zoom->_CONFIG['ratingOn']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
                  </select>
                </td>
                <td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_COMMENTS;?><br />
                  <select name="s09" size="1" class="inputbox">
                    <option value="1" <?php if($zoom->_CONFIG['commentsOn']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
                    <option value="0" <?php if(!$zoom->_CONFIG['commentsOn']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
                  </select>
                </td>
                <td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_ANONYMOUS_COMMENTS;?><br />
				  <select name="s80" size="1" class="inputbox">
                    <option value="1" <?php if($zoom->_CONFIG['anonymous_comments']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
                    <option value="0" <?php if(!$zoom->_CONFIG['anonymous_comments']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
                  </select>
                </td>
                <td class="settingsupper" valign="bottom">
				 </td>
			   </tr>
                <tr>
					<td><p><strong><?php echo _ZOOM_SETTINGS_GENERAL_FEATURES; ?></strong></p></td>
				</tr>
	            <tr>
				<!-- REMOVED TEMPORARILY -->
                <td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_ECARDS;?><br />
                  <select name="s34" size="1" class="inputbox">
                    <option value="1" <?php if($zoom->_CONFIG['ecards']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
                    <option value="0" <?php if(!$zoom->_CONFIG['ecards']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
                  </select>
                </td>
                <td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_ECARDS_LIFETIME;?><br />
                  <select name="s35" size="1" class="inputbox">
                    <option value="7" <?php if($zoom->_CONFIG['ecards_lifetime'] == 7) echo "selected";?>><?php echo _ZOOM_SETTINGS_ECARDS_ONEWEEK;?></option>
                    <option value="14" <?php if($zoom->_CONFIG['ecards_lifetime'] == 14) echo "selected";?>><?php echo _ZOOM_SETTINGS_ECARDS_TWOWEEKS;?></option>
                    <option value="1" <?php if($zoom->_CONFIG['ecards_lifetime'] == 1) echo "selected";?>><?php echo _ZOOM_SETTINGS_ECARDS_ONEMONTH;?></option>
                    <option value="3" <?php if($zoom->_CONFIG['ecards_lifetime'] == 3) echo "selected";?>><?php echo _ZOOM_SETTINGS_ECARDS_THREEMONTHS;?></option>
                  </select>
                </td>
                <td class="settingsupper" valign="bottom"><?php echo _ZOOM_LIGHTBOX;?><br />
                  <select name="s25" size="1" class="inputbox">
                    <option value="1" <?php if($zoom->_CONFIG['lightbox']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
                    <option value="0" <?php if(!$zoom->_CONFIG['lightbox']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
                  </select>
                  <a href="#" onmouseover="return overlib('<?php echo _ZOOM_SETTINGS_LBTOOLTIP;?>', CAPTION, '<?php echo _ZOOM_TOOLTIP;?>');" onmouseout="return nd();"> <img src="<?php echo $mosConfig_live_site;?>/components/com_zoom/www/images/tooltip.png" alt="" border="0" /> </a> </td>
                <td class="settingsupper"><?php echo _ZOOM_SETTINGS_SHOWSEARCH;?><br />
                  <select name="s37" size="1" class="inputbox">
                    <option value="1" <?php if($zoom->_CONFIG['showSearch']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
                    <option value="0" <?php if(!$zoom->_CONFIG['showSearch']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
                  </select>
                </td>
               </tr>
               <tr>
			    <td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_HOTLINK;?><br />
                  <select name="s86" size="1" class="inputbox">
                    <option value="1" <?php if($zoom->_CONFIG['hotlinkProtection']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
                    <option value="0" <?php if(!$zoom->_CONFIG['hotlinkProtection']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
                  </select>
                  <a href="#" onmouseover="return overlib('<?php echo _ZOOM_SETTINGS_HPTOOLTIP;?>', CAPTION, '<?php echo _ZOOM_TOOLTIP;?>');" onmouseout="return nd();"> <img src="<?php echo $mosConfig_live_site;?>/components/com_zoom/www/images/tooltip.png" alt="" border="0" /> </a> </td>
                <td class="settingsupper" valign="bottom">
				 </td>
				<td class="settingsupper" valign="bottom">
				 </td>
				<td class="settingsupper" valign="bottom">
				 </td>
			   </tr>
        	</table>
          </td>
        </tr>
        
        
      </table>
    
        <?php $tabs->endTab(); 
    $tabs->startTab(_ZOOM_SETTINGS_TAB4 ,"module23");
    ?>
      <table border="0" cellspacing="0" cellpadding="0" width="100%" class="adminform">
        <tr>
          <td width="20">&nbsp;</td>
          <td><p><strong><?php echo _ZOOM_SETTINGS_TEMPLATE_TITLE; ?></strong></p></td>
        </tr>
        <tr>
          <td width="20"></td>
          <td><table border="0" cellspacing="3" cellpadding="3" width="100%">
              <tr>
                <td align="center"><?php echo _ZOOM_SETTINGS_TEMPLATE_CHOOSE; ?></td>
                <td align="left">
                  <select name="s85" size="1" class="inputbox">
                    <option value="1" <?php if($zoom->_CONFIG['viewtype'] == 1) echo "selected";?>><?php echo _ZOOM_SETTINGS_TEMPLATE_TABLES; ?></option>
                    <option value="0" <?php if($zoom->_CONFIG['viewtype'] == 0) echo "selected";?>><?php echo _ZOOM_SETTINGS_TEMPLATE_TABLELESS; ?></option>
                  </select>
                </td>
              </tr>
              </table>
          </td>
        </tr>

        <tr>
          <td width="20">&nbsp;</td>
          <td><p><strong><?php echo _ZOOM_SETTINGS_CSS_TITLE; ?></strong></p></td>
        </tr>
        <tr>
          <td width="20">&nbsp;</td>
          <td><table border="0" cellpadding="3" cellspacing="3" width="100%">
              <tr>
                <td align="center"><?php echo _ZOOM_SETTINGS_CSSZOOM;?></td>
                <td align="center"><?php echo _ZOOM_SETTINGS_CSS;?></td>
              </tr>
              <tr>
                <?php
                	$css_popup = fread($zoom->platform->fopen($mosConfig_absolute_path."/components/com_zoom/etc/popup.css", "r"), $zoom->platform->filesize($mosConfig_absolute_path."/components/com_zoom/etc/popup.css"));
                	$css_zoom = fread($zoom->platform->fopen($mosConfig_absolute_path."/components/com_zoom/etc/zoom.css", "r"), $zoom->platform->filesize($mosConfig_absolute_path."/components/com_zoom/etc/zoom.css"));
                	?>
                <td align="center"><textarea name="s60" rows="10" cols="50" class="inputbox"><?php echo stripslashes($css_zoom);?></textarea>
                </td>
                <td align="center"><textarea name="s18" rows="10" cols="50" class="inputbox"><?php echo stripslashes($css_popup);?></textarea>
                </td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td width="20">&nbsp;</td>
          <td><table border="0" cellpadding="3" cellspacing="3" width="100%">
              <tr>
                <td><p><strong><?php echo _ZOOM_SETTINGS_GALLERY; ?></strong></p></td>
              </tr>
              <tr>
                <td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_SUBCATSPG;?><br />
		          	<input type="text" name="s23" size="5" maxlength="2" value="<?php echo $zoom->_CONFIG['catcolsno'];?>" class="inputbox" />
        		  </td>
        		  
        		  <td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_COLUMNS;?> <br />
			        	<input type="text" name="s07" size="5" maxlength="2" value="<?php echo $zoom->_CONFIG['columnsno'];?>" class="inputbox" />
        		  </td>
        		  
		          <td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_THUMBSPG;?> <br />
	          	  <input type="text" name="s08" size="5" maxlength="2" value="<?php echo $zoom->_CONFIG['PageSize'];?>" class="inputbox" />
                  </td>
                  
				<td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_CATIMG;?><br />
                  <select name="s11" size="1" class="inputbox">
                    <option value="1" <?php if($zoom->_CONFIG['catImg']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
                    <option value="0" <?php if(!$zoom->_CONFIG['catImg']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
                  </select>
                </td>
                
				</tr>
				<tr>
                
				<td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_METABOX;?><br />
                  <select name="s43" size="1" class="inputbox">
                    <option value="1" <?php if($zoom->_CONFIG['showMetaBox']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
                    <option value="0" <?php if(!$zoom->_CONFIG['showMetaBox']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
                  </select>
                  <a href="#" onmouseover="return overlib('<?php echo _ZOOM_SETTINGS_METABOXTOOLTIP;?>', CAPTION, '<?php echo _ZOOM_TOOLTIP;?>');" onmouseout="return nd();"> <img src="<?php echo $mosConfig_live_site;?>/components/com_zoom/www/images/tooltip.png" alt="" border="0" /> </a> </td>
                  
                <td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_TOPTEN;?><br />
                  <select name="s72" size="1" class="inputbox">
                    <option value="1" <?php if($zoom->_CONFIG['toptenOn']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
                    <option value="0" <?php if(!$zoom->_CONFIG['toptenOn']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
                  </select>
                </td>
                
                <td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_LASTSUBM;?><br />
                  <select name="s73" size="1" class="inputbox">
                    <option value="1" <?php if($zoom->_CONFIG['lastsubmOn']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
                    <option value="0" <?php if(!$zoom->_CONFIG['lastsubmOn']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
                  </select>
                </td>
                
                <td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_CLOSE;?><br />
                  <select name="s74" size="1" class="inputbox">
                    <option value="1" <?php if($zoom->_CONFIG['close']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
                    <option value="0" <?php if(!$zoom->_CONFIG['close']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
                  </select>
                </td>
                 
				</tr>
				<tr>
                
				<td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_MAINSCREEN;?><br />
                  <select name="s75" size="1" class="inputbox">
                    <option value="1" <?php if($zoom->_CONFIG['mainscreen']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
                    <option value="0" <?php if(!$zoom->_CONFIG['mainscreen']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
                  </select>
                </td>
                <td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_NAVBUTTONS;?><br />
                  <select name="s76" size="1" class="inputbox">
                    <option value="1" <?php if($zoom->_CONFIG['navbuttons']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
                    <option value="0" <?php if(!$zoom->_CONFIG['navbuttons']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
                  </select>
				 </td>

                <td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_MEDIAFOUND;?><br />
                  <select name="s78" size="1" class="inputbox">
                    <option value="1" <?php if($zoom->_CONFIG['mediafound']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
                    <option value="0" <?php if(!$zoom->_CONFIG['mediafound']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
                  </select>
                </td>
                <td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_ZOOMLOGO;?><br />
                  <select name="s13" size="1" class="inputbox">
                    <option value="1" <?php if($zoom->_CONFIG['displaylogo']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
                    <option value="0" <?php if(!$zoom->_CONFIG['displaylogo']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
                  </select>
                </td>
              </tr>
              <tr>
                <td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_DESCRINGAL;?><br />
                  <select name="s86" size="1" class="inputbox">
                    <option value="1" <?php if($zoom->_CONFIG['descrInGal']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
                    <option value="0" <?php if(!$zoom->_CONFIG['descrInGal']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
                  </select>
                </td>
                <td class="settingsupper" valign="bottom"></td>
                <td class="settingsupper" valign="bottom"></td>
                <td class="settingsupper" valign="bottom"></td>
              </tr>
			  
			  <tr>
                <td><p><strong><?php echo _ZOOM_SETTINGS_VIEW; ?></strong></p></td>
              </tr>
              <tr>
                <td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_PROPERTIES;?><br />
                  <select name="s77" size="1" class="inputbox">
                    <option value="1" <?php if($zoom->_CONFIG['properties']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
                    <option value="0" <?php if(!$zoom->_CONFIG['properties']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
                  </select></td>
                
				<td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_SHOWNAME;?><br />
                  <select name="s38" size="1" class="inputbox">
                    <option value="1" <?php if($zoom->_CONFIG['showName']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
                    <option value="0" <?php if(!$zoom->_CONFIG['showName']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
                  </select>
                </td>

                <td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_SHOWDESCR;?><br />
                  <select name="s39" size="1" class="inputbox">
                    <option value="1" <?php if($zoom->_CONFIG['showDescr']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
                    <option value="0" <?php if(!$zoom->_CONFIG['showDescr']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
                  </select>
                </td>
                
				<td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_SHOWKEYWORDS;?><br />
                  <select name="s40" size="1" class="inputbox">
                    <option value="1" <?php if($zoom->_CONFIG['showKeywords']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
                    <option value="0" <?php if(!$zoom->_CONFIG['showKeywords']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
                  </select>
                </td>
                
              </tr>
        	  <tr>
				
				<td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_SHOWDATE;?><br />
                  <select name="s41" size="1" class="inputbox">
                    <option value="1" <?php if($zoom->_CONFIG['showDate']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
                    <option value="0" <?php if(!$zoom->_CONFIG['showDate']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
                  </select>
                </td>
                
                <td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_SHOWUNAME;?><br />
                  <select name="s59" size="1" class="inputbox">
                    <option value="1" <?php if($zoom->_CONFIG['showUsername']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
                    <option value="0" <?php if(!$zoom->_CONFIG['showUsername']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
                  </select>
                </td>

                <td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_SHOWFILENAME;?><br />
                  <select name="s42" size="1" class="inputbox">
                    <option value="1" <?php if($zoom->_CONFIG['showFilename']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
                    <option value="0" <?php if(!$zoom->_CONFIG['showFilename']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
                  </select>
                </td>
                
                <td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_SHOWHITS;?><br />
                  <select name="s22" size="1" class="inputbox">
                    <option value="1" <?php if($zoom->_CONFIG['showHits']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
                    <option value="0" <?php if(!$zoom->_CONFIG['showHits']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
                  </select>
                </td>
                
              </tr>
        	  <tr>

                <td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_BOX_PROPERTIES;?><br />
                  <select name="s61" size="1" class="inputbox">
                    <option value="1" <?php if($zoom->_CONFIG['properties_state']) echo "selected";?>><?php echo _ZOOM_VISIBLE;?></option>
                    <option value="0" <?php if(!$zoom->_CONFIG['properties_state']) echo "selected";?>><?php echo _ZOOM_HIDDEN;?></option>
                  </select>
                </td>
                
                <td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_BOX_META;?><br />
                  <select name="s62" size="1" class="inputbox">
                    <option value="1" <?php if($zoom->_CONFIG['meta_state']) echo "selected";?>><?php echo _ZOOM_VISIBLE;?></option>
                    <option value="0" <?php if(!$zoom->_CONFIG['meta_state']) echo "selected";?>><?php echo _ZOOM_HIDDEN;?></option>
                  </select>
                </td>

                <td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_BOX_COMMENTS;?><br />
                  <select name="s63" size="1" class="inputbox">
                    <option value="1" <?php if($zoom->_CONFIG['comments_state']) echo "selected";?>><?php echo _ZOOM_VISIBLE;?></option>
                    <option value="0" <?php if(!$zoom->_CONFIG['comments_state']) echo "selected";?>><?php echo _ZOOM_HIDDEN;?></option>
                  </select>
                </td>
                
                <td class="settingsupper" valign="bottom"><?php echo _ZOOM_SETTINGS_BOX_ANIMATE;?><br />
                  <select name="s65" size="1" class="inputbox">
                    <option value="1" <?php if($zoom->_CONFIG['animate_box']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
                    <option value="0" <?php if(!$zoom->_CONFIG['animate_box']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
                  </select>
                </td>

              </tr>
            </table></td>
        </tr>
        <tr>
          <td align="right" valign="middle" colspan="2"> Powered by: <img src="<?php echo $mosConfig_live_site;?>/components/com_zoom/www/images/attilas_id3logo.png" alt="" border="0" /><br />
          </td>
        </tr>
      </table>
    
    <?php $tabs->endTab(); 
    $tabs->startTab(_ZOOM_SETTINGS_TAB5 ,"module23");
    ?>
		<table border="0" cellspacing="1" cellpadding="2" width="100%" class="adminform">
		<tr>
		    <td width="30">&nbsp;</td>
		    <td>
				<h3>
			      <?php echo _ZOOM_SETTINGS_WM_ENABLE_TITLE;?>
			    </h3>
			</td>
		</tr>
		<tr>
		    <td width="30">&nbsp;</td>
		    <td>
		        <select name="s66" size="1" class="inputbox">
                    <option value="1" <?php if($zoom->_CONFIG['wm_apply']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
                    <option value="0" <?php if(!$zoom->_CONFIG['wm_apply']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
                  </select>
		    </td>
		</tr>
		<tr>
			<td width="30">
			 <a href="#" onmouseover="return overlib('<?php echo _ZOOM_SETTINGS_WM_DESCR;?>', CAPTION, '<?php echo _ZOOM_TOOLTIP;?>');" onmouseout="return nd();"> <img src="<?php echo $mosConfig_live_site;?>/components/com_zoom/www/images/tooltip.png" alt="" border="0" /> </a>
			</td>
			<td>
				<h3>
				<?php echo _ZOOM_SETTINGS_WM_TITLE;?>
				</h3>
			</td>
		</tr>
		<tr>
			<td width="30">&nbsp;</td>
			<td align="left" valign="top">			
				<table border="0" cellspacing="1" cellpadding="2" width="100%" class="adminform">
				<tr class="sectiontableheader">
					<td align="left" valign="middle" width="15">&nbsp;</td>
					<td align="left" valign="middle"><?php echo _ZOOM_FILENAME;?></td>
					<td align="left" valign="middle"><?php echo _ZOOM_SETTINGS_WM_IMG;?></td>
					<td align="left" valign="middle" width="50"><?php echo _ZOOM_ACTION;?></td>
				</tr>
				<?php
				$counter = 0;
				$zoom->_counter = 0;
				$watermarks = $zoom->toolbox->parseDir($mosConfig_absolute_path."/".$zoom->_CONFIG['imagepath']."watermarks");
				if (!empty($watermarks)) {
					foreach ($watermarks as $watermark) {
						if (!empty($watermark)) {
							$append = ($zoom->_CONFIG['wm_file'] == $watermark) ? " checked" : "";
							echo ("<tr class=\"".$zoom->_tabclass[$counter]."\">\n"
							 . "\t<td><input type=\"radio\" name=\"s67\" value=\"".$watermark."\"".$append." /></td>\n"
							 . "\t<td>".$watermark."</td>\n"
							 . "\t<td><img src=\"".$mosConfig_live_site."/".$zoom->_CONFIG['imagepath']."watermarks/".$watermark."\" alt=\"\" border=\"0\" /></td>\n"
							 . "\t<td>\n"
			  				 . "\t\t<a href=\"javascript:submitbutton('".$watermark."')\" onmouseover=\"return overlib('"._ZOOM_DELETE."');\" onmouseout=\"return nd();\"  onClick=\"return confirm('");
							 echo (_ZOOM_CONFIRM_DEL);
							 echo ("');\">\n"
			  				 . "\t\t<img src=\"".$mosConfig_live_site."/components/com_zoom/www/images/admin/delete.png\" alt=\"\" border=\"0\" onmouseover=\"MM_swapImage('delimg".$zoom->_counter."','','".$mosConfig_live_site."/components/com_zoom/www/images/admin/delete_f2.png',1);\" onmouseout=\"MM_swapImgRestore();\" name=\"delimg".$zoom->_counter."\" /></a>\n"
			  				 . "</td>\n"
			  				 . "</tr>\n");
						}
						if ($counter >= 1) {
							$counter = 0;
						} else {
							$counter++;
						}
						$zoom->_counter++;
					}
				} else {
					echo ("<tr>\n"
					 . "\t<td colspan=\"3\" align=\"center\">"._ZOOM_SETTINGS_WM_NOWATERMARKS."</td>\n"
					 . "</tr>\n");
				}
				if (file_exists($mosConfig_live_site."/".$zoom->_CONFIG['imagepath']."watermarks/".$zoom->_CONFIG['wm_file'])) {
					$curr_watermark = $mosConfig_live_site."/".$zoom->_CONFIG['imagepath']."watermarks/".$zoom->_CONFIG['wm_file'];
					$curr_wm_abs = $mosConfig_absolute_path."/".$zoom->_CONFIG['imagepath']."watermarks/".$zoom->_CONFIG['wm_file'];
				} else {
					$curr_watermark = $mosConfig_live_site."/components/com_zoom/www/images/zoom_logo_small.gif";
					$curr_wm_abs = $mosConfig_absolute_path."/components/com_zoom/www/images/zoom_logo_small.gif";
				}
				$wm_size = getimagesize($curr_wm_abs);
				?>
				</table>
			</td>
		</tr>
		<tr>
		    <td width="30">&nbsp;</td>
		    <td>
				<h3>
			      <?php echo _ZOOM_SETTINGS_WM_PLACEMENT_TITLE;?>
			    </h3>
			</td>
		<tr>
		    <td width="30">&nbsp;</td>
		    <td>
			    <p>
			      <?php echo _ZOOM_SETTINGS_WM_PLACEMENT_DESCR;?>
			    </p>
			</td>
		</tr>
		<tr>
		    <td width="30">&nbsp;</td>
		    <td>
			    <table border="1" cellspacing="1" cellpadding="2" width="100%" style="width: 300px; height: 200px; background: #DDD; border: solid #9CF 1px; margin: 5px 0px 10px 0px;">
			    <tr>
			    	<td align="center" valign="middle" width="33%"><input type="radio" name="s68" value="TL"<?php echo ($zoom->_CONFIG['wm_position'] == "TL") ? " checked" : ""; ?> /></td>
			    	<td align="center" valign="middle" width="33%"><input type="radio" name="s68" value="TM"<?php echo ($zoom->_CONFIG['wm_position'] == "TM") ? " checked" : ""; ?> /></td>
			    	<td align="center" valign="middle" width="33%"><input type="radio" name="s68" value="TR"<?php echo ($zoom->_CONFIG['wm_position'] == "TR") ? " checked" : ""; ?> /></td>
			    </tr>
			    <tr>
			    	<td align="center" valign="middle"><input type="radio" name="s68" value="CL"<?php echo ($zoom->_CONFIG['wm_position'] == "CL") ? " checked" : ""; ?> /></td>
			    	<td align="center" valign="middle"><input type="radio" name="s68" value="C"<?php echo ($zoom->_CONFIG['wm_position'] == "C") ? " checked" : ""; ?> /></td>
			    	<td align="center" valign="middle"><input type="radio" name="s68" value="CR"<?php echo ($zoom->_CONFIG['wm_position'] == "CR") ? " checked" : ""; ?> /></td>
			    </tr>
			    <tr>
			    	<td align="center" valign="middle"><input type="radio" name="s68" value="BL"<?php echo ($zoom->_CONFIG['wm_position'] == "BL") ? " checked" : ""; ?> /></td>
			    	<td align="center" valign="middle"><input type="radio" name="s68" value="BM"<?php echo ($zoom->_CONFIG['wm_position'] == "BM") ? " checked" : ""; ?> /></td>
			    	<td align="center" valign="middle"><input type="radio" name="s68" value="BR"<?php echo ($zoom->_CONFIG['wm_position'] == "BR") ? " checked" : ""; ?> /></td>
			    </tr>
			    </table>
				<br />
				<table border="0" cellspacing="1" cellpadding="2" width="100%" class="adminform">
				<tr>
					<td><?php echo _ZOOM_SETTINGS_WM_FILE;?>: &nbsp;</td>
					<td align="left" colspan="2">
						<input class="inputbox" type="file" name="new_wm_file" size="50" />
						<input class="button" type="button" name="wm_submit" value="<?php echo _ZOOM_ADD;?>" onclick="submitbutton('watermark')" />
					</td>
				</tr>
				</table>
			</td>
		</tr>
		</table>
    <?php
	if (strlen($zoom->_CONFIG['safemodeversion']) > 0) {
	?>
        <?php $tabs->endTab(); 
    $tabs->startTab(_ZOOM_SETTINGS_TAB6 ,"module24");
    ?>
      <table border="0" cellspacing="0" cellpadding="5" width="80%" class="adminform">
        <?php
			// if php safe_mode restriction is in use, warn the user! -> added by mic
			if (ini_get( 'safe_mode' ) == 1) {
			    ?>
        <tr>
          <td colspan="2">&nbsp;</td>
          <td><strong><font color="red"><?php echo _ZOOM_A_MESS_SAFEMODE2; ?></font></strong></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <?php
			}
			?>
        <tr>
          <td width="30">&nbsp;</td>
          <td><?php echo _ZOOM_SETTINGS_USEFTP;?> </td>
          <td><select name="s46" size="1" class="inputbox">
              <option value="1" <?php if($zoom->_CONFIG['safemodeON']) echo "selected";?>><?php echo _ZOOM_YES;?></option>
              <option value="0" <?php if(!$zoom->_CONFIG['safemodeON']) echo "selected";?>><?php echo _ZOOM_NO;?></option>
            </select>
          </td>
        </tr>
        <tr>
          <td width="30">&nbsp;</td>
          <td><?php echo _ZOOM_SETTINGS_FTPHOST;?>: </td>
          <td><input type="text" name="s47" size="30" value="<?php echo $zoom->_CONFIG['ftp_server'];?>" class="inputbox" />
          </td>
        </tr>
        <tr>
          <td width="30">&nbsp;</td>
          <td><?php echo _ZOOM_SETTINGS_FTPUNAME;?>: </td>
          <td><input type="text" name="s48" size="30" value="<?php echo $zoom->_CONFIG['ftp_username'];?>" class="inputbox" />
          </td>
        </tr>
        <tr>
          <td width="30">
            <a href="#" onmouseover="return overlib('<?php echo _ZOOM_SETTINGS_FTPWARNING;?>', CAPTION, '<?php echo _ZOOM_WARNING;?>');" onmouseout="return nd();"> <img src="<?php echo $mosConfig_live_site;?>/components/com_zoom/www/images/warning.png" alt="" border="0" /> </a>
          </td>
          <td><?php echo _ZOOM_SETTINGS_FTPPASS;?>: </td>
          <td><input type="password" name="s49" size="30" maxlength="50" value="<?php echo $zoom->_CONFIG['ftp_pass'];?>" class="inputbox" /></td>
        </tr>
        <tr>
          <td width="30">
            <a href="#" onmouseover="return overlib('<?php echo _ZOOM_SETTINGS_MESS_FTPHOSTDIR;?>', CAPTION, '<?php echo _ZOOM_TOOLTIP;?>');" onmouseout="return nd();"> <img src="<?php echo $mosConfig_live_site;?>/components/com_zoom/www/images/tooltip.png" alt="" border="0" /> </a>
          </td>
          <td><?php echo _ZOOM_SETTINGS_FTPHOSTDIR;?>: </td>
          <td><input type="text" name="s52" size="30" value="<?php echo $zoom->_CONFIG['ftp_hostdir'];?>" class="inputbox" /></td>
        </tr>
      </table>
    <?php
	$tabs->endTab();
    }			
	?>
	<?php
    $tabs->startTab(_ZOOM_SETTINGS_TAB7 ,"module25");
    ?>
      <table border="0" cellpadding="3" cellspacing="0">
        <tr>
          <td width="20" align="center" valign="top"><img src="<?php echo $mosConfig_live_site; ?>/components/com_zoom/www/images/tooltip.png" alt="" border="0" /> </td>
          <td align="left"><?php echo _ZOOM_SETTINGS_PRIV_DESCR; ?></td>
        </tr>
      </table>
      <br />
      <br />
      <?php
		$i = 0;
		$table_class = "";
		$header_class = " class=\"sectiontableheader\"";
		if ($zoom->_isBackend) {
			$table_class = " class=\"adminlist\"";
			$header_class = "";
			$zoom->_tabclass = array("row0", "row1");
		}
		$gtree = $acl->get_group_children_tree( null, 'USERS', false );
		$html = ("\n\t<table width=\"95%\" border=\"0\" cellspacing=\"0\" cellpadding=\"3\"$table_class>\n"
		 . "\t<tr$header_class>\n"
		 . "\t\t<th height=\"20\" align=\"left\">"._ZOOM_SETTINGS_GROUP."</th>\n"
		 . "\t\t<th align=\"center\">"._ZOOM_UPLOAD."</th>\n"
		 . "\t\t<th align=\"center\">"._ZOOM_EDITPIC."</th>\n"
		 . "\t\t<th align=\"center\">"._ZOOM_DELETE."</th>\n"
		 . "\t\t<th align=\"center\">"._ZOOM_HD_NEW."</th>\n"
		 . "\t\t<th align=\"center\">"._ZOOM_EDIT."</th>\n"
		 . "\t\t<th align=\"center\">"._ZOOM_DEL."</th>\n"
		 . "\t</tr>");
		foreach ($gtree as $group) {
		    $i++;
			$bgcolor = ($i & 1) ? $zoom->_tabclass[1] : $zoom->_tabclass[0];
			$html .= ("\t<tr class=\"$bgcolor\">\n"
			 . "\t\t<td>".$group->text."</td>\n");
			if ($group->value == 29 || $group->value == 30) {
				$html .= "\t\t<td colspan=\"6\">&nbsp;</td>\n";
			} else {
			    $privileges = new privileges($database, $group->value);
			    foreach ($privileges->getPrivileges() as $privilege => $value) {
			        $html .= ("\t\t<td align=\"center\">\n"
			         . "\t\t<a href=\"javascript:void(0);\"");
			        if (!strstr(strtolower($group->text), 'administrator')) {
			        	$html .= ("onclick=\"swap_priv('".$privilege."_".$group->value."');\"");
			        }
			        $html .= (">\n");
			    	if ($value == 1) {
			    		$html .= ("\t\t<img src=\"$mosConfig_live_site/components/com_zoom/www/images/priv_yes.png\" width=\"16\" height=\"16\" alt=\"\" border=\"0\" name=\"img_".$privilege."_".$group->value."\" />\n");
			    	} else {
			    	     $html .= ("\t\t<img src=\"$mosConfig_live_site/components/com_zoom/www/images/delete.png\" width=\"16\" height=\"16\" alt=\"\" border=\"0\" name=\"img_".$privilege."_".$group->value."\" />\n"); 
			    	}
			    	$html .= ("\t\t</a>\n"
			    	 . "\t\t<input type=\"hidden\" name=\"".$privilege."_".$group->value."\" id=\"".$privilege."_".$group->value."\" value=\"$value\" />\n"
			    	 . "\t\t</td>\n");
			    }
			    $html .= ("\t</tr>\n");
			}
			unset($privileges);
		}
		$html .= "</table>\n";
		echo $html;
		?>
      <br />
        <?php $tabs->endTab(); 
    $tabs->startTab(_ZOOM_SETTINGS_TAB8 ,"module26");
    ?>
      <table border="0" cellpadding="3" cellspacing="0">
        <tr>
          <td width="20" align="center" valign="top"><img src="<?php echo $mosConfig_live_site; ?>/components/com_zoom/www/images/admin/tables_f2.png" alt="" border="0" /> </td>
          <td align="left"><?php echo _ZOOM_SETTINGS_ERASE; ?></td>
        </tr>
        <tr>
			<td colspan="2"><hr /></td>
		</tr>
        <tr>
          <td width="20" align="center" valign="top"><a href="<?php echo "index".$backend.".php?option=com_zoom&amp;Itemid=".$Itemid."&amp;page=settings&amp;action=wipe";?>"><img src="<?php echo $mosConfig_live_site; ?>/components/com_zoom/www/images/admin/delete_f2.png" alt="" border="0" onclick="return confirm('<?php echo (_ZOOM_CONFIRM_WIPE)?>');" /></a></td>
          <td align="left"><?php echo _ZOOM_DELETE; ?></td>
      </table>
      
<?php 
$tabs->endTab();
// start Tabbar
$tabs->endPane("modules-cpanel");
?>
  <input type="hidden" name="option" value="<?php echo $option; ?>" />
  <input type="hidden" name="Itemid" value="<?php echo $Itemid; ?>" />
  <input type="hidden" name="page" value="<?php echo $page; ?>" />
  <input type="hidden" name="theButton" value="" />
</form>
<br />