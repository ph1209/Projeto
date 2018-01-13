<?php
  /**
   *
   */
   class Mysql_db{

     public $server;
     public $user;
     public $password;
     public $database;
     public $conexao;

     public function __construct(){
         $this->server = "localhost";//SERVIDOR
         $this->user = "root";//USUÁRIO
         $this->password = "bcd127";//SENHA
         $this->database = "db_voxus";//BANCO
         $this->conexao = mysqli_connect($this->server, $this->user, $this->password, $this->database);
     }

     public function conectar(){
       if($this->conexao){
         if(!isset($_SESSION)){
           session_start();
         }
       }else{
         echo("Erro de conexão");
         die();
       }
     }

     public function desconectar(){
       mysql_close();
     }

   }

 ?>
