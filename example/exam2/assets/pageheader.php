<!doctype html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <!-- Set the viewport so this responsive site displays correctly on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Movie Store </title>
    <link rel='stylesheet' href='assets/css/styles.css' > 
    <!-- Include bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	
    <!-- Include jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script>

$(document).ready(function(){
// Define an event handler
});

</script>

 </head>
 <body>
 <!-- page header -->
<div class='container'>
   <div class='row'>
	<div class='col-4'>
		<img src='http://www.southjersey.com//images/page_movies.jpg' alt='moviestore' height='100'>	
	</div>
	<div class='col-5'>
		<h1>Online Movie Store</h3>

	</div>
	<div class='col-3'>
                <?php if (isset($_SESSION['user'])){
                      echo $_SESSION['user'];
                      echo "<a  href=\"index.php?mode=logout\">  Sign out</a>";
                     }
		?>
	</div>
   </div>
<?php
  // Obtain a list of movie types
  $sql = "SELECT DISTINCT type FROM `club_movies`";
  // Obtain data using getAllRecords() method
  $movie_types = getAll($sql);
?>
   <div class='row'>
   <div class='col-12'>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" 
       aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
       <li class="nav-item active">
        <a class="nav-link" href="index.php">Home </a>
       </li>
    <?php if (isset($_SESSION['user'])){ ?>

<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Rent movies - Select Genre: </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
           <?php
        for ($i=0; $i<count($movie_types); $i++){
          // each element is an associative array that defines a particular movie type
          $movie_type = $movie_types[$i]['type'];
          echo "<a class='dropdown-item'
                href='index.php?mode=movietype&genre={$movie_type}'>{$movie_type}</a>";
        } // end for
        ?>

        </div>
       </li>
       <li class="nav-item active">
        <a class="nav-link" href="index.php?mode=displaycheckedoutmovies">Return Checked Out Movies</a>
       </li>
       <li class="nav-item active">
        <a class="nav-link" href="index.php?mode=myrentalhistory">My Rental History</a>
       </li>

<?php } ?>
     </ul>
   </div>
  </nav>
 </div>
</div>


<div class='row' id='content'><!-- page content -->
  <div class='col'>

