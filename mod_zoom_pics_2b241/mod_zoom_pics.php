<?php
######################################################################################
# Name:                   mod_zoom_pics.php
# Version:                2b241
# Date:                   2006|08|08
# Requirements:			        com_zoom 2.5rc1 or higher
#
# mod_zoom_pics is a module for Mambo Open Source using the
# component zoom gallery 
#
# Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
# Per Lasse Baasch
#
# DEAR ALL WHO LIKES THIS CODE AND OR WANT TO CHANGE SOMETHING
# PLEASE INFORM ME DIRECLY OVER YOUR WHICHS OR CHANGES THAT YOU HAD DONE;
# CAUSE THAN I WILL BE ABLE TO PUBLISH IT FOR ALL // GPL
#
#
# SPECIAL NOTE FOR PEOPLE HOW WANTS TO FIND BUGS AND/ OR EDITING THIS CODE
# 1. Please use the latest version of this file (www.zoomfactory.org)
# 2. Please use singlespaced placeholders like me
# 3. Do not reorganized the completly code, I will not able to see your changes
# 4. THANKS FOR YOUR HELP... THE COMMUNITY THANKS YOU TOO
#
# Per Lasse Baasch
# mail: use contact form on www.skycube.net
#
# DOWNLOAD at:	http://www.skycube.net 
# DEMO at:		http://www.bsekrank.de
#
######################################################################################
# THANKS Area (Just started, i don't remember all)
# -Realname known-
# Andreas Mastny			        (Germany)
# Maxim Erdyakov			        (Russia)
# Matthias Reinelt         (Germany)
# Fernando Rodríguez       (?World?)
# Dr. Colin Walls          (England)
# Manuel                   (Germany)
# -Forumusers
# gOhAsE
######################################################################################

defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
global $mosConfig_offset,$database,$mosConfig_dbprefix,$Itemid;

#####################################################################################################################
# Global configuration and language files
#####################################################################################################################
require($mosConfig_absolute_path.'/configuration.php');
require($mosConfig_absolute_path.'/components/com_zoom/etc/zoom_config.php');
if (file_exists($mosConfig_absolute_path."/components/com_zoom/lib/language/".$mosConfig_lang.".php")){ 
	include_once($mosConfig_absolute_path."/components/com_zoom/lib/language/".$mosConfig_lang.".php");
}else{ 
	include_once($mosConfig_absolute_path."/components/com_zoom/lib/language/english.php");
}

#####################################################################################################################
# Configuration from com_zoom
#####################################################################################################################
$ZMBaseImagePathR   			        = ($mosConfig_live_site."/".$zoomConfig['imagepath']);
$ZMBaseImagePathA  			        	= ($mosConfig_absolute_path."/".$zoomConfig['imagepath']);
$_SESSION['ZMorder']				       = $zoomConfig['orderMethod'];
$_SESSION['ZMmaxpagesize']			  = $zoomConfig['PageSize'];
$ZMusepopup					               = $zoomConfig['popUpImages'];
$ZMpopupmaxsize					           = $zoomConfig['maxsize'];

#####################################################################################################################
# Configuration from joomla! modules table
#####################################################################################################################
$ZMmethod 					                = $params->get( 'ZMmethod', '2' );
$ZMonlythiscat					            = $params->get( 'ZMonlythiscat', '0' );
$ZMnumerofpics					            = $params->get( 'ZMnumerofpics', '1' );
$ZMshowmeth					               = $params->get( 'ZMshowmeth', '1' );
$ZMshowcat					                = $params->get( 'ZMshowcat', '1' );
$ZMshowcatlinked				           = $params->get( 'ZMshowcatlinked', '1' );
$ZMshowhits					               = $params->get( 'ZMshowhits', '0' );
$ZMshowvotes					              = $params->get( 'ZMshowvotes', '0' );
$ZMshowfilename					           = $params->get( 'ZMshowfilename', '1' );
$ZMshowname					               = $params->get( 'ZMshowname', '1' );
$ZMshowdesc					               = $params->get( 'ZMshowdesc', '0' );
$ZMimglinking					             = $params->get( 'ZMimglinking', '1' );
$ZMviemode 					               = $params->get( 'ZMviemode', '0' );
$ZMitemidpic 					             = $params->get( 'ZMitemidpic', '0' );
$ZMstyleallign					            = $params->get( 'ZMstyleallign', 'center' );
$ZMstylespacer					            = $params->get( 'ZMstylespacer', '0' );
$ZMstylespacersize				         = $params->get( 'ZMstylespacersize', '0' );
$ZMstyleresizeimage				        = $params->get( 'ZMstyleresizeimage', '0' );
$ZMstyleresizeimagewidth			    = $params->get( 'ZMstyleresizeimagewidth', '150' );
$ZMmulti_direction 				        = $params->get( 'ZMmulti_direction', 'vertical' );
$ZMstylescroller 				          = $params->get( 'ZMstylescroller', '1' );
$ZMstylescrollerDirection 			  = $params->get( 'ZMstylescrollerDirection', 'up' );
$ZMstylescrollerW 				         = $params->get( 'ZMstylescrollerW', '150' );
$ZMstylescrollerH 				         = $params->get( 'ZMstylescrollerH', '200' );
$ZMstylescrollerSpeed 				     = $params->get( 'ZMstylescrollerSpeed', '1' );
$ZMstylescrollerDelay 				     = $params->get( 'ZMstylescrollerDelay', '10' );
$ZMLang_hits 					             = $params->get( 'ZMLang_hits', 'hits' );
$ZMLang_votes 					            = $params->get( 'ZMLang_votes', 'votes' );
$ZMLang_newest 					           = $params->get( 'ZMLang_newest', 'newest' );
$ZMLang_random 					           = $params->get( 'ZMLang_random', 'random' );

#####################################################################################################################
# Other configuration for more easy coding
#####################################################################################################################
$ZMthumbfolder			= "thumbs";
$_SESSION['ZMSQLfiles'] = "(#__zoomfiles.imgfilename LIKE '%jpg%' OR #__zoomfiles.imgfilename LIKE '%jpeg%' OR #__zoomfiles.imgfilename LIKE '%gif%' OR #__zoomfiles.imgfilename LIKE '%png%')";

//Viewmode addjustment
if($ZMviemode == 0)
{
 if($ZMusepopup == 0) $ZMviemodecostum = 1;
 else $ZMviemodecostum = 2;
}
else $ZMviemodecostum = 3;

//Ordering for sql
if 		($_SESSION['ZMorder'] == 1){ $_SESSION['ZMorder'] = 'imgdate ASC'; } //ok
elseif  ($_SESSION['ZMorder'] == 2){ $_SESSION['ZMorder'] = 'imgdate DESC'; } //ok
elseif  ($_SESSION['ZMorder'] == 3){ $_SESSION['ZMorder'] = 'imgfilename ASC'; } //ok
elseif  ($_SESSION['ZMorder'] == 4){ $_SESSION['ZMorder'] = 'imgfilename DESC'; } //ok
elseif  ($_SESSION['ZMorder'] == 5){ $_SESSION['ZMorder'] = 'imgname ASC'; } //ok
elseif  ($_SESSION['ZMorder'] == 6){ $_SESSION['ZMorder'] = 'imgname DESC'; } //ok

// Get the correct Itemid for com_zoom linking
$joscomponentstable = $mosConfig_dbprefix."menu";
$database->setQuery("SELECT $joscomponentstable.id FROM $joscomponentstable WHERE $joscomponentstable.link = 'index.php?option=com_zoom'");
$row1=$database->loadObjectList();
$zoomID = $row1[0]->id;

// for picturelinking
if($ZMitemidpic)
 $ZMitemidpic = $Itemid;
else
 $ZMitemidpic = $zoomID;
 
//Only this catid // is not recursiv... may when i want next years...
if($ZMonlythiscat!= 0)
 $_SESSION['ZMonlythiscatSQL'] = "#__zoom.catid = $ZMonlythiscat";
else 
 $_SESSION['ZMonlythiscatSQL'] = "#__zoom.catid != 66666"; // placebo

//randommode selection
if($ZMmethod == 1)
{
 srand(microtime()*1000000);
 $ZMmethod = rand(2,5);
}

##########################
# Pop-Up sizes
##########################
if ($ZMpopupmaxsize < 550) 
{
 $_SESSION['ZMpopupmaxsizeW'] = "550";
 $_SESSION['ZMpopupmaxsizeH'] = "650";
}
elseif ($ZMpopupmaxsize > 550)
{
 $_SESSION['ZMpopupmaxsizeW'] = $ZMpopupmaxsize+50;
 $_SESSION['ZMpopupmaxsizeH'] = $ZMpopupmaxsize+150;
}

#####################################################################################################################
# Start for multiple instances // thx to Phil Martin 
#####################################################################################################################
if (!defined( '_MOS_ZOOM_PICS_MODULE' )) {
   /** ensure that functions are declared only once */
   define( '_MOS_ZOOM_PICS_MODULE', 1 );

#####################################################################################################################
# Encrypt function of com_zOOm
#####################################################################################################################
function ZMencrypt($string) 
{
 $convert = '';
 if (isset($string) && substr($string,1,4) != 'obfs')
 {
	 for ($i=0; $i < strlen($string); $i++)
  {
		 $dec = ord(substr($string,$i,1));
		 if (strlen($dec) == 2)
    $dec = 0 . $dec;
		 $dec = 324 - $dec;
		 $convert .= $dec;
	 }
	 $convert = '{obfs:' . $convert . '}';
	 return ($convert);
 }
 else
  return $string;
}

#####################################################################################################################
# resize thumb size if enabled
#####################################################################################################################
function ZMresizethumb($thisimageApath,$ZMstyleresizeimagewidth)
{
 $thisimageWH = getimagesize("$thisimageApath");
 $thisimageW  = $thisimageWH[0];
 $thisimageH  = $thisimageWH[1];
  
 $multivar = round(($ZMstyleresizeimagewidth/$thisimageW),2);
 $thisimageW = $thisimageW*$multivar;
 $thisimageH = $thisimageH*$multivar;
 $thisimageW = round($thisimageW,0);
 $thisimageH = round($thisimageH,0);
  
 return "width=\"$thisimageW\" height=\"$thisimageH\"";
}

#####################################################################################################################
# End for multiple instances
#####################################################################################################################
}

#####################################################################################################################
#####################################################################################################################
#####################################################################################################################
# OUTPUT AREA !!!!

echo " "; // Needed for CSS2 sites.. or they may crash in serveral browsers
  
//Allign & Scroller START
if ($ZMmulti_direction == "vertical")
{
 if($ZMstyleallign != 'not')
  echo "<div align=\"$ZMstyleallign\">\n";

 //Scroller Start
 if($ZMstylescroller)
 {
  echo "<MARQUEE behavior=\"scroll\" align=\"$ZMstyleallign\" direction=\"$ZMstylescrollerDirection\" width=\"$ZMstylescrollerW\" height=\"$ZMstylescrollerH\" scrollamount=\"$ZMstylescrollerSpeed\" scrolldelay=\"$ZMstylescrollerDelay\" onmouseover='this.stop()' onmouseout='this.start()'>";
  if($ZMstyleallign != 'not')
   echo "<div align=\"$ZMstyleallign\">\n";
  else
   echo "<div>\n";
 }
}
else
{
 echo "<table border=\"0\" cellspacing=\"0\" cellpadding=\"$ZMstylespacersize\" width=\"100%\"><tr>\n";
}
  
$ZMSQLfiles	= $_SESSION['ZMSQLfiles'];
$ZMonlythiscatSQL = $_SESSION['ZMonlythiscatSQL'];

switch ($ZMmethod)
{
 //random
	case 2: $query = "SELECT #__zoom.catid,#__zoom.catname,#__zoom.catdir,#__zoomfiles.imgfilename,#__zoomfiles.imgid,#__zoomfiles.imghits,#__zoomfiles.votesum,#__zoomfiles.votenum,#__zoomfiles.imgname,#__zoomfiles.imgdescr FROM #__zoomfiles INNER JOIN #__zoom ON #__zoomfiles.catid = #__zoom.catid WHERE #__zoomfiles.published=1 AND #__zoom.catpassword = '' AND #__zoom.catmembers = '1' AND $ZMSQLfiles AND $ZMonlythiscatSQL ORDER BY rand() LIMIT $ZMnumerofpics"; break;
	//new
	case 3: $query = "SELECT #__zoom.catid,#__zoom.catname,#__zoom.catdir,#__zoomfiles.imgfilename,#__zoomfiles.imgid,#__zoomfiles.imghits,#__zoomfiles.votesum,#__zoomfiles.votenum,#__zoomfiles.imgname,#__zoomfiles.imgdescr FROM #__zoomfiles INNER JOIN #__zoom ON #__zoomfiles.catid = #__zoom.catid WHERE #__zoomfiles.published=1 AND #__zoom.catpassword = '' AND #__zoom.catmembers = '1' AND $ZMSQLfiles AND $ZMonlythiscatSQL ORDER BY #__zoomfiles.imgid DESC LIMIT $ZMnumerofpics"; break;
	//hits
	case 4: $query = "SELECT #__zoom.catid,#__zoom.catname,#__zoom.catdir,#__zoomfiles.imgfilename,#__zoomfiles.imgid,#__zoomfiles.imghits,#__zoomfiles.votesum,#__zoomfiles.votenum,#__zoomfiles.imgname,#__zoomfiles.imgdescr FROM #__zoomfiles INNER JOIN #__zoom ON #__zoomfiles.catid = #__zoom.catid WHERE #__zoomfiles.published=1 AND #__zoom.catpassword = '' AND #__zoom.catmembers = '1' AND $ZMSQLfiles AND $ZMonlythiscatSQL ORDER BY #__zoomfiles.imghits DESC LIMIT $ZMnumerofpics"; break;
	//votes
	case 5: $query = "SELECT #__zoom.catid,#__zoom.catname,#__zoom.catdir,(#__zoomfiles.votesum/#__zoomfiles.votenum) AS rating,#__zoomfiles.imgfilename,#__zoomfiles.imgid,#__zoomfiles.imghits,#__zoomfiles.votesum,#__zoomfiles.votenum,#__zoomfiles.imgname,#__zoomfiles.imgdescr FROM #__zoomfiles INNER JOIN #__zoom ON #__zoomfiles.catid = #__zoom.catid WHERE #__zoomfiles.published=1 AND #__zoom.catpassword = '' AND #__zoom.catmembers = '1' AND $ZMSQLfiles AND $ZMonlythiscatSQL ORDER BY rating DESC LIMIT $ZMnumerofpics"; break;
}

$database->setQuery($query);
$pics=$database->loadObjectList();

$ZMnumerofpics = sizeof($pics);
$i=0;
foreach($pics as $pic)
{
 $thisimageApath = $ZMBaseImagePathA.$pic->catdir."/".$ZMthumbfolder."/".$pic->imgfilename;
 if ($ZMmulti_direction != 'vertical')
 {
  if($ZMstyleallign != 'not')
	  echo "<td align=\"$ZMstyleallign\">\n";
  else
	  echo "<td>\n";
 }

 // Show Method
 if($ZMshowmeth)
 {
  if($ZMmethod == 2 )			echo "$ZMLang_random<br />\n";
	 elseif($ZMmethod == 3 )		echo "$ZMLang_newest<br />\n";
	 elseif($ZMmethod == 4 )		echo "$ZMLang_hits<br />\n";
	 elseif($ZMmethod == 5 )		echo "$ZMLang_votes<br />\n";
 }
    
 // Link START
	$database->setQuery("SELECT #__zoomfiles.imgid FROM #__zoomfiles JOIN #__zoom ON #__zoomfiles.catid = #__zoom.catid WHERE #__zoom.catid = $pic->catid AND #__zoomfiles.published=1 AND #__zoom.catpassword = '' AND #__zoom.catmembers = '1' AND $ZMSQLfiles AND $ZMonlythiscatSQL ORDER BY ".$_SESSION['ZMorder']."");
	$row1=$database->loadObjectList();
	for($j = 0; $j < sizeof($row1); $j++)
		if($row1[$j]->imgid == $pic->imgid) { $selfile = $j; break; }

	// select page in com_zoom
	$selrealfile = $selfile +1; //because Zoomgallery begins with picture nr. 0
	$pagecount = ceil ($selrealfile / $_SESSION['ZMmaxpagesize']);

	if($ZMimglinking)
	{
  if($ZMimglinking == 1)
	 {
	  if($ZMviemodecostum == 1)
	  {
	   echo "<a href=\"".$mosConfig_live_site."/index.php?option=com_zoom&Itemid=$ZMitemidpic&page=view&catid=".$pic->catid."&PageNo=$pagecount&key=$selfile&hit=1\">";
	  }
	  elseif($ZMviemodecostum == 2)
	  {
	   $mycrypt = ZMencrypt("catid=".$pic->catid."&key=$selfile&isAdmin=false&hit=1");
	   echo "<a href=\"javascript:void(0)\" onClick=\"window.open('".$mosConfig_live_site."/components/com_zoom/www/view.php?popup=1&q=".$mycrypt."', 'win1', 'width=$ZMpopupmaxsizeW, height=$ZMpopupmaxsizeH, scrollbars=1, resizable=1').focus()\">";
	  }
	  elseif($ZMviemodecostum == 3)
	   echo "<a href=\"javascript:void(0)\" onClick=\"window.open('".$ZMBaseImagePathR.$pic->catdir."/".$pic->imgfilename."', 'win1', 'width=$ZMpopupmaxsizeW, height=$ZMpopupmaxsizeH, scrollbars=1, resizable=1').focus()\">";
	 }
	 elseif($ZMimglinking == 2)
	 {
		 echo "<a href='".$mosConfig_live_site."/index.php?option=com_zoom&Itemid=$zoomID&catid=".$pic->catid."'>";
	 }
	}

 // Image
	if($ZMstyleresizeimage)
  echo "<img ".ZMresizethumb($thisimageApath,$ZMstyleresizeimagewidth)." src=\"".$ZMBaseImagePathR.$pic->catdir."/".$ZMthumbfolder."/".$pic->imgfilename."\" alt=\"\" border=\"0\" />";
	else
  echo "<img src=\"".$ZMBaseImagePathR.$pic->catdir."/".$ZMthumbfolder."/".$pic->imgfilename."\" alt=\"\" border=\"0\" />";

	// Link END;
 if ($ZMimglinking)
  echo "</a><br />\n";
 else
  echo "<br />\n";

 // Show cat
 if($ZMshowcat)
 {
	 $outputtemp = stripslashes($pic->catname);
	 if($ZMshowcatlinked) $outputtemp = "<a href='".$mosConfig_live_site."/index.php?option=com_zoom&Itemid=$ZMitemidpic&catid=".$pic->catid."'>".$outputtemp."</a>";
	  echo $outputtemp."<br />";
 }

 if($ZMshowhits) echo $ZMLang_hits.":&nbsp;".$pic->imghits."<br />\n";                   // Show Hits
 if($pic->votenum==0) $pic->votenum=1;
 if($ZMshowvotes) echo $ZMLang_votes.":&nbsp;".($pic->votesum/$pic->votenum)."<br/>\n"; // Show Votes
 if($ZMshowfilename) echo $pic->imgfilename."<br />\n";                                  // Show Filename
 if($ZMshowname) echo $pic->imgname."<br />\n";                                          // Show Name
 if($ZMshowdesc) echo $pic->imgdescr."<br />\n";                                         // Show Description
    
 // Spacer
 if ($ZMmulti_direction == 'vertical')
 {
  if($i<$ZMnumerofpics-1) if($ZMstylespacer) echo "<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\"><tr><td height=\"$ZMstylespacersize\" width=\"$ZMstylespacersize\">&nbsp;</td></tr></table>\n";
 }
 $i++;
}

//Allign & Scroller END
if ($ZMmulti_direction == 'vertical')
{
 if($ZMstyleallign != 'not')
  echo "</div>\n";
 else
  echo "<div>\n";
	  
 //Scroller End
 if($ZMstylescroller)
  echo "</MARQUEE>";
 if($ZMstyleallign != 'not')
	 echo "</div>\n";
}
else
 echo "</tr>\n</table>\n";
?>
