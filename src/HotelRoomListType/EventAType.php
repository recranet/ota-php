<?php

namespace Recranet\OTA\HotelRoomListType;

/**
 * Class representing EventAType
 */
class EventAType
{
    /**
     * This is used to identify the name of the meeting.
     *
     * @var string $meetingName
     */
    private $meetingName = null;

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
     * The event organizer or host.
     *
     * @var \Recranet\OTA\ContactPersonType $eventContact
     */
    private $eventContact = null;

    /**
     * Gets as meetingName
     *
     * This is used to identify the name of the meeting.
     *
     * @return string
     */
    public function getMeetingName()
    {
        return $this->meetingName;
    }

    /**
     * Sets a new meetingName
     *
     * This is used to identify the name of the meeting.
     *
     * @param string $meetingName
     * @return self
     */
    public function setMeetingName($meetingName)
    {
        $this->meetingName = $meetingName;
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
     * Gets as eventContact
     *
     * The event organizer or host.
     *
     * @return \Recranet\OTA\ContactPersonType
     */
    public function getEventContact()
    {
        return $this->eventContact;
    }

    /**
     * Sets a new eventContact
     *
     * The event organizer or host.
     *
     * @param \Recranet\OTA\ContactPersonType $eventContact
     * @return self
     */
    public function setEventContact(\Recranet\OTA\ContactPersonType $eventContact)
    {
        $this->eventContact = $eventContact;
        return $this;
    }
}

