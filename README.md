## 这是一个docker-compose 演示示例


参照B站视频教程而写, 方便大家学习使用

视频地址如下  https://www.bilibili.com/video/BV1Wt411w72h?from=search&seid=3688284699898465652


项目分为 `nginx`, `php` 和 `mysql`三个模块


目录结构如下

    hello-docker-compose
        |-- conf
            |-- nginx.conf      // nginx配置文件
        |-- html
            |-- index.html      // nginx首页
            |-- test.php        // 访问 php info服务
            |-- mysql.php       // 访问 mysql
        |-- docker-compose.yml  // docker-compose 主配置文件


使用方式
```sh

# 1. 克隆代码
git clone https://github.com/bobo132/docker-compose-demo-1.git

# 2. 进入目录下, 启动项目(以后台方式)
cd docker-compose-demo-1
docker-compose up -d

```    

然后就启动完成了, 如下图
```
CONTAINER ID        IMAGE                             COMMAND                  CREATED             STATUS              PORTS                NAMES
25b3b7498399        nginx:alpine                      "nginx -g 'daemon of…"   50 seconds ago      Up 3 seconds        0.0.0.0:80->80/tcp   docker-compose-demo-1_nginx_1
c8aa834d8a6f        devilbox/php-fpm:8.0-work-0.106   "/docker-entrypoint.…"   50 seconds ago      Up 3 seconds        9000/tcp             docker-compose-demo-1_php_1
de051f9b9569        mysql:5.6                         "docker-entrypoint.s…"   50 seconds ago      Up 3 seconds        3306/tcp             docker-compose-demo-1_mysql_1
```








