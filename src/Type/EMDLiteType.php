<?php

namespace Recranet\OTA\Type;

/**
 * Class representing EMDLiteType
 *
 * A container for summarized electronic miscellaneous document information
 * XSD Type: EMD_LiteType
 */
class EMDLiteType
{
    /**
     * Total number of flight segments.
     *
     * @var int $totalFltSegQty
     */
    private $totalFltSegQty = null;

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
     * The agent numeric code, booking agent id, issuing agent id and/or servicing airline/system provider ID.
     *
     * @var \Recranet\OTA\Type\UniqueIDType[] $agentID
     */
    private $agentID = [
        
    ];

    /**
     * Endorsement/ restriction remarks.
     *
     * @var \Recranet\OTA\Type\EMDLiteType\EndorsementAType $endorsement
     */
    private $endorsement = null;

    /**
     * Used to specify the total, total net, total sell fare or refund amount.
     *
     * @var \Recranet\OTA\Type\EMDLiteType\TotalFareAType[] $totalFare
     */
    private $totalFare = [
        
    ];

    /**
     * A collection of taxes.
     *
     * @var \Recranet\OTA\Type\EMDLiteType\TaxesAType\TaxAType[] $taxes
     */
    private $taxes = null;

    /**
     * Nonendorsable and nonrefundable indicators, penalty restriction indicator, pricing system, tour code, ISO country code, around the world fare indicator and non-reissuable/non-exchangeable indicator.
     *
     * @var \Recranet\OTA\Type\EMDLiteType\FareInfoAType $fareInfo
     */
    private $fareInfo = null;

    /**
     * The EMD type, in connection number, fee owner and date of issue.
     *
     * @var \Recranet\OTA\Type\EMDLiteType\TicketDocumentAType[] $ticketDocument
     */
    private $ticketDocument = [
        
    ];

    /**
     * The original ticket/document issue information.
     *
     * @var \Recranet\OTA\Type\EMDLiteType\OriginalIssueInfoAType $originalIssueInfo
     */
    private $originalIssueInfo = null;

    /**
     * The reason for issuance information.
     *
     * @var \Recranet\OTA\Type\EMDLiteType\ReasonForIssuanceAType $reasonForIssuance
     */
    private $reasonForIssuance = null;

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
     * Adds as agentID
     *
     * The agent numeric code, booking agent id, issuing agent id and/or servicing airline/system provider ID.
     *
     * @return self
     * @param \Recranet\OTA\Type\UniqueIDType $agentID
     */
    public function addToAgentID(\Recranet\OTA\Type\UniqueIDType $agentID)
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
     * @return \Recranet\OTA\Type\UniqueIDType[]
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
     * @param \Recranet\OTA\Type\UniqueIDType[] $agentID
     * @return self
     */
    public function setAgentID(array $agentID = null)
    {
        $this->agentID = $agentID;
        return $this;
    }

    /**
     * Gets as endorsement
     *
     * Endorsement/ restriction remarks.
     *
     * @return \Recranet\OTA\Type\EMDLiteType\EndorsementAType
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
     * @param \Recranet\OTA\Type\EMDLiteType\EndorsementAType $endorsement
     * @return self
     */
    public function setEndorsement(?\Recranet\OTA\Type\EMDLiteType\EndorsementAType $endorsement = null)
    {
        $this->endorsement = $endorsement;
        return $this;
    }

    /**
     * Adds as totalFare
     *
     * Used to specify the total, total net, total sell fare or refund amount.
     *
     * @return self
     * @param \Recranet\OTA\Type\EMDLiteType\TotalFareAType $totalFare
     */
    public function addToTotalFare(\Recranet\OTA\Type\EMDLiteType\TotalFareAType $totalFare)
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
     * @return \Recranet\OTA\Type\EMDLiteType\TotalFareAType[]
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
     * @param \Recranet\OTA\Type\EMDLiteType\TotalFareAType[] $totalFare
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
     * @param \Recranet\OTA\Type\EMDLiteType\TaxesAType\TaxAType $tax
     */
    public function addToTaxes(\Recranet\OTA\Type\EMDLiteType\TaxesAType\TaxAType $tax)
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
     * @return \Recranet\OTA\Type\EMDLiteType\TaxesAType\TaxAType[]
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
     * @param \Recranet\OTA\Type\EMDLiteType\TaxesAType\TaxAType[] $taxes
     * @return self
     */
    public function setTaxes(array $taxes = null)
    {
        $this->taxes = $taxes;
        return $this;
    }

    /**
     * Gets as fareInfo
     *
     * Nonendorsable and nonrefundable indicators, penalty restriction indicator, pricing system, tour code, ISO country code, around the world fare indicator and non-reissuable/non-exchangeable indicator.
     *
     * @return \Recranet\OTA\Type\EMDLiteType\FareInfoAType
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
     * @param \Recranet\OTA\Type\EMDLiteType\FareInfoAType $fareInfo
     * @return self
     */
    public function setFareInfo(?\Recranet\OTA\Type\EMDLiteType\FareInfoAType $fareInfo = null)
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
     * @param \Recranet\OTA\Type\EMDLiteType\TicketDocumentAType $ticketDocument
     */
    public function addToTicketDocument(\Recranet\OTA\Type\EMDLiteType\TicketDocumentAType $ticketDocument)
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
     * @return \Recranet\OTA\Type\EMDLiteType\TicketDocumentAType[]
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
     * @param \Recranet\OTA\Type\EMDLiteType\TicketDocumentAType[] $ticketDocument
     * @return self
     */
    public function setTicketDocument(array $ticketDocument)
    {
        $this->ticketDocument = $ticketDocument;
        return $this;
    }

    /**
     * Gets as originalIssueInfo
     *
     * The original ticket/document issue information.
     *
     * @return \Recranet\OTA\Type\EMDLiteType\OriginalIssueInfoAType
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
     * @param \Recranet\OTA\Type\EMDLiteType\OriginalIssueInfoAType $originalIssueInfo
     * @return self
     */
    public function setOriginalIssueInfo(?\Recranet\OTA\Type\EMDLiteType\OriginalIssueInfoAType $originalIssueInfo = null)
    {
        $this->originalIssueInfo = $originalIssueInfo;
        return $this;
    }

    /**
     * Gets as reasonForIssuance
     *
     * The reason for issuance information.
     *
     * @return \Recranet\OTA\Type\EMDLiteType\ReasonForIssuanceAType
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
     * @param \Recranet\OTA\Type\EMDLiteType\ReasonForIssuanceAType $reasonForIssuance
     * @return self
     */
    public function setReasonForIssuance(?\Recranet\OTA\Type\EMDLiteType\ReasonForIssuanceAType $reasonForIssuance = null)
    {
        $this->reasonForIssuance = $reasonForIssuance;
        return $this;
    }
}

