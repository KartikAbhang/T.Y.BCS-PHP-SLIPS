<!--
 Write a PHP script that inserts a new item in an array at any position. (hint : use 
array_splice())     
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
        <input type="text" name="item" placeholder="ENTER A ITEM" required><br><br>
        <input type="number" name="pos" placeholder="ENTER A POSITION" required><br><br>
        <input type="submit" name="submit" value="Insert Item"><br><br>
    </form>
</body>
</html>

<?php
  if (isset($_POST['submit'])) {
        $arr = array("Apple", "Banana", "Mango", "Orange", "Grapes");
        $pos = (int)$_POST['pos'];
         $item = $_POST['item'];

        array_splice($arr, $pos, 0, $item);
        echo"UPDATED ARRAY:";
        print_r($arr);
  }
?>