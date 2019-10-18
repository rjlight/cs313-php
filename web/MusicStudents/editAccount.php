<html>
<head>
<title>Edit Account - Music Students</title>
<link rel="stylesheet" type="text/css" href="musicStyle.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
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

        <div id="parent2">
            <h3>Second Parent Information</h3>
            Full Name: <input type="text" name="parentName2"><br><br>
            Email Address: <input type="text" name="email2"><br><br>
            Phone Number: <input type="number" name="phoneNumber2"><br><br>
            Best Form of Contact (email, text, phone call, etc.): <br>
                <input type="text" name="contact2"><br><br>
        </div>
        <h3>Student Information</h3>
        Full Name: <input type="text" name="studentName1"><br><br>
        Age: <input type="number" name="age1"><br><br>
        Instrument: <input type="text" name="instrument1"><br><br>
        Have you had lessons before? If yes, for how long? <br>
        <input type="text" name="lessonsBefore1"><br><br>
        Lesson Day: <input type="text" name="lessonDay1"><br><br>
        Lesson Time: <input type="text" name="lessonTime1"><br><br>
        Would you like to add another student? <br>
        Yes <input type="checkBox" name="student2" onclick="checkStudent()"> <br>
        <div id="student2">
            <h3>Student Information</h3>
            Full Name: <input type="text" name="studentName2"><br><br>
            Age: <input type="number" name="age2"><br><br>
            Instrument: <input type="text" name="instrument2"><br><br>
            Have you had lessons before? If yes, for how long? <br>
            <input type="text" name="lessonsBefore2"><br><br>
            Lesson Day: <input type="text" name="lessonDay2"><br><br>
            Lesson Time: <input type="text" name="lessonTime2"><br><br>
            Would you like to add another student? <br>
            Yes <input type="checkBox" name="student3" onclick="checkStudent()"> <br>
        </div>
        <div id="student3">
            <h3>Third Student Information</h3>
            Full Name: <input type="text" name="studentName3"><br><br>
            Age: <input type="number" name="age3"><br><br>
            Instrument: <input type="text" name="instrument3"><br><br>
            Have you had lessons before? If yes, for how long? <br>
            <input type="text" name="lessonsBefore3"><br><br>
            Lesson Day: <input type="text" name="lessonDay3"><br><br>
            Lesson Time: <input type="text" name="lessonTime3"><br><br>
            Would you like to add another student? <br>
            Yes <input type="checkBox" name="student4" onclick="checkStudent()"> <br>
        </div>
        <div id="student4">
            <h3>Fourth Student Information</h3>
            Full Name: <input type="text" name="studentName4"><br><br>
            Age: <input type="number" name="age4"><br><br>
            Instrument: <input type="text" name="instrument4"><br><br>
            Have you had lessons before? If yes, for how long? <br>
            <input type="text" name="lessonsBefore4"><br><br>
            Lesson Day: <input type="text" name="lessonDay4"><br><br>
            Lesson Time: <input type="text" name="lessonTime4"><br>
        </div>
        
    </form>
</div>
</html>