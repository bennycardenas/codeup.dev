<?php 

function pageController()
{
$favoriteThings = [
	'bikes',
	'outdoors',
	'sunrises',
	'winter',
	'kwahfee'
	];

	// Initialize an empty data array.
	$data = [];

	// Add data to be used in the html view.
	$data['favoriteThings'] =  $favoriteThings;

    // Return the completed data array.
    return $data;    
}
extract(pageController());
$data = pageController();
?>

 <html>
 <head>
 	<title>Faves</title>
 		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

 	<style type="text/css">
 	#main {
 		width: 40%;
 		align: center;
 		margin: 0 auto;
 	}

 	h2 {
 		text-align: center;
 	}

 	#main {
 		border: 3px solid;
 	}

 	</style>

 </head>
 <body>
 	<?var_dump($data);?>;
	 	<br>
	 	<br>
	 	<h2>These are a few of my favorite things!</h2>
	 	<br>
		<div id='main'>
			<table class="table table-striped">
				<? foreach($favoriteThings as $favoriteThing): ?>
						<tr><td><?= $favoriteThing; ?></td></tr>
				<? endforeach; ?>
			</table>
		</div>
 </body>
 </html>