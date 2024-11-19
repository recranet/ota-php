<?php

namespace Recranet\OTA;

/**
 * Class representing TravelerInfoSummaryType
 *
 * Specify passenger numbers and types
 * XSD Type: TravelerInfoSummaryType
 */
class TravelerInfoSummaryType
{
    /**
     * Number of seats requested.
     *
     * @var int[] $seatsRequested
     */
    private $seatsRequested = [
        
    ];

    /**
     * Specifies passenger numbers and types.
     *
     * @var \Recranet\OTA\TravelerInformationType[] $airTravelerAvail
     */
    private $airTravelerAvail = [
        
    ];

    /**
     * Identifies pricing source, if negotiated fares are requested and if it is a reprice request.
     *
     * @var \Recranet\OTA\TravelerInfoSummaryType\PriceRequestInformationAType $priceRequestInformation
     */
    private $priceRequestInformation = null;

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as seatsRequested
     *
     * Number of seats requested.
     *
     * @return self
     * @param int $seatsRequested
     */
    public function addToSeatsRequested($seatsRequested)
    {
        $this->seatsRequested[] = $seatsRequested;
        return $this;
    }

    /**
     * isset seatsRequested
     *
     * Number of seats requested.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSeatsRequested($index)
    {
        return isset($this->seatsRequested[$index]);
    }

    /**
     * unset seatsRequested
     *
     * Number of seats requested.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSeatsRequested($index)
    {
        unset($this->seatsRequested[$index]);
    }

    /**
     * Gets as seatsRequested
     *
     * Number of seats requested.
     *
     * @return int[]
     */
    public function getSeatsRequested()
    {
        return $this->seatsRequested;
    }

    /**
     * Sets a new seatsRequested
     *
     * Number of seats requested.
     *
     * @param int[] $seatsRequested
     * @return self
     */
    public function setSeatsRequested(array $seatsRequested = null)
    {
        $this->seatsRequested = $seatsRequested;
        return $this;
    }

    /**
     * Adds as airTravelerAvail
     *
     * Specifies passenger numbers and types.
     *
     * @return self
     * @param \Recranet\OTA\TravelerInformationType $airTravelerAvail
     */
    public function addToAirTravelerAvail(\Recranet\OTA\TravelerInformationType $airTravelerAvail)
    {
        $this->airTravelerAvail[] = $airTravelerAvail;
        return $this;
    }

    /**
     * isset airTravelerAvail
     *
     * Specifies passenger numbers and types.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAirTravelerAvail($index)
    {
        return isset($this->airTravelerAvail[$index]);
    }

    /**
     * unset airTravelerAvail
     *
     * Specifies passenger numbers and types.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAirTravelerAvail($index)
    {
        unset($this->airTravelerAvail[$index]);
    }

    /**
     * Gets as airTravelerAvail
     *
     * Specifies passenger numbers and types.
     *
     * @return \Recranet\OTA\TravelerInformationType[]
     */
    public function getAirTravelerAvail()
    {
        return $this->airTravelerAvail;
    }

    /**
     * Sets a new airTravelerAvail
     *
     * Specifies passenger numbers and types.
     *
     * @param \Recranet\OTA\TravelerInformationType[] $airTravelerAvail
     * @return self
     */
    public function setAirTravelerAvail(array $airTravelerAvail = null)
    {
        $this->airTravelerAvail = $airTravelerAvail;
        return $this;
    }

    /**
     * Gets as priceRequestInformation
     *
     * Identifies pricing source, if negotiated fares are requested and if it is a reprice request.
     *
     * @return \Recranet\OTA\TravelerInfoSummaryType\PriceRequestInformationAType
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
     * @param \Recranet\OTA\TravelerInfoSummaryType\PriceRequestInformationAType $priceRequestInformation
     * @return self
     */
    public function setPriceRequestInformation(?\Recranet\OTA\TravelerInfoSummaryType\PriceRequestInformationAType $priceRequestInformation = null)
    {
        $this->priceRequestInformation = $priceRequestInformation;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

