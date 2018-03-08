<?php
/**
 * Created by PhpStorm.
 * User: denismoroz
 * Date: 08.03.18
 * Time: 10:54
 */

session_start();

$htmlDisplay=<<<EOG
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello!</title>
</head>
<body>
Hello, 
EOG;

$htmlDisplay.=print_r($_SESSION["username"],1);

$htmlDisplay.='!</body></html>';

echo $htmlDisplay;



