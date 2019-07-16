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
| Filename: zoom.class.php                                            |
| Version: 2.0                                                        |
|                                                                     |
-----------------------------------------------------------------------
**/
class zoom{
	//first, some of the default internal variables...
	var $_sql = null;
	var $_result = null;
	var $_CONFIG = null;
	var $_counter = null;
	var $_isAdmin = null;
	var $_isUser = null;
	var $_CurrUID = null;
	var $_startRow = null;
	var $_pageSize = null;
	var $_tabclass = null;
	var $_EXIF_cachefile = null;
	//--------------------Default Constructor of the zOOm-class------------//
	function zoom($cookie=0){
		// initialize object variables with values...
		$this->setConfig();
		$this->checkAdmin($cookie, true);
		$this->checkAdmin($cookie, false);
		$this->_counter = 0;
		$this->_currUID = -1;
		$this->_startRow = 0;
		$this->_tabclass = Array("sectiontableentry1", "sectiontableentry2");
		$this->$_EXIF_cachefile = "exif.dat";
	}
	//--------------------END Constructor of the zOOm-class----------------//
	//--------------------zOOm Security Functions--------------------------//
	function checkAdmin($cookie, $admin)
	{
  	global $database, $dbprefix, $CurrUID;
  	/* Get the visitor's UserType */
  	$utype = "";
  	if ($cookie<>"")
		{
    	$cryptSessionID=md5($cookie);
    	$this->_sql = "SELECT usertype, userid FROM ".$dbprefix."session WHERE session_ID='$cryptSessionID'";
    	$this->_result = $database->openConnectionWithReturn($this->_sql);
    	while ($row = mysql_fetch_object($this->_result))
			{
      		$utype = $row->usertype;
      		$this->_currUID = $row->userid;
      		$CurrUID = $row->userid; //ver 1.0
    		}
	    if ($admin) 
			{
	      	if ($utype=="administrator" or $utype=="superadministrator")
				{
	        	$this->_isAdmin = true;
	      		}
			else
				{
	        	$this->_isAdmin = false;
	      		}
	     	} 
		else 
			{
	      	if ($utype=="user" or $utype=="editor")
				{
	        	$this->_isUser = true;
	      		}
			else 
				{
	        	$this->_isUser = false;
	      		}
			}
		}
	}
	//--------------------END zOOm Security Functions----------------------//
	//--------------------Filesystem Functions-----------------------------//
	function deldir($dir)
	{
 		$current_dir = opendir($dir);
 		while($entryname = readdir($current_dir))
		{
    		if(is_dir("$dir/$entryname") and ($entryname != "." and $entryname!=".."))
			{
       			$this->deldir("${dir}/${entryname}");
	    	}
			elseif($entryname != "." and $entryname!="..")
			{
       			unlink("${dir}/${entryname}");
    		}
	 	}
 		closedir($current_dir);
 		rmdir(${dir});
	}
	
	function newdir()
	{
	$newdir = "";
	srand((double) microtime() * 1000000);
	for ($acc = 1; $acc <= 6; $acc++) 
		{
		    $newdir .= chr(rand (0,25) + 65);
	   	}
	return $newdir;
	}
	
	function GetDir($z){
		global $database, $dbprefix;
		$q = "SELECT * FROM ".$dbprefix."zoom WHERE id=$z";
		$xx = $database->openConnectionWithReturn($q);
		$name = mysql_fetch_object($xx);
		$imagedir = $name->catdir;
		return $imagedir;
	}
	function export_filename($filename){
		# Convert "d:\winnt\temp" to "d:/winnt/temp"
		#
		while (strstr($filename, "\\\\")) {
			$filename = str_replace("\\\\", "\\", $filename);
		}
		$filename = str_replace("\\", "/", $filename);
		return $filename;
	}
	//--------------------END Filesystem Functions-------------------------//
	//--------------------Image Processing Functions----------------------//
	function createThumbIM($in, $out){
		$size = $zoom->_CONFIG['size'];
		$cmd = $this->_CONFIG['$IM_path']."convert -resize $size $in $out";
		exec($cmd);
	}
	function createThumbNETPBM($file,$desfile,$maxsize,$origname,$quality){ 
		if($this->_CONFIG['NETPBM_path']){ 
			if(!is_dir($this->_CONFIG['NETPBM_path'])){ 
					echo "NetPbm path not correct";
					die; 
				} 
		} 
		if (eregi("\.png", $origname)){ 
			$cmd = $this->_CONFIG['NETPBM_path'] . "pngtopnm $file | " . $this->_CONFIG['NETPBM_path'] . "pnmscale -xysize $maxsize $maxsize | " . $this->_CONFIG['NETPBM_path'] . "pnmtopng > $desfile" ; 
		}
		else if (eregi("\.(jpg|jpeg)", $origname)){ 
			$cmd = $this->_CONFIG['NETPBM_path'] . "jpegtopnm $file | " . $this->_CONFIG['NETPBM_path'] . "pnmscale -xysize $maxsize $maxsize | " . $this->_CONFIG['NETPBM_path'] . "ppmtojpeg -quality=$quality > $desfile" ;
		}
		else if (eregi("\.gif", $origname)){ 
			$cmd = $this->_CONFIG['NETPBM_path'] . "giftopnm $file | " . $this->_CONFIG['NETPBM_path'] . "pnmscale -xysize $maxsize $maxsize | " . $this->_CONFIG['NETPBM_path'] . "ppmquant 256 | " . $this->_CONFIG['NETPBM_path'] . "ppmtogif > $desfile" ; 
		}//end if.. 
		exec($cmd); 
	}
	function createThumbGD2($img_source, $img_dest, $img_quality, $size_limit){
		if (!function_exists('imagecreatefromjpeg')) {
		    die('PHP running on your server does not support the GD image library, check with your webhost if ImageMagick is installed');
		}
		if (!function_exists('imagecreatetruecolor')) {
		    die('PHP running on your server does not support GD version 2.x, please switch to GD version 1.x on the config page');
		}
		$img_info = getimagesize($img_source);
		if ($imginfo == null)
		return false;
		// GD can only handle JPG & PNG images
		if ($imginfo[2] != GIS_JPG && $imginfo[2] != GIS_PNG){
			return false;
		}
		if ($img_info[1] > $img_info[0])
   			$scaledown = $img_info[1];
		else
   			$scaledown = $img_info[0];
		$newscale = $size_limit / $scaledown; //set the new scale size
		//calculate the new aspect ratio
		$new_w = (int)abs($img_info[0] * $newscale);
		$new_h = (int)abs($img_info[1] * $newscale);
		if ($imginfo[2] == GIS_JPG)
			$src_img = imagecreatefromjpeg($img_source);
		else
			$src_img = imagecreatefrompng($img_source);
		if (!$src_img){
			$ERROR = $lang_errors['invalid_image'];
			return false;
		}
		$dst_img = imagecreatetruecolor($new_w, $new_h);
		imagecopyresampled($dst_img, $src_img, 0, 0, 0, 0, $new_w, (int)$new_h, $img_info[0], $img_info[1]);
		imagejpeg($dst_img, $img_dest, $img_quality);
		imagedestroy($src_img);
		imagedestroy($dst_img);
		break;
	}
	function getPicSize($pic,$dbprefix) {
		global $database;
		$sql="SELECT ".$dbprefix."zoomfiles.name,".$dbprefix. "zoom.catdir FROM ".$dbprefix."zoomfiles,".$dbprefix."zoom WHERE ".$dbprefix."zoomfiles.gallery_id=".$dbprefix."zoom.id AND ".$dbprefix."zoomfiles.id=$pic";
		$result=$database->openConnectionWithReturn($sql);
		$myrow=mysql_fetch_array($result);
		$imgPath=$this->_CONFIG['imagepath'].$myrow['catdir']."/".$myrow['name'];
		$size = getimagesize($imgPath);
		return $size;
	}	 
	function exif_parse_fracval($val, &$num, &$den){
		$num = intval(strtok($val, "/"));
		$den = intval(strtok("/"));
	}
	function exif_load_from_cache($filepath){
		$dir = dirname($filepath);
		$file = basename($filepath);
		if (!is_readable($dir."/".$this->$_EXIF_cachefile)) return false;
		$exifDataArray=unserialize(fread(fopen($dir."/".$this->$_EXIF_cachefile, 'rb'), filesize($dir."/".$this->$_EXIF_cachefile)));
		return $exifDataArray[$file];
	}
	function exif_save_to_cache($exifData, $filepath){
		$dir = dirname($filepath);
		$file = basename($filepath);
		if (!is_writable($dir)) return false;
		if (is_readable($dir."/".$this->$_EXIF_cachefile))
			$exifDataArray=unserialize(fread(fopen($dir."/".$this->$_EXIF_cachefile, 'rb'), filesize($dir."/".$this->$_EXIF_cachefile)));
		$exifDataArray[$file] = $exifData;
		fwrite(fopen($dir."/".$this->$_EXIF_cachefile, 'wb'), serialize($exifDataArray));
	}
	function exif_parse_file($filename){
		if (!is_readable($filename)) return false;
		$size = @getimagesize($filename);
		if ($size[2] != 2) return false; // Not a JPEG file
		$exif = exif_read_data($filename,0,true);
		if (!$exif) return false;
		$exifParsed = array();
		$Make = isset($exif['IFD0']['Make']);
		$Model = isset($exif['IFD0']['Model']);
		if (isset($exif['IFD0']['Make']) && isset($exif['IFD0']['Model']))
			$exifParsed['Camera'] = $exif['IFD0']['Make']." - ".$exif['IFD0']['Model'];
		if (isset($exif['EXIF']['DateTimeDigitized']))
			$exifParsed['DateTaken'] = $exif['EXIF']['DateTimeDigitized'];
		if (isset($exif['EXIF']['FNumber'])){
			exif_parse_fracval($exif['EXIF']['FNumber'], $num, $den);
			$exifParsed['Aperture'] = "f/".$num / ($den ? $den : 1);
		} elseif (isset($exif['COMPUTED']['ApertureFNumber']))
			$exifParsed['Aperture'] = $exif['COMPUTED']['ApertureFNumber'];
		if (isset($exif['COMPUTED']['ExposureTime']))
			$exifParsed['ExposureTime'] = $exif['COMPUTED']['ExposureTime'];
		elseif (isset($exif['EXIF']['ExposureTime'])){
			exif_parse_fracval($exif['EXIF']['ExposureTime'], $num, $den);
			$exTime = $num / ($den ? $den : 1);
			if ($exTime <= 0.5 )
				$exifParsed['ExposureTime'] = sprintf("%0.3f s (1/%d)", $exTime, 1/$exTime);
			else 
				$exifParsed['ExposureTime'] = sprintf("%3.2f s", $exTime);
		}
		if (isset($exif['EXIF']['FocalLength'])){
			exif_parse_fracval($exif['EXIF']['FocalLength'], $num, $den);
			$exifParsed['FocalLength'] = sprintf("%d mm", $num / ($den ? $den : 1));
		}	
		if (isset($exif['COMMENT'])){
			$exifParsed['Comment'] = '';
			foreach ($exif['COMMENT'] as $comment)
				$exifParsed['Comment'] .= ($exifParsed['Comment'] ? '<br />' : '').$comment;
		}			
		return $exifParsed;
	}	
	//--------------------END Image Processing Functions-------------------//
	//--------------------Cleaning Strings Datatype------------------------//
	function cleanString($string) {
		$testString=strtolower($string);
		$forbidString=array("</script>","<script>");
		$looper=count($forbidString)-1;
		foreach($forbidString as $value) {
			$pos=strpos($testString,$value);
			if (is_integer($pos)) {
				$subFinish=$pos+strlen($value);
				$front=substr($testString,0,$pos);
				$end=substr($testString,$subFinish);
				$testString=$front.$end;
			}
		}
		return $testString;
	}
	function removeTags($msg) {
    	$msg = strip_tags($msg);
    	return $msg;
	}
	//--------------------END Cleaning Strings Datatype--------------------//
	//--------------------Database Editing Functions-----------------------//
	function setConfig(){
		global $database, $dbprefix;
		$this->_sql = "SELECT * FROM ".$dbprefix."zoom_config";
		$this->_result = $database->openConnectionWithReturn($this->_sql);
		$this->_CONFIG = mysql_fetch_array($this->_result);
		$this->_pageSize = $this->_CONFIG['PageSize'];
	}
	function saveConfig($s01,$s02,$s03,$s04,$s05,$s06,$s07,$s08,$s09,$s10,$s11,$s12,$s13,$s14,$s15,$s16){
		global $database, $dbprefix;
		// the representation of each s-variable explains itself
		// in the following sql-statement:
		$this->_sql = "UPDATE ".$dbprefix."zoom_config SET 
			conversiontype=$s01,
			imagepath='$s02',
			IM_path='$s03',
			NETPBM_path='$s04',
			JPEGquality=$s05,
			size=$s06,
			columnsno=$s07,
			PageSize=$s08,
			commentsOn=$s09,
			popUpImages=$s10,
			catImg=$s11,
			slideshow=$s12,
			displaylogo=$s13,
			allowUserUpload=$s15,
			readEXIF=$s14,
			tempDescr='$s16'";
		$this->_result = $database->openConnectionNoReturn($this->_sql);		
	}
	function saveImage($name, $descr, $catid){
		global $database, $dbprefix;
		$this->_sql = "INSERT INTO ".$dbprefix."zoomfiles (name,descr,gallery_id) VALUES ('$name','$descr', '$catid')";
		$this->_result = $database->openConnectionNoReturn($this->_sql);
	}
	function addComment($id, $uname, $comment){
		global $database, $dbprefix;
		// $theName=this->cleanString($uname);
		// $theComment=this->cleanString($comment);
    	$today=date ("Y-m-d-H-i" ,time());
		$this->_sql="INSERT INTO ".$dbprefix."zoom_comments (image_id,name,comment,date) VALUES ('$id','$uname','$comment','$today')";
    	$this->_result=$database->openConnectionNoReturn($this->_sql);
	}
	function delComment($delComment){
		global $database, $dbprefix;
		$this->_sql="DELETE FROM ".$dbprefix."zoom_comments WHERE id=".$delComment;
		$this->_result=$database->openConnectionNoReturn($this->_sql);
	}
	function hitPlus($id){
		global $database, $dbprefix;
		$this->_sql = "UPDATE ".$dbprefix."zoomfiles SET hits=hits+1 WHERE id=".$id;
		$this->_result = $database->openConnectionNoReturn($this->_sql);
	}
	function setImgInfo($id,$newdescr,$catimg=0, $catid){
		global $database, $dbprefix;
		$this->_sql = "UPDATE ".$dbprefix."zoomfiles SET descr = '$newdescr' WHERE id=$id";
		$this->_result = $database->openConnectionNoReturn($this->_sql);
		if (isset($catimg)){
			if ($catimg==1){
				// set new category image, override old one (if it ever existed)...
				$this->_sql = "UPDATE ".$dbprefix."zoom SET catimg = $id WHERE id=$catid";
				$this->_result = $database->openConnectionNoReturn($this->_sql);
			}
		}
	}
	function deleteImg($id){
		global $database, $dbprefix;
		$this->_sql = "DELETE FROM  ".$dbprefix."zoomfiles WHERE id='$id'";
		$this->_result = $database->openConnectionNoReturn($this->_sql);
		$this->_sql = "DELETE FROM ".$dbprefix."zoom_comments WHERE image_id='$id'";
		$this->_result = $database->openConnectionNoReturn($this->_sql);
	}
	//--------------------END Database Editing Functions-------------------//
	//--------------------Database Querying Functions----------------------//
	function getCategories($ret_type){
		global $database, $dbprefix;
		$this->_sql = "SELECT * FROM ".$dbprefix."zoom";
		$this->_result = $database->openConnectionWithReturn($this->_sql);
		// return types:
		// 0 = object, 1 = array
		if ($ret_type==0){
			return mysql_fetch_object($this->_result); }
		else if ($ret_type==1){
			return mysql_fetch_array($this->_result); }
	}
	function getCatbyDir($catdir){
		global $database, $dbprefix;
		$this->_sql = "SELECT * FROM ".$dbprefix."zoom WHERE catdir='$catdir'";
		$this->_result = $database->openConnectionWithReturn($this->_sql);
		return mysql_fetch_array($this->_result);
	}
	function getCatbyId($catid){
		global $database, $dbprefix;
		$this->_sql = "SELECT * FROM ".$dbprefix."zoom WHERE id=$catid";
		$this->_result = $database->openConnectionWithReturn($this->_sql);
		return mysql_fetch_object($this->_result);
	}
	function getCatImg($catid){
		global $database, $dbprefix;
		$this->_sql = "SELECT catdir, catimg FROM ".$dbprefix."zoom WHERE id=$catid";
		$this->_result = $database->OpenConnectionWithReturn($this->_sql);
		$x = mysql_fetch_object($this->_result);
		$catimg = $x->catimg;
		if (isset($catimg) && ($catimg != "")){
			$this->_sql = "SELECT name FROM ".$dbprefix."zoomfiles WHERE id=$catimg";
			$this->_result = $database->OpenConnectionWithReturn($this->_sql);
			$xx = mysql_fetch_object($this->_result);
			return $this->_CONFIG['imagepath'].$x->catdir."/thumbs/".$xx->name;
		}else{
			$this->_sql = "SELECT name FROM ".$dbprefix."zoomfiles WHERE gallery_id=$catid ORDER BY id ASC";
			$this->_result = $database->openConnectionWithReturn($this->_sql);
			$xxx = mysql_fetch_object($this->_result);
			if (isset($xxx->name) && ($xxx->name != "")){
				return $this->_CONFIG['imagepath'].$x->catdir."/thumbs/".$xxx->name;
			}else{
				return "";
			}
		}
	}
	function getImgInfo($id, $ret_type){
		global $database, $dbprefix;
		$this->_sql = "SELECT * FROM ".$dbprefix."zoomfiles WHERE id='$id'";
		$this->_result = $database->openConnectionWithReturn($this->_sql);
		// return types:
		// 0 = object, 1 = array
		if ($ret_type==0){
			return mysql_fetch_object($this->_result); }
		else if ($ret_type==1){
			return mysql_fetch_array($this->_result); }
	}
	function getSmiliesTable(){ 
		return array(
			array(':!:', 'icon_exclaim.gif', 'Exclamation'),
			array(':?:', 'icon_question.gif', 'Question'),
			array(':D', 'icon_biggrin.gif', 'Very Happy'),
			array(':d', 'icon_biggrin.gif', 'Very Happy'),
			array(':-D', 'icon_biggrin.gif', 'Very Happy'),
			array(':grin:', 'icon_biggrin.gif', 'Very Happy'),
			array(':)', 'icon_smile.gif', 'Smile'),
			array(':-)', 'icon_smile.gif', 'Smile'),
			array(':smile:', 'icon_smile.gif', 'Smile'),
			array(':(', 'icon_sad.gif', 'Sad'),
			array(':-(', 'icon_sad.gif', 'Sad'),
			array(':sad:', 'icon_sad.gif', 'Sad'),
			array(':o', 'icon_surprised.gif', 'Surprised'),
			array(':-o', 'icon_surprised.gif', 'Surprised'),
			array(':eek:', 'icon_surprised.gif', 'Surprised'),
			array(':shock:', 'icon_eek.gif', 'Shocked'),
			array(':?', 'icon_confused.gif', 'Confused'),
			array(':-?', 'icon_confused.gif', 'Confused'),
			array(':???:', 'icon_confused.gif', 'Confused'),
			array('8)', 'icon_cool.gif', 'Cool'),
			array('8-)', 'icon_cool.gif', 'Cool'),
			array(':cool:', 'icon_cool.gif', 'Cool'),
			array(':lol:', 'icon_lol.gif', 'Laughing'),
			array(':x', 'icon_mad.gif', 'Mad'),
			array(':-x', 'icon_mad.gif', 'Mad'),
			array(':mad:', 'icon_mad.gif', 'Mad'),
			array(':P', 'icon_razz.gif', 'Razz'),
			array(':p', 'icon_razz.gif', 'Razz'),
			array(':-P', 'icon_razz.gif', 'Razz'),
			array(':razz:', 'icon_razz.gif', 'Razz'),
			array(':oops:', 'icon_redface.gif', 'Embarassed'),
			array(':cry:', 'icon_cry.gif', 'Crying or Very sad'),
			array(':evil:', 'icon_evil.gif', 'Evil or Very Mad'),
			array(':twisted:', 'icon_twisted.gif', 'Twisted Evil'),
			array(':roll:', 'icon_rolleyes.gif', 'Rolling Eyes'),
			array(':wink:', 'icon_wink.gif', 'Wink'),
			array(';)', 'icon_wink.gif', 'Wink'),
			array(';-)', 'icon_wink.gif', 'Wink'),
			array(':idea:', 'icon_idea.gif', 'Idea'),
			array(':arrow:', 'icon_arrow.gif', 'Arrow'),
			array(':|', 'icon_neutral.gif', 'Neutral'),
			array(':-|', 'icon_neutral.gif', 'Neutral'),
			array(':neutral:', 'icon_neutral.gif', 'Neutral'),
			array(':mrgreen:', 'icon_mrgreen.gif', 'Mr. Green')
		);
	}
	function processSmilies($message, $url_prefix='', $smilies) { 
		static $orig, $repl; 
		if (!isset($orig)) { 
			$orig = $repl = array(); 
			for($i = 0; $i < count($smilies); $i++) { 
				$orig[] = "/(?<=.\W|\W.|^\W)" . preg_quote($smilies[$i][0], "/") . "(?=.\W|\W.|\W$)/"; 
				$repl[] = '<img src="'. $url_prefix .'images/smilies' . '/' . ($smilies[$i][1]) . '" alt="' . ($smilies[$i][2]) . '" border="0" />'; 
			} 
		}
		if (count($orig)) { 
			$message = preg_replace($orig, $repl, ' ' . $message . ' '); 
			$message = substr($message, 1, -1); 
		} 
		return $message; 
	}
	function getNumOfComments(){
		global $database, $dbprefix;
		$this->_sql = "SELECT id FROM ".$dbprefix."zoom_comments";
		$this->_result = $database->openConnectionWithReturn($this->_sql);
		return mysql_num_rows($this->_result);
	}
	function getComments($imgid){
		global $database, $dbprefix;
		$this->_sql = "SELECT date_format( date, '%d-%m-%y' ) AS date, name FROM ".$dbprefix."zoom_comments WHERE image_id =".$imgid." ORDER BY date ASC";
		return mysql_fetch_row($this->_result);
	}
	//--------------------END Database Querying Functions------------------// 
	//--------------------HTML content-creation functions------------------//
	function createCSS(){
		// ver. 1.2:
		// global $database, $dbprefix;
		// $sql = "SELECT 'css' FROM ".$dbprefix."zoom_settings";
		// $result = $database->openConnectionWithReturn($sql);
		// $row = mysql_fetch_array($result);
		// print $row['css'];
		?>
		<style type="text/css" media="screen">
		body {
			font-family: "Tahoma", "Arial", "Verdana";
			font-size: 12px;
			color: #000033;
		}
		a {
			font-family: "Tahoma", "Arial", "Verdana";
			font-size: 11px;
				font-weight: bold;
			color: #FF0000;
			text-decoration: none;
		}
		a:hover {
			text-decoration: underline;
		}
		table, table.view {
			font-size : xx-small;
		}
		td {
			font-family: "Tahoma", "Arial", "Verdana";
			font-size: 11px;
			color: #535353;
			font-weight: normal;
		}		
		.caption {
			font-family: "Tahoma", "Arial", "Verdana";
			font-size: 11px;
			color: #AC5D00;
		}
		.comment {
			font-family: "Tahoma", "Arial", "Verdana";
			font-size: 10px;
		}
		.sectiontableheader {
			background-color : #0099FF;
			color : #FFFFFF;
			font-weight : bold;
		}
		</style>
		<?php
	}
	function createSlideshow($fn_cache,$id_cache, $imgid){
		?>
		<script language="JavaScript" type="text/JavaScript">
		// (C) 2000 www.CodeLifter.com
		// http://www.codelifter.com
		// Free for all users, but leave in this  header
		// NS4-6,IE4-6
		// Fade effect only in IE; degrades gracefully
		var stopstatus = 0
		
		// Set slideShowSpeed (milliseconds)
		var slideShowSpeed = 5000
		
		// Duration of crossfade (seconds)
		var crossFadeDuration = 3
		
		// Specify the image files
		var Pic = new Array() // don't touch this
		// to add more images, just continue
		// the pattern, adding to the array below
		<?php
  		$i = 0;
  		$j = 0;
  		while ($i<count($fn_cache)) {
    		echo "Pic[$i] = '".$fn_cache[$i]."'\n";
    		if ($id_cache[$i] == $imgid){
      			$j = $i;
    		}
  		$i++;
  		}
		?>
		
		var t
		var j = <?php echo "$j\n" ?>
		var p = Pic.length
		var pos = j
		var preLoad = new Array()
		
		function preLoadPic(index){
  			if (Pic[index] != ''){
    			window.status='Loading : '+Pic[index]
    			preLoad[index] = new Image()
    			preLoad[index].src = Pic[index]
    			Pic[index] = ''
    			window.status=''
  			}
		}
		
		function runSlideShow(){
	  		if (stopstatus != '1'){
    			if (document.all){
      				document.images.zImage.style.filter="blendTrans(duration=2)"
      				document.images.zImage.style.filter= "blendTrans(duration=crossFadeDuration)"
	      			document.images.zImage.filters.blendTrans.Apply()
    			}
    			document.images.zImage.src = preLoad[j].src
    			if (document.all){
      				document.images.zImage.filters.blendTrans.Play()
    			}
    			pos = j
    			j = j + 1
    			if (j > (p-1)) j=0
    			t = setTimeout('runSlideShow()', slideShowSpeed)
    			preLoadPic(j)
  			}
		}

		function endSlideShow(){
  			stopstatus = 1
 			// self.document.location = ''
		}

		preLoadPic(j)
		
		</script>
		<?php
	}
	function createDetailsJavascript(){
		?>
		<style type="text/css" media="screen"><!--
		#details  { visibility: visible; }
		#exif { visibility: hidden; }
		-->
		</style>
				<csactions>
					<csaction name="box1hide" class="ShowHide" type="onevent" val0="details" val1="0"></csaction>
					<csaction name="box1show" class="ShowHide" type="onevent" val0="details" val1="1"></csaction>
					<csaction name="box2toggle" class="ShowHide" type="onevent" val0="exif" val1="2"></csaction>
				</csactions>
				<csscriptdict>
					<script type="text/javascript"><!--
		function CSClickReturn () {
			var bAgent = window.navigator.userAgent; 
			var bAppName = window.navigator.appName;
			if ((bAppName.indexOf("Explorer") >= 0) && (bAgent.indexOf("Mozilla/3") >= 0) && (bAgent.indexOf("Mac") >= 0))
				return true; // dont follow link
			else return false; // dont follow link
		}
		CSStopExecution=false;
		function CSAction(array) {return CSAction2(CSAct, array);}		
		function CSAction2(fct, array) { 
			var result;
			for (var i=0;i<array.length;i++) {
				if(CSStopExecution) return false; 
				var aa = fct[array[i]];
				if (aa == null) return false;
				var ta = new Array;
				for(var j=1;j<aa.length;j++) {
					if((aa[j]!=null)&&(typeof(aa[j])=="object")&&(aa[j].length==2)){
						if(aa[j][0]=="VAR"){ta[j]=CSStateArray[aa[j][1]];}
						else{if(aa[j][0]=="ACT"){ta[j]=CSAction(new Array(new String(aa[j][1])));}
						else ta[j]=aa[j];}
					} else ta[j]=aa[j];
				}			
				result=aa[0](ta);
			}
			return result;
		}
		CSAct = new Object;
		CSAg = window.navigator.userAgent; CSBVers = parseInt(CSAg.charAt(CSAg.indexOf("/")+1),10);
		CSIsW3CDOM = ((document.getElementById) && !(IsIE()&&CSBVers<6)) ? true : false;
		function IsIE() { return CSAg.indexOf("MSIE") > 0;}
		function CSIEStyl(s) { return document.all.tags("div")[s].style; }
		function CSNSStyl(s) { if (CSIsW3CDOM) return document.getElementById(s).style; else return CSFindElement(s,0);  }
		CSIImg=false;
		function CSInitImgID() {if (!CSIImg && document.images) { for (var i=0; i<document.images.length; i++) { if (!document.images[i].id) document.images[i].id=document.images[i].name; } CSIImg = true;}}
		function CSFindElement(n,ly) { if (CSBVers<4) return document[n];
			if (CSIsW3CDOM) {CSInitImgID();return(document.getElementById(n));}
			var curDoc = ly?ly.document:document; var elem = curDoc[n];
			if (!elem) {for (var i=0;i<curDoc.layers.length;i++) {elem=CSFindElement(n,curDoc.layers[i]); if (elem) return elem; }}
			return elem;
		}
		function CSGetImage(n) {if(document.images) {return ((!IsIE()&&CSBVers<5)?CSFindElement(n,0):document.images[n]);} else {return null;}}
		CSDInit=false;
		function CSIDOM() { if (CSDInit)return; CSDInit=true; if(document.getElementsByTagName) {var n = document.getElementsByTagName('DIV'); for (var i=0;i<n.length;i++) {CSICSS2Prop(n[i].id);}}}
		function CSICSS2Prop(id) { var n = document.getElementsByTagName('STYLE');for (var i=0;i<n.length;i++) { var cn = n[i].childNodes; for (var j=0;j<cn.length;j++) { CSSetCSS2Props(CSFetchStyle(cn[j].data, id),id); }}}
		function CSFetchStyle(sc, id) {
			var s=sc; while(s.indexOf("#")!=-1) { s=s.substring(s.indexOf("#")+1,sc.length); if (s.substring(0,s.indexOf("{")).toUpperCase().indexOf(id.toUpperCase())!=-1) return(s.substring(s.indexOf("{")+1,s.indexOf("}")));}
			return "";
		}
		function CSGetStyleAttrValue (si, id) {
			var s=si.toUpperCase();
			var myID=id.toUpperCase()+":";
			var id1=s.indexOf(myID);
			if (id1==-1) return "";
			s=s.substring(id1+myID.length+1,si.length);
			var id2=s.indexOf(";");
			return ((id2==-1)?s:s.substring(0,id2));
		}
		function CSSetCSS2Props(si, id) {
			var el=document.getElementById(id);
			if (el==null) return;
			var style=document.getElementById(id).style;
			if (style) {
				if (style.left=="") style.left=CSGetStyleAttrValue(si,"left");
				if (style.top=="") style.top=CSGetStyleAttrValue(si,"top");
				if (style.width=="") style.width=CSGetStyleAttrValue(si,"width");
				if (style.height=="") style.height=CSGetStyleAttrValue(si,"height");
				if (style.visibility=="") style.visibility=CSGetStyleAttrValue(si,"visibility");
				if (style.zIndex=="") style.zIndex=CSGetStyleAttrValue(si,"z-index");
			}
		}
		function CSSetStyleVis(s,v) {
			if (CSIsW3CDOM){CSIDOM();document.getElementById(s).style.visibility=(v==0)?"hidden":"visible";}
			else if(IsIE())CSIEStyl(s).visibility=(v==0)?"hidden":"visible";
			else CSNSStyl(s).visibility=(v==0)?'hide':'show';
		}
		function CSGetStyleVis(s) {
			if (CSIsW3CDOM) {CSIDOM();return(document.getElementById(s).style.visibility=="hidden")?0:1;}
			else if(IsIE())return(CSIEStyl(s).visibility=="hidden")?0:1;
			else return(CSNSStyl(s).visibility=='hide')?0:1;
		}
		function CSShowHide(action) {
			if (action[1] == '') return;
			var type=action[2];
			if(type==0) CSSetStyleVis(action[1],0);
			else if(type==1) CSSetStyleVis(action[1],1);
			else if(type==2) { 
				if (CSGetStyleVis(action[1]) == 0) CSSetStyleVis(action[1],1);
				else CSSetStyleVis(action[1],0);
			}
		}
		
		// --></script>
				</csscriptdict>
				<csactiondict>
					<script type="text/javascript"><!--
		CSAct[/*CMP*/ 'box1hide'] = new Array(CSShowHide,/*CMP*/ 'details',0);
		CSAct[/*CMP*/ 'box1show'] = new Array(CSShowHide,/*CMP*/ 'details',1);
		CSAct[/*CMP*/ 'box2toggle'] = new Array(CSShowHide,/*CMP*/ 'exif',2);
		// --></script>
		</csactiondict>
		<?php	
	}
	function createZoomJavascript($size){
		?>
		<script language="javascript">
		<!--
		// Zoom-in and -out script for zOOm Image Gallery
		// version 1.0
		// All functions: Copyright (C) 2003, Mike de Boer, MikedeBoer.nl Software
		// This software is licensed according to the GPL
		// Leave this copyright untouched!
		
		var zoomed = 0; // keeps track of how many times the user zoomed in or out (up to 4 times)
		var scale = 1.5;     // factor to zoom by
		
		function zoomIn() {
    		if (zoomed != 4){
      		document.images.zImage.width = document.images.zImage.width * scale;
      		document.images.zImage.height = document.images.zImage.height * scale;
      		zoomed = zoomed+1;
    		}
		}
		
		function zoomOut() {
    		if (zoomed != -4){
      		document.images.zImage.width = document.images.zImage.width / scale;
      		document.images.zImage.height = document.images.zImage.height / scale;
      		zoomed = zoomed-1;
    		}
		}
		
		function imReset(){
    		document.images.zImage.width = <?php echo $size[0];?>;
    		document.images.zImage.height = <?php echo $size[1];?>;
    		zoomed = 0;
		}
		// -->
		</script>
		<?php
	}
	function createSubmitScript($formname){
		?>
		<script language="Javascript">
		<!--
		function reloadPage() {
			document.<?php echo $formname;?>.submit();
			return false;
		}
		// -->
		</script>
		<?php
	}
	function adminFooter(){
		?>
		<div align="center">
			<b>zOOm Image Gallery 2.0</b><br>Copyright 2004 by Mike de Boer.
		</div>
		<?php
	}
	//--------------------END content-creation functions-------------------//
	//--------------------Error handling functions-------------------------//
	function displayErrors($err_num, $err_names, $err_types){
		global $zoom;
		if ($err_num <> 0){
			echo '<center><table border="0" cellpadding="0" cellspacing="0" width="70%">';
			echo '<tr class="sectiontableheader"><td width="100" align="left">Image Name</td><td align="left">Error type</td></tr>';
			$tabcnt = 0;
			for ($x = 0; $x <= $err_num; $x++){
				echo '<tr class="'.$this->tabclass[$tabcnt].'" align="left"><td>'.$err_names[$x].'</td><td align="left">'.$err_types[$x].'</td></tr>';
				if ($tabcnt == 1){
	    			$tabcnt = 0;
    			} else {
					$tabcnt++;
	    		}
			}
			echo "</table></center>";
		}
	}
	//--------------------END error handling functions----------------------//
}