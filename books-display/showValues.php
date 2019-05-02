<?php

//This is a file connected to index.php
//Handles processing the array for selection and display
//requires files
require('functions.php');
require('config.php');

$filter = clean($_GET['filter']);

if($filter == 'subjects'){
	$sv_array = array();
	foreach(array_column($mergedArray, $filter) as $value) {
		foreach($value as $subvalue){
			array_push($sv_array, $subvalue);
		}
	}
	foreach(array_unique($sv_array) as $unique_value){
        		echo "<input type=\"radio\" name=\"values\" value=\"" . $unique_value . "\" onclick=\"\" />";
        		echo $unique_value;
			echo "&nbsp;&nbsp;";
		}	
	unset($sv_array);	
}
elseif($filter == 'title' || $filter == 'author'){

	echo "<input type=\"text\" name=\"values\"><br>";

}else{
	foreach(array_unique(array_column($mergedArray, $filter)) as $value) {
        	echo "<input type=\"radio\" name=\"values\" value=\"" . $value . "\" onclick=\"\" />";
        	echo $value;
		echo "&nbsp;&nbsp;";
	}
}
?>
