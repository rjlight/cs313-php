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
    <input type="checkbox" name="items[]"value="Hat $15.99"> Hat $15.99<br>
    <input type="button" class="button" value="Add items to cart" onclick="addItem(Hat)"><br><br>
    <input type="checkbox" name="items[]" value="Scarf $13.99"> Scarf $13.99<br>
    <input type="button" class="button" value="Add items to cart" onclick="addItem(Hat)"><br><br>
    <input type="checkbox" name="items[]" value="Socks $9.99"> Socks $9.99<br>
    <input type="button" class="button" value="Add items to cart" onclick="addItem(Hat)"><br><br>
    <input type="checkbox" name="items[]" value="Hoodie $34.99"> Hoodie $34.99<br>
    <input type="button" class="button" value="Add items to cart" onclick="addItem(Hat)"><br>
</div></center>
<input id="submit" type="submit" value="View my cart"></center>
</form>
<?php 

 // starting the session
 session_start();

 //if (isset($_POST['items'])) { 
 //   $_SESSION['items'] = $_POST['items'];
    echo "<center><h4>Hat added to cart!</h4></center>"
 //} else {
   //  echo "<center><h4></h4></center>"
 //}
?> 
</body>
</html>