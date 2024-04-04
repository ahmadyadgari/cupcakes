<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $flavors = $_POST['flavors'];

    echo "<h1>Thank you, $username, for your order!</h1>";
    echo "<h2>Order Summary: </h2>";
    echo "<ul>";
    foreach ($flavors as $flavor) {
        echo "<li>" . htmlspecialchars($flavor) . "</li>";
    }
    echo "</ul>";
}
?>
