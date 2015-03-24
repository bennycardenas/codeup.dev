<?

session_start();
$sessionId = session_id();



$username = '';

if(!isset($_SESSION['LOGGED_IN_USER'])){
	header('Location:login.php');
	exit();

} else if ((isset($_SESSION['LOGGED_IN_USER'])) && $_SESSION['LOGGED_IN_USER'] == 'guest') {
	$username = $_SESSION['LOGGED_IN_USER'];
}


?>

<? var_dump($_SESSION);?>
<? var_dump($sessionId);?>



<html>
<head>
	<title>Yay</title>
</head>
<body>

	<br>
	<h1>Authorized!</h1>

	<h2>Welcome, <?= $username ?></h2>
	<!-- <h3>Authorized</h3> -->
	 <a href="lougout.php"></a>

     <a href="logout.php">Logout</a>

</body>
</html>