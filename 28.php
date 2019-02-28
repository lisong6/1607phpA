<?php
function zz($array,$sum){
    $count=count($array);
    // echo $count;
    sort($count);
    $array=[
        array_shift($array);
        array_shift($array);
    ];
    for ($i=0; $i < $count; $i++) { 
        if($array[$i]*$array[$i]<$sum){
            return $sum;
        }
    }
    
}
print_r(zz([1,3,5,7,9],5));

?>