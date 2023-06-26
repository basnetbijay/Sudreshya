<?php
$color = 'red';
echo "the color of bol0d is ".$color;
  $num = 20;
var_dump($num);
$name = "bijay";
var_dump($name);
$number =  ['1','2','3','4'];
foreach($number as $element){
    echo  "<br>".$element ;
}
$text  = " hello";
echo strrev($text);
echo"<br>";
$job = 'engineer';
echo  str_replace('engineer' , 'contractor' , 'contractor');

$day = 'sunday';
// if ($age >18){
//     echo "elligible for  voting";
// }
// else {
//     echo 'not elligible fot voting';
// }
echo "<br>";
switch($day){
    case 'sunday':
        echo"its working day";
        break;
        case 'monday':
            echo "its  sunny day";
            break;
            case 'tuesday':
                echo"its working day";
                break;

                case 'wednesday':
                    echo "its  sunny day";
                    break;
                    default:
                    echo "it is holiday";
}
// foreach($arr as $value ){
//     echo "the value is ".$value;
// }
echo "<br";
 function myFunction($a,$b){
    $sum = $a + $b;
    return $sum;

 }
 echo myFunction(3,4);
