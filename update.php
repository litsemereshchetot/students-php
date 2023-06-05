<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $faculty = $_POST["faculty"];
    $course = $_POST["course"];
    $group = $_POST["group"];
    $sql = "UPDATE students SET name='$name', faculty='$faculty', course='$course', groupp='$group' WHERE id='$id'";
    if ($mysql->query($sql) === TRUE) {
        echo "Student edited successfully";
    } else {
        echo "Error editing student: " . $mysql->error;
    }
}

$mysql->close();
?>