<?php

namespace Recranet\OTA\Type;

/**
 * Class representing FareSummaryTypeDEPRECATEType
 *
 * Defines summary information about the rail fare including amount and any discounts applied.
 * XSD Type: FareSummaryType_DEPRECATE
 */
class FareSummaryTypeDEPRECATEType
{
    /**
     * The total rail fare including any discounts.
     *
     * @var \Recranet\OTA\Type\FareSummaryTypeDEPRECATEType\TotalFareAType $totalFare
     */
    private $totalFare = null;

    /**
     * A collection of discounts applied to the total rail fare.
     *
     * @var \Recranet\OTA\Type\FareSummaryTypeDEPRECATEType\DiscountAType[] $discount
     */
    private $discount = [
        
    ];

    /**
     * Gets as totalFare
     *
     * The total rail fare including any discounts.
     *
     * @return \Recranet\OTA\Type\FareSummaryTypeDEPRECATEType\TotalFareAType
     */
    public function getTotalFare()
    {
        return $this->totalFare;
    }

    /**
     * Sets a new totalFare
     *
     * The total rail fare including any discounts.
     *
     * @param \Recranet\OTA\Type\FareSummaryTypeDEPRECATEType\TotalFareAType $totalFare
     * @return self
     */
    public function setTotalFare(\Recranet\OTA\Type\FareSummaryTypeDEPRECATEType\TotalFareAType $totalFare)
    {
        $this->totalFare = $totalFare;
        return $this;
    }

    /**
     * Adds as discount
     *
     * A collection of discounts applied to the total rail fare.
     *
     * @return self
     * @param \Recranet\OTA\Type\FareSummaryTypeDEPRECATEType\DiscountAType $discount
     */
    public function addToDiscount(\Recranet\OTA\Type\FareSummaryTypeDEPRECATEType\DiscountAType $discount)
    {
        $this->discount[] = $discount;
        return $this;
    }

    /**
     * isset discount
     *
     * A collection of discounts applied to the total rail fare.
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
     * A collection of discounts applied to the total rail fare.
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
     * A collection of discounts applied to the total rail fare.
     *
     * @return \Recranet\OTA\Type\FareSummaryTypeDEPRECATEType\DiscountAType[]
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Sets a new discount
     *
     * A collection of discounts applied to the total rail fare.
     *
     * @param \Recranet\OTA\Type\FareSummaryTypeDEPRECATEType\DiscountAType[] $discount
     * @return self
     */
    public function setDiscount(array $discount = null)
    {
        $this->discount = $discount;
        return $this;
    }
}

