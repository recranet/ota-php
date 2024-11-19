<?php

namespace Recranet\OTA\StatisticApplicationSetType;

/**
 * Class representing CountCategorySummariesAType
 *
 * A collection of CountCategorySummaryType elements.
 */
class CountCategorySummariesAType
{
    /**
     * This element has count data for each count category, identified using OpenTravel Code List CNT, such as number of guests, rooms occupied, etc.
     *
     * @var \Recranet\OTA\StatisticApplicationSetType\CountCategorySummariesAType\CountCategorySummaryAType[] $countCategorySummary
     */
    private $countCategorySummary = [
        
    ];

    /**
     * Adds as countCategorySummary
     *
     * This element has count data for each count category, identified using OpenTravel Code List CNT, such as number of guests, rooms occupied, etc.
     *
     * @return self
     * @param \Recranet\OTA\StatisticApplicationSetType\CountCategorySummariesAType\CountCategorySummaryAType $countCategorySummary
     */
    public function addToCountCategorySummary(\Recranet\OTA\StatisticApplicationSetType\CountCategorySummariesAType\CountCategorySummaryAType $countCategorySummary)
    {
        $this->countCategorySummary[] = $countCategorySummary;
        return $this;
    }

    /**
     * isset countCategorySummary
     *
     * This element has count data for each count category, identified using OpenTravel Code List CNT, such as number of guests, rooms occupied, etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCountCategorySummary($index)
    {
        return isset($this->countCategorySummary[$index]);
    }

    /**
     * unset countCategorySummary
     *
     * This element has count data for each count category, identified using OpenTravel Code List CNT, such as number of guests, rooms occupied, etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCountCategorySummary($index)
    {
        unset($this->countCategorySummary[$index]);
    }

    /**
     * Gets as countCategorySummary
     *
     * This element has count data for each count category, identified using OpenTravel Code List CNT, such as number of guests, rooms occupied, etc.
     *
     * @return \Recranet\OTA\StatisticApplicationSetType\CountCategorySummariesAType\CountCategorySummaryAType[]
     */
    public function getCountCategorySummary()
    {
        return $this->countCategorySummary;
    }

    /**
     * Sets a new countCategorySummary
     *
     * This element has count data for each count category, identified using OpenTravel Code List CNT, such as number of guests, rooms occupied, etc.
     *
     * @param \Recranet\OTA\StatisticApplicationSetType\CountCategorySummariesAType\CountCategorySummaryAType[] $countCategorySummary
     * @return self
     */
    public function setCountCategorySummary(array $countCategorySummary)
    {
        $this->countCategorySummary = $countCategorySummary;
        return $this;
    }
}

