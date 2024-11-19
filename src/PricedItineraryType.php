<?php

namespace Recranet\OTA;

/**
 * Class representing PricedItineraryType
 *
 * Itinerary with pricing information.
 * XSD Type: PricedItineraryType
 */
class PricedItineraryType
{
    /**
     * Assigns a number to priced itineraries.
     *
     * @var int $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * Specifies how the pricing was done.
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
     * Specifies the origin and destination of the traveler. Attributes: DirectionInd - A directional indicator that identifies a type of air booking, either one-way, round-trip, or open-jaw with the enumeration of (OneWay | RT | OpenJaw) respectively. ActionCode - Indicates the status of the booking, such as OK or Wait-List. NumberInParty - Indicates the traveler count.
     *
     * @var \Recranet\OTA\AirItineraryType $airItinerary
     */
    private $airItinerary = null;

    /**
     * Pricing Information for an Air Itinerary.
     *
     * @var \Recranet\OTA\PricedItineraryType\AirItineraryPricingInfoAType $airItineraryPricingInfo
     */
    private $airItineraryPricingInfo = null;

    /**
     * Provides for free form descriptive information for the priced itinerary.
     *
     * @var \Recranet\OTA\FreeTextType[] $notes
     */
    private $notes = [
        
    ];

    /**
     * Container for ticketing information.
     *
     * @var \Recranet\OTA\PricedItineraryType\TicketingInfoAType $ticketingInfo
     */
    private $ticketingInfo = null;

    /**
     * Gets as sequenceNumber
     *
     * Assigns a number to priced itineraries.
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets a new sequenceNumber
     *
     * Assigns a number to priced itineraries.
     *
     * @param int $sequenceNumber
     * @return self
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
        return $this;
    }

    /**
     * Gets as priceType
     *
     * Specifies how the pricing was done.
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
     * Specifies how the pricing was done.
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
     * Gets as airItinerary
     *
     * Specifies the origin and destination of the traveler. Attributes: DirectionInd - A directional indicator that identifies a type of air booking, either one-way, round-trip, or open-jaw with the enumeration of (OneWay | RT | OpenJaw) respectively. ActionCode - Indicates the status of the booking, such as OK or Wait-List. NumberInParty - Indicates the traveler count.
     *
     * @return \Recranet\OTA\AirItineraryType
     */
    public function getAirItinerary()
    {
        return $this->airItinerary;
    }

    /**
     * Sets a new airItinerary
     *
     * Specifies the origin and destination of the traveler. Attributes: DirectionInd - A directional indicator that identifies a type of air booking, either one-way, round-trip, or open-jaw with the enumeration of (OneWay | RT | OpenJaw) respectively. ActionCode - Indicates the status of the booking, such as OK or Wait-List. NumberInParty - Indicates the traveler count.
     *
     * @param \Recranet\OTA\AirItineraryType $airItinerary
     * @return self
     */
    public function setAirItinerary(?\Recranet\OTA\AirItineraryType $airItinerary = null)
    {
        $this->airItinerary = $airItinerary;
        return $this;
    }

    /**
     * Gets as airItineraryPricingInfo
     *
     * Pricing Information for an Air Itinerary.
     *
     * @return \Recranet\OTA\PricedItineraryType\AirItineraryPricingInfoAType
     */
    public function getAirItineraryPricingInfo()
    {
        return $this->airItineraryPricingInfo;
    }

    /**
     * Sets a new airItineraryPricingInfo
     *
     * Pricing Information for an Air Itinerary.
     *
     * @param \Recranet\OTA\PricedItineraryType\AirItineraryPricingInfoAType $airItineraryPricingInfo
     * @return self
     */
    public function setAirItineraryPricingInfo(?\Recranet\OTA\PricedItineraryType\AirItineraryPricingInfoAType $airItineraryPricingInfo = null)
    {
        $this->airItineraryPricingInfo = $airItineraryPricingInfo;
        return $this;
    }

    /**
     * Adds as notes
     *
     * Provides for free form descriptive information for the priced itinerary.
     *
     * @return self
     * @param \Recranet\OTA\FreeTextType $notes
     */
    public function addToNotes(\Recranet\OTA\FreeTextType $notes)
    {
        $this->notes[] = $notes;
        return $this;
    }

    /**
     * isset notes
     *
     * Provides for free form descriptive information for the priced itinerary.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNotes($index)
    {
        return isset($this->notes[$index]);
    }

    /**
     * unset notes
     *
     * Provides for free form descriptive information for the priced itinerary.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNotes($index)
    {
        unset($this->notes[$index]);
    }

    /**
     * Gets as notes
     *
     * Provides for free form descriptive information for the priced itinerary.
     *
     * @return \Recranet\OTA\FreeTextType[]
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Sets a new notes
     *
     * Provides for free form descriptive information for the priced itinerary.
     *
     * @param \Recranet\OTA\FreeTextType[] $notes
     * @return self
     */
    public function setNotes(array $notes = null)
    {
        $this->notes = $notes;
        return $this;
    }

    /**
     * Gets as ticketingInfo
     *
     * Container for ticketing information.
     *
     * @return \Recranet\OTA\PricedItineraryType\TicketingInfoAType
     */
    public function getTicketingInfo()
    {
        return $this->ticketingInfo;
    }

    /**
     * Sets a new ticketingInfo
     *
     * Container for ticketing information.
     *
     * @param \Recranet\OTA\PricedItineraryType\TicketingInfoAType $ticketingInfo
     * @return self
     */
    public function setTicketingInfo(?\Recranet\OTA\PricedItineraryType\TicketingInfoAType $ticketingInfo = null)
    {
        $this->ticketingInfo = $ticketingInfo;
        return $this;
    }
}

