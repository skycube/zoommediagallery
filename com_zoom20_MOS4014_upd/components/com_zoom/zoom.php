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
| Filename: zoom.php                                                  |
| Version: 2.0                                                        |
|                                                                     |
-----------------------------------------------------------------------
**/
if (!$catid)
	{
	//No gallery selected, show main screen
	?>
	<table border="0" width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td align="left" class="<?php echo $zoom->_tabclass[1]; ?>"><h3><? echo _ZOOM_TITLE;?></h3></td>
		<?php if ($zoom->_CONFIG['displaylogo']){ ?>
			<td align="right" class="<?php echo $zoom->_tabclass[1];?>"><a href="http://www.mikedeboer.nl" target="_blank"><img src="components/com_zoom/images/zoom_logo_small.gif" border="0" alt=""></a></td>
		<?php } ?>
	</tr>
	</table>
	<table border="0" width="100%" cellspacing="0" cellpadding="5">
	<tr><td width="6%">&nbsp;</td>
	<?php
	//Get every category from the database and echo it on the screen
	$sql = "SELECT * FROM ".$dbprefix."zoom";
	$result = $database->openConnectionWithReturn($sql);
    $zoom->_counter=1;
	while ($row = mysql_fetch_array($result))
	{
	 $catid = $row['id'];
	 $catname = $row['catname'];
	 $catdescr = $row['catdescr'];
	 $catdir = $row['catdir'];
	 if ($zoom->_counter>2){
	    echo "</tr><tr><td>&nbsp;</td>";
	    $zoom->_counter = 1;
	 }

	 //select the first image from the gallery handled by the loop,
	 // display category info, including image...
	 if ($zoom->_CONFIG['catImg']){
	 	$theImage = $zoom->getCatImg($catid);
	 	if ($theImage == ""){
	 		?>
	 		<td align=left valign="top" width="47%"><a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&catid=<?php echo $catid;?>&catname=<?php echo $catname;?>">
	 		<IMG border="0" hspace="0" src="components/com_zoom/images/noimg.gif" align=right>:: <?php echo $catname;?></a>
	 		<br><?php echo $catdescr;?></td>
	 		<?php
	 	}
	 	else{
	 		?>
	 		<td align=left valign="top" width="50%"><a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&catid=<?php echo $catid;?>&catname=<?php echo $catname;?>">
	 		<IMG border="0" hspace="0" src="<?php echo $theImage;?>" align=right>:: <?php echo $catname;?></a>
	 		<br><?php echo $catdescr;?></td>
	 		<?php
	 	}
	 }
	 else{
	 ?>
	 	<td align=left valign="top" width="50%"><a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&catid=<?php echo $catid;?>&catname=<?php echo $catname;?>">:: <?php echo $catname;?></a>
	 	<br><?php echo $catdescr;?></td>
	 <?php
	 }
	 $zoom->_counter++;
	}
	if ($zoom->_counter>3){
	   echo "<td>&nbsp;</td><td>&nbsp;</td>";
	}
        ?>
	</tr>
	</table>
	<table border="0" width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<?php
	             if($zoom->_isAdmin){
      	         	print '<td align="left" class="'.$zoom->_tabclass[1].'"><a href="index.php?option=com_zoom&Itemid=' .$Itemid. '&page=admin">'._ZOOM_ADMINSYSTEM.'</a></td>';
	             }
	             else if($zoom->_isUser){
	             	print '<td align="left" class="'.$zoom->_tabclass[1].'"><a href="index.php?option=com_zoom&Itemid=' .$Itemid. '&page=user">'._ZOOM_USERSYSTEM.'</a></td>';
	             }
	    ?>
		<td align="right" colspan="3" class="<?php echo $zoom->_tabclass[1];?>"><a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=special&sorting=0"><?php echo _ZOOM_TOPTEN;?></a> |&nbsp;
		<a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=special&sorting=1"><?php echo _ZOOM_LASTSUBM;?></a> |&nbsp;
		<a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=special&sorting=2"><?php echo _ZOOM_LASTCOMM;?></a></td>
	</tr>
	</table>
	<?php
	}
else
	{
	$name = $zoom->getCatbyId($catid);
	$imagedir = $name->catdir;
	$startRow = 0;
	//---------------------Pagination part 1---------------------------//

	//Set the page no
	if(empty($_GET['PageNo']))
		{
	    if($startRow == 0)
			{
	        $PageNo = $startRow + 1;
	    	}
		}
	else
		{
	    $PageNo = $_GET['PageNo'];
	    $startRow = ($PageNo - 1) * $zoom->_pageSize;
		}
	
	//Set the counter start
	if($PageNo % $zoom->_pageSize == 0)
		{
	    $CounterStart = $PageNo - ($zoom->_pageSize - 1);
		}
	else
		{
	    $CounterStart = $PageNo - ($PageNo % $zoom->_pageSize) + 1;
		}
	
	//Counter End
	$CounterEnd = $CounterStart + ($zoom->_pageSize - 1);
	$TRecord = $database->openConnectionWithReturn("SELECT * FROM ".$dbprefix."zoomfiles WHERE gallery_id=$catid");
	if (!$TRecord) echo "<span class=\"small\">"._ZOOM_NOPICS."</span>";
	$result = @mysql_query("SELECT * FROM ".$dbprefix."zoomfiles WHERE gallery_id=$catid LIMIT $startRow, $zoom->_pageSize");
	if (!$result) echo "<span class=\"small\">"._ZOOM_NOPICS."</span>";
 	//Total of record
 	$RecordCount = @mysql_num_rows($TRecord);//Number of files in gallery

 	//Set Maximum Page
 	$MaxPage = $RecordCount % $zoom->_pageSize;
 	if($RecordCount % $zoom->_pageSize == 0)
		{
    	$MaxPage = $RecordCount / $zoom->_pageSize;
 		}
	else
		{
    	$MaxPage = ceil($RecordCount / $zoom->_pageSize);
 		}
	//------------------------------------------------//
	?>
	<table border="0" cellspacing="0" cellpadding="0" width="100%">
	<tr>
                <td width="30" class="<?php echo $zoom->_tabclass[1]; ?>"></td>
                <TD class="<?php echo $zoom->_tabclass[1]; ?>">
		<a href="index.php?option=com_zoom&Itemid=<?php echo $Itemid ?>">
		<img src="components/com_zoom/images/home.gif" alt="<?echo _ZOOM_BACK;?>" border="0">&nbsp;&nbsp;<?php echo _ZOOM_BACK;?>
		</a> > <?php echo $name->catname;?>
		<?php
	             if($zoom->_isAdmin){
                 	print ' | <a href="index.php?option=com_zoom&Itemid=' .$Itemid. '&page=admin">'._ZOOM_ADMINSYSTEM.'</a>';
	             }
	             else if($zoom->_isUser){
	             	print ' | <a href="index.php?option=com_zoom&Itemid=' .$Itemid. '&page=user">'._ZOOM_USERSYSTEM.'</a>';
	             }
	        ?>
		</TD></tr>
	</table>
	<center><br>
	<table border="0" width="400">
	<tr>
		<td colspan="<?echo $zoom->_CONFIG['columnsno']?>" align="center"><H2><? echo $name->catname;?></H2>
		<?php
		if ($RecordCount != 0)
			{
			echo $RecordCount." "._ZOOM_IMGFOUND." ".$PageNo." "._ZOOM_IMGFOUND2." ".$MaxPage;
			}
		else
			{
			echo "<span class=\"small\">"._ZOOM_NOPICS."</span>";
			}
			?>
			<br><br>
		</td>
	</tr>
	<tr>
	<?php
	//
	$i = 1;
	$sql1 = "SELECT id,name,hits,descr FROM ".$dbprefix."zoomfiles WHERE gallery_id = $catid ORDER BY id ASC LIMIT $startRow, $zoom->_pageSize";
	$result1 = $database->openConnectionWithReturn($sql1);
	while ($row = mysql_fetch_object($result1))
		{
		//Counter to count the number of rows (eg. the number of images found)
		$count++;
		$bil = $i + ($PageNo-1)*$zoom->_pageSize;
		$size = getimagesize($zoom->_CONFIG['imagepath'].$imagedir."/".$row->name);
		if (!$zoom->_CONFIG['popUpImages']){
			?>
			<td align="center">
			<A HREF="index.php?option=com_zoom&Itemid=<?php echo $Itemid;?>&page=view&imgid=<?php echo $row->id;?>&hit=1">
			<?php
		}
		else{
			?>
			<td align="center">
			<A HREF="#" onClick="window.open('components/com_zoom/view.php?imgid=<?php echo $row->id;?>&isAdmin=<?php echo $zoom->_isAdmin;?>&hit=1', 'win1', 'width=<?php if($size[0]<450){ echo "450";}else{ echo $size[0] + 40;} ?>, height=<?php if($size[1]<350){ echo "350";}else{ echo $size[1] + 100;} ?>,scrollbars=1').focus()">
			<?php
		}
		?>
		<img border="1" alt="<?echo $row->descr;?>" src="<?php echo $zoom->_CONFIG['imagepath'].$imagedir."/thumbs/".$row->name;?>">
		<br>
		<?php echo $row->name."<br>";?>
		</A>
		<?php
		if($zoom->_CONFIG['commentsOn']){
			// Adding comment-notification, eg. show a pic with last comment-author and date as alt-text.
			$sqlc = 'SELECT date_format( date, \'%d-%m-%y\' ) AS date, name FROM '.$dbprefix.'zoom_comments WHERE image_id = '.$row->id.' ORDER BY date ASC';
			$resultc = $database->openConnectionWithReturn($sqlc);
			$num_rows = mysql_num_rows($resultc);
			if($mycom=mysql_fetch_row($resultc)){
				echo " <img border=\"0\" src=\"components/com_zoom/images/comment.gif\" alt=\"".$mycom[1].": ".$mycom[0]."\">= ".$num_rows.", ";
			}
		}
		echo _ZOOM_HITS."= ".$row->hits;
		if ($zoom->_isAdmin)
			{
			echo "<br>[<A HREF=\"index.php?option=com_zoom&Itemid=".$Itemid."&page=delpic&catid=".$catid."&id=$row->id&imdir=$imagedir\">"._ZOOM_DELETE."</A>]&nbsp;[<A HREF=\"index.php?option=com_zoom&Itemid=".$Itemid."&page=editpic&catid=".$catid."&id=$row->id\">"._ZOOM_BUTTON_EDIT."</A>]";
			}
		?>
		</td>
		<?php
		if ($count % $zoom->_CONFIG['columnsno'] == 0) 
			{ 
			echo "</tr><tr>"; 
			}
		$i++;
		}
	?>
	</tr>
	<tr>
		<td colspan="<?echo $zoom->_CONFIG['columnsno']?>" align="center">
		<?php
		//--------------------------------------------------------//
        //Print First & Previous Link if necessary
        if($CounterStart != 1)
			{
            $PrevStart = $CounterStart - 1;
            print "<a href=index.php?option=com_zoom&catid=$catid&PageNo=1>"._ZOOM_FIRST." </a>: ";
            print "<a href=index.php?option=com_zoom&catid=$catid&PageNo=$PrevStart>"._ZOOM_PREVIOUS." </a>";
        	}
        //print " [ ";
        $c = 0;

        //Print Page No
        for($c=$CounterStart;$c<=$CounterEnd;$c++){
            if($c < $MaxPage){
                if($c == $PageNo){
                    if($c % $zoom->_pageSize == 0){
                        print "<strong>$c</strong> ";
                    }else{
                        print "<strong>$c</strong> - ";
                    }
                }elseif($c % $zoom->_pageSize == 0){
                    echo "<a href=index.php?option=com_zoom&catid=$catid&PageNo=$c><strong>$c</strong></a> ";
                }else{
                    echo "<a href=index.php?option=com_zoom&catid=$catid&PageNo=$c><strong>$c</strong></a> - ";
                }//END IF
            }else{
                if($PageNo == $MaxPage){
                    print "<strong>$c</strong> ";
                    break;
                }else{
                    echo "<a href=index.php?option=com_zoom&catid=$catid&PageNo=$c><strong>$c</strong></a> ";
                    break;
                }//END IF
            }//END IF
       }//NEXT

      //echo "] ";

      if($CounterEnd < $MaxPage){
          $NextPage = $CounterEnd + 1;
          echo "<a href=index.php?option=com_zoom&catid=$catid&PageNo=$NextPage>"._ZOOM_NEXT."</a>";
      }

      //Print Last link if necessary
      if($CounterEnd < $MaxPage){
       $LastRec = $RecordCount % $zoom->_pageSize;
        if($LastRec == 0){
            $LastStartRecord = $RecordCount - $zoom->_pageSize;
        }
        else{
            $LastStartRecord = $RecordCount - $LastRec;
        }

        print " : ";
        echo "<a href=index.php?option=com_zoom&catid=$catid&PageNo=$MaxPage>"._ZOOM_LAST."</a>";
        }
      ?>
      </div>
<?php
    @mysql_free_result($result);
    @mysql_free_result($TRecord);
		//--------------------------------------------------------//
		?>
		</td>
	</tr>
	</table><br><br>		
	<?
	}
