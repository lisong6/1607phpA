<?php
function ss($arr){
    $count=count($arr);
    for ($i=0; $i < $count; $i++) { 
        for ($j=$i+1; $j < $count; $j++) { 
            if($arr[$i].''.$arr[$j] > $arr[$j].''.$arr[$i]){
                $temp==$arr[$i];
                $arr[$i]==$arr[$j];
                $arr[$j]==$temp;
            }
        }
    }
    return implode('',$arr);
}
echo ss([3,32,321]);

?>