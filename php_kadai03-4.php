<?php
/* for文の初めの値を定義する　*/
$start = 1;
/*for文の終わりの値を定義する　*/
$end =100;

for($i =$start;$i <$end ;$i++){

    //５で割り切れたら{}内を実行する
    if($i % 5 == 0 ){
        echo $i;
    }
}