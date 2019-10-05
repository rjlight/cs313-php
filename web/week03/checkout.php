<html>
<head>
<title>Prove Assignment 03</title>
<link rel="stylesheet" type="text/css" href="week03.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body id="page">
<center><h1 class="center">Checkout</h1>
<h2 class="center">Please enter shipping address information below:</h2>
<form action="<?php echo htmlspecialchars($_SERVER["confirmation.php"]);?>" method="post">
<center><div>
  <p>Shipping address:</p>
  <textarea name="address" rows="4" cols="40"></textarea><br>
</div></center>
<a id="button" href="shoppingcart.php">Back to shopping cart</a>
<input id="submit" type="submit" value="Place order"></center>
</form>
</body>
</html>
<?php
  $remove = $_POST['removeItems'];
  if(empty($remove)) {
  } else {
    foreach($remove as $r){
      foreach($_POST['removeItems'] as $selected) {
        if($selected == $r) {
          $selected = "";
        } 
      }
    }
  }
?>