<?php

namespace Recranet\OTA;

/**
 * Class representing RevenueCategoryType
 *
 * The classifications of revenue data associated with the StayInfo report. A RevenueCategory provide a way to classify guest financial stay data and analyze guest spending for a certain category (e.g., food and beverage, room, etc.)
 * XSD Type: RevenueCategoryType
 */
class RevenueCategoryType
{
    /**
     * Describes the type of revenue generated. Refer to OpenTravel Code List Revenue Category Code (RCC).
     *
     * @var string $revenueCategoryCode
     */
    private $revenueCategoryCode = null;

    /**
     * @var \Recranet\OTA\RevenueCategoryType\SummaryAmountAType $summaryAmount
     */
    private $summaryAmount = null;

    /**
     * A collection of revenue details.
     *
     * @var \Recranet\OTA\RevenueDetailType[] $revenueDetails
     */
    private $revenueDetails = null;

    /**
     * Gets as revenueCategoryCode
     *
     * Describes the type of revenue generated. Refer to OpenTravel Code List Revenue Category Code (RCC).
     *
     * @return string
     */
    public function getRevenueCategoryCode()
    {
        return $this->revenueCategoryCode;
    }

    /**
     * Sets a new revenueCategoryCode
     *
     * Describes the type of revenue generated. Refer to OpenTravel Code List Revenue Category Code (RCC).
     *
     * @param string $revenueCategoryCode
     * @return self
     */
    public function setRevenueCategoryCode($revenueCategoryCode)
    {
        $this->revenueCategoryCode = $revenueCategoryCode;
        return $this;
    }

    /**
     * Gets as summaryAmount
     *
     * @return \Recranet\OTA\RevenueCategoryType\SummaryAmountAType
     */
    public function getSummaryAmount()
    {
        return $this->summaryAmount;
    }

    /**
     * Sets a new summaryAmount
     *
     * @param \Recranet\OTA\RevenueCategoryType\SummaryAmountAType $summaryAmount
     * @return self
     */
    public function setSummaryAmount(?\Recranet\OTA\RevenueCategoryType\SummaryAmountAType $summaryAmount = null)
    {
        $this->summaryAmount = $summaryAmount;
        return $this;
    }

    /**
     * Adds as revenueDetail
     *
     * A collection of revenue details.
     *
     * @return self
     * @param \Recranet\OTA\RevenueDetailType $revenueDetail
     */
    public function addToRevenueDetails(\Recranet\OTA\RevenueDetailType $revenueDetail)
    {
        $this->revenueDetails[] = $revenueDetail;
        return $this;
    }

    /**
     * isset revenueDetails
     *
     * A collection of revenue details.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRevenueDetails($index)
    {
        return isset($this->revenueDetails[$index]);
    }

    /**
     * unset revenueDetails
     *
     * A collection of revenue details.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRevenueDetails($index)
    {
        unset($this->revenueDetails[$index]);
    }

    /**
     * Gets as revenueDetails
     *
     * A collection of revenue details.
     *
     * @return \Recranet\OTA\RevenueDetailType[]
     */
    public function getRevenueDetails()
    {
        return $this->revenueDetails;
    }

    /**
     * Sets a new revenueDetails
     *
     * A collection of revenue details.
     *
     * @param \Recranet\OTA\RevenueDetailType[] $revenueDetails
     * @return self
     */
    public function setRevenueDetails(array $revenueDetails = null)
    {
        $this->revenueDetails = $revenueDetails;
        return $this;
    }
}

