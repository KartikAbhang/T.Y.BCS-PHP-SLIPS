<!--
Write a PHP script to create a chess board using CSS on table cells
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Chess Board</title>
    <style>
        table { border-collapse: collapse; }
        td { width: 50px; height: 50px; }
    </style>
</head>
<body>

<h2>Simple Chess Board</h2>

<table>
<?php
for ($i = 0; $i < 8; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 8; $j++) {
        $color = ($i + $j) % 2 == 0 ? "white" : "black";
        echo "<td style='background-color:$color'></td>";
    }
    echo "</tr>";
}
?>
</table>

</body>
</html>
