<?php
/**
 *  A landing page for rcox.greenriverdev.com/IT328/cupcakes. This file
 *  determines the "stage" a user is in when they arrive to the site. The
 *  staging file, php/staging.php, is loaded to determine how to load the
 *  page. Form posts to self and validation determines the "stage".
 *
 * @author     Robert Cox
 * @version    1.0.0
 * @link       http://rcox.greenriverdev.com/IT328/cupcakes
 * @since      1/13/2020
 */
//load resources
include "php/errors.php";
include "php/cupcakeList.php";

if (empty($_POST)) {  // if user arrived for the first time
    $_POST["stage"] = 1;
    include "php/staging.php";
} elseif ($_POST["full-name"] == "") { // if name input is empty
    if (!isset($_POST["cupcakes"])) { // and if no cupcakes were selected
        $_POST["stage"] = 5;
    } else {  //<----------------------- if just name input is empty
        $_POST["stage"] = 2;
    }
    include "php/staging.php";
} elseif (!isset($_POST["cupcakes"])) {  //if just no cupcakes were selected
    $_POST["stage"] = 3;
    include "php/staging.php";
} else {  //<---------------------------- if all required inputs filled
    //validate checkbox values haven't been change
    $isValidCupcake = true;
    foreach ($_POST["cupcakes"] AS $cupcake) {
        if (!in_array($cupcake, $cupcakes)) {
            $isValidCupcake = false;
        }
    }
    // if checkbox values not valid
    if (!$isValidCupcake){
        $_POST["stage"] = 4;
        include "php/staging.php";
    } else {
        //all inputs valid, load the thank you page
        include "pages/thank-you-page.php";
    }
}
