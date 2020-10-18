<?php
session_start();
//checking direct access from users
if(!defined('AccessAllowance')){
  exit('Something went wrong! Life sucks, hah!');
}
//database connection information --> move to config file outside of code
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
      die("Connection failed: can not connect to database.");
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
    if(null != $username && null != $password){
      $length = 0;
      try{
        $length = strlen($username);
      }catch(Exception $e){
        $length = 0;
      }
      if(0 < $length){
        try{
          $length = strlen($password);
        }catch(Exception $e){
          $length = 0;
        }
        if(0 < $length){
          if(null != $this->mysqli){
            $st = $this->mysqli->prepare('select * from system_administration where username = ? and password = ?');
            if(false != $st){
              $st->bind_param('ss', $username, $password);
              if(false != $st){
                $st->execute();
                if(false != $st){
                  $result = $st->get_result();
                  $st->close();
                  if(1 == $result->num_rows){
                    $row = $result->fetch_assoc();
                    $_SESSION['USER'] = $row['username'];
                    $_SESSION['PERMISSION'] = $row['permission'];
                    return true;
                  }
                }
              }
            }
          }
        }
      }
    }
    return false;
  }

  /**/
  public function searchProductById($id){
    if(null != $this->mysqli){
      $st = $this->mysqli->prepare('select * from product where product_id = ?');
      if(false != $st){
        $st->bind_param('s', $id);
        if(false != $st){
          $st->execute();
          if(false != $st){
            $result = $st->get_result();
            $result_row = $result->num_rows;
            $st->close();
            if(0 != $result_row){
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
      $st = $this->mysqli->prepare('insert into product(product_id, description) values(?, ?)');
      if(false != $st){
        $st->bind_param('ss', $id, $description);
        if(false != $st){
          $st->execute();
          $st->close();
          if(false != $st){
            return true;
          }
        }
      }
    }
    return false;
  }

  /**/
  function insertArrUnitSale($arr){
    if(null != $this->mysqli && null != $arr && is_array($arr) && 0 < count($arr)){
      $st = $this->mysqli->prepare('insert ignore into sale_unit(product_id, record_time, value) values(?, ?, ?)');
      if(false != $st){
        $st->bind_param('sss', $id, $record, $value);
        if(false != $st){
          foreach ($arr as $key) {
            $id = $key->getProductId();
            $record = $key->getRecordTime();
            $value = $key->getValue();
            $st->execute();
          }
          return true;
        }
      }
    }
    return false;
  }

  /**/
  function insertArrCostSale($arr){
    if(null != $this->mysqli && null != $arr && is_array($arr) && 0 < count($arr)){
      $st = $this->mysqli->prepare('insert ignore into sale_cost(product_id, record_time, value) values(?, ?, ?)');
      if(false != $st){
        $st->bind_param('sss', $id, $record, $value);
        if(false != $st){
          foreach ($arr as $key) {
            $id = $key->getProductId();
            $record = $key->getRecordTime();
            $value = $key->getValue();
            $st->execute();
          }
          return true;
        }
      }
    }
    return false;
  }

  /**/
  function insertArrSale($arr){
    if(null != $this->mysqli && null != $arr && is_array($arr) && 0 < count($arr)){
      $st = $this->mysqli->prepare('insert ignore into sale(product_id, record_time, value) values(?, ?, ?)');
      if(false != $st){
        $st->bind_param('sss', $id, $record, $value);
        if(false != $st){
          foreach ($arr as $key) {
            $id = $key->getProductId();
            $record = $key->getRecordTime();
            $value = $key->getValue();
            $st->execute();
          }
          return true;
        }
      }
    }
    return false;
  }

  /**/
  function insertProfit(){
    if(null != $this->mysqli){
      $st = $this->mysqli->prepare('insert ignore into profit(product_id, record_time, value) select s.product_id, s.record_time, (s.value - sc.value) from sale s, sale_cost sc where s.product_id = sc.product_id && s.record_time = sc.record_time && s.value > 0 && sc.value >= 0');
      if(false != $st){
        $st->execute();
        if(false != $st){
          return true;
        }else{
          die('insertProfit - databaseConnection - executing errror!');
        }
      }else{
        die('insertProfit - databaseConnection - can not prepared the statement!');
      }
    }else{
      die('insertProfit - databaseConnection - database connection is null!');
    }
    return false;
  }

  /**/
  function insertUnitProfit(){
    if(null != $this->mysqli){
      $st = $this->mysqli->prepare('insert ignore into unit_profit(product_id, record_time, value) select p.product_id, p.record_time, (p.value / su.value) from profit p, sale_unit su where p.product_id = su.product_id && p.record_time = su.record_time && su.value > 0');
      if(false != $st){
        $st->execute();
        if(false != $st){
          return true;
        }else{

        }
      }else{

      }
    }else{

    }
    return false;
  }

  /**/
  function getProfitData(){
    if(null != $this->mysqli){
      $st = $this->mysqli->prepare('select * from profit order by record_time desc');
      if(false != $st){
        $st->execute();
        if(false != $st){
          $result = $st->get_result();
          $result_row = $result->num_rows;
          $st->close();
          if(0 < $result_row){
            $arr = array();
            $index = 0;
            while($row = $result->fetch_assoc()){
              $id = $row['product_id'];
              $record = $row['record_time'];
              $value = $row['value'];
              $des = $row['description'];
              $obj = new profit($id, $record, $value);
              $obj->setDescription($des);
              $arr[$index++] = $obj;
            }
            if(0 < count($arr)){
              return $arr;
            }else{

            }
          }else{

          }
        }else{

        }
      }else{

      }
    }else{

    }
    return false;
  }

  /**/
  function getUnitProfitData(){
    if(null != $this->mysqli){
      $st = $this->mysqli->prepare('select * from unit_profit order by record_time desc');
      if(false != $st){
        $st->execute();
        if(false != $st){
          $result = $st->get_result();
          $result_row = $result->num_rows;
          $st->close();
          if(0 < $result_row){
            $arr = array();
            $index = 0;
            while($row = $result->fetch_assoc()){
              $id = $row['product_id'];
              $record = $row['record_time'];
              $value = $row['value'];
              $des = $row['description'];
              $obj = new unit_profit($id, $record, $value);
              $obj->setDescription($des);
              $arr[$index++] = $obj;
            }
            return $arr;
          }else{

          }
        }else{

        }
      }else{

      }
    }else{

    }
    return false;
  }

  /**/

}
