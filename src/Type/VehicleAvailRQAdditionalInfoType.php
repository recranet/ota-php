<?php

namespace Recranet\OTA\Type;

/**
 * Class representing VehicleAvailRQAdditionalInfoType
 *
 * The VehicleAvailRQAdditionalInfoType complex type identifies supplemental information that may be included in a request for vehicle availability and rates.
 * XSD Type: VehicleAvailRQAdditionalInfoType
 */
class VehicleAvailRQAdditionalInfoType
{
    /**
     * @var int $luggageQty
     */
    private $luggageQty = null;

    /**
     * @var int $passengerQty
     */
    private $passengerQty = null;

    /**
     * Indicates smoking is allowed when true and is not allowed when false.
     *
     *  false
     *
     * @var bool $smokingAllowed
     */
    private $smokingAllowed = null;

    /**
     * The GasPrePay attribute defines a set of valid values for the choice of prepaying for gas at the time of the pick up of the rental vehicle. This information is useful in that it allows a customer's preference to be made known to the vendor. It also allows the vendor to provide more detailed and accurate pricing up front.
     *
     *  false
     *
     * @var bool $gasPrePay
     */
    private $gasPrePay = null;

    /**
     * Allows the requestor to indicate if the response should contain a single rate for each product or multiple rates for each product. Multiple rates may be offered when different terms and conditions may apply, for example pre-paid versus payment at time of rental. The use of multiple rates may vary from vendor to vendor and is by agreement of the trading partners.
     *
     * @var bool $singleQuote
     */
    private $singleQuote = null;

    /**
     * Information on the one primary driver and, optionally, several additional drivers. This may be used to provide a frequent renter number.
     *
     * @var \Recranet\OTA\Type\CustomerPrimaryAdditionalType $customer
     */
    private $customer = null;

    /**
     * Indicates the preference associated with special needs or requirements of the customer, described using free text
     *
     * @var \Recranet\OTA\Type\VehicleSpecialReqPrefType[] $specialReqPref
     */
    private $specialReqPref = [
        
    ];

    /**
     * Indicates the preferences for one or more types of coverage (insurance).
     *
     * @var \Recranet\OTA\Type\VehicleAvailRQAdditionalInfoType\CoveragePrefsAType\CoveragePrefAType[] $coveragePrefs
     */
    private $coveragePrefs = null;

    /**
     * Information on requested off-airport location services, for example, vehicle delivery, customer pickup.
     *
     * @var \Recranet\OTA\Type\OffLocationServiceType[] $offLocService
     */
    private $offLocService = [
        
    ];

    /**
     * Details of the arrival transportation, if applicable.
     *
     * @var \Recranet\OTA\Type\VehicleArrivalDetailsType $arrivalDetails
     */
    private $arrivalDetails = null;

    /**
     * Details of a tour with which this availability information is associated. Availability and rate information may vary if associated with a tour.
     *
     * @var \Recranet\OTA\Type\VehicleTourInfoType $tourInfo
     */
    private $tourInfo = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as luggageQty
     *
     * @return int
     */
    public function getLuggageQty()
    {
        return $this->luggageQty;
    }

    /**
     * Sets a new luggageQty
     *
     * @param int $luggageQty
     * @return self
     */
    public function setLuggageQty($luggageQty)
    {
        $this->luggageQty = $luggageQty;
        return $this;
    }

    /**
     * Gets as passengerQty
     *
     * @return int
     */
    public function getPassengerQty()
    {
        return $this->passengerQty;
    }

    /**
     * Sets a new passengerQty
     *
     * @param int $passengerQty
     * @return self
     */
    public function setPassengerQty($passengerQty)
    {
        $this->passengerQty = $passengerQty;
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
     * Gets as gasPrePay
     *
     * The GasPrePay attribute defines a set of valid values for the choice of prepaying for gas at the time of the pick up of the rental vehicle. This information is useful in that it allows a customer's preference to be made known to the vendor. It also allows the vendor to provide more detailed and accurate pricing up front.
     *
     *  false
     *
     * @return bool
     */
    public function getGasPrePay()
    {
        return $this->gasPrePay;
    }

    /**
     * Sets a new gasPrePay
     *
     * The GasPrePay attribute defines a set of valid values for the choice of prepaying for gas at the time of the pick up of the rental vehicle. This information is useful in that it allows a customer's preference to be made known to the vendor. It also allows the vendor to provide more detailed and accurate pricing up front.
     *
     *  false
     *
     * @param bool $gasPrePay
     * @return self
     */
    public function setGasPrePay($gasPrePay)
    {
        $this->gasPrePay = $gasPrePay;
        return $this;
    }

    /**
     * Gets as singleQuote
     *
     * Allows the requestor to indicate if the response should contain a single rate for each product or multiple rates for each product. Multiple rates may be offered when different terms and conditions may apply, for example pre-paid versus payment at time of rental. The use of multiple rates may vary from vendor to vendor and is by agreement of the trading partners.
     *
     * @return bool
     */
    public function getSingleQuote()
    {
        return $this->singleQuote;
    }

    /**
     * Sets a new singleQuote
     *
     * Allows the requestor to indicate if the response should contain a single rate for each product or multiple rates for each product. Multiple rates may be offered when different terms and conditions may apply, for example pre-paid versus payment at time of rental. The use of multiple rates may vary from vendor to vendor and is by agreement of the trading partners.
     *
     * @param bool $singleQuote
     * @return self
     */
    public function setSingleQuote($singleQuote)
    {
        $this->singleQuote = $singleQuote;
        return $this;
    }

    /**
     * Gets as customer
     *
     * Information on the one primary driver and, optionally, several additional drivers. This may be used to provide a frequent renter number.
     *
     * @return \Recranet\OTA\Type\CustomerPrimaryAdditionalType
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Sets a new customer
     *
     * Information on the one primary driver and, optionally, several additional drivers. This may be used to provide a frequent renter number.
     *
     * @param \Recranet\OTA\Type\CustomerPrimaryAdditionalType $customer
     * @return self
     */
    public function setCustomer(?\Recranet\OTA\Type\CustomerPrimaryAdditionalType $customer = null)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * Adds as specialReqPref
     *
     * Indicates the preference associated with special needs or requirements of the customer, described using free text
     *
     * @return self
     * @param \Recranet\OTA\Type\VehicleSpecialReqPrefType $specialReqPref
     */
    public function addToSpecialReqPref(\Recranet\OTA\Type\VehicleSpecialReqPrefType $specialReqPref)
    {
        $this->specialReqPref[] = $specialReqPref;
        return $this;
    }

    /**
     * isset specialReqPref
     *
     * Indicates the preference associated with special needs or requirements of the customer, described using free text
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialReqPref($index)
    {
        return isset($this->specialReqPref[$index]);
    }

    /**
     * unset specialReqPref
     *
     * Indicates the preference associated with special needs or requirements of the customer, described using free text
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialReqPref($index)
    {
        unset($this->specialReqPref[$index]);
    }

    /**
     * Gets as specialReqPref
     *
     * Indicates the preference associated with special needs or requirements of the customer, described using free text
     *
     * @return \Recranet\OTA\Type\VehicleSpecialReqPrefType[]
     */
    public function getSpecialReqPref()
    {
        return $this->specialReqPref;
    }

    /**
     * Sets a new specialReqPref
     *
     * Indicates the preference associated with special needs or requirements of the customer, described using free text
     *
     * @param \Recranet\OTA\Type\VehicleSpecialReqPrefType[] $specialReqPref
     * @return self
     */
    public function setSpecialReqPref(array $specialReqPref = null)
    {
        $this->specialReqPref = $specialReqPref;
        return $this;
    }

    /**
     * Adds as coveragePref
     *
     * Indicates the preferences for one or more types of coverage (insurance).
     *
     * @return self
     * @param \Recranet\OTA\Type\VehicleAvailRQAdditionalInfoType\CoveragePrefsAType\CoveragePrefAType $coveragePref
     */
    public function addToCoveragePrefs(\Recranet\OTA\Type\VehicleAvailRQAdditionalInfoType\CoveragePrefsAType\CoveragePrefAType $coveragePref)
    {
        $this->coveragePrefs[] = $coveragePref;
        return $this;
    }

    /**
     * isset coveragePrefs
     *
     * Indicates the preferences for one or more types of coverage (insurance).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCoveragePrefs($index)
    {
        return isset($this->coveragePrefs[$index]);
    }

    /**
     * unset coveragePrefs
     *
     * Indicates the preferences for one or more types of coverage (insurance).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCoveragePrefs($index)
    {
        unset($this->coveragePrefs[$index]);
    }

    /**
     * Gets as coveragePrefs
     *
     * Indicates the preferences for one or more types of coverage (insurance).
     *
     * @return \Recranet\OTA\Type\VehicleAvailRQAdditionalInfoType\CoveragePrefsAType\CoveragePrefAType[]
     */
    public function getCoveragePrefs()
    {
        return $this->coveragePrefs;
    }

    /**
     * Sets a new coveragePrefs
     *
     * Indicates the preferences for one or more types of coverage (insurance).
     *
     * @param \Recranet\OTA\Type\VehicleAvailRQAdditionalInfoType\CoveragePrefsAType\CoveragePrefAType[] $coveragePrefs
     * @return self
     */
    public function setCoveragePrefs(array $coveragePrefs = null)
    {
        $this->coveragePrefs = $coveragePrefs;
        return $this;
    }

    /**
     * Adds as offLocService
     *
     * Information on requested off-airport location services, for example, vehicle delivery, customer pickup.
     *
     * @return self
     * @param \Recranet\OTA\Type\OffLocationServiceType $offLocService
     */
    public function addToOffLocService(\Recranet\OTA\Type\OffLocationServiceType $offLocService)
    {
        $this->offLocService[] = $offLocService;
        return $this;
    }

    /**
     * isset offLocService
     *
     * Information on requested off-airport location services, for example, vehicle delivery, customer pickup.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOffLocService($index)
    {
        return isset($this->offLocService[$index]);
    }

    /**
     * unset offLocService
     *
     * Information on requested off-airport location services, for example, vehicle delivery, customer pickup.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOffLocService($index)
    {
        unset($this->offLocService[$index]);
    }

    /**
     * Gets as offLocService
     *
     * Information on requested off-airport location services, for example, vehicle delivery, customer pickup.
     *
     * @return \Recranet\OTA\Type\OffLocationServiceType[]
     */
    public function getOffLocService()
    {
        return $this->offLocService;
    }

    /**
     * Sets a new offLocService
     *
     * Information on requested off-airport location services, for example, vehicle delivery, customer pickup.
     *
     * @param \Recranet\OTA\Type\OffLocationServiceType[] $offLocService
     * @return self
     */
    public function setOffLocService(array $offLocService = null)
    {
        $this->offLocService = $offLocService;
        return $this;
    }

    /**
     * Gets as arrivalDetails
     *
     * Details of the arrival transportation, if applicable.
     *
     * @return \Recranet\OTA\Type\VehicleArrivalDetailsType
     */
    public function getArrivalDetails()
    {
        return $this->arrivalDetails;
    }

    /**
     * Sets a new arrivalDetails
     *
     * Details of the arrival transportation, if applicable.
     *
     * @param \Recranet\OTA\Type\VehicleArrivalDetailsType $arrivalDetails
     * @return self
     */
    public function setArrivalDetails(?\Recranet\OTA\Type\VehicleArrivalDetailsType $arrivalDetails = null)
    {
        $this->arrivalDetails = $arrivalDetails;
        return $this;
    }

    /**
     * Gets as tourInfo
     *
     * Details of a tour with which this availability information is associated. Availability and rate information may vary if associated with a tour.
     *
     * @return \Recranet\OTA\Type\VehicleTourInfoType
     */
    public function getTourInfo()
    {
        return $this->tourInfo;
    }

    /**
     * Sets a new tourInfo
     *
     * Details of a tour with which this availability information is associated. Availability and rate information may vary if associated with a tour.
     *
     * @param \Recranet\OTA\Type\VehicleTourInfoType $tourInfo
     * @return self
     */
    public function setTourInfo(?\Recranet\OTA\Type\VehicleTourInfoType $tourInfo = null)
    {
        $this->tourInfo = $tourInfo;
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

