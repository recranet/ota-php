<?php

namespace Recranet\OTA\Type;

/**
 * Class representing ProfileType
 *
 * Root element for profile content.
 * XSD Type: ProfileType
 */
class ProfileType
{
    /**
     * Permission for sharing all data in profile for synchronization of profiles held by other travel service providers.
     *
     *  No
     *
     * @var string $shareAllSynchInd
     */
    private $shareAllSynchInd = null;

    /**
     * Permission for sharing all data in profile for marketing purposes. A yes value indicates that the customer has chosen to opt-in to marketing communication. This is used in combination with the ShareAllOptOutInd and only one of these attributes should have a value of yes.
     *
     * @var string $shareAllMarketInd
     */
    private $shareAllMarketInd = null;

    /**
     * When yes, a customer has explicitly opted out of marketing communication. This is used in combination with the ShareAllMarketInd and only one of these attributes should have a value of yes.
     *
     * @var string $shareAllOptOutInd
     */
    private $shareAllOptOutInd = null;

    /**
     * Status of the opt in.
     * Example: OptedIn
     *
     * @var string $optInStatus
     */
    private $optInStatus = null;

    /**
     * Date and time of opt in.
     * Example: 2012-01-14T09:57:59
     *
     * @var \DateTime $optInDate
     */
    private $optInDate = null;

    /**
     * Date and time of opt out.
     * Example: 2012-01-14T09:57:59
     *
     * @var \DateTime $optOutDate
     */
    private $optOutDate = null;

    /**
     * Code to specify a profile such as Customer, Tour Operator, Corporation, etc. Refer to OpenTravel Code List Profile Type (PRT).
     *
     * @var string $profileType
     */
    private $profileType = null;

    /**
     * Time stamp of the creation.
     *
     * @var \DateTime $createDateTime
     */
    private $createDateTime = null;

    /**
     * ID of creator. The creator could be a software system identifier or an identifier of an employee resposible for the creation.
     *
     * @var string $creatorID
     */
    private $creatorID = null;

    /**
     * Time stamp of last modification.
     *
     * @var \DateTime $lastModifyDateTime
     */
    private $lastModifyDateTime = null;

    /**
     * Identifies the last software system or person to modify a record.
     *
     * @var string $lastModifierID
     */
    private $lastModifierID = null;

    /**
     * Date an item will be purged from a database (e.g., from a live database to an archive).
     *
     * @var \DateTime $purgeDate
     */
    private $purgeDate = null;

    /**
     * This is a reference placeholder, used as an index for this guest in this reservation.
     *
     * @var string $rPH
     */
    private $rPH = null;

    /**
     * Status of the profile. Refer to OpenTravel Code List Profile Status Code (PST).
     *
     * @var string[] $statusCode
     */
    private $statusCode = null;

    /**
     * A collection of actions taken on a record.
     *
     * @var \Recranet\OTA\Type\AccessesType $accesses
     */
    private $accesses = null;

    /**
     * Detailed customer information for this profile.
     *
     * @var \Recranet\OTA\Type\CustomerType $customer
     */
    private $customer = null;

    /**
     * The user ids and pin numbers of the profile.
     *
     * @var \Recranet\OTA\Type\ProfileType\UserIDAType[] $userID
     */
    private $userID = [
        
    ];

    /**
     * A collection of preference collections.
     *
     * @var \Recranet\OTA\Type\PreferencesType $prefCollections
     */
    private $prefCollections = null;

    /**
     * Company information related to the profile.
     *
     * @var \Recranet\OTA\Type\CompanyInfoType $companyInfo
     */
    private $companyInfo = null;

    /**
     * Affiliation information related to the profile.
     *
     * @var \Recranet\OTA\Type\AffiliationsType $affiliations
     */
    private $affiliations = null;

    /**
     * Agreement information related to the profile.
     *
     * @var \Recranet\OTA\Type\AgreementsType $agreements
     */
    private $agreements = null;

    /**
     * Comments related to the profile.
     *
     * @var \Recranet\OTA\Type\ProfileType\CommentsAType\CommentAType[] $comments
     */
    private $comments = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as shareAllSynchInd
     *
     * Permission for sharing all data in profile for synchronization of profiles held by other travel service providers.
     *
     *  No
     *
     * @return string
     */
    public function getShareAllSynchInd()
    {
        return $this->shareAllSynchInd;
    }

    /**
     * Sets a new shareAllSynchInd
     *
     * Permission for sharing all data in profile for synchronization of profiles held by other travel service providers.
     *
     *  No
     *
     * @param string $shareAllSynchInd
     * @return self
     */
    public function setShareAllSynchInd($shareAllSynchInd)
    {
        $this->shareAllSynchInd = $shareAllSynchInd;
        return $this;
    }

    /**
     * Gets as shareAllMarketInd
     *
     * Permission for sharing all data in profile for marketing purposes. A yes value indicates that the customer has chosen to opt-in to marketing communication. This is used in combination with the ShareAllOptOutInd and only one of these attributes should have a value of yes.
     *
     * @return string
     */
    public function getShareAllMarketInd()
    {
        return $this->shareAllMarketInd;
    }

    /**
     * Sets a new shareAllMarketInd
     *
     * Permission for sharing all data in profile for marketing purposes. A yes value indicates that the customer has chosen to opt-in to marketing communication. This is used in combination with the ShareAllOptOutInd and only one of these attributes should have a value of yes.
     *
     * @param string $shareAllMarketInd
     * @return self
     */
    public function setShareAllMarketInd($shareAllMarketInd)
    {
        $this->shareAllMarketInd = $shareAllMarketInd;
        return $this;
    }

    /**
     * Gets as shareAllOptOutInd
     *
     * When yes, a customer has explicitly opted out of marketing communication. This is used in combination with the ShareAllMarketInd and only one of these attributes should have a value of yes.
     *
     * @return string
     */
    public function getShareAllOptOutInd()
    {
        return $this->shareAllOptOutInd;
    }

    /**
     * Sets a new shareAllOptOutInd
     *
     * When yes, a customer has explicitly opted out of marketing communication. This is used in combination with the ShareAllMarketInd and only one of these attributes should have a value of yes.
     *
     * @param string $shareAllOptOutInd
     * @return self
     */
    public function setShareAllOptOutInd($shareAllOptOutInd)
    {
        $this->shareAllOptOutInd = $shareAllOptOutInd;
        return $this;
    }

    /**
     * Gets as optInStatus
     *
     * Status of the opt in.
     * Example: OptedIn
     *
     * @return string
     */
    public function getOptInStatus()
    {
        return $this->optInStatus;
    }

    /**
     * Sets a new optInStatus
     *
     * Status of the opt in.
     * Example: OptedIn
     *
     * @param string $optInStatus
     * @return self
     */
    public function setOptInStatus($optInStatus)
    {
        $this->optInStatus = $optInStatus;
        return $this;
    }

    /**
     * Gets as optInDate
     *
     * Date and time of opt in.
     * Example: 2012-01-14T09:57:59
     *
     * @return \DateTime
     */
    public function getOptInDate()
    {
        return $this->optInDate;
    }

    /**
     * Sets a new optInDate
     *
     * Date and time of opt in.
     * Example: 2012-01-14T09:57:59
     *
     * @param \DateTime $optInDate
     * @return self
     */
    public function setOptInDate(\DateTime $optInDate)
    {
        $this->optInDate = $optInDate;
        return $this;
    }

    /**
     * Gets as optOutDate
     *
     * Date and time of opt out.
     * Example: 2012-01-14T09:57:59
     *
     * @return \DateTime
     */
    public function getOptOutDate()
    {
        return $this->optOutDate;
    }

    /**
     * Sets a new optOutDate
     *
     * Date and time of opt out.
     * Example: 2012-01-14T09:57:59
     *
     * @param \DateTime $optOutDate
     * @return self
     */
    public function setOptOutDate(\DateTime $optOutDate)
    {
        $this->optOutDate = $optOutDate;
        return $this;
    }

    /**
     * Gets as profileType
     *
     * Code to specify a profile such as Customer, Tour Operator, Corporation, etc. Refer to OpenTravel Code List Profile Type (PRT).
     *
     * @return string
     */
    public function getProfileType()
    {
        return $this->profileType;
    }

    /**
     * Sets a new profileType
     *
     * Code to specify a profile such as Customer, Tour Operator, Corporation, etc. Refer to OpenTravel Code List Profile Type (PRT).
     *
     * @param string $profileType
     * @return self
     */
    public function setProfileType($profileType)
    {
        $this->profileType = $profileType;
        return $this;
    }

    /**
     * Gets as createDateTime
     *
     * Time stamp of the creation.
     *
     * @return \DateTime
     */
    public function getCreateDateTime()
    {
        return $this->createDateTime;
    }

    /**
     * Sets a new createDateTime
     *
     * Time stamp of the creation.
     *
     * @param \DateTime $createDateTime
     * @return self
     */
    public function setCreateDateTime(\DateTime $createDateTime)
    {
        $this->createDateTime = $createDateTime;
        return $this;
    }

    /**
     * Gets as creatorID
     *
     * ID of creator. The creator could be a software system identifier or an identifier of an employee resposible for the creation.
     *
     * @return string
     */
    public function getCreatorID()
    {
        return $this->creatorID;
    }

    /**
     * Sets a new creatorID
     *
     * ID of creator. The creator could be a software system identifier or an identifier of an employee resposible for the creation.
     *
     * @param string $creatorID
     * @return self
     */
    public function setCreatorID($creatorID)
    {
        $this->creatorID = $creatorID;
        return $this;
    }

    /**
     * Gets as lastModifyDateTime
     *
     * Time stamp of last modification.
     *
     * @return \DateTime
     */
    public function getLastModifyDateTime()
    {
        return $this->lastModifyDateTime;
    }

    /**
     * Sets a new lastModifyDateTime
     *
     * Time stamp of last modification.
     *
     * @param \DateTime $lastModifyDateTime
     * @return self
     */
    public function setLastModifyDateTime(\DateTime $lastModifyDateTime)
    {
        $this->lastModifyDateTime = $lastModifyDateTime;
        return $this;
    }

    /**
     * Gets as lastModifierID
     *
     * Identifies the last software system or person to modify a record.
     *
     * @return string
     */
    public function getLastModifierID()
    {
        return $this->lastModifierID;
    }

    /**
     * Sets a new lastModifierID
     *
     * Identifies the last software system or person to modify a record.
     *
     * @param string $lastModifierID
     * @return self
     */
    public function setLastModifierID($lastModifierID)
    {
        $this->lastModifierID = $lastModifierID;
        return $this;
    }

    /**
     * Gets as purgeDate
     *
     * Date an item will be purged from a database (e.g., from a live database to an archive).
     *
     * @return \DateTime
     */
    public function getPurgeDate()
    {
        return $this->purgeDate;
    }

    /**
     * Sets a new purgeDate
     *
     * Date an item will be purged from a database (e.g., from a live database to an archive).
     *
     * @param \DateTime $purgeDate
     * @return self
     */
    public function setPurgeDate(\DateTime $purgeDate)
    {
        $this->purgeDate = $purgeDate;
        return $this;
    }

    /**
     * Gets as rPH
     *
     * This is a reference placeholder, used as an index for this guest in this reservation.
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
     * This is a reference placeholder, used as an index for this guest in this reservation.
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
     * Adds as statusCode
     *
     * Status of the profile. Refer to OpenTravel Code List Profile Status Code (PST).
     *
     * @return self
     * @param string $statusCode
     */
    public function addToStatusCode($statusCode)
    {
        $this->statusCode[] = $statusCode;
        return $this;
    }

    /**
     * isset statusCode
     *
     * Status of the profile. Refer to OpenTravel Code List Profile Status Code (PST).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStatusCode($index)
    {
        return isset($this->statusCode[$index]);
    }

    /**
     * unset statusCode
     *
     * Status of the profile. Refer to OpenTravel Code List Profile Status Code (PST).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStatusCode($index)
    {
        unset($this->statusCode[$index]);
    }

    /**
     * Gets as statusCode
     *
     * Status of the profile. Refer to OpenTravel Code List Profile Status Code (PST).
     *
     * @return string[]
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Sets a new statusCode
     *
     * Status of the profile. Refer to OpenTravel Code List Profile Status Code (PST).
     *
     * @param string $statusCode
     * @return self
     */
    public function setStatusCode(array $statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * Gets as accesses
     *
     * A collection of actions taken on a record.
     *
     * @return \Recranet\OTA\Type\AccessesType
     */
    public function getAccesses()
    {
        return $this->accesses;
    }

    /**
     * Sets a new accesses
     *
     * A collection of actions taken on a record.
     *
     * @param \Recranet\OTA\Type\AccessesType $accesses
     * @return self
     */
    public function setAccesses(?\Recranet\OTA\Type\AccessesType $accesses = null)
    {
        $this->accesses = $accesses;
        return $this;
    }

    /**
     * Gets as customer
     *
     * Detailed customer information for this profile.
     *
     * @return \Recranet\OTA\Type\CustomerType
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Sets a new customer
     *
     * Detailed customer information for this profile.
     *
     * @param \Recranet\OTA\Type\CustomerType $customer
     * @return self
     */
    public function setCustomer(?\Recranet\OTA\Type\CustomerType $customer = null)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * Adds as userID
     *
     * The user ids and pin numbers of the profile.
     *
     * @return self
     * @param \Recranet\OTA\Type\ProfileType\UserIDAType $userID
     */
    public function addToUserID(\Recranet\OTA\Type\ProfileType\UserIDAType $userID)
    {
        $this->userID[] = $userID;
        return $this;
    }

    /**
     * isset userID
     *
     * The user ids and pin numbers of the profile.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUserID($index)
    {
        return isset($this->userID[$index]);
    }

    /**
     * unset userID
     *
     * The user ids and pin numbers of the profile.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUserID($index)
    {
        unset($this->userID[$index]);
    }

    /**
     * Gets as userID
     *
     * The user ids and pin numbers of the profile.
     *
     * @return \Recranet\OTA\Type\ProfileType\UserIDAType[]
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * Sets a new userID
     *
     * The user ids and pin numbers of the profile.
     *
     * @param \Recranet\OTA\Type\ProfileType\UserIDAType[] $userID
     * @return self
     */
    public function setUserID(array $userID = null)
    {
        $this->userID = $userID;
        return $this;
    }

    /**
     * Gets as prefCollections
     *
     * A collection of preference collections.
     *
     * @return \Recranet\OTA\Type\PreferencesType
     */
    public function getPrefCollections()
    {
        return $this->prefCollections;
    }

    /**
     * Sets a new prefCollections
     *
     * A collection of preference collections.
     *
     * @param \Recranet\OTA\Type\PreferencesType $prefCollections
     * @return self
     */
    public function setPrefCollections(?\Recranet\OTA\Type\PreferencesType $prefCollections = null)
    {
        $this->prefCollections = $prefCollections;
        return $this;
    }

    /**
     * Gets as companyInfo
     *
     * Company information related to the profile.
     *
     * @return \Recranet\OTA\Type\CompanyInfoType
     */
    public function getCompanyInfo()
    {
        return $this->companyInfo;
    }

    /**
     * Sets a new companyInfo
     *
     * Company information related to the profile.
     *
     * @param \Recranet\OTA\Type\CompanyInfoType $companyInfo
     * @return self
     */
    public function setCompanyInfo(?\Recranet\OTA\Type\CompanyInfoType $companyInfo = null)
    {
        $this->companyInfo = $companyInfo;
        return $this;
    }

    /**
     * Gets as affiliations
     *
     * Affiliation information related to the profile.
     *
     * @return \Recranet\OTA\Type\AffiliationsType
     */
    public function getAffiliations()
    {
        return $this->affiliations;
    }

    /**
     * Sets a new affiliations
     *
     * Affiliation information related to the profile.
     *
     * @param \Recranet\OTA\Type\AffiliationsType $affiliations
     * @return self
     */
    public function setAffiliations(?\Recranet\OTA\Type\AffiliationsType $affiliations = null)
    {
        $this->affiliations = $affiliations;
        return $this;
    }

    /**
     * Gets as agreements
     *
     * Agreement information related to the profile.
     *
     * @return \Recranet\OTA\Type\AgreementsType
     */
    public function getAgreements()
    {
        return $this->agreements;
    }

    /**
     * Sets a new agreements
     *
     * Agreement information related to the profile.
     *
     * @param \Recranet\OTA\Type\AgreementsType $agreements
     * @return self
     */
    public function setAgreements(?\Recranet\OTA\Type\AgreementsType $agreements = null)
    {
        $this->agreements = $agreements;
        return $this;
    }

    /**
     * Adds as comment
     *
     * Comments related to the profile.
     *
     * @return self
     * @param \Recranet\OTA\Type\ProfileType\CommentsAType\CommentAType $comment
     */
    public function addToComments(\Recranet\OTA\Type\ProfileType\CommentsAType\CommentAType $comment)
    {
        $this->comments[] = $comment;
        return $this;
    }

    /**
     * isset comments
     *
     * Comments related to the profile.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComments($index)
    {
        return isset($this->comments[$index]);
    }

    /**
     * unset comments
     *
     * Comments related to the profile.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComments($index)
    {
        unset($this->comments[$index]);
    }

    /**
     * Gets as comments
     *
     * Comments related to the profile.
     *
     * @return \Recranet\OTA\Type\ProfileType\CommentsAType\CommentAType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * Comments related to the profile.
     *
     * @param \Recranet\OTA\Type\ProfileType\CommentsAType\CommentAType[] $comments
     * @return self
     */
    public function setComments(array $comments = null)
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\Type\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\Type\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

