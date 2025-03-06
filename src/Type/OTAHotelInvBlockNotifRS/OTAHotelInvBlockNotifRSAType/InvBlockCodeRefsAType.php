<?php

namespace Recranet\OTA\Type\OTAHotelInvBlockNotifRS\OTAHotelInvBlockNotifRSAType;

use Recranet\OTA\Type\InvBlockCodeRefType;

/**
 * Class representing InvBlockCodeRefsAType
 */
class InvBlockCodeRefsAType extends InvBlockCodeRefType
{
    /**
     * This contains inventory block codes used between the sending and receiving systems. It acknowledges the creation of the block to the sender and may provide codes for cross reference.
     *
     * @var \Recranet\OTA\Type\InvBlockCodeRefType[] $invBlockCodeRef
     */
    private $invBlockCodeRef = [
        
    ];

    /**
     * Adds as invBlockCodeRef
     *
     * This contains inventory block codes used between the sending and receiving systems. It acknowledges the creation of the block to the sender and may provide codes for cross reference.
     *
     * @return self
     * @param \Recranet\OTA\Type\InvBlockCodeRefType $invBlockCodeRef
     */
    public function addToInvBlockCodeRef(\Recranet\OTA\Type\InvBlockCodeRefType $invBlockCodeRef)
    {
        $this->invBlockCodeRef[] = $invBlockCodeRef;
        return $this;
    }

    /**
     * isset invBlockCodeRef
     *
     * This contains inventory block codes used between the sending and receiving systems. It acknowledges the creation of the block to the sender and may provide codes for cross reference.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvBlockCodeRef($index)
    {
        return isset($this->invBlockCodeRef[$index]);
    }

    /**
     * unset invBlockCodeRef
     *
     * This contains inventory block codes used between the sending and receiving systems. It acknowledges the creation of the block to the sender and may provide codes for cross reference.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvBlockCodeRef($index)
    {
        unset($this->invBlockCodeRef[$index]);
    }

    /**
     * Gets as invBlockCodeRef
     *
     * This contains inventory block codes used between the sending and receiving systems. It acknowledges the creation of the block to the sender and may provide codes for cross reference.
     *
     * @return \Recranet\OTA\Type\InvBlockCodeRefType[]
     */
    public function getInvBlockCodeRef()
    {
        return $this->invBlockCodeRef;
    }

    /**
     * Sets a new invBlockCodeRef
     *
     * This contains inventory block codes used between the sending and receiving systems. It acknowledges the creation of the block to the sender and may provide codes for cross reference.
     *
     * @param \Recranet\OTA\Type\InvBlockCodeRefType[] $invBlockCodeRef
     * @return self
     */
    public function setInvBlockCodeRef(array $invBlockCodeRef = null)
    {
        $this->invBlockCodeRef = $invBlockCodeRef;
        return $this;
    }
}

