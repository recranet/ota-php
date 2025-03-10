<?php

namespace Recranet\OTA\Type;

/**
 * Class representing RailRateQualifyingType
 *
 * Defines rate qualifying information such as travel purpose, promotion codes and discount types that may affect the fare.
 * XSD Type: RailRateQualifyingType
 */
class RailRateQualifyingType
{
    /**
     * Promotion code is the identifier used by the host to link directly with a specific named advertising campaign.
     *
     * @var string $promotionCode
     */
    private $promotionCode = null;

    /**
     * The travel purpose for the passenger.
     *
     * @var \Recranet\OTA\Type\TravelPurposeType $travelPurpose
     */
    private $travelPurpose = null;

    /**
     * A set of values that represent discounts, such AAA, AARP, Red Tour. Refer to OpenTravel Code List Discount Available (DIS).
     *
     * @var \Recranet\OTA\Type\RailRateQualifyingType\DiscountTypeAType $discountType
     */
    private $discountType = null;

    /**
     * Gets as promotionCode
     *
     * Promotion code is the identifier used by the host to link directly with a specific named advertising campaign.
     *
     * @return string
     */
    public function getPromotionCode()
    {
        return $this->promotionCode;
    }

    /**
     * Sets a new promotionCode
     *
     * Promotion code is the identifier used by the host to link directly with a specific named advertising campaign.
     *
     * @param string $promotionCode
     * @return self
     */
    public function setPromotionCode($promotionCode)
    {
        $this->promotionCode = $promotionCode;
        return $this;
    }

    /**
     * Gets as travelPurpose
     *
     * The travel purpose for the passenger.
     *
     * @return \Recranet\OTA\Type\TravelPurposeType
     */
    public function getTravelPurpose()
    {
        return $this->travelPurpose;
    }

    /**
     * Sets a new travelPurpose
     *
     * The travel purpose for the passenger.
     *
     * @param \Recranet\OTA\Type\TravelPurposeType $travelPurpose
     * @return self
     */
    public function setTravelPurpose(?\Recranet\OTA\Type\TravelPurposeType $travelPurpose = null)
    {
        $this->travelPurpose = $travelPurpose;
        return $this;
    }

    /**
     * Gets as discountType
     *
     * A set of values that represent discounts, such AAA, AARP, Red Tour. Refer to OpenTravel Code List Discount Available (DIS).
     *
     * @return \Recranet\OTA\Type\RailRateQualifyingType\DiscountTypeAType
     */
    public function getDiscountType()
    {
        return $this->discountType;
    }

    /**
     * Sets a new discountType
     *
     * A set of values that represent discounts, such AAA, AARP, Red Tour. Refer to OpenTravel Code List Discount Available (DIS).
     *
     * @param \Recranet\OTA\Type\RailRateQualifyingType\DiscountTypeAType $discountType
     * @return self
     */
    public function setDiscountType(?\Recranet\OTA\Type\RailRateQualifyingType\DiscountTypeAType $discountType = null)
    {
        $this->discountType = $discountType;
        return $this;
    }
}

