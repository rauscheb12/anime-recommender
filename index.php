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

            // define sql
            $genresql="SELECT name
                FROM `genreList`";

            // obtain genre data
            $genre_data = getAllRecords($genresql);

            // define sql
            $typesql="SELECT DISTINCT type
                FROM `anime`
                wHERE (type != 'Type') AND (type != '')";

            //obtain type data
            $type_data = getAllRecords($typesql);

            // page header
            echo "<center><h3>Add an Anime</h3></center>";

            include('views/editanime.php');
            break;
        case 'allanime' :

            // define sql statement
            $sql="SELECT anime_id, name, type, episodes, score, members
                FROM `anime`
                ORDER BY name ASC";
            
            // retrieve table data
            $table_data = getAllRecords($sql);

            // define column labels
            $labels = array('Title', 'Type', '# of Episodes', 'Score', '# of Members');

            include('views/results.php');
            break;
        case 'deleteanime' :
            if(isset($_GET['anime_id'])){
                // set defaults
                $anime_id = $_GET['anime_id'];

                if ($anime_id !== '-1'){
                    $result = deleteAnime($anime_id);
                    if($result){
                        echo "<center><h3>Anime deletion successful!</h3></center>";
                    } else {
                        echo "<center><h3>Anime deletion failed!</h3></center>";
                    }
                } else {
                    echo "Invalid data!";
                }
            } else {
                echo "Anime ID not specified!";
            }

            break;
        case 'editanime' :

            // define sql
            $genresql="SELECT name
            FROM `genreList`";

            // obtain genre data
            $genre_data = getAllRecords($genresql);

            // define sql
            $typesql="SELECT DISTINCT type
                FROM `anime`
                wHERE (type != 'Type') AND (type != '')";

            //obtain type data
            $type_data = getAllRecords($typesql);

            // page header
            echo "<center><h3>Edit an Anime</h3></center>";

            include('views/editanime.php');
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
            
            include('views/info.php');
            break;
        case 'insertanime' :

            // set defaults
            $name = '-1';
            $type = '-1';

            // grab name
            if (isset($_POST['name']))
                $name = $_POST['name'];
                
            // grab type
            if (isset($_POST['type']))
                $type = $_POST['type'];

            if ($name !== '-1' && $type !== '-1'){
            $result = insertNewAnime($name, $type);
                if ($result){
                    echo "<center><h3>Anime addition successful!</h3></center>";
                } else {
                    echo "<center><h3>Anime addition failed!</h3></center>";
                }
            } else {
                echo "Invalid data!";
            }
            
            break;
        case 'results' :

            // define sql statement
            $sql="SELECT anime_id, name, type, episodes, score, members
                FROM `anime`
                ORDER BY name ASC";
            
            // retrieve table data
            $table_data = getAllRecords($sql);

            // define column labels
            $labels = array('Title', 'Type', '# of Episodes', 'Score', '# of Members');

            include('views/results.php');
            break;
        case 'search' :

            // define sql
            $genresql="SELECT name
            FROM `genreList`";

            // obtain genre data
            $genre_data = getAllRecords($genresql);

            // define sql
            $typesql="SELECT DISTINCT type
                FROM `anime`
                wHERE (type != 'Type') AND (type != '')";

            //obtain type data
            $type_data = getAllRecords($typesql);

            // header
            echo '<center><h3>Advanced Search</h3></center>';

            include('views/editanime.php');
            break;
        case 'updateanime' :
        
            if(isset($_GET['anime_id'])){
                // set defaults
                $anime_id = $_GET['anime_id'];
                $name = '-1';
                $type = '-1';

                // grab name
                if (isset($_POST['name-update']))
                    $name = $_POST['name-update'];
            
                // grab type
                if (isset($_POST['type-update']))
                    $type = $_POST['type-update'];

                if ($anime_id !== '-1' && $name !== '-1' && $type !== '-1'){
                $result = updateAnime($anime_id, $name, $type);
                    if ($result){
                        echo "<center><h3>Anime update successful!</h3></center>";
                    } else {
                        echo "<center><h3>Anime update failed!</h3></center>";
                    }
                } else {
                    echo "Invalid data!";
                }
            } else {
                echo "Anime ID not specified!";
            }

            break;
        default :

            include('views/default.html');
            break;

    }

    include('assets/pagefooter.html');
?>