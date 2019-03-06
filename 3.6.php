<?php
function aa($arr,$s){
    $len=count($arr);
    // echo $len;
    // for ($i=0; $i < $len; $i++) { 
    //     if($s==$arr[$i]){
    //         return $arr[i]-1;
    //     }
    // }
    foreach ($arr as $key => $value) {
        if($s==$arr[$value]){
            return $arr[$key];
        }
    }
}
print_r(aa([1,2,3,4,5],5));
// print_r(aa([5,6,7,8,9],7));
?>