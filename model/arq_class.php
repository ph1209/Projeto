<?php
  /**
   *
   */
  class Arquivo{
    public $url;

    public function getUrl($arquivo){
      $uploaddir = 'anexos/';
      $nome_arquivo = $arquivo['name'];
      $uploadfile = $uploaddir . $nome_arquivo;


      if (move_uploaded_file($arquivo['tmp_name'], $uploadfile)) {
          $this->url = $nome_arquivo;
      } else {
          return false;
      }
    }
  }

 ?>
