<?php

namespace Recranet\OTA\Type\CodeListScheduleType;

/**
 * Class representing OperationTimesAType
 */
class OperationTimesAType
{
    /**
     * Provides operating times of a facility.
     *
     * @var \Recranet\OTA\Type\CodeListScheduleType\OperationTimesAType\OperationTimeAType[] $operationTime
     */
    private $operationTime = [
        
    ];

    /**
     * Adds as operationTime
     *
     * Provides operating times of a facility.
     *
     * @return self
     * @param \Recranet\OTA\Type\CodeListScheduleType\OperationTimesAType\OperationTimeAType $operationTime
     */
    public function addToOperationTime(\Recranet\OTA\Type\CodeListScheduleType\OperationTimesAType\OperationTimeAType $operationTime)
    {
        $this->operationTime[] = $operationTime;
        return $this;
    }

    /**
     * isset operationTime
     *
     * Provides operating times of a facility.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOperationTime($index)
    {
        return isset($this->operationTime[$index]);
    }

    /**
     * unset operationTime
     *
     * Provides operating times of a facility.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOperationTime($index)
    {
        unset($this->operationTime[$index]);
    }

    /**
     * Gets as operationTime
     *
     * Provides operating times of a facility.
     *
     * @return \Recranet\OTA\Type\CodeListScheduleType\OperationTimesAType\OperationTimeAType[]
     */
    public function getOperationTime()
    {
        return $this->operationTime;
    }

    /**
     * Sets a new operationTime
     *
     * Provides operating times of a facility.
     *
     * @param \Recranet\OTA\Type\CodeListScheduleType\OperationTimesAType\OperationTimeAType[] $operationTime
     * @return self
     */
    public function setOperationTime(array $operationTime)
    {
        $this->operationTime = $operationTime;
        return $this;
    }
}

