<?php

namespace Recranet\OTA\Type\EMDLiteType\TicketDocumentAType;

/**
 * Class representing CouponInfoAType
 */
class CouponInfoAType
{
    /**
     * The applicable coupon number.
     *
     * @var int $number
     */
    private $number = null;

    /**
     * The coupon number associated with the 'in connection with' document number.
     *
     * @var int $inConnectionNbr
     */
    private $inConnectionNbr = null;

    /**
     * The sequential number (segment identifier) of an individual flight segment, e.g., 1 of 3.
     *
     * @var string $couponReference
     */
    private $couponReference = null;

    /**
     * The applicable fare basis code.
     *
     * @var string $fareBasisCode
     */
    private $fareBasisCode = null;

    /**
     * Code providing status information for this coupon. Refer to OpenTravel Code List Status (STS).
     *
     * @var string $status
     */
    private $status = null;

    /**
     * The number representing the order in which this coupon was used or is to be used.
     *
     * @var int $couponItinerarySeqNbr
     */
    private $couponItinerarySeqNbr = null;

    /**
     * This is the numeric value associated with the measurement.
     *
     * @var float $unitOfMeasureQuantity
     */
    private $unitOfMeasureQuantity = null;

    /**
     * This is the standard unit of measure name (e.g., it could be generic such as metric or imperial or specific such as inches, feet, yards, miles, millimeters, centimeters, meters, kilometers- according to usage).
     *
     * @var string $unitOfMeasure
     */
    private $unitOfMeasure = null;

    /**
     * The unit of measure in a code format (e.g., inches, pixels, centimeters). Refer to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @var string $unitOfMeasureCode
     */
    private $unitOfMeasureCode = null;

    /**
     * The value associated to a single coupon of a miscellaneous document.
     *
     * @var float $value
     */
    private $value = null;

    /**
     * When true, the coupon should be associated. When false, it should be disassociated.
     *
     * @var bool $associateInd
     */
    private $associateInd = null;

    /**
     * Used to specify a promotional code that applies to the fee.
     *
     * @var string $promotionalCode
     */
    private $promotionalCode = null;

    /**
     * When true, a tax has been collected and is due to a local government from the validating carrier.
     *
     * @var bool $taxOnEMDInd
     */
    private $taxOnEMDInd = null;

    /**
     * The applicable code as provided for in IATA Resolution 728 for the associated EMD.
     *
     * @var string $assocFareBasisCode
     */
    private $assocFareBasisCode = null;

    /**
     * When true, the coupon is consumed at issuance.
     *
     * @var bool $consumedAtIssuanceInd
     */
    private $consumedAtIssuanceInd = null;

    /**
     * The scheduled date of service for this coupon of an EMD.
     *
     * @var \DateTime $dateOfService
     */
    private $dateOfService = null;

    /**
     * The number of services of the same type that are included in the EMD coupon.
     *
     * @var int $nbrOfSvcs
     */
    private $nbrOfSvcs = null;

    /**
     * Reference to the flight segments for this coupon.
     *
     * @var string $soldFlightSegmentRPH
     */
    private $soldFlightSegmentRPH = null;

    /**
     * The checked-in/lifted airline information.
     *
     * @var string $checkedInAirlineRPH
     */
    private $checkedInAirlineRPH = null;

    /**
     * Excess baggage information.
     *
     * @var \Recranet\OTA\Type\EMDLiteType\TicketDocumentAType\CouponInfoAType\ExcessBaggageAType $excessBaggage
     */
    private $excessBaggage = null;

    /**
     * The present to and at information.
     *
     * @var \Recranet\OTA\Type\EMDLiteType\TicketDocumentAType\CouponInfoAType\PresentInfoAType $presentInfo
     */
    private $presentInfo = null;

    /**
     * The reason for issuance information.
     *
     * @var \Recranet\OTA\Type\EMDLiteType\TicketDocumentAType\CouponInfoAType\ReasonForIssuanceAType $reasonForIssuance
     */
    private $reasonForIssuance = null;

    /**
     * The validating airline for this EMD coupon.
     *
     * @var \Recranet\OTA\Type\EMDLiteType\TicketDocumentAType\CouponInfoAType\ValidatingAirlineAType $validatingAirline
     */
    private $validatingAirline = null;

    /**
     * Gets as number
     *
     * The applicable coupon number.
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * The applicable coupon number.
     *
     * @param int $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as inConnectionNbr
     *
     * The coupon number associated with the 'in connection with' document number.
     *
     * @return int
     */
    public function getInConnectionNbr()
    {
        return $this->inConnectionNbr;
    }

    /**
     * Sets a new inConnectionNbr
     *
     * The coupon number associated with the 'in connection with' document number.
     *
     * @param int $inConnectionNbr
     * @return self
     */
    public function setInConnectionNbr($inConnectionNbr)
    {
        $this->inConnectionNbr = $inConnectionNbr;
        return $this;
    }

    /**
     * Gets as couponReference
     *
     * The sequential number (segment identifier) of an individual flight segment, e.g., 1 of 3.
     *
     * @return string
     */
    public function getCouponReference()
    {
        return $this->couponReference;
    }

    /**
     * Sets a new couponReference
     *
     * The sequential number (segment identifier) of an individual flight segment, e.g., 1 of 3.
     *
     * @param string $couponReference
     * @return self
     */
    public function setCouponReference($couponReference)
    {
        $this->couponReference = $couponReference;
        return $this;
    }

    /**
     * Gets as fareBasisCode
     *
     * The applicable fare basis code.
     *
     * @return string
     */
    public function getFareBasisCode()
    {
        return $this->fareBasisCode;
    }

    /**
     * Sets a new fareBasisCode
     *
     * The applicable fare basis code.
     *
     * @param string $fareBasisCode
     * @return self
     */
    public function setFareBasisCode($fareBasisCode)
    {
        $this->fareBasisCode = $fareBasisCode;
        return $this;
    }

    /**
     * Gets as status
     *
     * Code providing status information for this coupon. Refer to OpenTravel Code List Status (STS).
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Code providing status information for this coupon. Refer to OpenTravel Code List Status (STS).
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as couponItinerarySeqNbr
     *
     * The number representing the order in which this coupon was used or is to be used.
     *
     * @return int
     */
    public function getCouponItinerarySeqNbr()
    {
        return $this->couponItinerarySeqNbr;
    }

    /**
     * Sets a new couponItinerarySeqNbr
     *
     * The number representing the order in which this coupon was used or is to be used.
     *
     * @param int $couponItinerarySeqNbr
     * @return self
     */
    public function setCouponItinerarySeqNbr($couponItinerarySeqNbr)
    {
        $this->couponItinerarySeqNbr = $couponItinerarySeqNbr;
        return $this;
    }

    /**
     * Gets as unitOfMeasureQuantity
     *
     * This is the numeric value associated with the measurement.
     *
     * @return float
     */
    public function getUnitOfMeasureQuantity()
    {
        return $this->unitOfMeasureQuantity;
    }

    /**
     * Sets a new unitOfMeasureQuantity
     *
     * This is the numeric value associated with the measurement.
     *
     * @param float $unitOfMeasureQuantity
     * @return self
     */
    public function setUnitOfMeasureQuantity($unitOfMeasureQuantity)
    {
        $this->unitOfMeasureQuantity = $unitOfMeasureQuantity;
        return $this;
    }

    /**
     * Gets as unitOfMeasure
     *
     * This is the standard unit of measure name (e.g., it could be generic such as metric or imperial or specific such as inches, feet, yards, miles, millimeters, centimeters, meters, kilometers- according to usage).
     *
     * @return string
     */
    public function getUnitOfMeasure()
    {
        return $this->unitOfMeasure;
    }

    /**
     * Sets a new unitOfMeasure
     *
     * This is the standard unit of measure name (e.g., it could be generic such as metric or imperial or specific such as inches, feet, yards, miles, millimeters, centimeters, meters, kilometers- according to usage).
     *
     * @param string $unitOfMeasure
     * @return self
     */
    public function setUnitOfMeasure($unitOfMeasure)
    {
        $this->unitOfMeasure = $unitOfMeasure;
        return $this;
    }

    /**
     * Gets as unitOfMeasureCode
     *
     * The unit of measure in a code format (e.g., inches, pixels, centimeters). Refer to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @return string
     */
    public function getUnitOfMeasureCode()
    {
        return $this->unitOfMeasureCode;
    }

    /**
     * Sets a new unitOfMeasureCode
     *
     * The unit of measure in a code format (e.g., inches, pixels, centimeters). Refer to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @param string $unitOfMeasureCode
     * @return self
     */
    public function setUnitOfMeasureCode($unitOfMeasureCode)
    {
        $this->unitOfMeasureCode = $unitOfMeasureCode;
        return $this;
    }

    /**
     * Gets as value
     *
     * The value associated to a single coupon of a miscellaneous document.
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * The value associated to a single coupon of a miscellaneous document.
     *
     * @param float $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as associateInd
     *
     * When true, the coupon should be associated. When false, it should be disassociated.
     *
     * @return bool
     */
    public function getAssociateInd()
    {
        return $this->associateInd;
    }

    /**
     * Sets a new associateInd
     *
     * When true, the coupon should be associated. When false, it should be disassociated.
     *
     * @param bool $associateInd
     * @return self
     */
    public function setAssociateInd($associateInd)
    {
        $this->associateInd = $associateInd;
        return $this;
    }

    /**
     * Gets as promotionalCode
     *
     * Used to specify a promotional code that applies to the fee.
     *
     * @return string
     */
    public function getPromotionalCode()
    {
        return $this->promotionalCode;
    }

    /**
     * Sets a new promotionalCode
     *
     * Used to specify a promotional code that applies to the fee.
     *
     * @param string $promotionalCode
     * @return self
     */
    public function setPromotionalCode($promotionalCode)
    {
        $this->promotionalCode = $promotionalCode;
        return $this;
    }

    /**
     * Gets as taxOnEMDInd
     *
     * When true, a tax has been collected and is due to a local government from the validating carrier.
     *
     * @return bool
     */
    public function getTaxOnEMDInd()
    {
        return $this->taxOnEMDInd;
    }

    /**
     * Sets a new taxOnEMDInd
     *
     * When true, a tax has been collected and is due to a local government from the validating carrier.
     *
     * @param bool $taxOnEMDInd
     * @return self
     */
    public function setTaxOnEMDInd($taxOnEMDInd)
    {
        $this->taxOnEMDInd = $taxOnEMDInd;
        return $this;
    }

    /**
     * Gets as assocFareBasisCode
     *
     * The applicable code as provided for in IATA Resolution 728 for the associated EMD.
     *
     * @return string
     */
    public function getAssocFareBasisCode()
    {
        return $this->assocFareBasisCode;
    }

    /**
     * Sets a new assocFareBasisCode
     *
     * The applicable code as provided for in IATA Resolution 728 for the associated EMD.
     *
     * @param string $assocFareBasisCode
     * @return self
     */
    public function setAssocFareBasisCode($assocFareBasisCode)
    {
        $this->assocFareBasisCode = $assocFareBasisCode;
        return $this;
    }

    /**
     * Gets as consumedAtIssuanceInd
     *
     * When true, the coupon is consumed at issuance.
     *
     * @return bool
     */
    public function getConsumedAtIssuanceInd()
    {
        return $this->consumedAtIssuanceInd;
    }

    /**
     * Sets a new consumedAtIssuanceInd
     *
     * When true, the coupon is consumed at issuance.
     *
     * @param bool $consumedAtIssuanceInd
     * @return self
     */
    public function setConsumedAtIssuanceInd($consumedAtIssuanceInd)
    {
        $this->consumedAtIssuanceInd = $consumedAtIssuanceInd;
        return $this;
    }

    /**
     * Gets as dateOfService
     *
     * The scheduled date of service for this coupon of an EMD.
     *
     * @return \DateTime
     */
    public function getDateOfService()
    {
        return $this->dateOfService;
    }

    /**
     * Sets a new dateOfService
     *
     * The scheduled date of service for this coupon of an EMD.
     *
     * @param \DateTime $dateOfService
     * @return self
     */
    public function setDateOfService(\DateTime $dateOfService)
    {
        $this->dateOfService = $dateOfService;
        return $this;
    }

    /**
     * Gets as nbrOfSvcs
     *
     * The number of services of the same type that are included in the EMD coupon.
     *
     * @return int
     */
    public function getNbrOfSvcs()
    {
        return $this->nbrOfSvcs;
    }

    /**
     * Sets a new nbrOfSvcs
     *
     * The number of services of the same type that are included in the EMD coupon.
     *
     * @param int $nbrOfSvcs
     * @return self
     */
    public function setNbrOfSvcs($nbrOfSvcs)
    {
        $this->nbrOfSvcs = $nbrOfSvcs;
        return $this;
    }

    /**
     * Gets as soldFlightSegmentRPH
     *
     * Reference to the flight segments for this coupon.
     *
     * @return string
     */
    public function getSoldFlightSegmentRPH()
    {
        return $this->soldFlightSegmentRPH;
    }

    /**
     * Sets a new soldFlightSegmentRPH
     *
     * Reference to the flight segments for this coupon.
     *
     * @param string $soldFlightSegmentRPH
     * @return self
     */
    public function setSoldFlightSegmentRPH($soldFlightSegmentRPH)
    {
        $this->soldFlightSegmentRPH = $soldFlightSegmentRPH;
        return $this;
    }

    /**
     * Gets as checkedInAirlineRPH
     *
     * The checked-in/lifted airline information.
     *
     * @return string
     */
    public function getCheckedInAirlineRPH()
    {
        return $this->checkedInAirlineRPH;
    }

    /**
     * Sets a new checkedInAirlineRPH
     *
     * The checked-in/lifted airline information.
     *
     * @param string $checkedInAirlineRPH
     * @return self
     */
    public function setCheckedInAirlineRPH($checkedInAirlineRPH)
    {
        $this->checkedInAirlineRPH = $checkedInAirlineRPH;
        return $this;
    }

    /**
     * Gets as excessBaggage
     *
     * Excess baggage information.
     *
     * @return \Recranet\OTA\Type\EMDLiteType\TicketDocumentAType\CouponInfoAType\ExcessBaggageAType
     */
    public function getExcessBaggage()
    {
        return $this->excessBaggage;
    }

    /**
     * Sets a new excessBaggage
     *
     * Excess baggage information.
     *
     * @param \Recranet\OTA\Type\EMDLiteType\TicketDocumentAType\CouponInfoAType\ExcessBaggageAType $excessBaggage
     * @return self
     */
    public function setExcessBaggage(?\Recranet\OTA\Type\EMDLiteType\TicketDocumentAType\CouponInfoAType\ExcessBaggageAType $excessBaggage = null)
    {
        $this->excessBaggage = $excessBaggage;
        return $this;
    }

    /**
     * Gets as presentInfo
     *
     * The present to and at information.
     *
     * @return \Recranet\OTA\Type\EMDLiteType\TicketDocumentAType\CouponInfoAType\PresentInfoAType
     */
    public function getPresentInfo()
    {
        return $this->presentInfo;
    }

    /**
     * Sets a new presentInfo
     *
     * The present to and at information.
     *
     * @param \Recranet\OTA\Type\EMDLiteType\TicketDocumentAType\CouponInfoAType\PresentInfoAType $presentInfo
     * @return self
     */
    public function setPresentInfo(?\Recranet\OTA\Type\EMDLiteType\TicketDocumentAType\CouponInfoAType\PresentInfoAType $presentInfo = null)
    {
        $this->presentInfo = $presentInfo;
        return $this;
    }

    /**
     * Gets as reasonForIssuance
     *
     * The reason for issuance information.
     *
     * @return \Recranet\OTA\Type\EMDLiteType\TicketDocumentAType\CouponInfoAType\ReasonForIssuanceAType
     */
    public function getReasonForIssuance()
    {
        return $this->reasonForIssuance;
    }

    /**
     * Sets a new reasonForIssuance
     *
     * The reason for issuance information.
     *
     * @param \Recranet\OTA\Type\EMDLiteType\TicketDocumentAType\CouponInfoAType\ReasonForIssuanceAType $reasonForIssuance
     * @return self
     */
    public function setReasonForIssuance(?\Recranet\OTA\Type\EMDLiteType\TicketDocumentAType\CouponInfoAType\ReasonForIssuanceAType $reasonForIssuance = null)
    {
        $this->reasonForIssuance = $reasonForIssuance;
        return $this;
    }

    /**
     * Gets as validatingAirline
     *
     * The validating airline for this EMD coupon.
     *
     * @return \Recranet\OTA\Type\EMDLiteType\TicketDocumentAType\CouponInfoAType\ValidatingAirlineAType
     */
    public function getValidatingAirline()
    {
        return $this->validatingAirline;
    }

    /**
     * Sets a new validatingAirline
     *
     * The validating airline for this EMD coupon.
     *
     * @param \Recranet\OTA\Type\EMDLiteType\TicketDocumentAType\CouponInfoAType\ValidatingAirlineAType $validatingAirline
     * @return self
     */
    public function setValidatingAirline(?\Recranet\OTA\Type\EMDLiteType\TicketDocumentAType\CouponInfoAType\ValidatingAirlineAType $validatingAirline = null)
    {
        $this->validatingAirline = $validatingAirline;
        return $this;
    }
}

