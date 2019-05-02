<?php
$electronic = file_get_contents('book_electronic.json');
$print = file_get_contents('book_print.json');
$electronicArray = json_decode($electronic, true);
$printArray = json_decode($print, true);
$mergedArray = array_merge($electronicArray["data"], $printArray["data"]);
echo json_encode(array("data" =>  $mergedArray));
