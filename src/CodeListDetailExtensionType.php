<?php

namespace Recranet\OTA;

/**
 * Class representing CodeListDetailExtensionType
 *
 * Detail Code List extension structure that includes all Summary information plus quantity, proximity, charge, schedule and apply to level information.
 * XSD Type: CodeListDetailExtension
 */
class CodeListDetailExtensionType extends CodeListSummaryExtensionType
{
    /**
     * Associated quantity for the item.
     * Example: 2
     *
     * @var int $quantity
     */
    private $quantity = null;

    /**
     * Associated proximity for the item.
     * Example: 2
     *
     * @var string $proximity
     */
    private $proximity = null;

    /**
     * Applicable item level.
     * Example: Property
     *
     * @var \Recranet\OTA\ListApplyToLevelType[] $applyToLevel
     */
    private $applyToLevel = [
        
    ];

    /**
     * Associated charge information.
     *
     * @var \Recranet\OTA\CodeListFeeType[] $charge
     */
    private $charge = [
        
    ];

    /**
     * Associated service schedule information.
     *
     * @var \Recranet\OTA\CodeListScheduleType[] $schedule
     */
    private $schedule = [
        
    ];

    /**
     * Gets as quantity
     *
     * Associated quantity for the item.
     * Example: 2
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Associated quantity for the item.
     * Example: 2
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as proximity
     *
     * Associated proximity for the item.
     * Example: 2
     *
     * @return string
     */
    public function getProximity()
    {
        return $this->proximity;
    }

    /**
     * Sets a new proximity
     *
     * Associated proximity for the item.
     * Example: 2
     *
     * @param string $proximity
     * @return self
     */
    public function setProximity($proximity)
    {
        $this->proximity = $proximity;
        return $this;
    }

    /**
     * Adds as applyToLevel
     *
     * Applicable item level.
     * Example: Property
     *
     * @return self
     * @param \Recranet\OTA\ListApplyToLevelType $applyToLevel
     */
    public function addToApplyToLevel(\Recranet\OTA\ListApplyToLevelType $applyToLevel)
    {
        $this->applyToLevel[] = $applyToLevel;
        return $this;
    }

    /**
     * isset applyToLevel
     *
     * Applicable item level.
     * Example: Property
     *
     * @param int|string $index
     * @return bool
     */
    public function issetApplyToLevel($index)
    {
        return isset($this->applyToLevel[$index]);
    }

    /**
     * unset applyToLevel
     *
     * Applicable item level.
     * Example: Property
     *
     * @param int|string $index
     * @return void
     */
    public function unsetApplyToLevel($index)
    {
        unset($this->applyToLevel[$index]);
    }

    /**
     * Gets as applyToLevel
     *
     * Applicable item level.
     * Example: Property
     *
     * @return \Recranet\OTA\ListApplyToLevelType[]
     */
    public function getApplyToLevel()
    {
        return $this->applyToLevel;
    }

    /**
     * Sets a new applyToLevel
     *
     * Applicable item level.
     * Example: Property
     *
     * @param \Recranet\OTA\ListApplyToLevelType[] $applyToLevel
     * @return self
     */
    public function setApplyToLevel(array $applyToLevel = null)
    {
        $this->applyToLevel = $applyToLevel;
        return $this;
    }

    /**
     * Adds as charge
     *
     * Associated charge information.
     *
     * @return self
     * @param \Recranet\OTA\CodeListFeeType $charge
     */
    public function addToCharge(\Recranet\OTA\CodeListFeeType $charge)
    {
        $this->charge[] = $charge;
        return $this;
    }

    /**
     * isset charge
     *
     * Associated charge information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCharge($index)
    {
        return isset($this->charge[$index]);
    }

    /**
     * unset charge
     *
     * Associated charge information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCharge($index)
    {
        unset($this->charge[$index]);
    }

    /**
     * Gets as charge
     *
     * Associated charge information.
     *
     * @return \Recranet\OTA\CodeListFeeType[]
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Sets a new charge
     *
     * Associated charge information.
     *
     * @param \Recranet\OTA\CodeListFeeType[] $charge
     * @return self
     */
    public function setCharge(array $charge = null)
    {
        $this->charge = $charge;
        return $this;
    }

    /**
     * Adds as schedule
     *
     * Associated service schedule information.
     *
     * @return self
     * @param \Recranet\OTA\CodeListScheduleType $schedule
     */
    public function addToSchedule(\Recranet\OTA\CodeListScheduleType $schedule)
    {
        $this->schedule[] = $schedule;
        return $this;
    }

    /**
     * isset schedule
     *
     * Associated service schedule information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSchedule($index)
    {
        return isset($this->schedule[$index]);
    }

    /**
     * unset schedule
     *
     * Associated service schedule information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSchedule($index)
    {
        unset($this->schedule[$index]);
    }

    /**
     * Gets as schedule
     *
     * Associated service schedule information.
     *
     * @return \Recranet\OTA\CodeListScheduleType[]
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Sets a new schedule
     *
     * Associated service schedule information.
     *
     * @param \Recranet\OTA\CodeListScheduleType[] $schedule
     * @return self
     */
    public function setSchedule(array $schedule = null)
    {
        $this->schedule = $schedule;
        return $this;
    }
}

