<?php
function max_array($arr){
///とりあえず配列の最初の要素を一番大きい値とする
$max_nunber = $arr[0];
foreach($arr as $a){
//どうしたらいいのかわからない
        if($a>$arr){
            echo $max_nunber;
        }
}
//　Qforeach での最大数の求め方のコードを聞く
return $max_nunber;
}
max_array(1,2,3,4,5,6,7,8,9,10);
?>