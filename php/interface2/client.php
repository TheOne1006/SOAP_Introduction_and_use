<?php
// 不适用缓存
ini_set('soap.wsdl_cache_enabled',0);
ini_set('soap.wsdl_cache_ttl',0);

try{
  // 这个 uri 资源必须与 服务端 相同
  $soap = new SoapClient(null,array(
      "location" => "http://localhost/interface2/service.php",
      "uri"      => "abcd",  //资源描述符服务器和客户端必须对应
      "style"    => SOAP_RPC,
      "use"      => SOAP_ENCODED
         ));

  echo $soap->Add(1,2);
}catch(Exction $e){
  echo print_r($e->getMessage(),true);
}
?>
