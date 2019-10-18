function checkParent() { //to add an edit field for additional parents
    if (document.getElementsByName("parent2")[0].checked == true) { 
        var txt = "<h3>Second Parent Information</h3> Full Name: <input type='text' name='parentName2'><br><br> Email Address: <input type='text' name='email2'><br><br> Phone Number: <input type='number' name='phoneNumber2'><br><br> Best Form of Contact (email, text, phone call, etc.): <br> <input type='text' name='contact2'><br><br>";
        document.getElementById("parent2").innerHTML = txt;
    }
    else {
        document.getElementById("parent2").innerHTML = "";
    }
}
function checkStudent() { //to add an edit field for additional students
    var txt1; 
    txt1 = "<h3>Student Information</h3> Full Name: <input type='text' name='studentName2'><br><br> Age: <input type='number' name='age2'><br><br> Instrument: <input type='text' name='instrument2'><br><br> Have you had lessons before? If yes, for how long? <br> <input type='text' name='lessonsBefore2'><br><br> Lesson Day: <input type='text' name='lessonDay2'><br><br> Lesson Time: <input type='text' name='lessonTime2'><br><br>  Would you like to add another student? <br> Yes <input type='checkBox' name='student3' onclick='checkStudent()'> <br>";
    document.getElementById("student2").innerHTML = txt1;
}