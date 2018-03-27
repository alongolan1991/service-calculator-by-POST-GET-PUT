<?php
include ('init.php');
include ('calc.php');

$cal = new calc();
switch ($cal->func) {
  case 'avg':
  $retVal =  $cal->avg();
  break;
  case 'mult':
  $retVal = $cal->mult();
  break;
  case 'sum':
  $retVal = $cal->sum();
  break;
}

$a = array('retVal'=>$retVal);
header('Content-type:application/json;charset=utf-8');
echo json_encode($a);
?>
