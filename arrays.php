<?php
/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

/*
Print every array element in a new line.
*/




// task separator
echo "<hr style=\"margin 1rem 0\">";
$food =["pizza", "pasta", "icecream","browny"];
echo $food[0];
echo "<br>";
echo $food[1];
echo "<br>";
echo $food[2];
echo "<br>";
echo $food[3];




/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/



// task separator
echo "<hr style=\"margin 1rem 0\">";

echo "<ul>";
echo "<li>$food[0]</li>";
echo "<li>$food[1]</li>";
echo "<li>$food[2]</li>";
echo "<li>$food[3]</li>";
echo "</ul>";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/




// task separator
echo "<hr style=\"margin 1rem 0\">";
$food_assoc[$food[0]] ="main course";
$food_assoc[$food[1]] ="Salad";
$food_assoc[$food[2]] ="Desert";
$food_assoc[$food[3]] ="Desert";

echo $food[0]."|".$food_assoc[$food[0]]."<br>";
echo $food[1]."|".$food_assoc[$food[1]]."<br>";
echo $food[2]."|".$food_assoc[$food[2]]."<br>";
echo $food[3]."|".$food_assoc[$food[3]]."<br>";
/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/
$food_assoc[$food[0]] = ["type"=>"main course", "origin"=>"Italy"];
$food_assoc[$food[1]] =["type"=>"Salad", "origin"=>"Greece"];
$food_assoc[$food[2]] =["type"=>"Desert", "origin"=>"vietname"];
$food_assoc[$food[3]] =["type"=>"Desert", "origin"=>"vietname"];

/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/




// task separator
echo "<hr style=\"margin 1rem 0\">";

echo $food[0]."| ".$food_assoc[$food[0]]["type"]."| ".$food_assoc[$food[0]]["origin"]."<br>";
echo $food[1]."| ".$food_assoc[$food[1]]["type"]."| ".$food_assoc[$food[1]]["origin"]."<br>";
echo $food[2]."| ".$food_assoc[$food[2]]["type"]."| ".$food_assoc[$food[2]]["origin"]."<br>";
echo $food[3]."| ".$food_assoc[$food[3]]["type"]."| ".$food_assoc[$food[3]]["origin"]."<br>";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/
echo "<hr style=\"margin 1rem 0\">";
echo "<table border=5>";
echo "<tr>";
echo "<th>food</th>";
echo "<th>type</th>";
echo "<th>origin</th>";
echo "</tr>";
echo "<tr>";
echo "<td>$food[0]</td>";
echo "<td>".$food_assoc[$food[0]]['type']."</td>";
echo "<td>".$food_assoc[$food[0]]['origin']."</td>";
echo "</tr>";

echo "<td>$food[1]</td>";
echo "<td>".$food_assoc[$food[1]]['type']."</td>";
echo "<td>".$food_assoc[$food[1]]['origin']."</td>";
echo "</tr>";

echo "<td>$food[2]</td>";
echo "<td>".$food_assoc[$food[2]]['type']."</td>";
echo "<td>".$food_assoc[$food[2]]['origin']."</td>";
echo "</tr>";

echo "<td>$food[3]</td>";
echo "<td>".$food_assoc[$food[3]]['type']."</td>";
echo "<td>".$food_assoc[$food[3]]['origin']."</td>";
echo "</tr>";
echo "</table>";
?>
