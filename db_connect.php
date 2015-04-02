<?php

// $dbc = new PDO('mysql:host=127.0.0.1;dbname=employees', 'codeup', 'rocks');
// $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$dbc = new PDO('mysql:host=' . DB_HOST . ';dbname=' .DB_NAME, DB_USER, DB_PASS);
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);




?>