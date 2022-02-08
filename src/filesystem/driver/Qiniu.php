<?php
namespace think\filesystem\driver;

use League\Flysystem\AdapterInterface;
use think\filesystem\Adapter\QiniuAdapter;
use think\filesystem\Driver;

class Qiniu extends Driver
{

    protected function createAdapter(): AdapterInterface
    {
        return new QiniuAdapter($this->config);
    }

}