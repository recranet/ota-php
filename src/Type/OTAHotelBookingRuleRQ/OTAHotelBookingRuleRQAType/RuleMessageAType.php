<?php

namespace Recranet\OTA\Type\OTAHotelBookingRuleRQ\OTAHotelBookingRuleRQAType;

/**
 * Class representing RuleMessageAType
 */
class RuleMessageAType
{
    /**
     * The code that identifies a hotel chain or management group. The hotel chain code is decided between vendors. This attribute is optional if the hotel is an independent property that can be identified by the HotelCode attribute.
     *
     * @var string $chainCode
     */
    private $chainCode = null;

    /**
     * A code that identifies the brand or flag of a hotel, often used for independently-owned or franchised properties who are known by a specific brand.
     *
     * @var string $brandCode
     */
    private $brandCode = null;

    /**
     * The code that uniquely identifies a single hotel property. The hotel code is decided between vendors.
     *
     * @var string $hotelCode
     */
    private $hotelCode = null;

    /**
     * The IATA city code; for example DCA, ORD.
     *
     * @var string $hotelCityCode
     */
    private $hotelCityCode = null;

    /**
     * A text field used to communicate the proper name of the hotel.
     *
     * @var string $hotelName
     */
    private $hotelName = null;

    /**
     * A text field used to communicate the context (or source of - ex Sabre, Galileo, Worldspan, Amadeus) the HotelReferenceGroup codes.
     *
     * @var string $hotelCodeContext
     */
    private $hotelCodeContext = null;

    /**
     * The name of the hotel chain (e.g., Hilton, Marriott, Hyatt, Starwood).
     *
     * @var string $chainName
     */
    private $chainName = null;

    /**
     * The name of a brand of hotels (e.g., Courtyard, Hampton Inn).
     *
     * @var string $brandName
     */
    private $brandName = null;

    /**
     * An identifier of an area as defined by a hotel reservation system.
     *
     * @var string $areaID
     */
    private $areaID = null;

    /**
     * TTI hotel reference code.
     * Example: 123
     * Note: This code is maintained by the Travel Technology Initiative (TTI) and provides a unique way to identify a property across a multiplicity of channels, service providers, tour companies, representation companies and third parties involved in the booking, administration and fulfillment of travel within the hospitality industry. For more information: http://www.tti.org/tticodes.html
     *
     * @var int $tTIcode
     */
    private $tTIcode = null;

    /**
     * Specifies the check in and check out dates, booking code, room type code, and corporate discount number for the booking rules requested.
     *
     * @var \Recranet\OTA\Type\OTAHotelBookingRuleRQ\OTAHotelBookingRuleRQAType\RuleMessageAType\StatusApplicationAType $statusApplication
     */
    private $statusApplication = null;

    /**
     * Specifies the number of adults and children per room.
     *
     * @var \Recranet\OTA\Type\GuestCountType $guestCounts
     */
    private $guestCounts = null;

    /**
     * The hotel confirmation number for which the booking rules are requested.
     *
     * @var \Recranet\OTA\Type\HotelReservationIDsType\HotelReservationIDAType[] $hotelReservationIDs
     */
    private $hotelReservationIDs = null;

    /**
     * A collection of rule categories.
     *
     * @var \Recranet\OTA\Type\OTAHotelBookingRuleRQ\OTAHotelBookingRuleRQAType\RuleMessageAType\RuleCategoriesAType\RuleCategoryAType[] $ruleCategories
     */
    private $ruleCategories = null;

    /**
     * Gets as chainCode
     *
     * The code that identifies a hotel chain or management group. The hotel chain code is decided between vendors. This attribute is optional if the hotel is an independent property that can be identified by the HotelCode attribute.
     *
     * @return string
     */
    public function getChainCode()
    {
        return $this->chainCode;
    }

    /**
     * Sets a new chainCode
     *
     * The code that identifies a hotel chain or management group. The hotel chain code is decided between vendors. This attribute is optional if the hotel is an independent property that can be identified by the HotelCode attribute.
     *
     * @param string $chainCode
     * @return self
     */
    public function setChainCode($chainCode)
    {
        $this->chainCode = $chainCode;
        return $this;
    }

    /**
     * Gets as brandCode
     *
     * A code that identifies the brand or flag of a hotel, often used for independently-owned or franchised properties who are known by a specific brand.
     *
     * @return string
     */
    public function getBrandCode()
    {
        return $this->brandCode;
    }

    /**
     * Sets a new brandCode
     *
     * A code that identifies the brand or flag of a hotel, often used for independently-owned or franchised properties who are known by a specific brand.
     *
     * @param string $brandCode
     * @return self
     */
    public function setBrandCode($brandCode)
    {
        $this->brandCode = $brandCode;
        return $this;
    }

    /**
     * Gets as hotelCode
     *
     * The code that uniquely identifies a single hotel property. The hotel code is decided between vendors.
     *
     * @return string
     */
    public function getHotelCode()
    {
        return $this->hotelCode;
    }

    /**
     * Sets a new hotelCode
     *
     * The code that uniquely identifies a single hotel property. The hotel code is decided between vendors.
     *
     * @param string $hotelCode
     * @return self
     */
    public function setHotelCode($hotelCode)
    {
        $this->hotelCode = $hotelCode;
        return $this;
    }

    /**
     * Gets as hotelCityCode
     *
     * The IATA city code; for example DCA, ORD.
     *
     * @return string
     */
    public function getHotelCityCode()
    {
        return $this->hotelCityCode;
    }

    /**
     * Sets a new hotelCityCode
     *
     * The IATA city code; for example DCA, ORD.
     *
     * @param string $hotelCityCode
     * @return self
     */
    public function setHotelCityCode($hotelCityCode)
    {
        $this->hotelCityCode = $hotelCityCode;
        return $this;
    }

    /**
     * Gets as hotelName
     *
     * A text field used to communicate the proper name of the hotel.
     *
     * @return string
     */
    public function getHotelName()
    {
        return $this->hotelName;
    }

    /**
     * Sets a new hotelName
     *
     * A text field used to communicate the proper name of the hotel.
     *
     * @param string $hotelName
     * @return self
     */
    public function setHotelName($hotelName)
    {
        $this->hotelName = $hotelName;
        return $this;
    }

    /**
     * Gets as hotelCodeContext
     *
     * A text field used to communicate the context (or source of - ex Sabre, Galileo, Worldspan, Amadeus) the HotelReferenceGroup codes.
     *
     * @return string
     */
    public function getHotelCodeContext()
    {
        return $this->hotelCodeContext;
    }

    /**
     * Sets a new hotelCodeContext
     *
     * A text field used to communicate the context (or source of - ex Sabre, Galileo, Worldspan, Amadeus) the HotelReferenceGroup codes.
     *
     * @param string $hotelCodeContext
     * @return self
     */
    public function setHotelCodeContext($hotelCodeContext)
    {
        $this->hotelCodeContext = $hotelCodeContext;
        return $this;
    }

    /**
     * Gets as chainName
     *
     * The name of the hotel chain (e.g., Hilton, Marriott, Hyatt, Starwood).
     *
     * @return string
     */
    public function getChainName()
    {
        return $this->chainName;
    }

    /**
     * Sets a new chainName
     *
     * The name of the hotel chain (e.g., Hilton, Marriott, Hyatt, Starwood).
     *
     * @param string $chainName
     * @return self
     */
    public function setChainName($chainName)
    {
        $this->chainName = $chainName;
        return $this;
    }

    /**
     * Gets as brandName
     *
     * The name of a brand of hotels (e.g., Courtyard, Hampton Inn).
     *
     * @return string
     */
    public function getBrandName()
    {
        return $this->brandName;
    }

    /**
     * Sets a new brandName
     *
     * The name of a brand of hotels (e.g., Courtyard, Hampton Inn).
     *
     * @param string $brandName
     * @return self
     */
    public function setBrandName($brandName)
    {
        $this->brandName = $brandName;
        return $this;
    }

    /**
     * Gets as areaID
     *
     * An identifier of an area as defined by a hotel reservation system.
     *
     * @return string
     */
    public function getAreaID()
    {
        return $this->areaID;
    }

    /**
     * Sets a new areaID
     *
     * An identifier of an area as defined by a hotel reservation system.
     *
     * @param string $areaID
     * @return self
     */
    public function setAreaID($areaID)
    {
        $this->areaID = $areaID;
        return $this;
    }

    /**
     * Gets as tTIcode
     *
     * TTI hotel reference code.
     * Example: 123
     * Note: This code is maintained by the Travel Technology Initiative (TTI) and provides a unique way to identify a property across a multiplicity of channels, service providers, tour companies, representation companies and third parties involved in the booking, administration and fulfillment of travel within the hospitality industry. For more information: http://www.tti.org/tticodes.html
     *
     * @return int
     */
    public function getTTIcode()
    {
        return $this->tTIcode;
    }

    /**
     * Sets a new tTIcode
     *
     * TTI hotel reference code.
     * Example: 123
     * Note: This code is maintained by the Travel Technology Initiative (TTI) and provides a unique way to identify a property across a multiplicity of channels, service providers, tour companies, representation companies and third parties involved in the booking, administration and fulfillment of travel within the hospitality industry. For more information: http://www.tti.org/tticodes.html
     *
     * @param int $tTIcode
     * @return self
     */
    public function setTTIcode($tTIcode)
    {
        $this->tTIcode = $tTIcode;
        return $this;
    }

    /**
     * Gets as statusApplication
     *
     * Specifies the check in and check out dates, booking code, room type code, and corporate discount number for the booking rules requested.
     *
     * @return \Recranet\OTA\Type\OTAHotelBookingRuleRQ\OTAHotelBookingRuleRQAType\RuleMessageAType\StatusApplicationAType
     */
    public function getStatusApplication()
    {
        return $this->statusApplication;
    }

    /**
     * Sets a new statusApplication
     *
     * Specifies the check in and check out dates, booking code, room type code, and corporate discount number for the booking rules requested.
     *
     * @param \Recranet\OTA\Type\OTAHotelBookingRuleRQ\OTAHotelBookingRuleRQAType\RuleMessageAType\StatusApplicationAType $statusApplication
     * @return self
     */
    public function setStatusApplication(?\Recranet\OTA\Type\OTAHotelBookingRuleRQ\OTAHotelBookingRuleRQAType\RuleMessageAType\StatusApplicationAType $statusApplication = null)
    {
        $this->statusApplication = $statusApplication;
        return $this;
    }

    /**
     * Gets as guestCounts
     *
     * Specifies the number of adults and children per room.
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
     * Specifies the number of adults and children per room.
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
     * Adds as hotelReservationID
     *
     * The hotel confirmation number for which the booking rules are requested.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelReservationIDsType\HotelReservationIDAType $hotelReservationID
     */
    public function addToHotelReservationIDs(\Recranet\OTA\Type\HotelReservationIDsType\HotelReservationIDAType $hotelReservationID)
    {
        $this->hotelReservationIDs[] = $hotelReservationID;
        return $this;
    }

    /**
     * isset hotelReservationIDs
     *
     * The hotel confirmation number for which the booking rules are requested.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelReservationIDs($index)
    {
        return isset($this->hotelReservationIDs[$index]);
    }

    /**
     * unset hotelReservationIDs
     *
     * The hotel confirmation number for which the booking rules are requested.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelReservationIDs($index)
    {
        unset($this->hotelReservationIDs[$index]);
    }

    /**
     * Gets as hotelReservationIDs
     *
     * The hotel confirmation number for which the booking rules are requested.
     *
     * @return \Recranet\OTA\Type\HotelReservationIDsType\HotelReservationIDAType[]
     */
    public function getHotelReservationIDs()
    {
        return $this->hotelReservationIDs;
    }

    /**
     * Sets a new hotelReservationIDs
     *
     * The hotel confirmation number for which the booking rules are requested.
     *
     * @param \Recranet\OTA\Type\HotelReservationIDsType\HotelReservationIDAType[] $hotelReservationIDs
     * @return self
     */
    public function setHotelReservationIDs(array $hotelReservationIDs = null)
    {
        $this->hotelReservationIDs = $hotelReservationIDs;
        return $this;
    }

    /**
     * Adds as ruleCategory
     *
     * A collection of rule categories.
     *
     * @return self
     * @param \Recranet\OTA\Type\OTAHotelBookingRuleRQ\OTAHotelBookingRuleRQAType\RuleMessageAType\RuleCategoriesAType\RuleCategoryAType $ruleCategory
     */
    public function addToRuleCategories(\Recranet\OTA\Type\OTAHotelBookingRuleRQ\OTAHotelBookingRuleRQAType\RuleMessageAType\RuleCategoriesAType\RuleCategoryAType $ruleCategory)
    {
        $this->ruleCategories[] = $ruleCategory;
        return $this;
    }

    /**
     * isset ruleCategories
     *
     * A collection of rule categories.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRuleCategories($index)
    {
        return isset($this->ruleCategories[$index]);
    }

    /**
     * unset ruleCategories
     *
     * A collection of rule categories.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRuleCategories($index)
    {
        unset($this->ruleCategories[$index]);
    }

    /**
     * Gets as ruleCategories
     *
     * A collection of rule categories.
     *
     * @return \Recranet\OTA\Type\OTAHotelBookingRuleRQ\OTAHotelBookingRuleRQAType\RuleMessageAType\RuleCategoriesAType\RuleCategoryAType[]
     */
    public function getRuleCategories()
    {
        return $this->ruleCategories;
    }

    /**
     * Sets a new ruleCategories
     *
     * A collection of rule categories.
     *
     * @param \Recranet\OTA\Type\OTAHotelBookingRuleRQ\OTAHotelBookingRuleRQAType\RuleMessageAType\RuleCategoriesAType\RuleCategoryAType[] $ruleCategories
     * @return self
     */
    public function setRuleCategories(array $ruleCategories = null)
    {
        $this->ruleCategories = $ruleCategories;
        return $this;
    }
}

