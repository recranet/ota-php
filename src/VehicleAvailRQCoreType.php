<?php

namespace Recranet\OTA;

/**
 * Class representing VehicleAvailRQCoreType
 *
 * Common information in a request for vehicle availability and rates.
 * XSD Type: VehicleAvailRQCoreType
 */
class VehicleAvailRQCoreType
{
    /**
     * The status of the vehicle availability and/or rates are being requested for, e.g. available and waitlist.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * To specify from which source the information being requested should be obtained, e.g., vendor, GDS system, etc.
     *
     * @var string $targetSource
     */
    private $targetSource = null;

    /**
     * Core information.
     *
     * @var \Recranet\OTA\VehicleRentalCoreType $vehRentalCore
     */
    private $vehRentalCore = null;

    /**
     * Multimodal offer influencers.
     *
     * @var \Recranet\OTA\MultiModalOfferType $multimodalOffer
     */
    private $multimodalOffer = null;

    /**
     * Vendor preferences.
     *
     * @var \Recranet\OTA\VehicleAvailRQCoreType\VendorPrefsAType $vendorPrefs
     */
    private $vendorPrefs = null;

    /**
     * Vehicle preferences.
     *
     * @var \Recranet\OTA\VehicleAvailRQCoreType\VehPrefsAType\VehPrefAType[] $vehPrefs
     */
    private $vehPrefs = null;

    /**
     * Driver category.
     *
     * @var \Recranet\OTA\VehicleAvailRQCoreType\DriverTypeAType[] $driverType
     */
    private $driverType = [
        
    ];

    /**
     * Rate qualifiers and promotions.
     *
     * @var \Recranet\OTA\VehicleAvailRQCoreType\RateQualifierAType[] $rateQualifier
     */
    private $rateQualifier = [
        
    ];

    /**
     * Minimum and maximum rate range.
     *
     * @var \Recranet\OTA\VehicleAvailRQCoreType\RateRangeAType $rateRange
     */
    private $rateRange = null;

    /**
     * Special equipment preferences.
     *
     * @var \Recranet\OTA\VehicleAvailRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType[] $specialEquipPrefs
     */
    private $specialEquipPrefs = null;

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as status
     *
     * The status of the vehicle availability and/or rates are being requested for, e.g. available and waitlist.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of the vehicle availability and/or rates are being requested for, e.g. available and waitlist.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as targetSource
     *
     * To specify from which source the information being requested should be obtained, e.g., vendor, GDS system, etc.
     *
     * @return string
     */
    public function getTargetSource()
    {
        return $this->targetSource;
    }

    /**
     * Sets a new targetSource
     *
     * To specify from which source the information being requested should be obtained, e.g., vendor, GDS system, etc.
     *
     * @param string $targetSource
     * @return self
     */
    public function setTargetSource($targetSource)
    {
        $this->targetSource = $targetSource;
        return $this;
    }

    /**
     * Gets as vehRentalCore
     *
     * Core information.
     *
     * @return \Recranet\OTA\VehicleRentalCoreType
     */
    public function getVehRentalCore()
    {
        return $this->vehRentalCore;
    }

    /**
     * Sets a new vehRentalCore
     *
     * Core information.
     *
     * @param \Recranet\OTA\VehicleRentalCoreType $vehRentalCore
     * @return self
     */
    public function setVehRentalCore(\Recranet\OTA\VehicleRentalCoreType $vehRentalCore)
    {
        $this->vehRentalCore = $vehRentalCore;
        return $this;
    }

    /**
     * Gets as multimodalOffer
     *
     * Multimodal offer influencers.
     *
     * @return \Recranet\OTA\MultiModalOfferType
     */
    public function getMultimodalOffer()
    {
        return $this->multimodalOffer;
    }

    /**
     * Sets a new multimodalOffer
     *
     * Multimodal offer influencers.
     *
     * @param \Recranet\OTA\MultiModalOfferType $multimodalOffer
     * @return self
     */
    public function setMultimodalOffer(?\Recranet\OTA\MultiModalOfferType $multimodalOffer = null)
    {
        $this->multimodalOffer = $multimodalOffer;
        return $this;
    }

    /**
     * Gets as vendorPrefs
     *
     * Vendor preferences.
     *
     * @return \Recranet\OTA\VehicleAvailRQCoreType\VendorPrefsAType
     */
    public function getVendorPrefs()
    {
        return $this->vendorPrefs;
    }

    /**
     * Sets a new vendorPrefs
     *
     * Vendor preferences.
     *
     * @param \Recranet\OTA\VehicleAvailRQCoreType\VendorPrefsAType $vendorPrefs
     * @return self
     */
    public function setVendorPrefs(?\Recranet\OTA\VehicleAvailRQCoreType\VendorPrefsAType $vendorPrefs = null)
    {
        $this->vendorPrefs = $vendorPrefs;
        return $this;
    }

    /**
     * Adds as vehPref
     *
     * Vehicle preferences.
     *
     * @return self
     * @param \Recranet\OTA\VehicleAvailRQCoreType\VehPrefsAType\VehPrefAType $vehPref
     */
    public function addToVehPrefs(\Recranet\OTA\VehicleAvailRQCoreType\VehPrefsAType\VehPrefAType $vehPref)
    {
        $this->vehPrefs[] = $vehPref;
        return $this;
    }

    /**
     * isset vehPrefs
     *
     * Vehicle preferences.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehPrefs($index)
    {
        return isset($this->vehPrefs[$index]);
    }

    /**
     * unset vehPrefs
     *
     * Vehicle preferences.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehPrefs($index)
    {
        unset($this->vehPrefs[$index]);
    }

    /**
     * Gets as vehPrefs
     *
     * Vehicle preferences.
     *
     * @return \Recranet\OTA\VehicleAvailRQCoreType\VehPrefsAType\VehPrefAType[]
     */
    public function getVehPrefs()
    {
        return $this->vehPrefs;
    }

    /**
     * Sets a new vehPrefs
     *
     * Vehicle preferences.
     *
     * @param \Recranet\OTA\VehicleAvailRQCoreType\VehPrefsAType\VehPrefAType[] $vehPrefs
     * @return self
     */
    public function setVehPrefs(array $vehPrefs = null)
    {
        $this->vehPrefs = $vehPrefs;
        return $this;
    }

    /**
     * Adds as driverType
     *
     * Driver category.
     *
     * @return self
     * @param \Recranet\OTA\VehicleAvailRQCoreType\DriverTypeAType $driverType
     */
    public function addToDriverType(\Recranet\OTA\VehicleAvailRQCoreType\DriverTypeAType $driverType)
    {
        $this->driverType[] = $driverType;
        return $this;
    }

    /**
     * isset driverType
     *
     * Driver category.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDriverType($index)
    {
        return isset($this->driverType[$index]);
    }

    /**
     * unset driverType
     *
     * Driver category.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDriverType($index)
    {
        unset($this->driverType[$index]);
    }

    /**
     * Gets as driverType
     *
     * Driver category.
     *
     * @return \Recranet\OTA\VehicleAvailRQCoreType\DriverTypeAType[]
     */
    public function getDriverType()
    {
        return $this->driverType;
    }

    /**
     * Sets a new driverType
     *
     * Driver category.
     *
     * @param \Recranet\OTA\VehicleAvailRQCoreType\DriverTypeAType[] $driverType
     * @return self
     */
    public function setDriverType(array $driverType = null)
    {
        $this->driverType = $driverType;
        return $this;
    }

    /**
     * Adds as rateQualifier
     *
     * Rate qualifiers and promotions.
     *
     * @return self
     * @param \Recranet\OTA\VehicleAvailRQCoreType\RateQualifierAType $rateQualifier
     */
    public function addToRateQualifier(\Recranet\OTA\VehicleAvailRQCoreType\RateQualifierAType $rateQualifier)
    {
        $this->rateQualifier[] = $rateQualifier;
        return $this;
    }

    /**
     * isset rateQualifier
     *
     * Rate qualifiers and promotions.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRateQualifier($index)
    {
        return isset($this->rateQualifier[$index]);
    }

    /**
     * unset rateQualifier
     *
     * Rate qualifiers and promotions.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRateQualifier($index)
    {
        unset($this->rateQualifier[$index]);
    }

    /**
     * Gets as rateQualifier
     *
     * Rate qualifiers and promotions.
     *
     * @return \Recranet\OTA\VehicleAvailRQCoreType\RateQualifierAType[]
     */
    public function getRateQualifier()
    {
        return $this->rateQualifier;
    }

    /**
     * Sets a new rateQualifier
     *
     * Rate qualifiers and promotions.
     *
     * @param \Recranet\OTA\VehicleAvailRQCoreType\RateQualifierAType[] $rateQualifier
     * @return self
     */
    public function setRateQualifier(array $rateQualifier = null)
    {
        $this->rateQualifier = $rateQualifier;
        return $this;
    }

    /**
     * Gets as rateRange
     *
     * Minimum and maximum rate range.
     *
     * @return \Recranet\OTA\VehicleAvailRQCoreType\RateRangeAType
     */
    public function getRateRange()
    {
        return $this->rateRange;
    }

    /**
     * Sets a new rateRange
     *
     * Minimum and maximum rate range.
     *
     * @param \Recranet\OTA\VehicleAvailRQCoreType\RateRangeAType $rateRange
     * @return self
     */
    public function setRateRange(?\Recranet\OTA\VehicleAvailRQCoreType\RateRangeAType $rateRange = null)
    {
        $this->rateRange = $rateRange;
        return $this;
    }

    /**
     * Adds as specialEquipPref
     *
     * Special equipment preferences.
     *
     * @return self
     * @param \Recranet\OTA\VehicleAvailRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType $specialEquipPref
     */
    public function addToSpecialEquipPrefs(\Recranet\OTA\VehicleAvailRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType $specialEquipPref)
    {
        $this->specialEquipPrefs[] = $specialEquipPref;
        return $this;
    }

    /**
     * isset specialEquipPrefs
     *
     * Special equipment preferences.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialEquipPrefs($index)
    {
        return isset($this->specialEquipPrefs[$index]);
    }

    /**
     * unset specialEquipPrefs
     *
     * Special equipment preferences.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialEquipPrefs($index)
    {
        unset($this->specialEquipPrefs[$index]);
    }

    /**
     * Gets as specialEquipPrefs
     *
     * Special equipment preferences.
     *
     * @return \Recranet\OTA\VehicleAvailRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType[]
     */
    public function getSpecialEquipPrefs()
    {
        return $this->specialEquipPrefs;
    }

    /**
     * Sets a new specialEquipPrefs
     *
     * Special equipment preferences.
     *
     * @param \Recranet\OTA\VehicleAvailRQCoreType\SpecialEquipPrefsAType\SpecialEquipPrefAType[] $specialEquipPrefs
     * @return self
     */
    public function setSpecialEquipPrefs(array $specialEquipPrefs = null)
    {
        $this->specialEquipPrefs = $specialEquipPrefs;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

