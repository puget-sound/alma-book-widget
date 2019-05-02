<?php

//FILL IN THESE SETTINGS BEFORE USING


//Indicate location of each possible book JSON array. 
$electronic = file_get_contents('data/book_electronic.json');
$print = file_get_contents('data/book_print.json');



// JSON DECODE and Merged Array
$electronicArray = json_decode($electronic, true);
$printArray = json_decode($print, true);
$mergedArray = array_merge($electronicArray["data"], $printArray["data"]);


// URL BASE
// example: https://libs.abc.edu/books-display
$urlBase = '';

//Column Settings (index.php)

//Do Not Use These Columns as Filters
$noFilters = array("portfolio_id", "mms_id", "location", "catalog_url", "cover_url", "isbn")



?>
