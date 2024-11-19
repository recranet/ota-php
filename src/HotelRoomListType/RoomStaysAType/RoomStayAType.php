<?php

namespace Recranet\OTA\HotelRoomListType\RoomStaysAType;

use Recranet\OTA\RoomStayType;

/**
 * Class representing RoomStayAType
 */
class RoomStayAType extends RoomStayType
{
    /**
     * This attribute indicates the change to the reservation.
     *
     * @var string $roomStay
     */
    private $roomStay = null;

    /**
     * @var \Recranet\OTA\HotelReservationIDsType\HotelReservationIDAType[] $hotelReservationIDs
     */
    private $hotelReservationIDs = null;

    /**
     * Collection of shared rooms for room stay.
     *
     * @var \Recranet\OTA\RoomSharesType\RoomShareAType[] $roomShares
     */
    private $roomShares = null;

    /**
     * Provides a mechanism for uniquely identifying a room stay (e.g. this would be useful for a modification).
     *
     * @var \Recranet\OTA\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * @var \Recranet\OTA\SuccessType $success
     */
    private $success = null;

    /**
     * @var \Recranet\OTA\WarningType[] $warnings
     */
    private $warnings = null;

    /**
     * @var \Recranet\OTA\ErrorType[] $errors
     */
    private $errors = null;

    /**
     * Gets as roomStay
     *
     * This attribute indicates the change to the reservation.
     *
     * @return string
     */
    public function getRoomStay()
    {
        return $this->roomStay;
    }

    /**
     * Sets a new roomStay
     *
     * This attribute indicates the change to the reservation.
     *
     * @param string $roomStay
     * @return self
     */
    public function setRoomStay($roomStay)
    {
        $this->roomStay = $roomStay;
        return $this;
    }

    /**
     * Adds as hotelReservationID
     *
     * @return self
     * @param \Recranet\OTA\HotelReservationIDsType\HotelReservationIDAType $hotelReservationID
     */
    public function addToHotelReservationIDs(\Recranet\OTA\HotelReservationIDsType\HotelReservationIDAType $hotelReservationID)
    {
        $this->hotelReservationIDs[] = $hotelReservationID;
        return $this;
    }

    /**
     * isset hotelReservationIDs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelReservationIDs($index)
    {
        return isset($this->hotelReservationIDs[$index]);
    }

    /**
     * unset hotelReservationIDs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelReservationIDs($index)
    {
        unset($this->hotelReservationIDs[$index]);
    }

    /**
     * Gets as hotelReservationIDs
     *
     * @return \Recranet\OTA\HotelReservationIDsType\HotelReservationIDAType[]
     */
    public function getHotelReservationIDs()
    {
        return $this->hotelReservationIDs;
    }

    /**
     * Sets a new hotelReservationIDs
     *
     * @param \Recranet\OTA\HotelReservationIDsType\HotelReservationIDAType[] $hotelReservationIDs
     * @return self
     */
    public function setHotelReservationIDs(array $hotelReservationIDs = null)
    {
        $this->hotelReservationIDs = $hotelReservationIDs;
        return $this;
    }

    /**
     * Adds as roomShare
     *
     * Collection of shared rooms for room stay.
     *
     * @return self
     * @param \Recranet\OTA\RoomSharesType\RoomShareAType $roomShare
     */
    public function addToRoomShares(\Recranet\OTA\RoomSharesType\RoomShareAType $roomShare)
    {
        $this->roomShares[] = $roomShare;
        return $this;
    }

    /**
     * isset roomShares
     *
     * Collection of shared rooms for room stay.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomShares($index)
    {
        return isset($this->roomShares[$index]);
    }

    /**
     * unset roomShares
     *
     * Collection of shared rooms for room stay.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomShares($index)
    {
        unset($this->roomShares[$index]);
    }

    /**
     * Gets as roomShares
     *
     * Collection of shared rooms for room stay.
     *
     * @return \Recranet\OTA\RoomSharesType\RoomShareAType[]
     */
    public function getRoomShares()
    {
        return $this->roomShares;
    }

    /**
     * Sets a new roomShares
     *
     * Collection of shared rooms for room stay.
     *
     * @param \Recranet\OTA\RoomSharesType\RoomShareAType[] $roomShares
     * @return self
     */
    public function setRoomShares(array $roomShares = null)
    {
        $this->roomShares = $roomShares;
        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * Provides a mechanism for uniquely identifying a room stay (e.g. this would be useful for a modification).
     *
     * @return \Recranet\OTA\UniqueIDType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * Provides a mechanism for uniquely identifying a room stay (e.g. this would be useful for a modification).
     *
     * @param \Recranet\OTA\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(?\Recranet\OTA\UniqueIDType $uniqueID = null)
    {
        $this->uniqueID = $uniqueID;
        return $this;
    }

    /**
     * Gets as success
     *
     * @return \Recranet\OTA\SuccessType
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * Sets a new success
     *
     * @param \Recranet\OTA\SuccessType $success
     * @return self
     */
    public function setSuccess(?\Recranet\OTA\SuccessType $success = null)
    {
        $this->success = $success;
        return $this;
    }

    /**
     * Adds as warning
     *
     * @return self
     * @param \Recranet\OTA\WarningType $warning
     */
    public function addToWarnings(\Recranet\OTA\WarningType $warning)
    {
        $this->warnings[] = $warning;
        return $this;
    }

    /**
     * isset warnings
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWarnings($index)
    {
        return isset($this->warnings[$index]);
    }

    /**
     * unset warnings
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWarnings($index)
    {
        unset($this->warnings[$index]);
    }

    /**
     * Gets as warnings
     *
     * @return \Recranet\OTA\WarningType[]
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    /**
     * Sets a new warnings
     *
     * @param \Recranet\OTA\WarningType[] $warnings
     * @return self
     */
    public function setWarnings(array $warnings = null)
    {
        $this->warnings = $warnings;
        return $this;
    }

    /**
     * Adds as error
     *
     * @return self
     * @param \Recranet\OTA\ErrorType $error
     */
    public function addToErrors(\Recranet\OTA\ErrorType $error)
    {
        $this->errors[] = $error;
        return $this;
    }

    /**
     * isset errors
     *
     * @param int|string $index
     * @return bool
     */
    public function issetErrors($index)
    {
        return isset($this->errors[$index]);
    }

    /**
     * unset errors
     *
     * @param int|string $index
     * @return void
     */
    public function unsetErrors($index)
    {
        unset($this->errors[$index]);
    }

    /**
     * Gets as errors
     *
     * @return \Recranet\OTA\ErrorType[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Sets a new errors
     *
     * @param \Recranet\OTA\ErrorType[] $errors
     * @return self
     */
    public function setErrors(array $errors = null)
    {
        $this->errors = $errors;
        return $this;
    }
}

