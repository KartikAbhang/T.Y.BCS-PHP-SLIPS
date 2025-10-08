<!--
Create a database using postgres and create student table,write a php script to insert 5 values 
into student table. 
-->

<!--
CREATE DATABASE college;

\c college;

CREATE TABLE student (
    rollno SERIAL PRIMARY KEY,
    name VARCHAR(50),
    age INT,
    course VARCHAR(50),
    marks INT
);

-->

<?php
$host = "localhost";
$port = "5432";
$dbname = "college";
$user = "postgres";
$password = "password";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("Connection failed: " . pg_last_error());
}

$students = [
    ["name" => "Pranav", "age" => 20, "course" => "CS", "marks" => 85],
    ["name" => "Riya", "age" => 19, "course" => "IT", "marks" => 78],
    ["name" => "Aryan", "age" => 21, "course" => "CS", "marks" => 90],
    ["name" => "Anita", "age" => 20, "course" => "IT", "marks" => 82],
    ["name" => "Vicky", "age" => 22, "course" => "CS", "marks" => 88],
];

foreach ($students as $student) {
    $name = $student['name'];
    $age = $student['age'];
    $course = $student['course'];
    $marks = $student['marks'];

    $query = "INSERT INTO student (name, age, course, marks) VALUES ('$name', $age, '$course', $marks)";
    $result = pg_query($conn, $query);

    if ($result) {
        echo "Inserted: $name <br>";
    } else {
        echo "Error inserting $name: " . pg_last_error($conn) . "<br>";
    }
}

pg_close($conn);
?>