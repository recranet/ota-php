<?php

namespace Recranet\OTA\Type;

/**
 * Class representing StatusApplicationControlType
 *
 * The StatusApplicationControl class is used to indicate to which block codes/rate plans/inventory codes a status should be applied.
 * XSD Type: StatusApplicationControlType
 */
class StatusApplicationControlType
{
    /**
     * The starting value of the time span.
     *
     * @var \DateTime $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @var \DateTime $end
     */
    private $end = null;

    /**
     * An enumerated type that allows the query to specify a rate category type, and provides major categories for comparison across brands. Refer to OpenTravel Code List Rate Plan Type (RPT).
     *
     * @var string $ratePlanType
     */
    private $ratePlanType = null;

    /**
     * A string value may be used to request a particular code or an ID if the guest qualifies for a specific rate, such as AARP, AAA, a corporate rate, etc., or to specify a negotiated code as a result of a negotiated rate.
     *
     * @var string $ratePlanCode
     */
    private $ratePlanCode = null;

    /**
     * A text field used to indicate a special ID code that is associated with the rate and is essential in the reservation request in order to obtain the rate. Examples are Corporate ID.
     *
     * @var string $ratePlanID
     */
    private $ratePlanID = null;

    /**
     * The Rate Plan Qualifier is used to control the sort order of RatePlans. Those Rate Plans that are not qualified will appear first, those that are qualified will appear last.
     *
     * @var bool $ratePlanQualifier
     */
    private $ratePlanQualifier = null;

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
     * Hotel systems often group multiple rate plans into a single category. This refers to that category that is specific to the hotel CRS/ PMS and should not be confused with a GDS rate category.
     *
     * @var string $ratePlanCategory
     */
    private $ratePlanCategory = null;

    /**
     * An enumerated type that identifies whether the InvCode is a single item which can be inventoried or a group of items which can be inventoried. Values are: Does Not Apply, Inventory Code, Inventory Grouping Code.
     *
     * @var string $invCodeApplication
     */
    private $invCodeApplication = null;

    /**
     * Code that identifies an inventory item.
     *
     * @var string $invCode
     */
    private $invCode = null;

    /**
     * A value that indicates the type of inventory for which this request is made. If the inventory item is a room, typical values could be double, king, etc.
     *
     * @var string $invType
     */
    private $invType = null;

    /**
     * Specific system inventory type code. If the inventory item is a room, typical values could be room type code, e.g.: A1K, A1Q etc. Values may use the OpenTravel Code list or a code specific to the property or hotel brand.
     *
     * @var string $invTypeCode
     */
    private $invTypeCode = null;

    /**
     * Simple indicator to detect if inventory is a room.
     *
     * @var bool $isRoom
     */
    private $isRoom = null;

    /**
     * When true, apply to Monday.
     *
     * @var bool $mon
     */
    private $mon = null;

    /**
     * When true, apply to Tuesday.
     *
     * @var bool $tue
     */
    private $tue = null;

    /**
     * When true, apply to Wednesday.
     *
     * @var bool $weds
     */
    private $weds = null;

    /**
     * When true, apply to Thursday.
     *
     * @var bool $thur
     */
    private $thur = null;

    /**
     * When true, apply to Friday.
     *
     * @var bool $fri
     */
    private $fri = null;

    /**
     * When true, apply to Saturday.
     *
     * @var bool $sat
     */
    private $sat = null;

    /**
     * When true, apply to Sunday.
     *
     * @var bool $sun
     */
    private $sun = null;

    /**
     * An enumerated list that defines whether the RatePlanCodeType does not apply, applies to a rate plan code or applies to a rate plan grouping code.
     *
     * @var string $ratePlanCodeType
     */
    private $ratePlanCodeType = null;

    /**
     * Hotel systems often have different tiers for a given rate plan; this attribute is used to designate a specific tier within the rate plan (e.g. high, medium, low).
     *
     * @var string $rateTier
     */
    private $rateTier = null;

    /**
     * @var bool $allRateCode
     */
    private $allRateCode = null;

    /**
     * @var bool $allInvCode
     */
    private $allInvCode = null;

    /**
     * An enumerated type that defines whether this applies to a block or a block grouping code, or does not apply to blocks.
     *
     * @var string $invBlockCodeApply
     */
    private $invBlockCodeApply = null;

    /**
     * Code that identifies an inventory block.
     *
     * @var string $invBlockCode
     */
    private $invBlockCode = null;

    /**
     * Mechanism to allow the user to override settings at the reservation system and to allow the RMS to replace this overridden values: If value = 0 (No), the reservations system may ignore the settings passed and keep values overridden by the user. If value = 1 (Yes), the reservations system must replace values overridden by the user.
     *
     * @var bool $override
     */
    private $override = null;

    /**
     * This identifies a specific quote.
     *
     * @var string $quoteID
     */
    private $quoteID = null;

    /**
     * This is the code defining a subset of the inventory block.
     *
     * @var string $subBlockCode
     */
    private $subBlockCode = null;

    /**
     * Used to identify the wing of a hotel.
     *
     * @var string $wingIdentifier
     */
    private $wingIdentifier = null;

    /**
     * @var string[] $destinationSystemCodes
     */
    private $destinationSystemCodes = null;

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \DateTime $start
     * @return self
     */
    public function setStart(\DateTime $start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @return \DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(\DateInterval $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \DateTime $end
     * @return self
     */
    public function setEnd(\DateTime $end)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * Gets as ratePlanType
     *
     * An enumerated type that allows the query to specify a rate category type, and provides major categories for comparison across brands. Refer to OpenTravel Code List Rate Plan Type (RPT).
     *
     * @return string
     */
    public function getRatePlanType()
    {
        return $this->ratePlanType;
    }

    /**
     * Sets a new ratePlanType
     *
     * An enumerated type that allows the query to specify a rate category type, and provides major categories for comparison across brands. Refer to OpenTravel Code List Rate Plan Type (RPT).
     *
     * @param string $ratePlanType
     * @return self
     */
    public function setRatePlanType($ratePlanType)
    {
        $this->ratePlanType = $ratePlanType;
        return $this;
    }

    /**
     * Gets as ratePlanCode
     *
     * A string value may be used to request a particular code or an ID if the guest qualifies for a specific rate, such as AARP, AAA, a corporate rate, etc., or to specify a negotiated code as a result of a negotiated rate.
     *
     * @return string
     */
    public function getRatePlanCode()
    {
        return $this->ratePlanCode;
    }

    /**
     * Sets a new ratePlanCode
     *
     * A string value may be used to request a particular code or an ID if the guest qualifies for a specific rate, such as AARP, AAA, a corporate rate, etc., or to specify a negotiated code as a result of a negotiated rate.
     *
     * @param string $ratePlanCode
     * @return self
     */
    public function setRatePlanCode($ratePlanCode)
    {
        $this->ratePlanCode = $ratePlanCode;
        return $this;
    }

    /**
     * Gets as ratePlanID
     *
     * A text field used to indicate a special ID code that is associated with the rate and is essential in the reservation request in order to obtain the rate. Examples are Corporate ID.
     *
     * @return string
     */
    public function getRatePlanID()
    {
        return $this->ratePlanID;
    }

    /**
     * Sets a new ratePlanID
     *
     * A text field used to indicate a special ID code that is associated with the rate and is essential in the reservation request in order to obtain the rate. Examples are Corporate ID.
     *
     * @param string $ratePlanID
     * @return self
     */
    public function setRatePlanID($ratePlanID)
    {
        $this->ratePlanID = $ratePlanID;
        return $this;
    }

    /**
     * Gets as ratePlanQualifier
     *
     * The Rate Plan Qualifier is used to control the sort order of RatePlans. Those Rate Plans that are not qualified will appear first, those that are qualified will appear last.
     *
     * @return bool
     */
    public function getRatePlanQualifier()
    {
        return $this->ratePlanQualifier;
    }

    /**
     * Sets a new ratePlanQualifier
     *
     * The Rate Plan Qualifier is used to control the sort order of RatePlans. Those Rate Plans that are not qualified will appear first, those that are qualified will appear last.
     *
     * @param bool $ratePlanQualifier
     * @return self
     */
    public function setRatePlanQualifier($ratePlanQualifier)
    {
        $this->ratePlanQualifier = $ratePlanQualifier;
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
     * Gets as ratePlanCategory
     *
     * Hotel systems often group multiple rate plans into a single category. This refers to that category that is specific to the hotel CRS/ PMS and should not be confused with a GDS rate category.
     *
     * @return string
     */
    public function getRatePlanCategory()
    {
        return $this->ratePlanCategory;
    }

    /**
     * Sets a new ratePlanCategory
     *
     * Hotel systems often group multiple rate plans into a single category. This refers to that category that is specific to the hotel CRS/ PMS and should not be confused with a GDS rate category.
     *
     * @param string $ratePlanCategory
     * @return self
     */
    public function setRatePlanCategory($ratePlanCategory)
    {
        $this->ratePlanCategory = $ratePlanCategory;
        return $this;
    }

    /**
     * Gets as invCodeApplication
     *
     * An enumerated type that identifies whether the InvCode is a single item which can be inventoried or a group of items which can be inventoried. Values are: Does Not Apply, Inventory Code, Inventory Grouping Code.
     *
     * @return string
     */
    public function getInvCodeApplication()
    {
        return $this->invCodeApplication;
    }

    /**
     * Sets a new invCodeApplication
     *
     * An enumerated type that identifies whether the InvCode is a single item which can be inventoried or a group of items which can be inventoried. Values are: Does Not Apply, Inventory Code, Inventory Grouping Code.
     *
     * @param string $invCodeApplication
     * @return self
     */
    public function setInvCodeApplication($invCodeApplication)
    {
        $this->invCodeApplication = $invCodeApplication;
        return $this;
    }

    /**
     * Gets as invCode
     *
     * Code that identifies an inventory item.
     *
     * @return string
     */
    public function getInvCode()
    {
        return $this->invCode;
    }

    /**
     * Sets a new invCode
     *
     * Code that identifies an inventory item.
     *
     * @param string $invCode
     * @return self
     */
    public function setInvCode($invCode)
    {
        $this->invCode = $invCode;
        return $this;
    }

    /**
     * Gets as invType
     *
     * A value that indicates the type of inventory for which this request is made. If the inventory item is a room, typical values could be double, king, etc.
     *
     * @return string
     */
    public function getInvType()
    {
        return $this->invType;
    }

    /**
     * Sets a new invType
     *
     * A value that indicates the type of inventory for which this request is made. If the inventory item is a room, typical values could be double, king, etc.
     *
     * @param string $invType
     * @return self
     */
    public function setInvType($invType)
    {
        $this->invType = $invType;
        return $this;
    }

    /**
     * Gets as invTypeCode
     *
     * Specific system inventory type code. If the inventory item is a room, typical values could be room type code, e.g.: A1K, A1Q etc. Values may use the OpenTravel Code list or a code specific to the property or hotel brand.
     *
     * @return string
     */
    public function getInvTypeCode()
    {
        return $this->invTypeCode;
    }

    /**
     * Sets a new invTypeCode
     *
     * Specific system inventory type code. If the inventory item is a room, typical values could be room type code, e.g.: A1K, A1Q etc. Values may use the OpenTravel Code list or a code specific to the property or hotel brand.
     *
     * @param string $invTypeCode
     * @return self
     */
    public function setInvTypeCode($invTypeCode)
    {
        $this->invTypeCode = $invTypeCode;
        return $this;
    }

    /**
     * Gets as isRoom
     *
     * Simple indicator to detect if inventory is a room.
     *
     * @return bool
     */
    public function getIsRoom()
    {
        return $this->isRoom;
    }

    /**
     * Sets a new isRoom
     *
     * Simple indicator to detect if inventory is a room.
     *
     * @param bool $isRoom
     * @return self
     */
    public function setIsRoom($isRoom)
    {
        $this->isRoom = $isRoom;
        return $this;
    }

    /**
     * Gets as mon
     *
     * When true, apply to Monday.
     *
     * @return bool
     */
    public function getMon()
    {
        return $this->mon;
    }

    /**
     * Sets a new mon
     *
     * When true, apply to Monday.
     *
     * @param bool $mon
     * @return self
     */
    public function setMon($mon)
    {
        $this->mon = $mon;
        return $this;
    }

    /**
     * Gets as tue
     *
     * When true, apply to Tuesday.
     *
     * @return bool
     */
    public function getTue()
    {
        return $this->tue;
    }

    /**
     * Sets a new tue
     *
     * When true, apply to Tuesday.
     *
     * @param bool $tue
     * @return self
     */
    public function setTue($tue)
    {
        $this->tue = $tue;
        return $this;
    }

    /**
     * Gets as weds
     *
     * When true, apply to Wednesday.
     *
     * @return bool
     */
    public function getWeds()
    {
        return $this->weds;
    }

    /**
     * Sets a new weds
     *
     * When true, apply to Wednesday.
     *
     * @param bool $weds
     * @return self
     */
    public function setWeds($weds)
    {
        $this->weds = $weds;
        return $this;
    }

    /**
     * Gets as thur
     *
     * When true, apply to Thursday.
     *
     * @return bool
     */
    public function getThur()
    {
        return $this->thur;
    }

    /**
     * Sets a new thur
     *
     * When true, apply to Thursday.
     *
     * @param bool $thur
     * @return self
     */
    public function setThur($thur)
    {
        $this->thur = $thur;
        return $this;
    }

    /**
     * Gets as fri
     *
     * When true, apply to Friday.
     *
     * @return bool
     */
    public function getFri()
    {
        return $this->fri;
    }

    /**
     * Sets a new fri
     *
     * When true, apply to Friday.
     *
     * @param bool $fri
     * @return self
     */
    public function setFri($fri)
    {
        $this->fri = $fri;
        return $this;
    }

    /**
     * Gets as sat
     *
     * When true, apply to Saturday.
     *
     * @return bool
     */
    public function getSat()
    {
        return $this->sat;
    }

    /**
     * Sets a new sat
     *
     * When true, apply to Saturday.
     *
     * @param bool $sat
     * @return self
     */
    public function setSat($sat)
    {
        $this->sat = $sat;
        return $this;
    }

    /**
     * Gets as sun
     *
     * When true, apply to Sunday.
     *
     * @return bool
     */
    public function getSun()
    {
        return $this->sun;
    }

    /**
     * Sets a new sun
     *
     * When true, apply to Sunday.
     *
     * @param bool $sun
     * @return self
     */
    public function setSun($sun)
    {
        $this->sun = $sun;
        return $this;
    }

    /**
     * Gets as ratePlanCodeType
     *
     * An enumerated list that defines whether the RatePlanCodeType does not apply, applies to a rate plan code or applies to a rate plan grouping code.
     *
     * @return string
     */
    public function getRatePlanCodeType()
    {
        return $this->ratePlanCodeType;
    }

    /**
     * Sets a new ratePlanCodeType
     *
     * An enumerated list that defines whether the RatePlanCodeType does not apply, applies to a rate plan code or applies to a rate plan grouping code.
     *
     * @param string $ratePlanCodeType
     * @return self
     */
    public function setRatePlanCodeType($ratePlanCodeType)
    {
        $this->ratePlanCodeType = $ratePlanCodeType;
        return $this;
    }

    /**
     * Gets as rateTier
     *
     * Hotel systems often have different tiers for a given rate plan; this attribute is used to designate a specific tier within the rate plan (e.g. high, medium, low).
     *
     * @return string
     */
    public function getRateTier()
    {
        return $this->rateTier;
    }

    /**
     * Sets a new rateTier
     *
     * Hotel systems often have different tiers for a given rate plan; this attribute is used to designate a specific tier within the rate plan (e.g. high, medium, low).
     *
     * @param string $rateTier
     * @return self
     */
    public function setRateTier($rateTier)
    {
        $this->rateTier = $rateTier;
        return $this;
    }

    /**
     * Gets as allRateCode
     *
     * @return bool
     */
    public function getAllRateCode()
    {
        return $this->allRateCode;
    }

    /**
     * Sets a new allRateCode
     *
     * @param bool $allRateCode
     * @return self
     */
    public function setAllRateCode($allRateCode)
    {
        $this->allRateCode = $allRateCode;
        return $this;
    }

    /**
     * Gets as allInvCode
     *
     * @return bool
     */
    public function getAllInvCode()
    {
        return $this->allInvCode;
    }

    /**
     * Sets a new allInvCode
     *
     * @param bool $allInvCode
     * @return self
     */
    public function setAllInvCode($allInvCode)
    {
        $this->allInvCode = $allInvCode;
        return $this;
    }

    /**
     * Gets as invBlockCodeApply
     *
     * An enumerated type that defines whether this applies to a block or a block grouping code, or does not apply to blocks.
     *
     * @return string
     */
    public function getInvBlockCodeApply()
    {
        return $this->invBlockCodeApply;
    }

    /**
     * Sets a new invBlockCodeApply
     *
     * An enumerated type that defines whether this applies to a block or a block grouping code, or does not apply to blocks.
     *
     * @param string $invBlockCodeApply
     * @return self
     */
    public function setInvBlockCodeApply($invBlockCodeApply)
    {
        $this->invBlockCodeApply = $invBlockCodeApply;
        return $this;
    }

    /**
     * Gets as invBlockCode
     *
     * Code that identifies an inventory block.
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
     * Code that identifies an inventory block.
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
     * Gets as override
     *
     * Mechanism to allow the user to override settings at the reservation system and to allow the RMS to replace this overridden values: If value = 0 (No), the reservations system may ignore the settings passed and keep values overridden by the user. If value = 1 (Yes), the reservations system must replace values overridden by the user.
     *
     * @return bool
     */
    public function getOverride()
    {
        return $this->override;
    }

    /**
     * Sets a new override
     *
     * Mechanism to allow the user to override settings at the reservation system and to allow the RMS to replace this overridden values: If value = 0 (No), the reservations system may ignore the settings passed and keep values overridden by the user. If value = 1 (Yes), the reservations system must replace values overridden by the user.
     *
     * @param bool $override
     * @return self
     */
    public function setOverride($override)
    {
        $this->override = $override;
        return $this;
    }

    /**
     * Gets as quoteID
     *
     * This identifies a specific quote.
     *
     * @return string
     */
    public function getQuoteID()
    {
        return $this->quoteID;
    }

    /**
     * Sets a new quoteID
     *
     * This identifies a specific quote.
     *
     * @param string $quoteID
     * @return self
     */
    public function setQuoteID($quoteID)
    {
        $this->quoteID = $quoteID;
        return $this;
    }

    /**
     * Gets as subBlockCode
     *
     * This is the code defining a subset of the inventory block.
     *
     * @return string
     */
    public function getSubBlockCode()
    {
        return $this->subBlockCode;
    }

    /**
     * Sets a new subBlockCode
     *
     * This is the code defining a subset of the inventory block.
     *
     * @param string $subBlockCode
     * @return self
     */
    public function setSubBlockCode($subBlockCode)
    {
        $this->subBlockCode = $subBlockCode;
        return $this;
    }

    /**
     * Gets as wingIdentifier
     *
     * Used to identify the wing of a hotel.
     *
     * @return string
     */
    public function getWingIdentifier()
    {
        return $this->wingIdentifier;
    }

    /**
     * Sets a new wingIdentifier
     *
     * Used to identify the wing of a hotel.
     *
     * @param string $wingIdentifier
     * @return self
     */
    public function setWingIdentifier($wingIdentifier)
    {
        $this->wingIdentifier = $wingIdentifier;
        return $this;
    }

    /**
     * Adds as destinationSystemCode
     *
     * @return self
     * @param string $destinationSystemCode
     */
    public function addToDestinationSystemCodes($destinationSystemCode)
    {
        $this->destinationSystemCodes[] = $destinationSystemCode;
        return $this;
    }

    /**
     * isset destinationSystemCodes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDestinationSystemCodes($index)
    {
        return isset($this->destinationSystemCodes[$index]);
    }

    /**
     * unset destinationSystemCodes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDestinationSystemCodes($index)
    {
        unset($this->destinationSystemCodes[$index]);
    }

    /**
     * Gets as destinationSystemCodes
     *
     * @return string[]
     */
    public function getDestinationSystemCodes()
    {
        return $this->destinationSystemCodes;
    }

    /**
     * Sets a new destinationSystemCodes
     *
     * @param string $destinationSystemCodes
     * @return self
     */
    public function setDestinationSystemCodes(array $destinationSystemCodes = null)
    {
        $this->destinationSystemCodes = $destinationSystemCodes;
        return $this;
    }
}

