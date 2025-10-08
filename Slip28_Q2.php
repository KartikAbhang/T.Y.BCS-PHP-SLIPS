<!--
2.Create a HTML form accepting information of college(collegeno,collegename,address) and 
insert it into hotel table (use postgres).   
-->

<!DOCTYPE html>
<html>
<head>
    <title>Insert College Info</title>
</head>
<body>
    <h2>College Information Form</h2>
    <form method="post">
        <input type="number" name="collegeno" placeholder="College Number" required><br><br>
        <input type="text" name="collegename" placeholder="College Name" required><br><br>
        <input type="text" name="address" placeholder="Address" required><br><br>
        <input type="submit" name="submit" value="Insert">
    </form>

<?php
if(isset($_POST['submit'])){
    $conn = pg_connect("host=localhost port=5432 dbname=your_db user=your_user password=your_pass");

    if(!$conn) die("Connection failed");

    $collegeno = (int)$_POST['collegeno'];
    $collegename = $_POST['collegename'];
    $address = $_POST['address'];

    $query = "INSERT INTO collegetable VALUES ($collegeno, '$collegename', '$address')";

    $result = pg_query($conn, $query);

    if($result) echo "<p>Inserted successfully!</p>";
    else echo "<p>Error: " . pg_last_error($conn) . "</p>";

    pg_close($conn);
}
?>
</body>
</html>
