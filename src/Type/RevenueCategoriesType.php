<?php

namespace Recranet\OTA\Type;

/**
 * Class representing RevenueCategoriesType
 *
 * A collection of RevenueCategory classes that detail the categories of revenue data associated with the StayInfo report.
 * XSD Type: RevenueCategoriesType
 */
class RevenueCategoriesType
{
    /**
     * The classifications of revenue data associated with the StayInfo report. A RevenueCategory provide a way to classify guest financial stay data and analyze guest spending for a certain category (e.g., food and beverage, room, etc.)
     *
     * @var \Recranet\OTA\Type\RevenueCategoryType[] $revenueCategory
     */
    private $revenueCategory = [
        
    ];

    /**
     * Adds as revenueCategory
     *
     * The classifications of revenue data associated with the StayInfo report. A RevenueCategory provide a way to classify guest financial stay data and analyze guest spending for a certain category (e.g., food and beverage, room, etc.)
     *
     * @return self
     * @param \Recranet\OTA\Type\RevenueCategoryType $revenueCategory
     */
    public function addToRevenueCategory(\Recranet\OTA\Type\RevenueCategoryType $revenueCategory)
    {
        $this->revenueCategory[] = $revenueCategory;
        return $this;
    }

    /**
     * isset revenueCategory
     *
     * The classifications of revenue data associated with the StayInfo report. A RevenueCategory provide a way to classify guest financial stay data and analyze guest spending for a certain category (e.g., food and beverage, room, etc.)
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRevenueCategory($index)
    {
        return isset($this->revenueCategory[$index]);
    }

    /**
     * unset revenueCategory
     *
     * The classifications of revenue data associated with the StayInfo report. A RevenueCategory provide a way to classify guest financial stay data and analyze guest spending for a certain category (e.g., food and beverage, room, etc.)
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRevenueCategory($index)
    {
        unset($this->revenueCategory[$index]);
    }

    /**
     * Gets as revenueCategory
     *
     * The classifications of revenue data associated with the StayInfo report. A RevenueCategory provide a way to classify guest financial stay data and analyze guest spending for a certain category (e.g., food and beverage, room, etc.)
     *
     * @return \Recranet\OTA\Type\RevenueCategoryType[]
     */
    public function getRevenueCategory()
    {
        return $this->revenueCategory;
    }

    /**
     * Sets a new revenueCategory
     *
     * The classifications of revenue data associated with the StayInfo report. A RevenueCategory provide a way to classify guest financial stay data and analyze guest spending for a certain category (e.g., food and beverage, room, etc.)
     *
     * @param \Recranet\OTA\Type\RevenueCategoryType[] $revenueCategory
     * @return self
     */
    public function setRevenueCategory(array $revenueCategory)
    {
        $this->revenueCategory = $revenueCategory;
        return $this;
    }
}

