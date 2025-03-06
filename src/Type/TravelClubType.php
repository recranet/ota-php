<?php

namespace Recranet\OTA\Type;

/**
 * Class representing TravelClubType
 *
 * Identifies a travel club that offers special privileges and related services.
 * XSD Type: TravelClubType
 */
class TravelClubType
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
     * Indicates the starting date.
     *
     * @var \DateTime $effectiveDate
     */
    private $effectiveDate = null;

    /**
     * Indicates the ending date.
     *
     * @var \DateTime $expireDate
     */
    private $expireDate = null;

    /**
     * When true, indicates that the ExpireDate is the first day after the applicable period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @var bool $expireDateExclusiveInd
     */
    private $expireDateExclusiveInd = null;

    /**
     * Name of the travel club.
     *
     * @var \Recranet\OTA\Type\CompanyNameType $travelClubName
     */
    private $travelClubName = null;

    /**
     * Name information for the club member.
     *
     * @var \Recranet\OTA\Type\TravelClubType\ClubMemberNameAType $clubMemberName
     */
    private $clubMemberName = null;

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
     * Gets as effectiveDate
     *
     * Indicates the starting date.
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * Sets a new effectiveDate
     *
     * Indicates the starting date.
     *
     * @param \DateTime $effectiveDate
     * @return self
     */
    public function setEffectiveDate(\DateTime $effectiveDate)
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * Gets as expireDate
     *
     * Indicates the ending date.
     *
     * @return \DateTime
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Sets a new expireDate
     *
     * Indicates the ending date.
     *
     * @param \DateTime $expireDate
     * @return self
     */
    public function setExpireDate(\DateTime $expireDate)
    {
        $this->expireDate = $expireDate;
        return $this;
    }

    /**
     * Gets as expireDateExclusiveInd
     *
     * When true, indicates that the ExpireDate is the first day after the applicable period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @return bool
     */
    public function getExpireDateExclusiveInd()
    {
        return $this->expireDateExclusiveInd;
    }

    /**
     * Sets a new expireDateExclusiveInd
     *
     * When true, indicates that the ExpireDate is the first day after the applicable period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @param bool $expireDateExclusiveInd
     * @return self
     */
    public function setExpireDateExclusiveInd($expireDateExclusiveInd)
    {
        $this->expireDateExclusiveInd = $expireDateExclusiveInd;
        return $this;
    }

    /**
     * Gets as travelClubName
     *
     * Name of the travel club.
     *
     * @return \Recranet\OTA\Type\CompanyNameType
     */
    public function getTravelClubName()
    {
        return $this->travelClubName;
    }

    /**
     * Sets a new travelClubName
     *
     * Name of the travel club.
     *
     * @param \Recranet\OTA\Type\CompanyNameType $travelClubName
     * @return self
     */
    public function setTravelClubName(\Recranet\OTA\Type\CompanyNameType $travelClubName)
    {
        $this->travelClubName = $travelClubName;
        return $this;
    }

    /**
     * Gets as clubMemberName
     *
     * Name information for the club member.
     *
     * @return \Recranet\OTA\Type\TravelClubType\ClubMemberNameAType
     */
    public function getClubMemberName()
    {
        return $this->clubMemberName;
    }

    /**
     * Sets a new clubMemberName
     *
     * Name information for the club member.
     *
     * @param \Recranet\OTA\Type\TravelClubType\ClubMemberNameAType $clubMemberName
     * @return self
     */
    public function setClubMemberName(?\Recranet\OTA\Type\TravelClubType\ClubMemberNameAType $clubMemberName = null)
    {
        $this->clubMemberName = $clubMemberName;
        return $this;
    }
}

