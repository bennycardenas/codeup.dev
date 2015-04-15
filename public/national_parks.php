<?php

require_once '../input.php';
require '../parks_login.php';   
require '../db_connect.php';
// require '../input.php';

// var_dump($_REQUEST);
// var_dump($_POST);

    // This determines what page the application is on for pagination purposes
    if (!empty($_GET['page'])) {
        $current_page = $_GET['page'];
    } else {
        $current_page = 1;
    }
    // The following construct is a PHP hack for the ELSE portion of the statement
    // else $current_page = 1;
    
    $offset = 0;
    $limit = 4;

    $offset = ($current_page - 1) * $limit;
    
    if  (  (!is_numeric($current_page))  || ($current_page < 1) ) 
    {
        header('Location: /national_parks.php');
    }

    $query = "SELECT * FROM national_parks LIMIT :limit OFFSET :offset";
    $stmt = $dbc->prepare($query);
    
    $stmt->bindValue(':limit', $limit , PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset , PDO::PARAM_INT);
    $stmt->execute();

    $parks = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $num_parks = $dbc->query('SELECT count(*) FROM national_parks')->fetchColumn();
        
    $total = ceil($num_parks/$limit);

    if ($current_page > $total)
    {
        header('Location: /national_parks.php');
    }

    

    //-----------------------------------------------
    //Form the INSERT request as follows
    // echo "parkname: " . isset($_POST['parkname']) . "\n";
    // echo "location: " . isset($_POST['location']) . "\n";
    // echo "date: " . isset($_POST['date_established']) . "\n";
    // echo "area: " . isset($_POST['area']) . "\n";
    // echo "desc: " . isset($_POST['description']) . "\n";
    
    if ( isset($_POST['parkname']) && isset($_POST['location']) && isset($_POST['date_established']) && isset($_POST['area'])
        && isset($_POST['description']) )
    
    {
        // echo "Inside if statement";

        $query = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description)
            VALUES (:parkname, :location, :date_established, :area, :description)";

        // $name = Input::get('parkname');
        // $location = Input::get('location');
        // $date = Input::get('date');
        // $area = Input::get('area');
        // $description = Input::get('description');

        $stmt = $dbc->prepare($query);

        $stmt->bindValue(':parkname', $_POST['parkname'], PDO::PARAM_STR);
        $stmt->bindValue(':location', $_POST['location'], PDO::PARAM_STR);
        $stmt->bindValue(':date_established', $_POST['date_established'], PDO::PARAM_STR);
        $stmt->bindValue(':area', Input::getNumber('area'), PDO::PARAM_STR);
        $stmt->bindValue(':description', $_POST['description'], PDO::PARAM_STR);

        // getNumber();

        $stmt->execute();
        
        // POST !EMPTY IS TRUE AS LONG AS THE FORM IS SUBMITTED
    } elseif (!empty($_POST)) {
                echo "inside elseif ...\n";
            if (empty($_POST['parkname'])) {
                echo 'Please enter a name';
            } elseif (empty($_POST['location'])) {
                echo 'Please enter a location';
            } elseif (empty($_POST['date_established'])) {
                echo 'Please enter a date';
            } elseif (empty($_POST['area'])) {
                echo 'Please enter an area';
            } elseif (empty($_POST['description'])) {
                echo 'Please enter an area';
            }
        }



// var_dump($_POST);

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

        #main{
            width: 600px;
            height: 750px;
            /*border: 1px solid;*/
            margin-right: auto;
            margin-left: auto;
            padding-top: 50px;
        }

        #top {
            width: 700px;
            height: 250px;
            /*border: 1px solid;*/
            margin-right: auto;
            margin-left: auto;
        }

        #footer {
            text-align: center;
           /* position: relative;*/
            /*border: 1px solid;*/
            width: 700px;
            height: 80px;
            margin-right: auto;
            margin-left: auto;
            font-size: 15px;
            /*padding-left: 50%;*/
        }

        #pages {
            /*border: 1px solid;*/
            width: 160px;
            height: 50px;
            text-align: center;
            margin-right: auto;
            position: relative;
        }

        #form {
            /*border: 1px solid;*/
            width: 700px;
            text-align: left;
            margin-right: auto;
            margin-left: auto;
            ali
        }

        /*#canyon {
            align: center;
        }*/

    </style>
    <body>

        <!-- <img src="/img/canyonlands.jpg" id="canyon"> -->

        <!-- <?php echo $current_page ?> -->
        <div id='main'>
            <div id='top'>
                <table class="table table-nonfluid table-striped">
                    

                    <thead>
                        <tr>
                            <th>Park Name</th>
                            <th>Location</th>
                            <th>Date Established</th>
                            <th>Area in Acres</th>
                            <th>Description</th>  
                        </tr>
                    </thead>

                    <?php foreach($parks as $park): ?>
                        <tr>
                            <td><?php echo $park['name']; ?></td>
                            <td><?php echo $park['location']; ?></td>
                            <td><?php echo $park['date_established']; ?></td>
                            <td><?php echo $park['area_in_acres']; ?></td>
                            <td><?php echo $park['description']; ?></td>
                        </tr>    
                    <?php endforeach; ?>
                </table>
            </div>

            <div id="footer">
                <div class="container">

                    <div id="pages">
                        <?php

                            if($current_page > 1)
                            {
                            echo "<a href='?page=".($current_page-1)." '>Previous  </a> ";
                            }

                            for ($i=1; $i<=$total; $i++)
                                
                                if($i == $current_page)
                                {
                                    echo $i;
                                } else {
                                    echo "<a href='?page=".($i)." '>"." " .$i." "."</a>";
                                }

                            if($current_page < $total)
                            {
                            echo "<a href='?page=".($current_page+1)." '>  Next</a> ";
                            } 
                        ?>

                    </div>
                </div>
            </div>

            <div id="form"> 
                <strong>Want to add a Park?</strong>
                <form method="POST" action="/national_parks.php">
                    <p>
                        <label for="parkname" ></label>
                        <input id="parkname" name="parkname" type="text" placeholder="Park Name">
                    </p>
                    <p>
                        <label for="location"></label>
                        <input id="location" name="location" type="text" placeholder="Location">
                    </p>
                    <p>
                        <label for="date"></label>
                        <input id="date" name="date_established" placeholder="Date Established">
                    </p>
                    <p>
                        <label for="area"></label>
                        <input id="area" name="area" placeholder="Area in Acres">
                    </p>
                    <p>
                        <textarea id="description" name="description" rows="5" cols="40" placeholder="Description"></textarea>
                    </p>
                    <p>
                        <input type="submit">
                    </p>
                </form>
            </div>

        </div>
    </body>
</html>