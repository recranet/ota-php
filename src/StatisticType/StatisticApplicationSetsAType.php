<?php

namespace Recranet\OTA\StatisticType;

/**
 * Class representing StatisticApplicationSetsAType
 */
class StatisticApplicationSetsAType
{
    /**
     * Repeated for each date or set of statistic codes.
     *
     * @var \Recranet\OTA\StatisticApplicationSetType[] $statisticApplicationSet
     */
    private $statisticApplicationSet = [
        
    ];

    /**
     * Adds as statisticApplicationSet
     *
     * Repeated for each date or set of statistic codes.
     *
     * @return self
     * @param \Recranet\OTA\StatisticApplicationSetType $statisticApplicationSet
     */
    public function addToStatisticApplicationSet(\Recranet\OTA\StatisticApplicationSetType $statisticApplicationSet)
    {
        $this->statisticApplicationSet[] = $statisticApplicationSet;
        return $this;
    }

    /**
     * isset statisticApplicationSet
     *
     * Repeated for each date or set of statistic codes.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStatisticApplicationSet($index)
    {
        return isset($this->statisticApplicationSet[$index]);
    }

    /**
     * unset statisticApplicationSet
     *
     * Repeated for each date or set of statistic codes.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStatisticApplicationSet($index)
    {
        unset($this->statisticApplicationSet[$index]);
    }

    /**
     * Gets as statisticApplicationSet
     *
     * Repeated for each date or set of statistic codes.
     *
     * @return \Recranet\OTA\StatisticApplicationSetType[]
     */
    public function getStatisticApplicationSet()
    {
        return $this->statisticApplicationSet;
    }

    /**
     * Sets a new statisticApplicationSet
     *
     * Repeated for each date or set of statistic codes.
     *
     * @param \Recranet\OTA\StatisticApplicationSetType[] $statisticApplicationSet
     * @return self
     */
    public function setStatisticApplicationSet(array $statisticApplicationSet)
    {
        $this->statisticApplicationSet = $statisticApplicationSet;
        return $this;
    }
}

