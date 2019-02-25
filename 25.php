<?php
function fz($str){
    $str=explode(' ',$str);
    // print_r($str);
    $str=array_reverse($str);
    // print_r($str);
    $str=implode(' ',$str);
    // print_r($str);
    return $str;
}
echo fz("student. a am I");


?>