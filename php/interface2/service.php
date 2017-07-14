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
// 这个 uri 资源必须与 客户端相同
$server=new SoapServer(null,array('uri' => "abcd"));
$server->setClass("service");
$server->handle();
?>
