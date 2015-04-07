<?php

require '../parks_login.php';   
require '../db_connect.php';


function getParks($dbc)
    
    {
        return $dbc->query('SELECT * FROM national_parks')->fetchAll(PDO::FETCH_ASSOC);
    }

    $parks = getParks($dbc);

?>


<html>

    <head>
        <title>National Parks</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    </head>

    <style type="text/css">
        
        .table-nonfluid {
            width: auto !important;
            /*text-align: center;*/
        }


    </style>


    <body>

        <div id='main'>
            <!-- <table class="table table-striped"> -->
            <table class="table table-nonfluid">
                <br>

                <thead>
                    <tr>
                        <th>Park Name</th>
                        <th>Location</th>
                        <th>Date Established</th>
                        <th>Area in Acres</th>  
                    </tr>
                </thead>    

                <?php foreach($parks as $park): ?>
                    
                    <tr>
                        <td><?php echo $park['Name']; ?></td>
                        <td><?php echo $park['Location']; ?></td>
                        <td><?php echo $park['Date_Established']; ?></td>
                        <td><?php echo $park['Area_in_Acres']; ?></td>
                    </tr>    
                <?php endforeach; ?>

            </table>
        </div>

    </body>

</html>

