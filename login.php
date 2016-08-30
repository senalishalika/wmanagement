<?php include 'core/init.php';



    if (empty($_POST) === false) {
       $username= $_POST['username'];
       $password=$_POST['password'];


       if (empty($username) === true or empty($password) === true) {
          $errors[]= 'enter your username and password';


       } else {

        $login=login($username,$password);
        if($login===false) {
            $errors[]='username and password combination incorrect';

        } else{

          $_SESSION['user_id']=$login;
          header('Location:index.php');
          exit();
         }

       }
} else {

  $errors[]= "No data received";
}

include 'include/headers/other.php';

if (empty($errors) === false) {
?>
<h2>we tried to log you in..but it seems you havn't got permisssion to enter to this site</h2>

<?php
echo output_errors($errors);
}

?>




















<!DOCTYPE html>
<html>
	<body>
		<link rel="stylesheet" type="text/css" href="css/1.css">

		<div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div><span>Warranty</span><br><span>Management</span><br>System</div>
		</div
		<br>
		<div class="login">
				<input type="text" placeholder="username" name="username"><br>
				<input type="password" placeholder="password" name="password"><br>
				<input type="button" value="Login">
		</div>