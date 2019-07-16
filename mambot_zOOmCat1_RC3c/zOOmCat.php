<?php
###############################################################
## Developed by Thaddaeus Dahlberg. (C) 2006 Valley Hill Design, LLC. 
## http://joomla.valleylhill.net
## License GNU/GPL. Special thanks for inspiration and code to:
## RC1 - Mike de Boer who wrote Zoom Media Gallery (http://www.zoomfactory.org)
## Lasse Baasch who wrote mod_zoom_pics (http://www.skycube.net)
## Jetze van der Wal who wrote moszoomthumb
## and whoever user "Manuel" is on the moszoomthumb forum.
## RC2 - Matthias Sartor who graciously fixed some code.
###############################################################
## This plugin (mambot) creates a gallery inside content items by accessing 
## all valid, unprotected, and published pictures inside a Zoom Media Gallery 
##category that you designate. The Gallery created is tableless and based on 
## Cascading Style Sheets (CSS). The ZoomCat CSS can be modified from the plugin 
## (mambot) parameter panel or via your own template file's CSS.
################################################################
## To use ZoomCat just enter the following code into your Joomla content:
## {zoomcat catid=AnyZoomCategory csssuffix=OptionalCSSSuffix }
################################################################

/** ensure this file is being included by a parent file */
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
//$_PLUGINS->registerFunction( 'onPrepareContent', 'botJoomZoomCat' );
$_MAMBOTS->registerFunction( 'onPrepareContent', 'botZoomCat' );

function botZoomCat( $published, &$row, $mask=0, $page=0  ) {
	if (!$published) {
		return true;
	}
	$regex = '#{zoomcat.*}#sU';
	$row->text = preg_replace_callback( $regex, 'ZoomCat_replacer', $row->text );
	return true;
}

function ZoomCat_replacer ( &$matches ) {
	global $mainframe,$database,$mosConfig_absolute_path,$mosConfig_live_site, $Itemid;
	
	//load the plugin parameters
	$query = "SELECT id FROM #__mambots WHERE element = 'ZoomCat' AND folder = 'content'";
	$database->setQuery( $query );
	$id = $database->loadResult();
	$mambot = new mosMambot( $database );
	$mambot->load( $id );
	$mambotParams =& new mosParameters( $mambot->params );
	$popupmaxsizeW = $mambotParams->get( 'popupwidth', '600' );
	$popupmaxsizeH = $mambotParams->get( 'popupheight', '600' );
	$perrowthumb = $mambotParams->get( 'perrow', '3' );
	$numthum = $mambotParams->get( 'numthum', '' );
	$usePluginCSS = $mambotParams->get('usezmcss', '1');
	$ZMCatStyles = $mambotParams->get( 'zoomcatstyles', '#ZoomCat { position: relative; width: 100%; text-align: center; float: left; padding: 10px; } #ZoomCat h2 { font-size: 18px; line-height: 19px; margin: 0px; padding: 0px; text-align: center; color: #006699; } p.ZMCatSize { text-align: center; margin: 0px; } p.ZMCatDesc { text-align: center; font-size: 13px; line-height: 14px; margin-top: 2px; margin-bottom: 7px; } .ZMThumbRow { text-align: center; position: relative; width: 100%; padding: 0px 0px 10px; margin: auto; float: left; } .ZMThumb { float: left; width: 30%; text-align: center; padding: 1px 5px 1px 1px; } .ZMThumbLast { margin-right: 0px !important; } .ZMThumb img { border: 1px solid #666666; } .ZMThumb a { text-decoration: none; color: #333333; } .ZMThumb a:hover { color: #990000; } .ZMThumb p.ZMImgCaption { width: 100%; margin-top: 2px; margin-bottom: 5px; } .ZMThumb p.ZMImgHits { font-size: 11px; line-height: 12px; margin: 0px; } .ZMThumb img a:hover { border-top-color: #990000; border-right-color: #990000; border-bottom-color: #990000; border-left-color: #990000; }' );
	$brexpress = '<br />';
	$ZMCatStyles = str_replace("<br />","\n",$ZMCatStyles);
	
	//Finding the plugin parameter
	$tags = array();
	$plugincode = substr($matches[0],1,strlen($matches[0])-2);
	$tags = explode( " ", $plugincode );
	for ( $c = 0; $c < count($tags); $c++ ) {
		$tagkeyvalue = explode ("=", $tags[$c]);
		switch (strtolower($tagkeyvalue[0])) {
			case "catid":
				$ZMCatID=($tagkeyvalue[1]);
			break;
			case "csssuffix":
				$CSSsuffix=($tagkeyvalue[1]);
			break;
			case "range":
				$range = explode ("-", $tagkeyvalue[1]);
				$THStart=$range[0];
				$THEnd=$range[1];
			break;
		};
	}
	if (!$ZMCatID) {return "No category was given in plugin!";}	
	
	#####################################################################################################################
	# Global configuration and language files
	#####################################################################################################################
	require($mosConfig_absolute_path.'/components/com_zoom/etc/zoom_config.php');
	if (file_exists($mosConfig_absolute_path."/components/com_zoom/lib/language/".$mosConfig_lang.".php")){ 
		include_once($mosConfig_absolute_path."/components/com_zoom/lib/language/".$mosConfig_lang.".php");
	}else{ 
		include_once($mosConfig_absolute_path."/components/com_zoom/lib/language/english.php");
	}
	
	$ZMBaseImagePath  				= ($mosConfig_live_site."/".$zoomConfig['imagepath']);
	$ZMusepopup						= $zoomConfig['popUpImages'];
	
	$mainframe->addCustomHeadTag('<script language="javascript" type="text/javascript" src="'.$mosConfig_live_site.'/components/com_zoom/lib/js/prototype.js"></script>');
	$mainframe->addCustomHeadTag('<script language="javascript" type="text/javascript" src="'.$mosConfig_live_site.'/components/com_zoom/lib/js/scriptaculous.js?load=mm,effects"></script>');
	$mainframe->addCustomHeadTag('<script language="javascript" type="text/javascript">var livesite = "'.$mosConfig_live_site.'";</script>'); 
	
	//lightboxJS
	if ($ZMusepopup	 == 2 ) {
	    $mainframe->addCustomHeadTag('<script language="javascript" type="text/javascript">var livesite = "'.$mosConfig_live_site.'"</script>');
		$mainframe->addCustomHeadTag('<script language="javascript" type="text/javascript" src="'.$mosConfig_live_site.'/components/com_zoom/lib/js/lightbox.js"></script>');
		$mainframe->addCustomHeadTag('<link href="'.$mosConfig_live_site.'/components/com_zoom/etc/lightbox.css" rel="stylesheet" media="screen" type="text/css" />');
	}
	
	// Overlib if activated 
	if ($zoomConfig['showMetaBox']) {
		$mainframe->addCustomHeadTag('<script language="javascript" type="text/javascript" src="'.$mosConfig_live_site.'/includes/js/overlib_mini.js"></script>');
		$mainframe->addCustomHeadTag('<script language="javascript" type="text/javascript" src="'.$mosConfig_live_site.'/includes/js/overlib_hideform_mini.js"></script>');
	}
	//Ordering for sql
	$TheOrder = array ('imgdate ASC','imgdate ASC','imgdate DESC','imgfilename ASC','imgfilename DESC','imgname ASC','imgname DESC' );
	$ZMOrderBy = $TheOrder[$zoomConfig['orderMethod']]; 
	
	// Get the correct Itemid for com_zoom linking if not linked it takes the Itemid of the current page
	$database->setQuery("SELECT id FROM #__menu WHERE link='index.php?option=com_zoom' AND published ='1' AND access='0'");
	$row1 = $database->loadObjectList();
	$zoomID = $row1[0]->id;
	if (!$zoomID) {$zoomID = $Itemid;}
	
	//Check validity and load info about designated catid
	$database->setQuery("SELECT * FROM #__zoom WHERE catid = $ZMCatID AND published='1' AND catpassword=''");
	$catrows=$database->loadObjectList();
	$ZMCatDir = $catrows[0]->catdir;
	$ZMCatName = $catrows[0]->catname;
	$ZMCatDesc = $catrows[0]->catdescr;
	$ZMCatImg = $catrows[0]->catimg;
	if (!$catrows) {
		return 'Category is not published, is password protected, or does not exist!';
	}	
	
	//Load info about imgids from valid Cat ID above
	$database->setQuery( "SELECT * FROM #__zoomfiles WHERE catid = $ZMCatID AND published='1' ORDER BY $ZMOrderBy" );
	$imgrows = $database->loadObjectList();
	if (!$imgrows) {
		return "No valid images in category!";
	}
	
	//If plugin styles were requested add plugin CSS
	if ($usePluginCSS) {
		$outputhtml .= "\n<style type='text/css'>\n<!--\n$ZMCatStyles\n-->\n</style>\n\n";
	}
	
	//Add header with HTML header with DIV, category name, category description
	$outputhtml .= "<div id='ZoomCat".$CSSsuffix."'>\n";
	$outputhtml .= "<h2>".$ZMCatName."</h2>\n";
	$maximages = sizeof($imgrows); //new introduced variable; counts number of images in category;
	//if no start and end parameters are given define them
	if (!$THStart) {$THStart=0;}
	if (!$THEnd) {$THEnd = $maximages;}
	$maximages = ($THEnd - $THStart) + 1;
	if ($zoomConfig['mediafound']) {
		$outputhtml .= "<p class='ZMCatSize'>".$maximages." "._ZOOM_SETTINGS_TAB2.".</p>\n";
	}
	$outputhtml .= "<p class='ZMCatDesc'>".$ZMCatDesc."</p>\n";
	
	$selfile = 0;	
	
	//Check for slideshow and lightboxJS
	if ($ZMusepopup == 2 && $zoomConfig['slideshow']) {
		$ZMslideshowLB =' rel="lightbox['.$ZMCatName.']" ';
	} else {
		$ZMslideshowLB = ' rel="lightbox" ';
	}
	
	//start the row style so thumbs stay orderly
	$outputhtml .= "<span class='ZMThumbRow'>\n";
	
	//The loop of Thumbs begins for catid		
	foreach($imgrows as $imgrow) {
		$currentimage++; //new introduced variable; increases number of images after each displayed image;
		//finding pagecount just for the heck of it.
		$y++;
		if($y > $zoomConfig['PageSize']) {
			$pagecount++; 
			$y=1;
		}
		
		//do if $currentimage is within range
		if ($currentimage >= $THStart && $currentimage <= $THEnd )
		{
			$ZMimgFileName = $imgrow->imgfilename;
			$ZMimgImgName = $imgrow->imgname;	
			$ZMimgImgCaption = $imgrow->imgdescr;
			$ZMimgImgHits = $imgrow-> imghits;
			$perrowtest++;
			
		//each thumb surrounded by a style
		if ($perrowtest == $perrowthumb) {
			$outputhtml .= "<span class=\"ZMThumb ZMThumbLast\">\n";
		}
		else {
			$outputhtml .= "<span class=\"ZMThumb\">\n";
		}
	    
	    if ($zoomConfig['showMetaBox'] == 1) {
		    $ZMMOLink = 'onmouseover="return overlib(\''.$ZMimgImgCaption.'\', CAPTION, \''.$ZMimgImgName.'\');" onmouseout="return nd();"';
	    }	
		//create link to Zoom Gallery image
		if(!$ZMusepopup) {
	  		$ZMMediaLink = "<a ".$ZMMOLink." href=\"".$mosConfig_live_site."/index.php?option=com_zoom&Itemid=$zoomID&page=view&catid=$ZMCatID&PageNo=$pagecount&key=$selfile&hit=1\">";
		}
		elseif($ZMusepopup == 1) {
			$mycrypt = ZMCatEncrypt("catid=".$ZMCatID."&amp;key=".$selfile."&amp;isAdmin=false&amp;hit=1");
			$ZMpopLink = $mosConfig_live_site.'/components/com_zoom/www/view.php?popup=1&q='.$mycrypt;
			$ZMMediaLink = "<a ".$ZMMOLink." href='javascript:void(0)' onClick=\"window.open('".$ZMpopLink."', 'win1', 'width=".$popupmaxsizeW.", height=".$popupmaxsizeH.", scrollbars=1').focus()\">";
		}
		elseif($ZMusepopup == 2) {
			$ZMMediaLink = '<a  '.$ZMMOLink.' href="'.$ZMBaseImagePath.'/'.$ZMCatDir. '/'.$ZMimgFileName.'"'.$ZMslideshowLB.'title="'.$ZMimgImgCaption.'">';
		}

		//create html for thumb image;	
		//checking for multimedia
		if ( preg_match('/(.*)\.mp3/',$ZMimgFileName) ) {$ZMMediaThumb = 'audio'; }
		if ( preg_match('/(.*)\.mpg|\.mpeg|\.rm|\.mpg|\.mpeg|\.mov|\.moov|\.wmv|\.avi|\.asf|\.qt|\.mp4/',$ZMimgFileName) ) {$ZMMediaThumb = 'video'; }
		if ( preg_match('/(.*)\.pdf/',$ZMimgFileName) ) {$ZMMediaThumb = 'pdf'; }
		if ( preg_match('/(.*)\.doc/',$ZMimgFileName) ) {$ZMMediaThumb = 'document'; }
		//creating the thumb image
		if ($ZMMediaThumb && $ZMusepopup == 2) {
			$mycrypt = ZMCatEncrypt("catid=".$ZMCatID."&amp;key=".$selfile."&amp;isAdmin=false&amp;hit=1");
			$ZMpopLink = $mosConfig_live_site.'/components/com_zoom/www/view.php?popup=1&q='.$mycrypt;
			$ZMMediaLink = "<a ".$ZMMOLink." href='javascript:void(0)' onClick=\"window.open('".$ZMpopLink."', 'win1', 'width=".$popupmaxsizeW.", height=".$popupmaxsizeH.", scrollbars=1').focus()\">";
			$outputhtml .= "     $ZMMediaLink<img src='".$mosConfig_live_site."/components/com_zoom/www/images/filetypes/".$ZMMediaThumb.".png' alt='".$ZMimgImgCaption."' border='0'></a><br />\n";
		} else if ($ZMMediaThumb && $ZMusepopup < 2) {
			$outputhtml .= "     $ZMMediaLink<img src='".$mosConfig_live_site."/components/com_zoom/www/images/filetypes/".$ZMMediaThumb.".png' alt='".$ZMimgImgCaption."' border='0'></a><br />\n";
		}else {
			$outputhtml .= "     $ZMMediaLink<img src='".$ZMBaseImagePath.$ZMCatDir."/thumbs/".$ZMimgFileName."' alt='' border='0' /></a><br />\n";
		}
		
		//display caption if set in Zoom config
		if ($zoomConfig['showName']) {
			$outputhtml .= '     <p class="ZMImgCaption">'.$ZMMediaLink.$ZMimgImgName."</a></p>\n";
		}
		
		//display hits if set in Zoom config
		if ($zoomConfig['showHits']) {
			$outputhtml .= "     <p class='ZMImgHits'>".$ZMimgImgHits." x "._ZOOM_HITS."</p>\n";
		}
	
		//finish the link
		$outputhtml .= "</span>\n";
		
		$selfile++;
		
		//Wrapping each row in style
		if ($perrowtest >= $perrowthumb) {
			$outputhtml .= "</span>\n";
			if (($perrowtest == $perrowthumb) && ($currentimage < $maximages)) { //new row only if there are images to come;
				$outputhtml .= "<span class='ZMThumbRow'>\n";
			}
			$perrowtest = 0;
		}
	} 
	}
	
	if ($perrowtest > 0) {
		$outputhtml .= "</span>\n";
	}
	$outputhtml .= "</div>\n";
	return $outputhtml;
}

# Encrypten function of com_zOOm
function ZMCatEncrypt($string) 
{
  $convert = '';
  if (isset($string) && substr($string,1,4) != 'obfs') {
	for ($i=0; $i < strlen($string); $i++) {
		$dec = ord(substr($string,$i,1));
		if (strlen($dec) == 2) $dec = 0 . $dec;
		$dec = 324 - $dec;
		$convert .= $dec;
	}
	$convert = '{obfs:' . $convert . '}';
	return ($convert);
  } else {
    return $string;
}
}
?>