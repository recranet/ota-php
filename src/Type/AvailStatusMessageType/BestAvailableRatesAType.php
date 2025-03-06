<?php

namespace Recranet\OTA\Type\AvailStatusMessageType;

/**
 * Class representing BestAvailableRatesAType
 */
class BestAvailableRatesAType
{
    /**
     * The details of a best available rate.
     *
     * @var \Recranet\OTA\Type\AvailStatusMessageType\BestAvailableRatesAType\BestAvailableRateAType[] $bestAvailableRate
     */
    private $bestAvailableRate = [
        
    ];

    /**
     * Adds as bestAvailableRate
     *
     * The details of a best available rate.
     *
     * @return self
     * @param \Recranet\OTA\Type\AvailStatusMessageType\BestAvailableRatesAType\BestAvailableRateAType $bestAvailableRate
     */
    public function addToBestAvailableRate(\Recranet\OTA\Type\AvailStatusMessageType\BestAvailableRatesAType\BestAvailableRateAType $bestAvailableRate)
    {
        $this->bestAvailableRate[] = $bestAvailableRate;
        return $this;
    }

    /**
     * isset bestAvailableRate
     *
     * The details of a best available rate.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBestAvailableRate($index)
    {
        return isset($this->bestAvailableRate[$index]);
    }

    /**
     * unset bestAvailableRate
     *
     * The details of a best available rate.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBestAvailableRate($index)
    {
        unset($this->bestAvailableRate[$index]);
    }

    /**
     * Gets as bestAvailableRate
     *
     * The details of a best available rate.
     *
     * @return \Recranet\OTA\Type\AvailStatusMessageType\BestAvailableRatesAType\BestAvailableRateAType[]
     */
    public function getBestAvailableRate()
    {
        return $this->bestAvailableRate;
    }

    /**
     * Sets a new bestAvailableRate
     *
     * The details of a best available rate.
     *
     * @param \Recranet\OTA\Type\AvailStatusMessageType\BestAvailableRatesAType\BestAvailableRateAType[] $bestAvailableRate
     * @return self
     */
    public function setBestAvailableRate(array $bestAvailableRate)
    {
        $this->bestAvailableRate = $bestAvailableRate;
        return $this;
    }
}

