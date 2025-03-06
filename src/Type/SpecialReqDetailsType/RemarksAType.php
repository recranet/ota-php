<?php

namespace Recranet\OTA\Type\SpecialReqDetailsType;

/**
 * Class representing RemarksAType
 */
class RemarksAType
{
    /**
     * Supplementary information for this booking.
     *
     * @var \Recranet\OTA\Type\SpecialReqDetailsType\RemarksAType\RemarkAType[] $remark
     */
    private $remark = [
        
    ];

    /**
     * Adds as remark
     *
     * Supplementary information for this booking.
     *
     * @return self
     * @param \Recranet\OTA\Type\SpecialReqDetailsType\RemarksAType\RemarkAType $remark
     */
    public function addToRemark(\Recranet\OTA\Type\SpecialReqDetailsType\RemarksAType\RemarkAType $remark)
    {
        $this->remark[] = $remark;
        return $this;
    }

    /**
     * isset remark
     *
     * Supplementary information for this booking.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRemark($index)
    {
        return isset($this->remark[$index]);
    }

    /**
     * unset remark
     *
     * Supplementary information for this booking.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRemark($index)
    {
        unset($this->remark[$index]);
    }

    /**
     * Gets as remark
     *
     * Supplementary information for this booking.
     *
     * @return \Recranet\OTA\Type\SpecialReqDetailsType\RemarksAType\RemarkAType[]
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets a new remark
     *
     * Supplementary information for this booking.
     *
     * @param \Recranet\OTA\Type\SpecialReqDetailsType\RemarksAType\RemarkAType[] $remark
     * @return self
     */
    public function setRemark(array $remark)
    {
        $this->remark = $remark;
        return $this;
    }
}

