<!--
.Create a database using postgres and create teacher table,write a php script to insert 5 values 
into teacher table.

-- Create database (if not already created)
CREATE DATABASE school;

-- Connect to database
\c school

-- Create teacher table
CREATE TABLE teacher (
    teacher_id SERIAL PRIMARY KEY,
    teacher_name VARCHAR(100),
    subject VARCHAR(50),
    experience INT
);

-->

<?php
// Connect to PostgreSQL
$conn = pg_connect("host=localhost port=5432 dbname=school user=your_user password=your_pass");
if(!$conn) die("Connection failed");

// Insert 5 teachers separately with manual IDs
pg_query($conn, "INSERT INTO teacher VALUES (1, 'Alice','Math',5)");
pg_query($conn, "INSERT INTO teacher VALUES (2, 'Bob','Physics',8)");
pg_query($conn, "INSERT INTO teacher VALUES (3, 'Charlie','Chemistry',6)");
pg_query($conn, "INSERT INTO teacher VALUES (4, 'David','Biology',7)");
pg_query($conn, "INSERT INTO teacher VALUES (5, 'Eva','English',4)");

echo "<p>5 teachers inserted successfully!</p>";

// Close connection
pg_close($conn);
?>
