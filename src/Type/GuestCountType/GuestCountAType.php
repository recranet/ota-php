<?php

namespace Recranet\OTA\Type\GuestCountType;

/**
 * Class representing GuestCountAType
 */
class GuestCountAType
{
    /**
     * A code representing a business rule that determines the charges for a guest based upon age range (e.g. Adult, Child, Senior, Child With Adult, Child Without Adult). This attribute allows for an increase in rate by occupant class. Refer to OpenTravel Code List Age Qualifying Code (AQC).
     *
     * @var string $ageQualifyingCode
     */
    private $ageQualifyingCode = null;

    /**
     * Defines the age of a guest.
     *
     * @var int $age
     */
    private $age = null;

    /**
     * The number of guests in one AgeQualifyingCode or Count.
     *
     * @var int $count
     */
    private $count = null;

    /**
     * Defines the age range category or bucket a guest can be booked into. This is typically used in conjunction with the age qualifying code to further define the applicable age range.
     *
     * @var string $ageBucket
     */
    private $ageBucket = null;

    /**
     * Used to refer to the guest associated with this reservation.
     *
     * @var string $resGuestRPH
     */
    private $resGuestRPH = null;

    /**
     * Gets as ageQualifyingCode
     *
     * A code representing a business rule that determines the charges for a guest based upon age range (e.g. Adult, Child, Senior, Child With Adult, Child Without Adult). This attribute allows for an increase in rate by occupant class. Refer to OpenTravel Code List Age Qualifying Code (AQC).
     *
     * @return string
     */
    public function getAgeQualifyingCode()
    {
        return $this->ageQualifyingCode;
    }

    /**
     * Sets a new ageQualifyingCode
     *
     * A code representing a business rule that determines the charges for a guest based upon age range (e.g. Adult, Child, Senior, Child With Adult, Child Without Adult). This attribute allows for an increase in rate by occupant class. Refer to OpenTravel Code List Age Qualifying Code (AQC).
     *
     * @param string $ageQualifyingCode
     * @return self
     */
    public function setAgeQualifyingCode($ageQualifyingCode)
    {
        $this->ageQualifyingCode = $ageQualifyingCode;
        return $this;
    }

    /**
     * Gets as age
     *
     * Defines the age of a guest.
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Sets a new age
     *
     * Defines the age of a guest.
     *
     * @param int $age
     * @return self
     */
    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    /**
     * Gets as count
     *
     * The number of guests in one AgeQualifyingCode or Count.
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Sets a new count
     *
     * The number of guests in one AgeQualifyingCode or Count.
     *
     * @param int $count
     * @return self
     */
    public function setCount($count)
    {
        $this->count = $count;
        return $this;
    }

    /**
     * Gets as ageBucket
     *
     * Defines the age range category or bucket a guest can be booked into. This is typically used in conjunction with the age qualifying code to further define the applicable age range.
     *
     * @return string
     */
    public function getAgeBucket()
    {
        return $this->ageBucket;
    }

    /**
     * Sets a new ageBucket
     *
     * Defines the age range category or bucket a guest can be booked into. This is typically used in conjunction with the age qualifying code to further define the applicable age range.
     *
     * @param string $ageBucket
     * @return self
     */
    public function setAgeBucket($ageBucket)
    {
        $this->ageBucket = $ageBucket;
        return $this;
    }

    /**
     * Gets as resGuestRPH
     *
     * Used to refer to the guest associated with this reservation.
     *
     * @return string
     */
    public function getResGuestRPH()
    {
        return $this->resGuestRPH;
    }

    /**
     * Sets a new resGuestRPH
     *
     * Used to refer to the guest associated with this reservation.
     *
     * @param string $resGuestRPH
     * @return self
     */
    public function setResGuestRPH($resGuestRPH)
    {
        $this->resGuestRPH = $resGuestRPH;
        return $this;
    }
}

