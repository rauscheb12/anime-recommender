<?php
    include('pdo_connect.php');
    include('model/model.php');

    include('assets/pageheader.html');
    include('assets/menu.php');

    $mode = '';
    if(isset($_REQUEST['mode']))
        $mode = $_REQUEST['mode'];

    switch ($mode) {
        case 'addanime' :
            // page header
            echo "<center><h3>Add an Anime</h3></center>";

            include('views/editanime.html');
            break;
        case 'editanime' :
            // page header
            echo "<center><h3>Edit an Anime</h3></center>";

            include('views/editanime.html');
            break;
        case 'info' :
            // default anime_id
            $anime_id = 0;

            // get anime_id if it is set
            if(isset($_GET['anime_id'])){
                $anime_id = $_GET['anime_id'];
            }

            // define sql statement
            $sql="SELECT *
                FROM `anime`
                WHERE anime_id = :anime_id";

            // define values for named parameters
            $values = array(':anime_id'=>$anime_id);

            // obtain data
            $table_data = getOneRecord($sql, $values);

            // define column labels
            $labels = array('Anime ID', 'Name', 'Type', 'Episodes', 'Score', 'Members', 'Studio ID', 'MPAA Rating', 'Status', 'Premiere Date');
            
            break;
        case 'results' :
            // define sql statement
            $sql="SELECT name, type, episodes, score, members
                FROM `anime`
                ORDER BY name ASC";
            
            // retrieve table data
            $table_data = getAllRecords($sql);

            // define column labels
            $labels = array('Title', 'Type', '# of Episodes', 'Score', '# of Members');

            include('views/results.php');
            break;
        case 'search' :
            include('views/search.html');
            break;
        default :
            include('views/default.html');
            break;

    }

    include('assets/pagefooter.html');
?>