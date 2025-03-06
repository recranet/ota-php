<?php

namespace Recranet\OTA\Type\HotelInfoType;

/**
 * Class representing LanguagesAType
 */
class LanguagesAType
{
    /**
     * Language details pertaining to the hotel.
     *
     * @var \Recranet\OTA\Type\HotelInfoType\LanguagesAType\LanguageAType[] $language
     */
    private $language = [
        
    ];

    /**
     * Adds as language
     *
     * Language details pertaining to the hotel.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelInfoType\LanguagesAType\LanguageAType $language
     */
    public function addToLanguage(\Recranet\OTA\Type\HotelInfoType\LanguagesAType\LanguageAType $language)
    {
        $this->language[] = $language;
        return $this;
    }

    /**
     * isset language
     *
     * Language details pertaining to the hotel.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLanguage($index)
    {
        return isset($this->language[$index]);
    }

    /**
     * unset language
     *
     * Language details pertaining to the hotel.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLanguage($index)
    {
        unset($this->language[$index]);
    }

    /**
     * Gets as language
     *
     * Language details pertaining to the hotel.
     *
     * @return \Recranet\OTA\Type\HotelInfoType\LanguagesAType\LanguageAType[]
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * Language details pertaining to the hotel.
     *
     * @param \Recranet\OTA\Type\HotelInfoType\LanguagesAType\LanguageAType[] $language
     * @return self
     */
    public function setLanguage(array $language)
    {
        $this->language = $language;
        return $this;
    }
}

