<?php

namespace Application\Controllers;
use Application\Core\View;
use Application\Models\Check_in;
class ControllerCheck_in
{
    public function check_inAction()
    {   
      
      $arr = require '../application/Config/NumberCard.php';
      $view = new View();
      $check_in = new Check_in('../data');
      $check_in->metodCheck_in();
      View::pageCode('../application/Views/check_in/check_in.php', $check);
     	
    }

}
