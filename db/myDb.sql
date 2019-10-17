CREATE TABLE student (
id              SERIAL NOT NULL PRIMARY KEY,
name            varchar(30) NOT NULL,
age             int NOT NULL,
instrument      varchar(30) NOT NULL,
lesson_before   text NOT NULL,
lesson_day      varchar(20) NOT NULL,
lesson_time     varchar(10) NOT NULL
);

CREATE TABLE parent (
id                 SERIAL NOT NULL PRIMARY KEY,
name               varchar(30) NOT NULL,
email              varchar(50) NOT NULL,
phone_number       int NOT NULL,
best_form_contact  varchar(20) NOT NULL
);

CREATE TABLE account (
username            varchar(30) NOT NULL,
password            varchar(30) NOT NULL,
student_id_1        int NOT NULL REFERENCES student(id),
student_id_2        int REFERENCES student(id),
student_id_3        int REFERENCES student(id),
student_id_4        int REFERENCES student(id),
parent_id_1         int NOT NULL REFERENCES parent(id),
parent_id_2         int REFERENCES parent(id),
PRIMARY KEY(username)
);
INSERT INTO account (username, password, student_id_1, parent_id_1) 
VALUES ('lightclan', 'welovelight', 1, 1);

INSERT INTO student (name, age, instrument, lesson_before, lesson_day, lesson_time) 
VALUES ('Leah Light', 14, 'violin', 'Yes, 4 years', 'Monday', '3:30 PM');

INSERT INTO parent (name, email, phone_number, best_form_contact) 
VALUES ('Marie Light', 'fakeemail@gmail.com', 333-333-9333, 'texting, please');

UPDATE account
SET student_id_2=3; 

//to join the account table and show the students name
SELECT s.name FROM student as s
JOIN account AS a
ON s.id = a.student_id_1
OR s.id = a.student_id_2
WHERE a.username = 'lightclan';

UPDATE student
SET lesson_time='4:30 PM'
WHERE id=2;

<?php
echo '<h1><strong>Scripture Resources</strong></h1>';
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

foreach ($db->query('SELECT book, chapter, verse, content FROM scriptures') as $row)
{
  echo '<strong>' . $row['book'];
  echo ' ' . $row['chapter'];
  echo ':' . $row['verse'];
  echo '-</strong> &quot' . $row['content'] . '&quot';
  echo '<br/>';
}

echo '<form action=ta05.php method=POST>';
echo 'Book: <input type=text name=book>';
echo '<input type=submit value=Search>';
echo '</form>';

$book = $_POST['book'];

foreach ($db->query('SELECT book, chapter, verse, content FROM scriptures WHERE book =' . '\''. $book . '\'') as $row)
{
  echo '<strong>' . $row['book'];
  echo ' ' . $row['chapter'];
  echo ':' . $row['verse'];
  echo '-</strong> &quot' . $row['content'] . '&quot';
  echo '<br/>';
}
?>