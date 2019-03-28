<?php
/**
 * Created by PhpStorm.
 * User: bb135
 * Date: 3/6/2018
 * Time: 2:59 PM
 */

class Accedes extends User {
    private $first_name;
    private $last_name;
    private $address;
    private $city;
    private $zip;
    private $phone;

    // Create an instance of an Accedes User with all necessary fields relating to an Accedes user
    public function __construct($id, $dbData) {
        $this -> user_id = $id;
        $this -> first_name = $dbData['first_name'];
        $this -> last_name = $dbData['last_name'];
        $this -> address = $dbData['address'];
        $this -> city = $dbData['city'];
        $this -> zip = $dbData['zip_code'];
        $this -> phone = $dbData['phone'];
        $this -> create_date = $dbData['create_date'];
        $this -> last_update = $dbData['last_update'];
        $this -> account_type = $dbData['account_type'];
    }

    // Change the value of one of an Accedes users fields with this magic set method
    public function __set($name, $value) {
        if (property_exists($this, $name)){
            $this -> $name = $value;
        }
    }

    // Retrieve some piece of information about the Accedes user with this magic get method
    public function __get($name) {
        if (property_exists($this, $name)) {
            return $this -> $name;
        }
    }
}


class AccedesFactory {
    // This function returns all accedes users as accedes objects in an array.
    public static function getAll() {
        $query = "SELECT *
                    FROM user_account
                    WHERE type = 'agent'";
        $statement = $pdo -> prepare($query);
        $statement -> execute();

        while ($row = $statement -> fetch(PDO::FETCH_ASSOC)) {
            $agents[$row['user_id']] = array('first_name' => $row['first_name'],
                'last_name' => $row['last_name'], 'address' => $row['user_address'],
                'city_id' => $row['city_id'], 'postal_code' => $row['postal_code'],
                'phone' => $row['phone'], 'email' => $row['email'], 'create_date' => $row['create_date'],
                'last_update' => $row['last_update'], 'type' => $row['type']);
        }

        $i = 0;
        foreach ($agents as $key => $agent) {
            $agent_objects[$i] = new Accedes($key, $agent);
            $i++;
        }

        return $agent_objects;
    }

    // This function sends a new message to the administrators.
    public static function sendMessage($message) {
        global $pdo;
        $user = unserialize($_SESSION['user']);

        $insert = "INSERT INTO message (message, request_type, request_id)
                   VALUES (:msg, 'Accedes', :id)";
        $stmt = $pdo -> prepare($insert);
        $stmt -> bindParam(':msg', $message);
        $stmt -> bindParam(':id', $user->user_id);
        $stmt -> execute();

        return true;
    }
}