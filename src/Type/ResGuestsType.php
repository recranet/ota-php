<?php

namespace Recranet\OTA\Type;

/**
 * Class representing ResGuestsType
 *
 * A collection of ResGuest objects, identifying the guests associated with this reservation. Which guests are in which room is determined by each RoomStays ResGuestRPHs collection.
 * XSD Type: ResGuestsType
 */
class ResGuestsType
{
    /**
     * The ResGuest object contains the information about a guest associated with a reservation.
     *
     * @var \Recranet\OTA\Type\ResGuestType[] $resGuest
     */
    private $resGuest = [
        
    ];

    /**
     * Adds as resGuest
     *
     * The ResGuest object contains the information about a guest associated with a reservation.
     *
     * @return self
     * @param \Recranet\OTA\Type\ResGuestType $resGuest
     */
    public function addToResGuest(\Recranet\OTA\Type\ResGuestType $resGuest)
    {
        $this->resGuest[] = $resGuest;
        return $this;
    }

    /**
     * isset resGuest
     *
     * The ResGuest object contains the information about a guest associated with a reservation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResGuest($index)
    {
        return isset($this->resGuest[$index]);
    }

    /**
     * unset resGuest
     *
     * The ResGuest object contains the information about a guest associated with a reservation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResGuest($index)
    {
        unset($this->resGuest[$index]);
    }

    /**
     * Gets as resGuest
     *
     * The ResGuest object contains the information about a guest associated with a reservation.
     *
     * @return \Recranet\OTA\Type\ResGuestType[]
     */
    public function getResGuest()
    {
        return $this->resGuest;
    }

    /**
     * Sets a new resGuest
     *
     * The ResGuest object contains the information about a guest associated with a reservation.
     *
     * @param \Recranet\OTA\Type\ResGuestType[] $resGuest
     * @return self
     */
    public function setResGuest(array $resGuest)
    {
        $this->resGuest = $resGuest;
        return $this;
    }
}

