<?php
// 1.
function sxh($n){
    $gewei=floor($n%10);
    // echo $gewei;
    $shiwei=floor($n/10)%10;
    // echo $shiwei;
    $baiwei=floor($n/100)%100;
    // echo $baiwei;
    $g=$gewei*$gewei*$gewei;
    $s=$shiwei*$shiwei*$shiwei;
    $b=$baiwei*$baiwei*$baiwei;
    if($g+$s+$b==$n){
        return true;
    }else{
        return false;
    }
}
// echo sxh(154);
// 2.
function san($n){
    $len=strlen($n);
    $x=0;
    for ($i=0; $i < $len; $i++) { 
        if(isset($n[$i])){
            $x++;
        }
        if($x==3){
            return $n[$i];
        }
    }
}
// echo san('chcksickskihh');
// 3.
function hw($n){
    $len=strlen($n);
    $start=0;
    $end=$len-1;
    for ($i=0; $i < $len; $i++) { 
        if($n[$start]==$n[$end]){
            $start++;
            $end--;
            return true;
        }else{
            return false;
        }
    }
}
// echo hw('abba');
// 4.
function fb($n){
    if($n==0){
        return 0;
    }else if($n==1 || $n==2){
        return 1;
    }else{
        return fb($n-1)+fb($n-2);
    }
}
// echo fb(7);
// 5.
function zz($n){
    $zm=range('a','z');
    $count=count($zm);
    $s=($n/$count);
    $y=($n%$count);
    $arr=array();
    for ($i=0; $i < $count; $i++) { 
        if($y==0){
            $s--;
            $arr=array_unshift($arr,$zm[$count-1]);
        }else{
            $arr=array_unshift($arr,$zm[$y-1]);
        }
    }
    echo implode('',$arr);
}
// echo zz(27);
// 6.
function fbb($n){
    if($n==0){
        return 0;
    }else if($n==1 || $n==2){
        return 1;
    }else{
        return fbb($n-1)+fbb($n-2);
    }
}
// echo fbb(3);

?>