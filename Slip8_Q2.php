<!--
Design an HTML form to accept two strings from the user. Write a PHP script for the         
following. 
1. Find whether the small string appears at the start of the large string. 
2. Find the position of the small string in the big string. 
3. Compare both the string for first n characters, also the comparison should not be case 
sensitive.             
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
        <input type="text" name="str1" placeholder="ENTER FIRST STRING:" required><br><br>
        <input type="text" name="str2" placeholder="ENTER SECOND STRING:" required><br><br>
        <input type="number" name="num" placeholder="ENTER NUM FOR N COMPARISON" ><br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $str1 = $_POST['str1'];
        $str2 = $_POST['str2'];
        $num= $_POST['num'];

        if(str_starts_with($str1,$str2)){
            echo"1: $str2 APPEARS AT THE START OF $str1"."<br>";
        }else{
            echo"2: $str2 NOT APPEARS AT THE START OF $str1"."<br>";
        }
       $pos = stripos($str1, $str2);
        if ($pos === false) {
            echo"2. $str2 NOT FOUND IN $str1"."<br>";
        } else {
            echo"2. $str2 FOUND AT POSITION: ".$pos."<br>";
        }
           $compare=strncasecmp($str1, $str2, $num);
           if($compare==0){
            echo"FIRST $num CHARACTERS OF BOTH STRING ARE SAME";
           }else{
            echo"FIRST $num CHARACTERS OF BOTH STRING ARE DIFFERENT";
           }
    }
?>