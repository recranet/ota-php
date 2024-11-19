<?php

namespace Recranet\OTA\EventReportType\GeneralEventInfoAType\FunctionSpaceInfoAType;

/**
 * Class representing LargestFunctionSpaceAType
 */
class LargestFunctionSpaceAType
{
    /**
     * Specifies the attendance at the largest function for the event.
     *
     * @var int $attendanceQuantity
     */
    private $attendanceQuantity = null;

    /**
     * When true, indicates the largest function space required a 24-hour hold (e.g., ensures a set-up is not disturbed).
     *
     * @var bool $twentyFourHourHoldInd
     */
    private $twentyFourHourHoldInd = null;

    /**
     * Indicates the arrangement of the largest function space (e.g. conference or banquet style) for this event. Refer to OpenTravel Code List Meeting Room Format Code (MRF).
     *
     * @var string $roomSetupCode
     */
    private $roomSetupCode = null;

    /**
     * The specific audio visual requirement for the largest function for this event. Refer to OpenTravel Code Table Meeting Room code (MRC).
     *
     * @var string[] $audioVisualCode
     */
    private $audioVisualCode = null;

    /**
     * Gets as attendanceQuantity
     *
     * Specifies the attendance at the largest function for the event.
     *
     * @return int
     */
    public function getAttendanceQuantity()
    {
        return $this->attendanceQuantity;
    }

    /**
     * Sets a new attendanceQuantity
     *
     * Specifies the attendance at the largest function for the event.
     *
     * @param int $attendanceQuantity
     * @return self
     */
    public function setAttendanceQuantity($attendanceQuantity)
    {
        $this->attendanceQuantity = $attendanceQuantity;
        return $this;
    }

    /**
     * Gets as twentyFourHourHoldInd
     *
     * When true, indicates the largest function space required a 24-hour hold (e.g., ensures a set-up is not disturbed).
     *
     * @return bool
     */
    public function getTwentyFourHourHoldInd()
    {
        return $this->twentyFourHourHoldInd;
    }

    /**
     * Sets a new twentyFourHourHoldInd
     *
     * When true, indicates the largest function space required a 24-hour hold (e.g., ensures a set-up is not disturbed).
     *
     * @param bool $twentyFourHourHoldInd
     * @return self
     */
    public function setTwentyFourHourHoldInd($twentyFourHourHoldInd)
    {
        $this->twentyFourHourHoldInd = $twentyFourHourHoldInd;
        return $this;
    }

    /**
     * Gets as roomSetupCode
     *
     * Indicates the arrangement of the largest function space (e.g. conference or banquet style) for this event. Refer to OpenTravel Code List Meeting Room Format Code (MRF).
     *
     * @return string
     */
    public function getRoomSetupCode()
    {
        return $this->roomSetupCode;
    }

    /**
     * Sets a new roomSetupCode
     *
     * Indicates the arrangement of the largest function space (e.g. conference or banquet style) for this event. Refer to OpenTravel Code List Meeting Room Format Code (MRF).
     *
     * @param string $roomSetupCode
     * @return self
     */
    public function setRoomSetupCode($roomSetupCode)
    {
        $this->roomSetupCode = $roomSetupCode;
        return $this;
    }

    /**
     * Adds as audioVisualCode
     *
     * The specific audio visual requirement for the largest function for this event. Refer to OpenTravel Code Table Meeting Room code (MRC).
     *
     * @return self
     * @param string $audioVisualCode
     */
    public function addToAudioVisualCode($audioVisualCode)
    {
        $this->audioVisualCode[] = $audioVisualCode;
        return $this;
    }

    /**
     * isset audioVisualCode
     *
     * The specific audio visual requirement for the largest function for this event. Refer to OpenTravel Code Table Meeting Room code (MRC).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAudioVisualCode($index)
    {
        return isset($this->audioVisualCode[$index]);
    }

    /**
     * unset audioVisualCode
     *
     * The specific audio visual requirement for the largest function for this event. Refer to OpenTravel Code Table Meeting Room code (MRC).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAudioVisualCode($index)
    {
        unset($this->audioVisualCode[$index]);
    }

    /**
     * Gets as audioVisualCode
     *
     * The specific audio visual requirement for the largest function for this event. Refer to OpenTravel Code Table Meeting Room code (MRC).
     *
     * @return string[]
     */
    public function getAudioVisualCode()
    {
        return $this->audioVisualCode;
    }

    /**
     * Sets a new audioVisualCode
     *
     * The specific audio visual requirement for the largest function for this event. Refer to OpenTravel Code Table Meeting Room code (MRC).
     *
     * @param string $audioVisualCode
     * @return self
     */
    public function setAudioVisualCode(array $audioVisualCode)
    {
        $this->audioVisualCode = $audioVisualCode;
        return $this;
    }
}

