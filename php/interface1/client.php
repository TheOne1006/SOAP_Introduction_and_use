<?php
// 不适用缓存
ini_set('soap.wsdl_cache_enabled',0);
ini_set('soap.wsdl_cache_ttl',0);

$soap = new SoapClient('http://localhost/interface1/soap.wsdl');
echo $soap->Add(1,2);
?>
