<?php

namespace Recranet\OTA;

/**
 * Class representing BookedTrainSegmentType
 *
 * Defines the information needed to describe a train segment that has been booked as part of a reservation.
 * XSD Type: BookedTrainSegmentType
 */
class BookedTrainSegmentType extends TrainSegmentType
{
    /**
     * The booking status.
     *
     * @var string $bookStatus
     */
    private $bookStatus = null;

    /**
     * The ticket status.
     *
     * @var string $ticketStatus
     */
    private $ticketStatus = null;

    /**
     * The class of inventory controlled services available.
     *
     * @var \Recranet\OTA\ClassCodeType $classCode
     */
    private $classCode = null;

    /**
     * Any special comments on the segment.
     *
     * @var \Recranet\OTA\FreeTextType[] $comment
     */
    private $comment = [
        
    ];

    /**
     * Train seating assignment information.
     *
     * @var \Recranet\OTA\BookedTrainSegmentType\AssignmentAType[] $assignment
     */
    private $assignment = [
        
    ];

    /**
     * Many rail suppliers link connection trips together by terming them married segments. When two or more segments are married, they must be processed as one unit. The segments must be moved, cancelled, and/or priced together. The value of the marriage group must be the same for all segments.
     *
     * @var string $marriageGrp
     */
    private $marriageGrp = null;

    /**
     * Gets as bookStatus
     *
     * The booking status.
     *
     * @return string
     */
    public function getBookStatus()
    {
        return $this->bookStatus;
    }

    /**
     * Sets a new bookStatus
     *
     * The booking status.
     *
     * @param string $bookStatus
     * @return self
     */
    public function setBookStatus($bookStatus)
    {
        $this->bookStatus = $bookStatus;
        return $this;
    }

    /**
     * Gets as ticketStatus
     *
     * The ticket status.
     *
     * @return string
     */
    public function getTicketStatus()
    {
        return $this->ticketStatus;
    }

    /**
     * Sets a new ticketStatus
     *
     * The ticket status.
     *
     * @param string $ticketStatus
     * @return self
     */
    public function setTicketStatus($ticketStatus)
    {
        $this->ticketStatus = $ticketStatus;
        return $this;
    }

    /**
     * Gets as classCode
     *
     * The class of inventory controlled services available.
     *
     * @return \Recranet\OTA\ClassCodeType
     */
    public function getClassCode()
    {
        return $this->classCode;
    }

    /**
     * Sets a new classCode
     *
     * The class of inventory controlled services available.
     *
     * @param \Recranet\OTA\ClassCodeType $classCode
     * @return self
     */
    public function setClassCode(?\Recranet\OTA\ClassCodeType $classCode = null)
    {
        $this->classCode = $classCode;
        return $this;
    }

    /**
     * Adds as comment
     *
     * Any special comments on the segment.
     *
     * @return self
     * @param \Recranet\OTA\FreeTextType $comment
     */
    public function addToComment(\Recranet\OTA\FreeTextType $comment)
    {
        $this->comment[] = $comment;
        return $this;
    }

    /**
     * isset comment
     *
     * Any special comments on the segment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComment($index)
    {
        return isset($this->comment[$index]);
    }

    /**
     * unset comment
     *
     * Any special comments on the segment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComment($index)
    {
        unset($this->comment[$index]);
    }

    /**
     * Gets as comment
     *
     * Any special comments on the segment.
     *
     * @return \Recranet\OTA\FreeTextType[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Any special comments on the segment.
     *
     * @param \Recranet\OTA\FreeTextType[] $comment
     * @return self
     */
    public function setComment(array $comment = null)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Adds as assignment
     *
     * Train seating assignment information.
     *
     * @return self
     * @param \Recranet\OTA\BookedTrainSegmentType\AssignmentAType $assignment
     */
    public function addToAssignment(\Recranet\OTA\BookedTrainSegmentType\AssignmentAType $assignment)
    {
        $this->assignment[] = $assignment;
        return $this;
    }

    /**
     * isset assignment
     *
     * Train seating assignment information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAssignment($index)
    {
        return isset($this->assignment[$index]);
    }

    /**
     * unset assignment
     *
     * Train seating assignment information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAssignment($index)
    {
        unset($this->assignment[$index]);
    }

    /**
     * Gets as assignment
     *
     * Train seating assignment information.
     *
     * @return \Recranet\OTA\BookedTrainSegmentType\AssignmentAType[]
     */
    public function getAssignment()
    {
        return $this->assignment;
    }

    /**
     * Sets a new assignment
     *
     * Train seating assignment information.
     *
     * @param \Recranet\OTA\BookedTrainSegmentType\AssignmentAType[] $assignment
     * @return self
     */
    public function setAssignment(array $assignment = null)
    {
        $this->assignment = $assignment;
        return $this;
    }

    /**
     * Gets as marriageGrp
     *
     * Many rail suppliers link connection trips together by terming them married segments. When two or more segments are married, they must be processed as one unit. The segments must be moved, cancelled, and/or priced together. The value of the marriage group must be the same for all segments.
     *
     * @return string
     */
    public function getMarriageGrp()
    {
        return $this->marriageGrp;
    }

    /**
     * Sets a new marriageGrp
     *
     * Many rail suppliers link connection trips together by terming them married segments. When two or more segments are married, they must be processed as one unit. The segments must be moved, cancelled, and/or priced together. The value of the marriage group must be the same for all segments.
     *
     * @param string $marriageGrp
     * @return self
     */
    public function setMarriageGrp($marriageGrp)
    {
        $this->marriageGrp = $marriageGrp;
        return $this;
    }
}

