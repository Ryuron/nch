<h2>Nhập câu hỏi từ file Excel</h2>

<form action="/Question/import" method="post" enctype="multipart/form-data">
    <label>Chọn file Excel (.xlsx hoặc .csv):</label><br>
    <input type="file" name="questionFile" accept=".xlsx,.csv" required><br><br>

    <input type="submit" value="Tải lên & Nhập câu hỏi">
</form>

<br>
<a href="/Question/index">← Quay lại danh sách câu hỏi</a>
