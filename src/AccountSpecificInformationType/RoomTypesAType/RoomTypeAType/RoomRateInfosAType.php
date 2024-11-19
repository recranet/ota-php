<?php

namespace Recranet\OTA\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType;

/**
 * Class representing RoomRateInfosAType
 */
class RoomRateInfosAType
{
    /**
     * Descibes room rate information. This may include information on the negotiated rate as well as inforrmation on other rates offered by the hotel.
     *
     * @var \Recranet\OTA\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType\RoomRateInfosAType\RoomRateInfoAType[] $roomRateInfo
     */
    private $roomRateInfo = [
        
    ];

    /**
     * Adds as roomRateInfo
     *
     * Descibes room rate information. This may include information on the negotiated rate as well as inforrmation on other rates offered by the hotel.
     *
     * @return self
     * @param \Recranet\OTA\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType\RoomRateInfosAType\RoomRateInfoAType $roomRateInfo
     */
    public function addToRoomRateInfo(\Recranet\OTA\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType\RoomRateInfosAType\RoomRateInfoAType $roomRateInfo)
    {
        $this->roomRateInfo[] = $roomRateInfo;
        return $this;
    }

    /**
     * isset roomRateInfo
     *
     * Descibes room rate information. This may include information on the negotiated rate as well as inforrmation on other rates offered by the hotel.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomRateInfo($index)
    {
        return isset($this->roomRateInfo[$index]);
    }

    /**
     * unset roomRateInfo
     *
     * Descibes room rate information. This may include information on the negotiated rate as well as inforrmation on other rates offered by the hotel.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomRateInfo($index)
    {
        unset($this->roomRateInfo[$index]);
    }

    /**
     * Gets as roomRateInfo
     *
     * Descibes room rate information. This may include information on the negotiated rate as well as inforrmation on other rates offered by the hotel.
     *
     * @return \Recranet\OTA\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType\RoomRateInfosAType\RoomRateInfoAType[]
     */
    public function getRoomRateInfo()
    {
        return $this->roomRateInfo;
    }

    /**
     * Sets a new roomRateInfo
     *
     * Descibes room rate information. This may include information on the negotiated rate as well as inforrmation on other rates offered by the hotel.
     *
     * @param \Recranet\OTA\AccountSpecificInformationType\RoomTypesAType\RoomTypeAType\RoomRateInfosAType\RoomRateInfoAType[] $roomRateInfo
     * @return self
     */
    public function setRoomRateInfo(array $roomRateInfo)
    {
        $this->roomRateInfo = $roomRateInfo;
        return $this;
    }
}

