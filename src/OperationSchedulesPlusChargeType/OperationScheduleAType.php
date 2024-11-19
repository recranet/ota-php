<?php

namespace Recranet\OTA\OperationSchedulesPlusChargeType;

use Recranet\OTA\OperationSchedulePlusChargeType;

/**
 * Class representing OperationScheduleAType
 */
class OperationScheduleAType extends OperationSchedulePlusChargeType
{
    /**
     * Used to provide a name for a sub-operation (e.g. an activity or event).
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Gets as name
     *
     * Used to provide a name for a sub-operation (e.g. an activity or event).
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
     * Used to provide a name for a sub-operation (e.g. an activity or event).
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}

