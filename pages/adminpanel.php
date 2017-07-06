<?PHP header("Content-Type: text/html; charset=UTF-8",true);
if(!defined('INITIALIZED'))
	exit;
if($group_id_of_acc_logged >= $config['site']['access_admin_panel']) {
$main_content .= '
<script type="text/javascript">
var showednewticker_state = "0";
function showNewTickerForm()
{
if(showednewticker_state == "0") {
document.getElementById("newtickerform").innerHTML = \'<form action="?subtopic=latestnews&action=newticker" method="post" ><table border="0"><tr><td bgcolor="D4C0A1" align="center"><b>Select icon:</b></td><td><table border="0" bgcolor="F1E0C6"><tr><td><img src="'.$layout_name.'/images/news/icon_0.gif" width="20"></td><td><img src="'.$layout_name.'/images/news/icon_1.gif" width="20"></td><td><img src="'.$layout_name.'/images/news/icon_2.gif" width="20"></td><td><img src="'.$layout_name.'/images/news/icon_3.gif" width="20"></td><td><img src="'.$layout_name.'/images/news/icon_4.gif" width="20"></td></tr><tr><td><input type="radio" name="icon_id" value="0" checked="checked"></td><td><input type="radio" name="icon_id" value="1"></td><td><input type="radio" name="icon_id" value="2"></td><td><input type="radio" name="icon_id" value="3"></td><td><input type="radio" name="icon_id" value="4"></td></tr></table></td></tr><tr><td align="center" bgcolor="D4C0A1"><b>New<br>ticker<br>text:</b></td><td bgcolor="F1E0C6"><textarea name="new_ticker" rows="3" cols="45"></textarea></td></tr><tr><td><div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div><input class="ButtonText" type="image" name="Submit" alt="Submit" src="'.$layout_name.'/images/buttons/_sbutton_submit.gif" ></div></div></form><div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div><img class="ButtonText" id="AddTicker" src="'.$layout_name.'/images/buttons/_sbutton_cancel.gif" onClick="showNewTickerForm()" alt="AddTicker" /></div></div></td></tr></table>\';
document.getElementById("jajo").innerHTML = \'\';
showednewticker_state = "1";
}
else {
document.getElementById("newtickerform").innerHTML = \'\';
document.getElementById("jajo").innerHTML = \'<div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div><img class="ButtonText" id="AddTicker" src="'.$layout_name.'/images/buttons/addticker.gif" onClick="showNewTickerForm()" alt="AddTicker" /></div></div>\';
showednewticker_state = "0";
}
}
var showednewnews_state = "0";
function showNewNewsForm()
{
if(showednewnews_state == "0") {
document.getElementById("newnewsform").innerHTML = \'<form action="?subtopic=latestnews&action=newnews" method="post" ><table border="0"><tr><td bgcolor="D4C0A1" align="center"><b>Select icon:</b></td><td><table border="0" bgcolor="F1E0C6"><tr><td><img src="'.$layout_name.'/images/news/icon_0.gif" width="20"></td><td><img src="'.$layout_name.'/images/news/icon_1.gif" width="20"></td><td><img src="'.$layout_name.'/images/news/icon_2.gif" width="20"></td><td><img src="'.$layout_name.'/images/news/icon_3.gif" width="20"></td><td><img src="'.$layout_name.'/images/news/icon_4.gif" width="20"></td></tr><tr><td><input type="radio" name="icon_id" value="0" checked="checked"></td><td><input type="radio" name="icon_id" value="1"></td><td><input type="radio" name="icon_id" value="2"></td><td><input type="radio" name="icon_id" value="3"></td><td><input type="radio" name="icon_id" value="4"></td></tr></table></td></tr><tr><td align="center" bgcolor="F1E0C6"><b>Topic:</b></td><td><input type="text" name="news_topic" maxlenght="50" style="width: 300px" ></td></tr><tr><td align="center" bgcolor="D4C0A1"><b>News<br>text:</b></td><td bgcolor="F1E0C6"><textarea name="news_text" rows="6" cols="60"></textarea></td></tr><tr><td align="center" bgcolor="F1E0C6"><b>Your nick:</b></td><td><input type="text" name="news_name" maxlenght="40" style="width: 200px" ></td></tr><tr><td><div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div><input class="ButtonText" type="image" name="Submit" alt="Submit" src="'.$layout_name.'/images/buttons/_sbutton_submit.gif" ></div></div></form><div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div><img class="ButtonText" id="CancelAddNews" src="'.$layout_name.'/images/buttons/_sbutton_cancel.gif" onClick="showNewNewsForm()" alt="CancelAddNews" /></div></div></td></tr></table>\';
document.getElementById("chicken").innerHTML = \'\';
showednewnews_state = "1";
}
else {
document.getElementById("newnewsform").innerHTML = \'\';
document.getElementById("chicken").innerHTML = \'<div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div><img class="ButtonText" id="AddNews" src="'.$layout_name.'/images/buttons/addnews.gif" onClick="showNewNewsForm()" alt="AddNews" /></div></div>\';
showednewnews_state = "0";
}
}</script>';
if($action == "") {
//wyswietla wszystko mozliwe opcje dla admina takie jak "news", "reload configs", "edit configs","admin players/accounts", "set access rights"
$main_content .= '<center><h2>News system</h2></center>Here you can add new ticker and new message, edit access rights and set limit of showed <b>Tickers</b> and <b>News</b>.<br/><table style=\'clear:both\' border=0 cellpadding=0 cellspacing=0 width=\'100%\'>
<tr bgcolor='.$config['site']['darkborder'].'><td width="150"><font color="red"><b>Option</b></font></td><td><font color="red"><b>Description</b></font></td></tr>
<tr bgcolor='.$config['site']['lightborder'].'><td><div id="newtickerform"></div><div id="jajo"><div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div><img class="ButtonText" id="AddTicker" src="'.$layout_name.'/images/buttons/_sbutton_submit.gif" onClick="showNewTickerForm()" alt="AddTicker" /></div></div></div></td><td><b>Press "Submit" to add new ticker.</b></td></tr>
<tr bgcolor='.$config['site']['lightborder'].'><td width="150"><b><a href="?subtopic=latestnews">Edit/Delete</a></b></td><td><b>Here you can edit and delete news.</b></td></tr>/
</table>';
$main_content .= '<center><h2>Load configurations</h2></center>Here you can choose what configuration you want to reload. It load configuration from OTS files.<br/><table style=\'clear:both\' border=0 cellpadding=0 cellspacing=0 width=\'100%\'>
<tr bgcolor='.$config['site']['darkborder'].'><td width="150"><font color="red"><b>Option</b></font></td><td><font color="red"><b>Description</b></font></td></tr>
<tr bgcolor='.$config['site']['lightborder'].'><td width="150"><b><a href="?subtopic=adminpanel&action=install_monsters">Reload Monsters</a></b></td><td><b>Load information about monsters from directory "your_server_path/data/monsters/". Delete old mosters configuration!</b></td></tr>
<tr bgcolor='.$config['site']['darkborder'].'><td width="150"><b><a href="?subtopic=adminpanel&action=install_spells">Reload Spells</a></b></td><td><b>Load information about spells from file "your_server_path/data/spells/spells.xml". Delete old spells configuration!</b></td></tr>
</table>';
}

//RELOAD CONFIGS
if($action == "reloadconfigs") {
$main_content .= '<center><h2>Load configurations</h2></center>Here you can choose what configuration you want to reload. It load configuration from OTS files.<br/><table style=\'clear:both\' border=0 cellpadding=0 cellspacing=0 width=\'100%\'>
<tr bgcolor='.$config['site']['darkborder'].'><td width="150"><font color="red"><b>Option</b></font></td><td><font color="red"><b>Description</b></font></td></tr>
<tr bgcolor='.$config['site']['lightborder'].'><td width="150"><b><a href="?subtopic=adminpanel&action=install_monsters">Reload Monsters</a></b></td><td><b>Load information about monsters from directory "your_server_path/data/monsters/". Delete old mosters configuration!</b></td></tr>
<tr bgcolor='.$config['site']['darkborder'].'><td width="150"><b><a href="?subtopic=adminpanel&action=install_spells">Reload Spells</a></b></td><td><b>Load information about spells from file "your_server_path/data/spells/spells.xml". Delete old spells configuration!</b></td></tr>
</table>';
$main_content .= '<br/><center><form action="?subtopic=adminpanel" METHOD=post><div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div><input class="ButtonText" type="image" name="Back" alt="Back" src="'.$layout_name.'/images/buttons/_sbutton_back.gif" ></div></div></form></center>';
}

//EDIT MONSTERS
if($action == "editmonsters") {

if($_REQUEST['todo'] == "setall") {
$visibility = $_REQUEST['visibility'];
if($visibility == "visible") {
try { $SQL->query('UPDATE z_monsters SET hide_creature = 0'); } catch(PDOException $error) {}
$main_content .= '<h3>All creatures are now VISIBLE!</h3>';
}
elseif($visibility == "hidden") {
try { $SQL->query('UPDATE z_monsters SET hide_creature = 1'); } catch(PDOException $error) {}
$main_content .= '<h3>All creatures are now HIDDEN!</h3>';
}
}

if($_REQUEST['todo'] == "editgfxlink") {
$monster_name = stripslashes($_REQUEST['monster']);
$new_link = stripslashes($_REQUEST['new_link']);
if(empty($_REQUEST['savenewgfxlink'])) {
$show_list = "no";
try { $monster = $SQL->query('SELECT * FROM z_monsters WHERE name = '.$SQL->quote($monster_name).';')->fetch(); } catch(PDOException $error) {}
$main_content .= '<center><h2>Edit link</h2></center><b>Link to image: </b>'.$config['server']['url'].'/monsters/<form action="?subtopic=adminpanel&action=editmonsters&todo=editgfxlink" method=POST><input type="hidden" name="savenewgfxlink" value="yes"><input type="hidden" name="monster" value="'.$monster_name.'"><input type="text" name="new_link" value="'.$monster['gfx_name'].'"><input type="submit" value="Save"></form>';
} else {
try { $SQL->query('UPDATE z_monsters SET gfx_name = '.$SQL->quote($new_link).' WHERE name = '.$SQL->quote($monster_name).';'); } catch(PDOException $error) {}
$main_content .= 'New link <b>'.$new_link.'</b> to <b>'.$monster_name.'</b> has been saved.<br/>';
}
}

if($_REQUEST['todo'] == "hide_monsters") {
$main_content .= '<center><h2>Hide monsters</h2></center>Monsters:<b>';
foreach($_REQUEST['hide_array'] as $monster_to_hide) {
$main_content .= '<li>'.$monster_to_hide;
try { $SQL->query('UPDATE z_monsters SET hide_creature = 1 WHERE name = '.$SQL->quote(stripslashes($monster_to_hide)).';'); } catch(PDOException $error) {}
}
$main_content .= '</b><br/>are now HIDDEN.';
}

if($_REQUEST['todo'] == "show_monsters") {
$main_content .= '<center><h2>Show monsters</h2></center>Monsters:<b>';
foreach($_REQUEST['show_array'] as $monster_to_hide) {
$main_content .= '<li>'.$monster_to_hide;
try { $SQL->query('UPDATE z_monsters SET hide_creature = 0 WHERE name = '.$SQL->quote(stripslashes($monster_to_hide)).';'); } catch(PDOException $error) {}
}
$main_content .= '</b><br/>are now VISIBLE.';
}

if($show_list != "no") {
//visible monsters list
try { $monsters = $SQL->query('SELECT * FROM z_monsters WHERE hide_creature != 1 ORDER BY name'); } catch(PDOException $error) {}
$main_content .= '<center><h2>Edit monsters</h2></center><h3>Visible monsters</h3><h4><a href="?subtopic=adminpanel&action=editmonsters&todo=setall&visibility=hidden">Set all monsters HIDDEN</a></h4><form action="?subtopic=adminpanel&action=editmonsters&todo=hide_monsters" method=POST><TABLE BORDER=0 CELLSPACING=1 CELLPADDING=4 WIDTH=100%><TR BGCOLOR='.$config['site']['vdarkborder'].'><TD CLASS=white width="200"><B><font CLASS=white>Photo</B></TD><TD CLASS=white width="200"><B><font CLASS=white>Edit photo</B></TD><TD CLASS=white width="200"><B><font CLASS=white>Name</B></TD><TD CLASS=white><B><font CLASS=white>Health</B></TD><TD CLASS=white><B><font CLASS=white>Experience</B></TD><TD CLASS=white><B><font CLASS=white>Hide Creature</B></TD></TR>';
foreach($monsters as $monster) {
if(is_int($number_of_rows / 2)) { $bgcolor = $config['site']['lightborder']; } else { $bgcolor = $config['site']['darkborder']; } $number_of_rows++;
$main_content .= '<TR BGCOLOR="'.$bgcolor.'"><TD>';
if(file_exists('monsters/'.$monster['gfx_name'])) {
$main_content .= '<img src="monsters/'.$monster['gfx_name'].'" height="40" width="40">';
} else {
$main_content .= '<img src="monsters/nophoto.png" height="40" width="40">';
}
$main_content .= '</TD><TD><a href="?subtopic=adminpanel&action=editmonsters&todo=editgfxlink&monster='.urlencode($monster['name']).'">Change image name</a></TD><TD>'.$monster['name'].'</TD><TD>'.$monster['health'].'</TD><TD>'.$monster['exp'].'</TD><TD><input type="checkbox" name="hide_array[]" value="'.$monster['name'].'"></TD>';
}
$main_content .= '<TR><TD></TD><TD></TD><TD></TD><TD>Hide</TD><TD>monsters:</TD><TD><input type="submit" value="Hide monsters"></TD></TR></TABLE></form>';

//hidden monsters list
try { $monsters = $SQL->query('SELECT * FROM z_monsters WHERE hide_creature != 0 ORDER BY name'); } catch(PDOException $error) {}
$main_content .= '<h3>Hidden monsters:</h3><h4><a href="?subtopic=adminpanel&action=editmonsters&todo=setall&visibility=visible">Set all monsters VISIBLE</a></h4><form action="?subtopic=adminpanel&action=editmonsters&todo=show_monsters" method=POST><TABLE BORDER=0 CELLSPACING=1 CELLPADDING=4 WIDTH=100%><TR BGCOLOR='.$config['site']['vdarkborder'].'><TD CLASS=white width="200"><B><font CLASS=white>Photo</B></TD><TD CLASS=white width="200"><B><font CLASS=white>Edit photo</B></TD><TD CLASS=white width="200"><B><font CLASS=white>Name</B></TD><TD CLASS=white><B><font CLASS=white>Health</B></TD><TD CLASS=white><B><font CLASS=white>Experience</B></TD><TD CLASS=white><B><font CLASS=white>Hide Creature</B></TD></TR>';
foreach($monsters as $monster) {
if(is_int($number_of_rows / 2)) { $bgcolor = $config['site']['lightborder']; } else { $bgcolor = $config['site']['darkborder']; } $number_of_rows++;
$main_content .= '<TR BGCOLOR="'.$bgcolor.'"><TD>';
if(file_exists('monsters/'.$monster['gfx_name'])) {
$main_content .= '<img src="monsters/'.$monster['gfx_name'].'" height="40" width="40">';
} else {
$main_content .= '<img src="monsters/nophoto.png" height="40" width="40">';
}
$main_content .= '</TD><TD><a href="?subtopic=adminpanel&action=editmonsters&todo=editgfxlink&monster='.$monster['name'].'">Change image name</a></TD><TD>'.$monster['name'].'</TD><TD>'.$monster['health'].'</TD><TD>'.$monster['exp'].'</TD><TD><input type="checkbox" name="show_array[]" value="'.$monster['name'].'"></TD>';
}
$main_content .= '<TR><TD></TD><TD></TD><TD></TD><TD>Show</TD><TD>monsters:</TD><TD><input type="submit" value="Show monsters"></TD></TR></TABLE></form>';
}
$main_content .= '<center><form action="?subtopic=adminpanel" METHOD=post><div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div><input class="ButtonText" type="image" name="Back" alt="Back" src="'.$layout_name.'/images/buttons/_sbutton_back.gif" ></div></div></form></center>';
}

//EDIT SPELLS
if($action == "editspells") {
if(!empty($_REQUEST['allspells'])) {
if($_REQUEST['allspells'] == 'visible') {
try { $SQL->query('UPDATE z_spells SET hide_spell = "0"'); } catch(PDOException $error) {}
$main_content .= 'All spells are now <b>visible</b>!';
}
elseif($_REQUEST['allspells'] == 'hidden') {
try { $SQL->query('UPDATE z_spells SET hide_spell = "1"'); } catch(PDOException $error) {}
$main_content .= 'All spells are now <b>hidden</b>!';
}
}
if($_REQUEST['savespell'] == "yes") {
if(!empty($_REQUEST['spell_name'])) {
if($_REQUEST['visible'] == "yes") {
try { $SQL->query('UPDATE z_spells SET hide_spell = 0 WHERE name = "'.$_REQUEST['spell_name'].'"'); } catch(PDOException $error) {}
$main_content .= "<b>'".$_REQUEST['spell_name']."'</b> is now VISIBLE!";
}
if($_REQUEST['visible'] == "no") {
try { $SQL->query('UPDATE z_spells SET hide_spell = "1" WHERE name = "'.$_REQUEST['spell_name'].'"'); } catch(PDOException $error) {}
$main_content .= "<b>'".$_REQUEST['spell_name']."'</b> is now HIDDEN!";
}
}
}
try { $spells = $SQL->query('SELECT * FROM z_spells ORDER BY name'); } catch(PDOException $error) {}
$main_content .= '<FORM ACTION="?subtopic=adminpanel&action=editspells" METHOD=post><input type="hidden" name="savespell" value="yes">
<TABLE BORDER=0 CELLSPACING=1 CELLPADDING=4 WIDTH=100%>
<TR BGCOLOR='.$config['site']['vdarkborder'].'><TD CLASS=white><B>Set spell visible or hidden</B></TD></TR>
<TR BGCOLOR='.$config['site']['darkborder'].'><TD><b>Spell: </b><SELECT NAME="spell_name">';
foreach($spells as $spell) {
$main_content .= '<OPTION VALUE="'.$spell['name'].'">'.$spell['name'];
if($spell['hide_spell'] == 1) {
$main_content .= ' (hidden)';
} else {
$main_content .= ' (visible)';
}
}
$main_content .= '</SELECT><b>Visible:</b> Yes<input type="radio" name="visible" value="yes" />No<input type="radio" name="visible" value="no" />&nbsp;&nbsp;&nbsp;<INPUT TYPE=image NAME="Submit" ALT="Submit" SRC="'.$layout_name.'/images/buttons/sbutton_submit.gif" BORDER=0 WIDTH=120 HEIGHT=18></TD><TR>
</TABLE></FORM>';
//show visible spells
$main_content .= '<h3>Visible spells list:</h3><a href="?subtopic=adminpanel&action=editspells&allspells=hidden">Set all spells: HIDDEN</a><TABLE BORDER=0 CELLSPACING=1 CELLPADDING=4 WIDTH=100%><TR BGCOLOR='.$config['site']['vdarkborder'].'><TD><B><font CLASS=white>Name</font></B></TD><TD><B><font CLASS=white>Sentence</font></a></B></TD><TD><B><font CLASS=white>Type<br/>(count)</font></B></TD><TD><B><font CLASS=white>Mana</font></B></TD><TD><B><font CLASS=white>Exp.<br/>Level</font></B></TD><TD><B><font CLASS=white>Magic<br/>Level</font></B></TD><TD><B><font CLASS=white>Soul</font></B></TD><TD CLASS=white><B>Need<br/>PACC?</B></TD></TR>';
try { $spells = $SQL->query('SELECT * FROM z_spells ORDER BY name'); } catch(PDOException $error) {}
foreach($spells as $spell) {
if($spell['hide_spell'] == "0") {
if(is_int($number_of_rows / 2)) { $bgcolor = $config['site']['lightborder']; } else { $bgcolor = $config['site']['darkborder']; } $number_of_rows++;
$main_content .= '<TR BGCOLOR="'.$bgcolor.'"><TD>'.$spell['name'].'</TD><TD>'.$spell['spell'].'</TD>';
if($spell['spell_type'] == 'conjure') {
$main_content .= '<TD>'.$spell['spell_type'].'('.$spell['conj_count'].')</TD>';
}
else
{
$main_content .= '<TD>'.$spell['spell_type'].'</TD>';
}
$main_content .= '<TD>'.$spell['mana'].'</TD><TD>'.$spell['lvl'].'</TD><TD>'.$spell['mlvl'].'</TD><TD>'.$spell['soul'].'</TD><TD>'.$spell['pacc'].'</TD></TR>';
}
}
$main_content .= '</TABLE>';
//show hidden spells
$main_content .= '<h3>Hidden spells list:</h3><a href="?subtopic=adminpanel&action=editspells&allspells=visible">Set all spells: VISIBLE</a><TABLE BORDER=0 CELLSPACING=1 CELLPADDING=4 WIDTH=100%><TR BGCOLOR='.$config['site']['vdarkborder'].'><TD><B><font CLASS=white>Name</font></B></TD><TD><B><font CLASS=white>Sentence</font></a></B></TD><TD><B><font CLASS=white>Type<br/>(count)</font></B></TD><TD><B><font CLASS=white>Mana</font></B></TD><TD><B><font CLASS=white>Exp.<br/>Level</font></B></TD><TD><B><font CLASS=white>Magic<br/>Level</font></B></TD><TD><B><font CLASS=white>Soul</font></B></TD><TD CLASS=white><B>Need<br/>PACC?</B></TD></TR>';
try { $spells = $SQL->query('SELECT * FROM z_spells ORDER BY name'); } catch(PDOException $error) {}
foreach($spells as $spell) {
if($spell['hide_spell'] == "1") {
if(is_int($number_of_rows / 2)) { $bgcolor = $config['site']['lightborder']; } else { $bgcolor = $config['site']['darkborder']; } $number_of_rows++;
$main_content .= '<TR BGCOLOR="'.$bgcolor.'"><TD>'.$spell['name'].'</TD><TD>'.$spell['spell'].'</TD>';
if($spell['spell_type'] == 'conjure') {
$main_content .= '<TD>'.$spell['spell_type'].'('.$spell['conj_count'].')</TD>';
}
else
{
$main_content .= '<TD>'.$spell['spell_type'].'</TD>';
}
$main_content .= '<TD>'.$spell['mana'].'</TD><TD>'.$spell['lvl'].'</TD><TD>'.$spell['mlvl'].'</TD><TD>'.$spell['soul'].'</TD><TD>'.$spell['pacc'].'</TD></TR>';
}
}
$main_content .= '</TABLE><br/><center><form action="?subtopic=adminpanel" METHOD=post><div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div><input class="ButtonText" type="image" name="Back" alt="Back" src="'.$layout_name.'/images/buttons/_sbutton_back.gif" ></div></div></form></center>';
}

//INSTALL MONSTERS
if($action == "install_monsters") {
try { $SQL->query("DELETE FROM ".$SQL->tableName('z_monsters').";"); } catch(PDOException $error) {}
$main_content .= '<h2>Reload monsters.</h2>';
$main_content .= '<h2>All records deleted from table \'z_monsters\' in database.</h2>';
$allmonsters = new OTS_MonstersList($config['site']['server_path']."data/monster/");
//$names_added must be an array
$names_added[] = '';
//add monsters
foreach($allmonsters as $lol) {
$monster = $allmonsters->current();
//load monster mana needed to summon/convince
$mana = $monster->getManaCost();
//load monster experience
$exp = $monster->getExperience();
//load monster name
$name = ucwords($monster->getName());
//load monster health
$health = $monster->getHealth();
//load monster speed and calculate "speed level"
$speed_ini = $monster->getSpeed();
if($speed_ini <= 220) {
$speed_lvl = 1;
} else {
$speed_lvl = ($speed_ini - 220) / 2;
}
//check "is monster use haste spell"
$defenses = $monster->getDefenses();
$use_haste = 0;
foreach($defenses as $defense) {
if($defense == 'speed') {
$use_haste = 1;
}
}
//load monster flags
$flags = $monster->getFlags();
//create string with immunities
$immunities = $monster->getImmunities();
$imu_nr = 0;
$imu_count = count($immunities);
$immunities_string = '';
foreach($immunities as $immunitie) {
$immunities_string .= $immunitie;
$imu_nr++;
if($imu_count != $imu_nr) {
$immunities_string .= ", ";
}
}
//create string with voices
$voices = $monster->getVoices();
$voice_nr = 0;
$voice_count = count($voices);
$voices_string = '';
foreach($voices as $voice) {
$voices_string .= '"'.$voice.'"';
$voice_nr++;
if($voice_count != $voice_nr) {
$voices_string .= ", ";
}
}
$loots = $monster->getLoot();
$loot_nr = 0;
$loot_count = count($loots);
$loots_string = '';
foreach($loots as $loot) {
$loots_string .= '<img src="images/items/'.$loot.'.gif" />&nbsp;&nbsp;';
$loot_nr++;
if($loot_count != $loot_nr) {
$loots_string .= '';
}
}
//load race
$race = $monster->getRace();
//create monster gfx name
$gfx_name =  str_replace(" ", "", trim(mb_strtolower($name))).".gif";
//don't add 2 monsters with same name, like Butterfly
if(!in_array($name, $names_added)) {
try { $SQL->query('INSERT INTO '.$SQL->tableName('z_monsters').' (hide_creature, name, mana, exp, health, speed_lvl, use_haste, voices, immunities, summonable, convinceable, race, gfx_name, loot) VALUES (0, '.$SQL->quote($name).', '.$mana.', '.$exp.', '.$health.', '.$speed_lvl.', '.$use_haste.', '.$SQL->quote($voices_string).', '.$SQL->quote($immunities_string).', '.$flags['summonable'].', '.$flags['convinceable'].', '.$SQL->quote($race).', '.$SQL->quote($gfx_name).', '.$SQL->quote($loots_string).');'); } catch(PDOException $error) {}
$names_added[] = $name;
$main_content .= "'".strtolower($name)."', ";
}
}
//back button
$main_content .= '<center><form action="?subtopic=adminpanel" METHOD=post><div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div><input class="ButtonText" type="image" name="Back" alt="Back" src="'.$layout_name.'/images/buttons/_sbutton_back.gif" ></div></div></form></center>';
}

//SPELLS
if($action == "install_spells") {
try { $SQL->query('DELETE FROM '.$SQL->tableName('z_spells').';'); } catch(PDOException $error) {}
$main_content .= '<h2>Reload spells.</h2>';
$main_content .= '<h2>All records deleted from table \'z_spells\' in database.</h2>';
    foreach($vocation_name[0] as $prom => $arr)
      foreach($arr as $voc_id => $voc_name)
  $vocations_ids[$voc_name] = $voc_id;
$allspells = new OTS_SpellsList($config['site']['server_path']."data/spells/spells.xml");
//add conjure spells
$conjurelist = $allspells->getConjuresList();
$main_content .= "<h3>Conjure:</h3>";
foreach($conjurelist as $spellname)
{
  $spell = $allspells->getConjure($spellname);
  $lvl = $spell->getLevel();
  $mlvl = $spell->getMagicLevel();
  $mana = $spell->getMana();
  $name = $spell->getName();
  $soul = $spell->getSoul();
  $spell_txt = $spell->getWords();
  $vocations = $spell->getVocations();


  $vocations_to_db = "";
  $voc_nr = 0;
  foreach($vocations as $vocation_to_add_name)
  {
    $voc_str = '';
    foreach($vocation_name[0] as $prom => $arr)
      foreach($arr as $voc_id => $voc_name)
        if($vocation_to_add_name == $voc_name)
          $voc_str = $prom.';'.$voc_id;
    if(!empty($voc_str))
    {
      $vocations_to_db .= $voc_str;
      $voc_nr++;
      if($voc_nr != count($vocations))
        $vocations_to_db .= ',';
    }
  }

  $enabled = $spell->isEnabled();
  if($enabled)
    $hide_spell = 0;
  else
    $hide_spell = 1;
  $pacc = $spell->isPremium();
  if($pacc)
    $pacc = 'yes';
  else
    $pacc = 'no';
  $type = 'conjure';
  $count = $spell->getConjureCount();
  try { $SQL->query('INSERT INTO '.$SQL->tableName('z_spells').' (name, spell, spell_type, mana, lvl, mlvl, soul, pacc, vocations, conj_count, hide_spell) VALUES ('.$SQL->quote($name).', '.$SQL->quote($spell_txt).', \''.$type.'\', \''.$mana.'\', \''.$lvl.'\', \''.$mlvl.'\', \''.$soul.'\', \''.$pacc.'\', '.$SQL->quote($vocations_to_db).', \''.$count.'\', \''.$hide_spell.'\')'); } catch(PDOException $error) {}
  $main_content .= "Added: <b>".$name."</b><br>";
}
//add instant spells
$instantlist = $allspells->getInstantsList();
$main_content .= "<h3>Instant:</h3>";
foreach($instantlist as $spellname)
{
$spell = $allspells->getInstant($spellname);
$lvl = $spell->getLevel();
$mlvl = $spell->getMagicLevel();
$mana = $spell->getMana();
$name = $spell->getName();
$soul = $spell->getSoul();
$spell_txt = $spell->getWords();
$vocations = $spell->getVocations();


  $vocations_to_db = "";
  $voc_nr = 0;
  foreach($vocations as $vocation_to_add_name)
  {
    $voc_str = '';
    foreach($vocation_name[0] as $prom => $arr)
      foreach($arr as $voc_id => $voc_name)
        if($vocation_to_add_name == $voc_name)
          $voc_str = $prom.';'.$voc_id;
    if(!empty($voc_str))
    {
      $vocations_to_db .= $voc_str;
      $voc_nr++;
      if($voc_nr != count($vocations))
        $vocations_to_db .= ',';
    }
  }


$enabled = $spell->isEnabled();
if($enabled) {
$hide_spell = 0;
}
else
{
$hide_spell = 1;
}
$pacc = $spell->isPremium();
if($pacc) {
$pacc = 'yes';
}
else
{
$pacc = 'no';
}
$type = 'instant';
$count = 0;
try { $SQL->query('INSERT INTO z_spells (name, spell, spell_type, mana, lvl, mlvl, soul, pacc, vocations, conj_count, hide_spell) VALUES ('.$SQL->quote($name).', '.$SQL->quote($spell_txt).', \''.$type.'\', \''.$mana.'\', \''.$lvl.'\', \''.$mlvl.'\', \''.$soul.'\', \''.$pacc.'\', '.$SQL->quote($vocations_to_db).', \''.$count.'\', \''.$hide_spell.'\')'); } catch(PDOException $error) {}
$main_content .= "Added: <b>".$name."</b><br/>";
}
$main_content .= '<center><form action="?subtopic=adminpanel" METHOD=post><div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div><input class="ButtonText" type="image" name="Back" alt="Back" src="'.$layout_name.'/images/buttons/_sbutton_back.gif" ></div></div></form></center>';
}

}
else
{
$main_content .= 'You don\'t have admin access.';
$main_content .= '<center><form action="" METHOD=post><div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" ><div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div><input class="ButtonText" type="image" name="Back" alt="Back" src="'.$layout_name.'/images/buttons/_sbutton_back.gif" ></div></div></form></center>';
}
?>
