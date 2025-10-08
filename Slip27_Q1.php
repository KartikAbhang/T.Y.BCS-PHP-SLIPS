<!-- 
Write a PHP script having 3 textboxes. The first textbox should be for accepting name of the 
student, second for accepting name of college and third for accepting a proper greeting message. 
Write a function for accepting all the three parameters and generating a proper greeting 
message. If any of the parameters are not passed, generate the proper greeting message.(Use the 
concept of missing parameters)  
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="sname" placeholder="ENTER STUDENT NAME:"><br>
        <input type="text" name="cname" placeholder="ENTER COLLEGE NAME:"><br>
        <input type="text" name="greeting" placeholder="ENTER A GREETING MSG:"><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php

    function greet($student, $college, $greeting){
        if(empty($student)) $student = "Pranav";
        if(empty($college)) $college = "RBNB";
        if(empty($greeting)) $greeting = "Hello";
        return "$greeting $student from $college";
    }

  if(isset($_POST['submit'])){
    $student=$_POST['sname'];
    $college=$_POST['cname'];
    $greeting=$_POST['greeting'];
    echo "<h1>".greet($student,$college,$greeting);
  }
?>