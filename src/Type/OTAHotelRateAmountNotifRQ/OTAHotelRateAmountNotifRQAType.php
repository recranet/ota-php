<?php

namespace Recranet\OTA\Type\OTAHotelRateAmountNotifRQ;

/**
 * Class representing OTAHotelRateAmountNotifRQAType
 */
class OTAHotelRateAmountNotifRQAType
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
     * Notification type.
     * Example: Delta
     * Note: This indicates whether this is an update of changed rate amounts, instructions to remove rate amounts or a full replacement of rate amounts for specified products.
     *
     * @var string $notifType
     */
    private $notifType = null;

    /**
     * Change scope.
     * Example: RatePlanRate
     * Note: This indicates the scope of the changes in the notification.
     *
     * @var string $notifScopeType
     */
    private $notifScopeType = null;

    /**
     * POS provides a mechanisim to indicate the source of the message.
     *
     * @var \Recranet\OTA\Type\SourceType[] $pOS
     */
    private $pOS = null;

    /**
     * The unique identifier element allows the trading partners to uniquely identify each RateAmountNotifRQ, (i.e. the entire message) for transaction tracability.
     *
     * @var \Recranet\OTA\Type\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * A collection of RateAmountMessages that define the rate changes to be made.
     *
     * @var \Recranet\OTA\Type\OTAHotelRateAmountNotifRQ\OTAHotelRateAmountNotifRQAType\RateAmountMessagesAType $rateAmountMessages
     */
    private $rateAmountMessages = null;

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
     * Gets as notifType
     *
     * Notification type.
     * Example: Delta
     * Note: This indicates whether this is an update of changed rate amounts, instructions to remove rate amounts or a full replacement of rate amounts for specified products.
     *
     * @return string
     */
    public function getNotifType()
    {
        return $this->notifType;
    }

    /**
     * Sets a new notifType
     *
     * Notification type.
     * Example: Delta
     * Note: This indicates whether this is an update of changed rate amounts, instructions to remove rate amounts or a full replacement of rate amounts for specified products.
     *
     * @param string $notifType
     * @return self
     */
    public function setNotifType($notifType)
    {
        $this->notifType = $notifType;
        return $this;
    }

    /**
     * Gets as notifScopeType
     *
     * Change scope.
     * Example: RatePlanRate
     * Note: This indicates the scope of the changes in the notification.
     *
     * @return string
     */
    public function getNotifScopeType()
    {
        return $this->notifScopeType;
    }

    /**
     * Sets a new notifScopeType
     *
     * Change scope.
     * Example: RatePlanRate
     * Note: This indicates the scope of the changes in the notification.
     *
     * @param string $notifScopeType
     * @return self
     */
    public function setNotifScopeType($notifScopeType)
    {
        $this->notifScopeType = $notifScopeType;
        return $this;
    }

    /**
     * Adds as source
     *
     * POS provides a mechanisim to indicate the source of the message.
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
     * POS provides a mechanisim to indicate the source of the message.
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
     * POS provides a mechanisim to indicate the source of the message.
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
     * POS provides a mechanisim to indicate the source of the message.
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
     * POS provides a mechanisim to indicate the source of the message.
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
     * Gets as uniqueID
     *
     * The unique identifier element allows the trading partners to uniquely identify each RateAmountNotifRQ, (i.e. the entire message) for transaction tracability.
     *
     * @return \Recranet\OTA\Type\UniqueIDType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * The unique identifier element allows the trading partners to uniquely identify each RateAmountNotifRQ, (i.e. the entire message) for transaction tracability.
     *
     * @param \Recranet\OTA\Type\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(?\Recranet\OTA\Type\UniqueIDType $uniqueID = null)
    {
        $this->uniqueID = $uniqueID;
        return $this;
    }

    /**
     * Gets as rateAmountMessages
     *
     * A collection of RateAmountMessages that define the rate changes to be made.
     *
     * @return \Recranet\OTA\Type\OTAHotelRateAmountNotifRQ\OTAHotelRateAmountNotifRQAType\RateAmountMessagesAType
     */
    public function getRateAmountMessages()
    {
        return $this->rateAmountMessages;
    }

    /**
     * Sets a new rateAmountMessages
     *
     * A collection of RateAmountMessages that define the rate changes to be made.
     *
     * @param \Recranet\OTA\Type\OTAHotelRateAmountNotifRQ\OTAHotelRateAmountNotifRQAType\RateAmountMessagesAType $rateAmountMessages
     * @return self
     */
    public function setRateAmountMessages(?\Recranet\OTA\Type\OTAHotelRateAmountNotifRQ\OTAHotelRateAmountNotifRQAType\RateAmountMessagesAType $rateAmountMessages = null)
    {
        $this->rateAmountMessages = $rateAmountMessages;
        return $this;
    }
}

