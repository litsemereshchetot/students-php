<?php
include 'db_config.php';
$id = $_POST["id"];
$sql = "DELETE FROM students WHERE id='$id'";

if ($mysql->query($sql) === TRUE) {
    echo "Student deleted successfully";
} else {
    echo "Error deleting student: " . $mysql->error;
}

?>