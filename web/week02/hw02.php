<html>
<head>
<title>Personal Homepage - Assignment 02</title>
<script src="hw02.js"></script>
<link rel="stylesheet" type="text/css" href="hw02.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body>
<h1>Welcome to Rachel's Homepage</h1>
<h2>This page is about baking, something I love to do</h2>
    <p>Often the question is asked, "what do you live for?" While I live for many
    things, I <ins>wake up</ins> for breakfast!</p>
<h3>Weekend breakfast are my favoite; waffles, pancakes, muffins, or whatever looks best on 
    Pinterest.</h3>
<p id="yay"></p>
<center>
    <img src="waffles.PNG" alt="waffles" id="waffles" class="solid" onclick="waf()"/>
    <img src="pancakes.PNG" alt="Pancakes" id="pancakes" class="solid" onmouseover="pan()"/>
    <img onmouseover="muf()" src="muffins.PNG" alt="Muffins" id="muffins" class="solid"/>
</center>
<p>Baked sweets hold a special place in my heart.</p>
<h3>When I need a break from school, I've been known to whip up a batch of chocolate chip cookies,
    banana bread, or something new like pomegranate scones!</h3>
<center>
    <img onclick="cook()" src="cookies.PNG" alt="Cookies" id="cook" class="solid"/>
    <img onmouseover="bread()" src="bread.PNG" alt="Banana Bread" id="bread" class="solid"/>
    <img onmouseover="scone()" src="scone.PNG" alt="Scones" id="scone" class="solid"/>
</center>
<p>We can't forget the wonderful homemade breads!</p>
<h3>When I have a bit more time, I love to make wheat bread, bagels or rolls.</h3>
<center>
    <img onclick="whe()" src="wheat.PNG" alt="Wheat Bread" id="wheat" class="solid"/>
    <img onmouseover="bag()" src="bagel.PNG" alt="Bagels" id="bagel" class="solid"/>
    <img onmouseover="roll()" src="rolls.PNG" alt="Rolls" id="rolls" class="solid"/>
</center>
<p>Please see link for other 
<a href="hw02pg2.php">assignments</a>
</p>
<footer>Date and time:
<?php echo date("D M d, Y G:i a"); ?>
</footer>
</body>
</html>