<?php
session_start();
?>
<html>
<head>
<title>Account Details - Music Students</title>
<link rel="stylesheet" type="text/css" href="musicStyle.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body id="page">
<div class="border" id="longer">
    <h1 class="center">Account Details:</h1>
    <!--will have sections for parents and students-->
    <form action="" method="post">
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
        echo $_SESSION['parent_id_2'] ;
        echo $_SESSION['student_id_1'];
        echo $_SESSION['student_id_2'];
        echo $_SESSION['student_id_3'];
        echo $_SESSION['student_id_4'];
        $parentID = $_SESSION['parent_id_1'];

        foreach ($db->query('SELECT name, email, phone_number, best_form_contact 
            FROM parent WHERE id =' . '\''. $parentID . '\'') as $row)
        {
            echo '<h3>Parent Information:</h3>';
            echo '<p>Name: ' . $row['name'] .'</p>';
            echo '<p>Email: ' . $row['email'] .'</p>';
            echo '<p>Phone Number: ' . $row['phone_number'] .'</p>';
            echo '<p>Best form of contact: <br>' . $row['best_form_contact'] .'</p>';
            echo '<br><br>';
        }
        $parentID2 = $_SESSION['parent_id_2'];

        foreach ($db->query('SELECT name, email, phone_number, best_form_contact 
            FROM parent WHERE id =' . '\''. $parentID2 . '\'') as $row)
        {
            echo '<h3>Second Parent Information:</h3>';
            echo '<p>Name: ' . $row['name'] .'</p>';
            echo '<p>Email: ' . $row['email'] .'</p>';
            echo '<p>Phone Number: ' . $row['phone_number'] .'</p>';
            echo '<p>Best form of contact: <br>' . $row['best_form_contact'] .'</p>';
            echo '<br><br>';
        }

       /* $studentID1 = $_SESSION['student_id_1'];

        foreach ($db->query('SELECT name, age, instrument, lesson_before, lesson_day, lesson_time
            FROM student WHERE id =' . '\''. $studentID1 . '\'') as $row)
        {
            echo '<h3>First Student Information:</h3>';
            echo '<p>Name: ' . $row['name'] .'</p>';
            echo '<p>Age: ' . $row['age'] .'</p>';
            echo '<p>Instrument: ' . $row['instrument'] .'</p>';
            echo '<p>Have you had lessons before: <br>' . $row['lesson_before'] .'</p>';
            echo '<p>Lesson Day/Time: ' . $row['lesson_day'] . ' at ' . $row['lesson_time'] .'</p>';
            echo '<br><br>';
        }
        $studentID2 = $_SESSION['student_id_2'];

        foreach ($db->query('SELECT name, age, instrument, lesson_before, lesson_day, lesson_time
            FROM student WHERE id =' . '\''. $studentID2 . '\'') as $row)
        {
            echo '<h3>First Student Information:</h3>';
            echo '<p>Name: ' . $row['name'] .'</p>';
            echo '<p>Age: ' . $row['age'] .'</p>';
            echo '<p>Instrument: ' . $row['instrument'] .'</p>';
            echo '<p>Have you had lessons before: <br>' . $row['lesson_before'] .'</p>';
            echo '<p>Lesson Day/Time: ' . $row['lesson_day'] . ' at ' . $row['lesson_time'] .'</p>';
            echo '<br><br>';
        }
        $studentID3 = $_SESSION['student_id_3'];

        foreach ($db->query('SELECT name, age, instrument, lesson_before, lesson_day, lesson_time
            FROM student WHERE id =' . '\''. $studentID3 . '\'') as $row)
        {
            echo '<h3>First Student Information:</h3>';
            echo '<p>Name: ' . $row['name'] .'</p>';
            echo '<p>Age: ' . $row['age'] .'</p>';
            echo '<p>Instrument: ' . $row['instrument'] .'</p>';
            echo '<p>Have you had lessons before: <br>' . $row['lesson_before'] .'</p>';
            echo '<p>Lesson Day/Time: ' . $row['lesson_day'] . ' at ' . $row['lesson_time'] .'</p>';
            echo '<br><br>';
        }
        $studentID4 = $_SESSION['student_id_4'];

        foreach ($db->query('SELECT name, age, instrument, lesson_before, lesson_day, lesson_time
            FROM student WHERE id =' . '\''. $studentID4 . '\'') as $row)
        {
            echo '<h3>First Student Information:</h3>';
            echo '<p>Name: ' . $row['name'] .'</p>';
            echo '<p>Age: ' . $row['age'] .'</p>';
            echo '<p>Instrument: ' . $row['instrument'] .'</p>';
            echo '<p>Have you had lessons before: <br>' . $row['lesson_before'] .'</p>';
            echo '<p>Lesson Day/Time: ' . $row['lesson_day'] . ' at ' . $row['lesson_time'] .'</p>';
            echo '<br><br>';
        } */
    ?>
    </form>
</div>
</html>