<?php

namespace Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType;

/**
 * Class representing ProposalSpecificationAType
 */
class ProposalSpecificationAType
{
    /**
     * The date the requestor requires a response/proposal.
     *
     * @var \DateTime $responseDue
     */
    private $responseDue = null;

    /**
     * The date the requestor intends to decide on a particular site.
     *
     * @var \DateTime $decisionDue
     */
    private $decisionDue = null;

    /**
     * The format of the response the requestor would like to receive the response (e.g. fax, e-mail, xml). Refer to OpenTravel Code List Distribution Type (DTB).
     *
     * @var string $responseFormat
     */
    private $responseFormat = null;

    /**
     * The response language the requestor would like to receive the response (e.g. English, Spanish, French).
     *
     * @var string $responseLanguage
     */
    private $responseLanguage = null;

    /**
     * If true, indicates a preliminary cut typically with a second review of finalists. If false, no preliminary cut.
     *
     * @var bool $preliminaryCutIndicator
     */
    private $preliminaryCutIndicator = null;

    /**
     * Defines the date that the preliminary cut will be made.
     *
     * @var \DateTime $preliminaryCutDate
     */
    private $preliminaryCutDate = null;

    /**
     * Date the RFP or RFPs were distributed.
     *
     * @var \DateTime $rFPDistributionDate
     */
    private $rFPDistributionDate = null;

    /**
     * Date the RFP or RFPs were published.
     *
     * @var \DateTime $rFPPublishedDate
     */
    private $rFPPublishedDate = null;

    /**
     * The date the RFP was created.
     *
     * @var \DateTime $rFPCreationDate
     */
    private $rFPCreationDate = null;

    /**
     * A collection of key decision factors used in the proposal evaluation.
     *
     * @var \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType\KeyDecisionFactorsAType\KeyDecisionFactorAType[] $keyDecisionFactors
     */
    private $keyDecisionFactors = null;

    /**
     * Used to provide information on where and when the sites should present their proposals to the meeting planners.
     *
     * @var \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType\PresentationAType $presentation
     */
    private $presentation = null;

    /**
     * Comments regarding the proposal itself.
     *
     * @var \Recranet\OTA\ParagraphType[] $comments
     */
    private $comments = [
        
    ];

    /**
     * A container for collecting custom questions and answers.
     *
     * @var \Recranet\OTA\CustomQuestionType[] $customQuestions
     */
    private $customQuestions = null;

    /**
     * Gets as responseDue
     *
     * The date the requestor requires a response/proposal.
     *
     * @return \DateTime
     */
    public function getResponseDue()
    {
        return $this->responseDue;
    }

    /**
     * Sets a new responseDue
     *
     * The date the requestor requires a response/proposal.
     *
     * @param \DateTime $responseDue
     * @return self
     */
    public function setResponseDue(\DateTime $responseDue)
    {
        $this->responseDue = $responseDue;
        return $this;
    }

    /**
     * Gets as decisionDue
     *
     * The date the requestor intends to decide on a particular site.
     *
     * @return \DateTime
     */
    public function getDecisionDue()
    {
        return $this->decisionDue;
    }

    /**
     * Sets a new decisionDue
     *
     * The date the requestor intends to decide on a particular site.
     *
     * @param \DateTime $decisionDue
     * @return self
     */
    public function setDecisionDue(\DateTime $decisionDue)
    {
        $this->decisionDue = $decisionDue;
        return $this;
    }

    /**
     * Gets as responseFormat
     *
     * The format of the response the requestor would like to receive the response (e.g. fax, e-mail, xml). Refer to OpenTravel Code List Distribution Type (DTB).
     *
     * @return string
     */
    public function getResponseFormat()
    {
        return $this->responseFormat;
    }

    /**
     * Sets a new responseFormat
     *
     * The format of the response the requestor would like to receive the response (e.g. fax, e-mail, xml). Refer to OpenTravel Code List Distribution Type (DTB).
     *
     * @param string $responseFormat
     * @return self
     */
    public function setResponseFormat($responseFormat)
    {
        $this->responseFormat = $responseFormat;
        return $this;
    }

    /**
     * Gets as responseLanguage
     *
     * The response language the requestor would like to receive the response (e.g. English, Spanish, French).
     *
     * @return string
     */
    public function getResponseLanguage()
    {
        return $this->responseLanguage;
    }

    /**
     * Sets a new responseLanguage
     *
     * The response language the requestor would like to receive the response (e.g. English, Spanish, French).
     *
     * @param string $responseLanguage
     * @return self
     */
    public function setResponseLanguage($responseLanguage)
    {
        $this->responseLanguage = $responseLanguage;
        return $this;
    }

    /**
     * Gets as preliminaryCutIndicator
     *
     * If true, indicates a preliminary cut typically with a second review of finalists. If false, no preliminary cut.
     *
     * @return bool
     */
    public function getPreliminaryCutIndicator()
    {
        return $this->preliminaryCutIndicator;
    }

    /**
     * Sets a new preliminaryCutIndicator
     *
     * If true, indicates a preliminary cut typically with a second review of finalists. If false, no preliminary cut.
     *
     * @param bool $preliminaryCutIndicator
     * @return self
     */
    public function setPreliminaryCutIndicator($preliminaryCutIndicator)
    {
        $this->preliminaryCutIndicator = $preliminaryCutIndicator;
        return $this;
    }

    /**
     * Gets as preliminaryCutDate
     *
     * Defines the date that the preliminary cut will be made.
     *
     * @return \DateTime
     */
    public function getPreliminaryCutDate()
    {
        return $this->preliminaryCutDate;
    }

    /**
     * Sets a new preliminaryCutDate
     *
     * Defines the date that the preliminary cut will be made.
     *
     * @param \DateTime $preliminaryCutDate
     * @return self
     */
    public function setPreliminaryCutDate(\DateTime $preliminaryCutDate)
    {
        $this->preliminaryCutDate = $preliminaryCutDate;
        return $this;
    }

    /**
     * Gets as rFPDistributionDate
     *
     * Date the RFP or RFPs were distributed.
     *
     * @return \DateTime
     */
    public function getRFPDistributionDate()
    {
        return $this->rFPDistributionDate;
    }

    /**
     * Sets a new rFPDistributionDate
     *
     * Date the RFP or RFPs were distributed.
     *
     * @param \DateTime $rFPDistributionDate
     * @return self
     */
    public function setRFPDistributionDate(\DateTime $rFPDistributionDate)
    {
        $this->rFPDistributionDate = $rFPDistributionDate;
        return $this;
    }

    /**
     * Gets as rFPPublishedDate
     *
     * Date the RFP or RFPs were published.
     *
     * @return \DateTime
     */
    public function getRFPPublishedDate()
    {
        return $this->rFPPublishedDate;
    }

    /**
     * Sets a new rFPPublishedDate
     *
     * Date the RFP or RFPs were published.
     *
     * @param \DateTime $rFPPublishedDate
     * @return self
     */
    public function setRFPPublishedDate(\DateTime $rFPPublishedDate)
    {
        $this->rFPPublishedDate = $rFPPublishedDate;
        return $this;
    }

    /**
     * Gets as rFPCreationDate
     *
     * The date the RFP was created.
     *
     * @return \DateTime
     */
    public function getRFPCreationDate()
    {
        return $this->rFPCreationDate;
    }

    /**
     * Sets a new rFPCreationDate
     *
     * The date the RFP was created.
     *
     * @param \DateTime $rFPCreationDate
     * @return self
     */
    public function setRFPCreationDate(\DateTime $rFPCreationDate)
    {
        $this->rFPCreationDate = $rFPCreationDate;
        return $this;
    }

    /**
     * Adds as keyDecisionFactor
     *
     * A collection of key decision factors used in the proposal evaluation.
     *
     * @return self
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType\KeyDecisionFactorsAType\KeyDecisionFactorAType $keyDecisionFactor
     */
    public function addToKeyDecisionFactors(\Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType\KeyDecisionFactorsAType\KeyDecisionFactorAType $keyDecisionFactor)
    {
        $this->keyDecisionFactors[] = $keyDecisionFactor;
        return $this;
    }

    /**
     * isset keyDecisionFactors
     *
     * A collection of key decision factors used in the proposal evaluation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKeyDecisionFactors($index)
    {
        return isset($this->keyDecisionFactors[$index]);
    }

    /**
     * unset keyDecisionFactors
     *
     * A collection of key decision factors used in the proposal evaluation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKeyDecisionFactors($index)
    {
        unset($this->keyDecisionFactors[$index]);
    }

    /**
     * Gets as keyDecisionFactors
     *
     * A collection of key decision factors used in the proposal evaluation.
     *
     * @return \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType\KeyDecisionFactorsAType\KeyDecisionFactorAType[]
     */
    public function getKeyDecisionFactors()
    {
        return $this->keyDecisionFactors;
    }

    /**
     * Sets a new keyDecisionFactors
     *
     * A collection of key decision factors used in the proposal evaluation.
     *
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType\KeyDecisionFactorsAType\KeyDecisionFactorAType[] $keyDecisionFactors
     * @return self
     */
    public function setKeyDecisionFactors(array $keyDecisionFactors = null)
    {
        $this->keyDecisionFactors = $keyDecisionFactors;
        return $this;
    }

    /**
     * Gets as presentation
     *
     * Used to provide information on where and when the sites should present their proposals to the meeting planners.
     *
     * @return \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType\PresentationAType
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * Sets a new presentation
     *
     * Used to provide information on where and when the sites should present their proposals to the meeting planners.
     *
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType\PresentationAType $presentation
     * @return self
     */
    public function setPresentation(?\Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType\PresentationAType $presentation = null)
    {
        $this->presentation = $presentation;
        return $this;
    }

    /**
     * Adds as comments
     *
     * Comments regarding the proposal itself.
     *
     * @return self
     * @param \Recranet\OTA\ParagraphType $comments
     */
    public function addToComments(\Recranet\OTA\ParagraphType $comments)
    {
        $this->comments[] = $comments;
        return $this;
    }

    /**
     * isset comments
     *
     * Comments regarding the proposal itself.
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
     * Comments regarding the proposal itself.
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
     * Comments regarding the proposal itself.
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
     * Comments regarding the proposal itself.
     *
     * @param \Recranet\OTA\ParagraphType[] $comments
     * @return self
     */
    public function setComments(array $comments = null)
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * Adds as customQuestion
     *
     * A container for collecting custom questions and answers.
     *
     * @return self
     * @param \Recranet\OTA\CustomQuestionType $customQuestion
     */
    public function addToCustomQuestions(\Recranet\OTA\CustomQuestionType $customQuestion)
    {
        $this->customQuestions[] = $customQuestion;
        return $this;
    }

    /**
     * isset customQuestions
     *
     * A container for collecting custom questions and answers.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCustomQuestions($index)
    {
        return isset($this->customQuestions[$index]);
    }

    /**
     * unset customQuestions
     *
     * A container for collecting custom questions and answers.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCustomQuestions($index)
    {
        unset($this->customQuestions[$index]);
    }

    /**
     * Gets as customQuestions
     *
     * A container for collecting custom questions and answers.
     *
     * @return \Recranet\OTA\CustomQuestionType[]
     */
    public function getCustomQuestions()
    {
        return $this->customQuestions;
    }

    /**
     * Sets a new customQuestions
     *
     * A container for collecting custom questions and answers.
     *
     * @param \Recranet\OTA\CustomQuestionType[] $customQuestions
     * @return self
     */
    public function setCustomQuestions(array $customQuestions = null)
    {
        $this->customQuestions = $customQuestions;
        return $this;
    }
}

