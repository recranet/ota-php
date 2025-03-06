<?php

namespace Recranet\OTA\Type\OTAHotelDescriptiveInfoRQ\OTAHotelDescriptiveInfoRQAType;

/**
 * Class representing HotelDescriptiveInfosAType
 */
class HotelDescriptiveInfosAType
{
    /**
     * The requested language in which the hotel property information should be sent.
     *
     * @var string $langRequested
     */
    private $langRequested = null;

    /**
     * This allows the requestor to indicate which specific information is requested if complete hotel details are not required.
     *
     * @var \Recranet\OTA\Type\OTAHotelDescriptiveInfoRQ\OTAHotelDescriptiveInfoRQAType\HotelDescriptiveInfosAType\HotelDescriptiveInfoAType[] $hotelDescriptiveInfo
     */
    private $hotelDescriptiveInfo = [
        
    ];

    /**
     * Gets as langRequested
     *
     * The requested language in which the hotel property information should be sent.
     *
     * @return string
     */
    public function getLangRequested()
    {
        return $this->langRequested;
    }

    /**
     * Sets a new langRequested
     *
     * The requested language in which the hotel property information should be sent.
     *
     * @param string $langRequested
     * @return self
     */
    public function setLangRequested($langRequested)
    {
        $this->langRequested = $langRequested;
        return $this;
    }

    /**
     * Adds as hotelDescriptiveInfo
     *
     * This allows the requestor to indicate which specific information is requested if complete hotel details are not required.
     *
     * @return self
     * @param \Recranet\OTA\Type\OTAHotelDescriptiveInfoRQ\OTAHotelDescriptiveInfoRQAType\HotelDescriptiveInfosAType\HotelDescriptiveInfoAType $hotelDescriptiveInfo
     */
    public function addToHotelDescriptiveInfo(\Recranet\OTA\Type\OTAHotelDescriptiveInfoRQ\OTAHotelDescriptiveInfoRQAType\HotelDescriptiveInfosAType\HotelDescriptiveInfoAType $hotelDescriptiveInfo)
    {
        $this->hotelDescriptiveInfo[] = $hotelDescriptiveInfo;
        return $this;
    }

    /**
     * isset hotelDescriptiveInfo
     *
     * This allows the requestor to indicate which specific information is requested if complete hotel details are not required.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelDescriptiveInfo($index)
    {
        return isset($this->hotelDescriptiveInfo[$index]);
    }

    /**
     * unset hotelDescriptiveInfo
     *
     * This allows the requestor to indicate which specific information is requested if complete hotel details are not required.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelDescriptiveInfo($index)
    {
        unset($this->hotelDescriptiveInfo[$index]);
    }

    /**
     * Gets as hotelDescriptiveInfo
     *
     * This allows the requestor to indicate which specific information is requested if complete hotel details are not required.
     *
     * @return \Recranet\OTA\Type\OTAHotelDescriptiveInfoRQ\OTAHotelDescriptiveInfoRQAType\HotelDescriptiveInfosAType\HotelDescriptiveInfoAType[]
     */
    public function getHotelDescriptiveInfo()
    {
        return $this->hotelDescriptiveInfo;
    }

    /**
     * Sets a new hotelDescriptiveInfo
     *
     * This allows the requestor to indicate which specific information is requested if complete hotel details are not required.
     *
     * @param \Recranet\OTA\Type\OTAHotelDescriptiveInfoRQ\OTAHotelDescriptiveInfoRQAType\HotelDescriptiveInfosAType\HotelDescriptiveInfoAType[] $hotelDescriptiveInfo
     * @return self
     */
    public function setHotelDescriptiveInfo(array $hotelDescriptiveInfo)
    {
        $this->hotelDescriptiveInfo = $hotelDescriptiveInfo;
        return $this;
    }
}

