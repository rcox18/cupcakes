<?php
include "htmlHead.php";
$orderTotal = 0.0;
$CUPCAKE_COST = 3.5;
$nameValue = $_POST["full-name"];

echo "<p>Thank you, $nameValue, for your order!</p>
    Order Summary:
    <ul>";
foreach ($_POST["cupcakes"] AS $k => $v){
    $orderTotal+=$CUPCAKE_COST;
    echo "<li>$v</li>";
}
echo "</ul>";
echo "Order Total:  {$orderTotal}0
</body>
</html>";