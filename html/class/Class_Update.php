<?php
/**
 * Created by PhpStorm.
 * User: mattburkhead
 * Date: 4/12/18
 * Time: 2:55 AM
 */

class Update {
    protected $first_name = array();
    protected $last_name = array();
    protected $birthday = array();
    protected $french_class = array();
    protected $us_class = array();
    protected $school_name = array();
    protected $school_village = array();
    protected $mother_name = array();
    protected $father_name = array();
    protected $number_of_brothers = array();
    protected $number_of_sisters = array();
    protected $home = array();
    protected $status = array();
    protected $picture = array();
    protected $sponsorship_status = array();

    public function __construct($child) {
        $this -> first_name = $child['first_name'];
        $this -> last_name = $child['last_name'];
        $this -> birthday = $child['birthday'];
        $this -> french_class = $child['current_class'];
        $this -> us_class = $child['equivalent_us_class'];
        $this -> school_name = $child['school_name'];
        $this -> school_village = $child['school_village'];
        $this -> mother_name = $child['mother_name'];
        $this -> father_name = $child['father_name'];
        $this -> number_of_brothers = $child['number_of_brothers'];
        $this -> number_of_sisters = $child['number_of_sisters'];
        $this -> home = $child['place_of_origin'];
        $this -> status = $child['status'];
        $this -> sponsorship_status = $child['sponsorship_status'];
//        $this -> picture = $child['picture'];

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

class UpdateFactory {

    public static function getAll() {
        global $pdo;
        $query = "SELECT * 
                    FROM child";
        $statement = $pdo -> prepare($query);
        $statement -> execute();

        while ($row = $statement -> fetch(PDO::FETCH_ASSOC)) {
            $children[$row['child_id']] = array('first_name' => $row['first_name'],
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

    public static function updateChild($ID, $first_name, $last_name, $father_first_name, $mother_first_name, $number_of_sisters, $number_of_brothers, $place_of_origin, $date_of_birth, $current_class, $equivalent_us_class, $school_name, $school_village, $status) {
        global $pdo;
        $query = "SELECT * FROM child WHERE child_id = :id";
        $statement = $pdo -> prepare($query);
        $statement ->bindParam(":id",$ID);
        $statement -> execute();
        if ($statement->rowCount() != 0){
            $row = $statement -> fetch(PDO::FETCH_ASSOC);

            $insert = "INSERT INTO child (child_id, first_name, last_name, date_of_birth, place_of_origin, current_class, equivalent_us_class, school_name, school_village, status, sponsorship_status, fathers_first_name, mothers_first_name, number_of_brothers, number_of_sisters, photo_id) 
                      VALUES(:id, :firstn, :lastn, :dob, :place, :class, :usClass, :school, :schoolVillage, :status, :sponsor, :fname, :mname, :numBroth, :numSis, :photo)";
            $statement2 = $pdo->prepare($insert);
            $statement2->bindParam(":id", $ID);
            $statement2->bindParam(":firstn",$first_name);
            $statement2->bindParam(":lastn", $last_name);
            $statement2->bindParam(":dob", $date_of_birth);
            $statement2->bindParam(":place", $place_of_origin);
            $statement2->bindParam(":class", $current_class);
            $statement2->bindParam(":usClass", $equivalent_us_class);
            $statement2->bindParam(":school", $school_name);
            $statement2->bindParam(":schoolVillage", $school_village);
            $statement2->bindParam(":status", $status);
            $statement2->bindParam(":sponsor", $row['sponsorship_status']);
            $statement2->bindParam(":fname", $father_first_name);
            $statement2->bindParam(":mname", $mother_first_name);
            $statement2->bindParam(":numBroth", $number_of_brothers);
            $statement2->bindParam(":numSis",$number_of_sisters);
            $statement2->bindParam(":photo", $row['photo_id']);
            $statement2->execute();

            return true;
        } else {
            return false;
        }
    }
}