<?php

namespace Recranet\OTA\Type;

/**
 * Class representing VehicleReservationSummaryType
 *
 * The VehicleReservationSummaryType complextype identifies the summary data that identifies a reservation. Use of one or more of the elements will help in identifying a specific reservation.
 * XSD Type: VehicleReservationSummaryType
 */
class VehicleReservationSummaryType
{
    /**
     * The PickUpDateTime attribute provides information on the pickup date and time.
     *
     * @var \DateTime $pickUpDateTime
     */
    private $pickUpDateTime = null;

    /**
     * The ReturnDateTime attribute provides information on the return date and time.
     *
     * @var \DateTime $returnDateTime
     */
    private $returnDateTime = null;

    /**
     * Used to specify the status of a reservation.
     *
     * @var string $reservationStatus
     */
    private $reservationStatus = null;

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
     * A confirmation number by which this reservation can be uniquely identified. Can also be used for reservation, contract and PNR IDs as well.
     *
     * @var \Recranet\OTA\Type\VehicleReservationSummaryType\ConfIDAType[] $confID
     */
    private $confID = [
        
    ];

    /**
     * A code to identify the pick up location, along with an optional code context.
     *
     * @var \Recranet\OTA\Type\LocationType $pickUpLocation
     */
    private $pickUpLocation = null;

    /**
     * A code to identify the return location, along with an optional code context.
     *
     * @var \Recranet\OTA\Type\LocationType $returnLocation
     */
    private $returnLocation = null;

    /**
     * Name of the person associated with the reservation
     *
     * @var \Recranet\OTA\Type\PersonNameType $personName
     */
    private $personName = null;

    /**
     * Information about a vehicle that has been reserved, such as the class and type.
     *
     * @var \Recranet\OTA\Type\VehicleType $vehicle
     */
    private $vehicle = null;

    /**
     * Identifies the vendor associated with this information.
     *
     * @var \Recranet\OTA\Type\CompanyNameType $vendor
     */
    private $vendor = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as pickUpDateTime
     *
     * The PickUpDateTime attribute provides information on the pickup date and time.
     *
     * @return \DateTime
     */
    public function getPickUpDateTime()
    {
        return $this->pickUpDateTime;
    }

    /**
     * Sets a new pickUpDateTime
     *
     * The PickUpDateTime attribute provides information on the pickup date and time.
     *
     * @param \DateTime $pickUpDateTime
     * @return self
     */
    public function setPickUpDateTime(\DateTime $pickUpDateTime)
    {
        $this->pickUpDateTime = $pickUpDateTime;
        return $this;
    }

    /**
     * Gets as returnDateTime
     *
     * The ReturnDateTime attribute provides information on the return date and time.
     *
     * @return \DateTime
     */
    public function getReturnDateTime()
    {
        return $this->returnDateTime;
    }

    /**
     * Sets a new returnDateTime
     *
     * The ReturnDateTime attribute provides information on the return date and time.
     *
     * @param \DateTime $returnDateTime
     * @return self
     */
    public function setReturnDateTime(\DateTime $returnDateTime)
    {
        $this->returnDateTime = $returnDateTime;
        return $this;
    }

    /**
     * Gets as reservationStatus
     *
     * Used to specify the status of a reservation.
     *
     * @return string
     */
    public function getReservationStatus()
    {
        return $this->reservationStatus;
    }

    /**
     * Sets a new reservationStatus
     *
     * Used to specify the status of a reservation.
     *
     * @param string $reservationStatus
     * @return self
     */
    public function setReservationStatus($reservationStatus)
    {
        $this->reservationStatus = $reservationStatus;
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
     * Adds as confID
     *
     * A confirmation number by which this reservation can be uniquely identified. Can also be used for reservation, contract and PNR IDs as well.
     *
     * @return self
     * @param \Recranet\OTA\Type\VehicleReservationSummaryType\ConfIDAType $confID
     */
    public function addToConfID(\Recranet\OTA\Type\VehicleReservationSummaryType\ConfIDAType $confID)
    {
        $this->confID[] = $confID;
        return $this;
    }

    /**
     * isset confID
     *
     * A confirmation number by which this reservation can be uniquely identified. Can also be used for reservation, contract and PNR IDs as well.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConfID($index)
    {
        return isset($this->confID[$index]);
    }

    /**
     * unset confID
     *
     * A confirmation number by which this reservation can be uniquely identified. Can also be used for reservation, contract and PNR IDs as well.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConfID($index)
    {
        unset($this->confID[$index]);
    }

    /**
     * Gets as confID
     *
     * A confirmation number by which this reservation can be uniquely identified. Can also be used for reservation, contract and PNR IDs as well.
     *
     * @return \Recranet\OTA\Type\VehicleReservationSummaryType\ConfIDAType[]
     */
    public function getConfID()
    {
        return $this->confID;
    }

    /**
     * Sets a new confID
     *
     * A confirmation number by which this reservation can be uniquely identified. Can also be used for reservation, contract and PNR IDs as well.
     *
     * @param \Recranet\OTA\Type\VehicleReservationSummaryType\ConfIDAType[] $confID
     * @return self
     */
    public function setConfID(array $confID)
    {
        $this->confID = $confID;
        return $this;
    }

    /**
     * Gets as pickUpLocation
     *
     * A code to identify the pick up location, along with an optional code context.
     *
     * @return \Recranet\OTA\Type\LocationType
     */
    public function getPickUpLocation()
    {
        return $this->pickUpLocation;
    }

    /**
     * Sets a new pickUpLocation
     *
     * A code to identify the pick up location, along with an optional code context.
     *
     * @param \Recranet\OTA\Type\LocationType $pickUpLocation
     * @return self
     */
    public function setPickUpLocation(?\Recranet\OTA\Type\LocationType $pickUpLocation = null)
    {
        $this->pickUpLocation = $pickUpLocation;
        return $this;
    }

    /**
     * Gets as returnLocation
     *
     * A code to identify the return location, along with an optional code context.
     *
     * @return \Recranet\OTA\Type\LocationType
     */
    public function getReturnLocation()
    {
        return $this->returnLocation;
    }

    /**
     * Sets a new returnLocation
     *
     * A code to identify the return location, along with an optional code context.
     *
     * @param \Recranet\OTA\Type\LocationType $returnLocation
     * @return self
     */
    public function setReturnLocation(?\Recranet\OTA\Type\LocationType $returnLocation = null)
    {
        $this->returnLocation = $returnLocation;
        return $this;
    }

    /**
     * Gets as personName
     *
     * Name of the person associated with the reservation
     *
     * @return \Recranet\OTA\Type\PersonNameType
     */
    public function getPersonName()
    {
        return $this->personName;
    }

    /**
     * Sets a new personName
     *
     * Name of the person associated with the reservation
     *
     * @param \Recranet\OTA\Type\PersonNameType $personName
     * @return self
     */
    public function setPersonName(?\Recranet\OTA\Type\PersonNameType $personName = null)
    {
        $this->personName = $personName;
        return $this;
    }

    /**
     * Gets as vehicle
     *
     * Information about a vehicle that has been reserved, such as the class and type.
     *
     * @return \Recranet\OTA\Type\VehicleType
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Sets a new vehicle
     *
     * Information about a vehicle that has been reserved, such as the class and type.
     *
     * @param \Recranet\OTA\Type\VehicleType $vehicle
     * @return self
     */
    public function setVehicle(?\Recranet\OTA\Type\VehicleType $vehicle = null)
    {
        $this->vehicle = $vehicle;
        return $this;
    }

    /**
     * Gets as vendor
     *
     * Identifies the vendor associated with this information.
     *
     * @return \Recranet\OTA\Type\CompanyNameType
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Sets a new vendor
     *
     * Identifies the vendor associated with this information.
     *
     * @param \Recranet\OTA\Type\CompanyNameType $vendor
     * @return self
     */
    public function setVendor(?\Recranet\OTA\Type\CompanyNameType $vendor = null)
    {
        $this->vendor = $vendor;
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

