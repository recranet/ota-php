<?php

namespace Recranet\OTA;

/**
 * Class representing SearchTravelerType
 *
 * Information about the travelers, including birth date, age, relationship to primary insured and gender.
 * XSD Type: SearchTravelerType
 */
class SearchTravelerType
{
    /**
     * Indicates the date of birth as indicated in the document, in ISO 8601 prescribed format.
     *
     * @var \DateTime $birthDate
     */
    private $birthDate = null;

    /**
     * Used to provide an individuals age.
     *
     * @var int $age
     */
    private $age = null;

    /**
     * Used to define the relationship to the primary insured.
     *
     * @var string $relation
     */
    private $relation = null;

    /**
     * Used to provide gender information.
     *
     * @var string $gender
     */
    private $gender = null;

    /**
     * Address information for the traveler.
     *
     * @var \Recranet\OTA\AddressInfoType $address
     */
    private $address = null;

    /**
     * Information about the traveler's citizenship.
     *
     * @var \Recranet\OTA\SearchTravelerType\CitizenCountryNameAType $citizenCountryName
     */
    private $citizenCountryName = null;

    /**
     * Insurance coverage requirement information, including estimated trip cost, the amount of requested accidental flight insurance, descriptions of luggage or equipment to be covered and a description of the traveler's pre-existing conditions.
     *
     * @var \Recranet\OTA\IndCoverageReqsType $indCoverageReqs
     */
    private $indCoverageReqs = null;

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as birthDate
     *
     * Indicates the date of birth as indicated in the document, in ISO 8601 prescribed format.
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Sets a new birthDate
     *
     * Indicates the date of birth as indicated in the document, in ISO 8601 prescribed format.
     *
     * @param \DateTime $birthDate
     * @return self
     */
    public function setBirthDate(\DateTime $birthDate)
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * Gets as age
     *
     * Used to provide an individuals age.
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Sets a new age
     *
     * Used to provide an individuals age.
     *
     * @param int $age
     * @return self
     */
    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    /**
     * Gets as relation
     *
     * Used to define the relationship to the primary insured.
     *
     * @return string
     */
    public function getRelation()
    {
        return $this->relation;
    }

    /**
     * Sets a new relation
     *
     * Used to define the relationship to the primary insured.
     *
     * @param string $relation
     * @return self
     */
    public function setRelation($relation)
    {
        $this->relation = $relation;
        return $this;
    }

    /**
     * Gets as gender
     *
     * Used to provide gender information.
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
     * Used to provide gender information.
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
     * Gets as address
     *
     * Address information for the traveler.
     *
     * @return \Recranet\OTA\AddressInfoType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Address information for the traveler.
     *
     * @param \Recranet\OTA\AddressInfoType $address
     * @return self
     */
    public function setAddress(?\Recranet\OTA\AddressInfoType $address = null)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as citizenCountryName
     *
     * Information about the traveler's citizenship.
     *
     * @return \Recranet\OTA\SearchTravelerType\CitizenCountryNameAType
     */
    public function getCitizenCountryName()
    {
        return $this->citizenCountryName;
    }

    /**
     * Sets a new citizenCountryName
     *
     * Information about the traveler's citizenship.
     *
     * @param \Recranet\OTA\SearchTravelerType\CitizenCountryNameAType $citizenCountryName
     * @return self
     */
    public function setCitizenCountryName(?\Recranet\OTA\SearchTravelerType\CitizenCountryNameAType $citizenCountryName = null)
    {
        $this->citizenCountryName = $citizenCountryName;
        return $this;
    }

    /**
     * Gets as indCoverageReqs
     *
     * Insurance coverage requirement information, including estimated trip cost, the amount of requested accidental flight insurance, descriptions of luggage or equipment to be covered and a description of the traveler's pre-existing conditions.
     *
     * @return \Recranet\OTA\IndCoverageReqsType
     */
    public function getIndCoverageReqs()
    {
        return $this->indCoverageReqs;
    }

    /**
     * Sets a new indCoverageReqs
     *
     * Insurance coverage requirement information, including estimated trip cost, the amount of requested accidental flight insurance, descriptions of luggage or equipment to be covered and a description of the traveler's pre-existing conditions.
     *
     * @param \Recranet\OTA\IndCoverageReqsType $indCoverageReqs
     * @return self
     */
    public function setIndCoverageReqs(?\Recranet\OTA\IndCoverageReqsType $indCoverageReqs = null)
    {
        $this->indCoverageReqs = $indCoverageReqs;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

