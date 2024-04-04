
<!DOCTYPE html>
<html>
<head>
    <title>Cupcake Fundraiser</title>
</head>
<body>
<h1>Cupcake Fundraiser</h1>
<form action="process.php" method="post">
    <label for="username">Your Name:</label><br>
    <input type="text" id="username" name="username" required><br><br>

    <label>Cupcake flavors:</label><br>
    <input type="checkbox" id="The Grasshopper" name="flavors[]">
    <label for="The Grasshopper">The Grasshopper</label><br>
    <input type="checkbox" id="Whisky Maple Bacon" name="flavors[]">
    <label for="Whisky Maple Bacon">Whiskey Maple Bacon</label><br>
    <input type="checkbox" id="Carrot Walnut" name="flavors[]">
    <label for="strawberry">Carrot Walnut</label><br>
    <input type="checkbox" id="Salted Caramel Cupcake" name="flavors[]">
    <label for="Salted Caramel Cupcake">Salted Caramel Cupcake</label><br>
    <input type="checkbox" id="Red Velvet" name="flavors[]">
    <label for="Red Velvet">Red Velvet</label><br><br>
    <input type="checkbox" id="Lemon Drop" name="flavors[]">
    <label for="Lemon Drop">Lemon Drop</label><br><br>
    <input type="checkbox" id="Tiramisu" name="flavors[]">
    <label for="Tiramisu">Tiramisu</label><br><br>

    <input type="submit" value="Order">
</form>
</body>
</html>
