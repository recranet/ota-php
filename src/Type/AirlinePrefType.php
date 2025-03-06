<?php

namespace Recranet\OTA\Type;

/**
 * Class representing AirlinePrefType
 *
 * Identifies a collection of preferences for airline travel.
 * XSD Type: AirlinePrefType
 */
class AirlinePrefType
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
     * Used to indicate a level of preference for an associated item.
     *
     * @var string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Indicates smoking is allowed when true and is not allowed when false.
     *
     *  false
     *
     * @var bool $smokingAllowed
     */
    private $smokingAllowed = null;

    /**
     * Category of airline passenger, using standard ATPCO codes.
     *
     * @var string $passengerTypeCode
     */
    private $passengerTypeCode = null;

    /**
     * Type of airline ticket preferred for this collection.
     *
     * @var string $airTicketType
     */
    private $airTicketType = null;

    /**
     * Identifies the preferred loyalty program(s).
     *
     * @var \Recranet\OTA\Type\LoyaltyPrefType[] $loyaltyPref
     */
    private $loyaltyPref = [
        
    ];

    /**
     * Identifies the preferred airline carrier(s) by name.
     *
     * @var \Recranet\OTA\Type\AirlinePrefType\VendorPrefAType[] $vendorPref
     */
    private $vendorPref = [
        
    ];

    /**
     * Preferred form(s) of payment.
     *
     * @var \Recranet\OTA\Type\PaymentFormPrefType[] $paymentFormPref
     */
    private $paymentFormPref = [
        
    ];

    /**
     * Identifies the preferred origination airport for travel (using IATA airport codes).
     *
     * @var \Recranet\OTA\Type\AirportPrefType[] $airportOriginPref
     */
    private $airportOriginPref = [
        
    ];

    /**
     * Identifies the preferred destination airport for travel (using IATA airport codes).
     *
     * @var \Recranet\OTA\Type\AirportPrefType $airportDestinationPref
     */
    private $airportDestinationPref = null;

    /**
     * Indicates the preferred connection airport(s) (using IATA airport codes)..
     *
     * @var \Recranet\OTA\Type\AirportPrefType[] $airportRoutePref
     */
    private $airportRoutePref = [
        
    ];

    /**
     * Indicates preferred fare restrictions to be used in search.
     *
     * @var \Recranet\OTA\Type\AirlinePrefType\FareRestrictPrefAType[] $fareRestrictPref
     */
    private $fareRestrictPref = [
        
    ];

    /**
     * Indicates preferred fare.
     *
     * @var \Recranet\OTA\Type\AirlinePrefType\FarePrefAType[] $farePref
     */
    private $farePref = [
        
    ];

    /**
     * Provides the contract code for a negotiated fare.
     *
     * @var \Recranet\OTA\Type\AirlinePrefType\TourCodePrefAType[] $tourCodePref
     */
    private $tourCodePref = [
        
    ];

    /**
     * Indicates preferred flight characteristics to be used in a search (e.g., connections, stopovers).
     *
     * @var \Recranet\OTA\Type\AirlinePrefType\FlightTypePrefAType[] $flightTypePref
     */
    private $flightTypePref = [
        
    ];

    /**
     * Indicates preferred equipment type(s) to be used in a search.
     *
     * @var \Recranet\OTA\Type\EquipmentTypePrefType[] $equipPref
     */
    private $equipPref = [
        
    ];

    /**
     * Indicates preferred cabin(s) to be used in a search.
     *
     * @var \Recranet\OTA\Type\AirlinePrefType\CabinPrefAType[] $cabinPref
     */
    private $cabinPref = [
        
    ];

    /**
     * Indicates preferred seat characteristics. Refer to OpenTravel Code List Seat Preference (STP) for codes.
     *
     * @var \Recranet\OTA\Type\AirlinePrefType\SeatPrefAType[] $seatPref
     */
    private $seatPref = [
        
    ];

    /**
     * Indicates preferred ticket distribution method (e.g., fax, eMail, courier, mail, airport pickup)
     *
     * @var \Recranet\OTA\Type\TicketDistribPrefType[] $ticketDistribPref
     */
    private $ticketDistribPref = [
        
    ];

    /**
     * Indicates preferred meal type (e.g., vegetarian, Kosher, low fat)
     *
     * @var \Recranet\OTA\Type\MealPrefType[] $mealPref
     */
    private $mealPref = [
        
    ];

    /**
     * Indicates preferred special request(s) to be used with this collection of preferences.
     *
     * @var \Recranet\OTA\Type\SpecRequestPrefType[] $specRequestPref
     */
    private $specRequestPref = [
        
    ];

    /**
     * Indicates Special Service Request preference type.
     *
     * @var \Recranet\OTA\Type\AirlinePrefType\SSRPrefAType[] $sSRPref
     */
    private $sSRPref = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Media and entertainment preferences.
     *
     * @var \Recranet\OTA\Type\MediaEntertainPrefType[] $mediaEntertainPref
     */
    private $mediaEntertainPref = [
        
    ];

    /**
     * Indicates preferred information for pet accompanying traveler.
     *
     * @var \Recranet\OTA\Type\PetInfoPrefType[] $petInfoPref
     */
    private $petInfoPref = [
        
    ];

    /**
     * Information related to back office accounting information for the travel agency.
     *
     * @var \Recranet\OTA\Type\AirlinePrefType\AccountInformationAType $accountInformation
     */
    private $accountInformation = null;

    /**
     * Other Service Information of the airline.
     *
     * @var \Recranet\OTA\Type\OtherServiceInfoType[] $oSIPref
     */
    private $oSIPref = [
        
    ];

    /**
     * This element stores data about an airline marketing keyword.
     *
     * @var \Recranet\OTA\Type\AirlinePrefType\KeywordPrefAType[] $keywordPref
     */
    private $keywordPref = [
        
    ];

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
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;
        return $this;
    }

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
     * Gets as passengerTypeCode
     *
     * Category of airline passenger, using standard ATPCO codes.
     *
     * @return string
     */
    public function getPassengerTypeCode()
    {
        return $this->passengerTypeCode;
    }

    /**
     * Sets a new passengerTypeCode
     *
     * Category of airline passenger, using standard ATPCO codes.
     *
     * @param string $passengerTypeCode
     * @return self
     */
    public function setPassengerTypeCode($passengerTypeCode)
    {
        $this->passengerTypeCode = $passengerTypeCode;
        return $this;
    }

    /**
     * Gets as airTicketType
     *
     * Type of airline ticket preferred for this collection.
     *
     * @return string
     */
    public function getAirTicketType()
    {
        return $this->airTicketType;
    }

    /**
     * Sets a new airTicketType
     *
     * Type of airline ticket preferred for this collection.
     *
     * @param string $airTicketType
     * @return self
     */
    public function setAirTicketType($airTicketType)
    {
        $this->airTicketType = $airTicketType;
        return $this;
    }

    /**
     * Adds as loyaltyPref
     *
     * Identifies the preferred loyalty program(s).
     *
     * @return self
     * @param \Recranet\OTA\Type\LoyaltyPrefType $loyaltyPref
     */
    public function addToLoyaltyPref(\Recranet\OTA\Type\LoyaltyPrefType $loyaltyPref)
    {
        $this->loyaltyPref[] = $loyaltyPref;
        return $this;
    }

    /**
     * isset loyaltyPref
     *
     * Identifies the preferred loyalty program(s).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLoyaltyPref($index)
    {
        return isset($this->loyaltyPref[$index]);
    }

    /**
     * unset loyaltyPref
     *
     * Identifies the preferred loyalty program(s).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLoyaltyPref($index)
    {
        unset($this->loyaltyPref[$index]);
    }

    /**
     * Gets as loyaltyPref
     *
     * Identifies the preferred loyalty program(s).
     *
     * @return \Recranet\OTA\Type\LoyaltyPrefType[]
     */
    public function getLoyaltyPref()
    {
        return $this->loyaltyPref;
    }

    /**
     * Sets a new loyaltyPref
     *
     * Identifies the preferred loyalty program(s).
     *
     * @param \Recranet\OTA\Type\LoyaltyPrefType[] $loyaltyPref
     * @return self
     */
    public function setLoyaltyPref(array $loyaltyPref = null)
    {
        $this->loyaltyPref = $loyaltyPref;
        return $this;
    }

    /**
     * Adds as vendorPref
     *
     * Identifies the preferred airline carrier(s) by name.
     *
     * @return self
     * @param \Recranet\OTA\Type\AirlinePrefType\VendorPrefAType $vendorPref
     */
    public function addToVendorPref(\Recranet\OTA\Type\AirlinePrefType\VendorPrefAType $vendorPref)
    {
        $this->vendorPref[] = $vendorPref;
        return $this;
    }

    /**
     * isset vendorPref
     *
     * Identifies the preferred airline carrier(s) by name.
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
     * Identifies the preferred airline carrier(s) by name.
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
     * Identifies the preferred airline carrier(s) by name.
     *
     * @return \Recranet\OTA\Type\AirlinePrefType\VendorPrefAType[]
     */
    public function getVendorPref()
    {
        return $this->vendorPref;
    }

    /**
     * Sets a new vendorPref
     *
     * Identifies the preferred airline carrier(s) by name.
     *
     * @param \Recranet\OTA\Type\AirlinePrefType\VendorPrefAType[] $vendorPref
     * @return self
     */
    public function setVendorPref(array $vendorPref = null)
    {
        $this->vendorPref = $vendorPref;
        return $this;
    }

    /**
     * Adds as paymentFormPref
     *
     * Preferred form(s) of payment.
     *
     * @return self
     * @param \Recranet\OTA\Type\PaymentFormPrefType $paymentFormPref
     */
    public function addToPaymentFormPref(\Recranet\OTA\Type\PaymentFormPrefType $paymentFormPref)
    {
        $this->paymentFormPref[] = $paymentFormPref;
        return $this;
    }

    /**
     * isset paymentFormPref
     *
     * Preferred form(s) of payment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentFormPref($index)
    {
        return isset($this->paymentFormPref[$index]);
    }

    /**
     * unset paymentFormPref
     *
     * Preferred form(s) of payment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentFormPref($index)
    {
        unset($this->paymentFormPref[$index]);
    }

    /**
     * Gets as paymentFormPref
     *
     * Preferred form(s) of payment.
     *
     * @return \Recranet\OTA\Type\PaymentFormPrefType[]
     */
    public function getPaymentFormPref()
    {
        return $this->paymentFormPref;
    }

    /**
     * Sets a new paymentFormPref
     *
     * Preferred form(s) of payment.
     *
     * @param \Recranet\OTA\Type\PaymentFormPrefType[] $paymentFormPref
     * @return self
     */
    public function setPaymentFormPref(array $paymentFormPref = null)
    {
        $this->paymentFormPref = $paymentFormPref;
        return $this;
    }

    /**
     * Adds as airportOriginPref
     *
     * Identifies the preferred origination airport for travel (using IATA airport codes).
     *
     * @return self
     * @param \Recranet\OTA\Type\AirportPrefType $airportOriginPref
     */
    public function addToAirportOriginPref(\Recranet\OTA\Type\AirportPrefType $airportOriginPref)
    {
        $this->airportOriginPref[] = $airportOriginPref;
        return $this;
    }

    /**
     * isset airportOriginPref
     *
     * Identifies the preferred origination airport for travel (using IATA airport codes).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAirportOriginPref($index)
    {
        return isset($this->airportOriginPref[$index]);
    }

    /**
     * unset airportOriginPref
     *
     * Identifies the preferred origination airport for travel (using IATA airport codes).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAirportOriginPref($index)
    {
        unset($this->airportOriginPref[$index]);
    }

    /**
     * Gets as airportOriginPref
     *
     * Identifies the preferred origination airport for travel (using IATA airport codes).
     *
     * @return \Recranet\OTA\Type\AirportPrefType[]
     */
    public function getAirportOriginPref()
    {
        return $this->airportOriginPref;
    }

    /**
     * Sets a new airportOriginPref
     *
     * Identifies the preferred origination airport for travel (using IATA airport codes).
     *
     * @param \Recranet\OTA\Type\AirportPrefType[] $airportOriginPref
     * @return self
     */
    public function setAirportOriginPref(array $airportOriginPref = null)
    {
        $this->airportOriginPref = $airportOriginPref;
        return $this;
    }

    /**
     * Gets as airportDestinationPref
     *
     * Identifies the preferred destination airport for travel (using IATA airport codes).
     *
     * @return \Recranet\OTA\Type\AirportPrefType
     */
    public function getAirportDestinationPref()
    {
        return $this->airportDestinationPref;
    }

    /**
     * Sets a new airportDestinationPref
     *
     * Identifies the preferred destination airport for travel (using IATA airport codes).
     *
     * @param \Recranet\OTA\Type\AirportPrefType $airportDestinationPref
     * @return self
     */
    public function setAirportDestinationPref(?\Recranet\OTA\Type\AirportPrefType $airportDestinationPref = null)
    {
        $this->airportDestinationPref = $airportDestinationPref;
        return $this;
    }

    /**
     * Adds as airportRoutePref
     *
     * Indicates the preferred connection airport(s) (using IATA airport codes)..
     *
     * @return self
     * @param \Recranet\OTA\Type\AirportPrefType $airportRoutePref
     */
    public function addToAirportRoutePref(\Recranet\OTA\Type\AirportPrefType $airportRoutePref)
    {
        $this->airportRoutePref[] = $airportRoutePref;
        return $this;
    }

    /**
     * isset airportRoutePref
     *
     * Indicates the preferred connection airport(s) (using IATA airport codes)..
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAirportRoutePref($index)
    {
        return isset($this->airportRoutePref[$index]);
    }

    /**
     * unset airportRoutePref
     *
     * Indicates the preferred connection airport(s) (using IATA airport codes)..
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAirportRoutePref($index)
    {
        unset($this->airportRoutePref[$index]);
    }

    /**
     * Gets as airportRoutePref
     *
     * Indicates the preferred connection airport(s) (using IATA airport codes)..
     *
     * @return \Recranet\OTA\Type\AirportPrefType[]
     */
    public function getAirportRoutePref()
    {
        return $this->airportRoutePref;
    }

    /**
     * Sets a new airportRoutePref
     *
     * Indicates the preferred connection airport(s) (using IATA airport codes)..
     *
     * @param \Recranet\OTA\Type\AirportPrefType[] $airportRoutePref
     * @return self
     */
    public function setAirportRoutePref(array $airportRoutePref = null)
    {
        $this->airportRoutePref = $airportRoutePref;
        return $this;
    }

    /**
     * Adds as fareRestrictPref
     *
     * Indicates preferred fare restrictions to be used in search.
     *
     * @return self
     * @param \Recranet\OTA\Type\AirlinePrefType\FareRestrictPrefAType $fareRestrictPref
     */
    public function addToFareRestrictPref(\Recranet\OTA\Type\AirlinePrefType\FareRestrictPrefAType $fareRestrictPref)
    {
        $this->fareRestrictPref[] = $fareRestrictPref;
        return $this;
    }

    /**
     * isset fareRestrictPref
     *
     * Indicates preferred fare restrictions to be used in search.
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
     * Indicates preferred fare restrictions to be used in search.
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
     * Indicates preferred fare restrictions to be used in search.
     *
     * @return \Recranet\OTA\Type\AirlinePrefType\FareRestrictPrefAType[]
     */
    public function getFareRestrictPref()
    {
        return $this->fareRestrictPref;
    }

    /**
     * Sets a new fareRestrictPref
     *
     * Indicates preferred fare restrictions to be used in search.
     *
     * @param \Recranet\OTA\Type\AirlinePrefType\FareRestrictPrefAType[] $fareRestrictPref
     * @return self
     */
    public function setFareRestrictPref(array $fareRestrictPref = null)
    {
        $this->fareRestrictPref = $fareRestrictPref;
        return $this;
    }

    /**
     * Adds as farePref
     *
     * Indicates preferred fare.
     *
     * @return self
     * @param \Recranet\OTA\Type\AirlinePrefType\FarePrefAType $farePref
     */
    public function addToFarePref(\Recranet\OTA\Type\AirlinePrefType\FarePrefAType $farePref)
    {
        $this->farePref[] = $farePref;
        return $this;
    }

    /**
     * isset farePref
     *
     * Indicates preferred fare.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFarePref($index)
    {
        return isset($this->farePref[$index]);
    }

    /**
     * unset farePref
     *
     * Indicates preferred fare.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFarePref($index)
    {
        unset($this->farePref[$index]);
    }

    /**
     * Gets as farePref
     *
     * Indicates preferred fare.
     *
     * @return \Recranet\OTA\Type\AirlinePrefType\FarePrefAType[]
     */
    public function getFarePref()
    {
        return $this->farePref;
    }

    /**
     * Sets a new farePref
     *
     * Indicates preferred fare.
     *
     * @param \Recranet\OTA\Type\AirlinePrefType\FarePrefAType[] $farePref
     * @return self
     */
    public function setFarePref(array $farePref = null)
    {
        $this->farePref = $farePref;
        return $this;
    }

    /**
     * Adds as tourCodePref
     *
     * Provides the contract code for a negotiated fare.
     *
     * @return self
     * @param \Recranet\OTA\Type\AirlinePrefType\TourCodePrefAType $tourCodePref
     */
    public function addToTourCodePref(\Recranet\OTA\Type\AirlinePrefType\TourCodePrefAType $tourCodePref)
    {
        $this->tourCodePref[] = $tourCodePref;
        return $this;
    }

    /**
     * isset tourCodePref
     *
     * Provides the contract code for a negotiated fare.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTourCodePref($index)
    {
        return isset($this->tourCodePref[$index]);
    }

    /**
     * unset tourCodePref
     *
     * Provides the contract code for a negotiated fare.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTourCodePref($index)
    {
        unset($this->tourCodePref[$index]);
    }

    /**
     * Gets as tourCodePref
     *
     * Provides the contract code for a negotiated fare.
     *
     * @return \Recranet\OTA\Type\AirlinePrefType\TourCodePrefAType[]
     */
    public function getTourCodePref()
    {
        return $this->tourCodePref;
    }

    /**
     * Sets a new tourCodePref
     *
     * Provides the contract code for a negotiated fare.
     *
     * @param \Recranet\OTA\Type\AirlinePrefType\TourCodePrefAType[] $tourCodePref
     * @return self
     */
    public function setTourCodePref(array $tourCodePref = null)
    {
        $this->tourCodePref = $tourCodePref;
        return $this;
    }

    /**
     * Adds as flightTypePref
     *
     * Indicates preferred flight characteristics to be used in a search (e.g., connections, stopovers).
     *
     * @return self
     * @param \Recranet\OTA\Type\AirlinePrefType\FlightTypePrefAType $flightTypePref
     */
    public function addToFlightTypePref(\Recranet\OTA\Type\AirlinePrefType\FlightTypePrefAType $flightTypePref)
    {
        $this->flightTypePref[] = $flightTypePref;
        return $this;
    }

    /**
     * isset flightTypePref
     *
     * Indicates preferred flight characteristics to be used in a search (e.g., connections, stopovers).
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
     * Indicates preferred flight characteristics to be used in a search (e.g., connections, stopovers).
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
     * Indicates preferred flight characteristics to be used in a search (e.g., connections, stopovers).
     *
     * @return \Recranet\OTA\Type\AirlinePrefType\FlightTypePrefAType[]
     */
    public function getFlightTypePref()
    {
        return $this->flightTypePref;
    }

    /**
     * Sets a new flightTypePref
     *
     * Indicates preferred flight characteristics to be used in a search (e.g., connections, stopovers).
     *
     * @param \Recranet\OTA\Type\AirlinePrefType\FlightTypePrefAType[] $flightTypePref
     * @return self
     */
    public function setFlightTypePref(array $flightTypePref = null)
    {
        $this->flightTypePref = $flightTypePref;
        return $this;
    }

    /**
     * Adds as equipPref
     *
     * Indicates preferred equipment type(s) to be used in a search.
     *
     * @return self
     * @param \Recranet\OTA\Type\EquipmentTypePrefType $equipPref
     */
    public function addToEquipPref(\Recranet\OTA\Type\EquipmentTypePrefType $equipPref)
    {
        $this->equipPref[] = $equipPref;
        return $this;
    }

    /**
     * isset equipPref
     *
     * Indicates preferred equipment type(s) to be used in a search.
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
     * Indicates preferred equipment type(s) to be used in a search.
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
     * Indicates preferred equipment type(s) to be used in a search.
     *
     * @return \Recranet\OTA\Type\EquipmentTypePrefType[]
     */
    public function getEquipPref()
    {
        return $this->equipPref;
    }

    /**
     * Sets a new equipPref
     *
     * Indicates preferred equipment type(s) to be used in a search.
     *
     * @param \Recranet\OTA\Type\EquipmentTypePrefType[] $equipPref
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
     * Indicates preferred cabin(s) to be used in a search.
     *
     * @return self
     * @param \Recranet\OTA\Type\AirlinePrefType\CabinPrefAType $cabinPref
     */
    public function addToCabinPref(\Recranet\OTA\Type\AirlinePrefType\CabinPrefAType $cabinPref)
    {
        $this->cabinPref[] = $cabinPref;
        return $this;
    }

    /**
     * isset cabinPref
     *
     * Indicates preferred cabin(s) to be used in a search.
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
     * Indicates preferred cabin(s) to be used in a search.
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
     * Indicates preferred cabin(s) to be used in a search.
     *
     * @return \Recranet\OTA\Type\AirlinePrefType\CabinPrefAType[]
     */
    public function getCabinPref()
    {
        return $this->cabinPref;
    }

    /**
     * Sets a new cabinPref
     *
     * Indicates preferred cabin(s) to be used in a search.
     *
     * @param \Recranet\OTA\Type\AirlinePrefType\CabinPrefAType[] $cabinPref
     * @return self
     */
    public function setCabinPref(array $cabinPref = null)
    {
        $this->cabinPref = $cabinPref;
        return $this;
    }

    /**
     * Adds as seatPref
     *
     * Indicates preferred seat characteristics. Refer to OpenTravel Code List Seat Preference (STP) for codes.
     *
     * @return self
     * @param \Recranet\OTA\Type\AirlinePrefType\SeatPrefAType $seatPref
     */
    public function addToSeatPref(\Recranet\OTA\Type\AirlinePrefType\SeatPrefAType $seatPref)
    {
        $this->seatPref[] = $seatPref;
        return $this;
    }

    /**
     * isset seatPref
     *
     * Indicates preferred seat characteristics. Refer to OpenTravel Code List Seat Preference (STP) for codes.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSeatPref($index)
    {
        return isset($this->seatPref[$index]);
    }

    /**
     * unset seatPref
     *
     * Indicates preferred seat characteristics. Refer to OpenTravel Code List Seat Preference (STP) for codes.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSeatPref($index)
    {
        unset($this->seatPref[$index]);
    }

    /**
     * Gets as seatPref
     *
     * Indicates preferred seat characteristics. Refer to OpenTravel Code List Seat Preference (STP) for codes.
     *
     * @return \Recranet\OTA\Type\AirlinePrefType\SeatPrefAType[]
     */
    public function getSeatPref()
    {
        return $this->seatPref;
    }

    /**
     * Sets a new seatPref
     *
     * Indicates preferred seat characteristics. Refer to OpenTravel Code List Seat Preference (STP) for codes.
     *
     * @param \Recranet\OTA\Type\AirlinePrefType\SeatPrefAType[] $seatPref
     * @return self
     */
    public function setSeatPref(array $seatPref = null)
    {
        $this->seatPref = $seatPref;
        return $this;
    }

    /**
     * Adds as ticketDistribPref
     *
     * Indicates preferred ticket distribution method (e.g., fax, eMail, courier, mail, airport pickup)
     *
     * @return self
     * @param \Recranet\OTA\Type\TicketDistribPrefType $ticketDistribPref
     */
    public function addToTicketDistribPref(\Recranet\OTA\Type\TicketDistribPrefType $ticketDistribPref)
    {
        $this->ticketDistribPref[] = $ticketDistribPref;
        return $this;
    }

    /**
     * isset ticketDistribPref
     *
     * Indicates preferred ticket distribution method (e.g., fax, eMail, courier, mail, airport pickup)
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
     * Indicates preferred ticket distribution method (e.g., fax, eMail, courier, mail, airport pickup)
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
     * Indicates preferred ticket distribution method (e.g., fax, eMail, courier, mail, airport pickup)
     *
     * @return \Recranet\OTA\Type\TicketDistribPrefType[]
     */
    public function getTicketDistribPref()
    {
        return $this->ticketDistribPref;
    }

    /**
     * Sets a new ticketDistribPref
     *
     * Indicates preferred ticket distribution method (e.g., fax, eMail, courier, mail, airport pickup)
     *
     * @param \Recranet\OTA\Type\TicketDistribPrefType[] $ticketDistribPref
     * @return self
     */
    public function setTicketDistribPref(array $ticketDistribPref = null)
    {
        $this->ticketDistribPref = $ticketDistribPref;
        return $this;
    }

    /**
     * Adds as mealPref
     *
     * Indicates preferred meal type (e.g., vegetarian, Kosher, low fat)
     *
     * @return self
     * @param \Recranet\OTA\Type\MealPrefType $mealPref
     */
    public function addToMealPref(\Recranet\OTA\Type\MealPrefType $mealPref)
    {
        $this->mealPref[] = $mealPref;
        return $this;
    }

    /**
     * isset mealPref
     *
     * Indicates preferred meal type (e.g., vegetarian, Kosher, low fat)
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMealPref($index)
    {
        return isset($this->mealPref[$index]);
    }

    /**
     * unset mealPref
     *
     * Indicates preferred meal type (e.g., vegetarian, Kosher, low fat)
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMealPref($index)
    {
        unset($this->mealPref[$index]);
    }

    /**
     * Gets as mealPref
     *
     * Indicates preferred meal type (e.g., vegetarian, Kosher, low fat)
     *
     * @return \Recranet\OTA\Type\MealPrefType[]
     */
    public function getMealPref()
    {
        return $this->mealPref;
    }

    /**
     * Sets a new mealPref
     *
     * Indicates preferred meal type (e.g., vegetarian, Kosher, low fat)
     *
     * @param \Recranet\OTA\Type\MealPrefType[] $mealPref
     * @return self
     */
    public function setMealPref(array $mealPref = null)
    {
        $this->mealPref = $mealPref;
        return $this;
    }

    /**
     * Adds as specRequestPref
     *
     * Indicates preferred special request(s) to be used with this collection of preferences.
     *
     * @return self
     * @param \Recranet\OTA\Type\SpecRequestPrefType $specRequestPref
     */
    public function addToSpecRequestPref(\Recranet\OTA\Type\SpecRequestPrefType $specRequestPref)
    {
        $this->specRequestPref[] = $specRequestPref;
        return $this;
    }

    /**
     * isset specRequestPref
     *
     * Indicates preferred special request(s) to be used with this collection of preferences.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecRequestPref($index)
    {
        return isset($this->specRequestPref[$index]);
    }

    /**
     * unset specRequestPref
     *
     * Indicates preferred special request(s) to be used with this collection of preferences.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecRequestPref($index)
    {
        unset($this->specRequestPref[$index]);
    }

    /**
     * Gets as specRequestPref
     *
     * Indicates preferred special request(s) to be used with this collection of preferences.
     *
     * @return \Recranet\OTA\Type\SpecRequestPrefType[]
     */
    public function getSpecRequestPref()
    {
        return $this->specRequestPref;
    }

    /**
     * Sets a new specRequestPref
     *
     * Indicates preferred special request(s) to be used with this collection of preferences.
     *
     * @param \Recranet\OTA\Type\SpecRequestPrefType[] $specRequestPref
     * @return self
     */
    public function setSpecRequestPref(array $specRequestPref = null)
    {
        $this->specRequestPref = $specRequestPref;
        return $this;
    }

    /**
     * Adds as sSRPref
     *
     * Indicates Special Service Request preference type.
     *
     * @return self
     * @param \Recranet\OTA\Type\AirlinePrefType\SSRPrefAType $sSRPref
     */
    public function addToSSRPref(\Recranet\OTA\Type\AirlinePrefType\SSRPrefAType $sSRPref)
    {
        $this->sSRPref[] = $sSRPref;
        return $this;
    }

    /**
     * isset sSRPref
     *
     * Indicates Special Service Request preference type.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSSRPref($index)
    {
        return isset($this->sSRPref[$index]);
    }

    /**
     * unset sSRPref
     *
     * Indicates Special Service Request preference type.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSSRPref($index)
    {
        unset($this->sSRPref[$index]);
    }

    /**
     * Gets as sSRPref
     *
     * Indicates Special Service Request preference type.
     *
     * @return \Recranet\OTA\Type\AirlinePrefType\SSRPrefAType[]
     */
    public function getSSRPref()
    {
        return $this->sSRPref;
    }

    /**
     * Sets a new sSRPref
     *
     * Indicates Special Service Request preference type.
     *
     * @param \Recranet\OTA\Type\AirlinePrefType\SSRPrefAType[] $sSRPref
     * @return self
     */
    public function setSSRPref(array $sSRPref = null)
    {
        $this->sSRPref = $sSRPref;
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

    /**
     * Adds as mediaEntertainPref
     *
     * Media and entertainment preferences.
     *
     * @return self
     * @param \Recranet\OTA\Type\MediaEntertainPrefType $mediaEntertainPref
     */
    public function addToMediaEntertainPref(\Recranet\OTA\Type\MediaEntertainPrefType $mediaEntertainPref)
    {
        $this->mediaEntertainPref[] = $mediaEntertainPref;
        return $this;
    }

    /**
     * isset mediaEntertainPref
     *
     * Media and entertainment preferences.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMediaEntertainPref($index)
    {
        return isset($this->mediaEntertainPref[$index]);
    }

    /**
     * unset mediaEntertainPref
     *
     * Media and entertainment preferences.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMediaEntertainPref($index)
    {
        unset($this->mediaEntertainPref[$index]);
    }

    /**
     * Gets as mediaEntertainPref
     *
     * Media and entertainment preferences.
     *
     * @return \Recranet\OTA\Type\MediaEntertainPrefType[]
     */
    public function getMediaEntertainPref()
    {
        return $this->mediaEntertainPref;
    }

    /**
     * Sets a new mediaEntertainPref
     *
     * Media and entertainment preferences.
     *
     * @param \Recranet\OTA\Type\MediaEntertainPrefType[] $mediaEntertainPref
     * @return self
     */
    public function setMediaEntertainPref(array $mediaEntertainPref = null)
    {
        $this->mediaEntertainPref = $mediaEntertainPref;
        return $this;
    }

    /**
     * Adds as petInfoPref
     *
     * Indicates preferred information for pet accompanying traveler.
     *
     * @return self
     * @param \Recranet\OTA\Type\PetInfoPrefType $petInfoPref
     */
    public function addToPetInfoPref(\Recranet\OTA\Type\PetInfoPrefType $petInfoPref)
    {
        $this->petInfoPref[] = $petInfoPref;
        return $this;
    }

    /**
     * isset petInfoPref
     *
     * Indicates preferred information for pet accompanying traveler.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPetInfoPref($index)
    {
        return isset($this->petInfoPref[$index]);
    }

    /**
     * unset petInfoPref
     *
     * Indicates preferred information for pet accompanying traveler.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPetInfoPref($index)
    {
        unset($this->petInfoPref[$index]);
    }

    /**
     * Gets as petInfoPref
     *
     * Indicates preferred information for pet accompanying traveler.
     *
     * @return \Recranet\OTA\Type\PetInfoPrefType[]
     */
    public function getPetInfoPref()
    {
        return $this->petInfoPref;
    }

    /**
     * Sets a new petInfoPref
     *
     * Indicates preferred information for pet accompanying traveler.
     *
     * @param \Recranet\OTA\Type\PetInfoPrefType[] $petInfoPref
     * @return self
     */
    public function setPetInfoPref(array $petInfoPref = null)
    {
        $this->petInfoPref = $petInfoPref;
        return $this;
    }

    /**
     * Gets as accountInformation
     *
     * Information related to back office accounting information for the travel agency.
     *
     * @return \Recranet\OTA\Type\AirlinePrefType\AccountInformationAType
     */
    public function getAccountInformation()
    {
        return $this->accountInformation;
    }

    /**
     * Sets a new accountInformation
     *
     * Information related to back office accounting information for the travel agency.
     *
     * @param \Recranet\OTA\Type\AirlinePrefType\AccountInformationAType $accountInformation
     * @return self
     */
    public function setAccountInformation(?\Recranet\OTA\Type\AirlinePrefType\AccountInformationAType $accountInformation = null)
    {
        $this->accountInformation = $accountInformation;
        return $this;
    }

    /**
     * Adds as oSIPref
     *
     * Other Service Information of the airline.
     *
     * @return self
     * @param \Recranet\OTA\Type\OtherServiceInfoType $oSIPref
     */
    public function addToOSIPref(\Recranet\OTA\Type\OtherServiceInfoType $oSIPref)
    {
        $this->oSIPref[] = $oSIPref;
        return $this;
    }

    /**
     * isset oSIPref
     *
     * Other Service Information of the airline.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOSIPref($index)
    {
        return isset($this->oSIPref[$index]);
    }

    /**
     * unset oSIPref
     *
     * Other Service Information of the airline.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOSIPref($index)
    {
        unset($this->oSIPref[$index]);
    }

    /**
     * Gets as oSIPref
     *
     * Other Service Information of the airline.
     *
     * @return \Recranet\OTA\Type\OtherServiceInfoType[]
     */
    public function getOSIPref()
    {
        return $this->oSIPref;
    }

    /**
     * Sets a new oSIPref
     *
     * Other Service Information of the airline.
     *
     * @param \Recranet\OTA\Type\OtherServiceInfoType[] $oSIPref
     * @return self
     */
    public function setOSIPref(array $oSIPref = null)
    {
        $this->oSIPref = $oSIPref;
        return $this;
    }

    /**
     * Adds as keywordPref
     *
     * This element stores data about an airline marketing keyword.
     *
     * @return self
     * @param \Recranet\OTA\Type\AirlinePrefType\KeywordPrefAType $keywordPref
     */
    public function addToKeywordPref(\Recranet\OTA\Type\AirlinePrefType\KeywordPrefAType $keywordPref)
    {
        $this->keywordPref[] = $keywordPref;
        return $this;
    }

    /**
     * isset keywordPref
     *
     * This element stores data about an airline marketing keyword.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKeywordPref($index)
    {
        return isset($this->keywordPref[$index]);
    }

    /**
     * unset keywordPref
     *
     * This element stores data about an airline marketing keyword.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKeywordPref($index)
    {
        unset($this->keywordPref[$index]);
    }

    /**
     * Gets as keywordPref
     *
     * This element stores data about an airline marketing keyword.
     *
     * @return \Recranet\OTA\Type\AirlinePrefType\KeywordPrefAType[]
     */
    public function getKeywordPref()
    {
        return $this->keywordPref;
    }

    /**
     * Sets a new keywordPref
     *
     * This element stores data about an airline marketing keyword.
     *
     * @param \Recranet\OTA\Type\AirlinePrefType\KeywordPrefAType[] $keywordPref
     * @return self
     */
    public function setKeywordPref(array $keywordPref = null)
    {
        $this->keywordPref = $keywordPref;
        return $this;
    }
}

