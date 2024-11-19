<?php

namespace Recranet\OTA;

/**
 * Class representing InvBlockCodeRefType
 *
 * Used to return the inventory block codes and inventory block grouping codes from the inventory system back to the requesting system.
 * XSD Type: InvBlockCodeRefType
 */
class InvBlockCodeRefType
{
    /**
     * Identifies the inventory block; code assigned by the originator of the request message.
     *
     * @var string $invBlockCode
     */
    private $invBlockCode = null;

    /**
     * Identifies the inventory block group; code assigned by the originator of the request message.
     *
     * @var string $invBlockGroupingCode
     */
    private $invBlockGroupingCode = null;

    /**
     * The InvBlockCode assigned by the inventory system in response to an inventory block notification.
     *
     * @var string $invSystemInvBlockCode
     */
    private $invSystemInvBlockCode = null;

    /**
     * The InvBlockGroupingCode assigned by the inventory system in response to an inventory block notification.
     *
     * @var string $invSystemInvBlockGroupingCode
     */
    private $invSystemInvBlockGroupingCode = null;

    /**
     * @var \Recranet\OTA\InvBlockCodeRefType\HotelRefAType $hotelRef
     */
    private $hotelRef = null;

    /**
     * Gets as invBlockCode
     *
     * Identifies the inventory block; code assigned by the originator of the request message.
     *
     * @return string
     */
    public function getInvBlockCode()
    {
        return $this->invBlockCode;
    }

    /**
     * Sets a new invBlockCode
     *
     * Identifies the inventory block; code assigned by the originator of the request message.
     *
     * @param string $invBlockCode
     * @return self
     */
    public function setInvBlockCode($invBlockCode)
    {
        $this->invBlockCode = $invBlockCode;
        return $this;
    }

    /**
     * Gets as invBlockGroupingCode
     *
     * Identifies the inventory block group; code assigned by the originator of the request message.
     *
     * @return string
     */
    public function getInvBlockGroupingCode()
    {
        return $this->invBlockGroupingCode;
    }

    /**
     * Sets a new invBlockGroupingCode
     *
     * Identifies the inventory block group; code assigned by the originator of the request message.
     *
     * @param string $invBlockGroupingCode
     * @return self
     */
    public function setInvBlockGroupingCode($invBlockGroupingCode)
    {
        $this->invBlockGroupingCode = $invBlockGroupingCode;
        return $this;
    }

    /**
     * Gets as invSystemInvBlockCode
     *
     * The InvBlockCode assigned by the inventory system in response to an inventory block notification.
     *
     * @return string
     */
    public function getInvSystemInvBlockCode()
    {
        return $this->invSystemInvBlockCode;
    }

    /**
     * Sets a new invSystemInvBlockCode
     *
     * The InvBlockCode assigned by the inventory system in response to an inventory block notification.
     *
     * @param string $invSystemInvBlockCode
     * @return self
     */
    public function setInvSystemInvBlockCode($invSystemInvBlockCode)
    {
        $this->invSystemInvBlockCode = $invSystemInvBlockCode;
        return $this;
    }

    /**
     * Gets as invSystemInvBlockGroupingCode
     *
     * The InvBlockGroupingCode assigned by the inventory system in response to an inventory block notification.
     *
     * @return string
     */
    public function getInvSystemInvBlockGroupingCode()
    {
        return $this->invSystemInvBlockGroupingCode;
    }

    /**
     * Sets a new invSystemInvBlockGroupingCode
     *
     * The InvBlockGroupingCode assigned by the inventory system in response to an inventory block notification.
     *
     * @param string $invSystemInvBlockGroupingCode
     * @return self
     */
    public function setInvSystemInvBlockGroupingCode($invSystemInvBlockGroupingCode)
    {
        $this->invSystemInvBlockGroupingCode = $invSystemInvBlockGroupingCode;
        return $this;
    }

    /**
     * Gets as hotelRef
     *
     * @return \Recranet\OTA\InvBlockCodeRefType\HotelRefAType
     */
    public function getHotelRef()
    {
        return $this->hotelRef;
    }

    /**
     * Sets a new hotelRef
     *
     * @param \Recranet\OTA\InvBlockCodeRefType\HotelRefAType $hotelRef
     * @return self
     */
    public function setHotelRef(?\Recranet\OTA\InvBlockCodeRefType\HotelRefAType $hotelRef = null)
    {
        $this->hotelRef = $hotelRef;
        return $this;
    }
}

