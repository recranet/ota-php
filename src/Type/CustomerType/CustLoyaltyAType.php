<?php

namespace Recranet\OTA\Type\CustomerType;

/**
 * Class representing CustLoyaltyAType
 */
class CustLoyaltyAType
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
     * Identifier to indicate the company owner of the loyalty program.
     *
     * @var string $programID
     */
    private $programID = null;

    /**
     * Unique identifier of the member in the program (membership number, account number, etc.).
     *
     * @var string $membershipID
     */
    private $membershipID = null;

    /**
     * Identifies the travel sector. Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @var string $travelSector
     */
    private $travelSector = null;

    /**
     * Indicate the partner(s)/vendor(s) for which the customer loyalty number is valid.
     *
     * @var string[] $vendorCode
     */
    private $vendorCode = null;

    /**
     * When true, indicates this is the primary customer loyalty program and when false, indicates this is not the primary customer loyalty program.
     *
     * @var bool $primaryLoyaltyIndicator
     */
    private $primaryLoyaltyIndicator = null;

    /**
     * Name of the alliance loyalty level (e.g.,OneWorld uses Emerald, Ruby, etc and SkyTeam uses Elite, etc.)
     *
     * @var string $allianceLoyaltyLevelName
     */
    private $allianceLoyaltyLevelName = null;

    /**
     * Original assessment of the customer by the travel agent.
     *
     * @var string $customerType
     */
    private $customerType = null;

    /**
     * The supplier's ranking of the customer (e.g., VIP, numerical ranking).
     *
     * @var string $customerValue
     */
    private $customerValue = null;

    /**
     * The password for the member in the program.
     *
     * @var string $password
     */
    private $password = null;

    /**
     * Indicates special privileges in program assigned to individual.
     *
     * @var string $loyalLevel
     */
    private $loyalLevel = null;

    /**
     * Provides a numeric code assigned to a particular loyalty level.
     *
     * @var int $loyalLevelCode
     */
    private $loyalLevelCode = null;

    /**
     * Indicates if program is affiliated with a group of related offers accumulating credits.
     *
     * @var string $singleVendorInd
     */
    private $singleVendorInd = null;

    /**
     * Indicates when the member signed up for the loyalty program.
     *
     * @var \DateTime $signupDate
     */
    private $signupDate = null;

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
     * @var bool $expireDateExclusiveIndicator
     */
    private $expireDateExclusiveIndicator = null;

    /**
     * A reference placeholder for this loyalty membership.
     *
     * @var string $rPH
     */
    private $rPH = null;

    /**
     * A remark associated with the customer's loyalty program.
     *
     * @var string $remark
     */
    private $remark = null;

    /**
     * Loyalty program preferences specified by the enrolling member.
     *
     * @var \Recranet\OTA\Type\CustomerType\CustLoyaltyAType\MemberPreferencesAType $memberPreferences
     */
    private $memberPreferences = null;

    /**
     * Information allowing member to securely access account.
     *
     * @var \Recranet\OTA\Type\CustomerType\CustLoyaltyAType\SecurityInfoAType $securityInfo
     */
    private $securityInfo = null;

    /**
     * Used to specify a sub-account and its point balance associated with this loyalty account.
     *
     * @var \Recranet\OTA\Type\CustomerType\CustLoyaltyAType\SubAccountBalanceAType[] $subAccountBalance
     */
    private $subAccountBalance = [
        
    ];

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
     * Gets as programID
     *
     * Identifier to indicate the company owner of the loyalty program.
     *
     * @return string
     */
    public function getProgramID()
    {
        return $this->programID;
    }

    /**
     * Sets a new programID
     *
     * Identifier to indicate the company owner of the loyalty program.
     *
     * @param string $programID
     * @return self
     */
    public function setProgramID($programID)
    {
        $this->programID = $programID;
        return $this;
    }

    /**
     * Gets as membershipID
     *
     * Unique identifier of the member in the program (membership number, account number, etc.).
     *
     * @return string
     */
    public function getMembershipID()
    {
        return $this->membershipID;
    }

    /**
     * Sets a new membershipID
     *
     * Unique identifier of the member in the program (membership number, account number, etc.).
     *
     * @param string $membershipID
     * @return self
     */
    public function setMembershipID($membershipID)
    {
        $this->membershipID = $membershipID;
        return $this;
    }

    /**
     * Gets as travelSector
     *
     * Identifies the travel sector. Refer to OpenTravel Code List Travel Sector (TVS).
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
     * Identifies the travel sector. Refer to OpenTravel Code List Travel Sector (TVS).
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
     * Adds as vendorCode
     *
     * Indicate the partner(s)/vendor(s) for which the customer loyalty number is valid.
     *
     * @return self
     * @param string $vendorCode
     */
    public function addToVendorCode($vendorCode)
    {
        $this->vendorCode[] = $vendorCode;
        return $this;
    }

    /**
     * isset vendorCode
     *
     * Indicate the partner(s)/vendor(s) for which the customer loyalty number is valid.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVendorCode($index)
    {
        return isset($this->vendorCode[$index]);
    }

    /**
     * unset vendorCode
     *
     * Indicate the partner(s)/vendor(s) for which the customer loyalty number is valid.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVendorCode($index)
    {
        unset($this->vendorCode[$index]);
    }

    /**
     * Gets as vendorCode
     *
     * Indicate the partner(s)/vendor(s) for which the customer loyalty number is valid.
     *
     * @return string[]
     */
    public function getVendorCode()
    {
        return $this->vendorCode;
    }

    /**
     * Sets a new vendorCode
     *
     * Indicate the partner(s)/vendor(s) for which the customer loyalty number is valid.
     *
     * @param string $vendorCode
     * @return self
     */
    public function setVendorCode(array $vendorCode)
    {
        $this->vendorCode = $vendorCode;
        return $this;
    }

    /**
     * Gets as primaryLoyaltyIndicator
     *
     * When true, indicates this is the primary customer loyalty program and when false, indicates this is not the primary customer loyalty program.
     *
     * @return bool
     */
    public function getPrimaryLoyaltyIndicator()
    {
        return $this->primaryLoyaltyIndicator;
    }

    /**
     * Sets a new primaryLoyaltyIndicator
     *
     * When true, indicates this is the primary customer loyalty program and when false, indicates this is not the primary customer loyalty program.
     *
     * @param bool $primaryLoyaltyIndicator
     * @return self
     */
    public function setPrimaryLoyaltyIndicator($primaryLoyaltyIndicator)
    {
        $this->primaryLoyaltyIndicator = $primaryLoyaltyIndicator;
        return $this;
    }

    /**
     * Gets as allianceLoyaltyLevelName
     *
     * Name of the alliance loyalty level (e.g.,OneWorld uses Emerald, Ruby, etc and SkyTeam uses Elite, etc.)
     *
     * @return string
     */
    public function getAllianceLoyaltyLevelName()
    {
        return $this->allianceLoyaltyLevelName;
    }

    /**
     * Sets a new allianceLoyaltyLevelName
     *
     * Name of the alliance loyalty level (e.g.,OneWorld uses Emerald, Ruby, etc and SkyTeam uses Elite, etc.)
     *
     * @param string $allianceLoyaltyLevelName
     * @return self
     */
    public function setAllianceLoyaltyLevelName($allianceLoyaltyLevelName)
    {
        $this->allianceLoyaltyLevelName = $allianceLoyaltyLevelName;
        return $this;
    }

    /**
     * Gets as customerType
     *
     * Original assessment of the customer by the travel agent.
     *
     * @return string
     */
    public function getCustomerType()
    {
        return $this->customerType;
    }

    /**
     * Sets a new customerType
     *
     * Original assessment of the customer by the travel agent.
     *
     * @param string $customerType
     * @return self
     */
    public function setCustomerType($customerType)
    {
        $this->customerType = $customerType;
        return $this;
    }

    /**
     * Gets as customerValue
     *
     * The supplier's ranking of the customer (e.g., VIP, numerical ranking).
     *
     * @return string
     */
    public function getCustomerValue()
    {
        return $this->customerValue;
    }

    /**
     * Sets a new customerValue
     *
     * The supplier's ranking of the customer (e.g., VIP, numerical ranking).
     *
     * @param string $customerValue
     * @return self
     */
    public function setCustomerValue($customerValue)
    {
        $this->customerValue = $customerValue;
        return $this;
    }

    /**
     * Gets as password
     *
     * The password for the member in the program.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets a new password
     *
     * The password for the member in the program.
     *
     * @param string $password
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Gets as loyalLevel
     *
     * Indicates special privileges in program assigned to individual.
     *
     * @return string
     */
    public function getLoyalLevel()
    {
        return $this->loyalLevel;
    }

    /**
     * Sets a new loyalLevel
     *
     * Indicates special privileges in program assigned to individual.
     *
     * @param string $loyalLevel
     * @return self
     */
    public function setLoyalLevel($loyalLevel)
    {
        $this->loyalLevel = $loyalLevel;
        return $this;
    }

    /**
     * Gets as loyalLevelCode
     *
     * Provides a numeric code assigned to a particular loyalty level.
     *
     * @return int
     */
    public function getLoyalLevelCode()
    {
        return $this->loyalLevelCode;
    }

    /**
     * Sets a new loyalLevelCode
     *
     * Provides a numeric code assigned to a particular loyalty level.
     *
     * @param int $loyalLevelCode
     * @return self
     */
    public function setLoyalLevelCode($loyalLevelCode)
    {
        $this->loyalLevelCode = $loyalLevelCode;
        return $this;
    }

    /**
     * Gets as singleVendorInd
     *
     * Indicates if program is affiliated with a group of related offers accumulating credits.
     *
     * @return string
     */
    public function getSingleVendorInd()
    {
        return $this->singleVendorInd;
    }

    /**
     * Sets a new singleVendorInd
     *
     * Indicates if program is affiliated with a group of related offers accumulating credits.
     *
     * @param string $singleVendorInd
     * @return self
     */
    public function setSingleVendorInd($singleVendorInd)
    {
        $this->singleVendorInd = $singleVendorInd;
        return $this;
    }

    /**
     * Gets as signupDate
     *
     * Indicates when the member signed up for the loyalty program.
     *
     * @return \DateTime
     */
    public function getSignupDate()
    {
        return $this->signupDate;
    }

    /**
     * Sets a new signupDate
     *
     * Indicates when the member signed up for the loyalty program.
     *
     * @param \DateTime $signupDate
     * @return self
     */
    public function setSignupDate(\DateTime $signupDate)
    {
        $this->signupDate = $signupDate;
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
     * Gets as expireDateExclusiveIndicator
     *
     * When true, indicates that the ExpireDate is the first day after the applicable period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @return bool
     */
    public function getExpireDateExclusiveIndicator()
    {
        return $this->expireDateExclusiveIndicator;
    }

    /**
     * Sets a new expireDateExclusiveIndicator
     *
     * When true, indicates that the ExpireDate is the first day after the applicable period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @param bool $expireDateExclusiveIndicator
     * @return self
     */
    public function setExpireDateExclusiveIndicator($expireDateExclusiveIndicator)
    {
        $this->expireDateExclusiveIndicator = $expireDateExclusiveIndicator;
        return $this;
    }

    /**
     * Gets as rPH
     *
     * A reference placeholder for this loyalty membership.
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
     * A reference placeholder for this loyalty membership.
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
     * Gets as remark
     *
     * A remark associated with the customer's loyalty program.
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets a new remark
     *
     * A remark associated with the customer's loyalty program.
     *
     * @param string $remark
     * @return self
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
        return $this;
    }

    /**
     * Gets as memberPreferences
     *
     * Loyalty program preferences specified by the enrolling member.
     *
     * @return \Recranet\OTA\Type\CustomerType\CustLoyaltyAType\MemberPreferencesAType
     */
    public function getMemberPreferences()
    {
        return $this->memberPreferences;
    }

    /**
     * Sets a new memberPreferences
     *
     * Loyalty program preferences specified by the enrolling member.
     *
     * @param \Recranet\OTA\Type\CustomerType\CustLoyaltyAType\MemberPreferencesAType $memberPreferences
     * @return self
     */
    public function setMemberPreferences(?\Recranet\OTA\Type\CustomerType\CustLoyaltyAType\MemberPreferencesAType $memberPreferences = null)
    {
        $this->memberPreferences = $memberPreferences;
        return $this;
    }

    /**
     * Gets as securityInfo
     *
     * Information allowing member to securely access account.
     *
     * @return \Recranet\OTA\Type\CustomerType\CustLoyaltyAType\SecurityInfoAType
     */
    public function getSecurityInfo()
    {
        return $this->securityInfo;
    }

    /**
     * Sets a new securityInfo
     *
     * Information allowing member to securely access account.
     *
     * @param \Recranet\OTA\Type\CustomerType\CustLoyaltyAType\SecurityInfoAType $securityInfo
     * @return self
     */
    public function setSecurityInfo(?\Recranet\OTA\Type\CustomerType\CustLoyaltyAType\SecurityInfoAType $securityInfo = null)
    {
        $this->securityInfo = $securityInfo;
        return $this;
    }

    /**
     * Adds as subAccountBalance
     *
     * Used to specify a sub-account and its point balance associated with this loyalty account.
     *
     * @return self
     * @param \Recranet\OTA\Type\CustomerType\CustLoyaltyAType\SubAccountBalanceAType $subAccountBalance
     */
    public function addToSubAccountBalance(\Recranet\OTA\Type\CustomerType\CustLoyaltyAType\SubAccountBalanceAType $subAccountBalance)
    {
        $this->subAccountBalance[] = $subAccountBalance;
        return $this;
    }

    /**
     * isset subAccountBalance
     *
     * Used to specify a sub-account and its point balance associated with this loyalty account.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubAccountBalance($index)
    {
        return isset($this->subAccountBalance[$index]);
    }

    /**
     * unset subAccountBalance
     *
     * Used to specify a sub-account and its point balance associated with this loyalty account.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubAccountBalance($index)
    {
        unset($this->subAccountBalance[$index]);
    }

    /**
     * Gets as subAccountBalance
     *
     * Used to specify a sub-account and its point balance associated with this loyalty account.
     *
     * @return \Recranet\OTA\Type\CustomerType\CustLoyaltyAType\SubAccountBalanceAType[]
     */
    public function getSubAccountBalance()
    {
        return $this->subAccountBalance;
    }

    /**
     * Sets a new subAccountBalance
     *
     * Used to specify a sub-account and its point balance associated with this loyalty account.
     *
     * @param \Recranet\OTA\Type\CustomerType\CustLoyaltyAType\SubAccountBalanceAType[] $subAccountBalance
     * @return self
     */
    public function setSubAccountBalance(array $subAccountBalance = null)
    {
        $this->subAccountBalance = $subAccountBalance;
        return $this;
    }
}

