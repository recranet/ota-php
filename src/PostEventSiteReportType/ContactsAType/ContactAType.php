<?php

namespace Recranet\OTA\PostEventSiteReportType\ContactsAType;

use Recranet\OTA\ContactPersonType;

/**
 * Class representing ContactAType
 */
class ContactAType extends ContactPersonType
{
    /**
     * When true, the contact is a very important person.
     *
     * @var bool $vIPIndicator
     */
    private $vIPIndicator = null;

    /**
     * The arrival date of this contact.
     *
     * @var \DateTime $arrivalDate
     */
    private $arrivalDate = null;

    /**
     * The departure date of this contact.
     *
     * @var \DateTime $departureDate
     */
    private $departureDate = null;

    /**
     * A collection of amenities.
     *
     * @var \Recranet\OTA\RoomAmenityPrefType[] $amenities
     */
    private $amenities = null;

    /**
     * A collection of comments.
     *
     * @var \Recranet\OTA\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * Gets as vIPIndicator
     *
     * When true, the contact is a very important person.
     *
     * @return bool
     */
    public function getVIPIndicator()
    {
        return $this->vIPIndicator;
    }

    /**
     * Sets a new vIPIndicator
     *
     * When true, the contact is a very important person.
     *
     * @param bool $vIPIndicator
     * @return self
     */
    public function setVIPIndicator($vIPIndicator)
    {
        $this->vIPIndicator = $vIPIndicator;
        return $this;
    }

    /**
     * Gets as arrivalDate
     *
     * The arrival date of this contact.
     *
     * @return \DateTime
     */
    public function getArrivalDate()
    {
        return $this->arrivalDate;
    }

    /**
     * Sets a new arrivalDate
     *
     * The arrival date of this contact.
     *
     * @param \DateTime $arrivalDate
     * @return self
     */
    public function setArrivalDate(\DateTime $arrivalDate)
    {
        $this->arrivalDate = $arrivalDate;
        return $this;
    }

    /**
     * Gets as departureDate
     *
     * The departure date of this contact.
     *
     * @return \DateTime
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * Sets a new departureDate
     *
     * The departure date of this contact.
     *
     * @param \DateTime $departureDate
     * @return self
     */
    public function setDepartureDate(\DateTime $departureDate)
    {
        $this->departureDate = $departureDate;
        return $this;
    }

    /**
     * Adds as amenity
     *
     * A collection of amenities.
     *
     * @return self
     * @param \Recranet\OTA\RoomAmenityPrefType $amenity
     */
    public function addToAmenities(\Recranet\OTA\RoomAmenityPrefType $amenity)
    {
        $this->amenities[] = $amenity;
        return $this;
    }

    /**
     * isset amenities
     *
     * A collection of amenities.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAmenities($index)
    {
        return isset($this->amenities[$index]);
    }

    /**
     * unset amenities
     *
     * A collection of amenities.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAmenities($index)
    {
        unset($this->amenities[$index]);
    }

    /**
     * Gets as amenities
     *
     * A collection of amenities.
     *
     * @return \Recranet\OTA\RoomAmenityPrefType[]
     */
    public function getAmenities()
    {
        return $this->amenities;
    }

    /**
     * Sets a new amenities
     *
     * A collection of amenities.
     *
     * @param \Recranet\OTA\RoomAmenityPrefType[] $amenities
     * @return self
     */
    public function setAmenities(array $amenities = null)
    {
        $this->amenities = $amenities;
        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of comments.
     *
     * @return self
     * @param \Recranet\OTA\ParagraphType $comment
     */
    public function addToComments(\Recranet\OTA\ParagraphType $comment)
    {
        $this->comments[] = $comment;
        return $this;
    }

    /**
     * isset comments
     *
     * A collection of comments.
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
     * A collection of comments.
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
     * A collection of comments.
     *
     * @return \Recranet\OTA\ParagraphType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * A collection of comments.
     *
     * @param \Recranet\OTA\ParagraphType[] $comments
     * @return self
     */
    public function setComments(array $comments = null)
    {
        $this->comments = $comments;
        return $this;
    }
}

