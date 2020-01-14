<?php
/**
 *  This page loads the cupcake form based on the staging done
 *  in php/staging.php.
 *
 * @author     Robert Cox
 * @version    1.0.0
 * @link       http://rcox.greenriverdev.com/IT328/cupcakes
 * @since      1/13/2020
 */

// load resources
include "php/cupcakeList.php";
include "php/htmlHead.php";
// display form
echo "<h1>Cupcake Fundraiser</h1>
    <form action=\"#\" method=\"post\"
          name=\"cupcake-form\" id=\"cupcake-form\">
        <label for=\"full-name\">
            Your name:<span class=\"error\" $errName>*required</span><br>
            <input type=\"text\" name=\"full-name\" id=\"full-name\" value=\"$nameValue\">
        </label><br>
        <br>
        <p>Cupcake flavors:<span class=\"error\" $errCupcakeList>*$errMessage</span></p>";
        //generate li's from php/cupcakeList.php
        foreach ($cupcakes AS $k => $v) {
            echo "<input type='checkbox' name='cupcakes[]' value='$v' >".$v."<br>";
        }
        echo '<br>
        <input type="submit" name="submit-btn" id="submit-btn" value="Order">
    </form>
</body>
</html>';

