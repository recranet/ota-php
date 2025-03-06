<?php

namespace Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType;

/**
 * Class representing AnswersAType
 */
class AnswersAType
{
    /**
     * Answer to custom questions.
     *
     * @var \Recranet\OTA\Type\CustomQuestionType[] $answer
     */
    private $answer = [
        
    ];

    /**
     * Adds as answer
     *
     * Answer to custom questions.
     *
     * @return self
     * @param \Recranet\OTA\Type\CustomQuestionType $answer
     */
    public function addToAnswer(\Recranet\OTA\Type\CustomQuestionType $answer)
    {
        $this->answer[] = $answer;
        return $this;
    }

    /**
     * isset answer
     *
     * Answer to custom questions.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAnswer($index)
    {
        return isset($this->answer[$index]);
    }

    /**
     * unset answer
     *
     * Answer to custom questions.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAnswer($index)
    {
        unset($this->answer[$index]);
    }

    /**
     * Gets as answer
     *
     * Answer to custom questions.
     *
     * @return \Recranet\OTA\Type\CustomQuestionType[]
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Sets a new answer
     *
     * Answer to custom questions.
     *
     * @param \Recranet\OTA\Type\CustomQuestionType[] $answer
     * @return self
     */
    public function setAnswer(array $answer)
    {
        $this->answer = $answer;
        return $this;
    }
}

