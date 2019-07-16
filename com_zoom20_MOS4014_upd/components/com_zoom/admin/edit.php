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
| Filename: edit.php                                                  |
| Version: 2.0                                                        |
|                                                                     |
-----------------------------------------------------------------------
**/
$zoom->createSubmitScript("select_cat");
//Lijst met gallerijen laten zien
$sql = "SELECT * FROM ".$dbprefix."zoom";
$result = $database->openConnectionWithReturn($sql);
if (isset($catid)){
	$theId = $catid;
}
?>
<table border="0" cellspacing="0" cellpadding="0" width="100%">
	<tr>
		<td align="center" width="100%"><a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid ?>&page=admin">
		<img src="components/com_zoom/images/home.gif" alt="<?echo _ZOOM_BACK;?>" border="0">&nbsp;&nbsp;<?echo _ZOOM_BACK;?></a>&nbsp; | &nbsp;
		<h3><?echo _ZOOM_EDIT;?></h3></td>
	</tr>
</table>
<form name="select_cat" action="index.php?option=com_zoom&page=edit" method="post">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
	<td align="center">
		<select name="catid" class="inputbox" onchange="reloadPage()">
		<OPTION value="">---&nbsp;<?echo _ZOOM_PICK;?>&nbsp;---</OPTION>
		<?
		while ($row = mysql_fetch_array($result))
		{
			$catid = $row['id'];
			$catdir = $row['catdir'];
			$catname = $row['catname'];
			?>
			<option value="<?echo $catid;?>"<?php if ($theId == $catid){ echo " selected";}?>><?php echo $catname; ?></option>
			<?
		}
		?>
		</select>
	</td>
</tr>
</table>
</form>
<?
if ($theId && ($realId!="" | $theId!="")){
	include('components/com_zoom/admin/editbody.php');
}
?>