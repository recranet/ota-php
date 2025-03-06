<?php

namespace Recranet\OTA\Type;

/**
 * Class representing AirItineraryPricingInfoType
 *
 * Pricing Information for an Air Itinerary.
 * XSD Type: AirItineraryPricingInfoType
 */
class AirItineraryPricingInfoType
{
    /**
     * Used to indicate whether the pricing is public or private
     *
     * @var string $pricingSource
     */
    private $pricingSource = null;

    /**
     * The code of the validating airline.
     *
     * @var string $validatingAirlineCode
     */
    private $validatingAirlineCode = null;

    /**
     * A text field used to provide a special ID code that is associated with the priced itinerary that may be used in the reservation request in order to obtain the quoted rate.
     *
     * @var string $quoteID
     */
    private $quoteID = null;

    /**
     * Total price of the itinerary.
     *
     * @var \Recranet\OTA\Type\AirItineraryPricingInfoType\ItinTotalFareAType[] $itinTotalFare
     */
    private $itinTotalFare = [
        
    ];

    /**
     * This is a collection of PTC Fare Breakdowns.
     *
     * @var \Recranet\OTA\Type\PTCFareBreakdownType[] $pTCFareBreakdowns
     */
    private $pTCFareBreakdowns = null;

    /**
     * This is a collection of FareInfo.
     *
     * @var \Recranet\OTA\Type\AirItineraryPricingInfoType\FareInfosAType\FareInfoAType[] $fareInfos
     */
    private $fareInfos = null;

    /**
     * Identifies pricing source, if negotiated fares are requested and if it is a reprice request.
     *
     * @var \Recranet\OTA\Type\PriceRequestInformationType $priceRequestInformation
     */
    private $priceRequestInformation = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as pricingSource
     *
     * Used to indicate whether the pricing is public or private
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
     * Used to indicate whether the pricing is public or private
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
     * Gets as validatingAirlineCode
     *
     * The code of the validating airline.
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
     * The code of the validating airline.
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
     * Gets as quoteID
     *
     * A text field used to provide a special ID code that is associated with the priced itinerary that may be used in the reservation request in order to obtain the quoted rate.
     *
     * @return string
     */
    public function getQuoteID()
    {
        return $this->quoteID;
    }

    /**
     * Sets a new quoteID
     *
     * A text field used to provide a special ID code that is associated with the priced itinerary that may be used in the reservation request in order to obtain the quoted rate.
     *
     * @param string $quoteID
     * @return self
     */
    public function setQuoteID($quoteID)
    {
        $this->quoteID = $quoteID;
        return $this;
    }

    /**
     * Adds as itinTotalFare
     *
     * Total price of the itinerary.
     *
     * @return self
     * @param \Recranet\OTA\Type\AirItineraryPricingInfoType\ItinTotalFareAType $itinTotalFare
     */
    public function addToItinTotalFare(\Recranet\OTA\Type\AirItineraryPricingInfoType\ItinTotalFareAType $itinTotalFare)
    {
        $this->itinTotalFare[] = $itinTotalFare;
        return $this;
    }

    /**
     * isset itinTotalFare
     *
     * Total price of the itinerary.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItinTotalFare($index)
    {
        return isset($this->itinTotalFare[$index]);
    }

    /**
     * unset itinTotalFare
     *
     * Total price of the itinerary.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItinTotalFare($index)
    {
        unset($this->itinTotalFare[$index]);
    }

    /**
     * Gets as itinTotalFare
     *
     * Total price of the itinerary.
     *
     * @return \Recranet\OTA\Type\AirItineraryPricingInfoType\ItinTotalFareAType[]
     */
    public function getItinTotalFare()
    {
        return $this->itinTotalFare;
    }

    /**
     * Sets a new itinTotalFare
     *
     * Total price of the itinerary.
     *
     * @param \Recranet\OTA\Type\AirItineraryPricingInfoType\ItinTotalFareAType[] $itinTotalFare
     * @return self
     */
    public function setItinTotalFare(array $itinTotalFare = null)
    {
        $this->itinTotalFare = $itinTotalFare;
        return $this;
    }

    /**
     * Adds as pTCFareBreakdown
     *
     * This is a collection of PTC Fare Breakdowns.
     *
     * @return self
     * @param \Recranet\OTA\Type\PTCFareBreakdownType $pTCFareBreakdown
     */
    public function addToPTCFareBreakdowns(\Recranet\OTA\Type\PTCFareBreakdownType $pTCFareBreakdown)
    {
        $this->pTCFareBreakdowns[] = $pTCFareBreakdown;
        return $this;
    }

    /**
     * isset pTCFareBreakdowns
     *
     * This is a collection of PTC Fare Breakdowns.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPTCFareBreakdowns($index)
    {
        return isset($this->pTCFareBreakdowns[$index]);
    }

    /**
     * unset pTCFareBreakdowns
     *
     * This is a collection of PTC Fare Breakdowns.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPTCFareBreakdowns($index)
    {
        unset($this->pTCFareBreakdowns[$index]);
    }

    /**
     * Gets as pTCFareBreakdowns
     *
     * This is a collection of PTC Fare Breakdowns.
     *
     * @return \Recranet\OTA\Type\PTCFareBreakdownType[]
     */
    public function getPTCFareBreakdowns()
    {
        return $this->pTCFareBreakdowns;
    }

    /**
     * Sets a new pTCFareBreakdowns
     *
     * This is a collection of PTC Fare Breakdowns.
     *
     * @param \Recranet\OTA\Type\PTCFareBreakdownType[] $pTCFareBreakdowns
     * @return self
     */
    public function setPTCFareBreakdowns(array $pTCFareBreakdowns = null)
    {
        $this->pTCFareBreakdowns = $pTCFareBreakdowns;
        return $this;
    }

    /**
     * Adds as fareInfo
     *
     * This is a collection of FareInfo.
     *
     * @return self
     * @param \Recranet\OTA\Type\AirItineraryPricingInfoType\FareInfosAType\FareInfoAType $fareInfo
     */
    public function addToFareInfos(\Recranet\OTA\Type\AirItineraryPricingInfoType\FareInfosAType\FareInfoAType $fareInfo)
    {
        $this->fareInfos[] = $fareInfo;
        return $this;
    }

    /**
     * isset fareInfos
     *
     * This is a collection of FareInfo.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFareInfos($index)
    {
        return isset($this->fareInfos[$index]);
    }

    /**
     * unset fareInfos
     *
     * This is a collection of FareInfo.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFareInfos($index)
    {
        unset($this->fareInfos[$index]);
    }

    /**
     * Gets as fareInfos
     *
     * This is a collection of FareInfo.
     *
     * @return \Recranet\OTA\Type\AirItineraryPricingInfoType\FareInfosAType\FareInfoAType[]
     */
    public function getFareInfos()
    {
        return $this->fareInfos;
    }

    /**
     * Sets a new fareInfos
     *
     * This is a collection of FareInfo.
     *
     * @param \Recranet\OTA\Type\AirItineraryPricingInfoType\FareInfosAType\FareInfoAType[] $fareInfos
     * @return self
     */
    public function setFareInfos(array $fareInfos = null)
    {
        $this->fareInfos = $fareInfos;
        return $this;
    }

    /**
     * Gets as priceRequestInformation
     *
     * Identifies pricing source, if negotiated fares are requested and if it is a reprice request.
     *
     * @return \Recranet\OTA\Type\PriceRequestInformationType
     */
    public function getPriceRequestInformation()
    {
        return $this->priceRequestInformation;
    }

    /**
     * Sets a new priceRequestInformation
     *
     * Identifies pricing source, if negotiated fares are requested and if it is a reprice request.
     *
     * @param \Recranet\OTA\Type\PriceRequestInformationType $priceRequestInformation
     * @return self
     */
    public function setPriceRequestInformation(?\Recranet\OTA\Type\PriceRequestInformationType $priceRequestInformation = null)
    {
        $this->priceRequestInformation = $priceRequestInformation;
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

