<?php

namespace gg\WhiteListApiBundle\Factory;

use gg\WhiteListApiBundle\Service\WhiteListService;

interface WhiteListFactoryInterface
{
    public function createWhiteListExtension(): WhiteListService;
}
