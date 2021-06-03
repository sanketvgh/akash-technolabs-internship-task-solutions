<?php
   $root = $_SERVER['DOCUMENT_ROOT'] . '/akash-technolabs-internship-task-solutions/Day-7';

   $path = $root . "/config/db.php";
   require_once $path;

   $path = $root . "/model/user.php";
   require_once $path;
 ?>
<?php

  /**
   * User Data access from database
   *Author: Sanket Vaghela
   */
  class UserDataAccess
  {
    private static $user_data_access;

    public static function get_object(){
      if(!self::$user_data_access){
        self::$user_data_access = new self();
      }
      return self::$user_data_access;
    }

    function __construct(){

    }

    function insert($user){
      $connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD);
      if($connection && mysqli_select_db($connection, DB_NAME)){
        $query = 'insert into ' .
                  TABLE_NAME .
                  '(firstname, lastname, email, phone, gender, location, role, is_trash) values(' .
                  "'{$user->get_firstname()}',".
                  "'{$user->get_lastname()}',".
                  "'{$user->get_email()}',".
                  "'{$user->get_phone()}',".
                  "'{$user->get_gender()}',".
                  "'{$user->get_location()}',".
                  "'{$user->get_role()}',".
                  "0)";
          if(mysqli_query($connection, $query)){
            mysqli_close($connection);
            return true;
          }
      }
      mysqli_close($connection);
      return false;
    }

    function update($user){
      $connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD);
      if($connection && mysqli_select_db($connection, DB_NAME)){
        $query = 'update ' .
                  TABLE_NAME .
                  " set firstname='{$user->get_firstname()}',".
                  "lastname='{$user->get_lastname()}',".
                  "email='{$user->get_email()}',".
                  "phone='{$user->get_phone()}',".
                  "gender='{$user->get_gender()}',".
                  "location='{$user->get_location()}',".
                  "role='{$user->get_role()}'".
                  " where id=".$user->get_id();
          if(mysqli_query($connection, $query)){
            mysqli_close($connection);
            return true;
          }
      }
      mysqli_close($connection);
      return false;
    }

    function delete($id){
      $connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD);
      if($connection && mysqli_select_db($connection, DB_NAME)){
        $query = "delete from " . TABLE_NAME . " where id=".$id;
          if(mysqli_query($connection, $query)){
            mysqli_close($connection);
            return true;
          }
      }
      mysqli_close($connection);
      return false;
    }

    function trashit($id, $set){
      $connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD);
      if($connection && mysqli_select_db($connection, DB_NAME)){
        $query = "update " . TABLE_NAME . " set is_trash=$set where id=" . $id;
          if(mysqli_query($connection, $query)){
            mysqli_close($connection);
            return true;
          }
      }
      mysqli_close($connection);
      return false;
    }

    function get_user($id){
      $connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD);
      if($connection && mysqli_select_db($connection, DB_NAME)){
        $users = false;
        $query = "select * from " . TABLE_NAME . " where id=" . $id;
          if($result = mysqli_query($connection, $query)){

            if($row = mysqli_fetch_assoc($result)) {
              $user = new User(
                $row['id'],
                $row['firstname'],
                $row['lastname'],
                $row['email'],
                $row['phone'],
                $row['gender'],
                $row['location'],
                $row['role']
              );
            }
            mysqli_close($connection);
            return $user;
          }
      }
      mysqli_close($connection);
      return false;
    }


    function get_users($is_trash){
      $connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD);
      if($connection && mysqli_select_db($connection, DB_NAME)){
        $users = [];
        $query = "select * from " . TABLE_NAME . " where is_trash=" . $is_trash;
          if($result = mysqli_query($connection, $query)){

            while ($row = mysqli_fetch_assoc($result)) {
              $users[] = new User(
                $row['id'],
                $row['firstname'],
                $row['lastname'],
                $row['email'],
                $row['phone'],
                $row['gender'],
                $row['location'],
                $row['role']
              );
            }
            mysqli_close($connection);
            return $users;
          }
      }
      mysqli_close($connection);
      return false;
    }

  }
  // $user = new User('Sanket', 'Vaghela', 'test@g.com', '1234567890', 'm', 'Surat', 'ce');
  // $uda = UserDataAccess::get_object();
  // echo $uda->insert($user);
  //   // echo $query;

 ?>
