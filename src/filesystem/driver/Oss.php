<?php
namespace think\filesystem\driver;

use League\Flysystem\AdapterInterface;
use think\filesystem\Adapter\OssAdapter;
use think\filesystem\Driver;

class Oss extends Driver
{

    protected function createAdapter(): AdapterInterface
    {
        return new OssAdapter($this->config);
    }

}