<?php

namespace Recranet\OTA\OTAHotelSearchRS;

/**
 * Class representing OTAHotelSearchRSAType
 */
class OTAHotelSearchRSAType
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
     * @var \Recranet\OTA\SourceType[] $pOS
     */
    private $pOS = null;

    /**
     * Standard way to indicate successful processing of an OpenTravel message.
     *
     * @var \Recranet\OTA\SuccessType $success
     */
    private $success = null;

    /**
     * Standard way to indicate successful processing of an OpenTravel message, but one in which warnings are generated.
     *
     * @var \Recranet\OTA\WarningType[] $warnings
     */
    private $warnings = null;

    /**
     * A collection of individual property information.
     *
     * @var \Recranet\OTA\PropertiesType\PropertyAType[] $properties
     */
    private $properties = null;

    /**
     * Area information determined by a hotel reservation system.
     *
     * @var \Recranet\OTA\AreasType\AreaAType[] $areas
     */
    private $areas = null;

    /**
     * Hotel search criteria.
     *
     * @var \Recranet\OTA\HotelSearchCriteriaType $criteria
     */
    private $criteria = null;

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Standard way to indicate that an error occurred during the processing of an OpenTravel message.
     *
     * @var \Recranet\OTA\ErrorType[] $errors
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
     * Adds as source
     *
     * @return self
     * @param \Recranet\OTA\SourceType $source
     */
    public function addToPOS(\Recranet\OTA\SourceType $source)
    {
        $this->pOS[] = $source;
        return $this;
    }

    /**
     * isset pOS
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
     * @return \Recranet\OTA\SourceType[]
     */
    public function getPOS()
    {
        return $this->pOS;
    }

    /**
     * Sets a new pOS
     *
     * @param \Recranet\OTA\SourceType[] $pOS
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
     * Standard way to indicate successful processing of an OpenTravel message.
     *
     * @return \Recranet\OTA\SuccessType
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * Sets a new success
     *
     * Standard way to indicate successful processing of an OpenTravel message.
     *
     * @param \Recranet\OTA\SuccessType $success
     * @return self
     */
    public function setSuccess(?\Recranet\OTA\SuccessType $success = null)
    {
        $this->success = $success;
        return $this;
    }

    /**
     * Adds as warning
     *
     * Standard way to indicate successful processing of an OpenTravel message, but one in which warnings are generated.
     *
     * @return self
     * @param \Recranet\OTA\WarningType $warning
     */
    public function addToWarnings(\Recranet\OTA\WarningType $warning)
    {
        $this->warnings[] = $warning;
        return $this;
    }

    /**
     * isset warnings
     *
     * Standard way to indicate successful processing of an OpenTravel message, but one in which warnings are generated.
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
     * Standard way to indicate successful processing of an OpenTravel message, but one in which warnings are generated.
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
     * Standard way to indicate successful processing of an OpenTravel message, but one in which warnings are generated.
     *
     * @return \Recranet\OTA\WarningType[]
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    /**
     * Sets a new warnings
     *
     * Standard way to indicate successful processing of an OpenTravel message, but one in which warnings are generated.
     *
     * @param \Recranet\OTA\WarningType[] $warnings
     * @return self
     */
    public function setWarnings(array $warnings = null)
    {
        $this->warnings = $warnings;
        return $this;
    }

    /**
     * Adds as property
     *
     * A collection of individual property information.
     *
     * @return self
     * @param \Recranet\OTA\PropertiesType\PropertyAType $property
     */
    public function addToProperties(\Recranet\OTA\PropertiesType\PropertyAType $property)
    {
        $this->properties[] = $property;
        return $this;
    }

    /**
     * isset properties
     *
     * A collection of individual property information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProperties($index)
    {
        return isset($this->properties[$index]);
    }

    /**
     * unset properties
     *
     * A collection of individual property information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProperties($index)
    {
        unset($this->properties[$index]);
    }

    /**
     * Gets as properties
     *
     * A collection of individual property information.
     *
     * @return \Recranet\OTA\PropertiesType\PropertyAType[]
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * Sets a new properties
     *
     * A collection of individual property information.
     *
     * @param \Recranet\OTA\PropertiesType\PropertyAType[] $properties
     * @return self
     */
    public function setProperties(array $properties = null)
    {
        $this->properties = $properties;
        return $this;
    }

    /**
     * Adds as area
     *
     * Area information determined by a hotel reservation system.
     *
     * @return self
     * @param \Recranet\OTA\AreasType\AreaAType $area
     */
    public function addToAreas(\Recranet\OTA\AreasType\AreaAType $area)
    {
        $this->areas[] = $area;
        return $this;
    }

    /**
     * isset areas
     *
     * Area information determined by a hotel reservation system.
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
     * Area information determined by a hotel reservation system.
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
     * Area information determined by a hotel reservation system.
     *
     * @return \Recranet\OTA\AreasType\AreaAType[]
     */
    public function getAreas()
    {
        return $this->areas;
    }

    /**
     * Sets a new areas
     *
     * Area information determined by a hotel reservation system.
     *
     * @param \Recranet\OTA\AreasType\AreaAType[] $areas
     * @return self
     */
    public function setAreas(array $areas = null)
    {
        $this->areas = $areas;
        return $this;
    }

    /**
     * Gets as criteria
     *
     * Hotel search criteria.
     *
     * @return \Recranet\OTA\HotelSearchCriteriaType
     */
    public function getCriteria()
    {
        return $this->criteria;
    }

    /**
     * Sets a new criteria
     *
     * Hotel search criteria.
     *
     * @param \Recranet\OTA\HotelSearchCriteriaType $criteria
     * @return self
     */
    public function setCriteria(?\Recranet\OTA\HotelSearchCriteriaType $criteria = null)
    {
        $this->criteria = $criteria;
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

    /**
     * Adds as error
     *
     * Standard way to indicate that an error occurred during the processing of an OpenTravel message.
     *
     * @return self
     * @param \Recranet\OTA\ErrorType $error
     */
    public function addToErrors(\Recranet\OTA\ErrorType $error)
    {
        $this->errors[] = $error;
        return $this;
    }

    /**
     * isset errors
     *
     * Standard way to indicate that an error occurred during the processing of an OpenTravel message.
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
     * Standard way to indicate that an error occurred during the processing of an OpenTravel message.
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
     * Standard way to indicate that an error occurred during the processing of an OpenTravel message.
     *
     * @return \Recranet\OTA\ErrorType[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * Sets a new errors
     *
     * Standard way to indicate that an error occurred during the processing of an OpenTravel message.
     *
     * @param \Recranet\OTA\ErrorType[] $errors
     * @return self
     */
    public function setErrors(array $errors = null)
    {
        $this->errors = $errors;
        return $this;
    }
}

