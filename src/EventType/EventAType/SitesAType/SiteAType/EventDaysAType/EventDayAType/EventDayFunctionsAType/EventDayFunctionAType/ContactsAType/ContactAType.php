<?php

namespace Recranet\OTA\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ContactsAType;

use Recranet\OTA\ContactPersonType;

/**
 * Class representing ContactAType
 */
class ContactAType extends ContactPersonType
{
    /**
     * A collection of comments.
     *
     * @var \Recranet\OTA\ParagraphType[] $comments
     */
    private $comments = null;

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
