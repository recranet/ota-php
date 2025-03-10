<?php

namespace Recranet\OTA\Type;

/**
 * Class representing ParagraphType
 *
 * An indication of a new paragraph for a sub-section of a formatted text message.
 * XSD Type: ParagraphType
 */
class ParagraphType
{
    /**
     * In many cases the description repeats, this will allow you to define the information that is being sent, typically used when multiple occurrences of ParagraphType are being sent.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * The sequence number for the paragraph.
     *
     * @var int $paragraphNumber
     */
    private $paragraphNumber = null;

    /**
     * Time stamp of the creation.
     *
     * @var \DateTime $createDateTime
     */
    private $createDateTime = null;

    /**
     * ID of creator. The creator could be a software system identifier or an identifier of an employee resposible for the creation.
     *
     * @var string $creatorID
     */
    private $creatorID = null;

    /**
     * Time stamp of last modification.
     *
     * @var \DateTime $lastModifyDateTime
     */
    private $lastModifyDateTime = null;

    /**
     * Identifies the last software system or person to modify a record.
     *
     * @var string $lastModifierID
     */
    private $lastModifierID = null;

    /**
     * Date an item will be purged from a database (e.g., from a live database to an archive).
     *
     * @var \DateTime $purgeDate
     */
    private $purgeDate = null;

    /**
     * Language identification.
     *
     * @var string $language
     */
    private $language = null;

    /**
     * Formatted text content.
     *
     * @var \Recranet\OTA\Type\FormattedTextTextType $text
     */
    private $text = null;

    /**
     * An image for this paragraph.
     *
     * @var string $image
     */
    private $image = null;

    /**
     * A URL for this paragraph.
     *
     * @var string $uRL
     */
    private $uRL = null;

    /**
     * Formatted text content and an associated item or sequence number.
     *
     * @var \Recranet\OTA\Type\ParagraphType\ListItemAType $listItem
     */
    private $listItem = null;

    /**
     * Gets as name
     *
     * In many cases the description repeats, this will allow you to define the information that is being sent, typically used when multiple occurrences of ParagraphType are being sent.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * In many cases the description repeats, this will allow you to define the information that is being sent, typically used when multiple occurrences of ParagraphType are being sent.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as paragraphNumber
     *
     * The sequence number for the paragraph.
     *
     * @return int
     */
    public function getParagraphNumber()
    {
        return $this->paragraphNumber;
    }

    /**
     * Sets a new paragraphNumber
     *
     * The sequence number for the paragraph.
     *
     * @param int $paragraphNumber
     * @return self
     */
    public function setParagraphNumber($paragraphNumber)
    {
        $this->paragraphNumber = $paragraphNumber;
        return $this;
    }

    /**
     * Gets as createDateTime
     *
     * Time stamp of the creation.
     *
     * @return \DateTime
     */
    public function getCreateDateTime()
    {
        return $this->createDateTime;
    }

    /**
     * Sets a new createDateTime
     *
     * Time stamp of the creation.
     *
     * @param \DateTime $createDateTime
     * @return self
     */
    public function setCreateDateTime(\DateTime $createDateTime)
    {
        $this->createDateTime = $createDateTime;
        return $this;
    }

    /**
     * Gets as creatorID
     *
     * ID of creator. The creator could be a software system identifier or an identifier of an employee resposible for the creation.
     *
     * @return string
     */
    public function getCreatorID()
    {
        return $this->creatorID;
    }

    /**
     * Sets a new creatorID
     *
     * ID of creator. The creator could be a software system identifier or an identifier of an employee resposible for the creation.
     *
     * @param string $creatorID
     * @return self
     */
    public function setCreatorID($creatorID)
    {
        $this->creatorID = $creatorID;
        return $this;
    }

    /**
     * Gets as lastModifyDateTime
     *
     * Time stamp of last modification.
     *
     * @return \DateTime
     */
    public function getLastModifyDateTime()
    {
        return $this->lastModifyDateTime;
    }

    /**
     * Sets a new lastModifyDateTime
     *
     * Time stamp of last modification.
     *
     * @param \DateTime $lastModifyDateTime
     * @return self
     */
    public function setLastModifyDateTime(\DateTime $lastModifyDateTime)
    {
        $this->lastModifyDateTime = $lastModifyDateTime;
        return $this;
    }

    /**
     * Gets as lastModifierID
     *
     * Identifies the last software system or person to modify a record.
     *
     * @return string
     */
    public function getLastModifierID()
    {
        return $this->lastModifierID;
    }

    /**
     * Sets a new lastModifierID
     *
     * Identifies the last software system or person to modify a record.
     *
     * @param string $lastModifierID
     * @return self
     */
    public function setLastModifierID($lastModifierID)
    {
        $this->lastModifierID = $lastModifierID;
        return $this;
    }

    /**
     * Gets as purgeDate
     *
     * Date an item will be purged from a database (e.g., from a live database to an archive).
     *
     * @return \DateTime
     */
    public function getPurgeDate()
    {
        return $this->purgeDate;
    }

    /**
     * Sets a new purgeDate
     *
     * Date an item will be purged from a database (e.g., from a live database to an archive).
     *
     * @param \DateTime $purgeDate
     * @return self
     */
    public function setPurgeDate(\DateTime $purgeDate)
    {
        $this->purgeDate = $purgeDate;
        return $this;
    }

    /**
     * Gets as language
     *
     * Language identification.
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
     * Language identification.
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
     * Gets as text
     *
     * Formatted text content.
     *
     * @return \Recranet\OTA\Type\FormattedTextTextType
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * Formatted text content.
     *
     * @param \Recranet\OTA\Type\FormattedTextTextType $text
     * @return self
     */
    public function setText(?\Recranet\OTA\Type\FormattedTextTextType $text = null)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Gets as image
     *
     * An image for this paragraph.
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets a new image
     *
     * An image for this paragraph.
     *
     * @param string $image
     * @return self
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * Gets as uRL
     *
     * A URL for this paragraph.
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
     * A URL for this paragraph.
     *
     * @param string $uRL
     * @return self
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }

    /**
     * Gets as listItem
     *
     * Formatted text content and an associated item or sequence number.
     *
     * @return \Recranet\OTA\Type\ParagraphType\ListItemAType
     */
    public function getListItem()
    {
        return $this->listItem;
    }

    /**
     * Sets a new listItem
     *
     * Formatted text content and an associated item or sequence number.
     *
     * @param \Recranet\OTA\Type\ParagraphType\ListItemAType $listItem
     * @return self
     */
    public function setListItem(?\Recranet\OTA\Type\ParagraphType\ListItemAType $listItem = null)
    {
        $this->listItem = $listItem;
        return $this;
    }
}

