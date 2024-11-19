<?php

namespace Recranet\OTA;

/**
 * Class representing VehicleRentalCoreType
 *
 * The VehicleRentalCoreType complex type identifies the data that is common, or core, to almost every transaction associated with the rental of a vehicle.
 * XSD Type: VehicleRentalCoreType
 */
class VehicleRentalCoreType
{
    /**
     * @var \DateTime $pickUpDateTime
     */
    private $pickUpDateTime = null;

    /**
     * @var \DateTime $returnDateTime
     */
    private $returnDateTime = null;

    /**
     * Used when a charge has a delayed start (e.g. if a vehicle is checked-out Sunday night, but actual charges start Monday or planned system down-time allowed a check-out before customer plans to retrieve vehicle or when an additional service is added after a rental has been started and/or will terminate before the rental is completed).
     *
     * @var \DateTime $startChargesDateTime
     */
    private $startChargesDateTime = null;

    /**
     * Used when a charge has a delayed stop (e.g. actual charges stop Sunday but the vehicle is checked-in Monday morning or if the system was down when customer returned vehicle or when an additional service is added after a rental has been started and/or will terminate before the rental is completed).
     *
     * @var \DateTime $stopChargesDateTime
     */
    private $stopChargesDateTime = null;

    /**
     * When true, indicates a one-way rental. This may also be discerned using the PickUpLocation and the ReturnLocation.
     *
     * @var bool $oneWayIndicator
     */
    private $oneWayIndicator = null;

    /**
     * Indicates the total number of rental days on all islands (e.g., if traveling for 7 days, but using a vehicle on one island for 3 days and on another for 2 days, the multi island rental days is 5).
     *
     * @var int $multiIslandRentalDays
     */
    private $multiIslandRentalDays = null;

    /**
     * Provides the distance between the pick up and return locations.
     *
     * @var int $quantity
     */
    private $quantity = null;

    /**
     * Provides the unit of measure to which the quantity refers.
     *
     * @var string $distUnitName
     */
    private $distUnitName = null;

    /**
     * A code to identify the pick up location, along with an optional code context.
     *
     * @var \Recranet\OTA\VehicleRentalCoreType\PickUpLocationAType[] $pickUpLocation
     */
    private $pickUpLocation = [
        
    ];

    /**
     * A code to identify the return location, along with an optional code context.
     *
     * @var \Recranet\OTA\VehicleRentalCoreType\ReturnLocationAType $returnLocation
     */
    private $returnLocation = null;

    /**
     * Gets as pickUpDateTime
     *
     * @return \DateTime
     */
    public function getPickUpDateTime()
    {
        return $this->pickUpDateTime;
    }

    /**
     * Sets a new pickUpDateTime
     *
     * @param \DateTime $pickUpDateTime
     * @return self
     */
    public function setPickUpDateTime(\DateTime $pickUpDateTime)
    {
        $this->pickUpDateTime = $pickUpDateTime;
        return $this;
    }

    /**
     * Gets as returnDateTime
     *
     * @return \DateTime
     */
    public function getReturnDateTime()
    {
        return $this->returnDateTime;
    }

    /**
     * Sets a new returnDateTime
     *
     * @param \DateTime $returnDateTime
     * @return self
     */
    public function setReturnDateTime(\DateTime $returnDateTime)
    {
        $this->returnDateTime = $returnDateTime;
        return $this;
    }

    /**
     * Gets as startChargesDateTime
     *
     * Used when a charge has a delayed start (e.g. if a vehicle is checked-out Sunday night, but actual charges start Monday or planned system down-time allowed a check-out before customer plans to retrieve vehicle or when an additional service is added after a rental has been started and/or will terminate before the rental is completed).
     *
     * @return \DateTime
     */
    public function getStartChargesDateTime()
    {
        return $this->startChargesDateTime;
    }

    /**
     * Sets a new startChargesDateTime
     *
     * Used when a charge has a delayed start (e.g. if a vehicle is checked-out Sunday night, but actual charges start Monday or planned system down-time allowed a check-out before customer plans to retrieve vehicle or when an additional service is added after a rental has been started and/or will terminate before the rental is completed).
     *
     * @param \DateTime $startChargesDateTime
     * @return self
     */
    public function setStartChargesDateTime(\DateTime $startChargesDateTime)
    {
        $this->startChargesDateTime = $startChargesDateTime;
        return $this;
    }

    /**
     * Gets as stopChargesDateTime
     *
     * Used when a charge has a delayed stop (e.g. actual charges stop Sunday but the vehicle is checked-in Monday morning or if the system was down when customer returned vehicle or when an additional service is added after a rental has been started and/or will terminate before the rental is completed).
     *
     * @return \DateTime
     */
    public function getStopChargesDateTime()
    {
        return $this->stopChargesDateTime;
    }

    /**
     * Sets a new stopChargesDateTime
     *
     * Used when a charge has a delayed stop (e.g. actual charges stop Sunday but the vehicle is checked-in Monday morning or if the system was down when customer returned vehicle or when an additional service is added after a rental has been started and/or will terminate before the rental is completed).
     *
     * @param \DateTime $stopChargesDateTime
     * @return self
     */
    public function setStopChargesDateTime(\DateTime $stopChargesDateTime)
    {
        $this->stopChargesDateTime = $stopChargesDateTime;
        return $this;
    }

    /**
     * Gets as oneWayIndicator
     *
     * When true, indicates a one-way rental. This may also be discerned using the PickUpLocation and the ReturnLocation.
     *
     * @return bool
     */
    public function getOneWayIndicator()
    {
        return $this->oneWayIndicator;
    }

    /**
     * Sets a new oneWayIndicator
     *
     * When true, indicates a one-way rental. This may also be discerned using the PickUpLocation and the ReturnLocation.
     *
     * @param bool $oneWayIndicator
     * @return self
     */
    public function setOneWayIndicator($oneWayIndicator)
    {
        $this->oneWayIndicator = $oneWayIndicator;
        return $this;
    }

    /**
     * Gets as multiIslandRentalDays
     *
     * Indicates the total number of rental days on all islands (e.g., if traveling for 7 days, but using a vehicle on one island for 3 days and on another for 2 days, the multi island rental days is 5).
     *
     * @return int
     */
    public function getMultiIslandRentalDays()
    {
        return $this->multiIslandRentalDays;
    }

    /**
     * Sets a new multiIslandRentalDays
     *
     * Indicates the total number of rental days on all islands (e.g., if traveling for 7 days, but using a vehicle on one island for 3 days and on another for 2 days, the multi island rental days is 5).
     *
     * @param int $multiIslandRentalDays
     * @return self
     */
    public function setMultiIslandRentalDays($multiIslandRentalDays)
    {
        $this->multiIslandRentalDays = $multiIslandRentalDays;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * Provides the distance between the pick up and return locations.
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Provides the distance between the pick up and return locations.
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as distUnitName
     *
     * Provides the unit of measure to which the quantity refers.
     *
     * @return string
     */
    public function getDistUnitName()
    {
        return $this->distUnitName;
    }

    /**
     * Sets a new distUnitName
     *
     * Provides the unit of measure to which the quantity refers.
     *
     * @param string $distUnitName
     * @return self
     */
    public function setDistUnitName($distUnitName)
    {
        $this->distUnitName = $distUnitName;
        return $this;
    }

    /**
     * Adds as pickUpLocation
     *
     * A code to identify the pick up location, along with an optional code context.
     *
     * @return self
     * @param \Recranet\OTA\VehicleRentalCoreType\PickUpLocationAType $pickUpLocation
     */
    public function addToPickUpLocation(\Recranet\OTA\VehicleRentalCoreType\PickUpLocationAType $pickUpLocation)
    {
        $this->pickUpLocation[] = $pickUpLocation;
        return $this;
    }

    /**
     * isset pickUpLocation
     *
     * A code to identify the pick up location, along with an optional code context.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPickUpLocation($index)
    {
        return isset($this->pickUpLocation[$index]);
    }

    /**
     * unset pickUpLocation
     *
     * A code to identify the pick up location, along with an optional code context.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPickUpLocation($index)
    {
        unset($this->pickUpLocation[$index]);
    }

    /**
     * Gets as pickUpLocation
     *
     * A code to identify the pick up location, along with an optional code context.
     *
     * @return \Recranet\OTA\VehicleRentalCoreType\PickUpLocationAType[]
     */
    public function getPickUpLocation()
    {
        return $this->pickUpLocation;
    }

    /**
     * Sets a new pickUpLocation
     *
     * A code to identify the pick up location, along with an optional code context.
     *
     * @param \Recranet\OTA\VehicleRentalCoreType\PickUpLocationAType[] $pickUpLocation
     * @return self
     */
    public function setPickUpLocation(array $pickUpLocation = null)
    {
        $this->pickUpLocation = $pickUpLocation;
        return $this;
    }

    /**
     * Gets as returnLocation
     *
     * A code to identify the return location, along with an optional code context.
     *
     * @return \Recranet\OTA\VehicleRentalCoreType\ReturnLocationAType
     */
    public function getReturnLocation()
    {
        return $this->returnLocation;
    }

    /**
     * Sets a new returnLocation
     *
     * A code to identify the return location, along with an optional code context.
     *
     * @param \Recranet\OTA\VehicleRentalCoreType\ReturnLocationAType $returnLocation
     * @return self
     */
    public function setReturnLocation(?\Recranet\OTA\VehicleRentalCoreType\ReturnLocationAType $returnLocation = null)
    {
        $this->returnLocation = $returnLocation;
        return $this;
    }
}

