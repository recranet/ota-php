<?php

namespace Recranet\OTA\Type\RateAmountMessageType\RatesAType;

use Recranet\OTA\Type\RateUploadType;

/**
 * Class representing RateAType
 */
class RateAType extends RateUploadType
{
    /**
     * When true, indicates a rate change is applicable. When false, a rate change does not apply.
     *
     * @var bool $rateChangeIndicator
     */
    private $rateChangeIndicator = null;

    /**
     * Gets as rateChangeIndicator
     *
     * When true, indicates a rate change is applicable. When false, a rate change does not apply.
     *
     * @return bool
     */
    public function getRateChangeIndicator()
    {
        return $this->rateChangeIndicator;
    }

    /**
     * Sets a new rateChangeIndicator
     *
     * When true, indicates a rate change is applicable. When false, a rate change does not apply.
     *
     * @param bool $rateChangeIndicator
     * @return self
     */
    public function setRateChangeIndicator($rateChangeIndicator)
    {
        $this->rateChangeIndicator = $rateChangeIndicator;
        return $this;
    }
}

