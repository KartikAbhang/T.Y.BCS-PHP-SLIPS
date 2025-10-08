<!--
Write a program to read one file and display the contents of the file with its size
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
    <input type="text" name="filename" placeholder="ENTER A FILE NAME:" required>
    <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])) {
            $filename = $_POST['filename'];
            $filesize = filesize($filename);
            $contents = file_get_contents($filename);
            echo "<h3>Contents of $filename:</h3>";
            echo "<pre>$contents</pre>";
            echo "<p>File size: $filesize bytes</p>";
    }
?>