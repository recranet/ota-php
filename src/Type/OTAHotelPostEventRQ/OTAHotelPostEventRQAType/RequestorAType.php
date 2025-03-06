<?php

namespace Recranet\OTA\Type\OTAHotelPostEventRQ\OTAHotelPostEventRQAType;

use Recranet\OTA\Type\UniqueIDType;

/**
 * Class representing RequestorAType
 */
class RequestorAType extends UniqueIDType
{
    /**
     * When true, indicates that this party is someone other than the requestor and should also receive the post event report (i.e., a HotelPostEventNotifRQ should be sent to this party).
     *
     * @var bool $secondaryRoutingIndicator
     */
    private $secondaryRoutingIndicator = null;

    /**
     * Identifies the type of requestor so the response can be filtered appropriately.
     *
     * @var string $requestorType
     */
    private $requestorType = null;

    /**
     * Gets as secondaryRoutingIndicator
     *
     * When true, indicates that this party is someone other than the requestor and should also receive the post event report (i.e., a HotelPostEventNotifRQ should be sent to this party).
     *
     * @return bool
     */
    public function getSecondaryRoutingIndicator()
    {
        return $this->secondaryRoutingIndicator;
    }

    /**
     * Sets a new secondaryRoutingIndicator
     *
     * When true, indicates that this party is someone other than the requestor and should also receive the post event report (i.e., a HotelPostEventNotifRQ should be sent to this party).
     *
     * @param bool $secondaryRoutingIndicator
     * @return self
     */
    public function setSecondaryRoutingIndicator($secondaryRoutingIndicator)
    {
        $this->secondaryRoutingIndicator = $secondaryRoutingIndicator;
        return $this;
    }

    /**
     * Gets as requestorType
     *
     * Identifies the type of requestor so the response can be filtered appropriately.
     *
     * @return string
     */
    public function getRequestorType()
    {
        return $this->requestorType;
    }

    /**
     * Sets a new requestorType
     *
     * Identifies the type of requestor so the response can be filtered appropriately.
     *
     * @param string $requestorType
     * @return self
     */
    public function setRequestorType($requestorType)
    {
        $this->requestorType = $requestorType;
        return $this;
    }
}

