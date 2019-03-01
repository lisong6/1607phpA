<?php 
function FirstNotRepeatingChar($str){
    $len=strlen($str);
    $count=0;
    for ($i=0; $i < $len; $i++) { 
        for ($j=0; $j < $len; $j++) { 
            if($str[$i]==$str[$j]){
                $count++;
            }
            if($count>1){
                exit;
            }else{
                return $str[$i];
            }
        }
    }
}
echo FirstNotRepeatingChar("zxcvzxc");
?>