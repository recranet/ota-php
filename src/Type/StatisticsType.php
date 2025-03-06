<?php

namespace Recranet\OTA\Type;

/**
 * Class representing StatisticsType
 *
 * Collection of Statistic Elements.
 * XSD Type: StatisticsType
 */
class StatisticsType
{
    /**
     * Used to define the report fiscal date, report code, and the hotel(s) for which data is being reported.
     *
     * @var \Recranet\OTA\Type\StatisticType[] $statistic
     */
    private $statistic = [
        
    ];

    /**
     * Adds as statistic
     *
     * Used to define the report fiscal date, report code, and the hotel(s) for which data is being reported.
     *
     * @return self
     * @param \Recranet\OTA\Type\StatisticType $statistic
     */
    public function addToStatistic(\Recranet\OTA\Type\StatisticType $statistic)
    {
        $this->statistic[] = $statistic;
        return $this;
    }

    /**
     * isset statistic
     *
     * Used to define the report fiscal date, report code, and the hotel(s) for which data is being reported.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStatistic($index)
    {
        return isset($this->statistic[$index]);
    }

    /**
     * unset statistic
     *
     * Used to define the report fiscal date, report code, and the hotel(s) for which data is being reported.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStatistic($index)
    {
        unset($this->statistic[$index]);
    }

    /**
     * Gets as statistic
     *
     * Used to define the report fiscal date, report code, and the hotel(s) for which data is being reported.
     *
     * @return \Recranet\OTA\Type\StatisticType[]
     */
    public function getStatistic()
    {
        return $this->statistic;
    }

    /**
     * Sets a new statistic
     *
     * Used to define the report fiscal date, report code, and the hotel(s) for which data is being reported.
     *
     * @param \Recranet\OTA\Type\StatisticType[] $statistic
     * @return self
     */
    public function setStatistic(array $statistic)
    {
        $this->statistic = $statistic;
        return $this;
    }
}

