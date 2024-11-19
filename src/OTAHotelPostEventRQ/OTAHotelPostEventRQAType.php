<?php

namespace Recranet\OTA\OTAHotelPostEventRQ;

/**
 * Class representing OTAHotelPostEventRQAType
 */
class OTAHotelPostEventRQAType
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
     * Specifies to whom the post event report should be sent.
     *
     * @var \Recranet\OTA\OTAHotelPostEventRQ\OTAHotelPostEventRQAType\RequestorAType[] $requestor
     */
    private $requestor = [
        
    ];

    /**
     * A collection of individual events for which the post event report is being requested. Provides the ability to request information for a specific event or event planner for one or more sites.
     *
     * @var \Recranet\OTA\OTAHotelPostEventRQ\OTAHotelPostEventRQAType\EventsAType\EventAType[] $events
     */
    private $events = null;

    /**
     * A collection of sites for which a post event report is being requested. Provides the ability to request information for a site or group of sites without the specific details of an event. Typically this would be a batch transmission of post event history.
     *
     * @var \Recranet\OTA\OTAHotelPostEventRQ\OTAHotelPostEventRQAType\SitesAType $sites
     */
    private $sites = null;

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
     * Adds as requestor
     *
     * Specifies to whom the post event report should be sent.
     *
     * @return self
     * @param \Recranet\OTA\OTAHotelPostEventRQ\OTAHotelPostEventRQAType\RequestorAType $requestor
     */
    public function addToRequestor(\Recranet\OTA\OTAHotelPostEventRQ\OTAHotelPostEventRQAType\RequestorAType $requestor)
    {
        $this->requestor[] = $requestor;
        return $this;
    }

    /**
     * isset requestor
     *
     * Specifies to whom the post event report should be sent.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestor($index)
    {
        return isset($this->requestor[$index]);
    }

    /**
     * unset requestor
     *
     * Specifies to whom the post event report should be sent.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestor($index)
    {
        unset($this->requestor[$index]);
    }

    /**
     * Gets as requestor
     *
     * Specifies to whom the post event report should be sent.
     *
     * @return \Recranet\OTA\OTAHotelPostEventRQ\OTAHotelPostEventRQAType\RequestorAType[]
     */
    public function getRequestor()
    {
        return $this->requestor;
    }

    /**
     * Sets a new requestor
     *
     * Specifies to whom the post event report should be sent.
     *
     * @param \Recranet\OTA\OTAHotelPostEventRQ\OTAHotelPostEventRQAType\RequestorAType[] $requestor
     * @return self
     */
    public function setRequestor(array $requestor = null)
    {
        $this->requestor = $requestor;
        return $this;
    }

    /**
     * Adds as event
     *
     * A collection of individual events for which the post event report is being requested. Provides the ability to request information for a specific event or event planner for one or more sites.
     *
     * @return self
     * @param \Recranet\OTA\OTAHotelPostEventRQ\OTAHotelPostEventRQAType\EventsAType\EventAType $event
     */
    public function addToEvents(\Recranet\OTA\OTAHotelPostEventRQ\OTAHotelPostEventRQAType\EventsAType\EventAType $event)
    {
        $this->events[] = $event;
        return $this;
    }

    /**
     * isset events
     *
     * A collection of individual events for which the post event report is being requested. Provides the ability to request information for a specific event or event planner for one or more sites.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEvents($index)
    {
        return isset($this->events[$index]);
    }

    /**
     * unset events
     *
     * A collection of individual events for which the post event report is being requested. Provides the ability to request information for a specific event or event planner for one or more sites.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEvents($index)
    {
        unset($this->events[$index]);
    }

    /**
     * Gets as events
     *
     * A collection of individual events for which the post event report is being requested. Provides the ability to request information for a specific event or event planner for one or more sites.
     *
     * @return \Recranet\OTA\OTAHotelPostEventRQ\OTAHotelPostEventRQAType\EventsAType\EventAType[]
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Sets a new events
     *
     * A collection of individual events for which the post event report is being requested. Provides the ability to request information for a specific event or event planner for one or more sites.
     *
     * @param \Recranet\OTA\OTAHotelPostEventRQ\OTAHotelPostEventRQAType\EventsAType\EventAType[] $events
     * @return self
     */
    public function setEvents(array $events = null)
    {
        $this->events = $events;
        return $this;
    }

    /**
     * Gets as sites
     *
     * A collection of sites for which a post event report is being requested. Provides the ability to request information for a site or group of sites without the specific details of an event. Typically this would be a batch transmission of post event history.
     *
     * @return \Recranet\OTA\OTAHotelPostEventRQ\OTAHotelPostEventRQAType\SitesAType
     */
    public function getSites()
    {
        return $this->sites;
    }

    /**
     * Sets a new sites
     *
     * A collection of sites for which a post event report is being requested. Provides the ability to request information for a site or group of sites without the specific details of an event. Typically this would be a batch transmission of post event history.
     *
     * @param \Recranet\OTA\OTAHotelPostEventRQ\OTAHotelPostEventRQAType\SitesAType $sites
     * @return self
     */
    public function setSites(?\Recranet\OTA\OTAHotelPostEventRQ\OTAHotelPostEventRQAType\SitesAType $sites = null)
    {
        $this->sites = $sites;
        return $this;
    }
}
