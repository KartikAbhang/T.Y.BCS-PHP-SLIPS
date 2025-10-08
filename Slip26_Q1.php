<!--
1.Write a PHP program to read two file names from user and copy the content of first file into 
second file. 
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
        <input type="text" name="file1" placeholder="ENTER FILE 1 NAME:"><br>
        <input type="text" name="file2" placeholder="ENTER FILE 2 NAME:"><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){

        $file1=$_POST['file1'];
        $file2=$_POST['file2'];

        if(file_exists($file1)){
            $content = file_get_contents($file1);

            if(file_put_contents($file2, $content) !== false){
                echo"<h1>COPY SUCC</h1>";
            }else{
                  echo"<h1>COPY UNSUCC</h1>";
            }
        }else{
            echo"FILE NOT FOUND";
        }
    }
?>