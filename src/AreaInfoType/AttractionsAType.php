<?php

namespace Recranet\OTA\AreaInfoType;

/**
 * Class representing AttractionsAType
 */
class AttractionsAType
{
    /**
     * The date and time when Attractions was last updated.
     *
     * @var \DateTime $lastUpdated
     */
    private $lastUpdated = null;

    /**
     * This identifies an item of local interest (e.g. theme park, airport, museum, rail station, university).
     *
     * @var \Recranet\OTA\AreaInfoType\AttractionsAType\AttractionAType[] $attraction
     */
    private $attraction = [
        
    ];

    /**
     * Gets as lastUpdated
     *
     * The date and time when Attractions was last updated.
     *
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }

    /**
     * Sets a new lastUpdated
     *
     * The date and time when Attractions was last updated.
     *
     * @param \DateTime $lastUpdated
     * @return self
     */
    public function setLastUpdated(\DateTime $lastUpdated)
    {
        $this->lastUpdated = $lastUpdated;
        return $this;
    }

    /**
     * Adds as attraction
     *
     * This identifies an item of local interest (e.g. theme park, airport, museum, rail station, university).
     *
     * @return self
     * @param \Recranet\OTA\AreaInfoType\AttractionsAType\AttractionAType $attraction
     */
    public function addToAttraction(\Recranet\OTA\AreaInfoType\AttractionsAType\AttractionAType $attraction)
    {
        $this->attraction[] = $attraction;
        return $this;
    }

    /**
     * isset attraction
     *
     * This identifies an item of local interest (e.g. theme park, airport, museum, rail station, university).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAttraction($index)
    {
        return isset($this->attraction[$index]);
    }

    /**
     * unset attraction
     *
     * This identifies an item of local interest (e.g. theme park, airport, museum, rail station, university).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAttraction($index)
    {
        unset($this->attraction[$index]);
    }

    /**
     * Gets as attraction
     *
     * This identifies an item of local interest (e.g. theme park, airport, museum, rail station, university).
     *
     * @return \Recranet\OTA\AreaInfoType\AttractionsAType\AttractionAType[]
     */
    public function getAttraction()
    {
        return $this->attraction;
    }

    /**
     * Sets a new attraction
     *
     * This identifies an item of local interest (e.g. theme park, airport, museum, rail station, university).
     *
     * @param \Recranet\OTA\AreaInfoType\AttractionsAType\AttractionAType[] $attraction
     * @return self
     */
    public function setAttraction(array $attraction)
    {
        $this->attraction = $attraction;
        return $this;
    }
}

