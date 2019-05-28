<?php
	if(isset($_POST['user_email']) || isset($_POST['user_password'])|| isset($_POST['employee_number']) || isset($_POST['user_forename'])|| isset($_POST['user_surname'])){
        
    if(!$_POST['user_email'] || !$_POST['user_password']){
	     $error = "Please enter an email and password";
     }
        
     if(!$_POST['employee_number'] {
          $error = "Please enter your employee number.";
     }
        
        if(!$_POST['user_forename'] {
          $error = "Please enter your first name.";
     }
           
           if(!$_POST['user_surname'] {
          $error = "Please enter your surname.";
     }
       
    
    if(strlen($_POST['user_password']) < 8 || strlen($_POST['user_password']) > 20){
      $error = "Please enter a password between 8 and 20 characters";
    }

    if(!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
      $error = "Please enter a valid email address";
    }

     if(!$error){
       require_once('classes/employees.classes.php');

    	 $employeesObject = new employees($DBH);
    	 $createEmployee = $employeesObject->registerEmployee($_POST['user_email'], $_POST['user_password']), $_POST['employee_number']), $_POST['user_forename']), $_POST['user_surname']);

    	 if($createEmployee){
             
         echo "<script> window.location.assign('index.php?p=selectTraining'); </script>";
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
            Employee Registration
        </h2>
    </div> 
    <br>
    <div data-role = "options">
        <div class = "containerOpt">
            <div id = "containerOpt2">
                <input class = "input" id="user_email" type = "text" placeholder = "Employee Email">
            </div>
    <br><br>
             <div id = "containerOpt2">
                <input class = "input" id="employee_number" type = "text" placeholder = "Employee Number">
            </div>
    <br><br>
            <div id = "containerOpt2">
                <input class = "input" id="user_password" type = "password" placeholder = "Employee Password">
            </div>
    <br><br>
            <div id = "containerOpt2">
                <input class = "input" id="user_forename" type = "text" placeholder = "Employee Forename">
            </div>
    <br><br>
            <div id = "containerOpt2">
                <input class = "input" id="user_surname" type = "text" placeholder = "Employee Surname">
            </div>
    <br><br>
            
        </div>
    </div>  
    <div data-role = "footer">
        <div id = "containerFoot">
            <button type = "submit" class = "button" id = "Register" value = "Register"></button>
        </div>
    </div>    
    <div id="issues">Any issues, please contact: DEKC1_16@uni.worc.ac.uk</div>
</div>
    
    
</body>
</html>
