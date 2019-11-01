<?php
session_start();
?>
<html>
<head>
<title>Admin Account Details - Music Students</title>
<link rel="stylesheet" type="text/css" href="musicStyle.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<script src="music.js"></script>
</head>
<body id="pageThree">
<div class="border">
    <?php
        $account = $_POST['account'];
        $username = $_SESSION['userArray'][$account - 1];          //to get the right user
        echo $account;
        echo '<h1 class="center">Account Details - ' . $username . '</h1>';
    ?>
    <!--will have sections for parents and students-->
    <form action="adminDelete.php" method="post">
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

        $account = $_POST['account'];
        //echo $account;
        $username = $_SESSION['userArray'][$account - 1];          //to get the right user
        //echo $username;
        //to get all the correct parent and student id's
        foreach ($db->query('SELECT parent_id_1, parent_id_2, student_id_1, student_id_2, student_id_3, student_id_4 
            FROM account WHERE username =\'' . $username . '\'') as $row)
        {
            $parentID = $row['parent_id_1'];
            $parentID2 = $row['parent_id_2'];
            $studentID1 = $row['student_id_1'];
            $studentID2 = $row['student_id_2'];
            $studentID3 = $row['student_id_3'];
            $studentID4 = $row['student_id_4'];
        }

        foreach ($db->query('SELECT name, email, phone_number, best_form_contact 
            FROM parent WHERE id =' . '\''. $parentID . '\'') as $row)
        {
            echo '<h3>Parent Information:</h3>';
            echo '<p><span>Name:</span> ' . $row['name'] .'</p>';
            echo '<p><span>Email:</span> ' . $row['email'] .'</p>';
            echo '<p><span>Phone Number:</span> ' . $row['phone_number'] .'</p>';
            echo '<p><span>Best form of contact:</span> <br>' . $row['best_form_contact'] .'</p>';
        }

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

        foreach ($db->query('SELECT name, age, instrument, lesson_before, lesson_day, lesson_time
            FROM student WHERE id =' . '\''. $studentID1 . '\'') as $row)
        {
            echo '<hr><h3>First Student Information:</h3>';
            echo '<p><span>Name:</span> ' . $row['name'] .'</p>';
            echo '<p><span>Age:</span> ' . $row['age'] .'</p>';
            echo '<p><span>Instrument:</span> ' . $row['instrument'] .'</p>';
            echo '<p><span>Have you had lessons before:</span> <br>' . $row['lesson_before'] .'</p>';
            echo '<p><span>Lesson Day/Time:</span> ' . $row['lesson_day'] . ' at ' . $row['lesson_time'] .'</p>';
        }
        
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
        echo '<hr><p><strong>TO DELETE</strong>: Please enter the username for this account: </p>'
        . '<input type=text name=delete oninput=youSure()>';
        echo '<input onclick=alert(warning! About to delete account!) type=submit name=submit value=Delete id=color>';  //this is where we'll get the account # ^
        echo '<p id=alert style=visibility:hidden></p>'; //two alerts for safety
    ?>
    </form>
</div>
</body>
</html>