<?php

namespace Recranet\OTA;

/**
 * Class representing SeatZoneDetailType
 *
 * Detailed information related to a zone of seating.
 * XSD Type: SeatZoneDetailType
 */
class SeatZoneDetailType
{
    /**
     * The unique seat zone ID.
     *
     * @var string $iD
     */
    private $iD = null;

    /**
     * The unique seat zone number or code.
     *
     * @var string $code
     */
    private $code = null;

    /**
     * The name of the seat zone.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * The seat zone description.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * The total quantity of seats in the seat zone, including both available and reserved seats.
     *
     * @var int $totalSeatQty
     */
    private $totalSeatQty = null;

    /**
     * Seat zone seat details, including seat type, total quantity and available quantity.
     *
     * @var \Recranet\OTA\SeatZoneDetailType\SeatTypeDetailAType[] $seatTypeDetail
     */
    private $seatTypeDetail = [
        
    ];

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as iD
     *
     * The unique seat zone ID.
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * The unique seat zone ID.
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as code
     *
     * The unique seat zone number or code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * The unique seat zone number or code.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as name
     *
     * The name of the seat zone.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of the seat zone.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as description
     *
     * The seat zone description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * The seat zone description.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as totalSeatQty
     *
     * The total quantity of seats in the seat zone, including both available and reserved seats.
     *
     * @return int
     */
    public function getTotalSeatQty()
    {
        return $this->totalSeatQty;
    }

    /**
     * Sets a new totalSeatQty
     *
     * The total quantity of seats in the seat zone, including both available and reserved seats.
     *
     * @param int $totalSeatQty
     * @return self
     */
    public function setTotalSeatQty($totalSeatQty)
    {
        $this->totalSeatQty = $totalSeatQty;
        return $this;
    }

    /**
     * Adds as seatTypeDetail
     *
     * Seat zone seat details, including seat type, total quantity and available quantity.
     *
     * @return self
     * @param \Recranet\OTA\SeatZoneDetailType\SeatTypeDetailAType $seatTypeDetail
     */
    public function addToSeatTypeDetail(\Recranet\OTA\SeatZoneDetailType\SeatTypeDetailAType $seatTypeDetail)
    {
        $this->seatTypeDetail[] = $seatTypeDetail;
        return $this;
    }

    /**
     * isset seatTypeDetail
     *
     * Seat zone seat details, including seat type, total quantity and available quantity.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSeatTypeDetail($index)
    {
        return isset($this->seatTypeDetail[$index]);
    }

    /**
     * unset seatTypeDetail
     *
     * Seat zone seat details, including seat type, total quantity and available quantity.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSeatTypeDetail($index)
    {
        unset($this->seatTypeDetail[$index]);
    }

    /**
     * Gets as seatTypeDetail
     *
     * Seat zone seat details, including seat type, total quantity and available quantity.
     *
     * @return \Recranet\OTA\SeatZoneDetailType\SeatTypeDetailAType[]
     */
    public function getSeatTypeDetail()
    {
        return $this->seatTypeDetail;
    }

    /**
     * Sets a new seatTypeDetail
     *
     * Seat zone seat details, including seat type, total quantity and available quantity.
     *
     * @param \Recranet\OTA\SeatZoneDetailType\SeatTypeDetailAType[] $seatTypeDetail
     * @return self
     */
    public function setSeatTypeDetail(array $seatTypeDetail = null)
    {
        $this->seatTypeDetail = $seatTypeDetail;
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

