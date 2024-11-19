<?php

namespace Recranet\OTA;

/**
 * Class representing CustomQuestionType
 *
 *
 * XSD Type: CustomQuestionType
 */
class CustomQuestionType
{
    /**
     * A unique ID used to identify a question
     *
     * @var string $questionID
     */
    private $questionID = null;

    /**
     * Defines the type of question being asked (i.e., text, text area, single selection, multiple selection or numeric). Refer to OpenTravel code list Question Type (QST).
     *
     * @var string $questionTypeCode
     */
    private $questionTypeCode = null;

    /**
     * Code used to define the category for a question (e.g., food and beverage, security, audio visual). Refer to OpenTravel code list Question Catergory (QCC).
     *
     * @var string $questionCategoryCode
     */
    private $questionCategoryCode = null;

    /**
     * When true, indicates an answer is required. When false, a question does not need to be answered.
     *
     * @var bool $answerRequiredInd
     */
    private $answerRequiredInd = null;

    /**
     * Text for a specific question.
     *
     * @var \Recranet\OTA\FormattedTextTextType $questionText
     */
    private $questionText = null;

    /**
     * Allows the requestor to provide prewritten answers for the question.
     *
     * @var \Recranet\OTA\CustomQuestionType\ProvidedAnswerChoicesAType[] $providedAnswerChoices
     */
    private $providedAnswerChoices = [
        
    ];

    /**
     * Answer for a specific question.
     *
     * @var \Recranet\OTA\FormattedTextTextType $answerText
     */
    private $answerText = null;

    /**
     * Gets as questionID
     *
     * A unique ID used to identify a question
     *
     * @return string
     */
    public function getQuestionID()
    {
        return $this->questionID;
    }

    /**
     * Sets a new questionID
     *
     * A unique ID used to identify a question
     *
     * @param string $questionID
     * @return self
     */
    public function setQuestionID($questionID)
    {
        $this->questionID = $questionID;
        return $this;
    }

    /**
     * Gets as questionTypeCode
     *
     * Defines the type of question being asked (i.e., text, text area, single selection, multiple selection or numeric). Refer to OpenTravel code list Question Type (QST).
     *
     * @return string
     */
    public function getQuestionTypeCode()
    {
        return $this->questionTypeCode;
    }

    /**
     * Sets a new questionTypeCode
     *
     * Defines the type of question being asked (i.e., text, text area, single selection, multiple selection or numeric). Refer to OpenTravel code list Question Type (QST).
     *
     * @param string $questionTypeCode
     * @return self
     */
    public function setQuestionTypeCode($questionTypeCode)
    {
        $this->questionTypeCode = $questionTypeCode;
        return $this;
    }

    /**
     * Gets as questionCategoryCode
     *
     * Code used to define the category for a question (e.g., food and beverage, security, audio visual). Refer to OpenTravel code list Question Catergory (QCC).
     *
     * @return string
     */
    public function getQuestionCategoryCode()
    {
        return $this->questionCategoryCode;
    }

    /**
     * Sets a new questionCategoryCode
     *
     * Code used to define the category for a question (e.g., food and beverage, security, audio visual). Refer to OpenTravel code list Question Catergory (QCC).
     *
     * @param string $questionCategoryCode
     * @return self
     */
    public function setQuestionCategoryCode($questionCategoryCode)
    {
        $this->questionCategoryCode = $questionCategoryCode;
        return $this;
    }

    /**
     * Gets as answerRequiredInd
     *
     * When true, indicates an answer is required. When false, a question does not need to be answered.
     *
     * @return bool
     */
    public function getAnswerRequiredInd()
    {
        return $this->answerRequiredInd;
    }

    /**
     * Sets a new answerRequiredInd
     *
     * When true, indicates an answer is required. When false, a question does not need to be answered.
     *
     * @param bool $answerRequiredInd
     * @return self
     */
    public function setAnswerRequiredInd($answerRequiredInd)
    {
        $this->answerRequiredInd = $answerRequiredInd;
        return $this;
    }

    /**
     * Gets as questionText
     *
     * Text for a specific question.
     *
     * @return \Recranet\OTA\FormattedTextTextType
     */
    public function getQuestionText()
    {
        return $this->questionText;
    }

    /**
     * Sets a new questionText
     *
     * Text for a specific question.
     *
     * @param \Recranet\OTA\FormattedTextTextType $questionText
     * @return self
     */
    public function setQuestionText(?\Recranet\OTA\FormattedTextTextType $questionText = null)
    {
        $this->questionText = $questionText;
        return $this;
    }

    /**
     * Adds as providedAnswerChoices
     *
     * Allows the requestor to provide prewritten answers for the question.
     *
     * @return self
     * @param \Recranet\OTA\CustomQuestionType\ProvidedAnswerChoicesAType $providedAnswerChoices
     */
    public function addToProvidedAnswerChoices(\Recranet\OTA\CustomQuestionType\ProvidedAnswerChoicesAType $providedAnswerChoices)
    {
        $this->providedAnswerChoices[] = $providedAnswerChoices;
        return $this;
    }

    /**
     * isset providedAnswerChoices
     *
     * Allows the requestor to provide prewritten answers for the question.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProvidedAnswerChoices($index)
    {
        return isset($this->providedAnswerChoices[$index]);
    }

    /**
     * unset providedAnswerChoices
     *
     * Allows the requestor to provide prewritten answers for the question.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProvidedAnswerChoices($index)
    {
        unset($this->providedAnswerChoices[$index]);
    }

    /**
     * Gets as providedAnswerChoices
     *
     * Allows the requestor to provide prewritten answers for the question.
     *
     * @return \Recranet\OTA\CustomQuestionType\ProvidedAnswerChoicesAType[]
     */
    public function getProvidedAnswerChoices()
    {
        return $this->providedAnswerChoices;
    }

    /**
     * Sets a new providedAnswerChoices
     *
     * Allows the requestor to provide prewritten answers for the question.
     *
     * @param \Recranet\OTA\CustomQuestionType\ProvidedAnswerChoicesAType[] $providedAnswerChoices
     * @return self
     */
    public function setProvidedAnswerChoices(array $providedAnswerChoices = null)
    {
        $this->providedAnswerChoices = $providedAnswerChoices;
        return $this;
    }

    /**
     * Gets as answerText
     *
     * Answer for a specific question.
     *
     * @return \Recranet\OTA\FormattedTextTextType
     */
    public function getAnswerText()
    {
        return $this->answerText;
    }

    /**
     * Sets a new answerText
     *
     * Answer for a specific question.
     *
     * @param \Recranet\OTA\FormattedTextTextType $answerText
     * @return self
     */
    public function setAnswerText(?\Recranet\OTA\FormattedTextTextType $answerText = null)
    {
        $this->answerText = $answerText;
        return $this;
    }
}

