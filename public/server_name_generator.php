<? 
function getRandom($item){
	$randomItem = array_rand($item);
	return $item[$randomItem];
	// return gets the value of the key
}

function pageController()
{

	$adjective = [
		'squirrelly','wrinkly','hairy','short','tall',
		'smooth','loud','burly','long','ittybitty'
		];

	$noun = [
		'dog','kitty','squirrel','bigfoot','pisces',
		'shark','truck','phone','wire','bottle'
		];

	// Initialize an empty data array.
	$data = [];

	// Add data to be used in the html view.
	$data['randomAdjective'] =  getRandom($adjective);
	$data['randomNoun'] = getRandom($noun); 

    // Return the completed data array.
    return $data;    
}
extract(pageController());

?>

<html>
<head>
	<title>RSNG</title>
	<link href='http://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	
	<style type="text/css">
	/*h1	{
		text-align: center;
		}*/

	div {
		text-align: center;
		font-family: 'Roboto';
		}

	#name {
		font-family: 'Gloria Hallelujah';
		}

	body {
		background-color: lightgreen;
		}

	</style>

</head>
<body>
	<br>
	<br>
	<div>
		<!-- <h1>So Random...</h1> -->
		<h2>Your Rndm Srvr Nme Is..</h2>
		<h3 id='name'><?= $randomAdjective; ?><?= $randomNoun; ?></h3>
	</div>			

	<br>
	<br>
<div> &copy <?echo date('Y'); ?></div>
</body>
</html>