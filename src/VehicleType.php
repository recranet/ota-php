<?php

namespace Recranet\OTA;

/**
 * Class representing VehicleType
 *
 * The VehicleType complex type identifie sthe data that fully describes a vehicle. This includes the core information along with supplemental information such as make and model, and a link to a picture.
 * XSD Type: VehicleType
 */
class VehicleType extends VehicleCoreType
{
    /**
     * Number of passengers that can be accommodated by this vehicle. This may be an exact number or may be a range, i.e., 4-5, 5-6.
     *
     * @var string $passengerQuantity
     */
    private $passengerQuantity = null;

    /**
     * Number of bags/suitcases that can be accommodated by this vehicle.
     *
     * @var int $baggageQuantity
     */
    private $baggageQuantity = null;

    /**
     * An internal car type assigned by the vendor. This is not the SIPP code.
     *
     * @var string $vendorCarType
     */
    private $vendorCarType = null;

    /**
     * Any code used to specify an item, for example, type of traveler, service code, room amenity, etc.
     *
     * @var string $code
     */
    private $code = null;

    /**
     * Identifies the source authority for the code.
     *
     * @var string $codeContext
     */
    private $codeContext = null;

    /**
     * This is the numeric value associated with the measurement.
     *
     * @var float $unitOfMeasureQuantity
     */
    private $unitOfMeasureQuantity = null;

    /**
     * This is the standard unit of measure name (e.g., it could be generic such as metric or imperial or specific such as inches, feet, yards, miles, millimeters, centimeters, meters, kilometers- according to usage).
     *
     * @var string $unitOfMeasure
     */
    private $unitOfMeasure = null;

    /**
     * The unit of measure in a code format (e.g., inches, pixels, centimeters). Refer to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @var string $unitOfMeasureCode
     */
    private $unitOfMeasureCode = null;

    /**
     * The starting value of the time span.
     *
     * @var \DateTime $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @var \DateTime $end
     */
    private $end = null;

    /**
     * Provides the units in which distance is measured, when applied to a vehicle (i.e., miles or kilometers)
     *
     * @var string $odometerUnitOfMeasure
     */
    private $odometerUnitOfMeasure = null;

    /**
     * A description of the vehicle.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * The make and model of the vehicle (e.g., Ford Focus). The Code attribute may be used for the SIPP code.
     *
     * @var \Recranet\OTA\VehicleType\VehMakeModelAType $vehMakeModel
     */
    private $vehMakeModel = null;

    /**
     * URL that identifies the location of a picture to describe this vehicle.
     *
     * @var string $pictureURL
     */
    private $pictureURL = null;

    /**
     * The specific identifiers of the vehicle (e.g., Motor Vehicle Asset Number).
     *
     * @var \Recranet\OTA\VehicleType\VehIdentityAType $vehIdentity
     */
    private $vehIdentity = null;

    /**
     * Gets as passengerQuantity
     *
     * Number of passengers that can be accommodated by this vehicle. This may be an exact number or may be a range, i.e., 4-5, 5-6.
     *
     * @return string
     */
    public function getPassengerQuantity()
    {
        return $this->passengerQuantity;
    }

    /**
     * Sets a new passengerQuantity
     *
     * Number of passengers that can be accommodated by this vehicle. This may be an exact number or may be a range, i.e., 4-5, 5-6.
     *
     * @param string $passengerQuantity
     * @return self
     */
    public function setPassengerQuantity($passengerQuantity)
    {
        $this->passengerQuantity = $passengerQuantity;
        return $this;
    }

    /**
     * Gets as baggageQuantity
     *
     * Number of bags/suitcases that can be accommodated by this vehicle.
     *
     * @return int
     */
    public function getBaggageQuantity()
    {
        return $this->baggageQuantity;
    }

    /**
     * Sets a new baggageQuantity
     *
     * Number of bags/suitcases that can be accommodated by this vehicle.
     *
     * @param int $baggageQuantity
     * @return self
     */
    public function setBaggageQuantity($baggageQuantity)
    {
        $this->baggageQuantity = $baggageQuantity;
        return $this;
    }

    /**
     * Gets as vendorCarType
     *
     * An internal car type assigned by the vendor. This is not the SIPP code.
     *
     * @return string
     */
    public function getVendorCarType()
    {
        return $this->vendorCarType;
    }

    /**
     * Sets a new vendorCarType
     *
     * An internal car type assigned by the vendor. This is not the SIPP code.
     *
     * @param string $vendorCarType
     * @return self
     */
    public function setVendorCarType($vendorCarType)
    {
        $this->vendorCarType = $vendorCarType;
        return $this;
    }

    /**
     * Gets as code
     *
     * Any code used to specify an item, for example, type of traveler, service code, room amenity, etc.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Any code used to specify an item, for example, type of traveler, service code, room amenity, etc.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as codeContext
     *
     * Identifies the source authority for the code.
     *
     * @return string
     */
    public function getCodeContext()
    {
        return $this->codeContext;
    }

    /**
     * Sets a new codeContext
     *
     * Identifies the source authority for the code.
     *
     * @param string $codeContext
     * @return self
     */
    public function setCodeContext($codeContext)
    {
        $this->codeContext = $codeContext;
        return $this;
    }

    /**
     * Gets as unitOfMeasureQuantity
     *
     * This is the numeric value associated with the measurement.
     *
     * @return float
     */
    public function getUnitOfMeasureQuantity()
    {
        return $this->unitOfMeasureQuantity;
    }

    /**
     * Sets a new unitOfMeasureQuantity
     *
     * This is the numeric value associated with the measurement.
     *
     * @param float $unitOfMeasureQuantity
     * @return self
     */
    public function setUnitOfMeasureQuantity($unitOfMeasureQuantity)
    {
        $this->unitOfMeasureQuantity = $unitOfMeasureQuantity;
        return $this;
    }

    /**
     * Gets as unitOfMeasure
     *
     * This is the standard unit of measure name (e.g., it could be generic such as metric or imperial or specific such as inches, feet, yards, miles, millimeters, centimeters, meters, kilometers- according to usage).
     *
     * @return string
     */
    public function getUnitOfMeasure()
    {
        return $this->unitOfMeasure;
    }

    /**
     * Sets a new unitOfMeasure
     *
     * This is the standard unit of measure name (e.g., it could be generic such as metric or imperial or specific such as inches, feet, yards, miles, millimeters, centimeters, meters, kilometers- according to usage).
     *
     * @param string $unitOfMeasure
     * @return self
     */
    public function setUnitOfMeasure($unitOfMeasure)
    {
        $this->unitOfMeasure = $unitOfMeasure;
        return $this;
    }

    /**
     * Gets as unitOfMeasureCode
     *
     * The unit of measure in a code format (e.g., inches, pixels, centimeters). Refer to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @return string
     */
    public function getUnitOfMeasureCode()
    {
        return $this->unitOfMeasureCode;
    }

    /**
     * Sets a new unitOfMeasureCode
     *
     * The unit of measure in a code format (e.g., inches, pixels, centimeters). Refer to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @param string $unitOfMeasureCode
     * @return self
     */
    public function setUnitOfMeasureCode($unitOfMeasureCode)
    {
        $this->unitOfMeasureCode = $unitOfMeasureCode;
        return $this;
    }

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \DateTime $start
     * @return self
     */
    public function setStart(\DateTime $start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @return \DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(\DateInterval $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \DateTime $end
     * @return self
     */
    public function setEnd(\DateTime $end)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * Gets as odometerUnitOfMeasure
     *
     * Provides the units in which distance is measured, when applied to a vehicle (i.e., miles or kilometers)
     *
     * @return string
     */
    public function getOdometerUnitOfMeasure()
    {
        return $this->odometerUnitOfMeasure;
    }

    /**
     * Sets a new odometerUnitOfMeasure
     *
     * Provides the units in which distance is measured, when applied to a vehicle (i.e., miles or kilometers)
     *
     * @param string $odometerUnitOfMeasure
     * @return self
     */
    public function setOdometerUnitOfMeasure($odometerUnitOfMeasure)
    {
        $this->odometerUnitOfMeasure = $odometerUnitOfMeasure;
        return $this;
    }

    /**
     * Gets as description
     *
     * A description of the vehicle.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A description of the vehicle.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as vehMakeModel
     *
     * The make and model of the vehicle (e.g., Ford Focus). The Code attribute may be used for the SIPP code.
     *
     * @return \Recranet\OTA\VehicleType\VehMakeModelAType
     */
    public function getVehMakeModel()
    {
        return $this->vehMakeModel;
    }

    /**
     * Sets a new vehMakeModel
     *
     * The make and model of the vehicle (e.g., Ford Focus). The Code attribute may be used for the SIPP code.
     *
     * @param \Recranet\OTA\VehicleType\VehMakeModelAType $vehMakeModel
     * @return self
     */
    public function setVehMakeModel(?\Recranet\OTA\VehicleType\VehMakeModelAType $vehMakeModel = null)
    {
        $this->vehMakeModel = $vehMakeModel;
        return $this;
    }

    /**
     * Gets as pictureURL
     *
     * URL that identifies the location of a picture to describe this vehicle.
     *
     * @return string
     */
    public function getPictureURL()
    {
        return $this->pictureURL;
    }

    /**
     * Sets a new pictureURL
     *
     * URL that identifies the location of a picture to describe this vehicle.
     *
     * @param string $pictureURL
     * @return self
     */
    public function setPictureURL($pictureURL)
    {
        $this->pictureURL = $pictureURL;
        return $this;
    }

    /**
     * Gets as vehIdentity
     *
     * The specific identifiers of the vehicle (e.g., Motor Vehicle Asset Number).
     *
     * @return \Recranet\OTA\VehicleType\VehIdentityAType
     */
    public function getVehIdentity()
    {
        return $this->vehIdentity;
    }

    /**
     * Sets a new vehIdentity
     *
     * The specific identifiers of the vehicle (e.g., Motor Vehicle Asset Number).
     *
     * @param \Recranet\OTA\VehicleType\VehIdentityAType $vehIdentity
     * @return self
     */
    public function setVehIdentity(?\Recranet\OTA\VehicleType\VehIdentityAType $vehIdentity = null)
    {
        $this->vehIdentity = $vehIdentity;
        return $this;
    }
}

