<?php
require_once '../database.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_name'])) {
    $student_id = $_POST['student_id'];
    $new_name = $_POST['new_name'];
    $sql = "UPDATE students SET name = :new_name WHERE id = :student_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['new_name' => $new_name, 'student_id' => $student_id]);
    echo "Student name updated successfully!";
}
?>
<form method="POST">
    <label for="student_id">Student ID:</label>
    <input type="number" id="student_id" name="student_id" required>
    <label for="new_name">New Name:</label>
    <input type="text" id="new_name" name="new_name" required>
    <button type="submit" name="update_name">Update Name</button>
</form>
