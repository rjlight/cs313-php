<?php
session_start();
?>
<html>
<head>
<title>Delete Account - Admin</title>
<link rel="stylesheet" type="text/css" href="musicStyle.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body id="pageThree">
<div class="border">
    <?php
        $username = $_POST['delete'];    
        echo '<h1 class=center>Account for user: ' . $username . ' has been deleted</h1>';
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

            //get the ID's of students and parents to be deleted
            foreach ($db->query('SELECT parent_id_1, parent_id_2, student_id_1, student_id_2, student_id_3, student_id_4 
            FROM account WHERE username =' . '\''. $username . '\'') as $row)
            {
                $parentID = $row['parent_id_1'];
                $parentID2 = $row['parent_id_2'];
                $studentID1 = $row['student_id_1'];
                $studentID2 = $row['student_id_2'];
                $studentID3 = $row['student_id_3'];
                $studentID4 = $row['student_id_4'];
            }

            //Now we delete! Must delete account first due to foreign key constraints
            $stmt = $db->prepare('DELETE FROM account WHERE username=\'' . $username . '\'');
            $stmt->execute();
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            $stmt = $db->prepare('DELETE FROM parent WHERE id=' . $parentID);
            $stmt->execute();
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            if ($parentID2 != null) {
                $stmt = $db->prepare('DELETE FROM parent WHERE id=' . $parentID2);
                $stmt->execute(); //if null, nothing will happen
                $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
            
            $stmt = $db->prepare('DELETE FROM student WHERE id=' . $studentID1);
            $stmt->execute();
            $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            if ($studentID2 != null) {
                $stmt = $db->prepare('DELETE FROM student WHERE id=' . $studentID2);
                $stmt->execute();
                $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
            if ($studentID3 != null) {   
                $stmt = $db->prepare('DELETE FROM student WHERE id=' . $studentID3);
                $stmt->execute();
                $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
            if ($studentID4 != null)     
                $stmt = $db->prepare('DELETE FROM student WHERE id=' . $studentID4);
                $stmt->execute();
                $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
        }
        catch (PDOException $ex)
        {
            echo 'Error!: ' . $ex->getMessage();
            die();
        }
    ?>
    </form>
</div>
</body>
</html>