<?php

namespace Recranet\OTA\Type\HotelRatePlanType\SupplementsAType;

/**
 * Class representing SupplementAType
 */
class SupplementAType
{
    /**
     * Defines an age range or age category of a guest (e.g., under 21, over 65, teen, infant). Refer to OpenTravel Code List Age Qualifying Code (AQC).
     *
     * @var string $ageQualifyingCode
     */
    private $ageQualifyingCode = null;

    /**
     * MinAge: The minimum age to qualify for AgeQualifyingCode.
     *
     * @var int $minAge
     */
    private $minAge = null;

    /**
     * Max Age: The maximum age to qualify for AgeQualifyingCode.
     *
     * @var int $maxAge
     */
    private $maxAge = null;

    /**
     * TimeUnit : Qualifier for Age.
     *
     * @var string $ageTimeUnit
     */
    private $ageTimeUnit = null;

    /**
     * Defines the age range category or bucket a guest can be booked into.
     *
     * @var string $ageBucket
     */
    private $ageBucket = null;

    /**
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * The ISO 4217 standard "minor unit" for the number of decimal places for a particular currency.
     * Implementer: The ISO 4217 standard "minor unit" is typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @var int $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * A monetary amount.
     *
     * @var float $amount
     */
    private $amount = null;

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
     * An enumerated type that indicates the nature of the supplement.
     *
     * @var string $supplementType
     */
    private $supplementType = null;

    /**
     * Describes what the charge refers to and with what frequency. Refer to OpenTravel Code Table Charge Type (CHG).
     *
     * @var string $chargeTypeCode
     */
    private $chargeTypeCode = null;

    /**
     * A code defining the inventory item to which this supplement applies.
     *
     * @var string $invCode
     */
    private $invCode = null;

    /**
     * The inventory type to which the supplement applies.
     *
     * @var string $invType
     */
    private $invType = null;

    /**
     * The number of the guest of this age group beyond the standard occupancy for the room (e.g., Double room with standard occupancy =2; AdditionalGuestNumber = 1 => 3rd adult; AdditionalGuestNumber = 2 => 4th adult ).
     *
     * @var int $additionalGuestNumber
     */
    private $additionalGuestNumber = null;

    /**
     * This reference placeholder is commonly used to associate this supplement with the appropriate offer(s).
     *
     * @var string $rPH
     */
    private $rPH = null;

    /**
     * The percentage (postiive or negative) to be applied to the basic rate to calculate the supplement amount.
     *
     * @var float $percent
     */
    private $percent = null;

    /**
     * When true, indicates that the value in Amount must be added to the basic rate, otherwise it would replace the basic rate amount.
     *
     * @var bool $addToBasicRateIndicator
     */
    private $addToBasicRateIndicator = null;

    /**
     * When true, indicates that this is a supplement for single use (e.g., indicates that this supplement is the additional amount charged for single use of a double room).
     *
     * @var bool $singleUseIndicator
     */
    private $singleUseIndicator = null;

    /**
     * When true, indicates that this supplement must be applied when applicable (e.g., a surcharge for "Xmas Eve Gala Dinner" which must be applied if the room is booked for December 24th).
     *
     * @var bool $mandatoryIndicator
     */
    private $mandatoryIndicator = null;

    /**
     * Defines the required type and number of companions in the room in order for this supplement to apply (e.g., one adult required for a child supplement to apply).
     *
     * @var \Recranet\OTA\Type\HotelRatePlanType\SupplementsAType\SupplementAType\RoomCompanionsAType[] $roomCompanions
     */
    private $roomCompanions = [
        
    ];

    /**
     * Defines inventory (e.g. room type, meal plan) which must be booked for this supplement to apply.
     *
     * @var \Recranet\OTA\Type\HotelRatePlanType\SupplementsAType\SupplementAType\PrerequisiteInventoryAType[] $prerequisiteInventory
     */
    private $prerequisiteInventory = [
        
    ];

    /**
     * Description of the supplement.
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $description
     */
    private $description = [
        
    ];

    /**
     * Gets as ageQualifyingCode
     *
     * Defines an age range or age category of a guest (e.g., under 21, over 65, teen, infant). Refer to OpenTravel Code List Age Qualifying Code (AQC).
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
     * Defines an age range or age category of a guest (e.g., under 21, over 65, teen, infant). Refer to OpenTravel Code List Age Qualifying Code (AQC).
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
     * Gets as minAge
     *
     * MinAge: The minimum age to qualify for AgeQualifyingCode.
     *
     * @return int
     */
    public function getMinAge()
    {
        return $this->minAge;
    }

    /**
     * Sets a new minAge
     *
     * MinAge: The minimum age to qualify for AgeQualifyingCode.
     *
     * @param int $minAge
     * @return self
     */
    public function setMinAge($minAge)
    {
        $this->minAge = $minAge;
        return $this;
    }

    /**
     * Gets as maxAge
     *
     * Max Age: The maximum age to qualify for AgeQualifyingCode.
     *
     * @return int
     */
    public function getMaxAge()
    {
        return $this->maxAge;
    }

    /**
     * Sets a new maxAge
     *
     * Max Age: The maximum age to qualify for AgeQualifyingCode.
     *
     * @param int $maxAge
     * @return self
     */
    public function setMaxAge($maxAge)
    {
        $this->maxAge = $maxAge;
        return $this;
    }

    /**
     * Gets as ageTimeUnit
     *
     * TimeUnit : Qualifier for Age.
     *
     * @return string
     */
    public function getAgeTimeUnit()
    {
        return $this->ageTimeUnit;
    }

    /**
     * Sets a new ageTimeUnit
     *
     * TimeUnit : Qualifier for Age.
     *
     * @param string $ageTimeUnit
     * @return self
     */
    public function setAgeTimeUnit($ageTimeUnit)
    {
        $this->ageTimeUnit = $ageTimeUnit;
        return $this;
    }

    /**
     * Gets as ageBucket
     *
     * Defines the age range category or bucket a guest can be booked into.
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
     * Defines the age range category or bucket a guest can be booked into.
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
     * Gets as currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Gets as decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a particular currency.
     * Implementer: The ISO 4217 standard "minor unit" is typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @return int
     */
    public function getDecimalPlaces()
    {
        return $this->decimalPlaces;
    }

    /**
     * Sets a new decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a particular currency.
     * Implementer: The ISO 4217 standard "minor unit" is typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @param int $decimalPlaces
     * @return self
     */
    public function setDecimalPlaces($decimalPlaces)
    {
        $this->decimalPlaces = $decimalPlaces;
        return $this;
    }

    /**
     * Gets as amount
     *
     * A monetary amount.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * A monetary amount.
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
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
     * Gets as supplementType
     *
     * An enumerated type that indicates the nature of the supplement.
     *
     * @return string
     */
    public function getSupplementType()
    {
        return $this->supplementType;
    }

    /**
     * Sets a new supplementType
     *
     * An enumerated type that indicates the nature of the supplement.
     *
     * @param string $supplementType
     * @return self
     */
    public function setSupplementType($supplementType)
    {
        $this->supplementType = $supplementType;
        return $this;
    }

    /**
     * Gets as chargeTypeCode
     *
     * Describes what the charge refers to and with what frequency. Refer to OpenTravel Code Table Charge Type (CHG).
     *
     * @return string
     */
    public function getChargeTypeCode()
    {
        return $this->chargeTypeCode;
    }

    /**
     * Sets a new chargeTypeCode
     *
     * Describes what the charge refers to and with what frequency. Refer to OpenTravel Code Table Charge Type (CHG).
     *
     * @param string $chargeTypeCode
     * @return self
     */
    public function setChargeTypeCode($chargeTypeCode)
    {
        $this->chargeTypeCode = $chargeTypeCode;
        return $this;
    }

    /**
     * Gets as invCode
     *
     * A code defining the inventory item to which this supplement applies.
     *
     * @return string
     */
    public function getInvCode()
    {
        return $this->invCode;
    }

    /**
     * Sets a new invCode
     *
     * A code defining the inventory item to which this supplement applies.
     *
     * @param string $invCode
     * @return self
     */
    public function setInvCode($invCode)
    {
        $this->invCode = $invCode;
        return $this;
    }

    /**
     * Gets as invType
     *
     * The inventory type to which the supplement applies.
     *
     * @return string
     */
    public function getInvType()
    {
        return $this->invType;
    }

    /**
     * Sets a new invType
     *
     * The inventory type to which the supplement applies.
     *
     * @param string $invType
     * @return self
     */
    public function setInvType($invType)
    {
        $this->invType = $invType;
        return $this;
    }

    /**
     * Gets as additionalGuestNumber
     *
     * The number of the guest of this age group beyond the standard occupancy for the room (e.g., Double room with standard occupancy =2; AdditionalGuestNumber = 1 => 3rd adult; AdditionalGuestNumber = 2 => 4th adult ).
     *
     * @return int
     */
    public function getAdditionalGuestNumber()
    {
        return $this->additionalGuestNumber;
    }

    /**
     * Sets a new additionalGuestNumber
     *
     * The number of the guest of this age group beyond the standard occupancy for the room (e.g., Double room with standard occupancy =2; AdditionalGuestNumber = 1 => 3rd adult; AdditionalGuestNumber = 2 => 4th adult ).
     *
     * @param int $additionalGuestNumber
     * @return self
     */
    public function setAdditionalGuestNumber($additionalGuestNumber)
    {
        $this->additionalGuestNumber = $additionalGuestNumber;
        return $this;
    }

    /**
     * Gets as rPH
     *
     * This reference placeholder is commonly used to associate this supplement with the appropriate offer(s).
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * This reference placeholder is commonly used to associate this supplement with the appropriate offer(s).
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;
        return $this;
    }

    /**
     * Gets as percent
     *
     * The percentage (postiive or negative) to be applied to the basic rate to calculate the supplement amount.
     *
     * @return float
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Sets a new percent
     *
     * The percentage (postiive or negative) to be applied to the basic rate to calculate the supplement amount.
     *
     * @param float $percent
     * @return self
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;
        return $this;
    }

    /**
     * Gets as addToBasicRateIndicator
     *
     * When true, indicates that the value in Amount must be added to the basic rate, otherwise it would replace the basic rate amount.
     *
     * @return bool
     */
    public function getAddToBasicRateIndicator()
    {
        return $this->addToBasicRateIndicator;
    }

    /**
     * Sets a new addToBasicRateIndicator
     *
     * When true, indicates that the value in Amount must be added to the basic rate, otherwise it would replace the basic rate amount.
     *
     * @param bool $addToBasicRateIndicator
     * @return self
     */
    public function setAddToBasicRateIndicator($addToBasicRateIndicator)
    {
        $this->addToBasicRateIndicator = $addToBasicRateIndicator;
        return $this;
    }

    /**
     * Gets as singleUseIndicator
     *
     * When true, indicates that this is a supplement for single use (e.g., indicates that this supplement is the additional amount charged for single use of a double room).
     *
     * @return bool
     */
    public function getSingleUseIndicator()
    {
        return $this->singleUseIndicator;
    }

    /**
     * Sets a new singleUseIndicator
     *
     * When true, indicates that this is a supplement for single use (e.g., indicates that this supplement is the additional amount charged for single use of a double room).
     *
     * @param bool $singleUseIndicator
     * @return self
     */
    public function setSingleUseIndicator($singleUseIndicator)
    {
        $this->singleUseIndicator = $singleUseIndicator;
        return $this;
    }

    /**
     * Gets as mandatoryIndicator
     *
     * When true, indicates that this supplement must be applied when applicable (e.g., a surcharge for "Xmas Eve Gala Dinner" which must be applied if the room is booked for December 24th).
     *
     * @return bool
     */
    public function getMandatoryIndicator()
    {
        return $this->mandatoryIndicator;
    }

    /**
     * Sets a new mandatoryIndicator
     *
     * When true, indicates that this supplement must be applied when applicable (e.g., a surcharge for "Xmas Eve Gala Dinner" which must be applied if the room is booked for December 24th).
     *
     * @param bool $mandatoryIndicator
     * @return self
     */
    public function setMandatoryIndicator($mandatoryIndicator)
    {
        $this->mandatoryIndicator = $mandatoryIndicator;
        return $this;
    }

    /**
     * Adds as roomCompanions
     *
     * Defines the required type and number of companions in the room in order for this supplement to apply (e.g., one adult required for a child supplement to apply).
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelRatePlanType\SupplementsAType\SupplementAType\RoomCompanionsAType $roomCompanions
     */
    public function addToRoomCompanions(\Recranet\OTA\Type\HotelRatePlanType\SupplementsAType\SupplementAType\RoomCompanionsAType $roomCompanions)
    {
        $this->roomCompanions[] = $roomCompanions;
        return $this;
    }

    /**
     * isset roomCompanions
     *
     * Defines the required type and number of companions in the room in order for this supplement to apply (e.g., one adult required for a child supplement to apply).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomCompanions($index)
    {
        return isset($this->roomCompanions[$index]);
    }

    /**
     * unset roomCompanions
     *
     * Defines the required type and number of companions in the room in order for this supplement to apply (e.g., one adult required for a child supplement to apply).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomCompanions($index)
    {
        unset($this->roomCompanions[$index]);
    }

    /**
     * Gets as roomCompanions
     *
     * Defines the required type and number of companions in the room in order for this supplement to apply (e.g., one adult required for a child supplement to apply).
     *
     * @return \Recranet\OTA\Type\HotelRatePlanType\SupplementsAType\SupplementAType\RoomCompanionsAType[]
     */
    public function getRoomCompanions()
    {
        return $this->roomCompanions;
    }

    /**
     * Sets a new roomCompanions
     *
     * Defines the required type and number of companions in the room in order for this supplement to apply (e.g., one adult required for a child supplement to apply).
     *
     * @param \Recranet\OTA\Type\HotelRatePlanType\SupplementsAType\SupplementAType\RoomCompanionsAType[] $roomCompanions
     * @return self
     */
    public function setRoomCompanions(array $roomCompanions = null)
    {
        $this->roomCompanions = $roomCompanions;
        return $this;
    }

    /**
     * Adds as prerequisiteInventory
     *
     * Defines inventory (e.g. room type, meal plan) which must be booked for this supplement to apply.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelRatePlanType\SupplementsAType\SupplementAType\PrerequisiteInventoryAType $prerequisiteInventory
     */
    public function addToPrerequisiteInventory(\Recranet\OTA\Type\HotelRatePlanType\SupplementsAType\SupplementAType\PrerequisiteInventoryAType $prerequisiteInventory)
    {
        $this->prerequisiteInventory[] = $prerequisiteInventory;
        return $this;
    }

    /**
     * isset prerequisiteInventory
     *
     * Defines inventory (e.g. room type, meal plan) which must be booked for this supplement to apply.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrerequisiteInventory($index)
    {
        return isset($this->prerequisiteInventory[$index]);
    }

    /**
     * unset prerequisiteInventory
     *
     * Defines inventory (e.g. room type, meal plan) which must be booked for this supplement to apply.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrerequisiteInventory($index)
    {
        unset($this->prerequisiteInventory[$index]);
    }

    /**
     * Gets as prerequisiteInventory
     *
     * Defines inventory (e.g. room type, meal plan) which must be booked for this supplement to apply.
     *
     * @return \Recranet\OTA\Type\HotelRatePlanType\SupplementsAType\SupplementAType\PrerequisiteInventoryAType[]
     */
    public function getPrerequisiteInventory()
    {
        return $this->prerequisiteInventory;
    }

    /**
     * Sets a new prerequisiteInventory
     *
     * Defines inventory (e.g. room type, meal plan) which must be booked for this supplement to apply.
     *
     * @param \Recranet\OTA\Type\HotelRatePlanType\SupplementsAType\SupplementAType\PrerequisiteInventoryAType[] $prerequisiteInventory
     * @return self
     */
    public function setPrerequisiteInventory(array $prerequisiteInventory = null)
    {
        $this->prerequisiteInventory = $prerequisiteInventory;
        return $this;
    }

    /**
     * Adds as description
     *
     * Description of the supplement.
     *
     * @return self
     * @param \Recranet\OTA\Type\ParagraphType $description
     */
    public function addToDescription(\Recranet\OTA\Type\ParagraphType $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * Description of the supplement.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * Description of the supplement.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * Description of the supplement.
     *
     * @return \Recranet\OTA\Type\ParagraphType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Description of the supplement.
     *
     * @param \Recranet\OTA\Type\ParagraphType[] $description
     * @return self
     */
    public function setDescription(array $description = null)
    {
        $this->description = $description;
        return $this;
    }
}

