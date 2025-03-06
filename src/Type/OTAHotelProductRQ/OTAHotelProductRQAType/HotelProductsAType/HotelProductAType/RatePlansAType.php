<?php

namespace Recranet\OTA\Type\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType;

/**
 * Class representing RatePlansAType
 */
class RatePlansAType
{
    /**
     * When true, send all rate plans. When false, only send the rate plan(s) requested.
     *
     * @var bool $sendAllInd
     */
    private $sendAllInd = null;

    /**
     * Specifies the amount of content that should be returned in the response, such as the full details or just the unique reference.
     *
     * @var string $contentLevel
     */
    private $contentLevel = null;

    /**
     * An individual rate plan.
     *
     * @var \Recranet\OTA\Type\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\RatePlansAType\RatePlanAType[] $ratePlan
     */
    private $ratePlan = [
        
    ];

    /**
     * Gets as sendAllInd
     *
     * When true, send all rate plans. When false, only send the rate plan(s) requested.
     *
     * @return bool
     */
    public function getSendAllInd()
    {
        return $this->sendAllInd;
    }

    /**
     * Sets a new sendAllInd
     *
     * When true, send all rate plans. When false, only send the rate plan(s) requested.
     *
     * @param bool $sendAllInd
     * @return self
     */
    public function setSendAllInd($sendAllInd)
    {
        $this->sendAllInd = $sendAllInd;
        return $this;
    }

    /**
     * Gets as contentLevel
     *
     * Specifies the amount of content that should be returned in the response, such as the full details or just the unique reference.
     *
     * @return string
     */
    public function getContentLevel()
    {
        return $this->contentLevel;
    }

    /**
     * Sets a new contentLevel
     *
     * Specifies the amount of content that should be returned in the response, such as the full details or just the unique reference.
     *
     * @param string $contentLevel
     * @return self
     */
    public function setContentLevel($contentLevel)
    {
        $this->contentLevel = $contentLevel;
        return $this;
    }

    /**
     * Adds as ratePlan
     *
     * An individual rate plan.
     *
     * @return self
     * @param \Recranet\OTA\Type\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\RatePlansAType\RatePlanAType $ratePlan
     */
    public function addToRatePlan(\Recranet\OTA\Type\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\RatePlansAType\RatePlanAType $ratePlan)
    {
        $this->ratePlan[] = $ratePlan;
        return $this;
    }

    /**
     * isset ratePlan
     *
     * An individual rate plan.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRatePlan($index)
    {
        return isset($this->ratePlan[$index]);
    }

    /**
     * unset ratePlan
     *
     * An individual rate plan.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRatePlan($index)
    {
        unset($this->ratePlan[$index]);
    }

    /**
     * Gets as ratePlan
     *
     * An individual rate plan.
     *
     * @return \Recranet\OTA\Type\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\RatePlansAType\RatePlanAType[]
     */
    public function getRatePlan()
    {
        return $this->ratePlan;
    }

    /**
     * Sets a new ratePlan
     *
     * An individual rate plan.
     *
     * @param \Recranet\OTA\Type\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\RatePlansAType\RatePlanAType[] $ratePlan
     * @return self
     */
    public function setRatePlan(array $ratePlan = null)
    {
        $this->ratePlan = $ratePlan;
        return $this;
    }
}

