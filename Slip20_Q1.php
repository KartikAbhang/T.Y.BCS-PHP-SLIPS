<!--
Write a menu driven program to perform the following operations on associative arrays: 
1. Split an array into chunks 
2. Sort the array by values without changing the keys. 
3. Filter the even elements from an array.  
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array Operations</title>
</head>
<body>
<h2>Menu Driven Program on Associative Array</h2>

<form method="post">
    <select name="operation">
        <option value="chunk">Split Array into Chunks</option>
        <option value="sort">Sort by Values (Keep Keys)</option>
        <option value="even">Filter Even Elements</option>
    </select>
    <input type="submit" name="submit" value="Perform Operation">
</form>

<?php
if (isset($_POST['submit'])) {

 
    $array = array(
        "Sagar" => 31,
        "Vicky" => 42,
        "Leena" => 39,
        "Ramesh" => 40,
        "Anita" => 28
    );

    $op = $_POST['operation'];

    switch ($op) {
        case "chunk":
            $chunks = array_chunk($array, 2, true); 
            echo "<h3>Array Chunks:</h3><pre>";
            print_r($chunks);
            echo "</pre>";
            break;

        case "sort":
            asort($array); 
            echo "<h3>Sorted by Values:</h3><pre>";
            print_r($array);
            echo "</pre>";
            break;

        case "even":
            $even = array_filter($array, function($val) {
                return $val % 2 == 0;
            });
            echo "<h3>Even Elements:</h3><pre>";
            print_r($even);
            echo "</pre>";
            break;

        default:
            echo "<h3>Invalid Choice!</h3>";
            break;
    }
}
?>
</body>
</html>
