<?php
require_once '../database.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['bind_student'])) {
    $student_id = $_POST['student_id'];
    $group_id = $_POST['group_id'];
    $sql = "UPDATE students SET group_id = :group_id WHERE id = :student_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['group_id' => $group_id, 'student_id' => $student_id]);
    echo "Student bound to group successfully!";
}
?>
<form method="POST">
    <label for="student_id">Student ID:</label>
    <input type="number" id="student_id" name="student_id" required>
    <label for="group_id">Group ID:</label>
    <input type="number" id="group_id" name="group_id" required>
    <button type="submit" name="bind_student">Bind Student</button>
</form>