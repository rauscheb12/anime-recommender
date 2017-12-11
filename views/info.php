***REMOVED***

// page header
echo "<center><h3>";
if (isset($table_data) && $table_data['anime_id'] != 0){
    echo $table_data['name'];
***REMOVED***else{
    echo "No Anime Found.";
***REMOVED***
echo "</h3></center>";

// fill table
if (isset($table_data) && $table_data['anime_id'] != 0){

    echo "<div class='row'>";
    echo "<div class='col'></div>";
    echo "<div class='col-10' id='results-table'>";
    echo "<table class='table table-striped table-hover'>";

    if(isset($labels)&& count($labels)>0){
        echo "<thead><tr>";
        for ($i=0; $i<count($labels); $i++){
            echo "<th>{$labels[$i]***REMOVED***</th>";
        ***REMOVED***
        echo "</tr></thead>";
    ***REMOVED***

    echo "<tbody>";
    echo "<td>{$table_data['anime_id']***REMOVED***</td>";
    echo "<td>{$table_data['name']***REMOVED***</td>";
    echo "<td>{$table_data['type']***REMOVED***</td>";
    echo "<td>{$table_data['episodes']***REMOVED***</td>";
    echo "<td>{$table_data['score']***REMOVED***</td>";
    echo "<td>{$table_data['members']***REMOVED***</td>";
    echo "<td>{$table_data['studio_id']***REMOVED***</td>";
    echo "<td>{$table_data['rating']***REMOVED***</td>";
    echo "<td>{$table_data['status']***REMOVED***</td>";
    echo "<td>{$table_data['premiered']***REMOVED***</td>";
    echo "</tbody>";
***REMOVED***


echo "</table>";
echo "</div>";
echo "<div class='col'></div>";
echo "</div>";

// Update Button
echo "<div class='row'>";
echo "<div class='col'></div>";
echo "<div class='col-10'>";
echo "<a class='btn btn-success form-control' href='index.php?mode=editanime&anime_id=";
echo $_GET['anime_id'];
echo "'>Edit</a>";
echo "</div>";
echo "<div class='col'></div>";
echo "</div>";

echo "<div class='row'></div>";

// Delete button
echo "<div class='row'>";
echo "<div class='col'></div>";
echo "<div class='col-10'>";
echo "<a class='btn btn-danger form-control' href='index.php?mode=deleteanime&anime_id=";
echo $_GET['anime_id'];
echo "'>Delete</a>";
echo "</div>";
echo "<div class='col'></div>";
echo "</div>";

***REMOVED***