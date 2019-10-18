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
    var txt1, txt2, txt3; //must have nested 'else' statements 
    if (document.getElementsByName("student2")[0].checked == true) {
        txt1 = "<h3>Student Information</h3> Full Name: <input type='text' name='studentName2'><br><br> Age: <input type='number' name='age2'><br><br> Instrument: <input type='text' name='instrument2'><br><br> Have you had lessons before? If yes, for how long? <br> <input type='text' name='lessonsBefore2'><br><br> Lesson Day: <input type='text' name='lessonDay2'><br><br> Lesson Time: <input type='text' name='lessonTime2'><br><br>  Would you like to add another student? <br> Yes <input type='checkBox' name='student3' onclick='checkStudent()'> <br>";
        document.getElementById("student2").innerHTML = txt1;
        if (document.getElementsByName("student3")[0].checked == true) {
            txt2 = "<h3>Third Student Information</h3>Full Name: <input type='text' name='studentName3'><br><br>Age: <input type='number' name='age3'><br><br>Instrument: <input type='text' name='instrument3'><br><br> Have you had lessons before? If yes, for how long? <br><input type='text' name='lessonsBefore3'><br><br> Lesson Day: <input type='text' name='lessonDay3'><br><br> Lesson Time: <input type='text' name='lessonTime3'><br><br> Would you like to add another student? <br> Yes <input type='checkBox' name='student4' onclick='checkStudent()'> <br>";
            document.getElementById("student3").innerHTML = txt2;
            if (document.getElementsByName("student4")[0].checked == true) {
                txt3 = "<h3>Fourth Student Information</h3> Full Name: <input type='text' name='studentName4'><br><br> Age: <input type='number' name='age4'><br><br> Instrument: <input type='text' name='instrument4'><br><br> Have you had lessons before? If yes, for how long? <br> <input type='text' name='lessonsBefore4'><br><br> Lesson Day: <input type='text' name='lessonDay4'><br><br> Lesson Time: <input type='text' name='lessonTime4'><br>";
                document.getElementById("student4").innerHTML = txt3;
            }
            else {
                document.getElementById("student4").innerHTML = "";
            }
        }
        else {
            document.getElementById("student3").innerHTML = "";
        }
    }
    else {
        document.getElementById("student2").innerHTML = "";
    }
}