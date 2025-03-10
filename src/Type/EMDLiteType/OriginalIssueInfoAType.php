<?php

namespace Recranet\OTA\Type\EMDLiteType;

/**
 * Class representing OriginalIssueInfoAType
 */
class OriginalIssueInfoAType
{
    /**
     * Original ticket issue information.
     *
     * @var string $information
     */
    private $information = null;

    /**
     * The original ticket/document number.
     *
     * @var string $ticketDocumentNbr
     */
    private $ticketDocumentNbr = null;

    /**
     * ID of the original issuer of the ticket/document.
     *
     * @var string $issuingAgentID
     */
    private $issuingAgentID = null;

    /**
     * Date the ticket/document was originally issued.
     *
     * @var \DateTime $dateOfIssue
     */
    private $dateOfIssue = null;

    /**
     * Location of original issue.
     *
     * @var string $locationCode
     */
    private $locationCode = null;

    /**
     * Gets as information
     *
     * Original ticket issue information.
     *
     * @return string
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Sets a new information
     *
     * Original ticket issue information.
     *
     * @param string $information
     * @return self
     */
    public function setInformation($information)
    {
        $this->information = $information;
        return $this;
    }

    /**
     * Gets as ticketDocumentNbr
     *
     * The original ticket/document number.
     *
     * @return string
     */
    public function getTicketDocumentNbr()
    {
        return $this->ticketDocumentNbr;
    }

    /**
     * Sets a new ticketDocumentNbr
     *
     * The original ticket/document number.
     *
     * @param string $ticketDocumentNbr
     * @return self
     */
    public function setTicketDocumentNbr($ticketDocumentNbr)
    {
        $this->ticketDocumentNbr = $ticketDocumentNbr;
        return $this;
    }

    /**
     * Gets as issuingAgentID
     *
     * ID of the original issuer of the ticket/document.
     *
     * @return string
     */
    public function getIssuingAgentID()
    {
        return $this->issuingAgentID;
    }

    /**
     * Sets a new issuingAgentID
     *
     * ID of the original issuer of the ticket/document.
     *
     * @param string $issuingAgentID
     * @return self
     */
    public function setIssuingAgentID($issuingAgentID)
    {
        $this->issuingAgentID = $issuingAgentID;
        return $this;
    }

    /**
     * Gets as dateOfIssue
     *
     * Date the ticket/document was originally issued.
     *
     * @return \DateTime
     */
    public function getDateOfIssue()
    {
        return $this->dateOfIssue;
    }

    /**
     * Sets a new dateOfIssue
     *
     * Date the ticket/document was originally issued.
     *
     * @param \DateTime $dateOfIssue
     * @return self
     */
    public function setDateOfIssue(\DateTime $dateOfIssue)
    {
        $this->dateOfIssue = $dateOfIssue;
        return $this;
    }

    /**
     * Gets as locationCode
     *
     * Location of original issue.
     *
     * @return string
     */
    public function getLocationCode()
    {
        return $this->locationCode;
    }

    /**
     * Sets a new locationCode
     *
     * Location of original issue.
     *
     * @param string $locationCode
     * @return self
     */
    public function setLocationCode($locationCode)
    {
        $this->locationCode = $locationCode;
        return $this;
    }
}

