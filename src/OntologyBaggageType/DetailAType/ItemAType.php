<?php

namespace Recranet\OTA\OntologyBaggageType\DetailAType;

use Recranet\OTA\OntologyCodeType;

/**
 * Class representing ItemAType
 */
class ItemAType extends OntologyCodeType
{
    /**
     * Specialty baggage item indicator.
     * Example: true
     * Implementer: If true, this is a specialty baggage item.
     *
     * @var bool $specialItemInd
     */
    private $specialItemInd = null;

    /**
     * Gets as specialItemInd
     *
     * Specialty baggage item indicator.
     * Example: true
     * Implementer: If true, this is a specialty baggage item.
     *
     * @return bool
     */
    public function getSpecialItemInd()
    {
        return $this->specialItemInd;
    }

    /**
     * Sets a new specialItemInd
     *
     * Specialty baggage item indicator.
     * Example: true
     * Implementer: If true, this is a specialty baggage item.
     *
     * @param bool $specialItemInd
     * @return self
     */
    public function setSpecialItemInd($specialItemInd)
    {
        $this->specialItemInd = $specialItemInd;
        return $this;
    }
}

