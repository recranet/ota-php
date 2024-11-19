<?php

namespace Recranet\OTA\VehicleLocationAdditionalDetailsType;

/**
 * Class representing ShuttleAType
 */
class ShuttleAType
{
    /**
     * Collection of descriptions about various aspects of the Shuttle Services.
     *
     * @var \Recranet\OTA\VehicleLocationAdditionalDetailsType\ShuttleAType\ShuttleInfosAType\ShuttleInfoAType[] $shuttleInfos
     */
    private $shuttleInfos = null;

    /**
     * A collection of operation schedules, used to define the hours of operation for the shuttle services.
     *
     * @var \Recranet\OTA\OperationSchedulesType $operationSchedules
     */
    private $operationSchedules = null;

    /**
     * Adds as shuttleInfo
     *
     * Collection of descriptions about various aspects of the Shuttle Services.
     *
     * @return self
     * @param \Recranet\OTA\VehicleLocationAdditionalDetailsType\ShuttleAType\ShuttleInfosAType\ShuttleInfoAType $shuttleInfo
     */
    public function addToShuttleInfos(\Recranet\OTA\VehicleLocationAdditionalDetailsType\ShuttleAType\ShuttleInfosAType\ShuttleInfoAType $shuttleInfo)
    {
        $this->shuttleInfos[] = $shuttleInfo;
        return $this;
    }

    /**
     * isset shuttleInfos
     *
     * Collection of descriptions about various aspects of the Shuttle Services.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShuttleInfos($index)
    {
        return isset($this->shuttleInfos[$index]);
    }

    /**
     * unset shuttleInfos
     *
     * Collection of descriptions about various aspects of the Shuttle Services.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShuttleInfos($index)
    {
        unset($this->shuttleInfos[$index]);
    }

    /**
     * Gets as shuttleInfos
     *
     * Collection of descriptions about various aspects of the Shuttle Services.
     *
     * @return \Recranet\OTA\VehicleLocationAdditionalDetailsType\ShuttleAType\ShuttleInfosAType\ShuttleInfoAType[]
     */
    public function getShuttleInfos()
    {
        return $this->shuttleInfos;
    }

    /**
     * Sets a new shuttleInfos
     *
     * Collection of descriptions about various aspects of the Shuttle Services.
     *
     * @param \Recranet\OTA\VehicleLocationAdditionalDetailsType\ShuttleAType\ShuttleInfosAType\ShuttleInfoAType[] $shuttleInfos
     * @return self
     */
    public function setShuttleInfos(array $shuttleInfos = null)
    {
        $this->shuttleInfos = $shuttleInfos;
        return $this;
    }

    /**
     * Gets as operationSchedules
     *
     * A collection of operation schedules, used to define the hours of operation for the shuttle services.
     *
     * @return \Recranet\OTA\OperationSchedulesType
     */
    public function getOperationSchedules()
    {
        return $this->operationSchedules;
    }

    /**
     * Sets a new operationSchedules
     *
     * A collection of operation schedules, used to define the hours of operation for the shuttle services.
     *
     * @param \Recranet\OTA\OperationSchedulesType $operationSchedules
     * @return self
     */
    public function setOperationSchedules(?\Recranet\OTA\OperationSchedulesType $operationSchedules = null)
    {
        $this->operationSchedules = $operationSchedules;
        return $this;
    }
}

