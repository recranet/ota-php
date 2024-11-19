<?php

namespace Recranet\OTA\RFPRequestSegmentsType;

/**
 * Class representing RFPRequestSegmentAType
 */
class RFPRequestSegmentAType
{
    /**
     * When true, indicates a room block is requested. When false, indicates no room block is requested and RoomBlock will not be passed.
     *
     * @var bool $roomBlockIndicator
     */
    private $roomBlockIndicator = null;

    /**
     * When true, indicates function space is required. When false, indicates no function space is required and EventBlock will not be passed.
     *
     * @var bool $eventBlockIndicator
     */
    private $eventBlockIndicator = null;

    /**
     * Used to provide details on the proposal such as the key factors that will play a role in the proposal evaluation.
     *
     * @var \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType $proposalSpecification
     */
    private $proposalSpecification = null;

    /**
     * This is who is submitting the request.
     *
     * @var \Recranet\OTA\ProfilesType\ProfileInfoAType[] $profiles
     */
    private $profiles = null;

    /**
     * A collection of dates which allows you to request preferred and/or alternate dates.
     *
     * @var \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\DatesAType $dates
     */
    private $dates = null;

    /**
     * A collection of sites for which the request is being submitted (e.g. a hotel, national sales office, convention center).
     *
     * @var \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType[] $sites
     */
    private $sites = null;

    /**
     * This is information pertaining to room requirements for this request.
     *
     * @var \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType $roomBlock
     */
    private $roomBlock = null;

    /**
     * This is information pertaining to the event requirements for this request.
     *
     * @var \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType $eventBlock
     */
    private $eventBlock = null;

    /**
     * Collection of preferences or requirements for the RFP.
     *
     * @var \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType[] $preferences
     */
    private $preferences = null;

    /**
     * A collection of individual Histories.
     *
     * @var \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType\HistoryAType[] $histories
     */
    private $histories = null;

    /**
     * OTA formatted text type
     *
     * @var \Recranet\OTA\ParagraphType[] $comments
     */
    private $comments = [
        
    ];

    /**
     * This is a UniqueID that is associated with an individual RFP. This element repeats to accommodate the IDs of multiple systems.
     *
     * @var \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\RFPIDAType[] $rFPID
     */
    private $rFPID = [
        
    ];

    /**
     * A collection of additional information requests.
     *
     * @var \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\AdditionalInfosAType\AdditionalInfoAType[] $additionalInfos
     */
    private $additionalInfos = null;

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as roomBlockIndicator
     *
     * When true, indicates a room block is requested. When false, indicates no room block is requested and RoomBlock will not be passed.
     *
     * @return bool
     */
    public function getRoomBlockIndicator()
    {
        return $this->roomBlockIndicator;
    }

    /**
     * Sets a new roomBlockIndicator
     *
     * When true, indicates a room block is requested. When false, indicates no room block is requested and RoomBlock will not be passed.
     *
     * @param bool $roomBlockIndicator
     * @return self
     */
    public function setRoomBlockIndicator($roomBlockIndicator)
    {
        $this->roomBlockIndicator = $roomBlockIndicator;
        return $this;
    }

    /**
     * Gets as eventBlockIndicator
     *
     * When true, indicates function space is required. When false, indicates no function space is required and EventBlock will not be passed.
     *
     * @return bool
     */
    public function getEventBlockIndicator()
    {
        return $this->eventBlockIndicator;
    }

    /**
     * Sets a new eventBlockIndicator
     *
     * When true, indicates function space is required. When false, indicates no function space is required and EventBlock will not be passed.
     *
     * @param bool $eventBlockIndicator
     * @return self
     */
    public function setEventBlockIndicator($eventBlockIndicator)
    {
        $this->eventBlockIndicator = $eventBlockIndicator;
        return $this;
    }

    /**
     * Gets as proposalSpecification
     *
     * Used to provide details on the proposal such as the key factors that will play a role in the proposal evaluation.
     *
     * @return \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType
     */
    public function getProposalSpecification()
    {
        return $this->proposalSpecification;
    }

    /**
     * Sets a new proposalSpecification
     *
     * Used to provide details on the proposal such as the key factors that will play a role in the proposal evaluation.
     *
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType $proposalSpecification
     * @return self
     */
    public function setProposalSpecification(?\Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\ProposalSpecificationAType $proposalSpecification = null)
    {
        $this->proposalSpecification = $proposalSpecification;
        return $this;
    }

    /**
     * Adds as profileInfo
     *
     * This is who is submitting the request.
     *
     * @return self
     * @param \Recranet\OTA\ProfilesType\ProfileInfoAType $profileInfo
     */
    public function addToProfiles(\Recranet\OTA\ProfilesType\ProfileInfoAType $profileInfo)
    {
        $this->profiles[] = $profileInfo;
        return $this;
    }

    /**
     * isset profiles
     *
     * This is who is submitting the request.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProfiles($index)
    {
        return isset($this->profiles[$index]);
    }

    /**
     * unset profiles
     *
     * This is who is submitting the request.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProfiles($index)
    {
        unset($this->profiles[$index]);
    }

    /**
     * Gets as profiles
     *
     * This is who is submitting the request.
     *
     * @return \Recranet\OTA\ProfilesType\ProfileInfoAType[]
     */
    public function getProfiles()
    {
        return $this->profiles;
    }

    /**
     * Sets a new profiles
     *
     * This is who is submitting the request.
     *
     * @param \Recranet\OTA\ProfilesType\ProfileInfoAType[] $profiles
     * @return self
     */
    public function setProfiles(array $profiles = null)
    {
        $this->profiles = $profiles;
        return $this;
    }

    /**
     * Gets as dates
     *
     * A collection of dates which allows you to request preferred and/or alternate dates.
     *
     * @return \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\DatesAType
     */
    public function getDates()
    {
        return $this->dates;
    }

    /**
     * Sets a new dates
     *
     * A collection of dates which allows you to request preferred and/or alternate dates.
     *
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\DatesAType $dates
     * @return self
     */
    public function setDates(\Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\DatesAType $dates)
    {
        $this->dates = $dates;
        return $this;
    }

    /**
     * Adds as site
     *
     * A collection of sites for which the request is being submitted (e.g. a hotel, national sales office, convention center).
     *
     * @return self
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType $site
     */
    public function addToSites(\Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType $site)
    {
        $this->sites[] = $site;
        return $this;
    }

    /**
     * isset sites
     *
     * A collection of sites for which the request is being submitted (e.g. a hotel, national sales office, convention center).
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
     * A collection of sites for which the request is being submitted (e.g. a hotel, national sales office, convention center).
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
     * A collection of sites for which the request is being submitted (e.g. a hotel, national sales office, convention center).
     *
     * @return \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType[]
     */
    public function getSites()
    {
        return $this->sites;
    }

    /**
     * Sets a new sites
     *
     * A collection of sites for which the request is being submitted (e.g. a hotel, national sales office, convention center).
     *
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType[] $sites
     * @return self
     */
    public function setSites(array $sites = null)
    {
        $this->sites = $sites;
        return $this;
    }

    /**
     * Gets as roomBlock
     *
     * This is information pertaining to room requirements for this request.
     *
     * @return \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType
     */
    public function getRoomBlock()
    {
        return $this->roomBlock;
    }

    /**
     * Sets a new roomBlock
     *
     * This is information pertaining to room requirements for this request.
     *
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType $roomBlock
     * @return self
     */
    public function setRoomBlock(?\Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\RoomBlockAType $roomBlock = null)
    {
        $this->roomBlock = $roomBlock;
        return $this;
    }

    /**
     * Gets as eventBlock
     *
     * This is information pertaining to the event requirements for this request.
     *
     * @return \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType
     */
    public function getEventBlock()
    {
        return $this->eventBlock;
    }

    /**
     * Sets a new eventBlock
     *
     * This is information pertaining to the event requirements for this request.
     *
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType $eventBlock
     * @return self
     */
    public function setEventBlock(?\Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType $eventBlock = null)
    {
        $this->eventBlock = $eventBlock;
        return $this;
    }

    /**
     * Adds as preference
     *
     * Collection of preferences or requirements for the RFP.
     *
     * @return self
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType $preference
     */
    public function addToPreferences(\Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType $preference)
    {
        $this->preferences[] = $preference;
        return $this;
    }

    /**
     * isset preferences
     *
     * Collection of preferences or requirements for the RFP.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPreferences($index)
    {
        return isset($this->preferences[$index]);
    }

    /**
     * unset preferences
     *
     * Collection of preferences or requirements for the RFP.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPreferences($index)
    {
        unset($this->preferences[$index]);
    }

    /**
     * Gets as preferences
     *
     * Collection of preferences or requirements for the RFP.
     *
     * @return \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType[]
     */
    public function getPreferences()
    {
        return $this->preferences;
    }

    /**
     * Sets a new preferences
     *
     * Collection of preferences or requirements for the RFP.
     *
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType[] $preferences
     * @return self
     */
    public function setPreferences(array $preferences = null)
    {
        $this->preferences = $preferences;
        return $this;
    }

    /**
     * Adds as history
     *
     * A collection of individual Histories.
     *
     * @return self
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType\HistoryAType $history
     */
    public function addToHistories(\Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType\HistoryAType $history)
    {
        $this->histories[] = $history;
        return $this;
    }

    /**
     * isset histories
     *
     * A collection of individual Histories.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHistories($index)
    {
        return isset($this->histories[$index]);
    }

    /**
     * unset histories
     *
     * A collection of individual Histories.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHistories($index)
    {
        unset($this->histories[$index]);
    }

    /**
     * Gets as histories
     *
     * A collection of individual Histories.
     *
     * @return \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType\HistoryAType[]
     */
    public function getHistories()
    {
        return $this->histories;
    }

    /**
     * Sets a new histories
     *
     * A collection of individual Histories.
     *
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType\HistoryAType[] $histories
     * @return self
     */
    public function setHistories(array $histories = null)
    {
        $this->histories = $histories;
        return $this;
    }

    /**
     * Adds as comments
     *
     * OTA formatted text type
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
     * OTA formatted text type
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
     * OTA formatted text type
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
     * OTA formatted text type
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
     * OTA formatted text type
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
     * Adds as rFPID
     *
     * This is a UniqueID that is associated with an individual RFP. This element repeats to accommodate the IDs of multiple systems.
     *
     * @return self
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\RFPIDAType $rFPID
     */
    public function addToRFPID(\Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\RFPIDAType $rFPID)
    {
        $this->rFPID[] = $rFPID;
        return $this;
    }

    /**
     * isset rFPID
     *
     * This is a UniqueID that is associated with an individual RFP. This element repeats to accommodate the IDs of multiple systems.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRFPID($index)
    {
        return isset($this->rFPID[$index]);
    }

    /**
     * unset rFPID
     *
     * This is a UniqueID that is associated with an individual RFP. This element repeats to accommodate the IDs of multiple systems.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRFPID($index)
    {
        unset($this->rFPID[$index]);
    }

    /**
     * Gets as rFPID
     *
     * This is a UniqueID that is associated with an individual RFP. This element repeats to accommodate the IDs of multiple systems.
     *
     * @return \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\RFPIDAType[]
     */
    public function getRFPID()
    {
        return $this->rFPID;
    }

    /**
     * Sets a new rFPID
     *
     * This is a UniqueID that is associated with an individual RFP. This element repeats to accommodate the IDs of multiple systems.
     *
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\RFPIDAType[] $rFPID
     * @return self
     */
    public function setRFPID(array $rFPID = null)
    {
        $this->rFPID = $rFPID;
        return $this;
    }

    /**
     * Adds as additionalInfo
     *
     * A collection of additional information requests.
     *
     * @return self
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\AdditionalInfosAType\AdditionalInfoAType $additionalInfo
     */
    public function addToAdditionalInfos(\Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\AdditionalInfosAType\AdditionalInfoAType $additionalInfo)
    {
        $this->additionalInfos[] = $additionalInfo;
        return $this;
    }

    /**
     * isset additionalInfos
     *
     * A collection of additional information requests.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalInfos($index)
    {
        return isset($this->additionalInfos[$index]);
    }

    /**
     * unset additionalInfos
     *
     * A collection of additional information requests.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalInfos($index)
    {
        unset($this->additionalInfos[$index]);
    }

    /**
     * Gets as additionalInfos
     *
     * A collection of additional information requests.
     *
     * @return \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\AdditionalInfosAType\AdditionalInfoAType[]
     */
    public function getAdditionalInfos()
    {
        return $this->additionalInfos;
    }

    /**
     * Sets a new additionalInfos
     *
     * A collection of additional information requests.
     *
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\AdditionalInfosAType\AdditionalInfoAType[] $additionalInfos
     * @return self
     */
    public function setAdditionalInfos(array $additionalInfos = null)
    {
        $this->additionalInfos = $additionalInfos;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

