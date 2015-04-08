<?php

require 'parks_login.php';
require 'db_connect.php';

$dbc->exec('TRUNCATE national_parks');

$query = "INSERT INTO national_parks (Name, Location, Date_Established, Area_in_Acres, Description)
            VALUES (:name, :location, :date_established, :area_in_acres, :description)";

$parks = [

    ['name'=>'Acadia', 'location'=>'Maine', 'Date_Established'=>'1919-02-26', 'Area_in_Acres'=>47389.67],
    ['name'=>'American Samoa', 'location'=>'American Samoa', 'Date_Established'=>'1988-10-31', 'Area_in_Acres'=>9000.00],
    ['name'=>'Arches', 'location'=>'Utah', 'Date_Established'=>'1929-04-12', 'Area_in_Acres'=>76518.98],
    ['name'=>'Badlands', 'location'=>'South Dakota', 'Date_Established'=>'1978-11-10', 'Area_in_Acres'=>242755.94],
    ['name'=>'Big Bend', 'location'=>'Texas', 'Date_Established'=>'1944-06-12', 'Area_in_Acres'=>801163.21],
    ['name'=>'Biscayne', 'location'=>'Florida', 'Date_Established'=>'1980-06-28', 'Area_in_Acres'=>172924.07],
    ['name'=>'Black Canyon', 'location'=>'Colorado', 'Date_Established'=>'1999-10-21', 'Area_in_Acres'=>32950.03],
    ['name'=>'Bryce Canyon', 'location'=>'Utah', 'Date_Established'=>'1928-02-25', 'Area_in_Acres'=>35835.08],
    ['name'=>'Canyonlands', 'location'=>'Utah', 'Date_Established'=>'1964-09-12', 'Area_in_Acres'=>337597.83],
    ['name'=>'Capitol Reef', 'location'=>'Utah', 'Date_Established'=>'1971-12-18', 'Area_in_Acres'=>241904.26],
    ['name'=>'Carlsbad Caverns', 'location'=>'New Mexico', 'Date_Established'=>'1930-05-14', 'Area_in_Acres'=>46766.45],
    ['name'=>'Channel Islands', 'location'=>'California', 'Date_Established'=>'1980-03-05', 'Area_in_Acres'=>249561.00],
    ['name'=>'Congaree', 'location'=>'South Carolina', 'Date_Established'=>'2003-11-10', 'Area_in_Acres'=>26545.86],
    ['name'=>'Crater Lake', 'location'=>'Oregon', 'Date_Established'=>'1902-05-22', 'Area_in_Acres'=>183224.05],
    ['name'=>'Cuyahoga Valley', 'location'=>'Ohio', 'Date_Established'=>'2000-10-11', 'Area_in_Acres'=>32860.73],

];

// $dbc->exec($query);  IS NOW THE FOLLOWING LINE:
$stmt = $dbc->prepare($query);




foreach ($parks as $park) 
    {
        $stmt->bindValue(':name', $park['name'], PDO::PARAM_STR);
        $stmt->bindValue(':location', $park['location'], PDO::PARAM_STR);
        $stmt->bindValue(':date_established', $park['Date_Established'], PDO::PARAM_STR);
        $stmt->bindValue(':area_in_acres', $park['Area_in_Acres'], PDO::PARAM_STR);
        $stmt->bindValue(':description', $park['Description'], PDO::PARAM_STR);
    }

prepare
bindValue
execute
        
?>