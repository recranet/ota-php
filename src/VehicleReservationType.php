<?php

namespace Recranet\OTA;

/**
 * Class representing VehicleReservationType
 *
 * The VehicleReservationType complex type identifies the data that describes a vehicle reservation. This data includes information on the customer(s) associated with the rental and details on the vehicle that is being rented.
 * XSD Type: VehicleReservationType
 */
class VehicleReservationType
{
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
     * Used to specify the status of the reservation.
     *
     * @var string $reservationStatus
     */
    private $reservationStatus = null;

    /**
     * Information on the one primary driver and, optionally, several additional drivers. This may be used to provide a frequent renter number.
     *
     * @var \Recranet\OTA\CustomerPrimaryAdditionalType $customer
     */
    private $customer = null;

    /**
     * Common, or core, information associated with a reservation period and a reserved vehicle.
     *
     * @var \Recranet\OTA\VehicleReservationType\VehSegmentCoreAType $vehSegmentCore
     */
    private $vehSegmentCore = null;

    /**
     * Supplemental information associated with a reservation period and a reserved vehicle.
     *
     * @var \Recranet\OTA\VehicleSegmentAdditionalInfoType $vehSegmentInfo
     */
    private $vehSegmentInfo = null;

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
     * Gets as reservationStatus
     *
     * Used to specify the status of the reservation.
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
     * Used to specify the status of the reservation.
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
     * Gets as customer
     *
     * Information on the one primary driver and, optionally, several additional drivers. This may be used to provide a frequent renter number.
     *
     * @return \Recranet\OTA\CustomerPrimaryAdditionalType
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Sets a new customer
     *
     * Information on the one primary driver and, optionally, several additional drivers. This may be used to provide a frequent renter number.
     *
     * @param \Recranet\OTA\CustomerPrimaryAdditionalType $customer
     * @return self
     */
    public function setCustomer(?\Recranet\OTA\CustomerPrimaryAdditionalType $customer = null)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * Gets as vehSegmentCore
     *
     * Common, or core, information associated with a reservation period and a reserved vehicle.
     *
     * @return \Recranet\OTA\VehicleReservationType\VehSegmentCoreAType
     */
    public function getVehSegmentCore()
    {
        return $this->vehSegmentCore;
    }

    /**
     * Sets a new vehSegmentCore
     *
     * Common, or core, information associated with a reservation period and a reserved vehicle.
     *
     * @param \Recranet\OTA\VehicleReservationType\VehSegmentCoreAType $vehSegmentCore
     * @return self
     */
    public function setVehSegmentCore(\Recranet\OTA\VehicleReservationType\VehSegmentCoreAType $vehSegmentCore)
    {
        $this->vehSegmentCore = $vehSegmentCore;
        return $this;
    }

    /**
     * Gets as vehSegmentInfo
     *
     * Supplemental information associated with a reservation period and a reserved vehicle.
     *
     * @return \Recranet\OTA\VehicleSegmentAdditionalInfoType
     */
    public function getVehSegmentInfo()
    {
        return $this->vehSegmentInfo;
    }

    /**
     * Sets a new vehSegmentInfo
     *
     * Supplemental information associated with a reservation period and a reserved vehicle.
     *
     * @param \Recranet\OTA\VehicleSegmentAdditionalInfoType $vehSegmentInfo
     * @return self
     */
    public function setVehSegmentInfo(?\Recranet\OTA\VehicleSegmentAdditionalInfoType $vehSegmentInfo = null)
    {
        $this->vehSegmentInfo = $vehSegmentInfo;
        return $this;
    }
}

