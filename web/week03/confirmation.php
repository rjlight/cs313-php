<html>
<head>
<title>Prove Assignment 03 - Confirmation</title>
<link rel="stylesheet" type="text/css" href="week03.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body id="page">
<center><h1 class="center">Thank you for your order!</h1>
<h2 class="center">Your items will be shipped out shortly</h2>
<center><div>        
     <?php
        $_SESSION['address'] = $_POST['address'];
        $address = $_SESSION['address'];
        $items = $_SESSION['items'];

        echo("This is your shipping address:</br>");
        echo $address. "<br><br>";
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
            echo("<br>Please check the box next to each item if you would like to remove it from your cart.");
        } ?>
</div></center>
<h3>Please send an email to university.support@email.edu for any questions!</h3>
</body>
</html>