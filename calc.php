
<?php
class calc extends init{

  public function sum(){
  return $this->num1 + $this->num2 + $this->num3;
  }
  public function avg(){
    return $this->sum()/3;
  }
  public function mult(){
    return $this->num1 * $this->num2 * $this->num3;
  }
}
?>
