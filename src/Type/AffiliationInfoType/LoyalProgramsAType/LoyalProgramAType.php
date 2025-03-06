<?php

namespace Recranet\OTA\Type\AffiliationInfoType\LoyalProgramsAType;

/**
 * Class representing LoyalProgramAType
 */
class LoyalProgramAType
{
    /**
     * If true, this item is obsolete and should be removed from the receiving system.
     *
     *  false
     *
     * @var bool $removal
     */
    private $removal = null;

    /**
     * This identifies the loyalty program.
     *
     * @var string $programName
     */
    private $programName = null;

    /**
     * The name of the secondary level of the program, e.g.: gold, silver, etc..
     *
     * @var string $secondaryProgramName
     */
    private $secondaryProgramName = null;

    /**
     * The title of the membership program affiliated with the primary program.
     *
     * @var string $affiliateProgramName
     */
    private $affiliateProgramName = null;

    /**
     * Used to indicate the level to which the hotel is assigned within the program for redemption purposes.
     *
     * @var string $hotelLevel
     */
    private $hotelLevel = null;

    /**
     * A company-specific code used to identify a loyalty program.
     *
     * @var string $programCode
     */
    private $programCode = null;

    /**
     * Used to identify the specific travel sector to which the loyalty program applies. Refer to OpenTravel Codelist Travel Sector (TVS).
     *
     * @var string $travelSector
     */
    private $travelSector = null;

    /**
     * If TRUE, identifies the primary loyalty program.
     *
     * @var bool $primaryProgramInd
     */
    private $primaryProgramInd = null;

    /**
     * Provides description information for the loyal program.
     *
     * @var \Recranet\OTA\Type\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType\ProgramDescriptionAType[] $programDescription
     */
    private $programDescription = [
        
    ];

    /**
     * Provides information regarding restrictions that apply to the loyal program.
     *
     * @var \Recranet\OTA\Type\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType\ProgramRestrictionAType $programRestriction
     */
    private $programRestriction = null;

    /**
     * A collection of black-out dates (i.e. dates when loyalty redemptions are not allowed).
     *
     * @var \Recranet\OTA\Type\DateTimeSpanType[] $blackoutDates
     */
    private $blackoutDates = null;

    /**
     * Gets as removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *
     *  false
     *
     * @return bool
     */
    public function getRemoval()
    {
        return $this->removal;
    }

    /**
     * Sets a new removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *
     *  false
     *
     * @param bool $removal
     * @return self
     */
    public function setRemoval($removal)
    {
        $this->removal = $removal;
        return $this;
    }

    /**
     * Gets as programName
     *
     * This identifies the loyalty program.
     *
     * @return string
     */
    public function getProgramName()
    {
        return $this->programName;
    }

    /**
     * Sets a new programName
     *
     * This identifies the loyalty program.
     *
     * @param string $programName
     * @return self
     */
    public function setProgramName($programName)
    {
        $this->programName = $programName;
        return $this;
    }

    /**
     * Gets as secondaryProgramName
     *
     * The name of the secondary level of the program, e.g.: gold, silver, etc..
     *
     * @return string
     */
    public function getSecondaryProgramName()
    {
        return $this->secondaryProgramName;
    }

    /**
     * Sets a new secondaryProgramName
     *
     * The name of the secondary level of the program, e.g.: gold, silver, etc..
     *
     * @param string $secondaryProgramName
     * @return self
     */
    public function setSecondaryProgramName($secondaryProgramName)
    {
        $this->secondaryProgramName = $secondaryProgramName;
        return $this;
    }

    /**
     * Gets as affiliateProgramName
     *
     * The title of the membership program affiliated with the primary program.
     *
     * @return string
     */
    public function getAffiliateProgramName()
    {
        return $this->affiliateProgramName;
    }

    /**
     * Sets a new affiliateProgramName
     *
     * The title of the membership program affiliated with the primary program.
     *
     * @param string $affiliateProgramName
     * @return self
     */
    public function setAffiliateProgramName($affiliateProgramName)
    {
        $this->affiliateProgramName = $affiliateProgramName;
        return $this;
    }

    /**
     * Gets as hotelLevel
     *
     * Used to indicate the level to which the hotel is assigned within the program for redemption purposes.
     *
     * @return string
     */
    public function getHotelLevel()
    {
        return $this->hotelLevel;
    }

    /**
     * Sets a new hotelLevel
     *
     * Used to indicate the level to which the hotel is assigned within the program for redemption purposes.
     *
     * @param string $hotelLevel
     * @return self
     */
    public function setHotelLevel($hotelLevel)
    {
        $this->hotelLevel = $hotelLevel;
        return $this;
    }

    /**
     * Gets as programCode
     *
     * A company-specific code used to identify a loyalty program.
     *
     * @return string
     */
    public function getProgramCode()
    {
        return $this->programCode;
    }

    /**
     * Sets a new programCode
     *
     * A company-specific code used to identify a loyalty program.
     *
     * @param string $programCode
     * @return self
     */
    public function setProgramCode($programCode)
    {
        $this->programCode = $programCode;
        return $this;
    }

    /**
     * Gets as travelSector
     *
     * Used to identify the specific travel sector to which the loyalty program applies. Refer to OpenTravel Codelist Travel Sector (TVS).
     *
     * @return string
     */
    public function getTravelSector()
    {
        return $this->travelSector;
    }

    /**
     * Sets a new travelSector
     *
     * Used to identify the specific travel sector to which the loyalty program applies. Refer to OpenTravel Codelist Travel Sector (TVS).
     *
     * @param string $travelSector
     * @return self
     */
    public function setTravelSector($travelSector)
    {
        $this->travelSector = $travelSector;
        return $this;
    }

    /**
     * Gets as primaryProgramInd
     *
     * If TRUE, identifies the primary loyalty program.
     *
     * @return bool
     */
    public function getPrimaryProgramInd()
    {
        return $this->primaryProgramInd;
    }

    /**
     * Sets a new primaryProgramInd
     *
     * If TRUE, identifies the primary loyalty program.
     *
     * @param bool $primaryProgramInd
     * @return self
     */
    public function setPrimaryProgramInd($primaryProgramInd)
    {
        $this->primaryProgramInd = $primaryProgramInd;
        return $this;
    }

    /**
     * Adds as programDescription
     *
     * Provides description information for the loyal program.
     *
     * @return self
     * @param \Recranet\OTA\Type\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType\ProgramDescriptionAType $programDescription
     */
    public function addToProgramDescription(\Recranet\OTA\Type\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType\ProgramDescriptionAType $programDescription)
    {
        $this->programDescription[] = $programDescription;
        return $this;
    }

    /**
     * isset programDescription
     *
     * Provides description information for the loyal program.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProgramDescription($index)
    {
        return isset($this->programDescription[$index]);
    }

    /**
     * unset programDescription
     *
     * Provides description information for the loyal program.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProgramDescription($index)
    {
        unset($this->programDescription[$index]);
    }

    /**
     * Gets as programDescription
     *
     * Provides description information for the loyal program.
     *
     * @return \Recranet\OTA\Type\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType\ProgramDescriptionAType[]
     */
    public function getProgramDescription()
    {
        return $this->programDescription;
    }

    /**
     * Sets a new programDescription
     *
     * Provides description information for the loyal program.
     *
     * @param \Recranet\OTA\Type\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType\ProgramDescriptionAType[] $programDescription
     * @return self
     */
    public function setProgramDescription(array $programDescription = null)
    {
        $this->programDescription = $programDescription;
        return $this;
    }

    /**
     * Gets as programRestriction
     *
     * Provides information regarding restrictions that apply to the loyal program.
     *
     * @return \Recranet\OTA\Type\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType\ProgramRestrictionAType
     */
    public function getProgramRestriction()
    {
        return $this->programRestriction;
    }

    /**
     * Sets a new programRestriction
     *
     * Provides information regarding restrictions that apply to the loyal program.
     *
     * @param \Recranet\OTA\Type\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType\ProgramRestrictionAType $programRestriction
     * @return self
     */
    public function setProgramRestriction(?\Recranet\OTA\Type\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType\ProgramRestrictionAType $programRestriction = null)
    {
        $this->programRestriction = $programRestriction;
        return $this;
    }

    /**
     * Adds as blackoutDate
     *
     * A collection of black-out dates (i.e. dates when loyalty redemptions are not allowed).
     *
     * @return self
     * @param \Recranet\OTA\Type\DateTimeSpanType $blackoutDate
     */
    public function addToBlackoutDates(\Recranet\OTA\Type\DateTimeSpanType $blackoutDate)
    {
        $this->blackoutDates[] = $blackoutDate;
        return $this;
    }

    /**
     * isset blackoutDates
     *
     * A collection of black-out dates (i.e. dates when loyalty redemptions are not allowed).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBlackoutDates($index)
    {
        return isset($this->blackoutDates[$index]);
    }

    /**
     * unset blackoutDates
     *
     * A collection of black-out dates (i.e. dates when loyalty redemptions are not allowed).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBlackoutDates($index)
    {
        unset($this->blackoutDates[$index]);
    }

    /**
     * Gets as blackoutDates
     *
     * A collection of black-out dates (i.e. dates when loyalty redemptions are not allowed).
     *
     * @return \Recranet\OTA\Type\DateTimeSpanType[]
     */
    public function getBlackoutDates()
    {
        return $this->blackoutDates;
    }

    /**
     * Sets a new blackoutDates
     *
     * A collection of black-out dates (i.e. dates when loyalty redemptions are not allowed).
     *
     * @param \Recranet\OTA\Type\DateTimeSpanType[] $blackoutDates
     * @return self
     */
    public function setBlackoutDates(array $blackoutDates = null)
    {
        $this->blackoutDates = $blackoutDates;
        return $this;
    }
}

