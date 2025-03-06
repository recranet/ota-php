<?php

namespace Recranet\OTA\Type;

/**
 * Class representing VehicleLocationAdditionalDetailsType
 *
 * The VehicleLocationAdditionalDetailsType complex type defines the supplemental information that describes a vehicle rental facility. Such information may include the operation schedules and services offered.
 * XSD Type: VehicleLocationAdditionalDetailsType
 */
class VehicleLocationAdditionalDetailsType
{
    /**
     * Descriptive information allowing the vendor to present informational messages about the rental location. These may include after-hour return of vehicle messages, messages providing directions to the location, or other similar messages.
     *
     * @var \Recranet\OTA\Type\VehicleLocationInformationType[] $vehRentLocInfos
     */
    private $vehRentLocInfos = null;

    /**
     * Descriptive information about where the vehicles are parked.
     *
     * @var \Recranet\OTA\Type\VehicleWhereAtFacilityType $parkLocation
     */
    private $parkLocation = null;

    /**
     * Descriptive information about where the rental counter is located.
     *
     * @var \Recranet\OTA\Type\VehicleWhereAtFacilityType $counterLocation
     */
    private $counterLocation = null;

    /**
     * A collection of operation schedules, used to define the hours of operation for this rental facility.
     *
     * @var \Recranet\OTA\Type\OperationSchedulesType $operationSchedules
     */
    private $operationSchedules = null;

    /**
     * Information on the shuttle services associated with this location. Some locations use a shuttle bus to transfer the customers from an airport terminal to the rental facility.
     *
     * @var \Recranet\OTA\Type\VehicleLocationAdditionalDetailsType\ShuttleAType $shuttle
     */
    private $shuttle = null;

    /**
     * List of locations where one way drops are allowed based on pick-up location.
     *
     * @var \Recranet\OTA\Type\VehicleLocationAdditionalDetailsType\OneWayDropLocationsAType\OneWayDropLocationAType[] $oneWayDropLocations
     */
    private $oneWayDropLocations = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as vehRentLocInfo
     *
     * Descriptive information allowing the vendor to present informational messages about the rental location. These may include after-hour return of vehicle messages, messages providing directions to the location, or other similar messages.
     *
     * @return self
     * @param \Recranet\OTA\Type\VehicleLocationInformationType $vehRentLocInfo
     */
    public function addToVehRentLocInfos(\Recranet\OTA\Type\VehicleLocationInformationType $vehRentLocInfo)
    {
        $this->vehRentLocInfos[] = $vehRentLocInfo;
        return $this;
    }

    /**
     * isset vehRentLocInfos
     *
     * Descriptive information allowing the vendor to present informational messages about the rental location. These may include after-hour return of vehicle messages, messages providing directions to the location, or other similar messages.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVehRentLocInfos($index)
    {
        return isset($this->vehRentLocInfos[$index]);
    }

    /**
     * unset vehRentLocInfos
     *
     * Descriptive information allowing the vendor to present informational messages about the rental location. These may include after-hour return of vehicle messages, messages providing directions to the location, or other similar messages.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVehRentLocInfos($index)
    {
        unset($this->vehRentLocInfos[$index]);
    }

    /**
     * Gets as vehRentLocInfos
     *
     * Descriptive information allowing the vendor to present informational messages about the rental location. These may include after-hour return of vehicle messages, messages providing directions to the location, or other similar messages.
     *
     * @return \Recranet\OTA\Type\VehicleLocationInformationType[]
     */
    public function getVehRentLocInfos()
    {
        return $this->vehRentLocInfos;
    }

    /**
     * Sets a new vehRentLocInfos
     *
     * Descriptive information allowing the vendor to present informational messages about the rental location. These may include after-hour return of vehicle messages, messages providing directions to the location, or other similar messages.
     *
     * @param \Recranet\OTA\Type\VehicleLocationInformationType[] $vehRentLocInfos
     * @return self
     */
    public function setVehRentLocInfos(array $vehRentLocInfos = null)
    {
        $this->vehRentLocInfos = $vehRentLocInfos;
        return $this;
    }

    /**
     * Gets as parkLocation
     *
     * Descriptive information about where the vehicles are parked.
     *
     * @return \Recranet\OTA\Type\VehicleWhereAtFacilityType
     */
    public function getParkLocation()
    {
        return $this->parkLocation;
    }

    /**
     * Sets a new parkLocation
     *
     * Descriptive information about where the vehicles are parked.
     *
     * @param \Recranet\OTA\Type\VehicleWhereAtFacilityType $parkLocation
     * @return self
     */
    public function setParkLocation(?\Recranet\OTA\Type\VehicleWhereAtFacilityType $parkLocation = null)
    {
        $this->parkLocation = $parkLocation;
        return $this;
    }

    /**
     * Gets as counterLocation
     *
     * Descriptive information about where the rental counter is located.
     *
     * @return \Recranet\OTA\Type\VehicleWhereAtFacilityType
     */
    public function getCounterLocation()
    {
        return $this->counterLocation;
    }

    /**
     * Sets a new counterLocation
     *
     * Descriptive information about where the rental counter is located.
     *
     * @param \Recranet\OTA\Type\VehicleWhereAtFacilityType $counterLocation
     * @return self
     */
    public function setCounterLocation(?\Recranet\OTA\Type\VehicleWhereAtFacilityType $counterLocation = null)
    {
        $this->counterLocation = $counterLocation;
        return $this;
    }

    /**
     * Gets as operationSchedules
     *
     * A collection of operation schedules, used to define the hours of operation for this rental facility.
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
     * A collection of operation schedules, used to define the hours of operation for this rental facility.
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
     * Gets as shuttle
     *
     * Information on the shuttle services associated with this location. Some locations use a shuttle bus to transfer the customers from an airport terminal to the rental facility.
     *
     * @return \Recranet\OTA\Type\VehicleLocationAdditionalDetailsType\ShuttleAType
     */
    public function getShuttle()
    {
        return $this->shuttle;
    }

    /**
     * Sets a new shuttle
     *
     * Information on the shuttle services associated with this location. Some locations use a shuttle bus to transfer the customers from an airport terminal to the rental facility.
     *
     * @param \Recranet\OTA\Type\VehicleLocationAdditionalDetailsType\ShuttleAType $shuttle
     * @return self
     */
    public function setShuttle(?\Recranet\OTA\Type\VehicleLocationAdditionalDetailsType\ShuttleAType $shuttle = null)
    {
        $this->shuttle = $shuttle;
        return $this;
    }

    /**
     * Adds as oneWayDropLocation
     *
     * List of locations where one way drops are allowed based on pick-up location.
     *
     * @return self
     * @param \Recranet\OTA\Type\VehicleLocationAdditionalDetailsType\OneWayDropLocationsAType\OneWayDropLocationAType $oneWayDropLocation
     */
    public function addToOneWayDropLocations(\Recranet\OTA\Type\VehicleLocationAdditionalDetailsType\OneWayDropLocationsAType\OneWayDropLocationAType $oneWayDropLocation)
    {
        $this->oneWayDropLocations[] = $oneWayDropLocation;
        return $this;
    }

    /**
     * isset oneWayDropLocations
     *
     * List of locations where one way drops are allowed based on pick-up location.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOneWayDropLocations($index)
    {
        return isset($this->oneWayDropLocations[$index]);
    }

    /**
     * unset oneWayDropLocations
     *
     * List of locations where one way drops are allowed based on pick-up location.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOneWayDropLocations($index)
    {
        unset($this->oneWayDropLocations[$index]);
    }

    /**
     * Gets as oneWayDropLocations
     *
     * List of locations where one way drops are allowed based on pick-up location.
     *
     * @return \Recranet\OTA\Type\VehicleLocationAdditionalDetailsType\OneWayDropLocationsAType\OneWayDropLocationAType[]
     */
    public function getOneWayDropLocations()
    {
        return $this->oneWayDropLocations;
    }

    /**
     * Sets a new oneWayDropLocations
     *
     * List of locations where one way drops are allowed based on pick-up location.
     *
     * @param \Recranet\OTA\Type\VehicleLocationAdditionalDetailsType\OneWayDropLocationsAType\OneWayDropLocationAType[] $oneWayDropLocations
     * @return self
     */
    public function setOneWayDropLocations(array $oneWayDropLocations = null)
    {
        $this->oneWayDropLocations = $oneWayDropLocations;
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

