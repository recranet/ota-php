<?php

namespace Recranet\OTA\Type\EventType;

/**
 * Class representing EventAType
 */
class EventAType
{
    /**
     * Identifies the name of the event.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Identifies an acronym for the event.
     *
     * @var string $acronym
     */
    private $acronym = null;

    /**
     * Identifies a web site associated with the event.
     *
     * @var string $uRL
     */
    private $uRL = null;

    /**
     * Identifies the type of event (e.g., Board Meeting, Trade Show). Refer to OpenTravel Code List Event Type (ETT).
     *
     * @var string $type
     */
    private $type = null;

    /**
     * Used to indicate the frequency of this event.
     *
     * @var string $frequency
     */
    private $frequency = null;

    /**
     * When true, the attendees are required to attend this event. When false, attendance at the event is optional.
     *
     * @var bool $mandatoryIndicator
     */
    private $mandatoryIndicator = null;

    /**
     * When true, the attendees spouses are invited to the event.
     *
     * @var bool $spouseInvitedIndicator
     */
    private $spouseInvitedIndicator = null;

    /**
     * When true, the attendees children are invited to the event.
     *
     * @var bool $childrenInvitedIndicator
     */
    private $childrenInvitedIndicator = null;

    /**
     * Defines the size of the event by identifying if one or multiple venues are needed for the event.
     *
     * @var string $scope
     */
    private $scope = null;

    /**
     * When true, indicates the event requires a move-in or set-up prior to the actual start of the event.
     *
     * @var bool $preEventSetUpIndicator
     */
    private $preEventSetUpIndicator = null;

    /**
     * Identifies the contractor responsible for the pre-event setup.
     *
     * @var string $preEventSetUpContractor
     */
    private $preEventSetUpContractor = null;

    /**
     * The status of the event (e.g., definite, tentative, cancelled).
     *
     * @var string $status
     */
    private $status = null;

    /**
     * A collection of contacts associated with the event.
     *
     * @var \Recranet\OTA\Type\EventType\EventAType\ContactsAType\ContactAType[] $contacts
     */
    private $contacts = null;

    /**
     * The number of attendees to the event.
     *
     * @var \Recranet\OTA\Type\EventType\EventAType\AttendeeInfoAType $attendeeInfo
     */
    private $attendeeInfo = null;

    /**
     * A collection of event infos.
     *
     * @var \Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType[] $eventInfos
     */
    private $eventInfos = null;

    /**
     * A collection of sites.
     *
     * @var \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType[] $sites
     */
    private $sites = null;

    /**
     * A collection of comments pertaining to the event.
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * A container for collecting custom questions and answers.
     *
     * @var \Recranet\OTA\Type\CustomQuestionType[] $customQuestions
     */
    private $customQuestions = null;

    /**
     * Gets as name
     *
     * Identifies the name of the event.
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
     * Identifies the name of the event.
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
     * Gets as acronym
     *
     * Identifies an acronym for the event.
     *
     * @return string
     */
    public function getAcronym()
    {
        return $this->acronym;
    }

    /**
     * Sets a new acronym
     *
     * Identifies an acronym for the event.
     *
     * @param string $acronym
     * @return self
     */
    public function setAcronym($acronym)
    {
        $this->acronym = $acronym;
        return $this;
    }

    /**
     * Gets as uRL
     *
     * Identifies a web site associated with the event.
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
     * Identifies a web site associated with the event.
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
     * Gets as type
     *
     * Identifies the type of event (e.g., Board Meeting, Trade Show). Refer to OpenTravel Code List Event Type (ETT).
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Identifies the type of event (e.g., Board Meeting, Trade Show). Refer to OpenTravel Code List Event Type (ETT).
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as frequency
     *
     * Used to indicate the frequency of this event.
     *
     * @return string
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Sets a new frequency
     *
     * Used to indicate the frequency of this event.
     *
     * @param string $frequency
     * @return self
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * Gets as mandatoryIndicator
     *
     * When true, the attendees are required to attend this event. When false, attendance at the event is optional.
     *
     * @return bool
     */
    public function getMandatoryIndicator()
    {
        return $this->mandatoryIndicator;
    }

    /**
     * Sets a new mandatoryIndicator
     *
     * When true, the attendees are required to attend this event. When false, attendance at the event is optional.
     *
     * @param bool $mandatoryIndicator
     * @return self
     */
    public function setMandatoryIndicator($mandatoryIndicator)
    {
        $this->mandatoryIndicator = $mandatoryIndicator;
        return $this;
    }

    /**
     * Gets as spouseInvitedIndicator
     *
     * When true, the attendees spouses are invited to the event.
     *
     * @return bool
     */
    public function getSpouseInvitedIndicator()
    {
        return $this->spouseInvitedIndicator;
    }

    /**
     * Sets a new spouseInvitedIndicator
     *
     * When true, the attendees spouses are invited to the event.
     *
     * @param bool $spouseInvitedIndicator
     * @return self
     */
    public function setSpouseInvitedIndicator($spouseInvitedIndicator)
    {
        $this->spouseInvitedIndicator = $spouseInvitedIndicator;
        return $this;
    }

    /**
     * Gets as childrenInvitedIndicator
     *
     * When true, the attendees children are invited to the event.
     *
     * @return bool
     */
    public function getChildrenInvitedIndicator()
    {
        return $this->childrenInvitedIndicator;
    }

    /**
     * Sets a new childrenInvitedIndicator
     *
     * When true, the attendees children are invited to the event.
     *
     * @param bool $childrenInvitedIndicator
     * @return self
     */
    public function setChildrenInvitedIndicator($childrenInvitedIndicator)
    {
        $this->childrenInvitedIndicator = $childrenInvitedIndicator;
        return $this;
    }

    /**
     * Gets as scope
     *
     * Defines the size of the event by identifying if one or multiple venues are needed for the event.
     *
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Sets a new scope
     *
     * Defines the size of the event by identifying if one or multiple venues are needed for the event.
     *
     * @param string $scope
     * @return self
     */
    public function setScope($scope)
    {
        $this->scope = $scope;
        return $this;
    }

    /**
     * Gets as preEventSetUpIndicator
     *
     * When true, indicates the event requires a move-in or set-up prior to the actual start of the event.
     *
     * @return bool
     */
    public function getPreEventSetUpIndicator()
    {
        return $this->preEventSetUpIndicator;
    }

    /**
     * Sets a new preEventSetUpIndicator
     *
     * When true, indicates the event requires a move-in or set-up prior to the actual start of the event.
     *
     * @param bool $preEventSetUpIndicator
     * @return self
     */
    public function setPreEventSetUpIndicator($preEventSetUpIndicator)
    {
        $this->preEventSetUpIndicator = $preEventSetUpIndicator;
        return $this;
    }

    /**
     * Gets as preEventSetUpContractor
     *
     * Identifies the contractor responsible for the pre-event setup.
     *
     * @return string
     */
    public function getPreEventSetUpContractor()
    {
        return $this->preEventSetUpContractor;
    }

    /**
     * Sets a new preEventSetUpContractor
     *
     * Identifies the contractor responsible for the pre-event setup.
     *
     * @param string $preEventSetUpContractor
     * @return self
     */
    public function setPreEventSetUpContractor($preEventSetUpContractor)
    {
        $this->preEventSetUpContractor = $preEventSetUpContractor;
        return $this;
    }

    /**
     * Gets as status
     *
     * The status of the event (e.g., definite, tentative, cancelled).
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * The status of the event (e.g., definite, tentative, cancelled).
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as contact
     *
     * A collection of contacts associated with the event.
     *
     * @return self
     * @param \Recranet\OTA\Type\EventType\EventAType\ContactsAType\ContactAType $contact
     */
    public function addToContacts(\Recranet\OTA\Type\EventType\EventAType\ContactsAType\ContactAType $contact)
    {
        $this->contacts[] = $contact;
        return $this;
    }

    /**
     * isset contacts
     *
     * A collection of contacts associated with the event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContacts($index)
    {
        return isset($this->contacts[$index]);
    }

    /**
     * unset contacts
     *
     * A collection of contacts associated with the event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContacts($index)
    {
        unset($this->contacts[$index]);
    }

    /**
     * Gets as contacts
     *
     * A collection of contacts associated with the event.
     *
     * @return \Recranet\OTA\Type\EventType\EventAType\ContactsAType\ContactAType[]
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Sets a new contacts
     *
     * A collection of contacts associated with the event.
     *
     * @param \Recranet\OTA\Type\EventType\EventAType\ContactsAType\ContactAType[] $contacts
     * @return self
     */
    public function setContacts(array $contacts = null)
    {
        $this->contacts = $contacts;
        return $this;
    }

    /**
     * Gets as attendeeInfo
     *
     * The number of attendees to the event.
     *
     * @return \Recranet\OTA\Type\EventType\EventAType\AttendeeInfoAType
     */
    public function getAttendeeInfo()
    {
        return $this->attendeeInfo;
    }

    /**
     * Sets a new attendeeInfo
     *
     * The number of attendees to the event.
     *
     * @param \Recranet\OTA\Type\EventType\EventAType\AttendeeInfoAType $attendeeInfo
     * @return self
     */
    public function setAttendeeInfo(?\Recranet\OTA\Type\EventType\EventAType\AttendeeInfoAType $attendeeInfo = null)
    {
        $this->attendeeInfo = $attendeeInfo;
        return $this;
    }

    /**
     * Adds as eventInfo
     *
     * A collection of event infos.
     *
     * @return self
     * @param \Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType $eventInfo
     */
    public function addToEventInfos(\Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType $eventInfo)
    {
        $this->eventInfos[] = $eventInfo;
        return $this;
    }

    /**
     * isset eventInfos
     *
     * A collection of event infos.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEventInfos($index)
    {
        return isset($this->eventInfos[$index]);
    }

    /**
     * unset eventInfos
     *
     * A collection of event infos.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEventInfos($index)
    {
        unset($this->eventInfos[$index]);
    }

    /**
     * Gets as eventInfos
     *
     * A collection of event infos.
     *
     * @return \Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType[]
     */
    public function getEventInfos()
    {
        return $this->eventInfos;
    }

    /**
     * Sets a new eventInfos
     *
     * A collection of event infos.
     *
     * @param \Recranet\OTA\Type\EventType\EventAType\EventInfosAType\EventInfoAType[] $eventInfos
     * @return self
     */
    public function setEventInfos(array $eventInfos = null)
    {
        $this->eventInfos = $eventInfos;
        return $this;
    }

    /**
     * Adds as site
     *
     * A collection of sites.
     *
     * @return self
     * @param \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType $site
     */
    public function addToSites(\Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType $site)
    {
        $this->sites[] = $site;
        return $this;
    }

    /**
     * isset sites
     *
     * A collection of sites.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSites($index)
    {
        return isset($this->sites[$index]);
    }

    /**
     * unset sites
     *
     * A collection of sites.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSites($index)
    {
        unset($this->sites[$index]);
    }

    /**
     * Gets as sites
     *
     * A collection of sites.
     *
     * @return \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType[]
     */
    public function getSites()
    {
        return $this->sites;
    }

    /**
     * Sets a new sites
     *
     * A collection of sites.
     *
     * @param \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType[] $sites
     * @return self
     */
    public function setSites(array $sites = null)
    {
        $this->sites = $sites;
        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of comments pertaining to the event.
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
     * A collection of comments pertaining to the event.
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
     * A collection of comments pertaining to the event.
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
     * A collection of comments pertaining to the event.
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
     * A collection of comments pertaining to the event.
     *
     * @param \Recranet\OTA\Type\ParagraphType[] $comments
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
     * @param \Recranet\OTA\Type\CustomQuestionType $customQuestion
     */
    public function addToCustomQuestions(\Recranet\OTA\Type\CustomQuestionType $customQuestion)
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
     * @return \Recranet\OTA\Type\CustomQuestionType[]
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
     * @param \Recranet\OTA\Type\CustomQuestionType[] $customQuestions
     * @return self
     */
    public function setCustomQuestions(array $customQuestions = null)
    {
        $this->customQuestions = $customQuestions;
        return $this;
    }
}

