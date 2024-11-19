<?php

namespace Recranet\OTA\EventReportType\GeneralEventInfoAType;

/**
 * Class representing ExhibitionInfoAType
 */
class ExhibitionInfoAType
{
    /**
     * When true, indicates the event required exhibition space.
     *
     * @var bool $exhibitionSpaceIndicator
     */
    private $exhibitionSpaceIndicator = null;

    /**
     * Used to indicate the type of facilities used for this exhibition. Refer to OpenTravel Code List Property Class Type (PCT).
     *
     * @var string[] $propertyTypeCode
     */
    private $propertyTypeCode = null;

    /**
     * Gets as exhibitionSpaceIndicator
     *
     * When true, indicates the event required exhibition space.
     *
     * @return bool
     */
    public function getExhibitionSpaceIndicator()
    {
        return $this->exhibitionSpaceIndicator;
    }

    /**
     * Sets a new exhibitionSpaceIndicator
     *
     * When true, indicates the event required exhibition space.
     *
     * @param bool $exhibitionSpaceIndicator
     * @return self
     */
    public function setExhibitionSpaceIndicator($exhibitionSpaceIndicator)
    {
        $this->exhibitionSpaceIndicator = $exhibitionSpaceIndicator;
        return $this;
    }

    /**
     * Adds as propertyTypeCode
     *
     * Used to indicate the type of facilities used for this exhibition. Refer to OpenTravel Code List Property Class Type (PCT).
     *
     * @return self
     * @param string $propertyTypeCode
     */
    public function addToPropertyTypeCode($propertyTypeCode)
    {
        $this->propertyTypeCode[] = $propertyTypeCode;
        return $this;
    }

    /**
     * isset propertyTypeCode
     *
     * Used to indicate the type of facilities used for this exhibition. Refer to OpenTravel Code List Property Class Type (PCT).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPropertyTypeCode($index)
    {
        return isset($this->propertyTypeCode[$index]);
    }

    /**
     * unset propertyTypeCode
     *
     * Used to indicate the type of facilities used for this exhibition. Refer to OpenTravel Code List Property Class Type (PCT).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPropertyTypeCode($index)
    {
        unset($this->propertyTypeCode[$index]);
    }

    /**
     * Gets as propertyTypeCode
     *
     * Used to indicate the type of facilities used for this exhibition. Refer to OpenTravel Code List Property Class Type (PCT).
     *
     * @return string[]
     */
    public function getPropertyTypeCode()
    {
        return $this->propertyTypeCode;
    }

    /**
     * Sets a new propertyTypeCode
     *
     * Used to indicate the type of facilities used for this exhibition. Refer to OpenTravel Code List Property Class Type (PCT).
     *
     * @param string $propertyTypeCode
     * @return self
     */
    public function setPropertyTypeCode(array $propertyTypeCode)
    {
        $this->propertyTypeCode = $propertyTypeCode;
        return $this;
    }
}

