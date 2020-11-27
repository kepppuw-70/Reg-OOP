<?php
namespace Application\Models;

class Passw {

  public function __construct($passw)
  {
    $this->passw = $passw;
  }

   public function passWord() {
     
          $pass = '8a86f71ecaa6455516a278ee20cca735';
          if ($pass == md5($this->passw)) 
          {
            $_SESSION['password'] = 'ok';
            header('Location: /');
          }
          return $this->passw;
     }
   
}

         