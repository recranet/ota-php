<?php

namespace Recranet\OTA\Type\AirReservationType\QueuesAType;

/**
 * Class representing QueueAType
 */
class QueueAType
{
    /**
     * The ATA/ IATA airport/city code, office code, pseudo city code, etc. of the queue.
     *
     * @var string $pseudoCityCode
     */
    private $pseudoCityCode = null;

    /**
     * An identifier specifying the queue on which the booking file resides in the system.
     *
     * @var string $queueNumber
     */
    private $queueNumber = null;

    /**
     * The category of the queue.
     *
     * @var string $queueCategory
     */
    private $queueCategory = null;

    /**
     * Identifies the airline and/or system where the queue resides. If this is omitted, the airline and/or system code (AirlineVendorID) contained in the point of sale information should be used.
     *
     * @var string $systemCode
     */
    private $systemCode = null;

    /**
     * An additional identifier to determine the exact queue on which a reservation record should be placed.
     *
     * @var string $queueID
     */
    private $queueID = null;

    /**
     * Date/time when the time initiated queuing should take place.
     *
     * @var \DateTime $dateTime
     */
    private $dateTime = null;

    /**
     * Text describing why the queuing takes place.
     *
     * @var string $text
     */
    private $text = null;

    /**
     * Identifies airline/system on which the reservation is being queued.
     *
     * @var string $carrierCode
     */
    private $carrierCode = null;

    /**
     * Indicates the required modification to the element.
     *
     * @var string $operation
     */
    private $operation = null;

    /**
     * Gets as pseudoCityCode
     *
     * The ATA/ IATA airport/city code, office code, pseudo city code, etc. of the queue.
     *
     * @return string
     */
    public function getPseudoCityCode()
    {
        return $this->pseudoCityCode;
    }

    /**
     * Sets a new pseudoCityCode
     *
     * The ATA/ IATA airport/city code, office code, pseudo city code, etc. of the queue.
     *
     * @param string $pseudoCityCode
     * @return self
     */
    public function setPseudoCityCode($pseudoCityCode)
    {
        $this->pseudoCityCode = $pseudoCityCode;
        return $this;
    }

    /**
     * Gets as queueNumber
     *
     * An identifier specifying the queue on which the booking file resides in the system.
     *
     * @return string
     */
    public function getQueueNumber()
    {
        return $this->queueNumber;
    }

    /**
     * Sets a new queueNumber
     *
     * An identifier specifying the queue on which the booking file resides in the system.
     *
     * @param string $queueNumber
     * @return self
     */
    public function setQueueNumber($queueNumber)
    {
        $this->queueNumber = $queueNumber;
        return $this;
    }

    /**
     * Gets as queueCategory
     *
     * The category of the queue.
     *
     * @return string
     */
    public function getQueueCategory()
    {
        return $this->queueCategory;
    }

    /**
     * Sets a new queueCategory
     *
     * The category of the queue.
     *
     * @param string $queueCategory
     * @return self
     */
    public function setQueueCategory($queueCategory)
    {
        $this->queueCategory = $queueCategory;
        return $this;
    }

    /**
     * Gets as systemCode
     *
     * Identifies the airline and/or system where the queue resides. If this is omitted, the airline and/or system code (AirlineVendorID) contained in the point of sale information should be used.
     *
     * @return string
     */
    public function getSystemCode()
    {
        return $this->systemCode;
    }

    /**
     * Sets a new systemCode
     *
     * Identifies the airline and/or system where the queue resides. If this is omitted, the airline and/or system code (AirlineVendorID) contained in the point of sale information should be used.
     *
     * @param string $systemCode
     * @return self
     */
    public function setSystemCode($systemCode)
    {
        $this->systemCode = $systemCode;
        return $this;
    }

    /**
     * Gets as queueID
     *
     * An additional identifier to determine the exact queue on which a reservation record should be placed.
     *
     * @return string
     */
    public function getQueueID()
    {
        return $this->queueID;
    }

    /**
     * Sets a new queueID
     *
     * An additional identifier to determine the exact queue on which a reservation record should be placed.
     *
     * @param string $queueID
     * @return self
     */
    public function setQueueID($queueID)
    {
        $this->queueID = $queueID;
        return $this;
    }

    /**
     * Gets as dateTime
     *
     * Date/time when the time initiated queuing should take place.
     *
     * @return \DateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * Sets a new dateTime
     *
     * Date/time when the time initiated queuing should take place.
     *
     * @param \DateTime $dateTime
     * @return self
     */
    public function setDateTime(\DateTime $dateTime)
    {
        $this->dateTime = $dateTime;
        return $this;
    }

    /**
     * Gets as text
     *
     * Text describing why the queuing takes place.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * Text describing why the queuing takes place.
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    /**
     * Gets as carrierCode
     *
     * Identifies airline/system on which the reservation is being queued.
     *
     * @return string
     */
    public function getCarrierCode()
    {
        return $this->carrierCode;
    }

    /**
     * Sets a new carrierCode
     *
     * Identifies airline/system on which the reservation is being queued.
     *
     * @param string $carrierCode
     * @return self
     */
    public function setCarrierCode($carrierCode)
    {
        $this->carrierCode = $carrierCode;
        return $this;
    }

    /**
     * Gets as operation
     *
     * Indicates the required modification to the element.
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Sets a new operation
     *
     * Indicates the required modification to the element.
     *
     * @param string $operation
     * @return self
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;
        return $this;
    }
}

