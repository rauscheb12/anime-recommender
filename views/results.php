<?php

//echo "<!-- Page Header -->";
echo "<center><h3>Results</h3></center>";
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
            if ($key == 'anime_id'){
                continue;
            } elseif ($key =='name'){
                $id = $row['anime_id'];
                echo "<td><a href='index.php?mode=info&anime_id={$id}'>{$value}</a></td>";
            } else {
                echo "<td> {$value} </td>";
            }
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