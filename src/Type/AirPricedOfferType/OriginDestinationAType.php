<?php

namespace Recranet\OTA\Type\AirPricedOfferType;

use Recranet\OTA\Type\OriginDestinationInformationType;

/**
 * Class representing OriginDestinationAType
 */
class OriginDestinationAType extends OriginDestinationInformationType
{
    /**
     * A unique reference to this origin destination information.
     *
     * @var string $rPH
     */
    private $rPH = null;

    /**
     * Specifies alternate location(s) for the origin and/or destination.
     *
     * @var \Recranet\OTA\Type\AirPricedOfferType\OriginDestinationAType\AlternateLocationInfoAType $alternateLocationInfo
     */
    private $alternateLocationInfo = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as rPH
     *
     * A unique reference to this origin destination information.
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
     * A unique reference to this origin destination information.
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
     * Gets as alternateLocationInfo
     *
     * Specifies alternate location(s) for the origin and/or destination.
     *
     * @return \Recranet\OTA\Type\AirPricedOfferType\OriginDestinationAType\AlternateLocationInfoAType
     */
    public function getAlternateLocationInfo()
    {
        return $this->alternateLocationInfo;
    }

    /**
     * Sets a new alternateLocationInfo
     *
     * Specifies alternate location(s) for the origin and/or destination.
     *
     * @param \Recranet\OTA\Type\AirPricedOfferType\OriginDestinationAType\AlternateLocationInfoAType $alternateLocationInfo
     * @return self
     */
    public function setAlternateLocationInfo(?\Recranet\OTA\Type\AirPricedOfferType\OriginDestinationAType\AlternateLocationInfoAType $alternateLocationInfo = null)
    {
        $this->alternateLocationInfo = $alternateLocationInfo;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\Type\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\Type\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

