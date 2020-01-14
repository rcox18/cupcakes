<?php
include "cupcakeList.php";
include "htmlHead.php";
echo "<h1>Cupcake Fundraiser</h1>
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

