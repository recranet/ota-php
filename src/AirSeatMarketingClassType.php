<?php

namespace Recranet\OTA;

/**
 * Class representing AirSeatMarketingClassType
 *
 * Seat marketing classification data for a section of seats within a specified aircraft equipment type.
 * XSD Type: AirSeatMarketingClassType
 */
class AirSeatMarketingClassType
{
    /**
     * The aircraft equipment code. Use a three character IATA code or a string value that is known to your trading partners.
     * (Reference) IATA Air Equipment codes:
     * http://www.worldtrading.net/airlines_airports_aircraft/search_aircraft_code.html
     *
     * @var string $airEquipType
     */
    private $airEquipType = null;

    /**
     * A unique ID for this seat information that may be referenced elsewhere in this message.
     *
     * @var string $rPH
     */
    private $rPH = null;

    /**
     * The unique ID (defined in the ConfirmedBookingInfo/ AirItinerary/AirItinerary/ OriginDestinationOptions/ OriginDestinationOption/ FlightSegment/@RPH) attribute if this is a premium seat re-accommodation.
     *
     * @var string $purchasedSeatRPH
     */
    private $purchasedSeatRPH = null;

    /**
     * Cabin information for the aircraft equipment type, including seat types, cabin class code and cabin sub-class information.
     *
     * @var \Recranet\OTA\AirSeatMarketingClassType\CabinInfoAType[] $cabinInfo
     */
    private $cabinInfo = [
        
    ];

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as airEquipType
     *
     * The aircraft equipment code. Use a three character IATA code or a string value that is known to your trading partners.
     * (Reference) IATA Air Equipment codes:
     * http://www.worldtrading.net/airlines_airports_aircraft/search_aircraft_code.html
     *
     * @return string
     */
    public function getAirEquipType()
    {
        return $this->airEquipType;
    }

    /**
     * Sets a new airEquipType
     *
     * The aircraft equipment code. Use a three character IATA code or a string value that is known to your trading partners.
     * (Reference) IATA Air Equipment codes:
     * http://www.worldtrading.net/airlines_airports_aircraft/search_aircraft_code.html
     *
     * @param string $airEquipType
     * @return self
     */
    public function setAirEquipType($airEquipType)
    {
        $this->airEquipType = $airEquipType;
        return $this;
    }

    /**
     * Gets as rPH
     *
     * A unique ID for this seat information that may be referenced elsewhere in this message.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * A unique ID for this seat information that may be referenced elsewhere in this message.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;
        return $this;
    }

    /**
     * Gets as purchasedSeatRPH
     *
     * The unique ID (defined in the ConfirmedBookingInfo/ AirItinerary/AirItinerary/ OriginDestinationOptions/ OriginDestinationOption/ FlightSegment/@RPH) attribute if this is a premium seat re-accommodation.
     *
     * @return string
     */
    public function getPurchasedSeatRPH()
    {
        return $this->purchasedSeatRPH;
    }

    /**
     * Sets a new purchasedSeatRPH
     *
     * The unique ID (defined in the ConfirmedBookingInfo/ AirItinerary/AirItinerary/ OriginDestinationOptions/ OriginDestinationOption/ FlightSegment/@RPH) attribute if this is a premium seat re-accommodation.
     *
     * @param string $purchasedSeatRPH
     * @return self
     */
    public function setPurchasedSeatRPH($purchasedSeatRPH)
    {
        $this->purchasedSeatRPH = $purchasedSeatRPH;
        return $this;
    }

    /**
     * Adds as cabinInfo
     *
     * Cabin information for the aircraft equipment type, including seat types, cabin class code and cabin sub-class information.
     *
     * @return self
     * @param \Recranet\OTA\AirSeatMarketingClassType\CabinInfoAType $cabinInfo
     */
    public function addToCabinInfo(\Recranet\OTA\AirSeatMarketingClassType\CabinInfoAType $cabinInfo)
    {
        $this->cabinInfo[] = $cabinInfo;
        return $this;
    }

    /**
     * isset cabinInfo
     *
     * Cabin information for the aircraft equipment type, including seat types, cabin class code and cabin sub-class information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCabinInfo($index)
    {
        return isset($this->cabinInfo[$index]);
    }

    /**
     * unset cabinInfo
     *
     * Cabin information for the aircraft equipment type, including seat types, cabin class code and cabin sub-class information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCabinInfo($index)
    {
        unset($this->cabinInfo[$index]);
    }

    /**
     * Gets as cabinInfo
     *
     * Cabin information for the aircraft equipment type, including seat types, cabin class code and cabin sub-class information.
     *
     * @return \Recranet\OTA\AirSeatMarketingClassType\CabinInfoAType[]
     */
    public function getCabinInfo()
    {
        return $this->cabinInfo;
    }

    /**
     * Sets a new cabinInfo
     *
     * Cabin information for the aircraft equipment type, including seat types, cabin class code and cabin sub-class information.
     *
     * @param \Recranet\OTA\AirSeatMarketingClassType\CabinInfoAType[] $cabinInfo
     * @return self
     */
    public function setCabinInfo(array $cabinInfo = null)
    {
        $this->cabinInfo = $cabinInfo;
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

