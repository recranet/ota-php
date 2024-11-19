<?php

namespace Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType;

/**
 * Class representing InsuranceInfosAType
 */
class InsuranceInfosAType
{
    /**
     * Indicates the type of insurance that the site carries and the coverage amount.
     *
     * @var \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\InsuranceInfosAType\InsuranceInfoAType[] $insuranceInfo
     */
    private $insuranceInfo = [
        
    ];

    /**
     * An open field to comment on insurance information.
     *
     * @var \Recranet\OTA\ParagraphType[] $comments
     */
    private $comments = [
        
    ];

    /**
     * Adds as insuranceInfo
     *
     * Indicates the type of insurance that the site carries and the coverage amount.
     *
     * @return self
     * @param \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\InsuranceInfosAType\InsuranceInfoAType $insuranceInfo
     */
    public function addToInsuranceInfo(\Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\InsuranceInfosAType\InsuranceInfoAType $insuranceInfo)
    {
        $this->insuranceInfo[] = $insuranceInfo;
        return $this;
    }

    /**
     * isset insuranceInfo
     *
     * Indicates the type of insurance that the site carries and the coverage amount.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInsuranceInfo($index)
    {
        return isset($this->insuranceInfo[$index]);
    }

    /**
     * unset insuranceInfo
     *
     * Indicates the type of insurance that the site carries and the coverage amount.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInsuranceInfo($index)
    {
        unset($this->insuranceInfo[$index]);
    }

    /**
     * Gets as insuranceInfo
     *
     * Indicates the type of insurance that the site carries and the coverage amount.
     *
     * @return \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\InsuranceInfosAType\InsuranceInfoAType[]
     */
    public function getInsuranceInfo()
    {
        return $this->insuranceInfo;
    }

    /**
     * Sets a new insuranceInfo
     *
     * Indicates the type of insurance that the site carries and the coverage amount.
     *
     * @param \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\InsuranceInfosAType\InsuranceInfoAType[] $insuranceInfo
     * @return self
     */
    public function setInsuranceInfo(array $insuranceInfo = null)
    {
        $this->insuranceInfo = $insuranceInfo;
        return $this;
    }

    /**
     * Adds as comments
     *
     * An open field to comment on insurance information.
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
     * An open field to comment on insurance information.
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
     * An open field to comment on insurance information.
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
     * An open field to comment on insurance information.
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
     * An open field to comment on insurance information.
     *
     * @param \Recranet\OTA\ParagraphType[] $comments
     * @return self
     */
    public function setComments(array $comments = null)
    {
        $this->comments = $comments;
        return $this;
    }
}

