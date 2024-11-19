<?php

namespace Recranet\OTA;

/**
 * Class representing EMDType
 *
 * A container for electronic miscellaneous document information
 * XSD Type: EMD_Type
 */
class EMDType
{
    /**
     * Total number of flight segments.
     *
     * @var int $totalFltSegQty
     */
    private $totalFltSegQty = null;

    /**
     * Used to define the quantity for an associated element or attribute.
     *
     * @var int $quantity
     */
    private $quantity = null;

    /**
     * Passenger specific data.
     *
     * @var string $specificData
     */
    private $specificData = null;

    /**
     * When true, a tax is to be calculated by the BSP Processing Centre.
     *
     * @var bool $taxOnCommissionInd
     */
    private $taxOnCommissionInd = null;

    /**
     * An indication of the method of ticket generation. Refer to OpenTravel Code List EMD Ticketing Mode Code-5387 (ETM).
     *
     * @var string $ticketingModeCode
     */
    private $ticketingModeCode = null;

    /**
     * Type of EMD. EMD-S (standalone) or EMD-A (associated with flight segment and an eticket.)
     *
     * @var string $eMDType
     */
    private $eMDType = null;

    /**
     * When true, indicates that it is a quote type EMD or if false is an issued EMD.
     *
     * @var bool $quoteInd
     */
    private $quoteInd = null;

    /**
     * Indicates the required modification to the element.
     *
     * @var string $operation
     */
    private $operation = null;

    /**
     * Provides a reference to a specific EMD.
     *
     * @var string $rPH
     */
    private $rPH = null;

    /**
     * Direct reference of traveler assigned by requesting system. Used as a cross reference between data segments.
     *
     * @var \Recranet\OTA\EMDType\TravelerRefNumberAType $travelerRefNumber
     */
    private $travelerRefNumber = null;

    /**
     * The agent numeric code, booking agent id, issuing agent id and/or servicing airline/system provider ID.
     *
     * @var \Recranet\OTA\UniqueIDType[] $agentID
     */
    private $agentID = [
        
    ];

    /**
     * The payment information.
     *
     * @var \Recranet\OTA\PaymentDetailType[] $paymentDetail
     */
    private $paymentDetail = [
        
    ];

    /**
     * The true origin and destination.
     *
     * @var \Recranet\OTA\EMDType\OriginDestinationAType $originDestination
     */
    private $originDestination = null;

    /**
     * Frequent flyer reference. ProgramID=airline code, MembershipID=FF number.
     *
     * @var \Recranet\OTA\EMDType\CustLoyaltyAType[] $custLoyalty
     */
    private $custLoyalty = [
        
    ];

    /**
     * Endorsement/ restriction remarks.
     *
     * @var \Recranet\OTA\EMDType\EndorsementAType $endorsement
     */
    private $endorsement = null;

    /**
     * ID contains the actual identifier (e.g. invoice, airline confirmation number, customer id or airline indexing field.)
     *
     * @var \Recranet\OTA\UniqueIDType[] $addReferenceID
     */
    private $addReferenceID = [
        
    ];

    /**
     * Used to specify the base fare, the base fare net and the base fare sell amounts.
     *
     * @var \Recranet\OTA\EMDType\BaseFareAType[] $baseFare
     */
    private $baseFare = [
        
    ];

    /**
     * Used to specify the equivalent - equivalent net or equivalent sell paid fare.
     *
     * @var \Recranet\OTA\EMDType\EquivFareAType[] $equivFare
     */
    private $equivFare = [
        
    ];

    /**
     * Used to specify the total, total net, total sell fare or refund amount.
     *
     * @var \Recranet\OTA\EMDType\TotalFareAType[] $totalFare
     */
    private $totalFare = [
        
    ];

    /**
     * A collection of taxes.
     *
     * @var \Recranet\OTA\EMDType\TaxesAType\TaxAType[] $taxes
     */
    private $taxes = null;

    /**
     * Contains the fare calculation information for the stored passenger fare.
     *
     * @var \Recranet\OTA\EMDType\UnstructuredFareCalcAType[] $unstructuredFareCalc
     */
    private $unstructuredFareCalc = [
        
    ];

    /**
     * Nonendorsable and nonrefundable indicators, penalty restriction indicator, pricing system, tour code, ISO country code, around the world fare indicator and non-reissuable/non-exchangeable indicator.
     *
     * @var \Recranet\OTA\EMDType\FareInfoAType $fareInfo
     */
    private $fareInfo = null;

    /**
     * The EMD type, in connection number, fee owner and date of issue.
     *
     * @var \Recranet\OTA\EMDType\TicketDocumentAType[] $ticketDocument
     */
    private $ticketDocument = [
        
    ];

    /**
     * Commission information for this ticket/document.
     *
     * @var \Recranet\OTA\EMDType\CommissionAType $commission
     */
    private $commission = null;

    /**
     * Price quote date, account code, input designator, component count and bank exchange rate.
     *
     * @var \Recranet\OTA\FareComponentType $fareComponent
     */
    private $fareComponent = null;

    /**
     * Data for the collection of non-airport/ government fees.
     *
     * @var \Recranet\OTA\EMDType\CarrierFeeInfoAType $carrierFeeInfo
     */
    private $carrierFeeInfo = null;

    /**
     * The exchanged residual fare component information.
     *
     * @var \Recranet\OTA\EMDType\ExchResidualFareComponentAType[] $exchResidualFareComponent
     */
    private $exchResidualFareComponent = [
        
    ];

    /**
     * The original ticket/document issue information.
     *
     * @var \Recranet\OTA\EMDType\OriginalIssueInfoAType $originalIssueInfo
     */
    private $originalIssueInfo = null;

    /**
     * The reissued flown flight coupon information.
     *
     * @var \Recranet\OTA\EMDType\ReissuedFlownAType[] $reissuedFlown
     */
    private $reissuedFlown = [
        
    ];

    /**
     * A response message from the controlling carrier.
     *
     * @var \Recranet\OTA\FreeTextType $responseComment
     */
    private $responseComment = null;

    /**
     * The present to and at information.
     *
     * @var \Recranet\OTA\EMDType\PresentInfoAType $presentInfo
     */
    private $presentInfo = null;

    /**
     * The reason for issuance information.
     *
     * @var \Recranet\OTA\EMDType\ReasonForIssuanceAType $reasonForIssuance
     */
    private $reasonForIssuance = null;

    /**
     * The validating airline for all EMD's for this passenger.
     *
     * @var \Recranet\OTA\EMDType\ValidatingAirlineAType $validatingAirline
     */
    private $validatingAirline = null;

    /**
     * Used to specify tax coupon information.
     *
     * @var \Recranet\OTA\EMDType\TaxCouponInformationAType $taxCouponInformation
     */
    private $taxCouponInformation = null;

    /**
     * Gets as totalFltSegQty
     *
     * Total number of flight segments.
     *
     * @return int
     */
    public function getTotalFltSegQty()
    {
        return $this->totalFltSegQty;
    }

    /**
     * Sets a new totalFltSegQty
     *
     * Total number of flight segments.
     *
     * @param int $totalFltSegQty
     * @return self
     */
    public function setTotalFltSegQty($totalFltSegQty)
    {
        $this->totalFltSegQty = $totalFltSegQty;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * Used to define the quantity for an associated element or attribute.
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Used to define the quantity for an associated element or attribute.
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as specificData
     *
     * Passenger specific data.
     *
     * @return string
     */
    public function getSpecificData()
    {
        return $this->specificData;
    }

    /**
     * Sets a new specificData
     *
     * Passenger specific data.
     *
     * @param string $specificData
     * @return self
     */
    public function setSpecificData($specificData)
    {
        $this->specificData = $specificData;
        return $this;
    }

    /**
     * Gets as taxOnCommissionInd
     *
     * When true, a tax is to be calculated by the BSP Processing Centre.
     *
     * @return bool
     */
    public function getTaxOnCommissionInd()
    {
        return $this->taxOnCommissionInd;
    }

    /**
     * Sets a new taxOnCommissionInd
     *
     * When true, a tax is to be calculated by the BSP Processing Centre.
     *
     * @param bool $taxOnCommissionInd
     * @return self
     */
    public function setTaxOnCommissionInd($taxOnCommissionInd)
    {
        $this->taxOnCommissionInd = $taxOnCommissionInd;
        return $this;
    }

    /**
     * Gets as ticketingModeCode
     *
     * An indication of the method of ticket generation. Refer to OpenTravel Code List EMD Ticketing Mode Code-5387 (ETM).
     *
     * @return string
     */
    public function getTicketingModeCode()
    {
        return $this->ticketingModeCode;
    }

    /**
     * Sets a new ticketingModeCode
     *
     * An indication of the method of ticket generation. Refer to OpenTravel Code List EMD Ticketing Mode Code-5387 (ETM).
     *
     * @param string $ticketingModeCode
     * @return self
     */
    public function setTicketingModeCode($ticketingModeCode)
    {
        $this->ticketingModeCode = $ticketingModeCode;
        return $this;
    }

    /**
     * Gets as eMDType
     *
     * Type of EMD. EMD-S (standalone) or EMD-A (associated with flight segment and an eticket.)
     *
     * @return string
     */
    public function getEMDType()
    {
        return $this->eMDType;
    }

    /**
     * Sets a new eMDType
     *
     * Type of EMD. EMD-S (standalone) or EMD-A (associated with flight segment and an eticket.)
     *
     * @param string $eMDType
     * @return self
     */
    public function setEMDType($eMDType)
    {
        $this->eMDType = $eMDType;
        return $this;
    }

    /**
     * Gets as quoteInd
     *
     * When true, indicates that it is a quote type EMD or if false is an issued EMD.
     *
     * @return bool
     */
    public function getQuoteInd()
    {
        return $this->quoteInd;
    }

    /**
     * Sets a new quoteInd
     *
     * When true, indicates that it is a quote type EMD or if false is an issued EMD.
     *
     * @param bool $quoteInd
     * @return self
     */
    public function setQuoteInd($quoteInd)
    {
        $this->quoteInd = $quoteInd;
        return $this;
    }

    /**
     * Gets as operation
     *
     * Indicates the required modification to the element.
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Sets a new operation
     *
     * Indicates the required modification to the element.
     *
     * @param string $operation
     * @return self
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;
        return $this;
    }

    /**
     * Gets as rPH
     *
     * Provides a reference to a specific EMD.
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
     * Provides a reference to a specific EMD.
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
     * Gets as travelerRefNumber
     *
     * Direct reference of traveler assigned by requesting system. Used as a cross reference between data segments.
     *
     * @return \Recranet\OTA\EMDType\TravelerRefNumberAType
     */
    public function getTravelerRefNumber()
    {
        return $this->travelerRefNumber;
    }

    /**
     * Sets a new travelerRefNumber
     *
     * Direct reference of traveler assigned by requesting system. Used as a cross reference between data segments.
     *
     * @param \Recranet\OTA\EMDType\TravelerRefNumberAType $travelerRefNumber
     * @return self
     */
    public function setTravelerRefNumber(?\Recranet\OTA\EMDType\TravelerRefNumberAType $travelerRefNumber = null)
    {
        $this->travelerRefNumber = $travelerRefNumber;
        return $this;
    }

    /**
     * Adds as agentID
     *
     * The agent numeric code, booking agent id, issuing agent id and/or servicing airline/system provider ID.
     *
     * @return self
     * @param \Recranet\OTA\UniqueIDType $agentID
     */
    public function addToAgentID(\Recranet\OTA\UniqueIDType $agentID)
    {
        $this->agentID[] = $agentID;
        return $this;
    }

    /**
     * isset agentID
     *
     * The agent numeric code, booking agent id, issuing agent id and/or servicing airline/system provider ID.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAgentID($index)
    {
        return isset($this->agentID[$index]);
    }

    /**
     * unset agentID
     *
     * The agent numeric code, booking agent id, issuing agent id and/or servicing airline/system provider ID.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAgentID($index)
    {
        unset($this->agentID[$index]);
    }

    /**
     * Gets as agentID
     *
     * The agent numeric code, booking agent id, issuing agent id and/or servicing airline/system provider ID.
     *
     * @return \Recranet\OTA\UniqueIDType[]
     */
    public function getAgentID()
    {
        return $this->agentID;
    }

    /**
     * Sets a new agentID
     *
     * The agent numeric code, booking agent id, issuing agent id and/or servicing airline/system provider ID.
     *
     * @param \Recranet\OTA\UniqueIDType[] $agentID
     * @return self
     */
    public function setAgentID(array $agentID = null)
    {
        $this->agentID = $agentID;
        return $this;
    }

    /**
     * Adds as paymentDetail
     *
     * The payment information.
     *
     * @return self
     * @param \Recranet\OTA\PaymentDetailType $paymentDetail
     */
    public function addToPaymentDetail(\Recranet\OTA\PaymentDetailType $paymentDetail)
    {
        $this->paymentDetail[] = $paymentDetail;
        return $this;
    }

    /**
     * isset paymentDetail
     *
     * The payment information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentDetail($index)
    {
        return isset($this->paymentDetail[$index]);
    }

    /**
     * unset paymentDetail
     *
     * The payment information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentDetail($index)
    {
        unset($this->paymentDetail[$index]);
    }

    /**
     * Gets as paymentDetail
     *
     * The payment information.
     *
     * @return \Recranet\OTA\PaymentDetailType[]
     */
    public function getPaymentDetail()
    {
        return $this->paymentDetail;
    }

    /**
     * Sets a new paymentDetail
     *
     * The payment information.
     *
     * @param \Recranet\OTA\PaymentDetailType[] $paymentDetail
     * @return self
     */
    public function setPaymentDetail(array $paymentDetail = null)
    {
        $this->paymentDetail = $paymentDetail;
        return $this;
    }

    /**
     * Gets as originDestination
     *
     * The true origin and destination.
     *
     * @return \Recranet\OTA\EMDType\OriginDestinationAType
     */
    public function getOriginDestination()
    {
        return $this->originDestination;
    }

    /**
     * Sets a new originDestination
     *
     * The true origin and destination.
     *
     * @param \Recranet\OTA\EMDType\OriginDestinationAType $originDestination
     * @return self
     */
    public function setOriginDestination(?\Recranet\OTA\EMDType\OriginDestinationAType $originDestination = null)
    {
        $this->originDestination = $originDestination;
        return $this;
    }

    /**
     * Adds as custLoyalty
     *
     * Frequent flyer reference. ProgramID=airline code, MembershipID=FF number.
     *
     * @return self
     * @param \Recranet\OTA\EMDType\CustLoyaltyAType $custLoyalty
     */
    public function addToCustLoyalty(\Recranet\OTA\EMDType\CustLoyaltyAType $custLoyalty)
    {
        $this->custLoyalty[] = $custLoyalty;
        return $this;
    }

    /**
     * isset custLoyalty
     *
     * Frequent flyer reference. ProgramID=airline code, MembershipID=FF number.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCustLoyalty($index)
    {
        return isset($this->custLoyalty[$index]);
    }

    /**
     * unset custLoyalty
     *
     * Frequent flyer reference. ProgramID=airline code, MembershipID=FF number.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCustLoyalty($index)
    {
        unset($this->custLoyalty[$index]);
    }

    /**
     * Gets as custLoyalty
     *
     * Frequent flyer reference. ProgramID=airline code, MembershipID=FF number.
     *
     * @return \Recranet\OTA\EMDType\CustLoyaltyAType[]
     */
    public function getCustLoyalty()
    {
        return $this->custLoyalty;
    }

    /**
     * Sets a new custLoyalty
     *
     * Frequent flyer reference. ProgramID=airline code, MembershipID=FF number.
     *
     * @param \Recranet\OTA\EMDType\CustLoyaltyAType[] $custLoyalty
     * @return self
     */
    public function setCustLoyalty(array $custLoyalty = null)
    {
        $this->custLoyalty = $custLoyalty;
        return $this;
    }

    /**
     * Gets as endorsement
     *
     * Endorsement/ restriction remarks.
     *
     * @return \Recranet\OTA\EMDType\EndorsementAType
     */
    public function getEndorsement()
    {
        return $this->endorsement;
    }

    /**
     * Sets a new endorsement
     *
     * Endorsement/ restriction remarks.
     *
     * @param \Recranet\OTA\EMDType\EndorsementAType $endorsement
     * @return self
     */
    public function setEndorsement(?\Recranet\OTA\EMDType\EndorsementAType $endorsement = null)
    {
        $this->endorsement = $endorsement;
        return $this;
    }

    /**
     * Adds as addReferenceID
     *
     * ID contains the actual identifier (e.g. invoice, airline confirmation number, customer id or airline indexing field.)
     *
     * @return self
     * @param \Recranet\OTA\UniqueIDType $addReferenceID
     */
    public function addToAddReferenceID(\Recranet\OTA\UniqueIDType $addReferenceID)
    {
        $this->addReferenceID[] = $addReferenceID;
        return $this;
    }

    /**
     * isset addReferenceID
     *
     * ID contains the actual identifier (e.g. invoice, airline confirmation number, customer id or airline indexing field.)
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddReferenceID($index)
    {
        return isset($this->addReferenceID[$index]);
    }

    /**
     * unset addReferenceID
     *
     * ID contains the actual identifier (e.g. invoice, airline confirmation number, customer id or airline indexing field.)
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddReferenceID($index)
    {
        unset($this->addReferenceID[$index]);
    }

    /**
     * Gets as addReferenceID
     *
     * ID contains the actual identifier (e.g. invoice, airline confirmation number, customer id or airline indexing field.)
     *
     * @return \Recranet\OTA\UniqueIDType[]
     */
    public function getAddReferenceID()
    {
        return $this->addReferenceID;
    }

    /**
     * Sets a new addReferenceID
     *
     * ID contains the actual identifier (e.g. invoice, airline confirmation number, customer id or airline indexing field.)
     *
     * @param \Recranet\OTA\UniqueIDType[] $addReferenceID
     * @return self
     */
    public function setAddReferenceID(array $addReferenceID = null)
    {
        $this->addReferenceID = $addReferenceID;
        return $this;
    }

    /**
     * Adds as baseFare
     *
     * Used to specify the base fare, the base fare net and the base fare sell amounts.
     *
     * @return self
     * @param \Recranet\OTA\EMDType\BaseFareAType $baseFare
     */
    public function addToBaseFare(\Recranet\OTA\EMDType\BaseFareAType $baseFare)
    {
        $this->baseFare[] = $baseFare;
        return $this;
    }

    /**
     * isset baseFare
     *
     * Used to specify the base fare, the base fare net and the base fare sell amounts.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBaseFare($index)
    {
        return isset($this->baseFare[$index]);
    }

    /**
     * unset baseFare
     *
     * Used to specify the base fare, the base fare net and the base fare sell amounts.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBaseFare($index)
    {
        unset($this->baseFare[$index]);
    }

    /**
     * Gets as baseFare
     *
     * Used to specify the base fare, the base fare net and the base fare sell amounts.
     *
     * @return \Recranet\OTA\EMDType\BaseFareAType[]
     */
    public function getBaseFare()
    {
        return $this->baseFare;
    }

    /**
     * Sets a new baseFare
     *
     * Used to specify the base fare, the base fare net and the base fare sell amounts.
     *
     * @param \Recranet\OTA\EMDType\BaseFareAType[] $baseFare
     * @return self
     */
    public function setBaseFare(array $baseFare = null)
    {
        $this->baseFare = $baseFare;
        return $this;
    }

    /**
     * Adds as equivFare
     *
     * Used to specify the equivalent - equivalent net or equivalent sell paid fare.
     *
     * @return self
     * @param \Recranet\OTA\EMDType\EquivFareAType $equivFare
     */
    public function addToEquivFare(\Recranet\OTA\EMDType\EquivFareAType $equivFare)
    {
        $this->equivFare[] = $equivFare;
        return $this;
    }

    /**
     * isset equivFare
     *
     * Used to specify the equivalent - equivalent net or equivalent sell paid fare.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEquivFare($index)
    {
        return isset($this->equivFare[$index]);
    }

    /**
     * unset equivFare
     *
     * Used to specify the equivalent - equivalent net or equivalent sell paid fare.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEquivFare($index)
    {
        unset($this->equivFare[$index]);
    }

    /**
     * Gets as equivFare
     *
     * Used to specify the equivalent - equivalent net or equivalent sell paid fare.
     *
     * @return \Recranet\OTA\EMDType\EquivFareAType[]
     */
    public function getEquivFare()
    {
        return $this->equivFare;
    }

    /**
     * Sets a new equivFare
     *
     * Used to specify the equivalent - equivalent net or equivalent sell paid fare.
     *
     * @param \Recranet\OTA\EMDType\EquivFareAType[] $equivFare
     * @return self
     */
    public function setEquivFare(array $equivFare = null)
    {
        $this->equivFare = $equivFare;
        return $this;
    }

    /**
     * Adds as totalFare
     *
     * Used to specify the total, total net, total sell fare or refund amount.
     *
     * @return self
     * @param \Recranet\OTA\EMDType\TotalFareAType $totalFare
     */
    public function addToTotalFare(\Recranet\OTA\EMDType\TotalFareAType $totalFare)
    {
        $this->totalFare[] = $totalFare;
        return $this;
    }

    /**
     * isset totalFare
     *
     * Used to specify the total, total net, total sell fare or refund amount.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTotalFare($index)
    {
        return isset($this->totalFare[$index]);
    }

    /**
     * unset totalFare
     *
     * Used to specify the total, total net, total sell fare or refund amount.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTotalFare($index)
    {
        unset($this->totalFare[$index]);
    }

    /**
     * Gets as totalFare
     *
     * Used to specify the total, total net, total sell fare or refund amount.
     *
     * @return \Recranet\OTA\EMDType\TotalFareAType[]
     */
    public function getTotalFare()
    {
        return $this->totalFare;
    }

    /**
     * Sets a new totalFare
     *
     * Used to specify the total, total net, total sell fare or refund amount.
     *
     * @param \Recranet\OTA\EMDType\TotalFareAType[] $totalFare
     * @return self
     */
    public function setTotalFare(array $totalFare = null)
    {
        $this->totalFare = $totalFare;
        return $this;
    }

    /**
     * Adds as tax
     *
     * A collection of taxes.
     *
     * @return self
     * @param \Recranet\OTA\EMDType\TaxesAType\TaxAType $tax
     */
    public function addToTaxes(\Recranet\OTA\EMDType\TaxesAType\TaxAType $tax)
    {
        $this->taxes[] = $tax;
        return $this;
    }

    /**
     * isset taxes
     *
     * A collection of taxes.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxes($index)
    {
        return isset($this->taxes[$index]);
    }

    /**
     * unset taxes
     *
     * A collection of taxes.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxes($index)
    {
        unset($this->taxes[$index]);
    }

    /**
     * Gets as taxes
     *
     * A collection of taxes.
     *
     * @return \Recranet\OTA\EMDType\TaxesAType\TaxAType[]
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Sets a new taxes
     *
     * A collection of taxes.
     *
     * @param \Recranet\OTA\EMDType\TaxesAType\TaxAType[] $taxes
     * @return self
     */
    public function setTaxes(array $taxes = null)
    {
        $this->taxes = $taxes;
        return $this;
    }

    /**
     * Adds as unstructuredFareCalc
     *
     * Contains the fare calculation information for the stored passenger fare.
     *
     * @return self
     * @param \Recranet\OTA\EMDType\UnstructuredFareCalcAType $unstructuredFareCalc
     */
    public function addToUnstructuredFareCalc(\Recranet\OTA\EMDType\UnstructuredFareCalcAType $unstructuredFareCalc)
    {
        $this->unstructuredFareCalc[] = $unstructuredFareCalc;
        return $this;
    }

    /**
     * isset unstructuredFareCalc
     *
     * Contains the fare calculation information for the stored passenger fare.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUnstructuredFareCalc($index)
    {
        return isset($this->unstructuredFareCalc[$index]);
    }

    /**
     * unset unstructuredFareCalc
     *
     * Contains the fare calculation information for the stored passenger fare.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUnstructuredFareCalc($index)
    {
        unset($this->unstructuredFareCalc[$index]);
    }

    /**
     * Gets as unstructuredFareCalc
     *
     * Contains the fare calculation information for the stored passenger fare.
     *
     * @return \Recranet\OTA\EMDType\UnstructuredFareCalcAType[]
     */
    public function getUnstructuredFareCalc()
    {
        return $this->unstructuredFareCalc;
    }

    /**
     * Sets a new unstructuredFareCalc
     *
     * Contains the fare calculation information for the stored passenger fare.
     *
     * @param \Recranet\OTA\EMDType\UnstructuredFareCalcAType[] $unstructuredFareCalc
     * @return self
     */
    public function setUnstructuredFareCalc(array $unstructuredFareCalc = null)
    {
        $this->unstructuredFareCalc = $unstructuredFareCalc;
        return $this;
    }

    /**
     * Gets as fareInfo
     *
     * Nonendorsable and nonrefundable indicators, penalty restriction indicator, pricing system, tour code, ISO country code, around the world fare indicator and non-reissuable/non-exchangeable indicator.
     *
     * @return \Recranet\OTA\EMDType\FareInfoAType
     */
    public function getFareInfo()
    {
        return $this->fareInfo;
    }

    /**
     * Sets a new fareInfo
     *
     * Nonendorsable and nonrefundable indicators, penalty restriction indicator, pricing system, tour code, ISO country code, around the world fare indicator and non-reissuable/non-exchangeable indicator.
     *
     * @param \Recranet\OTA\EMDType\FareInfoAType $fareInfo
     * @return self
     */
    public function setFareInfo(?\Recranet\OTA\EMDType\FareInfoAType $fareInfo = null)
    {
        $this->fareInfo = $fareInfo;
        return $this;
    }

    /**
     * Adds as ticketDocument
     *
     * The EMD type, in connection number, fee owner and date of issue.
     *
     * @return self
     * @param \Recranet\OTA\EMDType\TicketDocumentAType $ticketDocument
     */
    public function addToTicketDocument(\Recranet\OTA\EMDType\TicketDocumentAType $ticketDocument)
    {
        $this->ticketDocument[] = $ticketDocument;
        return $this;
    }

    /**
     * isset ticketDocument
     *
     * The EMD type, in connection number, fee owner and date of issue.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTicketDocument($index)
    {
        return isset($this->ticketDocument[$index]);
    }

    /**
     * unset ticketDocument
     *
     * The EMD type, in connection number, fee owner and date of issue.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTicketDocument($index)
    {
        unset($this->ticketDocument[$index]);
    }

    /**
     * Gets as ticketDocument
     *
     * The EMD type, in connection number, fee owner and date of issue.
     *
     * @return \Recranet\OTA\EMDType\TicketDocumentAType[]
     */
    public function getTicketDocument()
    {
        return $this->ticketDocument;
    }

    /**
     * Sets a new ticketDocument
     *
     * The EMD type, in connection number, fee owner and date of issue.
     *
     * @param \Recranet\OTA\EMDType\TicketDocumentAType[] $ticketDocument
     * @return self
     */
    public function setTicketDocument(array $ticketDocument)
    {
        $this->ticketDocument = $ticketDocument;
        return $this;
    }

    /**
     * Gets as commission
     *
     * Commission information for this ticket/document.
     *
     * @return \Recranet\OTA\EMDType\CommissionAType
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Sets a new commission
     *
     * Commission information for this ticket/document.
     *
     * @param \Recranet\OTA\EMDType\CommissionAType $commission
     * @return self
     */
    public function setCommission(?\Recranet\OTA\EMDType\CommissionAType $commission = null)
    {
        $this->commission = $commission;
        return $this;
    }

    /**
     * Gets as fareComponent
     *
     * Price quote date, account code, input designator, component count and bank exchange rate.
     *
     * @return \Recranet\OTA\FareComponentType
     */
    public function getFareComponent()
    {
        return $this->fareComponent;
    }

    /**
     * Sets a new fareComponent
     *
     * Price quote date, account code, input designator, component count and bank exchange rate.
     *
     * @param \Recranet\OTA\FareComponentType $fareComponent
     * @return self
     */
    public function setFareComponent(?\Recranet\OTA\FareComponentType $fareComponent = null)
    {
        $this->fareComponent = $fareComponent;
        return $this;
    }

    /**
     * Gets as carrierFeeInfo
     *
     * Data for the collection of non-airport/ government fees.
     *
     * @return \Recranet\OTA\EMDType\CarrierFeeInfoAType
     */
    public function getCarrierFeeInfo()
    {
        return $this->carrierFeeInfo;
    }

    /**
     * Sets a new carrierFeeInfo
     *
     * Data for the collection of non-airport/ government fees.
     *
     * @param \Recranet\OTA\EMDType\CarrierFeeInfoAType $carrierFeeInfo
     * @return self
     */
    public function setCarrierFeeInfo(?\Recranet\OTA\EMDType\CarrierFeeInfoAType $carrierFeeInfo = null)
    {
        $this->carrierFeeInfo = $carrierFeeInfo;
        return $this;
    }

    /**
     * Adds as exchResidualFareComponent
     *
     * The exchanged residual fare component information.
     *
     * @return self
     * @param \Recranet\OTA\EMDType\ExchResidualFareComponentAType $exchResidualFareComponent
     */
    public function addToExchResidualFareComponent(\Recranet\OTA\EMDType\ExchResidualFareComponentAType $exchResidualFareComponent)
    {
        $this->exchResidualFareComponent[] = $exchResidualFareComponent;
        return $this;
    }

    /**
     * isset exchResidualFareComponent
     *
     * The exchanged residual fare component information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExchResidualFareComponent($index)
    {
        return isset($this->exchResidualFareComponent[$index]);
    }

    /**
     * unset exchResidualFareComponent
     *
     * The exchanged residual fare component information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExchResidualFareComponent($index)
    {
        unset($this->exchResidualFareComponent[$index]);
    }

    /**
     * Gets as exchResidualFareComponent
     *
     * The exchanged residual fare component information.
     *
     * @return \Recranet\OTA\EMDType\ExchResidualFareComponentAType[]
     */
    public function getExchResidualFareComponent()
    {
        return $this->exchResidualFareComponent;
    }

    /**
     * Sets a new exchResidualFareComponent
     *
     * The exchanged residual fare component information.
     *
     * @param \Recranet\OTA\EMDType\ExchResidualFareComponentAType[] $exchResidualFareComponent
     * @return self
     */
    public function setExchResidualFareComponent(array $exchResidualFareComponent = null)
    {
        $this->exchResidualFareComponent = $exchResidualFareComponent;
        return $this;
    }

    /**
     * Gets as originalIssueInfo
     *
     * The original ticket/document issue information.
     *
     * @return \Recranet\OTA\EMDType\OriginalIssueInfoAType
     */
    public function getOriginalIssueInfo()
    {
        return $this->originalIssueInfo;
    }

    /**
     * Sets a new originalIssueInfo
     *
     * The original ticket/document issue information.
     *
     * @param \Recranet\OTA\EMDType\OriginalIssueInfoAType $originalIssueInfo
     * @return self
     */
    public function setOriginalIssueInfo(?\Recranet\OTA\EMDType\OriginalIssueInfoAType $originalIssueInfo = null)
    {
        $this->originalIssueInfo = $originalIssueInfo;
        return $this;
    }

    /**
     * Adds as reissuedFlown
     *
     * The reissued flown flight coupon information.
     *
     * @return self
     * @param \Recranet\OTA\EMDType\ReissuedFlownAType $reissuedFlown
     */
    public function addToReissuedFlown(\Recranet\OTA\EMDType\ReissuedFlownAType $reissuedFlown)
    {
        $this->reissuedFlown[] = $reissuedFlown;
        return $this;
    }

    /**
     * isset reissuedFlown
     *
     * The reissued flown flight coupon information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReissuedFlown($index)
    {
        return isset($this->reissuedFlown[$index]);
    }

    /**
     * unset reissuedFlown
     *
     * The reissued flown flight coupon information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReissuedFlown($index)
    {
        unset($this->reissuedFlown[$index]);
    }

    /**
     * Gets as reissuedFlown
     *
     * The reissued flown flight coupon information.
     *
     * @return \Recranet\OTA\EMDType\ReissuedFlownAType[]
     */
    public function getReissuedFlown()
    {
        return $this->reissuedFlown;
    }

    /**
     * Sets a new reissuedFlown
     *
     * The reissued flown flight coupon information.
     *
     * @param \Recranet\OTA\EMDType\ReissuedFlownAType[] $reissuedFlown
     * @return self
     */
    public function setReissuedFlown(array $reissuedFlown = null)
    {
        $this->reissuedFlown = $reissuedFlown;
        return $this;
    }

    /**
     * Gets as responseComment
     *
     * A response message from the controlling carrier.
     *
     * @return \Recranet\OTA\FreeTextType
     */
    public function getResponseComment()
    {
        return $this->responseComment;
    }

    /**
     * Sets a new responseComment
     *
     * A response message from the controlling carrier.
     *
     * @param \Recranet\OTA\FreeTextType $responseComment
     * @return self
     */
    public function setResponseComment(?\Recranet\OTA\FreeTextType $responseComment = null)
    {
        $this->responseComment = $responseComment;
        return $this;
    }

    /**
     * Gets as presentInfo
     *
     * The present to and at information.
     *
     * @return \Recranet\OTA\EMDType\PresentInfoAType
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
     * @param \Recranet\OTA\EMDType\PresentInfoAType $presentInfo
     * @return self
     */
    public function setPresentInfo(?\Recranet\OTA\EMDType\PresentInfoAType $presentInfo = null)
    {
        $this->presentInfo = $presentInfo;
        return $this;
    }

    /**
     * Gets as reasonForIssuance
     *
     * The reason for issuance information.
     *
     * @return \Recranet\OTA\EMDType\ReasonForIssuanceAType
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
     * @param \Recranet\OTA\EMDType\ReasonForIssuanceAType $reasonForIssuance
     * @return self
     */
    public function setReasonForIssuance(?\Recranet\OTA\EMDType\ReasonForIssuanceAType $reasonForIssuance = null)
    {
        $this->reasonForIssuance = $reasonForIssuance;
        return $this;
    }

    /**
     * Gets as validatingAirline
     *
     * The validating airline for all EMD's for this passenger.
     *
     * @return \Recranet\OTA\EMDType\ValidatingAirlineAType
     */
    public function getValidatingAirline()
    {
        return $this->validatingAirline;
    }

    /**
     * Sets a new validatingAirline
     *
     * The validating airline for all EMD's for this passenger.
     *
     * @param \Recranet\OTA\EMDType\ValidatingAirlineAType $validatingAirline
     * @return self
     */
    public function setValidatingAirline(?\Recranet\OTA\EMDType\ValidatingAirlineAType $validatingAirline = null)
    {
        $this->validatingAirline = $validatingAirline;
        return $this;
    }

    /**
     * Gets as taxCouponInformation
     *
     * Used to specify tax coupon information.
     *
     * @return \Recranet\OTA\EMDType\TaxCouponInformationAType
     */
    public function getTaxCouponInformation()
    {
        return $this->taxCouponInformation;
    }

    /**
     * Sets a new taxCouponInformation
     *
     * Used to specify tax coupon information.
     *
     * @param \Recranet\OTA\EMDType\TaxCouponInformationAType $taxCouponInformation
     * @return self
     */
    public function setTaxCouponInformation(?\Recranet\OTA\EMDType\TaxCouponInformationAType $taxCouponInformation = null)
    {
        $this->taxCouponInformation = $taxCouponInformation;
        return $this;
    }
}

