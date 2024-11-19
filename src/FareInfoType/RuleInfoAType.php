<?php

namespace Recranet\OTA\FareInfoType;

use Recranet\OTA\RuleInfoType;

/**
 * Class representing RuleInfoAType
 */
class RuleInfoAType extends RuleInfoType
{
    /**
     * To specify if the trip is one way or roundtrip.
     *
     * @var string $tripType
     */
    private $tripType = null;

    /**
     * If true, the fare rule being requested is for all airline fares for the specified city pair. If false, it is not.
     *
     * @var bool $moneySaverInd
     */
    private $moneySaverInd = null;

    /**
     * Gets as tripType
     *
     * To specify if the trip is one way or roundtrip.
     *
     * @return string
     */
    public function getTripType()
    {
        return $this->tripType;
    }

    /**
     * Sets a new tripType
     *
     * To specify if the trip is one way or roundtrip.
     *
     * @param string $tripType
     * @return self
     */
    public function setTripType($tripType)
    {
        $this->tripType = $tripType;
        return $this;
    }

    /**
     * Gets as moneySaverInd
     *
     * If true, the fare rule being requested is for all airline fares for the specified city pair. If false, it is not.
     *
     * @return bool
     */
    public function getMoneySaverInd()
    {
        return $this->moneySaverInd;
    }

    /**
     * Sets a new moneySaverInd
     *
     * If true, the fare rule being requested is for all airline fares for the specified city pair. If false, it is not.
     *
     * @param bool $moneySaverInd
     * @return self
     */
    public function setMoneySaverInd($moneySaverInd)
    {
        $this->moneySaverInd = $moneySaverInd;
        return $this;
    }
}

