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
| Filename: editimg.php                                               |
|                                                                     |
-----------------------------------------------------------------------
* @version $Id: editimg.php 106 2007-02-10 22:30:30Z kevinuru $
* @package zOOmGallery
* @author Mike de Boer <mailme@mikedeboer.nl> 
**/
// MOS Intruder Alerts
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
$return = mosGetParam($_REQUEST,'return');
if ($page == "mediamgr") {
	$return = "mediamgr";
}
$Itemid = mosGetParam($_REQUEST,'Itemid');
$action = trim(mosGetParam($_REQUEST, 'action'));
$keys = mosGetParam($_REQUEST,'keys');
$PageNo = intval(trim(mosGetParam($_REQUEST, 'PageNo', 1)));
if (!empty($keys) || $keys === 0) {
	if (is_array($keys)) {
		if (!$keys[0]) {
			$key = 0;
		} else {
			$key = $keys[0];
		}
	} else {
		$key = $keys;
	}
}
if (!isset($key)) {
	$key = intval(trim(mosGetParam($_REQUEST, 'key')));
}
// check again if a key has been found...
if (!isset($key)) {
	mosRedirect("index".$backend.".php?option=com_zoom&page=mediamgr&Itemid=".$Itemid."&catid=".$catid."&PageNo=".$PageNo, _ZOOM_ALERT_NOMEDIA);
}
if (!isset($return) || empty($return)) {
	if ($zoom->_isBackend) {
		$loc = "index2.php?option=com_zoom&catid=$catid&Itemid=$Itemid&PageNo=$PageNo";
	} else {
		$loc = sefReltoAbs("index.php?option=com_zoom&catid=$catid&Itemid=$Itemid&PageNo=$PageNo");
	}
} else {
	if ($zoom->_isBackend) {
		$loc = "index2.php?option=com_zoom&catid=$catid&page=$return&Itemid=$Itemid&PageNo=$PageNo";
	} else {
		$loc = sefReltoAbs("index.php?option=com_zoom&catid=$catid&page=$return&Itemid=$Itemid&PageNo=$PageNo");
	}
}
if (isset($action) && !empty($action)) {
	switch ($action) {
		case 'rotate':
			$degrees = intval(trim(mosGetParam($_REQUEST, 'rotate')));
			if (!isset($degrees) || empty($degrees)) {
			    mosRedirect($loc, _ZOOM_ALERT_NODEGREES);
			}
			$image = &$zoom->_gallery->_images[$key];
			$image->getInfo(false);
			$source_file = $mosConfig_absolute_path."/".$zoom->_CONFIG['imagepath'].$zoom->_gallery->getDir()."/".$image->_filename;
			$viewsize_file = $mosConfig_absolute_path."/".$zoom->_CONFIG['imagepath'].$zoom->_gallery->getDir()."/viewsize/".$image->_filename;
			$thumb_file = $mosConfig_absolute_path."/".$zoom->_CONFIG['imagepath'].$zoom->_gallery->getDir()."/thumbs/".$image->_filename;
			$tmpdir = $mosConfig_absolute_path."/".$zoom->createTempDir();
			$new_source = $tmpdir."/".$image->_filename;
			if ($zoom->toolbox->rotateImage($source_file, $new_source, $degrees, $image)) {
			    @$zoom->platform->unlink($source_file);
			    @$zoom->platform->unlink($viewsize_file);
			    @$zoom->platform->unlink($thumb_file);
			    if ($zoom->platform->copy($new_source, $source_file)) {
				//recalculate the image size, because it has been altered by the rotation...
				$image->_size = $zoom->platform->getimagesize($source_file);
				    if ($image->_size[0] > $zoom->_CONFIG['maxsize'] || $image->_size[1] > $zoom->_CONFIG['maxsize']) {
					    if (!$zoom->toolbox->resizeImage($source_file, $viewsize_file, $zoom->_CONFIG['maxsize'], $image)) {
							mosRedirect($loc, _ZOOM_ALERT_IMGERROR);
					    }
				    }
				    if (!$zoom->toolbox->resizeImage($source_file, $thumb_file, $zoom->_CONFIG['size'], $image)) {
					    mosRedirect($loc, _ZOOM_ALERT_IMGERROR);
				    }
			    }
			    //$zoom->deldir($tmpdir);
			    mosRedirect($loc, _ZOOM_ALERT_EDITIMG);
			} else {
			    mosRedirect($loc, _ZOOM_ALERT_IMGERROR);
			}
			break;
		case 'flip_horiz':
			break;
		case 'flip_vert':
			break;
		case 'save':
			if (get_magic_quotes_gpc()) {
			    $newname = stripslashes(mosGetParam($_REQUEST,'newname'));
			    $newdescr = stripslashes(mosGetParam($_REQUEST,'newdescr', null, _MOS_ALLOWHTML));
				$newkeywords = stripslashes(mosGetParam($_REQUEST,'keywords'));
			} else {
			    $newname = mosGetParam($_REQUEST,'newname');
			    $newdescr = mosGetParam($_REQUEST,'newdescr', null, _MOS_ALLOWHTML);
				$newkeywords = mosGetParam($_REQUEST,'keywords');
			}
			$catimg = mosGetParam($_REQUEST,'catimg');
			$parentimg = mosGetParam($_REQUEST,'parentimg');
			$published = mosGetParam($_REQUEST,'published');
			$selections = mosGetParam($_REQUEST,'members_opt');
			print_r($selections);
			//Save in database
			if (empty($selections)) {
			    $selections = 1;
			} else {
			    $selections = implode(',', $selections);
			}
			$newkeywords = trim($newkeywords);
			$zoom->_gallery->_images[$key]->setImgInfo("", $newname, $newkeywords, $newdescr, 0, 0, $published, $selections);
			$zoom->_gallery->_images[$key]->update($catimg, $parentimg);
			mosRedirect($loc, _ZOOM_ALERT_EDITIMG);
			break;
	}
} else {
	//Laat scherm zien met beschrijving van afbeelding
	$zoom->_gallery->_images[$key]->getInfo(false);
	?>
	<script language="javascript" type="text/javascript">
		function submitform(pressbutton){
			document.mosForm.action.value=pressbutton;
			try {
				document.mosForm.onsubmit();
				}
			catch(e){}
			document.mosForm.submit();
		} 
		function submitbutton(pressbutton, lb_id) {
			var form = document.mosForm;
			if (pressbutton == 'save') {
				form.action.value = pressbutton;
			} else if (pressbutton == 'rotate') {
			    form.action.value = pressbutton;
			}
			submitform(pressbutton);
		}
	</script>
	<div align="center">
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<?php
	if (!isset($return) || empty($return)) {
	?>
	<tr>
		<td align="left">
			<a href="<?php echo ($zoom->_isBackend) ? "index2.php?option=com_zoom&amp;Itemid=".$Itemid : sefReltoAbs("index.php?option=com_zoom&amp;Itemid=".$Itemid); ?>">
			<img src="<?php echo $mosConfig_live_site;?>/components/com_zoom/www/images/home.gif" alt="<?php echo _ZOOM_MAINSCREEN;?>" border="0" />&nbsp;&nbsp;<?php echo _ZOOM_MAINSCREEN;?>
			</a>
			<?php
			//global $parent;
			$parent = $zoom->_gallery->getSubcatName();
			if ($zoom->_gallery->_pos==0) echo " &gt; ";
			elseif ($zoom->_gallery->_pos==1) echo " &gt; <a href=\"". sefReltoAbs("index.php?option=com_zoom&amp;Itemid=".$Itemid."&amp;catid=".$zoom->_gallery->_subcat_id)."\">".$parent."</a> &gt; ";
			elseif ($zoom->_gallery->_pos>=2) echo " &gt;..&gt; <a href=\"". sefReltoAbs("index.php?option=com_zoom&amp;Itemid=".$Itemid."&amp;catid=".$zoom->_gallery->_subcat_id)."\">".$parent."</a> &gt; ";
			echo "<a href=\"". sefReltoAbs("index.php?option=com_zoom&amp;Itemid=".$Itemid."&amp;catid=".$zoom->_gallery->_id."&amp;PageNo=".$PageNo)."\">".$zoom->_gallery->_name."</a>";
			if (!$zoom->_gallery->_published) {
				echo " <font color=\"red\">(unpublished)</font>";
			}
			if ($zoom->_isAdmin) {
				echo ' | <a href="'. sefReltoAbs('index.php?option=com_zoom&amp;Itemid=' .$Itemid. '&amp;page=admin') .'">'._ZOOM_ADMINSYSTEM.'</a>';
			} elseif ($zoom->privileges->hasPrivileges()) {
				echo ' | <a href="'. sefReltoAbs('index.php?option=com_zoom&amp;Itemid=' .$Itemid. '&amp;page=admin') .'">'._ZOOM_USERSYSTEM.'</a>';
			}
	   		?>
		</td>
		<td>&nbsp;</td>
	</tr>
	<?php
	} else if (!$zoom->_isBackend) {
	?>
	<tr>
		<td align="center" width="100%">
			<a href="<?php echo ($zoom->_isBackend) ? "index2.php?option=com_zoom&amp;Itemid=".$Itemid."&amp;page=admin" : sefReltoAbs("index.php?option=com_zoom&amp;Itemid=".$Itemid."&amp;page=admin");?>">
			<img src="<?php echo $mosConfig_live_site;?>/components/com_zoom/www/images/home.gif" alt="<?php echo _ZOOM_MAINSCREEN; ?>" border="0" />&nbsp;&nbsp;<?php echo _ZOOM_MAINSCREEN;?>
			</a>&nbsp; | &nbsp;
			<a href="<?php echo ($zoom->_isBackend) ? "index2.php?option=com_zoom&amp;Itemid=".$Itemid."&amp;catid=".$catid."&amp;page=mediamgr&amp;PageNo=".$PageNo : sefReltoAbs("index.php?option=com_zoom&amp;Itemid=".$Itemid."&amp;catid=".$catid."&amp;page=mediamgr&amp;PageNo=".$PageNo); ?>">
			<img src="<?php echo $mosConfig_live_site;?>/components/com_zoom/www/images/back.png" alt="<?php echo _ZOOM_BACK; ?>" border="0" />&nbsp;&nbsp;<?php echo _ZOOM_BACK;?>
			</a>
		</td>
	</tr>
	<?php
	}
	?>
	<tr>
		<td colspan="2" align="center"><h3><?php echo _ZOOM_EDITPIC;?></h3></td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<img src="<?php echo $zoom->hotlinkImage($catid, '2', $zoom->_gallery->_images[$key]->_id, null);?>" alt="" border="1" />
		</td>
	</tr>
	</table>
	<?php
	if (!$zoom->_isBackend) {
	?>
	<table cellspacing="0" cellpadding="4" border="0" width="100%">
	<tr>
		<td width="85%" class="tabpadding" align="center">
			<a href="javascript:submitbutton('save');" onmouseout="MM_swapImgRestore();return nd();"  onmouseover="MM_swapImage('save','','images/save_f2.png',1);return overlib('<?php echo _ZOOM_SAVE;?>');"><img src="images/save.png" alt="" border="0" name="save" /></a>
			<a href="javascript:window.history.go(-1);" onmouseout="MM_swapImgRestore();return nd();"  onmouseover="MM_swapImage('cancel','','images/cancel_f2.png',1);return overlib('<?php echo _CMN_CANCEL;?>');"><img src="images/cancel.png" alt="" border="0" name="cancel" /></a>
		</td>
	</tr>
	</table>
	<?php
	}
	?>
	<form method="post" name="mosForm" action="<?php echo ($zoom->_isBackend) ? "index2.php?option=com_zoom&amp;page=editimg&amp;Itemid=".$Itemid : sefReltoAbs("index.php?option=com_zoom&amp;page=editimg&amp;Itemid=".$Itemid);?>">
	  <?php 
        $tabs = new mosTabs(0);
        $tabs->startPane("modules-cpanel"); 
        $tabs->startTab(_ZOOM_ITEMEDIT_TAB1 ,"module19");
      ?>
			<table border="0" width="400">
			<tr>
				<td><?php echo _ZOOM_FILENAME;?>: </td>
				<td><strong><?php echo $zoom->_gallery->_images[$key]->_filename;?></strong></td>
			</tr>
			<tr>
				<td><?php echo _ZOOM_IMGNAME;?>: </td>
				<td>
		        	<input type="textbox" name="newname" value="<?php echo $zoom->_gallery->_images[$key]->_name;?>" size="50" maxlength="50" class="inputbox" />
				</td>
			</tr>
			<tr>
				<td><?php echo _ZOOM_KEYWORDS;?>: </td>
				<td valign="middle"><input type="text" name="keywords" size="50" value="<?php echo $zoom->_gallery->_images[$key]->_keywords;?>" class="inputbox" /></td>
			</tr>
			<tr>
				<td align="left" valign="top"><?php echo _ZOOM_SETCATIMG;?>: </td>
				<td align="left" valign="top">
					<input type="checkbox" name="catimg" value="1"<?php if($zoom->_gallery->_cat_img==$zoom->_gallery->_images[$key]->_id) echo " checked";?> />
				</td>
				</tr>
				<tr>
					<td align="left" valign="top"><?php echo _ZOOM_SETPARENTIMG;?>:</td>
					<td align="left" valign="top">			
						<input type="checkbox" name="parentimg" value="1"<?php if($zoom->_gallery->_images[$key]->isParentImage($zoom->_gallery->_subcat_id)) echo " checked";?> />
					</td>
				</tr>
				<tr>
					<td align="left"><?php echo _ZOOM_PUBLISHED;?>: </td>
					<td align="left">
						<input type="checkbox" name="published" value="1"<?php if($zoom->_gallery->_images[$key]->isPublished()) echo " checked";?> />
					</td>
				</tr>
			</table>
			<table border="0" width="400">				
			<tr>
				<td valign="top"><?php echo _ZOOM_DESCRIPTION;?>: </td>
				<td valign="top">
				<!-- <textarea cols="50" rows="5" name="newdescr" class="inputbox"><?php echo $zoom->_gallery->_images[$key]->_descr;?></textarea> //-->
				<?php
					// parameters : areaname, content, hidden field, width, height, rows, cols
					editorArea( 'newdescr', $zoom->_gallery->_images[$key]->_descr, 'newdescr', '100%;', '150', '20', '20' ) ; ?>
				</td>
			</tr>
			</table>
		<?php $tabs->endTab(); 
              $tabs->startTab(_ZOOM_ITEMEDIT_TAB2 ,"module20");
        ?>
			<table border="0" width="300">
			<tr>
				<td>
				<?php
				$userlist = $zoom->getUsersList($zoom->_gallery->_images[$key]->_members);
				foreach($userlist as $item){
				    echo $item."\n";
				}
				?>
				</td>
			</tr>
			</table>
		<?php
		if ($zoom->isImage($zoom->_gallery->_images[$key]->_type)) {
              $tabs->endTab(); 
              $tabs->startTab(_ZOOM_ITEMEDIT_TAB3 ,"module21");
        ?>
			<table border="0" width="300">
			<tr>
				<td height="40" align="left" valign="middle" colspan="2">
					<a href="javascript:submitbutton('rotate');" onmouseover="return overlib('<?php  echo _ZOOM_ROTATE;?>', CAPTION, '<?php echo _ZOOM_ACTION;?>');" onmouseout="return nd();">
					<img src="<?php echo $mosConfig_live_site;?>/components/com_zoom/www/images/rotate_btn.png" alt="" border="0" />
					<?php echo _ZOOM_ROTATE;?></a>&nbsp;
				</td>
			</tr>
			<tr>
				<td width="40">&nbsp;</td>
				<td>
					<input type="radio" name="rotate" value="90" />&nbsp;<?php echo _ZOOM_CLOCKWISE;?>
					<input type="radio" name="rotate" value="-90" />&nbsp;<?php echo _ZOOM_CCLOCKWISE;?>
				</td>
			</tr>
			<tr>
				<td height="40" align="left" valign="middle" colspan="2">
				    <h3>The following features are in development and not functional yet!</h3>
					<a href="javascript:submitbutton('flip_horiz');" onmouseover="return overlib('<?php  echo _ZOOM_FLIP_HORIZ;?>', CAPTION, '<?php echo _ZOOM_ACTION;?>');" onmouseout="return nd();">
					<img src="<?php echo $mosConfig_live_site;?>/components/com_zoom/www/images/flip_horiz.png" alt="" border="0" />
					<?php echo _ZOOM_FLIP_HORIZ;?></a>
				</td>
			</tr>
			<tr>
				<td height="40" align="left" valign="middle" colspan="2">
					<a href="javascript:submitbutton('flip_vert');" onmouseover="return overlib('<?php  echo _ZOOM_FLIP_VERT;?>', CAPTION, '<?php echo _ZOOM_ACTION;?>');" onmouseout="return nd();">
					<img src="<?php echo $mosConfig_live_site;?>/components/com_zoom/www/images/flip_vert.png" alt="" border="0" />
					<?php echo _ZOOM_FLIP_VERT;?></a>
				</td>
			</tr>
			</table>
		<?php
		$tabs->endTab(); 
        }
        // start Tabbar
        $tabs->endPane("modules-cpanel");
		?>
	<input type="hidden" name="option" value="<?php echo $option;?>" />
	<input type="hidden" name="page" value="editimg" />
	<input type="hidden" name="Itemid" value="<?php echo $Itemid;?>" />
	<input type="hidden" name="catid" value="<?php echo $zoom->_gallery->_id;?>" />
	<input type="hidden" name="key" value="<?php echo $key;?>" />
	<input type="hidden" name="return" value="<?php echo $return;?>" />
	<input type="hidden" name="PageNo" value="<?php echo $PageNo;?>" />
	<input type="hidden" name="action" value="" />
	</form>
	</div><br />
	<?php
}
?>