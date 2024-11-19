<?php

namespace Recranet\OTA;

/**
 * Class representing RailPriceBreakdownType
 *
 * Details about the rail price, including basic fare, adjustments, discounts, ancillary charges, terms and conditions, fees and taxes.
 * XSD Type: RailPriceBreakdownType
 */
class RailPriceBreakdownType extends RailFareType
{
    /**
     * Fare adjustments based on accommodation type.
     *
     * @var \Recranet\OTA\RailPriceBreakdownType\AccommodationAdjustmentAType $accommodationAdjustment
     */
    private $accommodationAdjustment = null;

    /**
     * Other fare qualifier adjustments.
     *
     * @var \Recranet\OTA\CodeAmountType[] $fareQualifierAdjustment
     */
    private $fareQualifierAdjustment = [
        
    ];

    /**
     * Fare promotions and other qualified discounts.
     *
     * @var \Recranet\OTA\RailPriceBreakdownType\DiscountClassAType[] $discountClass
     */
    private $discountClass = [
        
    ];

    /**
     * Ancillary product and service charges.
     *
     * @var \Recranet\OTA\CodeAmountType[] $ancillaryCharge
     */
    private $ancillaryCharge = [
        
    ];

    /**
     * Applicable Fee code and associated amount.
     *
     * @var \Recranet\OTA\CodeAmountType[] $fee
     */
    private $fee = [
        
    ];

    /**
     * Applicable tax code and associated amount.
     *
     * @var \Recranet\OTA\CodeAmountType[] $tax
     */
    private $tax = [
        
    ];

    /**
     * Gets as accommodationAdjustment
     *
     * Fare adjustments based on accommodation type.
     *
     * @return \Recranet\OTA\RailPriceBreakdownType\AccommodationAdjustmentAType
     */
    public function getAccommodationAdjustment()
    {
        return $this->accommodationAdjustment;
    }

    /**
     * Sets a new accommodationAdjustment
     *
     * Fare adjustments based on accommodation type.
     *
     * @param \Recranet\OTA\RailPriceBreakdownType\AccommodationAdjustmentAType $accommodationAdjustment
     * @return self
     */
    public function setAccommodationAdjustment(?\Recranet\OTA\RailPriceBreakdownType\AccommodationAdjustmentAType $accommodationAdjustment = null)
    {
        $this->accommodationAdjustment = $accommodationAdjustment;
        return $this;
    }

    /**
     * Adds as fareQualifierAdjustment
     *
     * Other fare qualifier adjustments.
     *
     * @return self
     * @param \Recranet\OTA\CodeAmountType $fareQualifierAdjustment
     */
    public function addToFareQualifierAdjustment(\Recranet\OTA\CodeAmountType $fareQualifierAdjustment)
    {
        $this->fareQualifierAdjustment[] = $fareQualifierAdjustment;
        return $this;
    }

    /**
     * isset fareQualifierAdjustment
     *
     * Other fare qualifier adjustments.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFareQualifierAdjustment($index)
    {
        return isset($this->fareQualifierAdjustment[$index]);
    }

    /**
     * unset fareQualifierAdjustment
     *
     * Other fare qualifier adjustments.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFareQualifierAdjustment($index)
    {
        unset($this->fareQualifierAdjustment[$index]);
    }

    /**
     * Gets as fareQualifierAdjustment
     *
     * Other fare qualifier adjustments.
     *
     * @return \Recranet\OTA\CodeAmountType[]
     */
    public function getFareQualifierAdjustment()
    {
        return $this->fareQualifierAdjustment;
    }

    /**
     * Sets a new fareQualifierAdjustment
     *
     * Other fare qualifier adjustments.
     *
     * @param \Recranet\OTA\CodeAmountType[] $fareQualifierAdjustment
     * @return self
     */
    public function setFareQualifierAdjustment(array $fareQualifierAdjustment = null)
    {
        $this->fareQualifierAdjustment = $fareQualifierAdjustment;
        return $this;
    }

    /**
     * Adds as discountClass
     *
     * Fare promotions and other qualified discounts.
     *
     * @return self
     * @param \Recranet\OTA\RailPriceBreakdownType\DiscountClassAType $discountClass
     */
    public function addToDiscountClass(\Recranet\OTA\RailPriceBreakdownType\DiscountClassAType $discountClass)
    {
        $this->discountClass[] = $discountClass;
        return $this;
    }

    /**
     * isset discountClass
     *
     * Fare promotions and other qualified discounts.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDiscountClass($index)
    {
        return isset($this->discountClass[$index]);
    }

    /**
     * unset discountClass
     *
     * Fare promotions and other qualified discounts.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDiscountClass($index)
    {
        unset($this->discountClass[$index]);
    }

    /**
     * Gets as discountClass
     *
     * Fare promotions and other qualified discounts.
     *
     * @return \Recranet\OTA\RailPriceBreakdownType\DiscountClassAType[]
     */
    public function getDiscountClass()
    {
        return $this->discountClass;
    }

    /**
     * Sets a new discountClass
     *
     * Fare promotions and other qualified discounts.
     *
     * @param \Recranet\OTA\RailPriceBreakdownType\DiscountClassAType[] $discountClass
     * @return self
     */
    public function setDiscountClass(array $discountClass = null)
    {
        $this->discountClass = $discountClass;
        return $this;
    }

    /**
     * Adds as ancillaryCharge
     *
     * Ancillary product and service charges.
     *
     * @return self
     * @param \Recranet\OTA\CodeAmountType $ancillaryCharge
     */
    public function addToAncillaryCharge(\Recranet\OTA\CodeAmountType $ancillaryCharge)
    {
        $this->ancillaryCharge[] = $ancillaryCharge;
        return $this;
    }

    /**
     * isset ancillaryCharge
     *
     * Ancillary product and service charges.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAncillaryCharge($index)
    {
        return isset($this->ancillaryCharge[$index]);
    }

    /**
     * unset ancillaryCharge
     *
     * Ancillary product and service charges.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAncillaryCharge($index)
    {
        unset($this->ancillaryCharge[$index]);
    }

    /**
     * Gets as ancillaryCharge
     *
     * Ancillary product and service charges.
     *
     * @return \Recranet\OTA\CodeAmountType[]
     */
    public function getAncillaryCharge()
    {
        return $this->ancillaryCharge;
    }

    /**
     * Sets a new ancillaryCharge
     *
     * Ancillary product and service charges.
     *
     * @param \Recranet\OTA\CodeAmountType[] $ancillaryCharge
     * @return self
     */
    public function setAncillaryCharge(array $ancillaryCharge = null)
    {
        $this->ancillaryCharge = $ancillaryCharge;
        return $this;
    }

    /**
     * Adds as fee
     *
     * Applicable Fee code and associated amount.
     *
     * @return self
     * @param \Recranet\OTA\CodeAmountType $fee
     */
    public function addToFee(\Recranet\OTA\CodeAmountType $fee)
    {
        $this->fee[] = $fee;
        return $this;
    }

    /**
     * isset fee
     *
     * Applicable Fee code and associated amount.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFee($index)
    {
        return isset($this->fee[$index]);
    }

    /**
     * unset fee
     *
     * Applicable Fee code and associated amount.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFee($index)
    {
        unset($this->fee[$index]);
    }

    /**
     * Gets as fee
     *
     * Applicable Fee code and associated amount.
     *
     * @return \Recranet\OTA\CodeAmountType[]
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * Sets a new fee
     *
     * Applicable Fee code and associated amount.
     *
     * @param \Recranet\OTA\CodeAmountType[] $fee
     * @return self
     */
    public function setFee(array $fee = null)
    {
        $this->fee = $fee;
        return $this;
    }

    /**
     * Adds as tax
     *
     * Applicable tax code and associated amount.
     *
     * @return self
     * @param \Recranet\OTA\CodeAmountType $tax
     */
    public function addToTax(\Recranet\OTA\CodeAmountType $tax)
    {
        $this->tax[] = $tax;
        return $this;
    }

    /**
     * isset tax
     *
     * Applicable tax code and associated amount.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTax($index)
    {
        return isset($this->tax[$index]);
    }

    /**
     * unset tax
     *
     * Applicable tax code and associated amount.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTax($index)
    {
        unset($this->tax[$index]);
    }

    /**
     * Gets as tax
     *
     * Applicable tax code and associated amount.
     *
     * @return \Recranet\OTA\CodeAmountType[]
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Sets a new tax
     *
     * Applicable tax code and associated amount.
     *
     * @param \Recranet\OTA\CodeAmountType[] $tax
     * @return self
     */
    public function setTax(array $tax = null)
    {
        $this->tax = $tax;
        return $this;
    }
}

