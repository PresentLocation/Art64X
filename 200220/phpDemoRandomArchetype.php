<?php

// ART 646 DEMO ACTIVITY FOR THURSDAY, FEBRUARY 20, 2020
// WE CONTINUE TO PRACTICE METHODS OF WORKING WITH DATA TO SOURCE DYNAMIC OUTPUT
// THESE ACTIVITIES PREPARE US FOR WORKING WITH THE CRUD MODELL CREATE / READ / UPDATE / DELETE

// IN THIS DEMO, WE USE A PREVIOUS EXERCISE, DICE ROLL, AND ADAPT IT INTO A NEW WORK, ARCHETYPE APP


// THIS FUNCTION IS OLD AND NOT USED AT ALL IN THIS DEMO
function something()
{
}

// THIS FUNCTION IS OLD AND NOT USED AT ALL IN THIS DEMO
function cuttingBoard($wedges)
{
    // GRAB KNIFE, SECTION ITEM INTO $wedges DIFFERENT WEDGES
    // RETURN OUTPUT
}

// THIS FUNCTION IS OLD AND IS STILL BEING USED BUT IT IS NOT RELEVANT IN THE ADAPTATION. IN THE FUNCTION WE DEMONSTRATE REFACTORING THE LOGIC FROM AN ASSET CONTROL APPROACH TO A STRING MANIPULATION APPROACH
function rollDie()
{
    // GENERATE RANDOM NUMBER
    $number = rand(0,5);
    // EVALUATE NUMBER, MAPPING IT TO AN IMAGE
    
    // THIS IS THE OLD LOGIC MODEL, UTILIZING PHP SWITCH, WHICH MAPPED $number TO CORRESPONDING ASSET. IT IS COMMENTED OUT BECAUSE IT HAS BEEN REPLACED BY THE MORE ECONOMICAL METHOD BELOW
	/*
    switch ($number)
    {
    case "0":
        $imageFile ="http://www.codeyourheartout.com/examples/randomDieRoll/dado-1.png";
        break;
    case "1":
        $imageFile ="http://www.codeyourheartout.com/examples/randomDieRoll/dado-2.png";
        break;
    case "2":
        $imageFile ="http://www.codeyourheartout.com/examples/randomDieRoll/dado-3.png";
        break;
    case "3":
        $imageFile ="http://www.codeyourheartout.com/examples/randomDieRoll/dado-4.png";
        break;
    case "4":
        $imageFile ="http://www.codeyourheartout.com/examples/randomDieRoll/dado-5.png";
        break;
    case "5":
        $imageFile ="http://www.codeyourheartout.com/examples/randomDieRoll/dado-6.png";
        break;
    default:
        $imageFile ="http://www.codeyourheartout.com/examples/randomDieRoll/dado-3.png";
    }
    */

	// THIS IS THE NEW LOGIC MODEL, UTILIZING BASIC CONCATENATION TO DYNAMICALLY ASSEMBLE A URL THAT WE ASSUME TO EXIST
	
    // THIS INCREMENTS $number BY ONE TO CONFORM THE RANDOM RANGE TO ONE THAT CONFORMS WITH WESTERN HUMAN ASSUMPTION THAT SEQUENCES STARTS WITH 1.
    $number = $number + 1;

	// THIS USES CONCATENATION (".") TO CUSTOMIZE THE STRING TO AN ASSET NAME THAT IS ASSUMED TO EXIST    
    $imageFile = "http://www.codeyourheartout.com/examples/randomDieRoll/dado-". $number .".png";

    // RETURN RESULT
    return $imageFile;
} 

// THESE ARE OLD VARIABLE DECLARATIONS, WHICH ARE STILL BEING USED, BUT NO LONGER RELEVANT TO THE ARCHETYPE APP
$newDie1 = rollDie();
$newDie2 = rollDie();


// NEW SCRIPTING

// ARCHETYPE RESEARCH: child devil god hero trickster wise old man wise old woman

// HERE IS A BASIC FORMATING OF A BASIC ARRAY OF ARCHETYPES. AN ARRAY IS A MAPPED LIST. EACH ITEM IN THIS ARRAY HAS AN ARRAY POSITION. FIRST POSITION = 0.   
$archetype = array("child", "devil", "god", "hero", "trickster", "wise old man", "wise old woman");

// EXAMPLE OF HOW WE MIGHT PULL THE ITEM "god" FROM THE ARRAY. ITEM "god" IS IN THIRD POSITION, OR POSITION = 2. BECAUSE ARRAY NODE 0 = POSITION 1, ARRAY NODE 1 = POSITION 2, and ARRAY NODE 2 = POSITION 3
// THIS IS DESCRIBED AS VARIABLE[POSITION]. LIKE THIS: $archetype[2];

// IF WE WANTED TO HARD PULL "god" FROM THE ARRAY, WE MIGHT DECLARE THE FOLLOWING:
// $pick = $archetype[2];

// IF WE WANT TO RANDOMLY PULL AN ITEM FROM THE ARRAY, WE MIGHT USE rand() WITH A SPAN OF 6, STARTING WITH 0: 

// FIRST RANDOMLY DETERMINE THE POSITION TO PULL
$archetypeX = rand(0,5);  
// THEN PULL THE POSITION AS A VARIABLE $pick
$pick = $archetype[$archetypeX];
 
// IN THIS CASE, $pick IS THE FINAL VARIABLE NEEDED TO DISPLAY A RANDOM ARCHETYPE

?>


<html>
<head>
	<title>Art 646 - Random Archetype - php Demo 200220</title>
    </head>
    <body style="background-color: green; text-align: center; padding: 2em;">
	    <!-- HERE IS A DEMONSTRATION OF HOW TO PLACE FINAL PHP OUTPUT WITHIN HTML -->
       
       <p>BEHOLD THE ARCHETYPE
       <!-- HERE IS THE RANDOM ARCHETYPE -->
       <h1><?=$pick ?>
       
	   <!-- HERE IS A DEMONSTRATION OF HOW TO USE A SIMPLE LINK TO REFRESH THE PAGE AND EXPERIENCE THE RANDOMIZED DYNAMIC OUTPUT ONCE AGAIN -->
	   <h1><a href=index.php>Pick Another</a></h1>


	   <!-- ALL THIS IS OLD STUFF, WE LEAVE IT HERE FOR PSYCHOLOGICAL SECURITY -->
       
       <p>
           <img src=<?=$newDie1 ?> >
           <img src=<?=$newDie2 ?> >

	   <div style="width: 300px; margin: 0 auto; background-color: rgba(255,255,255,0.1); padding: 20px;">
		   <h4>Some dynamic information from the PHP scripting demonstration process that seems irrelevant now that the app is complete but we shall include it anyway</h4>
		   <p><?=$math ?> <?=$pizza ?> ARRAY ITEM: <?=$pick ?>
		</div>
    </body>

</html>
