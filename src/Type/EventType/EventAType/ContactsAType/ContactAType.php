<?php

namespace Recranet\OTA\Type\EventType\EventAType\ContactsAType;

use Recranet\OTA\Type\ContactPersonType;

/**
 * Class representing ContactAType
 */
class ContactAType extends ContactPersonType
{
    /**
     * When true, indicates that the contact is on site.
     *
     * @var bool $onSiteIndicator
     */
    private $onSiteIndicator = null;

    /**
     * A collection of comments pertaining to the contact.
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * Gets as onSiteIndicator
     *
     * When true, indicates that the contact is on site.
     *
     * @return bool
     */
    public function getOnSiteIndicator()
    {
        return $this->onSiteIndicator;
    }

    /**
     * Sets a new onSiteIndicator
     *
     * When true, indicates that the contact is on site.
     *
     * @param bool $onSiteIndicator
     * @return self
     */
    public function setOnSiteIndicator($onSiteIndicator)
    {
        $this->onSiteIndicator = $onSiteIndicator;
        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of comments pertaining to the contact.
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
     * A collection of comments pertaining to the contact.
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
     * A collection of comments pertaining to the contact.
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
     * A collection of comments pertaining to the contact.
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
     * A collection of comments pertaining to the contact.
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

