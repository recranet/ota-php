<?php

namespace Recranet\OTA\Type\AirOfferType\TermsAndConditionsAType;

use Recranet\OTA\Type\VoluntaryChangesType;

/**
 * Class representing VoluntaryRefundsAType
 */
class VoluntaryRefundsAType extends VoluntaryChangesType
{
    /**
     * A description of the penalty.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Gets as description
     *
     * A description of the penalty.
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
     * A description of the penalty.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
}

