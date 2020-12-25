<?php

// $colors= [
//     "red",
//     "green",
//     "blue"
// ];

// foreach($colors as $value){
//     echo $value . "<br>";
// }

$age = [
    "ballu" => 24,
    "bachu" => 21,
    "babu" => 17,
];

// foreach($age as $value){
//      echo $value . "<br>";
// }

// foreach($age as $key => $value){
//      echo $key. "=" .$value . "<br>";
// }

echo "<ul>";
foreach($age as $key => $value){
     echo "<li> $key = $value </li>";
}

echo "</ul>";
?>