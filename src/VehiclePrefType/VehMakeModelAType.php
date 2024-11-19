<?php

namespace Recranet\OTA\VehiclePrefType;

/**
 * Class representing VehMakeModelAType
 */
class VehMakeModelAType
{
    /**
     * The name of an item.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Provides the code identifying the item.
     *
     * @var string $code
     */
    private $code = null;

    /**
     * The model year of the vehicle.
     *
     * @var int $modelYear
     */
    private $modelYear = null;

    /**
     * Gets as name
     *
     * The name of an item.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of an item.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as code
     *
     * Provides the code identifying the item.
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
     * Provides the code identifying the item.
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
     * Gets as modelYear
     *
     * The model year of the vehicle.
     *
     * @return int
     */
    public function getModelYear()
    {
        return $this->modelYear;
    }

    /**
     * Sets a new modelYear
     *
     * The model year of the vehicle.
     *
     * @param int $modelYear
     * @return self
     */
    public function setModelYear($modelYear)
    {
        $this->modelYear = $modelYear;
        return $this;
    }
}

