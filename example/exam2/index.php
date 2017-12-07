	<?php
		session_start();
		 // include database connection info
		 include('pdo_connect.php');
		// include functions needed to data from the database
		 include('model/model.php');
		 // Read the main task using the primary key 'mode'
	global $current_date;
                 $current_date = date("Y-m-d");
	 $mode = '';
		  if (isset($_REQUEST['mode']))
			   $mode = $_REQUEST['mode'];
//		 global $current_date;
//		 $current_date = date("Y-m-d");

		 switch ($mode) {
		case 'checkLogin' :

			$data = checkValidUser();
			if (isset($data) && isset($data['member_id'])){
				$_SESSION['user'] = $data['last_name'].', '.$data['first_name'];
				$_SESSION['member_id'] = $data['member_id'];
			}
			include('assets/pageheader.php');
			include('views/defaultview.php');
			include('assets/pagefooter.php');
			break;

		case 'logout' :
			// destroy session variables and display login form
			session_destroy();
			setcookie(session_name(), '', time()-1000, '/');
				$_SESSION = array();
			// display default view
					include('assets/pageheader.php');
					include('views/defaultview.php');
					include('assets/pagefooter.php');
			break;
			
	 case 'movietype':
	 // Define default movie type
				   include('assets/pageheader.php');
				   $genre = 'Adventure';
	 // Read user input
					if (isset($_GET['genre'])){
					// update genre value
					$genre = $_GET['genre'];
					}
					// Define SQL statement
					$sql = "SELECT title,movie_id,year FROM `club_movies` WHERE type= :genre";
					// Define values for named parameters using an associative array
					$values = array(':genre'=>$genre);

					// Obtain data for the output
					$table_data = getAll($sql, $values);
					// Define column labels
					$labels = array('Title','ID','Year','Action');
					// Display output
					include('views/selectmovieview.php');
					include('assets/pagefooter.php');
					break;
					
	case 'checkoutmovie' :
		// insert new movie
				include('assets/pageheader.php');
				$result = insertNewMovie($_SESSION['member_id']);
				if ($result){
				$future_date = mktime(0,0,0, date("m"), date("d")+7, date("Y"));
						// movie added to the database table
				echo "<b>Successfully checked out the movie " .$_GET['title']."</b></br>";
				echo "\nYour movie is due by " .date("Y-m-d", $future_date);
				   } 
				   else {
						echo "Could not check out the movie!";
				   }
				break;
				
	case 'displaycheckedoutmovies' :
			 include('assets/pageheader.php');
			 $values = array(':id'=>$_SESSION['member_id']);
			// Obtain data for the output
			 $table_data = getMyRentalHistory($values);
			// Define column labels
			 $labels = array('Movie Title','ID', 'Check Out Date', 'Return Date','Action');
			 include('views/rentedmovieview.php');
			 include('assets/pagefooter.php');
			 break;
		 
	 case 'confirmreturnmovies':
				  include('assets/pageheader.php');
				// update the selected movie
				   
				  $future_date =   mktime(0,0,0,date("m"),date("d")+7,date("Y"));       
			// define SQL statemen
				//$due_date = "Due by:  ".date("Y-m-d", $future_date);
                 
				  $sql = "UPDATE `club_rentals` SET returned=:current_date WHERE member_id =:id AND movie_id = :movieid AND (returned = :future_date)";
				  // define values for named parameters
				  $values= array(':current_date'=>date("Y-m-d"), ':id'=>$_SESSION['member_id'],':movieid' =>$_GET['movieid'],':future_date'=>"Due by ".date("Y-m-d", $future_date));
				  $stm=$db->prepare($sql);
				  $stm->execute($values);
				  if ($stm){
						echo "<b>Successfully returned the movie ".$_GET['title']."</b>";

				  } else {
						echo "Could not return the movie ".$_GET['title']."!";
				  }
				
				  include('assets/pagefooter.php');
		break;
															

		case 'myrentalhistory':
					include('assets/pageheader.php');
					$values = array(':id'=>$_SESSION['member_id']);
					$mydata = getMyPurchaseHistory($values);
					include('views/displaysalesview.php');
					include('assets/pagefooter.php');
					break;
		default :
					// display default view
				include('assets/pageheader.php');
				include('views/defaultview.php');
				include('assets/pagefooter.php');

					break;
			}
	?>
