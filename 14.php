<?php
function flower($n){
    $gewei=floor($n%10);
    // echo $gewei;
    $shiwei=floor($n/10)%10;
    $baiwei=floor($n/100);
    $sum=$gewei*$gewei*$gewei+$shiwei*$shiwei*$shiwei+$baiwei*$baiwei*$baiwei;
    if($sum==$n){
        return true;
    }else{
        // return false;
        echo '0';
    }
}
echo flower(153);

?>