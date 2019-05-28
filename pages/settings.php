<!DOCTYPE html>
<html lang="en">
<head>
    <title>Top Golf</title>
<!--link to external files-->
    <link href="../css/StyleSheet.css" rel="stylesheet" type="text/css">
    <script src="../js/settings.js" type="text/javascript" defer ></script>
<!--responsive layout-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body>
<div data-role = "page" id = "pageOne">
    <div data-role = "header">
        <div id = "containerHead">
            <img src="../images/logo.png" alt = "logo" id = "logo">
        </div>
    </div>
    <br>
    <div data-role = "description">
        <h3>
        Alternate the settings to your preference. This information will not save for next time.
        </h3>
    </div> 
    <br>
    <div data-role = "options">
        <div id = "containerOpt">
            <div class = "containerOpt1" onclick = "textIncrease()">
Text Increase            </div>
    <br>
            <div class = "containerOpt1" onclick = "textDecrease()">
Text Decrease            </div>
    <br>
            <div class = "containerOpt1" onclick = "colourChange()">
Background Colour            </div>
    <br>
     <br>
        </div>
    </div>  
    <div data-role = "footer">
        <div id = "containerFoot">
            <input type = "button" class = "button" id = "Home" value = "Home">
        </div>
    </div>    
</div>
    
    
</body>
</html>
