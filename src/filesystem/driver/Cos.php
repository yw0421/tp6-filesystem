<?php
namespace think\filesystem\driver;

use League\Flysystem\AdapterInterface;
use think\filesystem\Adapter\CosAdapter;
use think\filesystem\Driver;

class Cos extends Driver
{

    protected function createAdapter(): AdapterInterface
    {
        return new CosAdapter($this->config);
    }

}