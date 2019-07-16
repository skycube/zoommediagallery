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
| Filename: com_zoom.php                                              |
| Version: 2.0                                                        |
|                                                                     |
-----------------------------------------------------------------------
**/
// MOS Intruder Alerts
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );

// Create zOOm Image Gallery object
require_once('classes/zoom.class.php');
$zoom = new zoom();

// list of common inclusions:
if (file_exists("components/com_zoom/language/".$mosConfig_lang.".php") ) { 
	include_once("components/com_zoom/language/".$mosConfig_lang.".php");
} else { 
	include_once("components/com_zoom/language/english.php");
}

// Update the Edit Monitor, eg. delete unnecessary rows
$zoom->updateEditMon();

switch ($page)
{
case 'delpic':
	include('components/com_zoom/delpic.php');
	break;
case 'editpic':
	include('components/com_zoom/editpic.php');
	break;
case 'view':
	include('components/com_zoom/view_embed.php');
	break;
case 'special':
	include('components/com_zoom/special.php');
	break;
// Admin module pages...
case 'admin':
	if($zoom->_isAdmin){
		include('components/com_zoom/admin/admin.php');
		$zoom->adminFooter();
	}else{
		echo "Error: You'll have to be logged in as admin or user/ editor to view this page!";
	}
	break;
case 'user':
	if($zoom->_CONFIG['allowUserUpload']){
		if($zoom->_isUser){
			include('components/com_zoom/admin/user.php');
			$zoom->adminFooter();
		}else{
			echo "Error: You'll have to be logged in as admin or user/ editor to view this page!";
		}
	}
	else{
		echo "Sorry, your administrator has turned off user-editing privilidges. Access Denied."; }
	break;
case 'edit':
	if($zoom->_isAdmin){
		include('components/com_zoom/admin/edit.php');
		$zoom->adminFooter();
	}else{
		echo "Error: You'll have to be logged in as admin or user/ editor to view this page!";
	}
	break;
case 'delete':
	if($zoom->_isAdmin){
		include('components/com_zoom/admin/delete.php');
		$zoom->adminFooter();
	}else{
		echo "Error: You'll have to be logged in as admin to view this page!";
	}
	break;
case 'new':
	if($zoom->_isAdmin || $zoom->_isUser){
		include('components/com_zoom/admin/new.php');
		$zoom->adminFooter();
	}else{
		echo "Error: You'll have to be logged in as admin or user/ editor to view this page!";
	}
	break;
case 'upload':
	if($zoom->_isAdmin || $zoom->_isUser){
   		include('components/com_zoom/admin/upload.php');
   		$zoom->adminFooter();
    }else{
		echo "Error: You'll have to be logged in as admin or user/ editor to view this page!";
	}
    break;
case 'manageindex':
	if($zoom->_isAdmin){
    	include('components/com_zoom/admin/manageindex.php');
    	$zoom->adminFooter();
    }else{
		echo "Error: You'll have to be logged in as admin to view this page!";
	}
    break;
case 'settings':
	if($zoom->_isAdmin){
		include('components/com_zoom/admin/settings.php');
		$zoom->adminFooter();
	}else{
		echo "Error: You'll have to be logged in as admin to view this page!";
	}
	break;
case 'test':
	include('components/com_zoom/test.php');
	break;
default:
    include('components/com_zoom/galleryshow.php');
    break;
}
?>
