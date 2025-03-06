<?php

namespace Recranet\OTA\Type;

/**
 * Class representing VehicleAvailCoreType
 *
 * The VehicleAvailCoreType complex type identifies the data that describes common, or core, information made available as part of describing the availability and rate of one or more vehicles.
 * XSD Type: VehicleAvailCoreType
 */
class VehicleAvailCoreType
{
    /**
     * @var string $status
     */
    private $status = null;

    /**
     * When true, this vehicle is an alternate to what was requested.
     *
     * @var bool $isAlternateInd
     */
    private $isAlternateInd = null;

    /**
     * Information on one specific vehicle along with detailed information on the charges associated with this vehicle.
     *
     * @var \Recranet\OTA\Type\VehicleType $vehicle
     */
    private $vehicle = null;

    /**
     * Information on the rates associated with this vehicle. Rate information can include the distance and the base rental cost, along with information on the various factors that may infuence this rate. This element may repeat to allow different distances to be made available for different charges. For example, $20.00 with 100 miles per day or $30.00 for unlimited mileage.
     *
     * @var \Recranet\OTA\Type\VehicleRentalRateType[] $rentalRate
     */
    private $rentalRate = [
        
    ];

    /**
     * The anticipated total cost of a reservation, the sum of the individual charges, optional charges and associated fees.
     *
     * @var \Recranet\OTA\Type\VehicleAvailCoreType\TotalChargeAType[] $totalCharge
     */
    private $totalCharge = [
        
    ];

    /**
     * A collection of special equipment that is part of this quote, along with the charges associated with this equipment.
     *
     * @var \Recranet\OTA\Type\VehicleEquipmentPricedType[] $pricedEquips
     */
    private $pricedEquips = null;

    /**
     * A collection of fees associated with this vehicle quotation.
     *
     * @var \Recranet\OTA\Type\VehicleChargePurposeType[] $fees
     */
    private $fees = null;

    /**
     * Information by which this availability quote can be later cross-referenced
     *
     * @var \Recranet\OTA\Type\VehicleAvailCoreType\ReferenceAType $reference
     */
    private $reference = null;

    /**
     * The vendor for this vehicle type and its participation level in a system.
     *
     * @var \Recranet\OTA\Type\VehicleAvailCoreType\VendorAType $vendor
     */
    private $vendor = null;

    /**
     * The vendor location information for a specific vehicle.
     *
     * @var \Recranet\OTA\Type\VehicleAvailCoreType\VendorLocationAType $vendorLocation
     */
    private $vendorLocation = null;

    /**
     * The drop off location information for a specific vehicle.
     *
     * @var \Recranet\OTA\Type\VehicleAvailCoreType\DropOffLocationAType $dropOffLocation
     */
    private $dropOffLocation = null;

    /**
     * Discount percentage and/or Amount, code and textual reason for discount
     *
     * @var \Recranet\OTA\Type\VehicleAvailCoreType\DiscountAType[] $discount
     */
    private $discount = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as status
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
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as isAlternateInd
     *
     * When true, this vehicle is an alternate to what was requested.
     *
     * @return bool
     */
    public function getIsAlternateInd()
    {
        return $this->isAlternateInd;
    }

    /**
     * Sets a new isAlternateInd
     *
     * When true, this vehicle is an alternate to what was requested.
     *
     * @param bool $isAlternateInd
     * @return self
     */
    public function setIsAlternateInd($isAlternateInd)
    {
        $this->isAlternateInd = $isAlternateInd;
        return $this;
    }

    /**
     * Gets as vehicle
     *
     * Information on one specific vehicle along with detailed information on the charges associated with this vehicle.
     *
     * @return \Recranet\OTA\Type\VehicleType
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Sets a new vehicle
     *
     * Information on one specific vehicle along with detailed information on the charges associated with this vehicle.
     *
     * @param \Recranet\OTA\Type\VehicleType $vehicle
     * @return self
     */
    public function setVehicle(\Recranet\OTA\Type\VehicleType $vehicle)
    {
        $this->vehicle = $vehicle;
        return $this;
    }

    /**
     * Adds as rentalRate
     *
     * Information on the rates associated with this vehicle. Rate information can include the distance and the base rental cost, along with information on the various factors that may infuence this rate. This element may repeat to allow different distances to be made available for different charges. For example, $20.00 with 100 miles per day or $30.00 for unlimited mileage.
     *
     * @return self
     * @param \Recranet\OTA\Type\VehicleRentalRateType $rentalRate
     */
    public function addToRentalRate(\Recranet\OTA\Type\VehicleRentalRateType $rentalRate)
    {
        $this->rentalRate[] = $rentalRate;
        return $this;
    }

    /**
     * isset rentalRate
     *
     * Information on the rates associated with this vehicle. Rate information can include the distance and the base rental cost, along with information on the various factors that may infuence this rate. This element may repeat to allow different distances to be made available for different charges. For example, $20.00 with 100 miles per day or $30.00 for unlimited mileage.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRentalRate($index)
    {
        return isset($this->rentalRate[$index]);
    }

    /**
     * unset rentalRate
     *
     * Information on the rates associated with this vehicle. Rate information can include the distance and the base rental cost, along with information on the various factors that may infuence this rate. This element may repeat to allow different distances to be made available for different charges. For example, $20.00 with 100 miles per day or $30.00 for unlimited mileage.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRentalRate($index)
    {
        unset($this->rentalRate[$index]);
    }

    /**
     * Gets as rentalRate
     *
     * Information on the rates associated with this vehicle. Rate information can include the distance and the base rental cost, along with information on the various factors that may infuence this rate. This element may repeat to allow different distances to be made available for different charges. For example, $20.00 with 100 miles per day or $30.00 for unlimited mileage.
     *
     * @return \Recranet\OTA\Type\VehicleRentalRateType[]
     */
    public function getRentalRate()
    {
        return $this->rentalRate;
    }

    /**
     * Sets a new rentalRate
     *
     * Information on the rates associated with this vehicle. Rate information can include the distance and the base rental cost, along with information on the various factors that may infuence this rate. This element may repeat to allow different distances to be made available for different charges. For example, $20.00 with 100 miles per day or $30.00 for unlimited mileage.
     *
     * @param \Recranet\OTA\Type\VehicleRentalRateType[] $rentalRate
     * @return self
     */
    public function setRentalRate(array $rentalRate = null)
    {
        $this->rentalRate = $rentalRate;
        return $this;
    }

    /**
     * Adds as totalCharge
     *
     * The anticipated total cost of a reservation, the sum of the individual charges, optional charges and associated fees.
     *
     * @return self
     * @param \Recranet\OTA\Type\VehicleAvailCoreType\TotalChargeAType $totalCharge
     */
    public function addToTotalCharge(\Recranet\OTA\Type\VehicleAvailCoreType\TotalChargeAType $totalCharge)
    {
        $this->totalCharge[] = $totalCharge;
        return $this;
    }

    /**
     * isset totalCharge
     *
     * The anticipated total cost of a reservation, the sum of the individual charges, optional charges and associated fees.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTotalCharge($index)
    {
        return isset($this->totalCharge[$index]);
    }

    /**
     * unset totalCharge
     *
     * The anticipated total cost of a reservation, the sum of the individual charges, optional charges and associated fees.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTotalCharge($index)
    {
        unset($this->totalCharge[$index]);
    }

    /**
     * Gets as totalCharge
     *
     * The anticipated total cost of a reservation, the sum of the individual charges, optional charges and associated fees.
     *
     * @return \Recranet\OTA\Type\VehicleAvailCoreType\TotalChargeAType[]
     */
    public function getTotalCharge()
    {
        return $this->totalCharge;
    }

    /**
     * Sets a new totalCharge
     *
     * The anticipated total cost of a reservation, the sum of the individual charges, optional charges and associated fees.
     *
     * @param \Recranet\OTA\Type\VehicleAvailCoreType\TotalChargeAType[] $totalCharge
     * @return self
     */
    public function setTotalCharge(array $totalCharge = null)
    {
        $this->totalCharge = $totalCharge;
        return $this;
    }

    /**
     * Adds as pricedEquip
     *
     * A collection of special equipment that is part of this quote, along with the charges associated with this equipment.
     *
     * @return self
     * @param \Recranet\OTA\Type\VehicleEquipmentPricedType $pricedEquip
     */
    public function addToPricedEquips(\Recranet\OTA\Type\VehicleEquipmentPricedType $pricedEquip)
    {
        $this->pricedEquips[] = $pricedEquip;
        return $this;
    }

    /**
     * isset pricedEquips
     *
     * A collection of special equipment that is part of this quote, along with the charges associated with this equipment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPricedEquips($index)
    {
        return isset($this->pricedEquips[$index]);
    }

    /**
     * unset pricedEquips
     *
     * A collection of special equipment that is part of this quote, along with the charges associated with this equipment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPricedEquips($index)
    {
        unset($this->pricedEquips[$index]);
    }

    /**
     * Gets as pricedEquips
     *
     * A collection of special equipment that is part of this quote, along with the charges associated with this equipment.
     *
     * @return \Recranet\OTA\Type\VehicleEquipmentPricedType[]
     */
    public function getPricedEquips()
    {
        return $this->pricedEquips;
    }

    /**
     * Sets a new pricedEquips
     *
     * A collection of special equipment that is part of this quote, along with the charges associated with this equipment.
     *
     * @param \Recranet\OTA\Type\VehicleEquipmentPricedType[] $pricedEquips
     * @return self
     */
    public function setPricedEquips(array $pricedEquips = null)
    {
        $this->pricedEquips = $pricedEquips;
        return $this;
    }

    /**
     * Adds as fee
     *
     * A collection of fees associated with this vehicle quotation.
     *
     * @return self
     * @param \Recranet\OTA\Type\VehicleChargePurposeType $fee
     */
    public function addToFees(\Recranet\OTA\Type\VehicleChargePurposeType $fee)
    {
        $this->fees[] = $fee;
        return $this;
    }

    /**
     * isset fees
     *
     * A collection of fees associated with this vehicle quotation.
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
     * A collection of fees associated with this vehicle quotation.
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
     * A collection of fees associated with this vehicle quotation.
     *
     * @return \Recranet\OTA\Type\VehicleChargePurposeType[]
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * Sets a new fees
     *
     * A collection of fees associated with this vehicle quotation.
     *
     * @param \Recranet\OTA\Type\VehicleChargePurposeType[] $fees
     * @return self
     */
    public function setFees(array $fees = null)
    {
        $this->fees = $fees;
        return $this;
    }

    /**
     * Gets as reference
     *
     * Information by which this availability quote can be later cross-referenced
     *
     * @return \Recranet\OTA\Type\VehicleAvailCoreType\ReferenceAType
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * Information by which this availability quote can be later cross-referenced
     *
     * @param \Recranet\OTA\Type\VehicleAvailCoreType\ReferenceAType $reference
     * @return self
     */
    public function setReference(?\Recranet\OTA\Type\VehicleAvailCoreType\ReferenceAType $reference = null)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Gets as vendor
     *
     * The vendor for this vehicle type and its participation level in a system.
     *
     * @return \Recranet\OTA\Type\VehicleAvailCoreType\VendorAType
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Sets a new vendor
     *
     * The vendor for this vehicle type and its participation level in a system.
     *
     * @param \Recranet\OTA\Type\VehicleAvailCoreType\VendorAType $vendor
     * @return self
     */
    public function setVendor(?\Recranet\OTA\Type\VehicleAvailCoreType\VendorAType $vendor = null)
    {
        $this->vendor = $vendor;
        return $this;
    }

    /**
     * Gets as vendorLocation
     *
     * The vendor location information for a specific vehicle.
     *
     * @return \Recranet\OTA\Type\VehicleAvailCoreType\VendorLocationAType
     */
    public function getVendorLocation()
    {
        return $this->vendorLocation;
    }

    /**
     * Sets a new vendorLocation
     *
     * The vendor location information for a specific vehicle.
     *
     * @param \Recranet\OTA\Type\VehicleAvailCoreType\VendorLocationAType $vendorLocation
     * @return self
     */
    public function setVendorLocation(?\Recranet\OTA\Type\VehicleAvailCoreType\VendorLocationAType $vendorLocation = null)
    {
        $this->vendorLocation = $vendorLocation;
        return $this;
    }

    /**
     * Gets as dropOffLocation
     *
     * The drop off location information for a specific vehicle.
     *
     * @return \Recranet\OTA\Type\VehicleAvailCoreType\DropOffLocationAType
     */
    public function getDropOffLocation()
    {
        return $this->dropOffLocation;
    }

    /**
     * Sets a new dropOffLocation
     *
     * The drop off location information for a specific vehicle.
     *
     * @param \Recranet\OTA\Type\VehicleAvailCoreType\DropOffLocationAType $dropOffLocation
     * @return self
     */
    public function setDropOffLocation(?\Recranet\OTA\Type\VehicleAvailCoreType\DropOffLocationAType $dropOffLocation = null)
    {
        $this->dropOffLocation = $dropOffLocation;
        return $this;
    }

    /**
     * Adds as discount
     *
     * Discount percentage and/or Amount, code and textual reason for discount
     *
     * @return self
     * @param \Recranet\OTA\Type\VehicleAvailCoreType\DiscountAType $discount
     */
    public function addToDiscount(\Recranet\OTA\Type\VehicleAvailCoreType\DiscountAType $discount)
    {
        $this->discount[] = $discount;
        return $this;
    }

    /**
     * isset discount
     *
     * Discount percentage and/or Amount, code and textual reason for discount
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDiscount($index)
    {
        return isset($this->discount[$index]);
    }

    /**
     * unset discount
     *
     * Discount percentage and/or Amount, code and textual reason for discount
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDiscount($index)
    {
        unset($this->discount[$index]);
    }

    /**
     * Gets as discount
     *
     * Discount percentage and/or Amount, code and textual reason for discount
     *
     * @return \Recranet\OTA\Type\VehicleAvailCoreType\DiscountAType[]
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Sets a new discount
     *
     * Discount percentage and/or Amount, code and textual reason for discount
     *
     * @param \Recranet\OTA\Type\VehicleAvailCoreType\DiscountAType[] $discount
     * @return self
     */
    public function setDiscount(array $discount = null)
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\Type\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\Type\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

