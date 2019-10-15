<?php

date_default_timezone_set('America/Los_Angeles');

//Include PHP Files
include 'config.php';
include 'functions.php';

//Look for Argument
if(empty($argv[1])){
        die("No report type provided");
}


//Retrieve Report Type
$type = htmlspecialchars($argv[1]);
if($type=='print'||$type=='electronic') {

	//Retrieve report location and column names
	if($type=='print'){
		$report_location = $pbook_report;
		$column_labels = $print_columns;
	}else if($type == 'electronic'){
		$report_location = $ebook_report;
		$column_labels = $electronic_columns;
	}

	//Create array for book storage
	$book_array = array();

	//Begin importing the report
	echo "Fetching Report...\n";
	$report = getReport($apikey,$report_location,$num_records_api,'');
	
	//Process the response
	echo "Processing rows...\n";
	 $status_xml = new SimpleXMLElement($report); //Converts API response to XML Element
	 $resumption = $status_xml->QueryResult->ResumptionToken->__toString();
	 $IsFinished = $status_xml->QueryResult->IsFinished->__toString();

	//Process individual book results
	$book_array = analyzeResult($report,$type,$book_array,$column_labels,$isbnFileLocation);
	$i=1;
	echo count($book_array) . " records processed...\n";

	//Loop until all results are finished
	while($IsFinished == "false"){
		 $report = getReport($apikey,'',$num_records_api,$resumption);
		 $status_xml = new SimpleXMLElement($report); //Converts API response to XML Element
		 $IsFinished = $status_xml->QueryResult->IsFinished->__toString();
		$book_array = analyzeResult($report,$type,$book_array,$column_labels,$isbnFileLocation); 
		$i++;
		echo count($book_array) . " records processed...\n";
	 
		//break if necessary	
		 if ($i==20){
			break;
		}	



	}//END WHILE
	
	echo "Report finished. Exporting data... \n";
	
	//Cover Image Check
		echo "Checking for Cover Images... \n";
		
		//ISBN List
		$isbn_list = include("$isbnFileLocation");
		//Write to ISBN file every 10
		$write_count = 0;
		foreach($book_array as $key => $mainData ){

                if ($mainData['cover_url'] == ''){
			$isbn = $mainData['isbn'];

				//foreach ($isbn as $value){
                                	//check for cover images
                                	$getCover = getCoverURL($isbn);
                                	
					//add URL to list
                                	if(strpos($getCover, 'http') === false){
					echo "FALSE - " . $getCover;	
					}else{
						if($cover_image_debug){
							echo $mainData['title'];
							echo " image found " . $getCover . "\n";
						}
                                                $book_array[$key]['cover_url'] = $getCover;
                                        	$isbn_list[] = array("mms_id" => $mainData['mms_id'], "date"=> date("Y-m-d"), "url"=> $getCover);
                                        	$write_count++;
                                        	
                                	}
				
				//Write to file every 10 images found. Just in case of API timeout
				if($write_count > 10){
					echo "ISBN File Write... \n";
					file_put_contents("$isbnFileLocation", '<?php return ' . var_export($isbn_list, true) . ';');
					$write_count = 0;
				}
                       // }
                }
           }//end foreach

file_put_contents("$isbnFileLocation", '<?php return ' . var_export($isbn_list, true) . ';');







	/*File Output*/
		writeFile($book_array,$type);
		if($enable_slack){
			//Send message to SLACK
			slack($type . " report finished. " . count($book_array) . " books imported successfully");
		}
}else{
	die("Incorrect or No Report Type Provided");
}
?>
