# Youzan SDK

最优雅的有赞SDK (有赞 3.0.0)

## Requirement

- PHP >= 5.5
- **[composer](https://getcomposer.org/)**

## Installation

```
composer require "hanson/youzan-sdk"
```

## Usage

### 自用型应用

```php
<?php

$youzan = new \Hanson\Youzan\Youzan([
    'client_id' => '',
    'client_secret' => '',
    'type' => \Hanson\Youzan\Youzan::PERSONAL, // 自用型应用
    'debug' => true, // 调试模式
    'kdt_id' => '19144834', // 店铺ID
    'log' => [
        'name' => 'youzan',
        'file' => __DIR__.'/youzan.log',
        'level'      => 'debug',
        'permission' => 0777,
    ]
]);

// 获取门店信息
$result = $youzan->request('youzan.shop.get');
```

### 平台型应用

```php
<?php

$youzan = new \Hanson\Youzan\Youzan([
    'client_id' => '',
    'client_secret' => '',
    'type' => \Hanson\Youzan\Youzan::PLATFORM,
    'debug' => true,
//    'kdt_id' => '19144834', // 可选,用于控制某个门店
    'log' => [
        'name' => 'youzan',
        'file' => __DIR__.'/youzan.log',
        'level'      => 'debug',
        'permission' => 0777,
    ]
]);

// 平台创建门店
$result = $youzan->request('youzan.shop.create', [
    'name' => 'HanSon的教学课堂',
]);

// 平台已授权门店
$youzan = $youzan->setShopId('19144834');
$result = $youzan->request('youzan.shop.get');

```

## Help

QQ 群： 570769430

## License

MIT
