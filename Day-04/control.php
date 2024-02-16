<?php
// $age =readline("Enter age:");

// if($age < 18){
//     echo "You are Young";
// }else if($age >= 18 && $age < 80){
//     echo "You are adult";
// }else{
//     echo "You are old";
// }



$option = (int) readline("Enter 1.Sum 2.Sub 3.Mul 4.Div:");
$a = (int) readline("Enter first value");
$b = (int) readline("Enter second value");

switch ($option) {
    case 1:
        echo $a + $b;
        break;
    case 2:
        echo $a - $b;
        break;
    case 3:
        echo $a * $b;
        break;
    case 4:
        echo $a / $b;
        break;
    default:
    echo "wrong value";
    
}