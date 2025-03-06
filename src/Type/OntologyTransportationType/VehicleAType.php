<?php

namespace Recranet\OTA\Type\OntologyTransportationType;

/**
 * Class representing VehicleAType
 */
class VehicleAType
{
    /**
     * Vehicle class.
     * Example: Compact
     *
     * @var \Recranet\OTA\Type\OntologyTransportationType\VehicleAType\ClassAType $class
     */
    private $class = null;

    /**
     * Vehicle make.
     * Example: Ford
     *
     * @var \Recranet\OTA\Type\OntologyTransportationType\VehicleAType\MakeAType $make
     */
    private $make = null;

    /**
     * Vehicle model.
     * Example: Focus
     *
     * @var \Recranet\OTA\Type\OntologyTransportationType\VehicleAType\ModelAType $model
     */
    private $model = null;

    /**
     * Gets as class
     *
     * Vehicle class.
     * Example: Compact
     *
     * @return \Recranet\OTA\Type\OntologyTransportationType\VehicleAType\ClassAType
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
     * @param \Recranet\OTA\Type\OntologyTransportationType\VehicleAType\ClassAType $class
     * @return self
     */
    public function setClass(?\Recranet\OTA\Type\OntologyTransportationType\VehicleAType\ClassAType $class = null)
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
     * @return \Recranet\OTA\Type\OntologyTransportationType\VehicleAType\MakeAType
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
     * @param \Recranet\OTA\Type\OntologyTransportationType\VehicleAType\MakeAType $make
     * @return self
     */
    public function setMake(?\Recranet\OTA\Type\OntologyTransportationType\VehicleAType\MakeAType $make = null)
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
     * @return \Recranet\OTA\Type\OntologyTransportationType\VehicleAType\ModelAType
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
     * @param \Recranet\OTA\Type\OntologyTransportationType\VehicleAType\ModelAType $model
     * @return self
     */
    public function setModel(?\Recranet\OTA\Type\OntologyTransportationType\VehicleAType\ModelAType $model = null)
    {
        $this->model = $model;
        return $this;
    }
}

