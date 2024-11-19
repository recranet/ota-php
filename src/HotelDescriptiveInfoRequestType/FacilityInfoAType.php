<?php

namespace Recranet\OTA\HotelDescriptiveInfoRequestType;

/**
 * Class representing FacilityInfoAType
 */
class FacilityInfoAType
{
    /**
     * Send this data. "True" means send the data.
     *
     * @var bool $sendMeetingRooms
     */
    private $sendMeetingRooms = null;

    /**
     * Send this data. "True" means send the data.
     *
     * @var bool $sendGuestRooms
     */
    private $sendGuestRooms = null;

    /**
     * Send this data. "True" means send the data.
     *
     * @var bool $sendRestaurants
     */
    private $sendRestaurants = null;

    /**
     * Gets as sendMeetingRooms
     *
     * Send this data. "True" means send the data.
     *
     * @return bool
     */
    public function getSendMeetingRooms()
    {
        return $this->sendMeetingRooms;
    }

    /**
     * Sets a new sendMeetingRooms
     *
     * Send this data. "True" means send the data.
     *
     * @param bool $sendMeetingRooms
     * @return self
     */
    public function setSendMeetingRooms($sendMeetingRooms)
    {
        $this->sendMeetingRooms = $sendMeetingRooms;
        return $this;
    }

    /**
     * Gets as sendGuestRooms
     *
     * Send this data. "True" means send the data.
     *
     * @return bool
     */
    public function getSendGuestRooms()
    {
        return $this->sendGuestRooms;
    }

    /**
     * Sets a new sendGuestRooms
     *
     * Send this data. "True" means send the data.
     *
     * @param bool $sendGuestRooms
     * @return self
     */
    public function setSendGuestRooms($sendGuestRooms)
    {
        $this->sendGuestRooms = $sendGuestRooms;
        return $this;
    }

    /**
     * Gets as sendRestaurants
     *
     * Send this data. "True" means send the data.
     *
     * @return bool
     */
    public function getSendRestaurants()
    {
        return $this->sendRestaurants;
    }

    /**
     * Sets a new sendRestaurants
     *
     * Send this data. "True" means send the data.
     *
     * @param bool $sendRestaurants
     * @return self
     */
    public function setSendRestaurants($sendRestaurants)
    {
        $this->sendRestaurants = $sendRestaurants;
        return $this;
    }
}

