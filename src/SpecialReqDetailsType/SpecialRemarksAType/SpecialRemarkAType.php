<?php

namespace Recranet\OTA\SpecialReqDetailsType\SpecialRemarksAType;

use Recranet\OTA\SpecialRemarkType;

/**
 * Class representing SpecialRemarkAType
 */
class SpecialRemarkAType extends SpecialRemarkType
{
    /**
     * Indicates the required modification to the element.
     *
     * @var string $operation
     */
    private $operation = null;

    /**
     * Unique value associated with the Special Remark.
     *
     * @var string $rPH
     */
    private $rPH = null;

    /**
     * Flight information associated to this special remark, used when FlightRefNumberRPHList is not available or is different.
     *
     * @var \Recranet\OTA\FlightLegType $flightLeg
     */
    private $flightLeg = null;

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

    /**
     * Gets as rPH
     *
     * Unique value associated with the Special Remark.
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
     * Unique value associated with the Special Remark.
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
     * Gets as flightLeg
     *
     * Flight information associated to this special remark, used when FlightRefNumberRPHList is not available or is different.
     *
     * @return \Recranet\OTA\FlightLegType
     */
    public function getFlightLeg()
    {
        return $this->flightLeg;
    }

    /**
     * Sets a new flightLeg
     *
     * Flight information associated to this special remark, used when FlightRefNumberRPHList is not available or is different.
     *
     * @param \Recranet\OTA\FlightLegType $flightLeg
     * @return self
     */
    public function setFlightLeg(?\Recranet\OTA\FlightLegType $flightLeg = null)
    {
        $this->flightLeg = $flightLeg;
        return $this;
    }
}

