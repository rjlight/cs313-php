<html>
<head>
<title>Sign In Page - Music Students</title>
<link rel="stylesheet" type="text/css" href="musicStyle.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body id="pageOne">
<div class="border">
    <h1 class="center">Please sign-in to your account:</h1>
    <form action="accountInfo.php" method="post">
    <div class="input">
        Username: <input type="text" name="username"><br><br>
        Password:  <input type="password" name="password"><br><br>
        <p>Don't have an account yet? Make one <a href="editAccount.php">here</a></p>
    </div>
    <input id="submit" type="submit" value="Sign-In">
    <button><a href="adminSignIn.php">Admin</a></button>
    </form>
    <form action="adminSignIn.php">
        <input id="button" type="submit" value="Admin">
    </form>
</div>
</body>
</html>