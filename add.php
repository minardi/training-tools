<?
  if($_REQUEST["operand1"] && $_REQUEST["operand2"])
  {       
    echo $_REQUEST["operand1"] + $_REQUEST["operand2"]; 
  }
  else
  {
    echo "Bad operands format!";	
  }
?>