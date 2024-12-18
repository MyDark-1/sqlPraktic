<?php
require_once '../database.php';
$sql = "SELECT courses.name AS course_name, COUNT(student_courses.student_id) AS student_count 
        FROM courses 
        LEFT JOIN student_courses ON courses.id = student_courses.course_id 
        GROUP BY courses.name";
$stmt = $pdo->query($sql);
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<table>
    <tr>
        <th>Курс</th>
        <th>Студент</th>
    </tr>
    <?php foreach ($data as $row): ?>
        <tr>
            <td><?= $row['course_name'] ?></td>
            <td><?= $row['student_count'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>