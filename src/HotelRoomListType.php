<?php

namespace Recranet\OTA;

/**
 * Class representing HotelRoomListType
 *
 * Provides the details of a rooming list.
 * XSD Type: HotelRoomListType
 */
class HotelRoomListType
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
     * The code that identifies which group within a specific hotel for which this room list has been provided.
     *
     * @var string $groupBlockCode
     */
    private $groupBlockCode = null;

    /**
     * Date this room list was initially created.
     *
     * @var \DateTime $creationDate
     */
    private $creationDate = null;

    /**
     * The unique indicator for the group rooming list or tour operator booking reference.
     *
     * @var \Recranet\OTA\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * A collection of Guest.
     *
     * @var \Recranet\OTA\HotelRoomListType\GuestsAType\GuestAType[] $guests
     */
    private $guests = null;

    /**
     * Planner or coordinator contact information for the rooming list.
     *
     * @var \Recranet\OTA\HotelRoomListType\MasterContactAType $masterContact
     */
    private $masterContact = null;

    /**
     * Account established at the hotel for the purposes of billing arrangements for an entity.
     *
     * @var \Recranet\OTA\HotelRoomListType\MasterAccountAType $masterAccount
     */
    private $masterAccount = null;

    /**
     * A collection of RoomStay.
     *
     * @var \Recranet\OTA\HotelRoomListType\RoomStaysAType\RoomStayAType[] $roomStays
     */
    private $roomStays = null;

    /**
     * Defines the event to which the rooming list applies.
     *
     * @var \Recranet\OTA\HotelRoomListType\EventAType $event
     */
    private $event = null;

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
     * Gets as groupBlockCode
     *
     * The code that identifies which group within a specific hotel for which this room list has been provided.
     *
     * @return string
     */
    public function getGroupBlockCode()
    {
        return $this->groupBlockCode;
    }

    /**
     * Sets a new groupBlockCode
     *
     * The code that identifies which group within a specific hotel for which this room list has been provided.
     *
     * @param string $groupBlockCode
     * @return self
     */
    public function setGroupBlockCode($groupBlockCode)
    {
        $this->groupBlockCode = $groupBlockCode;
        return $this;
    }

    /**
     * Gets as creationDate
     *
     * Date this room list was initially created.
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Sets a new creationDate
     *
     * Date this room list was initially created.
     *
     * @param \DateTime $creationDate
     * @return self
     */
    public function setCreationDate(\DateTime $creationDate)
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * The unique indicator for the group rooming list or tour operator booking reference.
     *
     * @return \Recranet\OTA\UniqueIDType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * The unique indicator for the group rooming list or tour operator booking reference.
     *
     * @param \Recranet\OTA\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(?\Recranet\OTA\UniqueIDType $uniqueID = null)
    {
        $this->uniqueID = $uniqueID;
        return $this;
    }

    /**
     * Adds as guest
     *
     * A collection of Guest.
     *
     * @return self
     * @param \Recranet\OTA\HotelRoomListType\GuestsAType\GuestAType $guest
     */
    public function addToGuests(\Recranet\OTA\HotelRoomListType\GuestsAType\GuestAType $guest)
    {
        $this->guests[] = $guest;
        return $this;
    }

    /**
     * isset guests
     *
     * A collection of Guest.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuests($index)
    {
        return isset($this->guests[$index]);
    }

    /**
     * unset guests
     *
     * A collection of Guest.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuests($index)
    {
        unset($this->guests[$index]);
    }

    /**
     * Gets as guests
     *
     * A collection of Guest.
     *
     * @return \Recranet\OTA\HotelRoomListType\GuestsAType\GuestAType[]
     */
    public function getGuests()
    {
        return $this->guests;
    }

    /**
     * Sets a new guests
     *
     * A collection of Guest.
     *
     * @param \Recranet\OTA\HotelRoomListType\GuestsAType\GuestAType[] $guests
     * @return self
     */
    public function setGuests(array $guests = null)
    {
        $this->guests = $guests;
        return $this;
    }

    /**
     * Gets as masterContact
     *
     * Planner or coordinator contact information for the rooming list.
     *
     * @return \Recranet\OTA\HotelRoomListType\MasterContactAType
     */
    public function getMasterContact()
    {
        return $this->masterContact;
    }

    /**
     * Sets a new masterContact
     *
     * Planner or coordinator contact information for the rooming list.
     *
     * @param \Recranet\OTA\HotelRoomListType\MasterContactAType $masterContact
     * @return self
     */
    public function setMasterContact(?\Recranet\OTA\HotelRoomListType\MasterContactAType $masterContact = null)
    {
        $this->masterContact = $masterContact;
        return $this;
    }

    /**
     * Gets as masterAccount
     *
     * Account established at the hotel for the purposes of billing arrangements for an entity.
     *
     * @return \Recranet\OTA\HotelRoomListType\MasterAccountAType
     */
    public function getMasterAccount()
    {
        return $this->masterAccount;
    }

    /**
     * Sets a new masterAccount
     *
     * Account established at the hotel for the purposes of billing arrangements for an entity.
     *
     * @param \Recranet\OTA\HotelRoomListType\MasterAccountAType $masterAccount
     * @return self
     */
    public function setMasterAccount(?\Recranet\OTA\HotelRoomListType\MasterAccountAType $masterAccount = null)
    {
        $this->masterAccount = $masterAccount;
        return $this;
    }

    /**
     * Adds as roomStay
     *
     * A collection of RoomStay.
     *
     * @return self
     * @param \Recranet\OTA\HotelRoomListType\RoomStaysAType\RoomStayAType $roomStay
     */
    public function addToRoomStays(\Recranet\OTA\HotelRoomListType\RoomStaysAType\RoomStayAType $roomStay)
    {
        $this->roomStays[] = $roomStay;
        return $this;
    }

    /**
     * isset roomStays
     *
     * A collection of RoomStay.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomStays($index)
    {
        return isset($this->roomStays[$index]);
    }

    /**
     * unset roomStays
     *
     * A collection of RoomStay.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomStays($index)
    {
        unset($this->roomStays[$index]);
    }

    /**
     * Gets as roomStays
     *
     * A collection of RoomStay.
     *
     * @return \Recranet\OTA\HotelRoomListType\RoomStaysAType\RoomStayAType[]
     */
    public function getRoomStays()
    {
        return $this->roomStays;
    }

    /**
     * Sets a new roomStays
     *
     * A collection of RoomStay.
     *
     * @param \Recranet\OTA\HotelRoomListType\RoomStaysAType\RoomStayAType[] $roomStays
     * @return self
     */
    public function setRoomStays(array $roomStays = null)
    {
        $this->roomStays = $roomStays;
        return $this;
    }

    /**
     * Gets as event
     *
     * Defines the event to which the rooming list applies.
     *
     * @return \Recranet\OTA\HotelRoomListType\EventAType
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Sets a new event
     *
     * Defines the event to which the rooming list applies.
     *
     * @param \Recranet\OTA\HotelRoomListType\EventAType $event
     * @return self
     */
    public function setEvent(?\Recranet\OTA\HotelRoomListType\EventAType $event = null)
    {
        $this->event = $event;
        return $this;
    }
}

