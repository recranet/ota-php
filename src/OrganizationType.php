<?php

namespace Recranet\OTA;

/**
 * Class representing OrganizationType
 *
 * Membership organization that has travel benefits, programs, or discounts.
 * XSD Type: OrganizationType
 */
class OrganizationType
{
    /**
     * When true, indicates a default value should be used.
     *
     * @var bool $defaultInd
     */
    private $defaultInd = null;

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
     * Indicates main office, field office, or division of the organization.
     *
     * @var string $officeType
     */
    private $officeType = null;

    /**
     * Name of the member of the organization, as listed among the options of customer names.
     *
     * @var \Recranet\OTA\OrganizationType\OrgMemberNameAType $orgMemberName
     */
    private $orgMemberName = null;

    /**
     * Name of the organization.
     *
     * @var \Recranet\OTA\CompanyNameType $orgName
     */
    private $orgName = null;

    /**
     * An organization that is related to this organization.
     *
     * @var \Recranet\OTA\CompanyNameType[] $relatedOrgName
     */
    private $relatedOrgName = [
        
    ];

    /**
     * Information on the company responsible for arranging travel for the organization.
     *
     * @var \Recranet\OTA\TravelArrangerType[] $travelArranger
     */
    private $travelArranger = [
        
    ];

    /**
     * Gets as defaultInd
     *
     * When true, indicates a default value should be used.
     *
     * @return bool
     */
    public function getDefaultInd()
    {
        return $this->defaultInd;
    }

    /**
     * Sets a new defaultInd
     *
     * When true, indicates a default value should be used.
     *
     * @param bool $defaultInd
     * @return self
     */
    public function setDefaultInd($defaultInd)
    {
        $this->defaultInd = $defaultInd;
        return $this;
    }

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
     * Gets as officeType
     *
     * Indicates main office, field office, or division of the organization.
     *
     * @return string
     */
    public function getOfficeType()
    {
        return $this->officeType;
    }

    /**
     * Sets a new officeType
     *
     * Indicates main office, field office, or division of the organization.
     *
     * @param string $officeType
     * @return self
     */
    public function setOfficeType($officeType)
    {
        $this->officeType = $officeType;
        return $this;
    }

    /**
     * Gets as orgMemberName
     *
     * Name of the member of the organization, as listed among the options of customer names.
     *
     * @return \Recranet\OTA\OrganizationType\OrgMemberNameAType
     */
    public function getOrgMemberName()
    {
        return $this->orgMemberName;
    }

    /**
     * Sets a new orgMemberName
     *
     * Name of the member of the organization, as listed among the options of customer names.
     *
     * @param \Recranet\OTA\OrganizationType\OrgMemberNameAType $orgMemberName
     * @return self
     */
    public function setOrgMemberName(?\Recranet\OTA\OrganizationType\OrgMemberNameAType $orgMemberName = null)
    {
        $this->orgMemberName = $orgMemberName;
        return $this;
    }

    /**
     * Gets as orgName
     *
     * Name of the organization.
     *
     * @return \Recranet\OTA\CompanyNameType
     */
    public function getOrgName()
    {
        return $this->orgName;
    }

    /**
     * Sets a new orgName
     *
     * Name of the organization.
     *
     * @param \Recranet\OTA\CompanyNameType $orgName
     * @return self
     */
    public function setOrgName(?\Recranet\OTA\CompanyNameType $orgName = null)
    {
        $this->orgName = $orgName;
        return $this;
    }

    /**
     * Adds as relatedOrgName
     *
     * An organization that is related to this organization.
     *
     * @return self
     * @param \Recranet\OTA\CompanyNameType $relatedOrgName
     */
    public function addToRelatedOrgName(\Recranet\OTA\CompanyNameType $relatedOrgName)
    {
        $this->relatedOrgName[] = $relatedOrgName;
        return $this;
    }

    /**
     * isset relatedOrgName
     *
     * An organization that is related to this organization.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelatedOrgName($index)
    {
        return isset($this->relatedOrgName[$index]);
    }

    /**
     * unset relatedOrgName
     *
     * An organization that is related to this organization.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelatedOrgName($index)
    {
        unset($this->relatedOrgName[$index]);
    }

    /**
     * Gets as relatedOrgName
     *
     * An organization that is related to this organization.
     *
     * @return \Recranet\OTA\CompanyNameType[]
     */
    public function getRelatedOrgName()
    {
        return $this->relatedOrgName;
    }

    /**
     * Sets a new relatedOrgName
     *
     * An organization that is related to this organization.
     *
     * @param \Recranet\OTA\CompanyNameType[] $relatedOrgName
     * @return self
     */
    public function setRelatedOrgName(array $relatedOrgName = null)
    {
        $this->relatedOrgName = $relatedOrgName;
        return $this;
    }

    /**
     * Adds as travelArranger
     *
     * Information on the company responsible for arranging travel for the organization.
     *
     * @return self
     * @param \Recranet\OTA\TravelArrangerType $travelArranger
     */
    public function addToTravelArranger(\Recranet\OTA\TravelArrangerType $travelArranger)
    {
        $this->travelArranger[] = $travelArranger;
        return $this;
    }

    /**
     * isset travelArranger
     *
     * Information on the company responsible for arranging travel for the organization.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTravelArranger($index)
    {
        return isset($this->travelArranger[$index]);
    }

    /**
     * unset travelArranger
     *
     * Information on the company responsible for arranging travel for the organization.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTravelArranger($index)
    {
        unset($this->travelArranger[$index]);
    }

    /**
     * Gets as travelArranger
     *
     * Information on the company responsible for arranging travel for the organization.
     *
     * @return \Recranet\OTA\TravelArrangerType[]
     */
    public function getTravelArranger()
    {
        return $this->travelArranger;
    }

    /**
     * Sets a new travelArranger
     *
     * Information on the company responsible for arranging travel for the organization.
     *
     * @param \Recranet\OTA\TravelArrangerType[] $travelArranger
     * @return self
     */
    public function setTravelArranger(array $travelArranger = null)
    {
        $this->travelArranger = $travelArranger;
        return $this;
    }
}

