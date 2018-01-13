<?php
  /**
   *
   */
   class Mysql_db{

     public $server;
     public $user;
     public $password;

     public function __construct(){
         $this->server = "localhost";//SERVIDOR
         $this->user = "root";//USUÁRIO
         $this->password = "bcd127";//SENHA
     }

     public function conectar(){
       $conexao = mysqli_connect($this->server, $this->user, $this->password);
       if($conexao){
         mysqli_select_db($conexao, 'db_voxus');//BANCO
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
