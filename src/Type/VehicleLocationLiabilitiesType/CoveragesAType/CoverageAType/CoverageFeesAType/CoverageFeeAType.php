<?php

namespace Recranet\OTA\Type\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType;

/**
 * Class representing CoverageFeeAType
 */
class CoverageFeeAType
{
    /**
     * Provides full information on the specific charge.
     *
     * @var \Recranet\OTA\Type\VehicleChargeType $charge
     */
    private $charge = null;

    /**
     * A collection of vehicles for which this charge applies. This is to be used when the charge is not the same charge for all vehicle types.
     *
     * @var \Recranet\OTA\Type\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType\VehiclesAType\VehicleAType[] $vehicles
     */
    private $vehicles = null;

    /**
     * The deductible/excess amount and liability amount for this coverage of a vehicle(s).
     *
     * @var \Recranet\OTA\Type\DeductibleType $deductible
     */
    private $deductible = null;

    /**
     * Gets as charge
     *
     * Provides full information on the specific charge.
     *
     * @return \Recranet\OTA\Type\VehicleChargeType
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Sets a new charge
     *
     * Provides full information on the specific charge.
     *
     * @param \Recranet\OTA\Type\VehicleChargeType $charge
     * @return self
     */
    public function setCharge(\Recranet\OTA\Type\VehicleChargeType $charge)
    {
        $this->charge = $charge;
        return $this;
    }

    /**
     * Adds as vehicle
     *
     * A collection of vehicles for which this charge applies. This is to be used when the charge is not the same charge for all vehicle types.
     *
     * @return self
     * @param \Recranet\OTA\Type\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType\VehiclesAType\VehicleAType $vehicle
     */
    public function addToVehicles(\Recranet\OTA\Type\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType\VehiclesAType\VehicleAType $vehicle)
    {
        $this->vehicles[] = $vehicle;
        return $this;
    }

    /**
     * isset vehicles
     *
     * A collection of vehicles for which this charge applies. This is to be used when the charge is not the same charge for all vehicle types.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehicles($index)
    {
        return isset($this->vehicles[$index]);
    }

    /**
     * unset vehicles
     *
     * A collection of vehicles for which this charge applies. This is to be used when the charge is not the same charge for all vehicle types.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehicles($index)
    {
        unset($this->vehicles[$index]);
    }

    /**
     * Gets as vehicles
     *
     * A collection of vehicles for which this charge applies. This is to be used when the charge is not the same charge for all vehicle types.
     *
     * @return \Recranet\OTA\Type\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType\VehiclesAType\VehicleAType[]
     */
    public function getVehicles()
    {
        return $this->vehicles;
    }

    /**
     * Sets a new vehicles
     *
     * A collection of vehicles for which this charge applies. This is to be used when the charge is not the same charge for all vehicle types.
     *
     * @param \Recranet\OTA\Type\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType\VehiclesAType\VehicleAType[] $vehicles
     * @return self
     */
    public function setVehicles(array $vehicles = null)
    {
        $this->vehicles = $vehicles;
        return $this;
    }

    /**
     * Gets as deductible
     *
     * The deductible/excess amount and liability amount for this coverage of a vehicle(s).
     *
     * @return \Recranet\OTA\Type\DeductibleType
     */
    public function getDeductible()
    {
        return $this->deductible;
    }

    /**
     * Sets a new deductible
     *
     * The deductible/excess amount and liability amount for this coverage of a vehicle(s).
     *
     * @param \Recranet\OTA\Type\DeductibleType $deductible
     * @return self
     */
    public function setDeductible(?\Recranet\OTA\Type\DeductibleType $deductible = null)
    {
        $this->deductible = $deductible;
        return $this;
    }
}

