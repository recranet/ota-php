<?php

namespace Recranet\OTA\Type\RatePlanType;

use Recranet\OTA\Type\GuaranteeType;

/**
 * Class representing GuaranteeAType
 */
class GuaranteeAType extends GuaranteeType
{
    /**
     * Payment expressed as a fixed amount, or a percentage of/or room nights.
     *
     * @var \Recranet\OTA\Type\RatePlanType\GuaranteeAType\AmountPercentAType $amountPercent
     */
    private $amountPercent = null;

    /**
     * Gets as amountPercent
     *
     * Payment expressed as a fixed amount, or a percentage of/or room nights.
     *
     * @return \Recranet\OTA\Type\RatePlanType\GuaranteeAType\AmountPercentAType
     */
    public function getAmountPercent()
    {
        return $this->amountPercent;
    }

    /**
     * Sets a new amountPercent
     *
     * Payment expressed as a fixed amount, or a percentage of/or room nights.
     *
     * @param \Recranet\OTA\Type\RatePlanType\GuaranteeAType\AmountPercentAType $amountPercent
     * @return self
     */
    public function setAmountPercent(?\Recranet\OTA\Type\RatePlanType\GuaranteeAType\AmountPercentAType $amountPercent = null)
    {
        $this->amountPercent = $amountPercent;
        return $this;
    }
}

