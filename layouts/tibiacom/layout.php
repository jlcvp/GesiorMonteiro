<?php

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
    $bgcolor = (($number_of_players_online++ % 2 == 1) ?  $config['site']['darkborder'] : $config['site']['lightborder']);
}
if($number_of_players_online == 0)
{
    //server status - server empty
    $main_content .= '';
}
else
{

}
?>
<?php
if(!defined('INITIALIZED'))
	exit;
?>
<html xmlns="http://www.w3.org/1999/xhtml" ng-app>

<head>
<script type="text/javascript">
function disableSelection(target){
if (typeof target.onselectstart!="undefined") //IE route
target.onselectstart=function(){return false}
else if (typeof target.style.MozUserSelect!="undefined") //Firefox route
target.style.MozUserSelect="none"
else //All other route (ie: Opera)
target.onmousedown=function(){return false}
target.style.cursor = "default"
}
</script>


  <title>Tibia - Free Multiplayer Online Role Playing Game</title>
  <meta name="description" content="<?PHP echo $title ?> Tibia is a free massively multiplayer online role-playing game (MMORPG). Join this fascinating game that has thousands of fans from all over the world!" />
  <meta name="author" content="Cipsoft" />
  <meta http-equiv="content-language" content="PT-BR" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
  <meta name="keywords" content="Tibia is a free massively multiplayer online role-playing game (MMORPG). Join this fascinating game that has thousands of fans from all over the world!" />
  <link rel="shortcut icon" href="<?PHP echo $layout_name; ?>/images/server.ico" type="image/x-icon"/>
  <link rel="icon" href="layouts\tibiacom\images\header\favicon.ico" type="image/x-icon" />
  <?PHP echo $layout_header; ?>
  <link href="<?PHP echo $layout_name; ?>/basic.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css"/>
  <script type='text/javascript'> var IMAGES=0; IMAGES='<?PHP echo $layout_name; ?>/images'; var g_FormField='';  var LINK_ACCOUNT=0; LINK_ACCOUNT='';</script>
  <script type="text/javascript" src="<?PHP echo $layout_name; ?>/initialize.js"></script>
  <script type ="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js"></script>
    <script type ="text/javascript" src="https://www.google.com/recaptcha/api.js"></script> <!--Recaptcha-->
    <script type ="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
 <style type="text/css">
body,input
    {
    font-family:"Trebuchet ms",arial;font-size:0.9em;
    color:#333;
    }
.spoiler
    {
    border:0px solid #ddd;
    padding:0px;
    }
.spoiler .inner
    {
    border:0px solid #eee;
    padding:3px;margin:3px;
    }
    </style>
    <script type="text/javascript">
function showSpoiler(obj)
    {
    var inner = obj.parentNode.getElementsByTagName("div")[0];
    if (inner.style.display == "none")
        inner.style.display = "";
    else
        inner.style.display = "none";
    }
    </script>
</head>
<body onselectstart="return false" oncontextmenu="return false" ondragstart="return false" onbeforeunload="SaveMenu();" onunload="SaveMenu();" onload="SetFormFocus()">

 <div id="fb-root" ></div><script type="text/javascript" >
  window.fbAsyncInit = function() {
    FB.init({
      appId      : 497232093667125, // App ID
      status     : true,              // check login status
      cookie     : true,              // enable cookies to allow the server to access the session
      xfbml      : true               // parse XFBML
    });
    FB.Event.subscribe('auth.login', function() {
      var URLHelper = "?";
      if (window.location.search.replace("?", "").length > 0) {
        URLHelper = "&";
      }
      if (FB_TryLogin == 1) {
        window.location = window.location + URLHelper + "step=facebooktrylogin&wasreloaded=1";
      } else if (FB_TryLogin == 2) {
        window.location = window.location + URLHelper + "page=facebooktrylogin&wasreloaded=1";
      } else {
        window.location = window.location + URLHelper + "wasreloaded=1";
      }
    });
    FB.Event.subscribe('auth.logout', function(a_Response) {
      if (a_Response.status !== 'connected') {
        window.location.href=window.location.href;
      } else {
        /* nothing to do here*/
      }
    });
    FB.Event.subscribe('auth.statusChange', function(response) {
      if (FB_ForceReload == 1 && response.status == "connected") {
        var URLHelper = "?";
        if (window.location.search.replace("?", "").length > 0) {
          URLHelper = "&";
        }
        window.location = window.location + URLHelper + "step=facebooktrylogin&wasreloaded=1";
      }
    });
  };
  (function(d){
    var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement('script'); js.id = id; js.async = true;
    js.src = "//connect.facebook.net/en_US/all.js";
    ref.parentNode.insertBefore(js, ref);
  }(document));
</script>

<a name="top"></a>
<div id="HeaderArtworkDiv" style="background-image:url(<?PHP echo $layout_name; ?>/images/header/background_artwork.jpg);"></div>
<div id="Bodycontainer">
<div id="ContentRow">
<div id="MenuColumn">
<div id="LeftArtwork">
<img src="<?PHP echo $layout_name; ?>/images/header/tibia-logo-artwork-top.gif" alt="logoartwork" name="TibiaLogoArtworkTop" id="TibiaLogoArtworkTop" onClick="window.location = 'index.php?subtopic=latestnews';" />
</div>
<div id="Loginbox" >
<div id="LoginTop" style="background-image:url(<?PHP echo "$layout_name"; ?>/images/general/box-top.gif)" ></div>
<div id="BorderLeft" class="LoginBorder" style="background-image:url(<?PHP echo "$layout_name"; ?>/images/general/chain.gif)" ></div>
<div id="LoginButtonContainer" style="background-image:url(<?PHP echo "$layout_name"; ?>/images/loginbox/loginbox-textfield-background.gif)" >
<div id="PlayNowContainer" ><form class="MediumButtonForm" action="?subtopic=accountmanagement" method="post" ><input type="hidden" name="page" value="overview" ><div class="MediumButtonBackground" style="background-image:url(<?PHP echo "$layout_name"; ?>/images/buttons/mediumbutton.gif)" onMouseOver="MouseOverMediumButton(this);" onMouseOut="MouseOutMediumButton(this);" ><div class="MediumButtonOver" style="background-image:url(<?PHP echo "$layout_name"; ?>/images/buttons/mediumbutton-over.gif)" onMouseOver="MouseOverMediumButton(this);" onMouseOut="MouseOutMediumButton(this);" ></div><input class="MediumButtonText" type="image" name="Play Now" alt="Play Now" src="<?PHP echo "$layout_name"; ?>/images/buttons/mediumbutton_playnow.png" /></div></form></div>
</div>
<div class="Loginstatus" style="background-image:url(<?PHP echo "$layout_name"; ?>/images/loginbox/loginbox-textfield-background.gif)" >
<div id="LoginstatusText_1" onClick="LoginstatusTextAction(this);" onMouseOver="MouseOverLoginBoxText(this);" onMouseOut="MouseOutLoginBoxText(this);" ><div id="LoginstatusText_1_1" name="LoginstatusText_1" class="LoginstatusText" style="background-image:url(<?PHP echo "$layout_name"; ?>/images/loginbox/loginbox-font-create-account.gif)" ></div><div id="LoginstatusText_2" class="LoginstatusText" style="background-image:url(<?PHP echo "$layout_name"; ?>/images/loginbox/loginbox-font-create-account-over.gif)" ></div></div>        <div id="ButtonText" ></div>
</div>
<div id="BorderRight" class="LoginBorder" style="background-image:url(<?PHP echo "$layout_name"; ?>/images/general/chain.gif)" ></div>
<div id="LoginBottom" class="Loginstatus" style="background-image:url(<?PHP echo "$layout_name"; ?>/images/general/box-bottom.gif)" ></div>
</div>

<div id="Loginbox2" >
<div id="LoginTop2" style="background-image:url(<?PHP echo "$layout_name"; ?>/images/general/box-top.gif)" ></div>
<div id="BorderLeft2" class="LoginBorder2" style="background-image:url(<?PHP echo "$layout_name"; ?>/images/general/chain.gif); height: 39px;" ></div>
<div id="LoginButtonContainer2" style="background-image:url(<?PHP echo "$layout_name"; ?>/images/loginbox/loginbox-textfield-background.gif)" >
<div id="PlayNowContainer" ><form class="MediumButtonForm" action="?subtopic=downloads" method="post" ><input type="hidden" name="page" value="overview" ><div class="MediumButtonBackground" style="background-image:url(<?PHP echo "$layout_name"; ?>/images/buttons/mediumbutton.gif)" onMouseOver="MouseOverMediumButton(this);" onMouseOut="MouseOutMediumButton(this);" ><div class="MediumButtonOver" style="background-image:url(<?PHP echo "$layout_name"; ?>/images/buttons/mediumbutton-over.gif)" onMouseOver="MouseOverMediumButton(this);" onMouseOut="MouseOutMediumButton(this);" ></div><input class="MediumButtonText" type="image" name="Download" alt="Download" src="<?PHP echo "$layout_name"; ?>/images/buttons/mediumbutton_download.png" /></div></form></div>
</div>
<div id="BorderRight2" class="LoginBorder2" style="background-image:url(<?PHP echo "$layout_name"; ?>/images/general/chain.gif); height: 39px;" ></div>
<div id="LoginBottom2" class="Loginstatus" style="background-image:url(<?PHP echo "$layout_name"; ?>/images/general/box-bottom.gif); top: 39px;" ></div>
</div>


<div>
<table class='table'><tr><td> </td></tr></table>
</div>
<div id='Menu'>
<div id='MenuTop' style='background-image:url(<?PHP echo "$layout_name"; ?>/images/general/box-top.gif);'></div>
<div id='news' class='menuitem'>
<span onClick="MenuItemAction('news')">
  <div class='MenuButton' style='background-image:url(<?PHP echo "$layout_name"; ?>/images/menu/button-background.gif);'>
    <div onMouseOver='MouseOverMenuItem(this);' onMouseOut='MouseOutMenuItem(this);'><div class='Button' style='background-image:url(<?PHP echo "$layout_name"; ?>/images/menu/button-background-over.gif);'></div>
      <span id='news_Lights' class='Lights'>
        <div class='light_lu' style='background-image:url(<?PHP echo "$layout_name"; ?>/images/menu/green-light.gif);'></div>
        <div class='light_ld' style='background-image:url(<?PHP echo "$layout_name"; ?>/images/menu/green-light.gif);'></div>
        <div class='light_ru' style='background-image:url(<?PHP echo "$layout_name"; ?>/images/menu/green-light.gif);'></div>
      </span>
      <div id='news_Icon' class='Icon' style='background-image:url(<?PHP echo "$layout_name"; ?>/images/menu/icon-news.gif);'></div>
      <div id='news_Label' class='Label' style='background-image:url(<?PHP echo "$layout_name"; ?>/images/menu/label-news.gif);'></div>
      <div id='news_Extend' class='Extend' style='background-image:url(<?PHP echo "$layout_name"; ?>/images/general/plus.gif);'></div>
    </div>
  </div>
</span>
<div id='news_Submenu' class='Submenu'>
<a href='index.php?subtopic=latestnews'>
  <div id='submenu_latestnews' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url(<?PHP echo "$layout_name"; ?>/images/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_latestnews' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo "$layout_name"; ?>/images/menu/icon-activesubmenu.gif);'></div>
    <div class='SubmenuitemLabel'>Latest News</div>
    <div class='RightChain' style='background-image:url(<?PHP echo "$layout_name"; ?>/images/general/chain.gif);'></div>
  </div>
</a>

<a href='?subtopic=archive'>
  <div id='submenu_archive' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_archive' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);'></div>
    <div class='SubmenuitemLabel'>News Archive</div>
    <div class='RightChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
  </div>
</a>

<a href='?subtopic=changelog'>
  <div id='submenu_changelog' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_changelog' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);'></div>
    <div class='SubmenuitemLabel'>Change Log</div>
    <div class='RightChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
  </div>
</a>
</div>
</div>


<div id='about' class='menuitem'>
<span onClick="MenuItemAction('about')">
  <div class='MenuButton' style='background-image:url(./layouts/tibiacom/images/menu/button-background.gif);'>
    <div onMouseOver='MouseOverMenuItem(this);' onMouseOut='MouseOutMenuItem(this);'><div class='Button' style='background-image:url(./layouts/tibiacom/images/menu/button-background-over.gif);'></div>
      <span id='about_Lights' class='Lights'>
        <div class='light_lu' style='background-image:url(./layouts/tibiacom/images/menu/green-light.gif);'></div>
        <div class='light_ld' style='background-image:url(./layouts/tibiacom/images/menu/green-light.gif);'></div>
        <div class='light_ru' style='background-image:url(./layouts/tibiacom/images/menu/green-light.gif);'></div>
      </span>
      <div id='about_Icon' class='Icon' style='background-image:url(./layouts/tibiacom/images/menu/icon-abouttibia.gif);'></div>
      <div id='about_Label' class='Label' style='background-image:url(./layouts/tibiacom/images/menu/label-abouttibia.gif);'></div>
      <div id='about_Extend' class='Extend' style='background-image:url(./layouts/tibiacom/images/general/plus.gif);'></div>
    
	</div>
  </div>
</span>
<div id='about_Submenu' class='Submenu'>
<a href='?subtopic=whatistibia'>
  <div id='submenu_whatistibia' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url(./layouts/tibiacom/images/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_whatistibia' class='ActiveSubmenuItemIcon' style='background-image:url(./layouts/tibiacom/images/menu/icon-activesubmenu.gif);'></div>
    <div class='SubmenuitemLabel'>What Is Tibia</div>
    <div class='RightChain' style='background-image:url(./layouts/tibiacom/images/general/chain.gif);'></div>
  </div>
</a>

<a href='?subtopic=gamefeatures'>
  <div id='submenu_gamefeatures' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_gamefeatures' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);'></div>
    <div class='SubmenuitemLabel'>Game Features</div>
    <div class='RightChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
  </div>
</a>

<a href='?subtopic=aboutcipsoft'>
  <div id='submenu_aboutcipsoft' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_aboutcipsoft' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);'></div>
    <div class='SubmenuitemLabel'>About Tibia</div>
    <div class='RightChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
  </div>
</a>

<a href='?subtopic=premiumfeatures'>
  <div id='submenu_premiumfeatures' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_premiumfeatures' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);'></div>
    <div class='SubmenuitemLabel'>Premium Features</div>
    <div class='RightChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
  </div>
</a>
</div>
</div>

<div id='community' class='menuitem'>
<span onClick="MenuItemAction('community')">
  <div class='MenuButton' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/button-background.gif);'>
    <div onMouseOver='MouseOverMenuItem(this);' onMouseOut='MouseOutMenuItem(this);'><div class='Button' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/button-background-over.gif);'></div>
      <span id='community_Lights' class='Lights'>
        <div class='light_lu' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);'></div>
        <div class='light_ld' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);'></div>
        <div class='light_ru' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);'></div>
      </span>
      <div id='community_Icon' class='Icon' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-community.gif);'></div>
      <div id='community_Label' class='Label' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/label-community.gif);'></div>
      <div id='community_Extend' class='Extend' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/plus.gif);'></div>

    </div>
  </div>
</span>
<div id='community_Submenu' class='Submenu'>
<a href='?subtopic=characters'>
  <div id='submenu_characters' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_characters' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);'></div>
    <div class='SubmenuitemLabel'>Characters</div>
    <div class='RightChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>

  </div>
</a>
<a href='?subtopic=whoisonline'>
  <div id='submenu_whoisonline' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_whoisonline' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);'></div>
    <div class='SubmenuitemLabel'>Who Is Online</div>
    <div class='RightChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
  </div>
</a>

<a href='?subtopic=highscores'>
  <div id='submenu_highscores' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_highscores' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);'></div>
    <div class='SubmenuitemLabel'>Highscores</div>
    <div class='RightChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
  </div>
</a>

<a href='?subtopic=highscoresrook'>
  <div id='submenu_highscoresrook' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_highscoresrook' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);'></div>
    <div class='SubmenuitemLabel'>Rook Highscores</div>
    <div class='RightChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
  </div>
</a>

<a href='?subtopic=houses'>
  <div id='submenu_houses' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_houses' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);'></div>
    <div class='SubmenuitemLabel'>Houses</div>
    <div class='RightChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
  </div>
</a>

<a href='?subtopic=killstatistics'>
  <div id='submenu_killstatistics' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_killstatistics' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);'></div>
    <div class='SubmenuitemLabel'>Last Kills</div>
    <div class='RightChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
  </div>
</a>

<a href='?subtopic=guilds'>
  <div id='submenu_guilds' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>

    <div id='ActiveSubmenuItemIcon_guilds' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);'></div>
    <div class='SubmenuitemLabel'>Guilds</div>
    <div class='RightChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
  </div>
</a>

<a href='index.php?subtopic=wars'>
  <div id='submenu_wars' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url(<?PHP echo "$layout_name"; ?>/images/general/chain.gif);'></div>

    <div id='ActiveSubmenuItemIcon_wars' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo "$layout_name"; ?>/images/menu/icon-activesubmenu.gif);'></div>
    <div class='SubmenuitemLabel'>Guild War</div>
    <div class='RightChain' style='background-image:url(<?PHP echo "$layout_name"; ?>/images/general/chain.gif);'></div>
  </div>
</a>
</div>
</div>

<?PHP
echo "<div id='forum' class='menuitem'>
         <span onClick=\"MenuItemAction('forum')\">
	 <div class='MenuButton' style='background-image:url(".$layout_name."/images/menu/button-background.gif);'>
	     <div onMouseOver='MouseOverMenuItem(this);' onMouseOut='MouseOutMenuItem(this);'><div class='Button' style='background-image:url(".$layout_name."/images/menu/button-background-over.gif);'></div>
               <span id='forum_Lights' class='Lights'>
                <div class='light_lu' style='background-image:url(".$layout_name."/images/menu/green-light.gif);'></div>
                <div class='light_ld' style='background-image:url(".$layout_name."/images/menu/green-light.gif);'></div>
                <div class='light_ru' style='background-image:url(".$layout_name."/images/menu/green-light.gif);'></div>
               </span>
               <div id='forum_Icon' class='Icon' style='background-image:url(".$layout_name."/images/menu/icon-forum.gif);'></div>
               <div id='forum_Label' class='Label' style='background-image:url(".$layout_name."/images/menu/label-forum.gif);'></div>
               <div id='forum_Extend' class='Extend' style='background-image:url(".$layout_name."/images/general/plus.gif);'></div>
             </div>
           </div>
          </span>
       <div id='forum_Submenu' class='Submenu'>
          <a href='?subtopic=forum'>
           <div id='submenu_forum' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
             <div class='LeftChain' style='background-image:url(".$layout_name."/images/general/chain.gif);'></div>
             <div id='ActiveSubmenuItemIcon_forum' class='ActiveSubmenuItemIcon' style='background-image:url(".$layout_name."/images/menu/icon-activesubmenu.gif);'></div>
             <div class='SubmenuitemLabel'>Server Forum</div>
             <div class='RightChain' style='background-image:url(".$layout_name."/images/general/chain.gif);'></div>
           </div>
          </a>
        </div>
       </div>";
?>


<div id='account' class='menuitem'>
<span onClick="MenuItemAction('account')">
  <div class='MenuButton' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/button-background.gif);'>
    <div onMouseOver='MouseOverMenuItem(this);' onMouseOut='MouseOutMenuItem(this);'><div class='Button' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/button-background-over.gif);'></div>
      <span id='account_Lights' class='Lights'>
        <div class='light_lu' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);'></div>
        <div class='light_ld' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);'></div>
        <div class='light_ru' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);'></div>
      </span>
      <div id='account_Icon' class='Icon' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-account.gif);'></div>
      <div id='account_Label' class='Label' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/label-account.gif);'></div>
      <div id='account_Extend' class='Extend' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/plus.gif);'></div>
    </div>
  </div>
</span>
<div id='account_Submenu' class='Submenu'>
<a href='?subtopic=accountmanagement'>
  <div id='submenu_accountmanagement' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_accountmanagement' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);'></div>
    <div class='SubmenuitemLabel'>Account Management</div>
    <div class='RightChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
  </div>
</a>
<a href='?subtopic=createaccount'>
  <div id='submenu_createaccount' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_createaccount' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);'></div>
    <div class='SubmenuitemLabel'>Create Account</div>
    <div class='RightChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
  </div>
</a>
<a href='?subtopic=lostaccount'>
  <div id='submenu_lostaccount' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_lostaccount' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);'></div>
    <div class='SubmenuitemLabel'>Lost Account</div>
    <div class='RightChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
  </div>
</a>
<a href='?subtopic=downloads'>
  <div id='submenu_downloads' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url(./layouts/tibiacom/images/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_downloads' class='ActiveSubmenuItemIcon' style='background-image:url(./layouts/tibiacom/images/menu/icon-activesubmenu.gif);'></div>
    <div class='SubmenuitemLabel'>Downloads</div>
    <div class='RightChain' style='background-image:url(./layouts/tibiacom/images/general/chain.gif);'></div>
  </div>
</a>
</div>
</div>

<div id='support' class='menuitem'>
<span onClick="MenuItemAction('support')">
  <div class='MenuButton' style='background-image:url(./layouts/tibiacom/images/menu/button-background.gif);'>
    <div onMouseOver='MouseOverMenuItem(this);' onMouseOut='MouseOutMenuItem(this);'><div class='Button' style='background-image:url(./layouts/tibiacom/images/menu/button-background-over.gif);'></div>
      <span id='support_Lights' class='Lights'>
        <div class='light_lu' style='background-image:url(./layouts/tibiacom/images/menu/green-light.gif);'></div>
        <div class='light_ld' style='background-image:url(./layouts/tibiacom/images/menu/green-light.gif);'></div>
        <div class='light_ru' style='background-image:url(./layouts/tibiacom/images/menu/green-light.gif);'></div>
      </span>
      <div id='support_Icon' class='Icon' style='background-image:url(./layouts/tibiacom/images/menu/icon-support.gif);'></div>
      <div id='support_Label' class='Label' style='background-image:url(./layouts/tibiacom/images/menu/label-support.gif);'></div>
      <div id='support_Extend' class='Extend' style='background-image:url(./layouts/tibiacom/images/general/plus.gif);'></div>
    </div>
  </div>
</span>
<div id='support_Submenu' class='Submenu'>
  <a href='?subtopic=tibiarules'>
  <div id='submenu_tibiarules' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url(./layouts/tibiacom/images/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_tibiarules' class='ActiveSubmenuItemIcon' style='background-image:url(./layouts/tibiacom/images/menu/icon-activesubmenu.gif);'></div>
    <div class='SubmenuitemLabel'>Tibia Rules</div>
    <div class='RightChain' style='background-image:url(./layouts/tibiacom/images/general/chain.gif);'></div>
  </div>
</a>
<a href='?subtopic=donaterules'>
  <div id='submenu_donaterules' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url(./layouts/tibiacom/images/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_donaterules' class='ActiveSubmenuItemIcon' style='background-image:url(./layouts/tibiacom/images/menu/icon-activesubmenu.gif);'></div>
    <div class='SubmenuitemLabel'>Donate Rules</div>
    <div class='RightChain' style='background-image:url(./layouts/tibiacom/images/general/chain.gif);'></div>
  </div>
</a>
</div>
</div>

<div id='library' class='menuitem'>
<span onClick="MenuItemAction('library')">
  <div class='MenuButton' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/button-background.gif);'>
    <div onMouseOver='MouseOverMenuItem(this);' onMouseOut='MouseOutMenuItem(this);'><div class='Button' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/button-background-over.gif);'></div>
      <span id='library_Lights' class='Lights'>
        <div class='light_lu' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);'></div>
        <div class='light_ld' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);'></div>
        <div class='light_ru' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/green-light.gif);'></div>
      </span>
      <div id='library_Icon' class='Icon' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-library.gif);'></div>
      <div id='library_Label' class='Label' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/label-library.gif);'></div>
      <div id='library_Extend' class='Extend' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/plus.gif);'></div>
    </div>
  </div>
</span>
<div id='library_Submenu' class='Submenu'>
<?PHP
if($config['site']['serverinfo_page'])
echo "<a href='?subtopic=serverinfo'>
  <div id='submenu_serverinfo' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url(".$layout_name."/images/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_serverinfo' class='ActiveSubmenuItemIcon' style='background-image:url(".$layout_name."/images/menu/icon-activesubmenu.gif);'></div>
    <div class='SubmenuitemLabel'>Server Info</div>
    <div class='RightChain' style='background-image:url(".$layout_name."/images/general/chain.gif);'></div>
  </div>
</a>";
?>
<a href='?subtopic=experiencetable'>
  <div id='submenu_experiencetable' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_experiencetable' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);'></div>
    <div class='SubmenuitemLabel'>Experience Table</div>
    <div class='RightChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
  </div>
</a>

<a href='?subtopic=rewardsystem'>
  <div id='submenu_rewardsystem' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_rewardsystem' class='ActiveSubmenuItemIcon' style='background-image:url(<?PHP echo $layout_name; ?>/images/menu/icon-activesubmenu.gif);'></div>
    <div class='SubmenuitemLabel'>Reward System</div>
    <div class='RightChain' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/chain.gif);'></div>
  </div>
</a>

<a href='?subtopic=preysystem'>
  <div id='submenu_preysystem' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url(./layouts/tibiacom/images/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_preysystem' class='ActiveSubmenuItemIcon' style='background-image:url(./layouts/tibiacom/images/menu/icon-activesubmenu.gif);'></div>
    <div class='SubmenuitemLabel'>Prey System</div>
    <div class='RightChain' style='background-image:url(./layouts/tibiacom/images/general/chain.gif);'></div>
  </div>
</a>
</div>
</div>
<?PHP
    if ($config['site']['events']) {
        echo " <div id='events' class='menuitem'>
<span onClick=\"MenuItemAction('events')\">
  <div class='MenuButton' style='background-image:url(./layouts/tibiacom/images/menu/button-background.gif);'>
    <div onMouseOver='MouseOverMenuItem(this);' onMouseOut='MouseOutMenuItem(this);'><div class='Button' style='background-image:url(./layouts/tibiacom/images/menu/button-background-over.gif);'></div>
      <span id='events_Lights' class='Lights'>
        <div class='light_lu' style='background-image:url(./layouts/tibiacom/images/menu/green-light.gif);'></div>
        <div class='light_ld' style='background-image:url(./layouts/tibiacom/images/menu/green-light.gif);'></div>
        <div class='light_ru' style='background-image:url(./layouts/tibiacom/images/menu/green-light.gif);'></div>
      </span>
      <div id='events_Icon' class='Icon' style='background-image:url(./layouts/tibiacom/images/menu/icon-events.gif);'></div>
      <div id='events_Label' class='Label' style='background-image:url(./layouts/tibiacom/images/menu/label-events.gif);'></div>
      <div id='events_Extend' class='Extend' style='background-image:url(./layouts/tibiacom/images/general/plus.gif);'></div>
    
	</div>
  </div>
</span>
<div id='events_Submenu' class='Submenu'>
<a href='?subtopic=battlefield'>
  <div id='submenu_battlefield' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url(./layouts/tibiacom/images/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_battlefield' class='ActiveSubmenuItemIcon' style='background-image:url(./layouts/tibiacom/images/menu/icon-activesubmenu.gif);'></div>
    <div class='SubmenuitemLabel'>Battlefield</div>
    <div class='RightChain' style='background-image:url(./layouts/tibiacom/images/general/chain.gif);'></div>
  </div>
</a>
<a href='?subtopic=zombie'>
  <div id='submenu_zombie' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url(./layouts/tibiacom/images/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_zombie' class='ActiveSubmenuItemIcon' style='background-image:url(./layouts/tibiacom/images/menu/icon-activesubmenu.gif);'></div>
    <div class='SubmenuitemLabel'>Zombie</div>
    <div class='RightChain' style='background-image:url(./layouts/tibiacom/images/general/chain.gif);'></div>
  </div>
</a>
</div>
</div>";
}?>

<?PHP
    if ($config['site']['shop_system']) {
        echo "
<div id='shops' class='menuitem'>
<span onClick=\"MenuItemAction('shops')\">
  <div class='MenuButton' style='background-image:url(" . $layout_name . "/images/menu/button-background.gif);'>
    <div onMouseOver='MouseOverMenuItem(this);' onMouseOut='MouseOutMenuItem(this);'><div class='Button' style='background-image:url(" . $layout_name . "/images/menu/button-background-over.gif);'></div>
      <span id='shops_Lights' class='Lights'>
        <div class='light_lu' style='background-image:url(" . $layout_name . "/images/menu/green-light.gif);'></div>
        <div class='light_ld' style='background-image:url(" . $layout_name . "/images/menu/green-light.gif);'></div>
        <div class='light_ru' style='background-image:url(" . $layout_name . "/images/menu/green-light.gif);'></div>
      </span>
      <div id='shops_Icon' class='Icon' style='background-image:url(" . $layout_name . "/images/menu/icon-shops.gif);'></div>
      <div id='shops_Label' class='Label' style='background-image:url(" . $layout_name . "/images/menu/label-shops.gif);'></div>
      <div id='shops_Extend' class='Extend' style='background-image:url(" . $layout_name . "/images/general/plus.gif);'></div>
    </div>
  </div>
</span>
</div>
<div id='shops_Submenu' class='Submenu'>
<a href='?subtopic=buypoints'>
  <div id='submenu_buypoints' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url(" . $layout_name . "/images/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_buypoints' class='ActiveSubmenuItemIcon' style='background-image:url(" . $layout_name . "/images/menu/icon-activesubmenu.gif);'></div>
    <div class='SubmenuitemLabel'>Donate</div>
    <div class='RightChain' style='background-image:url(" . $layout_name . "/images/general/chain.gif);'></div>
  </div>
</a>
<a href='?subtopic=manual'>
  <div id='submenu_manual' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url(./layouts/tibiacom/images/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_manual' class='ActiveSubmenuItemIcon' style='background-image:url(./layouts/tibiacom/images/menu/icon-activesubmenu.gif);'></div>
    <div class='SubmenuitemLabel'>Manual</div>
    <div class='RightChain' style='background-image:url(./layouts/tibiacom/images/general/chain.gif);'></div>
  </div>
</a>

</div>";

}?>

<div id='MenuBottom' style='background-image:url(<?PHP echo $layout_name; ?>/images/general/box-bottom.gif);'></div>
</div>
  <script type='text/javascript'>InitializePage();</script></div>
        <div id="ContentColumn">
          <div class="Content">
            <div id="ContentHelper">
			<script type="text/javascript" src="<?PHP echo "$layout_name"; ?>/newsticker.js"></script>
			<?PHP echo "$news_content"; ?>
    <div id="<?PHP echo $subtopic; ?>" class="Box">
    <div class="Corner-tl" style="background-image:url(<?PHP echo $layout_name; ?>/images/content/corner-tl.gif);"></div>
    <div class="Corner-tr" style="background-image:url(<?PHP echo $layout_name; ?>/images/content/corner-tr.gif);"></div>
    <div class="Border_1" style="background-image:url(<?PHP echo $layout_name; ?>/images/content/border-1.gif);"></div>
    <div class="BorderTitleText" style="background-image:url(<?PHP echo $layout_name; ?>/images/content/title-background-green.gif);"></div>
	<?php
	$headline = ucfirst($_REQUEST['subtopic']);
	if($_REQUEST['subtopic'] == "accountmanagement")
		$headline = "Account Management";
	elseif($_REQUEST['subtopic'] == "latestnews")
		$headline = "News";
	elseif($_REQUEST['subtopic'] == "createaccount")
		$headline = "Create Account";
	elseif($_REQUEST['subtopic'] == "whoisonline")
		$headline = "Who is Online";
	?>
    <img id="ContentBoxHeadline" class="Title" src="pages/headline.php?txt=<?PHP echo ucwords(str_replace('_', ' ', strtolower($headline))); ?>" alt="Contentbox headline">
    <div class="Border_2">
      <div class="Border_3">
        <div class="BoxContent" style="background-image:url(<?PHP echo $layout_name; ?>/images/content/scroll.gif);">
	<?PHP echo $main_content; ?>
      </div>
      </div>
    </div>
    <div class="Border_1" style="background-image:url(<?PHP echo $layout_name; ?>/images/content/border-1.gif);"></div>

    <div class="CornerWrapper-b"><div class="Corner-bl" style="background-image:url(<?PHP echo $layout_name; ?>/images/content/corner-bl.gif);"></div></div>
    <div class="CornerWrapper-b"><div class="Corner-br" style="background-image:url(<?PHP echo $layout_name; ?>/images/content/corner-br.gif);"></div></div>
  </div>
           </div>
          </div>
<div id="Footer">Copyright by <a href="http://www.cipsoft.com" target="_new"><b>CipSoft GmbH</b></a> All rights reserveds.</div>
</div>
<div id="ThemeboxesColumn">
<div id="RightArtwork">

<img id="Monster" src="layouts/tibiacom/images/header/dragonlord.gif"  ';" />

<img id="PedestalAndOnline" src="<?PHP echo "$layout_name"; ?>/images/header/pedestal-artwork-top.gif" alt="Monster Pedestal and Players Online Box"/>
<?PHP
if(count($config['site']['worlds']) > 1)
$whoisonlineworld = 'index.php?subtopic=whoisonline';
else
$whoisonlineworld = 'index.php?subtopic=whoisonline&world=0';
?>
<div id="PlayersOnline" onClick="window.location='<?PHP echo "$whoisonlineworld"; ?>'">
          <?PHP
            if($config['status']['serverStatus_online'] == 0)
                echo ''.$number_of_players_online.'<br />Players Online';
            else
                echo '<font color="red"><b>Server<br />OFFLINE</b></font>';
          ?></div>
        </div>
<div id="Themeboxes">
<?php
$skills = $SQL->query('SELECT * FROM players WHERE deleted = 0 AND group_id = 1 AND account_id != 1 ORDER BY level DESC LIMIT 5');
?>

  <div id="Themeboxes">
	<div id="PremiumBox" class="Themebox" style="background-image:url(<?PHP echo "$layout_name"; ?>/images/themeboxes/premiumbox.gif);">
	 <div class="ThemeboxButton" onClick="BigButtonAction('index.php?subtopic=buypoints')" onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" style="background-image:url(<?PHP echo "$layout_name"; ?>/images/buttons/sbutton_green.gif);"><div class="BigButtonOver" style="background-image:url(<?PHP echo "$layout_name"; ?>/images/buttons/sbutton_green_over.gif);"></div>
	 <div class="ButtonText" style="background-image:url(<?PHP echo "$layout_name"; ?>/images/buttons/_sbutton_getextraservice.gif);"></div>
	 </div>
	<div class="Bottom" style="background-image:url(<?PHP echo "$layout_name"; ?>/images/general/box-bottom.gif);"></div>
	</div>

<!-- networks theme box -->
<div id="NetworksBox" class="Themebox"  style="background-image:url(<?PHP echo "$layout_name"; ?>/images/themeboxes/networksbox.png);" >
  <div id="FacebookBlock" >
    <div id="FacebookLikeBox" >
      <div class="fb-like-box" data-href="https://www.facebook.com/otmalvera" data-width="175" data-height="180" data-show-faces="true" data-stream="false" data-border-color="none" data-header="false"></div>
    </div>
    <div id="FacebookSendBox" >
      <div class="fb-send" data-href="https://www.facebook.com/otmalvera" data-width="50" data-height="20" ></div>
    </div>
    <div id="FacebookLikes" >
      <div class="fb-like" data-href="https://www.facebook.com/otmalvera" data-width="50" data-layout="standard" data-show-faces="false" ></div>
    </div>
  </div>
  <div id="TwitterBlock" >
    <a href="https://twitter.com" class="twitter-follow-button" data-show-count="false">Follow @tibia</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
  </div>
  <div class="Bottom" style="background-image:url(<?PHP echo "$layout_name"; ?>/images/general/box-bottom.gif);"></div>
</div>
<!-- Server Info theme box -->
  <div id="ScreenshotBox" class="Themebox" style="background-image:url(<?PHP echo $layout_name; ?>/images/themeboxes/serverinfo/serverinfobox.gif);">
	<a href="?subtopic=serverinfo">
	<img id="ScreenshotContent" class="ThemeboxContent" style="padding: 32px 40px 30px 5px;" src="<?php echo $layout_name; ?>/images/themeboxes/serverinfo/serverinfo.gif" alt="Server Info">
	</a>
	<div class="Bottom" style="background-image:url(<?php echo $layout_name; ?>/images/general/box-bottom.gif);"></div>
</div>

        </div>
      </div>
     </div>
    </div>
  </div>
</body>
</html>
