<?php
// 不适用缓存
ini_set('soap.wsdl_cache_enabled',0);
ini_set('soap.wsdl_cache_ttl',0);

$soap = new SoapClient('http://localhost/interface1/soap.wsdl');

echo ("SOAP服务器提供的开放函数:");
echo ('<pre>');
var_dump ( $soap->__getFunctions () );//获取服务器上提供的方法
echo ('</pre>');
echo ("SOAP服务器提供的Type:");
echo ('<pre>');
var_dump ( $soap->__getTypes () );//获取服务器上数据类型
echo ('</pre>');

echo '<pre>';
var_dump($soap);
echo '</pre>';
echo $soap->Add(1,2);
?>
