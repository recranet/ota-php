<?php

namespace Recranet\OTA\Type\EventType\EventAType\EventInfosAType;

/**
 * Class representing EventInfoAType
 */
class EventInfoAType
{
    /**
     * The starting value of the time span.
     *
     * @var \DateTime $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @var \DateTime $end
     */
    private $end = null;

    /**
     * A collection of additional dates.
     *
     * @var \Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType\AdditionalDatesAType\AdditionalDateAType[] $additionalDates
     */
    private $additionalDates = null;

    /**
     * A collection of contacts that pertain to this occurence of the event.
     *
     * @var \Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType\ContactsAType\ContactAType[] $contacts
     */
    private $contacts = null;

    /**
     * Describes an event at which products and services are displayed.
     *
     * @var \Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType[] $exhibition
     */
    private $exhibition = [
        
    ];

    /**
     * A collection of transportation elements.
     *
     * @var \Recranet\OTA\Type\TransportationType\TransportationAType[] $transportations
     */
    private $transportations = null;

    /**
     * Used to provide tax exemption information for the event.
     *
     * @var \Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType\TaxExemptInfoAType[] $taxExemptInfo
     */
    private $taxExemptInfo = [
        
    ];

    /**
     * A collection of comments that pertain to this occurrence of the event.
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \DateTime $start
     * @return self
     */
    public function setStart(\DateTime $start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @return \DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(\DateInterval $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \DateTime $end
     * @return self
     */
    public function setEnd(\DateTime $end)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * Adds as additionalDate
     *
     * A collection of additional dates.
     *
     * @return self
     * @param \Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType\AdditionalDatesAType\AdditionalDateAType $additionalDate
     */
    public function addToAdditionalDates(\Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType\AdditionalDatesAType\AdditionalDateAType $additionalDate)
    {
        $this->additionalDates[] = $additionalDate;
        return $this;
    }

    /**
     * isset additionalDates
     *
     * A collection of additional dates.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalDates($index)
    {
        return isset($this->additionalDates[$index]);
    }

    /**
     * unset additionalDates
     *
     * A collection of additional dates.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalDates($index)
    {
        unset($this->additionalDates[$index]);
    }

    /**
     * Gets as additionalDates
     *
     * A collection of additional dates.
     *
     * @return \Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType\AdditionalDatesAType\AdditionalDateAType[]
     */
    public function getAdditionalDates()
    {
        return $this->additionalDates;
    }

    /**
     * Sets a new additionalDates
     *
     * A collection of additional dates.
     *
     * @param \Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType\AdditionalDatesAType\AdditionalDateAType[] $additionalDates
     * @return self
     */
    public function setAdditionalDates(array $additionalDates = null)
    {
        $this->additionalDates = $additionalDates;
        return $this;
    }

    /**
     * Adds as contact
     *
     * A collection of contacts that pertain to this occurence of the event.
     *
     * @return self
     * @param \Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType\ContactsAType\ContactAType $contact
     */
    public function addToContacts(\Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType\ContactsAType\ContactAType $contact)
    {
        $this->contacts[] = $contact;
        return $this;
    }

    /**
     * isset contacts
     *
     * A collection of contacts that pertain to this occurence of the event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContacts($index)
    {
        return isset($this->contacts[$index]);
    }

    /**
     * unset contacts
     *
     * A collection of contacts that pertain to this occurence of the event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContacts($index)
    {
        unset($this->contacts[$index]);
    }

    /**
     * Gets as contacts
     *
     * A collection of contacts that pertain to this occurence of the event.
     *
     * @return \Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType\ContactsAType\ContactAType[]
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Sets a new contacts
     *
     * A collection of contacts that pertain to this occurence of the event.
     *
     * @param \Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType\ContactsAType\ContactAType[] $contacts
     * @return self
     */
    public function setContacts(array $contacts = null)
    {
        $this->contacts = $contacts;
        return $this;
    }

    /**
     * Adds as exhibition
     *
     * Describes an event at which products and services are displayed.
     *
     * @return self
     * @param \Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType $exhibition
     */
    public function addToExhibition(\Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType $exhibition)
    {
        $this->exhibition[] = $exhibition;
        return $this;
    }

    /**
     * isset exhibition
     *
     * Describes an event at which products and services are displayed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExhibition($index)
    {
        return isset($this->exhibition[$index]);
    }

    /**
     * unset exhibition
     *
     * Describes an event at which products and services are displayed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExhibition($index)
    {
        unset($this->exhibition[$index]);
    }

    /**
     * Gets as exhibition
     *
     * Describes an event at which products and services are displayed.
     *
     * @return \Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType[]
     */
    public function getExhibition()
    {
        return $this->exhibition;
    }

    /**
     * Sets a new exhibition
     *
     * Describes an event at which products and services are displayed.
     *
     * @param \Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType[] $exhibition
     * @return self
     */
    public function setExhibition(array $exhibition = null)
    {
        $this->exhibition = $exhibition;
        return $this;
    }

    /**
     * Adds as transportation
     *
     * A collection of transportation elements.
     *
     * @return self
     * @param \Recranet\OTA\Type\TransportationType\TransportationAType $transportation
     */
    public function addToTransportations(\Recranet\OTA\Type\TransportationType\TransportationAType $transportation)
    {
        $this->transportations[] = $transportation;
        return $this;
    }

    /**
     * isset transportations
     *
     * A collection of transportation elements.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportations($index)
    {
        return isset($this->transportations[$index]);
    }

    /**
     * unset transportations
     *
     * A collection of transportation elements.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportations($index)
    {
        unset($this->transportations[$index]);
    }

    /**
     * Gets as transportations
     *
     * A collection of transportation elements.
     *
     * @return \Recranet\OTA\Type\TransportationType\TransportationAType[]
     */
    public function getTransportations()
    {
        return $this->transportations;
    }

    /**
     * Sets a new transportations
     *
     * A collection of transportation elements.
     *
     * @param \Recranet\OTA\Type\TransportationType\TransportationAType[] $transportations
     * @return self
     */
    public function setTransportations(array $transportations = null)
    {
        $this->transportations = $transportations;
        return $this;
    }

    /**
     * Adds as taxExemptInfo
     *
     * Used to provide tax exemption information for the event.
     *
     * @return self
     * @param \Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType\TaxExemptInfoAType $taxExemptInfo
     */
    public function addToTaxExemptInfo(\Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType\TaxExemptInfoAType $taxExemptInfo)
    {
        $this->taxExemptInfo[] = $taxExemptInfo;
        return $this;
    }

    /**
     * isset taxExemptInfo
     *
     * Used to provide tax exemption information for the event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxExemptInfo($index)
    {
        return isset($this->taxExemptInfo[$index]);
    }

    /**
     * unset taxExemptInfo
     *
     * Used to provide tax exemption information for the event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxExemptInfo($index)
    {
        unset($this->taxExemptInfo[$index]);
    }

    /**
     * Gets as taxExemptInfo
     *
     * Used to provide tax exemption information for the event.
     *
     * @return \Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType\TaxExemptInfoAType[]
     */
    public function getTaxExemptInfo()
    {
        return $this->taxExemptInfo;
    }

    /**
     * Sets a new taxExemptInfo
     *
     * Used to provide tax exemption information for the event.
     *
     * @param \Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType\TaxExemptInfoAType[] $taxExemptInfo
     * @return self
     */
    public function setTaxExemptInfo(array $taxExemptInfo = null)
    {
        $this->taxExemptInfo = $taxExemptInfo;
        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of comments that pertain to this occurrence of the event.
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
     * A collection of comments that pertain to this occurrence of the event.
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
     * A collection of comments that pertain to this occurrence of the event.
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
     * A collection of comments that pertain to this occurrence of the event.
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
     * A collection of comments that pertain to this occurrence of the event.
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

