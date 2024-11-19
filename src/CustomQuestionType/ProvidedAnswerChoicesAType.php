<?php

namespace Recranet\OTA\CustomQuestionType;

use Recranet\OTA\FormattedTextTextType;

/**
 * Class representing ProvidedAnswerChoicesAType
 */
class ProvidedAnswerChoicesAType extends FormattedTextTextType
{
    /**
     * A unique ID used to identify an answer.
     *
     * @var string $answerID
     */
    private $answerID = null;

    /**
     * Gets as answerID
     *
     * A unique ID used to identify an answer.
     *
     * @return string
     */
    public function getAnswerID()
    {
        return $this->answerID;
    }

    /**
     * Sets a new answerID
     *
     * A unique ID used to identify an answer.
     *
     * @param string $answerID
     * @return self
     */
    public function setAnswerID($answerID)
    {
        $this->answerID = $answerID;
        return $this;
    }
}

