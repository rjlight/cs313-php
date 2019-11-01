<html>
<head>
<title>Sign In Page - Music Students</title>
<link rel="stylesheet" type="text/css" href="musicStyle.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body id="pageOne">
<div class="border">
    <h1 class="center">Please sign-in to your account:</h1>
    <form action="signIn.php" method="post">
    <div class="input">
        Username: <input type="text" name="username"><br><br>
        Password:  <input type="password" name="password"><br><br>
        <p>Don't have an account yet? Make one <a href="editAccount.php">here</a></p>
    </div>
    <input id="submit" type="submit" value="Sign-In">
    <button id="button"><a href="adminSignIn.php" style="text-decoration:none;color:white;">Admin</a></button>
    </form>
</div>
</body>
</html>
<?php

session_start();

try {
    $dbUrl = getenv('DATABASE_URL');

    $dbOpts = parse_url($dbUrl);

    $dbHost = $dbOpts['host'];
    $dbPort = $dbOpts['port'];
    $dbUser = $dbOpts['user'];
    $dbPassword = $dbOpts['pass'];
    $dbName = ltrim($dbOpts['path'], '/');

    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $ex) {
    echo 'Error!: ' . $ex->getMessage();
    die();
}
$username = $_POST['username'];
$password = $_POST['password'];
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;

try { //get the password for this user
    $stmt = $db->prepare("SELECT password FROM account WHERE username = :name");
                $stmt->bindValue(':name', $username, PDO::PARAM_STR);
                $stmt->execute();
                $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $stored_password = $row[0]['password'];

    if (password_verify($password, $stored_password)) {
        //echo "Success!";
        header("refresh:1; url=accountInfo.php");
        die();
    } else {
        echo "hashed pw:".$password;
        echo 'Incorrect password! Please, try again.';
        die();
    }
} catch (PDOException $ex) {
    echo 'Error!: ' . $ex->getMessage();
    die();
}
?>