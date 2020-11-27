<?php
namespace Application\Models;

class Main {
   
   private $choice_arr = [];

   public function __construct($data_path)
  { 
    $this->data_path = $data_path;
    $this->getJsonToArray();
    $this->getChoice();
  }

   public function getJsonToArray()
  {
    $str = file_get_contents($this->data_path);
    $this->json = json_decode($str, true);
  }

   public function getChoice()
  {
    $this->choice_arr = $choice_arr;
    if ($_POST) {
        $choice['id'] = $_POST['id'];
        $choice['last_name_ukr'] = $_POST['last_name_ukr'];
        $choice['first_name_ukr'] = $_POST['first_name_ukr'];
        $choice['patronymic_ukr'] = $_POST['patronymic_ukr'];
        $choice['sex'] = $_POST['sex'];
        $choice['birth'] = $_POST['birth'];
        $choice['rank'] = $_POST['rank'];
        $choice['certificait'] = $_POST['certificait'];
        $choice['club'] = $_POST['club'];
        $choice['phone'] = $_POST['phone'];
        $choice['email'] = $_POST['email'];
        $choice['camp'] = $_POST['camp'];
        $i = 0;
        foreach ($choice as $key => $value) {
          if (!empty($value)) {
             $choice_arr[$i] = $value;
             $i++;
          }
        }
        $this->choice_arr = $choice_arr;
        //echo '<br><br><br><br>';
        //var_dump( $this->choice_arr);
    }
  }

  public function metodMain()
  {
   $choice_for_arr = $this->json;
   $num_choice_arr = count($this->choice_arr);
   //var_dump( $this->choice_arr);
   //echo '<br><br><br><br>';
   //echo '$num_choice_arr - ' . $num_choice_arr;
   if ($num_choice_arr > 0) {
    $choice_for_arr = [];
   
    $i = 0;

    foreach ($this->json as  $value_json) { //echo '<br><br><br><br>'; var_dump($value_json);
      
      foreach ($value_json as $value_arr) { 
   
         foreach ($this->choice_arr as $value_choice_arr) {  

            if ($value_arr == $value_choice_arr) {
                $choice_for_arr[$i] = $value_json;
                //echo '<br>qqqqq<br>' . $value_choice_arr . '<br>qqqqq<br>';
            }

        }
     
      }
      $i++;     
    }
    }
        //echo '<br><br><br><br>';
        //var_dump( $choice_for_arr);
    return $choice_for_arr;
    
  }

}

        