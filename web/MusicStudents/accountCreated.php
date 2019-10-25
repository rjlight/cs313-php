<?php 
    try //to connect to the database. This could be in a seperate file
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

    // get the data from the POST
    $username = $_POST['username'];
    $password = $_POST['password'];

    //parent 1
    $pname1 = $_POST['parentName1'];
    $email1 = $_POST['email'];
    $number1 = $_POST['number'];
    $contact1 = $_POST['conact'];

    //parent 2 -- if created
    $pname2 = $_POST['parentName2'];
    $email2 = $_POST['email2'];
    $number2 = $_POST['number2'];
    $contact2 = $_POST['conact2'];

    //student 1
    $sname1 = $_POST['studentName1'];
    $age1 = $_POST['age1'];
    $instrument1 = $_POST['instrument1'];
    $lessonsB41 = $_POST['lessonsBefore1'];
    $lessonDay1 = $_POST['lessonDay1'];
    $lessonTime1 = $_POST['lessonTime1'];

    //student 2 -- if created
    $sname2 = $_POST['studentName2'];
    $age2 = $_POST['age2'];
    $instrument2 = $_POST['instrument2'];
    $lessonsB42 = $_POST['lessonsBefore2'];
    $lessonDay2 = $_POST['lessonDay2'];
    $lessonTime2 = $_POST['lessonTime2'];

    //student 3 -- if created
    $sname3 = $_POST['studentName3'];
    $age3 = $_POST['age3'];
    $instrument3 = $_POST['instrument3'];
    $lessonsB43 = $_POST['lessonsBefore3'];
    $lessonDay3 = $_POST['lessonDay3'];
    $lessonTime3 = $_POST['lessonTime3'];

    //student 4 -- if created
    $sname4 = $_POST['studentName4'];
    $age4 = $_POST['age4'];
    $instrument4 = $_POST['instrument4'];
    $lessonsB44 = $_POST['lessonsBefore4'];
    $lessonDay4 = $_POST['lessonDay4'];
    $lessonTime4 = $_POST['lessonTime4'];

    try //to write to the database
    {
        // We do this by preparing the query with placeholder values
        $query = 'INSERT INTO parent(name, email, phone_number, best_form_contact) VALUES(:name, :email, :number, :contact)';
        $statement = $db->prepare($query);
    
        // Now we bind the values to the placeholders. This does some nice things
        // including sanitizing the input with regard to sql commands.
        $statement->bindValue(':book', $pname1);
        $statement->bindValue(':chapter', $email1);
        $statement->bindValue(':verse', $number1);    
        $statement->bindValue(':content', $contact1);

        $statement->execute(); //create parent 1
        $pID1 = $db->lastInsertId("parent_id_seq"); //get parent id

       /* if ($pname2 != null) {
            // We do this if parent2 exists
            $query = 'INSERT INTO parent(name, email, phone_number, best_form_contact) VALUES(:name, :email, :number, :contact)';
            $statement = $db->prepare($query);
        
            // Now we bind the values to the placeholders. This does some nice things
            // including sanitizing the input with regard to sql commands.
            $statement->bindValue(':book', $pname2);
            $statement->bindValue(':chapter', $email2);
            $statement->bindValue(':verse', $number2);    
            $statement->bindValue(':content', $contact2);

            $statement->execute(); //create parent 2
            $pID2 = $db->lastInsertId("parent_id_seq"); //get parent id 2
        }

        // Student 1
        $query = 'INSERT INTO parent(name, age, instrument, lesson_before, lesson_day, lesson_time) VALUES(:name, :age, :instrument, :lessonb4, :lessonDay, :lessonTime)';
        $statement = $db->prepare($query);
    
        // Now we bind the values to the placeholders. This does some nice things
        // including sanitizing the input with regard to sql commands.
        $statement->bindValue(':name', $sname1);
        $statement->bindValue(':age', $age1);
        $statement->bindValue(':instrument', $instrument1);    
        $statement->bindValue(':lessonb4', $lessonsB41);
        $statement->bindValue(':lessonDay', $lessonDay1);
        $statement->bindValue)':lessonTime', $lessonTime1);

        $statement->execute(); //create student 1
        $sID1 = $db->lastInsertId("student_id_seq"); //get student id 1

        if($sname2 != null){
            // Student 2
            $query = 'INSERT INTO parent(name, age, instrument, lesson_before, lesson_day, lesson_time) VALUES(:name, :age, :instrument, :lessonb4, :lessonDay, :lessonTime)';
            $statement = $db->prepare($query);
        
            // Now we bind the values to the placeholders. This does some nice things
            // including sanitizing the input with regard to sql commands.
            $statement->bindValue(':name', $sname2);
            $statement->bindValue(':age', $age2);
            $statement->bindValue(':instrument', $instrument2);    
            $statement->bindValue(':lessonb4', $lessonsB42);
            $statement->bindValue(':lessonDay', $lessonDay2);
            $statement->bindValue)':lessonTime', $lessonTime2);

            $statement->execute(); //create student 2
            $sID2 = $db->lastInsertId("student_id_seq"); //get student id 2
        }
        if($sname3 != null){
            // Student 3
            $query = 'INSERT INTO parent(name, age, instrument, lesson_before, lesson_day, lesson_time) VALUES(:name, :age, :instrument, :lessonb4, :lessonDay, :lessonTime)';
            $statement = $db->prepare($query);
        
            // Now we bind the values to the placeholders. This does some nice things
            // including sanitizing the input with regard to sql commands.
            $statement->bindValue(':name', $sname3);
            $statement->bindValue(':age', $age3);
            $statement->bindValue(':instrument', $instrument3);    
            $statement->bindValue(':lessonb4', $lessonsB43);
            $statement->bindValue(':lessonDay', $lessonDay3);
            $statement->bindValue)':lessonTime', $lessonTime3);

            $statement->execute(); //create student 3
            $sID3 = $db->lastInsertId("student_id_seq"); //get student id 3
        }
        if($sname4 != null){
            // Student 4
            $query = 'INSERT INTO parent(name, age, instrument, lesson_before, lesson_day, lesson_time) VALUES(:name, :age, :instrument, :lessonb4, :lessonDay, :lessonTime)';
            $statement = $db->prepare($query);
        
            // Now we bind the values to the placeholders. This does some nice things
            // including sanitizing the input with regard to sql commands.
            $statement->bindValue(':name', $sname4);
            $statement->bindValue(':age', $age4);
            $statement->bindValue(':instrument', $instrument4);    
            $statement->bindValue(':lessonb4', $lessonsB44);
            $statement->bindValue(':lessonDay', $lessonDay4);
            $statement->bindValue)':lessonTime', $lessonTime4);

            $statement->execute(); //create student 4
            $sID4 = $db->lastInsertId("student_id_seq"); //get student id 4
        }

        // Now we'll create the account because we've created the foreign key tables
        $query = 'INSERT INTO parent(username, password, student_id_1, student_id_2, student_id_3, student_id_4, parent_id_1, parent_id_2) 
        VALUES(:username, :password, :sID1, :sID2, :sID3, :sID4, :pID1, :pID2)';
        $statement = $db->prepare($query);
    
        // Now we bind the values to the placeholders. This does some nice things
        // including sanitizing the input with regard to sql commands.
        $statement->bindValue(':username', $username);
        $statement->bindValue(':password', $password);
        $statement->bindValue(':sID1', $sID1);    
        $statement->bindValue(':sID2', $sID2);
        $statement->bindValue(':sID3', $sID3);
        $statement->bindValue(':sID4', $sID4);
        $statement->bindValue(':pID1', $pID1);
        $statement->bindValue(':pID2', $pID2);

        $statement->execute(); //create the account!   */
        
    }
    catch (PDOException $ex)
    {
        // we wouldn't use this in a production envirnment
        echo "Error connecting to DB. Details: $ex";
        die();
    }
?>
<html>
<head>
<title>Confirm Account - Music Students</title>
<link rel="stylesheet" type="text/css" href="musicStyle.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body id="pageTwo">
<div class="border">
    <h1 class="center">Thank you for creating an account!</h1>
    <h3>Click <a href="signIn.php">here</a> to sign in
</div>
</html>