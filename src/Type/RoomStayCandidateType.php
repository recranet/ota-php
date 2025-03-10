<?php

namespace Recranet\OTA\Type;

/**
 * Class representing RoomStayCandidateType
 *
 * Used to identify available room products.
 * XSD Type: RoomStayCandidateType
 */
class RoomStayCandidateType
{
    /**
     * (Formerly, RoomInventoryCode) A code value that indicates the type of room for which this request is made, e.g.: double, king, etc. Values may use the Hotel Descriptive Content table or a codes specific to the property or hotel brand.
     *
     * @var string $roomType
     */
    private $roomType = null;

    /**
     * Specific system room type code, ex: A1K, A1Q etc.
     *
     * @var string $roomTypeCode
     */
    private $roomTypeCode = null;

    /**
     * Indicates the category of the room. Typical values would be Moderate, Standard, or Deluxe. Refer to OpenTravel Code List Segment Category Code (SEG).
     *
     * @var string $roomCategory
     */
    private $roomCategory = null;

    /**
     * A string value representing the unique identification of a room if the request is looking for a specific room.
     *
     * @var string $roomID
     */
    private $roomID = null;

    /**
     * Floor on which the room is located.
     *
     * @var int $floor
     */
    private $floor = null;

    /**
     * A code or identification number that identifies the room stay as part of a group, package tour, or block of rooms designated in the inventory.
     *
     * @var string $invBlockCode
     */
    private $invBlockCode = null;

    /**
     * Promotion code is the identifier used by the host to link directly with a specific named advertising campaign. By including the required code, the client is able to gain access to special offers which may have been created for a specifically targeted group via a CRM system or for a wider advertising campaign using Television or press adverts.
     *
     * @var string $promotionCode
     */
    private $promotionCode = null;

    /**
     * List of the vendor codes associated with a promotion.
     *
     * @var string[] $promotionVendorCode
     */
    private $promotionVendorCode = null;

    /**
     * Indicates the location of the room within the hotel structure. Typical values would be "Near Exit","Close to elevator", "Low Floor" or "High Floor". Refer to OpenTravel Code List Room Location Type (RLT).
     *
     * @var string $roomLocationCode
     */
    private $roomLocationCode = null;

    /**
     * Indicates the view of the room. Typical values would be "Ocean view", "Pool view" or "Garden View". Refer to OpenTravel Code List Room View Type (RVT).
     *
     * @var string $roomViewCode
     */
    private $roomViewCode = null;

    /**
     * Indicates the type of bed(s) found in the room. Typical values would be Double, Twin, Queen, or King. Refer to OpenTravel Code List Bed Type Code (BED).
     *
     * @var string[] $bedTypeCode
     */
    private $bedTypeCode = null;

    /**
     * Non-smoking indicator.
     *
     * @var bool $nonSmoking
     */
    private $nonSmoking = null;

    /**
     * Textual description of room configuration.
     *
     * @var string $configuration
     */
    private $configuration = null;

    /**
     * Textual description of room dimensions.
     *
     * @var string $sizeMeasurement
     */
    private $sizeMeasurement = null;

    /**
     * Defines the number of the item in question.
     *
     * @var int $quantity
     */
    private $quantity = null;

    /**
     * Indicates that the room (suite) is a composite of smaller units.
     *
     * @var bool $composite
     */
    private $composite = null;

    /**
     * Specifies the room classification (e.g., cabin, apartment). Refer to OpenTravel Code List Guest Room Info (GRI).
     *
     * @var string $roomClassificationCode
     */
    private $roomClassificationCode = null;

    /**
     * Specifies the architectural style of a room. Refer to OpenTravel Code List Architectural Style Code (ARC).
     *
     * @var string $roomArchitectureCode
     */
    private $roomArchitectureCode = null;

    /**
     * Used to request or specify a gender assignment for a room. Note: Typically used by Hosteliers.
     *
     * @var string $roomGender
     */
    private $roomGender = null;

    /**
     * If TRUE, the room requires or has sharing available. Note: Typically used by Hosteliers.
     *
     * @var bool $sharedRoomInd
     */
    private $sharedRoomInd = null;

    /**
     * A unique identifier for this room stay candidate.
     *
     * @var string $rPH
     */
    private $rPH = null;

    /**
     * Used to refer to the Rate Plan Candidate associated with this room stay.
     *
     * @var string $ratePlanCandidateRPH
     */
    private $ratePlanCandidateRPH = null;

    /**
     * Used to specify the booking code for which availability is requested.
     *
     * @var string $bookingCode
     */
    private $bookingCode = null;

    /**
     * Indicates the starting date.
     *
     * @var \DateTime $effectiveDate
     */
    private $effectiveDate = null;

    /**
     * Indicates the ending date.
     *
     * @var \DateTime $expireDate
     */
    private $expireDate = null;

    /**
     * When true, indicates that the ExpireDate is the first day after the applicable period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @var bool $expireDateExclusiveInd
     */
    private $expireDateExclusiveInd = null;

    /**
     * @var \Recranet\OTA\Type\GuestCountType $guestCounts
     */
    private $guestCounts = null;

    /**
     * This element is used to pass room attributes. Typical attributes are smoking, non-smoking, wheelchair access, room location (low floor, high floor, close to elevator, etc) and view (garden, pool, ocean, etc.)
     *
     * @var \Recranet\OTA\Type\RoomAmenityPrefType[] $roomAmenity
     */
    private $roomAmenity = [
        
    ];

    /**
     * Gets as roomType
     *
     * (Formerly, RoomInventoryCode) A code value that indicates the type of room for which this request is made, e.g.: double, king, etc. Values may use the Hotel Descriptive Content table or a codes specific to the property or hotel brand.
     *
     * @return string
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * Sets a new roomType
     *
     * (Formerly, RoomInventoryCode) A code value that indicates the type of room for which this request is made, e.g.: double, king, etc. Values may use the Hotel Descriptive Content table or a codes specific to the property or hotel brand.
     *
     * @param string $roomType
     * @return self
     */
    public function setRoomType($roomType)
    {
        $this->roomType = $roomType;
        return $this;
    }

    /**
     * Gets as roomTypeCode
     *
     * Specific system room type code, ex: A1K, A1Q etc.
     *
     * @return string
     */
    public function getRoomTypeCode()
    {
        return $this->roomTypeCode;
    }

    /**
     * Sets a new roomTypeCode
     *
     * Specific system room type code, ex: A1K, A1Q etc.
     *
     * @param string $roomTypeCode
     * @return self
     */
    public function setRoomTypeCode($roomTypeCode)
    {
        $this->roomTypeCode = $roomTypeCode;
        return $this;
    }

    /**
     * Gets as roomCategory
     *
     * Indicates the category of the room. Typical values would be Moderate, Standard, or Deluxe. Refer to OpenTravel Code List Segment Category Code (SEG).
     *
     * @return string
     */
    public function getRoomCategory()
    {
        return $this->roomCategory;
    }

    /**
     * Sets a new roomCategory
     *
     * Indicates the category of the room. Typical values would be Moderate, Standard, or Deluxe. Refer to OpenTravel Code List Segment Category Code (SEG).
     *
     * @param string $roomCategory
     * @return self
     */
    public function setRoomCategory($roomCategory)
    {
        $this->roomCategory = $roomCategory;
        return $this;
    }

    /**
     * Gets as roomID
     *
     * A string value representing the unique identification of a room if the request is looking for a specific room.
     *
     * @return string
     */
    public function getRoomID()
    {
        return $this->roomID;
    }

    /**
     * Sets a new roomID
     *
     * A string value representing the unique identification of a room if the request is looking for a specific room.
     *
     * @param string $roomID
     * @return self
     */
    public function setRoomID($roomID)
    {
        $this->roomID = $roomID;
        return $this;
    }

    /**
     * Gets as floor
     *
     * Floor on which the room is located.
     *
     * @return int
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * Sets a new floor
     *
     * Floor on which the room is located.
     *
     * @param int $floor
     * @return self
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;
        return $this;
    }

    /**
     * Gets as invBlockCode
     *
     * A code or identification number that identifies the room stay as part of a group, package tour, or block of rooms designated in the inventory.
     *
     * @return string
     */
    public function getInvBlockCode()
    {
        return $this->invBlockCode;
    }

    /**
     * Sets a new invBlockCode
     *
     * A code or identification number that identifies the room stay as part of a group, package tour, or block of rooms designated in the inventory.
     *
     * @param string $invBlockCode
     * @return self
     */
    public function setInvBlockCode($invBlockCode)
    {
        $this->invBlockCode = $invBlockCode;
        return $this;
    }

    /**
     * Gets as promotionCode
     *
     * Promotion code is the identifier used by the host to link directly with a specific named advertising campaign. By including the required code, the client is able to gain access to special offers which may have been created for a specifically targeted group via a CRM system or for a wider advertising campaign using Television or press adverts.
     *
     * @return string
     */
    public function getPromotionCode()
    {
        return $this->promotionCode;
    }

    /**
     * Sets a new promotionCode
     *
     * Promotion code is the identifier used by the host to link directly with a specific named advertising campaign. By including the required code, the client is able to gain access to special offers which may have been created for a specifically targeted group via a CRM system or for a wider advertising campaign using Television or press adverts.
     *
     * @param string $promotionCode
     * @return self
     */
    public function setPromotionCode($promotionCode)
    {
        $this->promotionCode = $promotionCode;
        return $this;
    }

    /**
     * Adds as promotionVendorCode
     *
     * List of the vendor codes associated with a promotion.
     *
     * @return self
     * @param string $promotionVendorCode
     */
    public function addToPromotionVendorCode($promotionVendorCode)
    {
        $this->promotionVendorCode[] = $promotionVendorCode;
        return $this;
    }

    /**
     * isset promotionVendorCode
     *
     * List of the vendor codes associated with a promotion.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPromotionVendorCode($index)
    {
        return isset($this->promotionVendorCode[$index]);
    }

    /**
     * unset promotionVendorCode
     *
     * List of the vendor codes associated with a promotion.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPromotionVendorCode($index)
    {
        unset($this->promotionVendorCode[$index]);
    }

    /**
     * Gets as promotionVendorCode
     *
     * List of the vendor codes associated with a promotion.
     *
     * @return string[]
     */
    public function getPromotionVendorCode()
    {
        return $this->promotionVendorCode;
    }

    /**
     * Sets a new promotionVendorCode
     *
     * List of the vendor codes associated with a promotion.
     *
     * @param string $promotionVendorCode
     * @return self
     */
    public function setPromotionVendorCode(array $promotionVendorCode)
    {
        $this->promotionVendorCode = $promotionVendorCode;
        return $this;
    }

    /**
     * Gets as roomLocationCode
     *
     * Indicates the location of the room within the hotel structure. Typical values would be "Near Exit","Close to elevator", "Low Floor" or "High Floor". Refer to OpenTravel Code List Room Location Type (RLT).
     *
     * @return string
     */
    public function getRoomLocationCode()
    {
        return $this->roomLocationCode;
    }

    /**
     * Sets a new roomLocationCode
     *
     * Indicates the location of the room within the hotel structure. Typical values would be "Near Exit","Close to elevator", "Low Floor" or "High Floor". Refer to OpenTravel Code List Room Location Type (RLT).
     *
     * @param string $roomLocationCode
     * @return self
     */
    public function setRoomLocationCode($roomLocationCode)
    {
        $this->roomLocationCode = $roomLocationCode;
        return $this;
    }

    /**
     * Gets as roomViewCode
     *
     * Indicates the view of the room. Typical values would be "Ocean view", "Pool view" or "Garden View". Refer to OpenTravel Code List Room View Type (RVT).
     *
     * @return string
     */
    public function getRoomViewCode()
    {
        return $this->roomViewCode;
    }

    /**
     * Sets a new roomViewCode
     *
     * Indicates the view of the room. Typical values would be "Ocean view", "Pool view" or "Garden View". Refer to OpenTravel Code List Room View Type (RVT).
     *
     * @param string $roomViewCode
     * @return self
     */
    public function setRoomViewCode($roomViewCode)
    {
        $this->roomViewCode = $roomViewCode;
        return $this;
    }

    /**
     * Adds as bedTypeCode
     *
     * Indicates the type of bed(s) found in the room. Typical values would be Double, Twin, Queen, or King. Refer to OpenTravel Code List Bed Type Code (BED).
     *
     * @return self
     * @param string $bedTypeCode
     */
    public function addToBedTypeCode($bedTypeCode)
    {
        $this->bedTypeCode[] = $bedTypeCode;
        return $this;
    }

    /**
     * isset bedTypeCode
     *
     * Indicates the type of bed(s) found in the room. Typical values would be Double, Twin, Queen, or King. Refer to OpenTravel Code List Bed Type Code (BED).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBedTypeCode($index)
    {
        return isset($this->bedTypeCode[$index]);
    }

    /**
     * unset bedTypeCode
     *
     * Indicates the type of bed(s) found in the room. Typical values would be Double, Twin, Queen, or King. Refer to OpenTravel Code List Bed Type Code (BED).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBedTypeCode($index)
    {
        unset($this->bedTypeCode[$index]);
    }

    /**
     * Gets as bedTypeCode
     *
     * Indicates the type of bed(s) found in the room. Typical values would be Double, Twin, Queen, or King. Refer to OpenTravel Code List Bed Type Code (BED).
     *
     * @return string[]
     */
    public function getBedTypeCode()
    {
        return $this->bedTypeCode;
    }

    /**
     * Sets a new bedTypeCode
     *
     * Indicates the type of bed(s) found in the room. Typical values would be Double, Twin, Queen, or King. Refer to OpenTravel Code List Bed Type Code (BED).
     *
     * @param string $bedTypeCode
     * @return self
     */
    public function setBedTypeCode(array $bedTypeCode)
    {
        $this->bedTypeCode = $bedTypeCode;
        return $this;
    }

    /**
     * Gets as nonSmoking
     *
     * Non-smoking indicator.
     *
     * @return bool
     */
    public function getNonSmoking()
    {
        return $this->nonSmoking;
    }

    /**
     * Sets a new nonSmoking
     *
     * Non-smoking indicator.
     *
     * @param bool $nonSmoking
     * @return self
     */
    public function setNonSmoking($nonSmoking)
    {
        $this->nonSmoking = $nonSmoking;
        return $this;
    }

    /**
     * Gets as configuration
     *
     * Textual description of room configuration.
     *
     * @return string
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * Sets a new configuration
     *
     * Textual description of room configuration.
     *
     * @param string $configuration
     * @return self
     */
    public function setConfiguration($configuration)
    {
        $this->configuration = $configuration;
        return $this;
    }

    /**
     * Gets as sizeMeasurement
     *
     * Textual description of room dimensions.
     *
     * @return string
     */
    public function getSizeMeasurement()
    {
        return $this->sizeMeasurement;
    }

    /**
     * Sets a new sizeMeasurement
     *
     * Textual description of room dimensions.
     *
     * @param string $sizeMeasurement
     * @return self
     */
    public function setSizeMeasurement($sizeMeasurement)
    {
        $this->sizeMeasurement = $sizeMeasurement;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * Defines the number of the item in question.
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
     * Defines the number of the item in question.
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
     * Gets as composite
     *
     * Indicates that the room (suite) is a composite of smaller units.
     *
     * @return bool
     */
    public function getComposite()
    {
        return $this->composite;
    }

    /**
     * Sets a new composite
     *
     * Indicates that the room (suite) is a composite of smaller units.
     *
     * @param bool $composite
     * @return self
     */
    public function setComposite($composite)
    {
        $this->composite = $composite;
        return $this;
    }

    /**
     * Gets as roomClassificationCode
     *
     * Specifies the room classification (e.g., cabin, apartment). Refer to OpenTravel Code List Guest Room Info (GRI).
     *
     * @return string
     */
    public function getRoomClassificationCode()
    {
        return $this->roomClassificationCode;
    }

    /**
     * Sets a new roomClassificationCode
     *
     * Specifies the room classification (e.g., cabin, apartment). Refer to OpenTravel Code List Guest Room Info (GRI).
     *
     * @param string $roomClassificationCode
     * @return self
     */
    public function setRoomClassificationCode($roomClassificationCode)
    {
        $this->roomClassificationCode = $roomClassificationCode;
        return $this;
    }

    /**
     * Gets as roomArchitectureCode
     *
     * Specifies the architectural style of a room. Refer to OpenTravel Code List Architectural Style Code (ARC).
     *
     * @return string
     */
    public function getRoomArchitectureCode()
    {
        return $this->roomArchitectureCode;
    }

    /**
     * Sets a new roomArchitectureCode
     *
     * Specifies the architectural style of a room. Refer to OpenTravel Code List Architectural Style Code (ARC).
     *
     * @param string $roomArchitectureCode
     * @return self
     */
    public function setRoomArchitectureCode($roomArchitectureCode)
    {
        $this->roomArchitectureCode = $roomArchitectureCode;
        return $this;
    }

    /**
     * Gets as roomGender
     *
     * Used to request or specify a gender assignment for a room. Note: Typically used by Hosteliers.
     *
     * @return string
     */
    public function getRoomGender()
    {
        return $this->roomGender;
    }

    /**
     * Sets a new roomGender
     *
     * Used to request or specify a gender assignment for a room. Note: Typically used by Hosteliers.
     *
     * @param string $roomGender
     * @return self
     */
    public function setRoomGender($roomGender)
    {
        $this->roomGender = $roomGender;
        return $this;
    }

    /**
     * Gets as sharedRoomInd
     *
     * If TRUE, the room requires or has sharing available. Note: Typically used by Hosteliers.
     *
     * @return bool
     */
    public function getSharedRoomInd()
    {
        return $this->sharedRoomInd;
    }

    /**
     * Sets a new sharedRoomInd
     *
     * If TRUE, the room requires or has sharing available. Note: Typically used by Hosteliers.
     *
     * @param bool $sharedRoomInd
     * @return self
     */
    public function setSharedRoomInd($sharedRoomInd)
    {
        $this->sharedRoomInd = $sharedRoomInd;
        return $this;
    }

    /**
     * Gets as rPH
     *
     * A unique identifier for this room stay candidate.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * A unique identifier for this room stay candidate.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;
        return $this;
    }

    /**
     * Gets as ratePlanCandidateRPH
     *
     * Used to refer to the Rate Plan Candidate associated with this room stay.
     *
     * @return string
     */
    public function getRatePlanCandidateRPH()
    {
        return $this->ratePlanCandidateRPH;
    }

    /**
     * Sets a new ratePlanCandidateRPH
     *
     * Used to refer to the Rate Plan Candidate associated with this room stay.
     *
     * @param string $ratePlanCandidateRPH
     * @return self
     */
    public function setRatePlanCandidateRPH($ratePlanCandidateRPH)
    {
        $this->ratePlanCandidateRPH = $ratePlanCandidateRPH;
        return $this;
    }

    /**
     * Gets as bookingCode
     *
     * Used to specify the booking code for which availability is requested.
     *
     * @return string
     */
    public function getBookingCode()
    {
        return $this->bookingCode;
    }

    /**
     * Sets a new bookingCode
     *
     * Used to specify the booking code for which availability is requested.
     *
     * @param string $bookingCode
     * @return self
     */
    public function setBookingCode($bookingCode)
    {
        $this->bookingCode = $bookingCode;
        return $this;
    }

    /**
     * Gets as effectiveDate
     *
     * Indicates the starting date.
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * Sets a new effectiveDate
     *
     * Indicates the starting date.
     *
     * @param \DateTime $effectiveDate
     * @return self
     */
    public function setEffectiveDate(\DateTime $effectiveDate)
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * Gets as expireDate
     *
     * Indicates the ending date.
     *
     * @return \DateTime
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Sets a new expireDate
     *
     * Indicates the ending date.
     *
     * @param \DateTime $expireDate
     * @return self
     */
    public function setExpireDate(\DateTime $expireDate)
    {
        $this->expireDate = $expireDate;
        return $this;
    }

    /**
     * Gets as expireDateExclusiveInd
     *
     * When true, indicates that the ExpireDate is the first day after the applicable period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @return bool
     */
    public function getExpireDateExclusiveInd()
    {
        return $this->expireDateExclusiveInd;
    }

    /**
     * Sets a new expireDateExclusiveInd
     *
     * When true, indicates that the ExpireDate is the first day after the applicable period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @param bool $expireDateExclusiveInd
     * @return self
     */
    public function setExpireDateExclusiveInd($expireDateExclusiveInd)
    {
        $this->expireDateExclusiveInd = $expireDateExclusiveInd;
        return $this;
    }

    /**
     * Gets as guestCounts
     *
     * @return \Recranet\OTA\Type\GuestCountType
     */
    public function getGuestCounts()
    {
        return $this->guestCounts;
    }

    /**
     * Sets a new guestCounts
     *
     * @param \Recranet\OTA\Type\GuestCountType $guestCounts
     * @return self
     */
    public function setGuestCounts(?\Recranet\OTA\Type\GuestCountType $guestCounts = null)
    {
        $this->guestCounts = $guestCounts;
        return $this;
    }

    /**
     * Adds as roomAmenity
     *
     * This element is used to pass room attributes. Typical attributes are smoking, non-smoking, wheelchair access, room location (low floor, high floor, close to elevator, etc) and view (garden, pool, ocean, etc.)
     *
     * @return self
     * @param \Recranet\OTA\Type\RoomAmenityPrefType $roomAmenity
     */
    public function addToRoomAmenity(\Recranet\OTA\Type\RoomAmenityPrefType $roomAmenity)
    {
        $this->roomAmenity[] = $roomAmenity;
        return $this;
    }

    /**
     * isset roomAmenity
     *
     * This element is used to pass room attributes. Typical attributes are smoking, non-smoking, wheelchair access, room location (low floor, high floor, close to elevator, etc) and view (garden, pool, ocean, etc.)
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomAmenity($index)
    {
        return isset($this->roomAmenity[$index]);
    }

    /**
     * unset roomAmenity
     *
     * This element is used to pass room attributes. Typical attributes are smoking, non-smoking, wheelchair access, room location (low floor, high floor, close to elevator, etc) and view (garden, pool, ocean, etc.)
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomAmenity($index)
    {
        unset($this->roomAmenity[$index]);
    }

    /**
     * Gets as roomAmenity
     *
     * This element is used to pass room attributes. Typical attributes are smoking, non-smoking, wheelchair access, room location (low floor, high floor, close to elevator, etc) and view (garden, pool, ocean, etc.)
     *
     * @return \Recranet\OTA\Type\RoomAmenityPrefType[]
     */
    public function getRoomAmenity()
    {
        return $this->roomAmenity;
    }

    /**
     * Sets a new roomAmenity
     *
     * This element is used to pass room attributes. Typical attributes are smoking, non-smoking, wheelchair access, room location (low floor, high floor, close to elevator, etc) and view (garden, pool, ocean, etc.)
     *
     * @param \Recranet\OTA\Type\RoomAmenityPrefType[] $roomAmenity
     * @return self
     */
    public function setRoomAmenity(array $roomAmenity = null)
    {
        $this->roomAmenity = $roomAmenity;
        return $this;
    }
}

