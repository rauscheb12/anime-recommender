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
            include('views/addanime.html');
            break;
        case 'editanime' :
            include('views/editanime.html');
            break;
        case 'results' :
            $sql="SELECT name, type, episodes, score, members
                FROM `anime`
                ORDER BY name ASC";
            $table_data = getAllRecords($sql);
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