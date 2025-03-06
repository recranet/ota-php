<?php

namespace Recranet\OTA\Type;

/**
 * Class representing OriginDestinationOptionType
 *
 * A container for flight segments.
 * XSD Type: OriginDestinationOptionType
 */
class OriginDestinationOptionType
{
    /**
     * A container for necessary data to describe one or more legs of a single flight number.
     *
     * @var \Recranet\OTA\Type\OriginDestinationOptionType\FlightSegmentAType[] $flightSegment
     */
    private $flightSegment = [
        
    ];

    /**
     * Adds as flightSegment
     *
     * A container for necessary data to describe one or more legs of a single flight number.
     *
     * @return self
     * @param \Recranet\OTA\Type\OriginDestinationOptionType\FlightSegmentAType $flightSegment
     */
    public function addToFlightSegment(\Recranet\OTA\Type\OriginDestinationOptionType\FlightSegmentAType $flightSegment)
    {
        $this->flightSegment[] = $flightSegment;
        return $this;
    }

    /**
     * isset flightSegment
     *
     * A container for necessary data to describe one or more legs of a single flight number.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFlightSegment($index)
    {
        return isset($this->flightSegment[$index]);
    }

    /**
     * unset flightSegment
     *
     * A container for necessary data to describe one or more legs of a single flight number.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFlightSegment($index)
    {
        unset($this->flightSegment[$index]);
    }

    /**
     * Gets as flightSegment
     *
     * A container for necessary data to describe one or more legs of a single flight number.
     *
     * @return \Recranet\OTA\Type\OriginDestinationOptionType\FlightSegmentAType[]
     */
    public function getFlightSegment()
    {
        return $this->flightSegment;
    }

    /**
     * Sets a new flightSegment
     *
     * A container for necessary data to describe one or more legs of a single flight number.
     *
     * @param \Recranet\OTA\Type\OriginDestinationOptionType\FlightSegmentAType[] $flightSegment
     * @return self
     */
    public function setFlightSegment(array $flightSegment)
    {
        $this->flightSegment = $flightSegment;
        return $this;
    }
}

