<?php

namespace Recranet\OTA\Type\PreferencesType;

/**
 * Class representing PrefCollectionAType
 */
class PrefCollectionAType
{
    /**
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @var string $shareSynchInd
     */
    private $shareSynchInd = null;

    /**
     * Permission for sharing data for marketing purposes.
     *
     * @var string $shareMarketInd
     */
    private $shareMarketInd = null;

    /**
     * Refer to OpenTravel Code List Travel Purpose (TVP).
     *
     * @var string $travelPurpose
     */
    private $travelPurpose = null;

    /**
     * Supplier-independent preferences.
     *
     * @var \Recranet\OTA\Type\CommonPrefType[] $commonPref
     */
    private $commonPref = [
        
    ];

    /**
     * A set of preferences for vehicle rental.
     *
     * @var \Recranet\OTA\Type\VehicleProfileRentalPrefType[] $vehicleRentalPref
     */
    private $vehicleRentalPref = [
        
    ];

    /**
     * A set of preferences for air travel.
     *
     * @var \Recranet\OTA\Type\AirlinePrefType[] $airlinePref
     */
    private $airlinePref = [
        
    ];

    /**
     * A set of preferences for hotel stay.
     *
     * @var \Recranet\OTA\Type\HotelPrefType[] $hotelPref
     */
    private $hotelPref = [
        
    ];

    /**
     * A set of preferences for rail travel
     *
     * @var \Recranet\OTA\Type\RailPrefType[] $railPref
     */
    private $railPref = [
        
    ];

    /**
     * A set of preferences for other services.
     *
     * @var \Recranet\OTA\Type\OtherSrvcPrefType[] $otherSrvcPref
     */
    private $otherSrvcPref = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @return string
     */
    public function getShareSynchInd()
    {
        return $this->shareSynchInd;
    }

    /**
     * Sets a new shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @param string $shareSynchInd
     * @return self
     */
    public function setShareSynchInd($shareSynchInd)
    {
        $this->shareSynchInd = $shareSynchInd;
        return $this;
    }

    /**
     * Gets as shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @return string
     */
    public function getShareMarketInd()
    {
        return $this->shareMarketInd;
    }

    /**
     * Sets a new shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @param string $shareMarketInd
     * @return self
     */
    public function setShareMarketInd($shareMarketInd)
    {
        $this->shareMarketInd = $shareMarketInd;
        return $this;
    }

    /**
     * Gets as travelPurpose
     *
     * Refer to OpenTravel Code List Travel Purpose (TVP).
     *
     * @return string
     */
    public function getTravelPurpose()
    {
        return $this->travelPurpose;
    }

    /**
     * Sets a new travelPurpose
     *
     * Refer to OpenTravel Code List Travel Purpose (TVP).
     *
     * @param string $travelPurpose
     * @return self
     */
    public function setTravelPurpose($travelPurpose)
    {
        $this->travelPurpose = $travelPurpose;
        return $this;
    }

    /**
     * Adds as commonPref
     *
     * Supplier-independent preferences.
     *
     * @return self
     * @param \Recranet\OTA\Type\CommonPrefType $commonPref
     */
    public function addToCommonPref(\Recranet\OTA\Type\CommonPrefType $commonPref)
    {
        $this->commonPref[] = $commonPref;
        return $this;
    }

    /**
     * isset commonPref
     *
     * Supplier-independent preferences.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCommonPref($index)
    {
        return isset($this->commonPref[$index]);
    }

    /**
     * unset commonPref
     *
     * Supplier-independent preferences.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCommonPref($index)
    {
        unset($this->commonPref[$index]);
    }

    /**
     * Gets as commonPref
     *
     * Supplier-independent preferences.
     *
     * @return \Recranet\OTA\Type\CommonPrefType[]
     */
    public function getCommonPref()
    {
        return $this->commonPref;
    }

    /**
     * Sets a new commonPref
     *
     * Supplier-independent preferences.
     *
     * @param \Recranet\OTA\Type\CommonPrefType[] $commonPref
     * @return self
     */
    public function setCommonPref(array $commonPref = null)
    {
        $this->commonPref = $commonPref;
        return $this;
    }

    /**
     * Adds as vehicleRentalPref
     *
     * A set of preferences for vehicle rental.
     *
     * @return self
     * @param \Recranet\OTA\Type\VehicleProfileRentalPrefType $vehicleRentalPref
     */
    public function addToVehicleRentalPref(\Recranet\OTA\Type\VehicleProfileRentalPrefType $vehicleRentalPref)
    {
        $this->vehicleRentalPref[] = $vehicleRentalPref;
        return $this;
    }

    /**
     * isset vehicleRentalPref
     *
     * A set of preferences for vehicle rental.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehicleRentalPref($index)
    {
        return isset($this->vehicleRentalPref[$index]);
    }

    /**
     * unset vehicleRentalPref
     *
     * A set of preferences for vehicle rental.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehicleRentalPref($index)
    {
        unset($this->vehicleRentalPref[$index]);
    }

    /**
     * Gets as vehicleRentalPref
     *
     * A set of preferences for vehicle rental.
     *
     * @return \Recranet\OTA\Type\VehicleProfileRentalPrefType[]
     */
    public function getVehicleRentalPref()
    {
        return $this->vehicleRentalPref;
    }

    /**
     * Sets a new vehicleRentalPref
     *
     * A set of preferences for vehicle rental.
     *
     * @param \Recranet\OTA\Type\VehicleProfileRentalPrefType[] $vehicleRentalPref
     * @return self
     */
    public function setVehicleRentalPref(array $vehicleRentalPref = null)
    {
        $this->vehicleRentalPref = $vehicleRentalPref;
        return $this;
    }

    /**
     * Adds as airlinePref
     *
     * A set of preferences for air travel.
     *
     * @return self
     * @param \Recranet\OTA\Type\AirlinePrefType $airlinePref
     */
    public function addToAirlinePref(\Recranet\OTA\Type\AirlinePrefType $airlinePref)
    {
        $this->airlinePref[] = $airlinePref;
        return $this;
    }

    /**
     * isset airlinePref
     *
     * A set of preferences for air travel.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAirlinePref($index)
    {
        return isset($this->airlinePref[$index]);
    }

    /**
     * unset airlinePref
     *
     * A set of preferences for air travel.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAirlinePref($index)
    {
        unset($this->airlinePref[$index]);
    }

    /**
     * Gets as airlinePref
     *
     * A set of preferences for air travel.
     *
     * @return \Recranet\OTA\Type\AirlinePrefType[]
     */
    public function getAirlinePref()
    {
        return $this->airlinePref;
    }

    /**
     * Sets a new airlinePref
     *
     * A set of preferences for air travel.
     *
     * @param \Recranet\OTA\Type\AirlinePrefType[] $airlinePref
     * @return self
     */
    public function setAirlinePref(array $airlinePref = null)
    {
        $this->airlinePref = $airlinePref;
        return $this;
    }

    /**
     * Adds as hotelPref
     *
     * A set of preferences for hotel stay.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelPrefType $hotelPref
     */
    public function addToHotelPref(\Recranet\OTA\Type\HotelPrefType $hotelPref)
    {
        $this->hotelPref[] = $hotelPref;
        return $this;
    }

    /**
     * isset hotelPref
     *
     * A set of preferences for hotel stay.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelPref($index)
    {
        return isset($this->hotelPref[$index]);
    }

    /**
     * unset hotelPref
     *
     * A set of preferences for hotel stay.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelPref($index)
    {
        unset($this->hotelPref[$index]);
    }

    /**
     * Gets as hotelPref
     *
     * A set of preferences for hotel stay.
     *
     * @return \Recranet\OTA\Type\HotelPrefType[]
     */
    public function getHotelPref()
    {
        return $this->hotelPref;
    }

    /**
     * Sets a new hotelPref
     *
     * A set of preferences for hotel stay.
     *
     * @param \Recranet\OTA\Type\HotelPrefType[] $hotelPref
     * @return self
     */
    public function setHotelPref(array $hotelPref = null)
    {
        $this->hotelPref = $hotelPref;
        return $this;
    }

    /**
     * Adds as railPref
     *
     * A set of preferences for rail travel
     *
     * @return self
     * @param \Recranet\OTA\Type\RailPrefType $railPref
     */
    public function addToRailPref(\Recranet\OTA\Type\RailPrefType $railPref)
    {
        $this->railPref[] = $railPref;
        return $this;
    }

    /**
     * isset railPref
     *
     * A set of preferences for rail travel
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRailPref($index)
    {
        return isset($this->railPref[$index]);
    }

    /**
     * unset railPref
     *
     * A set of preferences for rail travel
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRailPref($index)
    {
        unset($this->railPref[$index]);
    }

    /**
     * Gets as railPref
     *
     * A set of preferences for rail travel
     *
     * @return \Recranet\OTA\Type\RailPrefType[]
     */
    public function getRailPref()
    {
        return $this->railPref;
    }

    /**
     * Sets a new railPref
     *
     * A set of preferences for rail travel
     *
     * @param \Recranet\OTA\Type\RailPrefType[] $railPref
     * @return self
     */
    public function setRailPref(array $railPref = null)
    {
        $this->railPref = $railPref;
        return $this;
    }

    /**
     * Adds as otherSrvcPref
     *
     * A set of preferences for other services.
     *
     * @return self
     * @param \Recranet\OTA\Type\OtherSrvcPrefType $otherSrvcPref
     */
    public function addToOtherSrvcPref(\Recranet\OTA\Type\OtherSrvcPrefType $otherSrvcPref)
    {
        $this->otherSrvcPref[] = $otherSrvcPref;
        return $this;
    }

    /**
     * isset otherSrvcPref
     *
     * A set of preferences for other services.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOtherSrvcPref($index)
    {
        return isset($this->otherSrvcPref[$index]);
    }

    /**
     * unset otherSrvcPref
     *
     * A set of preferences for other services.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOtherSrvcPref($index)
    {
        unset($this->otherSrvcPref[$index]);
    }

    /**
     * Gets as otherSrvcPref
     *
     * A set of preferences for other services.
     *
     * @return \Recranet\OTA\Type\OtherSrvcPrefType[]
     */
    public function getOtherSrvcPref()
    {
        return $this->otherSrvcPref;
    }

    /**
     * Sets a new otherSrvcPref
     *
     * A set of preferences for other services.
     *
     * @param \Recranet\OTA\Type\OtherSrvcPrefType[] $otherSrvcPref
     * @return self
     */
    public function setOtherSrvcPref(array $otherSrvcPref = null)
    {
        $this->otherSrvcPref = $otherSrvcPref;
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

