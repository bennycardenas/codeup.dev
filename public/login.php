<?php

session_start();
$sessionId = session_id();

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

if ($username == 'guest' && $password == 'password'){
	$_SESSION['LOGGED_IN_USER'] = $username;
	header('Location:authorize.php');
}

if (isset($_SESSION['LOGGED_IN_USER'])){
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

		<!-- <input type="hidden" name="reset" value="reset">
        <input type="submit" value="Reset Counter"> -->

	</form>

</body>
</html>