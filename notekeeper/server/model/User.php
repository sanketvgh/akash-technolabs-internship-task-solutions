<?php
  class User{
    private $id;
    private $name;
    private $email;
    private $password;

    function __construct($id, $email, $name, $password){
      $this->id = $id;
      $this->email = $email;
      $this->name = $name;
      $this->password = $password;
    }

    function set_id($id){
      $this->id = $id;
    }

    function get_id(){
      return $this->id;
    }

    function set_name($name){
      $this->name = $name;
    }

    function get_name(){
      return $this->name;
    }

    function set_email($email){
      $this->email = $email;
    }

    function get_email(){
      return $this->email;
    }

    function set_password($password){
      $this->password = $password;
    }

    function get_password(){
      return $this->password;
    }
  }
?>
