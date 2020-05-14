## 这是一个docker-compose 演示示例


参照B站视频教程而写, 方便大家学习使用
地址如下  https://www.bilibili.com/video/BV1Wt411w72h?from=search&seid=3688284699898465652


项目分为 `nginx`, `php` 和 `mysql`三个模块


本地目录结构如下

    hello-docker-compose
        |-- conf
            |-- nginx.conf      // nginx配置文件
        |-- html
            |-- index.html      // nginx首页
            |-- test.php        // 访问 php info服务
            |-- mysql.php       // 访问 mysql
        |-- docker-compose.yml  // docker-compose 主配置文件



项目介绍
   1. 采用`docker-compose` 来演示生产环境的`docker`容器使用方式.
   2. `nginx`容器访问`php`容器, `php`容器访问`mysql`容器







