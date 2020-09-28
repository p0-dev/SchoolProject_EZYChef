<!--Database connection-->
<!--Further improvements:
  1. All information for connecting database will be encrypted and put on outside configuration file.
  2. Configuration file could be saved as binary file for more security.
-->

<?php
  //checking direct access from users
  if(!defined('AccessAllowance')){
    exit('Something went wrong! Life sucks, hah!');
  }

  //database connection information
  //--> move to config file outside of code
  //loading config file when the website is loaded
  define('SERVER', 'localhost');
  define('USERNAME', 'ezychef');
  define('PASSWORD', '123456');
  define('DATABASE', 'EzyChef');

  class databaseConnection{
    /**/
    public function connect(){
      $this->mysqli = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
      if ($this->mysqli->connect_error) {
        die("Connection failed: " . $this->mysqli->connect_error);
        $this->mysqli = null;
      }
    }
    /**/
    public function close(){
      $this->mysqli->close();
    }
    /**/
    public function userValidation($username, $password){
      if(null != $this->mysqli){
        $st = $this->mysqli->prepare('select * from system_administration where username = ? and password = ?');
        $st->bind_param('ss', $user, $pass);
        $user = $username;
        $pass = $password;
        $st->execute();
        $result = $st->get_result();
        if(1 == $result->num_rows){
          //set session
          return true;
        }else{
          return false;
        }
        $st->close();
        $this->mysqli->close();
      }else{
        return false;
      }
    }
  }
 ?>
