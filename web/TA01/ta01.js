function clicked() {
    document.getElementById("pink").value = "Clicked";
}
function clicked1() {
    document.getElementById("blue").value = "Clicked";
}
function clicked2() {
    document.getElementById("red").value = "Clicked";
}
function changeColor() {
    var a = document.getElementById("color");
    document.getElementById("pink").style.background-color = a;
}