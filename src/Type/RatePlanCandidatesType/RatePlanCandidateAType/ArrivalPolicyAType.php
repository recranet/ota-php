<?php

namespace Recranet\OTA\Type\RatePlanCandidatesType\RatePlanCandidateAType;

/**
 * Class representing ArrivalPolicyAType
 */
class ArrivalPolicyAType
{
    /**
     * When true, return rates with a guarantee policy.
     *
     * @var bool $guaranteePolicyIndicator
     */
    private $guaranteePolicyIndicator = null;

    /**
     * When true, return rates with a deposit policy.
     *
     * @var bool $depositPolicyIndicator
     */
    private $depositPolicyIndicator = null;

    /**
     * When true, return rates with a hold time policy.
     *
     * @var bool $holdTimePolicyIndicator
     */
    private $holdTimePolicyIndicator = null;

    /**
     * Gets as guaranteePolicyIndicator
     *
     * When true, return rates with a guarantee policy.
     *
     * @return bool
     */
    public function getGuaranteePolicyIndicator()
    {
        return $this->guaranteePolicyIndicator;
    }

    /**
     * Sets a new guaranteePolicyIndicator
     *
     * When true, return rates with a guarantee policy.
     *
     * @param bool $guaranteePolicyIndicator
     * @return self
     */
    public function setGuaranteePolicyIndicator($guaranteePolicyIndicator)
    {
        $this->guaranteePolicyIndicator = $guaranteePolicyIndicator;
        return $this;
    }

    /**
     * Gets as depositPolicyIndicator
     *
     * When true, return rates with a deposit policy.
     *
     * @return bool
     */
    public function getDepositPolicyIndicator()
    {
        return $this->depositPolicyIndicator;
    }

    /**
     * Sets a new depositPolicyIndicator
     *
     * When true, return rates with a deposit policy.
     *
     * @param bool $depositPolicyIndicator
     * @return self
     */
    public function setDepositPolicyIndicator($depositPolicyIndicator)
    {
        $this->depositPolicyIndicator = $depositPolicyIndicator;
        return $this;
    }

    /**
     * Gets as holdTimePolicyIndicator
     *
     * When true, return rates with a hold time policy.
     *
     * @return bool
     */
    public function getHoldTimePolicyIndicator()
    {
        return $this->holdTimePolicyIndicator;
    }

    /**
     * Sets a new holdTimePolicyIndicator
     *
     * When true, return rates with a hold time policy.
     *
     * @param bool $holdTimePolicyIndicator
     * @return self
     */
    public function setHoldTimePolicyIndicator($holdTimePolicyIndicator)
    {
        $this->holdTimePolicyIndicator = $holdTimePolicyIndicator;
        return $this;
    }
}

