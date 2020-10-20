<?php

namespace gg\WhiteListApiBundle;

use gg\WhiteListApiBundle\DependencyInjection\WhiteListApiBundleExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class WhiteListApiBundle extends Bundle
{
    /**
     * @inheritdoc
     */
    public function getContainerExtension()
    {
        return new WhiteListApiBundleExtension();
    }
}
