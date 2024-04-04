<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $flavors = $_POST['flavors'];
    $costPerCupcake = 3.50;
    $totalCost = count($flavors) * $costPerCupcake;

    echo "<h1>Thank you, $username, for your order!</h1>";
    echo "<h2>You have ordered the following cupcakes:</h2>";
    echo "<ul>";
    foreach ($flavors as $flavor) {
        echo "<li>" . htmlspecialchars($flavor) . "</li>";
    }
    echo "</ul>";
    printf("<h3>Your total is: $%.2f</h3>", $totalCost);
}
?>

