<?php
namespace Application\Models;

class Exitt {

     public function __construct()
     {
         $_SESSION['password'] = 'lock';
         //header('Location: /');
     }
  
}

         