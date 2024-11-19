<?php

namespace Recranet\OTA;

/**
 * Class representing AreaInfoType
 *
 * Defines well-known locations and attractions of local interest in the geographical area of the hotel facility as well as other area hotels.
 * XSD Type: AreaInfoType
 */
class AreaInfoType
{
    /**
     * A collection of reference points.
     *
     * @var \Recranet\OTA\AreaInfoType\RefPointsAType $refPoints
     */
    private $refPoints = null;

    /**
     * A collection of Attraction objects identifying the local interest attractions in the vicinity of this hotel facility.
     *
     * @var \Recranet\OTA\AreaInfoType\AttractionsAType $attractions
     */
    private $attractions = null;

    /**
     * A collection of Recreation objects identifying the different types of recreation facilities available to the guest.
     *
     * @var \Recranet\OTA\AreaInfoType\RecreationsAType $recreations
     */
    private $recreations = null;

    /**
     * Collection of other area hotels.
     *
     * @var \Recranet\OTA\AreaInfoType\OtherHotelsAType $otherHotels
     */
    private $otherHotels = null;

    /**
     * Gets as refPoints
     *
     * A collection of reference points.
     *
     * @return \Recranet\OTA\AreaInfoType\RefPointsAType
     */
    public function getRefPoints()
    {
        return $this->refPoints;
    }

    /**
     * Sets a new refPoints
     *
     * A collection of reference points.
     *
     * @param \Recranet\OTA\AreaInfoType\RefPointsAType $refPoints
     * @return self
     */
    public function setRefPoints(?\Recranet\OTA\AreaInfoType\RefPointsAType $refPoints = null)
    {
        $this->refPoints = $refPoints;
        return $this;
    }

    /**
     * Gets as attractions
     *
     * A collection of Attraction objects identifying the local interest attractions in the vicinity of this hotel facility.
     *
     * @return \Recranet\OTA\AreaInfoType\AttractionsAType
     */
    public function getAttractions()
    {
        return $this->attractions;
    }

    /**
     * Sets a new attractions
     *
     * A collection of Attraction objects identifying the local interest attractions in the vicinity of this hotel facility.
     *
     * @param \Recranet\OTA\AreaInfoType\AttractionsAType $attractions
     * @return self
     */
    public function setAttractions(?\Recranet\OTA\AreaInfoType\AttractionsAType $attractions = null)
    {
        $this->attractions = $attractions;
        return $this;
    }

    /**
     * Gets as recreations
     *
     * A collection of Recreation objects identifying the different types of recreation facilities available to the guest.
     *
     * @return \Recranet\OTA\AreaInfoType\RecreationsAType
     */
    public function getRecreations()
    {
        return $this->recreations;
    }

    /**
     * Sets a new recreations
     *
     * A collection of Recreation objects identifying the different types of recreation facilities available to the guest.
     *
     * @param \Recranet\OTA\AreaInfoType\RecreationsAType $recreations
     * @return self
     */
    public function setRecreations(?\Recranet\OTA\AreaInfoType\RecreationsAType $recreations = null)
    {
        $this->recreations = $recreations;
        return $this;
    }

    /**
     * Gets as otherHotels
     *
     * Collection of other area hotels.
     *
     * @return \Recranet\OTA\AreaInfoType\OtherHotelsAType
     */
    public function getOtherHotels()
    {
        return $this->otherHotels;
    }

    /**
     * Sets a new otherHotels
     *
     * Collection of other area hotels.
     *
     * @param \Recranet\OTA\AreaInfoType\OtherHotelsAType $otherHotels
     * @return self
     */
    public function setOtherHotels(?\Recranet\OTA\AreaInfoType\OtherHotelsAType $otherHotels = null)
    {
        $this->otherHotels = $otherHotels;
        return $this;
    }
}

