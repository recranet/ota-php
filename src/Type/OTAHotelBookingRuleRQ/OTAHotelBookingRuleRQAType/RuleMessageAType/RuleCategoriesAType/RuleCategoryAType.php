<?php

namespace Recranet\OTA\Type\OTAHotelBookingRuleRQ\OTAHotelBookingRuleRQAType\RuleMessageAType\RuleCategoriesAType;

/**
 * Class representing RuleCategoryAType
 */
class RuleCategoryAType
{
    /**
     * The name of the rule category.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * The rule category number.
     *
     * @var int $number
     */
    private $number = null;

    /**
     * Gets as name
     *
     * The name of the rule category.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of the rule category.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as number
     *
     * The rule category number.
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * The rule category number.
     *
     * @param int $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }
}

