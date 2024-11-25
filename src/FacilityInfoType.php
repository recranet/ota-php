<?php

namespace Recranet\OTA;

/**
 * Class representing FacilityInfoType
 *
 * The FacilityInfo class that describes the facilities provided at the hotel, including meeting rooms restaurants.
 * XSD Type: FacilityInfoType
 */
class FacilityInfoType
{
    /**
     * The date and time when this hotel information was last updated in the system.
     *
     * @var \DateTime $lastUpdated
     */
    private $lastUpdated = null;

    /**
     * Collection of meeting rooms that are comprised within the hotel.
     *
     * @var \Recranet\OTA\FacilityInfoType\MeetingRoomsAType $meetingRooms
     */
    private $meetingRooms = null;

    /**
     * Collection of guest room types that are comprised within the hotel.
     *
     * @var \Recranet\OTA\FacilityInfoType\GuestRoomsAType $guestRooms
     */
    private $guestRooms = null;

    /**
     * Collection of restaurants offered by hotel.
     *
     * @var \Recranet\OTA\RestaurantsType $restaurants
     */
    private $restaurants = null;

    /**
     * Gets as lastUpdated
     *
     * The date and time when this hotel information was last updated in the system.
     *
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }

    /**
     * Sets a new lastUpdated
     *
     * The date and time when this hotel information was last updated in the system.
     *
     * @param \DateTime $lastUpdated
     * @return self
     */
    public function setLastUpdated(\DateTime $lastUpdated)
    {
        $this->lastUpdated = $lastUpdated;
        return $this;
    }

    /**
     * Gets as meetingRooms
     *
     * Collection of meeting rooms that are comprised within the hotel.
     *
     * @return \Recranet\OTA\FacilityInfoType\MeetingRoomsAType
     */
    public function getMeetingRooms()
    {
        return $this->meetingRooms;
    }

    /**
     * Sets a new meetingRooms
     *
     * Collection of meeting rooms that are comprised within the hotel.
     *
     * @param \Recranet\OTA\FacilityInfoType\MeetingRoomsAType $meetingRooms
     * @return self
     */
    public function setMeetingRooms(?\Recranet\OTA\FacilityInfoType\MeetingRoomsAType $meetingRooms = null)
    {
        $this->meetingRooms = $meetingRooms;
        return $this;
    }

    /**
     * Gets as guestRooms
     *
     * Collection of guest room types that are comprised within the hotel.
     *
     * @return \Recranet\OTA\FacilityInfoType\GuestRoomsAType
     */
    public function getGuestRooms()
    {
        return $this->guestRooms;
    }

    /**
     * Sets a new guestRooms
     *
     * Collection of guest room types that are comprised within the hotel.
     *
     * @param \Recranet\OTA\FacilityInfoType\GuestRoomsAType $guestRooms
     * @return self
     */
    public function setGuestRooms(?\Recranet\OTA\FacilityInfoType\GuestRoomsAType $guestRooms = null)
    {
        $this->guestRooms = $guestRooms;
        return $this;
    }

    /**
     * Gets as restaurants
     *
     * Collection of restaurants offered by hotel.
     *
     * @return \Recranet\OTA\RestaurantsType
     */
    public function getRestaurants()
    {
        return $this->restaurants;
    }

    /**
     * Sets a new restaurants
     *
     * Collection of restaurants offered by hotel.
     *
     * @param \Recranet\OTA\RestaurantsType $restaurants
     * @return self
     */
    public function setRestaurants(?\Recranet\OTA\RestaurantsType $restaurants = null)
    {
        $this->restaurants = $restaurants;
        return $this;
    }
}

