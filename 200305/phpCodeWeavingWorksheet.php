<?php

function generateSuperName($id)
{
    // take the incoming ID, use it to look up something somewhere, use that result to produce anything, then do something
    // blah blah

    return $something;
}

$query ="
  SELECT
   filename, name, id
  FROM
      archetypeChrisG
  ORDER BY
      rand()
  LIMIT 3
";


while
{
    // register array variables
    $filename = $row[0];
    $name = $row[1];
    $id = $row[2];
   
    // prepare output
   
    $output .="<div style='float: left; padding: 5%; text-align: center; margin: 10px; background-color: #ffffcc; min-width: 100px; font-size: 1em;'><img src=images/".$filename." style='width: 100%;'><br>".generateSuperName($id)."<br><input type=radio name=vote value=".$id."></div>";
}

$something ="
  <div style='float: left; padding: 5%; text-align: center; margin: 10px; background-color: #ffffcc; min-width: 100px; font-size: 1em;'>Hero<br><input type=radio name=vote value=19></div>
  <div style='float: left; padding: 5%; text-align: center; margin: 10px; background-color: #ffffcc; min-width: 100px; font-size: 1em;'>Sage<br><input type=radio name=vote value=26></div>
  <div style='float: left; padding: 5%; text-align: center; margin: 10px; background-color: #ffffcc; min-width: 100px; font-size: 1em;'>Lover<br><input type=radio name=vote value=22></div>
";

?>

<html>
  <body>
    <?=$output?>
  </body>
</html>
