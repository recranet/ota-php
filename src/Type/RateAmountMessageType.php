<?php

namespace Recranet\OTA\Type;

/**
 * Class representing RateAmountMessageType
 *
 *
 * XSD Type: RateAmountMessageType
 */
class RateAmountMessageType
{
    /**
     * Can be used to communicate back to the sender exactly which transaction may have had a problem (e.g. "Message 214 had an invalid date range").
     *
     * @var int $locatorID
     */
    private $locatorID = null;

    /**
     * Information on what the RateAmount Message applies to (i.e. the combination of inventory and rate codes) and the period of application.
     *
     * @var \Recranet\OTA\Type\StatusApplicationControlType $statusApplicationControl
     */
    private $statusApplicationControl = null;

    /**
     * A collection of rate changes to be synchronized between systems.
     *
     * @var \Recranet\OTA\Type\RateAmountMessageType\RatesAType\RateAType[] $rates
     */
    private $rates = null;

    /**
     * Gets as locatorID
     *
     * Can be used to communicate back to the sender exactly which transaction may have had a problem (e.g. "Message 214 had an invalid date range").
     *
     * @return int
     */
    public function getLocatorID()
    {
        return $this->locatorID;
    }

    /**
     * Sets a new locatorID
     *
     * Can be used to communicate back to the sender exactly which transaction may have had a problem (e.g. "Message 214 had an invalid date range").
     *
     * @param int $locatorID
     * @return self
     */
    public function setLocatorID($locatorID)
    {
        $this->locatorID = $locatorID;
        return $this;
    }

    /**
     * Gets as statusApplicationControl
     *
     * Information on what the RateAmount Message applies to (i.e. the combination of inventory and rate codes) and the period of application.
     *
     * @return \Recranet\OTA\Type\StatusApplicationControlType
     */
    public function getStatusApplicationControl()
    {
        return $this->statusApplicationControl;
    }

    /**
     * Sets a new statusApplicationControl
     *
     * Information on what the RateAmount Message applies to (i.e. the combination of inventory and rate codes) and the period of application.
     *
     * @param \Recranet\OTA\Type\StatusApplicationControlType $statusApplicationControl
     * @return self
     */
    public function setStatusApplicationControl(?\Recranet\OTA\Type\StatusApplicationControlType $statusApplicationControl = null)
    {
        $this->statusApplicationControl = $statusApplicationControl;
        return $this;
    }

    /**
     * Adds as rate
     *
     * A collection of rate changes to be synchronized between systems.
     *
     * @return self
     * @param \Recranet\OTA\Type\RateAmountMessageType\RatesAType\RateAType $rate
     */
    public function addToRates(\Recranet\OTA\Type\RateAmountMessageType\RatesAType\RateAType $rate)
    {
        $this->rates[] = $rate;
        return $this;
    }

    /**
     * isset rates
     *
     * A collection of rate changes to be synchronized between systems.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRates($index)
    {
        return isset($this->rates[$index]);
    }

    /**
     * unset rates
     *
     * A collection of rate changes to be synchronized between systems.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRates($index)
    {
        unset($this->rates[$index]);
    }

    /**
     * Gets as rates
     *
     * A collection of rate changes to be synchronized between systems.
     *
     * @return \Recranet\OTA\Type\RateAmountMessageType\RatesAType\RateAType[]
     */
    public function getRates()
    {
        return $this->rates;
    }

    /**
     * Sets a new rates
     *
     * A collection of rate changes to be synchronized between systems.
     *
     * @param \Recranet\OTA\Type\RateAmountMessageType\RatesAType\RateAType[] $rates
     * @return self
     */
    public function setRates(array $rates = null)
    {
        $this->rates = $rates;
        return $this;
    }
}

