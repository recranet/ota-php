<?php

namespace Recranet\OTA;

/**
 * Class representing VehicleSegmentAdditionalInfoType
 *
 * The VehicleSegmentAdditionalInfoType complex type identifies the data that descibes the supplemental information assocated with a vehicle segment. Such information may be associated with the reservation of a vehicle, but is not normally included.
 * XSD Type: VehicleSegmentAdditionalInfoType
 */
class VehicleSegmentAdditionalInfoType
{
    /**
     * When true, a written confirmation may be requested.
     *
     * @var bool $writtenConfInd
     */
    private $writtenConfInd = null;

    /**
     * A collection of payment rules associated with this reservation.
     *
     * @var \Recranet\OTA\MonetaryRuleType[] $paymentRules
     */
    private $paymentRules = null;

    /**
     * Used for payment information, may be prepayment, actual, etc.
     *
     * @var \Recranet\OTA\PaymentDetailType[] $rentalPaymentAmount
     */
    private $rentalPaymentAmount = [
        
    ];

    /**
     * A collection of vehicle coverages associated with this reservation.
     *
     * @var \Recranet\OTA\CoveragePricedType[] $pricedCoverages
     */
    private $pricedCoverages = null;

    /**
     * Information on an off-location service associated with this reservation, along with the associated charge.
     *
     * @var \Recranet\OTA\OffLocationServicePricedType[] $pricedOffLocService
     */
    private $pricedOffLocService = [
        
    ];

    /**
     * A collection of free-format messages associated with this reservation.
     *
     * @var \Recranet\OTA\FormattedTextType[] $vendorMessages
     */
    private $vendorMessages = null;

    /**
     * Detailed information about the associated rental facilities, for example, address, phone number, hours of operation.
     *
     * @var \Recranet\OTA\VehicleLocationDetailsType[] $locationDetails
     */
    private $locationDetails = [
        
    ];

    /**
     * Details of a tour associated with which this reservation information is associated. Rate information may vary if associated with a tour.
     *
     * @var \Recranet\OTA\VehicleTourInfoType $tourInfo
     */
    private $tourInfo = null;

    /**
     * Indicates the preference associated with special needs or requirements of the customer, described using free text.
     *
     * @var \Recranet\OTA\VehicleSpecialReqPrefType[] $specialReqPref
     */
    private $specialReqPref = [
        
    ];

    /**
     * Details of the arrival transportation, if applicable.
     *
     * @var \Recranet\OTA\VehicleArrivalDetailsType $arrivalDetails
     */
    private $arrivalDetails = null;

    /**
     * Used to provide instructions regarding cusotmer preferences for receiving confirmation information.
     *
     * @var \Recranet\OTA\WrittenConfInstType $writtenConfInst
     */
    private $writtenConfInst = null;

    /**
     * Free text description regarding the rental (e.g. vehicle is being rented because of an accident).
     *
     * @var \Recranet\OTA\ParagraphType[] $remark
     */
    private $remark = [
        
    ];

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as writtenConfInd
     *
     * When true, a written confirmation may be requested.
     *
     * @return bool
     */
    public function getWrittenConfInd()
    {
        return $this->writtenConfInd;
    }

    /**
     * Sets a new writtenConfInd
     *
     * When true, a written confirmation may be requested.
     *
     * @param bool $writtenConfInd
     * @return self
     */
    public function setWrittenConfInd($writtenConfInd)
    {
        $this->writtenConfInd = $writtenConfInd;
        return $this;
    }

    /**
     * Adds as paymentRule
     *
     * A collection of payment rules associated with this reservation.
     *
     * @return self
     * @param \Recranet\OTA\MonetaryRuleType $paymentRule
     */
    public function addToPaymentRules(\Recranet\OTA\MonetaryRuleType $paymentRule)
    {
        $this->paymentRules[] = $paymentRule;
        return $this;
    }

    /**
     * isset paymentRules
     *
     * A collection of payment rules associated with this reservation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentRules($index)
    {
        return isset($this->paymentRules[$index]);
    }

    /**
     * unset paymentRules
     *
     * A collection of payment rules associated with this reservation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentRules($index)
    {
        unset($this->paymentRules[$index]);
    }

    /**
     * Gets as paymentRules
     *
     * A collection of payment rules associated with this reservation.
     *
     * @return \Recranet\OTA\MonetaryRuleType[]
     */
    public function getPaymentRules()
    {
        return $this->paymentRules;
    }

    /**
     * Sets a new paymentRules
     *
     * A collection of payment rules associated with this reservation.
     *
     * @param \Recranet\OTA\MonetaryRuleType[] $paymentRules
     * @return self
     */
    public function setPaymentRules(array $paymentRules = null)
    {
        $this->paymentRules = $paymentRules;
        return $this;
    }

    /**
     * Adds as rentalPaymentAmount
     *
     * Used for payment information, may be prepayment, actual, etc.
     *
     * @return self
     * @param \Recranet\OTA\PaymentDetailType $rentalPaymentAmount
     */
    public function addToRentalPaymentAmount(\Recranet\OTA\PaymentDetailType $rentalPaymentAmount)
    {
        $this->rentalPaymentAmount[] = $rentalPaymentAmount;
        return $this;
    }

    /**
     * isset rentalPaymentAmount
     *
     * Used for payment information, may be prepayment, actual, etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRentalPaymentAmount($index)
    {
        return isset($this->rentalPaymentAmount[$index]);
    }

    /**
     * unset rentalPaymentAmount
     *
     * Used for payment information, may be prepayment, actual, etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRentalPaymentAmount($index)
    {
        unset($this->rentalPaymentAmount[$index]);
    }

    /**
     * Gets as rentalPaymentAmount
     *
     * Used for payment information, may be prepayment, actual, etc.
     *
     * @return \Recranet\OTA\PaymentDetailType[]
     */
    public function getRentalPaymentAmount()
    {
        return $this->rentalPaymentAmount;
    }

    /**
     * Sets a new rentalPaymentAmount
     *
     * Used for payment information, may be prepayment, actual, etc.
     *
     * @param \Recranet\OTA\PaymentDetailType[] $rentalPaymentAmount
     * @return self
     */
    public function setRentalPaymentAmount(array $rentalPaymentAmount = null)
    {
        $this->rentalPaymentAmount = $rentalPaymentAmount;
        return $this;
    }

    /**
     * Adds as pricedCoverage
     *
     * A collection of vehicle coverages associated with this reservation.
     *
     * @return self
     * @param \Recranet\OTA\CoveragePricedType $pricedCoverage
     */
    public function addToPricedCoverages(\Recranet\OTA\CoveragePricedType $pricedCoverage)
    {
        $this->pricedCoverages[] = $pricedCoverage;
        return $this;
    }

    /**
     * isset pricedCoverages
     *
     * A collection of vehicle coverages associated with this reservation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPricedCoverages($index)
    {
        return isset($this->pricedCoverages[$index]);
    }

    /**
     * unset pricedCoverages
     *
     * A collection of vehicle coverages associated with this reservation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPricedCoverages($index)
    {
        unset($this->pricedCoverages[$index]);
    }

    /**
     * Gets as pricedCoverages
     *
     * A collection of vehicle coverages associated with this reservation.
     *
     * @return \Recranet\OTA\CoveragePricedType[]
     */
    public function getPricedCoverages()
    {
        return $this->pricedCoverages;
    }

    /**
     * Sets a new pricedCoverages
     *
     * A collection of vehicle coverages associated with this reservation.
     *
     * @param \Recranet\OTA\CoveragePricedType[] $pricedCoverages
     * @return self
     */
    public function setPricedCoverages(array $pricedCoverages = null)
    {
        $this->pricedCoverages = $pricedCoverages;
        return $this;
    }

    /**
     * Adds as pricedOffLocService
     *
     * Information on an off-location service associated with this reservation, along with the associated charge.
     *
     * @return self
     * @param \Recranet\OTA\OffLocationServicePricedType $pricedOffLocService
     */
    public function addToPricedOffLocService(\Recranet\OTA\OffLocationServicePricedType $pricedOffLocService)
    {
        $this->pricedOffLocService[] = $pricedOffLocService;
        return $this;
    }

    /**
     * isset pricedOffLocService
     *
     * Information on an off-location service associated with this reservation, along with the associated charge.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPricedOffLocService($index)
    {
        return isset($this->pricedOffLocService[$index]);
    }

    /**
     * unset pricedOffLocService
     *
     * Information on an off-location service associated with this reservation, along with the associated charge.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPricedOffLocService($index)
    {
        unset($this->pricedOffLocService[$index]);
    }

    /**
     * Gets as pricedOffLocService
     *
     * Information on an off-location service associated with this reservation, along with the associated charge.
     *
     * @return \Recranet\OTA\OffLocationServicePricedType[]
     */
    public function getPricedOffLocService()
    {
        return $this->pricedOffLocService;
    }

    /**
     * Sets a new pricedOffLocService
     *
     * Information on an off-location service associated with this reservation, along with the associated charge.
     *
     * @param \Recranet\OTA\OffLocationServicePricedType[] $pricedOffLocService
     * @return self
     */
    public function setPricedOffLocService(array $pricedOffLocService = null)
    {
        $this->pricedOffLocService = $pricedOffLocService;
        return $this;
    }

    /**
     * Adds as vendorMessage
     *
     * A collection of free-format messages associated with this reservation.
     *
     * @return self
     * @param \Recranet\OTA\FormattedTextType $vendorMessage
     */
    public function addToVendorMessages(\Recranet\OTA\FormattedTextType $vendorMessage)
    {
        $this->vendorMessages[] = $vendorMessage;
        return $this;
    }

    /**
     * isset vendorMessages
     *
     * A collection of free-format messages associated with this reservation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVendorMessages($index)
    {
        return isset($this->vendorMessages[$index]);
    }

    /**
     * unset vendorMessages
     *
     * A collection of free-format messages associated with this reservation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVendorMessages($index)
    {
        unset($this->vendorMessages[$index]);
    }

    /**
     * Gets as vendorMessages
     *
     * A collection of free-format messages associated with this reservation.
     *
     * @return \Recranet\OTA\FormattedTextType[]
     */
    public function getVendorMessages()
    {
        return $this->vendorMessages;
    }

    /**
     * Sets a new vendorMessages
     *
     * A collection of free-format messages associated with this reservation.
     *
     * @param \Recranet\OTA\FormattedTextType[] $vendorMessages
     * @return self
     */
    public function setVendorMessages(array $vendorMessages = null)
    {
        $this->vendorMessages = $vendorMessages;
        return $this;
    }

    /**
     * Adds as locationDetails
     *
     * Detailed information about the associated rental facilities, for example, address, phone number, hours of operation.
     *
     * @return self
     * @param \Recranet\OTA\VehicleLocationDetailsType $locationDetails
     */
    public function addToLocationDetails(\Recranet\OTA\VehicleLocationDetailsType $locationDetails)
    {
        $this->locationDetails[] = $locationDetails;
        return $this;
    }

    /**
     * isset locationDetails
     *
     * Detailed information about the associated rental facilities, for example, address, phone number, hours of operation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLocationDetails($index)
    {
        return isset($this->locationDetails[$index]);
    }

    /**
     * unset locationDetails
     *
     * Detailed information about the associated rental facilities, for example, address, phone number, hours of operation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLocationDetails($index)
    {
        unset($this->locationDetails[$index]);
    }

    /**
     * Gets as locationDetails
     *
     * Detailed information about the associated rental facilities, for example, address, phone number, hours of operation.
     *
     * @return \Recranet\OTA\VehicleLocationDetailsType[]
     */
    public function getLocationDetails()
    {
        return $this->locationDetails;
    }

    /**
     * Sets a new locationDetails
     *
     * Detailed information about the associated rental facilities, for example, address, phone number, hours of operation.
     *
     * @param \Recranet\OTA\VehicleLocationDetailsType[] $locationDetails
     * @return self
     */
    public function setLocationDetails(array $locationDetails = null)
    {
        $this->locationDetails = $locationDetails;
        return $this;
    }

    /**
     * Gets as tourInfo
     *
     * Details of a tour associated with which this reservation information is associated. Rate information may vary if associated with a tour.
     *
     * @return \Recranet\OTA\VehicleTourInfoType
     */
    public function getTourInfo()
    {
        return $this->tourInfo;
    }

    /**
     * Sets a new tourInfo
     *
     * Details of a tour associated with which this reservation information is associated. Rate information may vary if associated with a tour.
     *
     * @param \Recranet\OTA\VehicleTourInfoType $tourInfo
     * @return self
     */
    public function setTourInfo(?\Recranet\OTA\VehicleTourInfoType $tourInfo = null)
    {
        $this->tourInfo = $tourInfo;
        return $this;
    }

    /**
     * Adds as specialReqPref
     *
     * Indicates the preference associated with special needs or requirements of the customer, described using free text.
     *
     * @return self
     * @param \Recranet\OTA\VehicleSpecialReqPrefType $specialReqPref
     */
    public function addToSpecialReqPref(\Recranet\OTA\VehicleSpecialReqPrefType $specialReqPref)
    {
        $this->specialReqPref[] = $specialReqPref;
        return $this;
    }

    /**
     * isset specialReqPref
     *
     * Indicates the preference associated with special needs or requirements of the customer, described using free text.
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
     * Indicates the preference associated with special needs or requirements of the customer, described using free text.
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
     * Indicates the preference associated with special needs or requirements of the customer, described using free text.
     *
     * @return \Recranet\OTA\VehicleSpecialReqPrefType[]
     */
    public function getSpecialReqPref()
    {
        return $this->specialReqPref;
    }

    /**
     * Sets a new specialReqPref
     *
     * Indicates the preference associated with special needs or requirements of the customer, described using free text.
     *
     * @param \Recranet\OTA\VehicleSpecialReqPrefType[] $specialReqPref
     * @return self
     */
    public function setSpecialReqPref(array $specialReqPref = null)
    {
        $this->specialReqPref = $specialReqPref;
        return $this;
    }

    /**
     * Gets as arrivalDetails
     *
     * Details of the arrival transportation, if applicable.
     *
     * @return \Recranet\OTA\VehicleArrivalDetailsType
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
     * @param \Recranet\OTA\VehicleArrivalDetailsType $arrivalDetails
     * @return self
     */
    public function setArrivalDetails(?\Recranet\OTA\VehicleArrivalDetailsType $arrivalDetails = null)
    {
        $this->arrivalDetails = $arrivalDetails;
        return $this;
    }

    /**
     * Gets as writtenConfInst
     *
     * Used to provide instructions regarding cusotmer preferences for receiving confirmation information.
     *
     * @return \Recranet\OTA\WrittenConfInstType
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
     * @param \Recranet\OTA\WrittenConfInstType $writtenConfInst
     * @return self
     */
    public function setWrittenConfInst(?\Recranet\OTA\WrittenConfInstType $writtenConfInst = null)
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
     * @param \Recranet\OTA\ParagraphType $remark
     */
    public function addToRemark(\Recranet\OTA\ParagraphType $remark)
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
     * @return \Recranet\OTA\ParagraphType[]
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
     * @param \Recranet\OTA\ParagraphType[] $remark
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

