<?php

namespace Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType;

/**
 * Class representing AdditionalDatesAType
 */
class AdditionalDatesAType
{
    /**
     * Date information petaining to the exhibition.
     *
     * @var \Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\AdditionalDatesAType\AdditionalDateAType[] $additionalDate
     */
    private $additionalDate = [
        
    ];

    /**
     * Adds as additionalDate
     *
     * Date information petaining to the exhibition.
     *
     * @return self
     * @param \Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\AdditionalDatesAType\AdditionalDateAType $additionalDate
     */
    public function addToAdditionalDate(\Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\AdditionalDatesAType\AdditionalDateAType $additionalDate)
    {
        $this->additionalDate[] = $additionalDate;
        return $this;
    }

    /**
     * isset additionalDate
     *
     * Date information petaining to the exhibition.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalDate($index)
    {
        return isset($this->additionalDate[$index]);
    }

    /**
     * unset additionalDate
     *
     * Date information petaining to the exhibition.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalDate($index)
    {
        unset($this->additionalDate[$index]);
    }

    /**
     * Gets as additionalDate
     *
     * Date information petaining to the exhibition.
     *
     * @return \Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\AdditionalDatesAType\AdditionalDateAType[]
     */
    public function getAdditionalDate()
    {
        return $this->additionalDate;
    }

    /**
     * Sets a new additionalDate
     *
     * Date information petaining to the exhibition.
     *
     * @param \Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType\ExhibitionAType\AdditionalDatesAType\AdditionalDateAType[] $additionalDate
     * @return self
     */
    public function setAdditionalDate(array $additionalDate)
    {
        $this->additionalDate = $additionalDate;
        return $this;
    }
}

