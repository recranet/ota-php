<?php

namespace Recranet\OTA;

/**
 * Class representing NamePrefType
 *
 * Enables a preference to be indicated for name information.
 * XSD Type: NamePrefType
 */
class NamePrefType
{
    /**
     * Used to indicate a level of preference for an associated item.
     *
     * @var string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Unique identifier for a person or profile.
     *
     * @var \Recranet\OTA\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * Name information.
     *
     * @var \Recranet\OTA\PersonNameType $personName
     */
    private $personName = null;

    /**
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;
        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * Unique identifier for a person or profile.
     *
     * @return \Recranet\OTA\UniqueIDType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * Unique identifier for a person or profile.
     *
     * @param \Recranet\OTA\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(\Recranet\OTA\UniqueIDType $uniqueID)
    {
        $this->uniqueID = $uniqueID;
        return $this;
    }

    /**
     * Gets as personName
     *
     * Name information.
     *
     * @return \Recranet\OTA\PersonNameType
     */
    public function getPersonName()
    {
        return $this->personName;
    }

    /**
     * Sets a new personName
     *
     * Name information.
     *
     * @param \Recranet\OTA\PersonNameType $personName
     * @return self
     */
    public function setPersonName(\Recranet\OTA\PersonNameType $personName)
    {
        $this->personName = $personName;
        return $this;
    }
}

