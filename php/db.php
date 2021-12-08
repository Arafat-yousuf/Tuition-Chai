<?php

session_start();

$host = 'localhost';
$user = 'root';
$password = '';
$errors=array();
$db = 'project';


$link = mysqli_connect($host, $user, $password, $db);

$username = "";
$email = "";
$password = "";
$first_name = "";
$last_name = "";

//errors messages;
$full_name_error = "";
$password_error = "";
$email_error = "";
$username_error = "";
$usernameExists_error = "";
$emailExists_error = "";
$confirm_password_error="";

if(isset($_POST['signupbutton'])){
	$username=$_POST['signUpUserName'];
	$full_name=$_POST['fullName'];
	$email=$_POST['email'];
	$password1=$_POST['signUpPassword'];
	$password2=$_POST['confirmPassword'];


	if(empty($full_name)){
		$first_name_error = "Full name is required";
	}
	if(empty($username)){
		$username_error = "Username name is required";
	}
	if(empty($email)){
		$email_error = "Email is required";
	}
	if(empty($password1)){
		$password_error = "Password is required";
	}
	if($password1!=$password2)
	{
		$confirm_password_error = "two password didn't match!!";
	}

	$usernameCheck = "Select * From t_registration Where username = '$username'";
	$emailCheck = "Select * From t_registration Where email = '$email'";

	if(mysqli_num_rows(mysqli_query($link, $usernameCheck)) > 0){
		$usernameExists_error = "This username is already taken";
	}


	else if(mysqli_num_rows(mysqli_query($link, $emailCheck)) > 0){
		$emailExists_error = "Already registered";
	}


	else if(count($errors) == 0){
		$sql = "Insert Into t_registration(username, full_name, email, password)
							   Values('$username', '$full_name', '$email', '$password1')";

		mysqli_query($link, $sql);
		//header("location:index.html");
		$_SESSION['signUpUserName'] = $username;
		//$_SESSION['success'] = "logged in Successfully";
		header('location: login.php');
	}
}

// LOGIN tutor
if (isset($_POST['login_tutor'])) {

  $username=$_POST['signInUserName'];
   $password=$_POST['signInPassword'];
  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$query = "SELECT * FROM t_registration  WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($link, $query);

  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['signInUserName'] = $username;

  	  header('location: index_login.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
?>
