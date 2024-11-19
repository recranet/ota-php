<?php

namespace Recranet\OTA;

/**
 * Class representing CoveragePricedType
 *
 * The CoveragePricedType complex type defines the information that is required to describe a priced coverage, that is, a coverage and a charge.
 * XSD Type: CoveragePricedType
 */
class CoveragePricedType
{
    /**
     * An indication if this particular coverage is required in the vehicle reservation, or is optional, based upon renter preference.
     *
     *  false
     *
     * @var bool $required
     */
    private $required = null;

    /**
     * Details about a coverage, such as text or description.
     *
     * @var \Recranet\OTA\CoverageType $coverage
     */
    private $coverage = null;

    /**
     * The charges as they relate to a single coverage, such as minimum or maximum amounts, taxes, or information on how the charge was calculated.
     *
     * @var \Recranet\OTA\VehicleChargeType $charge
     */
    private $charge = null;

    /**
     * The deductible, excess or liability amount for this coverage of a vehicle(s).
     *
     * @var \Recranet\OTA\DeductibleType $deductible
     */
    private $deductible = null;

    /**
     * Gets as required
     *
     * An indication if this particular coverage is required in the vehicle reservation, or is optional, based upon renter preference.
     *
     *  false
     *
     * @return bool
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Sets a new required
     *
     * An indication if this particular coverage is required in the vehicle reservation, or is optional, based upon renter preference.
     *
     *  false
     *
     * @param bool $required
     * @return self
     */
    public function setRequired($required)
    {
        $this->required = $required;
        return $this;
    }

    /**
     * Gets as coverage
     *
     * Details about a coverage, such as text or description.
     *
     * @return \Recranet\OTA\CoverageType
     */
    public function getCoverage()
    {
        return $this->coverage;
    }

    /**
     * Sets a new coverage
     *
     * Details about a coverage, such as text or description.
     *
     * @param \Recranet\OTA\CoverageType $coverage
     * @return self
     */
    public function setCoverage(\Recranet\OTA\CoverageType $coverage)
    {
        $this->coverage = $coverage;
        return $this;
    }

    /**
     * Gets as charge
     *
     * The charges as they relate to a single coverage, such as minimum or maximum amounts, taxes, or information on how the charge was calculated.
     *
     * @return \Recranet\OTA\VehicleChargeType
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Sets a new charge
     *
     * The charges as they relate to a single coverage, such as minimum or maximum amounts, taxes, or information on how the charge was calculated.
     *
     * @param \Recranet\OTA\VehicleChargeType $charge
     * @return self
     */
    public function setCharge(\Recranet\OTA\VehicleChargeType $charge)
    {
        $this->charge = $charge;
        return $this;
    }

    /**
     * Gets as deductible
     *
     * The deductible, excess or liability amount for this coverage of a vehicle(s).
     *
     * @return \Recranet\OTA\DeductibleType
     */
    public function getDeductible()
    {
        return $this->deductible;
    }

    /**
     * Sets a new deductible
     *
     * The deductible, excess or liability amount for this coverage of a vehicle(s).
     *
     * @param \Recranet\OTA\DeductibleType $deductible
     * @return self
     */
    public function setDeductible(?\Recranet\OTA\DeductibleType $deductible = null)
    {
        $this->deductible = $deductible;
        return $this;
    }
}

