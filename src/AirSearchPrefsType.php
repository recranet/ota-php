<?php

namespace Recranet\OTA;

/**
 * Class representing AirSearchPrefsType
 *
 * Defines user preferences to be used in conducting a search.
 * XSD Type: AirSearchPrefsType
 */
class AirSearchPrefsType
{
    /**
     * Indicates smoking is allowed when true and is not allowed when false.
     *
     *  false
     *
     * @var bool $smokingAllowed
     */
    private $smokingAllowed = null;

    /**
     * Request for flights in response that meet the given Department of Transport on-time rate. This is a number between 0 and 100.
     *
     * @var float $onTimeRate
     */
    private $onTimeRate = null;

    /**
     * Request flights that are e-ticketable in the response.
     *
     *  false
     *
     * @var bool $eTicketDesired
     */
    private $eTicketDesired = null;

    /**
     * Request flights that have no more than the requested number of stops.
     *
     * @var int $maxStopsQuantity
     */
    private $maxStopsQuantity = null;

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
     * Specify vendors to include and exclude from the response.
     *
     * @var \Recranet\OTA\AirSearchPrefsType\VendorPrefAType[] $vendorPref
     */
    private $vendorPref = [
        
    ];

    /**
     * Defines preferred flight characteristics to be used in a search.
     *
     * @var \Recranet\OTA\AirSearchPrefsType\FlightTypePrefAType[] $flightTypePref
     */
    private $flightTypePref = [
        
    ];

    /**
     * Constrains a fare search to those with restrictions that satisfy user-imposed limitations.
     *
     * @var \Recranet\OTA\AirSearchPrefsType\FareRestrictPrefAType[] $fareRestrictPref
     */
    private $fareRestrictPref = [
        
    ];

    /**
     * Defines preferred equipment profile(s) to be used in a search.
     *
     * @var \Recranet\OTA\EquipmentTypePrefType[] $equipPref
     */
    private $equipPref = [
        
    ];

    /**
     * Defines preferred cabin(s) to be used in a search.
     *
     * @var \Recranet\OTA\AirSearchPrefsType\CabinPrefAType[] $cabinPref
     */
    private $cabinPref = [
        
    ];

    /**
     * Defines Distribution prefernces.
     *
     * @var \Recranet\OTA\AirSearchPrefsType\TicketDistribPrefAType[] $ticketDistribPref
     */
    private $ticketDistribPref = [
        
    ];

    /**
     * The booking class seat preferences.
     *
     * @var \Recranet\OTA\AirSearchPrefsType\BookingSeatPrefAType $bookingSeatPref
     */
    private $bookingSeatPref = null;

    /**
     * Gets as smokingAllowed
     *
     * Indicates smoking is allowed when true and is not allowed when false.
     *
     *  false
     *
     * @return bool
     */
    public function getSmokingAllowed()
    {
        return $this->smokingAllowed;
    }

    /**
     * Sets a new smokingAllowed
     *
     * Indicates smoking is allowed when true and is not allowed when false.
     *
     *  false
     *
     * @param bool $smokingAllowed
     * @return self
     */
    public function setSmokingAllowed($smokingAllowed)
    {
        $this->smokingAllowed = $smokingAllowed;
        return $this;
    }

    /**
     * Gets as onTimeRate
     *
     * Request for flights in response that meet the given Department of Transport on-time rate. This is a number between 0 and 100.
     *
     * @return float
     */
    public function getOnTimeRate()
    {
        return $this->onTimeRate;
    }

    /**
     * Sets a new onTimeRate
     *
     * Request for flights in response that meet the given Department of Transport on-time rate. This is a number between 0 and 100.
     *
     * @param float $onTimeRate
     * @return self
     */
    public function setOnTimeRate($onTimeRate)
    {
        $this->onTimeRate = $onTimeRate;
        return $this;
    }

    /**
     * Gets as eTicketDesired
     *
     * Request flights that are e-ticketable in the response.
     *
     *  false
     *
     * @return bool
     */
    public function getETicketDesired()
    {
        return $this->eTicketDesired;
    }

    /**
     * Sets a new eTicketDesired
     *
     * Request flights that are e-ticketable in the response.
     *
     *  false
     *
     * @param bool $eTicketDesired
     * @return self
     */
    public function setETicketDesired($eTicketDesired)
    {
        $this->eTicketDesired = $eTicketDesired;
        return $this;
    }

    /**
     * Gets as maxStopsQuantity
     *
     * Request flights that have no more than the requested number of stops.
     *
     * @return int
     */
    public function getMaxStopsQuantity()
    {
        return $this->maxStopsQuantity;
    }

    /**
     * Sets a new maxStopsQuantity
     *
     * Request flights that have no more than the requested number of stops.
     *
     * @param int $maxStopsQuantity
     * @return self
     */
    public function setMaxStopsQuantity($maxStopsQuantity)
    {
        $this->maxStopsQuantity = $maxStopsQuantity;
        return $this;
    }

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
     * Adds as vendorPref
     *
     * Specify vendors to include and exclude from the response.
     *
     * @return self
     * @param \Recranet\OTA\AirSearchPrefsType\VendorPrefAType $vendorPref
     */
    public function addToVendorPref(\Recranet\OTA\AirSearchPrefsType\VendorPrefAType $vendorPref)
    {
        $this->vendorPref[] = $vendorPref;
        return $this;
    }

    /**
     * isset vendorPref
     *
     * Specify vendors to include and exclude from the response.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVendorPref($index)
    {
        return isset($this->vendorPref[$index]);
    }

    /**
     * unset vendorPref
     *
     * Specify vendors to include and exclude from the response.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVendorPref($index)
    {
        unset($this->vendorPref[$index]);
    }

    /**
     * Gets as vendorPref
     *
     * Specify vendors to include and exclude from the response.
     *
     * @return \Recranet\OTA\AirSearchPrefsType\VendorPrefAType[]
     */
    public function getVendorPref()
    {
        return $this->vendorPref;
    }

    /**
     * Sets a new vendorPref
     *
     * Specify vendors to include and exclude from the response.
     *
     * @param \Recranet\OTA\AirSearchPrefsType\VendorPrefAType[] $vendorPref
     * @return self
     */
    public function setVendorPref(array $vendorPref = null)
    {
        $this->vendorPref = $vendorPref;
        return $this;
    }

    /**
     * Adds as flightTypePref
     *
     * Defines preferred flight characteristics to be used in a search.
     *
     * @return self
     * @param \Recranet\OTA\AirSearchPrefsType\FlightTypePrefAType $flightTypePref
     */
    public function addToFlightTypePref(\Recranet\OTA\AirSearchPrefsType\FlightTypePrefAType $flightTypePref)
    {
        $this->flightTypePref[] = $flightTypePref;
        return $this;
    }

    /**
     * isset flightTypePref
     *
     * Defines preferred flight characteristics to be used in a search.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFlightTypePref($index)
    {
        return isset($this->flightTypePref[$index]);
    }

    /**
     * unset flightTypePref
     *
     * Defines preferred flight characteristics to be used in a search.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFlightTypePref($index)
    {
        unset($this->flightTypePref[$index]);
    }

    /**
     * Gets as flightTypePref
     *
     * Defines preferred flight characteristics to be used in a search.
     *
     * @return \Recranet\OTA\AirSearchPrefsType\FlightTypePrefAType[]
     */
    public function getFlightTypePref()
    {
        return $this->flightTypePref;
    }

    /**
     * Sets a new flightTypePref
     *
     * Defines preferred flight characteristics to be used in a search.
     *
     * @param \Recranet\OTA\AirSearchPrefsType\FlightTypePrefAType[] $flightTypePref
     * @return self
     */
    public function setFlightTypePref(array $flightTypePref = null)
    {
        $this->flightTypePref = $flightTypePref;
        return $this;
    }

    /**
     * Adds as fareRestrictPref
     *
     * Constrains a fare search to those with restrictions that satisfy user-imposed limitations.
     *
     * @return self
     * @param \Recranet\OTA\AirSearchPrefsType\FareRestrictPrefAType $fareRestrictPref
     */
    public function addToFareRestrictPref(\Recranet\OTA\AirSearchPrefsType\FareRestrictPrefAType $fareRestrictPref)
    {
        $this->fareRestrictPref[] = $fareRestrictPref;
        return $this;
    }

    /**
     * isset fareRestrictPref
     *
     * Constrains a fare search to those with restrictions that satisfy user-imposed limitations.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFareRestrictPref($index)
    {
        return isset($this->fareRestrictPref[$index]);
    }

    /**
     * unset fareRestrictPref
     *
     * Constrains a fare search to those with restrictions that satisfy user-imposed limitations.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFareRestrictPref($index)
    {
        unset($this->fareRestrictPref[$index]);
    }

    /**
     * Gets as fareRestrictPref
     *
     * Constrains a fare search to those with restrictions that satisfy user-imposed limitations.
     *
     * @return \Recranet\OTA\AirSearchPrefsType\FareRestrictPrefAType[]
     */
    public function getFareRestrictPref()
    {
        return $this->fareRestrictPref;
    }

    /**
     * Sets a new fareRestrictPref
     *
     * Constrains a fare search to those with restrictions that satisfy user-imposed limitations.
     *
     * @param \Recranet\OTA\AirSearchPrefsType\FareRestrictPrefAType[] $fareRestrictPref
     * @return self
     */
    public function setFareRestrictPref(array $fareRestrictPref = null)
    {
        $this->fareRestrictPref = $fareRestrictPref;
        return $this;
    }

    /**
     * Adds as equipPref
     *
     * Defines preferred equipment profile(s) to be used in a search.
     *
     * @return self
     * @param \Recranet\OTA\EquipmentTypePrefType $equipPref
     */
    public function addToEquipPref(\Recranet\OTA\EquipmentTypePrefType $equipPref)
    {
        $this->equipPref[] = $equipPref;
        return $this;
    }

    /**
     * isset equipPref
     *
     * Defines preferred equipment profile(s) to be used in a search.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEquipPref($index)
    {
        return isset($this->equipPref[$index]);
    }

    /**
     * unset equipPref
     *
     * Defines preferred equipment profile(s) to be used in a search.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEquipPref($index)
    {
        unset($this->equipPref[$index]);
    }

    /**
     * Gets as equipPref
     *
     * Defines preferred equipment profile(s) to be used in a search.
     *
     * @return \Recranet\OTA\EquipmentTypePrefType[]
     */
    public function getEquipPref()
    {
        return $this->equipPref;
    }

    /**
     * Sets a new equipPref
     *
     * Defines preferred equipment profile(s) to be used in a search.
     *
     * @param \Recranet\OTA\EquipmentTypePrefType[] $equipPref
     * @return self
     */
    public function setEquipPref(array $equipPref = null)
    {
        $this->equipPref = $equipPref;
        return $this;
    }

    /**
     * Adds as cabinPref
     *
     * Defines preferred cabin(s) to be used in a search.
     *
     * @return self
     * @param \Recranet\OTA\AirSearchPrefsType\CabinPrefAType $cabinPref
     */
    public function addToCabinPref(\Recranet\OTA\AirSearchPrefsType\CabinPrefAType $cabinPref)
    {
        $this->cabinPref[] = $cabinPref;
        return $this;
    }

    /**
     * isset cabinPref
     *
     * Defines preferred cabin(s) to be used in a search.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCabinPref($index)
    {
        return isset($this->cabinPref[$index]);
    }

    /**
     * unset cabinPref
     *
     * Defines preferred cabin(s) to be used in a search.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCabinPref($index)
    {
        unset($this->cabinPref[$index]);
    }

    /**
     * Gets as cabinPref
     *
     * Defines preferred cabin(s) to be used in a search.
     *
     * @return \Recranet\OTA\AirSearchPrefsType\CabinPrefAType[]
     */
    public function getCabinPref()
    {
        return $this->cabinPref;
    }

    /**
     * Sets a new cabinPref
     *
     * Defines preferred cabin(s) to be used in a search.
     *
     * @param \Recranet\OTA\AirSearchPrefsType\CabinPrefAType[] $cabinPref
     * @return self
     */
    public function setCabinPref(array $cabinPref = null)
    {
        $this->cabinPref = $cabinPref;
        return $this;
    }

    /**
     * Adds as ticketDistribPref
     *
     * Defines Distribution prefernces.
     *
     * @return self
     * @param \Recranet\OTA\AirSearchPrefsType\TicketDistribPrefAType $ticketDistribPref
     */
    public function addToTicketDistribPref(\Recranet\OTA\AirSearchPrefsType\TicketDistribPrefAType $ticketDistribPref)
    {
        $this->ticketDistribPref[] = $ticketDistribPref;
        return $this;
    }

    /**
     * isset ticketDistribPref
     *
     * Defines Distribution prefernces.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTicketDistribPref($index)
    {
        return isset($this->ticketDistribPref[$index]);
    }

    /**
     * unset ticketDistribPref
     *
     * Defines Distribution prefernces.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTicketDistribPref($index)
    {
        unset($this->ticketDistribPref[$index]);
    }

    /**
     * Gets as ticketDistribPref
     *
     * Defines Distribution prefernces.
     *
     * @return \Recranet\OTA\AirSearchPrefsType\TicketDistribPrefAType[]
     */
    public function getTicketDistribPref()
    {
        return $this->ticketDistribPref;
    }

    /**
     * Sets a new ticketDistribPref
     *
     * Defines Distribution prefernces.
     *
     * @param \Recranet\OTA\AirSearchPrefsType\TicketDistribPrefAType[] $ticketDistribPref
     * @return self
     */
    public function setTicketDistribPref(array $ticketDistribPref = null)
    {
        $this->ticketDistribPref = $ticketDistribPref;
        return $this;
    }

    /**
     * Gets as bookingSeatPref
     *
     * The booking class seat preferences.
     *
     * @return \Recranet\OTA\AirSearchPrefsType\BookingSeatPrefAType
     */
    public function getBookingSeatPref()
    {
        return $this->bookingSeatPref;
    }

    /**
     * Sets a new bookingSeatPref
     *
     * The booking class seat preferences.
     *
     * @param \Recranet\OTA\AirSearchPrefsType\BookingSeatPrefAType $bookingSeatPref
     * @return self
     */
    public function setBookingSeatPref(?\Recranet\OTA\AirSearchPrefsType\BookingSeatPrefAType $bookingSeatPref = null)
    {
        $this->bookingSeatPref = $bookingSeatPref;
        return $this;
    }
}

