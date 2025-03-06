<?php

namespace Recranet\OTA\Type;

/**
 * Class representing SpecialRemarkType
 *
 * Itinerary Remarks, Invoice Remarks, etc.
 * XSD Type: SpecialRemarkType
 */
class SpecialRemarkType
{
    /**
     * Type of special remark used (e.g., itinerary remark, invoice remark). Refer to OpenTravel Code List Special Remark Option Type (SRO).
     *
     * @var string $remarkType
     */
    private $remarkType = null;

    /**
     * Used to further define the remark type.
     *
     * @var string $iD
     */
    private $iD = null;

    /**
     * One or more travelers to whom this request applies.
     *
     * @var \Recranet\OTA\Type\SpecialRemarkType\TravelerRefNumberAType[] $travelerRefNumber
     */
    private $travelerRefNumber = [
        
    ];

    /**
     * One or more flights to whom this request applies
     *
     * @var \Recranet\OTA\Type\SpecialRemarkType\FlightRefNumberAType[] $flightRefNumber
     */
    private $flightRefNumber = [
        
    ];

    /**
     * Text associated with remark
     *
     * @var string $text
     */
    private $text = null;

    /**
     * Denotes the receiver (or target) airline(s) for the remark.
     *
     * @var \Recranet\OTA\Type\CompanyNameType[] $airline
     */
    private $airline = [
        
    ];

    /**
     * A container for authorized viewers.
     *
     * @var \Recranet\OTA\Type\SpecialRemarkType\AuthorizedViewersAType\AuthorizedViewerAType[] $authorizedViewers
     */
    private $authorizedViewers = null;

    /**
     * Gets as remarkType
     *
     * Type of special remark used (e.g., itinerary remark, invoice remark). Refer to OpenTravel Code List Special Remark Option Type (SRO).
     *
     * @return string
     */
    public function getRemarkType()
    {
        return $this->remarkType;
    }

    /**
     * Sets a new remarkType
     *
     * Type of special remark used (e.g., itinerary remark, invoice remark). Refer to OpenTravel Code List Special Remark Option Type (SRO).
     *
     * @param string $remarkType
     * @return self
     */
    public function setRemarkType($remarkType)
    {
        $this->remarkType = $remarkType;
        return $this;
    }

    /**
     * Gets as iD
     *
     * Used to further define the remark type.
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * Used to further define the remark type.
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Adds as travelerRefNumber
     *
     * One or more travelers to whom this request applies.
     *
     * @return self
     * @param \Recranet\OTA\Type\SpecialRemarkType\TravelerRefNumberAType $travelerRefNumber
     */
    public function addToTravelerRefNumber(\Recranet\OTA\Type\SpecialRemarkType\TravelerRefNumberAType $travelerRefNumber)
    {
        $this->travelerRefNumber[] = $travelerRefNumber;
        return $this;
    }

    /**
     * isset travelerRefNumber
     *
     * One or more travelers to whom this request applies.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTravelerRefNumber($index)
    {
        return isset($this->travelerRefNumber[$index]);
    }

    /**
     * unset travelerRefNumber
     *
     * One or more travelers to whom this request applies.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTravelerRefNumber($index)
    {
        unset($this->travelerRefNumber[$index]);
    }

    /**
     * Gets as travelerRefNumber
     *
     * One or more travelers to whom this request applies.
     *
     * @return \Recranet\OTA\Type\SpecialRemarkType\TravelerRefNumberAType[]
     */
    public function getTravelerRefNumber()
    {
        return $this->travelerRefNumber;
    }

    /**
     * Sets a new travelerRefNumber
     *
     * One or more travelers to whom this request applies.
     *
     * @param \Recranet\OTA\Type\SpecialRemarkType\TravelerRefNumberAType[] $travelerRefNumber
     * @return self
     */
    public function setTravelerRefNumber(array $travelerRefNumber = null)
    {
        $this->travelerRefNumber = $travelerRefNumber;
        return $this;
    }

    /**
     * Adds as flightRefNumber
     *
     * One or more flights to whom this request applies
     *
     * @return self
     * @param \Recranet\OTA\Type\SpecialRemarkType\FlightRefNumberAType $flightRefNumber
     */
    public function addToFlightRefNumber(\Recranet\OTA\Type\SpecialRemarkType\FlightRefNumberAType $flightRefNumber)
    {
        $this->flightRefNumber[] = $flightRefNumber;
        return $this;
    }

    /**
     * isset flightRefNumber
     *
     * One or more flights to whom this request applies
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFlightRefNumber($index)
    {
        return isset($this->flightRefNumber[$index]);
    }

    /**
     * unset flightRefNumber
     *
     * One or more flights to whom this request applies
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFlightRefNumber($index)
    {
        unset($this->flightRefNumber[$index]);
    }

    /**
     * Gets as flightRefNumber
     *
     * One or more flights to whom this request applies
     *
     * @return \Recranet\OTA\Type\SpecialRemarkType\FlightRefNumberAType[]
     */
    public function getFlightRefNumber()
    {
        return $this->flightRefNumber;
    }

    /**
     * Sets a new flightRefNumber
     *
     * One or more flights to whom this request applies
     *
     * @param \Recranet\OTA\Type\SpecialRemarkType\FlightRefNumberAType[] $flightRefNumber
     * @return self
     */
    public function setFlightRefNumber(array $flightRefNumber = null)
    {
        $this->flightRefNumber = $flightRefNumber;
        return $this;
    }

    /**
     * Gets as text
     *
     * Text associated with remark
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * Text associated with remark
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Adds as airline
     *
     * Denotes the receiver (or target) airline(s) for the remark.
     *
     * @return self
     * @param \Recranet\OTA\Type\CompanyNameType $airline
     */
    public function addToAirline(\Recranet\OTA\Type\CompanyNameType $airline)
    {
        $this->airline[] = $airline;
        return $this;
    }

    /**
     * isset airline
     *
     * Denotes the receiver (or target) airline(s) for the remark.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAirline($index)
    {
        return isset($this->airline[$index]);
    }

    /**
     * unset airline
     *
     * Denotes the receiver (or target) airline(s) for the remark.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAirline($index)
    {
        unset($this->airline[$index]);
    }

    /**
     * Gets as airline
     *
     * Denotes the receiver (or target) airline(s) for the remark.
     *
     * @return \Recranet\OTA\Type\CompanyNameType[]
     */
    public function getAirline()
    {
        return $this->airline;
    }

    /**
     * Sets a new airline
     *
     * Denotes the receiver (or target) airline(s) for the remark.
     *
     * @param \Recranet\OTA\Type\CompanyNameType[] $airline
     * @return self
     */
    public function setAirline(array $airline = null)
    {
        $this->airline = $airline;
        return $this;
    }

    /**
     * Adds as authorizedViewer
     *
     * A container for authorized viewers.
     *
     * @return self
     * @param \Recranet\OTA\Type\SpecialRemarkType\AuthorizedViewersAType\AuthorizedViewerAType $authorizedViewer
     */
    public function addToAuthorizedViewers(\Recranet\OTA\Type\SpecialRemarkType\AuthorizedViewersAType\AuthorizedViewerAType $authorizedViewer)
    {
        $this->authorizedViewers[] = $authorizedViewer;
        return $this;
    }

    /**
     * isset authorizedViewers
     *
     * A container for authorized viewers.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAuthorizedViewers($index)
    {
        return isset($this->authorizedViewers[$index]);
    }

    /**
     * unset authorizedViewers
     *
     * A container for authorized viewers.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAuthorizedViewers($index)
    {
        unset($this->authorizedViewers[$index]);
    }

    /**
     * Gets as authorizedViewers
     *
     * A container for authorized viewers.
     *
     * @return \Recranet\OTA\Type\SpecialRemarkType\AuthorizedViewersAType\AuthorizedViewerAType[]
     */
    public function getAuthorizedViewers()
    {
        return $this->authorizedViewers;
    }

    /**
     * Sets a new authorizedViewers
     *
     * A container for authorized viewers.
     *
     * @param \Recranet\OTA\Type\SpecialRemarkType\AuthorizedViewersAType\AuthorizedViewerAType[] $authorizedViewers
     * @return self
     */
    public function setAuthorizedViewers(array $authorizedViewers = null)
    {
        $this->authorizedViewers = $authorizedViewers;
        return $this;
    }
}

