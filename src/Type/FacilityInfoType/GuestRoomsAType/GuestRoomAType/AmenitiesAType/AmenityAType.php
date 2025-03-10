<?php

namespace Recranet\OTA\Type\FacilityInfoType\GuestRoomsAType\GuestRoomAType\AmenitiesAType;

/**
 * Class representing AmenityAType
 */
class AmenityAType
{
    /**
     * Refer to OpenTravel Code List Room Amenity Type (RMA).
     *
     * @var string $roomAmenityCode
     */
    private $roomAmenityCode = null;

    /**
     * When true, this indicates that the amenity or service is included in the room rate (i.e., this service or amenity has no additional charge).
     *
     * @var bool $includedInRateIndicator
     */
    private $includedInRateIndicator = null;

    /**
     * This attribute is used to explicitly define whether an amenity or service is offered. Refer to the OpenTravel Code List Option Type Code (OTC). This is used in conjunction with RoomAmenityCode.
     *
     * @var string $existsCode
     */
    private $existsCode = null;

    /**
     * If true, this item is obsolete and should be removed from the receiving system.
     *
     *  false
     *
     * @var bool $removal
     */
    private $removal = null;

    /**
     * May be used to give further detail on the code.
     *
     * @var string $codeDetail
     */
    private $codeDetail = null;

    /**
     * Used to define the quantity for an associated element or attribute.
     *
     * @var int $quantity
     */
    private $quantity = null;

    /**
     * A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a particular implementation.
     *
     * @var string $iD
     */
    private $iD = null;

    /**
     * Collection of days, times, and fees.
     *
     * @var \Recranet\OTA\Type\OperationSchedulesPlusChargeType\OperationScheduleAType[] $operationSchedules
     */
    private $operationSchedules = null;

    /**
     * Used to include additional information regarding the amenity (e.g. the provider of the service).
     *
     * @var \Recranet\OTA\Type\ContactInfoRootType[] $contactInfo
     */
    private $contactInfo = [
        
    ];

    /**
     * Multimedia information about the amenity.
     *
     * @var \Recranet\OTA\Type\MultimediaDescriptionsType $multimediaDescriptions
     */
    private $multimediaDescriptions = null;

    /**
     * Descriptive text that describes the amenity.
     *
     * @var string $descriptiveText
     */
    private $descriptiveText = null;

    /**
     * Gets as roomAmenityCode
     *
     * Refer to OpenTravel Code List Room Amenity Type (RMA).
     *
     * @return string
     */
    public function getRoomAmenityCode()
    {
        return $this->roomAmenityCode;
    }

    /**
     * Sets a new roomAmenityCode
     *
     * Refer to OpenTravel Code List Room Amenity Type (RMA).
     *
     * @param string $roomAmenityCode
     * @return self
     */
    public function setRoomAmenityCode($roomAmenityCode)
    {
        $this->roomAmenityCode = $roomAmenityCode;
        return $this;
    }

    /**
     * Gets as includedInRateIndicator
     *
     * When true, this indicates that the amenity or service is included in the room rate (i.e., this service or amenity has no additional charge).
     *
     * @return bool
     */
    public function getIncludedInRateIndicator()
    {
        return $this->includedInRateIndicator;
    }

    /**
     * Sets a new includedInRateIndicator
     *
     * When true, this indicates that the amenity or service is included in the room rate (i.e., this service or amenity has no additional charge).
     *
     * @param bool $includedInRateIndicator
     * @return self
     */
    public function setIncludedInRateIndicator($includedInRateIndicator)
    {
        $this->includedInRateIndicator = $includedInRateIndicator;
        return $this;
    }

    /**
     * Gets as existsCode
     *
     * This attribute is used to explicitly define whether an amenity or service is offered. Refer to the OpenTravel Code List Option Type Code (OTC). This is used in conjunction with RoomAmenityCode.
     *
     * @return string
     */
    public function getExistsCode()
    {
        return $this->existsCode;
    }

    /**
     * Sets a new existsCode
     *
     * This attribute is used to explicitly define whether an amenity or service is offered. Refer to the OpenTravel Code List Option Type Code (OTC). This is used in conjunction with RoomAmenityCode.
     *
     * @param string $existsCode
     * @return self
     */
    public function setExistsCode($existsCode)
    {
        $this->existsCode = $existsCode;
        return $this;
    }

    /**
     * Gets as removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *
     *  false
     *
     * @return bool
     */
    public function getRemoval()
    {
        return $this->removal;
    }

    /**
     * Sets a new removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *
     *  false
     *
     * @param bool $removal
     * @return self
     */
    public function setRemoval($removal)
    {
        $this->removal = $removal;
        return $this;
    }

    /**
     * Gets as codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @return string
     */
    public function getCodeDetail()
    {
        return $this->codeDetail;
    }

    /**
     * Sets a new codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @param string $codeDetail
     * @return self
     */
    public function setCodeDetail($codeDetail)
    {
        $this->codeDetail = $codeDetail;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * Used to define the quantity for an associated element or attribute.
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Used to define the quantity for an associated element or attribute.
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as iD
     *
     * A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a particular implementation.
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a particular implementation.
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Adds as operationSchedule
     *
     * Collection of days, times, and fees.
     *
     * @return self
     * @param \Recranet\OTA\Type\OperationSchedulesPlusChargeType\OperationScheduleAType $operationSchedule
     */
    public function addToOperationSchedules(\Recranet\OTA\Type\OperationSchedulesPlusChargeType\OperationScheduleAType $operationSchedule)
    {
        $this->operationSchedules[] = $operationSchedule;
        return $this;
    }

    /**
     * isset operationSchedules
     *
     * Collection of days, times, and fees.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOperationSchedules($index)
    {
        return isset($this->operationSchedules[$index]);
    }

    /**
     * unset operationSchedules
     *
     * Collection of days, times, and fees.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOperationSchedules($index)
    {
        unset($this->operationSchedules[$index]);
    }

    /**
     * Gets as operationSchedules
     *
     * Collection of days, times, and fees.
     *
     * @return \Recranet\OTA\Type\OperationSchedulesPlusChargeType\OperationScheduleAType[]
     */
    public function getOperationSchedules()
    {
        return $this->operationSchedules;
    }

    /**
     * Sets a new operationSchedules
     *
     * Collection of days, times, and fees.
     *
     * @param \Recranet\OTA\Type\OperationSchedulesPlusChargeType\OperationScheduleAType[] $operationSchedules
     * @return self
     */
    public function setOperationSchedules(array $operationSchedules = null)
    {
        $this->operationSchedules = $operationSchedules;
        return $this;
    }

    /**
     * Adds as contactInfo
     *
     * Used to include additional information regarding the amenity (e.g. the provider of the service).
     *
     * @return self
     * @param \Recranet\OTA\Type\ContactInfoRootType $contactInfo
     */
    public function addToContactInfo(\Recranet\OTA\Type\ContactInfoRootType $contactInfo)
    {
        $this->contactInfo[] = $contactInfo;
        return $this;
    }

    /**
     * isset contactInfo
     *
     * Used to include additional information regarding the amenity (e.g. the provider of the service).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContactInfo($index)
    {
        return isset($this->contactInfo[$index]);
    }

    /**
     * unset contactInfo
     *
     * Used to include additional information regarding the amenity (e.g. the provider of the service).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContactInfo($index)
    {
        unset($this->contactInfo[$index]);
    }

    /**
     * Gets as contactInfo
     *
     * Used to include additional information regarding the amenity (e.g. the provider of the service).
     *
     * @return \Recranet\OTA\Type\ContactInfoRootType[]
     */
    public function getContactInfo()
    {
        return $this->contactInfo;
    }

    /**
     * Sets a new contactInfo
     *
     * Used to include additional information regarding the amenity (e.g. the provider of the service).
     *
     * @param \Recranet\OTA\Type\ContactInfoRootType[] $contactInfo
     * @return self
     */
    public function setContactInfo(array $contactInfo = null)
    {
        $this->contactInfo = $contactInfo;
        return $this;
    }

    /**
     * Gets as multimediaDescriptions
     *
     * Multimedia information about the amenity.
     *
     * @return \Recranet\OTA\Type\MultimediaDescriptionsType
     */
    public function getMultimediaDescriptions()
    {
        return $this->multimediaDescriptions;
    }

    /**
     * Sets a new multimediaDescriptions
     *
     * Multimedia information about the amenity.
     *
     * @param \Recranet\OTA\Type\MultimediaDescriptionsType $multimediaDescriptions
     * @return self
     */
    public function setMultimediaDescriptions(?\Recranet\OTA\Type\MultimediaDescriptionsType $multimediaDescriptions = null)
    {
        $this->multimediaDescriptions = $multimediaDescriptions;
        return $this;
    }

    /**
     * Gets as descriptiveText
     *
     * Descriptive text that describes the amenity.
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
     * Descriptive text that describes the amenity.
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

