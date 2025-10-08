<!--
.Write a menu driven program to perform the following stack related operations: 
1.Insert an element in stack 
2.Delete an element from stack 
3.Display the contents of stack      
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="number" name="element" placeholder="ENTER A NUM TO INSERT:">

        <select name="operation">
            <option value="insert">Insert Element</option>
            <option value="delete">Delete Element</option>
            <option value="display">Display Stack</option>
        </select><br><br>
          <input type="submit" name="submit">
    </form>
</body>
</html>
<?php
session_start();

if (!isset($_SESSION['stack'])) {
    $_SESSION['stack'] = array();
}

if (isset($_POST['submit'])) {

    $operation = $_POST['operation'];
    $element = $_POST['element'];

    switch ($operation) {
        case 'insert':
            if ($element === "") {
                echo "PLZ ENTER AN ELEMENT TO INSERT<br>";
            } else {
                array_push($_SESSION['stack'], $element);
                echo "INSERTED SUCCESSFULLY<br>";
            }
            break;

        case 'delete':
            if (empty($_SESSION['stack'])) {
                echo "STACK IS EMPTY<br>";
            } else {
                $deleted = array_pop($_SESSION['stack']);
                echo "ELEMENT $deleted DELETED FROM STACK<br>";
            }
            break;

        case 'display':
            if (empty($_SESSION['stack'])) {
                echo "STACK IS EMPTY<br>";
            } else {
                echo "STACK CONTENTS (TOP → BOTTOM):<br>";
                for ($i = count($_SESSION['stack']) - 1; $i >= 0; $i--) {
                    echo $_SESSION['stack'][$i] . "<br>";
                }
            }
            break;

        default:
            echo "Invalid operation.<br>";
            break;
    }
}
?>