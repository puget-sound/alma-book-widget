<?php

//LC Subjects - Keyword Terms - Subject Linking
//Add terms to Foreach Statement 
//keywords must be Lower Case
//Customize suject terms as needed - Case Sensitive


foreach ($keywords as $keyword) {

    //Remove special characters and lower case keywords
    $keyword = strtolower(clean($keyword));
    
    //If Empty - Break 
    if (empty($keyword)== true){
	break;
	}

 //A-Z Subjects
   if (strpos($keyword, "accounting") !== false) {
        array_push($subjects, "Accountancy");
        break;
    }
   if (strpos($keyword, "accountancy") !== false) {
        array_push($subjects, "Accountancy");
        break;
    }
   if (strpos($keyword, "anthropology") !== false) {
        array_push($subjects, "Anthropology");
        break;
    }
   if (strpos($keyword, "appalachia") !== false) {
        array_push($subjects, "Appalachian Studies");
        break;
    }
   if (strpos($keyword, "appalachian") !== false) {
        array_push($subjects, "Appalachian Studies");
        break;
    }
   if (strpos($keyword, "archival") !== false) {
        array_push($subjects, "Archival Studies");
        break;
    }
 //  if (strpos($keyword, "art") !== false) {
   //     array_push($subjects, "Art");
     //   break;
  //  }
   if (strpos($keyword, "drawing") !== false) {
        array_push($subjects, "Art");
        break;
    }
   if (strpos($keyword, "painting") !== false) {
        array_push($subjects, "Art");
        break;
    }
   /*if (strpos($keyword, "astronomy") !== false) {
        array_push($subjects, "Astronomy");
        break;
    } */  
    if (strpos($keyword, "audiology") !== false) {
        array_push($subjects, "Audiology");
        break;
    }
   if (strpos($keyword, "biology") !== false) {
        array_push($subjects, "Biological Sciences");
        break;
    }
   if (strpos($keyword, "botany") !== false) {
        array_push($subjects, "Biological Sciences");
        break;
    }
   if (strpos($keyword, "genetics") !== false) {
        array_push($subjects, "Biological Sciences");
        break;
    }
   if (strpos($keyword, "ecology") !== false) {
        array_push($subjects, "Biological Sciences");
        break;
    }
   if (strpos($keyword, "cardiopulmonary") !== false) {
        array_push($subjects, "Cardiopulmonary Science");
        break;
    }
   if (strpos($keyword, "career") !== false) {
        array_push($subjects, "Career Resources");
        break;
    }
   if (strpos($keyword, "chemistry") !== false) {
        array_push($subjects, "Chemistry");
        break;
    }
   if (strpos($keyword, "computing") !== false) {
        array_push($subjects, "Computing");
        break;
    }
   if (strpos($keyword, "computer") !== false) {
        array_push($subjects, "Computing");
        break;
    }
   if (strpos($keyword, "technology") !== false) {
        array_push($subjects, "Computing");
        break;
    }
   if (strpos($keyword, "network") !== false) {
        array_push($subjects, "Computing");
        break;
    }
   if (strpos($keyword, "programming") !== false) {
        array_push($subjects, "Computing");
        break;
    }
   if (strpos($keyword, "counseling") !== false) {
        array_push($subjects, "Counseling");
        break;
    }
   if (strpos($keyword, "criminal") !== false) {
        array_push($subjects, "Criminal Justice and Criminology");
        break;
    }
   if (strpos($keyword, "justice") !== false) {
        array_push($subjects, "Criminal Justice and Criminology");
        break;
    }
   if (strpos($keyword, "crime") !== false) {
        array_push($subjects, "Criminal Justice and Criminology");
        break;
    }
   if (strpos($keyword, "criminology") !== false) {
        array_push($subjects, "Criminal Justice and Criminology");
        break;
    }
   if (strpos($keyword, "dental") !== false) {
        array_push($subjects, "Dental Hygiene");
        break;
    }
   if (strpos($keyword, "dentistry") !== false) {
        array_push($subjects, "Dental Hygiene");
        break;
    }
   if (strpos($keyword, "digital media") !== false) {
        array_push($subjects, "Digital Media");
        break;
    }
   if (strpos($keyword, "economics") !== false) {
        array_push($subjects, "Economics and Finance");
        break;
    }
   if (strpos($keyword, "finance") !== false) {
        array_push($subjects, "Economics and Finance");
        break;
    }
   if (strpos($keyword, "education") !== false) {
        array_push($subjects, "Education");
        break;
    }
   if (strpos($keyword, "engineering") !== false) {
        array_push($subjects, "Engineering");
        break;
    }
   if (strpos($keyword, "english") !== false) {
        array_push($subjects, "English");
        break;
    }
   if (strpos($keyword, "environmental health") !== false) {
        array_push($subjects, "Environmental Health");
        break;
    }
   if (strpos($keyword, "foreign language") !== false) {
        array_push($subjects, "Foreign Language and Literature");
        break;
    }
   if (strpos($keyword, "gender") !== false) {
        array_push($subjects, "Gender and Diversity");
        break;
    }
   if (strpos($keyword, "diversity") !== false) {
        array_push($subjects, "Gender and Diversity");
        break;
    }
   if (strpos($keyword, "geosciences") !== false) {
        array_push($subjects, "Geosciences");
        break;
    }
   if (strpos($keyword, "geology") !== false) {
        array_push($subjects, "geosciences");
        break;
    }
   if (strpos($keyword, "graphic design") !== false) {
        array_push($subjects, "Graphic Design");
        break;
    }
   if (strpos($keyword, "healthcare management") !== false) {
        array_push($subjects, "Healthcare Management");
        break;
    }
   if (strpos($keyword, "history") !== false) {
        array_push($subjects, "History");
        break;
    }
   if (strpos($keyword, "international studies") !== false) {
        array_push($subjects, "International Studies");
        break;
    }
   if (strpos($keyword, "legal") !== false) {
        array_push($subjects, "Legal Resources");
        break;
    }
   if (strpos($keyword, "management") !== false) {
        array_push($subjects, "Management and Leadership");
        break;
    }
   if (strpos($keyword, "leadership") !== false) {
        array_push($subjects, "");
        break;
    }
   if (strpos($keyword, "marketing") !== false) {
        array_push($subjects, "Marketing");
        break;
    }
   if (strpos($keyword, "mathematics") !== false) {
        array_push($subjects, "Mathematics");
        break;
    }
   if (strpos($keyword, "math") !== false) {
        array_push($subjects, "Mathematics");
        break;
    }
   if (strpos($keyword, "music") !== false) {
        array_push($subjects, "Music");
        break;
    }
   if (strpos($keyword, "nursing") !== false) {
        array_push($subjects, "Nusing");
        break;
    }
   if (strpos($keyword, "nutrition") !== false) {
        array_push($subjects, "Nutrition and Dietetics");
        break;
    }
   if (strpos($keyword, "dietetics") !== false) {
        array_push($subjects, "Nutrition and Dietetics");
        break;
    }
   if (strpos($keyword, "paleontology") !== false) {
        array_push($subjects, "Paleontology");
        break;
    }
   if (strpos($keyword, "philosophy") !== false) {
        array_push($subjects, "Philosophy");
        break;
    }
   if (strpos($keyword, "physical therapy") !== false) {
        array_push($subjects, "Physical Therapy");
        break;
    }
   if (strpos($keyword, "physics") !== false) {
        array_push($subjects, "Physics");
        break;
    }
   if (strpos($keyword, "political") !== false) {
        array_push($subjects, "Political Science");
        break;
    }
   if (strpos($keyword, "politics") !== false) {
        array_push($subjects, "Political Science");
        break;
    }
   if (strpos($keyword, "psychology") !== false) {
        array_push($subjects, "Psychology");
        break;
    }
   if (strpos($keyword, "public administration") !== false) {
        array_push($subjects, "Public Administration");
        break;
    }
   if (strpos($keyword, "public health") !== false) {
        array_push($subjects, "Public Health");
        break;
    }
   if (strpos($keyword, "radiography") !== false) {
        array_push($subjects, "Radiography");
        break;
    }
   if (strpos($keyword, "regional") !== false) {
        array_push($subjects, "Regional and Community Studies");
        break;
    }
   if (strpos($keyword, "social work") !== false) {
        array_push($subjects, "Social Work");
        break;
    }
   if (strpos($keyword, "sociology") !== false) {
        array_push($subjects, "Sociology");
        break;
    }
   if (strpos($keyword, "speech language") !== false) {
        array_push($subjects, "Speech-Lanuguage Pathology");
        break;
    }
   if (strpos($keyword, "sport leadership") !== false) {
        array_push($subjects, "Sport Leadership and Management");
        break;
    }
   if (strpos($keyword, "physiology") !== false) {
        array_push($subjects, "Sport Physiology and Performance");
        break;
    }
   if (strpos($keyword, "storytelling") !== false) {
        array_push($subjects, "Storytelling");
        break;
    }
   if (strpos($keyword, "surveying") !== false) {
        array_push($subjects, "Surveying");
        break;
    }
   if (strpos($keyword, "theatre") !== false) {
        array_push($subjects, "Theatre");
        break;
    }
   if (strpos($keyword, "women's studies") !== false) {
        array_push($subjects, "Women's Studies");
        break;
    }
   if (strpos($keyword, "womens studies") !== false) {
        array_push($subjects, "Women's Studies");
        break;
    }

//Medicine and Pharmacy Terms
   if (strpos($keyword, "primary care") !== false) {
        array_push($subjects, "Medicine");
        break;
    }
   if (strpos($keyword, "family practice") !== false) {
        array_push($subjects, "Medicine");
	break;
    }
   if (strpos($keyword, "endocrinology") !== false) {
        array_push($subjects, "Medicine");
        break;
    }
   if (strpos($keyword, "endocrine") !== false) {
        array_push($subjects, "Medicine");
        break;
    }
   if (strpos($keyword, "diabetes") !== false) {
        array_push($subjects, "Medicine");
        break;
    }
   if (strpos($keyword, "infectious") !== false) {
        array_push($subjects, "Medicine");
        break;
    }



   if (strpos($keyword, "internal") !== false) {
        array_push($subjects, "Medicine");
	break;
    }
    if (strpos($keyword, "obstetrics") !== false) {
        array_push($subjects, "Medicine");
	break;
    }
    if (strpos($keyword, "gynecology") !== false) {
        array_push($subjects, "Medicine");
        break;
    }
   if (strpos($keyword, "oncology") !== false) {
        array_push($subjects, "Medicine");
        break;
    }
   if (strpos($keyword, "cancer") !== false) {
        array_push($subjects, "Medicine");
        break;
    }

    if (strpos($keyword, "pediatric") !== false) {
        array_push($subjects, "Medicine");
        break;
    }
    if (strpos($keyword, "psychiatry") !== false) {
        array_push($subjects, "Medicine");
        break;
    }

    if (strpos($keyword, "surgery") !== false) {
        array_push($subjects, "Medicine");
        break;
    }
    if (strpos($keyword, "surgical") !== false) {
        array_push($subjects, "Medicine");
        break;
    }


    if (strpos($keyword, "cardiology") !== false) {
        array_push($subjects, "Medicine");
        break;
    }
    if (strpos($keyword, "cardiovascular") !== false) {
        array_push($subjects, "Medicine");
        break;
    }

    if (strpos($keyword, "heart") !== false) {
        array_push($subjects, "Medicine");
        break;
    }
    if (strpos($keyword, "anatomy") !== false) {
        array_push($subjects, "Anatomy");
        break;
    }
    if (strpos($keyword, "pharmacy") !== false) {
        array_push($subjects, "Pharmacy");
        break;
    }


}

?>
