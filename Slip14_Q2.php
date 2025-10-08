<!--
Write a PHP script for the following: Design a form to accept the marks of 5 different subjects 
of a student, having serial number, subject name & marks out of 100. Display the result in the 
tabular format which will have total, percentage and grade. Use only 3 text boxes.              
[15]                                 
(Use array of form parameters) 
--><!DOCTYPE html>
<html>
<body>

<form method="POST" action="#">
    <h3>Enter Student Details</h3>
    Roll No: <input type="text" name="roll"><br><br>
    Name: <input type="text" name="name"><br><br>
    Enter Marks for 5 subjects (Java, PHP, CN, TCS, OS) - comma separated:<br>
    <input type="text" name="marks" placeholder="e.g. 80,75,90,85,88"><br><br>
    <input type="submit" value="Submit">
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $roll = $_POST["roll"];
    $name = $_POST["name"];
    $marks = explode(",", $_POST["marks"]); 

    if(count($marks)==5)
    {
        $total = $marks[0] + $marks[1] + $marks[2] + $marks[3] + $marks[4];
        $per = $total / 5;

        if($per >= 75)
            $grade = "Distinction";
        elseif($per >= 60)
            $grade = "First Class";
        elseif($per >= 50)
            $grade = "Second Class";
        elseif($per >= 40)
            $grade = "Pass";
        else
            $grade = "Fail";

        echo "<table border='1' align='center' cellpadding='5'>";
        echo "<tr>
                <th>Roll No</th>
                <th>Name</th>
                <th>Java</th>
                <th>PHP</th>
                <th>CN</th>
                <th>TCS</th>
                <th>OS</th>
                <th>Total</th>
                <th>Percentage</th>
                <th>Grade</th>
              </tr>";

        echo "<tr>
              <td>$roll</td>
              <td>$name</td>
              <td>$marks[0]</td>
              <td>$marks[1]</td>
              <td>$marks[2]</td>
              <td>$marks[3]</td>
              <td>$marks[4]</td>
              <td>$total</td>
              <td>$per%</td>
              <td>$grade</td>
              </tr>";
        echo "</table>";
    }
    else
    {
        echo "<p style='color:red;text-align:center;'>Enter exactly 5 marks separated by commas!</p>";
    }
}
?>

</body>
</html>
