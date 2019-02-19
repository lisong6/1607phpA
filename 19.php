<?php
function sum($n,$m){
    $count=0;
    for ($i=$n; $i <= $m; $i++) { 
        for ($j=0; $j < strlen($n); $j++) { 
            if($n%10==1){
                $count++;
            }

        }
    }
    return $count;
}
echo sum(1,13);



?>