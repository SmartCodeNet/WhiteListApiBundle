<?php

namespace gg\WhiteListApiBundle\Service;

use gg\WhiteListApiBundle\DTO\SingleResultDTO;
use gg\WhiteListApiBundle\Extension\WhiteList\WhiteListExtension;
use gg\WhiteListApiBundle\InputDataType\InputDataTypeInterface;

class WhiteListService
{
    /** @var WhiteListExtension  */
    private $whiteListExtension;

    public function __construct(WhiteListExtension $whiteListExtension)
    {
        $this->whiteListExtension = $whiteListExtension;
    }

    public function getSingleData(
        InputDataTypeInterface $inputDataType
    ): SingleResultDTO {
        return $inputDataType->getSingleGeneralData($this->whiteListExtension);
    }
}
