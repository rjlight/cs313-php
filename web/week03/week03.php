<html>
<head>
<title>Prove Assignment 03</title>
<link rel="stylesheet" type="text/css" href="week03.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body id="page">
<center><h1 class="center">Welcome to the University Bookstore</h1>
<h2 class="center">Where you can find all your back-to-school necessities!</h2>
<form action="week03.php" method="post">
<h3>Please select the number of each item desired: </h3><br>
<center><div>
    <input type="checkbox" name="items[]" value="Hat"> Hat $15.99<br>
    <input type="button" class="button" value="Add items to cart" onclick="addItem(Hat)"><br><br>
    <input type="checkbox" name="items[]" value="Scarf" > Scarf $13.99<br>
    <input type="button" class="button" value="Add items to cart" onclick="addItem(Hat)"><br><br>
    <input type="checkbox" name="items[]" value="Socks"> Socks $9.99<br>
    <input type="button" class="button" value="Add items to cart" onclick="addItem(Hat)"><br><br>
    <input type="checkbox" name="items[]" value="Hoodie"> Hoodie $34.99<br>
    <input type="button" class="button" value="Add items to cart" onclick="addItem(Hat)"><br>
</div></center>
<input id="submit" type="submit" value="Proceed to checkout"></center>
</form>
<?php 

 // starting the session
 session_start();

 //if (isset($_POST['Hat'])) { 
 //$_SESSION['Hat'] = $_POST['Hat'];
 echo "<h4>Hat added to cart!</h4>"
 //} 
?> 
</body>
</html>