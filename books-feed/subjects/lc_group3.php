<?php

//LC Group 3 Classifications - Subject Linking
//Add terms to Switch Statement 

foreach($group3 as $term) {

	switch ($term) {
    		case "Accounting. Bookkeeping":
        		array_push($subjects, "Business & Leadership");
        		break;
		case "Reproduction of library materials. Storage media of library materials":
			array_push($subjects, "Classics & Ancient Mediterranean Studies");
			break;
		case "Diseases of the respiratory system":
                        array_push($subjects, "Occupational Therapy");
                        break;
                case "Career education":
                        array_push($subjects, "Education Studies");
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
                        array_push($subjects, "Computer Science");
                        break;
                case "Computer engineering. Computer hardware":
                        array_push($subjects, "Computer Science");
                        break;
                case "Calculating machines":
                        array_push($subjects, "Computer Science");
                        break;
                case "Style. Composition. Rhetoric":
                        array_push($subjects, "English");
                        break;
                case "Comparative grammar":
                        array_push($subjects, "English");
                        break;
                case "Women. Girls; Gays. Lesbians. Bisexuals":
                        array_push($subjects, "Gender & Queer Studies");
                        break;	
                case "Transexualism":
                        array_push($subjects, "Gender & Queer Studies");
                        break;			
                case "Race (General)":
                        array_push($subjects, "African American Studies");
                        break;	
                case "Special classes. By race or ethnic group":
                        array_push($subjects, "Gender & Queer Studies");
                        break;	
                case "Multicultural education (General)":
                        array_push($subjects, "Education Studies");
                        break;							
                case "Social perception. Social cognition":
                        array_push($subjects, "Sociology & Anthropology");
                        break;	
                case "Personnel management. Employment":
                        array_push($subjects, "Business & Leadership");
                        break;							
                case "Employee participation in management.":
                        array_push($subjects, "Business & Leadership");
                        break;
                case "Business records management":
                        array_push($subjects, "Business & Leadership");
                        break;						
                case "Supervision and administration. Business management":
                        array_push($subjects, "Business & Leadership");
                        break;						
                case "Organizational behavior, change and":
                        array_push($subjects, "Business & Leadership");
                        break;						
                case "Organizational sociology. Organization theory":
                        array_push($subjects, "Business & Leadership");
                        break;		
                case "Industrial productivity":
                        array_push($subjects, "Business & Leadership");
                        break;
		case "Marketing. Distribution of products":
                        array_push($subjects, "Business & Leadership");
                        break;
                case "Personal health and hygiene Including clothing, bathing, exercise, travel, nutrition, sleep, sex hygiene":
                        array_push($subjects, "Occupational Therapy");
                        break;
                case "Debating":
                        array_push($subjects, "Politics & Government");
                        break;
                case "Government. Public Administration":
                        array_push($subjects, "Politics & Government");
                        break;
                case "Community":
                        array_push($subjects, "Sociology & Anthropology");
                        break;
                case "Community and the school":
                        array_push($subjects, "Education Studies");
                        break;
                case "Neurology. Diseases of the nervous system Including speech disorders":
                        array_push($subjects, "Neuroscience");
                        break;	
                case "Sports medicine":
                        array_push($subjects, "Exercise Science");
                        break;	
                case "Dramatic representation. The theater":
                        array_push($subjects, "Theatre Arts");
                        break;
                case "Biography of women (Collective)":
                        array_push($subjects, "Gender & Queer Studies");
                        break;		
	}//end Switch
}//End foreach


?>
