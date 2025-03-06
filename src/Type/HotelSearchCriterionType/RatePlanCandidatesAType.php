<?php

namespace Recranet\OTA\Type\HotelSearchCriterionType;

use Recranet\OTA\Type\RatePlanCandidatesType;

/**
 * Class representing RatePlanCandidatesAType
 */
class RatePlanCandidatesAType extends RatePlanCandidatesType
{
    /**
     * If TRUE, the rates prices in the response message must include all taxes and surcharges.
     *
     * @var bool $taxesIncludedInd
     */
    private $taxesIncludedInd = null;

    /**
     * Gets as taxesIncludedInd
     *
     * If TRUE, the rates prices in the response message must include all taxes and surcharges.
     *
     * @return bool
     */
    public function getTaxesIncludedInd()
    {
        return $this->taxesIncludedInd;
    }

    /**
     * Sets a new taxesIncludedInd
     *
     * If TRUE, the rates prices in the response message must include all taxes and surcharges.
     *
     * @param bool $taxesIncludedInd
     * @return self
     */
    public function setTaxesIncludedInd($taxesIncludedInd)
    {
        $this->taxesIncludedInd = $taxesIncludedInd;
        return $this;
    }
}

