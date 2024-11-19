<?php

namespace Recranet\OTA\AreaInfoType\AttractionsAType;

/**
 * Class representing AttractionAType
 */
class AttractionAType
{
    /**
     * The code for the type of attraction in the proximity of the hotel facility. Refer to OpenTravel Code List Attraction Category Code (ACC).
     *
     * @var string $attractionCategoryCode
     */
    private $attractionCategoryCode = null;

    /**
     * If true, this item is obsolete and should be removed from the receiving system.
     *
     *  false
     *
     * @var bool $removal
     */
    private $removal = null;

    /**
     * May be used to give further detail on the code.
     *
     * @var string $codeDetail
     */
    private $codeDetail = null;

    /**
     * The name of the local attraction.
     *
     * @var string $attractionName
     */
    private $attractionName = null;

    /**
     * A guideline price if there is a fee associated with the attraction.
     *
     * @var float $attractionFee
     */
    private $attractionFee = null;

    /**
     * This signifies whether or not a courtesy phone for contacting the hotel is available at the attraction (e.g. often times these are availabe in airports). When true, the phone is available.
     *
     * @var bool $courtesyPhone
     */
    private $courtesyPhone = null;

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
     * Any code used to specify an item, for example, type of traveler, service code, room amenity, etc.
     *
     * @var string $code
     */
    private $code = null;

    /**
     * Identifies the source authority for the code.
     *
     * @var string $codeContext
     */
    private $codeContext = null;

    /**
     * Used to define the quantity for an associated element or attribute.
     *
     * @var int $quantity
     */
    private $quantity = null;

    /**
     * Identifies the location of the code table.
     *
     * @var string $uRI
     */
    private $uRI = null;

    /**
     * Denotes whether a service is onsite, offsite or information is not available. Refer to OpenTravel Code Table Proximity (PRX).
     *
     * @var string $proximityCode
     */
    private $proximityCode = null;

    /**
     * A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a particular implementation.
     *
     * @var string $iD
     */
    private $iD = null;

    /**
     * Used to define the display order.
     *
     * @var int $sort
     */
    private $sort = null;

    /**
     * Minimum age the attraction is appropriate for. Refer to OpenTravel Code List Age Qualifying Code (AQC).
     *
     * @var string $minAgeAppropriateCode
     */
    private $minAgeAppropriateCode = null;

    /**
     * Start month and day or date for which the attraction (e.g. the start of a season) is available. When a year is not used (i.e. only the month and day) it signifies a recurring season.
     *
     * @var \DateTime $applicableStart
     */
    private $applicableStart = null;

    /**
     * End month and day or date for which the attraction (e.g. the end of a season) is available. When a year is not used (i.e. only the month and day) it signifies a recurring season.
     *
     * @var \DateTime $applicableEnd
     */
    private $applicableEnd = null;

    /**
     * Identifies the language in which the attraction information is sent.
     *
     * @var string $language
     */
    private $language = null;

    /**
     * Used to pass contact information of a specific attraction.
     *
     * @var \Recranet\OTA\AreaInfoType\AttractionsAType\AttractionAType\ContactAType $contact
     */
    private $contact = null;

    /**
     * Operating schedules for the attraction.
     *
     * @var \Recranet\OTA\OperationSchedulesPlusChargeType\OperationScheduleAType[] $operationSchedules
     */
    private $operationSchedules = null;

    /**
     * Multimedia information about the attraction.
     *
     * @var \Recranet\OTA\MultimediaDescriptionsType $multimediaDescriptions
     */
    private $multimediaDescriptions = null;

    /**
     * Information about the location of the attraction.
     *
     * @var \Recranet\OTA\RefPointsType\RefPointAType[] $refPoints
     */
    private $refPoints = null;

    /**
     * Descriptive text that describes the attraction.
     *
     * @var string $descriptiveText
     */
    private $descriptiveText = null;

    /**
     * Gets as attractionCategoryCode
     *
     * The code for the type of attraction in the proximity of the hotel facility. Refer to OpenTravel Code List Attraction Category Code (ACC).
     *
     * @return string
     */
    public function getAttractionCategoryCode()
    {
        return $this->attractionCategoryCode;
    }

    /**
     * Sets a new attractionCategoryCode
     *
     * The code for the type of attraction in the proximity of the hotel facility. Refer to OpenTravel Code List Attraction Category Code (ACC).
     *
     * @param string $attractionCategoryCode
     * @return self
     */
    public function setAttractionCategoryCode($attractionCategoryCode)
    {
        $this->attractionCategoryCode = $attractionCategoryCode;
        return $this;
    }

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
     * Gets as codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @return string
     */
    public function getCodeDetail()
    {
        return $this->codeDetail;
    }

    /**
     * Sets a new codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @param string $codeDetail
     * @return self
     */
    public function setCodeDetail($codeDetail)
    {
        $this->codeDetail = $codeDetail;
        return $this;
    }

    /**
     * Gets as attractionName
     *
     * The name of the local attraction.
     *
     * @return string
     */
    public function getAttractionName()
    {
        return $this->attractionName;
    }

    /**
     * Sets a new attractionName
     *
     * The name of the local attraction.
     *
     * @param string $attractionName
     * @return self
     */
    public function setAttractionName($attractionName)
    {
        $this->attractionName = $attractionName;
        return $this;
    }

    /**
     * Gets as attractionFee
     *
     * A guideline price if there is a fee associated with the attraction.
     *
     * @return float
     */
    public function getAttractionFee()
    {
        return $this->attractionFee;
    }

    /**
     * Sets a new attractionFee
     *
     * A guideline price if there is a fee associated with the attraction.
     *
     * @param float $attractionFee
     * @return self
     */
    public function setAttractionFee($attractionFee)
    {
        $this->attractionFee = $attractionFee;
        return $this;
    }

    /**
     * Gets as courtesyPhone
     *
     * This signifies whether or not a courtesy phone for contacting the hotel is available at the attraction (e.g. often times these are availabe in airports). When true, the phone is available.
     *
     * @return bool
     */
    public function getCourtesyPhone()
    {
        return $this->courtesyPhone;
    }

    /**
     * Sets a new courtesyPhone
     *
     * This signifies whether or not a courtesy phone for contacting the hotel is available at the attraction (e.g. often times these are availabe in airports). When true, the phone is available.
     *
     * @param bool $courtesyPhone
     * @return self
     */
    public function setCourtesyPhone($courtesyPhone)
    {
        $this->courtesyPhone = $courtesyPhone;
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
     * Gets as code
     *
     * Any code used to specify an item, for example, type of traveler, service code, room amenity, etc.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Any code used to specify an item, for example, type of traveler, service code, room amenity, etc.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as codeContext
     *
     * Identifies the source authority for the code.
     *
     * @return string
     */
    public function getCodeContext()
    {
        return $this->codeContext;
    }

    /**
     * Sets a new codeContext
     *
     * Identifies the source authority for the code.
     *
     * @param string $codeContext
     * @return self
     */
    public function setCodeContext($codeContext)
    {
        $this->codeContext = $codeContext;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * Used to define the quantity for an associated element or attribute.
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Used to define the quantity for an associated element or attribute.
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as uRI
     *
     * Identifies the location of the code table.
     *
     * @return string
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * Identifies the location of the code table.
     *
     * @param string $uRI
     * @return self
     */
    public function setURI($uRI)
    {
        $this->uRI = $uRI;
        return $this;
    }

    /**
     * Gets as proximityCode
     *
     * Denotes whether a service is onsite, offsite or information is not available. Refer to OpenTravel Code Table Proximity (PRX).
     *
     * @return string
     */
    public function getProximityCode()
    {
        return $this->proximityCode;
    }

    /**
     * Sets a new proximityCode
     *
     * Denotes whether a service is onsite, offsite or information is not available. Refer to OpenTravel Code Table Proximity (PRX).
     *
     * @param string $proximityCode
     * @return self
     */
    public function setProximityCode($proximityCode)
    {
        $this->proximityCode = $proximityCode;
        return $this;
    }

    /**
     * Gets as iD
     *
     * A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a particular implementation.
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a particular implementation.
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as sort
     *
     * Used to define the display order.
     *
     * @return int
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * Sets a new sort
     *
     * Used to define the display order.
     *
     * @param int $sort
     * @return self
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
        return $this;
    }

    /**
     * Gets as minAgeAppropriateCode
     *
     * Minimum age the attraction is appropriate for. Refer to OpenTravel Code List Age Qualifying Code (AQC).
     *
     * @return string
     */
    public function getMinAgeAppropriateCode()
    {
        return $this->minAgeAppropriateCode;
    }

    /**
     * Sets a new minAgeAppropriateCode
     *
     * Minimum age the attraction is appropriate for. Refer to OpenTravel Code List Age Qualifying Code (AQC).
     *
     * @param string $minAgeAppropriateCode
     * @return self
     */
    public function setMinAgeAppropriateCode($minAgeAppropriateCode)
    {
        $this->minAgeAppropriateCode = $minAgeAppropriateCode;
        return $this;
    }

    /**
     * Gets as applicableStart
     *
     * Start month and day or date for which the attraction (e.g. the start of a season) is available. When a year is not used (i.e. only the month and day) it signifies a recurring season.
     *
     * @return \DateTime
     */
    public function getApplicableStart()
    {
        return $this->applicableStart;
    }

    /**
     * Sets a new applicableStart
     *
     * Start month and day or date for which the attraction (e.g. the start of a season) is available. When a year is not used (i.e. only the month and day) it signifies a recurring season.
     *
     * @param \DateTime $applicableStart
     * @return self
     */
    public function setApplicableStart(\DateTime $applicableStart)
    {
        $this->applicableStart = $applicableStart;
        return $this;
    }

    /**
     * Gets as applicableEnd
     *
     * End month and day or date for which the attraction (e.g. the end of a season) is available. When a year is not used (i.e. only the month and day) it signifies a recurring season.
     *
     * @return \DateTime
     */
    public function getApplicableEnd()
    {
        return $this->applicableEnd;
    }

    /**
     * Sets a new applicableEnd
     *
     * End month and day or date for which the attraction (e.g. the end of a season) is available. When a year is not used (i.e. only the month and day) it signifies a recurring season.
     *
     * @param \DateTime $applicableEnd
     * @return self
     */
    public function setApplicableEnd(\DateTime $applicableEnd)
    {
        $this->applicableEnd = $applicableEnd;
        return $this;
    }

    /**
     * Gets as language
     *
     * Identifies the language in which the attraction information is sent.
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * Identifies the language in which the attraction information is sent.
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as contact
     *
     * Used to pass contact information of a specific attraction.
     *
     * @return \Recranet\OTA\AreaInfoType\AttractionsAType\AttractionAType\ContactAType
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * Used to pass contact information of a specific attraction.
     *
     * @param \Recranet\OTA\AreaInfoType\AttractionsAType\AttractionAType\ContactAType $contact
     * @return self
     */
    public function setContact(?\Recranet\OTA\AreaInfoType\AttractionsAType\AttractionAType\ContactAType $contact = null)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Adds as operationSchedule
     *
     * Operating schedules for the attraction.
     *
     * @return self
     * @param \Recranet\OTA\OperationSchedulesPlusChargeType\OperationScheduleAType $operationSchedule
     */
    public function addToOperationSchedules(\Recranet\OTA\OperationSchedulesPlusChargeType\OperationScheduleAType $operationSchedule)
    {
        $this->operationSchedules[] = $operationSchedule;
        return $this;
    }

    /**
     * isset operationSchedules
     *
     * Operating schedules for the attraction.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOperationSchedules($index)
    {
        return isset($this->operationSchedules[$index]);
    }

    /**
     * unset operationSchedules
     *
     * Operating schedules for the attraction.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOperationSchedules($index)
    {
        unset($this->operationSchedules[$index]);
    }

    /**
     * Gets as operationSchedules
     *
     * Operating schedules for the attraction.
     *
     * @return \Recranet\OTA\OperationSchedulesPlusChargeType\OperationScheduleAType[]
     */
    public function getOperationSchedules()
    {
        return $this->operationSchedules;
    }

    /**
     * Sets a new operationSchedules
     *
     * Operating schedules for the attraction.
     *
     * @param \Recranet\OTA\OperationSchedulesPlusChargeType\OperationScheduleAType[] $operationSchedules
     * @return self
     */
    public function setOperationSchedules(array $operationSchedules = null)
    {
        $this->operationSchedules = $operationSchedules;
        return $this;
    }

    /**
     * Gets as multimediaDescriptions
     *
     * Multimedia information about the attraction.
     *
     * @return \Recranet\OTA\MultimediaDescriptionsType
     */
    public function getMultimediaDescriptions()
    {
        return $this->multimediaDescriptions;
    }

    /**
     * Sets a new multimediaDescriptions
     *
     * Multimedia information about the attraction.
     *
     * @param \Recranet\OTA\MultimediaDescriptionsType $multimediaDescriptions
     * @return self
     */
    public function setMultimediaDescriptions(?\Recranet\OTA\MultimediaDescriptionsType $multimediaDescriptions = null)
    {
        $this->multimediaDescriptions = $multimediaDescriptions;
        return $this;
    }

    /**
     * Adds as refPoint
     *
     * Information about the location of the attraction.
     *
     * @return self
     * @param \Recranet\OTA\RefPointsType\RefPointAType $refPoint
     */
    public function addToRefPoints(\Recranet\OTA\RefPointsType\RefPointAType $refPoint)
    {
        $this->refPoints[] = $refPoint;
        return $this;
    }

    /**
     * isset refPoints
     *
     * Information about the location of the attraction.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRefPoints($index)
    {
        return isset($this->refPoints[$index]);
    }

    /**
     * unset refPoints
     *
     * Information about the location of the attraction.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRefPoints($index)
    {
        unset($this->refPoints[$index]);
    }

    /**
     * Gets as refPoints
     *
     * Information about the location of the attraction.
     *
     * @return \Recranet\OTA\RefPointsType\RefPointAType[]
     */
    public function getRefPoints()
    {
        return $this->refPoints;
    }

    /**
     * Sets a new refPoints
     *
     * Information about the location of the attraction.
     *
     * @param \Recranet\OTA\RefPointsType\RefPointAType[] $refPoints
     * @return self
     */
    public function setRefPoints(array $refPoints = null)
    {
        $this->refPoints = $refPoints;
        return $this;
    }

    /**
     * Gets as descriptiveText
     *
     * Descriptive text that describes the attraction.
     *
     * @return string
     */
    public function getDescriptiveText()
    {
        return $this->descriptiveText;
    }

    /**
     * Sets a new descriptiveText
     *
     * Descriptive text that describes the attraction.
     *
     * @param string $descriptiveText
     * @return self
     */
    public function setDescriptiveText($descriptiveText)
    {
        $this->descriptiveText = $descriptiveText;
        return $this;
    }
}

