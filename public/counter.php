<?php 

function pageController()
{

	// Initialize an empty data array.
	$data = [];

	// Add data to be used in the html view.
	if(empty($_GET['counter'])){
		$counter = 0;
		
		} else {
			$counter = $_GET['counter'];
		}

	$data['counter'] =  $counter;
	
    // Return the completed data array.
    return $data;    
}
extract(pageController());

?>

 <html>	
 	<div id="vardump">
 		<?= var_dump($_GET); ?>
 	</div>	

 <head>
 	<title>CouNTeR</title>
 	<style type="text/css">
	 	#main {
	 		text-align: center;
	 	}
	 	body {
	 		background-color: lightblue;
	 	}
	 	#vardump {
	 		background-color: white;
	 	}
 	</style>
 </head>
 
 <body>
	 <div id='main'>
		<h1>Welcome to the $_GET counter exercise</h1>

	 	<!-- Show current counter value -->
	 	<h2><?= $counter; ?></h2>

	 	<!-- Up Link -->
	 	<a href="?direction=up&counter=<?=$counter+1;?>">Up</a>
	 	<br>
	 	<br>
	 	<!-- Down Link -->
	 	<a href="?direction=down&counter=<?=$counter-1;?>">Down</a>
	 </div>
 </body>
 </html>