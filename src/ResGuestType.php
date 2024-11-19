<?php

namespace Recranet\OTA;

/**
 * Class representing ResGuestType
 *
 * A collection of ResGuest objects, identifying the guests associated with this reservation. Which guests are in which room is determined by each RoomStays ResGuestRPHs collection.
 * XSD Type: ResGuestType
 */
class ResGuestType
{
    /**
     * This is a reference placeholder, used as an index for this guest in this reservation. In the ResGuest object it is used like all other RPH attributes to send the delta of a reservation. It is used by the RoomStay and Service objects to indicate which guests are associated with that room stay or service.
     *
     * @var string $resGuestRPH
     */
    private $resGuestRPH = null;

    /**
     * A code representing a business rule that determines the charges for a guest based upon age rannge (e.g. Adult, Child, Senior, Child With Adult, Child Without Adult). This attribute allows for an increase in rate by occupant class. Refer to OpenTravel Code List Age Qualifying Code (AQC).
     *
     * @var string $ageQualifyingCode
     */
    private $ageQualifyingCode = null;

    /**
     * This represents the date and time of the guest's arrival at the hotel. For example, this could be used to indicate a late arrival.
     *
     * @var \DateTime $arrivalTime
     */
    private $arrivalTime = null;

    /**
     * This represents the date and time of the guest's departure from the hotel.
     *
     * @var \DateTime $departureTime
     */
    private $departureTime = null;

    /**
     * The identification of a group meeting or convention. Used to track a guest who is part of an inventory block (e.g.: group), and can be used for a pick-up when the guest calls in to reserve a room as part of the block. Whether this is taken from inventory depends upon the InventoryBlockCode in the Room Stay class. This code is associated with a group or event as agreed between two parties.
     *
     * @var string $groupEventCode
     */
    private $groupEventCode = null;

    /**
     * Guest is VIP indicator.
     *
     * @var bool $vIP
     */
    private $vIP = null;

    /**
     * When true indicates this is the primary guest.
     *
     * @var bool $primaryIndicator
     */
    private $primaryIndicator = null;

    /**
     * The age of the guest.
     *
     * @var int $age
     */
    private $age = null;

    /**
     * A code used to identify a location.
     *
     * @var string $locationCode
     */
    private $locationCode = null;

    /**
     * Identifies the context of the identifying code (e.g., IATA, ARC, or internal code).
     *
     *  IATA
     *
     * @var string $codeContext
     */
    private $codeContext = null;

    /**
     * The action being taken on the guest entry.
     *
     * @var string $action
     */
    private $action = null;

    /**
     * @var \Recranet\OTA\ProfilesType\ProfileInfoAType[] $profiles
     */
    private $profiles = null;

    /**
     * The SpecialRequest object indicates special requests for a particular guest.
     *
     * @var \Recranet\OTA\SpecialRequestType\SpecialRequestAType[] $specialRequests
     */
    private $specialRequests = null;

    /**
     * A collection of Comment objects. Comments which apply to one or more guests.
     *
     * @var \Recranet\OTA\CommentType\CommentAType[] $comments
     */
    private $comments = null;

    /**
     * @var \Recranet\OTA\ServiceRPHsType\ServiceRPHAType[] $serviceRPHs
     */
    private $serviceRPHs = null;

    /**
     * Collection of ProfileRPH.
     *
     * @var \Recranet\OTA\ResGuestType\ProfileRPHsAType\ProfileRPHAType[] $profileRPHs
     */
    private $profileRPHs = null;

    /**
     * @var \Recranet\OTA\TransportInfoType\TransportInfoAType[] $arrivalTransport
     */
    private $arrivalTransport = null;

    /**
     * @var \Recranet\OTA\TransportInfoType\TransportInfoAType[] $departureTransport
     */
    private $departureTransport = null;

    /**
     * @var \Recranet\OTA\GuestCountType $guestCounts
     */
    private $guestCounts = null;

    /**
     * @var \Recranet\OTA\DateTimeSpanType $inHouseTimeSpan
     */
    private $inHouseTimeSpan = null;

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as resGuestRPH
     *
     * This is a reference placeholder, used as an index for this guest in this reservation. In the ResGuest object it is used like all other RPH attributes to send the delta of a reservation. It is used by the RoomStay and Service objects to indicate which guests are associated with that room stay or service.
     *
     * @return string
     */
    public function getResGuestRPH()
    {
        return $this->resGuestRPH;
    }

    /**
     * Sets a new resGuestRPH
     *
     * This is a reference placeholder, used as an index for this guest in this reservation. In the ResGuest object it is used like all other RPH attributes to send the delta of a reservation. It is used by the RoomStay and Service objects to indicate which guests are associated with that room stay or service.
     *
     * @param string $resGuestRPH
     * @return self
     */
    public function setResGuestRPH($resGuestRPH)
    {
        $this->resGuestRPH = $resGuestRPH;
        return $this;
    }

    /**
     * Gets as ageQualifyingCode
     *
     * A code representing a business rule that determines the charges for a guest based upon age rannge (e.g. Adult, Child, Senior, Child With Adult, Child Without Adult). This attribute allows for an increase in rate by occupant class. Refer to OpenTravel Code List Age Qualifying Code (AQC).
     *
     * @return string
     */
    public function getAgeQualifyingCode()
    {
        return $this->ageQualifyingCode;
    }

    /**
     * Sets a new ageQualifyingCode
     *
     * A code representing a business rule that determines the charges for a guest based upon age rannge (e.g. Adult, Child, Senior, Child With Adult, Child Without Adult). This attribute allows for an increase in rate by occupant class. Refer to OpenTravel Code List Age Qualifying Code (AQC).
     *
     * @param string $ageQualifyingCode
     * @return self
     */
    public function setAgeQualifyingCode($ageQualifyingCode)
    {
        $this->ageQualifyingCode = $ageQualifyingCode;
        return $this;
    }

    /**
     * Gets as arrivalTime
     *
     * This represents the date and time of the guest's arrival at the hotel. For example, this could be used to indicate a late arrival.
     *
     * @return \DateTime
     */
    public function getArrivalTime()
    {
        return $this->arrivalTime;
    }

    /**
     * Sets a new arrivalTime
     *
     * This represents the date and time of the guest's arrival at the hotel. For example, this could be used to indicate a late arrival.
     *
     * @param \DateTime $arrivalTime
     * @return self
     */
    public function setArrivalTime(\DateTime $arrivalTime)
    {
        $this->arrivalTime = $arrivalTime;
        return $this;
    }

    /**
     * Gets as departureTime
     *
     * This represents the date and time of the guest's departure from the hotel.
     *
     * @return \DateTime
     */
    public function getDepartureTime()
    {
        return $this->departureTime;
    }

    /**
     * Sets a new departureTime
     *
     * This represents the date and time of the guest's departure from the hotel.
     *
     * @param \DateTime $departureTime
     * @return self
     */
    public function setDepartureTime(\DateTime $departureTime)
    {
        $this->departureTime = $departureTime;
        return $this;
    }

    /**
     * Gets as groupEventCode
     *
     * The identification of a group meeting or convention. Used to track a guest who is part of an inventory block (e.g.: group), and can be used for a pick-up when the guest calls in to reserve a room as part of the block. Whether this is taken from inventory depends upon the InventoryBlockCode in the Room Stay class. This code is associated with a group or event as agreed between two parties.
     *
     * @return string
     */
    public function getGroupEventCode()
    {
        return $this->groupEventCode;
    }

    /**
     * Sets a new groupEventCode
     *
     * The identification of a group meeting or convention. Used to track a guest who is part of an inventory block (e.g.: group), and can be used for a pick-up when the guest calls in to reserve a room as part of the block. Whether this is taken from inventory depends upon the InventoryBlockCode in the Room Stay class. This code is associated with a group or event as agreed between two parties.
     *
     * @param string $groupEventCode
     * @return self
     */
    public function setGroupEventCode($groupEventCode)
    {
        $this->groupEventCode = $groupEventCode;
        return $this;
    }

    /**
     * Gets as vIP
     *
     * Guest is VIP indicator.
     *
     * @return bool
     */
    public function getVIP()
    {
        return $this->vIP;
    }

    /**
     * Sets a new vIP
     *
     * Guest is VIP indicator.
     *
     * @param bool $vIP
     * @return self
     */
    public function setVIP($vIP)
    {
        $this->vIP = $vIP;
        return $this;
    }

    /**
     * Gets as primaryIndicator
     *
     * When true indicates this is the primary guest.
     *
     * @return bool
     */
    public function getPrimaryIndicator()
    {
        return $this->primaryIndicator;
    }

    /**
     * Sets a new primaryIndicator
     *
     * When true indicates this is the primary guest.
     *
     * @param bool $primaryIndicator
     * @return self
     */
    public function setPrimaryIndicator($primaryIndicator)
    {
        $this->primaryIndicator = $primaryIndicator;
        return $this;
    }

    /**
     * Gets as age
     *
     * The age of the guest.
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Sets a new age
     *
     * The age of the guest.
     *
     * @param int $age
     * @return self
     */
    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    /**
     * Gets as locationCode
     *
     * A code used to identify a location.
     *
     * @return string
     */
    public function getLocationCode()
    {
        return $this->locationCode;
    }

    /**
     * Sets a new locationCode
     *
     * A code used to identify a location.
     *
     * @param string $locationCode
     * @return self
     */
    public function setLocationCode($locationCode)
    {
        $this->locationCode = $locationCode;
        return $this;
    }

    /**
     * Gets as codeContext
     *
     * Identifies the context of the identifying code (e.g., IATA, ARC, or internal code).
     *
     *  IATA
     *
     * @return string
     */
    public function getCodeContext()
    {
        return $this->codeContext;
    }

    /**
     * Sets a new codeContext
     *
     * Identifies the context of the identifying code (e.g., IATA, ARC, or internal code).
     *
     *  IATA
     *
     * @param string $codeContext
     * @return self
     */
    public function setCodeContext($codeContext)
    {
        $this->codeContext = $codeContext;
        return $this;
    }

    /**
     * Gets as action
     *
     * The action being taken on the guest entry.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets a new action
     *
     * The action being taken on the guest entry.
     *
     * @param string $action
     * @return self
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * Adds as profileInfo
     *
     * @return self
     * @param \Recranet\OTA\ProfilesType\ProfileInfoAType $profileInfo
     */
    public function addToProfiles(\Recranet\OTA\ProfilesType\ProfileInfoAType $profileInfo)
    {
        $this->profiles[] = $profileInfo;
        return $this;
    }

    /**
     * isset profiles
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProfiles($index)
    {
        return isset($this->profiles[$index]);
    }

    /**
     * unset profiles
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProfiles($index)
    {
        unset($this->profiles[$index]);
    }

    /**
     * Gets as profiles
     *
     * @return \Recranet\OTA\ProfilesType\ProfileInfoAType[]
     */
    public function getProfiles()
    {
        return $this->profiles;
    }

    /**
     * Sets a new profiles
     *
     * @param \Recranet\OTA\ProfilesType\ProfileInfoAType[] $profiles
     * @return self
     */
    public function setProfiles(array $profiles = null)
    {
        $this->profiles = $profiles;
        return $this;
    }

    /**
     * Adds as specialRequest
     *
     * The SpecialRequest object indicates special requests for a particular guest.
     *
     * @return self
     * @param \Recranet\OTA\SpecialRequestType\SpecialRequestAType $specialRequest
     */
    public function addToSpecialRequests(\Recranet\OTA\SpecialRequestType\SpecialRequestAType $specialRequest)
    {
        $this->specialRequests[] = $specialRequest;
        return $this;
    }

    /**
     * isset specialRequests
     *
     * The SpecialRequest object indicates special requests for a particular guest.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialRequests($index)
    {
        return isset($this->specialRequests[$index]);
    }

    /**
     * unset specialRequests
     *
     * The SpecialRequest object indicates special requests for a particular guest.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialRequests($index)
    {
        unset($this->specialRequests[$index]);
    }

    /**
     * Gets as specialRequests
     *
     * The SpecialRequest object indicates special requests for a particular guest.
     *
     * @return \Recranet\OTA\SpecialRequestType\SpecialRequestAType[]
     */
    public function getSpecialRequests()
    {
        return $this->specialRequests;
    }

    /**
     * Sets a new specialRequests
     *
     * The SpecialRequest object indicates special requests for a particular guest.
     *
     * @param \Recranet\OTA\SpecialRequestType\SpecialRequestAType[] $specialRequests
     * @return self
     */
    public function setSpecialRequests(array $specialRequests = null)
    {
        $this->specialRequests = $specialRequests;
        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of Comment objects. Comments which apply to one or more guests.
     *
     * @return self
     * @param \Recranet\OTA\CommentType\CommentAType $comment
     */
    public function addToComments(\Recranet\OTA\CommentType\CommentAType $comment)
    {
        $this->comments[] = $comment;
        return $this;
    }

    /**
     * isset comments
     *
     * A collection of Comment objects. Comments which apply to one or more guests.
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
     * A collection of Comment objects. Comments which apply to one or more guests.
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
     * A collection of Comment objects. Comments which apply to one or more guests.
     *
     * @return \Recranet\OTA\CommentType\CommentAType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * A collection of Comment objects. Comments which apply to one or more guests.
     *
     * @param \Recranet\OTA\CommentType\CommentAType[] $comments
     * @return self
     */
    public function setComments(array $comments = null)
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * Adds as serviceRPH
     *
     * @return self
     * @param \Recranet\OTA\ServiceRPHsType\ServiceRPHAType $serviceRPH
     */
    public function addToServiceRPHs(\Recranet\OTA\ServiceRPHsType\ServiceRPHAType $serviceRPH)
    {
        $this->serviceRPHs[] = $serviceRPH;
        return $this;
    }

    /**
     * isset serviceRPHs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceRPHs($index)
    {
        return isset($this->serviceRPHs[$index]);
    }

    /**
     * unset serviceRPHs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceRPHs($index)
    {
        unset($this->serviceRPHs[$index]);
    }

    /**
     * Gets as serviceRPHs
     *
     * @return \Recranet\OTA\ServiceRPHsType\ServiceRPHAType[]
     */
    public function getServiceRPHs()
    {
        return $this->serviceRPHs;
    }

    /**
     * Sets a new serviceRPHs
     *
     * @param \Recranet\OTA\ServiceRPHsType\ServiceRPHAType[] $serviceRPHs
     * @return self
     */
    public function setServiceRPHs(array $serviceRPHs = null)
    {
        $this->serviceRPHs = $serviceRPHs;
        return $this;
    }

    /**
     * Adds as profileRPH
     *
     * Collection of ProfileRPH.
     *
     * @return self
     * @param \Recranet\OTA\ResGuestType\ProfileRPHsAType\ProfileRPHAType $profileRPH
     */
    public function addToProfileRPHs(\Recranet\OTA\ResGuestType\ProfileRPHsAType\ProfileRPHAType $profileRPH)
    {
        $this->profileRPHs[] = $profileRPH;
        return $this;
    }

    /**
     * isset profileRPHs
     *
     * Collection of ProfileRPH.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProfileRPHs($index)
    {
        return isset($this->profileRPHs[$index]);
    }

    /**
     * unset profileRPHs
     *
     * Collection of ProfileRPH.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProfileRPHs($index)
    {
        unset($this->profileRPHs[$index]);
    }

    /**
     * Gets as profileRPHs
     *
     * Collection of ProfileRPH.
     *
     * @return \Recranet\OTA\ResGuestType\ProfileRPHsAType\ProfileRPHAType[]
     */
    public function getProfileRPHs()
    {
        return $this->profileRPHs;
    }

    /**
     * Sets a new profileRPHs
     *
     * Collection of ProfileRPH.
     *
     * @param \Recranet\OTA\ResGuestType\ProfileRPHsAType\ProfileRPHAType[] $profileRPHs
     * @return self
     */
    public function setProfileRPHs(array $profileRPHs = null)
    {
        $this->profileRPHs = $profileRPHs;
        return $this;
    }

    /**
     * Adds as transportInfo
     *
     * @return self
     * @param \Recranet\OTA\TransportInfoType\TransportInfoAType $transportInfo
     */
    public function addToArrivalTransport(\Recranet\OTA\TransportInfoType\TransportInfoAType $transportInfo)
    {
        $this->arrivalTransport[] = $transportInfo;
        return $this;
    }

    /**
     * isset arrivalTransport
     *
     * @param int|string $index
     * @return bool
     */
    public function issetArrivalTransport($index)
    {
        return isset($this->arrivalTransport[$index]);
    }

    /**
     * unset arrivalTransport
     *
     * @param int|string $index
     * @return void
     */
    public function unsetArrivalTransport($index)
    {
        unset($this->arrivalTransport[$index]);
    }

    /**
     * Gets as arrivalTransport
     *
     * @return \Recranet\OTA\TransportInfoType\TransportInfoAType[]
     */
    public function getArrivalTransport()
    {
        return $this->arrivalTransport;
    }

    /**
     * Sets a new arrivalTransport
     *
     * @param \Recranet\OTA\TransportInfoType\TransportInfoAType[] $arrivalTransport
     * @return self
     */
    public function setArrivalTransport(array $arrivalTransport = null)
    {
        $this->arrivalTransport = $arrivalTransport;
        return $this;
    }

    /**
     * Adds as transportInfo
     *
     * @return self
     * @param \Recranet\OTA\TransportInfoType\TransportInfoAType $transportInfo
     */
    public function addToDepartureTransport(\Recranet\OTA\TransportInfoType\TransportInfoAType $transportInfo)
    {
        $this->departureTransport[] = $transportInfo;
        return $this;
    }

    /**
     * isset departureTransport
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDepartureTransport($index)
    {
        return isset($this->departureTransport[$index]);
    }

    /**
     * unset departureTransport
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDepartureTransport($index)
    {
        unset($this->departureTransport[$index]);
    }

    /**
     * Gets as departureTransport
     *
     * @return \Recranet\OTA\TransportInfoType\TransportInfoAType[]
     */
    public function getDepartureTransport()
    {
        return $this->departureTransport;
    }

    /**
     * Sets a new departureTransport
     *
     * @param \Recranet\OTA\TransportInfoType\TransportInfoAType[] $departureTransport
     * @return self
     */
    public function setDepartureTransport(array $departureTransport = null)
    {
        $this->departureTransport = $departureTransport;
        return $this;
    }

    /**
     * Gets as guestCounts
     *
     * @return \Recranet\OTA\GuestCountType
     */
    public function getGuestCounts()
    {
        return $this->guestCounts;
    }

    /**
     * Sets a new guestCounts
     *
     * @param \Recranet\OTA\GuestCountType $guestCounts
     * @return self
     */
    public function setGuestCounts(?\Recranet\OTA\GuestCountType $guestCounts = null)
    {
        $this->guestCounts = $guestCounts;
        return $this;
    }

    /**
     * Gets as inHouseTimeSpan
     *
     * @return \Recranet\OTA\DateTimeSpanType
     */
    public function getInHouseTimeSpan()
    {
        return $this->inHouseTimeSpan;
    }

    /**
     * Sets a new inHouseTimeSpan
     *
     * @param \Recranet\OTA\DateTimeSpanType $inHouseTimeSpan
     * @return self
     */
    public function setInHouseTimeSpan(?\Recranet\OTA\DateTimeSpanType $inHouseTimeSpan = null)
    {
        $this->inHouseTimeSpan = $inHouseTimeSpan;
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

