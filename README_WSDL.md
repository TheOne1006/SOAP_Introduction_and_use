## WSDL README

参考: <http://www.w3school.com.cn/wsdl/>

> 什么是 WSDL

- WSDL 指网络服务描述语言
- WSDL 使用 XML 编写
- WSDL 是一种 XML 文档
- WSDL 用于描述网络服务
- WSDL 也可用于定位网络服务
- WSDL 还不是 W3C 标准


### WSDL 文档

wsdl 文档仅仅是一个简单的 xml 文档
它包含一系列描述某个 web service 定义

> 文档结构
wsdl 文档利用这些主要元素用来描述 某个 web service:

- `<portType>` : WSDL 端口 web service 执行的操作
- `<message>` : WSDL 消息 web service 使用的消息
- `<types>` : WSDL types web service 使用数据类型
- `<binding>` : WSDL Bindings web service 使用的通信协议

>> WSDL 端口

`<portType>`元素是最重要的 WSDL 元素.  
它可描述一个 web service, 可被执行的操作, 以及相关信息  
可以把 `<portType>` 比作传统变成中的一个函数库

>> WSDL 消息
`<message>` 元素定义一个操作的数据元素.  
每个消息均由一个或者多个部件组成.  
可以把 `<message>` 理解为变成语言中调用的参数

>> WSDL types

`<types>` 元素定义 web service 使用的数据类型.
为了最大程度的平台中立性, WSDL 使用 XML Schema 语法来定义数据类型  


>> WSDL Bindings

`<binding>` 元素为每个端口定义消息格式和协议细节.

实例详解:

```xml
<message name="getTermRequest">
   <part name="term" type="xs:string"/>
</message>

<message name="getTermResponse">
   <part name="value" type="xs:string"/>
</message>

<portType name="glossaryTerms">
  <operation name="getTerm">
        <input message="getTermRequest"/>
        <output message="getTermResponse"/>
  </operation>
</portType>
```

这个实例中, `<portType>` 把 "glossaryTerms" 定义为某个端口的名称.
操作 "getTerm" 拥有一个名为 "getTermRequest"的 *输入消息*,
以及一个名为 "getTermResponse" 的 *输出消息*.

`<message>` 元素可定义每个消息的部件,以及相关联的数据类型.

对比传统的编程, glossaryTerms 是一个函数库. 而 "getTerm" 是带有输入参数 
"getTermRequest" 和 返回参数 "getTermResponse" 的一个参数

```php
// 伪代码
getTermResponse = glossaryTerms->getTerm(getTermRequest);
```


##### WSDL 端口

`<portType>` 是最重要的 WSDL 元素  
它可描述一个 web service, 可被执行的操作, 以及相关信息  

端口定义了 指向某个 web service 的连接点.

> 操作类型

请求-响应式最普通的操作类型, 不过 WSDL 定义了四种类型:

1. One-way: 此操作可接受消息, 但是不会返回相应.
2. Request-response: 此操作可接受一个请求并返回一个响应.
3. Solicit-response: 此操作可发送一个请求, 并等待一个响应
4. Notification: 此操作可发送一条消息, 但不会等待响应.

##### WSDL 绑定

`<binding>` 绑定可为 web service 定义消息格式和协议细节

> 绑定到 SOAP

案例:  

```xml
<message name="getTermRequest">
   <part name="term" type="xs:string" />
</message>

<message name="getTermResponse">
   <part name="value" type="xs:string" />
</message>

<portType name="glossaryTerms">
  <operation name="getTerm">
      <input message="getTermRequest" />
      <output message="getTermResponse" />
  </operation>
</portType>

<binding type="glossaryTerms" name="b1">
  <soap:binding style="document"
    transport="http://schemas.xmlsoap.org/soap/http" />
  <operation>
    <soap:operation
     soapAction="http://example.com/getTerm" />
    <input>
      <soap:body use="literal" />
    </input>
    <output>
      <soap:body use="literal" />
    </output>
  </operation>
</binding>
```

1. binding 元素有两个属性 - name 属性和 type 属性
  - name 定义 binding 名称, 
  - type 属性指向用于 binding 端口, 在这个例子中是 "glossaryTerms" 端口
2. soap:binding 有两个属性 - style 属性 和 transport 属性
  - style 可取值 ['rpc', 'document']
  - transport 属性定义了要使用的 SOAP 协议, 这里使用 HTTP
3. operation 元素定义每个端口的操作符.
  - 对于每个操作，相应的 SOAP 行为都需要被定义。同时您必须如何对输入和输出进行编码。在这个例子中我们使用了 "literal"。

##### WSDL 和 UDDI

UDDI 是一种目录服务，企业可以使用它对 Web services 进行注册和搜索。


### XML Schema 和 WSDL 的差别.

XSD 定义了一个模式, 它如何定义 XML 文档的结构.
你可以用他来检测给定的 XML 文档是否有效.

WSDL 温江具有关联的 XSD, 显示放入 WSDL 文档内容
