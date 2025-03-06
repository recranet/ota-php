<?php

namespace Recranet\OTA\Type;

/**
 * Class representing CancelInfoRQType
 *
 * Identifies the common, or core, information associated with the request for cancellation of a reservation or other type of record.
 * XSD Type: CancelInfoRQType
 */
class CancelInfoRQType
{
    /**
     * Used to specify if this is to initiate a cancellation or to commit the cancellation.
     *
     * @var string $cancelType
     */
    private $cancelType = null;

    /**
     * Sending own UniqueID and partner UniqueID - the receiving system needs to know which one - UniqueID acts as a reference for each system.
     *
     * @var \Recranet\OTA\Type\UniqueIDType[] $uniqueID
     */
    private $uniqueID = [
        
    ];

    /**
     * The person's name in a reservation.
     *
     * @var \Recranet\OTA\Type\PersonNameType $personName
     */
    private $personName = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as cancelType
     *
     * Used to specify if this is to initiate a cancellation or to commit the cancellation.
     *
     * @return string
     */
    public function getCancelType()
    {
        return $this->cancelType;
    }

    /**
     * Sets a new cancelType
     *
     * Used to specify if this is to initiate a cancellation or to commit the cancellation.
     *
     * @param string $cancelType
     * @return self
     */
    public function setCancelType($cancelType)
    {
        $this->cancelType = $cancelType;
        return $this;
    }

    /**
     * Adds as uniqueID
     *
     * Sending own UniqueID and partner UniqueID - the receiving system needs to know which one - UniqueID acts as a reference for each system.
     *
     * @return self
     * @param \Recranet\OTA\Type\UniqueIDType $uniqueID
     */
    public function addToUniqueID(\Recranet\OTA\Type\UniqueIDType $uniqueID)
    {
        $this->uniqueID[] = $uniqueID;
        return $this;
    }

    /**
     * isset uniqueID
     *
     * Sending own UniqueID and partner UniqueID - the receiving system needs to know which one - UniqueID acts as a reference for each system.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUniqueID($index)
    {
        return isset($this->uniqueID[$index]);
    }

    /**
     * unset uniqueID
     *
     * Sending own UniqueID and partner UniqueID - the receiving system needs to know which one - UniqueID acts as a reference for each system.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUniqueID($index)
    {
        unset($this->uniqueID[$index]);
    }

    /**
     * Gets as uniqueID
     *
     * Sending own UniqueID and partner UniqueID - the receiving system needs to know which one - UniqueID acts as a reference for each system.
     *
     * @return \Recranet\OTA\Type\UniqueIDType[]
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * Sending own UniqueID and partner UniqueID - the receiving system needs to know which one - UniqueID acts as a reference for each system.
     *
     * @param \Recranet\OTA\Type\UniqueIDType[] $uniqueID
     * @return self
     */
    public function setUniqueID(array $uniqueID)
    {
        $this->uniqueID = $uniqueID;
        return $this;
    }

    /**
     * Gets as personName
     *
     * The person's name in a reservation.
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
     * The person's name in a reservation.
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

