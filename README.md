# php-project-demo
微盟云开放平台的PHP项目Demo工程，开发者可以参考该Demo工程实现业务开发，快速切入。整个Demo工程符合微盟云开发平台的PHP工程的标准规范，支持微盟云开发平台的构建、发布、监控、治理...

## 介绍
### 功能列表
* PHP项目工程结构
* 项目配置管理
	* 环境变量管理
	* 请求路由管理
	* 扩展点注册表
	* 消息订阅表

### 项目结构

```
|-- composer.json
|-- README.md
|-- config/                         # 项目配置文件目录
|   |-- env.php                     # 环境变量定义
|   |-- routes.php                  # 路由配置表
|   |-- spiRegistry.php             # 扩展点注册表
|   |-- msgSubscription.php         # 消息订阅表
|-- src/                            # 开发者源码目录
|   |-- ... 
|-- templates/                      # 模版文件目录
|   |-- ...  
|-- test/
|-- vendor/                         # composer 三方依赖组件目录
|   |-- ...                         # 其它三方组件依赖
|   |-- weimob-cloud                # 微盟云组件依赖
|       |-- php-project-boot        # 微盟云PHP工程启动脚手架
|       |-- php-ability-sdk         # 微盟云开放能力SDK
|       |-- ...   
```


## 快速开始
1. 下载php-project-demo的代码，可以有以下几种方式
	*  在微盟云开发平台创建的PHP容器应用，默认会生成工程结构
	*  git clone git@github.com:weimob-tech/php-project-demo.git
	*  也可以在github下载demo的zip包
2. 修改项目名与composer.json里的name字段
3. 添加项目的composer的依赖包，默认的依赖包有
	* weimob-cloud/php-project-boot ，[版本](https://packagist.org/packages/weimob-cloud/php-project-boot)，[使用文档](https://github.com/weimob-tech/php-project-boot/blob/master/README.md)
	* weimob-cloud/php-ability-sdk，[版本](https://packagist.org/packages/weimob-cloud/php-ability-sdk) ，[使用文档](https://github.com/weimob-tech/php-ability-sdk/blob/master/README.md)
4. 安装包，使用composer命令
	* composer install
	* composer update
	* composer dumpautoload
	* composer ... [详细文档](https://getcomposer.org/)
5. 本地调试启
	
	``` bash
	--xdebug 启动
	php -d variables_order=EGPCS -d xdebug.remote_enable=1 -d xdebug.remote_mode=req -d xdebug.remote_port=9000 -d xdebug.remote_host=127.0.0.1 -d xdebug.remote_autostart=1 -S localhost:18888 -t ../public ../public/index.php
	-- 后台启动
	php -d variables_order=EGPCS -S localhost:18888 -t ../public ../public/index.php
	```  
6. 生产环境运行，可以在微盟云开发平台进行构建镜像，并发布到容器集群

## 使用文档
* [能力文档](http://doc.weimobcloud.com/list?tag=2396&menuId=19&childMenuId=1&isold=2)
* [开发者入驻](http://doc.weimobcloud.com/word?menuId=46&childMenuId=47&tag=2970&isold=2)
* [应用开发](http://doc.weimobcloud.com/word?menuId=53&childMenuId=54&tag=2488&isold=2)
* [PHP工程](http://doc.weimobcloud.com/word?menuId=53&childMenuId=54&tag=2488&isold=2)

## 贡献方法
* 申请加入weimob_tech

## 联系我们
* Weimob-tech@weimob.com
