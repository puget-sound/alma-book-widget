<?php

//requires files
require 'functions.php';
require 'config.php';


//Retrieve parameters
$query = clean($_GET['query']);
$filter = clean($_GET['filter']);
$template = clean($_GET['template']);


//Look for Argument
if(empty($query)){
	echo "test";
        die("No query provided");
}
if(empty($filter)){
        die("No filter provided");
}
if(empty($template)){
        die("No template provided");
}


//Create slider based on filter, query, and template
createSlider($mergedArray, $filter, $query, $template);

?>


