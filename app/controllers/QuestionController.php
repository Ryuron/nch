<?php
require_once __DIR__ . '/../models/Question.php';

class QuestionController {
    private $db;
    private $questionModel;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=AdaptiveQuizDB', 'root', '');
        $this->questionModel = new Question($this->db);
    }

    public function index() {
        $questions = $this->questionModel->getAll();
        require 'app/views/questions/index.php';
    }

    public function create() {
        require 'app/views/questions/create.php';
    }

    public function store() {
        $this->questionModel->create($_POST);
        header("Location: /Question/index");
    }

    public function edit($id) {
        $question = $this->questionModel->getById($id);
        require 'app/views/questions/edit.php';
    }

    public function update($id) {
        $this->questionModel->update($id, $_POST);
        header("Location: /Question/index");
    }
    public function delete($id) {
        $this->questionModel->delete($id);
        header("Location: /Question/index");
    }
}
