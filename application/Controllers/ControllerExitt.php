<?php

namespace Application\Controllers;
use Application\Core\View;
use Application\Models\Exitt;
class ControllerExitt
{
    public function exittAction()
    { 
      $exitt = new Exitt(); 
      View::pageCode('../application/Views/exitt/exitt.php', $arrrez);
    }

}
