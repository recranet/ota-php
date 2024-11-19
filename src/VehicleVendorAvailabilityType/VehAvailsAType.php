<?php

namespace Recranet\OTA\VehicleVendorAvailabilityType;

/**
 * Class representing VehAvailsAType
 */
class VehAvailsAType
{
    /**
     * The rate category for all the vehicles available. Refer to OpenTravel Code List Rate Category (RTC).
     *
     * @var string $rateCategory
     */
    private $rateCategory = null;

    /**
     * The rate period for all the vehicles available.
     *
     * @var string $ratePeriod
     */
    private $ratePeriod = null;

    /**
     * Availability and rate information for one specific vehicle.
     *
     * @var \Recranet\OTA\VehicleVendorAvailabilityType\VehAvailsAType\VehAvailAType[] $vehAvail
     */
    private $vehAvail = [
        
    ];

    /**
     * Gets as rateCategory
     *
     * The rate category for all the vehicles available. Refer to OpenTravel Code List Rate Category (RTC).
     *
     * @return string
     */
    public function getRateCategory()
    {
        return $this->rateCategory;
    }

    /**
     * Sets a new rateCategory
     *
     * The rate category for all the vehicles available. Refer to OpenTravel Code List Rate Category (RTC).
     *
     * @param string $rateCategory
     * @return self
     */
    public function setRateCategory($rateCategory)
    {
        $this->rateCategory = $rateCategory;
        return $this;
    }

    /**
     * Gets as ratePeriod
     *
     * The rate period for all the vehicles available.
     *
     * @return string
     */
    public function getRatePeriod()
    {
        return $this->ratePeriod;
    }

    /**
     * Sets a new ratePeriod
     *
     * The rate period for all the vehicles available.
     *
     * @param string $ratePeriod
     * @return self
     */
    public function setRatePeriod($ratePeriod)
    {
        $this->ratePeriod = $ratePeriod;
        return $this;
    }

    /**
     * Adds as vehAvail
     *
     * Availability and rate information for one specific vehicle.
     *
     * @return self
     * @param \Recranet\OTA\VehicleVendorAvailabilityType\VehAvailsAType\VehAvailAType $vehAvail
     */
    public function addToVehAvail(\Recranet\OTA\VehicleVendorAvailabilityType\VehAvailsAType\VehAvailAType $vehAvail)
    {
        $this->vehAvail[] = $vehAvail;
        return $this;
    }

    /**
     * isset vehAvail
     *
     * Availability and rate information for one specific vehicle.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehAvail($index)
    {
        return isset($this->vehAvail[$index]);
    }

    /**
     * unset vehAvail
     *
     * Availability and rate information for one specific vehicle.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehAvail($index)
    {
        unset($this->vehAvail[$index]);
    }

    /**
     * Gets as vehAvail
     *
     * Availability and rate information for one specific vehicle.
     *
     * @return \Recranet\OTA\VehicleVendorAvailabilityType\VehAvailsAType\VehAvailAType[]
     */
    public function getVehAvail()
    {
        return $this->vehAvail;
    }

    /**
     * Sets a new vehAvail
     *
     * Availability and rate information for one specific vehicle.
     *
     * @param \Recranet\OTA\VehicleVendorAvailabilityType\VehAvailsAType\VehAvailAType[] $vehAvail
     * @return self
     */
    public function setVehAvail(array $vehAvail)
    {
        $this->vehAvail = $vehAvail;
        return $this;
    }
}

