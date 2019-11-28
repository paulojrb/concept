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

/* variables */
$response = array();

/*
* requisição incorreta
*/
if ( !isset($_POST["cmd"]) ) {
    $response["response"] = 'incorrect post "cmd" not entered.';
    echo json_encode($response);
    exit;
}
/* 
* validation to prevent 
* injection attacks
*/
$nick = addslashes($_POST["cmd"]);

switch ($nick) {
    case 'token':
        $response["response"] = "95DDFD50D02AA441B347A64DBAC21524BAD0618DD4F53B3B8792342D00264913";
        break;
    default:
        $response["response"] = $nick;
}

echo json_encode($response);

?>