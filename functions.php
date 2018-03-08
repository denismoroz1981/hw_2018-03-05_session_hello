<?php
/**
 * Created by PhpStorm.
 * User: denismoroz
 * Date: 08.03.18
 * Time: 10:49
 */



if (!empty($_POST)) {
    if (!empty($_POST["username"])) {

        $_SESSION["username"] = $_POST["username"];
        header('location: '.'hello.php');



    } else {
        echo "<p> Enter username! </p>";
        include_once ("index.php");


    }


}



