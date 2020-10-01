<?php

$data=["Ariel", "Giring","David"];

$musisi=implode("\n",$data); //Array -> string

echo $musisi;

$musisi_arr=explode("\n",$musisi); // string -> array

print_r($musisi_arr);

array_push($data,"Gesang");

array_unshift($data,"Rossa");

print_r($data);

//Remove Element

array_pop($data); //remove element form end

array_shift($data); // remove element from beginning

unset($data[0]); //remove element array index [0]

print_r(array_values($data)); //Return all array

$colors = array("Red","Green","Blue");

array_unshift($colors, "Yellow"); // add yellow to beginning array

array_push($colors, "Black"); //add black to the end of array 

array_splice($colors,1,1,"Magenta"); //replace red to magenta

unset($color[2]); //remove element from green

print_r($colors);

$input = array("red","green","blue","yellow");
array_splice($input,1,2,["orange","black"]);
var_dump($input);

echo PHP_EOL;

$iceCream=[
    "Alena"=>"Black Cherry",
    "Treasure"=>"Chocolate",
    "Dave"=>"Cookie",
    "Reyhan"=>"Manggo"
];
print_r($iceCream);

$learn = array('Conditionals','Array','Loops');
$learn[] = 'Build something awesome!';
array_push($learn,'Function','forms','objects');
array_unshift($learn,'HTML','CSS');
echo 'you removed' . array_shift($learn);

