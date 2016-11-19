<?php
/**
 * Created by PhpStorm.
 * User: Roma_Drevs
 * Date: 19.11.2016
 * Time: 2:12
 */
$rows = 10;
$cols = 10;
echo "<table border=1>";
for($i = 1; $i < $rows; $i++){
    echo "<tr>";
    for ($j = 1; $j < $cols; $j++) {
        echo "<td align = center>".$i * $j."</td>";
    }
    echo "</tr>";
}
echo "</table>";