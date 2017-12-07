***REMOVED***
  echo "<div class=row'><div class='col'>";
  echo "<h3>List of Movies</h3>";
  // Use a table to display output
  if (isset($genre))
      echo "<h4>Movie Type: {$genre***REMOVED***</h4>";
  echo "<table class='table' >";
  // display column labels
  if (isset($labels)&& count($labels)>0){
    echo "<thead><tr>";
    for ($i=0; $i<count($labels); $i++){
        echo "<td>{$labels[$i]***REMOVED***</td>";

    ***REMOVED***
    echo "</tr></thead>";
  ***REMOVED***

  if (isset($table_data)){
   echo "<tbody>";

   for ($i=0; $i<count($table_data); $i++){
// Each element in the $data array is an associative array (record)
    // read the curent record into the variable $row
    $row = $table_data[$i];
//echo "<tr><td><form action='#'  method='post'><button type='submit' class='btn btn-primary'>
             // echo Purchase</button></form></td></tr>";
    //  Display the output
    echo "<tr>";

              
    foreach ($row as $key=>$value){


echo "<td>{$value***REMOVED***</td>";


    ***REMOVED***
    echo "<td><form action='index.php?mode=checkoutmovie&movieid={$row['movie_id']***REMOVED***''  method='post'><button type='submit' class='btn btn-primary'>
               Check Out</button></form></td>";

    echo "</tr>";
   ***REMOVED***
   echo "</tbody>";

  ***REMOVED***
  echo "</table>";
  echo "</div></div>";

***REMOVED***

