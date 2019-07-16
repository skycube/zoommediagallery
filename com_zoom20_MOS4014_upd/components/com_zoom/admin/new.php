<?
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
| Filename: new.php                                                   |
| Version: 2.0                                                        |
|                                                                     |
-----------------------------------------------------------------------
**/
if ($submit)
	{
	if (trim($catname))
		{
		//Create directory
		$mkdir = $zoom->newdir();
		if (mkdir($zoom->_CONFIG['imagepath'].$mkdir, 0777))
			{
			mkdir($zoom->_CONFIG['imagepath'].$mkdir."/thumbs", 0777);
			$descr = $zoom->cleanString($catdescr);
			//Save data in the database
			$sql = "INSERT INTO ".$dbprefix."zoom (catname,catdescr,catdir) VALUES ('$catname','$catdescr','$mkdir')";
			$result = $database->openConnectionNoReturn($sql);
			?>
			<SCRIPT>
				alert('<?echo _ZOOM_ALERT_NEWGALLERY;?>');
				location = 'index.php?option=com_zoom&Itemid=<?php $Itemid;?>&page=new';
			</SCRIPT>
			<?php
			}
		else
			{
			?>
			<SCRIPT>
				alert('<?echo _ZOOM_ALERT_NEWGALLERY;?>');
				if ($zoom->_isAdmin){
					location = "index.php?option=com_zoom&page=admin";
				}
				else if($zoom->_isUser){
					location = "index.php?option=com_zoom&page=user";
				}
			</SCRIPT>
			<?
			}
		}
	else
		{
		//Back to new gallery page
		?>
		<SCRIPT>
			alert("<?echo _ZOOM_NONAME;?>");
			location = "index.php?option=com_zoom&page=new";
		</SCRIPT>
		<?
		}
	}
else
	{
	//Show form
	?>
	<CENTER>
		<table border="0" cellspacing="0" cellpadding="0" width="100%">
		<tr>
			<td align="center" width="100%">
			<?php
			if ($zoom->_isAdmin){
				echo '<a href="index.php?option=com_zoom&Itemid='.$Itemid.'&page=admin"><img src="components/com_zoom/images/home.gif" alt="'._ZOOM_BACK.'" border="0">&nbsp;&nbsp;'._ZOOM_BACK.'</a>';
			}
			else if($zoom->_isUser){
				echo '<a href="index.php?option=com_zoom&Itemid='.$Itemid.'&page=user"><img src="components/com_zoom/images/home.gif" alt="'._ZOOM_BACK.'" border="0">&nbsp;&nbsp;'._ZOOM_BACK.'</a>';
			}
			?>
			&nbsp; | &nbsp;
			<h3><? echo _ZOOM_HD_NEW;?></h3></td>
		</tr>
	</table>
	<br>
	<FORM METHOD="POST" ACTION="index.php?option=com_zoom&page=new">
	<table border="0" width="300">
		<tr>
			<td><?echo _ZOOM_PICNAME;?>:</td><td><input class="inputbox" type="text" name="catname" value=""></td>
		</tr>
		<tr>
			<td><?echo _ZOOM_DESCRIPTION;?>:</td><td><textarea class="inputbox" name="catdescr" rows="5" cols="30"></textarea></td>
		</tr>
		<tr>
			<td colspan="2" align="center">&nbsp;&nbsp;<input class="button" type="submit" name="submit" value="<?echo _ZOOM_BUTTON_CREATE;?>"></td>
		</tr>
	</table>
	</FORM>
	</CENTER>
	<?
	}
?>
