<!--Database connection-->
<!--Further improvements:
  1. All information for connecting database will be encrypted and put on outside configuration file.
  2. Configuration file could be saved as binary file for more security.
-->

<?php
  //enable of using session
  session_start();

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

    /*
      Purposes: connect to database through existed information.
      Process: connect to database --> return null to the object if fails.
      Output: pointer to mysqli object or null if fails.
    */
    public function connect(){
      $this->mysqli = new mysqli(SERVER, USERNAME, PASSWORD, DATABASE);
      if ($this->mysqli->connect_error) {
        die("Connection failed: " . $this->mysqli->connect_error);
        $this->mysqli = null;
      }
    }

    /*
      Purposes: close database connection.
      Input: none.
      Process: close database connection directly.
      Output: none.
    */
    public function close(){
      $this->mysqli->close();
    }

    /*
      Purposes: validating user's log in information.
      Input: username and password.
      Process: connect to database --> search for user's info --> return result.
      Output: true --> dashboard page / false --> error page.
    */
    public function userValidation($username, $password){
      if(null != $this->mysqli){
        $st = $this->mysqli->prepare('select * from system_administration where username = ? and password = ?');
        if(false == $st){echo 'PreparedStatement fail!';}
        $st->bind_param('ss', $user, $pass);
        if(false == $st){
          echo 'BindingParam fail!';
        }
        $user = $username;
        $pass = $password;
        $st->execute();
        if(false == $st){echo 'Executing fail!';}
        $result = $st->get_result();
        $st->close();
        $this->mysqli->close();
        if(1 == $result->num_rows){
          //setting session
          $row = $result->fetch_assoc();
          $_SESSION['USER'] = $row['username'];
          $_SESSION['PERMISSION'] = $row['permission'];
          return true;
        }else{
          return false;
        }
      }else{
        return false;
      }
    }

    /**/
    public function searchProductById($id){
      if(null != $this->mysqli){
        $st = $this->mysqli->prepare('select * from products where id = ?');
        if(false != $st){
          $st->bind_param('s', $id);
          if(false != $st){
            $st->execute();
            if(false != $st){
              $result = $st->get_result();
              $result_row = $result->num_rows;
              $st->close();
              $this->mysqli->close();
              if(1 == $result_row){
                return true;
              }
            }
          }
        }
      }
      return false;
    }

    /**/
    public function insertNewProduct($id, $description){
      if(null != $this->mysqli){
        $st = $this->mysqli->prepare('insert into products(id, description) values(?, ?)');
        if(false != $st){
          $st->bind_param('ss', $id, $description);
          if(false != $st){
            $st->execute();
            $st->close();
            $this->mysqli->close();
            if(false != $st){
              return true;
            }
          }
        }
      }
      return false;
    }

    /**/
    /**/

  }
 ?>
