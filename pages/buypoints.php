<?php
$bonusPoints = $config['site']['bonusPoints'];
if ($action == "") {
    $main_content .= '
<script>
    function validate_form(thisform) {
        with (thisform) {
            if (rules.checked == false) {
                alert(\'Para prosseguir com a doação você deve concordar com os termos acima!\');
                return false;
            }
        }
    }
</script>
<div id="ProgressBar">
    <div id="Headline">Regras da Doação</div>
    <div id="MainContainer">
        <div id="BackgroundContainer">
            <img id="BackgroundContainerLeftEnd" src="' . $layout_name . '/images/vips/stonebar-left-end.gif">
            <div id="BackgroundContainerCenter">
                <div id="BackgroundContainerCenterImage"
                     style="background-image: url(' . $layout_name . '/images/vips/stonebar-center.gif);"></div>
            </div>
            <img id="BackgroundContainerRightEnd" src="' . $layout_name . '/images/vips/stonebar-right-end.gif">
        </div>
        <img id="TubeLeftEnd" src="' . $layout_name . '/images/vips/progress-bar-tube-left-green.gif">
        <img id="TubeRightEnd" src="' . $layout_name . '/images/vips/progress-bar-tube-right-blue.gif">
        <div id="FirstStep" class="Steps">
            <div class="SingleStepContainer">
                <img class="StepIcon" src="' . $layout_name . '/images/vips/progress-bar-icon-0-green.gif">
                <div class="StepText" style="font-weight: bold;">Regras da Doação</div>
            </div>
        </div>
        <div id="StepsContainer1">
            <div id="StepsContainer2">
                <div class="Steps" style="width: 25%;">
                    <div class="TubeContainer">
                        <img class="Tube" src="' . $layout_name . '/images/vips/progress-bar-tube-green-blue.gif">
                    </div>
                    <div class="SingleStepContainer">
                        <img class="StepIcon" src="' . $layout_name . '/images/vips/progress-bar-icon-1-blue.gif">
                        <div class="StepText" style="font-weight: normal;">Método de Pagamento</div>
                    </div>
                </div>
                <div class="Steps" style="width: 25%;">
                    <div class="TubeContainer">
                        <img class="Tube" src="' . $layout_name . '/images/vips/progress-bar-tube-blue.gif">
                    </div>
                    <div class="SingleStepContainer">
                        <img class="StepIcon" src="' . $layout_name . '/images/vips/progress-bar-icon-2-blue.gif">
                        <div class="StepText" style="font-weight: normal;">Informações do Pedido</div>
                    </div>
                </div>
                <div class="Steps" style="width: 25%;">
                    <div class="TubeContainer">
                        <img class="Tube" src="' . $layout_name . '/images/vips/progress-bar-tube-blue.gif">
                    </div>
                    <div class="SingleStepContainer">
                        <img class="StepIcon" src="' . $layout_name . '/images/vips/progress-bar-icon-3-blue.gif">
                        <div class="StepText" style="font-weight: normal;">Confirmação</div>
                    </div>
                </div>
                <div class="Steps" style="width: 25%;">
                    <div class="TubeContainer">
                        <img class="Tube" src="' . $layout_name . '/images/vips/progress-bar-tube-blue.gif">
                    </div>
                    <div class="SingleStepContainer">
                        <img class="StepIcon" src="' . $layout_name . '/images/vips/progress-bar-icon-4-blue.gif">
                        <div class="StepText" style="font-weight: normal;">Pedido Realizado</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="TableContainer">
    <div class="CaptionContainer">
        <div class="CaptionInnerContainer">
            <span class="CaptionEdgeLeftTop"
                  style="background-image: url(' . $layout_name . '/images/content/box-frame-edge.gif);"></span>
            <span class="CaptionEdgeRightTop"
                  style="background-image: url(' . $layout_name . '/images/content/box-frame-edge.gif);"></span>
            <span class="CaptionBorderTop"
                  style="background-image: url(' . $layout_name . '/images/content/table-headline-border.gif);"></span>
            <span class="CaptionVerticalLeft"
                  style="background-image: url(' . $layout_name . '/images/content/box-frame-vertical.gif);"></span>
            <div class="Text">Regras da Doação</div>
            <span class="CaptionVerticalRight"
                  style="background-image: url(' . $layout_name . '/images/content/box-frame-vertical.gif);"></span>
            <span class="CaptionBorderBottom"
                  style="background-image: url(' . $layout_name . '/images/content/table-headline-border.gif);"></span>
            <span class="CaptionEdgeLeftBottom"
                  style="background-image: url(' . $layout_name . '/images/content/box-frame-edge.gif);"></span>
            <span class="CaptionEdgeRightBottom"
                  style="background-image: url(' . $layout_name . '/images/content/box-frame-edge.gif);"></span>
        </div>
    </div>
    <table class="Table1" cellpadding="0" cellspacing="0">
        <tbody>
        <tr>
            <td>
                <div class="InnerTableContainer">
                    <table style="width: 100%;">
                        <tbody>
                        <tr>
                            <td>
                                Informamos aos jogadores e colaboradores que o <b>' . $config['server']['serverName'] . ' Alternate Tibia
                                Server</b> não tem nenhum interesse financeiro. Toda a renda obtida é diretamente
                                reaplicada para a manutenção do servidor - isto significa que ao fazer uma doação, você
                                está garantindo a estabilidade e aumentando a qualidade do mesmo.</br></br>
                                Os pontos que são repassados aos jogadores que efetuam as doações não representam nada
                                mais além de nossa gratificação, isto é, você não está comprando pontos e sim recebendo
                                uma gratificação simbólica (em formas de pontos) que te beneficie dentro do jogo; você
                                poderá usar os seus pontos da maneira que desejar.</br></br>
                                O espírito deste sistema é simples: com o intuito de nos aproximarmos dos jogadores e
                                fazer com que vocês se sintam em casa, entendemos a sua doação como uma via de mão dupla
                                no quesito credibilidade. Ao acreditar que vale a pena investir na manutenção do
                                servidor, nós investimos em vocês creditando-os com pontos, que como já dito
                                anteriormente, podem ser utilizados da maneira que mais os couber.</br></br>
                                Confira nosso <a href="index.php?subtopic=shopsystem">' . $config['server']['serverName'] . ' Shop</a> e saiba
                                como aproveitar os seus pontos da maneira mais proveitosa à sua situação.</br>

                                <h3>Dúvidas Frequentes</h3></br>
                                -<b>Mas o que são Tibia Coins?</b>
                                Tibia Coins faz parte do nosso sistema de doação, com eles você pode adquirir produtos que você deseja em nosso Shopping Online ou in Game.</br></br>

                                -<b>Como efetuar a doação?</b>
                                <br/>Clique no botão <b>"Continue"</b> e siga todos os procedimentos para realizar sua
                                doação.
                                <br/>
                                <br/>
                                <hr>
                                <div align="center">
                                    <b>Termos de doação</b>
                                    <br/><INPUT TYPE="checkbox" NAME="rules" id="rules" value="true"/> Eu aceito os
                                    termos e desejo prosseguir.<br/>
                                    <small style="color: red;">Esteja ciente dos termos de doação antes de prosseguir!
                                    </small>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<br/>
<center>
    <table border="0" cellpadding="0" cellspacing="0">
        <tbody>
        <tr>
            <td style="border: 0px none;">
                <form action="?subtopic=buypoints&action=agreement" method="post" onsubmit="return validate_form(this)">
                    <div class="BigButton" style="background-image: url(' . $layout_name . '/images/buttons/sbutton.gif);">
                        <div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);">
                            <div class="BigButtonOver"
                                 style="background-image: url(' . $layout_name . '/images/buttons/sbutton_over.gif);"></div>
                            <input class="ButtonText" name="Continue" alt="Continue"
                                   src="' . $layout_name . '/images/vips/_sbutton_continue.gif" type="image">
                </form>
                </div>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</center>';
}
if ($action == "agreement") {
    if (!$logged) {
        $link = "index.php?subtopic=buypoints&action=agreement";
        $main_content .= '<TABLE BORDER=0 CELLSPACING=1 CELLPADDING=4 WIDTH=100%>
    <TR BGCOLOR="' . $config['site']['vdarkborder'] . '">
        <TD CLASS="white"><b>Error</b></td>
    </TR>
    <TR BGCOLOR=' . $config['site']['darkborder'] . '>
        <TD>Please, log in so you can proceed with the operation.<br/><a href="index.php?subtopic=accountmanagement">Login here</a> or if you do not have an account, <a href="index.php?subtopic=createaccount">Register here</a>.
        </TD>
    </TR>
</TABLE>';
    } else {
        $buy_name = stripslashes(urldecode($_POST['buy_name']));
        $main_content .= '<div id="ProgressBar">
    <div id="Headline">Método de Pagamento</div>
    <div id="MainContainer">
        <div id="BackgroundContainer">
            <img id="BackgroundContainerLeftEnd" src="' . $layout_name . '/images/vips/stonebar-left-end.gif">
            <div id="BackgroundContainerCenter">
                <div id="BackgroundContainerCenterImage"
                     style="background-image: url(' . $layout_name . '/images/vips/stonebar-center.gif);"></div>
            </div>
            <img id="BackgroundContainerRightEnd" src="' . $layout_name . '/images/vips/stonebar-right-end.gif">
        </div>
        <img id="TubeLeftEnd" src="' . $layout_name . '/images/vips/progress-bar-tube-left-green.gif">
        <img id="TubeRightEnd" src="' . $layout_name . '/images/vips/progress-bar-tube-right-blue.gif">
        <div id="FirstStep" class="Steps">
            <div class="SingleStepContainer">
                <img class="StepIcon" src="' . $layout_name . '/images/vips/progress-bar-icon-0-green.gif">
                <div class="StepText" style="font-weight: normal;">Regras da Doação</div>
            </div>
        </div>
        <div id="StepsContainer1">
            <div id="StepsContainer2">
                <div class="Steps" style="width: 25%;">
                    <div class="TubeContainer">
                        <img class="Tube" src="' . $layout_name . '/images/vips/progress-bar-tube-green.gif">
                    </div>
                    <div class="SingleStepContainer">
                        <img class="StepIcon" src="' . $layout_name . '/images/vips/progress-bar-icon-1-green.gif">
                        <div class="StepText" style="font-weight: bold;">Metodo de Pagamento</div>
                    </div>
                </div>
                <div class="Steps" style="width: 25%;">
                    <div class="TubeContainer">
                        <img class="Tube" src="' . $layout_name . '/images/vips/progress-bar-tube-green-blue.gif">
                    </div>
                    <div class="SingleStepContainer">
                        <img class="StepIcon" src="' . $layout_name . '/images/vips/progress-bar-icon-2-blue.gif">
                        <div class="StepText" style="font-weight: normal;">Informações do Pedido</div>
                    </div>
                </div>
                <div class="Steps" style="width: 25%;">
                    <div class="TubeContainer">
                        <img class="Tube" src="' . $layout_name . '/images/vips/progress-bar-tube-blue.gif">
                    </div>
                    <div class="SingleStepContainer">
                        <img class="StepIcon" src="' . $layout_name . '/images/vips/progress-bar-icon-3-blue.gif">
                        <div class="StepText" style="font-weight: normal;">Confirmação</div>
                    </div>
                </div>
                <div class="Steps" style="width: 25%;">
                    <div class="TubeContainer">
                        <img class="Tube" src="' . $layout_name . '/images/vips/progress-bar-tube-blue.gif">
                    </div>
                    <div class="SingleStepContainer">
                        <img class="StepIcon" src="' . $layout_name . '/images/vips/progress-bar-icon-4-blue.gif">
                        <div class="StepText" style="font-weight: normal;">Pedido Realizado</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br/><br/>
<TABLE BORDER="0" CELLSPACING="0" CELLPADDING="4" WIDTH="100%">
    <form action="index.php?subtopic=buypoints&action=tipo" method="POST">
        <input type="hidden" name="char_name" value="">
        <TR BGCOLOR="#505050">
            <TD CLASS="white" COLSPAN="3"><b>Select a payment method</b></TD>
        </TR>';
        if ($config['site']['pagseguro'] == 1) {
            $main_content .= '
	<TR BGCOLOR=#D4C0A1>
		<TD>';
            if ($bonusPoints > 1) {
                if ($bonusPoints <= 4) {
                    $main_content .= '<b>[Bônus Points <font color="#FF0000">x' . $bonusPoints . '</font>]</b><br />';
                }
                if ($bonusPoints >= 5) {
                    $main_content .= '<b>[Bônus Points <font color="#FF0000" style="font-size:18px;font-weight:bold;">Extreme x' . $bonusPoints . '!</font>]</b><br />';
                }
            }
            $main_content .= '<input type="radio" name="method" value="1" />&nbsp;PagSeguro - <b>Cartões de crédito&nbsp;<i>/</i>&nbsp;Boleto&nbsp;<i>/</i>&nbsp;Transferência bancária</b>
		</TD>
	</TR>';
        }
        if ($config['site']['paypal'] == 1) {
            $main_content .= '
		<TR BGCOLOR=#D4C0A1>
			<TD><input type="radio" name="method" value="2" />&nbsp;Paypal - <b>Credit Cards/International Transactions</b></TD>
		</TR>';
        }
        if ($config['site']['caixa'] == 1) {
            $main_content .= '
		<TR BGCOLOR=#D4C0A1>
			<TD><input type="radio" name="method" value="3" />&nbsp;ITAU - <b>Depósitos/DOCS/Transferencias Bancárias</b></TD>
		</TR>';
        }
        if ($config['site']['caixa'] == 0 && $config['site']['pagseguro'] == 0 && $config['site']['paypal'] == 0) {
            $main_content .= '
		<TR BGCOLOR="#D4C0A1" padding="10px">
			<TD><b style="color: red; padding: 5px;">Nenhuma forma de pagamento disponível no momento.</b></TD>
		</TR>';
        }
        $main_content .= '</TABLE>
</tbody>
</table>
<br/>
<table width="100%">
    <tbody>
    <tr align="center">
        <td>';
        if ($config['site']['caixa'] == 1 || $config['site']['pagseguro'] == 1 || $config['site']['paypal'] == 1) {
            $main_content .= '<table border="0" cellpadding="0" cellspacing="0">
    <tbody>
    <tr>
        <td style="border: 0px none;">
            <a href="javascript:void();" onclick=location.href="index.php?subtopic=buypoints&action=pag_form">
                <div class="BigButton" style="background-image: url(' . $layout_name . '/images/buttons/sbutton.gif);">
                    <div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);">
                        <div class="BigButtonOver"
                             style="background-image: url(' . $layout_name . '/images/buttons/sbutton_over.gif);"></div>
                        <input class="ButtonText" name="Continue" alt="Continue"
                               src="' . $layout_name . '/images/buttons/_sbutton_continue.gif" type="image">
                    </div>
                </div>
            </a>
        </td>
    </tr>
    <tr>
    </tr>
    </tbody>
</table>';
        }
        $main_content .= '</td>
    </tr>
    </tbody>
</table>';
    }
    $_SESSION["nome"] = stripslashes(urldecode($_POST['method']));
} elseif ($action == 'tipo') {
    if (!$logged) {
        $main_content .= '<TABLE BORDER=0 CELLSPACING=1 CELLPADDING=4 WIDTH=100%>
    <TR BGCOLOR="' . $config['site']['vdarkborder'] . '">
        <TD CLASS="white"><b>Error</b></td>
    </TR>
    <TR BGCOLOR=' . $config['site']['darkborder'] . '>
        <TD>Please, log in so you can proceed with the operation.<br/>
            <a href="index.php?subtopic=accountmanagement">Login here</a> or if you do not have an account, <a href="index.php?subtopic=createaccount">Register here</a>.
        </TD>
    </TR>
</TABLE>';
    } else {
        $buy_tipo = stripslashes(urldecode($_POST['method']));
        if ($buy_tipo == 0) {
            $main_content .= '<TABLE BORDER=0 CELLSPACING=1 CELLPADDING=4 WIDTH=100%>
    <TR BGCOLOR="' . $config['site']['vdarkborder'] . '">
        <TD CLASS=white><b>Error</b></td>
    </TR>
    <TR BGCOLOR=' . $config['site']['darkborder'] . '>
        <TD><b style="color: red;">No payment method has been selected.</b><br/><i>Select a form of payment available to
            give procedure.</i></TD>
    </TR>
</TABLE>
<br/>
<table width="100%">
    <tbody>
    <tr align="center">
        <td>
            <table border="0" cellpadding="0" cellspacing="0">
                <tbody>
                <tr>
                    <td style="border: 0px none;">
                        <a href="javascript:void();"
                           onclick=location.href="index.php?subtopic=buypoints&action=agreement">
                            <div class="BigButton"
                                 style="background-image: url(' . $layout_name . '/images/buttons/sbutton.gif);">
                                <div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);">
                                    <div class="BigButtonOver"
                                         style="background-image: url(' . $layout_name . '/images/buttons/sbutton_over.gif);"></div>
                                    <input class="ButtonText" name="Back" alt="Back"
                                           src="' . $layout_name . '/images/vips/_sbutton_back.gif" type="image">
                                </div>
                            </div>
                        </a>
                    </td>
                </tr>
                <tr>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>
';
        }
        if ($buy_tipo == 1) {
            $main_content .= '<div id="ProgressBar">
    <div id="Headline">Informações do Pedido</div>
    <div id="MainContainer">
        <div id="BackgroundContainer">
            <img id="BackgroundContainerLeftEnd" src="' . $layout_name . '/images/vips/stonebar-left-end.gif">
            <div id="BackgroundContainerCenter">
                <div id="BackgroundContainerCenterImage"
                     style="background-image: url(' . $layout_name . '/images/vips/stonebar-center.gif);"></div>
            </div>
            <img id="BackgroundContainerRightEnd" src="' . $layout_name . '/images/vips/stonebar-right-end.gif">
        </div>
        <img id="TubeLeftEnd" src="' . $layout_name . '/images/vips/progress-bar-tube-left-green.gif">
        <img id="TubeRightEnd" src="' . $layout_name . '/images/vips/progress-bar-tube-right-blue.gif">
        <div id="FirstStep" class="Steps">
            <div class="SingleStepContainer">
                <img class="StepIcon" src="' . $layout_name . '/images/vips/progress-bar-icon-0-green.gif">
                <div class="StepText" style="font-weight: normal;">Regras da Doação</div>
            </div>
        </div>
        <div id="StepsContainer1">
            <div id="StepsContainer2">
                <div class="Steps" style="width: 25%;">
                    <div class="TubeContainer">
                        <img class="Tube" src="' . $layout_name . '/images/vips/progress-bar-tube-green.gif">
                    </div>
                    <div class="SingleStepContainer">
                        <img class="StepIcon" src="' . $layout_name . '/images/vips/progress-bar-icon-1-green.gif">
                        <div class="StepText" style="font-weight: normal;">Metodo de Pagamento</div>
                    </div>
                </div>
                <div class="Steps" style="width: 25%;">
                    <div class="TubeContainer">
                        <img class="Tube" src="' . $layout_name . '/images/vips/progress-bar-tube-green.gif">
                    </div>
                    <div class="SingleStepContainer">
                        <img class="StepIcon" src="' . $layout_name . '/images/vips/progress-bar-icon-2-green.gif">
                        <div class="StepText" style="font-weight: bold;">Informações do Pedido</div>
                    </div>
                </div>
                <div class="Steps" style="width: 25%;">
                    <div class="TubeContainer">
                        <img class="Tube" src="' . $layout_name . '/images/vips/progress-bar-tube-green-blue.gif">
                    </div>
                    <div class="SingleStepContainer">
                        <img class="StepIcon" src="' . $layout_name . '/images/vips/progress-bar-icon-3-blue.gif">
                        <div class="StepText" style="font-weight: normal;">Confirmação</div>
                    </div>
                </div>
                <div class="Steps" style="width: 25%;">
                    <div class="TubeContainer">
                        <img class="Tube" src="' . $layout_name . '/images/vips/progress-bar-tube-blue.gif">
                    </div>
                    <div class="SingleStepContainer">
                        <img class="StepIcon" src="' . $layout_name . '/images/vips/progress-bar-icon-4-blue.gif">
                        <div class="StepText" style="font-weight: normal;">Pedido Realizado</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
';
            if ($bonusPoints >= 2) {
                $main_content .= '<div class="TableContainer">
    <div class="CaptionContainer">
        <div class="CaptionInnerContainer">
            <span class="CaptionEdgeLeftTop"
                  style="background-image: url(' . $layout_name . '/images/content/box-frame-edge.gif);"></span>
            <span class="CaptionEdgeRightTop"
                  style="background-image: url(' . $layout_name . '/images/content/box-frame-edge.gif);"></span>
            <span class="CaptionBorderTop"
                  style="background-image: url(' . $layout_name . '/images/content/table-headline-border.gif);"></span>
            <span class="CaptionVerticalLeft"
                  style="background-image: url(' . $layout_name . '/images/content/box-frame-vertical.gif);"></span>
            <div class="Text">Bônus Points!</div>
            <span class="CaptionVerticalRight"
                  style="background-image: url(' . $layout_name . '/images/content/box-frame-vertical.gif);"></span>
            <span class="CaptionBorderBottom"
                  style="background-image: url(' . $layout_name . '/images/content/table-headline-border.gif);"></span>
            <span class="CaptionEdgeLeftBottom"
                  style="background-image: url(' . $layout_name . '/images/content/box-frame-edge.gif);"></span>
            <span class="CaptionEdgeRightBottom"
                  style="background-image: url(' . $layout_name . '/images/content/box-frame-edge.gif);"></span>
        </div>
    </div>
    <table class="Table1" cellpadding="0" cellspacing="0">
        <tbody>
        <tr>
            <td>
                <div class="InnerTableContainer">
                    <table style="width: 100%;">
                        <tbody>
                        <tr>
                            <td>
                                <table>
                                    <td>';
                if ($bonusPoints >= 2) {
                    $main_content .= '<div style="font-size: 20px; font-weight: bold; color: red;">Points x' . $bonusPoints . '</div>';
                }
                $main_content .= '
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<br />';
            }
            $_POST['item_quant_1'];
            $_POST['account_namev'];
            $_POST['emailv'];
            $_POST['character_namev'];
            $main_content .= '<form action="?subtopic=buypoints&action=confirmacao" method="post" enctype="application/x-www-form-urlencoded"
      xmlns:https="http://www.w3.org/1999/xhtml">
    <div class="TableContainer">
        <div class="CaptionContainer">
            <div class="CaptionInnerContainer">
                <span class="CaptionEdgeLeftTop"
                      style="background-image: url(' . $layout_name . '/images/content/box-frame-edge.gif);"></span>
                <span class="CaptionEdgeRightTop"
                      style="background-image: url(' . $layout_name . '/images/content/box-frame-edge.gif);"></span>
                <span class="CaptionBorderTop"
                      style="background-image: url(' . $layout_name . '/images/content/table-headline-border.gif);"></span>
                <span class="CaptionVerticalLeft"
                      style="background-image: url(' . $layout_name . '/images/content/box-frame-vertical.gif);"></span>
                <div class="Text">Account Information</div>
                <span class="CaptionVerticalRight"
                      style="background-image: url(' . $layout_name . '/images/content/box-frame-vertical.gif);"></span>
                <span class="CaptionBorderBottom"
                      style="background-image: url(' . $layout_name . '/images/content/table-headline-border.gif);"></span>
                <span class="CaptionEdgeLeftBottom"
                      style="background-image: url(' . $layout_name . '/images/content/box-frame-edge.gif);"></span>
                <span class="CaptionEdgeRightBottom"
                      style="background-image: url(' . $layout_name . '/images/content/box-frame-edge.gif);"></span>
            </div>
        </div>
        <table class="Table1" cellpadding="0" cellspacing="0">
            <tbody>
            <tr>
                <td>
                    <div class="InnerTableContainer">
                        <table style="width: 100%;">
                            <tbody>
                            <tr>
                                <td>
                                    <table>
                                        </tr>
                                        <tr>
                                            <td><b>Account Name:</b></td>
                                            <td><input type="hidden" value="' . $account_logged->getName() . '" name="account_namev"/>' . $account_logged->getCustomField("name") . '
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Email:</b></td>
                                            <td><input type="hidden" value="' . $account_logged->getCustomField("email") . '" name="emailv"/>' . $account_logged->getCustomField("email") . '
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <br/>

    <div class="TableContainer">
        <div class="CaptionContainer">
            <div class="CaptionInnerContainer">
                <span class="CaptionEdgeLeftTop"
                      style="background-image: url(' . $layout_name . '/images/content/box-frame-edge.gif);"></span>
                <span class="CaptionEdgeRightTop"
                      style="background-image: url(' . $layout_name . '/images/content/box-frame-edge.gif);"></span>
                <span class="CaptionBorderTop"
                      style="background-image: url(' . $layout_name . '/images/content/table-headline-border.gif);"></span>
                <span class="CaptionVerticalLeft"
                      style="background-image: url(' . $layout_name . '/images/content/box-frame-vertical.gif);"></span>
                <div class="Text">Points to buy</div>
                <span class="CaptionVerticalRight"
                      style="background-image: url(' . $layout_name . '/images/content/box-frame-vertical.gif);"></span>
                <span class="CaptionBorderBottom"
                      style="background-image: url(' . $layout_name . '/images/content/table-headline-border.gif);"></span>
                <span class="CaptionEdgeLeftBottom"
                      style="background-image: url(' . $layout_name . '/images/content/box-frame-edge.gif);"></span>
                <span class="CaptionEdgeRightBottom"
                      style="background-image: url(' . $layout_name . '/images/content/box-frame-edge.gif);"></span>
            </div>
        </div>
        <table class="Table1" cellpadding="0" cellspacing="0">
            <tbody>
            <tr>
                <td>
                    <div class="InnerTableContainer">
                        <table style="width: 100%;">
                            <tbody>
                            <tr>
                                <td>
                                    <script>
                                        // change the selected service
                                        function ChangeService(a_ServiceID) {
                                            // console.log("### ChangeService() ### a_ServiceID #" + a_ServiceID + "# a_ServiceCategoryID #" + a_ServiceCategoryID + "#");
                                            // set the ServiceID for the change country form
                                            var serviceID = $("#CC_ServiceID");
                                            serviceID.val(a_ServiceID);
                                            serviceID.attr("name", "InitialServiceID");
                                            // activate the radio button itself and set the price
                                            $("#ServiceID_" + a_ServiceID).attr("checked", "checked");
                                            $(".ServiceID_Icon_Container").css("background-color", "");
                                                                                        
                                            // activate and mark the selected icon
                                            $(".ServiceID_Icon_Selected").css("background-image", "");
                                            $("#ServiceID_Icon_Selected_" + a_ServiceID).css("background-image", "url(' . $layout_name . '/images/payment/serviceid_icon_selected.png)");
                                            return;
                                        }
                                    </script>';

                                    $countOffer=1;

                                    foreach ($config['pagseguro']['offers'] as $price => $coinCount){
                                        $main_content .= '
                                        <div class="ServiceID_Icon_Container w3-card-4" id="ServiceID_Icon_Container_' . $price . '">
                                            <div class="ServiceID_Icon_Container_Background" id=""
                                                 style="background-image:url(' . $layout_name . '/images/payment/serviceid_icon_normal.png);">
                                                <div class="ServiceID_Icon" id="ServiceID_Icon_' . $price . '" style=""
                                                     onclick="ChangeService('.$price.');">
                                                    <div class="ServiceID_Icon_New" id="ServiceID_Icon_New_' . $price . '"
                                                         style="background-image:url(' . $layout_name . '/images/payment/serviceid_' . $countOffer . '.png);">
                                                    </div>
                                                    <div class="ServiceID_Icon_Selected" id="ServiceID_Icon_Selected_' . $price . '">
                                                    </div>                                                
                                                    <label for="ServiceID_' . $price . '">
                                                        <div class="ServiceIDLabelContainer">
                                                            <div class="ServiceIDLabel">
                                                                <input id="ServiceID_' . $price . '" name="ServiceID" value="' . $price . '"
                                                                   style="display: none;"
                                                                   type="radio">' . $coinCount . ' Coins
                                                            </div>
                                                        </div>
                                                        <div class="ServiceIDPriceContainer">
                                                            <span class="ServiceIDPrice" id="PD_133">R$ '.($price/100).',00</span> *
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>';
                                        $countOffer++;
                                    };
                                    unset($countOffer);

                                    $main_content.= '                                    <script>
                                        function selectDefault(){    
                                            
                                            ChangeService(' .current(array_keys($config['pagseguro']['offers'])) . ');                                            
                                        }
                                        
                                        $(document).ready(selectDefault())                                    
                                        
                                    </script>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <small>Todos os pagamentos feito com forma de pagamento pagseguro são totalmente
                                        automatizados. São entregues os pontos assim que o pagseguro confirma a
                                        transferencia. 
                                        <br/>
                                        <b style="color: red;">Nenhum membro da equipe tem a autorização e permissão
                                            para ter acesso ao painel de pontos do servidor. Todos os mesmos são
                                            adicionados por nossos sistemas inteligentes.</b>
                                    </small>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <br/>
    <table width="100%">
        <tbody>
        <tr align="center">
            <td>
                <table border="0" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr>
                        <td style="border: 0px none;">
                            <div class="BigButton"
                                 style="background-image: url(' . $layout_name . '/images/buttons/sbutton.gif);">
                            <div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);">
                                <div class="BigButtonOver"
                                     style="background-image: url(' . $layout_name . '/images/buttons/sbutton_over.gif);"></div>
                                <input class="ButtonText" name="Continue" alt="Continue"
                                       src="' . $layout_name . '/images/vips/_sbutton_continue.gif" type="image">
                            </div>
                        </div>
                        </form>
                    </td>
                </tr>
                <tr>
                </tr>
                </tbody>
            </table>
        </td>
</table>
';
        }
        if ($buy_tipo == 3) {
            $main_content .= '<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="5" WIDTH="100%">
    <tr BGCOLOR="' . $config['site']['vdarkborder'] . '">
        <td CLASS=white><B>Banco Itau</B></td>
    </tr>
    <tr BGCOLOR=' . $config['site']['darkborder'] . '>
        <td>
            <pre>' . $config['site']['CaixaCont'] . '</pre>
        </td>
    </tr>
</TABLE>
<br/>
<center>
    <a href="javascript:void();" onclick=location.href="index.php?subtopic=latestnews">
        <div class="BigButton" style="background-image: url(' . $layout_name . '/images/buttons/sbutton.gif);">
            <div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);">
                <div class="BigButtonOver"
                     style="background-image: url(' . $layout_name . '/images/buttons/sbutton_over.gif);"></div>
                <input class="ButtonText" name="Continue" alt="Continue"
                       src="' . $layout_name . '/images/vips/_sbutton_continue.gif" type="image">
            </div>
        </div>
    </a>
</center>';
        }
        if ($buy_tipo == 2) {
            $main_content .= '<b>PayPal Shop System</b><br/><br/>
The shop costs:
<ul>
    <li> 5 BRL (for 5 points)</li>
    <li> 10 BRL (for 10 points)</li>
    <li> 20 BRL (for 20 points)</li>
    <li> 50 BRL (for 50 points)</li>
    <li> 100 BRL (for 100 points)</li>
</ul>
<br/>
<b>Here are the steps you need to make:</b> <br/>
1. A PayPal account with a required balance [5, 10, 20, 50, 100 reais] or an international creditcard. <br/>
2. Fill in your account number. <br/>
3. Click on the Buy Now button or your creditcard brand. <br/>
4. Make a transaction. <br/>
5. After the transaction 6, 14 or 31 points will be automatically added to your account. <br/>
6. Go to Item shop and use your points <br/> <br/> <br/>

<span style="color:red">If you recall the money, and your premium points can\'t be recalled your account will be deleted.</span>
<br/>
<br/>
<TABLE BORDER="0" CELLSPACING="1" CELLPADDING="5" WIDTH="100%">
    <tr BGCOLOR="' . $config['site']['vdarkborder'] . '">
        <td CLASS="white"><b>Paypal</b></td>
    </tr>
    <tr BGCOLOR=' . $config['site']['darkborder'] . '>
        <td>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                <input type="hidden" name="cmd" value="_xclick">
                <input type="hidden" name="business" value="' . $config['paypal']['email'] . '">
                <input type="hidden" name="lc" value="US">
                <input type="hidden" name="item_name" value="Premium points">
                <b>Account name/login:</b> <input type="text" name="custom" value="' . $account_logged->getCustomField("name") . '"
                                                  style="padding: 5px;" autocomplete="off" readonly="readonly">

                <select name="amount">
                    <option value="5.00">5 BRL</option>
                    <option value="10.00">10 BRL</option>
                    <option value="20.00">20 BRL</option>
                    <option value="50.00">50 BRL</option>
                    <option value="100.00">100 BRL</option>
                </select>
                <input type="hidden" name="button_subtype" value="products">
                <input type="hidden" name="currency_code" value="BRL">
                <input type="hidden" name="no_shipping" value="1">
                <input type="hidden" name="currency_code" value="BRL">
                <input type="hidden" name="notify_url" value="' . $config['server']['url'] . '/ipn.php">
                <input type="hidden" name="return" value="' . $config['server']['url'] . '">
                <input type="hidden" name="rm" value="0">
                <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
                <input type="submit" value="Submit" style="padding: 5px;"/>
            </form>
        </td>
    </tr>
</TABLE>
';
        }
    }
}
if ($action == "confirmacao") {
    if (!$logged) {

    } else {
        $main_content .= ' 
        <div id="ProgressBar">
        <div id="Headline">Confirmação</div>
        <div id="MainContainer">
            <div id="BackgroundContainer">
                <img id="BackgroundContainerLeftEnd" src="' . $layout_name . '/images/vips/stonebar-left-end.gif">
                <div id="BackgroundContainerCenter">
                    <div id="BackgroundContainerCenterImage"
                         style="background-image: url(' . $layout_name . '/images/vips/stonebar-center.gif);"></div>
                </div>
                <img id="BackgroundContainerRightEnd" src="' . $layout_name . '/images/vips/stonebar-right-end.gif">
            </div>
            <img id="TubeLeftEnd" src="' . $layout_name . '/images/vips/progress-bar-tube-left-green.gif">
            <img id="TubeRightEnd" src="' . $layout_name . '/images/vips/progress-bar-tube-right-blue.gif">
            <div id="FirstStep" class="Steps">
                <div class="SingleStepContainer">
                    <img class="StepIcon" src="' . $layout_name . '/images/vips/progress-bar-icon-0-green.gif">
                    <div class="StepText" style="font-weight: normal;">Regras da Doação</div>
                </div>
            </div>
            <div id="StepsContainer1">
                <div id="StepsContainer2">
                    <div class="Steps" style="width: 25%;">
                        <div class="TubeContainer">
                            <img class="Tube" src="' . $layout_name . '/images/vips/progress-bar-tube-green.gif">
                        </div>
                        <div class="SingleStepContainer">
                            <img class="StepIcon" src="' . $layout_name . '/images/vips/progress-bar-icon-1-green.gif">
                            <div class="StepText" style="font-weight: normal;">Metodo de Pagamento</div>
                        </div>
                    </div>
                    <div class="Steps" style="width: 25%;">
                        <div class="TubeContainer">
                            <img class="Tube" src="' . $layout_name . '/images/vips/progress-bar-tube-green.gif">
                        </div>
                        <div class="SingleStepContainer">
                            <img class="StepIcon" src="' . $layout_name . '/images/vips/progress-bar-icon-2-green.gif">
                            <div class="StepText" style="font-weight: normal;">Informações do Pedido</div>
                        </div>
                    </div>
                    <div class="Steps" style="width: 25%;">
                        <div class="TubeContainer">
                            <img class="Tube" src="' . $layout_name . '/images/vips/progress-bar-tube-green.gif">
                        </div>
                        <div class="SingleStepContainer">
                            <img class="StepIcon" src="' . $layout_name . '/images/vips/progress-bar-icon-3-green.gif">
                            <div class="StepText" style="font-weight: bold;">Confirmação</div>
                        </div>
                    </div>
                    <div class="Steps" style="width: 25%;">
                        <div class="TubeContainer">
                            <img class="Tube" src="' . $layout_name . '/images/vips/progress-bar-tube-green-blue.gif">
                        </div>
                        <div class="SingleStepContainer">
                            <img class="StepIcon" src="' . $layout_name . '/images/vips/progress-bar-icon-4-blue.gif">
                            <div class="StepText" style="font-weight: normal;">Pedido Realizado</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    Após confirmar esta etapa, você automaticamente aceitará os <a href="index.php?subtopic=donaterules" target="_blank">Termos
        de Compra</a> do servidor <b>' . $config ['server']['serverName'] . '</b>. <u>Leia e esteja de acordo com os termos.</u><br/><br/>
    
    <form target="pagseguro" method="post" action="dntpagseguro.php">
        <input type="hidden" name="accname" value="' . $account_logged->getCustomField("name") . '">    
        <input type="hidden" name="pid" value="' . $_POST['ServiceID'] . '">';

        $main_content .= '<div class="TableContainer">
        <div class="CaptionContainer">
            <div class="CaptionInnerContainer">
                <span class="CaptionEdgeLeftTop"
                      style="background-image: url(' . $layout_name . '/images/content/box-frame-edge.gif);"></span>
                <span class="CaptionEdgeRightTop"
                      style="background-image: url(' . $layout_name . '/images/content/box-frame-edge.gif);"></span>
                <span class="CaptionBorderTop"
                      style="background-image: url(' . $layout_name . '/images/content/table-headline-border.gif);"></span>
                <span class="CaptionVerticalLeft"
                      style="background-image: url(' . $layout_name . '/images/content/box-frame-vertical.gif);"></span>
                <div class="Text">Points to buy</div>
                <span class="CaptionVerticalRight"
                      style="background-image: url(' . $layout_name . '/images/content/box-frame-vertical.gif);"></span>
                <span class="CaptionBorderBottom"
                      style="background-image: url(' . $layout_name . '/images/content/table-headline-border.gif);"></span>
                <span class="CaptionEdgeLeftBottom"
                      style="background-image: url(' . $layout_name . '/images/content/box-frame-edge.gif);"></span>
                <span class="CaptionEdgeRightBottom"
                      style="background-image: url(' . $layout_name . '/images/content/box-frame-edge.gif);"></span>
            </div>
        </div>
        <table class="Table1" cellpadding="0" cellspacing="0">
            <tbody>
            <tr>
                <td>
                    <div class="InnerTableContainer">
                        <table style="width: 100%;">
                            <tbody>
                            <tr>
                                <td>
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td width="30%"><strong>Account Name:</strong></td>
                                            <td><input type="hidden" value="' . $account_logged->getName() . '" name="account_namev"/>' . $account_logged->getCustomField("name") . '
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Email:</strong></td>
                                            <td>' . $_POST['emailv'] . '</td>
                                        </tr>
                                        <tr>
                                            <td><strong>' . $config['pagseguro']['produtoNome'] . ':</strong></td>
                                            <td>' . $config['pagseguro']['offers'][$_POST['ServiceID']] . '</td> 
                                        </tr>
                                        <tr>
                                            <td><strong>Donation amount:</strong></td>
                                            <td>R$ ' . ($_POST['ServiceID'] / 100) . ',00</td>
                                        </tr>
                                        
                                        
                                        ';
        if ($bonusPoints >= 2) {
            $main_content .= '
    <tr>
    <td><strong>Bônus Points:</strong></td>
    <td>';
            $main_content .= '<b>x&nbsp;' . $bonusPoints . '</b>';
            $main_content .= '</td>
    </tr>';
        }
        $main_content .= '</table>
    </td>
    </tr>
    </tbody>
    </table>
    </div>
    </td>
    </tr>
    </tbody>
    </table>
    </div>
    <br/>
    <center>
        <table width="100%">
            <tbody>
            <tr align="center">
                <td>
                    <table border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                        <tr>
                            <td style="border: 0px none;">
    
                                <div class="BigButton"
                                     style="background-image: url(' . $layout_name . '/images/buttons/sbutton.gif);">
                                    <div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);">
                                        <div class="BigButtonOver"
                                             style="background-image: url(' . $layout_name . '/images/buttons/sbutton_over.gif);"></div>
                                        <input class="ButtonText" name="Continue" alt="Continue"
                                               src="' . $layout_name . '/images/vips/_sbutton_continue.gif" type="image">
                                    </div>
                                </div>
    
                                </form>
                            </td>
                        </tr>
                        <tr>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            </tbody>
        </table>
    </center>
    ';
    }
}
elseif ($action == "realizado") {
    $main_content .= '
<div id="ProgressBar">
<div id="Headline">Pedido Realizado</div>
<div id="MainContainer">
<div id="BackgroundContainer">
<img id="BackgroundContainerLeftEnd" src="' . $layout_name . '/images/vips/stonebar-left-end.gif">
<div id="BackgroundContainerCenter">
<div id="BackgroundContainerCenterImage" style="background-image: url(' . $layout_name . '/images/vips/stonebar-center.gif);"></div> 
</div>
<img id="BackgroundContainerRightEnd" src="' . $layout_name . '/images/vips/stonebar-right-end.gif">
</div>
<img id="TubeLeftEnd" src="' . $layout_name . '/images/vips/progress-bar-tube-left-green.gif">
<img id="TubeRightEnd" src="' . $layout_name . '/images/vips/progress-bar-tube-right-green.gif">
<div id="FirstStep" class="Steps"> 
<div class="SingleStepContainer">
<img class="StepIcon" src="' . $layout_name . '/images/vips/progress-bar-icon-0-green.gif"> 
<div class="StepText" style="font-weight: normal;">Regras da Doação</div>
</div>
</div>
<div id="StepsContainer1">
<div id="StepsContainer2">
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="' . $layout_name . '/images/vips/progress-bar-tube-green.gif">
</div>
<div class="SingleStepContainer">
<img class="StepIcon" src="' . $layout_name . '/images/vips/progress-bar-icon-1-green.gif">
<div class="StepText" style="font-weight: normal;">Metodo de Pagamento</div>
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="' . $layout_name . '/images/vips/progress-bar-tube-green.gif">
</div>
<div class="SingleStepContainer"> 
<img class="StepIcon" src="' . $layout_name . '/images/vips/progress-bar-icon-2-green.gif">
<div class="StepText" style="font-weight: normal;">Informações do Pedido</div> 
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer">
<img class="Tube" src="' . $layout_name . '/images/vips/progress-bar-tube-green.gif">
</div>
<div class="SingleStepContainer"> 
<img class="StepIcon" src="' . $layout_name . '/images/vips/progress-bar-icon-3-green.gif">
<div class="StepText" style="font-weight: normal;">Confirmação</div>
</div>
</div>
<div class="Steps" style="width: 25%;">
<div class="TubeContainer"> 
<img class="Tube" src="' . $layout_name . '/images/vips/progress-bar-tube-green.gif">
</div>
<div class="SingleStepContainer">
<img class="StepIcon" src="' . $layout_name . '/images/vips/progress-bar-icon-4-green.gif">
<div class="StepText" style="font-weight: bold;">Pedido Realizado</div> 
</div>
</div>
</div>
</div>
</div>
</div>
<div class="TableContainer">
<div class="CaptionContainer">
<div class="CaptionInnerContainer"> 
<span class="CaptionEdgeLeftTop" style="background-image: url(' . $layout_name . '/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightTop" style="background-image: url(' . $layout_name . '/images/content/box-frame-edge.gif);"></span>
<span class="CaptionBorderTop" style="background-image: url(' . $layout_name . '/images/content/table-headline-border.gif);"></span> 
<span class="CaptionVerticalLeft" style="background-image: url(' . $layout_name . '/images/content/box-frame-vertical.gif);"></span> 
<div class="Text">Pedido Realizado</div> 
<span class="CaptionVerticalRight" style="background-image: url(' . $layout_name . '/images/content/box-frame-vertical.gif);"></span>
<span class="CaptionBorderBottom" style="background-image: url(' . $layout_name . '/images/content/table-headline-border.gif);"></span> 
<span class="CaptionEdgeLeftBottom" style="background-image: url(' . $layout_name . '/images/content/box-frame-edge.gif);"></span> 
<span class="CaptionEdgeRightBottom" style="background-image: url(' . $layout_name . '/images/content/box-frame-edge.gif);"></span> 
</div>
</div>
<table class="Table1" cellpadding="0" cellspacing="0"> 
<tbody>
<tr>
<td>
<div class="InnerTableContainer"> 
<table style="width: 100%;">
<tbody>
<tr>
<td>
<table width="100%" border="0" cellspacing="0" cellpadding="3">
  <tr>
    <td width="8%" valign="top"><img src="' . $layout_name . '/images/account/account-status_green.gif" width="52" height="52" /></td>
    <td width="86%" align="left"><div style="font-weight:bold;font-size:16px; margin-bottom: -10px;">Pedido realizado com sucesso!<br /></div>
    <br />Após recebermos a confirmação do pagamento, a entrega de seus '.$config['pagseguro']['produtoNome'].' é feita automaticamente. <br />
    Agradecemos por sua contribuição!<br />
    <br />Att, Equipe '.$config ['server']['serverName'] .'.</td>
  </tr>
</table>
<p><b style="color: red">Lembramos da importância de não tentar nenhum tipo de fraude no pagamento, o sistema detectará automaticamente e suspenderá sua conta para averiguação pela equipe!</b></p>
</td>
</tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<br />
<center>
<table border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td style="border: 0px none;">
<div class="BigButton" style="background-image: url(' . $layout_name . '/images/buttons/sbutton.gif);">
<div onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="BigButtonOver" style="background-image: url(' . $layout_name . '/images/buttons/sbutton_over.gif);"></div>
<form action="index.php?subtopic=latestnews" method="post">
<input class="ButtonText" name="Continue" alt="Continue" src="' . $layout_name . '/images/buttons/_sbutton_back.gif" type="image">
</form>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</center>';
}
?>