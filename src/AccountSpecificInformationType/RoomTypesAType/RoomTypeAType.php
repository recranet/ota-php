<?php

namespace Recranet\OTA\AccountSpecificInformationType\RoomTypesAType;

use Recranet\OTA\RoomTypeType;

/**
 * Class representing RoomTypeAType
 */
class RoomTypeAType extends RoomTypeType
{
    /**
     * A collection of room rate information.
     *
     * @var \Recranet\OTA\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType\RoomRateInfosAType\RoomRateInfoAType[] $roomRateInfos
     */
    private $roomRateInfos = null;

    /**
     * Adds as roomRateInfo
     *
     * A collection of room rate information.
     *
     * @return self
     * @param \Recranet\OTA\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType\RoomRateInfosAType\RoomRateInfoAType $roomRateInfo
     */
    public function addToRoomRateInfos(\Recranet\OTA\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType\RoomRateInfosAType\RoomRateInfoAType $roomRateInfo)
    {
        $this->roomRateInfos[] = $roomRateInfo;
        return $this;
    }

    /**
     * isset roomRateInfos
     *
     * A collection of room rate information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomRateInfos($index)
    {
        return isset($this->roomRateInfos[$index]);
    }

    /**
     * unset roomRateInfos
     *
     * A collection of room rate information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomRateInfos($index)
    {
        unset($this->roomRateInfos[$index]);
    }

    /**
     * Gets as roomRateInfos
     *
     * A collection of room rate information.
     *
     * @return \Recranet\OTA\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType\RoomRateInfosAType\RoomRateInfoAType[]
     */
    public function getRoomRateInfos()
    {
        return $this->roomRateInfos;
    }

    /**
     * Sets a new roomRateInfos
     *
     * A collection of room rate information.
     *
     * @param \Recranet\OTA\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType\RoomRateInfosAType\RoomRateInfoAType[] $roomRateInfos
     * @return self
     */
    public function setRoomRateInfos(array $roomRateInfos = null)
    {
        $this->roomRateInfos = $roomRateInfos;
        return $this;
    }
}

