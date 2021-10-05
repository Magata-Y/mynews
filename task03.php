<?php
//課題1
$name = "Yoshihiro Magata";
if ($name == "Yoshihiro Magata"){
    echo "私は " . $name . " です";
} else {
    echo "あなたの名前ではありません";
}
echo "\n";

//課題2
$num = 0;
for($n = 1; $n <=10000; $n++){
$num += $n;
}
echo $num;
echo "\n";



//課題3
$fruits =["林檎","梨","桃","苺","蜜柑"];
foreach($fruits as $fruits){
    echo $fruits;
    echo "\n";
}

//課題4
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}