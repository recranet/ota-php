<?php

namespace Recranet\OTA;

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
     * @var \Recranet\OTA\StatisticType[] $statistic
     */
    private $statistic = [
        
    ];

    /**
     * Adds as statistic
     *
     * Used to define the report fiscal date, report code, and the hotel(s) for which data is being reported.
     *
     * @return self
     * @param \Recranet\OTA\StatisticType $statistic
     */
    public function addToStatistic(\Recranet\OTA\StatisticType $statistic)
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
     * @return \Recranet\OTA\StatisticType[]
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
     * @param \Recranet\OTA\StatisticType[] $statistic
     * @return self
     */
    public function setStatistic(array $statistic)
    {
        $this->statistic = $statistic;
        return $this;
    }
}

