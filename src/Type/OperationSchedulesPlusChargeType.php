<?php

namespace Recranet\OTA\Type;

/**
 * Class representing OperationSchedulesPlusChargeType
 *
 * The OperationSchedule class defines the dates and hours of operation in addition the charges that may apply.
 * XSD Type: OperationSchedulesPlusChargeType
 */
class OperationSchedulesPlusChargeType
{
    /**
     * The OperationSchedule class defines details the dates and hours of operation.
     *
     * @var \Recranet\OTA\Type\OperationSchedulesPlusChargeType\OperationScheduleAType[] $operationSchedule
     */
    private $operationSchedule = [
        
    ];

    /**
     * Adds as operationSchedule
     *
     * The OperationSchedule class defines details the dates and hours of operation.
     *
     * @return self
     * @param \Recranet\OTA\Type\OperationSchedulesPlusChargeType\OperationScheduleAType $operationSchedule
     */
    public function addToOperationSchedule(\Recranet\OTA\Type\OperationSchedulesPlusChargeType\OperationScheduleAType $operationSchedule)
    {
        $this->operationSchedule[] = $operationSchedule;
        return $this;
    }

    /**
     * isset operationSchedule
     *
     * The OperationSchedule class defines details the dates and hours of operation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOperationSchedule($index)
    {
        return isset($this->operationSchedule[$index]);
    }

    /**
     * unset operationSchedule
     *
     * The OperationSchedule class defines details the dates and hours of operation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOperationSchedule($index)
    {
        unset($this->operationSchedule[$index]);
    }

    /**
     * Gets as operationSchedule
     *
     * The OperationSchedule class defines details the dates and hours of operation.
     *
     * @return \Recranet\OTA\Type\OperationSchedulesPlusChargeType\OperationScheduleAType[]
     */
    public function getOperationSchedule()
    {
        return $this->operationSchedule;
    }

    /**
     * Sets a new operationSchedule
     *
     * The OperationSchedule class defines details the dates and hours of operation.
     *
     * @param \Recranet\OTA\Type\OperationSchedulesPlusChargeType\OperationScheduleAType[] $operationSchedule
     * @return self
     */
    public function setOperationSchedule(array $operationSchedule = null)
    {
        $this->operationSchedule = $operationSchedule;
        return $this;
    }
}

