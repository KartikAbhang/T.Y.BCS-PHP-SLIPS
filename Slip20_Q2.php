<!--
Write a program to read a flat file “student.dat”, calculate the percentage and display 
the data from file in tabular format.
(Student.dat file contains: rollno, name, OS, WT, DS, Python, Java, CN)
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Percentage Display</title>
</head>
<body>
    <h2>Student Details with Percentage</h2>

    <?php

    $filename = "student.dat";
    $file = fopen($filename, "r");

        echo "<table border='1'>
                <tr>
                    <th>Roll No</th>
                    <th>Name</th>
                    <th>OS</th>
                    <th>WT</th>
                    <th>DS</th>
                    <th>Python</th>
                    <th>Java</th>
                    <th>CN</th>
                    <th>Percentage</th>
                </tr>";

        while (!feof($file)) {
            $line = fgets($file);
            $data = preg_split("/[\s,]+/", trim($line));

            $rollno = $data[0];
            $name = $data[1];
            $os = $data[2];
            $wt = $data[3];
            $ds = $data[4];
            $python = $data[5];
            $java = $data[6];
            $cn = $data[7];

            $total = $os + $wt + $ds + $python + $java + $cn;
            $percentage = $total / 6;

            echo "<tr>
                    <td>$rollno</td>
                    <td>$name</td>
                    <td>$os</td>
                    <td>$wt</td>
                    <td>$ds</td>
                    <td>$python</td>
                    <td>$java</td>
                    <td>$cn</td>
                    <td>" . round($percentage, 2) . "%</td>
                  </tr>";
        }

        echo "</table>";
        fclose($file);
    ?>
</body>
</html>