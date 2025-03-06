<?php

namespace Recranet\OTA\Type\PTCFareBreakdownType\EndorsementsAType;

use Recranet\OTA\Type\FreeTextType;

/**
 * Class representing EndorsementAType
 */
class EndorsementAType extends FreeTextType
{
    /**
     * Indicates the required modification to the element.
     *
     * @var string $operation
     */
    private $operation = null;

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

