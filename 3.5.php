<?php
function aa($b){
    $res=decbin($b);
    $len=strlen($res);
    // return $len;die;
    $count=0;
    for ($i=0; $i < $len; $i++) { 
        if($res[$i]==1){
            $count++;
        }
    }
    return $count;
}
echo aa(10);


?>