<?php
######################################################################################
# Name:                   mod_zoom_info.php
# Version:                1b001
# Date:                   2005|01|xx
# Requirements:			  com_zoom 2.5 rc1
#
# mod_zoom is a module for Mambo Open Source using the
# component zoom gallery 
#
# Released under GNU/GPL License : http://www.gnu.org/copyleft/gpl.html
# Per Lasse Baasch
#
# DEAR ALL WHO LIKES THIS CODE AND OR WANT TO CHANGE SOMETHING
# PLEASE INFORM ME DIRECLY OVER YOUR WHICHS OR CHANGES THAT YOU HAD DONE;
# CAUSE THAN I WILL BE ABLE TO PUBLISH IT FOR ALL // GPL
#
# Per Lasse Baasch
# mail: use contact form on www.skycube.net
#
# DOWNLOAD at:	http://www.skycube.net 
# DEMO at:		http://www.bsekrank.de
######################################################################################

defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
global $mosConfig_offset,$database,$mosConfig_dbprefix;

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
# Configuration from joomla! modules table
#####################################################################################################################
$ZMI_intro = $params->get( 'ZMI_intro', '1' );
$ZMI_intromessage = $params->get( 'ZMI_intromessage', '1' );

$ZMI_mediacount						= $params->get( 'ZMI_mediacount', '1' );
$ZMI_catscount						= $params->get( 'ZMI_catscount', '1' );
$ZMI_commentscount					= $params->get( 'ZMI_commentscount', '1' );
$ZMI_hitscount						= $params->get( 'ZMI_hitscount', '1' );
$ZMI_votescount						= $params->get( 'ZMI_votescount', '1' );

$ZMIlayout_newline = $params->get( 'ZMIlayout_newline', '0' );
$ZMIlayout_spacer = $params->get( 'ZMIlayout_spacer', '1' );
$ZMIlayout_align = $params->get( 'ZMIlayout_align', '3' );

$ZMILang_mediacount					= $params->get( 'ZMILang_mediacount', 'Count of media:' );
$ZMILang_catscount					= $params->get( 'ZMILang_catscount', 'Count of cats:' );
$ZMILang_commentscount				= $params->get( 'ZMILang_commentscount', 'Count of comments:' );
$ZMILang_hitscount					= $params->get( 'ZMILang_hitscount', 'Count of hits:' );
$ZMILang_votescount					= $params->get( 'ZMILang_votescount', 'Count of votes:' );

#####################################################################################################################
# Other configuration for more easy coding
#####################################################################################################################
$ZMtablefiles = $mosConfig_dbprefix."zoomfiles";
$ZMtablecats = $mosConfig_dbprefix."zoom";
$ZMtablecomments = $mosConfig_dbprefix."zoom_comments";

// Get the correct Itemid for com_zoom linking
$joscomponentstable = $mosConfig_dbprefix."menu";
$database->setQuery("SELECT $joscomponentstable.id FROM $joscomponentstable WHERE $joscomponentstable.link = 'index.php?option=com_zoom'");
$row1=$database->loadObjectList();
$zoomID = $row1[0]->id;

#####################################################################################################################
# Error Handler
#####################################################################################################################
function Zminfoerrorhandler()
{
  global $mosConfig_dbprefix, $database;
  $ZMtablefiles = $mosConfig_dbprefix."zoomfiles";
  $ZMtablecats = $mosConfig_dbprefix."zoom";
  $error=0;
  $ZMSQLfiles	= $_SESSION['ZMSQLfiles'];
  // Check for general enought images
  $database->setQuery("SELECT COUNT(*) as COUNTER FROM $ZMtablefiles");
  $row1=$database->loadObjectList();
  if($row1[0]->COUNTER <= 10){ echo "ERROR-CODE: 1000<br>"; $error=1;}
  return $error;
}

#####################################################################################################################
# Count of media
#####################################################################################################################
function Zminfocountofmedia()
{
  global $mosConfig_dbprefix, $database;
  $ZMtablefiles = $mosConfig_dbprefix."zoomfiles";
  $database->setQuery("SELECT COUNT(*) as COUNTER FROM $ZMtablefiles");
  $row1=$database->loadObjectList();
  $returnvalue = $row1[0]->COUNTER;
  return $returnvalue;
}

#####################################################################################################################
# Count of cats
#####################################################################################################################
function Zminfocountofcat()
{
  global $mosConfig_dbprefix, $database;
  $ZMtablecats = $mosConfig_dbprefix."zoom";
  $database->setQuery("SELECT COUNT(*) as COUNTER FROM $ZMtablecats");
  $row1=$database->loadObjectList();
  $returnvalue = $row1[0]->COUNTER;
  return $returnvalue;
}

#####################################################################################################################
# Count of comments
#####################################################################################################################
function Zminfocountofcomment()
{
  global $mosConfig_dbprefix, $database;
  $ZMtablecomments = $mosConfig_dbprefix."zoom_comments";
  $database->setQuery("SELECT COUNT(*) COUNTER FROM $ZMtablecomments");
  $row1=$database->loadObjectList();
  $returnvalue = $row1[0]->COUNTER;
  return $returnvalue;
}

#####################################################################################################################
# Count of hits
#####################################################################################################################
function Zminfocountofhits()
{
  global $mosConfig_dbprefix, $database;
  $ZMtablefiles = $mosConfig_dbprefix."zoomfiles";
  $database->setQuery("SELECT SUM(imghits) TOTAL FROM $ZMtablefiles");
  $row1=$database->loadObjectList();
  $returnvalue = $row1[0]->TOTAL;
  return $returnvalue;
}

#####################################################################################################################
# Count of votes
#####################################################################################################################
function Zminfocountofvotes()
{
  global $mosConfig_dbprefix, $database;
  $ZMtablefiles = $mosConfig_dbprefix."zoomfiles";
  $database->setQuery("SELECT SUM(votenum) TOTAL FROM $ZMtablefiles");
  $row1=$database->loadObjectList();
  $returnvalue = $row1[0]->TOTAL;
  return $returnvalue;
}

#####################################################################################################################
# Output
#####################################################################################################################

/*
$ZMIlayout_newline
$ZMIlayout_spacer
*/

if(!Zminfoerrorhandler())
{
  if($ZMIlayout_align)
    echo "<div align=\"$ZMIlayout_align\">";

  if($ZMI_intro)
    echo "$ZMI_intromessage<br /> <br />\n";

  if($ZMI_mediacount)
  {
    echo $ZMILang_mediacount."&nbsp;";
    if($ZMIlayout_newline) echo "<br />\n";
    echo Zminfocountofmedia()."<br />\n";
    if($ZMIlayout_spacer) echo "<br />\n";
  }


  if($ZMI_catscount)
  {
    echo $ZMILang_catscount."&nbsp;";
    if($ZMIlayout_newline) echo "<br />\n";
    echo Zminfocountofcat()."<br />\n";
    if($ZMIlayout_spacer) echo "<br />\n";
  }

  if($ZMI_commentscount)
  {
    echo $ZMILang_commentscount."&nbsp;";
    if($ZMIlayout_newline) echo "<br />\n";
    echo Zminfocountofcomment()."<br />\n";
    if($ZMIlayout_spacer) echo "<br />\n";
  }

  if($ZMI_hitscount)
  {
    echo $ZMILang_hitscount."&nbsp;";
    if($ZMIlayout_newline) echo "<br />\n";
    echo Zminfocountofhits()."<br />\n";
    if($ZMIlayout_spacer) echo "<br />\n";
  }
  
  if($ZMI_votescount)
  {
    echo $ZMILang_votescount."&nbsp;";
    if($ZMIlayout_newline) echo "<br />\n";
    echo Zminfocountofvotes()."<br />\n";
    if($ZMIlayout_spacer) echo "<br />\n";
  }
  
  if($ZMIlayout_align)
    echo "</div>";
}

?>
