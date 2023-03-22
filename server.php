<?php

$string = file_get_contents('./todolist.json');
header('Content-Type: application/json');
$todolists = json_decode($string, true);

// echo('STRING');
// echo $string;
// echo('TODOLIST');
// var_dump($todolists);


