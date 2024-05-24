<?php

namespace Yekern\AlibabaOpen\interfaces;

use Yekern\AlibabaOpen\core\Container;

/**
 * Interface Provider
 * @package Yekern\AlibabaOpen\interfaces
 */
interface Provider
{
    /**
     * @param Container $container
     * @return mixed
     */
    public function serviceProvider(Container $container);
}
