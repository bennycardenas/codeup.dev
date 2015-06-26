<?php

require 'functions.php';
require_once '../Auth.php';
require_once '../Input.php';


session_start();

$sessionId = session_id();

if(Auth::check()){
    header('Location:authorize.php');
    exit();
}

$message = "Please Log In.";

if(Input::has('username') && Input::has('password')){
    $message = Auth::attempt(Input::get('username'), Input::get('password'));

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
	
    <h1><?php echo $message?></h1>

	<form method='post' action='login.php'>

		<label for='username'>Username</label>
		<input type='text' name='username'>
		
		<label for='password'>Password</label>
		<input type='password' name='password'>

		<input type="submit">

	</form>

</body>
</html>