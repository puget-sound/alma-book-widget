<?php

//API Key for Alma Analytics
//See https://developers.exlibrisgroup.com/alma/apis/analytics/GET/ for more info.
$apikey = '';

//Google Books API Key
$enable_google = false; 
$google_key = '';

//Slack webhook URL
$enable_slack = false;
$slack_url = 'https://hooks.slack.com/services/[EXAMPLE]';

//Location of books-display/data folder  
$display_data_folder = '/var/www/html/books-display/data';

//Enable cover image debug (will echo title and URL for new results)
$cover_image_debug = true;

//Preferred ISBN to Item Number Array File
$isbnFileLocation = 'export/itemISBN.txt';

//Alma Analytics Report Location for eBooks (path parameter)
//EXAMPLE: '%2Fshared%2FSample%20University%2FReports%2FNew%20Resources%2FElectronic'
$ebook_report = '';

//Alma Analytics Report Location for Print Books (path parameter)
////EXAMPLE: '%2Fshared%2FSample%20University%2FReports%2FNew%20Resources%2FPrint'
$pbook_report = '';


//Number of Records to retreive from Analytics at once (min 25 / max 1000)
$num_records_api = '1000';

//Investigate the API response and make sure you dont need to adjust columns (Postman is a good utility)
$electronic_columns = array(
			"title" => "Column7",
			"author" => "Column1",
			"portfolio_id" => "Column19",
			"mms_id" => "Column3",
			"isbn" => "Column2",
			"pub_date" => "Column5",
			"upload_date" => "Column13",
			"mod_date" => "Column18",
			"group1" => "Column9",
			"group2" => "Column10",
			"group3" => "Column11",
			"group4" => "Column12",
			"call_number" => "",
			"location" => "",
			"location_code" => "",
			"ecollection_name" => "Column8",
			"subjects" => "Column6"
			);
$print_columns = array(
			"title" => "Column7",
			"author" => "Column1",
			"portfolio_id" => "Column19",
			"mms_id" => "Column3",
			"isbn" => "Column2",
			"pub_date" => "Column5",
			"upload_date" => "Column18",
			"mod_date" => "Column21",
			"group1" => "Column11",
			"group2" => "Column12",
			"group3" => "Column13",
			"group4" => "Column14",
			"call_number" => "Column8",
			"location" => "Column16",
			"location_code" => "Column15",
			"ecollection_name" => "",
			"subjects" => "Column6"
			);


?>

