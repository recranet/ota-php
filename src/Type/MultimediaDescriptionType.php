<?php

namespace Recranet\OTA\Type;

/**
 * Class representing MultimediaDescriptionType
 *
 * Describes multimedia item(s).
 * XSD Type: MultimediaDescriptionType
 */
class MultimediaDescriptionType
{
    /**
     * Used to designate a particular type of description such as marketing. Refer to OpenTravel Code List Information Type (INF).
     *
     * @var string $infoCode
     */
    private $infoCode = null;

    /**
     * Used to designate a particular type of additional information. Refer to OpenTravel Code List Additional Detail Type (ADT).
     *
     * @var string $additionalDetailCode
     */
    private $additionalDetailCode = null;

    /**
     * A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a particular implementation.
     *
     * @var string $iD
     */
    private $iD = null;

    /**
     * The date and time when the multimedia information was last updated.
     *
     * @var \DateTime $lastUpdated
     */
    private $lastUpdated = null;

    /**
     * The version of the content, typically in the form of "1" or "2.3."
     *
     * @var string $version
     */
    private $version = null;

    /**
     * A collection of video items.
     *
     * @var \Recranet\OTA\Type\VideoItemsType\VideoItemAType[] $videoItems
     */
    private $videoItems = null;

    /**
     * A collection of image items.
     *
     * @var \Recranet\OTA\Type\ImageItemsType\ImageItemAType[] $imageItems
     */
    private $imageItems = null;

    /**
     * A collection of text items.
     *
     * @var \Recranet\OTA\Type\TextItemsType\TextItemAType[] $textItems
     */
    private $textItems = null;

    /**
     * Gets as infoCode
     *
     * Used to designate a particular type of description such as marketing. Refer to OpenTravel Code List Information Type (INF).
     *
     * @return string
     */
    public function getInfoCode()
    {
        return $this->infoCode;
    }

    /**
     * Sets a new infoCode
     *
     * Used to designate a particular type of description such as marketing. Refer to OpenTravel Code List Information Type (INF).
     *
     * @param string $infoCode
     * @return self
     */
    public function setInfoCode($infoCode)
    {
        $this->infoCode = $infoCode;
        return $this;
    }

    /**
     * Gets as additionalDetailCode
     *
     * Used to designate a particular type of additional information. Refer to OpenTravel Code List Additional Detail Type (ADT).
     *
     * @return string
     */
    public function getAdditionalDetailCode()
    {
        return $this->additionalDetailCode;
    }

    /**
     * Sets a new additionalDetailCode
     *
     * Used to designate a particular type of additional information. Refer to OpenTravel Code List Additional Detail Type (ADT).
     *
     * @param string $additionalDetailCode
     * @return self
     */
    public function setAdditionalDetailCode($additionalDetailCode)
    {
        $this->additionalDetailCode = $additionalDetailCode;
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
     * Gets as lastUpdated
     *
     * The date and time when the multimedia information was last updated.
     *
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }

    /**
     * Sets a new lastUpdated
     *
     * The date and time when the multimedia information was last updated.
     *
     * @param \DateTime $lastUpdated
     * @return self
     */
    public function setLastUpdated(\DateTime $lastUpdated)
    {
        $this->lastUpdated = $lastUpdated;
        return $this;
    }

    /**
     * Gets as version
     *
     * The version of the content, typically in the form of "1" or "2.3."
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * The version of the content, typically in the form of "1" or "2.3."
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Adds as videoItem
     *
     * A collection of video items.
     *
     * @return self
     * @param \Recranet\OTA\Type\VideoItemsType\VideoItemAType $videoItem
     */
    public function addToVideoItems(\Recranet\OTA\Type\VideoItemsType\VideoItemAType $videoItem)
    {
        $this->videoItems[] = $videoItem;
        return $this;
    }

    /**
     * isset videoItems
     *
     * A collection of video items.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVideoItems($index)
    {
        return isset($this->videoItems[$index]);
    }

    /**
     * unset videoItems
     *
     * A collection of video items.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVideoItems($index)
    {
        unset($this->videoItems[$index]);
    }

    /**
     * Gets as videoItems
     *
     * A collection of video items.
     *
     * @return \Recranet\OTA\Type\VideoItemsType\VideoItemAType[]
     */
    public function getVideoItems()
    {
        return $this->videoItems;
    }

    /**
     * Sets a new videoItems
     *
     * A collection of video items.
     *
     * @param \Recranet\OTA\Type\VideoItemsType\VideoItemAType[] $videoItems
     * @return self
     */
    public function setVideoItems(array $videoItems = null)
    {
        $this->videoItems = $videoItems;
        return $this;
    }

    /**
     * Adds as imageItem
     *
     * A collection of image items.
     *
     * @return self
     * @param \Recranet\OTA\Type\ImageItemsType\ImageItemAType $imageItem
     */
    public function addToImageItems(\Recranet\OTA\Type\ImageItemsType\ImageItemAType $imageItem)
    {
        $this->imageItems[] = $imageItem;
        return $this;
    }

    /**
     * isset imageItems
     *
     * A collection of image items.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImageItems($index)
    {
        return isset($this->imageItems[$index]);
    }

    /**
     * unset imageItems
     *
     * A collection of image items.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImageItems($index)
    {
        unset($this->imageItems[$index]);
    }

    /**
     * Gets as imageItems
     *
     * A collection of image items.
     *
     * @return \Recranet\OTA\Type\ImageItemsType\ImageItemAType[]
     */
    public function getImageItems()
    {
        return $this->imageItems;
    }

    /**
     * Sets a new imageItems
     *
     * A collection of image items.
     *
     * @param \Recranet\OTA\Type\ImageItemsType\ImageItemAType[] $imageItems
     * @return self
     */
    public function setImageItems(array $imageItems = null)
    {
        $this->imageItems = $imageItems;
        return $this;
    }

    /**
     * Adds as textItem
     *
     * A collection of text items.
     *
     * @return self
     * @param \Recranet\OTA\Type\TextItemsType\TextItemAType $textItem
     */
    public function addToTextItems(\Recranet\OTA\Type\TextItemsType\TextItemAType $textItem)
    {
        $this->textItems[] = $textItem;
        return $this;
    }

    /**
     * isset textItems
     *
     * A collection of text items.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTextItems($index)
    {
        return isset($this->textItems[$index]);
    }

    /**
     * unset textItems
     *
     * A collection of text items.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTextItems($index)
    {
        unset($this->textItems[$index]);
    }

    /**
     * Gets as textItems
     *
     * A collection of text items.
     *
     * @return \Recranet\OTA\Type\TextItemsType\TextItemAType[]
     */
    public function getTextItems()
    {
        return $this->textItems;
    }

    /**
     * Sets a new textItems
     *
     * A collection of text items.
     *
     * @param \Recranet\OTA\Type\TextItemsType\TextItemAType[] $textItems
     * @return self
     */
    public function setTextItems(array $textItems = null)
    {
        $this->textItems = $textItems;
        return $this;
    }
}

