<?php

// $score=49;

// if($score>=60)
// {
//     echo "You Past the test"; // 
// }elseif($score>=50 && $score<60)
// {
//     echo "Try Again";

// }else
// {
//     echo "You fail the test";
// }



function grade($number)
{
    if( $number<=100 && $number>=96)
    {
        echo "A";
    }elseif($number<=95 && $number>=66)
    {
        echo "B";
    }elseif($number<=65 && $number>=61)
    {
        echo "C";
    }elseif($number<=60 && $number>=0)
    {
        echo "D";
    }else{
        echo "anda tidak mengerjakan";
    }
}
 grade (96);

 //compare

 var_dump((1<=>"2")); //true
 var_dump((1!=2)); //true

 //identical
 var_dump(1!=="1");  //false

 $num=10000;
 if($num>10)
 {
     if($num<=1000)
     {
         echo "your number is in range"; //jika nilai 10 - 1000
     }else
     {
         echo "your number is greater then 1000"; //jika lebih dari 1000
     }
 }else
 {
    echo "your number is NOT in range"; //jika kurang dari 10
 }
 var_dump( ($number=true) || (false && true) );

 b();

 switch(date('1') )
 {
     case "Monday":
        echo "Starting Day";
        break;
    case "Wednesday":
        echo "Holiday";
        break;
    case "Thursday":
        echo "vacation";
        break;
    default:
        echo "Long Holiday";
 }

 ?>


