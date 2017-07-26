<?php
/**
 * Created by PhpStorm.
 * User: jlcvp - leu
 * Date: 07/06/17
 * Time: 21:22
 */

require 'config/config.php';

// comment to show E_NOTICE [undefinied variable etc.], comment if you want make script and see all errors
error_reporting(E_ALL ^ E_STRICT ^ E_NOTICE);

// true = show sent queries and SQL queries status/status code/error message
define('DEBUG_DATABASE', false);

define('INITIALIZED', true);

if (!defined('ONLY_PAGE'))
    define('ONLY_PAGE', true);

// check if site is disabled/requires installation
include_once('./system/load.loadCheck.php');

// fix user data, load config, enable class auto loader
include_once('./system/load.init.php');

// DATABASE
include_once('./system/load.database.php');
if (DEBUG_DATABASE)
    Website::getDBHandle()->setPrintQueries(true);
// DATABASE END

/*error example:
{
    "errorCode":3,
    "errorMessage":"Account name or password is not correct."
}*/

//error function
function sendError($error_msg,$code=3){
    $retError = array();
    $retError["errorCode"] = $code;
    $retError["errorMessage"] = $error_msg;
    die(json_encode($retError));
}


$request_body = file_get_contents('php://input');
$result = json_decode($request_body, true);

$acc = $result["accountname"];
$password = $result["password"];

$query = $SQL->prepare("SELECT `id`,`premdays` FROM `accounts` WHERE `name` = :acc AND `password` = SHA1(:pass) LIMIT 1");

$query->bindValue(":acc", $acc);
$query->bindValue(":pass", $password);

$dbResource = $query->execute();

if (!$dbResource) {
    sendError("failed to get account.");
}

$dbRet = $query->fetch();
if (!dbRet) {
    sendError("failed to fetch account data");
}

$accId = $dbRet["id"];
$premdays = $dbRet["premdays"];

if (!$accId) {
    sendError("Account name or password is not correct.");
}

$dbResource = $SQL->query("SELECT `name`,`sex`,`lastlogin` FROM `players` WHERE `account_id` = $accId");

if (!$dbResource) {
    sendError("failed to get characters.");
}

$accArray = array();

$lastlogin=0;

while ($dbRet = $dbResource->fetch()) {
    $dict = array(
        "worldid" => 0,
        "name" => $dbRet["name"],
        "ismale" => (($dbRet["sex"]==1)?true:false),
        "tutorial" => (($dbRet["lastlogin"]>0) ? false:true)
    );
    $accArray[] = $dict;
    if($lastlogin<$dbRet["lastlogin"]){
        $lastlogin = $dbRet["lastlogin"];
    }
}

$data = array();

//TODO: Melhorar estrutura de dado aqui e preencher com os dados reais da account
$session = array(
    "sessionkey" => $acc . "\n" . $password,
    "lastlogintime" => $lastlogin,
    "ispremium" => ($premdays > 0 || $config["server"]["freePremium"]) ? true : false,
    "premiumuntil" => ($freePremium) ? (time() + 365 * 86400) : (time() + $premdays * 86400),
    "status" => "active"
);

$data["session"] = $session;

$playerData = array();

//TODO: melhorar estrutura de dado aqui para permitir multiple worlds
$world = array(
    "id" => 0,
    "name" => $config["server"]["serverName"],
    "externaladdress" => $config["server"]["ip"],
    "externalport" => $config["server"]["gameProtocolPort"],
    "previewstate" => 0,
    "location" => "BRA",
    "externaladdressunprotected" => $config["server"]["ip"],
    "externaladdressprotected" => $config["server"]["ip"]
);

$worlds = array($world);
$playerData["worlds"] = $worlds;
$playerData["characters"] = $accArray;


$data["playdata"] = $playerData;

echo json_encode($data);
