<?php

namespace Recranet\OTA\Type;

/**
 * Class representing StationDetailsType
 *
 * Defines operation and location details for a train station.
 * XSD Type: StationDetailsType
 */
class StationDetailsType
{
    /**
     * Detailed station information.
     *
     * @var \Recranet\OTA\Type\StationType $details
     */
    private $details = null;

    /**
     * Operation schedules for the station.
     *
     * @var \Recranet\OTA\Type\OperationSchedulesType $operationSchedules
     */
    private $operationSchedules = null;

    /**
     * Address information for the station.
     *
     * @var \Recranet\OTA\Type\AddressType $address
     */
    private $address = null;

    /**
     * Telephone information for the station.
     *
     * @var \Recranet\OTA\Type\StationDetailsType\TelephoneAType[] $telephone
     */
    private $telephone = [
        
    ];

    /**
     * Gets as details
     *
     * Detailed station information.
     *
     * @return \Recranet\OTA\Type\StationType
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Sets a new details
     *
     * Detailed station information.
     *
     * @param \Recranet\OTA\Type\StationType $details
     * @return self
     */
    public function setDetails(\Recranet\OTA\Type\StationType $details)
    {
        $this->details = $details;
        return $this;
    }

    /**
     * Gets as operationSchedules
     *
     * Operation schedules for the station.
     *
     * @return \Recranet\OTA\Type\OperationSchedulesType
     */
    public function getOperationSchedules()
    {
        return $this->operationSchedules;
    }

    /**
     * Sets a new operationSchedules
     *
     * Operation schedules for the station.
     *
     * @param \Recranet\OTA\Type\OperationSchedulesType $operationSchedules
     * @return self
     */
    public function setOperationSchedules(?\Recranet\OTA\Type\OperationSchedulesType $operationSchedules = null)
    {
        $this->operationSchedules = $operationSchedules;
        return $this;
    }

    /**
     * Gets as address
     *
     * Address information for the station.
     *
     * @return \Recranet\OTA\Type\AddressType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Address information for the station.
     *
     * @param \Recranet\OTA\Type\AddressType $address
     * @return self
     */
    public function setAddress(?\Recranet\OTA\Type\AddressType $address = null)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Adds as telephone
     *
     * Telephone information for the station.
     *
     * @return self
     * @param \Recranet\OTA\Type\StationDetailsType\TelephoneAType $telephone
     */
    public function addToTelephone(\Recranet\OTA\Type\StationDetailsType\TelephoneAType $telephone)
    {
        $this->telephone[] = $telephone;
        return $this;
    }

    /**
     * isset telephone
     *
     * Telephone information for the station.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTelephone($index)
    {
        return isset($this->telephone[$index]);
    }

    /**
     * unset telephone
     *
     * Telephone information for the station.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTelephone($index)
    {
        unset($this->telephone[$index]);
    }

    /**
     * Gets as telephone
     *
     * Telephone information for the station.
     *
     * @return \Recranet\OTA\Type\StationDetailsType\TelephoneAType[]
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * Telephone information for the station.
     *
     * @param \Recranet\OTA\Type\StationDetailsType\TelephoneAType[] $telephone
     * @return self
     */
    public function setTelephone(array $telephone = null)
    {
        $this->telephone = $telephone;
        return $this;
    }
}

