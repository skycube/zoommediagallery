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
?>
<table width="100%" height="90% "border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="top"> 
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
		<tr>
			<td align="center" width="100%"><a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid ?>">
			<img src="components/com_zoom/images/home.gif" alt="<?echo _ZOOM_BACK;?>" border="0">&nbsp;&nbsp;<?echo _ZOOM_BACK;?></a>&nbsp; | &nbsp;
			<h3>Generate Database Tables</h3></td>
		</tr>
	  </table>
			</td>
		</tr>
		<tr>
			<td>
			<table width="100%" border="0" cellspacing="0" cellpadding="5">
              <tr> 
                <td align="left">
				<?php
				if (isset($build)) {
					require_once('classes/install.class.php');
					$install = new install();
					if ($install->dropTables()){
						if ($install->createTables()){
							if ($install->populateTables()){
								if ($install->lockInstall()){
									echo "<p>Your database tables have been successfully generated.<br>You are now ready to populate your galleries!<br></p>";
								}else{
									echo "Error occured while writing file: install.lock!<br>To be able to use zOOm Image Gallery, you have to create a blank file called 'install.lock' manually on your server";}
							}else{
								echo "Error occured while populating database!"; }
						}else{
							echo "Error occured while creating tables!"; }
					}else{
						echo "Error occured while dropping old tables!"; }
				}
				else {
				?>
				<img src="components/com_zoom/images/zoom_logo.gif" border="0" align="right"><span><strong><?php echo _ZOOM_INSTALL_HEAD;?></strong><br>
				<?php echo _ZOOM_INSTALL_DESCR;?></span><br>
  				<a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid ?>&page=install&build=1"><?php echo _ZOOM_INSTALL_YES;?></a><?php echo _ZOOM_INSTALL_YES_DESCR;?><br>
                <a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid ?>"><?php echo _ZOOM_INSTALL_NO;?></a><?php echo _ZOOM_INSTALL_NO_DESCR;?>
<?php
}
?><br>
<br>
<br>
<br>
<br>

                </td>
              </tr>
        	</table>
		</td>
	</td>
  </tr>
</table>