<?php

namespace Recranet\OTA\Type\OTAHotelAvailRS\OTAHotelAvailRSAType;

/**
 * Class representing CurrencyConversionsAType
 */
class CurrencyConversionsAType
{
    /**
     * Provides a rate conversion from one currency to another.
     *
     * @var \Recranet\OTA\Type\OTAHotelAvailRS\OTAHotelAvailRSAType\CurrencyConversionsAType\CurrencyConversionAType[] $currencyConversion
     */
    private $currencyConversion = [
        
    ];

    /**
     * Adds as currencyConversion
     *
     * Provides a rate conversion from one currency to another.
     *
     * @return self
     * @param \Recranet\OTA\Type\OTAHotelAvailRS\OTAHotelAvailRSAType\CurrencyConversionsAType\CurrencyConversionAType $currencyConversion
     */
    public function addToCurrencyConversion(\Recranet\OTA\Type\OTAHotelAvailRS\OTAHotelAvailRSAType\CurrencyConversionsAType\CurrencyConversionAType $currencyConversion)
    {
        $this->currencyConversion[] = $currencyConversion;
        return $this;
    }

    /**
     * isset currencyConversion
     *
     * Provides a rate conversion from one currency to another.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCurrencyConversion($index)
    {
        return isset($this->currencyConversion[$index]);
    }

    /**
     * unset currencyConversion
     *
     * Provides a rate conversion from one currency to another.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCurrencyConversion($index)
    {
        unset($this->currencyConversion[$index]);
    }

    /**
     * Gets as currencyConversion
     *
     * Provides a rate conversion from one currency to another.
     *
     * @return \Recranet\OTA\Type\OTAHotelAvailRS\OTAHotelAvailRSAType\CurrencyConversionsAType\CurrencyConversionAType[]
     */
    public function getCurrencyConversion()
    {
        return $this->currencyConversion;
    }

    /**
     * Sets a new currencyConversion
     *
     * Provides a rate conversion from one currency to another.
     *
     * @param \Recranet\OTA\Type\OTAHotelAvailRS\OTAHotelAvailRSAType\CurrencyConversionsAType\CurrencyConversionAType[] $currencyConversion
     * @return self
     */
    public function setCurrencyConversion(array $currencyConversion = null)
    {
        $this->currencyConversion = $currencyConversion;
        return $this;
    }
}

