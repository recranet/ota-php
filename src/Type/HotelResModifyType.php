<?php

namespace Recranet\OTA\Type;

/**
 * Class representing HotelResModifyType
 *
 * Full structure of a hotel reservation modification.
 * XSD Type: HotelResModifyType
 */
class HotelResModifyType
{
    /**
     * A full overlay of reservation information containing the modified data.
     *
     * @var \Recranet\OTA\Type\HotelResModifyType\HotelResModifyAType[] $hotelResModify
     */
    private $hotelResModify = [
        
    ];

    /**
     * A collection of routing hops.
     *
     * @var \Recranet\OTA\Type\RoutingHopType\RoutingHopAType[] $routingHops
     */
    private $routingHops = null;

    /**
     * To indicate a confirmation is to be sent for this batch of reservations.
     *
     * @var \Recranet\OTA\Type\WrittenConfInstType $writtenConfInst
     */
    private $writtenConfInst = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as hotelResModify
     *
     * A full overlay of reservation information containing the modified data.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelResModifyType\HotelResModifyAType $hotelResModify
     */
    public function addToHotelResModify(\Recranet\OTA\Type\HotelResModifyType\HotelResModifyAType $hotelResModify)
    {
        $this->hotelResModify[] = $hotelResModify;
        return $this;
    }

    /**
     * isset hotelResModify
     *
     * A full overlay of reservation information containing the modified data.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelResModify($index)
    {
        return isset($this->hotelResModify[$index]);
    }

    /**
     * unset hotelResModify
     *
     * A full overlay of reservation information containing the modified data.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelResModify($index)
    {
        unset($this->hotelResModify[$index]);
    }

    /**
     * Gets as hotelResModify
     *
     * A full overlay of reservation information containing the modified data.
     *
     * @return \Recranet\OTA\Type\HotelResModifyType\HotelResModifyAType[]
     */
    public function getHotelResModify()
    {
        return $this->hotelResModify;
    }

    /**
     * Sets a new hotelResModify
     *
     * A full overlay of reservation information containing the modified data.
     *
     * @param \Recranet\OTA\Type\HotelResModifyType\HotelResModifyAType[] $hotelResModify
     * @return self
     */
    public function setHotelResModify(array $hotelResModify)
    {
        $this->hotelResModify = $hotelResModify;
        return $this;
    }

    /**
     * Adds as routingHop
     *
     * A collection of routing hops.
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
     * @return \Recranet\OTA\Type\RoutingHopType\RoutingHopAType[]
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
     * @param \Recranet\OTA\Type\RoutingHopType\RoutingHopAType[] $routingHops
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
     * @return \Recranet\OTA\Type\WrittenConfInstType
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
     * @param \Recranet\OTA\Type\WrittenConfInstType $writtenConfInst
     * @return self
     */
    public function setWrittenConfInst(?\Recranet\OTA\Type\WrittenConfInstType $writtenConfInst = null)
    {
        $this->writtenConfInst = $writtenConfInst;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\Type\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\Type\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

