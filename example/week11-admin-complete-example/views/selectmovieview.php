***REMOVED***
  echo "<div class=row'><div class='col'>";
  echo "<h3>List of Movies</h3>";
  // Use a table to display output
  echo "<table class='table' >";
  // display column labels
    echo "<thead><tr>";
	echo "<td>Movie title</td>";
    echo "<td>Action</td></thead>";
 

  if (isset($table_data)){
   echo "<tbody>";
   for ($i=0; $i<count($table_data); $i++){
    // Each element in the $data array is an associative array (record)
    // read the curent record into the variable $row
    $row = $table_data[$i];
    //  Display the output
    echo "<tr>";
    echo "<td> {$row['title']***REMOVED*** </td>";
    echo "<td><form action='index.php?mode=displayselectedmovie&movieid={$row['movie_id']***REMOVED***'
          method='post'><button type='submit' class='btn btn-primary'>
		Select</button></form></td></tr>";
    ***REMOVED***
    echo "</tr>";
   echo "</tbody>";
  ***REMOVED***
  echo "</table>";
  echo "</div></div>";

***REMOVED***
