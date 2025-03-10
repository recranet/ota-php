<?php

namespace Recranet\OTA\Type\SpecialReqDetailsType\SeatRequestsAType;

use Recranet\OTA\Type\SeatRequestType;

/**
 * Class representing SeatRequestAType
 *
 * AWG to revisit.
 */
class SeatRequestAType extends SeatRequestType
{
    /**
     * One or more travelers to whom this request applies.
     *
     * @var string[] $travelerRefNumberRPHList
     */
    private $travelerRefNumberRPHList = null;

    /**
     * One or more flights to whom this request applies.
     *
     * @var string[] $flightRefNumberRPHList
     */
    private $flightRefNumberRPHList = null;

    /**
     * When true, the carrier supports partial seating. When false, the carrier does not support partial seating.
     *
     * @var bool $partialSeatingInd
     */
    private $partialSeatingInd = null;

    /**
     * Adds as travelerRefNumberRPHList
     *
     * One or more travelers to whom this request applies.
     *
     * @return self
     * @param string $travelerRefNumberRPHList
     */
    public function addToTravelerRefNumberRPHList($travelerRefNumberRPHList)
    {
        $this->travelerRefNumberRPHList[] = $travelerRefNumberRPHList;
        return $this;
    }

    /**
     * isset travelerRefNumberRPHList
     *
     * One or more travelers to whom this request applies.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTravelerRefNumberRPHList($index)
    {
        return isset($this->travelerRefNumberRPHList[$index]);
    }

    /**
     * unset travelerRefNumberRPHList
     *
     * One or more travelers to whom this request applies.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTravelerRefNumberRPHList($index)
    {
        unset($this->travelerRefNumberRPHList[$index]);
    }

    /**
     * Gets as travelerRefNumberRPHList
     *
     * One or more travelers to whom this request applies.
     *
     * @return string[]
     */
    public function getTravelerRefNumberRPHList()
    {
        return $this->travelerRefNumberRPHList;
    }

    /**
     * Sets a new travelerRefNumberRPHList
     *
     * One or more travelers to whom this request applies.
     *
     * @param string $travelerRefNumberRPHList
     * @return self
     */
    public function setTravelerRefNumberRPHList(array $travelerRefNumberRPHList)
    {
        $this->travelerRefNumberRPHList = $travelerRefNumberRPHList;
        return $this;
    }

    /**
     * Adds as flightRefNumberRPHList
     *
     * One or more flights to whom this request applies.
     *
     * @return self
     * @param string $flightRefNumberRPHList
     */
    public function addToFlightRefNumberRPHList($flightRefNumberRPHList)
    {
        $this->flightRefNumberRPHList[] = $flightRefNumberRPHList;
        return $this;
    }

    /**
     * isset flightRefNumberRPHList
     *
     * One or more flights to whom this request applies.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFlightRefNumberRPHList($index)
    {
        return isset($this->flightRefNumberRPHList[$index]);
    }

    /**
     * unset flightRefNumberRPHList
     *
     * One or more flights to whom this request applies.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFlightRefNumberRPHList($index)
    {
        unset($this->flightRefNumberRPHList[$index]);
    }

    /**
     * Gets as flightRefNumberRPHList
     *
     * One or more flights to whom this request applies.
     *
     * @return string[]
     */
    public function getFlightRefNumberRPHList()
    {
        return $this->flightRefNumberRPHList;
    }

    /**
     * Sets a new flightRefNumberRPHList
     *
     * One or more flights to whom this request applies.
     *
     * @param string $flightRefNumberRPHList
     * @return self
     */
    public function setFlightRefNumberRPHList(array $flightRefNumberRPHList)
    {
        $this->flightRefNumberRPHList = $flightRefNumberRPHList;
        return $this;
    }

    /**
     * Gets as partialSeatingInd
     *
     * When true, the carrier supports partial seating. When false, the carrier does not support partial seating.
     *
     * @return bool
     */
    public function getPartialSeatingInd()
    {
        return $this->partialSeatingInd;
    }

    /**
     * Sets a new partialSeatingInd
     *
     * When true, the carrier supports partial seating. When false, the carrier does not support partial seating.
     *
     * @param bool $partialSeatingInd
     * @return self
     */
    public function setPartialSeatingInd($partialSeatingInd)
    {
        $this->partialSeatingInd = $partialSeatingInd;
        return $this;
    }
}

