<?php
$data=[
    "name"=>"Reyhan",
    "age"=>19,
    "football"=>true,
    "height"=>1.75,
    "1"=>"Angka Satu",
    false=>"Benar",
    2.7=>"Dua"
];

print_r($data);

$task1=array(
    "title"=>"Clean motorcyle",
    "priority"=>"Medium",
    "complete"=>false
);

$task2=array(
    "title"=>"Football",
    "priority"=>"Medium",
    "complete"=>false
);

$task3="All task was done!"; //string

$todo=array($task1,$task2,$task3);

echo $todo["title"];

echo PHP_EOL;

echo $todo[2];

// short array bracket[]
/**
 * sampai sini
 * 
 */