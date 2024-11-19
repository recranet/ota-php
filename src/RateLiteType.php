<?php

namespace Recranet\OTA;

/**
 * Class representing RateLiteType
 *
 * Summary version of the RateType, initially created for the Travel Itinerary Message set.
 * XSD Type: RateLiteType
 */
class RateLiteType
{
    /**
     * The Lite Rate contains the Base amount as well as the associated taxes.
     *
     * @var \Recranet\OTA\AmountLiteType[] $rate
     */
    private $rate = [
        
    ];

    /**
     * Adds as rate
     *
     * The Lite Rate contains the Base amount as well as the associated taxes.
     *
     * @return self
     * @param \Recranet\OTA\AmountLiteType $rate
     */
    public function addToRate(\Recranet\OTA\AmountLiteType $rate)
    {
        $this->rate[] = $rate;
        return $this;
    }

    /**
     * isset rate
     *
     * The Lite Rate contains the Base amount as well as the associated taxes.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRate($index)
    {
        return isset($this->rate[$index]);
    }

    /**
     * unset rate
     *
     * The Lite Rate contains the Base amount as well as the associated taxes.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRate($index)
    {
        unset($this->rate[$index]);
    }

    /**
     * Gets as rate
     *
     * The Lite Rate contains the Base amount as well as the associated taxes.
     *
     * @return \Recranet\OTA\AmountLiteType[]
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets a new rate
     *
     * The Lite Rate contains the Base amount as well as the associated taxes.
     *
     * @param \Recranet\OTA\AmountLiteType[] $rate
     * @return self
     */
    public function setRate(array $rate)
    {
        $this->rate = $rate;
        return $this;
    }
}

