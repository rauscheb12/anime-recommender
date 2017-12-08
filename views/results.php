***REMOVED***

//echo "<!-- Page Header -->";
echo "<center><h3>Results</h3></center>";
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

if (isset($table_data)){
    echo "<tbody>";
    for ($i=0; $i<count($table_data); $i++){
        $row = $table_data[$i];
        echo "<tr>";
        foreach ($row as $key=>$value){
            echo "<td> {$value***REMOVED*** </td>";
        ***REMOVED***
        echo "</tr>";
    ***REMOVED***
    echo "</tbody>";
***REMOVED***

echo "</table>";
echo "</div>";
echo "<div class='col'></div>";
echo "</div>";

***REMOVED***