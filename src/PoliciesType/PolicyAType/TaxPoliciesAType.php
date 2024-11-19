<?php

namespace Recranet\OTA\PoliciesType\PolicyAType;

/**
 * Class representing TaxPoliciesAType
 */
class TaxPoliciesAType
{
    /**
     * @var \Recranet\OTA\PoliciesType\PolicyAType\TaxPoliciesAType\TaxPolicyAType[] $taxPolicy
     */
    private $taxPolicy = [
        
    ];

    /**
     * Adds as taxPolicy
     *
     * @return self
     * @param \Recranet\OTA\PoliciesType\PolicyAType\TaxPoliciesAType\TaxPolicyAType $taxPolicy
     */
    public function addToTaxPolicy(\Recranet\OTA\PoliciesType\PolicyAType\TaxPoliciesAType\TaxPolicyAType $taxPolicy)
    {
        $this->taxPolicy[] = $taxPolicy;
        return $this;
    }

    /**
     * isset taxPolicy
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxPolicy($index)
    {
        return isset($this->taxPolicy[$index]);
    }

    /**
     * unset taxPolicy
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxPolicy($index)
    {
        unset($this->taxPolicy[$index]);
    }

    /**
     * Gets as taxPolicy
     *
     * @return \Recranet\OTA\PoliciesType\PolicyAType\TaxPoliciesAType\TaxPolicyAType[]
     */
    public function getTaxPolicy()
    {
        return $this->taxPolicy;
    }

    /**
     * Sets a new taxPolicy
     *
     * @param \Recranet\OTA\PoliciesType\PolicyAType\TaxPoliciesAType\TaxPolicyAType[] $taxPolicy
     * @return self
     */
    public function setTaxPolicy(array $taxPolicy = null)
    {
        $this->taxPolicy = $taxPolicy;
        return $this;
    }
}

