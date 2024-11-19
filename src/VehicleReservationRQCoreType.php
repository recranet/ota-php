<?php

namespace Recranet\OTA;

/**
 * Class representing VehicleReservationRQCoreType
 *
 * The VehicleReservationRQCoreType complex type identifies the core, or common, information that is typically included when requesting the reservation of avehicle.
 * XSD Type: VehicleReservationRQCoreType
 */
class VehicleReservationRQCoreType
{
    /**
     * Used to specify the status of the reservation with either one of the enumerations in InventoryStatusType or an UpperCaseAlphaLength1to2 code such as an IATA status code.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * A unique identifier by which to reference the reservation. This is typically referred to as a reservation number.
     *
     * @var \Recranet\OTA\UniqueIDType[] $uniqueID
     */
    private $uniqueID = [
        
    ];

    /**
     * Information that is common, or core, to all requests and responses associated with the reservation of a vehicle.
     *
     * @var \Recranet\OTA\VehicleRentalCoreType $vehRentalCore
     */
    private $vehRentalCore = null;

    /**
     * Information on the one primary driver and, optionally, several additional drivers. This may be used to provide a frequent renter number.
     *
     * @var \Recranet\OTA\CustomerPrimaryAdditionalType $customer
     */
    private $customer = null;

    /**
     * Indicates the preferred Vendor Company for car rental. If a company name is supplied, the rates will be supplied for the specific Vendor Company. The company name is unique amongst the vendors. The name of the company is provided in this element.
     *
     * @var \Recranet\OTA\CompanyNamePrefType $vendorPref
     */
    private $vendorPref = null;

    /**
     * Indicates any preferences for the vehicle, such as type, class, transmission, air conditioning.
     *
     * @var \Recranet\OTA\VehiclePrefType $vehPref
     */
    private $vehPref = null;

    /**
     * Indicates the number of people of each age category associated with this request.
     *
     * @var \Recranet\OTA\VehicleReservationRQCoreType\DriverTypeAType[] $driverType
     */
    private $driverType = [
        
    ];

    /**
     * Indicates the type of rates to be booked, along with any discount number or promotional codes that may affect the rate.
     *
     * @var \Recranet\OTA\RateQualifierType $rateQualifier
     */
    private $rateQualifier = null;

    /**
     * A collection of fees associated with this vehicle reservation.
     *
     * @var \Recranet\OTA\VehicleChargePurposeType[] $fees
     */
    private $fees = null;

    /**
     * Information on the charges associated with this vehicle. Such charges may include the base rental amount, additional mileage amounts, fuel costs, etc.
     *
     * @var \Recranet\OTA\VehicleChargePurposeType[] $vehicleCharges
     */
    private $vehicleCharges = null;

    /**
     * Indicates the preferences for one or more specific items of additional equipment, such as ski racks, child seats, etc.
     *
     * @var \Recranet\OTA\VehicleReservationRQCoreType\SpecialEquipPrefsAType $specialEquipPrefs
     */
    private $specialEquipPrefs = null;

    /**
     * Information on the distance that a reserved vehicle may be driven as part of the standard rental charge. Such distance may be unlimited, or a quantity of miles or kilometers for a certain period of time. This may be repeated for situations such as an 8 day rental that has 500 miles per week and 100 miles per additional day.
     *
     * @var \Recranet\OTA\VehicleReservationRQCoreType\RateDistanceAType[] $rateDistance
     */
    private $rateDistance = [
        
    ];

    /**
     * Total cost for this reservation as returned from an availability search.
     *
     * @var \Recranet\OTA\VehicleReservationRQCoreType\TotalChargeAType $totalCharge
     */
    private $totalCharge = null;

    /**
     * Information to specify the queue on which the reservation should be placed.
     *
     * @var \Recranet\OTA\VehicleReservationRQCoreType\QueueAType $queue
     */
    private $queue = null;

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as status
     *
     * Used to specify the status of the reservation with either one of the enumerations in InventoryStatusType or an UpperCaseAlphaLength1to2 code such as an IATA status code.
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
     * Used to specify the status of the reservation with either one of the enumerations in InventoryStatusType or an UpperCaseAlphaLength1to2 code such as an IATA status code.
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
     * Adds as uniqueID
     *
     * A unique identifier by which to reference the reservation. This is typically referred to as a reservation number.
     *
     * @return self
     * @param \Recranet\OTA\UniqueIDType $uniqueID
     */
    public function addToUniqueID(\Recranet\OTA\UniqueIDType $uniqueID)
    {
        $this->uniqueID[] = $uniqueID;
        return $this;
    }

    /**
     * isset uniqueID
     *
     * A unique identifier by which to reference the reservation. This is typically referred to as a reservation number.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUniqueID($index)
    {
        return isset($this->uniqueID[$index]);
    }

    /**
     * unset uniqueID
     *
     * A unique identifier by which to reference the reservation. This is typically referred to as a reservation number.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUniqueID($index)
    {
        unset($this->uniqueID[$index]);
    }

    /**
     * Gets as uniqueID
     *
     * A unique identifier by which to reference the reservation. This is typically referred to as a reservation number.
     *
     * @return \Recranet\OTA\UniqueIDType[]
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * A unique identifier by which to reference the reservation. This is typically referred to as a reservation number.
     *
     * @param \Recranet\OTA\UniqueIDType[] $uniqueID
     * @return self
     */
    public function setUniqueID(array $uniqueID = null)
    {
        $this->uniqueID = $uniqueID;
        return $this;
    }

    /**
     * Gets as vehRentalCore
     *
     * Information that is common, or core, to all requests and responses associated with the reservation of a vehicle.
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
     * Information that is common, or core, to all requests and responses associated with the reservation of a vehicle.
     *
     * @param \Recranet\OTA\VehicleRentalCoreType $vehRentalCore
     * @return self
     */
    public function setVehRentalCore(?\Recranet\OTA\VehicleRentalCoreType $vehRentalCore = null)
    {
        $this->vehRentalCore = $vehRentalCore;
        return $this;
    }

    /**
     * Gets as customer
     *
     * Information on the one primary driver and, optionally, several additional drivers. This may be used to provide a frequent renter number.
     *
     * @return \Recranet\OTA\CustomerPrimaryAdditionalType
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Sets a new customer
     *
     * Information on the one primary driver and, optionally, several additional drivers. This may be used to provide a frequent renter number.
     *
     * @param \Recranet\OTA\CustomerPrimaryAdditionalType $customer
     * @return self
     */
    public function setCustomer(?\Recranet\OTA\CustomerPrimaryAdditionalType $customer = null)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * Gets as vendorPref
     *
     * Indicates the preferred Vendor Company for car rental. If a company name is supplied, the rates will be supplied for the specific Vendor Company. The company name is unique amongst the vendors. The name of the company is provided in this element.
     *
     * @return \Recranet\OTA\CompanyNamePrefType
     */
    public function getVendorPref()
    {
        return $this->vendorPref;
    }

    /**
     * Sets a new vendorPref
     *
     * Indicates the preferred Vendor Company for car rental. If a company name is supplied, the rates will be supplied for the specific Vendor Company. The company name is unique amongst the vendors. The name of the company is provided in this element.
     *
     * @param \Recranet\OTA\CompanyNamePrefType $vendorPref
     * @return self
     */
    public function setVendorPref(?\Recranet\OTA\CompanyNamePrefType $vendorPref = null)
    {
        $this->vendorPref = $vendorPref;
        return $this;
    }

    /**
     * Gets as vehPref
     *
     * Indicates any preferences for the vehicle, such as type, class, transmission, air conditioning.
     *
     * @return \Recranet\OTA\VehiclePrefType
     */
    public function getVehPref()
    {
        return $this->vehPref;
    }

    /**
     * Sets a new vehPref
     *
     * Indicates any preferences for the vehicle, such as type, class, transmission, air conditioning.
     *
     * @param \Recranet\OTA\VehiclePrefType $vehPref
     * @return self
     */
    public function setVehPref(?\Recranet\OTA\VehiclePrefType $vehPref = null)
    {
        $this->vehPref = $vehPref;
        return $this;
    }

    /**
     * Adds as driverType
     *
     * Indicates the number of people of each age category associated with this request.
     *
     * @return self
     * @param \Recranet\OTA\VehicleReservationRQCoreType\DriverTypeAType $driverType
     */
    public function addToDriverType(\Recranet\OTA\VehicleReservationRQCoreType\DriverTypeAType $driverType)
    {
        $this->driverType[] = $driverType;
        return $this;
    }

    /**
     * isset driverType
     *
     * Indicates the number of people of each age category associated with this request.
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
     * Indicates the number of people of each age category associated with this request.
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
     * Indicates the number of people of each age category associated with this request.
     *
     * @return \Recranet\OTA\VehicleReservationRQCoreType\DriverTypeAType[]
     */
    public function getDriverType()
    {
        return $this->driverType;
    }

    /**
     * Sets a new driverType
     *
     * Indicates the number of people of each age category associated with this request.
     *
     * @param \Recranet\OTA\VehicleReservationRQCoreType\DriverTypeAType[] $driverType
     * @return self
     */
    public function setDriverType(array $driverType = null)
    {
        $this->driverType = $driverType;
        return $this;
    }

    /**
     * Gets as rateQualifier
     *
     * Indicates the type of rates to be booked, along with any discount number or promotional codes that may affect the rate.
     *
     * @return \Recranet\OTA\RateQualifierType
     */
    public function getRateQualifier()
    {
        return $this->rateQualifier;
    }

    /**
     * Sets a new rateQualifier
     *
     * Indicates the type of rates to be booked, along with any discount number or promotional codes that may affect the rate.
     *
     * @param \Recranet\OTA\RateQualifierType $rateQualifier
     * @return self
     */
    public function setRateQualifier(?\Recranet\OTA\RateQualifierType $rateQualifier = null)
    {
        $this->rateQualifier = $rateQualifier;
        return $this;
    }

    /**
     * Adds as fee
     *
     * A collection of fees associated with this vehicle reservation.
     *
     * @return self
     * @param \Recranet\OTA\VehicleChargePurposeType $fee
     */
    public function addToFees(\Recranet\OTA\VehicleChargePurposeType $fee)
    {
        $this->fees[] = $fee;
        return $this;
    }

    /**
     * isset fees
     *
     * A collection of fees associated with this vehicle reservation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFees($index)
    {
        return isset($this->fees[$index]);
    }

    /**
     * unset fees
     *
     * A collection of fees associated with this vehicle reservation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFees($index)
    {
        unset($this->fees[$index]);
    }

    /**
     * Gets as fees
     *
     * A collection of fees associated with this vehicle reservation.
     *
     * @return \Recranet\OTA\VehicleChargePurposeType[]
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * Sets a new fees
     *
     * A collection of fees associated with this vehicle reservation.
     *
     * @param \Recranet\OTA\VehicleChargePurposeType[] $fees
     * @return self
     */
    public function setFees(array $fees = null)
    {
        $this->fees = $fees;
        return $this;
    }

    /**
     * Adds as vehicleCharge
     *
     * Information on the charges associated with this vehicle. Such charges may include the base rental amount, additional mileage amounts, fuel costs, etc.
     *
     * @return self
     * @param \Recranet\OTA\VehicleChargePurposeType $vehicleCharge
     */
    public function addToVehicleCharges(\Recranet\OTA\VehicleChargePurposeType $vehicleCharge)
    {
        $this->vehicleCharges[] = $vehicleCharge;
        return $this;
    }

    /**
     * isset vehicleCharges
     *
     * Information on the charges associated with this vehicle. Such charges may include the base rental amount, additional mileage amounts, fuel costs, etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehicleCharges($index)
    {
        return isset($this->vehicleCharges[$index]);
    }

    /**
     * unset vehicleCharges
     *
     * Information on the charges associated with this vehicle. Such charges may include the base rental amount, additional mileage amounts, fuel costs, etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehicleCharges($index)
    {
        unset($this->vehicleCharges[$index]);
    }

    /**
     * Gets as vehicleCharges
     *
     * Information on the charges associated with this vehicle. Such charges may include the base rental amount, additional mileage amounts, fuel costs, etc.
     *
     * @return \Recranet\OTA\VehicleChargePurposeType[]
     */
    public function getVehicleCharges()
    {
        return $this->vehicleCharges;
    }

    /**
     * Sets a new vehicleCharges
     *
     * Information on the charges associated with this vehicle. Such charges may include the base rental amount, additional mileage amounts, fuel costs, etc.
     *
     * @param \Recranet\OTA\VehicleChargePurposeType[] $vehicleCharges
     * @return self
     */
    public function setVehicleCharges(array $vehicleCharges = null)
    {
        $this->vehicleCharges = $vehicleCharges;
        return $this;
    }

    /**
     * Gets as specialEquipPrefs
     *
     * Indicates the preferences for one or more specific items of additional equipment, such as ski racks, child seats, etc.
     *
     * @return \Recranet\OTA\VehicleReservationRQCoreType\SpecialEquipPrefsAType
     */
    public function getSpecialEquipPrefs()
    {
        return $this->specialEquipPrefs;
    }

    /**
     * Sets a new specialEquipPrefs
     *
     * Indicates the preferences for one or more specific items of additional equipment, such as ski racks, child seats, etc.
     *
     * @param \Recranet\OTA\VehicleReservationRQCoreType\SpecialEquipPrefsAType $specialEquipPrefs
     * @return self
     */
    public function setSpecialEquipPrefs(?\Recranet\OTA\VehicleReservationRQCoreType\SpecialEquipPrefsAType $specialEquipPrefs = null)
    {
        $this->specialEquipPrefs = $specialEquipPrefs;
        return $this;
    }

    /**
     * Adds as rateDistance
     *
     * Information on the distance that a reserved vehicle may be driven as part of the standard rental charge. Such distance may be unlimited, or a quantity of miles or kilometers for a certain period of time. This may be repeated for situations such as an 8 day rental that has 500 miles per week and 100 miles per additional day.
     *
     * @return self
     * @param \Recranet\OTA\VehicleReservationRQCoreType\RateDistanceAType $rateDistance
     */
    public function addToRateDistance(\Recranet\OTA\VehicleReservationRQCoreType\RateDistanceAType $rateDistance)
    {
        $this->rateDistance[] = $rateDistance;
        return $this;
    }

    /**
     * isset rateDistance
     *
     * Information on the distance that a reserved vehicle may be driven as part of the standard rental charge. Such distance may be unlimited, or a quantity of miles or kilometers for a certain period of time. This may be repeated for situations such as an 8 day rental that has 500 miles per week and 100 miles per additional day.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRateDistance($index)
    {
        return isset($this->rateDistance[$index]);
    }

    /**
     * unset rateDistance
     *
     * Information on the distance that a reserved vehicle may be driven as part of the standard rental charge. Such distance may be unlimited, or a quantity of miles or kilometers for a certain period of time. This may be repeated for situations such as an 8 day rental that has 500 miles per week and 100 miles per additional day.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRateDistance($index)
    {
        unset($this->rateDistance[$index]);
    }

    /**
     * Gets as rateDistance
     *
     * Information on the distance that a reserved vehicle may be driven as part of the standard rental charge. Such distance may be unlimited, or a quantity of miles or kilometers for a certain period of time. This may be repeated for situations such as an 8 day rental that has 500 miles per week and 100 miles per additional day.
     *
     * @return \Recranet\OTA\VehicleReservationRQCoreType\RateDistanceAType[]
     */
    public function getRateDistance()
    {
        return $this->rateDistance;
    }

    /**
     * Sets a new rateDistance
     *
     * Information on the distance that a reserved vehicle may be driven as part of the standard rental charge. Such distance may be unlimited, or a quantity of miles or kilometers for a certain period of time. This may be repeated for situations such as an 8 day rental that has 500 miles per week and 100 miles per additional day.
     *
     * @param \Recranet\OTA\VehicleReservationRQCoreType\RateDistanceAType[] $rateDistance
     * @return self
     */
    public function setRateDistance(array $rateDistance = null)
    {
        $this->rateDistance = $rateDistance;
        return $this;
    }

    /**
     * Gets as totalCharge
     *
     * Total cost for this reservation as returned from an availability search.
     *
     * @return \Recranet\OTA\VehicleReservationRQCoreType\TotalChargeAType
     */
    public function getTotalCharge()
    {
        return $this->totalCharge;
    }

    /**
     * Sets a new totalCharge
     *
     * Total cost for this reservation as returned from an availability search.
     *
     * @param \Recranet\OTA\VehicleReservationRQCoreType\TotalChargeAType $totalCharge
     * @return self
     */
    public function setTotalCharge(?\Recranet\OTA\VehicleReservationRQCoreType\TotalChargeAType $totalCharge = null)
    {
        $this->totalCharge = $totalCharge;
        return $this;
    }

    /**
     * Gets as queue
     *
     * Information to specify the queue on which the reservation should be placed.
     *
     * @return \Recranet\OTA\VehicleReservationRQCoreType\QueueAType
     */
    public function getQueue()
    {
        return $this->queue;
    }

    /**
     * Sets a new queue
     *
     * Information to specify the queue on which the reservation should be placed.
     *
     * @param \Recranet\OTA\VehicleReservationRQCoreType\QueueAType $queue
     * @return self
     */
    public function setQueue(?\Recranet\OTA\VehicleReservationRQCoreType\QueueAType $queue = null)
    {
        $this->queue = $queue;
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

