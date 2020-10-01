<?php

$currentYear = date('Y');
$year = $currentYear - 10;

while ($year <= $currentYear) {
    echo $year . "<br />\n";
    $year++;
}

do{
    echo $year . "<br />\n";
}while(++$year <= $currentYear);
?>