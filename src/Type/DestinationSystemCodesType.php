<?php

namespace Recranet\OTA\Type;

/**
 * Class representing DestinationSystemCodesType
 *
 * A collection of DestinationSystemCode.
 * XSD Type: DestinationSystemCodesType
 */
class DestinationSystemCodesType
{
    /**
     * The destination system code defines a system to which information is to be provided.
     *
     * @var string[] $destinationSystemCode
     */
    private $destinationSystemCode = [
        
    ];

    /**
     * Adds as destinationSystemCode
     *
     * The destination system code defines a system to which information is to be provided.
     *
     * @return self
     * @param string $destinationSystemCode
     */
    public function addToDestinationSystemCode($destinationSystemCode)
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
     * @return string[]
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
     * @param string $destinationSystemCode
     * @return self
     */
    public function setDestinationSystemCode(array $destinationSystemCode)
    {
        $this->destinationSystemCode = $destinationSystemCode;
        return $this;
    }
}

