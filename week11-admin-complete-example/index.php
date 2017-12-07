<?php
/* This script returns a list of movies from the 'movies' table 
*
*  Directory structure:
*   views - contains all the templates needed for displaying results
*   assets - contains header, footer, and menu 
*/

// Establish database connection
include('pdo_connect.php');
include('model.php');

// Include page header
include('assets/pageheader.html');


// display menu
include('assets/menu.php');

// Read the main task using 'mode'
$mode ='movielist';
if (isset($_GET['mode']))
	$mode = $_GET['mode'];

switch ($mode){

	case 'addmovie':
		// display blank form
		include('views/blankmovieview.html');
		break;
	case 'insertmovie':
		// add new movie to the database
		// validate data
		$title = '-1';
		if (isset($_POST['title']))
			$title = $_POST['title'];
		$genre = '-1';
                if (isset($_POST['genre']))
                        $genre = $_POST['genre'];
		$year = '-1';
                if (isset($_POST['year']))
                        $year = $_POST['year'];
		//echo "Title: {$title} , Genre: {$genre}, Year: {$year}";
		if ($title !== '-1' && $genre !== '-1' && $year !== '-1' ){
		// insert new movie
		   $result = insertNewMovie($title, $genre, $year);
		   if ($result){
			// added a new movie to the database
			echo "Added new movie to the database";
		   } else {
			echo "Could not add the movie!";
		   }
		} else {
		// display an error message
			echo "Invalid data!";
		}
		break;
	case 'updatemovie':
		// obtain a list of movies
		$sql = 'SELECT movie_id, title FROM `club_movies` 
			ORDER BY title';
		$table_data = getAllRecords($sql);
		// display list of movies
		include('views/selectmovieview.php');
		break;
	case 'displayselectedmovie':
		// display data for the selected movie
		echo "Movie id: ".$_GET['movieid'];
		if(isset($_GET['movieid'])){
		  $sql = "SELECT movie_id, title, type, year
			FROM `club_movies` WHERE movie_id=:movieid";
		  // obtain data
		  $data = array(':movieid'=>$_GET['movieid']);
		  $table_data = getOneRecord($sql, $data);
		  // display a form
		   include('views/displaymovieformview.php');
		}
		break;
	case 'confirmmoviedata':
		// update selected movie
		 if(isset($_GET['movieid'])){
		   // define SQL statement
		  $sql = "UPDATE `club_movies` SET title=:title,
			type=:type, year=:year WHERE movie_id=:movieid";
			
  		  // define values for named parameters
		  $data = array(':title'=>$_POST['title'],
				':type'=>$_POST['genre'],
				':year'=>$_POST['year'],
				':movieid'=>$_GET['movieid']);
		  $stm=$db->prepare($sql);
		  $stm->execute($data);
		  if ($stm){
			echo "Updated movie data";
		  } else {
			echo "Could not update movie data!"; 
		  }
		}
		break;
	default :
		// display default view
		include('views/defaultview.php');
		break;
} // end switch

// Display footer
include('assets/pagefooter.html');

// End main

?>
