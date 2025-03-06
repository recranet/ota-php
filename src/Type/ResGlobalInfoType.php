<?php

namespace Recranet\OTA\Type;

/**
 * Class representing ResGlobalInfoType
 *
 * ResGlobalInfo is a container for various information that affects the Reservation as a whole. These include global comments, counts, reservation IDs, loyalty programs, and payment methods.
 * XSD Type: ResGlobalInfoType
 */
class ResGlobalInfoType extends ResCommonDetailType
{
    /**
     * @var \Recranet\OTA\Type\HotelReservationIDsType\HotelReservationIDAType[] $hotelReservationIDs
     */
    private $hotelReservationIDs = null;

    /**
     * A collection of RoutingHop objects. This details the path that the original request or notification traveled.
     *
     * @var \Recranet\OTA\Type\RoutingHopType\RoutingHopAType[] $routingHops
     */
    private $routingHops = null;

    /**
     * @var \Recranet\OTA\Type\ProfilesType\ProfileInfoAType[] $profiles
     */
    private $profiles = null;

    /**
     * Provides booking rules for the global reservation.
     *
     * @var \Recranet\OTA\Type\BookingRulesType\BookingRuleAType[] $bookingRules
     */
    private $bookingRules = null;

    /**
     * Description: The total commission for all rate segments in the reservation.
     *
     * @var \Recranet\OTA\Type\CommissionType $totalCommissions
     */
    private $totalCommissions = null;

    /**
     * Adds as hotelReservationID
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelReservationIDsType\HotelReservationIDAType $hotelReservationID
     */
    public function addToHotelReservationIDs(\Recranet\OTA\Type\HotelReservationIDsType\HotelReservationIDAType $hotelReservationID)
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
     * @return \Recranet\OTA\Type\HotelReservationIDsType\HotelReservationIDAType[]
     */
    public function getHotelReservationIDs()
    {
        return $this->hotelReservationIDs;
    }

    /**
     * Sets a new hotelReservationIDs
     *
     * @param \Recranet\OTA\Type\HotelReservationIDsType\HotelReservationIDAType[] $hotelReservationIDs
     * @return self
     */
    public function setHotelReservationIDs(array $hotelReservationIDs = null)
    {
        $this->hotelReservationIDs = $hotelReservationIDs;
        return $this;
    }

    /**
     * Adds as routingHop
     *
     * A collection of RoutingHop objects. This details the path that the original request or notification traveled.
     *
     * @return self
     * @param \Recranet\OTA\Type\RoutingHopType\RoutingHopAType $routingHop
     */
    public function addToRoutingHops(\Recranet\OTA\Type\RoutingHopType\RoutingHopAType $routingHop)
    {
        $this->routingHops[] = $routingHop;
        return $this;
    }

    /**
     * isset routingHops
     *
     * A collection of RoutingHop objects. This details the path that the original request or notification traveled.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoutingHops($index)
    {
        return isset($this->routingHops[$index]);
    }

    /**
     * unset routingHops
     *
     * A collection of RoutingHop objects. This details the path that the original request or notification traveled.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoutingHops($index)
    {
        unset($this->routingHops[$index]);
    }

    /**
     * Gets as routingHops
     *
     * A collection of RoutingHop objects. This details the path that the original request or notification traveled.
     *
     * @return \Recranet\OTA\Type\RoutingHopType\RoutingHopAType[]
     */
    public function getRoutingHops()
    {
        return $this->routingHops;
    }

    /**
     * Sets a new routingHops
     *
     * A collection of RoutingHop objects. This details the path that the original request or notification traveled.
     *
     * @param \Recranet\OTA\Type\RoutingHopType\RoutingHopAType[] $routingHops
     * @return self
     */
    public function setRoutingHops(array $routingHops = null)
    {
        $this->routingHops = $routingHops;
        return $this;
    }

    /**
     * Adds as profileInfo
     *
     * @return self
     * @param \Recranet\OTA\Type\ProfilesType\ProfileInfoAType $profileInfo
     */
    public function addToProfiles(\Recranet\OTA\Type\ProfilesType\ProfileInfoAType $profileInfo)
    {
        $this->profiles[] = $profileInfo;
        return $this;
    }

    /**
     * isset profiles
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProfiles($index)
    {
        return isset($this->profiles[$index]);
    }

    /**
     * unset profiles
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProfiles($index)
    {
        unset($this->profiles[$index]);
    }

    /**
     * Gets as profiles
     *
     * @return \Recranet\OTA\Type\ProfilesType\ProfileInfoAType[]
     */
    public function getProfiles()
    {
        return $this->profiles;
    }

    /**
     * Sets a new profiles
     *
     * @param \Recranet\OTA\Type\ProfilesType\ProfileInfoAType[] $profiles
     * @return self
     */
    public function setProfiles(array $profiles = null)
    {
        $this->profiles = $profiles;
        return $this;
    }

    /**
     * Adds as bookingRule
     *
     * Provides booking rules for the global reservation.
     *
     * @return self
     * @param \Recranet\OTA\Type\BookingRulesType\BookingRuleAType $bookingRule
     */
    public function addToBookingRules(\Recranet\OTA\Type\BookingRulesType\BookingRuleAType $bookingRule)
    {
        $this->bookingRules[] = $bookingRule;
        return $this;
    }

    /**
     * isset bookingRules
     *
     * Provides booking rules for the global reservation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBookingRules($index)
    {
        return isset($this->bookingRules[$index]);
    }

    /**
     * unset bookingRules
     *
     * Provides booking rules for the global reservation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBookingRules($index)
    {
        unset($this->bookingRules[$index]);
    }

    /**
     * Gets as bookingRules
     *
     * Provides booking rules for the global reservation.
     *
     * @return \Recranet\OTA\Type\BookingRulesType\BookingRuleAType[]
     */
    public function getBookingRules()
    {
        return $this->bookingRules;
    }

    /**
     * Sets a new bookingRules
     *
     * Provides booking rules for the global reservation.
     *
     * @param \Recranet\OTA\Type\BookingRulesType\BookingRuleAType[] $bookingRules
     * @return self
     */
    public function setBookingRules(array $bookingRules = null)
    {
        $this->bookingRules = $bookingRules;
        return $this;
    }

    /**
     * Gets as totalCommissions
     *
     * Description: The total commission for all rate segments in the reservation.
     *
     * @return \Recranet\OTA\Type\CommissionType
     */
    public function getTotalCommissions()
    {
        return $this->totalCommissions;
    }

    /**
     * Sets a new totalCommissions
     *
     * Description: The total commission for all rate segments in the reservation.
     *
     * @param \Recranet\OTA\Type\CommissionType $totalCommissions
     * @return self
     */
    public function setTotalCommissions(?\Recranet\OTA\Type\CommissionType $totalCommissions = null)
    {
        $this->totalCommissions = $totalCommissions;
        return $this;
    }
}

