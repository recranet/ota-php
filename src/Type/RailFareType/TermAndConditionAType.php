<?php

namespace Recranet\OTA\Type\RailFareType;

/**
 * Class representing TermAndConditionAType
 */
class TermAndConditionAType
{
    /**
     * A fare rule code. Refer to OpenTravel Code List Fare Restriction (FAR).
     *
     * @var \Recranet\OTA\Type\RailFareType\TermAndConditionAType\FareRuleAType $fareRule
     */
    private $fareRule = null;

    /**
     * Dates associated with the fare rule.
     *
     * @var \Recranet\OTA\Type\RailFareType\TermAndConditionAType\EffectiveDatesAType $effectiveDates
     */
    private $effectiveDates = null;

    /**
     * Free text description for a a fare rule or terms and conditions.
     *
     * @var \Recranet\OTA\Type\FreeTextType $description
     */
    private $description = null;

    /**
     * Gets as fareRule
     *
     * A fare rule code. Refer to OpenTravel Code List Fare Restriction (FAR).
     *
     * @return \Recranet\OTA\Type\RailFareType\TermAndConditionAType\FareRuleAType
     */
    public function getFareRule()
    {
        return $this->fareRule;
    }

    /**
     * Sets a new fareRule
     *
     * A fare rule code. Refer to OpenTravel Code List Fare Restriction (FAR).
     *
     * @param \Recranet\OTA\Type\RailFareType\TermAndConditionAType\FareRuleAType $fareRule
     * @return self
     */
    public function setFareRule(?\Recranet\OTA\Type\RailFareType\TermAndConditionAType\FareRuleAType $fareRule = null)
    {
        $this->fareRule = $fareRule;
        return $this;
    }

    /**
     * Gets as effectiveDates
     *
     * Dates associated with the fare rule.
     *
     * @return \Recranet\OTA\Type\RailFareType\TermAndConditionAType\EffectiveDatesAType
     */
    public function getEffectiveDates()
    {
        return $this->effectiveDates;
    }

    /**
     * Sets a new effectiveDates
     *
     * Dates associated with the fare rule.
     *
     * @param \Recranet\OTA\Type\RailFareType\TermAndConditionAType\EffectiveDatesAType $effectiveDates
     * @return self
     */
    public function setEffectiveDates(?\Recranet\OTA\Type\RailFareType\TermAndConditionAType\EffectiveDatesAType $effectiveDates = null)
    {
        $this->effectiveDates = $effectiveDates;
        return $this;
    }

    /**
     * Gets as description
     *
     * Free text description for a a fare rule or terms and conditions.
     *
     * @return \Recranet\OTA\Type\FreeTextType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Free text description for a a fare rule or terms and conditions.
     *
     * @param \Recranet\OTA\Type\FreeTextType $description
     * @return self
     */
    public function setDescription(?\Recranet\OTA\Type\FreeTextType $description = null)
    {
        $this->description = $description;
        return $this;
    }
}

