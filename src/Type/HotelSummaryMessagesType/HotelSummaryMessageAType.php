<?php

namespace Recranet\OTA\Type\HotelSummaryMessagesType;

/**
 * Class representing HotelSummaryMessageAType
 */
class HotelSummaryMessageAType
{
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
     * Descibes the status of the inventory (Closed, Open or On Request).
     *
     * @var string $statusType
     */
    private $statusType = null;

    /**
     * Used in conjuction with the "closed" enumeration of the StatusType attribute to indicate "Closed to arrival" state. The StatusType should be "Closed" and the boolean should be set to true to indicate the closed to arrival condition.
     *
     * @var bool $arrivalsOnlyFlag
     */
    private $arrivalsOnlyFlag = null;

    /**
     * The minimum rate that may be available at the hotel.
     *
     * @var \Recranet\OTA\Type\HotelSummaryMessagesType\HotelSummaryMessageAType\RateMinAType $rateMin
     */
    private $rateMin = null;

    /**
     * The maximum rate that may be available at the hotel.
     *
     * @var \Recranet\OTA\Type\HotelSummaryMessagesType\HotelSummaryMessageAType\RateMaxAType $rateMax
     */
    private $rateMax = null;

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
     * Gets as statusType
     *
     * Descibes the status of the inventory (Closed, Open or On Request).
     *
     * @return string
     */
    public function getStatusType()
    {
        return $this->statusType;
    }

    /**
     * Sets a new statusType
     *
     * Descibes the status of the inventory (Closed, Open or On Request).
     *
     * @param string $statusType
     * @return self
     */
    public function setStatusType($statusType)
    {
        $this->statusType = $statusType;
        return $this;
    }

    /**
     * Gets as arrivalsOnlyFlag
     *
     * Used in conjuction with the "closed" enumeration of the StatusType attribute to indicate "Closed to arrival" state. The StatusType should be "Closed" and the boolean should be set to true to indicate the closed to arrival condition.
     *
     * @return bool
     */
    public function getArrivalsOnlyFlag()
    {
        return $this->arrivalsOnlyFlag;
    }

    /**
     * Sets a new arrivalsOnlyFlag
     *
     * Used in conjuction with the "closed" enumeration of the StatusType attribute to indicate "Closed to arrival" state. The StatusType should be "Closed" and the boolean should be set to true to indicate the closed to arrival condition.
     *
     * @param bool $arrivalsOnlyFlag
     * @return self
     */
    public function setArrivalsOnlyFlag($arrivalsOnlyFlag)
    {
        $this->arrivalsOnlyFlag = $arrivalsOnlyFlag;
        return $this;
    }

    /**
     * Gets as rateMin
     *
     * The minimum rate that may be available at the hotel.
     *
     * @return \Recranet\OTA\Type\HotelSummaryMessagesType\HotelSummaryMessageAType\RateMinAType
     */
    public function getRateMin()
    {
        return $this->rateMin;
    }

    /**
     * Sets a new rateMin
     *
     * The minimum rate that may be available at the hotel.
     *
     * @param \Recranet\OTA\Type\HotelSummaryMessagesType\HotelSummaryMessageAType\RateMinAType $rateMin
     * @return self
     */
    public function setRateMin(?\Recranet\OTA\Type\HotelSummaryMessagesType\HotelSummaryMessageAType\RateMinAType $rateMin = null)
    {
        $this->rateMin = $rateMin;
        return $this;
    }

    /**
     * Gets as rateMax
     *
     * The maximum rate that may be available at the hotel.
     *
     * @return \Recranet\OTA\Type\HotelSummaryMessagesType\HotelSummaryMessageAType\RateMaxAType
     */
    public function getRateMax()
    {
        return $this->rateMax;
    }

    /**
     * Sets a new rateMax
     *
     * The maximum rate that may be available at the hotel.
     *
     * @param \Recranet\OTA\Type\HotelSummaryMessagesType\HotelSummaryMessageAType\RateMaxAType $rateMax
     * @return self
     */
    public function setRateMax(?\Recranet\OTA\Type\HotelSummaryMessagesType\HotelSummaryMessageAType\RateMaxAType $rateMax = null)
    {
        $this->rateMax = $rateMax;
        return $this;
    }
}

