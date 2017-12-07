<?php

$user = 'yarlagadys03';
$pass = 'yy4713'; // first initial last initial last 4-digits of ID'
$db_info='mysql:host=washington.uww.edu; dbname=cs382-2177_yarlagadys03';
try {
    $db = new PDO($db_info, $user, $pass);

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


?>

