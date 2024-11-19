<?php

namespace Recranet\OTA\SpecialReqDetailsType\OtherServiceInformationsAType;

use Recranet\OTA\OtherServiceInfoType;

/**
 * Class representing OtherServiceInformationAType
 */
class OtherServiceInformationAType extends OtherServiceInfoType
{
    /**
     * Unique value associated with the OSI.
     *
     * @var string $rPH
     */
    private $rPH = null;

    /**
     * Indicates the required modification to the element.
     *
     * @var string $operation
     */
    private $operation = null;

    /**
     * Gets as rPH
     *
     * Unique value associated with the OSI.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * Unique value associated with the OSI.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;
        return $this;
    }

    /**
     * Gets as operation
     *
     * Indicates the required modification to the element.
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Sets a new operation
     *
     * Indicates the required modification to the element.
     *
     * @param string $operation
     * @return self
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;
        return $this;
    }
}

