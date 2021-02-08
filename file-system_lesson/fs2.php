<?php
// sweets.txtを読み込み

$file = "sweets.txt";

$handle = fopen($file, "r");

while (($sweets_list = fgets($handle)) !== false) {
    echo $sweets_list;
}

fclose($handle);