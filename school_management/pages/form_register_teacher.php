<?php
require_once '../database.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register_teacher'])) {
    $teacher_name = $_POST['teacher_name'];
    $sql = "INSERT INTO teachers (name) VALUES (:teacher_name)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['teacher_name' => $teacher_name]);
    echo "Teacher registered successfully!";
}
?>
<form method="POST">
    <label for="teacher_name">Имя Учителя:</label>
    <input type="text" id="teacher_name" name="teacher_name" required>
    <button type="submit" name="register_teacher">Register Teacher</button>
</form>