<?php

namespace Recranet\OTA\Type\ImageDescriptionType;

use Recranet\OTA\Type\ImageItemType;

/**
 * Class representing ImageFormatAType
 */
class ImageFormatAType extends ImageItemType
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
     * The language in which the image text is provided.
     *
     * @var string $language
     */
    private $language = null;

    /**
     * Identifies the format of an image. Refer to OpenTravel Code List Content Format Code (CFC).
     *
     * @var string $format
     */
    private $format = null;

    /**
     * The name of the image file.
     *
     * @var string $fileName
     */
    private $fileName = null;

    /**
     * The size of the image file.
     *
     * @var int $fileSize
     */
    private $fileSize = null;

    /**
     * Associates the image size to a given category (e.g., 70x70, 100x100, 480x480, thumbnail). For example, if an image with a dimension of 72x73 is sent, it may be categorized as a 70x70 image.
     *
     * @var string $dimensionCategory
     */
    private $dimensionCategory = null;

    /**
     * When true, the image is the original file and format. When false, the image is not the original file and format.
     *
     * @var bool $isOriginalIndicator
     */
    private $isOriginalIndicator = null;

    /**
     * Information to contact the author of an image.
     * Example: email address - John@company.com
     *
     * @var string $authorContact
     */
    private $authorContact = null;

    /**
     * Used to define the display order.
     * Example: 1
     *
     * @var int $sort
     */
    private $sort = null;

    /**
     * The resolution of an image expressed in DPI (Dots Per Inch).
     * Example: 600
     *
     * @var int $resolution
     */
    private $resolution = null;

    /**
     * The color model.
     * Example: RGB
     * Implementers: A color model is an abstract mathematical model describing the way colors can be represented as multiples of numbers, typically as three or four values or color components.
     *
     * @var string $colorSpace
     */
    private $colorSpace = null;

    /**
     * The latitude of what is depicted in the image.
     * Example: 40??44???54.36???N
     *
     * @var string $latitude
     */
    private $latitude = null;

    /**
     * The longitude of what is depicted in the image.
     * Example: 73??59???8.5???W
     *
     * @var string $longitude
     */
    private $longitude = null;

    /**
     * The original name of the image file.
     * Example: 394820
     *
     * @var string $originalFileName
     */
    private $originalFileName = null;

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
     * Gets as language
     *
     * The language in which the image text is provided.
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * The language in which the image text is provided.
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as format
     *
     * Identifies the format of an image. Refer to OpenTravel Code List Content Format Code (CFC).
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Sets a new format
     *
     * Identifies the format of an image. Refer to OpenTravel Code List Content Format Code (CFC).
     *
     * @param string $format
     * @return self
     */
    public function setFormat($format)
    {
        $this->format = $format;
        return $this;
    }

    /**
     * Gets as fileName
     *
     * The name of the image file.
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Sets a new fileName
     *
     * The name of the image file.
     *
     * @param string $fileName
     * @return self
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * Gets as fileSize
     *
     * The size of the image file.
     *
     * @return int
     */
    public function getFileSize()
    {
        return $this->fileSize;
    }

    /**
     * Sets a new fileSize
     *
     * The size of the image file.
     *
     * @param int $fileSize
     * @return self
     */
    public function setFileSize($fileSize)
    {
        $this->fileSize = $fileSize;
        return $this;
    }

    /**
     * Gets as dimensionCategory
     *
     * Associates the image size to a given category (e.g., 70x70, 100x100, 480x480, thumbnail). For example, if an image with a dimension of 72x73 is sent, it may be categorized as a 70x70 image.
     *
     * @return string
     */
    public function getDimensionCategory()
    {
        return $this->dimensionCategory;
    }

    /**
     * Sets a new dimensionCategory
     *
     * Associates the image size to a given category (e.g., 70x70, 100x100, 480x480, thumbnail). For example, if an image with a dimension of 72x73 is sent, it may be categorized as a 70x70 image.
     *
     * @param string $dimensionCategory
     * @return self
     */
    public function setDimensionCategory($dimensionCategory)
    {
        $this->dimensionCategory = $dimensionCategory;
        return $this;
    }

    /**
     * Gets as isOriginalIndicator
     *
     * When true, the image is the original file and format. When false, the image is not the original file and format.
     *
     * @return bool
     */
    public function getIsOriginalIndicator()
    {
        return $this->isOriginalIndicator;
    }

    /**
     * Sets a new isOriginalIndicator
     *
     * When true, the image is the original file and format. When false, the image is not the original file and format.
     *
     * @param bool $isOriginalIndicator
     * @return self
     */
    public function setIsOriginalIndicator($isOriginalIndicator)
    {
        $this->isOriginalIndicator = $isOriginalIndicator;
        return $this;
    }

    /**
     * Gets as authorContact
     *
     * Information to contact the author of an image.
     * Example: email address - John@company.com
     *
     * @return string
     */
    public function getAuthorContact()
    {
        return $this->authorContact;
    }

    /**
     * Sets a new authorContact
     *
     * Information to contact the author of an image.
     * Example: email address - John@company.com
     *
     * @param string $authorContact
     * @return self
     */
    public function setAuthorContact($authorContact)
    {
        $this->authorContact = $authorContact;
        return $this;
    }

    /**
     * Gets as sort
     *
     * Used to define the display order.
     * Example: 1
     *
     * @return int
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Sets a new sort
     *
     * Used to define the display order.
     * Example: 1
     *
     * @param int $sort
     * @return self
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
        return $this;
    }

    /**
     * Gets as resolution
     *
     * The resolution of an image expressed in DPI (Dots Per Inch).
     * Example: 600
     *
     * @return int
     */
    public function getResolution()
    {
        return $this->resolution;
    }

    /**
     * Sets a new resolution
     *
     * The resolution of an image expressed in DPI (Dots Per Inch).
     * Example: 600
     *
     * @param int $resolution
     * @return self
     */
    public function setResolution($resolution)
    {
        $this->resolution = $resolution;
        return $this;
    }

    /**
     * Gets as colorSpace
     *
     * The color model.
     * Example: RGB
     * Implementers: A color model is an abstract mathematical model describing the way colors can be represented as multiples of numbers, typically as three or four values or color components.
     *
     * @return string
     */
    public function getColorSpace()
    {
        return $this->colorSpace;
    }

    /**
     * Sets a new colorSpace
     *
     * The color model.
     * Example: RGB
     * Implementers: A color model is an abstract mathematical model describing the way colors can be represented as multiples of numbers, typically as three or four values or color components.
     *
     * @param string $colorSpace
     * @return self
     */
    public function setColorSpace($colorSpace)
    {
        $this->colorSpace = $colorSpace;
        return $this;
    }

    /**
     * Gets as latitude
     *
     * The latitude of what is depicted in the image.
     * Example: 40??44???54.36???N
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Sets a new latitude
     *
     * The latitude of what is depicted in the image.
     * Example: 40??44???54.36???N
     *
     * @param string $latitude
     * @return self
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * Gets as longitude
     *
     * The longitude of what is depicted in the image.
     * Example: 73??59???8.5???W
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Sets a new longitude
     *
     * The longitude of what is depicted in the image.
     * Example: 73??59???8.5???W
     *
     * @param string $longitude
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * Gets as originalFileName
     *
     * The original name of the image file.
     * Example: 394820
     *
     * @return string
     */
    public function getOriginalFileName()
    {
        return $this->originalFileName;
    }

    /**
     * Sets a new originalFileName
     *
     * The original name of the image file.
     * Example: 394820
     *
     * @param string $originalFileName
     * @return self
     */
    public function setOriginalFileName($originalFileName)
    {
        $this->originalFileName = $originalFileName;
        return $this;
    }
}

