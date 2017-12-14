<?php

$user = 'REPLACE';
$pass = 'REPLACE';
$db_info='mysql:host=REPLACE; dbname=REPLACE';
try {
    $db = new PDO($db_info, $user, $pass);

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>