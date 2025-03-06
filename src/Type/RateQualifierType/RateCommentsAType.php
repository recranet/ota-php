<?php

namespace Recranet\OTA\Type\RateQualifierType;

/**
 * Class representing RateCommentsAType
 */
class RateCommentsAType
{
    /**
     * This may be used to provide any additional information about rates (e.g., must return by Monday at 8 AM).
     *
     * @var \Recranet\OTA\Type\RateQualifierType\RateCommentsAType\RateCommentAType[] $rateComment
     */
    private $rateComment = [
        
    ];

    /**
     * Adds as rateComment
     *
     * This may be used to provide any additional information about rates (e.g., must return by Monday at 8 AM).
     *
     * @return self
     * @param \Recranet\OTA\Type\RateQualifierType\RateCommentsAType\RateCommentAType $rateComment
     */
    public function addToRateComment(\Recranet\OTA\Type\RateQualifierType\RateCommentsAType\RateCommentAType $rateComment)
    {
        $this->rateComment[] = $rateComment;
        return $this;
    }

    /**
     * isset rateComment
     *
     * This may be used to provide any additional information about rates (e.g., must return by Monday at 8 AM).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRateComment($index)
    {
        return isset($this->rateComment[$index]);
    }

    /**
     * unset rateComment
     *
     * This may be used to provide any additional information about rates (e.g., must return by Monday at 8 AM).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRateComment($index)
    {
        unset($this->rateComment[$index]);
    }

    /**
     * Gets as rateComment
     *
     * This may be used to provide any additional information about rates (e.g., must return by Monday at 8 AM).
     *
     * @return \Recranet\OTA\Type\RateQualifierType\RateCommentsAType\RateCommentAType[]
     */
    public function getRateComment()
    {
        return $this->rateComment;
    }

    /**
     * Sets a new rateComment
     *
     * This may be used to provide any additional information about rates (e.g., must return by Monday at 8 AM).
     *
     * @param \Recranet\OTA\Type\RateQualifierType\RateCommentsAType\RateCommentAType[] $rateComment
     * @return self
     */
    public function setRateComment(array $rateComment)
    {
        $this->rateComment = $rateComment;
        return $this;
    }
}

