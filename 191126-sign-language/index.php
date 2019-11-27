<?

/*
CONCEPT:

USER DOES THIS:
1. VIEW SEARCH BOX
2. ENTER TEXT INTO SEARCH BOX
3. SUBMIT FORM

PAGE RESPONDS WITH THIS
4. COLLECT FORM INPUT
5. TRANSLATE FORM INPUT TEXT INTO SIGN LANGUAGE GRAPHICS
6. PRESENT THE GRAPHICS	
*/	

/*

INTERACTIVE EVENTS
1. IN HTML, PRESENT FORM
2. IN PHP, SET UP FORM TO RETURN INPUT TO PAGE
3. SET UP PHP HANDLER TO PROCESS FORM INPUT
4. SET UP PHP FUNCTION TO PARSE THE INPUT PHRASE INTO CHARACTERS, THEN MAP THE CHARACTERS TO CORRESPONDING GRAPHICS
5. PRESENT GRAPHICS
	
*/



// HANDLE THE USER INPUT

// REGISTER VARIABLE FOR THE INCOMING PHRASE
$phrase = $_POST['phrase'];

// CONVERT THE PHRASE TO ALL LOWERCASE LETTERS, TO FACILITATE THE CHARACTER MATCHING RULES
$phrase = strtolower($phrase);

// BREAK THE PHRASE INTO CHARACTERS, STORED IN AN ARRAY
$phrase = str_split($phrase);

// PARSE THROUGH THE ARRAY AND MAP CHARACTERS TO GRAPHICS
// BY CONSIDERING EACH CHARACTER AS $character

foreach ($phrase as $character)
{

	// ASSIGN THE LOGICAL FILENAME FOR THE CHARACTER IN EVALUATION
	$character = $character . ".gif";
	if (file_exists($character) == 1)
	{
		$results .= "<img src=$character height=72>";
	}
	else
	{
		// DO NOTHING
	}
}

// print_r($phrase);

?>	

<html>
	<head>
		<title>Art 64X - Sign Language Translator POC</title>
	</head>
	<body>
		<form method=post>
			<input type=text name=phrase>
			<input type=submit name=submit value=submit>
		</form>
			
		<p><?=$results?>
	</body>
</html>