<?php

namespace Recranet\OTA\Type\PostEventSiteReportType;

/**
 * Class representing AttendeeInfoAType
 */
class AttendeeInfoAType
{
    /**
     * The expected number of total attendees at the event.
     *
     * @var int $totalQuantity
     */
    private $totalQuantity = null;

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
     * The number of attendees for the event that registered onsite.
     *
     * @var int $onsiteRegisteredQuantity
     */
    private $onsiteRegisteredQuantity = null;

    /**
     * The number of no shows for the event.
     *
     * @var int $noShowQuantity
     */
    private $noShowQuantity = null;

    /**
     * The number of exhibitor attendees for the event.
     *
     * @var int $exhibitorQuantity
     */
    private $exhibitorQuantity = null;

    /**
     * Defines the type of information (i.e., estimated, guaranteed, actual).
     *
     * @var string $quantityType
     */
    private $quantityType = null;

    /**
     * A collection of comments pertaining to the attendees.
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * Gets as totalQuantity
     *
     * The expected number of total attendees at the event.
     *
     * @return int
     */
    public function getTotalQuantity()
    {
        return $this->totalQuantity;
    }

    /**
     * Sets a new totalQuantity
     *
     * The expected number of total attendees at the event.
     *
     * @param int $totalQuantity
     * @return self
     */
    public function setTotalQuantity($totalQuantity)
    {
        $this->totalQuantity = $totalQuantity;
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
     * Gets as onsiteRegisteredQuantity
     *
     * The number of attendees for the event that registered onsite.
     *
     * @return int
     */
    public function getOnsiteRegisteredQuantity()
    {
        return $this->onsiteRegisteredQuantity;
    }

    /**
     * Sets a new onsiteRegisteredQuantity
     *
     * The number of attendees for the event that registered onsite.
     *
     * @param int $onsiteRegisteredQuantity
     * @return self
     */
    public function setOnsiteRegisteredQuantity($onsiteRegisteredQuantity)
    {
        $this->onsiteRegisteredQuantity = $onsiteRegisteredQuantity;
        return $this;
    }

    /**
     * Gets as noShowQuantity
     *
     * The number of no shows for the event.
     *
     * @return int
     */
    public function getNoShowQuantity()
    {
        return $this->noShowQuantity;
    }

    /**
     * Sets a new noShowQuantity
     *
     * The number of no shows for the event.
     *
     * @param int $noShowQuantity
     * @return self
     */
    public function setNoShowQuantity($noShowQuantity)
    {
        $this->noShowQuantity = $noShowQuantity;
        return $this;
    }

    /**
     * Gets as exhibitorQuantity
     *
     * The number of exhibitor attendees for the event.
     *
     * @return int
     */
    public function getExhibitorQuantity()
    {
        return $this->exhibitorQuantity;
    }

    /**
     * Sets a new exhibitorQuantity
     *
     * The number of exhibitor attendees for the event.
     *
     * @param int $exhibitorQuantity
     * @return self
     */
    public function setExhibitorQuantity($exhibitorQuantity)
    {
        $this->exhibitorQuantity = $exhibitorQuantity;
        return $this;
    }

    /**
     * Gets as quantityType
     *
     * Defines the type of information (i.e., estimated, guaranteed, actual).
     *
     * @return string
     */
    public function getQuantityType()
    {
        return $this->quantityType;
    }

    /**
     * Sets a new quantityType
     *
     * Defines the type of information (i.e., estimated, guaranteed, actual).
     *
     * @param string $quantityType
     * @return self
     */
    public function setQuantityType($quantityType)
    {
        $this->quantityType = $quantityType;
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

