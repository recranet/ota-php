<?php

namespace Recranet\OTA\Type;

/**
 * Class representing FareInfoType
 *
 * Rules for this priced option.
 * XSD Type: FareInfoType
 */
class FareInfoType
{
    /**
     * If true, this is a negotiated fare.
     *
     * @var bool $negotiatedFareInd
     */
    private $negotiatedFareInd = null;

    /**
     * A code used to identify the negotiated fare.
     *
     * @var string $negotiatedFareCode
     */
    private $negotiatedFareCode = null;

    /**
     * The ATPCO category code for this negotiated fare.
     *
     * @var string $aTPCONegCategoryCode
     */
    private $aTPCONegCategoryCode = null;

    /**
     * The ISO 4217 currency code associated with the fare rule information.
     *
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * The tariff number for the rule.
     *
     * @var string $tariffNumber
     */
    private $tariffNumber = null;

    /**
     * The number associated with the fare rule.
     *
     * @var string $ruleNumber
     */
    private $ruleNumber = null;

    /**
     * The routing number applicable to this fare.
     *
     * @var int $routingNumber
     */
    private $routingNumber = null;

    /**
     * The number of cities applicable to this fare.
     *
     * @var int $nbrOfCities
     */
    private $nbrOfCities = null;

    /**
     * Departure Date for this priced fare.
     *
     * @var \DateTime $departureDate
     */
    private $departureDate = null;

    /**
     * Used to provide the fare basis code, the fare class code, and/or ticket designator.
     *
     * @var \Recranet\OTA\Type\FareInfoType\FareReferenceAType[] $fareReference
     */
    private $fareReference = [
        
    ];

    /**
     * Information regarding restrictions governing use of the fare.
     *
     * @var \Recranet\OTA\Type\FareInfoType\RuleInfoAType $ruleInfo
     */
    private $ruleInfo = null;

    /**
     * The airline that filed the fare(s).
     *
     * @var \Recranet\OTA\Type\CompanyNameType $filingAirline
     */
    private $filingAirline = null;

    /**
     * The marketing airline.
     *
     * @var \Recranet\OTA\Type\CompanyNameType[] $marketingAirline
     */
    private $marketingAirline = [
        
    ];

    /**
     * Departure point of flight segment.
     *
     * @var \Recranet\OTA\Type\LocationType $departureAirport
     */
    private $departureAirport = null;

    /**
     * Arrival point of flight segment.
     *
     * @var \Recranet\OTA\Type\LocationType $arrivalAirport
     */
    private $arrivalAirport = null;

    /**
     * Date information applicable to the fare rules.
     *
     * @var \Recranet\OTA\Type\FareInfoType\DateAType[] $date
     */
    private $date = [
        
    ];

    /**
     * Fares and related information for this fare rule.
     *
     * @var \Recranet\OTA\Type\FareInfoType\FareInfoAType[] $fareInfo
     */
    private $fareInfo = [
        
    ];

    /**
     * The information needed when a passenger presents a discount/promotional coupon for a dollar/percentage off the fare or when a passenger qualifies for a percentage discount such as a senior discount.
     *
     * @var \Recranet\OTA\Type\FareInfoType\DiscountPricingAType $discountPricing
     */
    private $discountPricing = null;

    /**
     * A city code valid for this fare.
     *
     * @var \Recranet\OTA\Type\FareInfoType\CityAType[] $city
     */
    private $city = [
        
    ];

    /**
     * An airport code valid for this fare.
     *
     * @var \Recranet\OTA\Type\FareInfoType\AirportAType[] $airport
     */
    private $airport = [
        
    ];

    /**
     * Gets as negotiatedFareInd
     *
     * If true, this is a negotiated fare.
     *
     * @return bool
     */
    public function getNegotiatedFareInd()
    {
        return $this->negotiatedFareInd;
    }

    /**
     * Sets a new negotiatedFareInd
     *
     * If true, this is a negotiated fare.
     *
     * @param bool $negotiatedFareInd
     * @return self
     */
    public function setNegotiatedFareInd($negotiatedFareInd)
    {
        $this->negotiatedFareInd = $negotiatedFareInd;
        return $this;
    }

    /**
     * Gets as negotiatedFareCode
     *
     * A code used to identify the negotiated fare.
     *
     * @return string
     */
    public function getNegotiatedFareCode()
    {
        return $this->negotiatedFareCode;
    }

    /**
     * Sets a new negotiatedFareCode
     *
     * A code used to identify the negotiated fare.
     *
     * @param string $negotiatedFareCode
     * @return self
     */
    public function setNegotiatedFareCode($negotiatedFareCode)
    {
        $this->negotiatedFareCode = $negotiatedFareCode;
        return $this;
    }

    /**
     * Gets as aTPCONegCategoryCode
     *
     * The ATPCO category code for this negotiated fare.
     *
     * @return string
     */
    public function getATPCONegCategoryCode()
    {
        return $this->aTPCONegCategoryCode;
    }

    /**
     * Sets a new aTPCONegCategoryCode
     *
     * The ATPCO category code for this negotiated fare.
     *
     * @param string $aTPCONegCategoryCode
     * @return self
     */
    public function setATPCONegCategoryCode($aTPCONegCategoryCode)
    {
        $this->aTPCONegCategoryCode = $aTPCONegCategoryCode;
        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * The ISO 4217 currency code associated with the fare rule information.
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
     * The ISO 4217 currency code associated with the fare rule information.
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
     * Gets as tariffNumber
     *
     * The tariff number for the rule.
     *
     * @return string
     */
    public function getTariffNumber()
    {
        return $this->tariffNumber;
    }

    /**
     * Sets a new tariffNumber
     *
     * The tariff number for the rule.
     *
     * @param string $tariffNumber
     * @return self
     */
    public function setTariffNumber($tariffNumber)
    {
        $this->tariffNumber = $tariffNumber;
        return $this;
    }

    /**
     * Gets as ruleNumber
     *
     * The number associated with the fare rule.
     *
     * @return string
     */
    public function getRuleNumber()
    {
        return $this->ruleNumber;
    }

    /**
     * Sets a new ruleNumber
     *
     * The number associated with the fare rule.
     *
     * @param string $ruleNumber
     * @return self
     */
    public function setRuleNumber($ruleNumber)
    {
        $this->ruleNumber = $ruleNumber;
        return $this;
    }

    /**
     * Gets as routingNumber
     *
     * The routing number applicable to this fare.
     *
     * @return int
     */
    public function getRoutingNumber()
    {
        return $this->routingNumber;
    }

    /**
     * Sets a new routingNumber
     *
     * The routing number applicable to this fare.
     *
     * @param int $routingNumber
     * @return self
     */
    public function setRoutingNumber($routingNumber)
    {
        $this->routingNumber = $routingNumber;
        return $this;
    }

    /**
     * Gets as nbrOfCities
     *
     * The number of cities applicable to this fare.
     *
     * @return int
     */
    public function getNbrOfCities()
    {
        return $this->nbrOfCities;
    }

    /**
     * Sets a new nbrOfCities
     *
     * The number of cities applicable to this fare.
     *
     * @param int $nbrOfCities
     * @return self
     */
    public function setNbrOfCities($nbrOfCities)
    {
        $this->nbrOfCities = $nbrOfCities;
        return $this;
    }

    /**
     * Gets as departureDate
     *
     * Departure Date for this priced fare.
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
     * Departure Date for this priced fare.
     *
     * @param \DateTime $departureDate
     * @return self
     */
    public function setDepartureDate(?\DateTime $departureDate = null)
    {
        $this->departureDate = $departureDate;
        return $this;
    }

    /**
     * Adds as fareReference
     *
     * Used to provide the fare basis code, the fare class code, and/or ticket designator.
     *
     * @return self
     * @param \Recranet\OTA\Type\FareInfoType\FareReferenceAType $fareReference
     */
    public function addToFareReference(\Recranet\OTA\Type\FareInfoType\FareReferenceAType $fareReference)
    {
        $this->fareReference[] = $fareReference;
        return $this;
    }

    /**
     * isset fareReference
     *
     * Used to provide the fare basis code, the fare class code, and/or ticket designator.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFareReference($index)
    {
        return isset($this->fareReference[$index]);
    }

    /**
     * unset fareReference
     *
     * Used to provide the fare basis code, the fare class code, and/or ticket designator.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFareReference($index)
    {
        unset($this->fareReference[$index]);
    }

    /**
     * Gets as fareReference
     *
     * Used to provide the fare basis code, the fare class code, and/or ticket designator.
     *
     * @return \Recranet\OTA\Type\FareInfoType\FareReferenceAType[]
     */
    public function getFareReference()
    {
        return $this->fareReference;
    }

    /**
     * Sets a new fareReference
     *
     * Used to provide the fare basis code, the fare class code, and/or ticket designator.
     *
     * @param \Recranet\OTA\Type\FareInfoType\FareReferenceAType[] $fareReference
     * @return self
     */
    public function setFareReference(array $fareReference = null)
    {
        $this->fareReference = $fareReference;
        return $this;
    }

    /**
     * Gets as ruleInfo
     *
     * Information regarding restrictions governing use of the fare.
     *
     * @return \Recranet\OTA\Type\FareInfoType\RuleInfoAType
     */
    public function getRuleInfo()
    {
        return $this->ruleInfo;
    }

    /**
     * Sets a new ruleInfo
     *
     * Information regarding restrictions governing use of the fare.
     *
     * @param \Recranet\OTA\Type\FareInfoType\RuleInfoAType $ruleInfo
     * @return self
     */
    public function setRuleInfo(?\Recranet\OTA\Type\FareInfoType\RuleInfoAType $ruleInfo = null)
    {
        $this->ruleInfo = $ruleInfo;
        return $this;
    }

    /**
     * Gets as filingAirline
     *
     * The airline that filed the fare(s).
     *
     * @return \Recranet\OTA\Type\CompanyNameType
     */
    public function getFilingAirline()
    {
        return $this->filingAirline;
    }

    /**
     * Sets a new filingAirline
     *
     * The airline that filed the fare(s).
     *
     * @param \Recranet\OTA\Type\CompanyNameType $filingAirline
     * @return self
     */
    public function setFilingAirline(?\Recranet\OTA\Type\CompanyNameType $filingAirline = null)
    {
        $this->filingAirline = $filingAirline;
        return $this;
    }

    /**
     * Adds as marketingAirline
     *
     * The marketing airline.
     *
     * @return self
     * @param \Recranet\OTA\Type\CompanyNameType $marketingAirline
     */
    public function addToMarketingAirline(\Recranet\OTA\Type\CompanyNameType $marketingAirline)
    {
        $this->marketingAirline[] = $marketingAirline;
        return $this;
    }

    /**
     * isset marketingAirline
     *
     * The marketing airline.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMarketingAirline($index)
    {
        return isset($this->marketingAirline[$index]);
    }

    /**
     * unset marketingAirline
     *
     * The marketing airline.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMarketingAirline($index)
    {
        unset($this->marketingAirline[$index]);
    }

    /**
     * Gets as marketingAirline
     *
     * The marketing airline.
     *
     * @return \Recranet\OTA\Type\CompanyNameType[]
     */
    public function getMarketingAirline()
    {
        return $this->marketingAirline;
    }

    /**
     * Sets a new marketingAirline
     *
     * The marketing airline.
     *
     * @param \Recranet\OTA\Type\CompanyNameType[] $marketingAirline
     * @return self
     */
    public function setMarketingAirline(array $marketingAirline = null)
    {
        $this->marketingAirline = $marketingAirline;
        return $this;
    }

    /**
     * Gets as departureAirport
     *
     * Departure point of flight segment.
     *
     * @return \Recranet\OTA\Type\LocationType
     */
    public function getDepartureAirport()
    {
        return $this->departureAirport;
    }

    /**
     * Sets a new departureAirport
     *
     * Departure point of flight segment.
     *
     * @param \Recranet\OTA\Type\LocationType $departureAirport
     * @return self
     */
    public function setDepartureAirport(?\Recranet\OTA\Type\LocationType $departureAirport = null)
    {
        $this->departureAirport = $departureAirport;
        return $this;
    }

    /**
     * Gets as arrivalAirport
     *
     * Arrival point of flight segment.
     *
     * @return \Recranet\OTA\Type\LocationType
     */
    public function getArrivalAirport()
    {
        return $this->arrivalAirport;
    }

    /**
     * Sets a new arrivalAirport
     *
     * Arrival point of flight segment.
     *
     * @param \Recranet\OTA\Type\LocationType $arrivalAirport
     * @return self
     */
    public function setArrivalAirport(?\Recranet\OTA\Type\LocationType $arrivalAirport = null)
    {
        $this->arrivalAirport = $arrivalAirport;
        return $this;
    }

    /**
     * Adds as date
     *
     * Date information applicable to the fare rules.
     *
     * @return self
     * @param \Recranet\OTA\Type\FareInfoType\DateAType $date
     */
    public function addToDate(\Recranet\OTA\Type\FareInfoType\DateAType $date)
    {
        $this->date[] = $date;
        return $this;
    }

    /**
     * isset date
     *
     * Date information applicable to the fare rules.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDate($index)
    {
        return isset($this->date[$index]);
    }

    /**
     * unset date
     *
     * Date information applicable to the fare rules.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDate($index)
    {
        unset($this->date[$index]);
    }

    /**
     * Gets as date
     *
     * Date information applicable to the fare rules.
     *
     * @return \Recranet\OTA\Type\FareInfoType\DateAType[]
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * Date information applicable to the fare rules.
     *
     * @param \Recranet\OTA\Type\FareInfoType\DateAType[] $date
     * @return self
     */
    public function setDate(array $date = null)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Adds as fareInfo
     *
     * Fares and related information for this fare rule.
     *
     * @return self
     * @param \Recranet\OTA\Type\FareInfoType\FareInfoAType $fareInfo
     */
    public function addToFareInfo(\Recranet\OTA\Type\FareInfoType\FareInfoAType $fareInfo)
    {
        $this->fareInfo[] = $fareInfo;
        return $this;
    }

    /**
     * isset fareInfo
     *
     * Fares and related information for this fare rule.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFareInfo($index)
    {
        return isset($this->fareInfo[$index]);
    }

    /**
     * unset fareInfo
     *
     * Fares and related information for this fare rule.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFareInfo($index)
    {
        unset($this->fareInfo[$index]);
    }

    /**
     * Gets as fareInfo
     *
     * Fares and related information for this fare rule.
     *
     * @return \Recranet\OTA\Type\FareInfoType\FareInfoAType[]
     */
    public function getFareInfo()
    {
        return $this->fareInfo;
    }

    /**
     * Sets a new fareInfo
     *
     * Fares and related information for this fare rule.
     *
     * @param \Recranet\OTA\Type\FareInfoType\FareInfoAType[] $fareInfo
     * @return self
     */
    public function setFareInfo(array $fareInfo = null)
    {
        $this->fareInfo = $fareInfo;
        return $this;
    }

    /**
     * Gets as discountPricing
     *
     * The information needed when a passenger presents a discount/promotional coupon for a dollar/percentage off the fare or when a passenger qualifies for a percentage discount such as a senior discount.
     *
     * @return \Recranet\OTA\Type\FareInfoType\DiscountPricingAType
     */
    public function getDiscountPricing()
    {
        return $this->discountPricing;
    }

    /**
     * Sets a new discountPricing
     *
     * The information needed when a passenger presents a discount/promotional coupon for a dollar/percentage off the fare or when a passenger qualifies for a percentage discount such as a senior discount.
     *
     * @param \Recranet\OTA\Type\FareInfoType\DiscountPricingAType $discountPricing
     * @return self
     */
    public function setDiscountPricing(?\Recranet\OTA\Type\FareInfoType\DiscountPricingAType $discountPricing = null)
    {
        $this->discountPricing = $discountPricing;
        return $this;
    }

    /**
     * Adds as city
     *
     * A city code valid for this fare.
     *
     * @return self
     * @param \Recranet\OTA\Type\FareInfoType\CityAType $city
     */
    public function addToCity(\Recranet\OTA\Type\FareInfoType\CityAType $city)
    {
        $this->city[] = $city;
        return $this;
    }

    /**
     * isset city
     *
     * A city code valid for this fare.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCity($index)
    {
        return isset($this->city[$index]);
    }

    /**
     * unset city
     *
     * A city code valid for this fare.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCity($index)
    {
        unset($this->city[$index]);
    }

    /**
     * Gets as city
     *
     * A city code valid for this fare.
     *
     * @return \Recranet\OTA\Type\FareInfoType\CityAType[]
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets a new city
     *
     * A city code valid for this fare.
     *
     * @param \Recranet\OTA\Type\FareInfoType\CityAType[] $city
     * @return self
     */
    public function setCity(array $city = null)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Adds as airport
     *
     * An airport code valid for this fare.
     *
     * @return self
     * @param \Recranet\OTA\Type\FareInfoType\AirportAType $airport
     */
    public function addToAirport(\Recranet\OTA\Type\FareInfoType\AirportAType $airport)
    {
        $this->airport[] = $airport;
        return $this;
    }

    /**
     * isset airport
     *
     * An airport code valid for this fare.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAirport($index)
    {
        return isset($this->airport[$index]);
    }

    /**
     * unset airport
     *
     * An airport code valid for this fare.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAirport($index)
    {
        unset($this->airport[$index]);
    }

    /**
     * Gets as airport
     *
     * An airport code valid for this fare.
     *
     * @return \Recranet\OTA\Type\FareInfoType\AirportAType[]
     */
    public function getAirport()
    {
        return $this->airport;
    }

    /**
     * Sets a new airport
     *
     * An airport code valid for this fare.
     *
     * @param \Recranet\OTA\Type\FareInfoType\AirportAType[] $airport
     * @return self
     */
    public function setAirport(array $airport = null)
    {
        $this->airport = $airport;
        return $this;
    }
}

