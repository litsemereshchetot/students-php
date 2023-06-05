<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "valgas";

$mysql = new mysqli($servername, $username, $password, $dbname);

$students = $mysql->query("SELECT * FROM students");

$mysql->close();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Рубеж 2</title>
</head>

<body>
    <h2>Cписок студентов</h2>
    <?php while ($row = $students->fetch_assoc()) { ?>

        <strong class="student-name">
            <?= $row['id'] ?>.
            <?= $row['name'] ?>
        </strong>
        <span class="student-faculty">
            Факультет:
            <?= $row['faculty'] ?>
        </span>
        <span class="student-faculty">
            Курс:
            <?= $row['course'] ?>
        </span>
        <span class="student-faculty">
            Группа:
            <?= $row['groupp'] ?>
        </span>
        <br>
        <?php
    }
    ?>
    <h2>Создать студента</h2>
    <form action="create.php" method="POST">
        <input type="text" name="name" placeholder="Name" required><br>
        <input type="text" name="faculty" placeholder="Faculty" required><br>
        <input type="text" name="course" placeholder="Course" required><br>
        <input type="text" name="group" placeholder="Group" required><br>
        <button type="submit">Create</button>
    </form>



    <h2>Изменить студента</h2>
    <form action="update.php" method="POST">
        <input type="number" name="id" value="1">
        <input type="text" name="name" placeholder="Name" required><br>
        <input type="text" name="faculty" placeholder="Faculty" required><br>
        <input type="text" name="course" placeholder="Course" required><br>
        <input type="text" name="group" placeholder="Group" required><br>
        <button type="submit">Update</button>
    </form>

    <h2>Удалить студента</h2>
    <form action="delete.php" method="POST">
        <input type="number" name="id" value="1">
        <button type="submit">Delete</button>
    </form>
</body>

</html>