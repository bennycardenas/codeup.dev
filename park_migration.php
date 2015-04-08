<?php


require 'parks_login.php';
require 'db_connect.php';


$dbc->exec('DROP TABLE IF EXISTS national_parks');


$query = 'CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    Name VARCHAR(100) NOT NULL,
    Location VARCHAR(100) NOT NULL,
    Date_Established DATE NOT NULL,
    Area_in_Acres DOUBLE NOT NULL,
    Description TEXT,
    PRIMARY KEY (id)
)';

$dbc->exec($query);

?>