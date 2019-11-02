<?php
    // Start the session
    session_start();
?>
<html>
<head>
<title>Account Manager - Music Students</title>
<link rel="stylesheet" type="text/css" href="musicStyle.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body id="pageOne">
<div class="border">
    <h1 class="center">Account Information:</h1>
    <form action="detailsPage.php" method="post">
    <?php
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

        $username = $_SESSION['username'];
        //echo $username;
        $password = $_SESSION['password'];
        //echo $password;

        foreach ($db->query('SELECT parent_id_1, parent_id_2, student_id_1, student_id_2, student_id_3, student_id_4 
            FROM account WHERE username =' . '\''. $username . '\' AND password =' . '\''. $password . '\'') as $row)
        {
            echo '<h3>Account Username: </h3>';
            echo '<p>' . $username . '</p>';
            echo '<input type=submit value=Details>';
            echo '<input type=text value=' .'\''. $username . '\' style=visibility:hidden name=username>';
            $_SESSION['parent_id_1' . '\''. $username . '\''] = $row['parent_id_1'];
            $_SESSION['parent_id_2' . '\''. $username . '\''] = $row['parent_id_2'];
            $_SESSION['student_id_1' . '\''. $username . '\''] = $row['student_id_1'];
            $_SESSION['student_id_2' . '\''. $username . '\''] = $row['student_id_2'];
            $_SESSION['student_id_3' . '\''. $username . '\''] = $row['student_id_3'];
            $_SESSION['student_id_4' . '\''. $username . '\''] = $row['student_id_4'];
        }
    ?>
    </form>
</div>
</body>
</html>