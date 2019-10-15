<?php

//Trim Title Function
function trimTitle($s, $max_length){

        if (strlen($s) > $max_length)
        {
                $offset = ($max_length - 3) - strlen($s);
                $s = substr($s, 0, strrpos($s, ' ', $offset)) . '...';
        }
        return $s;
}

function createSlider($array_source, $filter, $query, $template) {
	$results_array = array();

//	echo $filter;
//	echo $query;

	foreach ($array_source as $key => $val){
//print_r($val[$filter]);

		if(is_array($val[$filter]) === true) {
			foreach($val[$filter] as $term) {
				if(stripos($term, $query)!== false){
					$results_array[] = $val;
				
				}//end if
			}//end for
		} elseif(stripos($val[$filter], $query)!== false){
			$results_array[] = $val;
  		}//end else if
	}//end foreach	

	//Count Results 
	if (count($results_array) > 0){
		
		$dir = "templates/";

	        // Sort in ascending order - this is default
        	$temp_options = scandir($dir);
        	//remove directory options
        	$temp_options = array_diff($temp_options,array('.', '..'));
        	foreach($temp_options as $option) {
        		if (str_replace('.php', '', $option) == $template) {
				//display slider
				require "templates/" . $template . ".php";
			}
		}
	}else{
		//no results - show message
		echo "No new book titles found for " . $query . ".";
	}



}//end createSlider

function clean($string) {
//  $string = str_replace('-', ' ', $string); // Replaces all spaces with hyphens.

// $string =  preg_replace('/[^A-Za-z0-9\-]/', ' ', $string); // Removes special chars.
//$string = str_replace('-', ' ', $string); // Replaces all hyphens with spaces.

$string = filter_var($string);


return $string;
}




function curl_get_image_size( $imageFile ) {
		
		//cURL setup
        $ch = curl_init($imageFile);
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
        $data = curl_exec($ch);
        curl_close($ch);
        if ($data === false) {
                echo 'cURL failed for image' . $imageFile;
                exit;
        }

        $imageSize = 'unknown';
        $status = 'unknown';
        if (preg_match('/^HTTP\/1\.[01] (\d\d\d)/', $data, $matches)) {
                $status = (int)$matches[1];
        }
        if (preg_match('/Content-Length: (\d+)/', $data, $matches)) {
                $imageSize = (int)$matches[1];
        }

          return $imageSize;
}//end function
?>
