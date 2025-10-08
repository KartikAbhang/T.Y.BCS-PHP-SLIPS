<!--Write a menu driven program to perform the following operations on an associative array 
1. Reverse the order of each element’s key-value pair. 
2. Traverse the element in an array in random order. 
3. Convert the array elements into individual variables. 
4. Display the elements of an array along with key.   
-->

<!DOCTYPE html>
<html>
<head>
    <title>Associative Array Operations</title>
</head>
<body>
<h2>Menu Driven Program</h2>

<form method="post">
    <select name="operation">
        <option value="reverse">Reverse Key-Value</option>
        <option value="shuffle">Random Order</option>
        <option value="extract">Convert to Variables</option>
        <option value="display">Display Array</option>
    </select>
    <input type="submit" name="submit" value="Go">
</form>

<?php
if (isset($_POST['submit'])) {
    $array = array(
        "Sagar" => 31,
        "Vicky" => 41,
        "Leena" => 39,
        "Ramesh" => 40
    );

    $op = $_POST['operation'];

    switch ($op) {
        case "reverse":
            $reversed = array_flip($array);
            echo "<h3>Reversed Array:</h3>";
            echo "<pre>";
            print_r($reversed);
            echo "</pre>";
            break;

        case "shuffle":
            $keys = array_keys($array);
            shuffle($keys);
            $shuffled = [];
            foreach ($keys as $key) {
                $shuffled[$key] = $array[$key];
            }
            echo "<h3>Random Order:</h3>";
            echo "<pre>";
            print_r($shuffled);
            echo "</pre>";
            break;

        case "extract":
            extract($array);
            $vars = [];
            foreach ($array as $key => $value) {
                $vars[$key] = $$key;
            }
            echo "<h3>Variables:</h3>";
            echo "<pre>";
            print_r($vars);
            echo "</pre>";
            break;

        case "display":
            echo "<h3>Array Elements:</h3>";
            echo "<pre>";
            print_r($array);
            echo "</pre>";
            break;

        default:
            echo "Invalid Operation!";
            break;
    }
}
?>
</body>
</html>