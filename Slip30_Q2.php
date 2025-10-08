<!--
Write a PHP script for the following: Design a form to accept a string.  
1. Write a function to find the length of given string without using built in functions.   
2. Write a function to count the total number of vowels i.e. (a,e,i,o,u) ) from the string.   
3. Convert the given string to lowercase and then to Title case.  
4. Pad the given string with “*” from left and right both the sides.  
5. Remove the leading whitespaces from the given string.    
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
    <input type="text" name="str" placeholder="ENTER A STRING:"><br>
       <select name="operation">
            <option value="first5">First 5 Words</option>
            <option value="lower_title">Lowercase & Title Case</option>
            <option value="pad">Pad with *</option>
            <option value="trim">Remove Leading Spaces</option>
            <option value="reverse">Reverse String</option>
        </select><br><br>
    <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $str=$_POST['str'];
        $operation = $_POST['operation'];

        switch($operation){
            case 'first5':
                $words=explode(" ", $str);
                for($i=0;$i<count($words) && $i<5;$i++){
                    echo $words[$i]." ";
                }
                break;
            case 'lower_title':
                $lower = strtolower($str);
                $title = ucwords($lower);
                echo "<h3>Lowercase:</h3> $lower<br>";
                echo "<h3>Title Case:</h3> $title<br>";
                break;
            case 'pad':
                $padded = str_pad($str, strlen($str) + 4, "*", STR_PAD_BOTH);
                echo "<h3>Padded String:</h3> $padded<br>";
                break;
            case 'trim':
                echo "AFTER TRIM: ".ltrim($str);
                break;
            case 'reverse':
                echo"<h3>REVERSED STRING:</h3>".strrev($str);
                break;
            default: echo "Invalid Operation Selected!";
        }
    }
?>