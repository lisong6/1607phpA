<?php
function two($num1,$num2){
    $sum=0;
    $left=0;
    while(true){
        $sum=$num1^$num2;
        $left=($num1&$num2)<<1;
        $num1=$sum;
        $num2=$left;
        if($num1==0){
            return $num2;
        }else if($num2==0){
            return $num1;
        }
    }
    return $sum;
}
echo two(12,13);

?>