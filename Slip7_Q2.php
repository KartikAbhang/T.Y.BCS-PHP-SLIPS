<!--
Write a script to accept two integers(Use html form having 2 textboxes). Write a PHP script 
to, 
1.Find mod of the two numbers. 
2.Find the power of first number raised to the second. 
3.Find the sum of first n numbers (considering first number as n) 
4.Find the factorial of second number. 
(Write separate function for each of the above operations.)   
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
            <input type="number" name="num1" placeholder="ENTER FIRST NUMBER:">
            <input type="number" name="num2" placeholder="ENTER SECOND NUMBER:">
            <input type="submit" name="submit">
        </form>
</body>
</html>

<?php

    function mod($num1,$num2){
        return $num1%$num2;
    }

    function power($num1,$num2){
        return pow($num1,$num2);
    }

    function sum($num1){
        $result=0;
        for($i=1;$i<=$num1;$i++){
            $result=$result+$i;
        }
        return $result;
    }

    function fact($num2){
        $result=1;
        for($i=1;$i<=$num2;$i++){
            $result=$result*$i;
        }
        return $result;
    }

    if(isset($_POST['submit'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        echo "<h3>Results:</h3>";
        echo "1.MOD OF TWO NUM: " . mod($num1, $num2) . "<br>";
        echo "2.POWER OF 1ST NUM RAISED BY 2ND: " . power($num1, $num2) . "<br>";
        echo "3.SUM OF 1ST N NUM " .sum($num1) . "<br>";
        echo "4.FACTORIAL OF 2ND NUM: " . fact($num2) . "<br>";
    }
?>