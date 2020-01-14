<?php
/**
 *  This page loads the cupcake form thank you page.
 *
 * @author     Robert Cox
 * @version    1.0.0
 * @link       http://rcox.greenriverdev.com/IT328/cupcakes
 * @since      1/13/2020
 */

//gathering resources and setting some values
include "php/htmlHead.php";
$orderTotal = 0.0;
$CUPCAKE_COST = 3.5;
$nameValue = $_POST["full-name"];

echo "<p>Thank you, $nameValue, for your order!</p>
    Order Summary:
    <ul>";
// adding each selection to the confirmation, incrementing order total
foreach ($_POST["cupcakes"] AS $k => $v){
    $orderTotal+=$CUPCAKE_COST;
    echo "<li>$v</li>";
}
echo "</ul>";
echo "Order Total:  $".number_format($orderTotal,2)."
</body>
</html>";