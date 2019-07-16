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
| Filename: install.class.php                                         |
| Version: 2.0                                                        |
|                                                                     |
-----------------------------------------------------------------------
**/
class install{
	//first, some of the default internal variables...
	var $_sql=null;
	var $_result=null;
	//--------------------Default Constructor of the install-class----------//
	function install(){
		$_sql="";
		$_result="";
	}
	//--------------------END Constructor of the install-class--------------//
	//--------------------Install-object functions--------------------------//
	function dropTables(){
		global $database, $dbprefix;
		$this->_sql = "DROP TABLE IF EXISTS ".$dbprefix."zoom";
		$this->_result = $database->openConnectionNoReturn($this->_sql);
		$this->_sql = "DROP TABLE IF EXISTS ".$dbprefix."zoomfiles";
		$this->_result = $database->openConnectionNoReturn($this->_sql);
		$this->_sql = "DROP TABLE IF EXISTS ".$dbprefix."zoom_comments";
		$this->_result = $database->openConnectionNoReturn($this->_sql);
		$this->_sql = "DROP TABLE IF EXISTS ".$dbprefix."zoom_config";
		$this->_result = $database->openConnectionNoReturn($this->_sql);
		$this->_sql = "DROP TABLE IF EXISTS ".$dbprefix."zoom_editmon";
		$this->_result = $database->openConnectionNoReturn($this->_sql);
		return true;
	}
	function createTables(){
		global $database, $dbprefix;
		$this->_sql = "CREATE TABLE ".$dbprefix."zoom (
  			id int(4) unsigned NOT NULL auto_increment,
	  		catname varchar(25) default '0',
			catdescr varchar(180) default NULL,
			catdir varchar(25) default '0',
			catimg int(4) default NULL,
			subcat_id int(4) NOT NULL default '0',
			pos int(3) NOT NULL default '0',
			PRIMARY KEY  (id),
			KEY id (id)
			)";
		$this->_result = $database->openConnectionNoReturn($this->_sql);
		$this->_sql = "CREATE TABLE ".$dbprefix."zoomfiles (
  			id int(4) unsigned NOT NULL auto_increment,
			name varchar(30) NOT NULL default '',
			filename varchar(30) NOT NULL default '',
			descr varchar(180) default NULL,
			date timestamp(14) NOT NULL,
			hits bigint(20) NOT NULL default '0',
			votenum int(11) NOT NULL default '0',
			votesum int(11) NOT NULL default '0',
			gallery_id int(4) unsigned NOT NULL default '0',
			PRIMARY KEY  (id),
			KEY id (id)
			)";
		$this->_result = $database->openConnectionNoReturn($this->_sql);
		$this->_sql = "CREATE TABLE ".$dbprefix."zoom_comments (
  			id int(3) NOT NULL auto_increment,
  			image_id int(3) NOT NULL default '0',
  			name varchar(40) NOT NULL default '',
  			comment varchar(180) NOT NULL default '',
  			date timestamp(14) NOT NULL,
  			PRIMARY KEY  (id),
  			KEY ID (id)
			)";
		$this->_result = $database->openConnectionNoReturn($this->_sql);
		$this->_sql = "CREATE TABLE ".$dbprefix."zoom_config (
  			conversiontype tinyint(1) NOT NULL default '1',
			imagepath varchar(60) NOT NULL default 'images/zoom/',
			IM_path varchar(60) NOT NULL default 'd:/ImageMagick/',
			NETPBM_path varchar(60) NOT NULL default 'c:/NETPBM/',
			size smallint(3) NOT NULL default '100',
			JPEGquality smallint(3) NOT NULL default '85',
			columnsno smallint(2) NOT NULL default '3',
			catcolsno smallint(2) NOT NULL default '2',
			PageSize smallint(6) NOT NULL default '6',
			orderMethod tinyint(1) NOT NULL default '1',
			tempName varchar(30) NOT NULL default 'Temporary name, please change.',
			tempDescr varchar(240) NOT NULL default 'Temporary description, please change...',
			autonumber tinyint(1) NOT NULL default '0',
			showHits tinyint(1) NOT NULL default '1',
			commentsOn tinyint(1) NOT NULL default '1',
			ratingOn tinyint(1) NOT NULL default '1',
			zoomOn tinyint(1) NOT NULL default '1',
			popUpImages tinyint(1) NOT NULL default '0',
			catImg tinyint(1) NOT NULL default '1',
			slideshow tinyint(1) NOT NULL default '1',
			readEXIF tinyint(1) NOT NULL default '0',
			displaylogo tinyint(1) NOT NULL default '1',
			lightbox tinyint(1) NOT NULL default '0',
			allowUserUpload tinyint(1) NOT NULL default '1',
			version varchar(12) NOT NULL default '2.0',
			PRIMARY KEY  (conversiontype)
			)";
		$this->_result = $database->openConnectionNoReturn($this->_sql);
		$this->_sql = "CREATE TABLE ".$dbprefix."zoom_editmon (
  			id int(11) NOT NULL auto_increment,
			user_session varchar(200) NOT NULL default '0',
			vote_time varchar(14) default NULL,
			comment_time varchar(14) default NULL,
			image_id int(4) NOT NULL default '0',
			PRIMARY KEY  (id) 
			)";
		$this->_result = $database->openConnectionNoReturn($this->_sql);
		return true;
	}
	function populateTables(){
		global $database, $dbprefix;
		$this->_sql = "INSERT INTO ".$dbprefix."zoom_config VALUES (1, 'images/zoom/', 'e:/ImageMagick/', 'e:/NETPBM/', 100, 85, 3, 2, 9, 6,'Temporary name, please change.', 'Temporary description, please change...', 0, 0, 1, 1, 1, 1, 1, 1, 0, 1, 0, 1, '2.0RC4')";
		$this->_result = $database->openConnectionNoReturn($this->_sql);
		return true;
	}
	function createDirs(){
		chdir("../");
		@mkdir ("images/zoom",0777);
		@chmod ("images/zoom", 0777);
		return true;
	}
	function getVersion(){
		// this function is yet in its experimental stage...
		global $database, $dbprefix;
		$this->_sql = "SELECT version FROM ".$dbprefix."zoom_config IF EXISTS";
		// until then...
	}
	function lockInstall()
	{
		if ($fd=@fopen('components/com_zoom/install.lock', 'wb')){
			fwrite($fd, 'locked');
			fclose($fd);
			return true;
		} else {
			return false;
		}
	} 
	//--------------------END Install-object functions----------------------//
}