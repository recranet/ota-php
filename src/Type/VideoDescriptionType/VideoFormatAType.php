<?php

namespace Recranet\OTA\Type\VideoDescriptionType;

use Recranet\OTA\Type\VideoItemType;

/**
 * Class representing VideoFormatAType
 */
class VideoFormatAType extends VideoItemType
{
    /**
     * The content ID of a file attachment with the prefix 'cid:'. The value of this can be used to retrieve the corresponding attachment by the receiving system.
     *
     * @var string $contentID
     */
    private $contentID = null;

    /**
     * The title of the multimedia object.
     *
     * @var string $title
     */
    private $title = null;

    /**
     * The author of the multimedia object.
     *
     * @var string $author
     */
    private $author = null;

    /**
     * A copyright notice for the multimedia object.
     *
     * @var string $copyrightNotice
     */
    private $copyrightNotice = null;

    /**
     * Owner of the copyright for the multimedia content.
     *
     * @var string $copyrightOwner
     */
    private $copyrightOwner = null;

    /**
     * The start date for which the multimedia content rights are claimed.
     *
     * @var \DateTime $copyrightStart
     */
    private $copyrightStart = null;

    /**
     * The end date for which the multimedia content rights are claimed.
     *
     * @var \DateTime $copyrightEnd
     */
    private $copyrightEnd = null;

    /**
     * The start date for which the content is considered valid.
     *
     * @var \DateTime $effectiveStart
     */
    private $effectiveStart = null;

    /**
     * The end date for which the content is considered valid.
     *
     * @var \DateTime $effectiveEnd
     */
    private $effectiveEnd = null;

    /**
     * Start month and day or date for which the multimedia content is relevent (e.g. the start of a season or the start of an event). When a year is not used (i.e. only the month and day) it signifies a recurring event.
     *
     * @var \DateTime $applicableStart
     */
    private $applicableStart = null;

    /**
     * End month and day or date for which the multimedia content is relevent (e.g. the end of a season or the start of an event). When a year is not used (i.e. only the month and day) it signifies a recurring event.
     *
     * @var \DateTime $applicableEnd
     */
    private $applicableEnd = null;

    /**
     * Uniquely identifies this file in the message.
     *
     * @var string $recordID
     */
    private $recordID = null;

    /**
     * Unique identifier for the source of the multimedia object (e.g., the original image file).
     *
     * @var string $sourceID
     */
    private $sourceID = null;

    /**
     * A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a particular implementation.
     *
     * @var string $iD
     */
    private $iD = null;

    /**
     * Gets as contentID
     *
     * The content ID of a file attachment with the prefix 'cid:'. The value of this can be used to retrieve the corresponding attachment by the receiving system.
     *
     * @return string
     */
    public function getContentID()
    {
        return $this->contentID;
    }

    /**
     * Sets a new contentID
     *
     * The content ID of a file attachment with the prefix 'cid:'. The value of this can be used to retrieve the corresponding attachment by the receiving system.
     *
     * @param string $contentID
     * @return self
     */
    public function setContentID($contentID)
    {
        $this->contentID = $contentID;
        return $this;
    }

    /**
     * Gets as title
     *
     * The title of the multimedia object.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * The title of the multimedia object.
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as author
     *
     * The author of the multimedia object.
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets a new author
     *
     * The author of the multimedia object.
     *
     * @param string $author
     * @return self
     */
    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }

    /**
     * Gets as copyrightNotice
     *
     * A copyright notice for the multimedia object.
     *
     * @return string
     */
    public function getCopyrightNotice()
    {
        return $this->copyrightNotice;
    }

    /**
     * Sets a new copyrightNotice
     *
     * A copyright notice for the multimedia object.
     *
     * @param string $copyrightNotice
     * @return self
     */
    public function setCopyrightNotice($copyrightNotice)
    {
        $this->copyrightNotice = $copyrightNotice;
        return $this;
    }

    /**
     * Gets as copyrightOwner
     *
     * Owner of the copyright for the multimedia content.
     *
     * @return string
     */
    public function getCopyrightOwner()
    {
        return $this->copyrightOwner;
    }

    /**
     * Sets a new copyrightOwner
     *
     * Owner of the copyright for the multimedia content.
     *
     * @param string $copyrightOwner
     * @return self
     */
    public function setCopyrightOwner($copyrightOwner)
    {
        $this->copyrightOwner = $copyrightOwner;
        return $this;
    }

    /**
     * Gets as copyrightStart
     *
     * The start date for which the multimedia content rights are claimed.
     *
     * @return \DateTime
     */
    public function getCopyrightStart()
    {
        return $this->copyrightStart;
    }

    /**
     * Sets a new copyrightStart
     *
     * The start date for which the multimedia content rights are claimed.
     *
     * @param \DateTime $copyrightStart
     * @return self
     */
    public function setCopyrightStart(\DateTime $copyrightStart)
    {
        $this->copyrightStart = $copyrightStart;
        return $this;
    }

    /**
     * Gets as copyrightEnd
     *
     * The end date for which the multimedia content rights are claimed.
     *
     * @return \DateTime
     */
    public function getCopyrightEnd()
    {
        return $this->copyrightEnd;
    }

    /**
     * Sets a new copyrightEnd
     *
     * The end date for which the multimedia content rights are claimed.
     *
     * @param \DateTime $copyrightEnd
     * @return self
     */
    public function setCopyrightEnd(\DateTime $copyrightEnd)
    {
        $this->copyrightEnd = $copyrightEnd;
        return $this;
    }

    /**
     * Gets as effectiveStart
     *
     * The start date for which the content is considered valid.
     *
     * @return \DateTime
     */
    public function getEffectiveStart()
    {
        return $this->effectiveStart;
    }

    /**
     * Sets a new effectiveStart
     *
     * The start date for which the content is considered valid.
     *
     * @param \DateTime $effectiveStart
     * @return self
     */
    public function setEffectiveStart(\DateTime $effectiveStart)
    {
        $this->effectiveStart = $effectiveStart;
        return $this;
    }

    /**
     * Gets as effectiveEnd
     *
     * The end date for which the content is considered valid.
     *
     * @return \DateTime
     */
    public function getEffectiveEnd()
    {
        return $this->effectiveEnd;
    }

    /**
     * Sets a new effectiveEnd
     *
     * The end date for which the content is considered valid.
     *
     * @param \DateTime $effectiveEnd
     * @return self
     */
    public function setEffectiveEnd(\DateTime $effectiveEnd)
    {
        $this->effectiveEnd = $effectiveEnd;
        return $this;
    }

    /**
     * Gets as applicableStart
     *
     * Start month and day or date for which the multimedia content is relevent (e.g. the start of a season or the start of an event). When a year is not used (i.e. only the month and day) it signifies a recurring event.
     *
     * @return \DateTime
     */
    public function getApplicableStart()
    {
        return $this->applicableStart;
    }

    /**
     * Sets a new applicableStart
     *
     * Start month and day or date for which the multimedia content is relevent (e.g. the start of a season or the start of an event). When a year is not used (i.e. only the month and day) it signifies a recurring event.
     *
     * @param \DateTime $applicableStart
     * @return self
     */
    public function setApplicableStart(\DateTime $applicableStart)
    {
        $this->applicableStart = $applicableStart;
        return $this;
    }

    /**
     * Gets as applicableEnd
     *
     * End month and day or date for which the multimedia content is relevent (e.g. the end of a season or the start of an event). When a year is not used (i.e. only the month and day) it signifies a recurring event.
     *
     * @return \DateTime
     */
    public function getApplicableEnd()
    {
        return $this->applicableEnd;
    }

    /**
     * Sets a new applicableEnd
     *
     * End month and day or date for which the multimedia content is relevent (e.g. the end of a season or the start of an event). When a year is not used (i.e. only the month and day) it signifies a recurring event.
     *
     * @param \DateTime $applicableEnd
     * @return self
     */
    public function setApplicableEnd(\DateTime $applicableEnd)
    {
        $this->applicableEnd = $applicableEnd;
        return $this;
    }

    /**
     * Gets as recordID
     *
     * Uniquely identifies this file in the message.
     *
     * @return string
     */
    public function getRecordID()
    {
        return $this->recordID;
    }

    /**
     * Sets a new recordID
     *
     * Uniquely identifies this file in the message.
     *
     * @param string $recordID
     * @return self
     */
    public function setRecordID($recordID)
    {
        $this->recordID = $recordID;
        return $this;
    }

    /**
     * Gets as sourceID
     *
     * Unique identifier for the source of the multimedia object (e.g., the original image file).
     *
     * @return string
     */
    public function getSourceID()
    {
        return $this->sourceID;
    }

    /**
     * Sets a new sourceID
     *
     * Unique identifier for the source of the multimedia object (e.g., the original image file).
     *
     * @param string $sourceID
     * @return self
     */
    public function setSourceID($sourceID)
    {
        $this->sourceID = $sourceID;
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
}

