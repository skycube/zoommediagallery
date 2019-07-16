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
| Filename: install.php                                               |
| Version: 1.0                                                        |
|                                                                     |
-----------------------------------------------------------------------
**/
function com_install(){
	echo '<p>zOOm Installation is trying to create the Images-directory ("images/zoom")...</p>';
	chdir("../");
	@mkdir ("images/zoom",0777);
	@chmod ("images/zoom", 0777);
	echo 'zOOm Image Gallery installed succesfully.<br>You are now ready to populate your albums!';
	echo "<p><b>NOTE: the first thing you should do now, is go to your Mambo-frontend,<br>login as admin and<br>check the settings-page in the Admin-system.</b></p>";
}
?>