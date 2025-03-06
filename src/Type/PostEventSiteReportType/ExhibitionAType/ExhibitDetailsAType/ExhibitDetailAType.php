<?php

namespace Recranet\OTA\Type\PostEventSiteReportType\ExhibitionAType\ExhibitDetailsAType;

/**
 * Class representing ExhibitDetailAType
 */
class ExhibitDetailAType
{
    /**
     * Type of booths for the entire exhibition. Refer to OpenTravel Code Table Exhibit Type (EXH).
     *
     * @var string $exhibitTypeCode
     */
    private $exhibitTypeCode = null;

    /**
     * @var float $area
     */
    private $area = null;

    /**
     * @var float $height
     */
    private $height = null;

    /**
     * @var float $length
     */
    private $length = null;

    /**
     * @var float $width
     */
    private $width = null;

    /**
     * This defines the unit in which the dimensions are expressed (e.g. it could be generic such as metric or imperial or specific such as inches, feet, yards, miles, millimeters, centimeters, meters, kilometers- according to usage).
     *
     * @var string $units
     */
    private $units = null;

    /**
     * The unit of measure in a code format. Refer to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @var string $unitOfMeasureCode
     */
    private $unitOfMeasureCode = null;

    /**
     * A collection of contacts for an exhibit.
     *
     * @var \Recranet\OTA\Type\ContactPersonType[] $contacts
     */
    private $contacts = null;

    /**
     * Gets as exhibitTypeCode
     *
     * Type of booths for the entire exhibition. Refer to OpenTravel Code Table Exhibit Type (EXH).
     *
     * @return string
     */
    public function getExhibitTypeCode()
    {
        return $this->exhibitTypeCode;
    }

    /**
     * Sets a new exhibitTypeCode
     *
     * Type of booths for the entire exhibition. Refer to OpenTravel Code Table Exhibit Type (EXH).
     *
     * @param string $exhibitTypeCode
     * @return self
     */
    public function setExhibitTypeCode($exhibitTypeCode)
    {
        $this->exhibitTypeCode = $exhibitTypeCode;
        return $this;
    }

    /**
     * Gets as area
     *
     * @return float
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Sets a new area
     *
     * @param float $area
     * @return self
     */
    public function setArea($area)
    {
        $this->area = $area;
        return $this;
    }

    /**
     * Gets as height
     *
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Sets a new height
     *
     * @param float $height
     * @return self
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * Gets as length
     *
     * @return float
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Sets a new length
     *
     * @param float $length
     * @return self
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * Gets as width
     *
     * @return float
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Sets a new width
     *
     * @param float $width
     * @return self
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * Gets as units
     *
     * This defines the unit in which the dimensions are expressed (e.g. it could be generic such as metric or imperial or specific such as inches, feet, yards, miles, millimeters, centimeters, meters, kilometers- according to usage).
     *
     * @return string
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * Sets a new units
     *
     * This defines the unit in which the dimensions are expressed (e.g. it could be generic such as metric or imperial or specific such as inches, feet, yards, miles, millimeters, centimeters, meters, kilometers- according to usage).
     *
     * @param string $units
     * @return self
     */
    public function setUnits($units)
    {
        $this->units = $units;
        return $this;
    }

    /**
     * Gets as unitOfMeasureCode
     *
     * The unit of measure in a code format. Refer to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @return string
     */
    public function getUnitOfMeasureCode()
    {
        return $this->unitOfMeasureCode;
    }

    /**
     * Sets a new unitOfMeasureCode
     *
     * The unit of measure in a code format. Refer to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @param string $unitOfMeasureCode
     * @return self
     */
    public function setUnitOfMeasureCode($unitOfMeasureCode)
    {
        $this->unitOfMeasureCode = $unitOfMeasureCode;
        return $this;
    }

    /**
     * Adds as contact
     *
     * A collection of contacts for an exhibit.
     *
     * @return self
     * @param \Recranet\OTA\Type\ContactPersonType $contact
     */
    public function addToContacts(\Recranet\OTA\Type\ContactPersonType $contact)
    {
        $this->contacts[] = $contact;
        return $this;
    }

    /**
     * isset contacts
     *
     * A collection of contacts for an exhibit.
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
     * A collection of contacts for an exhibit.
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
     * A collection of contacts for an exhibit.
     *
     * @return \Recranet\OTA\Type\ContactPersonType[]
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Sets a new contacts
     *
     * A collection of contacts for an exhibit.
     *
     * @param \Recranet\OTA\Type\ContactPersonType[] $contacts
     * @return self
     */
    public function setContacts(array $contacts = null)
    {
        $this->contacts = $contacts;
        return $this;
    }
}

