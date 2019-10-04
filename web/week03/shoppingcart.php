<html>
<head>
<title>Prove Assignment 03</title>
<link rel="stylesheet" type="text/css" href="week03.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body id="page">
<center><h1 class="center">Welcome to the University Bookstore</h1>
<h2 class="center">Where you can find all your back-to-school necessities!</h2>
<form action="checkout.php" method="post">
<h3>Please select the number of each item desired: </h3><br>
<center><div>
    <p>Items currently in your cart: <br>
    <?php $_POST["hat"] ?>
    <?php $_POST["scarf"] ?>
    <?php $_POST["socks"] ?>
    <?php $_POST["hoodie"] ?>
</div></center>
<input id="button" type="button" value="Return to item page">
<input id="submit" type="submit" value="Proceed to checkout"></center>
</form>
</body>
</html>