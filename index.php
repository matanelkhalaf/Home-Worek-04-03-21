

<?php

   /*
    $id = array("David", "580950439", "02/02/2002");

    foreach ($id as $value) {
    echo $value." ";
    }

    print "<h1>".$id[0]."</h1>";
    print "<p style='color:green'>"."<u>".$id[1]."</u>"."</p>";
    print "<input type='number'>".$id[2]; */

    $favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
    
?>
