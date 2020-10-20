<?php

namespace gg\WhiteListApiBundle\InputDataType;

use gg\WhiteListApiBundle\DTO\SingleResultDTO;
use gg\WhiteListApiBundle\Extension\WhiteList\WhiteListExtension;

class NipInputDataType implements InputDataTypeInterface
{
    use DataTypeTrait;

    /**
     * @param WhiteListExtension $whiteListExtension
     * @return SingleResultDTO
     */
    public function getSingleGeneralData(WhiteListExtension $whiteListExtension): SingleResultDTO
    {
        $data = $whiteListExtension->getGeneralDataNip(
            $this->getFormattedValue()
        );

        return new SingleResultDTO(
            $data['result']??[]
        );
    }
}
