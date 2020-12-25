<?php
 $name=  array("rahul", "monu", "ballu", "bachu");
// @name[0]= "rahul";
// @name[1]= "monu";
// @name[2]= "ballu";
// @name[3]= "bachu";

// print_r($name); // It will print informaton

$result= print_r($name, true);  // When return ir set to true, 
                                  // print_r will return the informatio rather than print it
echo $result;
?>