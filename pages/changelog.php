<?PHP 
$page = $_REQUEST['page'];
$action = $_REQUEST['action'];
$id = $_REQUEST['id'];
$limit = 30;
$offset = $page * $limit;
$change_data = $SQL->query('SELECT * FROM z_changelog ORDER BY id DESC LIMIT '.$limit.' OFFSET '.$offset.'');
$change_data1 = $SQL->query('SELECT * FROM z_changelog');
$change = 0;
$change1 = 0;
if($group_id_of_acc_logged >= $config['site']['access_admin_panel']) {
        $description = trim($_POST['description']);
        $where = trim($_POST['where']);
        $type = trim($_POST['type']);
        if (!empty($action) AND !empty($id)) {
    $select = $SQL->query('SELECT * FROM z_changelog WHERE date = '.$id.'')->fetch();
$main_content .= '<div class="TableContainer" >  <table class="Table1" cellpadding="0" cellspacing="0" >    <div class="CaptionContainer" >      <div class="CaptionInnerContainer" >        <span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span>        <span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span>        <span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);" ></span>        <span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);" /></span>        <div class="Text" >Change log removed</div>        <span class="CaptionVerticalRight" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);" /></span>        <span class="CaptionBorderBottom" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);" ></span>        <span class="CaptionEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span>        <span class="CaptionEdgeRightBottom" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span>      </div>    </div>    <tr>      <td>        <div class="InnerTableContainer" >          <table style="width:100%;" ><table border=0 cellspacing=1 cellpadding=4 width=100%><tr bgcolor="#505050"><td width="1%"><font class=white>ID</font></td><td width="21"><font class=white>Type</font></td><td width="21"><font class=white>Where</font></td><td width="50"><font class=white>Date</font></td><td><font class=white>Description</font></td></tr>
           
               <tr bgcolor="#F1E0C6"><td align="center">'.$select['id'].'.</td><td align="center"><img src="changelog/'.$select['type'].'.png" title="added"/></td><td align="center"><img src="changelog/'.$select['where'].'.png" title="ots"/><td>'.date("j.m.Y",$select['date']).'</td><td>'.$select['description'].'</td></tr>
               ';
                $main_content .= '</td></tr>          </table>        </div>  </table></div></td></tr><br/><center><table border="0" cellspacing="0" cellpadding="0" ><form action="index.php?subtopic=changelog" method="post" ><tr><td style="border:0px;" ><div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div><input class="ButtonText" type="image" name="Back" alt="Back" src="'.$layout_name.'/images/buttons/_sbutton_back.gif" ></div></div></td></tr></form></table></center>';
                $SQL->query('DELETE FROM z_changelog WHERE date = '.$id.'');
}
        if(empty($description) AND empty($where) AND empty($type)) {
            $main_content .= '<form action="index.php?subtopic=changelog" method="post" ><div class="TableContainer" ><table class="Table1" cellpadding="0" cellspacing="0" >    <div class="CaptionContainer" ><div class="CaptionInnerContainer" ><span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span><span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span><span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);" ></span><span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);" /></span><div class="Text" >Add Changelog</div><span class="CaptionVerticalRight" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);" /></span><span class="CaptionBorderBottom" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);" ></span><span class="CaptionEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span><span class="CaptionEdgeRightBottom" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span></div>    </div>    <tr>      <td>        <div class="InnerTableContainer" >          <table style="width:100%;" >
           <tr>
       <td class="LabelV" ><span >Type:</span></td>
       <td style="width:90%;" >
       <SELECT NAME=type>
           <OPTION>Add</OPTION>
           <OPTION>Remove</OPTION>
       </SELECT>
       </td>
       </tr>
                   <tr>
       <td class="LabelV" ><span >Where:</span></td>
       <td style="width:90%;" >
       <SELECT NAME=where>
           <OPTION>Server</OPTION>
           <OPTION>Website</OPTION>
       </SELECT>
       </td>
       </tr>
                           <tr>
       <td class="LabelV" ><span >Description:</span></td>
       <td style="width:90%;" >
       <textarea type="text" name="description" size="50" maxlength="150" rows="5" cols="60"></textarea>
       </td>
       </tr>
           </table>        </div>  </table></div></td></tr><br/><table style="width:100%;" ><tr align="center"><td><table border="0" cellspacing="0" cellpadding="0" ><tr><td style="border:0px;" ><div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div><input class="ButtonText" type="image" name="Submit" alt="Submit" src="'.$layout_name.'/images/buttons/_sbutton_submit.gif" ></div></div></td><tr></form></table></td><td><table border="0" cellspacing="0" cellpadding="0" ><form action="index.php?subtopic=changelog" method="post" ><tr><td style="border:0px;" ><div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div><input class="ButtonText" type="image" name="Back" alt="Back" src="'.$layout_name.'/images/buttons/_sbutton_back.gif" ></div></div></td></tr></form></table></td></tr></table>';
        } else {
        if(empty($description)){
                $show_msgs[] = "Description field is empty!.";
            }
            if(!empty($show_msgs)){
                //show errors
                $main_content .= '<div class="SmallBox" >  <div class="MessageContainer" >    <div class="BoxFrameHorizontal" style="background-image:url('.$layout_name.'/images/content/box-frame-horizontal.gif);" /></div>    <div class="BoxFrameEdgeLeftTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></div>    <div class="BoxFrameEdgeRightTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></div>    <div class="ErrorMessage" >      <div class="BoxFrameVerticalLeft" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);" /></div>      <div class="BoxFrameVerticalRight" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);" /></div>      <div class="AttentionSign" style="background-image:url('.$layout_name.'/images/content/attentionsign.gif);" /></div><b>The Following Errors Have Occurred:</b><br/>';
                foreach($show_msgs as $show_msg) {
                    $main_content .= '<li>'.$show_msg;
                }
                $main_content .= '</div>    <div class="BoxFrameHorizontal" style="background-image:url('.$layout_name.'/images/content/box-frame-horizontal.gif);" /></div>    <div class="BoxFrameEdgeRightBottom" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></div>    <div class="BoxFrameEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></div>  </div></div><br/>';
                //show form
                $main_content .= '<form action="index.php?subtopic=changelog" method="post" ><div class="TableContainer" ><table class="Table1" cellpadding="0" cellspacing="0" >    <div class="CaptionContainer" ><div class="CaptionInnerContainer" ><span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span><span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span><span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);" ></span><span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);" /></span><div class="Text" >Add Changelog</div><span class="CaptionVerticalRight" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);" /></span><span class="CaptionBorderBottom" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);" ></span><span class="CaptionEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span><span class="CaptionEdgeRightBottom" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span></div>    </div>    <tr>      <td>        <div class="InnerTableContainer" >          <table style="width:100%;" >
           <tr>
       <td class="LabelV" ><span >Type:</span></td>
       <td style="width:90%;" >
       <SELECT NAME=type>
           <OPTION>Add</OPTION>
           <OPTION>Remove</OPTION>
       </SELECT>
       </td>
       </tr>
                   <tr>
       <td class="LabelV" ><span >Where:</span></td>
       <td style="width:90%;" >
       <SELECT NAME=where>
           <OPTION>Server</OPTION>
           <OPTION>Website</OPTION>
       </SELECT>
       </td>
       </tr>
                           <tr>
       <td class="LabelV" ><span >Description:</span></td>
       <td style="width:90%;" >
       <textarea type="text" name="description" size="50" maxlength="150" rows="10" cols="60"></textarea>
       </td>
       </tr>
           </table>        </div>  </table></div></td></tr><br/><table style="width:100%;" ><tr align="center"><td><table border="0" cellspacing="0" cellpadding="0" ><tr><td style="border:0px;" ><div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div><input class="ButtonText" type="image" name="Submit" alt="Submit" src="'.$layout_name.'/images/buttons/_sbutton_submit.gif" ></div></div></td><tr></form></table></td><td><table border="0" cellspacing="0" cellpadding="0" ><form action="index.php?subtopic=changelog" method="post" ><tr><td style="border:0px;" ><div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div><input class="ButtonText" type="image" name="Back" alt="Back" src="'.$layout_name.'/images/buttons/_sbutton_back.gif" ></div></div></td></tr></form></table></td></tr></table>';
            }
            else
            {
                $SQL->query('INSERT INTO `z_changelog` (`id`,`type`, `where`,`date`, `description`) VALUES (NULL, "'.$type.'", "'.$where.'", '.time().', "'.$description.'");');
                $id = $SQL->query('SELECT * FROM z_changelog WHERE `description` = "'.$description.'";')->fetch();
                $main_content .= '<div class="TableContainer" >  <table class="Table1" cellpadding="0" cellspacing="0" >    <div class="CaptionContainer" >      <div class="CaptionInnerContainer" >        <span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span>        <span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span>        <span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);" ></span>        <span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);" /></span>        <div class="Text" >Change log added</div>        <span class="CaptionVerticalRight" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);" /></span>        <span class="CaptionBorderBottom" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);" ></span>        <span class="CaptionEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span>        <span class="CaptionEdgeRightBottom" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);" /></span>      </div>    </div>    <tr>      <td>        <div class="InnerTableContainer" >          <table style="width:100%;" ><table border=0 cellspacing=1 cellpadding=4 width=100%><tr bgcolor="#505050"><td width="1%"><font class=white>ID</font></td><td width="21"><font class=white>Type</font></td><td width="21"><font class=white>Where</font></td><td width="50"><font class=white>Date</font></td><td><font class=white>Description</font></td></tr>
           
               <tr bgcolor="#F1E0C6"><td align="center">'.$id['id'].'.</td><td align="center"><img src="changelog/'.$type.'.png" title="added"/></td><td align="center"><img src="changelog/'.$where.'.png" title="ots"/><td>'.date("j.m.Y",$id['date']).'</td><td>'.$description.'</td></tr>
               ';
                $main_content .= '</td></tr>          </table>        </div>  </table></div></td></tr><br/><center><table border="0" cellspacing="0" cellpadding="0" ><form action="index.php?subtopic=changelog" method="post" ><tr><td style="border:0px;" ><div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div><input class="ButtonText" type="image" name="Back" alt="Back" src="'.$layout_name.'/images/buttons/_sbutton_back.gif" ></div></div></td></tr></form></table></center>';
            }
        }
        }
foreach($change_data1 as $log) {
$change1++;
}
foreach($change_data as $log) {
$change++;
    if(is_int($change / 2))
        $bgcolor = $config['site']['darkborder'];
    else
        $bgcolor = $config['site']['lightborder'];
    $change_rows .= '            
               <tr bgcolor="'.$bgcolor.'"><td align="center">'.$log['id'].'.</td><td align="center"><img src="changelog/'.$log['type'].'.png" title="added"/></td><td align="center"><img src="changelog/'.$log['where'].'.png" title="ots"/><td>'.date("j.m.Y",$log['date']).'</td><td>'.$log['description'].'';
                if($group_id_of_acc_logged >= $config['site']['access_admin_panel']) {
$change_rows .= '<a href="index.php?subtopic=changelog&action=delete&id='.$log['date'].'"><img src="'.$layout_name.'/images/news/delete.png" border="0"></a>';
}
           
                $change_rows .= '</td></tr>';
if ($change < $limit) {
} else
$show_link_to_next_page = TRUE;
}
if($change == 0) {
    $main_content .= '<TABLE BORDER=0 CELLSPACING=1 CELLPADDING=4 WIDTH=100%><TR BGCOLOR="'.$config['site']['vdarkborder'].'"><TD CLASS=white><B>Server Status</B></TD></TR><TR BGCOLOR='.$config['site']['darkborder'].'><TD><TABLE BORDER=0 CELLSPACING=1 CELLPADDING=1><TR><TD>There is no change logs for the moment.</TD></TR></TABLE></TD></TR></TABLE><BR>';
} else
{
    $main_content .= '<TABLE BORDER=0 CELLSPACING=1 CELLPADDING=4 WIDTH=100%><TR BGCOLOR="'.$config['site']['vdarkborder'].'"><TD CLASS=white><B>Change logs</B></TD></TR><TR BGCOLOR='.$config['site']['darkborder'].'><TD><TABLE BORDER=0 CELLSPACING=1 CELLPADDING=1><TR><TD>Currently '.$change1.' change logs in total.</TD></TR></TABLE></TD></TR></TABLE><BR>';
 
    $main_content .= '<table border=0 cellspacing=1 cellpadding=4 width=100%><tr bgcolor="#505050"><td width="1%"><font class=white>ID</font></td><td width="21"><font class=white>Type</font></td><td width="21"><font class=white>Where</font></td><td width="50"><font class=white>Date</font></td><td><font class=white>Description</font></td></tr>'.$change_rows.'</table>';
    if($page > 0) {
$main_content .= '<TR><TD WIDTH=100% ALIGN=right VALIGN=bottom><A HREF="index.php?subtopic=changelog&page='.($page - 1).'" CLASS="size_xxs">Previous Page</A></TD></TR>';
}
if($show_link_to_next_page) {
$main_content .= ' | <TR><TD WIDTH=100% ALIGN=right VALIGN=bottom><A HREF="index.php?subtopic=changelog&page='.($page + 1).'" CLASS="size_xxs">Next Page</A></TD></TR>';
}
}
?>