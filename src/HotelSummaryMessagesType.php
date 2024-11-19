<?php

namespace Recranet\OTA;

/**
 * Class representing HotelSummaryMessagesType
 *
 * Used to provide a notification of the general status of availability of the hotel, and its minimum and maximum rates.
 * XSD Type: HotelSummaryMessagesType
 */
class HotelSummaryMessagesType
{
    /**
     * The HotelSummaryMessage is the message that is used to provide a notification of the general status of availability of the hotel, and its minimum and maximum rates.
     *
     * @var \Recranet\OTA\HotelSummaryMessagesType\HotelSummaryMessageAType[] $hotelSummaryMessage
     */
    private $hotelSummaryMessage = [
        
    ];

    /**
     * Adds as hotelSummaryMessage
     *
     * The HotelSummaryMessage is the message that is used to provide a notification of the general status of availability of the hotel, and its minimum and maximum rates.
     *
     * @return self
     * @param \Recranet\OTA\HotelSummaryMessagesType\HotelSummaryMessageAType $hotelSummaryMessage
     */
    public function addToHotelSummaryMessage(\Recranet\OTA\HotelSummaryMessagesType\HotelSummaryMessageAType $hotelSummaryMessage)
    {
        $this->hotelSummaryMessage[] = $hotelSummaryMessage;
        return $this;
    }

    /**
     * isset hotelSummaryMessage
     *
     * The HotelSummaryMessage is the message that is used to provide a notification of the general status of availability of the hotel, and its minimum and maximum rates.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelSummaryMessage($index)
    {
        return isset($this->hotelSummaryMessage[$index]);
    }

    /**
     * unset hotelSummaryMessage
     *
     * The HotelSummaryMessage is the message that is used to provide a notification of the general status of availability of the hotel, and its minimum and maximum rates.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelSummaryMessage($index)
    {
        unset($this->hotelSummaryMessage[$index]);
    }

    /**
     * Gets as hotelSummaryMessage
     *
     * The HotelSummaryMessage is the message that is used to provide a notification of the general status of availability of the hotel, and its minimum and maximum rates.
     *
     * @return \Recranet\OTA\HotelSummaryMessagesType\HotelSummaryMessageAType[]
     */
    public function getHotelSummaryMessage()
    {
        return $this->hotelSummaryMessage;
    }

    /**
     * Sets a new hotelSummaryMessage
     *
     * The HotelSummaryMessage is the message that is used to provide a notification of the general status of availability of the hotel, and its minimum and maximum rates.
     *
     * @param \Recranet\OTA\HotelSummaryMessagesType\HotelSummaryMessageAType[] $hotelSummaryMessage
     * @return self
     */
    public function setHotelSummaryMessage(array $hotelSummaryMessage)
    {
        $this->hotelSummaryMessage = $hotelSummaryMessage;
        return $this;
    }
}

