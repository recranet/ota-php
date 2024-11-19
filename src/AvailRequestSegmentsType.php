<?php

namespace Recranet\OTA;

/**
 * Class representing AvailRequestSegmentsType
 *
 * A collection of AvailRequestSegment. Each segment includes a collection of criteria that requests a bookable entity, which may include designated rate plans, room types, amenities or services, and the request can be used for guest rooms or other inventory items for which availability is sought. Each segment would be presumed to have a unique date range for each request.
 * XSD Type: AvailRequestSegmentsType
 */
class AvailRequestSegmentsType
{
    /**
     * To accommodate the ability to perform multiple requests within one message, the availability request contains the repeating element, AvailRequestSegment. Each segment includes a collection of criteria that requests a bookable entity, which may include designated rate plans, room types, amenities or services, and the request can be used for guest rooms or other inventory items for which availability is sought. Each segment would be presumed to have a unique date range for each request.
     *
     * @var \Recranet\OTA\AvailRequestSegmentsType\AvailRequestSegmentAType[] $availRequestSegment
     */
    private $availRequestSegment = [
        
    ];

    /**
     * Adds as availRequestSegment
     *
     * To accommodate the ability to perform multiple requests within one message, the availability request contains the repeating element, AvailRequestSegment. Each segment includes a collection of criteria that requests a bookable entity, which may include designated rate plans, room types, amenities or services, and the request can be used for guest rooms or other inventory items for which availability is sought. Each segment would be presumed to have a unique date range for each request.
     *
     * @return self
     * @param \Recranet\OTA\AvailRequestSegmentsType\AvailRequestSegmentAType $availRequestSegment
     */
    public function addToAvailRequestSegment(\Recranet\OTA\AvailRequestSegmentsType\AvailRequestSegmentAType $availRequestSegment)
    {
        $this->availRequestSegment[] = $availRequestSegment;
        return $this;
    }

    /**
     * isset availRequestSegment
     *
     * To accommodate the ability to perform multiple requests within one message, the availability request contains the repeating element, AvailRequestSegment. Each segment includes a collection of criteria that requests a bookable entity, which may include designated rate plans, room types, amenities or services, and the request can be used for guest rooms or other inventory items for which availability is sought. Each segment would be presumed to have a unique date range for each request.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAvailRequestSegment($index)
    {
        return isset($this->availRequestSegment[$index]);
    }

    /**
     * unset availRequestSegment
     *
     * To accommodate the ability to perform multiple requests within one message, the availability request contains the repeating element, AvailRequestSegment. Each segment includes a collection of criteria that requests a bookable entity, which may include designated rate plans, room types, amenities or services, and the request can be used for guest rooms or other inventory items for which availability is sought. Each segment would be presumed to have a unique date range for each request.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAvailRequestSegment($index)
    {
        unset($this->availRequestSegment[$index]);
    }

    /**
     * Gets as availRequestSegment
     *
     * To accommodate the ability to perform multiple requests within one message, the availability request contains the repeating element, AvailRequestSegment. Each segment includes a collection of criteria that requests a bookable entity, which may include designated rate plans, room types, amenities or services, and the request can be used for guest rooms or other inventory items for which availability is sought. Each segment would be presumed to have a unique date range for each request.
     *
     * @return \Recranet\OTA\AvailRequestSegmentsType\AvailRequestSegmentAType[]
     */
    public function getAvailRequestSegment()
    {
        return $this->availRequestSegment;
    }

    /**
     * Sets a new availRequestSegment
     *
     * To accommodate the ability to perform multiple requests within one message, the availability request contains the repeating element, AvailRequestSegment. Each segment includes a collection of criteria that requests a bookable entity, which may include designated rate plans, room types, amenities or services, and the request can be used for guest rooms or other inventory items for which availability is sought. Each segment would be presumed to have a unique date range for each request.
     *
     * @param \Recranet\OTA\AvailRequestSegmentsType\AvailRequestSegmentAType[] $availRequestSegment
     * @return self
     */
    public function setAvailRequestSegment(array $availRequestSegment)
    {
        $this->availRequestSegment = $availRequestSegment;
        return $this;
    }
}

