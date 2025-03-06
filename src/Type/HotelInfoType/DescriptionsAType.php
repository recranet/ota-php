<?php

namespace Recranet\OTA\Type\HotelInfoType;

/**
 * Class representing DescriptionsAType
 */
class DescriptionsAType
{
    /**
     * Details of the hotel renovation.
     *
     * @var \Recranet\OTA\Type\HotelInfoType\DescriptionsAType\RenovationAType[] $renovation
     */
    private $renovation = [
        
    ];

    /**
     * Multimedia information about the hotel.
     *
     * @var \Recranet\OTA\Type\HotelInfoType\DescriptionsAType\MultimediaDescriptionsAType $multimediaDescriptions
     */
    private $multimediaDescriptions = null;

    /**
     * Descriptive text that describes the hotel.
     *
     * @var string $descriptiveText
     */
    private $descriptiveText = null;

    /**
     * Adds as renovation
     *
     * Details of the hotel renovation.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelInfoType\DescriptionsAType\RenovationAType $renovation
     */
    public function addToRenovation(\Recranet\OTA\Type\HotelInfoType\DescriptionsAType\RenovationAType $renovation)
    {
        $this->renovation[] = $renovation;
        return $this;
    }

    /**
     * isset renovation
     *
     * Details of the hotel renovation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRenovation($index)
    {
        return isset($this->renovation[$index]);
    }

    /**
     * unset renovation
     *
     * Details of the hotel renovation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRenovation($index)
    {
        unset($this->renovation[$index]);
    }

    /**
     * Gets as renovation
     *
     * Details of the hotel renovation.
     *
     * @return \Recranet\OTA\Type\HotelInfoType\DescriptionsAType\RenovationAType[]
     */
    public function getRenovation()
    {
        return $this->renovation;
    }

    /**
     * Sets a new renovation
     *
     * Details of the hotel renovation.
     *
     * @param \Recranet\OTA\Type\HotelInfoType\DescriptionsAType\RenovationAType[] $renovation
     * @return self
     */
    public function setRenovation(array $renovation = null)
    {
        $this->renovation = $renovation;
        return $this;
    }

    /**
     * Gets as multimediaDescriptions
     *
     * Multimedia information about the hotel.
     *
     * @return \Recranet\OTA\Type\HotelInfoType\DescriptionsAType\MultimediaDescriptionsAType
     */
    public function getMultimediaDescriptions()
    {
        return $this->multimediaDescriptions;
    }

    /**
     * Sets a new multimediaDescriptions
     *
     * Multimedia information about the hotel.
     *
     * @param \Recranet\OTA\Type\HotelInfoType\DescriptionsAType\MultimediaDescriptionsAType $multimediaDescriptions
     * @return self
     */
    public function setMultimediaDescriptions(?\Recranet\OTA\Type\HotelInfoType\DescriptionsAType\MultimediaDescriptionsAType $multimediaDescriptions = null)
    {
        $this->multimediaDescriptions = $multimediaDescriptions;
        return $this;
    }

    /**
     * Gets as descriptiveText
     *
     * Descriptive text that describes the hotel.
     *
     * @return string
     */
    public function getDescriptiveText()
    {
        return $this->descriptiveText;
    }

    /**
     * Sets a new descriptiveText
     *
     * Descriptive text that describes the hotel.
     *
     * @param string $descriptiveText
     * @return self
     */
    public function setDescriptiveText($descriptiveText)
    {
        $this->descriptiveText = $descriptiveText;
        return $this;
    }
}

