<?php

namespace Recranet\OTA\HotelReservationType;

/**
 * Class representing BillingInstructionCodeAType
 */
class BillingInstructionCodeAType
{
    /**
     * The individual billing code that applies to a set of instructions that are routed to a designated folio.
     *
     * @var string $billingCode
     */
    private $billingCode = null;

    /**
     * Used to define the type of the BillingCode, such as group, corporate and casino. Refer to OpenTravel Code List Reservation Billing Type (RBT).
     *
     * @var string $billingType
     */
    private $billingType = null;

    /**
     * The authorization code associated with the billing code.
     *
     * @var string $authorizationCode
     */
    private $authorizationCode = null;

    /**
     * A short description of the billing code or instructions.
     *
     * @var string $description
     */
    private $description = null;

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
     * Identifies the account number where the charges will be routed.
     *
     * @var string $accountNumber
     */
    private $accountNumber = null;

    /**
     * A reference to a guest ID object that may be defined in ResGuests/ResGuest
     *
     * @var \Recranet\OTA\HotelReservationType\BillingInstructionCodeAType\ResGuestRPHAType[] $resGuestRPH
     */
    private $resGuestRPH = [
        
    ];

    /**
     * Gets as billingCode
     *
     * The individual billing code that applies to a set of instructions that are routed to a designated folio.
     *
     * @return string
     */
    public function getBillingCode()
    {
        return $this->billingCode;
    }

    /**
     * Sets a new billingCode
     *
     * The individual billing code that applies to a set of instructions that are routed to a designated folio.
     *
     * @param string $billingCode
     * @return self
     */
    public function setBillingCode($billingCode)
    {
        $this->billingCode = $billingCode;
        return $this;
    }

    /**
     * Gets as billingType
     *
     * Used to define the type of the BillingCode, such as group, corporate and casino. Refer to OpenTravel Code List Reservation Billing Type (RBT).
     *
     * @return string
     */
    public function getBillingType()
    {
        return $this->billingType;
    }

    /**
     * Sets a new billingType
     *
     * Used to define the type of the BillingCode, such as group, corporate and casino. Refer to OpenTravel Code List Reservation Billing Type (RBT).
     *
     * @param string $billingType
     * @return self
     */
    public function setBillingType($billingType)
    {
        $this->billingType = $billingType;
        return $this;
    }

    /**
     * Gets as authorizationCode
     *
     * The authorization code associated with the billing code.
     *
     * @return string
     */
    public function getAuthorizationCode()
    {
        return $this->authorizationCode;
    }

    /**
     * Sets a new authorizationCode
     *
     * The authorization code associated with the billing code.
     *
     * @param string $authorizationCode
     * @return self
     */
    public function setAuthorizationCode($authorizationCode)
    {
        $this->authorizationCode = $authorizationCode;
        return $this;
    }

    /**
     * Gets as description
     *
     * A short description of the billing code or instructions.
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
     * A short description of the billing code or instructions.
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
     * Gets as accountNumber
     *
     * Identifies the account number where the charges will be routed.
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * Sets a new accountNumber
     *
     * Identifies the account number where the charges will be routed.
     *
     * @param string $accountNumber
     * @return self
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * Adds as resGuestRPH
     *
     * A reference to a guest ID object that may be defined in ResGuests/ResGuest
     *
     * @return self
     * @param \Recranet\OTA\HotelReservationType\BillingInstructionCodeAType\ResGuestRPHAType $resGuestRPH
     */
    public function addToResGuestRPH(\Recranet\OTA\HotelReservationType\BillingInstructionCodeAType\ResGuestRPHAType $resGuestRPH)
    {
        $this->resGuestRPH[] = $resGuestRPH;
        return $this;
    }

    /**
     * isset resGuestRPH
     *
     * A reference to a guest ID object that may be defined in ResGuests/ResGuest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResGuestRPH($index)
    {
        return isset($this->resGuestRPH[$index]);
    }

    /**
     * unset resGuestRPH
     *
     * A reference to a guest ID object that may be defined in ResGuests/ResGuest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResGuestRPH($index)
    {
        unset($this->resGuestRPH[$index]);
    }

    /**
     * Gets as resGuestRPH
     *
     * A reference to a guest ID object that may be defined in ResGuests/ResGuest
     *
     * @return \Recranet\OTA\HotelReservationType\BillingInstructionCodeAType\ResGuestRPHAType[]
     */
    public function getResGuestRPH()
    {
        return $this->resGuestRPH;
    }

    /**
     * Sets a new resGuestRPH
     *
     * A reference to a guest ID object that may be defined in ResGuests/ResGuest
     *
     * @param \Recranet\OTA\HotelReservationType\BillingInstructionCodeAType\ResGuestRPHAType[] $resGuestRPH
     * @return self
     */
    public function setResGuestRPH(array $resGuestRPH = null)
    {
        $this->resGuestRPH = $resGuestRPH;
        return $this;
    }
}

