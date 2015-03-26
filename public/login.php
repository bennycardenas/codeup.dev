<?php

require 'functions.php';
require '../Auth.php';

session_start();

$sessionId = session_id();

if(Auth::check())
    {
    header('Location:authorize.php');
    exit();
    }

$username = inputHas('username') ? inputGet('username') : '';
$password = inputHas('password') ? inputGet('password') : '';


if ($_POST){
	Auth::attempt($username, $password);
	if(isset($_SESSION['LOGGED_IN_USER'])) {
        header('Location:authorize.php');
        exit();
    } else {
        echo 'Wrong Username or Password';
    }
}


if (inputHas('LOGGED_IN_USER'))
    {
    header('Location:authorize.php');
    }

?>
<? var_dump($sessionId);?>
<? var_dump($_POST);?>


<html>
<head>
	<title>Login Form</title>
</head>

<body>
	
	<form method='post' action='login.php'>

		<label for='username'>Username</label>
		<input type='text' name='username'>
		
		<label for='password'>Password</label>
		<input type='password' name='password'>

		<input type="submit">

	</form>

</body>
</html>