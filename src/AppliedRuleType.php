<?php

namespace Recranet\OTA;

/**
 * Class representing AppliedRuleType
 *
 * Applied rule information, including category, rule identifier and rule descriptions.
 * XSD Type: AppliedRuleType
 */
class AppliedRuleType
{
    /**
     * The applied rule category.
     * Advanced Purchase | Weekend Stay
     *
     * @var string $category
     */
    private $category = null;

    /**
     * If true, a system default rule was used.
     *
     * @var bool $defaultUsedInd
     */
    private $defaultUsedInd = null;

    /**
     * Information for individual airline applied rules.
     *
     * @var \Recranet\OTA\AppliedRuleType\RuleInfoAType $ruleInfo
     */
    private $ruleInfo = null;

    /**
     * Rule description(s).
     * Repeated descriptions may be used to accommodate information categories.
     *
     * @var \Recranet\OTA\AppliedRuleType\DescriptionAType[] $description
     */
    private $description = [
        
    ];

    /**
     * Gets as category
     *
     * The applied rule category.
     * Advanced Purchase | Weekend Stay
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * The applied rule category.
     * Advanced Purchase | Weekend Stay
     *
     * @param string $category
     * @return self
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as defaultUsedInd
     *
     * If true, a system default rule was used.
     *
     * @return bool
     */
    public function getDefaultUsedInd()
    {
        return $this->defaultUsedInd;
    }

    /**
     * Sets a new defaultUsedInd
     *
     * If true, a system default rule was used.
     *
     * @param bool $defaultUsedInd
     * @return self
     */
    public function setDefaultUsedInd($defaultUsedInd)
    {
        $this->defaultUsedInd = $defaultUsedInd;
        return $this;
    }

    /**
     * Gets as ruleInfo
     *
     * Information for individual airline applied rules.
     *
     * @return \Recranet\OTA\AppliedRuleType\RuleInfoAType
     */
    public function getRuleInfo()
    {
        return $this->ruleInfo;
    }

    /**
     * Sets a new ruleInfo
     *
     * Information for individual airline applied rules.
     *
     * @param \Recranet\OTA\AppliedRuleType\RuleInfoAType $ruleInfo
     * @return self
     */
    public function setRuleInfo(?\Recranet\OTA\AppliedRuleType\RuleInfoAType $ruleInfo = null)
    {
        $this->ruleInfo = $ruleInfo;
        return $this;
    }

    /**
     * Adds as description
     *
     * Rule description(s).
     * Repeated descriptions may be used to accommodate information categories.
     *
     * @return self
     * @param \Recranet\OTA\AppliedRuleType\DescriptionAType $description
     */
    public function addToDescription(\Recranet\OTA\AppliedRuleType\DescriptionAType $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * Rule description(s).
     * Repeated descriptions may be used to accommodate information categories.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * Rule description(s).
     * Repeated descriptions may be used to accommodate information categories.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * Rule description(s).
     * Repeated descriptions may be used to accommodate information categories.
     *
     * @return \Recranet\OTA\AppliedRuleType\DescriptionAType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Rule description(s).
     * Repeated descriptions may be used to accommodate information categories.
     *
     * @param \Recranet\OTA\AppliedRuleType\DescriptionAType[] $description
     * @return self
     */
    public function setDescription(array $description = null)
    {
        $this->description = $description;
        return $this;
    }
}

