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
    <p>Items currently in your cart: <br>
        
     <?php $items = $_POST['items'];
        if(empty($items)) 
        {
            echo("You didn't select any items.");
        } 
        else
        {
            $N = count($items);

            echo("You selected $N items: <br>");

            foreach($_POST['items'] as $selected){
            echo "You have selected: ". $selected."</br>";
            }
        } ?>
</div></center>
<input id="button" type="button" value="Return to item page">
<input id="submit" type="submit" value="Proceed to checkout"></center>
</form>
</body>
</html>