<?php
  require_once '../db-config.php';
  require_once '../model/User.php';
  /**
   *
   */
  class SignupController
  {
    private $user_id;
    function __construct()
    {

    }

    function get_user_id(){
      return $this->user_id;
    }

    function signup($user){
            $res = [];
            $canSignup = true;
            $mysqli = new mysqli(HOSTNAME, USERNAME, PASSWORD, DB_NAME);
            if($mysqli->connect_errno){
                    $res['status'] = 'error';
                    $res['message'] = 'Unable to connect, please refresh the page or try later..';
                    return $res;
            }
            $name = $mysqli->real_escape_string($user->get_name());
            $email = $mysqli->real_escape_string($user->get_email());
            $password = $mysqli->real_escape_string($user->get_password());

            $get_id_stmt = $mysqli->prepare("select id from users where email=?");
            if($get_id_stmt->bind_param('s', $email) && $get_id_stmt->execute()){
                    $get_id_stmt->bind_result($id);
                    if($get_id_stmt->fetch()){
                            $res['status'] = 'fail';
                            $res['data']['email'] = 'This email is already exists!';

                            $canSignup = false;

                    }
            }

            if($canSignup){
                    $stmt = $mysqli->prepare("insert into users(name, email, password) values(?, ?, ?)");
                    if($stmt->bind_param('sss', $name, $email, $password) && $stmt->execute()){
                            if($stmt->affected_rows){
                                    $res['status'] = 'success';
                                    $res['data'] = 'Successfully created an account!';
                                    if($get_id_stmt->execute()){
                                      $get_id_stmt->bind_result($id);
                                      $get_id_stmt->fetch();
                                      $this->user_id = $id;
                                  }
                            }
                    }
                    $stmt->close();
                    $get_id_stmt->close();
            }

            $mysqli->close();
            return $res;

    }
  }
 ?>
