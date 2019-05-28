<?php
if(isset($_POST['employee_number']) || isset($_POST['user_password'])){
	if(!$_POST['employee_number'] || !$_POST['user_password']){
		$error = "Please enter a user id and password";
	}

	if(!$error){
		require_once('classes/employees.classes.php');

		$employeesObject = new employees($DBH);
		$checkEmployee = $employeesObject->checkEmployee($_POST['employee_number'], $_POST['user_password']);

		if($checkEmployee){
			//User found
$_SESSION['loggedin'] = true;
		    	$_SESSION['userData'] = $checkEmployee;

		    	echo "<script> window.location.assign('index.php?p=selectTraining'); </script>";
		}else{
		    	$error = "User ID/Password Incorrect";
		}

	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Top Golf</title>
<!--link to external files-->
    <link href="css/StyleSheet.css" rel="stylesheet" type="text/css">
    <script src="js/logIn.js" type="text/javascript" delay ></script>
<!--responsive layout-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body>
<div data-role = "page" id = "pageOne">
    <div data-role = "header">
        <div id = "containerHead">
            <img src="images/logo.png" alt = "logo" id = "logo">
        </div>
    </div>
    <br>
    <div data-role = "description">
        <h2 id = "containerDes">
            Employee Log In
        </h2>
    </div> 
    <br>
    <div data-role = "options">
        <div class = "containerOpt">
            <div id = "containerOpt2">
                <input class = "input" id="employee_number" type = "text" placeholder = "Employee Number">
            </div>
    <br><br>
            <div id = "containerOpt2">
                <input class = "input" id="user_password" type = "password" placeholder = "Employee Password">
            </div>
    <br><br>
        </div>
    </div>  
    <div data-role = "footer">
        <div id = "containerFoot">
            <button type = "submit" class = "button" id = "LogIn" value = "Log In"></button>
        </div>
    </div>    
    <div id="issues">Any issues, please contact: DEKC1_16@uni.worc.ac.uk</div>
</div>
    
    
</body>
</html>
