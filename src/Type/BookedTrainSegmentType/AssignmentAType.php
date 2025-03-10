<?php

namespace Recranet\OTA\Type\BookedTrainSegmentType;

use Recranet\OTA\Type\AccommodationServiceType;

/**
 * Class representing AssignmentAType
 */
class AssignmentAType extends AccommodationServiceType
{
    /**
     * Reference to Passenger Category RPH
     *
     * @var string $travelerRPH
     */
    private $travelerRPH = null;

    /**
     * Gets as travelerRPH
     *
     * Reference to Passenger Category RPH
     *
     * @return string
     */
    public function getTravelerRPH()
    {
        return $this->travelerRPH;
    }

    /**
     * Sets a new travelerRPH
     *
     * Reference to Passenger Category RPH
     *
     * @param string $travelerRPH
     * @return self
     */
    public function setTravelerRPH($travelerRPH)
    {
        $this->travelerRPH = $travelerRPH;
        return $this;
    }
}

