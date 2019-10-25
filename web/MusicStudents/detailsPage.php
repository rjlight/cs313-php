<?php
session_start();
?>
<html>
<head>
<title>Account Details - Music Students</title>
<link rel="stylesheet" type="text/css" href="musicStyle.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body id="pageThree">
<div class="border">
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

        $parentID = $_SESSION['parent_id_1'];

        foreach ($db->query('SELECT name, email, phone_number, best_form_contact 
            FROM parent WHERE id =' . '\''. $parentID . '\'') as $row)
        {
            echo '<h3>Parent Information:</h3>';
            echo '<p><span>Name: ' . $row['name'] .'</span></p>';
            echo '<p><span>Email: ' . $row['email'] .'</span></p>';
            echo '<p><span>Phone Number: ' . $row['phone_number'] .'</span></p>';
            echo '<p><span>Best form of contact: <br>' . $row['best_form_contact'] .'</span></p>';
        }
        $parentID2 = $_SESSION['parent_id_2'];

        if ($parentID2 != null) {
            foreach ($db->query('SELECT name, email, phone_number, best_form_contact 
                FROM parent WHERE id =' . '\''. $parentID2 . '\'') as $row)
            {
                echo '<h3>Second Parent Information:</h3>';
                echo '<p><span>Name: ' . $row['name'] .'</span></p>';
                echo '<p><span>Email: ' . $row['email'] .'</span></p>';
                echo '<p><span>Phone Number: ' . $row['phone_number'] .'</span></p>';
                echo '<p><span>Best form of contact: <br>' . $row['best_form_contact'] .'</span></p>';
            }
        }

        $studentID1 = $_SESSION['student_id_1'];

        foreach ($db->query('SELECT name, age, instrument, lesson_before, lesson_day, lesson_time
            FROM student WHERE id =' . '\''. $studentID1 . '\'') as $row)
        {
            echo '<h3>First Student Information:</h3>';
            echo '<p><span>Name: ' . $row['name'] .'</span></p>';
            echo '<p><span>Age: ' . $row['age'] .'</span></p>';
            echo '<p><span>Instrument: ' . $row['instrument'] .'</span></p>';
            echo '<p><span>Have you had lessons before: <br>' . $row['lesson_before'] .'</span></p>';
            echo '<p><span>Lesson Day/Time: ' . $row['lesson_day'] . ' at ' . $row['lesson_time'] .'</span></p>';
        }
        $studentID2 = $_SESSION['student_id_2'];
        
        if ($studentID2 != null) {
            foreach ($db->query('SELECT name, age, instrument, lesson_before, lesson_day, lesson_time
                FROM student WHERE id =' . '\''. $studentID2 . '\'') as $row)
            {
                echo '<h3>Second Student Information:</h3>';
                echo '<p><span>Name: ' . $row['name'] .'</span></p>';
                echo '<p><span>Age: ' . $row['age'] .'</span></p>';
                echo '<p><span>Instrument: ' . $row['instrument'] .'</span></p>';
                echo '<p><span>Have you had lessons before: <br>' . $row['lesson_before'] .'</span></p>';
                echo '<p><span>Lesson Day/Time: ' . $row['lesson_day'] . ' at ' . $row['lesson_time'] .'</span></p>';
            }
        }
        $studentID3 = $_SESSION['student_id_3'];
        if ($studentID3 != null) {
            foreach ($db->query('SELECT name, age, instrument, lesson_before, lesson_day, lesson_time
                FROM student WHERE id =' . '\''. $studentID3 . '\'') as $row)
            {
                echo '<h3>Third Student Information:</h3>';
                echo '<p><span>Name: ' . $row['name'] .'</span></p>';
                echo '<p><span>Age: ' . $row['age'] .'</span></p>';
                echo '<p><span>Instrument: ' . $row['instrument'] .'</span></p>';
                echo '<p><span>Have you had lessons before: <br>' . $row['lesson_before'] .'</span></p>';
                echo '<p><span>Lesson Day/Time: ' . $row['lesson_day'] . ' at ' . $row['lesson_time'] .'</span></p>';
            }
        }
        $studentID4 = $_SESSION['student_id_4'];
        if ($studentID4 != null) {
            foreach ($db->query('SELECT name, age, instrument, lesson_before, lesson_day, lesson_time
                FROM student WHERE id =' . '\''. $studentID4 . '\'') as $row)
            {
                echo '<h3>Fourth Student Information:</h3>';
                echo '<p><span>Name: ' . $row['name'] .'</span></p>';
                echo '<p><span>Age: ' . $row['age'] .'</span></p>';
                echo '<p><span>Instrument: ' . $row['instrument'] .'</span></p>';
                echo '<p><span>Have you had lessons before: <br>' . $row['lesson_before'] .'</span></p>';
                echo '<p><span>Lesson Day/Time: ' . $row['lesson_day'] . ' at ' . $row['lesson_time'] .'</span></p>';
            }
        }
    ?>
    </form>
</div>
</html>