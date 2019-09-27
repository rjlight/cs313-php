<html>
<head>
<title>Personal Homepage - Assignment 02</title>
<script src="hw02.js"></script>
<link rel="stylesheet" type="text/css" href="hw02.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body>
<h1>Welcome to Rachel's Homepage!</h1>
<h2>This page is about baking, someting I love</h2>
    <p>Often the question is asked, "what do you live for?" While I live for many
    things, I <i>wake up</i>for breakfast!</p>
<h3>Normal mornings I eat oatmeal, pretty plain with just cinnemon. But on the 
    weekends I make pancakes, waffles, muffins, or whatever looks best on 
    Pinterest</h3>
<p id="yay"></p>
<img onmouseover="pan()" src="pancakes.PNG" alt="Pancakes" id="pancakes" class="solid"/>
<img onmouseover="waf()" src="waffles.PNG" alt="waffles" id="waffles" class="solid"/>
<img onmouseover="muf()" src="muffins.PNG" alt="Muffins" id="muffins" class="solid"/>
<p>Please see link for other 
<a href="hw02pg2.php">assignments</a>
</p>
<footer>Date and time:
<?php echo date("D M d, Y G:i a"); ?>
</footer>
</body>
</html>