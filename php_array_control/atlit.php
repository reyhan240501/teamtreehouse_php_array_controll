<?php

$data_pemain=[
    ["Reyhan","Lwf"],
    ["Bayu","Cb"],
    ["Khoirudin","Rwf"],
    ["Munif","Lmf"],
    ["Sudiyono","Cb"],
    ["Huda","Cb"],
    ["Reza","Cmf"],
    ["Matsna","Rmf"],
    ["Yosafat","Gk"],
    ["Ferdi","Cmf"],
    ["Rendi","Cf"]
];

$temp_arr=[];
$filter_posisi="Lwf";

foreach($data_pemain as $value)
{
    if($value[1]==$filter_posisi){
        $temp_arr[]=[$value[0],$value[1]];
    }
}

asort($temp_arr);
print_r($temp_arr);




