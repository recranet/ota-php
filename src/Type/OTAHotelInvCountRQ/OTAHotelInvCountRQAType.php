<?php

namespace Recranet\OTA\Type\OTAHotelInvCountRQ;

/**
 * Class representing OTAHotelInvCountRQAType
 */
class OTAHotelInvCountRQAType
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
     * @var bool $summaryOnly
     */
    private $summaryOnly = null;

    /**
     * @var string $sortOrder
     */
    private $sortOrder = null;

    /**
     * @var string $requestedCurrency
     */
    private $requestedCurrency = null;

    /**
     * A positive integer value that indicates the maximum number of responses desired in the return.
     *
     * @var int $maxResponses
     */
    private $maxResponses = null;

    /**
     * @var string $searchCacheLevel
     */
    private $searchCacheLevel = null;

    /**
     * The value of this attribute will be a decimal field identifying the maximum number of seconds the responding application has to respond to the request. For example, suppose a client requests 10 OTA 'RatePlanRequestSegment' items but can only wait up to 4.0 seconds max. If only 6 segments were collected within the time-frame, the client would only receive those 6 segments within one response message.
     *
     * @var float $maximumWaitTime
     */
    private $maximumWaitTime = null;

    /**
     * The response to the previous request returns this attribute if there was more data than could be returned in the response. Including the attribute in this request indicates where to begin the next block of data.
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
     * Point of sale object.
     *
     * @var \Recranet\OTA\Type\SourceType[] $pOS
     */
    private $pOS = null;

    /**
     * Collection of Inventory Count requests criteria.
     *
     * @var \Recranet\OTA\Type\OTAHotelInvCountRQ\OTAHotelInvCountRQAType\HotelInvCountRequestsAType\HotelInvCountRequestAType[] $hotelInvCountRequests
     */
    private $hotelInvCountRequests = null;

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
     * Gets as summaryOnly
     *
     * @return bool
     */
    public function getSummaryOnly()
    {
        return $this->summaryOnly;
    }

    /**
     * Sets a new summaryOnly
     *
     * @param bool $summaryOnly
     * @return self
     */
    public function setSummaryOnly($summaryOnly)
    {
        $this->summaryOnly = $summaryOnly;
        return $this;
    }

    /**
     * Gets as sortOrder
     *
     * @return string
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Sets a new sortOrder
     *
     * @param string $sortOrder
     * @return self
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;
        return $this;
    }

    /**
     * Gets as requestedCurrency
     *
     * @return string
     */
    public function getRequestedCurrency()
    {
        return $this->requestedCurrency;
    }

    /**
     * Sets a new requestedCurrency
     *
     * @param string $requestedCurrency
     * @return self
     */
    public function setRequestedCurrency($requestedCurrency)
    {
        $this->requestedCurrency = $requestedCurrency;
        return $this;
    }

    /**
     * Gets as maxResponses
     *
     * A positive integer value that indicates the maximum number of responses desired in the return.
     *
     * @return int
     */
    public function getMaxResponses()
    {
        return $this->maxResponses;
    }

    /**
     * Sets a new maxResponses
     *
     * A positive integer value that indicates the maximum number of responses desired in the return.
     *
     * @param int $maxResponses
     * @return self
     */
    public function setMaxResponses($maxResponses)
    {
        $this->maxResponses = $maxResponses;
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
     * Gets as maximumWaitTime
     *
     * The value of this attribute will be a decimal field identifying the maximum number of seconds the responding application has to respond to the request. For example, suppose a client requests 10 OTA 'RatePlanRequestSegment' items but can only wait up to 4.0 seconds max. If only 6 segments were collected within the time-frame, the client would only receive those 6 segments within one response message.
     *
     * @return float
     */
    public function getMaximumWaitTime()
    {
        return $this->maximumWaitTime;
    }

    /**
     * Sets a new maximumWaitTime
     *
     * The value of this attribute will be a decimal field identifying the maximum number of seconds the responding application has to respond to the request. For example, suppose a client requests 10 OTA 'RatePlanRequestSegment' items but can only wait up to 4.0 seconds max. If only 6 segments were collected within the time-frame, the client would only receive those 6 segments within one response message.
     *
     * @param float $maximumWaitTime
     * @return self
     */
    public function setMaximumWaitTime($maximumWaitTime)
    {
        $this->maximumWaitTime = $maximumWaitTime;
        return $this;
    }

    /**
     * Gets as moreDataEchoToken
     *
     * The response to the previous request returns this attribute if there was more data than could be returned in the response. Including the attribute in this request indicates where to begin the next block of data.
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
     * The response to the previous request returns this attribute if there was more data than could be returned in the response. Including the attribute in this request indicates where to begin the next block of data.
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
     * Adds as source
     *
     * Point of sale object.
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
     * Point of sale object.
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
     * Point of sale object.
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
     * Point of sale object.
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
     * Point of sale object.
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
     * Adds as hotelInvCountRequest
     *
     * Collection of Inventory Count requests criteria.
     *
     * @return self
     * @param \Recranet\OTA\Type\OTAHotelInvCountRQ\OTAHotelInvCountRQAType\HotelInvCountRequestsAType\HotelInvCountRequestAType $hotelInvCountRequest
     */
    public function addToHotelInvCountRequests(\Recranet\OTA\Type\OTAHotelInvCountRQ\OTAHotelInvCountRQAType\HotelInvCountRequestsAType\HotelInvCountRequestAType $hotelInvCountRequest)
    {
        $this->hotelInvCountRequests[] = $hotelInvCountRequest;
        return $this;
    }

    /**
     * isset hotelInvCountRequests
     *
     * Collection of Inventory Count requests criteria.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelInvCountRequests($index)
    {
        return isset($this->hotelInvCountRequests[$index]);
    }

    /**
     * unset hotelInvCountRequests
     *
     * Collection of Inventory Count requests criteria.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelInvCountRequests($index)
    {
        unset($this->hotelInvCountRequests[$index]);
    }

    /**
     * Gets as hotelInvCountRequests
     *
     * Collection of Inventory Count requests criteria.
     *
     * @return \Recranet\OTA\Type\OTAHotelInvCountRQ\OTAHotelInvCountRQAType\HotelInvCountRequestsAType\HotelInvCountRequestAType[]
     */
    public function getHotelInvCountRequests()
    {
        return $this->hotelInvCountRequests;
    }

    /**
     * Sets a new hotelInvCountRequests
     *
     * Collection of Inventory Count requests criteria.
     *
     * @param \Recranet\OTA\Type\OTAHotelInvCountRQ\OTAHotelInvCountRQAType\HotelInvCountRequestsAType\HotelInvCountRequestAType[] $hotelInvCountRequests
     * @return self
     */
    public function setHotelInvCountRequests(array $hotelInvCountRequests)
    {
        $this->hotelInvCountRequests = $hotelInvCountRequests;
        return $this;
    }
}

