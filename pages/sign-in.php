<?php
/*
* GNU GENERAL PUBLIC LICENSE
* Version 3, 29 June 2007
*
* Copyright (C) 2007 Free Software Foundation, Inc. <https://fsf.org/>
* Everyone is permitted to copy and distribute verbatim copies
* of this license document, but changing it is not allowed.
* https://www.gnu.org/licenses/gpl-3.0.txt
*/

/*
* By Paulo Roberto Júnior
*/

/* Required for loggin session */
session_start();

/* set header */
header("Content-Type: application/json; charset=utf-8");

/* include files */
require_once('../handler-sql.php');
#require_once('../location.php');

/* variables */
$response = array();

/*
* requisição incorreta
*/
if (!isset($_POST["user"]) || !isset($_POST["pass"])) {
    $response["response"] = "incorrect request nickname or password not entered.";
    echo json_encode($response);
    exit;
}
/* 
* validation to prevent 
* injection attacks
*/
$nick = addslashes($_POST["user"]);
$pass = $_POST["pass"];
$remote_addr = $_SERVER["REMOTE_ADDR"];

if ( !$ip = HandlerSQL::Get_IP_By_User($nick) ) {
    $response["response"] = "Internal Error 403.";
    echo json_encode($response);
    exit;
}

$account = HandlerSQL::List_User($nick, $pass);

if ($account) {
    $response["status"] = "ok";
    $_SESSION["user-u"]["nick"] = $account["nick"];
} else {
    $response["status"] = "no";
}

$consulta = HandlerSQL::Update_Brute_Force($nick);

if ($consulta >= 10000) {
    $response["response"] = "se a classe operaria tudo produz a ela tudo pertence.";
    $response["token"] = "E2B520EEB2BCD332DCD107BC8ED3AE07F606F6FD5B35B113BC7C3808B7A4D222";
} else {
    $response["response"] = "no";
}

echo json_encode($response);

?>