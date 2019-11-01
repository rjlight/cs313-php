<html>
<head>
<title>Sign In Page - Admin</title>
<link rel="stylesheet" type="text/css" href="musicStyle.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body id="pageOne">
<div class="border">
    <h1 class="center">Welcome Administrator:</h1>
    <form action="admin.php" method="post">
    <div class="input">
        Username: <input type="text" name="username"><br><br>
        Password:  <input type="password" name="password"><br><br>
        <p>Not an administrator? <a href="editAccount.php">Return to sign-in page</a></p>
    </div>
    <input id="submit" type="submit" value="Sign-In">
    </form>
</div>
</body>
</html>