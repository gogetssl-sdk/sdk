# GoGetSSL PHP SDK
GoGetSSL 的 PHP SDK

## 优势

- composer 安装
- psr-4 自动加载, 不拖累项目速度
- 补全支持更友好

## 安装

```bash
composer require gogetssl/sdk
```

## 使用

**非 Laravel项目中**
```php
use GoGetSSL\Client as GoGetSSL;

$sdk = new GoGetSSL('你的 API 用户名', '你的 API 秘钥');
$list = $sdk->product->getProductList();
print_r($list);
```

**Laravel项目中**
.env
```env
GOGETSSL_USERNAME=邮箱
GOGETSSL_PASSWORD=API_TOKEN
```

如果你laravel < 5.5，还需要修改 `config/app.php` 中的 `providers`
```php
    'providers' => [
        GoGetSSL\LaravelServiceProvider::class,
    ],
```

在代码中使用
```php
/**
 * @var \GoGetSSL\Client $sdk
 */
$sdk = app('gogetssl');
print_r($sdk->product->getProductList());
```

## 授权

MIT
