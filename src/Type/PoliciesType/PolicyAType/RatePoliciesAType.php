<?php

namespace Recranet\OTA\Type\PoliciesType\PolicyAType;

/**
 * Class representing RatePoliciesAType
 */
class RatePoliciesAType
{
    /**
     * A rate policy description.
     *
     * @var \Recranet\OTA\Type\PoliciesType\PolicyAType\RatePoliciesAType\RatePolicyAType[] $ratePolicy
     */
    private $ratePolicy = [
        
    ];

    /**
     * Adds as ratePolicy
     *
     * A rate policy description.
     *
     * @return self
     * @param \Recranet\OTA\Type\PoliciesType\PolicyAType\RatePoliciesAType\RatePolicyAType $ratePolicy
     */
    public function addToRatePolicy(\Recranet\OTA\Type\PoliciesType\PolicyAType\RatePoliciesAType\RatePolicyAType $ratePolicy)
    {
        $this->ratePolicy[] = $ratePolicy;
        return $this;
    }

    /**
     * isset ratePolicy
     *
     * A rate policy description.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRatePolicy($index)
    {
        return isset($this->ratePolicy[$index]);
    }

    /**
     * unset ratePolicy
     *
     * A rate policy description.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRatePolicy($index)
    {
        unset($this->ratePolicy[$index]);
    }

    /**
     * Gets as ratePolicy
     *
     * A rate policy description.
     *
     * @return \Recranet\OTA\Type\PoliciesType\PolicyAType\RatePoliciesAType\RatePolicyAType[]
     */
    public function getRatePolicy()
    {
        return $this->ratePolicy;
    }

    /**
     * Sets a new ratePolicy
     *
     * A rate policy description.
     *
     * @param \Recranet\OTA\Type\PoliciesType\PolicyAType\RatePoliciesAType\RatePolicyAType[] $ratePolicy
     * @return self
     */
    public function setRatePolicy(array $ratePolicy)
    {
        $this->ratePolicy = $ratePolicy;
        return $this;
    }
}

