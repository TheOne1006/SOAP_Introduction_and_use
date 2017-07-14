<?php
class service
{
  public function HelloWorld()
   {
      return  "Hello";
   }
  public  function Add($a,$b)
   {
      return $a+$b;
   }
}
$server=new SoapServer('soap.wsdl',array('soap_version' => SOAP_1_2));
$server->setClass("service");
$server->handle();
?>
