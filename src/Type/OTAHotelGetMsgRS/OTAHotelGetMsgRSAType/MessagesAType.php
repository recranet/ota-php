<?php

namespace Recranet\OTA\Type\OTAHotelGetMsgRS\OTAHotelGetMsgRSAType;

/**
 * Class representing MessagesAType
 */
class MessagesAType
{
    /**
     * @var \Recranet\OTA\Type\MessageType[] $message
     */
    private $message = [
        
    ];

    /**
     * Adds as message
     *
     * @return self
     * @param \Recranet\OTA\Type\MessageType $message
     */
    public function addToMessage(\Recranet\OTA\Type\MessageType $message)
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
     * @return \Recranet\OTA\Type\MessageType[]
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets a new message
     *
     * @param \Recranet\OTA\Type\MessageType[] $message
     * @return self
     */
    public function setMessage(array $message = null)
    {
        $this->message = $message;
        return $this;
    }
}

