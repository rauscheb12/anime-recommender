<?php

//echo "<!-- Page Header -->";
echo "<center><h3>";
if (isset($table_data)){
    echo $table_data[1];
}else{
    echo "No Anime Found.";
}
echo "</h3></center>";
echo "<div class='row'>";
echo "<div class='col'></div>";
echo "<div class='col-10' id='results-table'>";
echo "<table class='table table-striped table-hover'>";

if(isset($labels)&& count($labels)>0){
    echo "<thead><tr>";
    for ($i=0; $i<count($labels); $i++){
        echo "<th>{$labels[$i]}</th>";
    }
    echo "</tr></thead>";
}

if (isset($table_data)){
    echo "<tbody>";
    for ($i=0; $i<count($table_data); $i++){
        $row = $table_data[$i];
        echo "<tr>";
        foreach ($row as $key=>$value){
            echo "<td> {$value} </td>";
        }
        echo "</tr>";
    }
    echo "</tbody>";
}

echo "</table>";
echo "</div>";
echo "<div class='col'></div>";
echo "</div>";

?>