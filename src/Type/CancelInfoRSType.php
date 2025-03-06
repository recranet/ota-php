<?php

namespace Recranet\OTA\Type;

/**
 * Class representing CancelInfoRSType
 *
 * May contain rules associated with canceling a reservation as well as the supplier's cancellation number.
 * XSD Type: CancelInfoRSType
 */
class CancelInfoRSType
{
    /**
     * A collection of cancellation rules.
     *
     * @var \Recranet\OTA\Type\CancelRuleType[] $cancelRules
     */
    private $cancelRules = null;

    /**
     * Contains the supplier's cancellation number.
     *
     * @var \Recranet\OTA\Type\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as cancelRule
     *
     * A collection of cancellation rules.
     *
     * @return self
     * @param \Recranet\OTA\Type\CancelRuleType $cancelRule
     */
    public function addToCancelRules(\Recranet\OTA\Type\CancelRuleType $cancelRule)
    {
        $this->cancelRules[] = $cancelRule;
        return $this;
    }

    /**
     * isset cancelRules
     *
     * A collection of cancellation rules.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCancelRules($index)
    {
        return isset($this->cancelRules[$index]);
    }

    /**
     * unset cancelRules
     *
     * A collection of cancellation rules.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCancelRules($index)
    {
        unset($this->cancelRules[$index]);
    }

    /**
     * Gets as cancelRules
     *
     * A collection of cancellation rules.
     *
     * @return \Recranet\OTA\Type\CancelRuleType[]
     */
    public function getCancelRules()
    {
        return $this->cancelRules;
    }

    /**
     * Sets a new cancelRules
     *
     * A collection of cancellation rules.
     *
     * @param \Recranet\OTA\Type\CancelRuleType[] $cancelRules
     * @return self
     */
    public function setCancelRules(array $cancelRules = null)
    {
        $this->cancelRules = $cancelRules;
        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * Contains the supplier's cancellation number.
     *
     * @return \Recranet\OTA\Type\UniqueIDType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * Contains the supplier's cancellation number.
     *
     * @param \Recranet\OTA\Type\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(?\Recranet\OTA\Type\UniqueIDType $uniqueID = null)
    {
        $this->uniqueID = $uniqueID;
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

