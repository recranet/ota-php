<?php

namespace Recranet\OTA\Type;

/**
 * Class representing CategoryCodesType
 *
 * Used to define specific hotel information such as the type, location and architectural style.
 * XSD Type: CategoryCodesType
 */
class CategoryCodesType
{
    /**
     * Defines the general location of the hotel such as airport, suburban, downtown.
     *
     * @var \Recranet\OTA\Type\CategoryCodesType\LocationCategoryAType[] $locationCategory
     */
    private $locationCategory = [
        
    ];

    /**
     * Defines the type of hotel such as luxury, extended stay, economy.
     *
     * @var \Recranet\OTA\Type\CategoryCodesType\SegmentCategoryAType[] $segmentCategory
     */
    private $segmentCategory = [
        
    ];

    /**
     * Defines the particular type of hotel (e.g., golf, ski, bed and breakfast).
     *
     * @var \Recranet\OTA\Type\CategoryCodesType\HotelCategoryAType[] $hotelCategory
     */
    private $hotelCategory = [
        
    ];

    /**
     * Describes the appearance of the building such as art deco, modern, historic.
     *
     * @var \Recranet\OTA\Type\CategoryCodesType\ArchitecturalStyleAType[] $architecturalStyle
     */
    private $architecturalStyle = [
        
    ];

    /**
     * The types and quantities of guest rooms at a hotel.
     *
     * @var \Recranet\OTA\Type\CategoryCodesType\GuestRoomInfoAType[] $guestRoomInfo
     */
    private $guestRoomInfo = [
        
    ];

    /**
     * Adds as locationCategory
     *
     * Defines the general location of the hotel such as airport, suburban, downtown.
     *
     * @return self
     * @param \Recranet\OTA\Type\CategoryCodesType\LocationCategoryAType $locationCategory
     */
    public function addToLocationCategory(\Recranet\OTA\Type\CategoryCodesType\LocationCategoryAType $locationCategory)
    {
        $this->locationCategory[] = $locationCategory;
        return $this;
    }

    /**
     * isset locationCategory
     *
     * Defines the general location of the hotel such as airport, suburban, downtown.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLocationCategory($index)
    {
        return isset($this->locationCategory[$index]);
    }

    /**
     * unset locationCategory
     *
     * Defines the general location of the hotel such as airport, suburban, downtown.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLocationCategory($index)
    {
        unset($this->locationCategory[$index]);
    }

    /**
     * Gets as locationCategory
     *
     * Defines the general location of the hotel such as airport, suburban, downtown.
     *
     * @return \Recranet\OTA\Type\CategoryCodesType\LocationCategoryAType[]
     */
    public function getLocationCategory()
    {
        return $this->locationCategory;
    }

    /**
     * Sets a new locationCategory
     *
     * Defines the general location of the hotel such as airport, suburban, downtown.
     *
     * @param \Recranet\OTA\Type\CategoryCodesType\LocationCategoryAType[] $locationCategory
     * @return self
     */
    public function setLocationCategory(array $locationCategory = null)
    {
        $this->locationCategory = $locationCategory;
        return $this;
    }

    /**
     * Adds as segmentCategory
     *
     * Defines the type of hotel such as luxury, extended stay, economy.
     *
     * @return self
     * @param \Recranet\OTA\Type\CategoryCodesType\SegmentCategoryAType $segmentCategory
     */
    public function addToSegmentCategory(\Recranet\OTA\Type\CategoryCodesType\SegmentCategoryAType $segmentCategory)
    {
        $this->segmentCategory[] = $segmentCategory;
        return $this;
    }

    /**
     * isset segmentCategory
     *
     * Defines the type of hotel such as luxury, extended stay, economy.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSegmentCategory($index)
    {
        return isset($this->segmentCategory[$index]);
    }

    /**
     * unset segmentCategory
     *
     * Defines the type of hotel such as luxury, extended stay, economy.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSegmentCategory($index)
    {
        unset($this->segmentCategory[$index]);
    }

    /**
     * Gets as segmentCategory
     *
     * Defines the type of hotel such as luxury, extended stay, economy.
     *
     * @return \Recranet\OTA\Type\CategoryCodesType\SegmentCategoryAType[]
     */
    public function getSegmentCategory()
    {
        return $this->segmentCategory;
    }

    /**
     * Sets a new segmentCategory
     *
     * Defines the type of hotel such as luxury, extended stay, economy.
     *
     * @param \Recranet\OTA\Type\CategoryCodesType\SegmentCategoryAType[] $segmentCategory
     * @return self
     */
    public function setSegmentCategory(array $segmentCategory = null)
    {
        $this->segmentCategory = $segmentCategory;
        return $this;
    }

    /**
     * Adds as hotelCategory
     *
     * Defines the particular type of hotel (e.g., golf, ski, bed and breakfast).
     *
     * @return self
     * @param \Recranet\OTA\Type\CategoryCodesType\HotelCategoryAType $hotelCategory
     */
    public function addToHotelCategory(\Recranet\OTA\Type\CategoryCodesType\HotelCategoryAType $hotelCategory)
    {
        $this->hotelCategory[] = $hotelCategory;
        return $this;
    }

    /**
     * isset hotelCategory
     *
     * Defines the particular type of hotel (e.g., golf, ski, bed and breakfast).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelCategory($index)
    {
        return isset($this->hotelCategory[$index]);
    }

    /**
     * unset hotelCategory
     *
     * Defines the particular type of hotel (e.g., golf, ski, bed and breakfast).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelCategory($index)
    {
        unset($this->hotelCategory[$index]);
    }

    /**
     * Gets as hotelCategory
     *
     * Defines the particular type of hotel (e.g., golf, ski, bed and breakfast).
     *
     * @return \Recranet\OTA\Type\CategoryCodesType\HotelCategoryAType[]
     */
    public function getHotelCategory()
    {
        return $this->hotelCategory;
    }

    /**
     * Sets a new hotelCategory
     *
     * Defines the particular type of hotel (e.g., golf, ski, bed and breakfast).
     *
     * @param \Recranet\OTA\Type\CategoryCodesType\HotelCategoryAType[] $hotelCategory
     * @return self
     */
    public function setHotelCategory(array $hotelCategory = null)
    {
        $this->hotelCategory = $hotelCategory;
        return $this;
    }

    /**
     * Adds as architecturalStyle
     *
     * Describes the appearance of the building such as art deco, modern, historic.
     *
     * @return self
     * @param \Recranet\OTA\Type\CategoryCodesType\ArchitecturalStyleAType $architecturalStyle
     */
    public function addToArchitecturalStyle(\Recranet\OTA\Type\CategoryCodesType\ArchitecturalStyleAType $architecturalStyle)
    {
        $this->architecturalStyle[] = $architecturalStyle;
        return $this;
    }

    /**
     * isset architecturalStyle
     *
     * Describes the appearance of the building such as art deco, modern, historic.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetArchitecturalStyle($index)
    {
        return isset($this->architecturalStyle[$index]);
    }

    /**
     * unset architecturalStyle
     *
     * Describes the appearance of the building such as art deco, modern, historic.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetArchitecturalStyle($index)
    {
        unset($this->architecturalStyle[$index]);
    }

    /**
     * Gets as architecturalStyle
     *
     * Describes the appearance of the building such as art deco, modern, historic.
     *
     * @return \Recranet\OTA\Type\CategoryCodesType\ArchitecturalStyleAType[]
     */
    public function getArchitecturalStyle()
    {
        return $this->architecturalStyle;
    }

    /**
     * Sets a new architecturalStyle
     *
     * Describes the appearance of the building such as art deco, modern, historic.
     *
     * @param \Recranet\OTA\Type\CategoryCodesType\ArchitecturalStyleAType[] $architecturalStyle
     * @return self
     */
    public function setArchitecturalStyle(array $architecturalStyle = null)
    {
        $this->architecturalStyle = $architecturalStyle;
        return $this;
    }

    /**
     * Adds as guestRoomInfo
     *
     * The types and quantities of guest rooms at a hotel.
     *
     * @return self
     * @param \Recranet\OTA\Type\CategoryCodesType\GuestRoomInfoAType $guestRoomInfo
     */
    public function addToGuestRoomInfo(\Recranet\OTA\Type\CategoryCodesType\GuestRoomInfoAType $guestRoomInfo)
    {
        $this->guestRoomInfo[] = $guestRoomInfo;
        return $this;
    }

    /**
     * isset guestRoomInfo
     *
     * The types and quantities of guest rooms at a hotel.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuestRoomInfo($index)
    {
        return isset($this->guestRoomInfo[$index]);
    }

    /**
     * unset guestRoomInfo
     *
     * The types and quantities of guest rooms at a hotel.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuestRoomInfo($index)
    {
        unset($this->guestRoomInfo[$index]);
    }

    /**
     * Gets as guestRoomInfo
     *
     * The types and quantities of guest rooms at a hotel.
     *
     * @return \Recranet\OTA\Type\CategoryCodesType\GuestRoomInfoAType[]
     */
    public function getGuestRoomInfo()
    {
        return $this->guestRoomInfo;
    }

    /**
     * Sets a new guestRoomInfo
     *
     * The types and quantities of guest rooms at a hotel.
     *
     * @param \Recranet\OTA\Type\CategoryCodesType\GuestRoomInfoAType[] $guestRoomInfo
     * @return self
     */
    public function setGuestRoomInfo(array $guestRoomInfo = null)
    {
        $this->guestRoomInfo = $guestRoomInfo;
        return $this;
    }
}

