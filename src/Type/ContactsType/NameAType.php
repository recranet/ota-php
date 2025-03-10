<?php

namespace Recranet\OTA\Type\ContactsType;

use Recranet\OTA\Type\PersonNameType;

/**
 * Class representing NameAType
 */
class NameAType extends PersonNameType
{
    /**
     * If true, this item is obsolete and should be removed from the receiving system.
     *
     *  false
     *
     * @var bool $removal
     */
    private $removal = null;

    /**
     * May be used to give further detail on the code.
     *
     * @var string $codeDetail
     */
    private $codeDetail = null;

    /**
     * Identifies the gender.
     *
     * @var string $gender
     */
    private $gender = null;

    /**
     * The information describing the contact service code for a hotel facility. (e.g., who to contact about golf tours). Refer to OpenTravel Code List Contact Srvc Code (CSC).
     *
     * @var string $srvcCode
     */
    private $srvcCode = null;

    /**
     * The location of the hotel contact. e.g.: at the hotel property, at a central office, etc. Refer to OpenTravel Code List Contact Location (CON).
     *
     * @var string $location
     */
    private $location = null;

    /**
     * The corporate position of the contact.
     *
     * @var string $corporatePosition
     */
    private $corporatePosition = null;

    /**
     * Indicates whether the contact information can be published externally (on a web site for the general public) or whether this is strictly a contact to be used in conjunction with the data feed (limited use).
     * Values: 0 = No, Limited Publication, or 1 = Yes, OK for External Publication.
     *
     * @var bool $oKToPublish
     */
    private $oKToPublish = null;

    /**
     * The proper name in the usual order (e.g. used for correspondance Mr. James Smith).
     *
     * @var string $nameOrdered
     */
    private $nameOrdered = null;

    /**
     * A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a particular implementation.
     *
     * @var string $iD
     */
    private $iD = null;

    /**
     * @var \Recranet\OTA\Type\ContactsType\NameAType\JobTitleAType[] $jobTitle
     */
    private $jobTitle = [
        
    ];

    /**
     * Gets as removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *
     *  false
     *
     * @return bool
     */
    public function getRemoval()
    {
        return $this->removal;
    }

    /**
     * Sets a new removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *
     *  false
     *
     * @param bool $removal
     * @return self
     */
    public function setRemoval($removal)
    {
        $this->removal = $removal;
        return $this;
    }

    /**
     * Gets as codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @return string
     */
    public function getCodeDetail()
    {
        return $this->codeDetail;
    }

    /**
     * Sets a new codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @param string $codeDetail
     * @return self
     */
    public function setCodeDetail($codeDetail)
    {
        $this->codeDetail = $codeDetail;
        return $this;
    }

    /**
     * Gets as gender
     *
     * Identifies the gender.
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Sets a new gender
     *
     * Identifies the gender.
     *
     * @param string $gender
     * @return self
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * Gets as srvcCode
     *
     * The information describing the contact service code for a hotel facility. (e.g., who to contact about golf tours). Refer to OpenTravel Code List Contact Srvc Code (CSC).
     *
     * @return string
     */
    public function getSrvcCode()
    {
        return $this->srvcCode;
    }

    /**
     * Sets a new srvcCode
     *
     * The information describing the contact service code for a hotel facility. (e.g., who to contact about golf tours). Refer to OpenTravel Code List Contact Srvc Code (CSC).
     *
     * @param string $srvcCode
     * @return self
     */
    public function setSrvcCode($srvcCode)
    {
        $this->srvcCode = $srvcCode;
        return $this;
    }

    /**
     * Gets as location
     *
     * The location of the hotel contact. e.g.: at the hotel property, at a central office, etc. Refer to OpenTravel Code List Contact Location (CON).
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * The location of the hotel contact. e.g.: at the hotel property, at a central office, etc. Refer to OpenTravel Code List Contact Location (CON).
     *
     * @param string $location
     * @return self
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as corporatePosition
     *
     * The corporate position of the contact.
     *
     * @return string
     */
    public function getCorporatePosition()
    {
        return $this->corporatePosition;
    }

    /**
     * Sets a new corporatePosition
     *
     * The corporate position of the contact.
     *
     * @param string $corporatePosition
     * @return self
     */
    public function setCorporatePosition($corporatePosition)
    {
        $this->corporatePosition = $corporatePosition;
        return $this;
    }

    /**
     * Gets as oKToPublish
     *
     * Indicates whether the contact information can be published externally (on a web site for the general public) or whether this is strictly a contact to be used in conjunction with the data feed (limited use).
     * Values: 0 = No, Limited Publication, or 1 = Yes, OK for External Publication.
     *
     * @return bool
     */
    public function getOKToPublish()
    {
        return $this->oKToPublish;
    }

    /**
     * Sets a new oKToPublish
     *
     * Indicates whether the contact information can be published externally (on a web site for the general public) or whether this is strictly a contact to be used in conjunction with the data feed (limited use).
     * Values: 0 = No, Limited Publication, or 1 = Yes, OK for External Publication.
     *
     * @param bool $oKToPublish
     * @return self
     */
    public function setOKToPublish($oKToPublish)
    {
        $this->oKToPublish = $oKToPublish;
        return $this;
    }

    /**
     * Gets as nameOrdered
     *
     * The proper name in the usual order (e.g. used for correspondance Mr. James Smith).
     *
     * @return string
     */
    public function getNameOrdered()
    {
        return $this->nameOrdered;
    }

    /**
     * Sets a new nameOrdered
     *
     * The proper name in the usual order (e.g. used for correspondance Mr. James Smith).
     *
     * @param string $nameOrdered
     * @return self
     */
    public function setNameOrdered($nameOrdered)
    {
        $this->nameOrdered = $nameOrdered;
        return $this;
    }

    /**
     * Gets as iD
     *
     * A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a particular implementation.
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a particular implementation.
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Adds as jobTitle
     *
     * @return self
     * @param \Recranet\OTA\Type\ContactsType\NameAType\JobTitleAType $jobTitle
     */
    public function addToJobTitle(\Recranet\OTA\Type\ContactsType\NameAType\JobTitleAType $jobTitle)
    {
        $this->jobTitle[] = $jobTitle;
        return $this;
    }

    /**
     * isset jobTitle
     *
     * @param int|string $index
     * @return bool
     */
    public function issetJobTitle($index)
    {
        return isset($this->jobTitle[$index]);
    }

    /**
     * unset jobTitle
     *
     * @param int|string $index
     * @return void
     */
    public function unsetJobTitle($index)
    {
        unset($this->jobTitle[$index]);
    }

    /**
     * Gets as jobTitle
     *
     * @return \Recranet\OTA\Type\ContactsType\NameAType\JobTitleAType[]
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * Sets a new jobTitle
     *
     * @param \Recranet\OTA\Type\ContactsType\NameAType\JobTitleAType[] $jobTitle
     * @return self
     */
    public function setJobTitle(array $jobTitle = null)
    {
        $this->jobTitle = $jobTitle;
        return $this;
    }
}

