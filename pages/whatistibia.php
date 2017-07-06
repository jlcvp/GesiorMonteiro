<?PHP header("Content-Type: text/html; charset=UTF-8",true);
if(!defined('INITIALIZED'))
	exit;

$main_content .= '
<table>
<td><IMG SRC="\layouts\tibiacom\images\whatistibia\what_is_tibia_intro.jpg"></td>
<td align="bottom">' . htmlspecialchars($config['server']['serverName']) . ' is one of the oldest and most successful massively multiplayer online role-playing games (MMORPG) created in Brazil. In an MMORPG people from all over the world meet on a virtual playground to explore areas, solve tricky riddles and undertake heroic exploits.<BR><BR>
For more than 10 years now, players have been visiting the medieval world of ' . htmlspecialchars($config['server']['serverName']) . '. At present, more than 500,000 players from all over the world inhabit the Tibian continent enjoying the numerous <A HREF="/?subtopic=gamefeatures">game features</A>.</td>
</table><BR>

Acting as knights, paladins, sorcerers or druids, players are faced with the challenge of developing the skills of their selected characters, exploring a large variety of areas and dangerous dungeons and interacting with other players on a social and diplomatic level. Besides the sophisticated chat tools it is especially the unique freedom players enjoy in Tibia that create an enormously immersive gaming experience.<BR><BR>

<CENTER><img src="\layouts\tibiacom\images\whatistibia\what_is_tibia_vocations.jpg"></CENTER><BR><BR>

' . htmlspecialchars($config['server']['serverName']) . ' can be played free of charge as a matter of principle. However, your account can be upgraded anytime to a <A HREF="/?subtopic=premiumfeatures">premium account</A>. Advantages of premium accounts include the access to special game areas and items as well as further special features relating to the game.<BR><BR>

A great helper team consisting of <A HREF="http://malvera.online/index.php?subtopic=aboutcipsoft">tutors</A> answers questions from unexperienced players in the help channel.<BR><BR>

Detailed information about the game can be found in our manual.
';
?>