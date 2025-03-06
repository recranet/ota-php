<?php

namespace Recranet\OTA\Type\RateAmountMessageType;

/**
 * Class representing RatesAType
 */
class RatesAType
{
    /**
     * An individual rate, which is a collection of amounts by guest, additional guests, fees, collection of related guarantee, cancel and payment policies, a description and the unique id to identify the rate. Rate restrictions can be sent along with the rate as attributes of this rate.
     *
     * @var \Recranet\OTA\Type\RateAmountMessageType\RatesAType\RateAType[] $rate
     */
    private $rate = [
        
    ];

    /**
     * Adds as rate
     *
     * An individual rate, which is a collection of amounts by guest, additional guests, fees, collection of related guarantee, cancel and payment policies, a description and the unique id to identify the rate. Rate restrictions can be sent along with the rate as attributes of this rate.
     *
     * @return self
     * @param \Recranet\OTA\Type\RateAmountMessageType\RatesAType\RateAType $rate
     */
    public function addToRate(\Recranet\OTA\Type\RateAmountMessageType\RatesAType\RateAType $rate)
    {
        $this->rate[] = $rate;
        return $this;
    }

    /**
     * isset rate
     *
     * An individual rate, which is a collection of amounts by guest, additional guests, fees, collection of related guarantee, cancel and payment policies, a description and the unique id to identify the rate. Rate restrictions can be sent along with the rate as attributes of this rate.
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
     * An individual rate, which is a collection of amounts by guest, additional guests, fees, collection of related guarantee, cancel and payment policies, a description and the unique id to identify the rate. Rate restrictions can be sent along with the rate as attributes of this rate.
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
     * An individual rate, which is a collection of amounts by guest, additional guests, fees, collection of related guarantee, cancel and payment policies, a description and the unique id to identify the rate. Rate restrictions can be sent along with the rate as attributes of this rate.
     *
     * @return \Recranet\OTA\Type\RateAmountMessageType\RatesAType\RateAType[]
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets a new rate
     *
     * An individual rate, which is a collection of amounts by guest, additional guests, fees, collection of related guarantee, cancel and payment policies, a description and the unique id to identify the rate. Rate restrictions can be sent along with the rate as attributes of this rate.
     *
     * @param \Recranet\OTA\Type\RateAmountMessageType\RatesAType\RateAType[] $rate
     * @return self
     */
    public function setRate(array $rate)
    {
        $this->rate = $rate;
        return $this;
    }
}

