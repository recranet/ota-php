<?php

namespace Recranet\OTA;

/**
 * Class representing RailPrefType
 *
 * A collection of rail preferences.
 * XSD Type: RailPrefType
 */
class RailPrefType
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
     * Type of rail ticket preferred for this collection.
     *
     * @var string $railTicketType
     */
    private $railTicketType = null;

    /**
     * Preferred loyalty program(s).
     *
     * @var \Recranet\OTA\LoyaltyPrefType[] $loyaltyPref
     */
    private $loyaltyPref = [
        
    ];

    /**
     * Preferred rail operator network code(s).
     *
     * @var \Recranet\OTA\RailPrefType\OperatorPrefAType[] $operatorPref
     */
    private $operatorPref = [
        
    ];

    /**
     * Specifies any preferences in terms of the company operating the train service.
     *
     * @var \Recranet\OTA\RailPrefType\VendorPrefAType[] $vendorPref
     */
    private $vendorPref = [
        
    ];

    /**
     * Preferred form(s) of payment.
     *
     * @var \Recranet\OTA\RailPrefType\PaymentFormPrefAType[] $paymentFormPref
     */
    private $paymentFormPref = [
        
    ];

    /**
     * Preferred origination station location(s) for travel.
     *
     * @var \Recranet\OTA\LocationPrefType[] $originStationPref
     */
    private $originStationPref = [
        
    ];

    /**
     * Preferred destination station location(s) for travel.
     *
     * @var \Recranet\OTA\LocationPrefType[] $destinationStationPref
     */
    private $destinationStationPref = [
        
    ];

    /**
     * Preferred connection location(s).
     *
     * @var \Recranet\OTA\LocationPrefType[] $connectionPref
     */
    private $connectionPref = [
        
    ];

    /**
     * Preferred fare restriction(s).
     *
     * @var \Recranet\OTA\RailPrefType\FareRestrictPrefAType[] $fareRestrictPref
     */
    private $fareRestrictPref = [
        
    ];

    /**
     * Preferred fare preferences.
     *
     * @var \Recranet\OTA\RailPrefType\FarePrefAType[] $farePref
     */
    private $farePref = [
        
    ];

    /**
     * Train characteristic preferences.
     *
     * @var \Recranet\OTA\RailPrefType\TrainPrefAType[] $trainPref
     */
    private $trainPref = [
        
    ];

    /**
     * Amenity preferences.
     *
     * @var \Recranet\OTA\RailPrefType\AmenityPrefAType[] $amenityPref
     */
    private $amenityPref = [
        
    ];

    /**
     * Equipment preferences.
     *
     * @var \Recranet\OTA\RailPrefType\EquipmentPrefAType[] $equipmentPref
     */
    private $equipmentPref = [
        
    ];

    /**
     * Accommodation preferences.
     *
     * @var \Recranet\OTA\RailPrefType\AccommodationPrefAType[] $accommodationPref
     */
    private $accommodationPref = [
        
    ];

    /**
     * Specifies preferences of any service or product offered in conjunction with a basic rail accommodation, such as vehicle transport, pet transport and restaurant car service. Refer to OpenTravel Code List Rail Ancillary Service (RAN).
     *
     * @var \Recranet\OTA\RailPrefType\AncillaryServicePrefAType[] $ancillaryServicePref
     */
    private $ancillaryServicePref = [
        
    ];

    /**
     * Occupation, passenger qualifying codes, rate qualifiers and disability requirement preferences.
     *
     * @var \Recranet\OTA\RailPrefType\PassengerInfoPrefAType[] $passengerInfoPref
     */
    private $passengerInfoPref = [
        
    ];

    /**
     * Tcket distribution preferences.
     *
     * @var \Recranet\OTA\TicketDistribPrefType[] $ticketDistribPref
     */
    private $ticketDistribPref = [
        
    ];

    /**
     * Special Service Request preferences.
     *
     * @var \Recranet\OTA\RailPrefType\SSRPrefAType[] $sSRPref
     */
    private $sSRPref = [
        
    ];

    /**
     * Other Service Information of the rail operators.
     *
     * @var \Recranet\OTA\RailPrefType\OSIPrefAType[] $oSIPref
     */
    private $oSIPref = [
        
    ];

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
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
     * Gets as railTicketType
     *
     * Type of rail ticket preferred for this collection.
     *
     * @return string
     */
    public function getRailTicketType()
    {
        return $this->railTicketType;
    }

    /**
     * Sets a new railTicketType
     *
     * Type of rail ticket preferred for this collection.
     *
     * @param string $railTicketType
     * @return self
     */
    public function setRailTicketType($railTicketType)
    {
        $this->railTicketType = $railTicketType;
        return $this;
    }

    /**
     * Adds as loyaltyPref
     *
     * Preferred loyalty program(s).
     *
     * @return self
     * @param \Recranet\OTA\LoyaltyPrefType $loyaltyPref
     */
    public function addToLoyaltyPref(\Recranet\OTA\LoyaltyPrefType $loyaltyPref)
    {
        $this->loyaltyPref[] = $loyaltyPref;
        return $this;
    }

    /**
     * isset loyaltyPref
     *
     * Preferred loyalty program(s).
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
     * Preferred loyalty program(s).
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
     * Preferred loyalty program(s).
     *
     * @return \Recranet\OTA\LoyaltyPrefType[]
     */
    public function getLoyaltyPref()
    {
        return $this->loyaltyPref;
    }

    /**
     * Sets a new loyaltyPref
     *
     * Preferred loyalty program(s).
     *
     * @param \Recranet\OTA\LoyaltyPrefType[] $loyaltyPref
     * @return self
     */
    public function setLoyaltyPref(array $loyaltyPref = null)
    {
        $this->loyaltyPref = $loyaltyPref;
        return $this;
    }

    /**
     * Adds as operatorPref
     *
     * Preferred rail operator network code(s).
     *
     * @return self
     * @param \Recranet\OTA\RailPrefType\OperatorPrefAType $operatorPref
     */
    public function addToOperatorPref(\Recranet\OTA\RailPrefType\OperatorPrefAType $operatorPref)
    {
        $this->operatorPref[] = $operatorPref;
        return $this;
    }

    /**
     * isset operatorPref
     *
     * Preferred rail operator network code(s).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOperatorPref($index)
    {
        return isset($this->operatorPref[$index]);
    }

    /**
     * unset operatorPref
     *
     * Preferred rail operator network code(s).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOperatorPref($index)
    {
        unset($this->operatorPref[$index]);
    }

    /**
     * Gets as operatorPref
     *
     * Preferred rail operator network code(s).
     *
     * @return \Recranet\OTA\RailPrefType\OperatorPrefAType[]
     */
    public function getOperatorPref()
    {
        return $this->operatorPref;
    }

    /**
     * Sets a new operatorPref
     *
     * Preferred rail operator network code(s).
     *
     * @param \Recranet\OTA\RailPrefType\OperatorPrefAType[] $operatorPref
     * @return self
     */
    public function setOperatorPref(array $operatorPref = null)
    {
        $this->operatorPref = $operatorPref;
        return $this;
    }

    /**
     * Adds as vendorPref
     *
     * Specifies any preferences in terms of the company operating the train service.
     *
     * @return self
     * @param \Recranet\OTA\RailPrefType\VendorPrefAType $vendorPref
     */
    public function addToVendorPref(\Recranet\OTA\RailPrefType\VendorPrefAType $vendorPref)
    {
        $this->vendorPref[] = $vendorPref;
        return $this;
    }

    /**
     * isset vendorPref
     *
     * Specifies any preferences in terms of the company operating the train service.
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
     * Specifies any preferences in terms of the company operating the train service.
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
     * Specifies any preferences in terms of the company operating the train service.
     *
     * @return \Recranet\OTA\RailPrefType\VendorPrefAType[]
     */
    public function getVendorPref()
    {
        return $this->vendorPref;
    }

    /**
     * Sets a new vendorPref
     *
     * Specifies any preferences in terms of the company operating the train service.
     *
     * @param \Recranet\OTA\RailPrefType\VendorPrefAType[] $vendorPref
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
     * @param \Recranet\OTA\RailPrefType\PaymentFormPrefAType $paymentFormPref
     */
    public function addToPaymentFormPref(\Recranet\OTA\RailPrefType\PaymentFormPrefAType $paymentFormPref)
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
     * @return \Recranet\OTA\RailPrefType\PaymentFormPrefAType[]
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
     * @param \Recranet\OTA\RailPrefType\PaymentFormPrefAType[] $paymentFormPref
     * @return self
     */
    public function setPaymentFormPref(array $paymentFormPref = null)
    {
        $this->paymentFormPref = $paymentFormPref;
        return $this;
    }

    /**
     * Adds as originStationPref
     *
     * Preferred origination station location(s) for travel.
     *
     * @return self
     * @param \Recranet\OTA\LocationPrefType $originStationPref
     */
    public function addToOriginStationPref(\Recranet\OTA\LocationPrefType $originStationPref)
    {
        $this->originStationPref[] = $originStationPref;
        return $this;
    }

    /**
     * isset originStationPref
     *
     * Preferred origination station location(s) for travel.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOriginStationPref($index)
    {
        return isset($this->originStationPref[$index]);
    }

    /**
     * unset originStationPref
     *
     * Preferred origination station location(s) for travel.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOriginStationPref($index)
    {
        unset($this->originStationPref[$index]);
    }

    /**
     * Gets as originStationPref
     *
     * Preferred origination station location(s) for travel.
     *
     * @return \Recranet\OTA\LocationPrefType[]
     */
    public function getOriginStationPref()
    {
        return $this->originStationPref;
    }

    /**
     * Sets a new originStationPref
     *
     * Preferred origination station location(s) for travel.
     *
     * @param \Recranet\OTA\LocationPrefType[] $originStationPref
     * @return self
     */
    public function setOriginStationPref(array $originStationPref = null)
    {
        $this->originStationPref = $originStationPref;
        return $this;
    }

    /**
     * Adds as destinationStationPref
     *
     * Preferred destination station location(s) for travel.
     *
     * @return self
     * @param \Recranet\OTA\LocationPrefType $destinationStationPref
     */
    public function addToDestinationStationPref(\Recranet\OTA\LocationPrefType $destinationStationPref)
    {
        $this->destinationStationPref[] = $destinationStationPref;
        return $this;
    }

    /**
     * isset destinationStationPref
     *
     * Preferred destination station location(s) for travel.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDestinationStationPref($index)
    {
        return isset($this->destinationStationPref[$index]);
    }

    /**
     * unset destinationStationPref
     *
     * Preferred destination station location(s) for travel.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDestinationStationPref($index)
    {
        unset($this->destinationStationPref[$index]);
    }

    /**
     * Gets as destinationStationPref
     *
     * Preferred destination station location(s) for travel.
     *
     * @return \Recranet\OTA\LocationPrefType[]
     */
    public function getDestinationStationPref()
    {
        return $this->destinationStationPref;
    }

    /**
     * Sets a new destinationStationPref
     *
     * Preferred destination station location(s) for travel.
     *
     * @param \Recranet\OTA\LocationPrefType[] $destinationStationPref
     * @return self
     */
    public function setDestinationStationPref(array $destinationStationPref = null)
    {
        $this->destinationStationPref = $destinationStationPref;
        return $this;
    }

    /**
     * Adds as connectionPref
     *
     * Preferred connection location(s).
     *
     * @return self
     * @param \Recranet\OTA\LocationPrefType $connectionPref
     */
    public function addToConnectionPref(\Recranet\OTA\LocationPrefType $connectionPref)
    {
        $this->connectionPref[] = $connectionPref;
        return $this;
    }

    /**
     * isset connectionPref
     *
     * Preferred connection location(s).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConnectionPref($index)
    {
        return isset($this->connectionPref[$index]);
    }

    /**
     * unset connectionPref
     *
     * Preferred connection location(s).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConnectionPref($index)
    {
        unset($this->connectionPref[$index]);
    }

    /**
     * Gets as connectionPref
     *
     * Preferred connection location(s).
     *
     * @return \Recranet\OTA\LocationPrefType[]
     */
    public function getConnectionPref()
    {
        return $this->connectionPref;
    }

    /**
     * Sets a new connectionPref
     *
     * Preferred connection location(s).
     *
     * @param \Recranet\OTA\LocationPrefType[] $connectionPref
     * @return self
     */
    public function setConnectionPref(array $connectionPref = null)
    {
        $this->connectionPref = $connectionPref;
        return $this;
    }

    /**
     * Adds as fareRestrictPref
     *
     * Preferred fare restriction(s).
     *
     * @return self
     * @param \Recranet\OTA\RailPrefType\FareRestrictPrefAType $fareRestrictPref
     */
    public function addToFareRestrictPref(\Recranet\OTA\RailPrefType\FareRestrictPrefAType $fareRestrictPref)
    {
        $this->fareRestrictPref[] = $fareRestrictPref;
        return $this;
    }

    /**
     * isset fareRestrictPref
     *
     * Preferred fare restriction(s).
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
     * Preferred fare restriction(s).
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
     * Preferred fare restriction(s).
     *
     * @return \Recranet\OTA\RailPrefType\FareRestrictPrefAType[]
     */
    public function getFareRestrictPref()
    {
        return $this->fareRestrictPref;
    }

    /**
     * Sets a new fareRestrictPref
     *
     * Preferred fare restriction(s).
     *
     * @param \Recranet\OTA\RailPrefType\FareRestrictPrefAType[] $fareRestrictPref
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
     * Preferred fare preferences.
     *
     * @return self
     * @param \Recranet\OTA\RailPrefType\FarePrefAType $farePref
     */
    public function addToFarePref(\Recranet\OTA\RailPrefType\FarePrefAType $farePref)
    {
        $this->farePref[] = $farePref;
        return $this;
    }

    /**
     * isset farePref
     *
     * Preferred fare preferences.
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
     * Preferred fare preferences.
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
     * Preferred fare preferences.
     *
     * @return \Recranet\OTA\RailPrefType\FarePrefAType[]
     */
    public function getFarePref()
    {
        return $this->farePref;
    }

    /**
     * Sets a new farePref
     *
     * Preferred fare preferences.
     *
     * @param \Recranet\OTA\RailPrefType\FarePrefAType[] $farePref
     * @return self
     */
    public function setFarePref(array $farePref = null)
    {
        $this->farePref = $farePref;
        return $this;
    }

    /**
     * Adds as trainPref
     *
     * Train characteristic preferences.
     *
     * @return self
     * @param \Recranet\OTA\RailPrefType\TrainPrefAType $trainPref
     */
    public function addToTrainPref(\Recranet\OTA\RailPrefType\TrainPrefAType $trainPref)
    {
        $this->trainPref[] = $trainPref;
        return $this;
    }

    /**
     * isset trainPref
     *
     * Train characteristic preferences.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTrainPref($index)
    {
        return isset($this->trainPref[$index]);
    }

    /**
     * unset trainPref
     *
     * Train characteristic preferences.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTrainPref($index)
    {
        unset($this->trainPref[$index]);
    }

    /**
     * Gets as trainPref
     *
     * Train characteristic preferences.
     *
     * @return \Recranet\OTA\RailPrefType\TrainPrefAType[]
     */
    public function getTrainPref()
    {
        return $this->trainPref;
    }

    /**
     * Sets a new trainPref
     *
     * Train characteristic preferences.
     *
     * @param \Recranet\OTA\RailPrefType\TrainPrefAType[] $trainPref
     * @return self
     */
    public function setTrainPref(array $trainPref = null)
    {
        $this->trainPref = $trainPref;
        return $this;
    }

    /**
     * Adds as amenityPref
     *
     * Amenity preferences.
     *
     * @return self
     * @param \Recranet\OTA\RailPrefType\AmenityPrefAType $amenityPref
     */
    public function addToAmenityPref(\Recranet\OTA\RailPrefType\AmenityPrefAType $amenityPref)
    {
        $this->amenityPref[] = $amenityPref;
        return $this;
    }

    /**
     * isset amenityPref
     *
     * Amenity preferences.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAmenityPref($index)
    {
        return isset($this->amenityPref[$index]);
    }

    /**
     * unset amenityPref
     *
     * Amenity preferences.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAmenityPref($index)
    {
        unset($this->amenityPref[$index]);
    }

    /**
     * Gets as amenityPref
     *
     * Amenity preferences.
     *
     * @return \Recranet\OTA\RailPrefType\AmenityPrefAType[]
     */
    public function getAmenityPref()
    {
        return $this->amenityPref;
    }

    /**
     * Sets a new amenityPref
     *
     * Amenity preferences.
     *
     * @param \Recranet\OTA\RailPrefType\AmenityPrefAType[] $amenityPref
     * @return self
     */
    public function setAmenityPref(array $amenityPref = null)
    {
        $this->amenityPref = $amenityPref;
        return $this;
    }

    /**
     * Adds as equipmentPref
     *
     * Equipment preferences.
     *
     * @return self
     * @param \Recranet\OTA\RailPrefType\EquipmentPrefAType $equipmentPref
     */
    public function addToEquipmentPref(\Recranet\OTA\RailPrefType\EquipmentPrefAType $equipmentPref)
    {
        $this->equipmentPref[] = $equipmentPref;
        return $this;
    }

    /**
     * isset equipmentPref
     *
     * Equipment preferences.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEquipmentPref($index)
    {
        return isset($this->equipmentPref[$index]);
    }

    /**
     * unset equipmentPref
     *
     * Equipment preferences.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEquipmentPref($index)
    {
        unset($this->equipmentPref[$index]);
    }

    /**
     * Gets as equipmentPref
     *
     * Equipment preferences.
     *
     * @return \Recranet\OTA\RailPrefType\EquipmentPrefAType[]
     */
    public function getEquipmentPref()
    {
        return $this->equipmentPref;
    }

    /**
     * Sets a new equipmentPref
     *
     * Equipment preferences.
     *
     * @param \Recranet\OTA\RailPrefType\EquipmentPrefAType[] $equipmentPref
     * @return self
     */
    public function setEquipmentPref(array $equipmentPref = null)
    {
        $this->equipmentPref = $equipmentPref;
        return $this;
    }

    /**
     * Adds as accommodationPref
     *
     * Accommodation preferences.
     *
     * @return self
     * @param \Recranet\OTA\RailPrefType\AccommodationPrefAType $accommodationPref
     */
    public function addToAccommodationPref(\Recranet\OTA\RailPrefType\AccommodationPrefAType $accommodationPref)
    {
        $this->accommodationPref[] = $accommodationPref;
        return $this;
    }

    /**
     * isset accommodationPref
     *
     * Accommodation preferences.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccommodationPref($index)
    {
        return isset($this->accommodationPref[$index]);
    }

    /**
     * unset accommodationPref
     *
     * Accommodation preferences.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccommodationPref($index)
    {
        unset($this->accommodationPref[$index]);
    }

    /**
     * Gets as accommodationPref
     *
     * Accommodation preferences.
     *
     * @return \Recranet\OTA\RailPrefType\AccommodationPrefAType[]
     */
    public function getAccommodationPref()
    {
        return $this->accommodationPref;
    }

    /**
     * Sets a new accommodationPref
     *
     * Accommodation preferences.
     *
     * @param \Recranet\OTA\RailPrefType\AccommodationPrefAType[] $accommodationPref
     * @return self
     */
    public function setAccommodationPref(array $accommodationPref = null)
    {
        $this->accommodationPref = $accommodationPref;
        return $this;
    }

    /**
     * Adds as ancillaryServicePref
     *
     * Specifies preferences of any service or product offered in conjunction with a basic rail accommodation, such as vehicle transport, pet transport and restaurant car service. Refer to OpenTravel Code List Rail Ancillary Service (RAN).
     *
     * @return self
     * @param \Recranet\OTA\RailPrefType\AncillaryServicePrefAType $ancillaryServicePref
     */
    public function addToAncillaryServicePref(\Recranet\OTA\RailPrefType\AncillaryServicePrefAType $ancillaryServicePref)
    {
        $this->ancillaryServicePref[] = $ancillaryServicePref;
        return $this;
    }

    /**
     * isset ancillaryServicePref
     *
     * Specifies preferences of any service or product offered in conjunction with a basic rail accommodation, such as vehicle transport, pet transport and restaurant car service. Refer to OpenTravel Code List Rail Ancillary Service (RAN).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAncillaryServicePref($index)
    {
        return isset($this->ancillaryServicePref[$index]);
    }

    /**
     * unset ancillaryServicePref
     *
     * Specifies preferences of any service or product offered in conjunction with a basic rail accommodation, such as vehicle transport, pet transport and restaurant car service. Refer to OpenTravel Code List Rail Ancillary Service (RAN).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAncillaryServicePref($index)
    {
        unset($this->ancillaryServicePref[$index]);
    }

    /**
     * Gets as ancillaryServicePref
     *
     * Specifies preferences of any service or product offered in conjunction with a basic rail accommodation, such as vehicle transport, pet transport and restaurant car service. Refer to OpenTravel Code List Rail Ancillary Service (RAN).
     *
     * @return \Recranet\OTA\RailPrefType\AncillaryServicePrefAType[]
     */
    public function getAncillaryServicePref()
    {
        return $this->ancillaryServicePref;
    }

    /**
     * Sets a new ancillaryServicePref
     *
     * Specifies preferences of any service or product offered in conjunction with a basic rail accommodation, such as vehicle transport, pet transport and restaurant car service. Refer to OpenTravel Code List Rail Ancillary Service (RAN).
     *
     * @param \Recranet\OTA\RailPrefType\AncillaryServicePrefAType[] $ancillaryServicePref
     * @return self
     */
    public function setAncillaryServicePref(array $ancillaryServicePref = null)
    {
        $this->ancillaryServicePref = $ancillaryServicePref;
        return $this;
    }

    /**
     * Adds as passengerInfoPref
     *
     * Occupation, passenger qualifying codes, rate qualifiers and disability requirement preferences.
     *
     * @return self
     * @param \Recranet\OTA\RailPrefType\PassengerInfoPrefAType $passengerInfoPref
     */
    public function addToPassengerInfoPref(\Recranet\OTA\RailPrefType\PassengerInfoPrefAType $passengerInfoPref)
    {
        $this->passengerInfoPref[] = $passengerInfoPref;
        return $this;
    }

    /**
     * isset passengerInfoPref
     *
     * Occupation, passenger qualifying codes, rate qualifiers and disability requirement preferences.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPassengerInfoPref($index)
    {
        return isset($this->passengerInfoPref[$index]);
    }

    /**
     * unset passengerInfoPref
     *
     * Occupation, passenger qualifying codes, rate qualifiers and disability requirement preferences.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPassengerInfoPref($index)
    {
        unset($this->passengerInfoPref[$index]);
    }

    /**
     * Gets as passengerInfoPref
     *
     * Occupation, passenger qualifying codes, rate qualifiers and disability requirement preferences.
     *
     * @return \Recranet\OTA\RailPrefType\PassengerInfoPrefAType[]
     */
    public function getPassengerInfoPref()
    {
        return $this->passengerInfoPref;
    }

    /**
     * Sets a new passengerInfoPref
     *
     * Occupation, passenger qualifying codes, rate qualifiers and disability requirement preferences.
     *
     * @param \Recranet\OTA\RailPrefType\PassengerInfoPrefAType[] $passengerInfoPref
     * @return self
     */
    public function setPassengerInfoPref(array $passengerInfoPref = null)
    {
        $this->passengerInfoPref = $passengerInfoPref;
        return $this;
    }

    /**
     * Adds as ticketDistribPref
     *
     * Tcket distribution preferences.
     *
     * @return self
     * @param \Recranet\OTA\TicketDistribPrefType $ticketDistribPref
     */
    public function addToTicketDistribPref(\Recranet\OTA\TicketDistribPrefType $ticketDistribPref)
    {
        $this->ticketDistribPref[] = $ticketDistribPref;
        return $this;
    }

    /**
     * isset ticketDistribPref
     *
     * Tcket distribution preferences.
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
     * Tcket distribution preferences.
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
     * Tcket distribution preferences.
     *
     * @return \Recranet\OTA\TicketDistribPrefType[]
     */
    public function getTicketDistribPref()
    {
        return $this->ticketDistribPref;
    }

    /**
     * Sets a new ticketDistribPref
     *
     * Tcket distribution preferences.
     *
     * @param \Recranet\OTA\TicketDistribPrefType[] $ticketDistribPref
     * @return self
     */
    public function setTicketDistribPref(array $ticketDistribPref = null)
    {
        $this->ticketDistribPref = $ticketDistribPref;
        return $this;
    }

    /**
     * Adds as sSRPref
     *
     * Special Service Request preferences.
     *
     * @return self
     * @param \Recranet\OTA\RailPrefType\SSRPrefAType $sSRPref
     */
    public function addToSSRPref(\Recranet\OTA\RailPrefType\SSRPrefAType $sSRPref)
    {
        $this->sSRPref[] = $sSRPref;
        return $this;
    }

    /**
     * isset sSRPref
     *
     * Special Service Request preferences.
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
     * Special Service Request preferences.
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
     * Special Service Request preferences.
     *
     * @return \Recranet\OTA\RailPrefType\SSRPrefAType[]
     */
    public function getSSRPref()
    {
        return $this->sSRPref;
    }

    /**
     * Sets a new sSRPref
     *
     * Special Service Request preferences.
     *
     * @param \Recranet\OTA\RailPrefType\SSRPrefAType[] $sSRPref
     * @return self
     */
    public function setSSRPref(array $sSRPref = null)
    {
        $this->sSRPref = $sSRPref;
        return $this;
    }

    /**
     * Adds as oSIPref
     *
     * Other Service Information of the rail operators.
     *
     * @return self
     * @param \Recranet\OTA\RailPrefType\OSIPrefAType $oSIPref
     */
    public function addToOSIPref(\Recranet\OTA\RailPrefType\OSIPrefAType $oSIPref)
    {
        $this->oSIPref[] = $oSIPref;
        return $this;
    }

    /**
     * isset oSIPref
     *
     * Other Service Information of the rail operators.
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
     * Other Service Information of the rail operators.
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
     * Other Service Information of the rail operators.
     *
     * @return \Recranet\OTA\RailPrefType\OSIPrefAType[]
     */
    public function getOSIPref()
    {
        return $this->oSIPref;
    }

    /**
     * Sets a new oSIPref
     *
     * Other Service Information of the rail operators.
     *
     * @param \Recranet\OTA\RailPrefType\OSIPrefAType[] $oSIPref
     * @return self
     */
    public function setOSIPref(array $oSIPref = null)
    {
        $this->oSIPref = $oSIPref;
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

