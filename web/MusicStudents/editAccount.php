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
    <form action="accountCreated.php" method="post">
        <h3>Account Information</h3>
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" id="password" oninput="checkPassword()" required><br><br>
        Re-Enter Password: <input type="password" name="password2" id="password2" oninput="checkPassword()" required><br>
        <p id="error1" style="visibility:hidden;">*Error: Passwords don't match!</p>
        <h3>Parent Information</h3>
        Full Name: <input type="text" name="parentName1" required><br><br>
        Email Address: <input type="text" name="email" required><br><br>
        Phone Number: <input type="text" name="phoneNumber" required><br><br>
        Best Form of Contact (email, text, phone call, etc.): <br>
            <input type="text" name="contact" required><br><br>
        Would you like to add another parent? <br>
        Yes <input type="checkBox" name="parent2" onclick="checkParent()"> <br> 

        <div id="parent2"></div>
        <h3>Student Information</h3>
        Full Name: <input type="text" name="studentName1" required><br><br>
        Age: <input type="number" name="age1" required><br><br>
        Instrument: <input type="text" name="instrument1" required><br><br>
        Have you had lessons before? If yes, for how long? <br>
        <input type="text" name="lessonsBefore1" required><br><br>
        Lesson Day: <input type="text" name="lessonDay1" required><br><br>
        Lesson Time: <input type="text" name="lessonTime1" required><br><br>
        Click to add another student: <br>
        <input type="button" name="student2" onclick="addStudent()" value="Add Student"> <br>
        <div id="student2">
        </div>
        <div id="student3">
        </div>
        <div id="student4">
        </div><br/>
        <input id="submit" type="submit" value="Create Account">
    </form>
</div>
</body>
</html>