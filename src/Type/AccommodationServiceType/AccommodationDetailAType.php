<?php

namespace Recranet\OTA\Type\AccommodationServiceType;

use Recranet\OTA\Type\RailAccommDetailType;

/**
 * Class representing AccommodationDetailAType
 */
class AccommodationDetailAType extends RailAccommDetailType
{
    /**
     * If specified, indicates this traveler requested a seat or berth adjacent to the traveler in the same reservation request, which is identified by the specified Reference Traveler RPH.
     *
     * @var string $referenceTravelerRPH
     */
    private $referenceTravelerRPH = null;

    /**
     * If true, indicates a request for an accommodation (seat/berth/compartment) adjacent to a specified reference accommodation.
     *
     * @var bool $referenceInd
     */
    private $referenceInd = null;

    /**
     * Gets as referenceTravelerRPH
     *
     * If specified, indicates this traveler requested a seat or berth adjacent to the traveler in the same reservation request, which is identified by the specified Reference Traveler RPH.
     *
     * @return string
     */
    public function getReferenceTravelerRPH()
    {
        return $this->referenceTravelerRPH;
    }

    /**
     * Sets a new referenceTravelerRPH
     *
     * If specified, indicates this traveler requested a seat or berth adjacent to the traveler in the same reservation request, which is identified by the specified Reference Traveler RPH.
     *
     * @param string $referenceTravelerRPH
     * @return self
     */
    public function setReferenceTravelerRPH($referenceTravelerRPH)
    {
        $this->referenceTravelerRPH = $referenceTravelerRPH;
        return $this;
    }

    /**
     * Gets as referenceInd
     *
     * If true, indicates a request for an accommodation (seat/berth/compartment) adjacent to a specified reference accommodation.
     *
     * @return bool
     */
    public function getReferenceInd()
    {
        return $this->referenceInd;
    }

    /**
     * Sets a new referenceInd
     *
     * If true, indicates a request for an accommodation (seat/berth/compartment) adjacent to a specified reference accommodation.
     *
     * @param bool $referenceInd
     * @return self
     */
    public function setReferenceInd($referenceInd)
    {
        $this->referenceInd = $referenceInd;
        return $this;
    }
}

