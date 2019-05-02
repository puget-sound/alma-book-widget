<?php

//LC Group 2 Classifications - Subject Linking
//Add terms to Switch Statement 

foreach($group2 as $term) {

	switch ($term) {
    		case "Public accounting. Auditing":
        		array_push($subjects, "Accountancy");
        		break;
		case "Otology. Diseases of the ear":
			array_push($subjects, "Audiology");
			break;
                case "Applied psychology":
                        array_push($subjects, "Counseling");
                        break;
                case "Criminal justice administration":
                        array_push($subjects, "Criminal Justice and Criminology");
                        break;
                case "Criminology":
                        array_push($subjects, "Criminal Justice and Criminology");
                        break;
                case "Cinematography. Motion pictures":
                        array_push($subjects, "Digital Media");
                        break;
                case "Teaching (Principles and practice)":
                        array_push($subjects, "Educational Technology");
                        break;
                case "Biomedical engineering. Electronics. Instrumentation":
                        array_push($subjects, "Engineering");
                        break;
                case "Industrial engineering. Management engineering":
                        array_push($subjects, "Engineering");
                        break;
                case "Electronics":
                        array_push($subjects, "Engineering");
                        break;
                case "Materials of engineering and construction. Mechanics of materials":
                        array_push($subjects, "Engineering");
                        break;
                case "Construction details":
                        array_push($subjects, "Engineering");
                        break;
                case "Construction by phase of the work (Building trades)":
                        array_push($subjects, "Engineering");
                        break;
                case "Mechanical drawing. Engineering graphics":
                        array_push($subjects, "Engineering");
                        break;
                case "Mechanical devices and figures. Automata. Ingenious mechanisms.":
                        array_push($subjects, "Engineering");
                        break;
		case "Men":
                        array_push($subjects, "Gender and Diversity");
                        break;
               case "Inclusive education":
                        array_push($subjects, "Gender and Diversity");
                        break;
                case "Commercial art. Advertising art":
                        array_push($subjects, "Graphic Design");
                        break;
                case "Medical centers. Hospitals. Dispensaries. Clinics Including ambulance service, nursing homes, hospices":
                        array_push($subjects, "Healthcare Management");
                        break;	
                case "Tables":
                        array_push($subjects, "Mathematics");
                        break;	
                case "Elementary mathematics. Arithmetic":
                        array_push($subjects, "Mathematics");
                        break;	
                case "Algebra":
                        array_push($subjects, "Mathematics");
                        break;	
                case "Probabilities. Mathematical statistics":
                        array_push($subjects, "Mathematics");
                        break;	
                case "Analysis":
                        array_push($subjects, "Mathematics");
                        break;	
                case "Geometry. Trigonometry. Topology":
                        array_push($subjects, "Mathematics");
                        break;	
                case "Analytic mechanics":
                        array_push($subjects, "Mathematics");
                        break;
                case "Diet therapy. Dietary cookbooks":
                        array_push($subjects, "Nutrition and Dietetics");
                        break;			
                case "Paleontology":
                        array_push($subjects, "Paleontology");
                        break;
                case "Physical medicine. Physical therapy Including massage, exercise, occupational therapy, hydrotherapy, phototherapy, radiotherapy, thermotherapy, electrotherapy":
                        array_push($subjects, "Physical Therapy");
                        break;				
                case "Political science (General)":
                        array_push($subjects, "Political Science");
                        break;	
                case "Scope of international relations. Political theory.":
                        array_push($subjects, "Political Science");
                        break;	
                case "Communication of techical information":
                        array_push($subjects, "Professional Communication");
                        break;
                case "Public Administration":
                        array_push($subjects, "Public Administration");
                        break;
                case "Public health. Hygiene. Preventive medicine":
                        array_push($subjects, "Public Health");
                        break;
                case "Examination. Diagnosis":
                        array_push($subjects, "Radiography");
                        break;
                case "Medical physics. Medical radiology. Nuclear medicine":
                        array_push($subjects, "Radiography");
                        break;
                case "Human settlements. Communities":
                        array_push($subjects, "Regional and Community Studies");
                        break;			
                case "Urban groups. The city. Urban sociology;":
                        array_push($subjects, "Regional and Community Studies");
                        break;	
                case "Rural groups. Rural sociology":
                        array_push($subjects, "Regional and Community Studies");
                        break;		
                case "Social service. Social work. Charity organization and practice Including social case work, private and public relief, institutional care, rural social work, work relief":
                        array_push($subjects, "Social Work");
                        break;			
                case "Social work. Social welfare services":
                        array_push($subjects, "Social Work");
                        break;
                case "Benevolent work. Social work. Welfare work, etc.":
                        array_push($subjects, "Social Work");
                        break;						
                case "International social work":
                        array_push($subjects, "Social Work");
                        break;
                case "Sports":
                        array_push($subjects, "Sport Leadership and Management");
                        break;
                case "Folk literature (General)":
                        array_push($subjects, "Storytelling");
                        break;	
                case "Folk literature":
                        array_push($subjects, "Storytelling");
                        break;			
                case "Surveying":
                        array_push($subjects, "Surveying");
                        break;	
                case "Women. Feminism":
                        array_push($subjects, "Womens Studies");
                        break;	
                case "Sterilization of women":
                        array_push($subjects, "Womens Studies");
                        break;	
                case "Women authors":
                        array_push($subjects, "Womens Studies");
                        break;		
	}//end Switch
}//End foreach


?>
