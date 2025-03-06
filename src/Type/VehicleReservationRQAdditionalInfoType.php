<?php

namespace Recranet\OTA\Type;

/**
 * Class representing VehicleReservationRQAdditionalInfoType
 *
 * Identifies the supplemental information that may be included when requesting the reservation of a vehicle.
 * XSD Type: VehicleReservationRQAdditionalInfoType
 */
class VehicleReservationRQAdditionalInfoType
{
    /**
     * The quantity of suitcases that can typically fit in the trunk of the car.
     *
     * @var int $luggageQty
     */
    private $luggageQty = null;

    /**
     * The quantity of (seat-belted) passengers that can fit in the vehicle.
     *
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
     * Indicates the preference associated with special needs or requirements of the customer, described using free text
     *
     * @var \Recranet\OTA\Type\VehicleSpecialReqPrefType[] $specialReqPref
     */
    private $specialReqPref = [
        
    ];

    /**
     * Indicates the preferences for one or more types of coverage (insurance).
     *
     * @var \Recranet\OTA\Type\VehicleReservationRQAdditionalInfoType\CoveragePrefsAType\CoveragePrefAType[] $coveragePrefs
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
     * Details of the arrival transportation, if applicable
     *
     * @var \Recranet\OTA\Type\VehicleArrivalDetailsType $arrivalDetails
     */
    private $arrivalDetails = null;

    /**
     * Indicates preferences for the form of payment that will be used, if the request results in a reservation. This element may repeat for different rental payment preferences.
     *
     * @var \Recranet\OTA\Type\VehicleReservationRQAdditionalInfoType\RentalPaymentPrefAType[] $rentalPaymentPref
     */
    private $rentalPaymentPref = [
        
    ];

    /**
     * Information identifying an earlier availability quote.
     *
     * @var \Recranet\OTA\Type\VehicleReservationRQAdditionalInfoType\ReferenceAType $reference
     */
    private $reference = null;

    /**
     * Details of a tour with which this reservation information is associated. Availability and rate information may vary if associated with a tour.
     *
     * @var \Recranet\OTA\Type\VehicleTourInfoType $tourInfo
     */
    private $tourInfo = null;

    /**
     * Used to provide instructions regarding cusotmer preferences for receiving confirmation information.
     *
     * @var \Recranet\OTA\Type\WrittenConfInstType $writtenConfInst
     */
    private $writtenConfInst = null;

    /**
     * Free text description regarding the rental (e.g. vehicle is being rented because of an accident).
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $remark
     */
    private $remark = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as luggageQty
     *
     * The quantity of suitcases that can typically fit in the trunk of the car.
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
     * The quantity of suitcases that can typically fit in the trunk of the car.
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
     * The quantity of (seat-belted) passengers that can fit in the vehicle.
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
     * The quantity of (seat-belted) passengers that can fit in the vehicle.
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
     * @param \Recranet\OTA\Type\VehicleReservationRQAdditionalInfoType\CoveragePrefsAType\CoveragePrefAType $coveragePref
     */
    public function addToCoveragePrefs(\Recranet\OTA\Type\VehicleReservationRQAdditionalInfoType\CoveragePrefsAType\CoveragePrefAType $coveragePref)
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
     * @return \Recranet\OTA\Type\VehicleReservationRQAdditionalInfoType\CoveragePrefsAType\CoveragePrefAType[]
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
     * @param \Recranet\OTA\Type\VehicleReservationRQAdditionalInfoType\CoveragePrefsAType\CoveragePrefAType[] $coveragePrefs
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
     * Details of the arrival transportation, if applicable
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
     * Details of the arrival transportation, if applicable
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
     * Adds as rentalPaymentPref
     *
     * Indicates preferences for the form of payment that will be used, if the request results in a reservation. This element may repeat for different rental payment preferences.
     *
     * @return self
     * @param \Recranet\OTA\Type\VehicleReservationRQAdditionalInfoType\RentalPaymentPrefAType $rentalPaymentPref
     */
    public function addToRentalPaymentPref(\Recranet\OTA\Type\VehicleReservationRQAdditionalInfoType\RentalPaymentPrefAType $rentalPaymentPref)
    {
        $this->rentalPaymentPref[] = $rentalPaymentPref;
        return $this;
    }

    /**
     * isset rentalPaymentPref
     *
     * Indicates preferences for the form of payment that will be used, if the request results in a reservation. This element may repeat for different rental payment preferences.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRentalPaymentPref($index)
    {
        return isset($this->rentalPaymentPref[$index]);
    }

    /**
     * unset rentalPaymentPref
     *
     * Indicates preferences for the form of payment that will be used, if the request results in a reservation. This element may repeat for different rental payment preferences.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRentalPaymentPref($index)
    {
        unset($this->rentalPaymentPref[$index]);
    }

    /**
     * Gets as rentalPaymentPref
     *
     * Indicates preferences for the form of payment that will be used, if the request results in a reservation. This element may repeat for different rental payment preferences.
     *
     * @return \Recranet\OTA\Type\VehicleReservationRQAdditionalInfoType\RentalPaymentPrefAType[]
     */
    public function getRentalPaymentPref()
    {
        return $this->rentalPaymentPref;
    }

    /**
     * Sets a new rentalPaymentPref
     *
     * Indicates preferences for the form of payment that will be used, if the request results in a reservation. This element may repeat for different rental payment preferences.
     *
     * @param \Recranet\OTA\Type\VehicleReservationRQAdditionalInfoType\RentalPaymentPrefAType[] $rentalPaymentPref
     * @return self
     */
    public function setRentalPaymentPref(array $rentalPaymentPref = null)
    {
        $this->rentalPaymentPref = $rentalPaymentPref;
        return $this;
    }

    /**
     * Gets as reference
     *
     * Information identifying an earlier availability quote.
     *
     * @return \Recranet\OTA\Type\VehicleReservationRQAdditionalInfoType\ReferenceAType
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * Information identifying an earlier availability quote.
     *
     * @param \Recranet\OTA\Type\VehicleReservationRQAdditionalInfoType\ReferenceAType $reference
     * @return self
     */
    public function setReference(?\Recranet\OTA\Type\VehicleReservationRQAdditionalInfoType\ReferenceAType $reference = null)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Gets as tourInfo
     *
     * Details of a tour with which this reservation information is associated. Availability and rate information may vary if associated with a tour.
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
     * Details of a tour with which this reservation information is associated. Availability and rate information may vary if associated with a tour.
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
     * Gets as writtenConfInst
     *
     * Used to provide instructions regarding cusotmer preferences for receiving confirmation information.
     *
     * @return \Recranet\OTA\Type\WrittenConfInstType
     */
    public function getWrittenConfInst()
    {
        return $this->writtenConfInst;
    }

    /**
     * Sets a new writtenConfInst
     *
     * Used to provide instructions regarding cusotmer preferences for receiving confirmation information.
     *
     * @param \Recranet\OTA\Type\WrittenConfInstType $writtenConfInst
     * @return self
     */
    public function setWrittenConfInst(?\Recranet\OTA\Type\WrittenConfInstType $writtenConfInst = null)
    {
        $this->writtenConfInst = $writtenConfInst;
        return $this;
    }

    /**
     * Adds as remark
     *
     * Free text description regarding the rental (e.g. vehicle is being rented because of an accident).
     *
     * @return self
     * @param \Recranet\OTA\Type\ParagraphType $remark
     */
    public function addToRemark(\Recranet\OTA\Type\ParagraphType $remark)
    {
        $this->remark[] = $remark;
        return $this;
    }

    /**
     * isset remark
     *
     * Free text description regarding the rental (e.g. vehicle is being rented because of an accident).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRemark($index)
    {
        return isset($this->remark[$index]);
    }

    /**
     * unset remark
     *
     * Free text description regarding the rental (e.g. vehicle is being rented because of an accident).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRemark($index)
    {
        unset($this->remark[$index]);
    }

    /**
     * Gets as remark
     *
     * Free text description regarding the rental (e.g. vehicle is being rented because of an accident).
     *
     * @return \Recranet\OTA\Type\ParagraphType[]
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets a new remark
     *
     * Free text description regarding the rental (e.g. vehicle is being rented because of an accident).
     *
     * @param \Recranet\OTA\Type\ParagraphType[] $remark
     * @return self
     */
    public function setRemark(array $remark = null)
    {
        $this->remark = $remark;
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

