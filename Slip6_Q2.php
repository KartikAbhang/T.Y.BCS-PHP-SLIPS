<!--
Write a menu driven program to perform various file operations. Accept filename 
from user.
1. Display type of file. 
2. Display last modification time of file 
3. Display the size of file 
4. Delete the file              
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Operations</title>
</head>
<body>
    <form method="post">
        <input type="text" name="file" placeholder="ENTER FILE NAME:">
        <select name="operation">
            <option value="type">TYPE OF FILE</option>
            <option value="time">LAST MODIFICATION TIME</option>
            <option value="size">SIZE OF FILE</option>
            <option value="delete">DELETE FILE</option>
        </select>
        <input type="submit" name="submit" value="Perform">
    </form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $filename = $_POST['file'];
    $operation = $_POST['operation'];

    switch ($operation) {
        case 'type':
            echo "TYPE OF FILE: " . filetype($filename);
            break;

        case 'time':
            echo "LAST MODIFICATION TIME: " . date("F d Y H:i:s", filemtime($filename));
            break;

        case 'size':
            echo "SIZE OF FILE: " . filesize($filename) . " BYTES";
            break;

        case 'delete':
            if (unlink($filename))
                echo "FILE DELETED SUCCESSFULLY";
            else
                echo "FILE CANNOT BE DELETED";
            break;

        default:
            echo "<p>Invalid operation!</p>";
            break;
    }
}
?>