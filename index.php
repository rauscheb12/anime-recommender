<?php
    include('pdo_connect.php');
    include('model/model.php');

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
            include('views/results.html');
            break;
        case 'search' :
            include('views/search.html');
            break;
        default :
            include('views/default.html');
            break;

    }
?>