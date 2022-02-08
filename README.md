# filesystem
tp6集成qiniu、oss、cos上传

## 使用方法

### config/filesystem.php中增加对应驱动配置

```php
return [
    "default" => "qiniu",
    "disks" => [
        "public" => [
            "type" => "local",
            "root" => ".",
            "visibility" => "public",
            "domain" => ""
        ],
        "qiniu" => [
            "type" => "qiniu",
            "accessKey" => "",
            "secretKey" => "",
            "bucket" => "",
            "domain" => ""
        ],
        "oss" => [
            "type" => "oss",
            "accessId" => "",
            "accessSecret" => "",
            "bucket" => "",
            "endpoint" => "",
            "domain" => ""
        ],
        "cos" => [
            "type" => "cos",
            "region" => "ap-guangzhou",
            "credentials" => [
                "appId" => "",
                "secretId" => "",
                "secretKey" => ""
            ],
            "bucket" => "",
            "domain" => "",
            "scheme" => "http"
        ]
    ]
];
```
### 上传
```php
$file = $this->request->file('file');
\think\facade\Filesystem::disk('oss')->putFile('upload', $file);
```
### 删除
```php
\think\facade\Filesystem::disk('oss')->delete($path);
```

更详细用法参考Adapter对应文件
