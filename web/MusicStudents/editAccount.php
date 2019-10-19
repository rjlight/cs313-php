<html>
<head>
<title>Edit Account - Music Students</title>
<link rel="stylesheet" type="text/css" href="musicStyle.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<script src="music.js"></script>
</head>
<body id="pageTwo">
<div class="border">
    <h1 class="center">Please fill out all fields:</h1>
    <form action="" method="post">
        <h3>Parent Information</h3>
        Full Name: <input type="text" name="parentName1"><br><br>
        Email Address: <input type="text" name="email"><br><br>
        Phone Number: <input type="number" name="phoneNumber"><br><br>
        Best Form of Contact (email, text, phone call, etc.): <br>
            <input type="text" name="contact"><br><br>
        Would you like to add another parent? <br>
        Yes <input type="checkBox" name="parent2" onclick="checkParent()"> <br> 

        <div id="parent2"></div>
        <h3>Student Information</h3>
        Full Name: <input type="text" name="studentName1"><br><br>
        Age: <input type="number" name="age1"><br><br>
        Instrument: <input type="text" name="instrument1"><br><br>
        Have you had lessons before? If yes, for how long? <br>
        <input type="text" name="lessonsBefore1"><br><br>
        Lesson Day: <input type="text" name="lessonDay1"><br><br>
        Lesson Time: <input type="text" name="lessonTime1"><br><br>
        Click to add another student: <br>
        <input type="button" name="student2" onclick="addStudent()" value="Add Student"> <br>
        <div id="student2">
        </div>
        <div id="student3">
        </div>
        <div id="student4">
        </div>
        
    </form>
</div>
</html>