<?php
// 1．求最后剩下的数字
function aa($n,$m){
    $res = 0;
    if($n==0 && $m==0){
        return -1;
    }else if($n==1){
        return 0;
    }
    for ($i=2; $i < $n; $i++) { 
        $res = ($res+$m)%$i;
    }
    return $res+1;
}
// echo aa(3,2);
// 2.数组分为三组，每组的和尽量相近
function bb($arr){
    rsort($arr);
    $array = [
        [$array($arr)],
        [$array($arr)],
        [$array($arr)],
    ];
    for ($i=0; $i < count($arr); $i++) { 
        $array[2][] = $arr[$i];
        $sum = array_sum($arr[2]);
        if($sum > array_sum($arr[0])){
            $array = [
                $array[2],
                $array[0],
                $array[1],
            ];
        }else if($sum > $array_sum($arr[1])){
            $array = [
                $array[0],
                $array[2],
                $array[1],
            ];
        }
    }
    return $array;
}
// echo bb([11,13,16,26,28,30]);
// 3．返回数组内数字可以组成的最大值
function cc($arr){
    $len=count($arr);
    for ($i=0; $i < $len; $i++) { 
        for ($j=0; $j < $len-1; $j++) { 
            if($arr[$i].''.$arr[$j] > $arr[$j].''.$arr[$i]){
                $temp=$arr[$i];
                $arr[$i]=$arr[$j];
                $arr[$j]=$temp;
            }
        }
    }
    return implode('',$arr);
}
// echo cc([10,20,5]);
// 4.每一个用户的平均等待时间
function dd($start_time,$wait_time){
    $window=[];
    $count=count($start_time);
    // print_r($count);die;
    $wait_time=0;
    for ($i=0; $i < $count; $i++) { 
        $count1=count($window);
        // print_r($count1);die;
        if($count1 <= 4){
            $window[]=$start_time[$i]+$wait_time[$i];
        }
        sort($window);
        // print_r($window);die;
        $onebuy_time=array_shift($window);
        // print_r($onebuy_time);die;
        if($onebuy_time > $start_time[$i]){
            $wait_time+=$onebuy_time-$start_time[$i];
            $newbuy_time=$onebuy_time+$wait_time[$i];
        }else{
            $newbuy_time=$start_time[$i]+$wait_time[$i];
        }
        $window[]=$newbuy_time;
    }
    return $wait_time/$count;
}
// echo dd(
//     [9.01,9.10,9.20,9.21,9.22],
//     [0.30,0.18,0.22,0.47,0.11]
// );
// 5．编写一个单例模式的PDO数据库操作类，传入sql执行返回合适的结果即可
class DB{
    private static $ins;
    private static $db;

    private function __construct($dbConfi){
        list('$id','$dbname','$username','$password')=$dbConfi;
        self::$db=new PDO("mysql:host=$id;dbname=$dbname;charset=utf8",$username,$password);
    }

    public static function getin(...$dbConfi){
        if(self::$ins instanceof SELF){
            return self::$ins;
        }
        return self::$ins=new SELF($dbConfi);
    }

    function create(){
        $data=self::$db->create($sql)->exec();
        if($data){
            return true;
        }else{
            return false;
        }
    }

    function select(){
        self::$db->select($sql)->queryAll(PDO::FETCH_ASSOC);
    }

    function find(){
        self::$db->find($sql)->queryOne(PDO::FETCH_ASSOC);
    }

    function delete(){
        self::$db->delete($sql)->exec();
    }

    function update(){
        self::$db->update($sql)->execute();
    }

    $dbConfi=['127.0.0.1','1607A','root','root'];
    DB::getin(...$dbConfi);
}



?>