<?php
// 1
function double($i){
    $i*=2;
    return $i;
}
echo double(10);
echo "\n";

// 2
function sum($a,$b){
    $a+=$b;
    return $a;
}
echo sum(5,10);
echo "\n";

// 3
$arr = array(1,3,5,7,9);
function multi($arr){
    $total=1;
    foreach($arr as $value){
        $total*=$value;
    }
    return $total;
}
echo multi($arr);
echo "\n";

// 4
//$arr = array(1,3,5,7,10);
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number<$a){
            $max_number=$a;
        }
}
return $max_number;
}
echo max_array($arr);
echo "\n";

// 5

// strip_tags
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";
// <p> と <a> は許可します
echo strip_tags($text, '<p><a>');

// array_push
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
echo print_r($stack,true);

// array_merge
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
echo print_r($result,true);
echo "\n";

//time mktime date
$nextWeek = time() + (7 * 24 * 60 * 60);
                   // 7 日 * 24 時間 * 60 分 * 60 秒
echo 'Now:       '. date('Y-m-d') ."\n";
echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";

date_default_timezone_set('UTC');

// 出力: July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));
echo "\n";

// 出力例: 2006-04-05T01:02:03+00:00
echo date('c', mktime(1, 2, 3, 4, 5, 2006));
echo "\n";