<?php

namespace Recranet\OTA;

/**
 * Class representing HotelReservationsType
 *
 * A collection of hotel reservations.
 * XSD Type: HotelReservationsType
 */
class HotelReservationsType
{
    /**
     * Contains a hotel reservation.
     *
     * @var \Recranet\OTA\HotelReservationsType\HotelReservationAType[] $hotelReservation
     */
    private $hotelReservation = [
        
    ];

    /**
     * A collection of routing hops.
     *
     * @var \Recranet\OTA\RoutingHopType\RoutingHopAType[] $routingHops
     */
    private $routingHops = null;

    /**
     * To indicate a confirmation is to be sent for this batch of reservations.
     *
     * @var \Recranet\OTA\WrittenConfInstType $writtenConfInst
     */
    private $writtenConfInst = null;

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as hotelReservation
     *
     * Contains a hotel reservation.
     *
     * @return self
     * @param \Recranet\OTA\HotelReservationsType\HotelReservationAType $hotelReservation
     */
    public function addToHotelReservation(\Recranet\OTA\HotelReservationsType\HotelReservationAType $hotelReservation)
    {
        $this->hotelReservation[] = $hotelReservation;
        return $this;
    }

    /**
     * isset hotelReservation
     *
     * Contains a hotel reservation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelReservation($index)
    {
        return isset($this->hotelReservation[$index]);
    }

    /**
     * unset hotelReservation
     *
     * Contains a hotel reservation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelReservation($index)
    {
        unset($this->hotelReservation[$index]);
    }

    /**
     * Gets as hotelReservation
     *
     * Contains a hotel reservation.
     *
     * @return \Recranet\OTA\HotelReservationsType\HotelReservationAType[]
     */
    public function getHotelReservation()
    {
        return $this->hotelReservation;
    }

    /**
     * Sets a new hotelReservation
     *
     * Contains a hotel reservation.
     *
     * @param \Recranet\OTA\HotelReservationsType\HotelReservationAType[] $hotelReservation
     * @return self
     */
    public function setHotelReservation(array $hotelReservation)
    {
        $this->hotelReservation = $hotelReservation;
        return $this;
    }

    /**
     * Adds as routingHop
     *
     * A collection of routing hops.
     *
     * @return self
     * @param \Recranet\OTA\RoutingHopType\RoutingHopAType $routingHop
     */
    public function addToRoutingHops(\Recranet\OTA\RoutingHopType\RoutingHopAType $routingHop)
    {
        $this->routingHops[] = $routingHop;
        return $this;
    }

    /**
     * isset routingHops
     *
     * A collection of routing hops.
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
     * A collection of routing hops.
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
     * A collection of routing hops.
     *
     * @return \Recranet\OTA\RoutingHopType\RoutingHopAType[]
     */
    public function getRoutingHops()
    {
        return $this->routingHops;
    }

    /**
     * Sets a new routingHops
     *
     * A collection of routing hops.
     *
     * @param \Recranet\OTA\RoutingHopType\RoutingHopAType[] $routingHops
     * @return self
     */
    public function setRoutingHops(array $routingHops = null)
    {
        $this->routingHops = $routingHops;
        return $this;
    }

    /**
     * Gets as writtenConfInst
     *
     * To indicate a confirmation is to be sent for this batch of reservations.
     *
     * @return \Recranet\OTA\WrittenConfInstType
     */
    public function getWrittenConfInst()
    {
        return $this->writtenConfInst;
    }

    /**
     * Sets a new writtenConfInst
     *
     * To indicate a confirmation is to be sent for this batch of reservations.
     *
     * @param \Recranet\OTA\WrittenConfInstType $writtenConfInst
     * @return self
     */
    public function setWrittenConfInst(?\Recranet\OTA\WrittenConfInstType $writtenConfInst = null)
    {
        $this->writtenConfInst = $writtenConfInst;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

