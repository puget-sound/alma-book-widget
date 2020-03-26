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
	sort($sv_array);
	echo "<ul class='subject-list'>";
	foreach(array_unique($sv_array) as $unique_value){
		if($unique_value !== "") {
        	//echo "<span style='display:inline-block;min-width:285px;'><label><input type=\"radio\" name=\"values\" value=\"" . $unique_value . "\" onclick=\"\" style='margin-right:8px;' />" . $unique_value . "</label></span>";
        	echo "<li><label><input type=\"radio\" name=\"values\" value=\"" . $unique_value . "\" onclick=\"\" style='margin-right:8px;' />" . $unique_value . "</label></li>";
        }
		}	
	echo "</ul>";
	unset($sv_array);	
}
elseif($filter == 'title' || $filter == 'author'){

	echo "<input type=\"text\" name=\"values\"><br>";

}elseif($filter == 'pub_date') {
	$pd_array = array();
	foreach(array_column($mergedArray, $filter) as $value) { 
		array_push($pd_array, $value);
	}
	//print_r($pd_array);
	rsort($pd_array);
	echo "<ul class='pub_date-list'>";
	foreach(array_unique($pd_array) as $value) {
        	//echo "<input type=\"radio\" name=\"values\" value=\"" . $value . "\" onclick=\"\" />";
        	//echo $value;
        echo "<li><label><input type=\"radio\" name=\"values\" value=\"" . $value . "\" onclick=\"\" style='margin-right:8px;' />" . $value . "</label></li>";
	}
	echo "</ul>";
}else{
	foreach(array_unique(array_column($mergedArray, $filter)) as $value) {
        	echo "<label><input type=\"radio\" name=\"values\" value=\"" . $value . "\" onclick=\"\" />" . $value . "</label>&nbsp;&nbsp;";
	}
}


function array_column(array $input, $columnKey, $indexKey = null) {
	$array = array();
    foreach ($input as $value) {            
    	if ( !array_key_exists($columnKey, $value)) {
            trigger_error("Key \"$columnKey\" does not exist in array");
            return false;
        }
        if (is_null($indexKey)) {
            $array[] = $value[$columnKey];
        }
        else {
            if ( !array_key_exists($indexKey, $value)) {
                trigger_error("Key \"$indexKey\" does not exist in array");
                return false;
            }
            if ( ! is_scalar($value[$indexKey])) {
                trigger_error("Key \"$indexKey\" does not contain scalar value");
                return false;
            }
            $array[$value[$indexKey]] = $value[$columnKey];
        }
    }
    return $array;
}

?>
