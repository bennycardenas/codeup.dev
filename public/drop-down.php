<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<html>
<head>
	<title>Drop Down</title>
	<link rel="stylesheet" type="text/css" href="/css/drop-down.css">
</head>
<body>

<form method="POST" action="/drop-down.php">

<form>

	<label for="favorite_fruit">Favorite Fruit</label>
	<select id="favorite_fruit" name="favorite_fruit[] multiple">
		<option>Apple</option>
		<option selected="selected">Banana</option>
		<option>Grape</option>
		<option>Guava</option>
	</select>
</form>
	<!-- <input type="submit">		 -->


<form>
<h2>Select Testing</h2>
	<label for="yesno">You like this so far?</label>
<select id="yesno" name="yesno[] multiple">
    <option value="1">Yes</option>
    <option value="2">No</option>
</select>

<p>
    <input type="submit">
    </p>

<ul>
	<li>sure</li>
	<li>maybe</li>
	<li>maybe so</li>
</ul>



</form>
</body>
</html>