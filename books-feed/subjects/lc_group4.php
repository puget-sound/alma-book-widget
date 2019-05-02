<?php

//LC Group 4 Classifications - Subject Linking
//Add terms to Switch Statement 

foreach($group4 as $term) {

	switch ($term) {
    		case "Computer games. Video games. Fantasy games":
        		array_push($subjects, "Computing");
        		break;
                case "Computer software":
                        array_push($subjects, "Computing");
                        break;
                case "Computer-assisted education":
                        array_push($subjects, "Computing");
                        break;
                case "Electronic computers. Computer science":
                        array_push($subjects, "Computing");
                        break;
                case "Computer games. Video games. Fantasy games":
                        array_push($subjects, "Digital Media");
                        break;
               case "Women":
                        array_push($subjects, "Gender and Diversity");
                        break;
    		default:
        	//	array_push($subjects, "default test");
	}//End switch

}//End foreach


?>
