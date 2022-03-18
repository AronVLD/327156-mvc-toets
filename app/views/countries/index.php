<?php 
echo "<h1> Landen Overzicht </h1>";
echo "<h4>id     naam    Hoofdstad   Continent   populatie</h4>";
foreach($data["countryData"] as $value) {
    echo $value->id . " " . $value->name . " " . $value->capitalCity . " " . $value->continent . " " . $value->population ;
    echo "<br>";
}


?>
