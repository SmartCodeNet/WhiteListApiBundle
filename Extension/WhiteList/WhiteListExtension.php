<?php

namespace gg\WhiteListApiBundle\Extension\WhiteList;

use gg\WhiteListApiBundle\Extension\Rest\AdapterInterface;
use gg\WhiteListApiBundle\Extension\Rest\RestAdapter;

class WhiteListExtension
{
    /** @var string */
    protected $sessionId;

    /** @var AdapterInterface */
    protected $adapter;

    public function __construct(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    public static function instance(
        AdapterInterface $adapter = null
    ): WhiteListExtension {
        if ($adapter === null) {
            $adapter = new RestAdapter(
                'https://wl-test.mf.gov.pl/'
            );
        }
        return new WhiteListExtension($adapter);
    }


    public function getGeneralDataNip(string $nip): array
    {
       return $this->adapter->findByNip($nip);
    }
}
