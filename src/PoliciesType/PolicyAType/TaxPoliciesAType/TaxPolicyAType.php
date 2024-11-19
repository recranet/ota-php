<?php

namespace Recranet\OTA\PoliciesType\PolicyAType\TaxPoliciesAType;

use Recranet\OTA\TaxType;

/**
 * Class representing TaxPolicyAType
 */
class TaxPolicyAType extends TaxType
{
    /**
     * Length of stay required for tax exemption.
     *
     * @var int $nightsForTaxExemptionQuantity
     */
    private $nightsForTaxExemptionQuantity = null;

    /**
     * @var int $taxableNightsQuantity
     */
    private $taxableNightsQuantity = null;

    /**
     * Gets as nightsForTaxExemptionQuantity
     *
     * Length of stay required for tax exemption.
     *
     * @return int
     */
    public function getNightsForTaxExemptionQuantity()
    {
        return $this->nightsForTaxExemptionQuantity;
    }

    /**
     * Sets a new nightsForTaxExemptionQuantity
     *
     * Length of stay required for tax exemption.
     *
     * @param int $nightsForTaxExemptionQuantity
     * @return self
     */
    public function setNightsForTaxExemptionQuantity($nightsForTaxExemptionQuantity)
    {
        $this->nightsForTaxExemptionQuantity = $nightsForTaxExemptionQuantity;
        return $this;
    }

    /**
     * Gets as taxableNightsQuantity
     *
     * @return int
     */
    public function getTaxableNightsQuantity()
    {
        return $this->taxableNightsQuantity;
    }

    /**
     * Sets a new taxableNightsQuantity
     *
     * @param int $taxableNightsQuantity
     * @return self
     */
    public function setTaxableNightsQuantity($taxableNightsQuantity)
    {
        $this->taxableNightsQuantity = $taxableNightsQuantity;
        return $this;
    }
}

