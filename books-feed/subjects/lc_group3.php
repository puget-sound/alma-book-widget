<?php

//LC Group 3 Classifications - Subject Linking
//Add terms to Switch Statement 

foreach($group3 as $term) {

	switch ($term) {
    		case "Accounting. Bookkeeping":
        		array_push($subjects, "Accountancy");
        		break;
		case "Reproduction of library materials. Storage media of library materials":
			array_push($subjects, "Archival Studies");
			break;
		case "Diseases of the respiratory system":
                        array_push($subjects, "Cardiopulmonary Science");
                        break;
                case "Career education":
                        array_push($subjects, "Career Resources");
                        break;
                case "Vocational guidance. Career devlopment":
                        array_push($subjects, "Career Resources");
                        break;
                case "Vocational rehabilitation":
                        array_push($subjects, "Career Resources");
                        break;
                case "Employment of people with disabilities":
                        array_push($subjects, "Career Resources");
                        break;
                case "Vocational rehabilitation":
                        array_push($subjects, "Career Resources");
                        break;
                case "Interpersonal communication":
                        array_push($subjects, "Communication Studies");
                        break;
                case "Oral communication. Speech":
                        array_push($subjects, "Communication Studies");
                        break;
                case "Business communication Including business report writing, business correspondence":
                        array_push($subjects, "Communication Studies");
                        break;
                case "Information technology":
                        array_push($subjects, "Computing");
                        break;
                case "Computer engineering. Computer hardware":
                        array_push($subjects, "Computing");
                        break;
                case "Calculating machines":
                        array_push($subjects, "Computing");
                        break;
                case "Style. Composition. Rhetoric":
                        array_push($subjects, "English");
                        break;
                case "Comparative grammar":
                        array_push($subjects, "English");
                        break;
                case "Women. Girls; Gays. Lesbians. Bisexuals":
                        array_push($subjects, "Gender and Diversity");
                        break;	
                case "Transexualism":
                        array_push($subjects, "Gender and Diversity");
                        break;			
                case "Race (General)":
                        array_push($subjects, "Gender and Diversity");
                        break;	
                case "Special classes. By race or ethnic group":
                        array_push($subjects, "Gender and Diversity");
                        break;	
                case "Multicultural education (General)":
                        array_push($subjects, "Gender and Diversity");
                        break;							
                case "Social perception. Social cognition":
                        array_push($subjects, "Gender and Diversity");
                        break;	
                case "Personnel management. Employment":
                        array_push($subjects, "Management and Leadership");
                        break;							
                case "Employee participation in management.":
                        array_push($subjects, "Management and Leadership");
                        break;
                case "Business records management":
                        array_push($subjects, "Management and Leadership");
                        break;						
                case "Supervision and administration. Business management":
                        array_push($subjects, "Management and Leadership");
                        break;						
                case "Organizational behavior, change and":
                        array_push($subjects, "Management and Leadership");
                        break;						
                case "Organizational sociology. Organization theory":
                        array_push($subjects, "Management and Leadership");
                        break;		
                case "Industrial productivity":
                        array_push($subjects, "Management and Leadership");
                        break;
		case "Marketing. Distribution of products":
                        array_push($subjects, "Marketing");
                        break;
                case "Personal health and hygiene Including clothing, bathing, exercise, travel, nutrition, sleep, sex hygiene":
                        array_push($subjects, "Nutrition and Dietetics");
                        break;
                case "Debating":
                        array_push($subjects, "Debating");
                        break;
                case "Government. Public Administration":
                        array_push($subjects, "Public Administration");
                        break;
                case "Community":
                        array_push($subjects, "Regional and Community Studies");
                        break;
                case "Community and the school":
                        array_push($subjects, "Regional and Community Studies");
                        break;
                case "Neurology. Diseases of the nervous system Including speech disorders":
                        array_push($subjects, "Speech-Language Pathology");
                        break;	
                case "Sports medicine":
                        array_push($subjects, "Sport Physiology and Performance");
                        break;	
                case "Dramatic representation. The theater":
                        array_push($subjects, "Theater");
                        break;
                case "Biography of women (Collective)":
                        array_push($subjects, "Womens Studies");
                        break;		
	}//end Switch
}//End foreach


?>
