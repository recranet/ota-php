<?php

namespace Recranet\OTA\OTAHotelBookingRuleRQ\OTAHotelBookingRuleRQAType\RuleMessageAType;

/**
 * Class representing RuleCategoriesAType
 */
class RuleCategoriesAType
{
    /**
     * A specific rule category.
     *
     * @var \Recranet\OTA\OTAHotelBookingRuleRQ\OTAHotelBookingRuleRQAType\RuleMessageAType\RuleCategoriesAType\RuleCategoryAType[] $ruleCategory
     */
    private $ruleCategory = [
        
    ];

    /**
     * Adds as ruleCategory
     *
     * A specific rule category.
     *
     * @return self
     * @param \Recranet\OTA\OTAHotelBookingRuleRQ\OTAHotelBookingRuleRQAType\RuleMessageAType\RuleCategoriesAType\RuleCategoryAType $ruleCategory
     */
    public function addToRuleCategory(\Recranet\OTA\OTAHotelBookingRuleRQ\OTAHotelBookingRuleRQAType\RuleMessageAType\RuleCategoriesAType\RuleCategoryAType $ruleCategory)
    {
        $this->ruleCategory[] = $ruleCategory;
        return $this;
    }

    /**
     * isset ruleCategory
     *
     * A specific rule category.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRuleCategory($index)
    {
        return isset($this->ruleCategory[$index]);
    }

    /**
     * unset ruleCategory
     *
     * A specific rule category.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRuleCategory($index)
    {
        unset($this->ruleCategory[$index]);
    }

    /**
     * Gets as ruleCategory
     *
     * A specific rule category.
     *
     * @return \Recranet\OTA\OTAHotelBookingRuleRQ\OTAHotelBookingRuleRQAType\RuleMessageAType\RuleCategoriesAType\RuleCategoryAType[]
     */
    public function getRuleCategory()
    {
        return $this->ruleCategory;
    }

    /**
     * Sets a new ruleCategory
     *
     * A specific rule category.
     *
     * @param \Recranet\OTA\OTAHotelBookingRuleRQ\OTAHotelBookingRuleRQAType\RuleMessageAType\RuleCategoriesAType\RuleCategoryAType[] $ruleCategory
     * @return self
     */
    public function setRuleCategory(array $ruleCategory)
    {
        $this->ruleCategory = $ruleCategory;
        return $this;
    }
}

