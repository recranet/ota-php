<?php

namespace Recranet\OTA\Type;

/**
 * Class representing AirArrangerType
 *
 * Information about a person or entity associated with an air trip who will not be traveling. This is generally used to describe one or more parties that may be paying for a ticket and/or making the travel plans.
 * XSD Type: AirArrangerType
 */
class AirArrangerType
{
    /**
     * The type of the arranger, i.e., individual, company and travel agent.
     *
     * @var string $role
     */
    private $role = null;

    /**
     * If travel agency, the agency IATA number.
     * http://www.opentraveldevelopersnetwork.com/Supported_IATA_Standards.php
     *
     * @var string $iATANumber
     */
    private $iATANumber = null;

    /**
     * Stored information about a customer. May contain readily available information relevant to the booking.
     *
     * @var \Recranet\OTA\Type\AirArrangerType\ProfileRefAType $profileRef
     */
    private $profileRef = null;

    /**
     * Name and contact person information for the company associated with the air travel.
     *
     * @var \Recranet\OTA\Type\CompanyNameType $companyInfo
     */
    private $companyInfo = null;

    /**
     * Name information for the person associated with the air travel.
     *
     * @var \Recranet\OTA\Type\PersonNameType $contactName
     */
    private $contactName = null;

    /**
     * Gets as role
     *
     * The type of the arranger, i.e., individual, company and travel agent.
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * The type of the arranger, i.e., individual, company and travel agent.
     *
     * @param string $role
     * @return self
     */
    public function setRole($role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Gets as iATANumber
     *
     * If travel agency, the agency IATA number.
     * http://www.opentraveldevelopersnetwork.com/Supported_IATA_Standards.php
     *
     * @return string
     */
    public function getIATANumber()
    {
        return $this->iATANumber;
    }

    /**
     * Sets a new iATANumber
     *
     * If travel agency, the agency IATA number.
     * http://www.opentraveldevelopersnetwork.com/Supported_IATA_Standards.php
     *
     * @param string $iATANumber
     * @return self
     */
    public function setIATANumber($iATANumber)
    {
        $this->iATANumber = $iATANumber;
        return $this;
    }

    /**
     * Gets as profileRef
     *
     * Stored information about a customer. May contain readily available information relevant to the booking.
     *
     * @return \Recranet\OTA\Type\AirArrangerType\ProfileRefAType
     */
    public function getProfileRef()
    {
        return $this->profileRef;
    }

    /**
     * Sets a new profileRef
     *
     * Stored information about a customer. May contain readily available information relevant to the booking.
     *
     * @param \Recranet\OTA\Type\AirArrangerType\ProfileRefAType $profileRef
     * @return self
     */
    public function setProfileRef(?\Recranet\OTA\Type\AirArrangerType\ProfileRefAType $profileRef = null)
    {
        $this->profileRef = $profileRef;
        return $this;
    }

    /**
     * Gets as companyInfo
     *
     * Name and contact person information for the company associated with the air travel.
     *
     * @return \Recranet\OTA\Type\CompanyNameType
     */
    public function getCompanyInfo()
    {
        return $this->companyInfo;
    }

    /**
     * Sets a new companyInfo
     *
     * Name and contact person information for the company associated with the air travel.
     *
     * @param \Recranet\OTA\Type\CompanyNameType $companyInfo
     * @return self
     */
    public function setCompanyInfo(?\Recranet\OTA\Type\CompanyNameType $companyInfo = null)
    {
        $this->companyInfo = $companyInfo;
        return $this;
    }

    /**
     * Gets as contactName
     *
     * Name information for the person associated with the air travel.
     *
     * @return \Recranet\OTA\Type\PersonNameType
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Sets a new contactName
     *
     * Name information for the person associated with the air travel.
     *
     * @param \Recranet\OTA\Type\PersonNameType $contactName
     * @return self
     */
    public function setContactName(?\Recranet\OTA\Type\PersonNameType $contactName = null)
    {
        $this->contactName = $contactName;
        return $this;
    }
}

