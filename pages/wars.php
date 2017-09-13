<?PHP header("Content-Type: text/html; charset=UTF-8",true);
if(!defined('INITIALIZED'))
	exit;

$main_content = "<h1 align=\"center\">Guild Wars</h1>

<table border=0 cellpadding=4 cellspacing=1 width=100%>
<tr><td class=\"white\" align=\"center\" bgcolor=\"#505050\"><b>Information</b></td></tr>
<tr><td bgcolor=\"#D4C0A1\"><table border=\"0\" cellpadding=\"8\" align=\"center\"><tr><td>
To invite guild to war use your guild page.
</td></tr></table></td></tr>

<script type=\"text/javascript\"><!--
function show_hide(flip)
{
		var tmp = document.getElementById(flip);
		if(tmp)
				tmp.style.display = tmp.style.display == 'none' ? '' : 'none';
}
--></script>
<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"4\">
<tr>
<td style=\"background: " . $config['site']['vdarkborder'] . "\" class=\"white\" width=\"150\"><b>Aggressor</b></td>
<td style=\"background: " . $config['site']['vdarkborder'] . "\" class=\"white\"><b>Information</b></td>
<td style=\"background: " . $config['site']['vdarkborder'] . "\" class=\"white\" width=\"150\"><b>Enemy</b></td>
</tr><br>";
 
$warFrags = array();
foreach($SQL->query('SELECT * FROM `guildwar_kills` ORDER BY `time` DESC')->fetchAll() as $frag)
{
	$warFrags[$frag['warid']][] = $frag;
}

$count = 0;
foreach($SQL->query('SELECT `guild_wars`.`id`, `guild_wars`.`guild1`, `guild_wars`.`guild2`, `guild_wars`.`name1`, `guild_wars`.`name2`, `guild_wars`.`status`, `guild_wars`.`started`, `guild_wars`.`ended`, (SELECT COUNT(1) FROM `guildwar_kills` WHERE `guildwar_kills`.`warid` = `guild_wars`.`id` AND `guildwar_kills`.`killerguild` = `guild_wars`.`guild1`) guild1_kills, (SELECT COUNT(1) FROM `guildwar_kills` WHERE `guildwar_kills`.`warid` = `guild_wars`.`id` AND `guildwar_kills`.`killerguild` = `guild_wars`.`guild2`) guild2_kills FROM `guild_wars` ORDER BY `started` DESC') as $war)
{
	$count++;
	$main_content .= "<tr style=\"background: " . (is_int($count / 2) ? $config['site']['darkborder'] : $config['site']['lightborder']) . ";\">
<td align=\"center\"><a href=\"?subtopic=guilds&action=show&guild=".$war['guild1']."\"><img src=\"guild_image.php?id=" . $war['guild1'] . "\" width=\"64\" height=\"64\" border=\"0\"/><br />".htmlspecialchars($war['name1'])."</a></td>
<td class=\"white\" align=\"center\">";
	switch($war['status'])
	{
		case 0:
		{
			$main_content .= "<font color=black><b>Pending acceptation</b><br />Invited on " . date("M d Y, H:i:s", $war['started']) . " for " . (($war['ended'] - $war['started']) / 3600) . " hours.<br /><br /><br /></font>";
			break;
		}
		case 1:
		{
			$main_content .= "<font size=\"12\"><span style=\"color: red;\">" . $war['guild1_kills'] . "</span><font color=black> : </font><span style=\"color: lime;\">" . $war['guild2_kills'] . "</span></font><br /><br /><span style=\"color: darkred; font-weight: bold;\">On a brutal war</span><br /><font color=black>Began on " . date("M d Y, H:i:s", $war['started']) . ", will end up after server restart after " . date("M d Y, H:i:s", $war['started'] + (2*3600)) . ".<br /></font>";
			$main_content .= "<br /><br />";
			if(in_array($war['status'], array(1,4)))
			{
				$main_content .= "<a onclick=\"show_hide('war-details:" . $war['id'] . "'); return false;\" style=\"cursor: pointer;\">&raquo; Details &laquo;</a>";
			}
			break;
		}
		case 2:
		{
			$main_content .= "<font color=black><b>Rejected invitation</b><br />Invited on " . date("M d Y, H:i:s", $war['started']) . ", rejected on " . date("M d Y, H:i:s", $war['ended']) . ".<br /><br /><br /></font>";
			break;
		}
		case 3:
		{
			$main_content .= "<font color=black><b>Canceled invitation</b><br />Sent invite on " . date("M d Y, H:i:s", $war['started']) . ", canceled on " . date("M d Y, H:i:s", $war['ended']) . ".<br /><br /><br /></font>";
			break;
		}
		case 4:
		{
			$main_content .= "<font color=black><b><i>Ended</i></b><br />Began on " . date("M d Y, H:i:s", $war['started']) . ", ended on " . date("M d Y, H:i:s", $war['ended']) . ". Frag statistics: <span style=\"color: red;\">" . $war['guild1_kills'] . "</span> to <span style=\"color: lime;\">" . $war['guild2_kills'] . "</span>.";
			$main_content .= "<br /><br />";
			if(in_array($war['status'], array(1,4)))
			{
				$main_content .= "<a onclick=\"show_hide('war-details:" . $war['id'] . "'); return false;\" style=\"cursor: pointer;\">&raquo; Details &laquo;</a>";
			}
			break;
		}
		default:
		{
			$main_content .= "Unknown, please contact with gamemaster.";
			break;
		}
	}
	$main_content .= "</td>
		<td align=\"center\"><a href=\"?subtopic=guilds&action=show&guild=".$war['guild2']."\"><img src=\"guild_image.php?id=" . $war['guild2'] . "\" width=\"64\" height=\"64\" border=\"0\"/><br />".htmlspecialchars($war['name2'])."</a></td>
	</tr>
	<tr id=\"war-details:" . $war['id'] . "\" style=\"display: none; background: " . (is_int($count / 2) ? $config['site']['darkborder'] : $config['site']['lightborder']) . ";\">
	<td colspan=\"3\">";
	if(in_array($war['status'], array(1,4)))
	{
		if(isset($warFrags[$war['id']]))
		{
			foreach($warFrags[$war['id']] as $frag)
			{
				$main_content .= date("j M Y, H:i", $frag['time']) . " <span style=\"font-weight: bold; color: " . ($frag['killerguild'] == $war['guild1'] ? "red" :"lime") . ";\">+</span><a href=\"?subtopic=characters&name=" . urlencode($frag['killer']) . "\"><b>".htmlspecialchars($frag['killer'])."</b></a> killed <a href=\"?subtopic=characters&name=".urlencode($frag['target'])."\"> " . htmlspecialchars($frag['target']) . "</a>";
			}
		}
		else
			$main_content .= "<center>There were no frags on this war so far.</center>";
	}
	else
		$main_content .= "</td></tr>";
}
 
if($count == 0)
	$main_content .= "<tr style=\"background:".$config['site']['darkborder'].";\">
<td colspan=\"3\">Currently there are no active wars.</td>
</tr>";
$main_content .= "<br><br>";
$main_content .= "</table>";