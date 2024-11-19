<?php

namespace Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType;

/**
 * Class representing ServiceAType
 */
class ServiceAType
{
    /**
     * Identifies who will provide the item or service (e.g., group, venue).
     *
     * @var string $providedBy
     */
    private $providedBy = null;

    /**
     * Identifes the name of the provider of the item or service.
     *
     * @var string $providerName
     */
    private $providerName = null;

    /**
     * Identifies a location (e.g. individual hotel room, hotel lobby, exterior, pool).
     *
     * @var string $locationName
     */
    private $locationName = null;

    /**
     * The time the service is scheduled to begin.
     *
     * @var \DateTime $startTime
     */
    private $startTime = null;

    /**
     * The time the service is scheduled to finish.
     *
     * @var \DateTime $endTime
     */
    private $endTime = null;

    /**
     * Identifies a type of service (e.g. security, first aid, decor). Refer to OpenTravel Codelist Meeting Room Code (MRC).
     *
     * @var string $code
     */
    private $code = null;

    /**
     * May be used to give further detail on the code.
     *
     * @var string $codeDetail
     */
    private $codeDetail = null;

    /**
     * A collection of utilities.
     *
     * @var \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType\UtilitiesAType\UtilityAType[] $utilities
     */
    private $utilities = null;

    /**
     * A collection of comments.
     *
     * @var \Recranet\OTA\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * Gets as providedBy
     *
     * Identifies who will provide the item or service (e.g., group, venue).
     *
     * @return string
     */
    public function getProvidedBy()
    {
        return $this->providedBy;
    }

    /**
     * Sets a new providedBy
     *
     * Identifies who will provide the item or service (e.g., group, venue).
     *
     * @param string $providedBy
     * @return self
     */
    public function setProvidedBy($providedBy)
    {
        $this->providedBy = $providedBy;
        return $this;
    }

    /**
     * Gets as providerName
     *
     * Identifes the name of the provider of the item or service.
     *
     * @return string
     */
    public function getProviderName()
    {
        return $this->providerName;
    }

    /**
     * Sets a new providerName
     *
     * Identifes the name of the provider of the item or service.
     *
     * @param string $providerName
     * @return self
     */
    public function setProviderName($providerName)
    {
        $this->providerName = $providerName;
        return $this;
    }

    /**
     * Gets as locationName
     *
     * Identifies a location (e.g. individual hotel room, hotel lobby, exterior, pool).
     *
     * @return string
     */
    public function getLocationName()
    {
        return $this->locationName;
    }

    /**
     * Sets a new locationName
     *
     * Identifies a location (e.g. individual hotel room, hotel lobby, exterior, pool).
     *
     * @param string $locationName
     * @return self
     */
    public function setLocationName($locationName)
    {
        $this->locationName = $locationName;
        return $this;
    }

    /**
     * Gets as startTime
     *
     * The time the service is scheduled to begin.
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * The time the service is scheduled to begin.
     *
     * @param \DateTime $startTime
     * @return self
     */
    public function setStartTime(\DateTime $startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Gets as endTime
     *
     * The time the service is scheduled to finish.
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets a new endTime
     *
     * The time the service is scheduled to finish.
     *
     * @param \DateTime $endTime
     * @return self
     */
    public function setEndTime(\DateTime $endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * Gets as code
     *
     * Identifies a type of service (e.g. security, first aid, decor). Refer to OpenTravel Codelist Meeting Room Code (MRC).
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Identifies a type of service (e.g. security, first aid, decor). Refer to OpenTravel Codelist Meeting Room Code (MRC).
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @return string
     */
    public function getCodeDetail()
    {
        return $this->codeDetail;
    }

    /**
     * Sets a new codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @param string $codeDetail
     * @return self
     */
    public function setCodeDetail($codeDetail)
    {
        $this->codeDetail = $codeDetail;
        return $this;
    }

    /**
     * Adds as utility
     *
     * A collection of utilities.
     *
     * @return self
     * @param \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType\UtilitiesAType\UtilityAType $utility
     */
    public function addToUtilities(\Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType\UtilitiesAType\UtilityAType $utility)
    {
        $this->utilities[] = $utility;
        return $this;
    }

    /**
     * isset utilities
     *
     * A collection of utilities.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUtilities($index)
    {
        return isset($this->utilities[$index]);
    }

    /**
     * unset utilities
     *
     * A collection of utilities.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUtilities($index)
    {
        unset($this->utilities[$index]);
    }

    /**
     * Gets as utilities
     *
     * A collection of utilities.
     *
     * @return \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType\UtilitiesAType\UtilityAType[]
     */
    public function getUtilities()
    {
        return $this->utilities;
    }

    /**
     * Sets a new utilities
     *
     * A collection of utilities.
     *
     * @param \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType\UtilitiesAType\UtilityAType[] $utilities
     * @return self
     */
    public function setUtilities(array $utilities = null)
    {
        $this->utilities = $utilities;
        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of comments.
     *
     * @return self
     * @param \Recranet\OTA\ParagraphType $comment
     */
    public function addToComments(\Recranet\OTA\ParagraphType $comment)
    {
        $this->comments[] = $comment;
        return $this;
    }

    /**
     * isset comments
     *
     * A collection of comments.
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
     * A collection of comments.
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
     * A collection of comments.
     *
     * @return \Recranet\OTA\ParagraphType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * A collection of comments.
     *
     * @param \Recranet\OTA\ParagraphType[] $comments
     * @return self
     */
    public function setComments(array $comments = null)
    {
        $this->comments = $comments;
        return $this;
    }
}

