<?php

namespace Recranet\OTA\Type\OTAHotelAvailRS;

/**
 * Class representing OTAHotelAvailRSAType
 */
class OTAHotelAvailRSAType
{
    /**
     * A reference for additional message identification, assigned by the requesting host system.
     * Implementer: A reference for additional message identification, assigned by the requesting host system. When a request message includes an echo token the corresponding response message MUST include an echo token with an identical value.
     *
     * @var string $echoToken
     */
    private $echoToken = null;

    /**
     * ISO 8601 encoded timestamp indicating the creation date and time of the message.
     * http://www.iso.org/iso/support/faqs/faqs_widely_used_standards/widely_used_standards_other/date_and_time_format.htm
     * YYYY-MM-DDThh:mm:ssZ with time values using the 24 hour clock:
     * 20 November 2003, 1:59:38 pm UTC becomes 2003-11-20T13:59:38Z
     *
     * @var \DateTime $timeStamp
     */
    private $timeStamp = null;

    /**
     * Test or Production target system indicator.
     *
     * @var string $target
     */
    private $target = null;

    /**
     * The name of the Test or Production system.
     *
     * @var string $targetName
     */
    private $targetName = null;

    /**
     * The OpenTravel message version indicated by a decimal value.
     *
     * @var float $version
     */
    private $version = null;

    /**
     * Unique identifier to relate all messages within a transaction (e.g. this would be sent in all request and response messages that are part of an on-going transaction).
     *
     * @var string $transactionIdentifier
     */
    private $transactionIdentifier = null;

    /**
     * The sequence number of the transaction assigned by the sending system for ordered message processing or message resynchronization.
     * Implementer: Message resynchronization typically is required if a system has been off-line and needs to retrieve messages that were missed.
     *
     * @var int $sequenceNmbr
     */
    private $sequenceNmbr = null;

    /**
     * This indicates where this message falls within a sequence of messages.
     *
     * @var string $transactionStatusCode
     */
    private $transactionStatusCode = null;

    /**
     * When true, indicates the message is being re-sent after a failure.
     * Implementer: It is recommended that this attribute is used (i.e., set to TRUE) only when a message is retransmitted.
     *
     * @var bool $retransmissionIndicator
     */
    private $retransmissionIndicator = null;

    /**
     * Allows end-to-end correlation of log messages with the corresponding Web service message throughout the processing of the Web service message.
     *
     * @var string $correlationID
     */
    private $correlationID = null;

    /**
     * The primary language preference for the message encoded as ISO 639-3.
     * ISO 639 (3) character language codes: http://en.wikipedia.org/wiki/Lists_of_ISO_639_codes
     *
     * @var string $primaryLangID
     */
    private $primaryLangID = null;

    /**
     * The alternate language for a customer or message encoded as ISO 639-3.
     * ISO 639 (3) character language codes: http://en.wikipedia.org/wiki/Lists_of_ISO_639_codes
     *
     * @var string $altLangID
     */
    private $altLangID = null;

    /**
     * @var string $searchCacheLevel
     */
    private $searchCacheLevel = null;

    /**
     * Point of sale information about the message initiator.
     *
     * @var \Recranet\OTA\Type\SourceType[] $pOS
     */
    private $pOS = null;

    /**
     * An element that is not intended to contain any data. The mere presence of a success element within the response message indicates that the incoming request message was processed successfully.
     *
     * @var \Recranet\OTA\Type\SuccessType $success
     */
    private $success = null;

    /**
     * Indicates that the recipient of the request message identified one or more business-level warnings/errors, but the message itself was successfully processed.
     *
     * @var \Recranet\OTA\Type\WarningType[] $warnings
     */
    private $warnings = null;

    /**
     * A collection of profile objects or unique IDs of profiles.
     *
     * @var \Recranet\OTA\Type\ProfilesType\ProfileInfoAType[] $profiles
     */
    private $profiles = null;

    /**
     * A collection of summarized information about the requested hotels' general availability for each day in the requested range.
     *
     * @var \Recranet\OTA\Type\OTAHotelAvailRS\OTAHotelAvailRSAType\HotelStaysAType\HotelStayAType[] $hotelStays
     */
    private $hotelStays = null;

    /**
     * A collection of details on the Room Stay including Guest Counts, Time Span of this Room Stay, and financial information related to the Room Stay, including Guarantee, Deposit and Payment and Cancellation Penalties.
     *
     * @var \Recranet\OTA\Type\OTAHotelAvailRS\OTAHotelAvailRSAType\RoomStaysAType $roomStays
     */
    private $roomStays = null;

    /**
     * A collection of Service objects. This is the collection of all services associated with any part of this reservation (the reservation in its entirety, one or more guests, or one or more room stays). Which services are attributable to which part is determined by each object's ServiceRPHs collection.
     *
     * @var \Recranet\OTA\Type\ServicesType $services
     */
    private $services = null;

    /**
     * Defines a collection of areas determined by the hotel reservation system.
     *
     * @var \Recranet\OTA\Type\AreasType\AreaAType[] $areas
     */
    private $areas = null;

    /**
     * The availability search criteria specified in the request message.
     *
     * @var \Recranet\OTA\Type\HotelSearchCriterionType[] $criteria
     */
    private $criteria = null;

    /**
     * A collection of currency conversion elements.
     *
     * @var \Recranet\OTA\Type\OTAHotelAvailRS\OTAHotelAvailRSAType\CurrencyConversionsAType\CurrencyConversionAType[] $currencyConversions
     */
    private $currencyConversions = null;

    /**
     * Collection of rebate programs the hotel participates in.
     *
     * @var \Recranet\OTA\Type\RebateType[] $rebatePrograms
     */
    private $rebatePrograms = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Indicates that an error occurred in the processing of the incoming request message. An error is defined as a malformed XML message that could not be processed.
     *
     * @var \Recranet\OTA\Type\ErrorType[] $errors
     */
    private $errors = null;

    /**
     * Gets as echoToken
     *
     * A reference for additional message identification, assigned by the requesting host system.
     * Implementer: A reference for additional message identification, assigned by the requesting host system. When a request message includes an echo token the corresponding response message MUST include an echo token with an identical value.
     *
     * @return string
     */
    public function getEchoToken()
    {
        return $this->echoToken;
    }

    /**
     * Sets a new echoToken
     *
     * A reference for additional message identification, assigned by the requesting host system.
     * Implementer: A reference for additional message identification, assigned by the requesting host system. When a request message includes an echo token the corresponding response message MUST include an echo token with an identical value.
     *
     * @param string $echoToken
     * @return self
     */
    public function setEchoToken($echoToken)
    {
        $this->echoToken = $echoToken;
        return $this;
    }

    /**
     * Gets as timeStamp
     *
     * ISO 8601 encoded timestamp indicating the creation date and time of the message.
     * http://www.iso.org/iso/support/faqs/faqs_widely_used_standards/widely_used_standards_other/date_and_time_format.htm
     * YYYY-MM-DDThh:mm:ssZ with time values using the 24 hour clock:
     * 20 November 2003, 1:59:38 pm UTC becomes 2003-11-20T13:59:38Z
     *
     * @return \DateTime
     */
    public function getTimeStamp()
    {
        return $this->timeStamp;
    }

    /**
     * Sets a new timeStamp
     *
     * ISO 8601 encoded timestamp indicating the creation date and time of the message.
     * http://www.iso.org/iso/support/faqs/faqs_widely_used_standards/widely_used_standards_other/date_and_time_format.htm
     * YYYY-MM-DDThh:mm:ssZ with time values using the 24 hour clock:
     * 20 November 2003, 1:59:38 pm UTC becomes 2003-11-20T13:59:38Z
     *
     * @param \DateTime $timeStamp
     * @return self
     */
    public function setTimeStamp(\DateTime $timeStamp)
    {
        $this->timeStamp = $timeStamp;
        return $this;
    }

    /**
     * Gets as target
     *
     * Test or Production target system indicator.
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Sets a new target
     *
     * Test or Production target system indicator.
     *
     * @param string $target
     * @return self
     */
    public function setTarget($target)
    {
        $this->target = $target;
        return $this;
    }

    /**
     * Gets as targetName
     *
     * The name of the Test or Production system.
     *
     * @return string
     */
    public function getTargetName()
    {
        return $this->targetName;
    }

    /**
     * Sets a new targetName
     *
     * The name of the Test or Production system.
     *
     * @param string $targetName
     * @return self
     */
    public function setTargetName($targetName)
    {
        $this->targetName = $targetName;
        return $this;
    }

    /**
     * Gets as version
     *
     * The OpenTravel message version indicated by a decimal value.
     *
     * @return float
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * The OpenTravel message version indicated by a decimal value.
     *
     * @param float $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as transactionIdentifier
     *
     * Unique identifier to relate all messages within a transaction (e.g. this would be sent in all request and response messages that are part of an on-going transaction).
     *
     * @return string
     */
    public function getTransactionIdentifier()
    {
        return $this->transactionIdentifier;
    }

    /**
     * Sets a new transactionIdentifier
     *
     * Unique identifier to relate all messages within a transaction (e.g. this would be sent in all request and response messages that are part of an on-going transaction).
     *
     * @param string $transactionIdentifier
     * @return self
     */
    public function setTransactionIdentifier($transactionIdentifier)
    {
        $this->transactionIdentifier = $transactionIdentifier;
        return $this;
    }

    /**
     * Gets as sequenceNmbr
     *
     * The sequence number of the transaction assigned by the sending system for ordered message processing or message resynchronization.
     * Implementer: Message resynchronization typically is required if a system has been off-line and needs to retrieve messages that were missed.
     *
     * @return int
     */
    public function getSequenceNmbr()
    {
        return $this->sequenceNmbr;
    }

    /**
     * Sets a new sequenceNmbr
     *
     * The sequence number of the transaction assigned by the sending system for ordered message processing or message resynchronization.
     * Implementer: Message resynchronization typically is required if a system has been off-line and needs to retrieve messages that were missed.
     *
     * @param int $sequenceNmbr
     * @return self
     */
    public function setSequenceNmbr($sequenceNmbr)
    {
        $this->sequenceNmbr = $sequenceNmbr;
        return $this;
    }

    /**
     * Gets as transactionStatusCode
     *
     * This indicates where this message falls within a sequence of messages.
     *
     * @return string
     */
    public function getTransactionStatusCode()
    {
        return $this->transactionStatusCode;
    }

    /**
     * Sets a new transactionStatusCode
     *
     * This indicates where this message falls within a sequence of messages.
     *
     * @param string $transactionStatusCode
     * @return self
     */
    public function setTransactionStatusCode($transactionStatusCode)
    {
        $this->transactionStatusCode = $transactionStatusCode;
        return $this;
    }

    /**
     * Gets as retransmissionIndicator
     *
     * When true, indicates the message is being re-sent after a failure.
     * Implementer: It is recommended that this attribute is used (i.e., set to TRUE) only when a message is retransmitted.
     *
     * @return bool
     */
    public function getRetransmissionIndicator()
    {
        return $this->retransmissionIndicator;
    }

    /**
     * Sets a new retransmissionIndicator
     *
     * When true, indicates the message is being re-sent after a failure.
     * Implementer: It is recommended that this attribute is used (i.e., set to TRUE) only when a message is retransmitted.
     *
     * @param bool $retransmissionIndicator
     * @return self
     */
    public function setRetransmissionIndicator($retransmissionIndicator)
    {
        $this->retransmissionIndicator = $retransmissionIndicator;
        return $this;
    }

    /**
     * Gets as correlationID
     *
     * Allows end-to-end correlation of log messages with the corresponding Web service message throughout the processing of the Web service message.
     *
     * @return string
     */
    public function getCorrelationID()
    {
        return $this->correlationID;
    }

    /**
     * Sets a new correlationID
     *
     * Allows end-to-end correlation of log messages with the corresponding Web service message throughout the processing of the Web service message.
     *
     * @param string $correlationID
     * @return self
     */
    public function setCorrelationID($correlationID)
    {
        $this->correlationID = $correlationID;
        return $this;
    }

    /**
     * Gets as primaryLangID
     *
     * The primary language preference for the message encoded as ISO 639-3.
     * ISO 639 (3) character language codes: http://en.wikipedia.org/wiki/Lists_of_ISO_639_codes
     *
     * @return string
     */
    public function getPrimaryLangID()
    {
        return $this->primaryLangID;
    }

    /**
     * Sets a new primaryLangID
     *
     * The primary language preference for the message encoded as ISO 639-3.
     * ISO 639 (3) character language codes: http://en.wikipedia.org/wiki/Lists_of_ISO_639_codes
     *
     * @param string $primaryLangID
     * @return self
     */
    public function setPrimaryLangID($primaryLangID)
    {
        $this->primaryLangID = $primaryLangID;
        return $this;
    }

    /**
     * Gets as altLangID
     *
     * The alternate language for a customer or message encoded as ISO 639-3.
     * ISO 639 (3) character language codes: http://en.wikipedia.org/wiki/Lists_of_ISO_639_codes
     *
     * @return string
     */
    public function getAltLangID()
    {
        return $this->altLangID;
    }

    /**
     * Sets a new altLangID
     *
     * The alternate language for a customer or message encoded as ISO 639-3.
     * ISO 639 (3) character language codes: http://en.wikipedia.org/wiki/Lists_of_ISO_639_codes
     *
     * @param string $altLangID
     * @return self
     */
    public function setAltLangID($altLangID)
    {
        $this->altLangID = $altLangID;
        return $this;
    }

    /**
     * Gets as searchCacheLevel
     *
     * @return string
     */
    public function getSearchCacheLevel()
    {
        return $this->searchCacheLevel;
    }

    /**
     * Sets a new searchCacheLevel
     *
     * @param string $searchCacheLevel
     * @return self
     */
    public function setSearchCacheLevel($searchCacheLevel)
    {
        $this->searchCacheLevel = $searchCacheLevel;
        return $this;
    }

    /**
     * Adds as source
     *
     * Point of sale information about the message initiator.
     *
     * @return self
     * @param \Recranet\OTA\Type\SourceType $source
     */
    public function addToPOS(\Recranet\OTA\Type\SourceType $source)
    {
        $this->pOS[] = $source;
        return $this;
    }

    /**
     * isset pOS
     *
     * Point of sale information about the message initiator.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPOS($index)
    {
        return isset($this->pOS[$index]);
    }

    /**
     * unset pOS
     *
     * Point of sale information about the message initiator.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPOS($index)
    {
        unset($this->pOS[$index]);
    }

    /**
     * Gets as pOS
     *
     * Point of sale information about the message initiator.
     *
     * @return \Recranet\OTA\Type\SourceType[]
     */
    public function getPOS()
    {
        return $this->pOS;
    }

    /**
     * Sets a new pOS
     *
     * Point of sale information about the message initiator.
     *
     * @param \Recranet\OTA\Type\SourceType[] $pOS
     * @return self
     */
    public function setPOS(array $pOS = null)
    {
        $this->pOS = $pOS;
        return $this;
    }

    /**
     * Gets as success
     *
     * An element that is not intended to contain any data. The mere presence of a success element within the response message indicates that the incoming request message was processed successfully.
     *
     * @return \Recranet\OTA\Type\SuccessType
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * Sets a new success
     *
     * An element that is not intended to contain any data. The mere presence of a success element within the response message indicates that the incoming request message was processed successfully.
     *
     * @param \Recranet\OTA\Type\SuccessType $success
     * @return self
     */
    public function setSuccess(?\Recranet\OTA\Type\SuccessType $success = null)
    {
        $this->success = $success;
        return $this;
    }

    /**
     * Adds as warning
     *
     * Indicates that the recipient of the request message identified one or more business-level warnings/errors, but the message itself was successfully processed.
     *
     * @return self
     * @param \Recranet\OTA\Type\WarningType $warning
     */
    public function addToWarnings(\Recranet\OTA\Type\WarningType $warning)
    {
        $this->warnings[] = $warning;
        return $this;
    }

    /**
     * isset warnings
     *
     * Indicates that the recipient of the request message identified one or more business-level warnings/errors, but the message itself was successfully processed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWarnings($index)
    {
        return isset($this->warnings[$index]);
    }

    /**
     * unset warnings
     *
     * Indicates that the recipient of the request message identified one or more business-level warnings/errors, but the message itself was successfully processed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWarnings($index)
    {
        unset($this->warnings[$index]);
    }

    /**
     * Gets as warnings
     *
     * Indicates that the recipient of the request message identified one or more business-level warnings/errors, but the message itself was successfully processed.
     *
     * @return \Recranet\OTA\Type\WarningType[]
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    /**
     * Sets a new warnings
     *
     * Indicates that the recipient of the request message identified one or more business-level warnings/errors, but the message itself was successfully processed.
     *
     * @param \Recranet\OTA\Type\WarningType[] $warnings
     * @return self
     */
    public function setWarnings(array $warnings = null)
    {
        $this->warnings = $warnings;
        return $this;
    }

    /**
     * Adds as profileInfo
     *
     * A collection of profile objects or unique IDs of profiles.
     *
     * @return self
     * @param \Recranet\OTA\Type\ProfilesType\ProfileInfoAType $profileInfo
     */
    public function addToProfiles(\Recranet\OTA\Type\ProfilesType\ProfileInfoAType $profileInfo)
    {
        $this->profiles[] = $profileInfo;
        return $this;
    }

    /**
     * isset profiles
     *
     * A collection of profile objects or unique IDs of profiles.
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
     * A collection of profile objects or unique IDs of profiles.
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
     * A collection of profile objects or unique IDs of profiles.
     *
     * @return \Recranet\OTA\Type\ProfilesType\ProfileInfoAType[]
     */
    public function getProfiles()
    {
        return $this->profiles;
    }

    /**
     * Sets a new profiles
     *
     * A collection of profile objects or unique IDs of profiles.
     *
     * @param \Recranet\OTA\Type\ProfilesType\ProfileInfoAType[] $profiles
     * @return self
     */
    public function setProfiles(array $profiles = null)
    {
        $this->profiles = $profiles;
        return $this;
    }

    /**
     * Adds as hotelStay
     *
     * A collection of summarized information about the requested hotels' general availability for each day in the requested range.
     *
     * @return self
     * @param \Recranet\OTA\Type\OTAHotelAvailRS\OTAHotelAvailRSAType\HotelStaysAType\HotelStayAType $hotelStay
     */
    public function addToHotelStays(\Recranet\OTA\Type\OTAHotelAvailRS\OTAHotelAvailRSAType\HotelStaysAType\HotelStayAType $hotelStay)
    {
        $this->hotelStays[] = $hotelStay;
        return $this;
    }

    /**
     * isset hotelStays
     *
     * A collection of summarized information about the requested hotels' general availability for each day in the requested range.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelStays($index)
    {
        return isset($this->hotelStays[$index]);
    }

    /**
     * unset hotelStays
     *
     * A collection of summarized information about the requested hotels' general availability for each day in the requested range.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelStays($index)
    {
        unset($this->hotelStays[$index]);
    }

    /**
     * Gets as hotelStays
     *
     * A collection of summarized information about the requested hotels' general availability for each day in the requested range.
     *
     * @return \Recranet\OTA\Type\OTAHotelAvailRS\OTAHotelAvailRSAType\HotelStaysAType\HotelStayAType[]
     */
    public function getHotelStays()
    {
        return $this->hotelStays;
    }

    /**
     * Sets a new hotelStays
     *
     * A collection of summarized information about the requested hotels' general availability for each day in the requested range.
     *
     * @param \Recranet\OTA\Type\OTAHotelAvailRS\OTAHotelAvailRSAType\HotelStaysAType\HotelStayAType[] $hotelStays
     * @return self
     */
    public function setHotelStays(array $hotelStays = null)
    {
        $this->hotelStays = $hotelStays;
        return $this;
    }

    /**
     * Gets as roomStays
     *
     * A collection of details on the Room Stay including Guest Counts, Time Span of this Room Stay, and financial information related to the Room Stay, including Guarantee, Deposit and Payment and Cancellation Penalties.
     *
     * @return \Recranet\OTA\Type\OTAHotelAvailRS\OTAHotelAvailRSAType\RoomStaysAType
     */
    public function getRoomStays()
    {
        return $this->roomStays;
    }

    /**
     * Sets a new roomStays
     *
     * A collection of details on the Room Stay including Guest Counts, Time Span of this Room Stay, and financial information related to the Room Stay, including Guarantee, Deposit and Payment and Cancellation Penalties.
     *
     * @param \Recranet\OTA\Type\OTAHotelAvailRS\OTAHotelAvailRSAType\RoomStaysAType $roomStays
     * @return self
     */
    public function setRoomStays(?\Recranet\OTA\Type\OTAHotelAvailRS\OTAHotelAvailRSAType\RoomStaysAType $roomStays = null)
    {
        $this->roomStays = $roomStays;
        return $this;
    }

    /**
     * Gets as services
     *
     * A collection of Service objects. This is the collection of all services associated with any part of this reservation (the reservation in its entirety, one or more guests, or one or more room stays). Which services are attributable to which part is determined by each object's ServiceRPHs collection.
     *
     * @return \Recranet\OTA\Type\ServicesType
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * Sets a new services
     *
     * A collection of Service objects. This is the collection of all services associated with any part of this reservation (the reservation in its entirety, one or more guests, or one or more room stays). Which services are attributable to which part is determined by each object's ServiceRPHs collection.
     *
     * @param \Recranet\OTA\Type\ServicesType $services
     * @return self
     */
    public function setServices(?\Recranet\OTA\Type\ServicesType $services = null)
    {
        $this->services = $services;
        return $this;
    }

    /**
     * Adds as area
     *
     * Defines a collection of areas determined by the hotel reservation system.
     *
     * @return self
     * @param \Recranet\OTA\Type\AreasType\AreaAType $area
     */
    public function addToAreas(\Recranet\OTA\Type\AreasType\AreaAType $area)
    {
        $this->areas[] = $area;
        return $this;
    }

    /**
     * isset areas
     *
     * Defines a collection of areas determined by the hotel reservation system.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAreas($index)
    {
        return isset($this->areas[$index]);
    }

    /**
     * unset areas
     *
     * Defines a collection of areas determined by the hotel reservation system.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAreas($index)
    {
        unset($this->areas[$index]);
    }

    /**
     * Gets as areas
     *
     * Defines a collection of areas determined by the hotel reservation system.
     *
     * @return \Recranet\OTA\Type\AreasType\AreaAType[]
     */
    public function getAreas()
    {
        return $this->areas;
    }

    /**
     * Sets a new areas
     *
     * Defines a collection of areas determined by the hotel reservation system.
     *
     * @param \Recranet\OTA\Type\AreasType\AreaAType[] $areas
     * @return self
     */
    public function setAreas(array $areas = null)
    {
        $this->areas = $areas;
        return $this;
    }

    /**
     * Adds as criterion
     *
     * The availability search criteria specified in the request message.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelSearchCriterionType $criterion
     */
    public function addToCriteria(\Recranet\OTA\Type\HotelSearchCriterionType $criterion)
    {
        $this->criteria[] = $criterion;
        return $this;
    }

    /**
     * isset criteria
     *
     * The availability search criteria specified in the request message.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCriteria($index)
    {
        return isset($this->criteria[$index]);
    }

    /**
     * unset criteria
     *
     * The availability search criteria specified in the request message.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCriteria($index)
    {
        unset($this->criteria[$index]);
    }

    /**
     * Gets as criteria
     *
     * The availability search criteria specified in the request message.
     *
     * @return \Recranet\OTA\Type\HotelSearchCriterionType[]
     */
    public function getCriteria()
    {
        return $this->criteria;
    }

    /**
     * Sets a new criteria
     *
     * The availability search criteria specified in the request message.
     *
     * @param \Recranet\OTA\Type\HotelSearchCriterionType[] $criteria
     * @return self
     */
    public function setCriteria(array $criteria = null)
    {
        $this->criteria = $criteria;
        return $this;
    }

    /**
     * Adds as currencyConversion
     *
     * A collection of currency conversion elements.
     *
     * @return self
     * @param \Recranet\OTA\Type\OTAHotelAvailRS\OTAHotelAvailRSAType\CurrencyConversionsAType\CurrencyConversionAType $currencyConversion
     */
    public function addToCurrencyConversions(\Recranet\OTA\Type\OTAHotelAvailRS\OTAHotelAvailRSAType\CurrencyConversionsAType\CurrencyConversionAType $currencyConversion)
    {
        $this->currencyConversions[] = $currencyConversion;
        return $this;
    }

    /**
     * isset currencyConversions
     *
     * A collection of currency conversion elements.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCurrencyConversions($index)
    {
        return isset($this->currencyConversions[$index]);
    }

    /**
     * unset currencyConversions
     *
     * A collection of currency conversion elements.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCurrencyConversions($index)
    {
        unset($this->currencyConversions[$index]);
    }

    /**
     * Gets as currencyConversions
     *
     * A collection of currency conversion elements.
     *
     * @return \Recranet\OTA\Type\OTAHotelAvailRS\OTAHotelAvailRSAType\CurrencyConversionsAType\CurrencyConversionAType[]
     */
    public function getCurrencyConversions()
    {
        return $this->currencyConversions;
    }

    /**
     * Sets a new currencyConversions
     *
     * A collection of currency conversion elements.
     *
     * @param \Recranet\OTA\Type\OTAHotelAvailRS\OTAHotelAvailRSAType\CurrencyConversionsAType\CurrencyConversionAType[] $currencyConversions
     * @return self
     */
    public function setCurrencyConversions(array $currencyConversions = null)
    {
        $this->currencyConversions = $currencyConversions;
        return $this;
    }

    /**
     * Adds as rebateProgram
     *
     * Collection of rebate programs the hotel participates in.
     *
     * @return self
     * @param \Recranet\OTA\Type\RebateType $rebateProgram
     */
    public function addToRebatePrograms(\Recranet\OTA\Type\RebateType $rebateProgram)
    {
        $this->rebatePrograms[] = $rebateProgram;
        return $this;
    }

    /**
     * isset rebatePrograms
     *
     * Collection of rebate programs the hotel participates in.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRebatePrograms($index)
    {
        return isset($this->rebatePrograms[$index]);
    }

    /**
     * unset rebatePrograms
     *
     * Collection of rebate programs the hotel participates in.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRebatePrograms($index)
    {
        unset($this->rebatePrograms[$index]);
    }

    /**
     * Gets as rebatePrograms
     *
     * Collection of rebate programs the hotel participates in.
     *
     * @return \Recranet\OTA\Type\RebateType[]
     */
    public function getRebatePrograms()
    {
        return $this->rebatePrograms;
    }

    /**
     * Sets a new rebatePrograms
     *
     * Collection of rebate programs the hotel participates in.
     *
     * @param \Recranet\OTA\Type\RebateType[] $rebatePrograms
     * @return self
     */
    public function setRebatePrograms(array $rebatePrograms = null)
    {
        $this->rebatePrograms = $rebatePrograms;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\Type\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\Type\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }

    /**
     * Adds as error
     *
     * Indicates that an error occurred in the processing of the incoming request message. An error is defined as a malformed XML message that could not be processed.
     *
     * @return self
     * @param \Recranet\OTA\Type\ErrorType $error
     */
    public function addToErrors(\Recranet\OTA\Type\ErrorType $error)
    {
        $this->errors[] = $error;
        return $this;
    }

    /**
     * isset errors
     *
     * Indicates that an error occurred in the processing of the incoming request message. An error is defined as a malformed XML message that could not be processed.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetErrors($index)
    {
        return isset($this->errors[$index]);
    }

    /**
     * unset errors
     *
     * Indicates that an error occurred in the processing of the incoming request message. An error is defined as a malformed XML message that could not be processed.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetErrors($index)
    {
        unset($this->errors[$index]);
    }

    /**
     * Gets as errors
     *
     * Indicates that an error occurred in the processing of the incoming request message. An error is defined as a malformed XML message that could not be processed.
     *
     * @return \Recranet\OTA\Type\ErrorType[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Sets a new errors
     *
     * Indicates that an error occurred in the processing of the incoming request message. An error is defined as a malformed XML message that could not be processed.
     *
     * @param \Recranet\OTA\Type\ErrorType[] $errors
     * @return self
     */
    public function setErrors(array $errors = null)
    {
        $this->errors = $errors;
        return $this;
    }
}

