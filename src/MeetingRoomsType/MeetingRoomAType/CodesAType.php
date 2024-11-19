<?php

namespace Recranet\OTA\MeetingRoomsType\MeetingRoomAType;

/**
 * Class representing CodesAType
 */
class CodesAType
{
    /**
     * @var \Recranet\OTA\MeetingRoomCodeType[] $code
     */
    private $code = [
        
    ];

    /**
     * Adds as code
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
     * @return \Recranet\OTA\MeetingRoomCodeType[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
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
