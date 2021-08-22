<?php
  require_once '../db-config.php';
  require_once '../model/User.php';
  /**
   *
   */
  class LoginController
  {
    private $user_id;
    private $user_name;
    function __construct()
    {

    }

    function get_user_id(){
      return $this->user_id;
    }

    function get_user_name(){
      return $this->user_name;
    }

    function login($user){
            $res = [];
            $mysqli = new mysqli(HOSTNAME, USERNAME, PASSWORD, DB_NAME);
            if($mysqli->connect_errno){
                    $res['status'] = 'error';
                    $res['message'] = 'Unable to connect, please refresh the page or try later..';
                    return $res;
            }

            $email = $mysqli->real_escape_string($user->get_email());
            $password = $mysqli->real_escape_string($user->get_password());
            $user_id = -1;
            $user_name = null;
            $user_password = null;

            $stmt = $mysqli->prepare("select id,name,password from users where email=?");
            if($stmt->bind_param('s', $email) && $stmt->execute()){
                    $stmt->bind_result($user_id, $user_name, $user_password);
                    if(!$stmt->fetch()){
                            $res['status'] = 'fail';
                            $res['data']['email'] = 'Looks like this email is not exists!';
                            $stmt->close();
                            $mysqli->close();
                            return $res;
                      }
            }

            if(password_verify($password, $user_password)){
              $this->user_id = $user_id;
              $this->user_name = $user_name;
              $res['status'] = 'success';
              $res['data'] = 'Successfully created an account!';
            }else{
              $res['status'] = 'fail';
              $res['data']['password'] = 'Sorry, but the password that you entered does not match!';
            }

            $mysqli->close();
            return $res;

    }
  }
 ?>
