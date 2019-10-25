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

        $username = $_POST['username'];
        echo $username;
        $parentID = $_SESSION['parent_id_1' . '\''. $username . '\''];

        foreach ($db->query('SELECT name, email, phone_number, best_form_contact 
            FROM parent WHERE id =' . '\''. $parentID . '\'') as $row)
        {
            echo '<h3>Parent Information:</h3>';
            echo '<p><span>Name:</span> ' . $row['name'] .'</p>';
            echo '<p><span>Email:</span> ' . $row['email'] .'</p>';
            echo '<p><span>Phone Number:</span> ' . $row['phone_number'] .'</p>';
            echo '<p><span>Best form of contact:</span> <br>' . $row['best_form_contact'] .'</p>';
        }
        $parentID2 = $_SESSION['parent_id_2' . '\''. $username . '\''];

        if ($parentID2 != null) {
            foreach ($db->query('SELECT name, email, phone_number, best_form_contact 
                FROM parent WHERE id =' . '\''. $parentID2 . '\'') as $row)
            {
                echo '<h3>Second Parent Information:</h3>';
                echo '<p><span>Name:</span> ' . $row['name'] .'</p>';
                echo '<p><span>Email:</span> ' . $row['email'] .'</p>';
                echo '<p><span>Phone Number:</span> ' . $row['phone_number'] .'</p>';
                echo '<p><span>Best form of contact:</span> <br>' . $row['best_form_contact'] .'</p>';
            }
        }

        $studentID1 = $_SESSION['student_id_1' . '\''. $username . '\''];

        foreach ($db->query('SELECT name, age, instrument, lesson_before, lesson_day, lesson_time
            FROM student WHERE id =' . '\''. $studentID1 . '\'') as $row)
        {
            echo '<h3>First Student Information:</h3>';
            echo '<p><span>Name:</span> ' . $row['name'] .'</p>';
            echo '<p><span>Age:</span> ' . $row['age'] .'</p>';
            echo '<p><span>Instrument:</span> ' . $row['instrument'] .'</p>';
            echo '<p><span>Have you had lessons before:</span> <br>' . $row['lesson_before'] .'</p>';
            echo '<p><span>Lesson Day/Time:</span> ' . $row['lesson_day'] . ' at ' . $row['lesson_time'] .'</p>';
        }
        $studentID2 = $_SESSION['student_id_2' . '\''. $username . '\''];
        
        if ($studentID2 != null) {
            foreach ($db->query('SELECT name, age, instrument, lesson_before, lesson_day, lesson_time
                FROM student WHERE id =' . '\''. $studentID2 . '\'') as $row)
            {
                echo '<h3>Second Student Information:</h3>';
                echo '<p><span>Name:</span> ' . $row['name'] .'</p>';
                echo '<p><span>Age:</span> ' . $row['age'] .'</p>';
                echo '<p><span>Instrument:</span> ' . $row['instrument'] .'</p>';
                echo '<p><span>Have you had lessons before:</span> <br>' . $row['lesson_before'] .'</p>';
                echo '<p><span>Lesson Day/Time:</span> ' . $row['lesson_day'] . ' at ' . $row['lesson_time'] .'</p>';
            }
        }
        $studentID3 = $_SESSION['student_id_3' . '\''. $username . '\''];
        if ($studentID3 != null) {
            foreach ($db->query('SELECT name, age, instrument, lesson_before, lesson_day, lesson_time
                FROM student WHERE id =' . '\''. $studentID3 . '\'') as $row)
            {
                echo '<h3>Third Student Information:</h3>';
                echo '<p><span>Name:</span> ' . $row['name'] .'</p>';
                echo '<p><span>Age:</span> ' . $row['age'] .'</p>';
                echo '<p><span>Instrument:</span> ' . $row['instrument'] .'</p>';
                echo '<p><span>Have you had lessons before:</span> <br>' . $row['lesson_before'] .'</p>';
                echo '<p><span>Lesson Day/Time:</span> ' . $row['lesson_day'] . ' at ' . $row['lesson_time'] .'</p>';
            }
        }
        $studentID4 = $_SESSION['student_id_4' . '\''. $username . '\''];
        if ($studentID4 != null) {
            foreach ($db->query('SELECT name, age, instrument, lesson_before, lesson_day, lesson_time
                FROM student WHERE id =' . '\''. $studentID4 . '\'') as $row)
            {
                echo '<h3>Fourth Student Information:</h3>';
                echo '<p><span>Name:</span> ' . $row['name'] .'</p>';
                echo '<p><span>Age:</span> ' . $row['age'] .'</p>';
                echo '<p><span>Instrument:</span> ' . $row['instrument'] .'</p>';
                echo '<p><span>Have you had lessons before:</span> <br>' . $row['lesson_before'] .'</p>';
                echo '<p><span>Lesson Day/Time:</span> ' . $row['lesson_day'] . ' at ' . $row['lesson_time'] .'</p>';
            }
        }
    ?>
    </form>
</div>
</html>