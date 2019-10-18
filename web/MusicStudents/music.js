function checkParent() { //to add an edit field for additional parents
    if (document.getElementsByName("parent2").checked == true) {
        document.getElementById("parent2").style.fontSize = 12px;
        document.getElementById("parent2").style.visibility = visible;
    }
    else {
        document.getElementById("parent2").style.fontSize = .001px
        document.getElementById("parent2").style.visibility = hidden;
    }
}
function checkStudent() { //to add an edit field for additional students
    if (document.getElementsByName("student2").checked == true) {
        document.getElementById("student2").style.fontSize = 12px;
        document.getElementById("student2").style.visibility = visible;
    }
    else {
        document.getElementById("student2").style.fontSize = .001px;
        document.getElementById("student2").style.visibility = hidden;
    }
    if (document.getElementsByName("student3").checked == true) {
        document.getElementById("student3").style.fontSize = 12px;
        document.getElementById("student3").style.visibility = visible;
    }
    else {
        document.getElementById("student3").style.fontSize = .001px;
        document.getElementById("student3").style.visibility = hidden;
    }
    if (document.getElementsByName("student4").checked == true) {
        document.getElementById("student4").style.fontSize = 12px;
        document.getElementById("student4").style.visibility = visible;
    }
    else {
        document.getElementById("student4").style.fontSize = .001px;
        document.getElementById("student4").style.visibility = hidden;
    }
}