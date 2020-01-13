<?php
$nameValue = "";
$errName = "hidden";
$errCupcakeList = "hidden";
$errMessage = "required";
if (isset($_POST["stage"])) {
    if ($_POST["stage"] == 1){
        include "php/cupcake-form.php";
    } elseif ($_POST["stage"] == 2) {
        $errName = "";
        include "php/cupcake-form.php";
    }elseif ($_POST["stage"] == 5) {
        $errName = "";
        $errCupcakeList = "";
        include "php/cupcake-form.php";
    } elseif ($_POST["stage"] == 3) {
        $nameValue = $_POST["full-name"];
        $errCupcakeList = "";
        include "php/cupcake-form.php";
    } elseif ($_POST["stage"] == 4) {
        $errMessage = "please provide valid inputs";
        $nameValue = $_POST["full-name"];
        $errCupcakeList = "";
        include "php/cupcake-form.php";
    }
} else {
    header("location: ../");
}



