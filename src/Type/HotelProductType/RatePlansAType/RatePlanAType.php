<?php

namespace Recranet\OTA\Type\HotelProductType\RatePlansAType;

/**
 * Class representing RatePlanAType
 */
class RatePlanAType
{
    /**
     * Specifies the category of rate plan. Refer to OpenTravel Code List Rate Plan Type (RPT).
     *
     * @var string $ratePlanType
     */
    private $ratePlanType = null;

    /**
     * Provides the name of the rate plan or group. Typically used with RatePlanType to further describe the rate plan.
     *
     * @var string $ratePlanName
     */
    private $ratePlanName = null;

    /**
     * A code that identifies the rate plan. This may be the sending system's rate plan code or the receiving system's rate plan code depending on the trading partner agreement.
     *
     * @var string $ratePlanCode
     */
    private $ratePlanCode = null;

    /**
     * Specifies the currency code of the rate plan code. An ISO 4217 (3) alpha character code.
     *
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * Specifies who is to collect the payment.
     *
     * @var string $paymentCollection
     */
    private $paymentCollection = null;

    /**
     * Specifies the number of guests included in the base room rate based on adult occupancy.
     *
     * @var int $baseOccupancy
     */
    private $baseOccupancy = null;

    /**
     * The date range for which this rate plan is offered for sell.
     *
     * @var \Recranet\OTA\Type\HotelProductType\RatePlansAType\RatePlanAType\SellDateRangeAType $sellDateRange
     */
    private $sellDateRange = null;

    /**
     * The date range for which this rate plan is offered for guest stays.
     *
     * @var \Recranet\OTA\Type\HotelProductType\RatePlansAType\RatePlanAType\StayDateRangeAType $stayDateRange
     */
    private $stayDateRange = null;

    /**
     * A collection of rate plan references.
     *
     * @var \Recranet\OTA\Type\HotelProductType\RatePlansAType\RatePlanAType\RatePlanRefsAType\RatePlanRefAType[] $ratePlanRefs
     */
    private $ratePlanRefs = null;

    /**
     * A collection of description information.
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $descriptions
     */
    private $descriptions = null;

    /**
     * Gets as ratePlanType
     *
     * Specifies the category of rate plan. Refer to OpenTravel Code List Rate Plan Type (RPT).
     *
     * @return string
     */
    public function getRatePlanType()
    {
        return $this->ratePlanType;
    }

    /**
     * Sets a new ratePlanType
     *
     * Specifies the category of rate plan. Refer to OpenTravel Code List Rate Plan Type (RPT).
     *
     * @param string $ratePlanType
     * @return self
     */
    public function setRatePlanType($ratePlanType)
    {
        $this->ratePlanType = $ratePlanType;
        return $this;
    }

    /**
     * Gets as ratePlanName
     *
     * Provides the name of the rate plan or group. Typically used with RatePlanType to further describe the rate plan.
     *
     * @return string
     */
    public function getRatePlanName()
    {
        return $this->ratePlanName;
    }

    /**
     * Sets a new ratePlanName
     *
     * Provides the name of the rate plan or group. Typically used with RatePlanType to further describe the rate plan.
     *
     * @param string $ratePlanName
     * @return self
     */
    public function setRatePlanName($ratePlanName)
    {
        $this->ratePlanName = $ratePlanName;
        return $this;
    }

    /**
     * Gets as ratePlanCode
     *
     * A code that identifies the rate plan. This may be the sending system's rate plan code or the receiving system's rate plan code depending on the trading partner agreement.
     *
     * @return string
     */
    public function getRatePlanCode()
    {
        return $this->ratePlanCode;
    }

    /**
     * Sets a new ratePlanCode
     *
     * A code that identifies the rate plan. This may be the sending system's rate plan code or the receiving system's rate plan code depending on the trading partner agreement.
     *
     * @param string $ratePlanCode
     * @return self
     */
    public function setRatePlanCode($ratePlanCode)
    {
        $this->ratePlanCode = $ratePlanCode;
        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * Specifies the currency code of the rate plan code. An ISO 4217 (3) alpha character code.
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
     * Specifies the currency code of the rate plan code. An ISO 4217 (3) alpha character code.
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
     * Gets as paymentCollection
     *
     * Specifies who is to collect the payment.
     *
     * @return string
     */
    public function getPaymentCollection()
    {
        return $this->paymentCollection;
    }

    /**
     * Sets a new paymentCollection
     *
     * Specifies who is to collect the payment.
     *
     * @param string $paymentCollection
     * @return self
     */
    public function setPaymentCollection($paymentCollection)
    {
        $this->paymentCollection = $paymentCollection;
        return $this;
    }

    /**
     * Gets as baseOccupancy
     *
     * Specifies the number of guests included in the base room rate based on adult occupancy.
     *
     * @return int
     */
    public function getBaseOccupancy()
    {
        return $this->baseOccupancy;
    }

    /**
     * Sets a new baseOccupancy
     *
     * Specifies the number of guests included in the base room rate based on adult occupancy.
     *
     * @param int $baseOccupancy
     * @return self
     */
    public function setBaseOccupancy($baseOccupancy)
    {
        $this->baseOccupancy = $baseOccupancy;
        return $this;
    }

    /**
     * Gets as sellDateRange
     *
     * The date range for which this rate plan is offered for sell.
     *
     * @return \Recranet\OTA\Type\HotelProductType\RatePlansAType\RatePlanAType\SellDateRangeAType
     */
    public function getSellDateRange()
    {
        return $this->sellDateRange;
    }

    /**
     * Sets a new sellDateRange
     *
     * The date range for which this rate plan is offered for sell.
     *
     * @param \Recranet\OTA\Type\HotelProductType\RatePlansAType\RatePlanAType\SellDateRangeAType $sellDateRange
     * @return self
     */
    public function setSellDateRange(?\Recranet\OTA\Type\HotelProductType\RatePlansAType\RatePlanAType\SellDateRangeAType $sellDateRange = null)
    {
        $this->sellDateRange = $sellDateRange;
        return $this;
    }

    /**
     * Gets as stayDateRange
     *
     * The date range for which this rate plan is offered for guest stays.
     *
     * @return \Recranet\OTA\Type\HotelProductType\RatePlansAType\RatePlanAType\StayDateRangeAType
     */
    public function getStayDateRange()
    {
        return $this->stayDateRange;
    }

    /**
     * Sets a new stayDateRange
     *
     * The date range for which this rate plan is offered for guest stays.
     *
     * @param \Recranet\OTA\Type\HotelProductType\RatePlansAType\RatePlanAType\StayDateRangeAType $stayDateRange
     * @return self
     */
    public function setStayDateRange(?\Recranet\OTA\Type\HotelProductType\RatePlansAType\RatePlanAType\StayDateRangeAType $stayDateRange = null)
    {
        $this->stayDateRange = $stayDateRange;
        return $this;
    }

    /**
     * Adds as ratePlanRef
     *
     * A collection of rate plan references.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelProductType\RatePlansAType\RatePlanAType\RatePlanRefsAType\RatePlanRefAType $ratePlanRef
     */
    public function addToRatePlanRefs(\Recranet\OTA\Type\HotelProductType\RatePlansAType\RatePlanAType\RatePlanRefsAType\RatePlanRefAType $ratePlanRef)
    {
        $this->ratePlanRefs[] = $ratePlanRef;
        return $this;
    }

    /**
     * isset ratePlanRefs
     *
     * A collection of rate plan references.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRatePlanRefs($index)
    {
        return isset($this->ratePlanRefs[$index]);
    }

    /**
     * unset ratePlanRefs
     *
     * A collection of rate plan references.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRatePlanRefs($index)
    {
        unset($this->ratePlanRefs[$index]);
    }

    /**
     * Gets as ratePlanRefs
     *
     * A collection of rate plan references.
     *
     * @return \Recranet\OTA\Type\HotelProductType\RatePlansAType\RatePlanAType\RatePlanRefsAType\RatePlanRefAType[]
     */
    public function getRatePlanRefs()
    {
        return $this->ratePlanRefs;
    }

    /**
     * Sets a new ratePlanRefs
     *
     * A collection of rate plan references.
     *
     * @param \Recranet\OTA\Type\HotelProductType\RatePlansAType\RatePlanAType\RatePlanRefsAType\RatePlanRefAType[] $ratePlanRefs
     * @return self
     */
    public function setRatePlanRefs(array $ratePlanRefs = null)
    {
        $this->ratePlanRefs = $ratePlanRefs;
        return $this;
    }

    /**
     * Adds as description
     *
     * A collection of description information.
     *
     * @return self
     * @param \Recranet\OTA\Type\ParagraphType $description
     */
    public function addToDescriptions(\Recranet\OTA\Type\ParagraphType $description)
    {
        $this->descriptions[] = $description;
        return $this;
    }

    /**
     * isset descriptions
     *
     * A collection of description information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescriptions($index)
    {
        return isset($this->descriptions[$index]);
    }

    /**
     * unset descriptions
     *
     * A collection of description information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescriptions($index)
    {
        unset($this->descriptions[$index]);
    }

    /**
     * Gets as descriptions
     *
     * A collection of description information.
     *
     * @return \Recranet\OTA\Type\ParagraphType[]
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * Sets a new descriptions
     *
     * A collection of description information.
     *
     * @param \Recranet\OTA\Type\ParagraphType[] $descriptions
     * @return self
     */
    public function setDescriptions(array $descriptions = null)
    {
        $this->descriptions = $descriptions;
        return $this;
    }
}

