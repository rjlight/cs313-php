<?php
session_start();
?>
<html>
<head>
<title>Prove Assignment 03 - Shopping Cart</title>
<link rel="stylesheet" type="text/css" href="week03.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body id="page">
<center><h1 class="center">Shopping Cart</h1>
<h2>Items currently in your cart: </h2>
<form action="checkout.php" method="post">
<center><div>        
     <?php
        //$_SESSION['items'] = $_POST['items'];
        $items = $_SESSION['items'];

        if(empty($items)) 
        {
            echo("You didn't select any items.");
        } 
        else
        {
            $N = count($items);

            echo("You selected $N items: <br><br>");

            foreach($items as $selected){
            echo "<input type=\"checkbox\" name=\"removeItems[]\"value=\"" . $selected ."\">" . $selected ."<br><br>";
            }
            echo("<br>If you would like to remove an item from your cart, please check the box.");
        } 
        ?>
</div></center>
<a id="button" href="javascript:history.go(-1)">Return to item page</a>
<input id="submit" type="submit" value="Proceed to checkout"></center>
</form>
</body>
</html>