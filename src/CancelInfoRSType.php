<?php

namespace Recranet\OTA;

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
     * @var \Recranet\OTA\CancelRuleType[] $cancelRules
     */
    private $cancelRules = null;

    /**
     * Contains the supplier's cancellation number.
     *
     * @var \Recranet\OTA\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as cancelRule
     *
     * A collection of cancellation rules.
     *
     * @return self
     * @param \Recranet\OTA\CancelRuleType $cancelRule
     */
    public function addToCancelRules(\Recranet\OTA\CancelRuleType $cancelRule)
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
     * @return \Recranet\OTA\CancelRuleType[]
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
     * @param \Recranet\OTA\CancelRuleType[] $cancelRules
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
     * @return \Recranet\OTA\UniqueIDType
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
     * @param \Recranet\OTA\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(?\Recranet\OTA\UniqueIDType $uniqueID = null)
    {
        $this->uniqueID = $uniqueID;
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

