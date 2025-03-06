<?php

namespace Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\OffSiteTransportationsAType;

/**
 * Class representing OffSiteTransportationAType
 */
class OffSiteTransportationAType
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
     * The name of the off-site function.
     *
     * @var string $functionName
     */
    private $functionName = null;

    /**
     * Location information for a departure, drop-off, or return.
     *
     * @var \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\OffSiteTransportationsAType\OffSiteTransportationAType\LocationAType[] $location
     */
    private $location = [
        
    ];

    /**
     * A collection of comments associated with the transportation.
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $comments
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
     * Gets as functionName
     *
     * The name of the off-site function.
     *
     * @return string
     */
    public function getFunctionName()
    {
        return $this->functionName;
    }

    /**
     * Sets a new functionName
     *
     * The name of the off-site function.
     *
     * @param string $functionName
     * @return self
     */
    public function setFunctionName($functionName)
    {
        $this->functionName = $functionName;
        return $this;
    }

    /**
     * Adds as location
     *
     * Location information for a departure, drop-off, or return.
     *
     * @return self
     * @param \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\OffSiteTransportationsAType\OffSiteTransportationAType\LocationAType $location
     */
    public function addToLocation(\Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\OffSiteTransportationsAType\OffSiteTransportationAType\LocationAType $location)
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * isset location
     *
     * Location information for a departure, drop-off, or return.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLocation($index)
    {
        return isset($this->location[$index]);
    }

    /**
     * unset location
     *
     * Location information for a departure, drop-off, or return.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLocation($index)
    {
        unset($this->location[$index]);
    }

    /**
     * Gets as location
     *
     * Location information for a departure, drop-off, or return.
     *
     * @return \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\OffSiteTransportationsAType\OffSiteTransportationAType\LocationAType[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * Location information for a departure, drop-off, or return.
     *
     * @param \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\OffSiteTransportationsAType\OffSiteTransportationAType\LocationAType[] $location
     * @return self
     */
    public function setLocation(array $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of comments associated with the transportation.
     *
     * @return self
     * @param \Recranet\OTA\Type\ParagraphType $comment
     */
    public function addToComments(\Recranet\OTA\Type\ParagraphType $comment)
    {
        $this->comments[] = $comment;
        return $this;
    }

    /**
     * isset comments
     *
     * A collection of comments associated with the transportation.
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
     * A collection of comments associated with the transportation.
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
     * A collection of comments associated with the transportation.
     *
     * @return \Recranet\OTA\Type\ParagraphType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * A collection of comments associated with the transportation.
     *
     * @param \Recranet\OTA\Type\ParagraphType[] $comments
     * @return self
     */
    public function setComments(array $comments = null)
    {
        $this->comments = $comments;
        return $this;
    }
}

