<?php

namespace Recranet\OTA\Type\HotelRatePlanType;

/**
 * Class representing DestinationSystemsCodeAType
 */
class DestinationSystemsCodeAType
{
    /**
     * The destination system code defines a system to which information is to be provided.
     *
     * @var \Recranet\OTA\Type\HotelRatePlanType\DestinationSystemsCodeAType\DestinationSystemCodeAType[] $destinationSystemCode
     */
    private $destinationSystemCode = [
        
    ];

    /**
     * Adds as destinationSystemCode
     *
     * The destination system code defines a system to which information is to be provided.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelRatePlanType\DestinationSystemsCodeAType\DestinationSystemCodeAType $destinationSystemCode
     */
    public function addToDestinationSystemCode(\Recranet\OTA\Type\HotelRatePlanType\DestinationSystemsCodeAType\DestinationSystemCodeAType $destinationSystemCode)
    {
        $this->destinationSystemCode[] = $destinationSystemCode;
        return $this;
    }

    /**
     * isset destinationSystemCode
     *
     * The destination system code defines a system to which information is to be provided.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDestinationSystemCode($index)
    {
        return isset($this->destinationSystemCode[$index]);
    }

    /**
     * unset destinationSystemCode
     *
     * The destination system code defines a system to which information is to be provided.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDestinationSystemCode($index)
    {
        unset($this->destinationSystemCode[$index]);
    }

    /**
     * Gets as destinationSystemCode
     *
     * The destination system code defines a system to which information is to be provided.
     *
     * @return \Recranet\OTA\Type\HotelRatePlanType\DestinationSystemsCodeAType\DestinationSystemCodeAType[]
     */
    public function getDestinationSystemCode()
    {
        return $this->destinationSystemCode;
    }

    /**
     * Sets a new destinationSystemCode
     *
     * The destination system code defines a system to which information is to be provided.
     *
     * @param \Recranet\OTA\Type\HotelRatePlanType\DestinationSystemsCodeAType\DestinationSystemCodeAType[] $destinationSystemCode
     * @return self
     */
    public function setDestinationSystemCode(array $destinationSystemCode)
    {
        $this->destinationSystemCode = $destinationSystemCode;
        return $this;
    }
}

