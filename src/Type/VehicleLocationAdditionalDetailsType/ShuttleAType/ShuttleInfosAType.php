<?php

namespace Recranet\OTA\Type\VehicleLocationAdditionalDetailsType\ShuttleAType;

/**
 * Class representing ShuttleInfosAType
 */
class ShuttleInfosAType
{
    /**
     * Textual description about a specific aspect of the Shuttle Services
     *
     * @var \Recranet\OTA\Type\VehicleLocationAdditionalDetailsType\ShuttleAType\ShuttleInfosAType\ShuttleInfoAType[] $shuttleInfo
     */
    private $shuttleInfo = [
        
    ];

    /**
     * Adds as shuttleInfo
     *
     * Textual description about a specific aspect of the Shuttle Services
     *
     * @return self
     * @param \Recranet\OTA\Type\VehicleLocationAdditionalDetailsType\ShuttleAType\ShuttleInfosAType\ShuttleInfoAType $shuttleInfo
     */
    public function addToShuttleInfo(\Recranet\OTA\Type\VehicleLocationAdditionalDetailsType\ShuttleAType\ShuttleInfosAType\ShuttleInfoAType $shuttleInfo)
    {
        $this->shuttleInfo[] = $shuttleInfo;
        return $this;
    }

    /**
     * isset shuttleInfo
     *
     * Textual description about a specific aspect of the Shuttle Services
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShuttleInfo($index)
    {
        return isset($this->shuttleInfo[$index]);
    }

    /**
     * unset shuttleInfo
     *
     * Textual description about a specific aspect of the Shuttle Services
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShuttleInfo($index)
    {
        unset($this->shuttleInfo[$index]);
    }

    /**
     * Gets as shuttleInfo
     *
     * Textual description about a specific aspect of the Shuttle Services
     *
     * @return \Recranet\OTA\Type\VehicleLocationAdditionalDetailsType\ShuttleAType\ShuttleInfosAType\ShuttleInfoAType[]
     */
    public function getShuttleInfo()
    {
        return $this->shuttleInfo;
    }

    /**
     * Sets a new shuttleInfo
     *
     * Textual description about a specific aspect of the Shuttle Services
     *
     * @param \Recranet\OTA\Type\VehicleLocationAdditionalDetailsType\ShuttleAType\ShuttleInfosAType\ShuttleInfoAType[] $shuttleInfo
     * @return self
     */
    public function setShuttleInfo(array $shuttleInfo)
    {
        $this->shuttleInfo = $shuttleInfo;
        return $this;
    }
}

