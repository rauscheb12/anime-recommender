<?php
  echo "<div class=row'><div class='col'>";
  echo "<h3>List of Movies</h3>";
  // Use a table to display output
  echo "<table class='table' >";
  // display column labels
  if (isset($labels)&& count($labels)>0){
    echo "<thead><tr>";
    for ($i=0; $i<count($labels); $i++){
        echo "<td>{$labels[$i]}</td>";
    }
    echo "</tr></thead>";
  }

  if (isset($table_data)){
   echo "<tbody>";
   for ($i=0; $i<count($table_data); $i++){
    // Each element in the $data array is an associative array (record)
    // read the curent record into the variable $row
    $row = $table_data[$i];

    //  Display the output
    echo "<tr>";
 foreach ($row as $key=>$value){
    echo "<td> {$value} </td>";
    }

echo"<td><form action='index.php?mode=confirmreturnmovies&movieid={$row['movie_id']} &title={$row['title']}' method='post'><button type='submit' class='btn btn-primary'>
 Return </button></form></td>";

    echo "</tr>";
   }
   echo "</tbody>";
  }
  echo "</table>";
  echo "</div></div>";

?>

