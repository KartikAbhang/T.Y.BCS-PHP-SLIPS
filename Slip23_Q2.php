<!--
.Create a HTML form accepting information of hotel(hotelno,hotelname,address) and insert it 
into hotel table (use postgres).           
-->
<!DOCTYPE html>
<html>
<head>
    <title>Insert Hotel Info</title>
</head>
<body>
    <h2>Hotel Information Form</h2>
    <form method="post">
        <input type="number" name="hotelno" placeholder="Hotel Number" required><br><br>
        <input type="text" name="hotelname" placeholder="Hotel Name" required><br><br>
        <input type="text" name="address" placeholder="Address" required><br><br>
        <input type="submit" name="submit" value="Insert">
    </form>

<?php
if(isset($_POST['submit'])){
    $conn = pg_connect("host=localhost port=5432 dbname=your_db user=your_user password=your_pass");

    if(!$conn) die("Connection failed");

    $hotelno = (int)$_POST['hotelno'];
    $hotelname = $_POST['hotelname'];
    $address = $_POST['address'];

    $query = "INSERT INTO hotel VALUES ($hotelno, '$hotelname', '$address')";

    $result = pg_query($conn, $query);

    if($result) echo "<p>Inserted successfully!</p>";
    else echo "<p>Error: " . pg_last_error($conn) . "</p>";

    pg_close($conn);
}
?>
</body>
</html>
