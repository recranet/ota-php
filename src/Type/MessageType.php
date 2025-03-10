<?php

namespace Recranet\OTA\Type;

/**
 * Class representing MessageType
 *
 * If StartSeqNmbr and EndSeqNmbr are not sent, the request will be assumed to be for the last sequence number.
 * XSD Type: MessageType
 */
class MessageType
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
     * @var int $startSeqNmbr
     */
    private $startSeqNmbr = null;

    /**
     * @var int $endSeqNmbr
     */
    private $endSeqNmbr = null;

    /**
     * @var string $messageType
     */
    private $messageType = null;

    /**
     * @var string $responseValue
     */
    private $responseValue = null;

    /**
     * @var string $requestCode
     */
    private $requestCode = null;

    /**
     * @var string $reasonForRequest
     */
    private $reasonForRequest = null;

    /**
     * @var string $userName
     */
    private $userName = null;

    /**
     * @var string $ratePlanCode
     */
    private $ratePlanCode = null;

    /**
     * @var string $confirmationID
     */
    private $confirmationID = null;

    /**
     * @var string $reservationID
     */
    private $reservationID = null;

    /**
     * @var \Recranet\OTA\Type\MessageType\OriginalPayloadStdAttributesAType $originalPayloadStdAttributes
     */
    private $originalPayloadStdAttributes = null;

    /**
     * This container is designed to store the response message.
     *
     * @var string $messageContent
     */
    private $messageContent = null;

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
     * Gets as startSeqNmbr
     *
     * @return int
     */
    public function getStartSeqNmbr()
    {
        return $this->startSeqNmbr;
    }

    /**
     * Sets a new startSeqNmbr
     *
     * @param int $startSeqNmbr
     * @return self
     */
    public function setStartSeqNmbr($startSeqNmbr)
    {
        $this->startSeqNmbr = $startSeqNmbr;
        return $this;
    }

    /**
     * Gets as endSeqNmbr
     *
     * @return int
     */
    public function getEndSeqNmbr()
    {
        return $this->endSeqNmbr;
    }

    /**
     * Sets a new endSeqNmbr
     *
     * @param int $endSeqNmbr
     * @return self
     */
    public function setEndSeqNmbr($endSeqNmbr)
    {
        $this->endSeqNmbr = $endSeqNmbr;
        return $this;
    }

    /**
     * Gets as messageType
     *
     * @return string
     */
    public function getMessageType()
    {
        return $this->messageType;
    }

    /**
     * Sets a new messageType
     *
     * @param string $messageType
     * @return self
     */
    public function setMessageType($messageType)
    {
        $this->messageType = $messageType;
        return $this;
    }

    /**
     * Gets as responseValue
     *
     * @return string
     */
    public function getResponseValue()
    {
        return $this->responseValue;
    }

    /**
     * Sets a new responseValue
     *
     * @param string $responseValue
     * @return self
     */
    public function setResponseValue($responseValue)
    {
        $this->responseValue = $responseValue;
        return $this;
    }

    /**
     * Gets as requestCode
     *
     * @return string
     */
    public function getRequestCode()
    {
        return $this->requestCode;
    }

    /**
     * Sets a new requestCode
     *
     * @param string $requestCode
     * @return self
     */
    public function setRequestCode($requestCode)
    {
        $this->requestCode = $requestCode;
        return $this;
    }

    /**
     * Gets as reasonForRequest
     *
     * @return string
     */
    public function getReasonForRequest()
    {
        return $this->reasonForRequest;
    }

    /**
     * Sets a new reasonForRequest
     *
     * @param string $reasonForRequest
     * @return self
     */
    public function setReasonForRequest($reasonForRequest)
    {
        $this->reasonForRequest = $reasonForRequest;
        return $this;
    }

    /**
     * Gets as userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Sets a new userName
     *
     * @param string $userName
     * @return self
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * Gets as ratePlanCode
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
     * @param string $ratePlanCode
     * @return self
     */
    public function setRatePlanCode($ratePlanCode)
    {
        $this->ratePlanCode = $ratePlanCode;
        return $this;
    }

    /**
     * Gets as confirmationID
     *
     * @return string
     */
    public function getConfirmationID()
    {
        return $this->confirmationID;
    }

    /**
     * Sets a new confirmationID
     *
     * @param string $confirmationID
     * @return self
     */
    public function setConfirmationID($confirmationID)
    {
        $this->confirmationID = $confirmationID;
        return $this;
    }

    /**
     * Gets as reservationID
     *
     * @return string
     */
    public function getReservationID()
    {
        return $this->reservationID;
    }

    /**
     * Sets a new reservationID
     *
     * @param string $reservationID
     * @return self
     */
    public function setReservationID($reservationID)
    {
        $this->reservationID = $reservationID;
        return $this;
    }

    /**
     * Gets as originalPayloadStdAttributes
     *
     * @return \Recranet\OTA\Type\MessageType\OriginalPayloadStdAttributesAType
     */
    public function getOriginalPayloadStdAttributes()
    {
        return $this->originalPayloadStdAttributes;
    }

    /**
     * Sets a new originalPayloadStdAttributes
     *
     * @param \Recranet\OTA\Type\MessageType\OriginalPayloadStdAttributesAType $originalPayloadStdAttributes
     * @return self
     */
    public function setOriginalPayloadStdAttributes(?\Recranet\OTA\Type\MessageType\OriginalPayloadStdAttributesAType $originalPayloadStdAttributes = null)
    {
        $this->originalPayloadStdAttributes = $originalPayloadStdAttributes;
        return $this;
    }

    /**
     * Gets as messageContent
     *
     * This container is designed to store the response message.
     *
     * @return string
     */
    public function getMessageContent()
    {
        return $this->messageContent;
    }

    /**
     * Sets a new messageContent
     *
     * This container is designed to store the response message.
     *
     * @param string $messageContent
     * @return self
     */
    public function setMessageContent($messageContent)
    {
        $this->messageContent = $messageContent;
        return $this;
    }
}

