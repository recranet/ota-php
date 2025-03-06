<?php

namespace Recranet\OTA\Type\DateTimeSpanType;

/**
 * Class representing StartDateWindowAType
 */
class StartDateWindowAType
{
    /**
     * The earliest ending date/time for the availability requested, expressed in dateTime format as prescribed by ISO 8601.
     *
     * @var \DateTime $earliestDate
     */
    private $earliestDate = null;

    /**
     * The latest ending date/time for the availability requested, expressed in dateTime format as prescribed by ISO 8601.
     *
     * @var \DateTime $latestDate
     */
    private $latestDate = null;

    /**
     * The Day of Week of the starting date for the availability requested. Enumerated values of StartDOW are the seven days of the week: Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, or Sunday.
     *
     * @var string $dOW
     */
    private $dOW = null;

    /**
     * Gets as earliestDate
     *
     * The earliest ending date/time for the availability requested, expressed in dateTime format as prescribed by ISO 8601.
     *
     * @return \DateTime
     */
    public function getEarliestDate()
    {
        return $this->earliestDate;
    }

    /**
     * Sets a new earliestDate
     *
     * The earliest ending date/time for the availability requested, expressed in dateTime format as prescribed by ISO 8601.
     *
     * @param \DateTime $earliestDate
     * @return self
     */
    public function setEarliestDate(\DateTime $earliestDate)
    {
        $this->earliestDate = $earliestDate;
        return $this;
    }

    /**
     * Gets as latestDate
     *
     * The latest ending date/time for the availability requested, expressed in dateTime format as prescribed by ISO 8601.
     *
     * @return \DateTime
     */
    public function getLatestDate()
    {
        return $this->latestDate;
    }

    /**
     * Sets a new latestDate
     *
     * The latest ending date/time for the availability requested, expressed in dateTime format as prescribed by ISO 8601.
     *
     * @param \DateTime $latestDate
     * @return self
     */
    public function setLatestDate(\DateTime $latestDate)
    {
        $this->latestDate = $latestDate;
        return $this;
    }

    /**
     * Gets as dOW
     *
     * The Day of Week of the starting date for the availability requested. Enumerated values of StartDOW are the seven days of the week: Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, or Sunday.
     *
     * @return string
     */
    public function getDOW()
    {
        return $this->dOW;
    }

    /**
     * Sets a new dOW
     *
     * The Day of Week of the starting date for the availability requested. Enumerated values of StartDOW are the seven days of the week: Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, or Sunday.
     *
     * @param string $dOW
     * @return self
     */
    public function setDOW($dOW)
    {
        $this->dOW = $dOW;
        return $this;
    }
}

