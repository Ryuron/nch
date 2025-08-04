<?php
class Question {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function create($data) {
        $stmt = $this->db->prepare("INSERT INTO Questions 
            (Content, OptionA, OptionB, OptionC, OptionD, CorrectAnswer, SubjectId, GradeLevel, DifficultyLevel) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        return $stmt->execute([
            $data['content'], $data['optionA'], $data['optionB'], $data['optionC'], $data['optionD'],
            $data['correctAnswer'], $data['subjectId'], $data['gradeLevel'], $data['difficultyLevel']
        ]);
    }

    public function getAll() {
        return $this->db->query("SELECT * FROM Questions ORDER BY CreatedAt DESC")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM Questions WHERE QuestionId = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $data) {
        $stmt = $this->db->prepare("UPDATE Questions SET 
            Content=?, OptionA=?, OptionB=?, OptionC=?, OptionD=?, CorrectAnswer=?, SubjectId=?, GradeLevel=?, DifficultyLevel=?
            WHERE QuestionId=?");
        return $stmt->execute([
            $data['content'], $data['optionA'], $data['optionB'], $data['optionC'], $data['optionD'],
            $data['correctAnswer'], $data['subjectId'], $data['gradeLevel'], $data['difficultyLevel'], $id
        ]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM Questions WHERE QuestionId = ?");
        return $stmt->execute([$id]);
    }
}
