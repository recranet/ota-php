<?php

namespace Recranet\OTA\Type\RailReservationType\ItineraryAType;

/**
 * Class representing OriginAndDestinationAType
 */
class OriginAndDestinationAType
{
    /**
     * Travel Origin Location - for example, air uses the IATA 3 letter code.
     *
     * @var \Recranet\OTA\Type\LocationType $originLocation
     */
    private $originLocation = null;

    /**
     * Travel Destination Location - for example, air uses the IATA 3 letter code.
     *
     * @var \Recranet\OTA\Type\LocationType $destinationLocation
     */
    private $destinationLocation = null;

    /**
     * Full details on one specific train segment, including the origin and destination locations for this segment, equipment used, services offered, etc.
     *
     * @var \Recranet\OTA\Type\BookedTrainSegmentType[] $trainSegment
     */
    private $trainSegment = [
        
    ];

    /**
     * Gets as originLocation
     *
     * Travel Origin Location - for example, air uses the IATA 3 letter code.
     *
     * @return \Recranet\OTA\Type\LocationType
     */
    public function getOriginLocation()
    {
        return $this->originLocation;
    }

    /**
     * Sets a new originLocation
     *
     * Travel Origin Location - for example, air uses the IATA 3 letter code.
     *
     * @param \Recranet\OTA\Type\LocationType $originLocation
     * @return self
     */
    public function setOriginLocation(\Recranet\OTA\Type\LocationType $originLocation)
    {
        $this->originLocation = $originLocation;
        return $this;
    }

    /**
     * Gets as destinationLocation
     *
     * Travel Destination Location - for example, air uses the IATA 3 letter code.
     *
     * @return \Recranet\OTA\Type\LocationType
     */
    public function getDestinationLocation()
    {
        return $this->destinationLocation;
    }

    /**
     * Sets a new destinationLocation
     *
     * Travel Destination Location - for example, air uses the IATA 3 letter code.
     *
     * @param \Recranet\OTA\Type\LocationType $destinationLocation
     * @return self
     */
    public function setDestinationLocation(\Recranet\OTA\Type\LocationType $destinationLocation)
    {
        $this->destinationLocation = $destinationLocation;
        return $this;
    }

    /**
     * Adds as trainSegment
     *
     * Full details on one specific train segment, including the origin and destination locations for this segment, equipment used, services offered, etc.
     *
     * @return self
     * @param \Recranet\OTA\Type\BookedTrainSegmentType $trainSegment
     */
    public function addToTrainSegment(\Recranet\OTA\Type\BookedTrainSegmentType $trainSegment)
    {
        $this->trainSegment[] = $trainSegment;
        return $this;
    }

    /**
     * isset trainSegment
     *
     * Full details on one specific train segment, including the origin and destination locations for this segment, equipment used, services offered, etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTrainSegment($index)
    {
        return isset($this->trainSegment[$index]);
    }

    /**
     * unset trainSegment
     *
     * Full details on one specific train segment, including the origin and destination locations for this segment, equipment used, services offered, etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTrainSegment($index)
    {
        unset($this->trainSegment[$index]);
    }

    /**
     * Gets as trainSegment
     *
     * Full details on one specific train segment, including the origin and destination locations for this segment, equipment used, services offered, etc.
     *
     * @return \Recranet\OTA\Type\BookedTrainSegmentType[]
     */
    public function getTrainSegment()
    {
        return $this->trainSegment;
    }

    /**
     * Sets a new trainSegment
     *
     * Full details on one specific train segment, including the origin and destination locations for this segment, equipment used, services offered, etc.
     *
     * @param \Recranet\OTA\Type\BookedTrainSegmentType[] $trainSegment
     * @return self
     */
    public function setTrainSegment(array $trainSegment)
    {
        $this->trainSegment = $trainSegment;
        return $this;
    }
}

