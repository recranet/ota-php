<?php

namespace Recranet\OTA;

/**
 * Class representing VehiclePrefType
 *
 * The VehiclePrefType complex type defines the information that is used when defining a preference of a vehicle.
 * XSD Type: VehiclePrefType
 */
class VehiclePrefType extends VehicleCoreType
{
    /**
     * @var string $typePref
     */
    private $typePref = null;

    /**
     * @var string $classPref
     */
    private $classPref = null;

    /**
     * @var string $airConditionPref
     */
    private $airConditionPref = null;

    /**
     * @var string $transmissionPref
     */
    private $transmissionPref = null;

    /**
     * An internal car type assigned by the vendor. This is not the SIPP code.
     *
     * @var string $vendorCarType
     */
    private $vendorCarType = null;

    /**
     * The total number of cars a customer is eventually interested in reserving. This is not used by suppliers and is in no way intended to imply that multiple cars may be booked in a single reservation.
     *
     * @var int $vehicleQty
     */
    private $vehicleQty = null;

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
     * The make and model of the vehicle (e.g., Ford Focus). The Code attribute may be used for the SIPP code.
     *
     * @var \Recranet\OTA\VehiclePrefType\VehMakeModelAType $vehMakeModel
     */
    private $vehMakeModel = null;

    /**
     * Gets as typePref
     *
     * @return string
     */
    public function getTypePref()
    {
        return $this->typePref;
    }

    /**
     * Sets a new typePref
     *
     * @param string $typePref
     * @return self
     */
    public function setTypePref($typePref)
    {
        $this->typePref = $typePref;
        return $this;
    }

    /**
     * Gets as classPref
     *
     * @return string
     */
    public function getClassPref()
    {
        return $this->classPref;
    }

    /**
     * Sets a new classPref
     *
     * @param string $classPref
     * @return self
     */
    public function setClassPref($classPref)
    {
        $this->classPref = $classPref;
        return $this;
    }

    /**
     * Gets as airConditionPref
     *
     * @return string
     */
    public function getAirConditionPref()
    {
        return $this->airConditionPref;
    }

    /**
     * Sets a new airConditionPref
     *
     * @param string $airConditionPref
     * @return self
     */
    public function setAirConditionPref($airConditionPref)
    {
        $this->airConditionPref = $airConditionPref;
        return $this;
    }

    /**
     * Gets as transmissionPref
     *
     * @return string
     */
    public function getTransmissionPref()
    {
        return $this->transmissionPref;
    }

    /**
     * Sets a new transmissionPref
     *
     * @param string $transmissionPref
     * @return self
     */
    public function setTransmissionPref($transmissionPref)
    {
        $this->transmissionPref = $transmissionPref;
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
     * Gets as vehicleQty
     *
     * The total number of cars a customer is eventually interested in reserving. This is not used by suppliers and is in no way intended to imply that multiple cars may be booked in a single reservation.
     *
     * @return int
     */
    public function getVehicleQty()
    {
        return $this->vehicleQty;
    }

    /**
     * Sets a new vehicleQty
     *
     * The total number of cars a customer is eventually interested in reserving. This is not used by suppliers and is in no way intended to imply that multiple cars may be booked in a single reservation.
     *
     * @param int $vehicleQty
     * @return self
     */
    public function setVehicleQty($vehicleQty)
    {
        $this->vehicleQty = $vehicleQty;
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
     * Gets as vehMakeModel
     *
     * The make and model of the vehicle (e.g., Ford Focus). The Code attribute may be used for the SIPP code.
     *
     * @return \Recranet\OTA\VehiclePrefType\VehMakeModelAType
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
     * @param \Recranet\OTA\VehiclePrefType\VehMakeModelAType $vehMakeModel
     * @return self
     */
    public function setVehMakeModel(?\Recranet\OTA\VehiclePrefType\VehMakeModelAType $vehMakeModel = null)
    {
        $this->vehMakeModel = $vehMakeModel;
        return $this;
    }
}

