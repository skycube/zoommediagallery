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
| Filename: upl_dragndrop.php                                         |
| Version: 2.0                                                        |
|                                                                     |
-----------------------------------------------------------------------
**/
// MOS Intruder Alerts
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
$zoom->createSubmitScript("JUploadForm");
if (!isset($catid)){
	echo "<center><h3>"._ZOOM_INFO_CHECKCAT."</h3></center><br>";
}else{
	$theId = $catid;
}
?>
<center>
<br>
<p align="center">
 <form name="JUploadForm" method="POST" action="index.php?option=com_zoom&page=upload&formtype=dragndrop">
  <?php
  echo _ZOOM_FORM_INGALLERY.": ";
  echo $zoom->createCatDropdown('catid','<OPTION value="">---&nbsp;'._ZOOM_PICK.'&nbsp;---</OPTION>','1',$catid);
  ?>
 </form>
 <applet 
  code="JUpload/startup.class"
  archive="components/com_zoom/admin/JUpload.jar"
  width="500"
  height="300"
  name="JUpload"
  alt="JUpload applet">

 <!-- Java Plug-In Options -->
 <param name="progressbar" value="true">
 <param name="boxmessage" value="Loading JUpload Applet ...">
 <param name="boxbgcolor" value="#c0c0c0">

 <!-- Target links -->
 <param name="actionURL" value="<?php echo $live_site;?>/components/com_zoom/save_dnd.php?catid=<?php echo $theId;?>">
 <param name="imageURL" value="components/com_zoom/images/zoom_dragndrop.gif">

 <!-- Colors -->
 <param name="backgroundColor" value="#c0c0c0">
 <param name="mainSplitpaneLocation" value="320">

 <!-- Switches -->
 <param name="checkResponse" value="true">
 <param name="showSuccessDialog" value="true">
 <param name="hideShowAll" VALUE="true"> 
 <param name="showPicturePreview" VALUE="true">
 <param name="addWindowTitle" VALUE="<?php echo _ZOOM_ADD;?>">
 <param name="customFileFilter" VALUE="true">
 <param name="customFileFilterDescription" VALUE="<?php echo _ZOOM_FORM_IMAGEFILE;?>">
 <param name="customFileFilterExtensions" VALUE="gif,jpeg,jpg,png">
 <param name="includeFormFields" value="catdir">
 <param name="labelAdd" value="<?php echo _ZOOM_BUTTON_ADDIMAGES;?>">
 <param name="labelRemove" value="<?php echo _ZOOM_BUTTON_REMIMAGES;?>">
 <param name="labelUpload" value="<?php echo _ZOOM_BUTTON_UPLOAD;?>">
 <param name="checkJavaVersion" VALUE="true">
 <param name="checkJavaVersionGotoURL" VALUE="http://java.sun.com/j2se/downloads.html">
 Your browser does not support applets. Or you have disabled applet in your options.
 To use this applet, please install the newest version of Sun's java. You can get it from <a href="http://www.java.com/">java.com</a>

 </applet>
</p>
<center>