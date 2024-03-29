<html>
<head>
<title>Admin Manager - Music Students</title>
<link rel="stylesheet" type="text/css" href="musicStyle.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<script src="music.js"></script>
</head>
<body id="pageOne">
<div class="border">
    <h1 class="center">Account Information - Admin:</h1>
    <form action="adminDetailsPage.php" method="post">
    <?php
        // Start the session
        session_start();
        try
        {
            $dbUrl = getenv('DATABASE_URL');

            $dbOpts = parse_url($dbUrl);

            $dbHost = $dbOpts["host"];
            $dbPort = $dbOpts["port"];
            $dbUser = $dbOpts["user"];
            $dbPassword = $dbOpts["pass"];
            $dbName = ltrim($dbOpts["path"],'/');

            $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $ex)
        {
            echo 'Error!: ' . $ex->getMessage();
            die();
        }
        $username = $_POST['username'];
        $password = $_POST['password'];
        $count = 0; //to count the users

        if($username =="admin" && $password == "admin789") {
            foreach ($db->query('SELECT username, parent_id_1, parent_id_2, student_id_1, student_id_2, student_id_3, student_id_4 
                FROM account') as $row)
            {
                $count++; //we will increment the count for each user
                echo  '<p>'. $count . '.</p>';
                echo '<p><span>Username:</span> ' . $row['username'] .'</p>'; //Which account is which
            }
            $userArray = new SplFixedArray($count); //create a userArray with the size of the # of users
            $index = 0;
            foreach ($db->query('SELECT username FROM account') as $row) {
                $userArray[$index] = $row['username']; //we'll put each user into the userArray
                $index++;                             //increment the index
            }
            $_SESSION['userArray'] = $userArray;      //now we have an array of users
            echo '<hr><p>Please enter the account number you would like to see the details for: </p>';
            echo '<input type=text name=account id=accountNum oninput=checkNumber('.$count.')>'; //use js to ensure correct # entered
            echo '<input type=submit name=submit value=Details id=color1>';  //this is where we'll get the account # ^ 
            echo '<p id=error3 style=visibility:hidden;color:red;>Error! There is no account associated with that number!</p>';
        } else {
            echo "Sorry, you are not an administrator for this site<br>
            Please return to the <a href=signIn.php>sign-in page</a>";
        }
    ?>
    </form>
</div>
</body>
</html>