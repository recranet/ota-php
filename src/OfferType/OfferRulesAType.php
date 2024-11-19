<?php

namespace Recranet\OTA\OfferType;

/**
 * Class representing OfferRulesAType
 */
class OfferRulesAType
{
    /**
     * Defines conditions for which the offer applies.
     *
     * @var \Recranet\OTA\OfferType\OfferRulesAType\OfferRuleAType[] $offerRule
     */
    private $offerRule = [
        
    ];

    /**
     * Adds as offerRule
     *
     * Defines conditions for which the offer applies.
     *
     * @return self
     * @param \Recranet\OTA\OfferType\OfferRulesAType\OfferRuleAType $offerRule
     */
    public function addToOfferRule(\Recranet\OTA\OfferType\OfferRulesAType\OfferRuleAType $offerRule)
    {
        $this->offerRule[] = $offerRule;
        return $this;
    }

    /**
     * isset offerRule
     *
     * Defines conditions for which the offer applies.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOfferRule($index)
    {
        return isset($this->offerRule[$index]);
    }

    /**
     * unset offerRule
     *
     * Defines conditions for which the offer applies.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOfferRule($index)
    {
        unset($this->offerRule[$index]);
    }

    /**
     * Gets as offerRule
     *
     * Defines conditions for which the offer applies.
     *
     * @return \Recranet\OTA\OfferType\OfferRulesAType\OfferRuleAType[]
     */
    public function getOfferRule()
    {
        return $this->offerRule;
    }

    /**
     * Sets a new offerRule
     *
     * Defines conditions for which the offer applies.
     *
     * @param \Recranet\OTA\OfferType\OfferRulesAType\OfferRuleAType[] $offerRule
     * @return self
     */
    public function setOfferRule(array $offerRule)
    {
        $this->offerRule = $offerRule;
        return $this;
    }
}

