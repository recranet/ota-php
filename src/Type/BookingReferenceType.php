<?php

namespace Recranet\OTA\Type;

/**
 * Class representing BookingReferenceType
 *
 * An extensible list of unique ID types.
 * XSD Type: BookingReferenceType
 */
class BookingReferenceType
{
    /**
     * The identification of a record as it exists at a point in time. An instance is used in update messages where the sender must assure the server that the update sent refers to the most recent modification level of the object being updated.
     *
     * @var string $instance
     */
    private $instance = null;

    /**
     * The booking reference ID, e.g. PNR.
     *
     * @var string $iD
     */
    private $iD = null;

    /**
     * An associated ID, such as a conjunctive ticket number.
     *
     * @var string $associatedID
     */
    private $associatedID = null;

    /**
     * The unique ID type. Select a value from the list or use the "Other_" value and the @extension to define a value known between trading partners.
     *
     * @var \Recranet\OTA\Type\BookingReferenceType\UniqueIDTypeAType $uniqueIDType
     */
    private $uniqueIDType = null;

    /**
     * Associated company information.
     *
     * @var \Recranet\OTA\Type\CompanyNameType $company
     */
    private $company = null;

    /**
     * Associated traveler information.
     *
     * @var \Recranet\OTA\Type\TravelerInfoType[] $traveler
     */
    private $traveler = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as instance
     *
     * The identification of a record as it exists at a point in time. An instance is used in update messages where the sender must assure the server that the update sent refers to the most recent modification level of the object being updated.
     *
     * @return string
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Sets a new instance
     *
     * The identification of a record as it exists at a point in time. An instance is used in update messages where the sender must assure the server that the update sent refers to the most recent modification level of the object being updated.
     *
     * @param string $instance
     * @return self
     */
    public function setInstance($instance)
    {
        $this->instance = $instance;
        return $this;
    }

    /**
     * Gets as iD
     *
     * The booking reference ID, e.g. PNR.
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
     * The booking reference ID, e.g. PNR.
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
     * Gets as associatedID
     *
     * An associated ID, such as a conjunctive ticket number.
     *
     * @return string
     */
    public function getAssociatedID()
    {
        return $this->associatedID;
    }

    /**
     * Sets a new associatedID
     *
     * An associated ID, such as a conjunctive ticket number.
     *
     * @param string $associatedID
     * @return self
     */
    public function setAssociatedID($associatedID)
    {
        $this->associatedID = $associatedID;
        return $this;
    }

    /**
     * Gets as uniqueIDType
     *
     * The unique ID type. Select a value from the list or use the "Other_" value and the @extension to define a value known between trading partners.
     *
     * @return \Recranet\OTA\Type\BookingReferenceType\UniqueIDTypeAType
     */
    public function getUniqueIDType()
    {
        return $this->uniqueIDType;
    }

    /**
     * Sets a new uniqueIDType
     *
     * The unique ID type. Select a value from the list or use the "Other_" value and the @extension to define a value known between trading partners.
     *
     * @param \Recranet\OTA\Type\BookingReferenceType\UniqueIDTypeAType $uniqueIDType
     * @return self
     */
    public function setUniqueIDType(\Recranet\OTA\Type\BookingReferenceType\UniqueIDTypeAType $uniqueIDType)
    {
        $this->uniqueIDType = $uniqueIDType;
        return $this;
    }

    /**
     * Gets as company
     *
     * Associated company information.
     *
     * @return \Recranet\OTA\Type\CompanyNameType
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Sets a new company
     *
     * Associated company information.
     *
     * @param \Recranet\OTA\Type\CompanyNameType $company
     * @return self
     */
    public function setCompany(?\Recranet\OTA\Type\CompanyNameType $company = null)
    {
        $this->company = $company;
        return $this;
    }

    /**
     * Adds as traveler
     *
     * Associated traveler information.
     *
     * @return self
     * @param \Recranet\OTA\Type\TravelerInfoType $traveler
     */
    public function addToTraveler(\Recranet\OTA\Type\TravelerInfoType $traveler)
    {
        $this->traveler[] = $traveler;
        return $this;
    }

    /**
     * isset traveler
     *
     * Associated traveler information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTraveler($index)
    {
        return isset($this->traveler[$index]);
    }

    /**
     * unset traveler
     *
     * Associated traveler information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTraveler($index)
    {
        unset($this->traveler[$index]);
    }

    /**
     * Gets as traveler
     *
     * Associated traveler information.
     *
     * @return \Recranet\OTA\Type\TravelerInfoType[]
     */
    public function getTraveler()
    {
        return $this->traveler;
    }

    /**
     * Sets a new traveler
     *
     * Associated traveler information.
     *
     * @param \Recranet\OTA\Type\TravelerInfoType[] $traveler
     * @return self
     */
    public function setTraveler(array $traveler = null)
    {
        $this->traveler = $traveler;
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

