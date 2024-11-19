<?php

namespace Recranet\OTA\AccountSpecificInformationType;

/**
 * Class representing AccountSpecificRateInfoAType
 */
class AccountSpecificRateInfoAType
{
    /**
     * If true indicates that the client rate is based on a minimum room night target for next year's program.
     *
     * @var bool $roomNightTargetIndicator
     */
    private $roomNightTargetIndicator = null;

    /**
     * Defines minimum room nights.
     *
     * @var int $roomNightTargetQuantity
     */
    private $roomNightTargetQuantity = null;

    /**
     * Allows you to pass the number of room nights previously produced.
     *
     * @var int $roomNightProductionQuantity
     */
    private $roomNightProductionQuantity = null;

    /**
     * The starting value of the time span.
     *
     * @var \DateTime $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @var \DateTime $end
     */
    private $end = null;

    /**
     * This means the account specific rate is available to that organization's subsidiary employees.
     *
     * @var bool $subsidiaryEmpRateIndicator
     */
    private $subsidiaryEmpRateIndicator = null;

    /**
     * This means the account specific rate is available to that organization's employees for personal use.
     *
     * @var bool $personalUseRateIndicator
     */
    private $personalUseRateIndicator = null;

    /**
     * This means the account specific rate is available to that organization's contractors or consultants.
     *
     * @var bool $contractorsRateIndicator
     */
    private $contractorsRateIndicator = null;

    /**
     * This means the account specific rate is available to that organization's retirees.
     *
     * @var bool $retireeRateIndicator
     */
    private $retireeRateIndicator = null;

    /**
     * Gets as roomNightTargetIndicator
     *
     * If true indicates that the client rate is based on a minimum room night target for next year's program.
     *
     * @return bool
     */
    public function getRoomNightTargetIndicator()
    {
        return $this->roomNightTargetIndicator;
    }

    /**
     * Sets a new roomNightTargetIndicator
     *
     * If true indicates that the client rate is based on a minimum room night target for next year's program.
     *
     * @param bool $roomNightTargetIndicator
     * @return self
     */
    public function setRoomNightTargetIndicator($roomNightTargetIndicator)
    {
        $this->roomNightTargetIndicator = $roomNightTargetIndicator;
        return $this;
    }

    /**
     * Gets as roomNightTargetQuantity
     *
     * Defines minimum room nights.
     *
     * @return int
     */
    public function getRoomNightTargetQuantity()
    {
        return $this->roomNightTargetQuantity;
    }

    /**
     * Sets a new roomNightTargetQuantity
     *
     * Defines minimum room nights.
     *
     * @param int $roomNightTargetQuantity
     * @return self
     */
    public function setRoomNightTargetQuantity($roomNightTargetQuantity)
    {
        $this->roomNightTargetQuantity = $roomNightTargetQuantity;
        return $this;
    }

    /**
     * Gets as roomNightProductionQuantity
     *
     * Allows you to pass the number of room nights previously produced.
     *
     * @return int
     */
    public function getRoomNightProductionQuantity()
    {
        return $this->roomNightProductionQuantity;
    }

    /**
     * Sets a new roomNightProductionQuantity
     *
     * Allows you to pass the number of room nights previously produced.
     *
     * @param int $roomNightProductionQuantity
     * @return self
     */
    public function setRoomNightProductionQuantity($roomNightProductionQuantity)
    {
        $this->roomNightProductionQuantity = $roomNightProductionQuantity;
        return $this;
    }

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \DateTime $start
     * @return self
     */
    public function setStart(\DateTime $start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @return \DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(\DateInterval $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \DateTime $end
     * @return self
     */
    public function setEnd(\DateTime $end)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * Gets as subsidiaryEmpRateIndicator
     *
     * This means the account specific rate is available to that organization's subsidiary employees.
     *
     * @return bool
     */
    public function getSubsidiaryEmpRateIndicator()
    {
        return $this->subsidiaryEmpRateIndicator;
    }

    /**
     * Sets a new subsidiaryEmpRateIndicator
     *
     * This means the account specific rate is available to that organization's subsidiary employees.
     *
     * @param bool $subsidiaryEmpRateIndicator
     * @return self
     */
    public function setSubsidiaryEmpRateIndicator($subsidiaryEmpRateIndicator)
    {
        $this->subsidiaryEmpRateIndicator = $subsidiaryEmpRateIndicator;
        return $this;
    }

    /**
     * Gets as personalUseRateIndicator
     *
     * This means the account specific rate is available to that organization's employees for personal use.
     *
     * @return bool
     */
    public function getPersonalUseRateIndicator()
    {
        return $this->personalUseRateIndicator;
    }

    /**
     * Sets a new personalUseRateIndicator
     *
     * This means the account specific rate is available to that organization's employees for personal use.
     *
     * @param bool $personalUseRateIndicator
     * @return self
     */
    public function setPersonalUseRateIndicator($personalUseRateIndicator)
    {
        $this->personalUseRateIndicator = $personalUseRateIndicator;
        return $this;
    }

    /**
     * Gets as contractorsRateIndicator
     *
     * This means the account specific rate is available to that organization's contractors or consultants.
     *
     * @return bool
     */
    public function getContractorsRateIndicator()
    {
        return $this->contractorsRateIndicator;
    }

    /**
     * Sets a new contractorsRateIndicator
     *
     * This means the account specific rate is available to that organization's contractors or consultants.
     *
     * @param bool $contractorsRateIndicator
     * @return self
     */
    public function setContractorsRateIndicator($contractorsRateIndicator)
    {
        $this->contractorsRateIndicator = $contractorsRateIndicator;
        return $this;
    }

    /**
     * Gets as retireeRateIndicator
     *
     * This means the account specific rate is available to that organization's retirees.
     *
     * @return bool
     */
    public function getRetireeRateIndicator()
    {
        return $this->retireeRateIndicator;
    }

    /**
     * Sets a new retireeRateIndicator
     *
     * This means the account specific rate is available to that organization's retirees.
     *
     * @param bool $retireeRateIndicator
     * @return self
     */
    public function setRetireeRateIndicator($retireeRateIndicator)
    {
        $this->retireeRateIndicator = $retireeRateIndicator;
        return $this;
    }
}

