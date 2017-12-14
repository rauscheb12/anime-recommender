<?php

$user = 'REPLACE USER';
$pass = 'REPLACE PASS';
$db_info='mysql:host=REPLACE HOST; dbname=REPLACE DBNAME';
try {
    $db = new PDO($db_info, $user, $pass);

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>