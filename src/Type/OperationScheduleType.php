<?php

namespace Recranet\OTA\Type;

/**
 * Class representing OperationScheduleType
 *
 * Details of an operating schedule (e.g. a golf tee time may be more expensive during peak hours v. off peak hours).
 * XSD Type: OperationScheduleType
 */
class OperationScheduleType
{
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
     * A collection of OperationTimes.
     *
     * @var \Recranet\OTA\Type\OperationScheduleType\OperationTimesAType\OperationTimeAType[] $operationTimes
     */
    private $operationTimes = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

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
     * Adds as operationTime
     *
     * A collection of OperationTimes.
     *
     * @return self
     * @param \Recranet\OTA\Type\OperationScheduleType\OperationTimesAType\OperationTimeAType $operationTime
     */
    public function addToOperationTimes(\Recranet\OTA\Type\OperationScheduleType\OperationTimesAType\OperationTimeAType $operationTime)
    {
        $this->operationTimes[] = $operationTime;
        return $this;
    }

    /**
     * isset operationTimes
     *
     * A collection of OperationTimes.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOperationTimes($index)
    {
        return isset($this->operationTimes[$index]);
    }

    /**
     * unset operationTimes
     *
     * A collection of OperationTimes.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOperationTimes($index)
    {
        unset($this->operationTimes[$index]);
    }

    /**
     * Gets as operationTimes
     *
     * A collection of OperationTimes.
     *
     * @return \Recranet\OTA\Type\OperationScheduleType\OperationTimesAType\OperationTimeAType[]
     */
    public function getOperationTimes()
    {
        return $this->operationTimes;
    }

    /**
     * Sets a new operationTimes
     *
     * A collection of OperationTimes.
     *
     * @param \Recranet\OTA\Type\OperationScheduleType\OperationTimesAType\OperationTimeAType[] $operationTimes
     * @return self
     */
    public function setOperationTimes(array $operationTimes = null)
    {
        $this->operationTimes = $operationTimes;
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

