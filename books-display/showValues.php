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
		if($unique_value !== "") {
        	echo "<span style='display:inline-block;min-width:275px;'><label><input type=\"radio\" name=\"values\" value=\"" . $unique_value . "\" onclick=\"\" />" . $unique_value . "</label></span>";
        }
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
