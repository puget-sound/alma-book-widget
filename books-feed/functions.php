<?php

/*****************************************************************
 * Retrieves Alma Analytics Report
 *
 * @param $apikey - Alma API Key (ExLibris Developers Network)
 * @param $report_location - location of report in Alma Analytics (defined in config.php)
 * @param $limit - amount of rows to retrieve at once (defined in config.php)
 * @param $resumption_key - If results exceed the limit, a resumption key is necessary to retreive the next set of results
 *
 * @return $response - API response
 *
*/
function getReport($apikey,$report_location,$limit,$resumption_key){

	$curl = curl_init();

	//Determines first call vs resumption token call
	if ($report_location == ''){
		$url = "https://api-eu.hosted.exlibrisgroup.com/almaws/v1/analytics/reports?token=" . $resumption_key . "&limit=" . $limit ."&apikey=" . $apikey;
	}else{
		$url = "https://api-eu.hosted.exlibrisgroup.com/almaws/v1/analytics/reports?path=" . $report_location . "&limit=" . $limit ."&apikey=" . $apikey;
	 }

	curl_setopt_array($curl, array(
  	CURLOPT_URL => $url,
  	CURLOPT_RETURNTRANSFER => true,
  	CURLOPT_ENCODING => "",
  	CURLOPT_MAXREDIRS => 10,
  	CURLOPT_TIMEOUT => 120,
  	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  	CURLOPT_CUSTOMREQUEST => "GET",
  	CURLOPT_HTTPHEADER => array(
    	"cache-control: no-cache"
  	),
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
  		echo "cURL Error #:" . $err;
		if($enable_slack){
			slack("ERROR: Alma Analytics API: ". $err);
		}
		die("Canot process list");
	} else {

 
	return $response;
	}
}//end function


/**********************************************************************
 * Processes analytics api response / transforms data
 *
 * @param $result - API Response
 * @param $type - type of book array (print or electronic)
 * @param $book_array -existing array of processed books (will be empty first time)
 * @param $column_labels - array that identifies columns (see config.php)
 * @param $isbnFileLocation - file location of cover image array (see config.php)
 *
 * @return $book_array -array of processed items (adds to existing $book_array passed as a parameter)
*/
function analyzeResult($result,$type,$book_array,$column_labels,$isbnFileLocation){
	$book_xml = new SimpleXMLElement($result); //Converts API response to XML Element  
	$isbn_list = include("$isbnFileLocation");
	$write_count = 0;


	foreach ($book_xml->QueryResult->ResultXml->rowset->Row as $book) {
		
		$title = mb_convert_case(str_replace('/', '', $book->{$column_labels['title']}->__toString()), MB_CASE_TITLE, "UTF-8");
		$author = $book->{$column_labels['author']}->__toString();	
        	$portfolio_id = $book->{$column_labels['portfolio_id']}->__toString();
		$mms_id = str_replace('/', '', $book->{$column_labels['mms_id']}->__toString());

		//ISBN Work
        	$isbn_multi = str_replace(' ', '', $book->{$column_labels['isbn']}->__toString());
		$isbn = explode(";", $isbn_multi);
		


		//check for exisitng ISBN cover URL
		$isbn_cover = checkISBNList($mms_id, $isbn_list);
		
		$pub_date = substr(preg_replace('/[^0-9\-]/', '', $book->{$column_labels['pub_date']}->__toString()), -4);
		$upload_date = $book->{$column_labels['upload_date']}->__toString();
		$modification_date = $book->{$column_labels['mod_date']}->__toString();
		if ($type == 'print') {
			$catalog_url = "https://alliance-primo.hosted.exlibrisgroup.com/primo-explore/search?tab=default_tab&search_scope=everything&sortby=rank&vid=UPUGS&query=isbn,exact," . $isbn[0]; 
		}
		if ($type == 'electronic') {
			//$catalog_url = "https://alliance-primo.hosted.exlibrisgroup.com/primo-explore/openurl?url_ver=Z39.88-2004&vid=UPUGS&institution=UPUGS&isbn=" . $isbn[0];
			$catalog_url = "https://alliance-primo.hosted.exlibrisgroup.com/primo-explore/search?query=title,contains,". $title . ",AND&pfilter=pfilter,exact,books,AND&tab=default_tab&search_scope=upugs_alma&vid=UPUGS&mode=advanced&offset=0";
		}
		$cover_url = $isbn_cover;
		$group1 = explode(";", $book->{$column_labels['group1']}->__toString());		
		$group2 = explode(";", $book->{$column_labels['group2']}->__toString());
		$group3 = explode(";", $book->{$column_labels['group3']}->__toString());
		$group4 = explode(";", $book->{$column_labels['group4']}->__toString());
		



		if ($type == 'electronic'){
		//Electronic-Only Fields
		$ecollection_name = $book->Column8->__toString();
		$location = "Online Resource - " . $ecollection_name;
		$location_code = "online";
		}
		if ($type == 'print'){
		//Print-Only Fields
		$call_number = $book->{$column_labels['call_number']}->__toString(); 
		$location = $book->{$column_labels['location']}->__toString() . " (" . $call_number . ")";
		$location_code = $book->{$column_labels['location_code']}->__toString();
		}
		//LC Group (Subjects) Classification
		$subjects = array();
		


		if($type == 'print'||$type == 'electronic'){
			//LC Group 1
	
			if (count($group1) != 0){
				include 'subjects/lc_group1.php';
			}
		
			//LC Group 2
			if (count($group2) != 0){
				include 'subjects/lc_group2.php';
			}
			//LC Group 3
			if (count($group3) != 0){
				include 'subjects/lc_group3.php';
			}
			//LC Group 4
			if (count($group4) != 0){
				include 'subjects/lc_group4.php';
			}

			//If No Subjects matched from LC Groups - Look at Subjects column from report
                        if(count($subjects) == 0){
                                //$keywords = $title;
                                $keywords = explode(";", $book->{$column_labels['subjects']}->__toString());
                                include 'subjects/subject_keywords.php';
                        }
			//Last Resort - look at book title for subject matches
                        if(count($subjects) == 0){
                                //$keywords = $title;
                                $keywords = array($title);
                                include 'subjects/subject_keywords.php';
                        }


		}//END IF

	
		
		//Remove duplicates from Subjects array
		$subjects = array_unique($subjects);
		

		//Check to see if the ISBN is already in the array, if so it will not add it to the array	
		if(in_array($mms_id, array_column($book_array, 'mms_id'))) { // search value in the array
    			//echo "FOUND"; Testing
		} else {

			$book_array[] = array("title" => $title,"author" => $author, "portfolio_id"=> $portfolio_id, "mms_id"=> $mms_id,"isbn" =>$isbn, "pub_date"=> $pub_date, "upload_date" => $upload_date,"mod_date"=> $modification_date,  "location" => $location, "location_code" => $location_code, "subjects"=> $subjects, "catalog_url"=>$catalog_url, "cover_url"=>$cover_url, "type"=>$type);   
		}//end IF ELSE


		//Unset Variables for next iteration
		unset($title);
		unset($author);
		unset($portfolio_id);
		unset($mms_id);
		unset($isbn_multi);
		unset($isbn);
		unset($isbncount);
		unset($pub_date);
		unset($upload_date);
		unset($modification_date);
		unset($ecollection_name);
		unset($subjects);
		unset($catalog_url);
		unset($cover_url);
		unset($isbn_preferred);
		unset($location);
		unset($location_code);


		}//end foreach


	return $book_array;

}
//end function


/**********************************************************************
 * Writes the array into a file 
 *
 * @param $data - array of books
 * @param $type - type of book array (print or electronic)
 */
function writeFile($data, $type){

	//Retrieve location of data folder for display component (see config.php)
	global $display_data_folder;
	
	$json = json_encode(array('data' => $data));
	
	if($type=='electronic'||$type=='print'){
		//Write txt copy to export folder
		file_put_contents('export/book_' . $type . '.txt', '<?php return ' . var_export($data, true) . ';');
		// write json to display data folder (JSON)
		if (file_put_contents($display_data_folder . "/book_" . $type . ".json", $json)){
    			echo "JSON file Created Successfully\n";
		}else{
    			if($enable_slack){
				slack("Unable to write file to books-display/data folder");
			}
			echo "ERROR: Unable to write file to books-display/data folder \n";
		}

	 if (file_put_contents("export/book_" . $type . ".json", $json)){
                     echo "JSON file Created Successfully\n";
         }else{
                   echo "ERROR: File did not complete.\n";
         }

	}//ENF IF

}//END Function


/**********************************************************************
 * Cleans special characters
 *
 * @param $string string
 * @return $string - cleaned string
 */
function clean($string) {
//  $string = str_replace('-', ' ', $string); // Replaces all spaces with hyphens.

 $string =  preg_replace('/[^A-Za-z0-9\-]/', ' ', $string); // Removes special chars.
$string = str_replace('-', ' ', $string); // Replaces all hyphens with spaces.

return $string;
}


/**********************************************************************
 * Searches the MMS_ID/Cover URL array to determine if a match exists
 *
 * @param $isbn string - single ISBN
 * @param $item_id - mms_id of the item
 * @param $isbn_list - array that contains the MMS_ID/Cover URL list 
 * @return $match - 
 */
function getCover($isbn, $item_id, $isbn_list){
if (isset($item_id)){
	$match = 'unknown';
//	$isbn_list = include 'export/itemISBN.txt';
	if(in_array($item_id, array_column($isbn_list, 'item_id')) !== False){
		foreach($isbn_list as $key ){
		//	echo $key;
			$array_itemid = isset($key['item_id']) ? $key['item_id'] : '';
			if($item_id == $array_itemid){
	//	echo $row['item_id'];	
			$match =  $key['isbn'];
			 $key['alt_isbn'] =  $isbn;
				//echo $isbn_list[$key]['isbn']; 
			//array("item_id" => $item_id,"isbn"=> $match,"alt_isbn" => $isbn);

			}
		}//end foreach
	}else{
		$isbn_list[] = array("item_id" => $item_id,"isbn"=> "unknown","alt_isbn" => $isbn);
	}
			
	return array($match, $isbn_list);
}
}//END FUNCTIOn

/**********************************************************************
 * Takes ISBN, Assembles image URL, checks size, and determines if it is a valid cover image
 *
 * @param $isbn string - must be single ISBN
 * @return $match - Returns URL if valid, "unknown" if not
 */
function primoCover($isbn){

	$match = 'unknown';

	//default primo cover url                
        $cover_image = "https://proxy-na.hosted.exlibrisgroup.com/exl_rewrite/syndetics.com/index.aspx?isbn=" . $isbn . "/MC.JPG&client=primo";
        
	//check file size of primo url
	$filesize = curl_get_file_size($cover_image);

	//if not 86, then image found
         if($filesize != '86' ){
              $match = $cover_image;
           }//end IF

	return $match;

}//end function

/**********************************************************************
 * Retrieve the file size of an image
 *
 * @param $remoteFile - URL of the image 
 * @return $contentLength - file size 
 */
function curl_get_file_size( $remoteFile ) {
	  // Assume failure.
	//  $result = -1;
	//echo $remoteFile;
	$ch = curl_init($remoteFile);
	curl_setopt($ch, CURLOPT_NOBODY, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HEADER, true);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); //not necessary unless the file redirects (like the PHP example we're using here)
	$data = curl_exec($ch);
	curl_close($ch);
	if ($data === false) {
  		echo 'cURL failed';
  		exit;
	}

	$contentLength = 'unknown';
	$status = 'unknown';
	if (preg_match('/^HTTP\/1\.[01] (\d\d\d)/', $data, $matches)) {
  		$status = (int)$matches[1];
	}
	if (preg_match('/Content-Length: (\d+)/', $data, $matches)) {
  		$contentLength = (int)$matches[1];
	}


	  return $contentLength;
}//EBD FUNCTION



/**********************************************************************
 * Retrieve the first valid cover image from an array of ISBN's
 *
 * @param $isbn array of ISBN strings
 * @return URL of valid cover image
 */
function getCoverURL($isbn){

	global $enable_google;

	//Check and convert to array if needed
	if(is_array($isbn)){
	}else{
	$isbn = array($isbn);
	}

	//Default value
	$imageURL = '';
	
	//Check Primo for Image Covers First
    	foreach($isbn as $value){

        	//Check primo image first
		$primo_raw = primoCover($value);

		if($primo_raw == 'unknown'){
	
		} else {
			 //Primo is successful
                	$imageURL = $primo_raw;
			break;
		}
    	}//end foreach
	if($imageURL == ''){
		
		//No Primo Cover - Check Google Books API
		if($enable_google){
			foreach($isbn as $value){

				// check google books api for cover thumbnail
        			$gBooks_raw = gBooks($value);
        			$gBooks = json_decode($gBooks_raw, true);

				//Process response
        			if ($gBooks['totalItems']== 0 && @array_key_exists('imageLinks',@$gBooks['items'][0]['volumeInfo'])){
            		
       				}else {
            				// finish using the google api if results were found.
            				@$imageURL = $gBooks['items'][0]['volumeInfo']['imageLinks']['smallThumbnail'];
            				//Remove page curl from image and add HTTPS
					$imageURL= str_replace("http://", "https://", $imageURL);
            				$imageURL= str_replace("&edge=curl", "", $imageURL);
					break;
				}
			}//end foreach
		}//end if
	}//end if

	if($imageURL == ''){
		//No image found - Use unbound title cover 
		$imageURL = "https://proxy-na.hosted.exlibrisgroup.com/exl_rewrite/syndetics.com/index.aspx?isbn=" . $isbn[0] . "/MC.JPG&client=primo&type=unbound"; 
		return $imageURL;
	} else {
		//Image found - return URL
		return $imageURL;
	}
}//end function
    

/**********************************************************************
 * Searches the MMS_ID/Cover URL array to determine if a match exists
 *
 * @param $mms_id string - MMS_ID of the item
 * @param $isbn_list - array that contains the MMS_ID/Cover URL list
 * @return $match - Returns URL if found, returns empty if not found
 */

function checkISBNList($mms_id, $isbn_list){
if (isset($mms_id)){
        $match = '';

       if(in_array($mms_id, array_column($isbn_list, 'mms_id')) !== False){
           foreach($isbn_list as $key ){
        
		if ($key['mms_id'] == $mms_id){
			$match = $key['url'];	
		}
           }//end foreach
        }

        return $match;
}
}//END FUNCTIOn

/**********************************************************************
 * Retrieves API reponse from Google Books using an ISBN
 *
 * @param $isbn string - single ISBN
 * @param $google_key - Google Books API Key
 * @return $response - response provided by Google Books API
 */
function gBooks($isbn){

	global $google_key;

	//Check for API Key
	if(empty($google_key)){
		echo "No Google API Key Provided";
	}else{
		//continue with API Call
		$curl = curl_init();

		curl_setopt_array($curl, array(
  			CURLOPT_URL => "https://www.googleapis.com/books/v1/volumes?q=isbn:" . $isbn . "&country=US&key=" . $google_key,
  			CURLOPT_RETURNTRANSFER => true,
  			CURLOPT_ENCODING => "",
  			CURLOPT_MAXREDIRS => 10,
  			CURLOPT_TIMEOUT => 30,
  			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  			CURLOPT_CUSTOMREQUEST => "GET",
  			CURLOPT_HTTPHEADER => array(
    			"Cache-Control: no-cache",
    			//"Postman-Token: a57cc39e-c658-dfd5-3ff4-60595555d047"
  		),
		));
	
		$response = curl_exec($curl);
		$err = curl_error($curl);
	
		curl_close($curl);

		//No more than 100 calls per 100 seconds
		sleep(1);

		if ($err) {
  			echo "cURL Error #:" . $err;
		} else {
  			return $response;
		}
	}//end if
}//end function


/**********************************************************************
 * Notifies Slack workspace
 *
 * @param $txt string - message to send
 * 
 */
define('SLACK_WEBHOOK', $slack_url);
function slack($txt) {
  $msg = array('text' => $txt);
  $c = curl_init(SLACK_WEBHOOK);
  curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($c, CURLOPT_POST, true);
  curl_setopt($c, CURLOPT_POSTFIELDS, array('payload' => json_encode($msg)));
  curl_exec($c);
  curl_close($c);
}


if (! function_exists('array_column')) {
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
}

?>
