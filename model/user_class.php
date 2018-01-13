<?php
  /**
   *
   */
  require_once('model/db_class.php');
  class User{

    public $email;
    public $senha;
    public function __construct(){
      $conexao_db = new Mysql_db();
      $conexao_db->conectar();
    }

    public function login(){
      $mysql = new Mysql_db();
      $con = $mysql->conexao;
      $sql = "SELECT * FROM tbl_users WHERE
      email = '".$this->email."' and
      senha = '".$this->senha."'";
      $select = mysqli_query($con, $sql);
      if(mysqli_num_rows($select)>0){
        return true;
      }else {
        return false;
      }
    }
  }
 ?>
