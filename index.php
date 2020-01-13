<!--hi hup-->
<?php
session_start();
include "php/errors.php";
include "php/cupcakeList.php";
if (empty($_POST)) {
    $_POST["stage"] = 1;
    include "pages/testPage.php";
} elseif ($_POST["full-name"] == "") {
    if (!isset($_POST["cupcakes"])) {
        $_POST["stage"] = 5;
    } else {
        $_POST["stage"] = 2;
    }
    include "pages/testPage.php";
} elseif (!isset($_POST["cupcakes"])) {
    $_POST["stage"] = 3;
    include "pages/testPage.php";
} else {
    $isValidCupcake = true;
    foreach ($_POST["cupcakes"] AS $cupcake) {
        if (!in_array($cupcake, $cupcakes)) {
            $isValidCupcake = false;
        }
    }

    if (!$isValidCupcake){
        $_POST["stage"] = 4;
        include "pages/testPage.php";
    } else {
        foreach ($_POST AS $k => $v) {
            if (is_array($v)) {
                foreach ($v AS $item){
                    echo $k." => ".$item."<br>";
                }
            } else {
                echo $k." => ".$v."<br>";
            }
        }
    }
}

