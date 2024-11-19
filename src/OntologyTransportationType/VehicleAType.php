<?php

namespace Recranet\OTA\OntologyTransportationType;

/**
 * Class representing VehicleAType
 */
class VehicleAType
{
    /**
     * Vehicle class.
     * Example: Compact
     *
     * @var \Recranet\OTA\OntologyTransportationType\VehicleAType\ClassAType $class
     */
    private $class = null;

    /**
     * Vehicle make.
     * Example: Ford
     *
     * @var \Recranet\OTA\OntologyTransportationType\VehicleAType\MakeAType $make
     */
    private $make = null;

    /**
     * Vehicle model.
     * Example: Focus
     *
     * @var \Recranet\OTA\OntologyTransportationType\VehicleAType\ModelAType $model
     */
    private $model = null;

    /**
     * Gets as class
     *
     * Vehicle class.
     * Example: Compact
     *
     * @return \Recranet\OTA\OntologyTransportationType\VehicleAType\ClassAType
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Sets a new class
     *
     * Vehicle class.
     * Example: Compact
     *
     * @param \Recranet\OTA\OntologyTransportationType\VehicleAType\ClassAType $class
     * @return self
     */
    public function setClass(?\Recranet\OTA\OntologyTransportationType\VehicleAType\ClassAType $class = null)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * Gets as make
     *
     * Vehicle make.
     * Example: Ford
     *
     * @return \Recranet\OTA\OntologyTransportationType\VehicleAType\MakeAType
     */
    public function getMake()
    {
        return $this->make;
    }

    /**
     * Sets a new make
     *
     * Vehicle make.
     * Example: Ford
     *
     * @param \Recranet\OTA\OntologyTransportationType\VehicleAType\MakeAType $make
     * @return self
     */
    public function setMake(?\Recranet\OTA\OntologyTransportationType\VehicleAType\MakeAType $make = null)
    {
        $this->make = $make;
        return $this;
    }

    /**
     * Gets as model
     *
     * Vehicle model.
     * Example: Focus
     *
     * @return \Recranet\OTA\OntologyTransportationType\VehicleAType\ModelAType
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Sets a new model
     *
     * Vehicle model.
     * Example: Focus
     *
     * @param \Recranet\OTA\OntologyTransportationType\VehicleAType\ModelAType $model
     * @return self
     */
    public function setModel(?\Recranet\OTA\OntologyTransportationType\VehicleAType\ModelAType $model = null)
    {
        $this->model = $model;
        return $this;
    }
}

