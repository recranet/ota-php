<?php

namespace Recranet\OTA\Type\SpecialReqDetailsType\SpecialServiceRequestsAType;

use Recranet\OTA\Type\SpecialServiceRequestType;

/**
 * Class representing SpecialServiceRequestAType
 *
 * AWG to revisit.
 */
class SpecialServiceRequestAType extends SpecialServiceRequestType
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
     * Indicates the date of birth as indicated in the document, in ISO 8601 prescribed format.
     *
     * @var \DateTime $birthDate
     */
    private $birthDate = null;

    /**
     * Flight information associated to this special request, used when FlightRefNumberRPHList is not available or is different.
     *
     * @var \Recranet\OTA\Type\FlightLegType $flightLeg
     */
    private $flightLeg = null;

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
     * Gets as birthDate
     *
     * Indicates the date of birth as indicated in the document, in ISO 8601 prescribed format.
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Sets a new birthDate
     *
     * Indicates the date of birth as indicated in the document, in ISO 8601 prescribed format.
     *
     * @param \DateTime $birthDate
     * @return self
     */
    public function setBirthDate(\DateTime $birthDate)
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * Gets as flightLeg
     *
     * Flight information associated to this special request, used when FlightRefNumberRPHList is not available or is different.
     *
     * @return \Recranet\OTA\Type\FlightLegType
     */
    public function getFlightLeg()
    {
        return $this->flightLeg;
    }

    /**
     * Sets a new flightLeg
     *
     * Flight information associated to this special request, used when FlightRefNumberRPHList is not available or is different.
     *
     * @param \Recranet\OTA\Type\FlightLegType $flightLeg
     * @return self
     */
    public function setFlightLeg(?\Recranet\OTA\Type\FlightLegType $flightLeg = null)
    {
        $this->flightLeg = $flightLeg;
        return $this;
    }
}

