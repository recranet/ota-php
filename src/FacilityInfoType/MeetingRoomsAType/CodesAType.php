<?php

namespace Recranet\OTA\FacilityInfoType\MeetingRoomsAType;

/**
 * Class representing CodesAType
 */
class CodesAType
{
    /**
     * Coded information that is applicable to all meeting rooms.
     *
     * @var \Recranet\OTA\MeetingRoomCodeType[] $code
     */
    private $code = [
        
    ];

    /**
     * Adds as code
     *
     * Coded information that is applicable to all meeting rooms.
     *
     * @return self
     * @param \Recranet\OTA\MeetingRoomCodeType $code
     */
    public function addToCode(\Recranet\OTA\MeetingRoomCodeType $code)
    {
        $this->code[] = $code;
        return $this;
    }

    /**
     * isset code
     *
     * Coded information that is applicable to all meeting rooms.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCode($index)
    {
        return isset($this->code[$index]);
    }

    /**
     * unset code
     *
     * Coded information that is applicable to all meeting rooms.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCode($index)
    {
        unset($this->code[$index]);
    }

    /**
     * Gets as code
     *
     * Coded information that is applicable to all meeting rooms.
     *
     * @return \Recranet\OTA\MeetingRoomCodeType[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Coded information that is applicable to all meeting rooms.
     *
     * @param \Recranet\OTA\MeetingRoomCodeType[] $code
     * @return self
     */
    public function setCode(array $code)
    {
        $this->code = $code;
        return $this;
    }
}

