<?php

namespace Recranet\OTA\Type;

/**
 * Class representing BusInfoType
 *
 * Defines bus Information.
 * XSD Type: BusInfoType
 */
class BusInfoType
{
    /**
     * The amount of time the bus is delayed (in seconds.)
     *
     * @var int $delayTime
     */
    private $delayTime = null;

    /**
     * The schedule code for the bus. Refer to OpenTravel code list Train Schedule Code (TSC).
     *
     * @var string $scheduleCode
     */
    private $scheduleCode = null;

    /**
     * Identification and classification information of the bus.
     *
     * @var \Recranet\OTA\Type\BusIdentificationType $bus
     */
    private $bus = null;

    /**
     * The validate dates for the bus information.
     *
     * @var \Recranet\OTA\Type\BusInfoType\ValidDateAType $validDate
     */
    private $validDate = null;

    /**
     * Gets as delayTime
     *
     * The amount of time the bus is delayed (in seconds.)
     *
     * @return int
     */
    public function getDelayTime()
    {
        return $this->delayTime;
    }

    /**
     * Sets a new delayTime
     *
     * The amount of time the bus is delayed (in seconds.)
     *
     * @param int $delayTime
     * @return self
     */
    public function setDelayTime($delayTime)
    {
        $this->delayTime = $delayTime;
        return $this;
    }

    /**
     * Gets as scheduleCode
     *
     * The schedule code for the bus. Refer to OpenTravel code list Train Schedule Code (TSC).
     *
     * @return string
     */
    public function getScheduleCode()
    {
        return $this->scheduleCode;
    }

    /**
     * Sets a new scheduleCode
     *
     * The schedule code for the bus. Refer to OpenTravel code list Train Schedule Code (TSC).
     *
     * @param string $scheduleCode
     * @return self
     */
    public function setScheduleCode($scheduleCode)
    {
        $this->scheduleCode = $scheduleCode;
        return $this;
    }

    /**
     * Gets as bus
     *
     * Identification and classification information of the bus.
     *
     * @return \Recranet\OTA\Type\BusIdentificationType
     */
    public function getBus()
    {
        return $this->bus;
    }

    /**
     * Sets a new bus
     *
     * Identification and classification information of the bus.
     *
     * @param \Recranet\OTA\Type\BusIdentificationType $bus
     * @return self
     */
    public function setBus(\Recranet\OTA\Type\BusIdentificationType $bus)
    {
        $this->bus = $bus;
        return $this;
    }

    /**
     * Gets as validDate
     *
     * The validate dates for the bus information.
     *
     * @return \Recranet\OTA\Type\BusInfoType\ValidDateAType
     */
    public function getValidDate()
    {
        return $this->validDate;
    }

    /**
     * Sets a new validDate
     *
     * The validate dates for the bus information.
     *
     * @param \Recranet\OTA\Type\BusInfoType\ValidDateAType $validDate
     * @return self
     */
    public function setValidDate(?\Recranet\OTA\Type\BusInfoType\ValidDateAType $validDate = null)
    {
        $this->validDate = $validDate;
        return $this;
    }
}

