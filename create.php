<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $faculty = $_POST["faculty"];
    $course = $_POST["course"];
    $group = $_POST["group"];
    $sql = "INSERT INTO students (name, faculty, course, groupp) VALUES ('$name', '$faculty', '$course', '$group')";

    if ($mysql->query($sql) === TRUE) {
        echo "Student created successfully";
    } else {
        echo "Error creating student: " . $mysql->error;
    }
}

$mysql->close();
?>