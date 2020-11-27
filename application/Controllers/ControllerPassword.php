<?php

namespace Application\Controllers;
use Application\Core\View;
use Application\Models\Passw;
class ControllerPassword
{
    public function passwAction()
    { 
    	$passw = new Passw($_POST['pass']);
      $passw->passWord();
      View::pageCode('../application/Views/passw/passw.php', $arrrez);
    }
}
