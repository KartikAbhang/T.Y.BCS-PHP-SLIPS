<!--
Create an array of 15 high temperatures, approximating the weather for a spring month, then 
find the average high temp, the five warmest high temps Display the result on the browser.
-->
<?php
$temps = [22, 24, 19, 25, 23, 20, 21, 26, 24, 22, 27, 23, 25, 24, 21];

$average = array_sum($temps) / count($temps);

rsort($temps);
$warmestFive = array_slice($temps, 0, 5);

echo "<h3>Spring Month High Temperatures:</h3>";
echo "Temperatures: ";
for($i = 0; $i < count($temps); $i++){
    echo $temps[$i] . " ";
}
echo "<br>Average High Temperature: " . round($average, 2) . "°C<br>";

echo "Five Warmest High Temperatures: ";
for($i = 0; $i < count($warmestFive); $i++){
    echo $warmestFive[$i] . " ";
}
?>
