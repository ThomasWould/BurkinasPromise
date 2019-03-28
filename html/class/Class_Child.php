<?php
/**
 * Created by PhpStorm.
 * User: bb135
 * Date: 2/20/2018
 * Time: 12:31 AM
 */

class Child {
    protected $id;
    protected $first_name;
    protected $last_name;
    protected $birthday;
    protected $french_class;
    protected $us_class;
    protected $school_name;
    protected $school_village;
    protected $mother_name;
    protected $father_name;
    protected $number_of_brothers;
    protected $number_of_sisters;
    protected $home;
    protected $status;
    protected $picture;
    protected $testimony = array();
    protected $notes = array();

    // Create an instance of an Child with all necessary fields relating to an Child
    public function __construct($id, $child) {
        $this -> id = $id;
        $this -> first_name = $child['first_name'];
        $this -> last_name = $child['last_name'];
        $this -> birthday = $child['birthday'];
        $this -> french_class = $child['current_class'];
        $this -> us_class = $child['us_class'];
        $this -> school_name = $child['school_name'];
        $this -> school_village = $child['birthplace'];
        $this -> mother_name = $child['mothers_name'];
        $this -> father_name = $child['fathers_name'];
        $this -> number_of_brothers = $child['num_brothers'];
        $this -> number_of_sisters = $child['num_sisters'];
        $this -> home = $child['birthplace'];
        $this -> status = $child['sponsored_status'];
//        $this -> picture = $child['picture'];
//        $this -> testimony = $child['testimony'];
//        $this -> notes = $child['notes'];
    }

    // Change the value of one of a Child's fields with this magic set method
    public function __set($name, $value) {
        if (property_exists($this, $name)){
            $this -> $name = $value;
        }
    }

    // Retrieve some piece of information about the Child with this magic get method
    public function __get($name) {
        if (property_exists($this, $name)) {
            return $this -> $name;
        }
    }
}

Class ChildFactory {
    // This function returns an array of all children as objects in an array.
    public static function getAll() {
        $query = "SELECT * 
                    FROM child_data";
        $statement = $pdo -> prepare($query);
        $statement -> execute();

        while ($row = $statement -> fetch(PDO::FETCH_ASSOC)) {
            $children[$row['child_data_id']] = array('first_name' => $row['first_name'],
                'last_name' => $row['last_name'], 'sponsored_status' => $row['status'],
                'fathers_name' => $row['fathers_first_name'], 'mothers_name' => $row['mothers_first_name'],
                'num_sisters' => $row['number_of_sisters'], 'num_brothers' => $row['number_of_brothers'],
                'birthplace' => $row['place_of_origin'], 'current_class' => $row['current_class'],
                'birthdate' => $row['date_of_birth']);
        }

        $i = 0;
        foreach ($children as $key => $child) {
            $child_objects[$i] = new child($key, $child);
            $i++;
        }

        return $child_objects;
    }

    // This function checks to see if the child that is being added already exists by checking if any children with the
    //  same first and last name and date of birth exists and if so, they are not added. If none exists, then the new child
    //  is added to the database.
    public static function addChild($fname, $lname, $fatherFName, $motherFName, $numSis, $numBroth, $placeOfOrigin, $dob, $currentClass, $usClass, $schoolName, $schoolVillage, $status) {
        global $pdo;

        $query = "SELECT * FROM Child WHERE first_name = :first_name AND last_name = :last_name AND date_of_birth = :date_of_birth";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":first_name",$fname);
        $stmt->bindParam(":last_name",$lname);
        $stmt->bindParam(":date_of_birth",$dob);
        $stmt->execute();
        if ($stmt->rowCount() == 0) {
            $query = "INSERT INTO child (first_name, last_name, fathers_first_name, mothers_first_name, number_of_sisters, number_of_brothers, place_of_origin, date_of_birth, current_class, equivalent_us_class, school_name, school_village, status) 
         VALUES (:first_name, :last_name, :fathers_first_name, :mothers_first_name, :number_of_sisters, :number_of_brothers, :place_of_origin, :date_of_birth, :current_class, :equivalent_us_class, :school_name, :school_village, :status)";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(":first_name", $fname);
            $stmt->bindParam(":last_name", $lname);
            $stmt->bindParam(":fathers_first_name", $fatherFName);
            $stmt->bindParam(":mothers_first_name", $motherFName);
            $stmt->bindParam(":number_of_sisters", $numSis);
            $stmt->bindParam(":number_of_brothers", $numBroth);
            $stmt->bindParam(":place_of_origin", $placeOfOrigin);
            $stmt->bindParam(":date_of_birth", $dob);
            $stmt->bindParam(":current_class", $currentClass);
            $stmt->bindParam(":equivalent_us_class", $usClass);
            $stmt->bindParam(":school_name", $schoolName);
            $stmt->bindParam(":school_village", $schoolVillage);
            $stmt->bindParam(":status", $status);
            $stmt->execute();

            return true;
        } else {
            return false;
        }
    }

    // This function returns all of the most recent entries for the children in the database that have been approved
    //   by an administrative user as an associative array. This is the information that should be listed for current
    //   children anywhere on the site.
    public static function getCurrentInfo() {
        global $pdo;

        $query = "SELECT t1.*
          FROM child t1
          WHERE t1.record_date = (SELECT MAX(t2.record_date)
                                                  FROM (SELECT * FROM child t3 WHERE status = 1) t2
                                                  WHERE t1.status = 1 AND t2.child_id = t1.child_id)";
        $statement = $pdo -> prepare($query);
        $statement -> execute();

        while ($row = $statement -> fetch(PDO::FETCH_ASSOC)) {
            $children[] = $row;
        }

        return $children;
    }

    //This function is to update a child entry to be accepted
    public static function setToAccepted($id, $date) {
        global $pdo;

        $sql = "UPDATE child
                SET status = 1
                WHERE child_id = :id AND record_date = :date";
        $stmt = $pdo -> prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':date', $date);
        $stmt->execute();

        return true;
    }

    //This function is what happens when a child's updated information or addition is rejected by an administrative
    //  user. Th status of the entry is changed to 2, indicating it needs accedes action, and a message is entered into
    //  the database regarding why it was rejected.
    public static function rejectedInformation($id, $date, $message) {
        global $pdo;

        $sql = "UPDATE child
                SET status = 2
                WHERE child_id = :id AND record_date = :date";
        $stmt = $pdo -> prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':date', $date);
        $stmt->execute();

        $query = "INSERT INTO message (message, child_id, child_record_date, request_type)
                  VALUES (:msg, :id, :date, 'Accedes')";
        $statement = $pdo -> prepare($query);
        $statement -> bindParam(':msg',$message);
        $statement -> bindParam(':id',$id);
        $statement -> bindParam(':date',$date);
        $statement -> execute();

        return false;
    }
}

