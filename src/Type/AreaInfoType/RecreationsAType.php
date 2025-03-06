<?php

namespace Recranet\OTA\Type\AreaInfoType;

/**
 * Class representing RecreationsAType
 */
class RecreationsAType
{
    /**
     * The date and time when Recreations was last updated.
     *
     * @var \DateTime $lastUpdated
     */
    private $lastUpdated = null;

    /**
     * A recreation facility available to the guest. These may or may not be operated by the hotel or located at the hotel.
     *
     * @var \Recranet\OTA\Type\AreaInfoType\RecreationsAType\RecreationAType[] $recreation
     */
    private $recreation = [
        
    ];

    /**
     * Gets as lastUpdated
     *
     * The date and time when Recreations was last updated.
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
     * The date and time when Recreations was last updated.
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
     * Adds as recreation
     *
     * A recreation facility available to the guest. These may or may not be operated by the hotel or located at the hotel.
     *
     * @return self
     * @param \Recranet\OTA\Type\AreaInfoType\RecreationsAType\RecreationAType $recreation
     */
    public function addToRecreation(\Recranet\OTA\Type\AreaInfoType\RecreationsAType\RecreationAType $recreation)
    {
        $this->recreation[] = $recreation;
        return $this;
    }

    /**
     * isset recreation
     *
     * A recreation facility available to the guest. These may or may not be operated by the hotel or located at the hotel.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecreation($index)
    {
        return isset($this->recreation[$index]);
    }

    /**
     * unset recreation
     *
     * A recreation facility available to the guest. These may or may not be operated by the hotel or located at the hotel.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecreation($index)
    {
        unset($this->recreation[$index]);
    }

    /**
     * Gets as recreation
     *
     * A recreation facility available to the guest. These may or may not be operated by the hotel or located at the hotel.
     *
     * @return \Recranet\OTA\Type\AreaInfoType\RecreationsAType\RecreationAType[]
     */
    public function getRecreation()
    {
        return $this->recreation;
    }

    /**
     * Sets a new recreation
     *
     * A recreation facility available to the guest. These may or may not be operated by the hotel or located at the hotel.
     *
     * @param \Recranet\OTA\Type\AreaInfoType\RecreationsAType\RecreationAType[] $recreation
     * @return self
     */
    public function setRecreation(array $recreation)
    {
        $this->recreation = $recreation;
        return $this;
    }
}

