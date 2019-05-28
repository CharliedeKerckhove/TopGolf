var Home = document.getElementById("Home");

Home.addEventListener("click", returnHome);

function returnHome(){
    location.href="selectTraining.php";
}
//Text Increase
function textIncrease(){
    document.body.style.fontSize = "1.2em";
}
//Text Decrease
function textDecrease(){
    document.body.style.fontSize = "1em";
}
//Background Colour
var backgroundB = false;
function colourChange(){
    if (backgroundB == false){
    document.body.style.background = 'rgba(55,194,79,1)';
        backgroundB = true;
    }
    else{
    document.body.style.background = '#fff';
        backgroundB = false;
    }
}