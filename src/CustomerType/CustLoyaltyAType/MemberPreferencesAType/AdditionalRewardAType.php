<?php

namespace Recranet\OTA\CustomerType\CustLoyaltyAType\MemberPreferencesAType;

/**
 * Class representing AdditionalRewardAType
 */
class AdditionalRewardAType
{
    /**
     * @var string $memberID
     */
    private $memberID = null;

    /**
     * @var \Recranet\OTA\CompanyNameType $companyName
     */
    private $companyName = null;

    /**
     * @var \Recranet\OTA\PersonNameType $name
     */
    private $name = null;

    /**
     * Gets as memberID
     *
     * @return string
     */
    public function getMemberID()
    {
        return $this->memberID;
    }

    /**
     * Sets a new memberID
     *
     * @param string $memberID
     * @return self
     */
    public function setMemberID($memberID)
    {
        $this->memberID = $memberID;
        return $this;
    }

    /**
     * Gets as companyName
     *
     * @return \Recranet\OTA\CompanyNameType
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets a new companyName
     *
     * @param \Recranet\OTA\CompanyNameType $companyName
     * @return self
     */
    public function setCompanyName(?\Recranet\OTA\CompanyNameType $companyName = null)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return \Recranet\OTA\PersonNameType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param \Recranet\OTA\PersonNameType $name
     * @return self
     */
    public function setName(?\Recranet\OTA\PersonNameType $name = null)
    {
        $this->name = $name;
        return $this;
    }
}

