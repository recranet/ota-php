<?php

namespace Recranet\OTA\AccessesType;

/**
 * Class representing AccessAType
 */
class AccessAType
{
    /**
     * Type of action taken on the profile.
     *
     * @var string $actionType
     */
    private $actionType = null;

    /**
     * Month, day, year and optionally in hour, minute, second of day in ISO 8601 format of the action taken on the profile.
     *
     * @var \DateTime $actionDateTime
     */
    private $actionDateTime = null;

    /**
     * A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a particular implementation.
     *
     * @var string $iD
     */
    private $iD = null;

    /**
     * Name of individual who originated or updated record.
     *
     * @var \Recranet\OTA\PersonNameType $accessPerson
     */
    private $accessPerson = null;

    /**
     * Free text comment added by the person accessing the profile record.
     *
     * @var \Recranet\OTA\FreeTextType $accessComment
     */
    private $accessComment = null;

    /**
     * Gets as actionType
     *
     * Type of action taken on the profile.
     *
     * @return string
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Sets a new actionType
     *
     * Type of action taken on the profile.
     *
     * @param string $actionType
     * @return self
     */
    public function setActionType($actionType)
    {
        $this->actionType = $actionType;
        return $this;
    }

    /**
     * Gets as actionDateTime
     *
     * Month, day, year and optionally in hour, minute, second of day in ISO 8601 format of the action taken on the profile.
     *
     * @return \DateTime
     */
    public function getActionDateTime()
    {
        return $this->actionDateTime;
    }

    /**
     * Sets a new actionDateTime
     *
     * Month, day, year and optionally in hour, minute, second of day in ISO 8601 format of the action taken on the profile.
     *
     * @param \DateTime $actionDateTime
     * @return self
     */
    public function setActionDateTime(\DateTime $actionDateTime)
    {
        $this->actionDateTime = $actionDateTime;
        return $this;
    }

    /**
     * Gets as iD
     *
     * A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a particular implementation.
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a particular implementation.
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as accessPerson
     *
     * Name of individual who originated or updated record.
     *
     * @return \Recranet\OTA\PersonNameType
     */
    public function getAccessPerson()
    {
        return $this->accessPerson;
    }

    /**
     * Sets a new accessPerson
     *
     * Name of individual who originated or updated record.
     *
     * @param \Recranet\OTA\PersonNameType $accessPerson
     * @return self
     */
    public function setAccessPerson(?\Recranet\OTA\PersonNameType $accessPerson = null)
    {
        $this->accessPerson = $accessPerson;
        return $this;
    }

    /**
     * Gets as accessComment
     *
     * Free text comment added by the person accessing the profile record.
     *
     * @return \Recranet\OTA\FreeTextType
     */
    public function getAccessComment()
    {
        return $this->accessComment;
    }

    /**
     * Sets a new accessComment
     *
     * Free text comment added by the person accessing the profile record.
     *
     * @param \Recranet\OTA\FreeTextType $accessComment
     * @return self
     */
    public function setAccessComment(?\Recranet\OTA\FreeTextType $accessComment = null)
    {
        $this->accessComment = $accessComment;
        return $this;
    }
}

