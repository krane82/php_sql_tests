<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 09.07.2018
 * Time: 20:21
 */
/**
 * @param array $arr
 * @param int $length
 * @return SplFixedArray
 */
function render_strngs(array $arr, int $length) {
    $res = new SplFixedArray($length);
    for($i = 0; $i<$length; $i++) {
        shuffle($arr);
        $res[$i] = implode(' ', $arr);
    }
    return $res;
}

function get_uniques(SplFixedArray $arr) {
    $res = [];
    foreach ($arr as $item) {
        $res[$item] = true;
    }
    return array_keys($res);
}
$words = ['red', 'green', 'yellow', 'blue', 'orange'];
$t = microtime(true);
$strings= render_strngs($words, 10000000);
echo "T = ".(microtime(true) - $t).PHP_EOL;

$t = microtime(true);
$uniques = get_uniques($strings);
echo "T = ".(microtime(true) - $t).PHP_EOL;

//Если массив words не нужен, а нужен только uniques - то вместо массива words
//для экономии ресурсов разумно использовать генератор (yield)
