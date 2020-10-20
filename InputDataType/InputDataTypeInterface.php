<?php

namespace gg\WhiteListApiBundle\InputDataType;

use gg\WhiteListApiBundle\DTO\SingleResultDTO;
use gg\WhiteListApiBundle\Extension\WhiteList\WhiteListExtension;

interface InputDataTypeInterface
{
    /**
     * @param WhiteListExtension $whiteListExtension
     * @return SingleResultDTO
     */
    public function getSingleGeneralData(WhiteListExtension $whiteListExtension): SingleResultDTO;
}
