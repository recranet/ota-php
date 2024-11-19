<?php

namespace Recranet\OTA;

/**
 * Class representing SeatDetailsType
 *
 * Describes the row details in a seat map.
 * XSD Type: SeatDetailsType
 */
class SeatDetailsType
{
    /**
     * The grid number associated with the seat.
     *
     * @var int $gridNumber
     */
    private $gridNumber = null;

    /**
     * The column number associated with the seat.
     *
     * @var int $columnNumber
     */
    private $columnNumber = null;

    /**
     * If true, the seat is blocked.
     *
     * @var bool $blockedInd
     */
    private $blockedInd = null;

    /**
     * If true, ths seat is buffered.
     *
     * @var bool $bufferInd
     */
    private $bufferInd = null;

    /**
     * If true, this seat is a premium seat that may be subjected to additional fees.
     *
     * @var bool $premiumInd
     */
    private $premiumInd = null;

    /**
     * The type or level of premium seat.
     *
     * @var string $premiumCode
     */
    private $premiumCode = null;

    /**
     * If true, this seat is in a bulkhead row.
     *
     * @var bool $bulkheadInd
     */
    private $bulkheadInd = null;

    /**
     * If true, this seat is in an exit row.
     *
     * @var bool $exitRowInd
     */
    private $exitRowInd = null;

    /**
     * If true, this seat is near a gally.
     *
     * @var bool $galleyInd
     */
    private $galleyInd = null;

    /**
     * The section of the plane the seat is located in.
     *
     * @var string $planeSection
     */
    private $planeSection = null;

    /**
     * The number of columns the seat spans.
     *
     * @var int $columnSpan
     */
    private $columnSpan = null;

    /**
     * The number of rows the seat spans.
     *
     * @var int $rowSpan
     */
    private $rowSpan = null;

    /**
     * Summary seat information.
     *
     * @var \Recranet\OTA\SeatSummaryType $summary
     */
    private $summary = null;

    /**
     * Amenities associated with a seat with optional fees.
     *
     * @var \Recranet\OTA\SeatDetailsType\AmenityAType[] $amenity
     */
    private $amenity = [
        
    ];

    /**
     * The seat availability. Select an item from the list or select the "Other_" value and enter a value known to trading partners in the @extension attribute.
     *
     * @var \Recranet\OTA\AirSeatAvailabilityType $availability
     */
    private $availability = null;

    /**
     * Seat description.
     *
     * @var \Recranet\OTA\FormattedTextTextType[] $description
     */
    private $description = [
        
    ];

    /**
     * An extensible list of seat features. Select an existing value from the list or select the "Other_" value and enter a value known to trading partners in the @extension attribute.
     *
     * @var \Recranet\OTA\SeatFeaturesType[] $features
     */
    private $features = [
        
    ];

    /**
     * Remarks about the seat.
     *
     * @var string $remarks
     */
    private $remarks = null;

    /**
     * Service(s) associated with a seat with optional fees.
     *
     * @var \Recranet\OTA\SeatDetailsType\ServiceAType[] $service
     */
    private $service = [
        
    ];

    /**
     * An extensible list of seat status types. Select an existing value from the list or use "Other_" and the @extension attribute to add a new value known between trading partners.
     *
     * @var \Recranet\OTA\StatusType[] $status
     */
    private $status = [
        
    ];

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as gridNumber
     *
     * The grid number associated with the seat.
     *
     * @return int
     */
    public function getGridNumber()
    {
        return $this->gridNumber;
    }

    /**
     * Sets a new gridNumber
     *
     * The grid number associated with the seat.
     *
     * @param int $gridNumber
     * @return self
     */
    public function setGridNumber($gridNumber)
    {
        $this->gridNumber = $gridNumber;
        return $this;
    }

    /**
     * Gets as columnNumber
     *
     * The column number associated with the seat.
     *
     * @return int
     */
    public function getColumnNumber()
    {
        return $this->columnNumber;
    }

    /**
     * Sets a new columnNumber
     *
     * The column number associated with the seat.
     *
     * @param int $columnNumber
     * @return self
     */
    public function setColumnNumber($columnNumber)
    {
        $this->columnNumber = $columnNumber;
        return $this;
    }

    /**
     * Gets as blockedInd
     *
     * If true, the seat is blocked.
     *
     * @return bool
     */
    public function getBlockedInd()
    {
        return $this->blockedInd;
    }

    /**
     * Sets a new blockedInd
     *
     * If true, the seat is blocked.
     *
     * @param bool $blockedInd
     * @return self
     */
    public function setBlockedInd($blockedInd)
    {
        $this->blockedInd = $blockedInd;
        return $this;
    }

    /**
     * Gets as bufferInd
     *
     * If true, ths seat is buffered.
     *
     * @return bool
     */
    public function getBufferInd()
    {
        return $this->bufferInd;
    }

    /**
     * Sets a new bufferInd
     *
     * If true, ths seat is buffered.
     *
     * @param bool $bufferInd
     * @return self
     */
    public function setBufferInd($bufferInd)
    {
        $this->bufferInd = $bufferInd;
        return $this;
    }

    /**
     * Gets as premiumInd
     *
     * If true, this seat is a premium seat that may be subjected to additional fees.
     *
     * @return bool
     */
    public function getPremiumInd()
    {
        return $this->premiumInd;
    }

    /**
     * Sets a new premiumInd
     *
     * If true, this seat is a premium seat that may be subjected to additional fees.
     *
     * @param bool $premiumInd
     * @return self
     */
    public function setPremiumInd($premiumInd)
    {
        $this->premiumInd = $premiumInd;
        return $this;
    }

    /**
     * Gets as premiumCode
     *
     * The type or level of premium seat.
     *
     * @return string
     */
    public function getPremiumCode()
    {
        return $this->premiumCode;
    }

    /**
     * Sets a new premiumCode
     *
     * The type or level of premium seat.
     *
     * @param string $premiumCode
     * @return self
     */
    public function setPremiumCode($premiumCode)
    {
        $this->premiumCode = $premiumCode;
        return $this;
    }

    /**
     * Gets as bulkheadInd
     *
     * If true, this seat is in a bulkhead row.
     *
     * @return bool
     */
    public function getBulkheadInd()
    {
        return $this->bulkheadInd;
    }

    /**
     * Sets a new bulkheadInd
     *
     * If true, this seat is in a bulkhead row.
     *
     * @param bool $bulkheadInd
     * @return self
     */
    public function setBulkheadInd($bulkheadInd)
    {
        $this->bulkheadInd = $bulkheadInd;
        return $this;
    }

    /**
     * Gets as exitRowInd
     *
     * If true, this seat is in an exit row.
     *
     * @return bool
     */
    public function getExitRowInd()
    {
        return $this->exitRowInd;
    }

    /**
     * Sets a new exitRowInd
     *
     * If true, this seat is in an exit row.
     *
     * @param bool $exitRowInd
     * @return self
     */
    public function setExitRowInd($exitRowInd)
    {
        $this->exitRowInd = $exitRowInd;
        return $this;
    }

    /**
     * Gets as galleyInd
     *
     * If true, this seat is near a gally.
     *
     * @return bool
     */
    public function getGalleyInd()
    {
        return $this->galleyInd;
    }

    /**
     * Sets a new galleyInd
     *
     * If true, this seat is near a gally.
     *
     * @param bool $galleyInd
     * @return self
     */
    public function setGalleyInd($galleyInd)
    {
        $this->galleyInd = $galleyInd;
        return $this;
    }

    /**
     * Gets as planeSection
     *
     * The section of the plane the seat is located in.
     *
     * @return string
     */
    public function getPlaneSection()
    {
        return $this->planeSection;
    }

    /**
     * Sets a new planeSection
     *
     * The section of the plane the seat is located in.
     *
     * @param string $planeSection
     * @return self
     */
    public function setPlaneSection($planeSection)
    {
        $this->planeSection = $planeSection;
        return $this;
    }

    /**
     * Gets as columnSpan
     *
     * The number of columns the seat spans.
     *
     * @return int
     */
    public function getColumnSpan()
    {
        return $this->columnSpan;
    }

    /**
     * Sets a new columnSpan
     *
     * The number of columns the seat spans.
     *
     * @param int $columnSpan
     * @return self
     */
    public function setColumnSpan($columnSpan)
    {
        $this->columnSpan = $columnSpan;
        return $this;
    }

    /**
     * Gets as rowSpan
     *
     * The number of rows the seat spans.
     *
     * @return int
     */
    public function getRowSpan()
    {
        return $this->rowSpan;
    }

    /**
     * Sets a new rowSpan
     *
     * The number of rows the seat spans.
     *
     * @param int $rowSpan
     * @return self
     */
    public function setRowSpan($rowSpan)
    {
        $this->rowSpan = $rowSpan;
        return $this;
    }

    /**
     * Gets as summary
     *
     * Summary seat information.
     *
     * @return \Recranet\OTA\SeatSummaryType
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Sets a new summary
     *
     * Summary seat information.
     *
     * @param \Recranet\OTA\SeatSummaryType $summary
     * @return self
     */
    public function setSummary(?\Recranet\OTA\SeatSummaryType $summary = null)
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * Adds as amenity
     *
     * Amenities associated with a seat with optional fees.
     *
     * @return self
     * @param \Recranet\OTA\SeatDetailsType\AmenityAType $amenity
     */
    public function addToAmenity(\Recranet\OTA\SeatDetailsType\AmenityAType $amenity)
    {
        $this->amenity[] = $amenity;
        return $this;
    }

    /**
     * isset amenity
     *
     * Amenities associated with a seat with optional fees.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAmenity($index)
    {
        return isset($this->amenity[$index]);
    }

    /**
     * unset amenity
     *
     * Amenities associated with a seat with optional fees.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAmenity($index)
    {
        unset($this->amenity[$index]);
    }

    /**
     * Gets as amenity
     *
     * Amenities associated with a seat with optional fees.
     *
     * @return \Recranet\OTA\SeatDetailsType\AmenityAType[]
     */
    public function getAmenity()
    {
        return $this->amenity;
    }

    /**
     * Sets a new amenity
     *
     * Amenities associated with a seat with optional fees.
     *
     * @param \Recranet\OTA\SeatDetailsType\AmenityAType[] $amenity
     * @return self
     */
    public function setAmenity(array $amenity = null)
    {
        $this->amenity = $amenity;
        return $this;
    }

    /**
     * Gets as availability
     *
     * The seat availability. Select an item from the list or select the "Other_" value and enter a value known to trading partners in the @extension attribute.
     *
     * @return \Recranet\OTA\AirSeatAvailabilityType
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Sets a new availability
     *
     * The seat availability. Select an item from the list or select the "Other_" value and enter a value known to trading partners in the @extension attribute.
     *
     * @param \Recranet\OTA\AirSeatAvailabilityType $availability
     * @return self
     */
    public function setAvailability(?\Recranet\OTA\AirSeatAvailabilityType $availability = null)
    {
        $this->availability = $availability;
        return $this;
    }

    /**
     * Adds as description
     *
     * Seat description.
     *
     * @return self
     * @param \Recranet\OTA\FormattedTextTextType $description
     */
    public function addToDescription(\Recranet\OTA\FormattedTextTextType $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * Seat description.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * Seat description.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * Seat description.
     *
     * @return \Recranet\OTA\FormattedTextTextType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Seat description.
     *
     * @param \Recranet\OTA\FormattedTextTextType[] $description
     * @return self
     */
    public function setDescription(array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as features
     *
     * An extensible list of seat features. Select an existing value from the list or select the "Other_" value and enter a value known to trading partners in the @extension attribute.
     *
     * @return self
     * @param \Recranet\OTA\SeatFeaturesType $features
     */
    public function addToFeatures(\Recranet\OTA\SeatFeaturesType $features)
    {
        $this->features[] = $features;
        return $this;
    }

    /**
     * isset features
     *
     * An extensible list of seat features. Select an existing value from the list or select the "Other_" value and enter a value known to trading partners in the @extension attribute.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFeatures($index)
    {
        return isset($this->features[$index]);
    }

    /**
     * unset features
     *
     * An extensible list of seat features. Select an existing value from the list or select the "Other_" value and enter a value known to trading partners in the @extension attribute.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFeatures($index)
    {
        unset($this->features[$index]);
    }

    /**
     * Gets as features
     *
     * An extensible list of seat features. Select an existing value from the list or select the "Other_" value and enter a value known to trading partners in the @extension attribute.
     *
     * @return \Recranet\OTA\SeatFeaturesType[]
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * Sets a new features
     *
     * An extensible list of seat features. Select an existing value from the list or select the "Other_" value and enter a value known to trading partners in the @extension attribute.
     *
     * @param \Recranet\OTA\SeatFeaturesType[] $features
     * @return self
     */
    public function setFeatures(array $features = null)
    {
        $this->features = $features;
        return $this;
    }

    /**
     * Gets as remarks
     *
     * Remarks about the seat.
     *
     * @return string
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * Sets a new remarks
     *
     * Remarks about the seat.
     *
     * @param string $remarks
     * @return self
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;
        return $this;
    }

    /**
     * Adds as service
     *
     * Service(s) associated with a seat with optional fees.
     *
     * @return self
     * @param \Recranet\OTA\SeatDetailsType\ServiceAType $service
     */
    public function addToService(\Recranet\OTA\SeatDetailsType\ServiceAType $service)
    {
        $this->service[] = $service;
        return $this;
    }

    /**
     * isset service
     *
     * Service(s) associated with a seat with optional fees.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetService($index)
    {
        return isset($this->service[$index]);
    }

    /**
     * unset service
     *
     * Service(s) associated with a seat with optional fees.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetService($index)
    {
        unset($this->service[$index]);
    }

    /**
     * Gets as service
     *
     * Service(s) associated with a seat with optional fees.
     *
     * @return \Recranet\OTA\SeatDetailsType\ServiceAType[]
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * Service(s) associated with a seat with optional fees.
     *
     * @param \Recranet\OTA\SeatDetailsType\ServiceAType[] $service
     * @return self
     */
    public function setService(array $service = null)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * Adds as status
     *
     * An extensible list of seat status types. Select an existing value from the list or use "Other_" and the @extension attribute to add a new value known between trading partners.
     *
     * @return self
     * @param \Recranet\OTA\StatusType $status
     */
    public function addToStatus(\Recranet\OTA\StatusType $status)
    {
        $this->status[] = $status;
        return $this;
    }

    /**
     * isset status
     *
     * An extensible list of seat status types. Select an existing value from the list or use "Other_" and the @extension attribute to add a new value known between trading partners.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStatus($index)
    {
        return isset($this->status[$index]);
    }

    /**
     * unset status
     *
     * An extensible list of seat status types. Select an existing value from the list or use "Other_" and the @extension attribute to add a new value known between trading partners.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStatus($index)
    {
        unset($this->status[$index]);
    }

    /**
     * Gets as status
     *
     * An extensible list of seat status types. Select an existing value from the list or use "Other_" and the @extension attribute to add a new value known between trading partners.
     *
     * @return \Recranet\OTA\StatusType[]
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * An extensible list of seat status types. Select an existing value from the list or use "Other_" and the @extension attribute to add a new value known between trading partners.
     *
     * @param \Recranet\OTA\StatusType[] $status
     * @return self
     */
    public function setStatus(array $status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

