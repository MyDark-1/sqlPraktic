<?php
require_once '../database.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_group'])) {
    $name = $_POST['name'];
    $sql = "INSERT INTO groups (name) VALUES (:name)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $name]);
    echo "Group added successfully!";
}
?>
<form method="POST">
    <label for="group_name">Group Name:</label>
    <input type="text" id="group_name" name="name" required>
    <button type="submit" name="add_group">Add Group</button>
</form>
