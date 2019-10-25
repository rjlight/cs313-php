<html>
<head>
<title>Admin Manager - Music Students</title>
<link rel="stylesheet" type="text/css" href="musicStyle.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body id="pageOne">
<div class="border">
    <h1 class="center">Account Information - Admin:</h1>
    <form action="detailsPage.php" method="post">
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

        if($username="admin" && $password="admin789") {
            foreach ($db->query('SELECT username, password, parent_id_1, parent_id_2, student_id_1, student_id_2, student_id_3, student_id_4 
                FROM account') as $row)
            {
                echo '<p>Username: ' . $row['username'] .'</p>';
                echo '<p>Password: ' . $row['password'] .'</p>';
                echo '<input type=submit value=Details>';
                $_SESSION['parent_id_1'] = $row['parent_id_1'];
                $_SESSION['parent_id_2'] = $row['parent_id_2'];
                $_SESSION['student_id_1'] = $row['student_id_1'];
                $_SESSION['student_id_2'] = $row['student_id_2'];
                $_SESSION['student_id_3'] = $row['student_id_3'];
                $_SESSION['student_id_4'] = $row['student_id_4'];
            }
        }
    ?>
    </form>
</div>
</html>