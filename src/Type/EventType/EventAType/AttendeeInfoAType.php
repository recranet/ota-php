<?php

namespace Recranet\OTA\Type\EventType\EventAType;

/**
 * Class representing AttendeeInfoAType
 */
class AttendeeInfoAType
{
    /**
     * The expected number of total attendees at the event.
     *
     * @var int $expectedTotalQuantity
     */
    private $expectedTotalQuantity = null;

    /**
     * The expected number of domestic attendees for the event.
     *
     * @var int $domesticQuantity
     */
    private $domesticQuantity = null;

    /**
     * The expected number of international attendess for the event.
     *
     * @var int $internationalQuantity
     */
    private $internationalQuantity = null;

    /**
     * The number of preregistered attendees for the event.
     *
     * @var int $preRegisteredQuantity
     */
    private $preRegisteredQuantity = null;

    /**
     * A collection of comments pertaining to the attendees.
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * Gets as expectedTotalQuantity
     *
     * The expected number of total attendees at the event.
     *
     * @return int
     */
    public function getExpectedTotalQuantity()
    {
        return $this->expectedTotalQuantity;
    }

    /**
     * Sets a new expectedTotalQuantity
     *
     * The expected number of total attendees at the event.
     *
     * @param int $expectedTotalQuantity
     * @return self
     */
    public function setExpectedTotalQuantity($expectedTotalQuantity)
    {
        $this->expectedTotalQuantity = $expectedTotalQuantity;
        return $this;
    }

    /**
     * Gets as domesticQuantity
     *
     * The expected number of domestic attendees for the event.
     *
     * @return int
     */
    public function getDomesticQuantity()
    {
        return $this->domesticQuantity;
    }

    /**
     * Sets a new domesticQuantity
     *
     * The expected number of domestic attendees for the event.
     *
     * @param int $domesticQuantity
     * @return self
     */
    public function setDomesticQuantity($domesticQuantity)
    {
        $this->domesticQuantity = $domesticQuantity;
        return $this;
    }

    /**
     * Gets as internationalQuantity
     *
     * The expected number of international attendess for the event.
     *
     * @return int
     */
    public function getInternationalQuantity()
    {
        return $this->internationalQuantity;
    }

    /**
     * Sets a new internationalQuantity
     *
     * The expected number of international attendess for the event.
     *
     * @param int $internationalQuantity
     * @return self
     */
    public function setInternationalQuantity($internationalQuantity)
    {
        $this->internationalQuantity = $internationalQuantity;
        return $this;
    }

    /**
     * Gets as preRegisteredQuantity
     *
     * The number of preregistered attendees for the event.
     *
     * @return int
     */
    public function getPreRegisteredQuantity()
    {
        return $this->preRegisteredQuantity;
    }

    /**
     * Sets a new preRegisteredQuantity
     *
     * The number of preregistered attendees for the event.
     *
     * @param int $preRegisteredQuantity
     * @return self
     */
    public function setPreRegisteredQuantity($preRegisteredQuantity)
    {
        $this->preRegisteredQuantity = $preRegisteredQuantity;
        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of comments pertaining to the attendees.
     *
     * @return self
     * @param \Recranet\OTA\Type\ParagraphType $comment
     */
    public function addToComments(\Recranet\OTA\Type\ParagraphType $comment)
    {
        $this->comments[] = $comment;
        return $this;
    }

    /**
     * isset comments
     *
     * A collection of comments pertaining to the attendees.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComments($index)
    {
        return isset($this->comments[$index]);
    }

    /**
     * unset comments
     *
     * A collection of comments pertaining to the attendees.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComments($index)
    {
        unset($this->comments[$index]);
    }

    /**
     * Gets as comments
     *
     * A collection of comments pertaining to the attendees.
     *
     * @return \Recranet\OTA\Type\ParagraphType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * A collection of comments pertaining to the attendees.
     *
     * @param \Recranet\OTA\Type\ParagraphType[] $comments
     * @return self
     */
    public function setComments(array $comments = null)
    {
        $this->comments = $comments;
        return $this;
    }
}

