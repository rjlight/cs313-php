<html>
<head>
<title>Prove Assignment 03 - Shopping Cart</title>
<link rel="stylesheet" type="text/css" href="week03.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body id="page">
<center><h1 class="center">Shopping Cart</h1>
<form action="checkout.php" method="post">
<center><div>
    Items currently in your cart: <br><br>
        
     <?php
        $items = $_POST['items'];
        if(empty($items)) 
        {
            echo("You didn't select any items.");
        } 
        else
        {
            $N = count($items);

            echo("You selected $N items: <br><br>");

            foreach($_POST['items'] as $selected){
            echo "<input type=\"checkbox\" name=\"removeItems[]\"value=\"" . $selected ."\">" . $selected ."</br>";
            }
            echo("Please check the box next to each item if you would like to remove it from your cart. ")
        } ?>
</div></center>
<a id="button" href="week03.php">Return to item page</a>
<input id="submit" type="submit" value="Proceed to checkout"></center>
</form>
</body>
</html>