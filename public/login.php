<?php

require 'functions.php';
session_start();

$sessionId = session_id();


$username = inputHas('username') ? inputGet('username') : '';
$password = inputHas('password') ? inputGet('password') : '';


if ($username == 'guest' && $password == 'password'){
	$_SESSION['LOGGED_IN_USER'] = $username;
	header('Location:authorize.php');
}


if (inputHas('LOGGED_IN_USER'))
                    // if (isset($_SESSION['LOGGED_IN_USER']))
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