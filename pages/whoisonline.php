<?PHP header("Content-Type: text/html; charset=UTF-8",true);
if(!defined('INITIALIZED'))
	exit;

$orderby = 'name';
if(isset($_REQUEST['order']))
{
	if($_REQUEST['order']== 'level')
		$orderby = 'level';
	elseif($_REQUEST['order'] == 'vocation')
		$orderby = 'vocation';
}
$players_online_data = $SQL->query('SELECT ' . $SQL->tableName('accounts') . '.' . $SQL->fieldName('flag') . ', ' . $SQL->tableName('players') . '.' . $SQL->fieldName('name') . ', ' . $SQL->tableName('players') . '.' . $SQL->fieldName('vocation') . ', ' . $SQL->tableName('players') . '.' . $SQL->fieldName('level') . ', ' . $SQL->tableName('players') . '.' . $SQL->fieldName('skull') . ', ' . $SQL->tableName('players') . '.' . $SQL->fieldName('looktype') . ', ' . $SQL->tableName('players') . '.' . $SQL->fieldName('lookaddons') . ', ' . $SQL->tableName('players') . '.' . $SQL->fieldName('lookhead') . ', ' . $SQL->tableName('players') . '.' . $SQL->fieldName('lookbody') . ', ' . $SQL->tableName('players') . '.' . $SQL->fieldName('looklegs') . ', ' . $SQL->tableName('players') . '.' . $SQL->fieldName('lookfeet') . ' FROM ' . $SQL->tableName('accounts') . ', ' . $SQL->tableName('players') . ', ' . $SQL->tableName('players_online') . ' WHERE ' . $SQL->tableName('players') . '.' . $SQL->fieldName('id') . ' = ' . $SQL->tableName('players_online') . '.' . $SQL->fieldName('player_id') . ' AND ' . $SQL->tableName('accounts') . '.' . $SQL->fieldName('id') . ' = ' . $SQL->tableName('players') . '.' . $SQL->fieldName('account_id') . ' ORDER BY ' . $SQL->fieldName($orderby))->fetchAll();
$number_of_players_online = 0;
$vocations_online_count = array(0,0,0,0,0); // change it if you got more then 5 vocations
$players_rows = '';
foreach($players_online_data as $player)
{
	$vocations_online_count[$player['vocation']] += 1;
	$bgcolor = (($number_of_players_online++ % 2 == 1) ?  $config['site']['darkborder'] : $config['site']['lightborder']);
	$skull = '';
	if ($player['skull'] == 4)
		$skull = "<img style='border: 0;' src='./images/skulls/redskull.gif'/>";
	else if ($player['skull'] == 5)
		$skull = "<img style='border: 0;' src='./images/skulls/blackskull.gif'/>";

	$players_rows .= '<TR BGCOLOR='.$bgcolor.'><TD WIDTH=65%><A HREF="?subtopic=characters&name='.urlencode($player['name']).'">'.htmlspecialchars($player['name']).$skull.'<TD WIDTH=10%>'.$player['level'].'</TD><TD WIDTH=20%>'.htmlspecialchars($vocation_name[$player['vocation']]).'</TD></TR>';
}		
if($number_of_players_online == 0)
{
	//server status - server empty
	$main_content .= '
	<div class="TableContainer" >
<table class="Table1" cellpadding="0" cellspacing="0">
<div class="CaptionContainer" >
<div class="CaptionInnerContainer" >
<span class="CaptionEdgeLeftTop" style="background-image:url(http://i.imgur.com/q7aLDPp.gif);" /></span>
<span class="CaptionEdgeRightTop" style="background-image:url(http://i.imgur.com/q7aLDPp.gif);" /></span>
<span class="CaptionBorderTop" style="background-image:url(http://i.imgur.com/9StwSZL.gif);" ></span>
<span class="CaptionVerticalLeft" style="background-image:url(http://i.imgur.com/TgwWl21.gif);" /></span>
<div class="Text" >World Information</div>
<span class="CaptionVerticalRight" style="background-image:url(http://i.imgur.com/TgwWl21.gif);" /></span>
<span class="CaptionBorderBottom" style="background-image:url(http://i.imgur.com/9StwSZL.gif);" ></span>        
<span class="CaptionEdgeLeftBottom" style="background-image:url(http://i.imgur.com/q7aLDPp.gif);" /></span>
<span class="CaptionEdgeRightBottom" style="background-image:url(http://i.imgur.com/q7aLDPp.gif);" /></span>
</div></div>
<tr><td>        
<div class="InnerTableContainer" >
<table style="width:100%;" >
<tr><td class="LabelV200" >Status:</td>
<td>
<div style="position: absolute; top: 35px; right: 6px;" ></div>
Online</td></tr><tr><td class="LabelV200" >Players Online: </td><td>'.$number_of_players_online.' Players Online</td></tr>
<tr>
<tr><td class="LabelV200" >Creation Date:</td><td>19/01/2017</td></tr><tr>
<td class="LabelV200" >Location:</td><td>South&#160;America</td></tr>
<tr><td class="LabelV200" >PvP Type:</td><td>Open-PvP</td></tr></tr>
</table></div></td></tr></table></div><br/>

	<div class="TableContainer" >
		<table class="Table2" cellpadding="0" cellspacing="0">
			<div class="CaptionContainer" >
				<div class="CaptionInnerContainer" > 
					<span class="CaptionEdgeLeftTop" style="background-image:url(./layouts/tibiacom/images/content/box-frame-edge.gif);" /></span>
					<span class="CaptionEdgeRightTop" style="background-image:url(./layouts/tibiacom/images/content/box-frame-edge.gif);" /></span>
					<span class="CaptionBorderTop" style="background-image:url(./layouts/tibiacom/images/content/table-headline-border.gif);" ></span> 
					<span class="CaptionVerticalLeft" style="background-image:url(./layouts/tibiacom/images/content/box-frame-vertical.gif);" /></span>					
					<div class="Text" >Players Online</div>
					<span class="CaptionVerticalRight" style="background-image:url(./layouts/tibiacom/images/content/box-frame-vertical.gif);" /></span>
					<span class="CaptionBorderBottom" style="background-image:url(./layouts/tibiacom/images/content/table-headline-border.gif);" ></span> 
					<span class="CaptionEdgeLeftBottom" style="background-image:url(./layouts/tibiacom/images/content/box-frame-edge.gif);" /></span>
					<span class="CaptionEdgeRightBottom" style="background-image:url(./layouts/tibiacom/images/content/box-frame-edge.gif);" /></span>
				</div>
			</div>
			<tr>
				<td>
					<div class="InnerTableContainer" >
						<table style="width:100%;" >
							<tr>
								<td>No online players.</td>
							</tr>
						</table>
					</div>
				</td>
			</tr>
		</table>
	</div>
	<div>  
	
	</div>
	<form method="post" action="?subtopic=characters">
		<div class="TableContainer" >
			<table class="Table1" cellpadding="0" cellspacing="0">
				<div class="CaptionContainer" >
					<div class="CaptionInnerContainer" > 
						<span class="CaptionEdgeLeftTop" style="background-image:url(./layouts/tibiacom/images/content/box-frame-edge.gif);" /></span>
						<span class="CaptionEdgeRightTop" style="background-image:url(./layouts/tibiacom/images/content/box-frame-edge.gif);" /></span>
						<span class="CaptionBorderTop" style="background-image:url(./layouts/tibiacom/images/content/table-headline-border.gif);" ></span> 
						<span class="CaptionVerticalLeft" style="background-image:url(./layouts/tibiacom/images/content/box-frame-vertical.gif);" /></span>						
						<div class="Text" >Search Character</div>
						<span class="CaptionVerticalRight" style="background-image:url(./layouts/tibiacom/images/content/box-frame-vertical.gif);" /></span>
						<span class="CaptionBorderBottom" style="background-image:url(./layouts/tibiacom/images/content/table-headline-border.gif);" ></span> 
						<span class="CaptionEdgeLeftBottom" style="background-image:url(./layouts/tibiacom/images/content/box-frame-edge.gif);" /></span>
						<span class="CaptionEdgeRightBottom" style="background-image:url(./layouts/tibiacom/images/content/box-frame-edge.gif);" /></span>
					</div>
				</div>
				<tr>
					<td>
						<div class="InnerTableContainer" >
							<table style="width:100%;" >
								<tr>
									<td style="vertical-align:middle;" class="LabelV150" >Character Name:</td>
									<td style="width:170px;" ><input style="width:165px;" name="name" value="" size="29" maxlength="29" /></td>
									<td>
										<div class="BigButton" style="background-image:url(./layouts/tibiacom/images/buttons/sbutton.gif)" >
											<div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url(./layouts/tibiacom/images/buttons/sbutton_over.gif);" ></div>
												<input class="ButtonText" type="image" name="Submit" alt="Submit" src="./layouts/tibiacom/images/buttons/_sbutton_submit.gif" >
											</div>
										</div>
									</td>
								</tr>
							</table>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</form>   
	';
}
else
{
	//list of players
	$main_content .= '
	<div class="TableContainer" >
<table class="Table1" cellpadding="0" cellspacing="0">
<div class="CaptionContainer" >
<div class="CaptionInnerContainer" >
<span class="CaptionEdgeLeftTop" style="background-image:url(http://i.imgur.com/q7aLDPp.gif);" /></span>
<span class="CaptionEdgeRightTop" style="background-image:url(http://i.imgur.com/q7aLDPp.gif);" /></span>
<span class="CaptionBorderTop" style="background-image:url(http://i.imgur.com/9StwSZL.gif);" ></span>
<span class="CaptionVerticalLeft" style="background-image:url(http://i.imgur.com/TgwWl21.gif);" /></span>
<div class="Text" >World Information</div>
<span class="CaptionVerticalRight" style="background-image:url(http://i.imgur.com/TgwWl21.gif);" /></span>
<span class="CaptionBorderBottom" style="background-image:url(http://i.imgur.com/9StwSZL.gif);" ></span>        
<span class="CaptionEdgeLeftBottom" style="background-image:url(http://i.imgur.com/q7aLDPp.gif);" /></span>
<span class="CaptionEdgeRightBottom" style="background-image:url(http://i.imgur.com/q7aLDPp.gif);" /></span>
</div></div>
<tr><td>        
<div class="InnerTableContainer" >
<table style="width:100%;" >
<tr><td class="LabelV200" >Status:</td>
<td>
<div style="position: absolute; top: 35px; right: 6px;" ></div>
Online</td></tr><tr><td class="LabelV200" >Players Online: </td><td>'.$number_of_players_online.' Players Online</td></tr>
<tr>
<tr><td class="LabelV200" >Creation Date:</td><td>19/01/2017</td></tr><tr>
<td class="LabelV200" >Location:</td><td>South&#160;America</td></tr>
<tr><td class="LabelV200" >PvP Type:</td><td>Open-PvP</td></tr></tr>
</table></div></td></tr></table></div><br/>

 <div class="TableContainer">
                <table class="Table2" cellpadding="0" cellspacing="0">
                <div class="CaptionContainer">
                <div class="CaptionInnerContainer">
                <span class="CaptionEdgeLeftTop" style="background-image:url(./layouts/tibiacom/images/content/box-frame-edge.gif)"></span>
                <span class="CaptionEdgeRightTop" style="background-image:url(./layouts/tibiacom/images/content/box-frame-edge.gif)"></span>
                <span class="CaptionBorderTop" style="background-image:url(./layouts/tibiacom/images/content/table-headline-border.gif)"></span>
                <span class="CaptionVerticalLeft" style="background-image:url(./layouts/tibiacom/images/content/box-frame-vertical.gif)"></span>
                <div class="Text">Players Online
<span class="CaptionVerticalRight" style="background-image:url(./layouts/tibiacom/images/content/box-frame-vertical.gif)"></span>
<span class="CaptionBorderBottom" style="background-image:url(./layouts/tibiacom/images/content/table-headline-border.gif)"></span>
<span class="CaptionEdgeLeftBottom" style="background-image:url(./layouts/tibiacom/images/content/box-frame-edge.gif)"></span>
<span class="CaptionEdgeRightBottom" style="background-image:url(./layouts/tibiacom/images/content/box-frame-edge.gif)"></span>
</div>
</div>
<tr>
<td>
<div class="InnerTableContainer">
<table width="100%">
<tr class="LabelH">
<td style="text-align:left;width:34%">Name<small style="font-weight:normal"></small>
<td style="text-align:left;width:34%">Level&#160;&#160;
<img class="sortarrow" src="./layouts/tibiacom/images/news/blank.gif"/></td>
<td style="text-align:left;width:34%">Vocation&#160;&#160;<small style="font-weight:normal"></small>
<img class="sortarrow" src="./layouts/tibiacom/images/news/blank.gif"/></td>
<div style="text-align:left;width:34%">'.$players_rows.'<small style="font-weight:normal"></div>
</table>
</table>
</div>
';
	
	//search bar
	$main_content .= '
	<div>   </div>
	<form method="post" action="?subtopic=characters">
		<div class="TableContainer" >
			<table class="Table1" cellpadding="0" cellspacing="0">
				<div class="CaptionContainer" >
					<div class="CaptionInnerContainer" > 
						<span class="CaptionEdgeLeftTop" style="background-image:url(./layouts/tibiacom/images/content/box-frame-edge.gif);" /></span>
						<span class="CaptionEdgeRightTop" style="background-image:url(./layouts/tibiacom/images/content/box-frame-edge.gif);" /></span>
						<span class="CaptionBorderTop" style="background-image:url(./layouts/tibiacom/images/content/table-headline-border.gif);" ></span> 
						<span class="CaptionVerticalLeft" style="background-image:url(./layouts/tibiacom/images/content/box-frame-vertical.gif);" /></span>						
						<div class="Text" >Search Character</div>
						<span class="CaptionVerticalRight" style="background-image:url(./layouts/tibiacom/images/content/box-frame-vertical.gif);" /></span>
						<span class="CaptionBorderBottom" style="background-image:url(./layouts/tibiacom/images/content/table-headline-border.gif);" ></span> 
						<span class="CaptionEdgeLeftBottom" style="background-image:url(./layouts/tibiacom/images/content/box-frame-edge.gif);" /></span>
						<span class="CaptionEdgeRightBottom" style="background-image:url(./layouts/tibiacom/images/content/box-frame-edge.gif);" /></span>
					</div>
				</div>
				<tr>
					<td>
						<div class="InnerTableContainer" >
							<table style="width:100%;" >
								<tr>
									<td style="vertical-align:middle;" class="LabelV150" >Character Name:</td>
									<td style="width:170px;" ><input style="width:165px;" name="name" value="" size="29" maxlength="29" /></td>
									<td>
										<div class="BigButton" style="background-image:url(./layouts/tibiacom/images/buttons/sbutton.gif)" >
											<div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" ><div class="BigButtonOver" style="background-image:url(./layouts/tibiacom/images/buttons/sbutton_over.gif);" ></div>
												<input class="ButtonText" type="image" name="Submit" alt="Submit" src="./layouts/tibiacom/images/buttons/_sbutton_submit.gif" >
											</div>
										</div>
									</td>
								</tr>
							</table>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</form>
	';
}