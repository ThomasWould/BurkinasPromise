<?php

class User {
  protected $user_id;
  protected $email;
  protected $create_date;
  protected $last_update;
  protected $account_type;

  public function __construct($id = -1, $dbData = "") {
      $this -> user_id = $id;
      $this -> email = $dbData['email'];
      $this -> create_date = $dbData['create_date'];
      $this -> last_update = $dbData['last_update'];
      $this -> account_type = $dbData['type'];
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

  public function isAdmin() {
      if ($this -> account_type == "owner") {
          return true;
      }else {
          return false;
      }
  }

  public function isAccedes() {
      if ($this -> account_type == "agent") {
          return true;
      }else {
          return false;
      }
  }

  public function isSponsor() {
      if ($this -> account_type == "sponsor") {
          return true;
      }else {
          return false;
      }
  }
}

class UserFactory {
    // This function checks to see if the information entered matches any users
    // in the database and if so, logs that person in as whichever type of user
    // they are.
  public static function login($email, $pw) {
    global $pdo;
    $sql = "SELECT * FROM user_account 
              WHERE email = :e";
    $stmt = $pdo -> prepare($sql);
    $stmt -> bindparam(":e",$email);
    if($stmt -> execute() === FALSE) {
      throw new Exception("Database Error", 0312);
      error_log(__FILE__ . "(". __LINE__ . ")" . $sql . PHP_EOL . "email=$email");
    }
    if($stmt -> rowCount() == 0) {
        throw new Exception("Email not found", 0307);
    }

    $row = $stmt -> fetch(PDO::FETCH_ASSOC);
    $password = hash('sha512', $pw);

    if ($password != $row['password']) {
        throw new Exception('Invalid password');
    }

    if($row['account_type']=='owner') {
        $user = new Admin($row['user_id'], $row);
    }elseif ($row['account_type'] == 'agent') {
        $user = new Accedes($row['user_id'], $row);
        // instantiate subtype passing it the id and row containing the rest of the data
    }elseif ($row['account_type'] == 'sponsor') {
        $user = new Sponsor($row['user_id'], $row);
    }else {
        throw new Exception("User Not Found");
    }

    return $user;
  }
}


