<?php

namespace Recranet\OTA\Type\OTAHotelAvailRS\OTAHotelAvailRSAType\RoomStaysAType;

use Recranet\OTA\Type\RoomStayType;

/**
 * Class representing RoomStayAType
 */
class RoomStayAType extends RoomStayType
{
    /**
     * Indicates the RoomStay is an alternate offer. Default=false.
     *
     *  false
     *
     * @var bool $isAlternate
     */
    private $isAlternate = null;

    /**
     * Used to specify an availability status at the room stay level for a property.
     *
     * @var string $availabilityStatus
     */
    private $availabilityStatus = null;

    /**
     * Defines whether the response is a property list or an area list.
     *
     * @var string $responseType
     */
    private $responseType = null;

    /**
     * A reference to a requested room stay candidate from the SearchCriteria.
     *
     * @var string $roomStayCandidateRPH
     */
    private $roomStayCandidateRPH = null;

    /**
     * The availability response returns the attribute if there is additional data that could not fit within the availability response. The text value should be echoed in the availability request to indicate where to begin the next block of availability data.
     *
     * @var string $moreDataEchoToken
     */
    private $moreDataEchoToken = null;

    /**
     * Used to specify the source of the data being exchanged as determined by trading partners.
     *
     * @var string $infoSource
     */
    private $infoSource = null;

    /**
     * Identifies the room stay for use in the hotel stay.
     *
     * @var string $rPH
     */
    private $rPH = null;

    /**
     * May be used as a simple true/false to indicate availability or used in conjunction with @AvailabilityStatus to indicate if restricted rate qualifications have been met e.g. Exclusive and Available (true) vs. Exclusive but not Available (false).
     *
     * @var bool $availableIndicator
     */
    private $availableIndicator = null;

    /**
     * Information by which this availability quote can be later cross-referenced.
     *
     * @var \Recranet\OTA\Type\OTAHotelAvailRS\OTAHotelAvailRSAType\RoomStaysAType\RoomStayAType\ReferenceAType $reference
     */
    private $reference = null;

    /**
     * A container for the unique references to the services for the room stay.
     *
     * @var \Recranet\OTA\Type\ServiceRPHsType\ServiceRPHAType[] $serviceRPHs
     */
    private $serviceRPHs = null;

    /**
     * Gets as isAlternate
     *
     * Indicates the RoomStay is an alternate offer. Default=false.
     *
     *  false
     *
     * @return bool
     */
    public function getIsAlternate()
    {
        return $this->isAlternate;
    }

    /**
     * Sets a new isAlternate
     *
     * Indicates the RoomStay is an alternate offer. Default=false.
     *
     *  false
     *
     * @param bool $isAlternate
     * @return self
     */
    public function setIsAlternate($isAlternate)
    {
        $this->isAlternate = $isAlternate;
        return $this;
    }

    /**
     * Gets as availabilityStatus
     *
     * Used to specify an availability status at the room stay level for a property.
     *
     * @return string
     */
    public function getAvailabilityStatus()
    {
        return $this->availabilityStatus;
    }

    /**
     * Sets a new availabilityStatus
     *
     * Used to specify an availability status at the room stay level for a property.
     *
     * @param string $availabilityStatus
     * @return self
     */
    public function setAvailabilityStatus($availabilityStatus)
    {
        $this->availabilityStatus = $availabilityStatus;
        return $this;
    }

    /**
     * Gets as responseType
     *
     * Defines whether the response is a property list or an area list.
     *
     * @return string
     */
    public function getResponseType()
    {
        return $this->responseType;
    }

    /**
     * Sets a new responseType
     *
     * Defines whether the response is a property list or an area list.
     *
     * @param string $responseType
     * @return self
     */
    public function setResponseType($responseType)
    {
        $this->responseType = $responseType;
        return $this;
    }

    /**
     * Gets as roomStayCandidateRPH
     *
     * A reference to a requested room stay candidate from the SearchCriteria.
     *
     * @return string
     */
    public function getRoomStayCandidateRPH()
    {
        return $this->roomStayCandidateRPH;
    }

    /**
     * Sets a new roomStayCandidateRPH
     *
     * A reference to a requested room stay candidate from the SearchCriteria.
     *
     * @param string $roomStayCandidateRPH
     * @return self
     */
    public function setRoomStayCandidateRPH($roomStayCandidateRPH)
    {
        $this->roomStayCandidateRPH = $roomStayCandidateRPH;
        return $this;
    }

    /**
     * Gets as moreDataEchoToken
     *
     * The availability response returns the attribute if there is additional data that could not fit within the availability response. The text value should be echoed in the availability request to indicate where to begin the next block of availability data.
     *
     * @return string
     */
    public function getMoreDataEchoToken()
    {
        return $this->moreDataEchoToken;
    }

    /**
     * Sets a new moreDataEchoToken
     *
     * The availability response returns the attribute if there is additional data that could not fit within the availability response. The text value should be echoed in the availability request to indicate where to begin the next block of availability data.
     *
     * @param string $moreDataEchoToken
     * @return self
     */
    public function setMoreDataEchoToken($moreDataEchoToken)
    {
        $this->moreDataEchoToken = $moreDataEchoToken;
        return $this;
    }

    /**
     * Gets as infoSource
     *
     * Used to specify the source of the data being exchanged as determined by trading partners.
     *
     * @return string
     */
    public function getInfoSource()
    {
        return $this->infoSource;
    }

    /**
     * Sets a new infoSource
     *
     * Used to specify the source of the data being exchanged as determined by trading partners.
     *
     * @param string $infoSource
     * @return self
     */
    public function setInfoSource($infoSource)
    {
        $this->infoSource = $infoSource;
        return $this;
    }

    /**
     * Gets as rPH
     *
     * Identifies the room stay for use in the hotel stay.
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
     * Identifies the room stay for use in the hotel stay.
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
     * Gets as availableIndicator
     *
     * May be used as a simple true/false to indicate availability or used in conjunction with @AvailabilityStatus to indicate if restricted rate qualifications have been met e.g. Exclusive and Available (true) vs. Exclusive but not Available (false).
     *
     * @return bool
     */
    public function getAvailableIndicator()
    {
        return $this->availableIndicator;
    }

    /**
     * Sets a new availableIndicator
     *
     * May be used as a simple true/false to indicate availability or used in conjunction with @AvailabilityStatus to indicate if restricted rate qualifications have been met e.g. Exclusive and Available (true) vs. Exclusive but not Available (false).
     *
     * @param bool $availableIndicator
     * @return self
     */
    public function setAvailableIndicator($availableIndicator)
    {
        $this->availableIndicator = $availableIndicator;
        return $this;
    }

    /**
     * Gets as reference
     *
     * Information by which this availability quote can be later cross-referenced.
     *
     * @return \Recranet\OTA\Type\OTAHotelAvailRS\OTAHotelAvailRSAType\RoomStaysAType\RoomStayAType\ReferenceAType
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * Information by which this availability quote can be later cross-referenced.
     *
     * @param \Recranet\OTA\Type\OTAHotelAvailRS\OTAHotelAvailRSAType\RoomStaysAType\RoomStayAType\ReferenceAType $reference
     * @return self
     */
    public function setReference(?\Recranet\OTA\Type\OTAHotelAvailRS\OTAHotelAvailRSAType\RoomStaysAType\RoomStayAType\ReferenceAType $reference = null)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Adds as serviceRPH
     *
     * A container for the unique references to the services for the room stay.
     *
     * @return self
     * @param \Recranet\OTA\Type\ServiceRPHsType\ServiceRPHAType $serviceRPH
     */
    public function addToServiceRPHs(\Recranet\OTA\Type\ServiceRPHsType\ServiceRPHAType $serviceRPH)
    {
        $this->serviceRPHs[] = $serviceRPH;
        return $this;
    }

    /**
     * isset serviceRPHs
     *
     * A container for the unique references to the services for the room stay.
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
     * A container for the unique references to the services for the room stay.
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
     * A container for the unique references to the services for the room stay.
     *
     * @return \Recranet\OTA\Type\ServiceRPHsType\ServiceRPHAType[]
     */
    public function getServiceRPHs()
    {
        return $this->serviceRPHs;
    }

    /**
     * Sets a new serviceRPHs
     *
     * A container for the unique references to the services for the room stay.
     *
     * @param \Recranet\OTA\Type\ServiceRPHsType\ServiceRPHAType[] $serviceRPHs
     * @return self
     */
    public function setServiceRPHs(array $serviceRPHs = null)
    {
        $this->serviceRPHs = $serviceRPHs;
        return $this;
    }
}

