<?php 
echo "<h1> Landen Overzicht </h1>";
echo "<h4>id     naam    kleur   prijs</h4>";
foreach($data["countrieData"] as $value) {
    echo $value->id . " " . $value->name . " " . $value->capitalCity . " " . $value->continent . " " . $value->population ;
    echo "<br>";
}


?>
