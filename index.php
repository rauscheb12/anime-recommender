***REMOVED***
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
            $sql="SELECT * FROM `anime` WHERE anime.type='TV'";
            $table_data = getAllRecords($sql);

            include('views/results.html');
            break;
        case 'search' :
            include('views/search.html');
            break;
        default :
            include('views/default.html');
            break;

    ***REMOVED***

    include('assets/pagefooter.html');
***REMOVED***