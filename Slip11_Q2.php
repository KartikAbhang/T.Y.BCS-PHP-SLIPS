<!--
 Write a PHP script for the following: Design a form to accept two numbers from the user. 
Give options to choose the arithmetic operation (use radio buttons). Display the result on the 
next form. (Use the concept of function and default parameters. Use ‘include’ construct or 
require statement) 
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Input</title>
</head>
<body>

<h2>Arithmetic Calculator</h2>

<form method="post" action="result.php">
    <input type="number" name="num1" placeholder="Enter first number" required>
    <input type="number" name="num2" placeholder="Enter second number" required>
    <br><br>
    <input type="radio" name="operation" value="add" checked> Add</label>
    <input type="radio" name="operation" value="sub"> Subtract</label>
   <input type="radio" name="operation" value="mul"> Multiply</label>
    <input type="radio" name="operation" value="div"> Divide</label>
    <br><br>
    <input type="submit" name="submit">
</form>

</body>
</html>

<?php
function calculate($num1 = 0, $num2 = 0, $operation = "add") {
    switch ($operation) {
        case "add":
            return $num1 + $num2;
        case "sub":
            return $num1 - $num2;
        case "mul":
            return $num1 * $num2;
        case "div":
            return ($num2 != 0) ? $num1 / $num2 : "Cannot divide by zero";
        default:
            return "Invalid operation";
    }
}
?>