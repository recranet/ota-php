<?php

namespace Recranet\OTA\Type;

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
     * @var \Recranet\OTA\Type\AdditionalDetailType[] $additionalDetail
     */
    private $additionalDetail = [
        
    ];

    /**
     * Adds as additionalDetail
     *
     * Used to send additional information.
     *
     * @return self
     * @param \Recranet\OTA\Type\AdditionalDetailType $additionalDetail
     */
    public function addToAdditionalDetail(\Recranet\OTA\Type\AdditionalDetailType $additionalDetail)
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
     * @return \Recranet\OTA\Type\AdditionalDetailType[]
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
     * @param \Recranet\OTA\Type\AdditionalDetailType[] $additionalDetail
     * @return self
     */
    public function setAdditionalDetail(array $additionalDetail)
    {
        $this->additionalDetail = $additionalDetail;
        return $this;
    }
}

