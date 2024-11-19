<?php

namespace Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType;

/**
 * Class representing CustomQuestionsAType
 */
class CustomQuestionsAType
{
    /**
     * Details regarding a particular question.
     *
     * @var \Recranet\OTA\CustomQuestionType[] $customQuestion
     */
    private $customQuestion = [
        
    ];

    /**
     * Adds as customQuestion
     *
     * Details regarding a particular question.
     *
     * @return self
     * @param \Recranet\OTA\CustomQuestionType $customQuestion
     */
    public function addToCustomQuestion(\Recranet\OTA\CustomQuestionType $customQuestion)
    {
        $this->customQuestion[] = $customQuestion;
        return $this;
    }

    /**
     * isset customQuestion
     *
     * Details regarding a particular question.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCustomQuestion($index)
    {
        return isset($this->customQuestion[$index]);
    }

    /**
     * unset customQuestion
     *
     * Details regarding a particular question.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCustomQuestion($index)
    {
        unset($this->customQuestion[$index]);
    }

    /**
     * Gets as customQuestion
     *
     * Details regarding a particular question.
     *
     * @return \Recranet\OTA\CustomQuestionType[]
     */
    public function getCustomQuestion()
    {
        return $this->customQuestion;
    }

    /**
     * Sets a new customQuestion
     *
     * Details regarding a particular question.
     *
     * @param \Recranet\OTA\CustomQuestionType[] $customQuestion
     * @return self
     */
    public function setCustomQuestion(array $customQuestion)
    {
        $this->customQuestion = $customQuestion;
        return $this;
    }
}

