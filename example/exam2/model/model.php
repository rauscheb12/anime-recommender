<?php

 function checkValidUser(){
	// validate user
$sql= "SELECT member_id, first_name,last_name FROM `club_members` WHERE username=:username and password = :pwd";
	// define values for parameters
	$values = array(':username'=>$_POST['username'], ':pwd'=>md5($_POST['pwd']));
	$result = getOne($sql, $values);
	return $result;
 }
 function getMyPurchaseHistory($values){
        // define SQL statement
$sql = "SELECT  title, date_out, returned
FROM `club_movies` m, `club_rentals` r, `club_members` mm
WHERE m.movie_id = r.movie_id
AND r.member_id = mm.member_id and mm.member_id=:id";
        $data= getAll($sql, $values);
        return $data;
  }
global $future_date,
       $due_date;

$future_date =   mktime(0,0,0,date("m"),date("d")+7,date("Y"));
$due_date = "Due by:  ".date("Y-m-d", $future_date); 

function insertNewMovie($member_id){
  global $db;
  $movie_id = $_GET['movieid'];
  $current_date = date("Y-m-d");
  $future_date = mktime(0,0,0,date("m"),date("d")+7,date("Y"));
$due_date = "Due by:  ".date("Y-m-d", $future_date);  
// define SQL statement
  $sql = 'INSERT INTO `club_rentals` (member_id,movie_id,date_out,returned) VALUES
          (:member_id,:movie_id,:date_out,:returned)';
        // define values for named parameters
  $values = array(':member_id'=>$member_id, ':movie_id'=> $movie_id,':date_out'=>$current_date, ':returned'=>"Due by ".date("Y-m-d", $future_date));
  $stm =$db->prepare($sql);
  $stm->execute($values);
  return true;
}
function getMyRentalHistory($values){
        // define SQL statement
$sql = 'SELECT `club_movies`.title,`club_movies`.movie_id,`club_rentals`.date_out, `club_rentals`.returned FROM `club_movies`, `club_rentals` WHERE `club_movies`.movie_id = `club_rentals`.movie_id AND `club_rentals`.returned =:future_date';
	$future_date =   mktime(0,0,0,date("m"),date("d")+7,date("Y"));
        $values = array(':future_date' => "Due by ".date("Y-m-d",$future_date));

        $data= getAll($sql, $values);
        return $data;
}
  function getOne($sql, $parameter = null){
        global $db;
        $statement = $db->prepare($sql);
        // execute the SQL statement
        $statement->execute($parameter);
        // return result
        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result;
  }


  function getAll($sql, $parameter = null){
        global $db;
        $statement = $db->prepare($sql);
        // execute the SQL statement
        $statement->execute($parameter);
        // return result
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;
  }

?>
