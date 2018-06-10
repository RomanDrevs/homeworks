<?php
/**
 * Created by PhpStorm.
 * User: Roma_Drevs
 * Date: 26.11.2016
 * Time: 1:14
 */
include '2.html';
function getBigWords($text, $limit = 3) {
    $data = [];
    $text = str_replace(['!','.',',',':','?'],'',$text);
    foreach(explode(' ', $text) as $word) {
        $data[$word] = strlen($word);
    }
    arsort($data);
    return (array_slice($data, 0, count($data) > $limit ? $limit : count($data)));
}
print_r(getBigWords($_POST['text']));
