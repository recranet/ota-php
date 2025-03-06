<?php

namespace Recranet\OTA\Type;

/**
 * Class representing AirItineraryType
 *
 * Specifies the origin and destination of the traveler.
 * XSD Type: AirItineraryType
 */
class AirItineraryType
{
    /**
     * Identifies whether travel is: one way, return trip, circle trip, open jaw, other.
     *
     * @var string $directionInd
     */
    private $directionInd = null;

    /**
     * Air itinerary unique ID.
     *
     * @var string $airItineraryRPH
     */
    private $airItineraryRPH = null;

    /**
     * A collection of OriginDestinationOption
     *
     * @var \Recranet\OTA\Type\AirItineraryType\OriginDestinationOptionsAType\OriginDestinationOptionAType[] $originDestinationOptions
     */
    private $originDestinationOptions = null;

    /**
     * Gets as directionInd
     *
     * Identifies whether travel is: one way, return trip, circle trip, open jaw, other.
     *
     * @return string
     */
    public function getDirectionInd()
    {
        return $this->directionInd;
    }

    /**
     * Sets a new directionInd
     *
     * Identifies whether travel is: one way, return trip, circle trip, open jaw, other.
     *
     * @param string $directionInd
     * @return self
     */
    public function setDirectionInd($directionInd)
    {
        $this->directionInd = $directionInd;
        return $this;
    }

    /**
     * Gets as airItineraryRPH
     *
     * Air itinerary unique ID.
     *
     * @return string
     */
    public function getAirItineraryRPH()
    {
        return $this->airItineraryRPH;
    }

    /**
     * Sets a new airItineraryRPH
     *
     * Air itinerary unique ID.
     *
     * @param string $airItineraryRPH
     * @return self
     */
    public function setAirItineraryRPH($airItineraryRPH)
    {
        $this->airItineraryRPH = $airItineraryRPH;
        return $this;
    }

    /**
     * Adds as originDestinationOption
     *
     * A collection of OriginDestinationOption
     *
     * @return self
     * @param \Recranet\OTA\Type\AirItineraryType\OriginDestinationOptionsAType\OriginDestinationOptionAType $originDestinationOption
     */
    public function addToOriginDestinationOptions(\Recranet\OTA\Type\AirItineraryType\OriginDestinationOptionsAType\OriginDestinationOptionAType $originDestinationOption)
    {
        $this->originDestinationOptions[] = $originDestinationOption;
        return $this;
    }

    /**
     * isset originDestinationOptions
     *
     * A collection of OriginDestinationOption
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOriginDestinationOptions($index)
    {
        return isset($this->originDestinationOptions[$index]);
    }

    /**
     * unset originDestinationOptions
     *
     * A collection of OriginDestinationOption
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOriginDestinationOptions($index)
    {
        unset($this->originDestinationOptions[$index]);
    }

    /**
     * Gets as originDestinationOptions
     *
     * A collection of OriginDestinationOption
     *
     * @return \Recranet\OTA\Type\AirItineraryType\OriginDestinationOptionsAType\OriginDestinationOptionAType[]
     */
    public function getOriginDestinationOptions()
    {
        return $this->originDestinationOptions;
    }

    /**
     * Sets a new originDestinationOptions
     *
     * A collection of OriginDestinationOption
     *
     * @param \Recranet\OTA\Type\AirItineraryType\OriginDestinationOptionsAType\OriginDestinationOptionAType[] $originDestinationOptions
     * @return self
     */
    public function setOriginDestinationOptions(array $originDestinationOptions)
    {
        $this->originDestinationOptions = $originDestinationOptions;
        return $this;
    }
}

