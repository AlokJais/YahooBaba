<?php

// $colors= array("red", "blue", "yellow", "green");
// $colors= array("red", 20, "yellow", 10.25);
$colors= ["red", 20, "yellow", 10.25];

// $colors[0]= "red";
// $colors[1]= "green";
// $colors[2]= "blue";
// $colors[3]= "yellow";

// echo $colors[0] ."<br>";
// echo $colors[1] ."<br>";
// echo $colors[2] ."<br>";
// echo $colors[3] ."<br>";

// print_r($colors);

// echo "<pre>";
// print_r($colors);
// echo "</pre>";

// for($i=0; $i<4; $i++){
//     echo $colors[$i] . "<br>";
// }
echo "<ul>";
for($i=0; $i<4; $i++){
    echo "<li> $colors[$i] </li>";
}
echo "</ul>";

?>