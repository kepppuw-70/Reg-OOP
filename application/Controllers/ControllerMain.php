<?php

namespace Application\Controllers;
use Application\Core\View;
use Application\Models\Main;
use Application\Models\DelString;
class ControllerMain
{
    public function mainAction()
    { 
    	$view = new View();
      $delstring = new DelString('../data/data.json');
      $delstring->getJsonToArray();
      $delstring->deleteString();
      $main = new Main('../data/data.json');
      View::pageCode('../application/Views/main/index.php', $main->metodMain());
    }

}
