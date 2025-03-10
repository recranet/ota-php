<?php

namespace Recranet\OTA\Type\EMDLiteType;

/**
 * Class representing TicketDocumentAType
 */
class TicketDocumentAType
{
    /**
     * Document number comprised of the airline code, form code, and serial number.
     *
     * @var string $ticketDocumentNbr
     */
    private $ticketDocumentNbr = null;

    /**
     * Used to indicate a ticket or EMD.
     *
     * @var string $type
     */
    private $type = null;

    /**
     * When true, this is the primary ticket/document number.
     *
     * @var bool $primaryDocInd
     */
    private $primaryDocInd = null;

    /**
     * The ticket/document number of another ticket to which this ticket is connected.
     *
     * @var string $inConnectionDocNbr
     */
    private $inConnectionDocNbr = null;

    /**
     * The date a document was issued.
     *
     * @var \DateTime $dateOfIssue
     */
    private $dateOfIssue = null;

    /**
     * Used to provide the company common name.
     *
     * @var string $companyShortName
     */
    private $companyShortName = null;

    /**
     * The travel sector the company is associated with, such as air, car and hotel. Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @var string $travelSector
     */
    private $travelSector = null;

    /**
     * Identifies a company by the company code.
     *
     * @var string $code
     */
    private $code = null;

    /**
     * Identifies the context of the identifying code, such as DUNS, IATA or internal code, etc.
     *
     * @var string $codeContext
     */
    private $codeContext = null;

    /**
     * The country location of the company headquarters.
     * Example: us
     *
     * @var string $countryCode
     */
    private $countryCode = null;

    /**
     * Number, status, in connection nbr, itinerary sequence nbr, coupon ref, not valid before/after, involuntary indicator, and in connection qualfier.
     *
     * @var \Recranet\OTA\Type\EMDLiteType\TicketDocumentAType\CouponInfoAType[] $couponInfo
     */
    private $couponInfo = [
        
    ];

    /**
     * Gets as ticketDocumentNbr
     *
     * Document number comprised of the airline code, form code, and serial number.
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
     * Document number comprised of the airline code, form code, and serial number.
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
     * Gets as type
     *
     * Used to indicate a ticket or EMD.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Used to indicate a ticket or EMD.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as primaryDocInd
     *
     * When true, this is the primary ticket/document number.
     *
     * @return bool
     */
    public function getPrimaryDocInd()
    {
        return $this->primaryDocInd;
    }

    /**
     * Sets a new primaryDocInd
     *
     * When true, this is the primary ticket/document number.
     *
     * @param bool $primaryDocInd
     * @return self
     */
    public function setPrimaryDocInd($primaryDocInd)
    {
        $this->primaryDocInd = $primaryDocInd;
        return $this;
    }

    /**
     * Gets as inConnectionDocNbr
     *
     * The ticket/document number of another ticket to which this ticket is connected.
     *
     * @return string
     */
    public function getInConnectionDocNbr()
    {
        return $this->inConnectionDocNbr;
    }

    /**
     * Sets a new inConnectionDocNbr
     *
     * The ticket/document number of another ticket to which this ticket is connected.
     *
     * @param string $inConnectionDocNbr
     * @return self
     */
    public function setInConnectionDocNbr($inConnectionDocNbr)
    {
        $this->inConnectionDocNbr = $inConnectionDocNbr;
        return $this;
    }

    /**
     * Gets as dateOfIssue
     *
     * The date a document was issued.
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
     * The date a document was issued.
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
     * Gets as companyShortName
     *
     * Used to provide the company common name.
     *
     * @return string
     */
    public function getCompanyShortName()
    {
        return $this->companyShortName;
    }

    /**
     * Sets a new companyShortName
     *
     * Used to provide the company common name.
     *
     * @param string $companyShortName
     * @return self
     */
    public function setCompanyShortName($companyShortName)
    {
        $this->companyShortName = $companyShortName;
        return $this;
    }

    /**
     * Gets as travelSector
     *
     * The travel sector the company is associated with, such as air, car and hotel. Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @return string
     */
    public function getTravelSector()
    {
        return $this->travelSector;
    }

    /**
     * Sets a new travelSector
     *
     * The travel sector the company is associated with, such as air, car and hotel. Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @param string $travelSector
     * @return self
     */
    public function setTravelSector($travelSector)
    {
        $this->travelSector = $travelSector;
        return $this;
    }

    /**
     * Gets as code
     *
     * Identifies a company by the company code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Identifies a company by the company code.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as codeContext
     *
     * Identifies the context of the identifying code, such as DUNS, IATA or internal code, etc.
     *
     * @return string
     */
    public function getCodeContext()
    {
        return $this->codeContext;
    }

    /**
     * Sets a new codeContext
     *
     * Identifies the context of the identifying code, such as DUNS, IATA or internal code, etc.
     *
     * @param string $codeContext
     * @return self
     */
    public function setCodeContext($codeContext)
    {
        $this->codeContext = $codeContext;
        return $this;
    }

    /**
     * Gets as countryCode
     *
     * The country location of the company headquarters.
     * Example: us
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Sets a new countryCode
     *
     * The country location of the company headquarters.
     * Example: us
     *
     * @param string $countryCode
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * Adds as couponInfo
     *
     * Number, status, in connection nbr, itinerary sequence nbr, coupon ref, not valid before/after, involuntary indicator, and in connection qualfier.
     *
     * @return self
     * @param \Recranet\OTA\Type\EMDLiteType\TicketDocumentAType\CouponInfoAType $couponInfo
     */
    public function addToCouponInfo(\Recranet\OTA\Type\EMDLiteType\TicketDocumentAType\CouponInfoAType $couponInfo)
    {
        $this->couponInfo[] = $couponInfo;
        return $this;
    }

    /**
     * isset couponInfo
     *
     * Number, status, in connection nbr, itinerary sequence nbr, coupon ref, not valid before/after, involuntary indicator, and in connection qualfier.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCouponInfo($index)
    {
        return isset($this->couponInfo[$index]);
    }

    /**
     * unset couponInfo
     *
     * Number, status, in connection nbr, itinerary sequence nbr, coupon ref, not valid before/after, involuntary indicator, and in connection qualfier.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCouponInfo($index)
    {
        unset($this->couponInfo[$index]);
    }

    /**
     * Gets as couponInfo
     *
     * Number, status, in connection nbr, itinerary sequence nbr, coupon ref, not valid before/after, involuntary indicator, and in connection qualfier.
     *
     * @return \Recranet\OTA\Type\EMDLiteType\TicketDocumentAType\CouponInfoAType[]
     */
    public function getCouponInfo()
    {
        return $this->couponInfo;
    }

    /**
     * Sets a new couponInfo
     *
     * Number, status, in connection nbr, itinerary sequence nbr, coupon ref, not valid before/after, involuntary indicator, and in connection qualfier.
     *
     * @param \Recranet\OTA\Type\EMDLiteType\TicketDocumentAType\CouponInfoAType[] $couponInfo
     * @return self
     */
    public function setCouponInfo(array $couponInfo)
    {
        $this->couponInfo = $couponInfo;
        return $this;
    }
}

