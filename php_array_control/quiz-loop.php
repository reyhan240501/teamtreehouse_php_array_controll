<?php


/**
 * 
 * 28/09/2020
 * Sorting Array
 */

$facts = [
    57 => '  on heinz ketchup botles reprensent',
    2  => '  is the approcimate hours a day',
    18 => '  is the avarge horse',
    10 => '  per cen of the',
    11 => '  empiree state buliding',
    98 => '  % of the atoms',
    69 => '  is the largets'
];
for($a=1;$a<=100;$a++){
                                
    if (isset($facts[$a])){
        echo $a;
        echo $facts[$a]."\n";
    }else{
    echo $a."\n";
    }
}