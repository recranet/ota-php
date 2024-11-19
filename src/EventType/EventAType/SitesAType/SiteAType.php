<?php

namespace Recranet\OTA\EventType\EventAType\SitesAType;

/**
 * Class representing SiteAType
 */
class SiteAType
{
    /**
     * When true, indicates the site is the primary facility for the event.
     *
     * @var bool $primaryFacilityIndicator
     */
    private $primaryFacilityIndicator = null;

    /**
     * When true, indicates the site is the primary hotel for the event.
     *
     * @var bool $headquarterHotelIndicator
     */
    private $headquarterHotelIndicator = null;

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
     * A collection of contacts associated with a specific site.
     *
     * @var \Recranet\OTA\ContactPersonType[] $contacts
     */
    private $contacts = null;

    /**
     * Information pertaining to room requirements for this event.
     *
     * @var \Recranet\OTA\EventType\EventAType\SitesAType\SiteAType\RoomBlockAType[] $roomBlock
     */
    private $roomBlock = [
        
    ];

    /**
     * A collection of event days.
     *
     * @var \Recranet\OTA\EventType\EventAType\SitesAType\SiteAType\EventDaysAType $eventDays
     */
    private $eventDays = null;

    /**
     * A collection of shipping and receiving details.
     *
     * @var \Recranet\OTA\EventType\EventAType\SitesAType\SiteAType\ShippingReceivingDetailsAType $shippingReceivingDetails
     */
    private $shippingReceivingDetails = null;

    /**
     * A collection of comments pertaining to a specific site.
     *
     * @var \Recranet\OTA\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * Gets as primaryFacilityIndicator
     *
     * When true, indicates the site is the primary facility for the event.
     *
     * @return bool
     */
    public function getPrimaryFacilityIndicator()
    {
        return $this->primaryFacilityIndicator;
    }

    /**
     * Sets a new primaryFacilityIndicator
     *
     * When true, indicates the site is the primary facility for the event.
     *
     * @param bool $primaryFacilityIndicator
     * @return self
     */
    public function setPrimaryFacilityIndicator($primaryFacilityIndicator)
    {
        $this->primaryFacilityIndicator = $primaryFacilityIndicator;
        return $this;
    }

    /**
     * Gets as headquarterHotelIndicator
     *
     * When true, indicates the site is the primary hotel for the event.
     *
     * @return bool
     */
    public function getHeadquarterHotelIndicator()
    {
        return $this->headquarterHotelIndicator;
    }

    /**
     * Sets a new headquarterHotelIndicator
     *
     * When true, indicates the site is the primary hotel for the event.
     *
     * @param bool $headquarterHotelIndicator
     * @return self
     */
    public function setHeadquarterHotelIndicator($headquarterHotelIndicator)
    {
        $this->headquarterHotelIndicator = $headquarterHotelIndicator;
        return $this;
    }

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
     * Adds as contact
     *
     * A collection of contacts associated with a specific site.
     *
     * @return self
     * @param \Recranet\OTA\ContactPersonType $contact
     */
    public function addToContacts(\Recranet\OTA\ContactPersonType $contact)
    {
        $this->contacts[] = $contact;
        return $this;
    }

    /**
     * isset contacts
     *
     * A collection of contacts associated with a specific site.
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
     * A collection of contacts associated with a specific site.
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
     * A collection of contacts associated with a specific site.
     *
     * @return \Recranet\OTA\ContactPersonType[]
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Sets a new contacts
     *
     * A collection of contacts associated with a specific site.
     *
     * @param \Recranet\OTA\ContactPersonType[] $contacts
     * @return self
     */
    public function setContacts(array $contacts = null)
    {
        $this->contacts = $contacts;
        return $this;
    }

    /**
     * Adds as roomBlock
     *
     * Information pertaining to room requirements for this event.
     *
     * @return self
     * @param \Recranet\OTA\EventType\EventAType\SitesAType\SiteAType\RoomBlockAType $roomBlock
     */
    public function addToRoomBlock(\Recranet\OTA\EventType\EventAType\SitesAType\SiteAType\RoomBlockAType $roomBlock)
    {
        $this->roomBlock[] = $roomBlock;
        return $this;
    }

    /**
     * isset roomBlock
     *
     * Information pertaining to room requirements for this event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomBlock($index)
    {
        return isset($this->roomBlock[$index]);
    }

    /**
     * unset roomBlock
     *
     * Information pertaining to room requirements for this event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomBlock($index)
    {
        unset($this->roomBlock[$index]);
    }

    /**
     * Gets as roomBlock
     *
     * Information pertaining to room requirements for this event.
     *
     * @return \Recranet\OTA\EventType\EventAType\SitesAType\SiteAType\RoomBlockAType[]
     */
    public function getRoomBlock()
    {
        return $this->roomBlock;
    }

    /**
     * Sets a new roomBlock
     *
     * Information pertaining to room requirements for this event.
     *
     * @param \Recranet\OTA\EventType\EventAType\SitesAType\SiteAType\RoomBlockAType[] $roomBlock
     * @return self
     */
    public function setRoomBlock(array $roomBlock = null)
    {
        $this->roomBlock = $roomBlock;
        return $this;
    }

    /**
     * Gets as eventDays
     *
     * A collection of event days.
     *
     * @return \Recranet\OTA\EventType\EventAType\SitesAType\SiteAType\EventDaysAType
     */
    public function getEventDays()
    {
        return $this->eventDays;
    }

    /**
     * Sets a new eventDays
     *
     * A collection of event days.
     *
     * @param \Recranet\OTA\EventType\EventAType\SitesAType\SiteAType\EventDaysAType $eventDays
     * @return self
     */
    public function setEventDays(?\Recranet\OTA\EventType\EventAType\SitesAType\SiteAType\EventDaysAType $eventDays = null)
    {
        $this->eventDays = $eventDays;
        return $this;
    }

    /**
     * Gets as shippingReceivingDetails
     *
     * A collection of shipping and receiving details.
     *
     * @return \Recranet\OTA\EventType\EventAType\SitesAType\SiteAType\ShippingReceivingDetailsAType
     */
    public function getShippingReceivingDetails()
    {
        return $this->shippingReceivingDetails;
    }

    /**
     * Sets a new shippingReceivingDetails
     *
     * A collection of shipping and receiving details.
     *
     * @param \Recranet\OTA\EventType\EventAType\SitesAType\SiteAType\ShippingReceivingDetailsAType $shippingReceivingDetails
     * @return self
     */
    public function setShippingReceivingDetails(?\Recranet\OTA\EventType\EventAType\SitesAType\SiteAType\ShippingReceivingDetailsAType $shippingReceivingDetails = null)
    {
        $this->shippingReceivingDetails = $shippingReceivingDetails;
        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of comments pertaining to a specific site.
     *
     * @return self
     * @param \Recranet\OTA\ParagraphType $comment
     */
    public function addToComments(\Recranet\OTA\ParagraphType $comment)
    {
        $this->comments[] = $comment;
        return $this;
    }

    /**
     * isset comments
     *
     * A collection of comments pertaining to a specific site.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComments($index)
    {
        return isset($this->comments[$index]);
    }

    /**
     * unset comments
     *
     * A collection of comments pertaining to a specific site.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComments($index)
    {
        unset($this->comments[$index]);
    }

    /**
     * Gets as comments
     *
     * A collection of comments pertaining to a specific site.
     *
     * @return \Recranet\OTA\ParagraphType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * A collection of comments pertaining to a specific site.
     *
     * @param \Recranet\OTA\ParagraphType[] $comments
     * @return self
     */
    public function setComments(array $comments = null)
    {
        $this->comments = $comments;
        return $this;
    }
}

