<?php

namespace Recranet\OTA\Type;

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
     * @var \Recranet\OTA\Type\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * Name information.
     *
     * @var \Recranet\OTA\Type\PersonNameType $personName
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
     * @return \Recranet\OTA\Type\UniqueIDType
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
     * @param \Recranet\OTA\Type\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(\Recranet\OTA\Type\UniqueIDType $uniqueID)
    {
        $this->uniqueID = $uniqueID;
        return $this;
    }

    /**
     * Gets as personName
     *
     * Name information.
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
     * Name information.
     *
     * @param \Recranet\OTA\Type\PersonNameType $personName
     * @return self
     */
    public function setPersonName(\Recranet\OTA\Type\PersonNameType $personName)
    {
        $this->personName = $personName;
        return $this;
    }
}

