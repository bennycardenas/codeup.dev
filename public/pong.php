<?php 

function pageController()
{
	$data = [];

	if(empty($_GET['counter'])){
		$data ['counter'] = 0;
		$data ['message'] = "Game on";
	
	} else {

		if($_GET['result'] == 'miss') {
			$data['counter'] = 0;
			$data['message'] = "Game Over";
		}

		if($_GET['result'] == 'hit') {
			$data ['counter'] = $_GET['counter'];
			$data['message'] = "Game is in progress";
		}

	}

	// $data['counter'] = $counter;
	return $data;
}

extract(pageController());
 
?>

<html>
<head>
	<title></title>

	<style type="text/css">
		body {
			background-image: url("pong.jpeg");
			}
		#counter {
			font-size: 400px;
			color: white;
			/*border-width: 20px solid;*/
			/*line-height: 0;*/
			}
	</style>


</head>
<body>

	<h1 id='counter'><?= $counter; ?></h1>

	<a href="ping.php?result=hit&counter=<?= $counter+1; ?> ">Hit</a>
	<a href="ping.php?result=miss">Miss</a>

</body>
</html>