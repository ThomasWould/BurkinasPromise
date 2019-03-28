<?php

// by em1404

class Question {
  protected $question_id;
  protected $field_name;
  protected $question;
  protected $answer;
  protected $child_data_id;

  public function __construct($field_name, $dbData = "") {
      $this -> question_id = $dbData['id'];
      $this -> field_name = $field_name;
      $this -> question = $dbData['question'];
      $this -> answer = $dbData['answer'];
      $this -> child_data_id = $dbData['child_data_id'];
  }

  public function __set($name, $value) {
      if (property_exists($this, $name)){
          $this -> $name = $value;
      }
  }

  public function __get($name) {
      if (property_exists($this, $name)) {
          return $this -> $name;
      }
  }

}


class QuestionFactory {
  public static function qestion($field_name) {

      $field_name = 'current_class';
      global $pdo;
      $sql = "SELECT * FROM question
                WHERE field_name = ?";

      $stmt = $pdo -> prepare($sql);

      $stmt->execute([$field_name]);
      $questions = $stmt->fetchAll();


      if($stmt -> rowCount() == 0) {
          echo "No question found";
      }


  }

  public static function addQuestion($child_id, $field_name, $question, $answer=""){

    $sql = 'INSERT INTO question(field_name, question, answer, child_id)
    VALUES (:field_name, :question, :answer, :child_id)';

    $stmt = $pdo->prepare($sql);
    $stmt->execute(['field_name' => $field_name, 'question' => $question,
    'answer' => $answer, 'child_id' => $child_id]);

  }

  public static function addAnswer($field_name, $question="", $answer, $child_id){

    $sql = 'UPDATE question SET answer = :answer WHERE child_id = :child_id &&
    field_name = :field_name';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['answer' => $answer, 'child_id'=> $child_id, 'field_name' => $field_name]);


  }

  public static function countQuestions(){
  }

  public static function countAnswers(){
  }

}
