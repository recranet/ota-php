<?php

namespace Recranet\OTA\Type\PoliciesType\PolicyAType\StayRequirementsAType;

/**
 * Class representing StayRequirementAType
 */
class StayRequirementAType
{
    /**
     * When true, apply to Monday.
     *
     * @var bool $mon
     */
    private $mon = null;

    /**
     * When true, apply to Tuesday.
     *
     * @var bool $tue
     */
    private $tue = null;

    /**
     * When true, apply to Wednesday.
     *
     * @var bool $weds
     */
    private $weds = null;

    /**
     * When true, apply to Thursday.
     *
     * @var bool $thur
     */
    private $thur = null;

    /**
     * When true, apply to Friday.
     *
     * @var bool $fri
     */
    private $fri = null;

    /**
     * When true, apply to Saturday.
     *
     * @var bool $sat
     */
    private $sat = null;

    /**
     * When true, apply to Sunday.
     *
     * @var bool $sun
     */
    private $sun = null;

    /**
     * Indicates the minimum length of stay.
     *
     * @var int $minLOS
     */
    private $minLOS = null;

    /**
     * Indicates the maximum length of stay.
     *
     * @var int $maxLOS
     */
    private $maxLOS = null;

    /**
     * Used to designate available check-in or check-out days of week. Used in conjunction with the days of week attributes.
     *
     * @var string $stayContext
     */
    private $stayContext = null;

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
     * Provides additional information regarding stay requirements.
     *
     * @var \Recranet\OTA\Type\ParagraphType $description
     */
    private $description = null;

    /**
     * Gets as mon
     *
     * When true, apply to Monday.
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
     * When true, apply to Monday.
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
     * When true, apply to Tuesday.
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
     * When true, apply to Tuesday.
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
     * When true, apply to Wednesday.
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
     * When true, apply to Wednesday.
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
     * When true, apply to Thursday.
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
     * When true, apply to Thursday.
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
     * When true, apply to Friday.
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
     * When true, apply to Friday.
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
     * When true, apply to Saturday.
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
     * When true, apply to Saturday.
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
     * When true, apply to Sunday.
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
     * When true, apply to Sunday.
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
     * Gets as minLOS
     *
     * Indicates the minimum length of stay.
     *
     * @return int
     */
    public function getMinLOS()
    {
        return $this->minLOS;
    }

    /**
     * Sets a new minLOS
     *
     * Indicates the minimum length of stay.
     *
     * @param int $minLOS
     * @return self
     */
    public function setMinLOS($minLOS)
    {
        $this->minLOS = $minLOS;
        return $this;
    }

    /**
     * Gets as maxLOS
     *
     * Indicates the maximum length of stay.
     *
     * @return int
     */
    public function getMaxLOS()
    {
        return $this->maxLOS;
    }

    /**
     * Sets a new maxLOS
     *
     * Indicates the maximum length of stay.
     *
     * @param int $maxLOS
     * @return self
     */
    public function setMaxLOS($maxLOS)
    {
        $this->maxLOS = $maxLOS;
        return $this;
    }

    /**
     * Gets as stayContext
     *
     * Used to designate available check-in or check-out days of week. Used in conjunction with the days of week attributes.
     *
     * @return string
     */
    public function getStayContext()
    {
        return $this->stayContext;
    }

    /**
     * Sets a new stayContext
     *
     * Used to designate available check-in or check-out days of week. Used in conjunction with the days of week attributes.
     *
     * @param string $stayContext
     * @return self
     */
    public function setStayContext($stayContext)
    {
        $this->stayContext = $stayContext;
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
     * Gets as description
     *
     * Provides additional information regarding stay requirements.
     *
     * @return \Recranet\OTA\Type\ParagraphType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Provides additional information regarding stay requirements.
     *
     * @param \Recranet\OTA\Type\ParagraphType $description
     * @return self
     */
    public function setDescription(?\Recranet\OTA\Type\ParagraphType $description = null)
    {
        $this->description = $description;
        return $this;
    }
}

