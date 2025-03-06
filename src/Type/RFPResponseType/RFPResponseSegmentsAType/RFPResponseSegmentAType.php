<?php

namespace Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType;

/**
 * Class representing RFPResponseSegmentAType
 */
class RFPResponseSegmentAType
{
    /**
     * This can be used to echo back the profile information of the submitter of the request.
     *
     * @var \Recranet\OTA\Type\ProfilesType\ProfileInfoAType[] $profiles
     */
    private $profiles = null;

    /**
     * A collection of sites that the response is being submitted for (e.g. a hotel, national sales office, convention center).
     *
     * @var \Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType[] $sites
     */
    private $sites = null;

    /**
     * This holds information that pertains to all sites requested.
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $comment
     */
    private $comment = [
        
    ];

    /**
     * This is a UniqueID that is associated with an individual RFP. This element repeats to accommodate the IDs of multiple systems.
     *
     * @var \Recranet\OTA\Type\UniqueIDType[] $rFPID
     */
    private $rFPID = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as profileInfo
     *
     * This can be used to echo back the profile information of the submitter of the request.
     *
     * @return self
     * @param \Recranet\OTA\Type\ProfilesType\ProfileInfoAType $profileInfo
     */
    public function addToProfiles(\Recranet\OTA\Type\ProfilesType\ProfileInfoAType $profileInfo)
    {
        $this->profiles[] = $profileInfo;
        return $this;
    }

    /**
     * isset profiles
     *
     * This can be used to echo back the profile information of the submitter of the request.
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
     * This can be used to echo back the profile information of the submitter of the request.
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
     * This can be used to echo back the profile information of the submitter of the request.
     *
     * @return \Recranet\OTA\Type\ProfilesType\ProfileInfoAType[]
     */
    public function getProfiles()
    {
        return $this->profiles;
    }

    /**
     * Sets a new profiles
     *
     * This can be used to echo back the profile information of the submitter of the request.
     *
     * @param \Recranet\OTA\Type\ProfilesType\ProfileInfoAType[] $profiles
     * @return self
     */
    public function setProfiles(array $profiles = null)
    {
        $this->profiles = $profiles;
        return $this;
    }

    /**
     * Adds as site
     *
     * A collection of sites that the response is being submitted for (e.g. a hotel, national sales office, convention center).
     *
     * @return self
     * @param \Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType $site
     */
    public function addToSites(\Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType $site)
    {
        $this->sites[] = $site;
        return $this;
    }

    /**
     * isset sites
     *
     * A collection of sites that the response is being submitted for (e.g. a hotel, national sales office, convention center).
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
     * A collection of sites that the response is being submitted for (e.g. a hotel, national sales office, convention center).
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
     * A collection of sites that the response is being submitted for (e.g. a hotel, national sales office, convention center).
     *
     * @return \Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType[]
     */
    public function getSites()
    {
        return $this->sites;
    }

    /**
     * Sets a new sites
     *
     * A collection of sites that the response is being submitted for (e.g. a hotel, national sales office, convention center).
     *
     * @param \Recranet\OTA\Type\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType[] $sites
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
     * This holds information that pertains to all sites requested.
     *
     * @return self
     * @param \Recranet\OTA\Type\ParagraphType $comment
     */
    public function addToComment(\Recranet\OTA\Type\ParagraphType $comment)
    {
        $this->comment[] = $comment;
        return $this;
    }

    /**
     * isset comment
     *
     * This holds information that pertains to all sites requested.
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
     * This holds information that pertains to all sites requested.
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
     * This holds information that pertains to all sites requested.
     *
     * @return \Recranet\OTA\Type\ParagraphType[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * This holds information that pertains to all sites requested.
     *
     * @param \Recranet\OTA\Type\ParagraphType[] $comment
     * @return self
     */
    public function setComment(array $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Adds as rFPID
     *
     * This is a UniqueID that is associated with an individual RFP. This element repeats to accommodate the IDs of multiple systems.
     *
     * @return self
     * @param \Recranet\OTA\Type\UniqueIDType $rFPID
     */
    public function addToRFPID(\Recranet\OTA\Type\UniqueIDType $rFPID)
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
     * @return \Recranet\OTA\Type\UniqueIDType[]
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
     * @param \Recranet\OTA\Type\UniqueIDType[] $rFPID
     * @return self
     */
    public function setRFPID(array $rFPID = null)
    {
        $this->rFPID = $rFPID;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\Type\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\Type\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

