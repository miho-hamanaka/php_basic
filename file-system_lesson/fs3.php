<?php
// sweets.txt読み込み、file関数だと全体読み込んで配列に格納される
// 改行コードが入っちゃうので、FILE_IGNORE_NEW_LINES定数を第二引数に指定して除去できる

$file = "sweets.txt";

$sweets_list = file ($file, FILE_IGNORE_NEW_LINES);

//var_dump($sweets_list);

for ($i=0; $i < count($sweets_list); $i++) { 
    echo $sweets_list[$i] .PHP_EOL;
}
