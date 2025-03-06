<?php

namespace Recranet\OTA\Type\CodeListScheduleType\OperationTimesAType;

/**
 * Class representing OperationTimeAType
 */
class OperationTimeAType
{
    /**
     * Frequency description.
     * Example: On the half hour
     *
     * @var string $frequency
     */
    private $frequency = null;

    /**
     * Period of operation description.
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Monday available indicator.
     * Example: true
     * If true, apply to Monday.
     *
     * @var bool $mon
     */
    private $mon = null;

    /**
     * Tuesday available indicator.
     * Example: true
     * If true, apply to Tuesday.
     *
     * @var bool $tue
     */
    private $tue = null;

    /**
     * Wednesday available indicator.
     * Example: true
     * If true, apply to Wednesday.
     *
     * @var bool $weds
     */
    private $weds = null;

    /**
     * Thursday available indicator.
     * Example: true
     * If true, apply to Thursday.
     *
     * @var bool $thur
     */
    private $thur = null;

    /**
     * Friday available indicator.
     * Example: true
     * If true, apply to Friday.
     *
     * @var bool $fri
     */
    private $fri = null;

    /**
     * Saturday available indicator.
     * Example: true
     * If true, apply to Saturday.
     *
     * @var bool $sat
     */
    private $sat = null;

    /**
     * Sunday available indicator.
     * Example: true
     * If true, apply to Sunday.
     *
     * @var bool $sun
     */
    private $sun = null;

    /**
     * Operation start period.
     *
     * @var \DateTime $start
     */
    private $start = null;

    /**
     * Period duration.
     * Example: P2D
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * Operation end period.
     *
     * @var \DateTime $end
     */
    private $end = null;

    /**
     * Additional operation information.
     * Example: After hours operations
     *
     * @var \Recranet\OTA\Type\ListAdditionalOperationInfoType $additionalInfo
     */
    private $additionalInfo = null;

    /**
     * Gets as frequency
     *
     * Frequency description.
     * Example: On the half hour
     *
     * @return string
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Sets a new frequency
     *
     * Frequency description.
     * Example: On the half hour
     *
     * @param string $frequency
     * @return self
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * Gets as description
     *
     * Period of operation description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Period of operation description.
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as mon
     *
     * Monday available indicator.
     * Example: true
     * If true, apply to Monday.
     *
     * @return bool
     */
    public function getMon()
    {
        return $this->mon;
    }

    /**
     * Sets a new mon
     *
     * Monday available indicator.
     * Example: true
     * If true, apply to Monday.
     *
     * @param bool $mon
     * @return self
     */
    public function setMon($mon)
    {
        $this->mon = $mon;
        return $this;
    }

    /**
     * Gets as tue
     *
     * Tuesday available indicator.
     * Example: true
     * If true, apply to Tuesday.
     *
     * @return bool
     */
    public function getTue()
    {
        return $this->tue;
    }

    /**
     * Sets a new tue
     *
     * Tuesday available indicator.
     * Example: true
     * If true, apply to Tuesday.
     *
     * @param bool $tue
     * @return self
     */
    public function setTue($tue)
    {
        $this->tue = $tue;
        return $this;
    }

    /**
     * Gets as weds
     *
     * Wednesday available indicator.
     * Example: true
     * If true, apply to Wednesday.
     *
     * @return bool
     */
    public function getWeds()
    {
        return $this->weds;
    }

    /**
     * Sets a new weds
     *
     * Wednesday available indicator.
     * Example: true
     * If true, apply to Wednesday.
     *
     * @param bool $weds
     * @return self
     */
    public function setWeds($weds)
    {
        $this->weds = $weds;
        return $this;
    }

    /**
     * Gets as thur
     *
     * Thursday available indicator.
     * Example: true
     * If true, apply to Thursday.
     *
     * @return bool
     */
    public function getThur()
    {
        return $this->thur;
    }

    /**
     * Sets a new thur
     *
     * Thursday available indicator.
     * Example: true
     * If true, apply to Thursday.
     *
     * @param bool $thur
     * @return self
     */
    public function setThur($thur)
    {
        $this->thur = $thur;
        return $this;
    }

    /**
     * Gets as fri
     *
     * Friday available indicator.
     * Example: true
     * If true, apply to Friday.
     *
     * @return bool
     */
    public function getFri()
    {
        return $this->fri;
    }

    /**
     * Sets a new fri
     *
     * Friday available indicator.
     * Example: true
     * If true, apply to Friday.
     *
     * @param bool $fri
     * @return self
     */
    public function setFri($fri)
    {
        $this->fri = $fri;
        return $this;
    }

    /**
     * Gets as sat
     *
     * Saturday available indicator.
     * Example: true
     * If true, apply to Saturday.
     *
     * @return bool
     */
    public function getSat()
    {
        return $this->sat;
    }

    /**
     * Sets a new sat
     *
     * Saturday available indicator.
     * Example: true
     * If true, apply to Saturday.
     *
     * @param bool $sat
     * @return self
     */
    public function setSat($sat)
    {
        $this->sat = $sat;
        return $this;
    }

    /**
     * Gets as sun
     *
     * Sunday available indicator.
     * Example: true
     * If true, apply to Sunday.
     *
     * @return bool
     */
    public function getSun()
    {
        return $this->sun;
    }

    /**
     * Sets a new sun
     *
     * Sunday available indicator.
     * Example: true
     * If true, apply to Sunday.
     *
     * @param bool $sun
     * @return self
     */
    public function setSun($sun)
    {
        $this->sun = $sun;
        return $this;
    }

    /**
     * Gets as start
     *
     * Operation start period.
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
     * Operation start period.
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
     * Period duration.
     * Example: P2D
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
     * Period duration.
     * Example: P2D
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
     * Operation end period.
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
     * Operation end period.
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
     * Gets as additionalInfo
     *
     * Additional operation information.
     * Example: After hours operations
     *
     * @return \Recranet\OTA\Type\ListAdditionalOperationInfoType
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * Sets a new additionalInfo
     *
     * Additional operation information.
     * Example: After hours operations
     *
     * @param \Recranet\OTA\Type\ListAdditionalOperationInfoType $additionalInfo
     * @return self
     */
    public function setAdditionalInfo(?\Recranet\OTA\Type\ListAdditionalOperationInfoType $additionalInfo = null)
    {
        $this->additionalInfo = $additionalInfo;
        return $this;
    }
}

