<?php
function qq($n,$m){
    $res=0;
    if($n==0 && $m==0){
        return -1;
    }
    if($n==1){
        return 0;
    }
    for ($i=2; $i < $n; $i++) { 
       $res=($res+$m)%$n; 
    }
    return $res;
}
echo qq(3,2);

?>