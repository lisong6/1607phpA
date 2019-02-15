<?php
function fb($num){
    if($num<=0){
        return 0;
    }else if($num==1||$num==2){
        return 1;
    }else{
        return fb($num-1)+fb($num-2);
    }
}
// echo fb(4);

function fbb($num){
    $arr=array();
    // $arr[0]==$arr[1]=1;
    $arr[0]==1;
    $arr[1]==1;
    for ($i=2; $i < $num; $i++) { 
        $arr[$i]=$arr[$i-1]+$arr[$i-2];
    }
    print_r($arr[$num-1]);
}
echo fbb(4);
//递归方法实现的时间复杂度高
?>