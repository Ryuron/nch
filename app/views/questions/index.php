<h2>Danh sách câu hỏi</h2>
<a href="/Question/create">➕ Thêm câu hỏi</a>
<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Nội dung</th>
        <th>Đúng</th>
        <th>Môn</th>
        <th>Khối</th>
        <th>Độ khó</th>
        <th>Hành động</th>
    </tr>
    <?php foreach ($questions as $q): ?>
    <tr>
        <td><?= $q['QuestionId'] ?></td>
        <td><?= htmlspecialchars($q['Content']) ?></td>
        <td><?= $q['CorrectAnswer'] ?></td>
        <td><?= $q['SubjectId'] ?></td>
        <td><?= $q['GradeLevel'] ?></td>
        <td><?= $q['DifficultyLevel'] ?></td>
        <td>
            <a href="/Question/edit?id=<?= $q['QuestionId'] ?>">Sửa</a> |
            <a href="/Question/delete?id=<?= $q['QuestionId'] ?>" onclick="return confirm('Xóa câu hỏi này?')">Xóa</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
