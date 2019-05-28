
var option1 = document.getElementById("newTraining");
var option2 = document.getElementById("redoFailed");
var option3 = document.getElementById("redoPassed");
var option4 = document.getElementById("generalTraining");
var option5 = document.getElementById("settings");

option1.addEventListener("click", newTraining);
option2.addEventListener("click", redoFailed);
option3.addEventListener("click", redoPassed);
option4.addEventListener("click", generalTraining);
option5.addEventListener("click", settings);


function newTraining(){
        console.log("0");
}
function redoFailed(){
        console.log("1");
}
function redoPassed(){
        console.log("2");
}
function generalTraining(){
    location.href="pages/training.php";
}
function settings(){
    location.href="../pages/settings.php";
}
