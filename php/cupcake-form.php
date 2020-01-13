<?php
include "cupcakeList.php";
echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0,
            maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <link rel=\"stylesheet\" href=\"styles\cupcake-form-styles.css\">
    <title>Cupcakes</title>
</head>
<body>
    <h1>Cupcake Fundraiser</h1>
    <form action=\"#\" method=\"post\"
          name=\"cupcake-form\" id=\"cupcake-form\">
        <label for=\"full-name\">
            Your name:<span class=\"error\" $errName>*required</span><br>
            <input type=\"text\" name=\"full-name\" id=\"full-name\" value=\"$nameValue\">
        </label><br>
        <br>
        <p>Cupcake flavors:<span class=\"error\" $errCupcakeList>*$errMessage</span></p>";
    foreach ($cupcakes AS $k => $v) {
        echo "<input type='checkbox' name='cupcakes[]' value='$v' >".$v."<br>";
    }
    echo '<br>
        <input type="submit" name="submit-btn" id="submit-btn" value="Order">
    </form>
</body>
</html>';

