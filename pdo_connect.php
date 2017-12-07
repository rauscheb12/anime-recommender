<?php

$user = 'rauscheb12';
$pass = 'er2788'; // first initial last initial last 4-digits of ID'
$db_info='mysql:host=washington.uww.edu; dbname=cs382-2177_rauscheb12';
try {
    $db = new PDO($db_info, $user, $pass);

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


?>
