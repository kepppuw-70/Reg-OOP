<?php
namespace Application\Models;

class DelString {
  
  private $data_path;
  private $dell_arr = [];

  public function __construct($data_path)
    {
        $this->data_path = $data_path;
    }

  public function getJsonToArray()
  {
    if (file_exists($this->data_path)){
      $str = file_get_contents($this->data_path);
      $this->json = json_decode($str, true);
    }
  } 

  public function deleteString()
  { 
    if (!empty($_POST['string_del'])) {
      $num_dell_string = $_POST['string_del'];
      $i = 0;
      foreach ($this->json as $key => $value) { 
        if ($i + 1 != $num_dell_string) {
          $dell_arr[$i] = $value;
        }
        $i++;  
      }
      $json = json_encode($dell_arr, JSON_UNESCAPED_UNICODE);
      file_put_contents($this->data_path, $json);
    }
  }


}

        