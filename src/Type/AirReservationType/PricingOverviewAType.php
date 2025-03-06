<?php

namespace Recranet\OTA\Type\AirReservationType;

/**
 * Class representing PricingOverviewAType
 */
class PricingOverviewAType
{
    /**
     * Used for domestic or international sales differentiation.
     *
     * @var string $statisticalCode
     */
    private $statisticalCode = null;

    /**
     * The validating airline code for the ticketing.
     *
     * @var string $validatingAirlineCode
     */
    private $validatingAirlineCode = null;

    /**
     * The departure date of the first leg of the booked itinerary.
     *
     * @var \DateTime $departureDate
     */
    private $departureDate = null;

    /**
     * Used to specify the type of price.
     *
     * @var string $priceType
     */
    private $priceType = null;

    /**
     * The neutral unit currency rate.
     *
     * @var float $nUCRate
     */
    private $nUCRate = null;

    /**
     * The currency exchange rate.
     *
     * @var float $exchangeRate
     */
    private $exchangeRate = null;

    /**
     * Specific information about the price.
     *
     * @var \Recranet\OTA\Type\AirReservationType\PricingOverviewAType\PricingIndicatorAType[] $pricingIndicator
     */
    private $pricingIndicator = [
        
    ];

    /**
     * Specifies an account code applicable to the pricing and reservation.
     *
     * @var \Recranet\OTA\Type\AirReservationType\PricingOverviewAType\AccountAType[] $account
     */
    private $account = [
        
    ];

    /**
     * A comment applicable to all the pricing information.
     *
     * @var \Recranet\OTA\Type\FreeTextType[] $comment
     */
    private $comment = [
        
    ];

    /**
     * Gets as statisticalCode
     *
     * Used for domestic or international sales differentiation.
     *
     * @return string
     */
    public function getStatisticalCode()
    {
        return $this->statisticalCode;
    }

    /**
     * Sets a new statisticalCode
     *
     * Used for domestic or international sales differentiation.
     *
     * @param string $statisticalCode
     * @return self
     */
    public function setStatisticalCode($statisticalCode)
    {
        $this->statisticalCode = $statisticalCode;
        return $this;
    }

    /**
     * Gets as validatingAirlineCode
     *
     * The validating airline code for the ticketing.
     *
     * @return string
     */
    public function getValidatingAirlineCode()
    {
        return $this->validatingAirlineCode;
    }

    /**
     * Sets a new validatingAirlineCode
     *
     * The validating airline code for the ticketing.
     *
     * @param string $validatingAirlineCode
     * @return self
     */
    public function setValidatingAirlineCode($validatingAirlineCode)
    {
        $this->validatingAirlineCode = $validatingAirlineCode;
        return $this;
    }

    /**
     * Gets as departureDate
     *
     * The departure date of the first leg of the booked itinerary.
     *
     * @return \DateTime
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * Sets a new departureDate
     *
     * The departure date of the first leg of the booked itinerary.
     *
     * @param \DateTime $departureDate
     * @return self
     */
    public function setDepartureDate(\DateTime $departureDate)
    {
        $this->departureDate = $departureDate;
        return $this;
    }

    /**
     * Gets as priceType
     *
     * Used to specify the type of price.
     *
     * @return string
     */
    public function getPriceType()
    {
        return $this->priceType;
    }

    /**
     * Sets a new priceType
     *
     * Used to specify the type of price.
     *
     * @param string $priceType
     * @return self
     */
    public function setPriceType($priceType)
    {
        $this->priceType = $priceType;
        return $this;
    }

    /**
     * Gets as nUCRate
     *
     * The neutral unit currency rate.
     *
     * @return float
     */
    public function getNUCRate()
    {
        return $this->nUCRate;
    }

    /**
     * Sets a new nUCRate
     *
     * The neutral unit currency rate.
     *
     * @param float $nUCRate
     * @return self
     */
    public function setNUCRate($nUCRate)
    {
        $this->nUCRate = $nUCRate;
        return $this;
    }

    /**
     * Gets as exchangeRate
     *
     * The currency exchange rate.
     *
     * @return float
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    /**
     * Sets a new exchangeRate
     *
     * The currency exchange rate.
     *
     * @param float $exchangeRate
     * @return self
     */
    public function setExchangeRate($exchangeRate)
    {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }

    /**
     * Adds as pricingIndicator
     *
     * Specific information about the price.
     *
     * @return self
     * @param \Recranet\OTA\Type\AirReservationType\PricingOverviewAType\PricingIndicatorAType $pricingIndicator
     */
    public function addToPricingIndicator(\Recranet\OTA\Type\AirReservationType\PricingOverviewAType\PricingIndicatorAType $pricingIndicator)
    {
        $this->pricingIndicator[] = $pricingIndicator;
        return $this;
    }

    /**
     * isset pricingIndicator
     *
     * Specific information about the price.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPricingIndicator($index)
    {
        return isset($this->pricingIndicator[$index]);
    }

    /**
     * unset pricingIndicator
     *
     * Specific information about the price.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPricingIndicator($index)
    {
        unset($this->pricingIndicator[$index]);
    }

    /**
     * Gets as pricingIndicator
     *
     * Specific information about the price.
     *
     * @return \Recranet\OTA\Type\AirReservationType\PricingOverviewAType\PricingIndicatorAType[]
     */
    public function getPricingIndicator()
    {
        return $this->pricingIndicator;
    }

    /**
     * Sets a new pricingIndicator
     *
     * Specific information about the price.
     *
     * @param \Recranet\OTA\Type\AirReservationType\PricingOverviewAType\PricingIndicatorAType[] $pricingIndicator
     * @return self
     */
    public function setPricingIndicator(array $pricingIndicator = null)
    {
        $this->pricingIndicator = $pricingIndicator;
        return $this;
    }

    /**
     * Adds as account
     *
     * Specifies an account code applicable to the pricing and reservation.
     *
     * @return self
     * @param \Recranet\OTA\Type\AirReservationType\PricingOverviewAType\AccountAType $account
     */
    public function addToAccount(\Recranet\OTA\Type\AirReservationType\PricingOverviewAType\AccountAType $account)
    {
        $this->account[] = $account;
        return $this;
    }

    /**
     * isset account
     *
     * Specifies an account code applicable to the pricing and reservation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccount($index)
    {
        return isset($this->account[$index]);
    }

    /**
     * unset account
     *
     * Specifies an account code applicable to the pricing and reservation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccount($index)
    {
        unset($this->account[$index]);
    }

    /**
     * Gets as account
     *
     * Specifies an account code applicable to the pricing and reservation.
     *
     * @return \Recranet\OTA\Type\AirReservationType\PricingOverviewAType\AccountAType[]
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Sets a new account
     *
     * Specifies an account code applicable to the pricing and reservation.
     *
     * @param \Recranet\OTA\Type\AirReservationType\PricingOverviewAType\AccountAType[] $account
     * @return self
     */
    public function setAccount(array $account = null)
    {
        $this->account = $account;
        return $this;
    }

    /**
     * Adds as comment
     *
     * A comment applicable to all the pricing information.
     *
     * @return self
     * @param \Recranet\OTA\Type\FreeTextType $comment
     */
    public function addToComment(\Recranet\OTA\Type\FreeTextType $comment)
    {
        $this->comment[] = $comment;
        return $this;
    }

    /**
     * isset comment
     *
     * A comment applicable to all the pricing information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComment($index)
    {
        return isset($this->comment[$index]);
    }

    /**
     * unset comment
     *
     * A comment applicable to all the pricing information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComment($index)
    {
        unset($this->comment[$index]);
    }

    /**
     * Gets as comment
     *
     * A comment applicable to all the pricing information.
     *
     * @return \Recranet\OTA\Type\FreeTextType[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * A comment applicable to all the pricing information.
     *
     * @param \Recranet\OTA\Type\FreeTextType[] $comment
     * @return self
     */
    public function setComment(array $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }
}

