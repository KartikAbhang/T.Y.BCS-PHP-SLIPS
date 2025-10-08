<!--
.Write a PHP script for the following: Design a form having a text box and a drop down list 
containing any 3 separators(e.g. #, |, %, @, ! or comma) accept a strings from the user and also 
a separator. 
1. Split the string into separate words using the given separator. 
2. Replace all the occurrences of separator in the given string with some other separator. 
3. Find the last word in the given string
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Separator Operations</title>
</head>
<body>

<h2>String Separator Program</h2>

<form method="post">
    <input type="text" name="inputString" placeholder="Enter your string" required>
    <select name="separator">
        <option value="#">#</option>
        <option value="|">|</option>
        <option value="%">%</option>
        <option value="@">@</option>
        <option value="!">!</option>
    </select>
    <br><br>
    <input type="submit" name="submit" value="Process">
</form>

<?php
if(isset($_POST['submit'])){
    $string = $_POST['inputString'];
    $sep = $_POST['separator'];

    $words = explode($sep, $string);

    $replaced = str_replace($sep, ",", $string);

    $lastWord = end($words);

    echo "<h3>Results:</h3>";
    echo "Original String: $string<br>";
    echo "Words after split: ";
    foreach($words as $w){
        echo $w . " ";
    }
    echo "<br>String after replacing separator with comma: $replaced<br>";
    echo "Last word in string: $lastWord";
}
?>

</body>
</html>