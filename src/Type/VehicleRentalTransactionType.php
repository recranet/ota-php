<?php

namespace Recranet\OTA\Type;

/**
 * Class representing VehicleRentalTransactionType
 *
 * This contains the information typically used in a rental transaction, such as charges, contract number or pickup date/time.
 * XSD Type: VehicleRentalTransactionType
 */
class VehicleRentalTransactionType
{
    /**
     * Actual rental checkout and expected return locations, dates and times.
     *
     * @var \Recranet\OTA\Type\VehicleRentalTransactionType\PickUpReturnDetailsAType[] $pickUpReturnDetails
     */
    private $pickUpReturnDetails = [
        
    ];

    /**
     * Vehicle info including size, class, make/model, vehicle asset number, etc. This is the actual vehicle being rented.
     *
     * @var \Recranet\OTA\Type\VehicleRentalTransactionType\VehicleAType $vehicle
     */
    private $vehicle = null;

    /**
     * This describes time, mileage and other charges for a specific rental agreement.
     *
     * @var \Recranet\OTA\Type\VehicleRentalRateType $rentalRate
     */
    private $rentalRate = null;

    /**
     * A collection of special equipment that is part of this reservation, along with the charges associated with this equipment.
     *
     * @var \Recranet\OTA\Type\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType[] $pricedEquips
     */
    private $pricedEquips = null;

    /**
     * A collection of fees associated with this rental.
     *
     * @var \Recranet\OTA\Type\VehicleChargePurposeType[] $fees
     */
    private $fees = null;

    /**
     * The anticipated total cost of a rental, the sum of the individual charges, optional charges, and associated fees.
     *
     * @var \Recranet\OTA\Type\VehicleRentalTransactionType\TotalChargeAType $totalCharge
     */
    private $totalCharge = null;

    /**
     * A confirmation number.
     *
     * @var \Recranet\OTA\Type\UniqueIDType $confID
     */
    private $confID = null;

    /**
     * A contract number.
     *
     * @var \Recranet\OTA\Type\UniqueIDType $contractID
     */
    private $contractID = null;

    /**
     * Adds as pickUpReturnDetails
     *
     * Actual rental checkout and expected return locations, dates and times.
     *
     * @return self
     * @param \Recranet\OTA\Type\VehicleRentalTransactionType\PickUpReturnDetailsAType $pickUpReturnDetails
     */
    public function addToPickUpReturnDetails(\Recranet\OTA\Type\VehicleRentalTransactionType\PickUpReturnDetailsAType $pickUpReturnDetails)
    {
        $this->pickUpReturnDetails[] = $pickUpReturnDetails;
        return $this;
    }

    /**
     * isset pickUpReturnDetails
     *
     * Actual rental checkout and expected return locations, dates and times.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPickUpReturnDetails($index)
    {
        return isset($this->pickUpReturnDetails[$index]);
    }

    /**
     * unset pickUpReturnDetails
     *
     * Actual rental checkout and expected return locations, dates and times.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPickUpReturnDetails($index)
    {
        unset($this->pickUpReturnDetails[$index]);
    }

    /**
     * Gets as pickUpReturnDetails
     *
     * Actual rental checkout and expected return locations, dates and times.
     *
     * @return \Recranet\OTA\Type\VehicleRentalTransactionType\PickUpReturnDetailsAType[]
     */
    public function getPickUpReturnDetails()
    {
        return $this->pickUpReturnDetails;
    }

    /**
     * Sets a new pickUpReturnDetails
     *
     * Actual rental checkout and expected return locations, dates and times.
     *
     * @param \Recranet\OTA\Type\VehicleRentalTransactionType\PickUpReturnDetailsAType[] $pickUpReturnDetails
     * @return self
     */
    public function setPickUpReturnDetails(array $pickUpReturnDetails = null)
    {
        $this->pickUpReturnDetails = $pickUpReturnDetails;
        return $this;
    }

    /**
     * Gets as vehicle
     *
     * Vehicle info including size, class, make/model, vehicle asset number, etc. This is the actual vehicle being rented.
     *
     * @return \Recranet\OTA\Type\VehicleRentalTransactionType\VehicleAType
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Sets a new vehicle
     *
     * Vehicle info including size, class, make/model, vehicle asset number, etc. This is the actual vehicle being rented.
     *
     * @param \Recranet\OTA\Type\VehicleRentalTransactionType\VehicleAType $vehicle
     * @return self
     */
    public function setVehicle(\Recranet\OTA\Type\VehicleRentalTransactionType\VehicleAType $vehicle)
    {
        $this->vehicle = $vehicle;
        return $this;
    }

    /**
     * Gets as rentalRate
     *
     * This describes time, mileage and other charges for a specific rental agreement.
     *
     * @return \Recranet\OTA\Type\VehicleRentalRateType
     */
    public function getRentalRate()
    {
        return $this->rentalRate;
    }

    /**
     * Sets a new rentalRate
     *
     * This describes time, mileage and other charges for a specific rental agreement.
     *
     * @param \Recranet\OTA\Type\VehicleRentalRateType $rentalRate
     * @return self
     */
    public function setRentalRate(?\Recranet\OTA\Type\VehicleRentalRateType $rentalRate = null)
    {
        $this->rentalRate = $rentalRate;
        return $this;
    }

    /**
     * Adds as pricedEquip
     *
     * A collection of special equipment that is part of this reservation, along with the charges associated with this equipment.
     *
     * @return self
     * @param \Recranet\OTA\Type\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType $pricedEquip
     */
    public function addToPricedEquips(\Recranet\OTA\Type\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType $pricedEquip)
    {
        $this->pricedEquips[] = $pricedEquip;
        return $this;
    }

    /**
     * isset pricedEquips
     *
     * A collection of special equipment that is part of this reservation, along with the charges associated with this equipment.
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
     * A collection of special equipment that is part of this reservation, along with the charges associated with this equipment.
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
     * A collection of special equipment that is part of this reservation, along with the charges associated with this equipment.
     *
     * @return \Recranet\OTA\Type\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType[]
     */
    public function getPricedEquips()
    {
        return $this->pricedEquips;
    }

    /**
     * Sets a new pricedEquips
     *
     * A collection of special equipment that is part of this reservation, along with the charges associated with this equipment.
     *
     * @param \Recranet\OTA\Type\VehicleRentalTransactionType\PricedEquipsAType\PricedEquipAType[] $pricedEquips
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
     * A collection of fees associated with this rental.
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
     * A collection of fees associated with this rental.
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
     * A collection of fees associated with this rental.
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
     * A collection of fees associated with this rental.
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
     * A collection of fees associated with this rental.
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
     * Gets as totalCharge
     *
     * The anticipated total cost of a rental, the sum of the individual charges, optional charges, and associated fees.
     *
     * @return \Recranet\OTA\Type\VehicleRentalTransactionType\TotalChargeAType
     */
    public function getTotalCharge()
    {
        return $this->totalCharge;
    }

    /**
     * Sets a new totalCharge
     *
     * The anticipated total cost of a rental, the sum of the individual charges, optional charges, and associated fees.
     *
     * @param \Recranet\OTA\Type\VehicleRentalTransactionType\TotalChargeAType $totalCharge
     * @return self
     */
    public function setTotalCharge(?\Recranet\OTA\Type\VehicleRentalTransactionType\TotalChargeAType $totalCharge = null)
    {
        $this->totalCharge = $totalCharge;
        return $this;
    }

    /**
     * Gets as confID
     *
     * A confirmation number.
     *
     * @return \Recranet\OTA\Type\UniqueIDType
     */
    public function getConfID()
    {
        return $this->confID;
    }

    /**
     * Sets a new confID
     *
     * A confirmation number.
     *
     * @param \Recranet\OTA\Type\UniqueIDType $confID
     * @return self
     */
    public function setConfID(?\Recranet\OTA\Type\UniqueIDType $confID = null)
    {
        $this->confID = $confID;
        return $this;
    }

    /**
     * Gets as contractID
     *
     * A contract number.
     *
     * @return \Recranet\OTA\Type\UniqueIDType
     */
    public function getContractID()
    {
        return $this->contractID;
    }

    /**
     * Sets a new contractID
     *
     * A contract number.
     *
     * @param \Recranet\OTA\Type\UniqueIDType $contractID
     * @return self
     */
    public function setContractID(?\Recranet\OTA\Type\UniqueIDType $contractID = null)
    {
        $this->contractID = $contractID;
        return $this;
    }
}

