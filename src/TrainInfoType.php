<?php

namespace Recranet\OTA;

/**
 * Class representing TrainInfoType
 *
 * Defines train Information.
 * XSD Type: TrainInfoType
 */
class TrainInfoType
{
    /**
     * Delayed time in seconds.
     *
     * @var mixed $delayTime
     */
    private $delayTime = null;

    /**
     * The schedule code for the train. Refer to OpenTravel code list Train Schedule Code (TSC).
     *
     * @var string $scheduleCode
     */
    private $scheduleCode = null;

    /**
     * Identification and classification information of the train.
     *
     * @var \Recranet\OTA\TrainIdentificationType $train
     */
    private $train = null;

    /**
     * The period for which this train information is valid.
     *
     * @var \Recranet\OTA\TrainInfoType\ValidDateAType $validDate
     */
    private $validDate = null;

    /**
     * Gets as delayTime
     *
     * Delayed time in seconds.
     *
     * @return mixed
     */
    public function getDelayTime()
    {
        return $this->delayTime;
    }

    /**
     * Sets a new delayTime
     *
     * Delayed time in seconds.
     *
     * @param mixed $delayTime
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
     * The schedule code for the train. Refer to OpenTravel code list Train Schedule Code (TSC).
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
     * The schedule code for the train. Refer to OpenTravel code list Train Schedule Code (TSC).
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
     * Gets as train
     *
     * Identification and classification information of the train.
     *
     * @return \Recranet\OTA\TrainIdentificationType
     */
    public function getTrain()
    {
        return $this->train;
    }

    /**
     * Sets a new train
     *
     * Identification and classification information of the train.
     *
     * @param \Recranet\OTA\TrainIdentificationType $train
     * @return self
     */
    public function setTrain(\Recranet\OTA\TrainIdentificationType $train)
    {
        $this->train = $train;
        return $this;
    }

    /**
     * Gets as validDate
     *
     * The period for which this train information is valid.
     *
     * @return \Recranet\OTA\TrainInfoType\ValidDateAType
     */
    public function getValidDate()
    {
        return $this->validDate;
    }

    /**
     * Sets a new validDate
     *
     * The period for which this train information is valid.
     *
     * @param \Recranet\OTA\TrainInfoType\ValidDateAType $validDate
     * @return self
     */
    public function setValidDate(?\Recranet\OTA\TrainInfoType\ValidDateAType $validDate = null)
    {
        $this->validDate = $validDate;
        return $this;
    }
}

