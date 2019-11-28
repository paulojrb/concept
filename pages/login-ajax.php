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
//require_once('../php/handler-mysql.php');
//require_once('../location.php');

/* variables */
$ip = $_SERVER["REMOTE_ADDR"];
$response = array();

/*
* verifica se o ip foi cadastrado
*/

/*
* requisição incorreta
*/
if (!isset($_POST["nick"]) || !isset($_POST["pass"])) {
    $response["error"]["msg"] = "incorrect request nickname or password not entered.";
    $response["error"]["cod"] = 400;
    echo json_encode($response);
    exit;
}
/* 
* validation to prevent 
* injection attacks
*/
$nick = addslashes($_POST["nick"]);
$pass = addslashes($_POST["pass"]);
$pass = hash('sha256', $pass);

$response["response"] = "no";

sleep( 1.5 );
echo json_encode($response);

?>