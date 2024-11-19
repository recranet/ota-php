<?php

namespace Recranet\OTA\SellableProductsType\SellableProductAType;

/**
 * Class representing DestinationSystemCodesAType
 */
class DestinationSystemCodesAType
{
    /**
     * The destination system code defines a system to which information is to be provided.
     *
     * @var \Recranet\OTA\SellableProductsType\SellableProductAType\DestinationSystemCodesAType\DestinationSystemCodeAType[] $destinationSystemCode
     */
    private $destinationSystemCode = [
        
    ];

    /**
     * Adds as destinationSystemCode
     *
     * The destination system code defines a system to which information is to be provided.
     *
     * @return self
     * @param \Recranet\OTA\SellableProductsType\SellableProductAType\DestinationSystemCodesAType\DestinationSystemCodeAType $destinationSystemCode
     */
    public function addToDestinationSystemCode(\Recranet\OTA\SellableProductsType\SellableProductAType\DestinationSystemCodesAType\DestinationSystemCodeAType $destinationSystemCode)
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
     * @return \Recranet\OTA\SellableProductsType\SellableProductAType\DestinationSystemCodesAType\DestinationSystemCodeAType[]
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
     * @param \Recranet\OTA\SellableProductsType\SellableProductAType\DestinationSystemCodesAType\DestinationSystemCodeAType[] $destinationSystemCode
     * @return self
     */
    public function setDestinationSystemCode(array $destinationSystemCode)
    {
        $this->destinationSystemCode = $destinationSystemCode;
        return $this;
    }
}

