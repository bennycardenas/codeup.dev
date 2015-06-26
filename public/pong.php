<?php 

// function pageController()
// {
// 	$data = [];

// 	if(empty($_GET['counter'])){
// 		$data ['counter'] = 0;
// 		$data ['message'] = "Game on";
	
// 	} else {

// 		if($_GET['result'] == 'miss') {
// 			$data['counter'] = 0;
// 			$data['message'] = "Game Over";
// 		}

// 		if($_GET['result'] == 'hit') {
// 			$data ['counter'] = $_GET['counter'];
// 			$data['message'] = "Game is in progress";
// 		}
// 	}

// 	// $data['counter'] = $counter;
// 	return $data;
// }

// extract(pageController());
 
require '../Input.php';

function pageController2()
{
	$data = [];

	if(Input::get("val") == false)
	{
		$data['count'] = 0;
	
	} else if (Input::get("val") == 'miss')
	{
		echo 'Game Over';
		$data['count'] = 0;
	
	} elseif (Input::get("val") == 'hit')
	{
		$data['count'] = Input::get('count');
	}

	return $data;
}

extract(pageController2());


?>

<html>
<head>
	<title></title>

	<style type="text/css">
		body {
			background-image: url("pong.jpeg");
			}
		#count {
			font-size: 400px;
			color: white;
			/*border-width: 20px solid;*/
			/*line-height: 0;*/
			}
	</style>


</head>
<body>

	<h1 id='count'><?= $count; ?></h1>

	<a href="ping.php?val=hit&count=<?= $count+1; ?> ">Hit</a>
	<a href="ping.php?val=miss">Miss</a>

</body>
</html>