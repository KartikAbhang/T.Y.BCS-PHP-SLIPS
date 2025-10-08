<!--
Write a program to read a flat file “item.dat”, which contains details of 5 different items such 
as Item code, Item Name, unit sold, and Rate. Display the Bill in tabular format.  
-->

<!DOCTYPE html>
<html>
<head>
    <title>Item Bill</title>
</head>
<body>

<h2>Item Bill</h2>
<?php
$filename = "item.dat";

if(file_exists($filename)) {
    $file = fopen($filename, "r");

    echo "<table border='1' cellpadding='5'>";
    echo "<tr>
            <th>Item Code</th>
            <th>Item Name</th>
            <th>Unit Sold</th>
            <th>Rate</th>
            <th>Amount</th>
          </tr>";

    $total = 0;

    while(($line = fgets($file)) !== false) {
        $parts = explode(",", trim($line));
        $code = $parts[0];
        $name = $parts[1];
        $unit = $parts[2];
        $rate = $parts[3];
        $amount = $unit * $rate;
        $total += $amount;

        echo "<tr>
                <td>$code</td>
                <td>$name</td>
                <td>$unit</td>
                <td>$rate</td>
                <td>$amount</td>
              </tr>";
    }

    echo "<tr>
            <td colspan='4'><b>Total Amount</b></td>
            <td><b>$total</b></td>
          </tr>";

    echo "</table>";
    fclose($file);

} else {
    echo "File 'item.dat' not found!";
}
?>

</body>
</html>