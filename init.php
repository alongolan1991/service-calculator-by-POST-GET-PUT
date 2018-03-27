<?php


abstract class init{
  protected $num1,$num2,$num3,$func;
  public function __construct(){
    $check_method = $_SERVER['REQUEST_METHOD'];
    if($check_method == 'GET'){
      $this->num1 = (int)$_GET['num1'];
      $this->num2 = (int)$_GET['num2'];
      $this->num3 = (int)$_GET['num3'];
      $this->func =$_GET['func'];
    }
    else if ($check_method == 'POST'){
      $this->num1 = (int)$_POST['num1'];
      $this->num2 = (int)$_POST['num2'];
      $this->num3 = (int)$_POST['num3'];
      $this->func =$_POST['func'];
    }
    else if ($check_method == 'PUT'){
      $tempi = file_get_contents("php://input");
      parse_str($tempi,$myarray);
      $this->num1 = (int)$myarray['num1'];
      $this->num2 = (int)$myarray['num2'];
      $this->num3 = (int)$myarray['num3'];
      $this->func =$myarray['func'];
    }
  }
  public function __GET($temp){
    return $this->$temp;
  }
}
?>
