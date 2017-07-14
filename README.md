## SOAP 简介 以及 使用(node/php)

##### 1. 什么是 SOAP
- 即 Simple Object AccessProtocol 也就是简单对象访问协议,
- 其指导理念是 "唯一一个没有发明任何新技术的技术"  
- 是一种用于访问 Web 服务的协议
- SOAP 基于 XML 和 HTTP(XML描述, http 传播)

##### 2. 理解webservice SOAP WSDL

> WebServices 提供一个建立分布式应用的平台, 能够利用这一平台实现分布式计算,
WebServices的思想是：使得应用程序也具有 Web 分布式编程模型的松散耦合性。

WebServices的特点:  
1. WebServices 是自包含的 - 客户端不需要附加任何软件,只要客户端支持 HTTP 和 XML 即可.
2. WebServices 是自描述的 - 客户端和服务器都不需要知道请求和响应格式和内容外的任何事
3. WebServices 是跨平台和跨语言的 - 服务器和客户端可以使用不同语言
4. WebServices 是基于开放和标准的 - XML 和 HTTP 是基础技术
5. WebServices 是动态的
6. WebServices 是可以组合的 - 之间可以相互调用
7. WebServices 是松散耦合的

> WSDL

即 Web Services Description Language也就是 Web 服务描述语言.

是基于 XML 的用于描述 Web 服务以及如何访问 Web 服务的语言.
服务提供者通过服务描述将所有用于访问 Web 服务的规范传递给服务请求者.

有助于实现服务体系结构的松散耦合.

可以让请求者和使用者都不必了解对方的底层平台.

WSDL 描述了 Web 服务的三个基本属性:
1. 服务所提供的操作
2. 如何访问服务
3. 服务位于何处(通过 URL确定)

更多 <http://www.w3school.com.cn/wsdl/>

> UDDI

即 Universal Description，Discovery and Integration(通用的描述, 发现以及整合).

用来描述了特定 Web 服务的一些相关信息.让我们发现所需要的 Web 服务.

UUDI 是一个跨产业,跨平台的开放性架构,可以帮助 Web 服务提供商在互联网上发布 Web 服务的信息.

UDDI 通过SOAP 进行通讯

##### SOAP IN PHP


##### SOAP IN Node
