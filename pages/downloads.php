<?PHP header("Content-Type: text/html; charset=UTF-8",true);
if(!defined('INITIALIZED'))
	exit;
if($action == '')
  {
$main_content .= '
<p>Before you can download the client program please read the ' . htmlspecialchars($config['server']['serverName']) . ' Service Agreement and state if you agree to it by clicking on the appropriate button below.</p>
<div class="TableContainer" >  
<table class="Table1" cellpadding="0" cellspacing="0">    
<div class="CaptionContainer" >      
		<div class="CaptionInnerContainer">
			<span class="CaptionEdgeLeftTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionEdgeRightTop" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionBorderTop" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);"></span>
			<span class="CaptionVerticalLeft" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
			<div class="Text" >' . htmlspecialchars($config['server']['serverName']) . ' Service Agreement</div>  
			<span class="CaptionVerticalRight" style="background-image:url('.$layout_name.'/images/content/box-frame-vertical.gif);"></span>
			<span class="CaptionBorderBottom" style="background-image:url('.$layout_name.'/images/content/table-headline-border.gif);"></span>
			<span class="CaptionEdgeLeftBottom" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
			<span class="CaptionEdgeRightBottom" style="background-image:url('.$layout_name.'/images/content/box-frame-edge.gif);"></span>
				</div>
					</div>
<tr><td>        
<div class="InnerTableContainer" >
<table style="width:100%;" ><p>
This agreement describes the terms on which CipSoft GmbH offers you access to an account for being able to play the online role playing game "' . htmlspecialchars($config['server']['serverName']) . '". By creating an account or downloading the client software you accept the terms and conditions below and state that you are of full legal age in your country or have the permission of your parents to play this game.</p><p>You agree that the use of the software is at your sole risk. We provide the software, the game, and all other services "as is". We disclaim all warranties or conditions of any kind, expressed, implied or statutory, including without limitation the implied warranties of title, non-infringement, merchantability and fitness for a particular purpose. We do not ensure continuous, error-free, secure or virus-free operation of the software, the game, or your account.</p><p>We are not liable for any lost profits or special, incidental or consequential damages arising out of or in connection with the game, including, but not limited to, loss of data, items, accounts, or characters from errors, system downtime, or adjustments of the gameplay.</p><p>While you are playing "' . htmlspecialchars($config['server']['serverName']) . '", you must abide by some rules ("' . htmlspecialchars($config['server']['serverName']) . ' Rules") that are stated on this homepage. If you break any of these rules, your account may be removed and all other services terminated immediately.</p></table>        </div>      </td>    </tr>  </table></div><br/>
<center><form action="index.php?subtopic=downloads&action=client" method="post" style="padding:0px;margin:0px;" ><input type="hidden" name="step" value="downloadclient" >
<div class="BigButton" style="background-image:url('.$layout_name.'/images/buttons/sbutton.gif)" >
<div onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" >
<div class="BigButtonOver" style="background-image:url('.$layout_name.'/images/buttons/sbutton_over.gif);" ></div>
<input class="ButtonText" type="image" name="I agree" alt="I agree" src="http://i.imgur.com/Un5PzHM.gif" ></div></div></form></center>        

';
}
elseif($action == 'client')
  {
  $main_content .= '
<TABLE BORDER=0 CELLPADDING=0 CELLSPACING=0 WIDTH=100%><TR>
<TD><IMG SRC="\layouts\tibiacom\images\blank.gif" WIDTH=10 HEIGHT=1 BORDER=0></TD>
<TD>
<TABLE WIDTH=100% BORDER=0 CELLSPACING=1 CELLPADDING=4>
<TR><TD BGCOLOR="#505050" ALIGN=left CLASS=white><B>Disclaimer</B></TD></TR>
<TR><TD BGCOLOR="#D4C0A1">
<TABLE WIDTH=100% BORDER=0 CELLPADDING=20><TR><TD>
The software and any related documentation is provided "as is" without warranty of any kind. The entire risk arising out of use of the software remains with you. In no event shall CipSoft GmbH be liable for any damages to your computer or loss of data.
</TD></TR></TABLE>
</TD></TR></TABLE>
<BR><BR>

<TABLE WIDTH=100% BORDER=0 CELLSPACING=0 CELLPADDING=0><TR><TD WIDTH=50% HEIGHT=100% VALIGN=top>

<TABLE WIDTH=100% HEIGHT=100% BORDER=0 CELLSPACING=1 CELLPADDING=4>

<TR><TD BGCOLOR="#505050" ALIGN=center CLASS=white><B>' . htmlspecialchars($config['server']['serverName']) . ' 10.00</B></TD></TR>
<TR><TD BGCOLOR="#D4C0A1" VALIGN=top>
<TABLE WIDTH=100% BORDER=0 CELLPADDING=20><TR><TD>
<B>System Requirements:</B><UL>
<LI>Windows XP (Service Pack 3 or higher)/Vista/7</LI>
<LI>DirectX version 5.0 or later, or OpenGL</LI>
<LI>188 MB free space on your hard disk</LI>
<LI>A connection to the internet</LI>
</UL>
<BR>
<B>Download and Installation:</B><OL>

<LI>Download the game (approx. 36 MB):<BR><A HREF="http://download.tibia.com/tibia1000.exe" TYPE="application/octet-stream" target="_top" >Windows ' . htmlspecialchars($config['server']['serverName']) . ' Client 10.00</A></LI>
<LI>Execute the downloaded file to start the installation and follow the instructions</LI></OL>
<BR>

If you have any problems with the client program, please take also a look at our FAQ</I>
</TD></TR></TABLE>

</TD></TR></TABLE>

</TD><TD>&nbsp;&nbsp;&nbsp;</TD><TD WIDTH=50% HEIGHT=100% VALIGN=top>

<TABLE WIDTH=100% HEIGHT=100% BORDER=0 CELLSPACING=1 CELLPADDING=4>
<TR><TD BGCOLOR="#505050" ALIGN=center CLASS=white><B>Ip Changer</B></TD></TR>
<TR><TD BGCOLOR="#D4C0A1" VALIGN=top>
<TABLE WIDTH=100% BORDER=0 CELLPADDING=20><TR><TD>
<B>System Requirements:</B><UL>
<LI>Windows XP (Service Pack 3 or higher)/Vista/7</LI>
<LI>.NET Framework 3.5</LI>
<LI>117 KB free hard disk space</LI>
<LI>A connection to the internet</LI>
</UL>
<B>Download and Installation:</B><OL>
<LI>Download the app (approx. 117 KB):<BR><A HREF="https://static.otland.net/ipchanger.exe" TYPE="application/octet-stream" target="_top" >Windowns ipchanger 10.00</A></LI>
<LI>Run the file "ipchanger" and add the server address."</LI></OL>
<BR>
<BR>
If you have any problems with the program, please take also a look at our FAQ</I>
</TD></TR></TABLE>
</TD></TR></TABLE>

</TD></TR></TABLE>

<BR>

<TABLE BORDER=0 WIDTH=100%><TR><TD ALIGN=CENTER><IMG SRC="\layouts\tibiacom\images\blank.gif" WIDTH=120 HEIGHT=1 BORDER=0><BR></TD><TD ALIGN=CENTER><TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0><FORM ACTION=index.php?subtopic=accountmanagement METHOD=post><TR><TD>
<INPUT TYPE=image NAME="Login" ALT="Login" SRC="\layouts\tibiacom\images\buttons\sbutton_login.gif" BORDER=0 WIDTH=120 HEIGHT=18>
</TD></TR></FORM></TABLE>
</TD><TD ALIGN=CENTER><TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0><FORM ACTION=index.php?subtopic=downloads METHOD=post><TR><TD>
<INPUT TYPE=image NAME="Back" ALT="Back" SRC="\layouts\tibiacom\images\buttons\sbutton_back.gif" BORDER=0 WIDTH=120 HEIGHT=18>

</TD></TR></FORM></TABLE>
</TD><TD ALIGN=CENTER><IMG SRC="\layouts\tibiacom\images\blank.gif" WIDTH=120 HEIGHT=1 BORDER=0><BR></TD></TR></TABLE><iframe src="" name="confirmclient" style="height:0px;width:0px;visibility:hidden;" >NO FRAMES</iframe>
</TD>
<TD><IMG SRC="\layouts\tibiacom\images\blank.gif" WIDTH=10 HEIGHT=1 BORDER=0></TD>
</TR>
</TABLE>
';
}
?>