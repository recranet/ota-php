<?php

namespace Recranet\OTA;

/**
 * Class representing VideoItemType
 *
 * Details for a video of a given category.
 * XSD Type: VideoItemType
 */
class VideoItemType
{
    /**
     * The unit of measure associated with all the dimensions of the multimedia item. Refer to OpenTravel Code list Unit of Measure (UOM).
     *
     * @var string $unitOfMeasureCode
     */
    private $unitOfMeasureCode = null;

    /**
     * The width of the video item (unit specified by unit of measure).
     *
     * @var int $width
     */
    private $width = null;

    /**
     * The height of the video item (unit specified by unit of measure).
     *
     * @var int $height
     */
    private $height = null;

    /**
     * The bit rate of the video item.
     *
     * @var int $bitRate
     */
    private $bitRate = null;

    /**
     * The length of the video item (unit specified by unit of measure).
     *
     * @var int $length
     */
    private $length = null;

    /**
     * Identifies the language of the multimedia item.
     *
     * @var string $language
     */
    private $language = null;

    /**
     * The code associated with the format of the multimedia item. Refer to OpenTravel Code list Content Format Code (CFC).
     *
     * @var string $format
     */
    private $format = null;

    /**
     * The size of the multimedia file in bytes.
     *
     * @var int $fileSize
     */
    private $fileSize = null;

    /**
     * The name of the multimedia file.
     *
     * @var string $fileName
     */
    private $fileName = null;

    /**
     * Source website of the video.
     * Example: YouTube
     *
     * @var string $streamingSource
     */
    private $streamingSource = null;

    /**
     * URL of the multimedia item for a specific format.
     *
     * @var string $uRL
     */
    private $uRL = null;

    /**
     * Gets as unitOfMeasureCode
     *
     * The unit of measure associated with all the dimensions of the multimedia item. Refer to OpenTravel Code list Unit of Measure (UOM).
     *
     * @return string
     */
    public function getUnitOfMeasureCode()
    {
        return $this->unitOfMeasureCode;
    }

    /**
     * Sets a new unitOfMeasureCode
     *
     * The unit of measure associated with all the dimensions of the multimedia item. Refer to OpenTravel Code list Unit of Measure (UOM).
     *
     * @param string $unitOfMeasureCode
     * @return self
     */
    public function setUnitOfMeasureCode($unitOfMeasureCode)
    {
        $this->unitOfMeasureCode = $unitOfMeasureCode;
        return $this;
    }

    /**
     * Gets as width
     *
     * The width of the video item (unit specified by unit of measure).
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Sets a new width
     *
     * The width of the video item (unit specified by unit of measure).
     *
     * @param int $width
     * @return self
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * Gets as height
     *
     * The height of the video item (unit specified by unit of measure).
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Sets a new height
     *
     * The height of the video item (unit specified by unit of measure).
     *
     * @param int $height
     * @return self
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * Gets as bitRate
     *
     * The bit rate of the video item.
     *
     * @return int
     */
    public function getBitRate()
    {
        return $this->bitRate;
    }

    /**
     * Sets a new bitRate
     *
     * The bit rate of the video item.
     *
     * @param int $bitRate
     * @return self
     */
    public function setBitRate($bitRate)
    {
        $this->bitRate = $bitRate;
        return $this;
    }

    /**
     * Gets as length
     *
     * The length of the video item (unit specified by unit of measure).
     *
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Sets a new length
     *
     * The length of the video item (unit specified by unit of measure).
     *
     * @param int $length
     * @return self
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * Gets as language
     *
     * Identifies the language of the multimedia item.
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
     * Identifies the language of the multimedia item.
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
     * The code associated with the format of the multimedia item. Refer to OpenTravel Code list Content Format Code (CFC).
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
     * The code associated with the format of the multimedia item. Refer to OpenTravel Code list Content Format Code (CFC).
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
     * Gets as fileSize
     *
     * The size of the multimedia file in bytes.
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
     * The size of the multimedia file in bytes.
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
     * Gets as fileName
     *
     * The name of the multimedia file.
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
     * The name of the multimedia file.
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
     * Gets as streamingSource
     *
     * Source website of the video.
     * Example: YouTube
     *
     * @return string
     */
    public function getStreamingSource()
    {
        return $this->streamingSource;
    }

    /**
     * Sets a new streamingSource
     *
     * Source website of the video.
     * Example: YouTube
     *
     * @param string $streamingSource
     * @return self
     */
    public function setStreamingSource($streamingSource)
    {
        $this->streamingSource = $streamingSource;
        return $this;
    }

    /**
     * Gets as uRL
     *
     * URL of the multimedia item for a specific format.
     *
     * @return string
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * URL of the multimedia item for a specific format.
     *
     * @param string $uRL
     * @return self
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }
}

