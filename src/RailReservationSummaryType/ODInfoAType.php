<?php

namespace Recranet\OTA\RailReservationSummaryType;

/**
 * Class representing ODInfoAType
 */
class ODInfoAType
{
    /**
     * The travel origin location.
     *
     * @var \Recranet\OTA\LocationType $originLocation
     */
    private $originLocation = null;

    /**
     * The travel destination location.
     *
     * @var \Recranet\OTA\LocationType $destinationLocation
     */
    private $destinationLocation = null;

    /**
     * A collection of train segments that provide journey information from origin to destination. Each segment has full details on one specific train segment, including the origin and destination locations for this segment, the requested class of service, and the operating company, if appropriate.
     *
     * @var \Recranet\OTA\RailReservationSummaryType\ODInfoAType\TrainSegmentAType[] $trainSegment
     */
    private $trainSegment = [
        
    ];

    /**
     * Gets as originLocation
     *
     * The travel origin location.
     *
     * @return \Recranet\OTA\LocationType
     */
    public function getOriginLocation()
    {
        return $this->originLocation;
    }

    /**
     * Sets a new originLocation
     *
     * The travel origin location.
     *
     * @param \Recranet\OTA\LocationType $originLocation
     * @return self
     */
    public function setOriginLocation(\Recranet\OTA\LocationType $originLocation)
    {
        $this->originLocation = $originLocation;
        return $this;
    }

    /**
     * Gets as destinationLocation
     *
     * The travel destination location.
     *
     * @return \Recranet\OTA\LocationType
     */
    public function getDestinationLocation()
    {
        return $this->destinationLocation;
    }

    /**
     * Sets a new destinationLocation
     *
     * The travel destination location.
     *
     * @param \Recranet\OTA\LocationType $destinationLocation
     * @return self
     */
    public function setDestinationLocation(\Recranet\OTA\LocationType $destinationLocation)
    {
        $this->destinationLocation = $destinationLocation;
        return $this;
    }

    /**
     * Adds as trainSegment
     *
     * A collection of train segments that provide journey information from origin to destination. Each segment has full details on one specific train segment, including the origin and destination locations for this segment, the requested class of service, and the operating company, if appropriate.
     *
     * @return self
     * @param \Recranet\OTA\RailReservationSummaryType\ODInfoAType\TrainSegmentAType $trainSegment
     */
    public function addToTrainSegment(\Recranet\OTA\RailReservationSummaryType\ODInfoAType\TrainSegmentAType $trainSegment)
    {
        $this->trainSegment[] = $trainSegment;
        return $this;
    }

    /**
     * isset trainSegment
     *
     * A collection of train segments that provide journey information from origin to destination. Each segment has full details on one specific train segment, including the origin and destination locations for this segment, the requested class of service, and the operating company, if appropriate.
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
     * A collection of train segments that provide journey information from origin to destination. Each segment has full details on one specific train segment, including the origin and destination locations for this segment, the requested class of service, and the operating company, if appropriate.
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
     * A collection of train segments that provide journey information from origin to destination. Each segment has full details on one specific train segment, including the origin and destination locations for this segment, the requested class of service, and the operating company, if appropriate.
     *
     * @return \Recranet\OTA\RailReservationSummaryType\ODInfoAType\TrainSegmentAType[]
     */
    public function getTrainSegment()
    {
        return $this->trainSegment;
    }

    /**
     * Sets a new trainSegment
     *
     * A collection of train segments that provide journey information from origin to destination. Each segment has full details on one specific train segment, including the origin and destination locations for this segment, the requested class of service, and the operating company, if appropriate.
     *
     * @param \Recranet\OTA\RailReservationSummaryType\ODInfoAType\TrainSegmentAType[] $trainSegment
     * @return self
     */
    public function setTrainSegment(array $trainSegment)
    {
        $this->trainSegment = $trainSegment;
        return $this;
    }
}

