// student_view.php

<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sinh viên</title>
</head>
<body>
    <h1>Danh sách sinh viên</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Môn học</th>
            <th>Điểm</th>
        </tr>
        <?php foreach ($students as $student): ?>
            <tr>
                <td><?php echo $student['id']; ?></td>
                <td><?php echo $student['name']; ?></td>
                <td><?php echo $student['subject']; ?></td>
                <td><?php echo $student['score']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
