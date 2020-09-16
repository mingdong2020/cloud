ThinkPHP 6.0
===============

> 运行环境要求PHP7.1+。

[官方应用服务市场](https://www.thinkphp.cn/service) | [`ThinkPHP`开发者扶持计划](https://sites.thinkphp.cn/1782366)

ThinkPHPV6.0版本由[亿速云](https://www.yisu.com/)独家赞助发布。

## 主要新特性

* 采用`PHP7`强类型（严格模式）
* 支持更多的`PSR`规范
* 原生多应用支持
* 更强大和易用的查询
* 全新的事件系统
* 模型事件和数据库事件统一纳入事件系统
* 模板引擎分离出核心
* 内部功能中间件化
* SESSION/Cookie机制改进
* 对Swoole以及协程支持改进
* 对IDE更加友好
* 统一和精简大量用法

## 安装

~~~
composer create-project topthink/think tp 6.0.*
~~~

如果需要更新框架使用
~~~
composer update topthink/framework
~~~

## 文档

[完全开发手册](https://www.kancloud.cn/manual/thinkphp6_0/content)

## 参与开发

请参阅 [ThinkPHP 核心框架包](https://github.com/top-think/framework)。

## 版权信息

ThinkPHP遵循Apache2开源协议发布，并提供免费使用。

本项目包含的第三方源码和二进制文件之版权信息另行标注。

版权所有Copyright © 2006-2020 by ThinkPHP (http://thinkphp.cn)

All rights reserved。

ThinkPHP® 商标和著作权所有者为上海顶想信息科技有限公司。

更多细节参阅 [LICENSE.txt](LICENSE.txt)


### 明动云控


### 接口说明
【1】
接口名称: 发送邮件接口
methods: POST
接口地址: api/send (Email/send)
参数:
{
    source: String,  // 来源
    name: String,    // 姓名
    phone: Number,   // 手机号
    company: String, // 公司名称
    word: String     // 描述
}
返回值:
{
    status: Boolean
    message: String
}
【2】
接口名称: 备案接口
methods: POST
接口地址: home/record (Record/index)
参数:
返回值:
{
    status: Boolean
    data: {
        key: 域名信息,
        value: 备案信息
    }
}
【3】
接口名称: 小程序首页tabber接口(过审模式接口)
methods: POST
接口地址: api/menu (Navicon/index)
参数:
返回值:
{
    status: Boolean
    data: [
        {
            navIconUrl: 跳转地址,
            navIconImg: tab图标,
            navIconText: tab文案
        }
    ]
}
【4】
接口名称: 小程序首页列表接口(过审模式接口)
methods: POST
接口地址: api/equity (Navicon/equity)
参数:
返回值:
{
    status: Boolean,
    more: Boolean, // 更多
    theme: String  // 主题
    data: [
        {
            equityUrl: 跳转地址,
            equityImg: 图标,
            equityTitle: 标题,
            equityAddres: 文案,
            equityDate: 日期,
        }
    ]
}
【5】
接口名称: 小程序服务页列表接口(过审模式接口)
methods: POST
接口地址: api/service (Navicon/service)
参数:
返回值:
{
    status: Boolean,
    data: [
        {
            id: id,
            name: 名称,
            open: 是否展开,
            pages: 子类,
            pageurl: 子类跳转地址,
        }
    ]
}

【6】
接口名称: 小程序股权信息菜单接口(过审模式接口)
methods: POST
接口地址: api/inform (Navicon/inform)
参数:
返回值:
{
    status: Boolean,
    data: {
        key: 键值,
        value: 名称
    }
}

【7】
接口名称: 小程序股权信息内容接口(过审模式接口)
methods: GET
接口地址: api/equity/agency  (Equity/agency)
接口地址: api/equity/assets  (Equity/assets)
接口地址: api/equity/broker  (Equity/broker)
接口地址: api/equity/equity  (Equity/equity)
接口地址: api/equity/factor  (Equity/factor)
接口地址: api/equity/invest  (Equity/invest)
接口地址: api/equity/itloan  (Equity/itloan)
接口地址: api/equity/lease   (Equity/lease)
接口地址: api/equity/loan    (Equity/loan)
接口地址: api/equity/other   (Equity/other)
接口地址: api/equity/pawn    (Equity/pawn)
接口地址: api/equity/private (Equity/private)
参数:
返回值:
{
    status: Boolean,
    title: String,
    data: []
}



