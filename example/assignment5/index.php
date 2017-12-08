<?php
/* This script returns a list of movies from the 'movies' table
*
*  Directory structure:
*   views - contains all the templates needed for displaying results
*
  assets - contains header, footer, and menu
*/

// Establish database connection
include('pdo_connect.php');
include('model.php');

// Include page header
include('assets/pageheader.html');

// Obtain a list of movie types
$sql = "SELECT DISTINCT type FROM `club_movies`";
// Obtain data using getAllRecords() method
$movie_types = getAllRecords($sql);

// display menu
include('assets/menu.php');

// Read the main task using 'mode'
$mode ='movielist';
if (isset($_GET['mode']))
        $mode = $_GET['mode'];

switch ($mode){
        case 'memberlist':
                // display a list of members
                 $sql = "SELECT concat(last_name, ', ', first_name) as fullname, phone FROM `club_members`";
                // obtain data
                $table_data = getAllRecords($sql);
                // define column labels
                $labels = array('Full Name', 'Phone Number');
                // Display output
                include('views/customerview.php');
                break;

        case 'movietype':
 // Define default movie type
                $genre = 'Adventure';
 // Read user input
                if (isset($_GET['genre'])){
                // update genre value
                $genre = $_GET['genre'];
                }
                // Define SQL statement
                $sql = "SELECT title,year,movie_id FROM `club_movies` WHERE type= :genre";

                // Define values for named parameters using an associative array
                $values = array(':genre'=>$genre);

                // Obtain data for the output
                $table_data = getAllRecords($sql, $values);

                // Define column labels
                $labels = array('Title', 'Year','ID');
                // Display output
                include('views/movielistview.php');
                break;
        case 'p6':
		global $type;
		$type='Movies checked out before 12/15/09';
                 global $genre;
                 // Define SQL statement
                $sql = "SELECT `club_movies`.title, `club_movies`.type, `club_rentals`.date_out FROM `club_movies`,`club_rentals`
WHERE date_out < 20091215 AND `club_movies`.movie_id = `club_rentals`.movie_id";

                // Define values for named parameters using an associative array
                $values = array(':genre'=>$genre);

                // Obtain data for the output
                $table_data = getAllRecords($sql, $values);

                // Define column labels
                $labels = array('Title', 'Genre', 'Date-Out');
                // Display output
                include('views/listview.php');
                break;
        case 'p7':
		$type='Sci-Fi movies checked out after 12/14/09';
                 $genre = 'Sci-Fi';
                 // Define SQL statement
                $sql = "SELECT `club_movies`.title, `club_movies`.type, `club_rentals`.date_out FROM `club_movies`,`club_rentals`
WHERE date_out > 20091214 AND type = 'Sci-Fi' AND `club_movies`.movie_id = `club_rentals`.movie_id ";
                // Define values for named parameters using an associative array
                $values = array(':genre'=>$genre);
 // Obtain data for the output
                $table_data = getAllRecords($sql, $values);

                // Define column labels
                $labels = array('Title','Genre', 'Date-Out');
                // Display output
                include('views/listview.php');
                break;
        case 'p8':
		$type='Drama movies released between 1990 and 2000'; 
                 $genre = 'Drama';
                 // Define SQL statement
                $sql = "SELECT `club_movies`.title, `club_movies`.type, `club_movies`.year FROM `club_movies`
			WHERE year > 1990 AND year < 2000 AND type = 'Drama'";
                // Define values for named parameters using an associative array
                $values = array(':genre'=>$genre);

                // Obtain data for the output
                $table_data = getAllRecords($sql, $values);

                // Define column labels
                $labels = array('Title','Genre','Year');
                // Display output
                include('views/listview.php');
                break;
          case 'p9':
                $type='Favorite movies';
		 $genre = 'Drama'; 
                 // Define SQL statement
                $sql = "SELECT concat(`club_members`.last_name, ', ',  `club_members`.first_name)as fullname,`club_movies`.title, `club_movies`.type, `club_movies`.year
FROM `club_members`,`club_movies`,`club_rentals`
WHERE `club_movies`.movie_id= `club_rentals`.movie_id AND `club_members`.member_id= `club_rentals`.member_id ";
                // Define values for named parameters using an associative array
                $values = array(':genre'=>$genre);

                // Obtain data for the output
                $table_data = getAllRecords($sql, $values);

                // Define column labels
                $labels = array('Name', 'Title', 'Genre', 'Year');
                // Display output
                include('views/listview.php');
                break;
         case 'p10':
		$type='Favorite Drama/Adventure movies';
                 $genre1 = 'Drama';
		 $genre2 = 'Adventure';

                 // Define SQL statement
                $sql =  "SELECT concat(`club_members`.last_name,' , ',  `club_members`.first_name)as fullname, `club_movies`.title, `club_movies`.type, `club_movies`.year FROM `club_members`, `club_rentals`, `club_movies` WHERE `club_movies`.movie_id = `club_rentals`.movie_id AND `club_members`.member_id = `club_rentals`.member_id AND (`club_movies`.type = :genre1 OR `club_movies`.type = :genre2)";

                // Define values for named parameters using an associative array
                $values = array(':genre1'=> $genre1, ':genre2'=> $genre2);

                // Obtain data for the output
                $table_data = getAllRecords($sql, $values);

                // Define column labels
                $labels = array('Name', 'Title', 'Genre', 'Year');
                // Display output
                include('views/listview.php');
                break;

          case 'p11':
                $type='Sci-Fi movies checked out by most valuable customer';
		 $genre = 'Sci-Fi';
                 // Define SQL statement
                $sql = "SELECT concat(`club_members`.last_name,', ', `club_members`.first_name)as fullname, `club_movies`.title, `club_movies`.type, `club_movies`.year FROM `club_members`,`club_movies`,`club_rentals` WHERE `club_movies`.movie_id= `club_rentals`.movie_id AND `club_rentals`.member_id= `club_members`.member_id AND `club_members`.member_id= 5 AND (`club_movies`.type =:genre)";

                // Define values for named parameters using an associative array
                $values = array(':genre'=>$genre);

                // Obtain data for the output
                $table_data = getAllRecords($sql, $values);

                // Define column labels
                $labels = array('Name', 'Title', 'Genre', 'Year');
                // Display output
                include('views/listview.php');
                break;

         case 'p12':
		$type='Popular Drama movies';
                 $genre = 'Drama';
                 // Define SQL statement
   // Define SQL statement
                $sql = "SELECT concat(`club_members`.last_name,', ', `club_members`.first_name)as fullname,`club_movies`.title, `club_movies`.type, `club_movies`.year
FROM `club_members`,`club_movies`,`club_rentals`
WHERE `club_movies`.movie_id= `club_rentals`.movie_id AND `club_members`.member_id= `club_rentals`.member_id AND (`club_rentals`.date_out >20070101 AND (type =:genre))";

                // Define values for named parameters using an associative array
                $values = array(':genre'=>$genre);

                // Obtain data for the output
                $table_data = getAllRecords($sql, $values);

                // Define column labels
                $labels = array('Name', 'Title', 'Genre', 'Year');
                // Display output
                include('views/listview.php');
                break;

          case 'p13':
                $type='Popular Drama/Sci-Fi movies';
		 $genre1 = 'Drama';
                 $genre2 = 'Sci-Fi';

                 // Define SQL statement
                $sql = "SELECT concat(`club_members`.last_name,', ', `club_members`.first_name)as fullname, `club_movies`.title, `club_movies`.type, `club_movies`.year
FROM `club_members`,`club_movies`,`club_rentals`
WHERE `club_movies`.movie_id= `club_rentals`.movie_id AND `club_members`.member_id= `club_rentals`.member_id AND ((`club_rentals`.date_out >=2007-01-01 AND `club_rentals`.date_out <= 20091231) AND (`club_movies`.type=:genre1 OR`club_movies`.type=:genre2))";

                // Define values for named parameters using an associative array
                $values = array(':genre1'=> $genre1, ':genre2'=> $genre2);

                // Obtain data for the output
                $table_data = getAllRecords($sql, $values);

                // Define column labels
                $labels = array('Name', 'Title', 'Genre', 'Year');
                // Display output
                include('views/listview.php');
                break;
  default :
?>
                 <div class=row'><div class='col' style='text-align:center'>

                 <h2>Welcome to Online Movie Store</h2>
                 <h3>Coming Soon</h3>
                 <div class='col'>
                 <img src='http://washington.uww.edu/data/cs382/moviestore/VIII-678304.jpg' alt='starwars' />
                 </div>
<?php

                break;
} // end switch

// Display footer
include('assets/pagefooter.html');

// End main

?>







