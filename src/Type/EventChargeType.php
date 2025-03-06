<?php

namespace Recranet\OTA\Type;

/**
 * Class representing EventChargeType
 *
 * Provides details for specific event charges.
 * XSD Type: EventChargeType
 */
class EventChargeType
{
    /**
     * A specific charge associated to an event.
     *
     * @var \Recranet\OTA\Type\EventChargeType\EventChargeAType[] $eventCharge
     */
    private $eventCharge = [
        
    ];

    /**
     * Comments related to this specific event charge.
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $comment
     */
    private $comment = [
        
    ];

    /**
     * Adds as eventCharge
     *
     * A specific charge associated to an event.
     *
     * @return self
     * @param \Recranet\OTA\Type\EventChargeType\EventChargeAType $eventCharge
     */
    public function addToEventCharge(\Recranet\OTA\Type\EventChargeType\EventChargeAType $eventCharge)
    {
        $this->eventCharge[] = $eventCharge;
        return $this;
    }

    /**
     * isset eventCharge
     *
     * A specific charge associated to an event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEventCharge($index)
    {
        return isset($this->eventCharge[$index]);
    }

    /**
     * unset eventCharge
     *
     * A specific charge associated to an event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEventCharge($index)
    {
        unset($this->eventCharge[$index]);
    }

    /**
     * Gets as eventCharge
     *
     * A specific charge associated to an event.
     *
     * @return \Recranet\OTA\Type\EventChargeType\EventChargeAType[]
     */
    public function getEventCharge()
    {
        return $this->eventCharge;
    }

    /**
     * Sets a new eventCharge
     *
     * A specific charge associated to an event.
     *
     * @param \Recranet\OTA\Type\EventChargeType\EventChargeAType[] $eventCharge
     * @return self
     */
    public function setEventCharge(array $eventCharge)
    {
        $this->eventCharge = $eventCharge;
        return $this;
    }

    /**
     * Adds as comment
     *
     * Comments related to this specific event charge.
     *
     * @return self
     * @param \Recranet\OTA\Type\ParagraphType $comment
     */
    public function addToComment(\Recranet\OTA\Type\ParagraphType $comment)
    {
        $this->comment[] = $comment;
        return $this;
    }

    /**
     * isset comment
     *
     * Comments related to this specific event charge.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComment($index)
    {
        return isset($this->comment[$index]);
    }

    /**
     * unset comment
     *
     * Comments related to this specific event charge.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComment($index)
    {
        unset($this->comment[$index]);
    }

    /**
     * Gets as comment
     *
     * Comments related to this specific event charge.
     *
     * @return \Recranet\OTA\Type\ParagraphType[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Comments related to this specific event charge.
     *
     * @param \Recranet\OTA\Type\ParagraphType[] $comment
     * @return self
     */
    public function setComment(array $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }
}

