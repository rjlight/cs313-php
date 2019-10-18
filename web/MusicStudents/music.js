function checkParent() { //to add an edit field for additional parents
    if (document.getElementsByName("parent2").checked == true) {
        document.getElementById("parent2").style.fontSize = 12px;
    }
    else {
        document.getElementById("parent2").style.fontSize = .001px;
    }
}
function checkStudent() { //to add an edit field for additional students
    if (document.getElementsByName("student2").checked == true) {
        document.getElementById("student2").style.fontSize = 12px;
    }
    else {
        document.getElementById("student2").style.fontSize = .001px;
    }
    if (document.getElementsByName("student3").checked == true) {
        document.getElementById("student3").style.fontSize = 12px;
    }
    else {
        document.getElementById("student3").style.fontSize = .001px;
    }
    if (document.getElementsByName("student4").checked == true) {
        document.getElementById("student4").style.fontSize = 12px;
    }
    else {
        document.getElementById("student4").style.fontSize = .001px;
    }
}