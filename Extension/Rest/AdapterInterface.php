<?php

namespace gg\WhiteListApiBundle\Extension\Rest;

interface AdapterInterface
{
    public function findByNip(string $nip): array;
}
