<?php

namespace Recranet\OTA\Type\OTAHotelRatePlanRS;

/**
 * Class representing OTAHotelRatePlanRSAType
 */
class OTAHotelRatePlanRSAType
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
     * Defines specific content of the message being sent. Refer to OpenTravel Code List TDB.
     *
     * @var string $messageContentCode
     */
    private $messageContentCode = null;

    /**
     * The presence of the empty Success element explicitly indicates that the request message was successful.
     *
     * @var \Recranet\OTA\Type\SuccessType $success
     */
    private $success = null;

    /**
     * Used in conjunction with the Success element to define one or more business errors.
     *
     * @var \Recranet\OTA\Type\WarningType[] $warnings
     */
    private $warnings = null;

    /**
     * A collection of rate plans.
     *
     * @var \Recranet\OTA\Type\OTAHotelRatePlanRS\OTAHotelRatePlanRSAType\RatePlansAType $ratePlans
     */
    private $ratePlans = null;

    /**
     * A collection of offers that apply to all of the rate plans.
     *
     * @var \Recranet\OTA\Type\OfferType[] $offers
     */
    private $offers = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Errors are returned if the request was unable to be processed.
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
     * Gets as messageContentCode
     *
     * Defines specific content of the message being sent. Refer to OpenTravel Code List TDB.
     *
     * @return string
     */
    public function getMessageContentCode()
    {
        return $this->messageContentCode;
    }

    /**
     * Sets a new messageContentCode
     *
     * Defines specific content of the message being sent. Refer to OpenTravel Code List TDB.
     *
     * @param string $messageContentCode
     * @return self
     */
    public function setMessageContentCode($messageContentCode)
    {
        $this->messageContentCode = $messageContentCode;
        return $this;
    }

    /**
     * Gets as success
     *
     * The presence of the empty Success element explicitly indicates that the request message was successful.
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
     * The presence of the empty Success element explicitly indicates that the request message was successful.
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
     * Used in conjunction with the Success element to define one or more business errors.
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
     * Used in conjunction with the Success element to define one or more business errors.
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
     * Used in conjunction with the Success element to define one or more business errors.
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
     * Used in conjunction with the Success element to define one or more business errors.
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
     * Used in conjunction with the Success element to define one or more business errors.
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
     * Gets as ratePlans
     *
     * A collection of rate plans.
     *
     * @return \Recranet\OTA\Type\OTAHotelRatePlanRS\OTAHotelRatePlanRSAType\RatePlansAType
     */
    public function getRatePlans()
    {
        return $this->ratePlans;
    }

    /**
     * Sets a new ratePlans
     *
     * A collection of rate plans.
     *
     * @param \Recranet\OTA\Type\OTAHotelRatePlanRS\OTAHotelRatePlanRSAType\RatePlansAType $ratePlans
     * @return self
     */
    public function setRatePlans(?\Recranet\OTA\Type\OTAHotelRatePlanRS\OTAHotelRatePlanRSAType\RatePlansAType $ratePlans = null)
    {
        $this->ratePlans = $ratePlans;
        return $this;
    }

    /**
     * Adds as offer
     *
     * A collection of offers that apply to all of the rate plans.
     *
     * @return self
     * @param \Recranet\OTA\Type\OfferType $offer
     */
    public function addToOffers(\Recranet\OTA\Type\OfferType $offer)
    {
        $this->offers[] = $offer;
        return $this;
    }

    /**
     * isset offers
     *
     * A collection of offers that apply to all of the rate plans.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOffers($index)
    {
        return isset($this->offers[$index]);
    }

    /**
     * unset offers
     *
     * A collection of offers that apply to all of the rate plans.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOffers($index)
    {
        unset($this->offers[$index]);
    }

    /**
     * Gets as offers
     *
     * A collection of offers that apply to all of the rate plans.
     *
     * @return \Recranet\OTA\Type\OfferType[]
     */
    public function getOffers()
    {
        return $this->offers;
    }

    /**
     * Sets a new offers
     *
     * A collection of offers that apply to all of the rate plans.
     *
     * @param \Recranet\OTA\Type\OfferType[] $offers
     * @return self
     */
    public function setOffers(array $offers = null)
    {
        $this->offers = $offers;
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
     * Errors are returned if the request was unable to be processed.
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
     * Errors are returned if the request was unable to be processed.
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
     * Errors are returned if the request was unable to be processed.
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
     * Errors are returned if the request was unable to be processed.
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
     * Errors are returned if the request was unable to be processed.
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

