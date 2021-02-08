<?php
// sweets.txtの生成

$sweets = ["chocolate", "waffle", "pudding", "macaron"];

$file = "sweets.txt";

$handle = fopen($file, "w");

for ($i=0; $i < count($sweets); $i++) { 
    fwrite($handle, $sweets[$i] . PHP_EOL);
}

fclose($handle);
