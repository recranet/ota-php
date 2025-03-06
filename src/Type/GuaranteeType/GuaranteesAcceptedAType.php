<?php

namespace Recranet\OTA\Type\GuaranteeType;

/**
 * Class representing GuaranteesAcceptedAType
 */
class GuaranteesAcceptedAType
{
    /**
     * Guarantee Detail.
     *
     * @var \Recranet\OTA\Type\GuaranteeType\GuaranteesAcceptedAType\GuaranteeAcceptedAType[] $guaranteeAccepted
     */
    private $guaranteeAccepted = [
        
    ];

    /**
     * Adds as guaranteeAccepted
     *
     * Guarantee Detail.
     *
     * @return self
     * @param \Recranet\OTA\Type\GuaranteeType\GuaranteesAcceptedAType\GuaranteeAcceptedAType $guaranteeAccepted
     */
    public function addToGuaranteeAccepted(\Recranet\OTA\Type\GuaranteeType\GuaranteesAcceptedAType\GuaranteeAcceptedAType $guaranteeAccepted)
    {
        $this->guaranteeAccepted[] = $guaranteeAccepted;
        return $this;
    }

    /**
     * isset guaranteeAccepted
     *
     * Guarantee Detail.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuaranteeAccepted($index)
    {
        return isset($this->guaranteeAccepted[$index]);
    }

    /**
     * unset guaranteeAccepted
     *
     * Guarantee Detail.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuaranteeAccepted($index)
    {
        unset($this->guaranteeAccepted[$index]);
    }

    /**
     * Gets as guaranteeAccepted
     *
     * Guarantee Detail.
     *
     * @return \Recranet\OTA\Type\GuaranteeType\GuaranteesAcceptedAType\GuaranteeAcceptedAType[]
     */
    public function getGuaranteeAccepted()
    {
        return $this->guaranteeAccepted;
    }

    /**
     * Sets a new guaranteeAccepted
     *
     * Guarantee Detail.
     *
     * @param \Recranet\OTA\Type\GuaranteeType\GuaranteesAcceptedAType\GuaranteeAcceptedAType[] $guaranteeAccepted
     * @return self
     */
    public function setGuaranteeAccepted(array $guaranteeAccepted)
    {
        $this->guaranteeAccepted = $guaranteeAccepted;
        return $this;
    }
}

