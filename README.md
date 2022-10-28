# unidesk SDK for PHP

## 运行环境
- PHP
- cURL extension

## 安装方法

1. 如果您通过composer管理您的项目依赖，可以在你的项目根目录运行：

        $ composer require unidesk/taobao-top-sdk

   或者在你的`composer.json`中声明对Aliyun OSS SDK for PHP的依赖：

        "require": {
            "unidesk/taobao-top-sdk": "dev-master"
        }

   然后通过`composer install`安装依赖。composer安装完成后，在您的PHP代码中引入依赖即可：

        require_once __DIR__ . '/vendor/autoload.php';
        
        
