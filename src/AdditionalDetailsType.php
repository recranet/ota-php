<?php

namespace Recranet\OTA;

/**
 * Class representing AdditionalDetailsType
 *
 * A collection of AdditionalDetail.
 * XSD Type: AdditionalDetailsType
 */
class AdditionalDetailsType
{
    /**
     * Used to send additional information.
     *
     * @var \Recranet\OTA\AdditionalDetailType[] $additionalDetail
     */
    private $additionalDetail = [
        
    ];

    /**
     * Adds as additionalDetail
     *
     * Used to send additional information.
     *
     * @return self
     * @param \Recranet\OTA\AdditionalDetailType $additionalDetail
     */
    public function addToAdditionalDetail(\Recranet\OTA\AdditionalDetailType $additionalDetail)
    {
        $this->additionalDetail[] = $additionalDetail;
        return $this;
    }

    /**
     * isset additionalDetail
     *
     * Used to send additional information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalDetail($index)
    {
        return isset($this->additionalDetail[$index]);
    }

    /**
     * unset additionalDetail
     *
     * Used to send additional information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalDetail($index)
    {
        unset($this->additionalDetail[$index]);
    }

    /**
     * Gets as additionalDetail
     *
     * Used to send additional information.
     *
     * @return \Recranet\OTA\AdditionalDetailType[]
     */
    public function getAdditionalDetail()
    {
        return $this->additionalDetail;
    }

    /**
     * Sets a new additionalDetail
     *
     * Used to send additional information.
     *
     * @param \Recranet\OTA\AdditionalDetailType[] $additionalDetail
     * @return self
     */
    public function setAdditionalDetail(array $additionalDetail)
    {
        $this->additionalDetail = $additionalDetail;
        return $this;
    }
}

