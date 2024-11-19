<?php

namespace Recranet\OTA\EventReportType\GeneralEventInfoAType;

/**
 * Class representing HousingInfoAType
 */
class HousingInfoAType
{
    /**
     * When true, indicates the event utilized sleeping rooms.
     *
     * @var bool $sleepingRoomsIndicator
     */
    private $sleepingRoomsIndicator = null;

    /**
     * Specifies the total number of hotels utilized by the event.
     *
     * @var int $hotelQuantity
     */
    private $hotelQuantity = null;

    /**
     * Specifies the total number of sleeping rooms utilized on the peak night across all hotels.
     *
     * @var int $peakRoomNightQuantity
     */
    private $peakRoomNightQuantity = null;

    /**
     * The type of housing service provider used for this event. Refer to OpenTravel Code list Destination Service Provider Type (DSP).
     *
     * @var string $housingProviderCode
     */
    private $housingProviderCode = null;

    /**
     * Name of the housing service provider used for this event.
     *
     * @var string $housingProviderName
     */
    private $housingProviderName = null;

    /**
     * A collection of comments regarding the general hotel usage.
     *
     * @var \Recranet\OTA\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * Gets as sleepingRoomsIndicator
     *
     * When true, indicates the event utilized sleeping rooms.
     *
     * @return bool
     */
    public function getSleepingRoomsIndicator()
    {
        return $this->sleepingRoomsIndicator;
    }

    /**
     * Sets a new sleepingRoomsIndicator
     *
     * When true, indicates the event utilized sleeping rooms.
     *
     * @param bool $sleepingRoomsIndicator
     * @return self
     */
    public function setSleepingRoomsIndicator($sleepingRoomsIndicator)
    {
        $this->sleepingRoomsIndicator = $sleepingRoomsIndicator;
        return $this;
    }

    /**
     * Gets as hotelQuantity
     *
     * Specifies the total number of hotels utilized by the event.
     *
     * @return int
     */
    public function getHotelQuantity()
    {
        return $this->hotelQuantity;
    }

    /**
     * Sets a new hotelQuantity
     *
     * Specifies the total number of hotels utilized by the event.
     *
     * @param int $hotelQuantity
     * @return self
     */
    public function setHotelQuantity($hotelQuantity)
    {
        $this->hotelQuantity = $hotelQuantity;
        return $this;
    }

    /**
     * Gets as peakRoomNightQuantity
     *
     * Specifies the total number of sleeping rooms utilized on the peak night across all hotels.
     *
     * @return int
     */
    public function getPeakRoomNightQuantity()
    {
        return $this->peakRoomNightQuantity;
    }

    /**
     * Sets a new peakRoomNightQuantity
     *
     * Specifies the total number of sleeping rooms utilized on the peak night across all hotels.
     *
     * @param int $peakRoomNightQuantity
     * @return self
     */
    public function setPeakRoomNightQuantity($peakRoomNightQuantity)
    {
        $this->peakRoomNightQuantity = $peakRoomNightQuantity;
        return $this;
    }

    /**
     * Gets as housingProviderCode
     *
     * The type of housing service provider used for this event. Refer to OpenTravel Code list Destination Service Provider Type (DSP).
     *
     * @return string
     */
    public function getHousingProviderCode()
    {
        return $this->housingProviderCode;
    }

    /**
     * Sets a new housingProviderCode
     *
     * The type of housing service provider used for this event. Refer to OpenTravel Code list Destination Service Provider Type (DSP).
     *
     * @param string $housingProviderCode
     * @return self
     */
    public function setHousingProviderCode($housingProviderCode)
    {
        $this->housingProviderCode = $housingProviderCode;
        return $this;
    }

    /**
     * Gets as housingProviderName
     *
     * Name of the housing service provider used for this event.
     *
     * @return string
     */
    public function getHousingProviderName()
    {
        return $this->housingProviderName;
    }

    /**
     * Sets a new housingProviderName
     *
     * Name of the housing service provider used for this event.
     *
     * @param string $housingProviderName
     * @return self
     */
    public function setHousingProviderName($housingProviderName)
    {
        $this->housingProviderName = $housingProviderName;
        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of comments regarding the general hotel usage.
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
     * A collection of comments regarding the general hotel usage.
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
     * A collection of comments regarding the general hotel usage.
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
     * A collection of comments regarding the general hotel usage.
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
     * A collection of comments regarding the general hotel usage.
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

