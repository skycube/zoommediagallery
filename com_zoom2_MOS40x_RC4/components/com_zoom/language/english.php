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
| Filename: lang_com_zoom.php                                         |
| Version: 2.0                                                        |
|                                                                     |
-----------------------------------------------------------------------
**/
//Language translation
define("_ZOOM_TITLE","zOOm Gallery");
define("_ZOOM_PICK","Pick a gallery");
define("_ZOOM_DELETE","Delete");
define("_ZOOM_BACK","Mainscreen");

//Gallery admin page
if ($zoom->_isAdmin || $zoom->_isUser){
define("_ZOOM_ADMINSYSTEM","Admin System");
define("_ZOOM_USERSYSTEM","User System");
define("_ZOOM_ADMIN_TITLE","Image Gallery Admin System");
define("_ZOOM_USER_TITLE","Image Gallery User System");
define("_ZOOM_NEW","New gallery");
define("_ZOOM_NEW_DESCR","create a new gallery for your new images.");
define("_ZOOM_DEL","Delete gallery");
define("_ZOOM_DEL_DESCR","this option will remove a gallery completely, including images!");
define("_ZOOM_UPLOAD","Upload file(s)");
define("_ZOOM_UPLOAD_DESCR","scan for new images automatically, or upload (multiple) new images manually.");
define("_ZOOM_EDIT","Edit gallery");
define("_ZOOM_EDIT_DESCR","here you can change the name and description of a gallery.");
define("_ZOOM_ADMIN_CREATE","Create database");
define("_ZOOM_ADMIN_CREATE_DESCR","build the required database tables so that you can start using the album");
define("_ZOOM_HD_CHECK","Check");
define("_ZOOM_HD_CHECKALL","Check/Uncheck All");
define("_ZOOM_HD_AFTER","Insert after");
define("_ZOOM_HD_NAME","Name gallery");
define("_ZOOM_HD_NEW","New gallery");
define("_ZOOM_TOPLEVEL","Top level");
define("_ZOOM_HD_UPLOAD","Upload file");
define("_ZOOM_BACKTOGALLERY","Back to gallery");
define("_ZOOM_SETTINGS","Settings");
define("_ZOOM_SETTINGS_DESCR","change and view all the available configuration settings here.");
define("_ZOOM_SETTINGS_CONVTYPE","Conversiontype");
define("_ZOOM_SETTINGS_AUTODET","autodetected: ");
define("_ZOOM_SETTINGS_IMGPATH","Path to image-files:");
define("_ZOOM_SETTINGS_CONVSETTINGS","Image conversion settings:");
define("_ZOOM_SETTINGS_IMPATH","Path to ImageMagick: ");
define("_ZOOM_SETTINGS_NETPBMPATH"," or NetPBM: ");
define("_ZOOM_SETTINGS_THUMBSETTINGS","Thumbnail settings:");
define("_ZOOM_SETTINGS_QUALITY","NetPBM and GD2 JPEG quality: ");
define("_ZOOM_SETTINGS_SIZE","Thumbnail max. width: ");
define("_ZOOM_SETTINGS_TEMPNAME","Temporary Name: ");
define("_ZOOM_SETTINGS_AUTONUMBER","auto-number image names (eg. 1,2,3)");
define("_ZOOM_SETTINGS_TEMPDESCR","Temporary Description: ");
define("_ZOOM_SETTINGS_LAYSETTINGS","Layout settings:");
define("_ZOOM_SETTINGS_SUBCATSPG","No. of (sub-)gallery columns");
define("_ZOOM_SETTINGS_COLUMNS","No. of thumbnail columns");
define("_ZOOM_SETTINGS_THUMBSPG","Thumbs per page");
define("_ZOOM_SETTINGS_COMMENTS","Comments");
define("_ZOOM_SETTINGS_POPUP","PopUp Images");
define("_ZOOM_SETTINGS_CATIMG","Show category image");
define("_ZOOM_SETTINGS_SLIDESHOW","Slideshow");
define("_ZOOM_SETTINGS_ZOOMLOGO","Display zOOm-logo");
define("_ZOOM_SETTINGS_SHOWHITS","Display no. of hits");
define("_ZOOM_SETTINGS_READEXIF","Read EXIF-data");
define("_ZOOM_SETTINGS_RATING","Rating");
define("_ZOOM_SETTINGS_CSS","Stylesheet popup window");
define("_ZOOM_SETTINGS_ACCESS","Accessibility settings:");
define("_ZOOM_SETTINGS_USERUPL","Allow user uploads:");
define("_ZOOM_SETTINGS_SUCCESS","Configuration updated succesfully!");
define("_ZOOM_SETTINGS_ZOOMING","Image zoom");
define("_ZOOM_SETTINGS_ORDERBY","Thumbnail ordering method; order by");
define("_ZOOM_SETTINGS_DATE_ASC","DATE, ascending");
define("_ZOOM_SETTINGS_DATE_DESC","DATE, descending");
define("_ZOOM_SETTINGS_FLNM_ASC","FILENAME, ascending");
define("_ZOOM_SETTINGS_FLNM_DESC","FILENAME, descending");
define("_ZOOM_SETTINGS_NAME_ASC","NAME, ascending");
define("_ZOOM_SETTINGS_NAME_DESC","NAME, descending");
define("_ZOOM_SETTINGS_LIGHTBOX","Lightbox");
define("_ZOOM_YES","yes");
define("_ZOOM_NO","no");
define("_ZOOM_SAVE","Save");
define("_ZOOM_OPTIMIZE","Optimize tables");
define("_ZOOM_OPTIMIZE_DESCR","zOOm Image Gallery uses its tables a lot and thus creates overhead data, ie. 'junk data'. Click here to remove this junk.");

//Image actions
define("_ZOOM_UPLOAD_SINGLE","single (ZIP-)file");
define("_ZOOM_UPLOAD_MULTIPLE","multiple files");
define("_ZOOM_UPLOAD_SCANDIR","scan directory");
define("_ZOOM_UPLOAD_INTRO","Click the <b>Browse</b> button to locate a photo to upload.");
define("_ZOOM_UPLOAD_STEP1","1. Select the number of files you want to upload: ");
define("_ZOOM_UPLOAD_STEP2","2. Select the gallery you want the files uploaded to: ");
define("_ZOOM_UPLOAD_STEP3","3. Use the Browse button to find the photos on your computer");
define("_ZOOM_SCAN_STEP1","Step 1: give a location to scan for images...");
define("_ZOOM_SCAN_STEP2","Step 2: select the images you want to upload...");
define("_ZOOM_SCAN_STEP3","Step 3: zOOm processes the images you selected...");
define("_ZOOM_SCAN_STEP1_DESCR","The location can either be a URL or a directory on the server.<br>&nbsp;   Tip: FTP images to a directory on your server then provide that path here!");
define("_ZOOM_SCAN_STEP2_DESCR1","Processing");
define("_ZOOM_SCAN_STEP2_DESCR2","as a local directory");
define("_ZOOM_FORMCREATE_NAME","Name");
define("_ZOOM_FORM_IMAGEFILE","Image");
define("_ZOOM_FORM_INGALLERY","In gallery");
define("_ZOOM_FORM_SETFILENAME","Set image names with original filenames.");
define("_ZOOM_FORM_LOCATION","Location");
define("_ZOOM_BUTTON_UPLOAD","Upload");
define("_ZOOM_BUTTON_EDIT","Edit");
define("_ZOOM_BUTTON_CREATE","Create");
define("_ZOOM_ALERT_DEL","Gallery is deleted!");
define("_ZOOM_ALERT_EDITOK","Gallery fields have been edited succesfully!");
define("_ZOOM_ALERT_NEWGALLERY","New gallery created.");
define("_ZOOM_ALERT_NONEWGALLERY","Gallery not created!!");
define("_ZOOM_ALERT_EDITIMG","Image properties edited succesfully");
define("_ZOOM_ALERT_DELPIC","Image is deleted!");
define("_ZOOM_ALERT_NODELPIC","Image could not be deleted!");
define("_ZOOM_ALERT_NOPICSELECTED","No image selected.");
define("_ZOOM_ALERT_NOPICSELECTED_MULT","No image selected.");
define("_ZOOM_ALERT_UPLOADOK","Image uploaded succesfully!");
define("_ZOOM_ALERT_UPLOADSOK","images uploaded succesfully!");
define("_ZOOM_ALERT_WRONGFORMAT","Wrong image format.");
define("_ZOOM_ALERT_WRONGFORMAT_MULT","Wrong image format.");
define("_ZOOM_ALERT_MOVEFAILURE","Error moving file.");
define("_ZOOM_ALERT_IMGFOUND","image(s) found.");
define("_ZOOM_INFO_CHECKCAT","Please pick a gallery before pressing the upload button!");
define("_ZOOM_BUTTON_ADDIMAGES","Add images");
define("_ZOOM_BUTTON_REMIMAGES","Remove images");
define("_ZOOM_INFO_PROCESSING","Processing image:");
define("_ZOOM_INFO_DONE","done!");
}

//Navigation (including Slideshow buttons)
define("_ZOOM_SLIDESHOW","Slideshow:");
define("_ZOOM_PREV_IMG","previous image");
define("_ZOOM_NEXT_IMG","next image");
define("_ZOOM_FIRST_IMG","first image");
define("_ZOOM_LAST_IMG","last image");
define("_ZOOM_PLAY","play");
define("_ZOOM_STOP","stop");
define("_ZOOM_RESET","reset");
define("_ZOOM_FIRST","First");
define("_ZOOM_LAST","Last");
define("_ZOOM_PREVIOUS","Previous");
define("_ZOOM_NEXT","Next");

//Gallery actions
define("_ZOOM_IMAGES","image(s)");
define("_ZOOM_IMGFOUND","found - you are at page");
define("_ZOOM_IMGFOUND2","of");
define("_ZOOM_SUBGALLERIES","sub-galleries");
define("_ZOOM_ALERT_COMMENTOK","Your comment has been succesfully added!");
define("_ZOOM_ALERT_COMMENTERROR","You have already commented this image!");
define("_ZOOM_ALERT_VOTE_OK","Your vote has been counted! Thank you.");
define("_ZOOM_ALERT_VOTE_ERROR","You have already voted for this image!");
define("_ZOOM_WINDOW_CLOSE","Close");
define("_ZOOM_ALERT_NOCHECKBOX","No gallery selected.");
define("_ZOOM_NOPICS","No images in gallery");
define("_ZOOM_PROPERTIES","Properties");
define("_ZOOM_COMMENTS","Comments");
define("_ZOOM_YOUR_NAME","Name");
define("_ZOOM_ADD","Add");
define("_ZOOM_NAME","Name");
define("_ZOOM_DATE","Datum");
define("_ZOOM_DESCRIPTION","Description");
define("_ZOOM_IMGNAME","Name");
define("_ZOOM_FILENAME","Filename");
define("_ZOOM_HITS","hits");
define("_ZOOM_CLOSE","Close");
define("_ZOOM_NOIMG", "No images found!");
define("_ZOOM_NONAME", "You must provide a name!");
define("_ZOOM_NOCAT", "No category selected!");
define("_ZOOM_EDITPIC", "Edit Image");
define("_ZOOM_SETCATIMG","Set as Gallery Image");

//rating
define("_ZOOM_RATING","Rating");
define("_ZOOM_NOTRATED","Not rated yet!");
define("_ZOOM_VOTE","vote");
define("_ZOOM_VOTES","votes");
define("_ZOOM_RATE0","rubbish");
define("_ZOOM_RATE1","weak");
define("_ZOOM_RATE2","average");
define("_ZOOM_RATE3","good");
define("_ZOOM_RATE4","very good");
define("_ZOOM_RATE5","perfect!");

//special
define("_ZOOM_TOPTEN","Top Ten");
define("_ZOOM_LASTSUBM","Last submitted");
define("_ZOOM_LASTCOMM","Last commented");
define("_ZOOM_SEARCHRESULTS","Search results");
define("_ZOOM_TOPRATED","Top Rated");

//installation-screen (MOS 4.0.x version)
define("_ZOOM_INSTALL_HEAD","WELCOME TO ZOOM IMAGE GALLERY!");
define("_ZOOM_INSTALL_DESCR","The action you are about to undertake will build new tables for an unpopulated database. If you already have images in your gallery, you should not go any further! ");
define("_ZOOM_INSTALL_YES","YES");
define("_ZOOM_INSTALL_YES_DESCR"," - create all the tables I need to run zOOm Image Gallery..");
define("_ZOOM_INSTALL_NO","NO THANKS");
define("_ZOOM_INSTALL_NO_DESCR"," - that isn't what I need right now and will create the tables manually..");
?>