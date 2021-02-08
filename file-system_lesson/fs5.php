<?php

$file = "users_data.csv";

$handle = fopen($file, "r");

$user_data = fgetcsv($handle);
$user_list = [];

while ($user_data !== false) {
    $user_list[] = $user_data; 
    $user_data = fgetcsv($handle);
}
//print_r($user_list);

for ($i=0; $i <count($user_list) ; $i++) { 
    //print_r ($user_list[$i]);
    $user = $user_list[$i];
    echo "名前" . $user[0] . PHP_EOL;
    echo "性別" . $user[1] . PHP_EOL;
    echo "職業" . $user[2] . PHP_EOL;
    echo "----------" . PHP_EOL;
}

fclose($handle);
