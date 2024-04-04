<!DOCTYPE html>
<html>
<head>
    <title>Cupcake Fundraiser</title>
</head>
<body>
<h1>Cupcake Fundraiser</h1>
<form action="process.php" method="post">
    <label for="username">Your Name:</label><br><br>
    <input type="text" id="username" name="username" placeholder="Please put your name." required><br>

    <h2>Cupcake flavors:</h2><br>
    <input type="checkbox" id="The Grasshopper" name="flavors[]" value="The Grasshopper">
    <label for="The Grasshopper">The Grasshopper</label><br>
    <input type="checkbox" id="Whisky Maple Bacon" name="flavors[]" value="Whiskey Maple Bacon">
    <label for="Whisky Maple Bacon">Whiskey Maple Bacon</label><br>
    <input type="checkbox" id="Carrot Walnut" name="flavors[]" value="Carrot Walnut">
    <label for="Carrot Walnut">Carrot Walnut</label><br>
    <input type="checkbox" id="Salted Caramel Cupcake" name="flavors[]" value="Salted Caramel Cupcake">
    <label for="Salted Caramel Cupcake">Salted Caramel Cupcake</label><br>
    <input type="checkbox" id="Red Velvet" name="flavors[]" value="Red Velvet">
    <label for="Red Velvet">Red Velvet</label><br>
    <input type="checkbox" id="Lemon Drop" name="flavors[]" value="Lemon Drop">
    <label for="Lemon Drop">Lemon Drop</label><br>
    <input type="checkbox" id="Tiramisu" name="flavors[]" value="Tiramisu">
    <label for="Tiramisu">Tiramisu</label><br><br>

    <input type="submit" value="Order">
</form>
</body>
</html>
