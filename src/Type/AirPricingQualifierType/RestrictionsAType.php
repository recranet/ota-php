<?php

namespace Recranet\OTA\Type\AirPricingQualifierType;

/**
 * Class representing RestrictionsAType
 */
class RestrictionsAType
{
    /**
     * If true, include offers that allow advanced purchase with fares.
     *
     * @var bool $advancePurchaseInd
     */
    private $advancePurchaseInd = null;

    /**
     * If true, include offers that have fare penalties.
     *
     * @var bool $farePenaltyInd
     */
    private $farePenaltyInd = null;

    /**
     * Gets as advancePurchaseInd
     *
     * If true, include offers that allow advanced purchase with fares.
     *
     * @return bool
     */
    public function getAdvancePurchaseInd()
    {
        return $this->advancePurchaseInd;
    }

    /**
     * Sets a new advancePurchaseInd
     *
     * If true, include offers that allow advanced purchase with fares.
     *
     * @param bool $advancePurchaseInd
     * @return self
     */
    public function setAdvancePurchaseInd($advancePurchaseInd)
    {
        $this->advancePurchaseInd = $advancePurchaseInd;
        return $this;
    }

    /**
     * Gets as farePenaltyInd
     *
     * If true, include offers that have fare penalties.
     *
     * @return bool
     */
    public function getFarePenaltyInd()
    {
        return $this->farePenaltyInd;
    }

    /**
     * Sets a new farePenaltyInd
     *
     * If true, include offers that have fare penalties.
     *
     * @param bool $farePenaltyInd
     * @return self
     */
    public function setFarePenaltyInd($farePenaltyInd)
    {
        $this->farePenaltyInd = $farePenaltyInd;
        return $this;
    }
}

