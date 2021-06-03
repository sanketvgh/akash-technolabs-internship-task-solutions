<?php
  /**
   * User Model
   */
  class User{
    private $id;
    private $firstname;
    private $lastname;
    private $email;
    private $phone;
    private $gender;
    private $location;
    private $role;

    function __construct($id, $firstname, $lastname, $email, $phone, $gender, $location, $role){
      $this->id = $id;
      $this->firstname = $firstname;
      $this->lastname = $lastname;
      $this->email = $email;
      $this->phone = $phone;
      $this->gender = $gender;
      $this->location = $location;
      $this->role = $role;
    }

    function set_id($id){
      $this->id = $id;
    }
    function get_id(){
      return $this->id;
    }

    function set_firstname($firstname){
      $this->firstname = $firstname;
    }
    function get_firstname(){
      return $this->firstname;
    }

    function set_lastname($lastname){
      $this->lastname = $lastname;
    }
    function get_lastname(){
      return $this->lastname;
    }

    function set_email($email){
      $this->email = $email;
    }
    function get_email(){
      return $this->email;
    }

    function set_phone($phone){
      $this->phone = $phone;
    }
    function get_phone(){
      return $this->phone;
    }

    function set_gender($gender){
      $this->gender = $gender;
    }
    function get_gender(){
      return $this->gender;
    }

    function set_location($location){
      $this->location = $location;
    }
    function get_location(){
      return $this->location;
    }

    function set_role($role){
      $this->role = $role;
    }
    function get_role(){
      return $this->role;
    }

  }

 ?>
