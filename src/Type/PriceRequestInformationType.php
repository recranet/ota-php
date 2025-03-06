<?php

namespace Recranet\OTA\Type;

/**
 * Class representing PriceRequestInformationType
 *
 * Identify pricing source, if negotiated fares are requested and if it is a reprice request.
 * XSD Type: PriceRequestInformationType
 */
class PriceRequestInformationType
{
    /**
     * Used to specify the type of fare required. Refer to OpenTravel Code List Fare Qualifier (FAQ) or use airline industry standard fare codes.
     *
     * @var string $fareQualifier
     */
    private $fareQualifier = null;

    /**
     * Indicator to identify whether or not the price is applicable only to private fares.
     *
     * @var bool $negotiatedFaresOnly
     */
    private $negotiatedFaresOnly = null;

    /**
     * Type of funds preferred for reviewing monetary values, in ISO 4217 codes.
     *
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * It can be used to indicate whether the fare is public or private.
     *
     * @var string $pricingSource
     */
    private $pricingSource = null;

    /**
     * If true repricing is requested.
     *
     * @var bool $reprice
     */
    private $reprice = null;

    /**
     * The code for the validating airline.
     *
     * @var string $validatingAirlineCode
     */
    private $validatingAirlineCode = null;

    /**
     * The date on which the customer requests the booking to be ticketed.
     *
     * @var \DateTime $requestedTicketingDate
     */
    private $requestedTicketingDate = null;

    /**
     * The country in which the booking will be made (sold).
     *
     * @var string $saleCountry
     */
    private $saleCountry = null;

    /**
     * Identifies the type of cabin (i.e., first, business, economy) requested.
     *
     * @var string $cabinType
     */
    private $cabinType = null;

    /**
     * The ISO country code where the ticket will be issued.
     *
     * @var string $ticketingCountry
     */
    private $ticketingCountry = null;

    /**
     * The airline which should be used to override the system selected pricing airline.
     *
     * @var string $overrideAirlineCode
     */
    private $overrideAirlineCode = null;

    /**
     * Contains negotiated fare code information.
     *
     * @var \Recranet\OTA\Type\PriceRequestInformationType\NegotiatedFareCodeAType[] $negotiatedFareCode
     */
    private $negotiatedFareCode = [
        
    ];

    /**
     * Provides information concerning a flight segment that can be rebooked for a lower fare.
     *
     * @var \Recranet\OTA\Type\PriceRequestInformationType\RebookOptionAType[] $rebookOption
     */
    private $rebookOption = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as fareQualifier
     *
     * Used to specify the type of fare required. Refer to OpenTravel Code List Fare Qualifier (FAQ) or use airline industry standard fare codes.
     *
     * @return string
     */
    public function getFareQualifier()
    {
        return $this->fareQualifier;
    }

    /**
     * Sets a new fareQualifier
     *
     * Used to specify the type of fare required. Refer to OpenTravel Code List Fare Qualifier (FAQ) or use airline industry standard fare codes.
     *
     * @param string $fareQualifier
     * @return self
     */
    public function setFareQualifier($fareQualifier)
    {
        $this->fareQualifier = $fareQualifier;
        return $this;
    }

    /**
     * Gets as negotiatedFaresOnly
     *
     * Indicator to identify whether or not the price is applicable only to private fares.
     *
     * @return bool
     */
    public function getNegotiatedFaresOnly()
    {
        return $this->negotiatedFaresOnly;
    }

    /**
     * Sets a new negotiatedFaresOnly
     *
     * Indicator to identify whether or not the price is applicable only to private fares.
     *
     * @param bool $negotiatedFaresOnly
     * @return self
     */
    public function setNegotiatedFaresOnly($negotiatedFaresOnly)
    {
        $this->negotiatedFaresOnly = $negotiatedFaresOnly;
        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * Type of funds preferred for reviewing monetary values, in ISO 4217 codes.
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
     * Type of funds preferred for reviewing monetary values, in ISO 4217 codes.
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
     * Gets as pricingSource
     *
     * It can be used to indicate whether the fare is public or private.
     *
     * @return string
     */
    public function getPricingSource()
    {
        return $this->pricingSource;
    }

    /**
     * Sets a new pricingSource
     *
     * It can be used to indicate whether the fare is public or private.
     *
     * @param string $pricingSource
     * @return self
     */
    public function setPricingSource($pricingSource)
    {
        $this->pricingSource = $pricingSource;
        return $this;
    }

    /**
     * Gets as reprice
     *
     * If true repricing is requested.
     *
     * @return bool
     */
    public function getReprice()
    {
        return $this->reprice;
    }

    /**
     * Sets a new reprice
     *
     * If true repricing is requested.
     *
     * @param bool $reprice
     * @return self
     */
    public function setReprice($reprice)
    {
        $this->reprice = $reprice;
        return $this;
    }

    /**
     * Gets as validatingAirlineCode
     *
     * The code for the validating airline.
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
     * The code for the validating airline.
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
     * Gets as requestedTicketingDate
     *
     * The date on which the customer requests the booking to be ticketed.
     *
     * @return \DateTime
     */
    public function getRequestedTicketingDate()
    {
        return $this->requestedTicketingDate;
    }

    /**
     * Sets a new requestedTicketingDate
     *
     * The date on which the customer requests the booking to be ticketed.
     *
     * @param \DateTime $requestedTicketingDate
     * @return self
     */
    public function setRequestedTicketingDate(\DateTime $requestedTicketingDate)
    {
        $this->requestedTicketingDate = $requestedTicketingDate;
        return $this;
    }

    /**
     * Gets as saleCountry
     *
     * The country in which the booking will be made (sold).
     *
     * @return string
     */
    public function getSaleCountry()
    {
        return $this->saleCountry;
    }

    /**
     * Sets a new saleCountry
     *
     * The country in which the booking will be made (sold).
     *
     * @param string $saleCountry
     * @return self
     */
    public function setSaleCountry($saleCountry)
    {
        $this->saleCountry = $saleCountry;
        return $this;
    }

    /**
     * Gets as cabinType
     *
     * Identifies the type of cabin (i.e., first, business, economy) requested.
     *
     * @return string
     */
    public function getCabinType()
    {
        return $this->cabinType;
    }

    /**
     * Sets a new cabinType
     *
     * Identifies the type of cabin (i.e., first, business, economy) requested.
     *
     * @param string $cabinType
     * @return self
     */
    public function setCabinType($cabinType)
    {
        $this->cabinType = $cabinType;
        return $this;
    }

    /**
     * Gets as ticketingCountry
     *
     * The ISO country code where the ticket will be issued.
     *
     * @return string
     */
    public function getTicketingCountry()
    {
        return $this->ticketingCountry;
    }

    /**
     * Sets a new ticketingCountry
     *
     * The ISO country code where the ticket will be issued.
     *
     * @param string $ticketingCountry
     * @return self
     */
    public function setTicketingCountry($ticketingCountry)
    {
        $this->ticketingCountry = $ticketingCountry;
        return $this;
    }

    /**
     * Gets as overrideAirlineCode
     *
     * The airline which should be used to override the system selected pricing airline.
     *
     * @return string
     */
    public function getOverrideAirlineCode()
    {
        return $this->overrideAirlineCode;
    }

    /**
     * Sets a new overrideAirlineCode
     *
     * The airline which should be used to override the system selected pricing airline.
     *
     * @param string $overrideAirlineCode
     * @return self
     */
    public function setOverrideAirlineCode($overrideAirlineCode)
    {
        $this->overrideAirlineCode = $overrideAirlineCode;
        return $this;
    }

    /**
     * Adds as negotiatedFareCode
     *
     * Contains negotiated fare code information.
     *
     * @return self
     * @param \Recranet\OTA\Type\PriceRequestInformationType\NegotiatedFareCodeAType $negotiatedFareCode
     */
    public function addToNegotiatedFareCode(\Recranet\OTA\Type\PriceRequestInformationType\NegotiatedFareCodeAType $negotiatedFareCode)
    {
        $this->negotiatedFareCode[] = $negotiatedFareCode;
        return $this;
    }

    /**
     * isset negotiatedFareCode
     *
     * Contains negotiated fare code information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNegotiatedFareCode($index)
    {
        return isset($this->negotiatedFareCode[$index]);
    }

    /**
     * unset negotiatedFareCode
     *
     * Contains negotiated fare code information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNegotiatedFareCode($index)
    {
        unset($this->negotiatedFareCode[$index]);
    }

    /**
     * Gets as negotiatedFareCode
     *
     * Contains negotiated fare code information.
     *
     * @return \Recranet\OTA\Type\PriceRequestInformationType\NegotiatedFareCodeAType[]
     */
    public function getNegotiatedFareCode()
    {
        return $this->negotiatedFareCode;
    }

    /**
     * Sets a new negotiatedFareCode
     *
     * Contains negotiated fare code information.
     *
     * @param \Recranet\OTA\Type\PriceRequestInformationType\NegotiatedFareCodeAType[] $negotiatedFareCode
     * @return self
     */
    public function setNegotiatedFareCode(array $negotiatedFareCode = null)
    {
        $this->negotiatedFareCode = $negotiatedFareCode;
        return $this;
    }

    /**
     * Adds as rebookOption
     *
     * Provides information concerning a flight segment that can be rebooked for a lower fare.
     *
     * @return self
     * @param \Recranet\OTA\Type\PriceRequestInformationType\RebookOptionAType $rebookOption
     */
    public function addToRebookOption(\Recranet\OTA\Type\PriceRequestInformationType\RebookOptionAType $rebookOption)
    {
        $this->rebookOption[] = $rebookOption;
        return $this;
    }

    /**
     * isset rebookOption
     *
     * Provides information concerning a flight segment that can be rebooked for a lower fare.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRebookOption($index)
    {
        return isset($this->rebookOption[$index]);
    }

    /**
     * unset rebookOption
     *
     * Provides information concerning a flight segment that can be rebooked for a lower fare.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRebookOption($index)
    {
        unset($this->rebookOption[$index]);
    }

    /**
     * Gets as rebookOption
     *
     * Provides information concerning a flight segment that can be rebooked for a lower fare.
     *
     * @return \Recranet\OTA\Type\PriceRequestInformationType\RebookOptionAType[]
     */
    public function getRebookOption()
    {
        return $this->rebookOption;
    }

    /**
     * Sets a new rebookOption
     *
     * Provides information concerning a flight segment that can be rebooked for a lower fare.
     *
     * @param \Recranet\OTA\Type\PriceRequestInformationType\RebookOptionAType[] $rebookOption
     * @return self
     */
    public function setRebookOption(array $rebookOption = null)
    {
        $this->rebookOption = $rebookOption;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\Type\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\Type\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

