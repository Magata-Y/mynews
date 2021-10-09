<?php
//課題1
function double($num){
    $double = $num * 2;
    return $double;
}
echo double(33);
echo "\n";

//課題2
function add($a, $b){
    $addnum = ($a + $b);
    return $addnum;
}
echo add(51,59);
echo "\n";

//課題3
$array = [1, 3, 5, 7, 9];
function arrrrr($arr){
        $aaa = 1;
        foreach($arr as $arr){
            $aaa *= $arr;
        }
        return $aaa;
    }
echo arrrrr($array);
echo "\n";

//課題4
 function max_array($arr){
     $max_number = $arr[0];
     foreach($arr as $a){
         if($max_number < $a){
             $max_number = $a;
         }
     }
    return $max_number;
 }
 echo max_array([12,8,34,73,68]);
 echo "\n";
 
 //課題5
 $str ="<h1>タグを取り除く</h1>";
 echo strip_tags($str);
 echo "\n";
 $inc = array(1, 2, 4);
 array_push($inc, 8, 16);
 print_r($inc);
 echo "\n";
 $merge = array_merge($array, $inc);
 print_r($merge);
 echo "\n";
 $time = mktime(0);
 echo(date('Y年m月d日h時i分s秒', $time));
 echo "\n";
 echo date("Y/m/d/h,m,s");
 echo "\n";
 