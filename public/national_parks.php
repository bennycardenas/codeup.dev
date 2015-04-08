<?php

require '../parks_login.php';   
require '../db_connect.php';

    // This determines what page the application is on for pagination purposes
    if (!empty($_GET['page'])) {
        $current_page = $_GET['page'];
    } else {
        $current_page = 1;
    }
    // The following construct is a PHP hack for the ELSE portion of the statement
    // else $current_page = 1;


    function getParks($dbc, $offset=0)
    {
        return $dbc->query("SELECT * FROM national_parks LIMIT 4 OFFSET $offset")->fetchAll(PDO::FETCH_ASSOC);
    }

    $offset = ($current_page - 1) * 4;
    $parks = getParks($dbc, $offset);

    $num_parks = $dbc->query('SELECT count(*) FROM national_parks')->fetchColumn();
    $total = ceil($num_parks/4);

    if ($current_page > $total){
        header('Location: /national_parks.php');
    }
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
        <!-- <?php echo $current_page ?> -->
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
            <div id="pages">
                <?php

                    if($current_page > 1)
                    {
                    echo "<a href='?page=".($current_page-1)." '>Previous</a> ";
                    }

                    for ($i=1; $i<=$total; $i++)
                        
                        if($i == $current_page)
                        {
                            echo $i;
                        } else {
                            echo "<a href='?page=".($i)." '>".$i."</a>";
                        }

                    if($current_page < $total)
                    {
                    echo "<a href='?page=".($current_page+1)." '>Next</a> ";
                    } 
                ?>
            </div>
        </div>
    </body>
</html>