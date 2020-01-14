<?php
/**
 *  This page uses the current stage to set variable for the form
 *  view. This file includes pages/cupcake-form.php. If a user
 *  arrives at this page without being "staged" in the index, will
 *  be sent to rcox.greenriverdev.com/IT328/cupcakes.
 *
 * @author     Robert Cox
 * @version    1.0.0
 * @link       http://rcox.greenriverdev.com/IT328/cupcakes
 * @since      1/13/2020
 */

// setting baseline values to be changed according to "stage"
$nameValue = "";
$errName = "hidden";
$errCupcakeList = "hidden";
$errMessage = "required";

//if staging is complete, show page base on the stage after setting variables
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



