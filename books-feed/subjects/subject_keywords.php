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
   if (strpos($keyword, "african american") !== false) {
        array_push($subjects, "African American Studies");
        break;
    }
   if (strpos($keyword, "diversity") !== false) {
        array_push($subjects, "African American Studies");
        break;
    }
   if (strpos($keyword, "art history") !== false) {
        array_push($subjects, "Art & Art History");
        break;
   if (strpos($keyword, "drawing") !== false) {
        array_push($subjects, "Art & Art History");
        break;
    }
   if (strpos($keyword, "painting") !== false) {
        array_push($subjects, "Art & Art History");
        break;
    }
   if (strpos($keyword, "china") !== false) {
        array_push($subjects, "Asian Languages & Cultures");
        break;   
    }
   if (strpos($keyword, "chinese") !== false) {
        array_push($subjects, "Asian Languages & Cultures");
        break;
    }
   if (strpos($keyword, "india") !== false) {
        array_push($subjects, "Asian Languages & Cultures");
        break;
    }
   if (strpos($keyword, "japan") !== false) {
        array_push($subjects, "Asian Languages & Cultures");
        break;
    }
   if (strpos($keyword, "japanese") !== false) {
        array_push($subjects, "Asian Languages & Cultures");
        break;   
    }
   if (strpos($keyword, "bioethics") !== false) {
        array_push($subjects, "Bioethics");
        break;
    }
   if (strpos($keyword, "biology") !== false) {
        array_push($subjects, "Biology");
        break;
    }
   if (strpos($keyword, "botany") !== false) {
        array_push($subjects, "Biology");
        break;
    }
   if (strpos($keyword, "genetics") !== false) {
        array_push($subjects, "Biology");
        break;
    }
   if (strpos($keyword, "ecology") !== false) {
        array_push($subjects, "Biology");
        break;
    }
   if (strpos($keyword, "business") !== false) {
        array_push($subjects, "Business & Leadership");
        break;
    }
   if (strpos($keyword, "leadership") !== false) {
        array_push($subjects, "Business & Leadership");
        break;
    }
   if (strpos($keyword, "management") !== false) {
        array_push($subjects, "Business & Leadership");
        break;
    }
   if (strpos($keyword, "leadership") !== false) {
        array_push($subjects, "Business & Leadership");
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
   if (strpos($keyword, "classics") !== false) {
        array_push($subjects, "Classics & Ancient Mediterranean Studies");
        break;
    }
   if (strpos($keyword, "ancient") !== false) {
        array_push($subjects, "Classics & Ancient Mediterranean Studies");
        break;
    }
   if (strpos($keyword, "mediterranean") !== false) {
        array_push($subjects, "Classics & Ancient Mediterranean Studies");
        break;
    }
   if (strpos($keyword, "philology") !== false) {
        array_push($subjects, "Classics & Ancient Mediterranean Studies");
        break;
    }
   if (strpos($keyword, "communication") !== false) {
        array_push($subjects, "Communication Studies");
        break;
    }
   if (strpos($keyword, "media") !== false) {
        array_push($subjects, "Communication Studies");
        break;
    }
   if (strpos($keyword, "computing") !== false) {
        array_push($subjects, "Computer Science");
        break;
    }
   if (strpos($keyword, "computer") !== false) {
        array_push($subjects, "Computer Science");
        break;
    }
   if (strpos($keyword, "network") !== false) {
        array_push($subjects, "Computer Science");
        break;
    }
   if (strpos($keyword, "programming") !== false) {
        array_push($subjects, "Computer Science");
        break;
    }
   if (strpos($keyword, "economics") !== false) {
        array_push($subjects, "Economics");
        break;
    }
   if (strpos($keyword, "education") !== false) {
        array_push($subjects, "Education Studies");
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
        array_push($subjects, "Environmental Policy & Decision Making");
        break;
    }
   if (strpos($keyword, "environmental policy") !== false) {
        array_push($subjects, "Environmental Policy & Decision Making");
        break;
    }
   if (strpos($keyword, "exercise science") !== false) {
        array_push($subjects, "Exercise Science");
        break;
    }
   if (strpos($keyword, "french") !== false) {
        array_push($subjects, "French Studies");
        break;
    }
   if (strpos($keyword, "gender") !== false) {
        array_push($subjects, "Gender & Queer Studies");
        break;
    }
   if (strpos($keyword, "queer") !== false) {
        array_push($subjects, "Gender & Queer Studies");
        break;
    }
   if (strpos($keyword, "nonbinary") !== false) {
        array_push($subjects, "Gender & Queer Studies");
        break;
    }
   if (strpos($keyword, "women's studies") !== false) {
        array_push($subjects, "Gender & Queer Studies");
        break;
    }
   if (strpos($keyword, "womens studies") !== false) {
        array_push($subjects, "Gender & Queer Studies");
        break;
    }
   if (strpos($keyword, "geosciences") !== false) {
        array_push($subjects, "Geology");
        break;
    }
   if (strpos($keyword, "geology") !== false) {
        array_push($subjects, "Geology");
        break;
    }
   if (strpos($keyword, "german") !== false) {
        array_push($subjects, "German Studies");
        break;
    }
   if (strpos($keyword, "global development") !== false) {
        array_push($subjects, "global development studies");
        break;
    }
   if (strpos($keyword, "hispanic") !== false) {
        array_push($subjects, "Hispanic Studies");
        break;
    }
   if (strpos($keyword, "spanish") !== false) {
        array_push($subjects, "Hispanic Studies");
        break;
    }
   if (strpos($keyword, "history") !== false) {
        array_push($subjects, "History");
        break;
    }
   if (strpos($keyword, "archaeology") !== false) {
        array_push($subjects, "History");
        break;
    }
   if (strpos($keyword, "international political economy") !== false) {
        array_push($subjects, "International Political Economy");
        break;
    }
   if (strpos($keyword, "middle east") !== false) {
        array_push($subjects, "International Political Economy");
        break;
    }

   if (strpos($keyword, "commerce") !== false) {
        array_push($subjects, "International Political Economy");
        break;
    }
   if (strpos($keyword, "latinx") !== false) {
        array_push($subjects, "Latina/o Studies");
        break;
    }
   if (strpos($keyword, "hispanic american") !== false) {
        array_push($subjects, "Latina/o Studies");
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
   if (strpos($keyword, "natural science") !== false) {
        array_push($subjects, "Natural Science");
        break;
    }
   if (strpos($keyword, "neuroscience") !== false) {
        array_push($subjects, "Neuroscience");
        break;
    }
   if (strpos($keyword, "occupational therapy") !== false) {
        array_push($subjects, "Occupational Therapy");
        break;
   if (strpos($keyword, "philosophy") !== false) {
        array_push($subjects, "Philosophy");
        break;
    }
   if (strpos($keyword, "physical therapy") !== false) {
        array_push($subjects, "Physical Therapy");
        break;
    }
   if (strpos($keyword, "physical education") !== false) {
        array_push($subjects, "Physical Education");
        break;
    }
   if (strpos($keyword, "physics") !== false) {
        array_push($subjects, "Physics");
        break;
    }
   if (strpos($keyword, "political") !== false) {
        array_push($subjects, "Politics & Government");
        break;
    }
   if (strpos($keyword, "politics") !== false) {
        array_push($subjects, "Politics & Government");
        break;
    }
   if (strpos($keyword, "psychology") !== false) {
        array_push($subjects, "Psychology");
        break;
    }
   if (strpos($keyword, "religious studies") !== false) {
        array_push($subjects, "Religious Studies");
        break;
    }
   if (strpos($keyword, "religion") !== false) {
        array_push($subjects, "Religious Studies");
        break;
    }
   if (strpos($keyword, "Science and Society") !== false) {
        array_push($subjects, "Science, Technology & Society");
        break;
    }
   if (strpos($keyword, "Technology and Society") !== false) {
        array_push($subjects, "Science, Technology & Society");
        break;
    }
   if (strpos($keyword, "technology") !== false) {
        array_push($subjects, "Science, Technology & Society");
        break;
    }
   if (strpos($keyword, "sociology") !== false) {
        array_push($subjects, "Sociology & Anthropology");
        break;
    }   
   if (strpos($keyword, "anthropology") !== false) {
        array_push($subjects, "Sociology & Anthropology");
        break;
    }
   if (strpos($keyword, "theatre") !== false) {
        array_push($subjects, "Theatre Arts");
        break;
    }





}

?>
