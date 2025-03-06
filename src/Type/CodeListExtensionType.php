<?php

namespace Recranet\OTA\Type;

/**
 * Class representing CodeListExtensionType
 *
 * Choice between summary and detailed code extension information.
 * XSD Type: CodeListExtension
 */
class CodeListExtensionType
{
    /**
     * Charge information specified indicator.
     * Example: true
     * Implementer: If true, charge information has been specified and the Detail/Charge element should be parsed.
     *
     * @var bool $chargeInd
     */
    private $chargeInd = null;

    /**
     * Proximity information specified indicator.
     * Example: true
     * Implementer: If true, proximity information has been specified and the @Proximity attribute should be parsed.
     *
     * @var bool $proximityInd
     */
    private $proximityInd = null;

    /**
     * Quantity information specified indicator.
     * Example: true
     * Implementer: If true, quantity information has been specified and the @Quantity attribute should be parsed.
     *
     * @var bool $quantityInd
     */
    private $quantityInd = null;

    /**
     * Schedule information specified indicator.
     * Example: true
     * Implementer: If true, schedule information has been specified and the Detail/Schedule element should be parsed.
     *
     * @var bool $scheduleInd
     */
    private $scheduleInd = null;

    /**
     * Summary code information.
     *
     * @var \Recranet\OTA\Type\CodeListSummaryExtensionType $summary
     */
    private $summary = null;

    /**
     * Detail code information.
     *
     * @var \Recranet\OTA\Type\CodeListDetailExtensionType $detail
     */
    private $detail = null;

    /**
     * Gets as chargeInd
     *
     * Charge information specified indicator.
     * Example: true
     * Implementer: If true, charge information has been specified and the Detail/Charge element should be parsed.
     *
     * @return bool
     */
    public function getChargeInd()
    {
        return $this->chargeInd;
    }

    /**
     * Sets a new chargeInd
     *
     * Charge information specified indicator.
     * Example: true
     * Implementer: If true, charge information has been specified and the Detail/Charge element should be parsed.
     *
     * @param bool $chargeInd
     * @return self
     */
    public function setChargeInd($chargeInd)
    {
        $this->chargeInd = $chargeInd;
        return $this;
    }

    /**
     * Gets as proximityInd
     *
     * Proximity information specified indicator.
     * Example: true
     * Implementer: If true, proximity information has been specified and the @Proximity attribute should be parsed.
     *
     * @return bool
     */
    public function getProximityInd()
    {
        return $this->proximityInd;
    }

    /**
     * Sets a new proximityInd
     *
     * Proximity information specified indicator.
     * Example: true
     * Implementer: If true, proximity information has been specified and the @Proximity attribute should be parsed.
     *
     * @param bool $proximityInd
     * @return self
     */
    public function setProximityInd($proximityInd)
    {
        $this->proximityInd = $proximityInd;
        return $this;
    }

    /**
     * Gets as quantityInd
     *
     * Quantity information specified indicator.
     * Example: true
     * Implementer: If true, quantity information has been specified and the @Quantity attribute should be parsed.
     *
     * @return bool
     */
    public function getQuantityInd()
    {
        return $this->quantityInd;
    }

    /**
     * Sets a new quantityInd
     *
     * Quantity information specified indicator.
     * Example: true
     * Implementer: If true, quantity information has been specified and the @Quantity attribute should be parsed.
     *
     * @param bool $quantityInd
     * @return self
     */
    public function setQuantityInd($quantityInd)
    {
        $this->quantityInd = $quantityInd;
        return $this;
    }

    /**
     * Gets as scheduleInd
     *
     * Schedule information specified indicator.
     * Example: true
     * Implementer: If true, schedule information has been specified and the Detail/Schedule element should be parsed.
     *
     * @return bool
     */
    public function getScheduleInd()
    {
        return $this->scheduleInd;
    }

    /**
     * Sets a new scheduleInd
     *
     * Schedule information specified indicator.
     * Example: true
     * Implementer: If true, schedule information has been specified and the Detail/Schedule element should be parsed.
     *
     * @param bool $scheduleInd
     * @return self
     */
    public function setScheduleInd($scheduleInd)
    {
        $this->scheduleInd = $scheduleInd;
        return $this;
    }

    /**
     * Gets as summary
     *
     * Summary code information.
     *
     * @return \Recranet\OTA\Type\CodeListSummaryExtensionType
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Sets a new summary
     *
     * Summary code information.
     *
     * @param \Recranet\OTA\Type\CodeListSummaryExtensionType $summary
     * @return self
     */
    public function setSummary(?\Recranet\OTA\Type\CodeListSummaryExtensionType $summary = null)
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * Gets as detail
     *
     * Detail code information.
     *
     * @return \Recranet\OTA\Type\CodeListDetailExtensionType
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Sets a new detail
     *
     * Detail code information.
     *
     * @param \Recranet\OTA\Type\CodeListDetailExtensionType $detail
     * @return self
     */
    public function setDetail(?\Recranet\OTA\Type\CodeListDetailExtensionType $detail = null)
    {
        $this->detail = $detail;
        return $this;
    }
}

