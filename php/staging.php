<?php
$nameValue = "";
$errName = "hidden";
$errCupcakeList = "hidden";
$errMessage = "required";

//if staging is complete, show page base on the stage
if (isset($_POST["stage"])) {
    if ($_POST["stage"] == 1){
        include "pages/cupcake-form.php";
    } elseif ($_POST["stage"] == 2) {
        $errName = "";
        include "pages/cupcake-form.php";
    }elseif ($_POST["stage"] == 5) {
        $errName = "";
        $errCupcakeList = "";
        include "pages/cupcake-form.php";
    } elseif ($_POST["stage"] == 3) {
        $nameValue = $_POST["full-name"];
        $errCupcakeList = "";
        include "pages/cupcake-form.php";
    } elseif ($_POST["stage"] == 4) {
        $errMessage = "please provide valid inputs";
        $nameValue = $_POST["full-name"];
        $errCupcakeList = "";
        include "pages/cupcake-form.php";
    }
} else {
    //if staging has not been completed, return to index.
    header("location: ../");
}



