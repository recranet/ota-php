<?php

namespace Recranet\OTA\Type\VerificationType;

use Recranet\OTA\Type\LocationType;

/**
 * Class representing StartLocationAType
 */
class StartLocationAType extends LocationType
{
    /**
     * A date and time associated with this start location.
     *
     * @var \DateTime $associatedDateTime
     */
    private $associatedDateTime = null;

    /**
     * Gets as associatedDateTime
     *
     * A date and time associated with this start location.
     *
     * @return \DateTime
     */
    public function getAssociatedDateTime()
    {
        return $this->associatedDateTime;
    }

    /**
     * Sets a new associatedDateTime
     *
     * A date and time associated with this start location.
     *
     * @param \DateTime $associatedDateTime
     * @return self
     */
    public function setAssociatedDateTime(\DateTime $associatedDateTime)
    {
        $this->associatedDateTime = $associatedDateTime;
        return $this;
    }
}

