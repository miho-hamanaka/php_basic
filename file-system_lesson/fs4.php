<?php 

$users = [
    ["name" => "A", "sex" => "女性", "job" => "デザイナー"],
    ["name" => "B", "sex" => "男性", "job" => "コーダー"],
    ["name" => "C", "sex" => "男性", "job" => "エンジニア"]
]; 

$file = "users_data.csv";

$handle = fopen($file, "w");

for ($i=0; $i < count($users) ; $i++) { 
    $user_list = $users[$i];
    //var_dump ($user_list);
    fputcsv($handle, $user_list);
}

// for ($i=0; $i < count($users) ; $i++) { 
//     $user_list = $users[$i];
//     //var_dump ($user);
//     foreach ($user_list as $k => $v)
//     fputcsv($handle, array($k, $v));
// }

fclose($handle);