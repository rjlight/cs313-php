function checkParent() { //to add an edit field for additional parents
    if (document.getElementsByName("parent2")[0].checked == true) { 
        var txt = "<h3>Second Parent Information</h3> Full Name: <input type='text' name='parentName2'><br><br> Email Address: <input type='text' name='email2'><br><br> Phone Number: <input type='text' name='phoneNumber2'><br><br> Best Form of Contact (email, text, phone call, etc.): <br> <input type='text' name='contact2'><br><br>";
        document.getElementById("parent2").innerHTML = txt;
    }
    else {
        document.getElementById("parent2").innerHTML = "";
    }
}
function checkStudent() { //to add an edit field for additional students
    var txt1, txt2, txt3; //must have nested 'else' statements 
    if (document.getElementsByName("student2").innerHTML == "") {
        txt1 = "<h3>Student Information</h3> Full Name: <input type='text' name='studentName2'><br><br> Age: <input type='number' name='age2'><br><br> Instrument: <input type='text' name='instrument2'><br><br> Have you had lessons before? If yes, for how long? <br> <input type='text' name='lessonsBefore2'><br><br> Lesson Day: <input type='text' name='lessonDay2'><br><br> Lesson Time: <input type='text' name='lessonTime2'><br><br>  Would you like to add another student? <br> Yes <input type='checkBox' name='student3' onclick='checkStudent()'> <br>";
        document.getElementById("student2").innerHTML = txt1d;
        if (document.getElementsByName("student3").innerHTML == "") {
            txt2 = "<h3>Third Student Information</h3>Full Name: <input type='text' name='studentName3'><br><br>Age: <input type='number' name='age3'><br><br>Instrument: <input type='text' name='instrument3'><br><br> Have you had lessons before? If yes, for how long? <br><input type='text' name='lessonsBefore3'><br><br> Lesson Day: <input type='text' name='lessonDay3'><br><br> Lesson Time: <input type='text' name='lessonTime3'><br><br> Would you like to add another student? <br> Yes <input type='checkBox' name='student4' onclick='checkStudent()'> <br>";
            document.getElementById("student3").innerHTML = txt2;
            if (document.getElementsByName("student4").innerHTML == "") {
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
function addStudent() {
    var txt = "<h3>Second Student Information</h3> Full Name: <input type='text' name='studentName2'><br><br> Age: <input type='number' name='age2'><br><br> Instrument: <input type='text' name='instrument2'><br><br> Have you had lessons before? If yes, for how long? <br> <input type='text' name='lessonsBefore2'><br><br> Lesson Day: <input type='text' name='lessonDay2'><br><br> Lesson Time: <input type='text' name='lessonTime2'><br><br>  Would you like to add another student? <br> <input type='button' name='student2' onclick='addStudent2()' value='Add Student'><br>";
    document.getElementById("student2").innerHTML = txt;
}
function addStudent2() {
    var txt = "<h3>Third Student Information</h3> Full Name: <input type='text' name='studentName3'><br><br> Age: <input type='number' name='age3'><br><br> Instrument: <input type='text' name='instrument3'><br><br> Have you had lessons before? If yes, for how long? <br> <input type='text' name='lessonsBefore3'><br><br> Lesson Day: <input type='text' name='lessonDay3'><br><br> Lesson Time: <input type='text' name='lessonTime3'><br><br>  Would you like to add another student? <br> <input type='button' name='student3' onclick='addStudent3()' value='Add Student'> <br><br>";
    document.getElementById("student3").innerHTML = txt;
}
function addStudent3() {
    var txt = "<h3>Fourth Student Information</h3> Full Name: <input type='text' name='studentName4'><br><br> Age: <input type='number' name='age4'><br><br> Instrument: <input type='text' name='instrument4'><br><br> Have you had lessons before? If yes, for how long? <br> <input type='text' name='lessonsBefore4'><br><br> Lesson Day: <input type='text' name='lessonDay4'><br><br> Lesson Time: <input type='text' name='lessonTime4'><br>";
    document.getElementById("student4").innerHTML = txt;
}
function youSure() {
    document.getElementById("alert").style.visibility = "visible";
    document.getElementById("alert").innerHTML = "WARNING! You are about to delete an account. This action cannot be undone.";
}
function checkPassword() {
    var p1 = document.getElementById('password').value;
    var p2 = document.getElementById('password2').value;
    if (p1 == p2) {
        document.getElementById("error1").style.visibility = "hidden";
    } else {
        document.getElementById("error1").style.visibility = "visible";
        document.getElementById("error1").style.color = "red";
    }
}
function checkNumber(num) {
    var test = document.getElementById("accountNum").value;
    if (test > num || num == 0) {
        document.getElementById("error3").style.visibility = "visible";
    } else {
        document.getElementById("error3").style.visibility = "hidden";
    }
}