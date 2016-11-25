<?php
/**
 * Created by PhpStorm.
 * User: Roma_Drevs
 * Date: 26.11.2016
 * Time: 1:14
 */
include '2.html';
function leght_top_three($a){
     $a = explode(' ', $a);
     for ($i = 0; $i < count($a); $i++) {
            for ($j = 0; $j < count($a)-1; $j++) {
                        if (mb_strlen($a[$j])>mb_strlen($a[$j+1])){
                                $c=$a[$j];
                                $a[$j]=$a[$j+1];
                                $a[$j+1]=$c;
                            }
         }
     }
     return (array_slice($a, 0, 3));
 }
leght_top_three($_POST['a']);
