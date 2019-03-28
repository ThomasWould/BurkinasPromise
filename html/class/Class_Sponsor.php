<?php
/**
 * Created by PhpStorm.
 * User: bb135
 * Date: 2/20/2018
 * Time: 12:31 AM
 */

class Sponsor extends User {
    private $children = array();
    private $first_name;
    private $last_name;
    private $address;
    private $city;
    private $zip;
    private $phone;

    // Create an instance of a Sponsor User with all necessary fields relating to a Sponsor user
    public function __construct($id, $dbData) {
        $this -> user_id = $id;
        $this -> email = $dbData['email'];
        $this -> create_date = $dbData['create_date'];
        $this -> last_update = $dbData['last_update'];
        $this -> account_type = $dbData['account_type'];
        $this -> first_name = $dbData['first_name'];
        $this -> last_name = $dbData['last_name'];
        $this -> address = $dbData['address'];
        $this -> city = $dbData['city'];
        $this -> zip = $dbData['zip_code'];
        $this -> phone = $dbData['phone'];
    }

    // Change the value of one of a Sponsor users fields with this magic set method
    public function __set($name, $value) {
        if (property_exists($this, $name)){
            $this -> $name = $value;
        }
    }

    // Retrieve some piece of information about the Sponsor user with this magic get method
    public function __get($name) {
        if (property_exists($this, $name)) {
            return $this -> $name;
        }
    }
}


class SponsorFactory {

    // This function returns all sponsors in an array of sponsor objects.
    public static function getAll() {
        global $pdo;
        $query = "SELECT *
                    FROM user_account
                    WHERE type = 'sponsor'";
        $statement = $pdo -> prepare($query);
        $statement -> execute();

        while ($row = $statement -> fetch(PDO::FETCH_ASSOC)) {
            $admins[$row['user_id']] = array('first_name' => $row['first_name'],
                'last_name' => $row['last_name'], 'address' => $row['user_address'],
                'city_id' => $row['city_id'], 'postal_code' => $row['postal_code'],
                'phone' => $row['phone'], 'email' => $row['email'], 'create_date' => $row['create_date'],
                'last_update' => $row['last_update'], 'type' => $row['type']);
        }

        $i = 0;
        foreach ($sponsors as $key => $sponsor) {
            $sponsor_objects[$i] = new admin($key, $sponsor);
            $i++;
        }

        return $sponsor_objects;
    }

    // This function adds a new sponsor to the database. It checks, based upon email, if a sponsor within the database
    // matches the one that is being entered, if so, the sponsor is not added. If none match the information entered,
    // then the sponsor is added to the database.

    public static function addNew($fname, $lname, $address, $city, $state, $zip, $country, $phone, $email) {
        //Check if this sponsor already exists, if not, insert them into the database.
        global $pdo;
//        include ('../functions/functions.php');

//        $random = randomPassword();
        $random = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(15/strlen($x)) )),1,15);
        $pw = hash('sha512', $random);

        $query = "SELECT * FROM user_account WHERE email = :email";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        if ($stmt->rowCount() == 0) {
            $query = "INSERT INTO user_account (first_name, last_name, address, city, state, zip_code, country, phone, email, create_date, last_update, account_type, password) 
            VALUES (:first_name, :last_name, :address, :city, :state, :zip, :country, :phone, :email, now(), null, 'sponsor', :pw)";
            $stmt = $pdo->prepare($query);
            $stmt->bindParam(":first_name", $fname);
            $stmt->bindParam(":last_name", $lname);
            $stmt->bindParam(":address", $address);
            $stmt->bindParam(":city", $city);
            $stmt->bindParam(":state", $state);
            $stmt->bindParam(":zip", $zip);
            $stmt->bindParam(":country", $country);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":pw", $pw);
            $stmt->execute();

            return true;
        } else {
            return false;
        }
    }
}