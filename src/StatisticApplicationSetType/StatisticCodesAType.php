<?php

namespace Recranet\OTA\StatisticApplicationSetType;

/**
 * Class representing StatisticCodesAType
 */
class StatisticCodesAType
{
    /**
     * Defines the codes and corresponding categories for which the data in the other elements has been gathered.
     *
     * @var \Recranet\OTA\StatisticApplicationSetType\StatisticCodesAType\StatisticCodeAType[] $statisticCode
     */
    private $statisticCode = [
        
    ];

    /**
     * Adds as statisticCode
     *
     * Defines the codes and corresponding categories for which the data in the other elements has been gathered.
     *
     * @return self
     * @param \Recranet\OTA\StatisticApplicationSetType\StatisticCodesAType\StatisticCodeAType $statisticCode
     */
    public function addToStatisticCode(\Recranet\OTA\StatisticApplicationSetType\StatisticCodesAType\StatisticCodeAType $statisticCode)
    {
        $this->statisticCode[] = $statisticCode;
        return $this;
    }

    /**
     * isset statisticCode
     *
     * Defines the codes and corresponding categories for which the data in the other elements has been gathered.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStatisticCode($index)
    {
        return isset($this->statisticCode[$index]);
    }

    /**
     * unset statisticCode
     *
     * Defines the codes and corresponding categories for which the data in the other elements has been gathered.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStatisticCode($index)
    {
        unset($this->statisticCode[$index]);
    }

    /**
     * Gets as statisticCode
     *
     * Defines the codes and corresponding categories for which the data in the other elements has been gathered.
     *
     * @return \Recranet\OTA\StatisticApplicationSetType\StatisticCodesAType\StatisticCodeAType[]
     */
    public function getStatisticCode()
    {
        return $this->statisticCode;
    }

    /**
     * Sets a new statisticCode
     *
     * Defines the codes and corresponding categories for which the data in the other elements has been gathered.
     *
     * @param \Recranet\OTA\StatisticApplicationSetType\StatisticCodesAType\StatisticCodeAType[] $statisticCode
     * @return self
     */
    public function setStatisticCode(array $statisticCode)
    {
        $this->statisticCode = $statisticCode;
        return $this;
    }
}

