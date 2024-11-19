<?php

namespace Recranet\OTA\OTAHotelGetMsgRS\OTAHotelGetMsgRSAType;

/**
 * Class representing MessagesAType
 */
class MessagesAType
{
    /**
     * @var \Recranet\OTA\MessageType[] $message
     */
    private $message = [
        
    ];

    /**
     * Adds as message
     *
     * @return self
     * @param \Recranet\OTA\MessageType $message
     */
    public function addToMessage(\Recranet\OTA\MessageType $message)
    {
        $this->message[] = $message;
        return $this;
    }

    /**
     * isset message
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMessage($index)
    {
        return isset($this->message[$index]);
    }

    /**
     * unset message
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMessage($index)
    {
        unset($this->message[$index]);
    }

    /**
     * Gets as message
     *
     * @return \Recranet\OTA\MessageType[]
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets a new message
     *
     * @param \Recranet\OTA\MessageType[] $message
     * @return self
     */
    public function setMessage(array $message = null)
    {
        $this->message = $message;
        return $this;
    }
}

