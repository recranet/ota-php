<?php

namespace Recranet\OTA\Type\TravelerInfoType;

use Recranet\OTA\Type\AirTravelerType;

/**
 * Class representing AirTravelerAType
 */
class AirTravelerAType extends AirTravelerType
{
    /**
     * A comment about the air traveler.
     *
     * @var \Recranet\OTA\Type\TravelerInfoType\AirTravelerAType\CommentAType[] $comment
     */
    private $comment = [
        
    ];

    /**
     * Adds as comment
     *
     * A comment about the air traveler.
     *
     * @return self
     * @param \Recranet\OTA\Type\TravelerInfoType\AirTravelerAType\CommentAType $comment
     */
    public function addToComment(\Recranet\OTA\Type\TravelerInfoType\AirTravelerAType\CommentAType $comment)
    {
        $this->comment[] = $comment;
        return $this;
    }

    /**
     * isset comment
     *
     * A comment about the air traveler.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComment($index)
    {
        return isset($this->comment[$index]);
    }

    /**
     * unset comment
     *
     * A comment about the air traveler.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComment($index)
    {
        unset($this->comment[$index]);
    }

    /**
     * Gets as comment
     *
     * A comment about the air traveler.
     *
     * @return \Recranet\OTA\Type\TravelerInfoType\AirTravelerAType\CommentAType[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * A comment about the air traveler.
     *
     * @param \Recranet\OTA\Type\TravelerInfoType\AirTravelerAType\CommentAType[] $comment
     * @return self
     */
    public function setComment(array $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }
}

