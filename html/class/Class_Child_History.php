<?php
/**
 * Created by PhpStorm.
 * User: bb135
 * Date: 3/6/2018
 * Time: 12:20 AM
 */
class Child_History {
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

    public function __construct($child) {
        $this -> first_name = $child['first_name'];
        $this -> last_name = $child['last_name'];
        $this -> birthday = $child['birthday'];
        $this -> french_class = $child['french_class'];
        $this -> us_class = $child['us_class'];
        $this -> school_name = $child['school_name'];
        $this -> school_village = $child['school_village'];
        $this -> mother_name = $child['mother_name'];
        $this -> father_name = $child['father_name'];
        $this -> number_of_brothers = $child['number_of_brothers'];
        $this -> number_of_sisters = $child['number_of_sisters'];
        $this -> home = $child['home'];
        $this -> status = $child['status'];
        $this -> picture = $child['picture'];

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