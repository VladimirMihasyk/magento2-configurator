<?php

namespace CtiDigital\Configurator\Model\Configurator;

use CtiDigital\Configurator\Model\Configurator\Config\Reader;
use Magento\Framework\Config\CacheInterface;
use Magento\Framework\Config\Data;

class Config extends Data implements ConfigInterface
{

    public function __construct(Reader $reader, CacheInterface $cache, $cacheId = 'ctidigital_configurator_config')
    {
        parent::__construct($reader, $cache, $cacheId);
    }

    public function getAllComponents()
    {
        // TODO: Implement getAllComponents() method.
    }

    public function getComponentByName($name)
    {
        // TODO: Implement getComponentByName() method.
    }
}
