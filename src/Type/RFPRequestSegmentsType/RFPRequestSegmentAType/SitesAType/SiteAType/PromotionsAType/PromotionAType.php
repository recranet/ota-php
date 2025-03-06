<?php

namespace Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType\PromotionsAType;

/**
 * Class representing PromotionAType
 */
class PromotionAType
{
    /**
     * When true this notifies the receiving application that a user is requesting this promotion (e.g. internal rebates) if available.
     *
     * @var bool $userAcknowledgementIndicator
     */
    private $userAcknowledgementIndicator = null;

    /**
     * A published code defining a specific site promotion that is proprietary to the organization.
     *
     * @var string $promotionCode
     */
    private $promotionCode = null;

    /**
     * This is the number of advertised rooms available for this promotion.
     *
     * @var int $advertisedRoomQuantity
     */
    private $advertisedRoomQuantity = null;

    /**
     * If a rate range is advertised this is the high end.
     *
     * @var float $advertisedHighAmount
     */
    private $advertisedHighAmount = null;

    /**
     * If a rate range is advertised this is the low end. If there is not a range, AdvertisedLowAmount should be used.
     *
     * @var float $advertisedLowAmount
     */
    private $advertisedLowAmount = null;

    /**
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * The ISO 4217 standard "minor unit" for the number of decimal places for a particular currency.
     * Implementer: The ISO 4217 standard "minor unit" is typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @var int $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * This is the date range the rooms are available at the hotel.
     *
     * @var \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType\PromotionsAType\PromotionAType\AvailableDateRangeAType $availableDateRange
     */
    private $availableDateRange = null;

    /**
     * This is the date range for which the promotion is offered.
     *
     * @var \Recranet\OTA\Type\DateTimeSpanType $offeredDateRange
     */
    private $offeredDateRange = null;

    /**
     * Used to describe a particular promotion.
     *
     * @var \Recranet\OTA\Type\ParagraphType $description
     */
    private $description = null;

    /**
     * Gets as userAcknowledgementIndicator
     *
     * When true this notifies the receiving application that a user is requesting this promotion (e.g. internal rebates) if available.
     *
     * @return bool
     */
    public function getUserAcknowledgementIndicator()
    {
        return $this->userAcknowledgementIndicator;
    }

    /**
     * Sets a new userAcknowledgementIndicator
     *
     * When true this notifies the receiving application that a user is requesting this promotion (e.g. internal rebates) if available.
     *
     * @param bool $userAcknowledgementIndicator
     * @return self
     */
    public function setUserAcknowledgementIndicator($userAcknowledgementIndicator)
    {
        $this->userAcknowledgementIndicator = $userAcknowledgementIndicator;
        return $this;
    }

    /**
     * Gets as promotionCode
     *
     * A published code defining a specific site promotion that is proprietary to the organization.
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
     * A published code defining a specific site promotion that is proprietary to the organization.
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
     * Gets as advertisedRoomQuantity
     *
     * This is the number of advertised rooms available for this promotion.
     *
     * @return int
     */
    public function getAdvertisedRoomQuantity()
    {
        return $this->advertisedRoomQuantity;
    }

    /**
     * Sets a new advertisedRoomQuantity
     *
     * This is the number of advertised rooms available for this promotion.
     *
     * @param int $advertisedRoomQuantity
     * @return self
     */
    public function setAdvertisedRoomQuantity($advertisedRoomQuantity)
    {
        $this->advertisedRoomQuantity = $advertisedRoomQuantity;
        return $this;
    }

    /**
     * Gets as advertisedHighAmount
     *
     * If a rate range is advertised this is the high end.
     *
     * @return float
     */
    public function getAdvertisedHighAmount()
    {
        return $this->advertisedHighAmount;
    }

    /**
     * Sets a new advertisedHighAmount
     *
     * If a rate range is advertised this is the high end.
     *
     * @param float $advertisedHighAmount
     * @return self
     */
    public function setAdvertisedHighAmount($advertisedHighAmount)
    {
        $this->advertisedHighAmount = $advertisedHighAmount;
        return $this;
    }

    /**
     * Gets as advertisedLowAmount
     *
     * If a rate range is advertised this is the low end. If there is not a range, AdvertisedLowAmount should be used.
     *
     * @return float
     */
    public function getAdvertisedLowAmount()
    {
        return $this->advertisedLowAmount;
    }

    /**
     * Sets a new advertisedLowAmount
     *
     * If a rate range is advertised this is the low end. If there is not a range, AdvertisedLowAmount should be used.
     *
     * @param float $advertisedLowAmount
     * @return self
     */
    public function setAdvertisedLowAmount($advertisedLowAmount)
    {
        $this->advertisedLowAmount = $advertisedLowAmount;
        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Gets as decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a particular currency.
     * Implementer: The ISO 4217 standard "minor unit" is typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @return int
     */
    public function getDecimalPlaces()
    {
        return $this->decimalPlaces;
    }

    /**
     * Sets a new decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a particular currency.
     * Implementer: The ISO 4217 standard "minor unit" is typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @param int $decimalPlaces
     * @return self
     */
    public function setDecimalPlaces($decimalPlaces)
    {
        $this->decimalPlaces = $decimalPlaces;
        return $this;
    }

    /**
     * Gets as availableDateRange
     *
     * This is the date range the rooms are available at the hotel.
     *
     * @return \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType\PromotionsAType\PromotionAType\AvailableDateRangeAType
     */
    public function getAvailableDateRange()
    {
        return $this->availableDateRange;
    }

    /**
     * Sets a new availableDateRange
     *
     * This is the date range the rooms are available at the hotel.
     *
     * @param \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType\PromotionsAType\PromotionAType\AvailableDateRangeAType $availableDateRange
     * @return self
     */
    public function setAvailableDateRange(\Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType\PromotionsAType\PromotionAType\AvailableDateRangeAType $availableDateRange)
    {
        $this->availableDateRange = $availableDateRange;
        return $this;
    }

    /**
     * Gets as offeredDateRange
     *
     * This is the date range for which the promotion is offered.
     *
     * @return \Recranet\OTA\Type\DateTimeSpanType
     */
    public function getOfferedDateRange()
    {
        return $this->offeredDateRange;
    }

    /**
     * Sets a new offeredDateRange
     *
     * This is the date range for which the promotion is offered.
     *
     * @param \Recranet\OTA\Type\DateTimeSpanType $offeredDateRange
     * @return self
     */
    public function setOfferedDateRange(\Recranet\OTA\Type\DateTimeSpanType $offeredDateRange)
    {
        $this->offeredDateRange = $offeredDateRange;
        return $this;
    }

    /**
     * Gets as description
     *
     * Used to describe a particular promotion.
     *
     * @return \Recranet\OTA\Type\ParagraphType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Used to describe a particular promotion.
     *
     * @param \Recranet\OTA\Type\ParagraphType $description
     * @return self
     */
    public function setDescription(\Recranet\OTA\Type\ParagraphType $description)
    {
        $this->description = $description;
        return $this;
    }
}

