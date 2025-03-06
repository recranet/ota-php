<?php

namespace Recranet\OTA\Type;

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
     * @var \Recranet\OTA\Type\FacilityInfoType\MeetingRoomsAType $meetingRooms
     */
    private $meetingRooms = null;

    /**
     * Collection of guest room types that are comprised within the hotel.
     *
     * @var \Recranet\OTA\Type\FacilityInfoType\GuestRoomsAType $guestRooms
     */
    private $guestRooms = null;

    /**
     * Collection of restaurants offered by hotel.
     *
     * @var \Recranet\OTA\Type\RestaurantsType $restaurants
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
     * @return \Recranet\OTA\Type\FacilityInfoType\MeetingRoomsAType
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
     * @param \Recranet\OTA\Type\FacilityInfoType\MeetingRoomsAType $meetingRooms
     * @return self
     */
    public function setMeetingRooms(?\Recranet\OTA\Type\FacilityInfoType\MeetingRoomsAType $meetingRooms = null)
    {
        $this->meetingRooms = $meetingRooms;
        return $this;
    }

    /**
     * Gets as guestRooms
     *
     * Collection of guest room types that are comprised within the hotel.
     *
     * @return \Recranet\OTA\Type\FacilityInfoType\GuestRoomsAType
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
     * @param \Recranet\OTA\Type\FacilityInfoType\GuestRoomsAType $guestRooms
     * @return self
     */
    public function setGuestRooms(?\Recranet\OTA\Type\FacilityInfoType\GuestRoomsAType $guestRooms = null)
    {
        $this->guestRooms = $guestRooms;
        return $this;
    }

    /**
     * Gets as restaurants
     *
     * Collection of restaurants offered by hotel.
     *
     * @return \Recranet\OTA\Type\RestaurantsType
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
     * @param \Recranet\OTA\Type\RestaurantsType $restaurants
     * @return self
     */
    public function setRestaurants(?\Recranet\OTA\Type\RestaurantsType $restaurants = null)
    {
        $this->restaurants = $restaurants;
        return $this;
    }
}

