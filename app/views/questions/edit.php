<h2>Sửa câu hỏi</h2>

<form method="post" action="/Question/update?id=<?= $question['QuestionId'] ?>">
    <label>Nội dung câu hỏi:</label><br>
    <textarea name="content" rows="4" cols="60" required><?= htmlspecialchars($question['Content']) ?></textarea><br><br>

    <label>Đáp án A:</label><br>
    <input type="text" name="optionA" value="<?= htmlspecialchars($question['OptionA']) ?>" required><br>

    <label>Đáp án B:</label><br>
    <input type="text" name="optionB" value="<?= htmlspecialchars($question['OptionB']) ?>" required><br>

    <label>Đáp án C:</label><br>
    <input type="text" name="optionC" value="<?= htmlspecialchars($question['OptionC']) ?>" required><br>

    <label>Đáp án D:</label><br>
    <input type="text" name="optionD" value="<?= htmlspecialchars($question['OptionD']) ?>" required><br><br>

    <label>Đáp án đúng:</label><br>
    <select name="correctAnswer" required>
        <?php foreach (['A', 'B', 'C', 'D'] as $option): ?>
            <option value="<?= $option ?>" <?= $question['CorrectAnswer'] === $option ? 'selected' : '' ?>>
                <?= $option ?>
            </option>
        <?php endforeach; ?>
    </select><br><br>

    <label>Môn học (SubjectId):</label><br>
    <input type="number" name="subjectId" value="<?= $question['SubjectId'] ?>" required><br>

    <label>Khối lớp:</label><br>
    <input type="number" name="gradeLevel" value="<?= $question['GradeLevel'] ?>" required><br>

    <label>Độ khó:</label><br>
    <select name="difficultyLevel" required>
        <?php foreach (['Dễ', 'TB', 'Khó'] as $level): ?>
            <option value="<?= $level ?>" <?= $question['DifficultyLevel'] === $level ? 'selected' : '' ?>>
                <?= $level ?>
            </option>
        <?php endforeach; ?>
    </select><br><br>

    <input type="submit" value="Cập nhật câu hỏi">
</form>

<br>
<a href="/Question/index">← Quay lại danh sách câu hỏi</a>
