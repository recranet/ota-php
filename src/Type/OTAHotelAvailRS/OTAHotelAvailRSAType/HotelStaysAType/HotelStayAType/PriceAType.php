<?php

namespace Recranet\OTA\Type\OTAHotelAvailRS\OTAHotelAvailRSAType\HotelStaysAType\HotelStayAType;

/**
 * Class representing PriceAType
 */
class PriceAType
{
    /**
     * The starting value of the time span.
     *
     * @var \DateTime $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @var \DateTime $end
     */
    private $end = null;

    /**
     * The available price before tax.
     *
     * @var float $amountBeforeTax
     */
    private $amountBeforeTax = null;

    /**
     * The available price after tax.
     *
     * @var float $amountAfterTax
     */
    private $amountAfterTax = null;

    /**
     * The code specifying a monetary unit. Use ISO 4217, three alpha code.
     *
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * Indicates the number of decimal places for a particular currency. This is equivalent to the ISO 4217 standard "minor unit". Typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @var int $decimal
     */
    private $decimal = null;

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \DateTime $start
     * @return self
     */
    public function setStart(\DateTime $start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @return \DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(\DateInterval $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \DateTime $end
     * @return self
     */
    public function setEnd(\DateTime $end)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * Gets as amountBeforeTax
     *
     * The available price before tax.
     *
     * @return float
     */
    public function getAmountBeforeTax()
    {
        return $this->amountBeforeTax;
    }

    /**
     * Sets a new amountBeforeTax
     *
     * The available price before tax.
     *
     * @param float $amountBeforeTax
     * @return self
     */
    public function setAmountBeforeTax($amountBeforeTax)
    {
        $this->amountBeforeTax = $amountBeforeTax;
        return $this;
    }

    /**
     * Gets as amountAfterTax
     *
     * The available price after tax.
     *
     * @return float
     */
    public function getAmountAfterTax()
    {
        return $this->amountAfterTax;
    }

    /**
     * Sets a new amountAfterTax
     *
     * The available price after tax.
     *
     * @param float $amountAfterTax
     * @return self
     */
    public function setAmountAfterTax($amountAfterTax)
    {
        $this->amountAfterTax = $amountAfterTax;
        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * The code specifying a monetary unit. Use ISO 4217, three alpha code.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * The code specifying a monetary unit. Use ISO 4217, three alpha code.
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Gets as decimal
     *
     * Indicates the number of decimal places for a particular currency. This is equivalent to the ISO 4217 standard "minor unit". Typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @return int
     */
    public function getDecimal()
    {
        return $this->decimal;
    }

    /**
     * Sets a new decimal
     *
     * Indicates the number of decimal places for a particular currency. This is equivalent to the ISO 4217 standard "minor unit". Typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @param int $decimal
     * @return self
     */
    public function setDecimal($decimal)
    {
        $this->decimal = $decimal;
        return $this;
    }
}

