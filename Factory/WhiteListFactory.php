<?php

namespace gg\WhiteListApiBundle\Factory;


use gg\WhiteListApiBundle\Extension\Rest\RestAdapter;
use gg\WhiteListApiBundle\Extension\WhiteList\WhiteListExtension;
use gg\WhiteListApiBundle\Service\WhiteListService;

class WhiteListFactory implements WhiteListFactoryInterface
{
    /** @var bool  */
    private $developMode;

    public function __construct(
        bool $developMode = false
    ) {
        $this->developMode = $developMode;
    }

    public function createGusExtension(): WhiteListService
    {
        $extension = WhiteListExtension::instance(
            ($this->developMode) ? null :
                new RestAdapter(
                    'https://wl-api.mf.gov.pl'
                )
        );

        return (new WhiteListService($extension));
    }
}
