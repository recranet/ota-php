<?php

namespace Recranet\OTA\FacilityInfoType;

use Recranet\OTA\MeetingRoomsType;

/**
 * Class representing MeetingRoomsAType
 */
class MeetingRoomsAType extends MeetingRoomsType
{
    /**
     * Collection of coded information that is applicable to all meeting rooms.
     *
     * @var \Recranet\OTA\MeetingRoomCodeType[] $codes
     */
    private $codes = null;

    /**
     * Adds as code
     *
     * Collection of coded information that is applicable to all meeting rooms.
     *
     * @return self
     * @param \Recranet\OTA\MeetingRoomCodeType $code
     */
    public function addToCodes(\Recranet\OTA\MeetingRoomCodeType $code)
    {
        $this->codes[] = $code;
        return $this;
    }

    /**
     * isset codes
     *
     * Collection of coded information that is applicable to all meeting rooms.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCodes($index)
    {
        return isset($this->codes[$index]);
    }

    /**
     * unset codes
     *
     * Collection of coded information that is applicable to all meeting rooms.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCodes($index)
    {
        unset($this->codes[$index]);
    }

    /**
     * Gets as codes
     *
     * Collection of coded information that is applicable to all meeting rooms.
     *
     * @return \Recranet\OTA\MeetingRoomCodeType[]
     */
    public function getCodes()
    {
        return $this->codes;
    }

    /**
     * Sets a new codes
     *
     * Collection of coded information that is applicable to all meeting rooms.
     *
     * @param \Recranet\OTA\MeetingRoomCodeType[] $codes
     * @return self
     */
    public function setCodes(array $codes = null)
    {
        $this->codes = $codes;
        return $this;
    }
}

