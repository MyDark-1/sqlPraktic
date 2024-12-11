<?php
require_once '../database.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_student'])) {
    $name = $_POST['name'];
    $sql = "INSERT INTO students (name) VALUES (:name)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $name]);
    echo "Student added successfully!";
}
?>
<form method="POST">
    <label for="name">Student Name:</label>
    <input type="text" id="name" name="name" required>
    <button type="submit" name="add_student">Add Student</button>
</form>