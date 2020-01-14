<?php
include "php/errors.php";
include "php/cupcakeList.php";
if (empty($_POST)) {
    $_POST["stage"] = 1;
    include "php/staging.php";
} elseif ($_POST["full-name"] == "") {
    if (!isset($_POST["cupcakes"])) {
        $_POST["stage"] = 5;
    } else {
        $_POST["stage"] = 2;
    }
    include "php/staging.php";
} elseif (!isset($_POST["cupcakes"])) {
    $_POST["stage"] = 3;
    include "php/staging.php";
} else {
    $isValidCupcake = true;
    foreach ($_POST["cupcakes"] AS $cupcake) {
        if (!in_array($cupcake, $cupcakes)) {
            $isValidCupcake = false;
        }
    }

    if (!$isValidCupcake){
        $_POST["stage"] = 4;
        include "php/staging.php";
    } else {
        include "pages/thank-you-page.php";
    }
}

